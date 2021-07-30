<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;


class UserIndex extends Component
{
     public $search ='';

     public function render()
    {
        return view('livewire.users.user-index', [
            'users'=>User::all()
        ])
            ->layout('layouts.main');
    }
}
