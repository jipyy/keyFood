@extends('admin.layouts.main-admin')
@section('container-admin')
    <div class="container mt-5">
        <h1>Backup Manual</h1>
        <button id="backup-btn" class="px-4 py-2 bg-blue-500 text-white rounded-lg dark:bg-gray-700 dark:text-white">Backup
            Sekarang</button>
    </div>
    <center>
        <h1><B>HALAMAN INI REFRESH OTOMATIS INTERVAL 5 DETIK!</B></h1>
    </center>
    <h2 class="mt-8">Riwayat Backup</h2>
    <div class="overflow-x-auto">
        <table class="w-full mt-4 table-auto text-center">
            <thead>
                <tr>
                    <th class="px-4 py-2">Nama File</th>
                    <th class="px-4 py-2">Ukuran</th>
                    <th class="px-4 py-2">Tanggal</th>
                    <th class="px-4 py-2">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($backups as $backup)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $backup['filename'] }}</td>
                        <td class="px-4 py-2">{{ number_format($backup['size'] / 1048576, 2) }} MB</td>
                        <td class="px-4 py-2">{{ date('Y-m-d H:i:s', $backup['date']) }}</td>
                        <td class="px-4 py-2 text-sm">
                            <div class="flex justify-center gap-2">
                                <a href="{{ route('admin.backups.download', $backup['filename']) }}"
                                    class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray">
                                    <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M3 12a1 1 0 011-1h2V6a1 1 0 112 0v5h2V6a1 1 0 112 0v5h2a1 1 0 110 2H4a1 1 0 01-1-1zm12.707 3.293l-3-3a1 1 0 10-1.414 1.414L13 14.586V3a1 1 0 112 0v11.586l1.707-1.707a1 1 0 001.414 1.414l-3 3a1 1 0 01-1.414 0z"></path>
                                    </svg>
                                    
                                    Download
                                </a>
                                <form method="POST" action="{{ route('admin.backups.delete', $backup['filename']) }}"
                                    onclick="return confirm('Apakah Anda yakin ingin menghapus backup ini?')">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit"
                                        class="flex items-center justify-between px-2 py-2 text-sm font-medium leading-5 text-purple-600 rounded-lg dark:text-gray-400 focus:outline-none focus:shadow-outline-gray">
                                        <svg class="w-5 h-5" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M9 2a1 1 0 00-.894.553L7.382 4H4a1 1 0 000 2v10a2 2 0 002 2h8a2 2 0 002-2V6a1 1 0 100-2h-3.382l-.724-1.447A1 1 0 0011 2H9zM7 8a1 1 0 012 0v6a1 1 0 11-2 0V8zm5-1a1 1 0 00-1 1v6a1 1 0 102 0V8a1 1 0 00-1-1z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        Delete
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    {{-- <script>
        $('#backup-btn').click(function() {
                Swal.fire({
                title: 'Proses Backup Dimulai',
                text: 'Mohon tunggu, proses backup sedang berlangsung...',
                icon: 'info',
                allowOutsideClick: false,
                showConfirmButton: false
            });
            $.ajax({
                url: '{{ route('admin.backups.manual') }}',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Backup Berhasil',
                        text: response.success
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Backup Gagal',
                        text: xhr.responseJSON.error || 'Terjadi kesalahan.'
                    });
                }
            });
        });
    </script> --}}

    <script>
        $('#backup-btn').click(function() {
            Swal.fire({
                title: 'Proses Backup Dimulai',
                text: 'Mohon tunggu, proses backup sedang berlangsung...',
                icon: 'info',
                allowOutsideClick: false,
                showConfirmButton: false
            });

            $.ajax({
                url: '{{ route('admin.backups.manual') }}',
                method: 'POST',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                
                xhrFields: {
                    responseType: 'blob'
                },
                success: function(response, status, xhr) {
                    Swal.close();

                    var filename = "";
                    var disposition = xhr.getResponseHeader('Content-Disposition');
                    if (disposition && disposition.indexOf('attachment') !== -1) {
                        var filenameRegex = /filename[^;=\n]*=((['"]).*?\2|[^;\n]*)/;
                        var matches = filenameRegex.exec(disposition);
                        if (matches != null && matches[1]) filename = matches[1].replace(/['"]/g, '');
                    }

                    // Cek jika response adalah blob dan bukan JSON error
                    if (response instanceof Blob && response.type !== 'application/json') {
                        var a = document.createElement('a');
                        var url = window.URL.createObjectURL(response);
                        a.href = url;
                        a.download = filename;
                        document.body.append(a);
                        a.click();
                        window.URL.revokeObjectURL(url);
                        a.remove();

                        Swal.fire({
                            icon: 'success',
                            title: 'Backup Berhasil',
                            text: 'Backup berhasil dilakukan dan diunduh!'
                        }).then(() => {
                            location.reload();
                        });
                    } else {
                        // Jika response adalah JSON error
                        response.text().then(function(text) {
                            var error = JSON.parse(text);
                            Swal.fire({
                                icon: 'error',
                                title: 'Backup Gagal',
                                text: error.error ||
                                    'Terjadi kesalahan yang tidak diketahui.'
                            });
                        });
                    }
                },
                error: function(xhr) {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'Backup Gagal',
                        text: 'Terjadi kesalahan saat melakukan backup. Silakan coba lagi nanti.'
                    });
                }
            });
        });

        // Set interval untuk refresh halaman setiap 5 detik
        let refreshInterval;

        function startAutoRefresh() {
            // Set interval untuk refresh halaman setiap 3 detik (3000 ms)
            refreshInterval = setInterval(function() {
                window.location.reload();
            }, 300000); // 3000 ms = 3 detik
        }

        function stopAutoRefresh() {
            if (refreshInterval) {
                clearInterval(refreshInterval);
            }
        }

        // Mulai auto-refresh ketika halaman dimuat
        startAutoRefresh();

        // Cek status visibility halaman

        document.addEventListener('DOMContentLoaded', function() {
            if (document.visibilityState === 'visible') {
                // Halaman terlihat, mulai refresh
                startAutoRefresh();
            } else {
                // Halaman tidak terlihat, berhenti refresh
                stopAutoRefresh();
            }
        });

        // Cek status saat jendela difokuskan atau tidak
        window.addEventListener('focus', function() {
            if (document.visibilityState === 'visible') {
                startAutoRefresh();
            }
        });

        window.addEventListener('blur', function() {
            stopAutoRefresh();
        });
    </script>
@endsection
