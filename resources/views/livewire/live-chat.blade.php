<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    @php
                        // Loop through messages to find the second user (not auth user)
                        $secondUser = null;
                        foreach ($messages as $message) {
                            if ($message->from_user_id != auth()->id()) {
                                $secondUser = $message->fromUser;
                                break;
                            }
                        }
                    @endphp

                    @if ($secondUser)
                        <!-- Profile Box for the Second User -->
                        <div class="flex items-center p-4 mb-4 border rounded-lg shadow-md bg-gray-100">
                            <div class="w-12 h-12 mr-4">
                                <img src="{{ asset($secondUser->img ?? 'img/client-1.jpg') }}" alt="User Avatar"
                                    class="w-full h-full rounded-full">
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-950">{{ $secondUser->name }}</h3>
                                <span class="text-sm text-gray-600">
                                    @if ($secondUser->is_online)
                                        <p class="text-sm text-green-600">Online</p>
                                    @else
                                        <p class="text-sm text-gray-600">Offline</p>
                                    @endif

                                </span>
                            </div>
                        </div>
                    @endif

                    <div wire:poll>
                        @if (isset($messages) && $messages->isNotEmpty())
                            @foreach ($messages as $message)
                                <div class="chat @if ($message->from_user_id == auth()->id()) chat-end @else chat-start @endif">
                                    <div class="chat-image avatar">
                                        <div class="w-10 rounded-full">
                                            <img alt="User Avatar"
                                                src="{{ asset($message->fromUser->img ?? 'img/client-1.jpg') }}" />
                                        </div>
                                    </div>
                                    <div class="chat-header text-gray-950">
                                        {{ $message->fromUser->name }}
                                        <time
                                            class="text-xs opacity-50 text-gray">{{ $message->created_at->diffForHumans() }}</time>
                                    </div>
                                    <div class="chat-bubble sm:max-w-xs lg:max-w-lg p-2 break-words shadow-md">
                                        @if ($message->message)
                                            <p class="mb-2">{{ $message->message }}</p>
                                        @endif
                                        @if ($message->image)
                                            <img src="{{ asset('storage/' . $message->image) }}" alt="Image"
                                                class="max-w-full h-auto rounded-lg mt-2 overflow-hidden">
                                        @endif
                                    </div>
                                    <div class="chat-footer opacity-50 text-gray-900">Delivered</div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="form-control">
                        <form action="POST" id="messageForm" wire:submit.prevent="SendMessage"
                            enctype="multipart/form-data">
                            <textarea id="messageTextarea" class="textarea textarea-bordered text-green-500 w-full" wire:model="message"
                                placeholder="Kirim pesan bang..." required></textarea>
                            <input type="file" wire:model="image" class="hidden" id="imageInput" />
                            <div id="imagePreview" class="mt-2 max-w-30" wire:ignore></div>
                            <button type="button" id="chooseFileButton" class="btn btn-primary">Choose File</button>
                            <button type="submit" id="submitButton" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', function() {
        const chooseFileButton = document.getElementById('chooseFileButton');
        const imageInput = document.getElementById('imageInput');
        const imagePreview = document.getElementById('imagePreview');
        const messageForm = document.getElementById('messageForm');

        // Open file dialog when "Choose File" button is clicked
        chooseFileButton.addEventListener('click', function() {
            imageInput.click();
        });

        // Handle file selection and preview
        imageInput.addEventListener('change', function(event) {
            const file = event.target.files[0];
            if (file) {
                const reader = new FileReader();

                reader.onload = function(e) {
                    // Create an img element to display the preview
                    const img = document.createElement('img');
                    img.src = e.target.result;
                    img.className = 'max-w-full h-auto'; // Adjust styles as needed

                    // Clear previous previews and display new image
                    imagePreview.innerHTML = '';
                    imagePreview.appendChild(img);

                    // Hide the choose file button
                    chooseFileButton.style.display = 'none';
                };

                reader.readAsDataURL(file);
            } else {
                imagePreview.innerHTML = '';
                chooseFileButton.style.display = 'inline-block';
            }
        });

        // Clear image preview when form is submitted
        messageForm.addEventListener('submit', function() {
            imagePreview.innerHTML = '';
            chooseFileButton.style.display = 'inline-block';
            imageInput.value = ''; // Clear the file input
        });
    });

    // Ambil elemen textarea, form, dan input file
    const messageTextarea = document.getElementById('messageTextarea');
    const messageForm = document.getElementById('messageForm');
    const imageInput = document.querySelector('input[type="file"]');

    // Flag untuk menghindari pengiriman pesan kosong saat delay
    let isSubmitting = false;

    // Fungsi untuk mengecek apakah textarea memiliki konten valid
    function isMessageValid() {
        const value = messageTextarea.value.trim();
        console.log(`Pesan yang dicek: "${value}"`); // Log isi pesan untuk debugging
        return value.length > 0 || imageInput.files.length > 0;
    }

    // Tambahkan event listener untuk menangani tombol yang ditekan
    messageTextarea.addEventListener('keydown', function(event) {
        // Cek apakah tombol Enter ditekan
        if (event.key === 'Enter') {
            // Cek apakah Shift juga ditekan
            if (event.shiftKey) {
                // Jika Shift + Enter ditekan, biarkan menambah baris baru
                return; // Biarkan default behavior (tambahkan newline)
            } else {
                // Jika hanya Enter, cegah default behavior dan cek isian
                event.preventDefault();

                // Pastikan textarea tidak kosong atau ada file yang diupload dan belum dalam proses submit
                if (isMessageValid() && !isSubmitting) {
                    // Set flag submitting
                    isSubmitting = true;
                    // Tambahkan delay sebelum submit form
                    setTimeout(() => {
                        messageForm.requestSubmit(); // Submit form setelah delay 2 detik
                        isSubmitting = false; // Reset flag setelah submit
                    }, 1); // 2000 milidetik = 2 detik
                } else {
                    alert(
                        'Pesan tidak boleh kosong atau file belum dipilih!'
                    ); // Pesan peringatan jika textarea kosong
                }
            }
        }
    });

    // Tambahkan event listener untuk mengosongkan textarea dan input file setelah submit
    messageForm.addEventListener('submit', function(event) {
        setTimeout(() => {
            // Kosongkan textarea dan input file setelah pesan terkirim
            messageTextarea.value = '';
            imageInput.value = '';
        }, 100); // Tambahkan sedikit delay agar pesan terkirim lebih dulu
    });

    // Mengatur event ketika pesan dikirim oleh Livewire
    Livewire.on('messageSent', () => {
        messageTextarea.value = ''; // Kosongkan textarea setelah pesan terkirim
        imageInput.value = ''; // Kosongkan input file setelah pesan terkirim
        isSubmitting = false; // Pastikan flag isSubmitting di-reset
    });
</script>
