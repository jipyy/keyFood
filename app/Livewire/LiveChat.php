<?php

namespace App\Livewire;

use App\Models\LiveChat as ModelsLiveChat;
use App\Models\User;
use GuzzleHttp\Psr7\Message;
use Illuminate\Contracts\Database\Eloquent\Builder;
use Livewire\Component;

class LiveChat extends Component
{
    public User $user;
    public $message = '';

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
        // dd($this->message);
        ModelsLiveChat::create([
            'from_user_id' => auth()->id(),
            'to_user_id' => $this->user->id,
            'message' => $this->message,
        ]);
        $this->message = '';
    }
};
