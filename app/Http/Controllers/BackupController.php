<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Storage;

class BackupController extends Controller
{
    // public function index()
    // {
    //     return view('admin.backups.index');
    // }

    public function index()
    {
        $backups = $this->getBackupHistory();
        return view('admin.backups.index', compact('backups'));
    }




    public function createBackup()
    {
        // Tentukan lokasi file backup
        $backupFilePath = storage_path('app/public/backup/backup.sql');

        // Buat perintah mysqldump
        $process = new Process([
            'mysqldump',
            '--host=' . env('DB_HOST'),
            '--user=' . env('DB_USERNAME'),
            '--password=' . env('DB_PASSWORD'),
            env('DB_DATABASE'),
            '--result-file=' . $backupFilePath // Define where to save the backup file
        ]);

        // Jalankan perintah
        $process->setTimeout(3600); // set timeout jika backup besar
        $process->run();

        // Periksa apakah perintah berhasil
        if (!$process->isSuccessful()) {
            throw new ProcessFailedException($process);
        }

        // Kembalikan file backup sebagai download
        return response()->download($backupFilePath);
    }

    // public function manualBackup()
    // {
    //     try {
    //         // Backup database
    //         Artisan::call('backup:run --only-db');

    //         // Backup files
    //         Artisan::call('backup:run --only-files');

    //         return response()->json(['success' => 'Backup berhasil dilakukan!']);
    //     } catch (\Exception $e) {
    //         Log::error('Backup gagal: ' . $e->getMessage());
    //         return response()->json(['error' => 'Backup gagal dilakukan!'], 500);
    //     }
    // }

    public function manualBackup()
    {
        try {
            // Menampilkan pesan "Mohon tunggu"
            session()->flash('backup_started', true);

            // Lakukan backup lengkap (database dan files)
            Artisan::call('backup:run'); // Ini akan membackup seluruh project, termasuk database dan files

            // Mendapatkan file backup terbaru
            $backupPath = $this->getLatestBackupFile();

            if ($backupPath) {
                // Menyiapkan file untuk diunduh
                $fileName = basename($backupPath);
                $headers = [
                    'Content-Type' => 'application/zip',
                ];

                // Memulai unduhan
                return response()->download($backupPath, $fileName, $headers)->deleteFileAfterSend(true);
            }

            return response()->json(['success' => 'Backup berhasil dilakukan!']);
        } catch (\Exception $e) {
            Log::error('Backup gagal: ' . $e->getMessage());
            return response()->json(['error' => 'Backup gagal dilakukan!'], 500);
        }
    }

    private function getLatestBackupFile()
    {
        $backupPath = storage_path('app/backup-temp');
        $files = glob($backupPath . '/*.zip');

        if (!empty($files)) {
            return end($files);
        }

        return null;
    }

    // public function getBackupHistory()
    // {
    //     $backups = Storage::disk('local')->files('Laravel');
    //     return array_reverse($backups); // Yang terbaru dulu
    // }

    public function getBackupHistory()
    {
        $backups = Storage::disk('backup')->files('Laravel');
        $backupInfo = [];

        foreach ($backups as $backup) {
            $backupInfo[] = [
                'filename' => basename($backup),
                'size' => Storage::disk('backup')->size($backup),
                'date' => Storage::disk('backup')->lastModified($backup)
            ];
        }

        return array_reverse($backupInfo);
    }

    public function deleteBackup($filename)
    {
        if (Storage::disk('backup')->delete('Laravel/' . $filename)) {
            return redirect()->back()->with('success', 'Backup berhasil dihapus');
        }
        return redirect()->back()->with('error', 'Gagal menghapus backup');
    }


    public function downloadBackup($filename)
    {
        $path = storage_path('app/Laravel/' . $filename);

        if (file_exists($path)) {
            return response()->download($path);
        }

        return redirect()->back()->with('error', 'File tidak ditemukan.');
    }
}
