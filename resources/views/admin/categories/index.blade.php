<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Categories') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(session('success'))
            <div class="alert alert-success mb-4">
                {{ session('success') }}
            </div>
            @endif

            <div class="bg-white overflow-hidden pl-10 shadow-sm sm:rounded-lg flex flex-col gap-y-5">
                @if($errors->any())
                <div class="alert-alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                        <li class="py-5 bg-red-500 text-white font-bold">
                            {{ $error }}
                        </li>
                        @endforeach
                    </ul>
                </div>
                @endif

                <a href="{{ route('admin.categories.create') }}" class="border rounded-xl w-fit py-3 px-5 bg-indigo-950 text-white">
                    Add New Category
                </a>

                @forelse($categories as $category)
                <div class="item-category flex flex-row justify-between items-center">
                    <img src="{{ asset($category->icon) }}" class="h-[100px] w-auto" alt="{{ $category->name }}">
                    <div>
                        <h3>{{ $category->name }}</h3>
                        <p>{{ $category->slug }}</p>
                    </div>
                    <div class="flex flex-row gap-x-3">
                        <a href="{{ route('admin.categories.edit', $category) }}" class="py-3 px-5 border rounded-xl bg-indigo-500 text-white">
                            Edit
                        </a>
                        <form method="POST" action="{{ route('admin.categories.destroy', $category) }}" onsubmit="return confirmDelete()">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="py-3 px-5 mr-5 border rounded-xl bg-red-500 text-white">
                                Delete
                            </button>
                        </form>
                    </div>
                </div>
                @empty
                <p>No categories available</p>
                @endforelse
            </div>
        </div>
    </div>

    <script>
        function confirmDelete() {
            return confirm('Are you sure you want to delete this category? This action cannot be undone.');
        }
    </script>
</x-app-layout>
