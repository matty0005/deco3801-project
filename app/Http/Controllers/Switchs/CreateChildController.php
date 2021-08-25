<?php

namespace App\Http\Controllers\Switchs;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Rules\MatchOldPassword;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;

class CreateChildController extends Controller
{
    public function index() {
        return Inertia::render('Parents/Settings/CreateKid');
    }

    public function create() {
        $data = InertiaRequest::validate([
            'name' => ['required', 'max:255'],
            'dob' => ['max:10', 'date'],
        ]);

        $user_setting_id = DB::table('user_settings')
            ->insertGetId([
                'user_id' => Auth::user()->id,
                'name' => $data['name'],
                'display_name' => $data['name'],
                'type' => 2
            ]);

        DB::table('kids')
            ->insert([
                'dob' => $data['dob'],
                'user_settings_id' => $user_setting_id,
            ]);

        Session::put('kidsMode', true);
        return Redirect::route('dashboard');
    }
}
