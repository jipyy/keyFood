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
            Log::info('Memulai proses backup manual');

            session()->flash('backup_started', true);

            Log::info('Menjalankan perintah backup:run');
            $output = Artisan::call('backup:run');
            Log::info('Output dari backup:run: ' . $output);

            $backupPath = $this->getLatestBackupFile();

            if ($backupPath) {
                Log::info('File backup ditemukan: ' . $backupPath);
                $fileName = basename($backupPath);
                $headers = [
                    'Content-Type' => 'application/zip',
                ];

                Log::info('Memulai unduhan file backup');
                // return response()->download($backupPath, $fileName, $headers)->deleteFileAfterSend(true);
            } else {
                Log::warning('File backup tidak ditemukan setelah proses selesai');
                return response()->json(['error' => 'File backup tidak ditemukan'], 500);
            }
        } catch (\Exception $e) {
            Log::error('Backup gagal: ' . $e->getMessage());
            Log::error('Stack trace: ' . $e->getTraceAsString());
            return response()->json(['error' => 'Backup gagal dilakukan: ' . $e->getMessage()], 500);
        }
    }

    public function getLatestBackupFile()
    {
        $backupPath = storage_path('app/Laravel/Laravel');
        $files = glob($backupPath . '/*.zip');

        Log::info('Mencari file backup terbaru di: ' . $backupPath);
        Log::info('File yang ditemukan: ' . json_encode($files));

        if (!empty($files)) {
            return end($files);
        }

        return null;
    }


    public function getBackupHistory()
    {
        $backups = Storage::disk('local')->files('Laravel');
        $backupInfo = [];

        foreach ($backups as $backup) {
            $backupInfo[] = [
                'filename' => basename($backup),
                'size' => Storage::disk('local')->size($backup),
                'date' => Storage::disk('local')->lastModified($backup)
            ];
        }

        return array_reverse($backupInfo);
    }

    public function deleteBackup($filename)
    {
        if (Storage::disk('local')->delete('Laravel/' . $filename)) {
            return redirect()->back()->with('success', 'Backup berhasil dihapus');
        }
        return redirect()->back()->with('error', 'Gagal menghapus backup');
    }


    public function downloadBackup($filename)
    {
        $path = storage_path('app/Laravel/Laravel/' . $filename);

        if (file_exists($path)) {
            return response()->download($path);
        }

        return back()->with('error', 'File not found.');
    }
}
