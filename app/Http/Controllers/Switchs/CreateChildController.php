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
        ]);

        DB::table('user_settings')
            ->insert([
                'user_id' => Auth::user()->id,
                'display_name' => $data['name'],
                'type' => 2
            ]);

        Session::put('kidsMode', true);
        return Redirect::route('dashboard');
    }
}
