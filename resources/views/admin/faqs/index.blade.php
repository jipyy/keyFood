@extends('admin.layouts.main-admin')
@section('container-admin')
    <main class="h-screen overflow-y-auto">
        <div class="container px-6 mx-auto py-4 mb-8">
            <div class="container mx-auto px-4 py-6">
                <h1 class="text-2xl font-bold mb-6">FAQs</h1>
                <a href="{{ route('admin.faqs.create') }}"
                    class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mb-4 inline-block">Create New
                    FAQ</a>
                <div class="overflow-x-auto">
                    <table class="min-w-full bg-white border border-gray-300">
                        <thead>
                            <tr>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Title
                                </th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Content
                                </th>
                                <th
                                    class="px-6 py-3 border-b-2 border-gray-300 bg-gray-200 text-left text-xs font-semibold text-gray-700 uppercase tracking-wider">
                                    Actions
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($faqs as $faq)
                                <tr>
                                    <td class="px-6 py-4 border-b border-gray-300">{{ $faq->title }}</td>
                                    <td
                                        class="px-6 py-4 border-b border-gray-300">
                                        <p class="whitespace-pre-line">
                                            {{ $faq->content }}
                                        </p>
                                    </td>
                                    <td class="px-6 py-4 border-b border-gray-300">
                                        <a href="{{ route('admin.faqs.edit', $faq->id) }}"
                                            class="bg-yellow-500 hover:bg-yellow-700 text-gray-900 font-bold py-1 px-3 rounded">Edit</a>
                                        <form action="{{ route('faqs.destroy', $faq->id) }}" method="POST"
                                            class="inline-block">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit"
                                                class="bg-red-500 hover:bg-red-700 text-gray-900 font-bold py-1 px-3 rounded">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </main>
@endsection
