<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Product') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-3xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm p-10 sm:rounded-lg">
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

                <form method="POST" action="{{ route('seller.products.store') }}" enctype="multipart/form-data">
                    @csrf

                    <h1 class="text-indigo-950 text-3xl font-bold">Add New Product</h1>

                    <div class="mt-4">
                        <x-input-label for="photo" :value="('photo')" />
                        <x-text-input id="photo" class="block mt-1 w-full" type="file" name="photo" required />
                        <x-input-error :messages="$errors->get('photo')" class="mt-2" />
                    </div>


                    <!-- Name -->
                    <div class="mt-4">
                        <x-input-label for="name" :value="('Name')" />
                        <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                        <x-input-error :messages="$errors->get('name')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="price" :value="('Price')" />
                        <x-text-input id="price" class="block mt-1 w-full" type="number" name="price" :value="old('price')" required autofocus autocomplete="price" />
                        <x-input-error :messages="$errors->get('price')" class="mt-2" />
                    </div>

                     
                    <div class="mt-4">
                        <x-input-label for="quantity" :value="('quantity')" />
                        <x-text-input id="quantity" class="block mt-1 w-full" type="number" name="quantity" :value="old('quantity')" required autofocus autocomplete="quantity" />
                        <x-input-error :messages="$errors->get('quantity')" class="mt-2" />
                    </div>


                    <div class="mt-4">
                        <x-input-label for="category" :value="('Category')" />
                        <select name="category_id" id="category" class="w-full py-3 pl-5 border">
                            <option value="">Select Category</option>
                            @forelse($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @empty
                            <option value="">No Categories Available</option>
                            @endforelse
                        </select>
                        <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                    </div>

                    <div class="mt-4">
                        <x-input-label for="store_id" :value="('store_id')" />
                        <select name="store_id" id="store_id" class="w-full py-3 pl-5 border">
                            <option value="">Select Toko</option>
                            @forelse($stores as $store)
                            <option value="{{ $store->id_toko }}">{{ $store->nama_toko }}</option>
                            @empty
                            <option value="">No Store Available</option>
                            @endforelse
                        </select>
                        <x-input-error :messages="$errors->get('store_id')" class="mt-2" />
                    </div>


                    <div class="mt-4">
                        <x-input-label for="slug" :value="('slug')" />
                        <textarea name="slug" id="slug" class="w-full py-3 pl-5 border">{{ old('slug') }}</textarea>
                        <x-input-error :messages="$errors->get('slug')" class="mt-2" />
                    </div>

                    <div class="flex items-center justify-end mt-4">
                        <x-primary-button class="ms-4">
                            {{ __('Add Product') }}
                        </x-primary-button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
