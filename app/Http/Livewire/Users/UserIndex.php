<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;


class UserIndex extends Component
{
     public $search = '';
     public $username, $firstName, $lastName, $email, $password;

     protected $rules = [
        'username' => 'required',
        'firstName' => 'required',
        'lastName' => 'required',
        'email' => 'required|email',
        'password' => 'required',
    ];


     public function storeUser() {

     }

    public function render()
    {
        $users = User::paginate(5);
        if (strlen($this->search) > 2) {
            $users = User::where('username', 'like', "%{$this->search}%")->paginate(5);
        }
        return view('livewire.users.user-index', [
            'users' => $users
        ])
                 ->layout('layouts.main');
    }
}
