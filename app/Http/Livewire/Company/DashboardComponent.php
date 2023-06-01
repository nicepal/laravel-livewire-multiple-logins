<?php

namespace App\Http\Livewire\Company;

use Livewire\Component;

class DashboardComponent extends Component
{
    public function render()
    {
        return view('livewire.company.dashboard-component')->layout('livewire.company.layouts.base');
    }
}
