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
    <table class="w-full mt-4">
        <thead>
            <tr>
                <th>Nama File</th>
                <th>Ukuran</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($backups as $backup)
                <tr>
                    <td>{{ $backup['filename'] }}</td>
                    <td>{{ number_format($backup['size'] / 1048576, 2) }} MB</td>
                    <td>{{ date('Y-m-d H:i:s', $backup['date']) }}</td>
                    <td>
                        <a href="{{ route('admin.backups.download', $backup['filename']) }}">
                            <button class="bg-blue-600 text-white px-4 py-2 rounded-lg mr-2">
                                download
                            </button>
                        </a>
                        {{-- <a href="{{ route('admin.backups.download', $filename) }}">Download Backup</a> --}}

                        <form action="{{ route('admin.backups.delete', $backup['filename']) }}" method="POST" class="inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="bg-red-600 text-white px-4 py-2 rounded-lg"
                                onclick="return confirm('Apakah Anda yakin ingin menghapus backup ini?')">
                                Hapus
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{-- <script>
        $('#backup-btn').click(function() {
            //     Swal.fire({
            //     title: 'Proses Backup Dimulai',
            //     text: 'Mohon tunggu, proses backup sedang berlangsung...',
            //     icon: 'info',
            //     allowOutsideClick: false,
            //     showConfirmButton: false
            // });
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
                        location
                            .reload(); // Menyegarkan halaman untuk memperbarui riwayat backup
                    });
                },
                error: function(xhr) {
                    Swal.close();
                    Swal.fire({
                        icon: 'error',
                        title: 'Backup Gagal',
                        text: xhr.responseJSON ? xhr.responseJSON.error : 'Terjadi kesalahan.'
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
            }, 3000); // 3000 ms = 3 detik
        }

        function stopAutoRefresh() {
            if (refreshInterval) {
                clearInterval(refreshInterval);
            }
        }

        // Mulai auto-refresh ketika halaman dimuat
        startAutoRefresh();

        // Cek status visibility halaman
        document.addEventListener('visibilitychange', function() {
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
