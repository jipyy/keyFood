<div x-data="{ isOpen: false }" @click.away="isOpen = false" class="relative inline-block" id="dropdown">
    <!-- Dropdown Button -->
    <button
        class="fixed-button flex h-12 w-12 items-center justify-center rounded-lg bg-slate-900 text-slate-100 ring-slate-100 transition hover:shadow-md hover:ring-2 overflow-hidden"
        @click="isOpen = !isOpen">
        <img class="w-full object-cover" src="{{ asset(Auth::user()->img ?? './img/guest.png') }}" alt="Profile">
    </button>

    <!-- Dropdown Menu -->
    <div x-show="isOpen" id="opened"
        class="absolute right-0 mt-3 flex w-60 flex-col gap-3 rounded-xl bg-slate-900 p-4 text-slate-100 shadow-lg">

        @if (Auth::check())
            <div class="dropdown-profile">
                <div class="flex gap-3 items-center">
                    <div
                        class="flex items-center justify-center rounded-lg h-12 w-12 overflow-hidden border-2 border-slate-600">
                        <img class="w-full object-cover" src="{{ asset(Auth::user()->img ?? './img/guest.png') }}"
                            alt="Profile">
                    </div>
                    <div style="width: 100%">
                        <div class="flex gap-1 text-sm font-semibold">
                            <span>
                                {{ strlen(Auth::user()->name) > 16 ? substr(Auth::user()->name, 0, 16) . '...' : Auth::user()->name }}
                            </span>
                            <span class="text-sky-400" style="color: aqua;">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="h-5 w-5">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 01-1.043 3.296 3.745 3.745 0 01-3.296 1.043A3.745 3.745 0 0112 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 01-3.296-1.043 3.745 3.745 0 01-1.043-3.296A3.745 3.745 0 013 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 011.043-3.296 3.746 3.746 0 013.296-1.043A3.746 3.746 0 0112 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 013.296 1.043 3.746 3.746 0 011.043 3.296A3.745 3.745 0 0121 12z">
                                    </path>
                                </svg>
                            </span>
                        </div>
                        <div class="text-xs text-slate-400">
                            {{ strlen(Auth::user()->email) > 16 ? substr(Auth::user()->email, 0, 16) . '...' : Auth::user()->email }}
                        </div>
                    </div>
                </div>
                <div class="border-t border-slate-500/30"></div>

                <div class="flex flex-col">
                    <button onclick="openProfile()"
                        class="flex items-center gap-3 rounded-md py-2 px-3 hover:bg-slate-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Profile</span>
                    </button>
                    <a href="#" class="flex items-center gap-3 rounded-md py-2 px-3 hover:bg-slate-800">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-5 w-5">
                            <path fill-rule="evenodd"
                                d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm11.378-3.917c-.89-.777-2.366-.777-3.255 0a.75.75 0 01-.988-1.129c1.454-1.272 3.776-1.272 5.23 0 1.513 1.324 1.513 3.518 0 4.842a3.75 3.75 0 01-.837.552c-.676.328-1.028.774-1.028 1.152v.75a.75.75 0 01-1.5 0v-.75c0-1.279 1.06-2.107 1.875-2.502.182-.088.351-.199.503-.331.83-.727.83-1.857 0-2.584zM12 18a.75.75 0 100-1.5.75.75 0 000 1.5z"
                                clip-rule="evenodd"></path>
                        </svg>
                        <span>Help Center</span>
                    </a>
                </div>
                <form method="POST" action="{{ route('logout') }}" style="display: flex">
                    @csrf
                    <a href="/logout" onclick="event.preventDefault();
            this.closest('form').submit();">
                        <button
                            class="flex justify-center gap-3 rounded-md bg-red-600 py-2 px-3 font-semibold hover:bg-red-500 focus:ring-2 focus:ring-red-400">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                                class="h-6 w-6">
                                <path fill-rule="evenodd"
                                    d="M7.5 3.75A1.5 1.5 0 006 5.25v13.5a1.5 1.5 0 001.5 1.5h6a1.5 1.5 0 001.5-1.5V15a.75.75 0 011.5 0v3.75a3 3 0 01-3 3h-6a3 3 0 01-3-3V5.25a3 3 0 013-3h6a3 3 0 013 3V9A.75.75 0 0115 9V5.25a1.5 1.5 0 00-1.5-1.5h-6zm10.72 4.72a.75.75 0 011.06 0l3 3a.75.75 0 010 1.06l-3 3a.75.75 0 11-1.06-1.06l1.72-1.72H9a.75.75 0 010-1.5h10.94l-1.72-1.72a.75.75 0 010-1.06z"
                                    clip-rule="evenodd"></path>
                            </svg>
                            <span>Logout</span>
                        </button>
                    </a>
                </form>
            </div>
        @else
            <p>You Haven't Login,</p>
            <p>Please Login First</p>
            <a href="/log-reg">
                <button
                    class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                    <span
                        class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                        Login
                    </span>
                </button>
            </a>
        @endif
    </div>
</div>

<div class="container-profile" id="profileCard">
    <div class="profile-card">
        <button onclick="hideProfile()">
            <i class="fa-solid fa-arrow-left back"></i>
        </button>
        <div class="profile-pic">
            <img src="{{ asset(Auth::user()->img ?? '../img/guest.png') }}" alt="user avatar">
        </div>
        <div class="profile-details">
            <div class="intro">
                @if (Auth::check())
                    <h2>{{ Auth::user()->name }}</h2>
                    @if (Auth::user()->hasRole('admin'))
                        <h4>Admin</h4>
                    @elseif (Auth::user()->hasRole('seller'))
                        <h4>Seller</h4>
                    @else
                        <h4>Buyer</h4>
                    @endif
                @endif
                <div class="social">
                    <a href="#"><i class="fab fa-facebook" style="color:var(--blue)"></i></a>
                    <a href="#"><i class="fab fa-twitter" style="color:var(--skyblue)"></i></a>
                    <a href="#"><i class="fab fa-dribbble" style="color:var(--dark-pink)"></i></a>
                    <a href="#"><i class="fab fa-linkedin" style="color:var(--light-blue)"></i></a>
                </div>
            </div>
            <div class="contact-info">
                <div class="row">
                    <div class="icon">
                        <i class="fa fa-phone" style="color:var(--dark-magenta)"></i>
                    </div>
                    <div class="content">
                        <span>Phone</span>
                        <h5>{{ Auth::user()->phone ?? 'Guest' }}</h5> <!-- Assuming there is a phone attribute -->
                    </div>
                </div>
                <div class="row">
                    <div class="icon">
                        <i class="fa fa-envelope-open" style="color:var(--light-green)"></i>
                    </div>
                    <div class="content">
                        <span>Email</span>
                        <h5>{{ Auth::user()->email ?? 'Guest' }}</h5>
                    </div>
                </div>
                <div class="row">
                    <div class="icon">
                        <i class="fa fa-map-marker" style="color:var(--light-purple)"></i>
                    </div>
                    <div class="content">
                        <span>Location</span>
                        <h5>{{ Auth::user()->location ?? 'Guest' }}</h5> <!-- Assuming there is a location attribute -->
                    </div>
                </div>
            </div>
            <a href="{{ route('profile.edit') }}">
                <button class="download-btn"><i class="fa fa-edit"></i> Edit Profile</button>
            </a>
            <button type="button" data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                class="text-white mt-3 bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-800">
                Delete Account
            </button>
            <div id="popup-modal" tabindex="-1"
                class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 justify-center items-center w-full md:inset-0 h-[calc(100%-1rem)] max-h-full">
                <div class="relative p-4 w-full max-w-md max-h-full">
                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                        <button type="button"
                            class="absolute top-3 end-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-hide="popup-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                fill="none" viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                            <span class="sr-only">Close modal</span>
                        </button>
                        <div class="p-4 md:p-5 text-center">
                            <svg class="mx-auto mb-4 text-gray-400 w-12 h-12 dark:text-gray-200" aria-hidden="true"
                                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="M10 11V6m0 8h.01M19 10a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                            </svg>
                            <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want
                                to delete your account?</h3>
                            <form action="{{ route('profile.destroy') }}" method="POST" class="mt-6">
                                @csrf
                                @method('DELETE')
                                <button data-modal-hide="popup-modal" type="submit"
                                    class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center">
                                    Yes, I'm sure
                                </button>
                            </form>
                            <button data-modal-hide="popup-modal" type="button"
                                class="py-2.5 px-5 ms-3 text-sm font-medium text-gray-900 focus:outline-none bg-white rounded-lg border border-gray-200 hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:ring-gray-100 dark:focus:ring-gray-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700">No,
                                cancel</button>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
