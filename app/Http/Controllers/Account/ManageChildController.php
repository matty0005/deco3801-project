<?php

namespace App\Http\Controllers\Account;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;

class ManageChildController extends Controller
{
    public function index() {
        $kids_details = DB::table('user_settings')
            ->select('display_name')
            ->where('user_id', Auth::user()->id)
            ->where('type', 2)
            ->join('kids', 'kids.user_settings_id', 'user_settings.id')
            ->first();


        return Inertia::render('Parents/Settings/ManageChild', [
            'displayName' => $kids_details?->display_name
        ]);
    }

    public function update() {
        $data = InertiaRequest::validate([
            'name' => ['required', 'max:255'],
        ]);
        
        DB::table('user_settings')
            ->where('user_id', Auth::user()->id)
            ->where('type', 2)
            ->join('kids', 'kids.user_settings_id', 'user_settings.id')
            ->update([
                'display_name' => $data['name'],
            ]);

        return Redirect::route('parent_kids_edit');
    }
}
