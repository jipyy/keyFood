@extends('admin.layouts.main-admin')

@section('container-admin')

<div class="py-12">
    <div class="max-w-xl mx-auto sm:px-6 lg:px-8">
        <!-- Form Title -->
        <h2 class="text-2xl font-semibold text-gray-800 mb-6 text-center">Create New User</h2>

        <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
            <!-- Error Notifications -->
            @if($errors->any())
            <div class="mb-4 p-4 bg-red-100 text-red-800 rounded-lg">
                <ul class="list-disc list-inside">
                    @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
            @endif

            <!-- Create User Form -->
            <form action="{{ route('admin.users.store') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Name Field -->
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                    <input type="text" name="name" id="name" placeholder="write a name..." class="mt-1 block w-full sm:w-10/12 md:w-9/12 lg:w-8/12 mx-auto border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm " value="{{ old('name') }}">
                </div>

                <!-- Email Field -->
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email" placeholder="write an email..." class="mt-1 block w-full sm:w-10/12 md:w-9/12 lg:w-8/12 mx-auto border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" value="{{ old('email') }}">
                </div>

                <!-- Password Field -->
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="password" placeholder="**********" class="mt-1 block w-full sm:w-10/12 md:w-9/12 lg:w-8/12 mx-auto border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
                </div>

                <!-- Submit Button -->
                <div class="text-center">
                <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-[#4CAF50] hover:bg-[#45A049] focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#45A049]">
                Create User
                </button>
            </div>

            </form>
        </div>
    </div>
</div>

@endsection
