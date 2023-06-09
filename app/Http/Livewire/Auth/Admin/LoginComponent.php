<?php

namespace App\Http\Livewire\Auth\Admin;

use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Livewire\Component;

class LoginComponent extends Component
{

    public $email,$password;

    public function updated($fields){
        $this->validateOnly($fields,[
            'email' => 'required|email',
            'password' => 'required'
        ]);
    }


    public function adminLogin(){
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $getAdmin = Admin::where('email', $this->email)->first();
        if($getAdmin){
            if(Hash::check($this->password,$getAdmin->password)){
                Auth::guard('admin')->attempt(['email' => $this->email,'password' => $this->password]);
                session()->flash('success','Login Successful');
                return redirect()->route('admin.dashboard');
            }else{
                session()->flash('error','Incorrect email or password');
            }

        }else{
            session()->flash('error','Incorrect email or password');
        }
    }

   

    public function render()
    {
        return view('livewire.auth.admin.login-component')->layout('livewire.auth.admin.layout');
    }
}
