<?php

namespace App\Http\Controllers\Switchs;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SwitchParentsModeController extends Controller
{
    public function index() {
        Session::put('kidsMode', false);

        return Redirect::route('dashboard');
        
    }
}
