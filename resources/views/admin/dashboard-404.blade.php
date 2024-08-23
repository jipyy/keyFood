 <main class="h-full pb-16 overflow-y-auto">
          <div class="container flex flex-col items-center px-6 mx-auto">
            <svg
              class="w-12 h-12 mt-8 text-purple-200"
              fill="currentColor"
              viewBox="0 0 20 20"
            >
              <path
                fill-rule="evenodd"
                d="M13.477 14.89A6 6 0 015.11 6.524l8.367 8.368zm1.414-1.414L6.524 5.11a6 6 0 018.367 8.367zM18 10a8 8 0 11-16 0 8 8 0 0116 0z"
                clip-rule="evenodd"
              ></path>
            </svg>
            <h1 class="text-6xl font-semibold text-gray-700 dark:text-gray-200">
              404
            </h1>
            <p class="text-gray-700 dark:text-gray-300">
              Page not found. Check the address or
              <a
                class="text-purple-600 hover:underline dark:text-purple-300"
                href="../index.html"
              >
                go back
              </a>
              .
            </p>
          </div>
        </main>
      </div>
    </div>


    <div class="relative inline-block text-left">
        <div>
          <button type="button" class="inline-flex justify-center gap-x-1.5 rounded-md bg-white px-2 py-1 text-sm font-semibold text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 hover:bg-gray-50" id="menu-button" aria-expanded="false" aria-haspopup="true" onclick="toggleDropdown()">
            Roles
            <svg class="-mr-1 h-5 w-5 text-gray-400" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
              <path fill-rule="evenodd" d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z" clip-rule="evenodd" />
            </svg>
          </button>
        </div>

        <div id="dropdown-menu" class="hidden absolute right-0 z-10 mt-2 w-32 origin-top-right rounded-md bg-white shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none" role="menu" aria-orientation="vertical" aria-labelledby="menu-button" tabindex="-1">
          <div class="py-1" role="none">
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" data-roles="1" id="menu-item-0">Admin</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" data-roles="2" id="menu-item-1">Buyer</a>
            <a href="#" class="block px-4 py-2 text-sm text-gray-700" role="menuitem" tabindex="-1" data-roles="3" id="menu-item-2">Seller</a>
          </div>
        </div>
    </div>
