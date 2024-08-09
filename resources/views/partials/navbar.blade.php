<header class="header-nav">
    <nav class="nav container-nav">
        <div class="nav__data">
            <a href="#" class="nav__logo">
                <img src="{{ asset('img/logos.svg') }}" class="h-8 me-2" alt="KeyFood Logo" /> KeyFood
            </a>


            <div class="nav__toggle" id="nav-toggle">
                <i class="ri-menu-line nav__toggle-menu"></i>
                <i class="ri-close-line nav__toggle-close"></i>
            </div>

            

            <!--=============== NAV MENU ===============-->
            <div class="nav__menu" id="nav-menu">
                <ul class="nav__list">
                    <li class="list">
                        <a href="/home" class="{{ Request::is('home') ? 'nav__link active' : 'nav__link' }}">Home</a>
                    </li>
                    <li class="list">
                        <a href="/product-slider" class="{{ Request::is('product-slider') ? 'nav__link active' : 'nav__link' }}">Produk</a>
                    </li>
                    <li class="list">
                        <a href="/stores" class="{{ Request::is('stores') ? 'nav__link active' : 'nav__link' }}">Toko</a>
                    </li>
                    <li class="list">
                        <a href="/categories" class="{{ Request::is('categories') ? 'nav__link active' : 'nav__link' }}">Kategori</a>
                    </li>
                    <li class="list">
                        <a href="/history" class="{{ Request::is('history') ? 'nav__link active' : 'nav__link' }}">History</a>
                    </li>
                    
                </ul>
            </div>
            <button id="dropdownButton1" class="profile-button">
                <div class="nav_profile">
                    <img class="profile_img"
                        src="https://images.unsplash.com/photo-1502378735452-bc7d86632805?ixlib=rb-0.3.5&q=80&fm=jpg&crop=entropy&cs=tinysrgb&w=200&fit=max&s=aa3a807e1bbdfd4364d1f449eaa96d82"
                        alt="sa">
                </div>
            </button>
            <div id="dropdown1" class="profile-menu">
                <ul class="wrap">
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Dashboard</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Settings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Earnings</a>
                    </li>
                    <li>
                        <a href="#"
                            class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Sign
                            out</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>