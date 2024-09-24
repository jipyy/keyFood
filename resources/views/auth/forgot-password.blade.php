<x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Lupa kata sandi? Masukkan nomor WhatsApp yang terdaftar, dan kami akan mengirimkan kode OTP untuk reset password.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <!-- Form untuk input nomor telepon -->
    <form method="POST" action="{{ route('forgot.password.otp') }}">
        @csrf
        <label for="phone">Nomor WhatsApp:</label>
        <input type="number" min="0" id="phone" name="phone" required>

        <!-- Menampilkan pesan error jika nomor tidak ditemukan -->
        @error('phone')
            <div class="text-red-500 mt-2 text-sm">
                {{ $message }}
            </div>
        @enderror

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Kirim OTP') }}
            </x-primary-button>
        </div>
    </form>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@if($errors->any())
    <script>
        Swal.fire({
            icon: 'error',
            title: 'No Whatsapp Anda Tidak Ditemukan.',
            text: '{{ $errors->first('phone') }}',
        });
    </script>
@endif

{{-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Number Validation</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        /* Custom styles for glassmorphism effect */
        .glass {
            background: rgba(255, 255, 255, 0.2);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.18);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body class="bg-gray-100">

    <div class="min-h-screen flex items-center justify-center">
        <div class="w-full max-w-sm p-6 glass rounded-md">
            <h1 class="text-2xl font-semibold text-gray-800 mb-1">Masukkan No Telepon</h1>
            <h1 class="text-sm text-gray-800 mb-5">Untuk Melanjutkan Reset Password, Masukkan No Telepon Yang Anda
                Gunakan</h1>

            <!-- Form starts here -->
            <form id="phoneForm" action="#" method="POST">
                <div class="w-full">
                    <label class="block mb-1 text-sm text-slate-600">
                        No. Telepon
                    </label>
                    <input required id="contactNumber"
                        class="w-full bg-transparent placeholder:text-gray-400 text-gray-500 text-sm border border-gray-200 rounded-md px-3 py-2 transition duration-300 ease focus:outline-none focus:border-indigo-500 hover:border-gray-300 shadow-sm focus:shadow"
                        placeholder="e.g., 0812345678901" maxlength="13" title="Phone number format: 081224964214" />

                    <p id="phone-message" class="flex items-center mt-2 text-xs text-gray-400">
                        Tolong Masukkan No Telp Anda Dengan Format 0812345678901 (11-13 digits)
                    </p>
                </div>

                <!-- Submit Button -->
                <div class="mt-6">
                    <button type="submit"
                        class="w-full px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white font-semibold text-sm rounded-md shadow focus:outline-none focus:ring-2 focus:ring-indigo-300">
                        Submit
                    </button>
                </div>
            </form>
        </div>
    </div>

    <!-- JavaScript for real-time phone validation -->
    <script>
        const contactInput = document.getElementById('contactNumber');
        const messageElement = document.getElementById('phone-message');
        const form = document.getElementById('phoneForm');

        // Function to check if phone number matches the format 08 followed by 9-11 digits
        function validatePhoneNumber(value) {
            // Regex untuk memastikan format: 08 diikuti minimal 9 dan maksimal 11 angka (total 11-13 angka)
            const regex = /^08\d{9,11}$/;
            return regex.test(value);
        }

        // Event listener untuk memvalidasi input secara real-time
        contactInput.addEventListener('input', function (e) {
            // Hanya izinkan angka
            e.target.value = e.target.value.replace(/[^0-9]/g, '');

            // Validasi format dan update pesan
            if (validatePhoneNumber(e.target.value)) {
                messageElement.textContent = "Great! Your phone number is valid.";
                messageElement.classList.remove('text-red-400');
                messageElement.classList.add('text-green-400');
            } else {
                messageElement.textContent = "Please match the requested format. e.g., 081224964214 (11-13 digits)";
                messageElement.classList.remove('text-green-400');
                messageElement.classList.add('text-red-400');
            }
        });

        // Prevent form submission if phone number is invalid
        form.addEventListener('submit', function (e) {
            if (!validatePhoneNumber(contactInput.value)) {
                e.preventDefault(); // Stop form submission
                alert('Please enter a valid phone number in the correct format.');
            }
        });
    </script>

</body>

</html> --}}

</x-guest-layout>
