<?php

namespace App\View\Components;
namespace App\Http\Livewire\User;

use Illuminate\View\Component;

class UserEditProfileComponent extends Component
{
    public function __construct()
    {
        //
    }

    public function render()
    {
        return view('components.user-edit-profile-component')->layout('layouts.base');
    }
}
