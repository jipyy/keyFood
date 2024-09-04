<?php

namespace App\Livewire;

use App\Models\LiveChat as ModelsLiveChat;
use App\Models\User;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Component;
use Livewire\WithFileUploads;

class LiveChat extends Component
{
    use WithFileUploads;

    public User $user;
    public $message = '';
    public $image;

    public function render()
    {
        return view('livewire.live-chat', [
            'messages' => ModelsLiveChat::where(function (Builder $query) {
                $query->where('from_user_id', auth()->id())
                    ->where('to_user_id', $this->user->id);
            })
                ->orWhere(function (Builder $query) {
                    $query->where('from_user_id', $this->user->id)
                        ->where('to_user_id', auth()->id());
                })
                ->orderBy('created_at', 'asc')  // Urutkan berdasarkan waktu pengiriman
                ->get(),
        ]);
    }

    public function SendMessage()
    {
        $path = null;

        $this->validate([
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', // Validate file type and size
        ]);

        if ($this->image) {
            // Periksa apakah gambar diunggah dengan benar
            
          $path = $this->image->storeAs('img/chats', $this->image->getClientOriginalName(), 'public');

        }

        ModelsLiveChat::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $this->user->id,
            'message' => $this->message,
            'image' => $path,
        ]);

        $this->message = '';
        $this->image = null; // Reset image setelah mengirim
    }
}
