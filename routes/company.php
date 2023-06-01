<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LogoutController;
use App\Http\Livewire\Company\DashboardComponent;
use App\Http\Livewire\Auth\Company\LoginComponent;
use App\Http\Livewire\Auth\Company\RegistrationComponent;

// Company Routes

Route::get('company/login',LoginComponent::class)->middleware('guest:company')->name('company.login');
Route::get('company/register',RegistrationComponent::class)->middleware('guest:company')->name('company.register');

Route::prefix('company/')->name('company.')->middleware('auth:company')->group(function(){

    Route::post('logout',[LogoutController::class,'companyLogout'])->name('logout');
    Route::get('dashboard',DashboardComponent::class)->name('dashboard');
});