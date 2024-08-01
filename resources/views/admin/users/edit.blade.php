@extends('admin.layouts.main-admin')

@section('container-admin')
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                <!-- Error Notifications -->
                @if($errors->any())
                <div class="mb-4 p-4 bg-red-100 text-red-800 rounded-lg">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <!-- Edit User Form -->
                <form action="{{ route('admin.users.update', $user) }}" method="POST">
                    @csrf
                    @method('PUT')

                    <!-- Name Field -->
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" name="name" id="name" class="w-full border rounded-md py-2 px-3" value="{{ old('name', $user->name) }}">
                    </div>

                    <!-- Email Field -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="w-full border rounded-md py-2 px-3" value="{{ old('email', $user->email) }}">
                    </div>

                    <!-- Password Field (optional) -->
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password (optional)</label>
                        <input type="password" name="password" id="password" class="w-full border rounded-md py-2 px-3">
                    </div>

                    <!-- Update Button -->
                    <button type="submit" class="bg-green-500 text-white rounded-md py-2 px-4 hover:bg-green-600 focus:outline-none focus:shadow-outline-gray">
                        Update
                    </button>                    
                </form>
            </div>
        </div>
    </div>
@endsection
