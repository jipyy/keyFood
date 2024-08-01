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

            <!-- Create User Form -->
            <form action="{{ route('admin.users.store') }}" method="POST">
                @csrf

                <!-- Name Field -->
                <div class="mb-4">
                    <label for="name" class="block text-gray-700">Name</label>
                    <input type="text" name="name" id="name" class="w-full border rounded-md py-2 px-3" value="{{ old('name') }}">
                </div>

                <!-- Email Field -->
                <div class="mb-4">
                    <label for="email" class="block text-gray-700">Email</label>
                    <input type="email" name="email" id="email" class="w-full border rounded-md py-2 px-3" value="{{ old('email') }}">
                </div>

                <!-- Password Field -->
                <div class="mb-4">
                    <label for="password" class="block text-gray-700">Password</label>
                    <input type="password" name="password" id="password" class="w-full border rounded-md py-2 px-3">
                </div>

                <!-- Submit Button -->
                <button type="submit" class="bg-indigo-500 text-white rounded-md py-2 px-4">
                    Create
                </button>
            </form>
        </div>
    </div>
</div>

@endsection
