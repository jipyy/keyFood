@extends('admin.layouts.main-admin')
@section('container-admin')
    <div class="container mt-5">
        <h1>Backup Manual</h1>
        <button id="backup-btn" class="px-4 py-2 bg-blue-500 text-white rounded-lg dark:bg-gray-700 dark:text-white">Backup Sekarang</button>
    </div>
    <script>
        $('#backup-btn').click(function() {
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
    </script>
@endsection