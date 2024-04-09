<?php

namespace App\Livewire\Backend\Auth;

use App\Models\User;
use Livewire\Component;
use App\Models\UserInfo;
use Illuminate\Support\Str;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    #[Validate('required', message: 'Nama lengkap harus diisi')]
    #[Validate('min:3', message: 'Nama lengkap harus lebih dari 2 karakter')]
    #[Validate('string', message: 'Nama lengkap tidak boleh mengandung angka')]
    public $full_name;

    #[Validate('nullable')]
    #[Validate('string', message: 'Gelar Depan tidak boleh mengandung angka')]
    public $front_degree;

    #[Validate('nullable')]
    #[Validate('string', message: 'Gelar Belakang tidak boleh mengandung angka')]
    public $back_degree;

    #[Validate('required', message: 'Username harus diisi')]
    #[Validate('min:3', message: 'Username harus lebih dari 2 karakter')]
    #[Validate('unique:users', message: 'Username sudah digunakan')]
    public $username;

    #[Validate('required', message: 'Alamat email harus diisi')]
    #[Validate('email', message: 'Harus berupa email')]
    #[Validate('unique:users', message: 'Alamat Email sudah digunakan')]
    public $email;

    #[Validate('required', message: 'Nomor telepon harus diisi')]
    #[Validate('numeric', message: 'Nomor telepon tidak boleh mengandung huruf')]
    public $phone_number;

    #[Validate('required', message: 'Password harus diisi')]
    #[Validate('min:8', message: 'Password minimal 8 karakter')]
    #[Validate('confirmed', message: 'Password Konfirmasi Tidak Sesuai')]
    public $password;

    public $password_confirmation;

    public function registerUser() {
        $this->validate();

        $user = User::create([
            'username'  => $this->username,
            'email'     => Str::lower($this->email),
            'password'  => bcrypt($this->password),
            'roles'     => 'Participant',
        ]);

        UserInfo::create([
            'user_id'       => $user->id,
            'full_name'     => $this->full_name,
            'front_degree'  => $this->front_degree,
            'back_degree'   => $this->back_degree,
            'phone_number'  => $this->phone_number,
        ]);

        Auth::login($user, true);
        return redirect()->route('home');
    }

    public function render()
    {
        return view('livewire.backend.auth.register')
                ->layout('layouts.app');
    }
}