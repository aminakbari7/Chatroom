<?php

namespace App\Livewire\Chat;

use App\Models\User;
use Livewire\Component;


class ChatList extends Component
{
    public function render()
    {
        $users=User::all();
        return view('livewire.chat.chat-list',["users"=>$users]);
    }
}
