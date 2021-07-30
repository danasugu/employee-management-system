<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;


class UserIndex extends Component
{
     public $search ='';

     public function render()
    {
        $users = User::all();
        if(strlen($this->search) > 2) {
            
        }
        return view('livewire.users.user-index', [
            'users'=>User::all()
        ])
            ->layout('layouts.main');
    }
}
