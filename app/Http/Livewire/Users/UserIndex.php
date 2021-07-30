<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;


class UserIndex extends Component
{
     public function render()
    {
        return view('livewire.users.user-index')
            ->layout('layouts.main');
    }
}
