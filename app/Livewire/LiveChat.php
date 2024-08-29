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

            // 'messages' => ModelsLiveChat::where('from_user_id', auth()->id())
            // ->orwhere('from_user_id', $this->user->id)npm
            // ->orwhere('to_user_id', auth()->id())
            // ->orwhere('to_user_id', $this->user->id)
            // ->get(),

            'messages' => ModelsLiveChat::where(function (Builder $query) {
                $query->where('from_user_id', auth()->id())
                ->where('to_user_id', $this->user->id);
                })->orWhere(function (Builder $query) {
                    $query->where('from_user_id', $this->user->id)
                    ->where('to_user_id', auth()->id());
                })
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
        $this->reset('message');
    }
}
