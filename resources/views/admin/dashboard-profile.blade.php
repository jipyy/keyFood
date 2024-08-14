@extends('admin.layouts.main-admin')
@section('container-admin')
    <main class="h-screen pb-16 overflow-y-auto">
        <div class="container grid px-6 mx-auto py-4 mb-8">
            <div class="m-10 w-[30rem] max-h-8">
                <div class="rounded-lg border bg-white px-4 pt-8 pb-10 shadow-lg">
                    <div class="relative mx-auto w-24 rounded-full">
                        <span
                            class="absolute right-0 m-3 h-3 w-3 rounded-full bg-green-500 ring-2 ring-green-300 ring-offset-2"></span>
                            <img class="mx-auto h-20 w-20 rounded-full"
                            src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2.25&w=256&h=256&q=80"
                            alt="" />
                       
                    </div>
                    
                    <h1 class="my-1 text-center text-xl font-bold leading-8 text-gray-900">Michael Simbal</h1>
                    <div class="flex justify-center">
                        <span class="inline-flex items-center text-center rounded-md bg-gray-100 px-2 py-1 text-sm font-medium text-gray-600 ring-1 ring-inset ring-gray-500/10">Admin</span>
                    </div>
                    <h3 class="font-lg text-semibold text-center leading-6 text-gray-600">Marketing Exec. at Denva Corp</h3>
                    <p class="text-center text-sm leading-6 text-gray-500 hover:text-gray-600">Lorem ipsum dolor sit amet
                        consectetur, adipisicing elit. Architecto, placeat!</p>
                    <ul class="mt-4 mb-4 divide-y rounded-md w-24">
                        <li class="flex items-center justify-center py-3 text-sm">
                            <a href="/edit-profile">
                            <button type="button" class="text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-5 w-32 h-12">
                                Edit Profile
                            </button> 
                        </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </main>
@endsection
