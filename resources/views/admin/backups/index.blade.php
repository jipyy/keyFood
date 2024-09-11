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

{{-- @extends('admin.layouts.main-admin')
@section('container-admin')
    <main class="h-screen overflow-y-auto py-4">
        <div class="container px-6 mx-auto grid overflow-y-hidden py-4 mb-8">

            <h2 class="my-6 text-2xl font-semibold text-gray-700 dark:text-gray-200">
                Backup
            </h2>

            <!-- Notifications -->
            @if (session('success'))
                <div class="mb-4 p-4 bg-green-100 text-green-800 rounded-lg">
                    {{ session('success') }}
                </div>
            @endif

            @if ($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-800 rounded-lg">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <!-- Add Category Button -->
            <div class="mb-4 flex justify-start">
                <a href=""
                    class="px-4 py-2 bg-blue-500 text-white rounded-lg dark:bg-gray-700 dark:text-white" id="backup-btn">
                    Backup Now
                </a>
            </div>
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
    </main>
@endsection --}}
