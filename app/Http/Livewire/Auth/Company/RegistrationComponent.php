<?php

namespace App\Http\Livewire\Auth\Company;

use App\Models\Company;
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
            'email' => 'required|email|unique:companies',
            'password' => 'required|min:8|max:30',
            'confirm_password' => 'required|min:8|max:30|same:password',
        ]);
    }

    public function companyRegister(){
        $this->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'phone' => 'required',
            'email' => 'required|email|unique:companies',
            'password' => 'required|min:8|max:30',
            'confirm_password' => 'required|min:8|max:30|same:password',
        ]);

        $company = new Company();

        $company->first_name = $this->first_name;
        $company->last_name = $this->last_name;
        $company->phone = $this->phone;
        $company->email = $this->email;
        $company->password = $this->password;
        if($company->save()){
            Auth::guard('company')->attempt(['email' => $this->email,'password' => $this->password]);
            session()->flash('success','Registration successful');
            return redirect()->route('company.dashboard');
        }

    }

    public function render()
    {
        return view('livewire.auth.company.registration-component')->layout('livewire.auth.company.layout');
    }
}
