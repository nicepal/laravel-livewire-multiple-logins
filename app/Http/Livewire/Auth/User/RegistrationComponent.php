<?php

namespace App\Http\Livewire\Auth\User;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class RegistrationComponent extends Component
{

    public $first_name, $last_name, $email, $password, $confirm_password,$phone;

    public function updated($fields){

        $this->validateOnly($fields,[
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:30',
            'confirm_password' => 'required|min:8|max:30|same:password',
        ]);
    }

    public function userRegister(){
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:8|max:30',
            'confirm_password' => 'required|min:8|max:30|same:password',
        ]);

        $user = new User();

        $user->first_name = $this->first_name;
        $user->last_name = $this->last_name;
        $user->phone = $this->phone;
        $user->email = $this->email;
        $user->password = $this->password;
        if($user->save()){
            Auth::guard('web')->attempt(['email' => $this->email,'password' => $this->password]);
            session()->flash('success','Registration successful');
            return redirect()->route('user.dashboard');
        }

    }

    public function render()
    {
        return view('livewire.auth.user.registration-component')->layout('livewire.auth.user.layout');;
    }
}
