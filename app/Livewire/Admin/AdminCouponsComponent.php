<?php

namespace App\Livewire\Admin;

use Livewire\Component;

class AdminCouponsComponent extends Component
{
    public function render()
    {
        return view('livewire.admin.admin-coupons-component')->layout('layouts.base');
    }
}
