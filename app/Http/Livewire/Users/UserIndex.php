<?php

namespace App\Http\Livewire\Users;

use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Hash;


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
        $this ->validate();

        User::create([
            'username' => $this->username,
            'first_name' => $this->firstName,
            'last_name' => $this->lastName,
            'email' => $this->email,
            'password' =>  Hash::make($this->password),
        ]);
        $this->reset();
        $this->dispatchBrowserEvent('closeModal');
    }

    public function showEditModal($id) {
        $this->reset();
        //find user
        $this->userId= $id;
        //load user
        $this->loadUser();
        //open modal
    }

    public function loadUser()
    {
        $user = User::find($this->userId);
        $this->username = $user->username;
        $this->firstName = $user->first_name;
        $this->lastName = $user->last_name;
        $this->email = $user->email;
        $this->password = $user->password;

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
