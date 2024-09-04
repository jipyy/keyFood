<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    <div wire:poll>
                        @if (isset($messages) && $messages->isNotEmpty())
                            @foreach ($messages as $message)
                                <div class="chat @if ($message->from_user_id == auth()->id()) chat-end @else chat-start @endif">
                                    <div class="chat-image avatar">
                                        <div class="w-10 rounded-full">
                                            <img alt="Tailwind CSS chat bubble component"
                                            src="{{ asset($message->fromUser->img ?? 'img/client-1.jpg') }}" />
                                        </div>
                                    </div>
                                    <div class="chat-header text-gray-950">
                                        {{ $message->fromUser->name }}
                                        <time
                                            class="text-xs opacity-50 text-gray">{{ $message->created_at->diffForHumans() }}</time>
                                    </div>
                                    <div class="chat-bubble">{{ $message->message }}</div>
                                    <div class="chat-footer opacity-50">Delivered</div>
                                </div>
                            @endforeach
                        @endif
                    </div>
                    <div class="form-control">
                        <form action="POST" id="messageForm" wire:submit.prevent="SendMessage">
                            <textarea id="messageTextarea" class="textarea textarea-bordered w-full" wire:model="message"
                                placeholder="kirim pesang bang..." required>
                        </textarea>
                            <button type="submit" id="sumbitButton" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>


{{-- <script>
    // Menunggu Livewire selesai mengirimkan permintaan
    Livewire.on('messageSent', () => {
        const textarea = document.getElementById('messageTextarea');
        textarea.value = '';
    });

    document.getElementById('messageForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Cegah pengiriman default form
        Livewire.emit('sendMessage'); // Emit event untuk Livewire
    });
</script> --}}

<script>
    // Ambil elemen textarea dan form
    const messageTextarea = document.getElementById('messageTextarea');
    const messageForm = document.getElementById('messageForm');

    // Flag untuk menghindari pengiriman pesan kosong saat delay
    let isSubmitting = false;

    // Fungsi untuk mengecek apakah textarea memiliki konten valid
    function isMessageValid() {
        const value = messageTextarea.value.trim();
        console.log(`Pesan yang dicek: "${value}"`); // Log isi pesan untuk debugging
        return value.length > 0;
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

                // Pastikan textarea tidak kosong dan belum dalam proses submit
                if (isMessageValid() && !isSubmitting) {
                    // Set flag submitting
                    isSubmitting = true;
                    // Tambahkan delay sebelum submit form
                    setTimeout(() => {
                        messageForm.requestSubmit(); // Submit form setelah delay 2 detik
                        isSubmitting = false; // Reset flag setelah submit
                    }, 1); // 2000 milidetik = 2 detik
                } else {
                    alert('Pesan tidak boleh kosong!'); // Pesan peringatan jika textarea kosong
                }
            }
        }
    });

    // Tambahkan event listener untuk mengosongkan textarea setelah submit
    messageForm.addEventListener('submit', function(event) {
        setTimeout(() => {
            // Kosongkan textarea setelah pesan terkirim
            messageTextarea.value = '';
        }, 100); // Tambahkan sedikit delay agar pesan terkirim lebih dulu
    });

    // Mengatur event ketika pesan dikirim oleh Livewire
    Livewire.on('messageSent', () => {
        messageTextarea.value = ''; // Kosongkan textarea setelah pesan terkirim
        isSubmitting = false; // Pastikan flag isSubmitting di-reset
    });

    // Mencegah pengiriman form default dan menggunakan Livewire untuk pengiriman pesan
    document.getElementById('messageForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Cegah pengiriman default form
        Livewire.emit('sendMessage'); // Emit event untuk Livewire
    });
</script>
