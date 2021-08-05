<?php

namespace App\Http\Controllers\Switchs;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SwitchKidsModeController extends Controller
{
    public function index() {
        Session::put('kidsMode', true);
        return Redirect::route('dashboard');
    }
}
