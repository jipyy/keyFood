<div>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-100">
                    <div wire:poll>
                        @foreach ($messages as $message )
                        <div class="chat @if ($message->from_user_id == auth()->id()) chat-end @else chat-start  
                        @endif">
                            <div class="chat-image avatar">
                                <div class="w-10 rounded-full">
                                    <img alt="Tailwind CSS chat bubble component"
                                        src="https://img.daisyui.com/images/stock/photo-1534528741775-53994a69daeb.webp" />
                                </div>
                            </div>
                            <div class="chat-header text-gray-900">
                               {{ $message->fromUser->name }}
                                <time class="text-xs opacity-50 text-gray-900">{{ $message->created_at->diffForHumans() }}</time>
                            </div>
                            <div class="chat-bubble text-gray-100">{{ $message->message }}</div>
                            <div class="chat-footer opacity-50">Delivered</div>
                        </div>
                        @endforeach
                    </div>
                    <div class="form-control">
                            <form action="POST" id="messageForm" wire:submit.prevent="SendMessage">
                            <textarea id="messageTextarea" class="textarea textarea-bordered w-full" wire:model="message" placeholder="kirim pesang bang...">
                        </textarea>
                            <button type="submit" class="btn btn-primary">Kirim</button>
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
    Livewire.on('messageSent', () => {
        const textarea = document.getElementById('messageTextarea');
        textarea.value = ''; // Ini sebenarnya tidak diperlukan karena Livewire sudah mereset message di server
    });

    document.getElementById('messageForm').addEventListener('submit', function(event) {
        event.preventDefault(); // Cegah pengiriman default form
        Livewire.emit('sendMessage'); // Emit event untuk Livewire
    });
</script>
