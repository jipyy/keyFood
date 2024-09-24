
<form method="POST" action="{{ route('reset.password') }}">
    @csrf
    <div>
        <label for="password">Password Baru</label>
        <input id="password" type="password" name="password" required>
    </div>
    <div>
        <label for="password_confirmation">Konfirmasi Password</label>
        <input id="password_confirmation" type="password" name="password_confirmation" required>
    </div>
    <div>
        <button type="submit">
            Reset Password
        </button>
    </div>
</form>


{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Component Inspired design by Ildiko Gaspar from dribbble https://dribbble.com/shots/11480512-Log-In-UI-Design  -->

    <!-- Tailwind CSS CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@200;300;400;500;600;700;800&display=swap"
        rel="stylesheet">

    <style>
        body {
            font-family: 'Plus Jakarta Sans', sans-serif;
        }
    </style>
</head>

<body>

    <section>
        <!-- First Section: Reset Password Form -->
        <main id="content" role="main" class="w-full h-screen max-w-md p-6 mx-auto">
            <div class="bg-white border shadow-lg mt-7 rounded-xl">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <div class="flex items-end justify-center mb-8 text-2xl font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="w-6 h-6 text-indigo-600 fill-current">
                                <path
                                    d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.4267 20 20 16.4267 20 12C20 7.57333 16.4267 4 12 4C7.57333 4 4 7.57333 4 12C4 16.4267 7.57333 20 12 20ZM12 18C8.68 18 6 15.32 6 12C6 8.68 8.68 6 12 6C15.32 6 18 8.68 18 12C18 15.32 15.32 18 12 18ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z">
                                </path>
                            </svg>
                            Lapak<span class="text-indigo-600">.KBK</span>
                        </div>
                        <h1 class="block text-lg font-bold text-gray-800">Reset Password</h1>
                    </div>

                    <div class="mt-5">
                        <form method="POST" action="{{ route('reset.password') }}">
                            <div class="grid gap-y-4">
                                <div>
                                    <label for="password" class="block mb-2 ml-1 text-xs font-semibold">Password
                                        Baru</label>
                                    <div class="relative">
                                        <input type="password" id="password" name="password"
                                            class="block w-full px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                            required aria-describedby="new-password-error"
                                            placeholder="Masukkan Password Baru">
                                    </div>
                                    <!-- Validasi Password Harus 8 Karakter -->
                                    <p class="hidden mt-2 text-xs text-red-600" id="new-password-error">Password Harus
                                        Berisi 8 Karakter</p>
                                </div>
                                <div>
                                    <label for="password_confirmation"
                                        class="block mb-2 ml-1 text-xs font-semibold">Konfirmasi Password Baru</label>
                                    <div class="relative">
                                        <input type="password" id="password_confirmation" name="password_confirmation"
                                            class="block w-full px-4 py-3 text-sm border-2 border-gray-200 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500"
                                            required aria-describedby="confirmn_new-password-error"
                                            placeholder="Masukkan Password Baru">
                                    </div>
                                    <!-- Validasi Password Harus Sama -->
                                    <p class="hidden mt-2 text-xs text-red-600" id="confirmn_new-password-error">
                                        Masukkan Password Yang Sama</p>
                                </div>
                                <a href="/login">
                                <button type="submit"
                                    class="inline-flex items-center justify-center gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Reset
                                    Password Saya</button></a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>

        <!-- Second Section: Password Reset Success -->
        <main id="content" role="main" class="w-full h-screen max-w-xl p-6 mx-auto">
            <div class="py-12 bg-white border shadow-lg mt-7 rounded-xl">
                <div class="p-4 sm:p-7">
                    <div class="text-center">
                        <div class="flex items-end justify-center mb-12 text-2xl font-bold">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="w-6 h-6 text-indigo-600 fill-current">
                                <path
                                    d="M12 2C17.52 2 22 6.48 22 12C22 17.52 17.52 22 12 22C6.48 22 2 17.52 2 12C2 6.48 6.48 2 12 2ZM12 20C16.4267 20 20 16.4267 20 12C20 7.57333 16.4267 4 12 4C7.57333 4 4 7.57333 4 12C4 16.4267 7.57333 20 12 20ZM12 18C8.68 18 6 15.32 6 12C6 8.68 8.68 6 12 6C15.32 6 18 8.68 18 12C18 15.32 15.32 18 12 18ZM12 10C10.9 10 10 10.9 10 12C10 13.1 10.9 14 12 14C13.1 14 14 13.1 14 12C14 10.9 13.1 10 12 10Z">
                                </path>
                            </svg>
                            Lapak<span class="text-indigo-600">.KBK</span>
                        </div>
                        <h1 class="block mb-2 text-xl font-bold text-gray-800">Yey, Reset Password Berhasil!</h1>
                        <p class="mb-12 text-gray-800">Kamu sekarang bisa gunakan password baru <br> untuk log in ke
                            akun mu!
                            🙌</p>
                    </div>

                    <div class="px-4 mx-auto text-center sm:px-7">
                        <a href="/login">
                            <button type="submit"
                                class="inline-flex items-center justify-center w-full gap-2 px-4 py-3 text-sm font-semibold text-white transition-all bg-indigo-500 border border-transparent rounded-md hover:bg-indigo-600 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">Login</button>
                        </a>
                    </div>
                </div>
            </div>
        </main>
    </section>

</body>

</html> --}}
