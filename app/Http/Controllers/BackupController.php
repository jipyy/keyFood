<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Log;


class BackupController extends Controller
{
    public function index()
    {
        return view('admin.backups.index');
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

    public function manualBackup()
    {
        try {
            // Backup database
            Artisan::call('backup:run --only-db');

            // Backup files
            Artisan::call('backup:run --only-files');

            return response()->json(['success' => 'Backup berhasil dilakukan!']);
        } catch (\Exception $e) {
            Log::error('Backup gagal: ' . $e->getMessage());
            return response()->json(['error' => 'Backup gagal dilakukan!'], 500);
        }
    }
}
