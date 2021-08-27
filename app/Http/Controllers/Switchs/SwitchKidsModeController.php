<?php

namespace App\Http\Controllers\Switchs;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;

class SwitchKidsModeController extends Controller
{
    public function index() {
        // Detect if child account exists for this account, otherwise redirect it 
        
        $hasKid = DB::table('user_settings')
            ->where('user_id', Auth::user()->id)
            ->where('type', 2)
            ->count() > 0;

        if (!$hasKid) {
            return Redirect::route('create_kid_account');
        }

        Session::put('kidsMode', true);
        return Redirect::route('dashboard');
    }
}
