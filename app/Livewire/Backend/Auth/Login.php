<?php

namespace App\Livewire\Backend\Auth;

use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;

class Login extends Component
{
    #[Validate('required', message: 'Alamat email harus diisi')]
    #[Validate('email', message: 'Harus berupa email')]
    public $email;

    #[Validate('required', message: 'Password harus diisi')]
    public $password;

    public $remember;

    public function userLogin() {
        $this->validate();

        $throttleKey = Str::lower($this->email) . '|' . request()->ip();

        if (RateLimiter::tooManyAttempts($throttleKey, 5)) {
            $this->addError('email', __('auth.throttle', [
                'seconds' => RateLimiter::availableIn($throttleKey)
            ]));

            return null;
        }

        if (!Auth::attempt($this->only(['email', 'password']), $this->remember)) {
            $this->addError('email', 'Email tidak terdaftar di database');

            RateLimiter::hit($throttleKey);
            return null;
        }

        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.backend.auth.login')
                ->layout('layouts.app');
    }
}