<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('../img/logo.png') }}" alt="logo">
            </span>

            <div class="text-header-text hidden">
                <span class="name">KeyFood</span>
                <span class="email">Keyfood@gmail.com</span>
            </div>
            <div class="text-header-text">
                <span class="name"></span>
                <span class="email">
                    <a href="/login">
                        <button
                            class="relative inline-flex items-center justify-center p-0.5 mb-2 me-2 overflow-hidden text-sm font-medium text-gray-900 rounded-lg group bg-gradient-to-br from-green-400 to-blue-600 group-hover:from-green-400 group-hover:to-blue-600 hover:text-white dark:text-white focus:ring-4 focus:outline-none focus:ring-green-200 dark:focus:ring-green-800">
                            <span
                                class="relative px-5 py-2.5 transition-all ease-in duration-75 bg-white dark:bg-gray-900 rounded-md group-hover:bg-opacity-0">
                                Login
                            </span>
                        </button>
                    </a>
                </span>
            </div>
        </div>

        <i class="bx bx-chevron-left toggle"></i>
    </header>
    <div class="menu-bar">
        <div class="menu">


            <li class="search-box">
                <i class="bx bx-search icon"></i>
                <input type="search" placeholder="Search..">
            </li>


            <ul class="menu-links">
                <li class="nav-link active">
                    <a href="">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="text nav-text">Home</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="">
                        <i class="bx bx-bar-chart-alt-2 icon"></i>
                        <span class="text nav-text">Product</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="">
                        <i class='bx bx-store icon'></i>
                        <span class="text nav-text">Stores</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="text nav-text">Categories</span>
                    </a>
                </li>
                <li class="nav-link">
                    <a href="">
                        <i class="bx bx-home-alt icon"></i>
                        <span class="text nav-text">Notifications</span>
                    </a>
                </li>
            </ul>
        </div>

        <div class="bottom-content">
            <li class="">
                <form method="POST" action="{{ route('logout') }}" style="display: flex">
                    @csrf
                    <a href="/logout"
                        onclick="event.preventDefault();
                            this.closest('form').submit();">
                        <i class="bx bx-log-out icon"></i>
                        @csrf
                        <span class="text nav-text">Logout</span>
                    </a>
            </li>
            </form>

            <li class="mode">
                <div class="moon-sun">
                    <i class="bx bx-moon icon moon"></i>
                    <i class="bx bx-sun icon sun"></i>
                </div>
                <span class="mode-text text">Dark Mode</span>
                <div class="toggle-switch">
                    <span class="switch"></span>
                </div>
            </li>
        </div>
    </div>
</nav>
