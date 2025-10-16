<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class LogoutButton extends Component
{
    public function logout()
    {
        Auth::logout();
        Session::flush();

        $this->dispatch('show-notyf', type: 'success', message: 'Anda telah logout.');
        return $this->redirect('/login');
    }

    public function render()
    {
        return view('livewire.logout-button');
    }
}
