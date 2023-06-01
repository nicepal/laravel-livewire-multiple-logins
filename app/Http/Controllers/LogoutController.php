<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogoutController extends Controller
{
    //

    public function adminLogout(){

        auth()->guard('admin')->logout();
        return redirect()->route('admin.login');
    }

    public function companyLogout(){

        auth()->guard('company')->logout();
        return redirect()->route('company.login');
    }

    public function userLogout(){

        auth()->guard('web')->logout();
        return redirect()->route('user.login');
    }

}
