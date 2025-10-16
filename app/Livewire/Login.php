<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Layout;
use Illuminate\Support\Facades\Auth;


class Login extends Component
{
    #[Layout('layouts.auth')]

    public $email;
    public $password;

    public function render()
    {
        return view('livewire.login');
    }

    public function login()
    {
        $credentials = [
            'email' => $this->email,
            'password' => $this->password
        ];

        if (Auth::attempt($credentials)) {
            // Regenerasi session untuk mencegah session fixation attacks
            request()->session()->regenerate();

            // Tampilkan notifikasi sukses
            $this->dispatch('show-notyf', type: 'success', message: 'Login berhasil! Selamat datang, ' . auth()->user()->name);

            // Arahkan ke halaman dashboard
            return redirect('/dashboard');
        }

        // Jika login gagal
        $this->dispatch('show-notyf', type: 'error', message: 'Email atau password salah!');
    }
}
