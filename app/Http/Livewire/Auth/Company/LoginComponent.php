<?php

namespace App\Http\Livewire\Auth\Company;

use App\Models\Company;
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


    public function companyLogin(){
        $this->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $getCompany = Company::where('email', $this->email)->first();
        if($getCompany){
            if(Hash::check($this->password,$getCompany->password)){
                Auth::guard('company')->attempt(['email' => $this->email,'password' => $this->password]);
                session()->flash('success','Login Successful');
                return redirect()->route('company.dashboard');
            }else{
                session()->flash('error','Incorrect email or password');
            }

        }else{
            session()->flash('error','Incorrect email or password');
        }
    }

    public function render()
    {
        return view('livewire.auth.company.login-component')->layout('livewire.auth.company.layout');
    }
}
