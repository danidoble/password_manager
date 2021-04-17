<?php

namespace App\Http\Livewire\Passwords;

use App\Models\Password;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Index extends Component
{
    public function render()
    {
        $site_names = Password::groupBy('site_name')->get(['site_name']);

        $passwords = Password::where('user_id',Auth::user()->getAuthIdentifier())
            ->withoutTrashed()
            ->get();
        return view('livewire.passwords.index',[
            //'passwords'=>$passwords,
            'passwords'=>$site_names,
        ]);
    }
}
