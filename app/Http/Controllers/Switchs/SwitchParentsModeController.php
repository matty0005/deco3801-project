<?php

namespace App\Http\Controllers\Switchs;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;

class SwitchParentsModeController extends Controller
{
    public function index() {
        $data = InertiaRequest::validate([
            'password' => ['required', 'max:255', new MatchOldPassword],
        ]);
        

        Session::put('kidsMode', false);

        return Redirect::route('dashboard');
        
    }
}
