<?php

namespace App\Http\Controllers\Account;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;


class ParentSettingsController extends Controller
{
    public function index() {
        $display_name = DB::table('user_settings')
            ->select('display_name')
            ->where('user_id', Auth::user()->id)
            ->where('type', Session::get('kidsMode') ? 2:1)
            ->first();

        return Inertia::render('Parents/Settings/Profile', [
            'displayName' => $display_name->display_name
        ]);
    }

    public function update() {
        $data = InertiaRequest::validate([
            'display_name' => ['max:255'],
        ]);
        
        DB::table('user_settings')
            ->where('user_id', Auth::user()->id)
            ->where('type', Session::get('kidsMode') ? 2:1)
            ->update([
                'updated_at' => now(),
                'display_name' => $data['display_name']
            ]);

        
        return Redirect::route('user_settings');
    }
}
