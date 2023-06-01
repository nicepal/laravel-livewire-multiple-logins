<?php

namespace App\Http\Livewire\User;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.user.dashboard-component')->layout('livewire.user.layouts.base');
    }
}
