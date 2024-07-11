
<nav class="sidebar close">
    <header>
        <div class="image-text">
            <span class="image">
                <img src="{{ asset('../img/logo.png') }}" alt="logo">
            </span>

            <div class="text-header-text">
                <span class="name">KeyFood</span>
                <span class="email">Keyfood@gmail.com</span>
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
                <a href="{{ route('logout') }}">
                    <i class="bx bx-log-out icon"></i>
                    @csrf
                    <span class="text nav-text">Logout</span>
                </a>
            </li>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-dropdown-link :href="route('logout')"
                        onclick="event.preventDefault();
                                    this.closest('form').submit();">
                    {{ __('Log Out') }}
                </x-dropdown-link>
            </form>

            <li class="mode">
               <div class="moon-sun">
                <i class="bx bx-moon icon moon"></i>
                <i class="bx bx-sun icon sun"></i>
               </div>
               <span class="mode-text text">Dark  Mode</span>
               <div class="toggle-switch">
                <span class="switch"></span>
               </div>
            </li>
        </div>
    </div>
</nav>


