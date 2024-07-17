<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Create User') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-10">
                @if($errors->any())
                <div class="alert-alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="py-2 bg-red-500 text-white font-bold">
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif
                <form action="{{ route('admin.users.store') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-gray-700">Name</label>
                        <input type="text" name="name" id="name" class="w-full border rounded-md py-2 px-3" value="{{ old('name') }}">
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" name="email" id="email" class="w-full border rounded-md py-2 px-3" value="{{ old('email') }}">
                    </div>
                    <div class="mb-4">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" name="password" id="password" class="w-full border rounded-md py-2 px-3">
                    </div>
                    <button type="submit" class="bg-indigo-500 text-white rounded-md py-2 px-4">Create</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
