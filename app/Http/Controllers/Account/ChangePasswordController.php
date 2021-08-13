<?php

namespace App\Http\Controllers\Account;

use App\Models\User;
use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;

class ChangePasswordController extends Controller
{
    public function index() {
        return Inertia::render('Parents/Settings/ChangePassword');
    }

    public function update () {
        $data = InertiaRequest::validate([
            'current' => ['required', 'max:255', new MatchOldPassword],
            'new_password' => ['required', 'max:255'],
            'confirm_password' => ['required', 'same:new', 'max:255'],
        ]);



        User::find(Auth::user()->id)->update(['password'=> Hash::make($data['new'])]);

        return Redirect::route('user_settings');

    }
}
