<?php

namespace App\Livewire\Frontend\Pages;

use App\Models\UserInfo;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Home extends Component
{

    public function render()
    {
        $user_info = UserInfo::with('user')->where('user_id', Auth::user()->id)->first();

        return view('livewire.frontend.pages.home', compact('user_info'))
                ->layout('layouts.app');
    }
}