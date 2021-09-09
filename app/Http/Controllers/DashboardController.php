<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class DashboardController extends Controller
{
    public function index(Request $request) {
        $data = geoip()->getLocation();

        $toSave = [
            'ip' => $data['ip'],
            'iso_code' => $data['iso_code'],
            'country' => $data['country'],
            'city' => $data['city'],
            'state' => $data['state'],
            'state_name' => $data['state_name'],
            'postal_code' => $data['postal_code'],
            'timezone' => $data['timezone'],
            'continent' => $data['continent'],
            'created_at' => now(),
            'updated_at' => now(),
            'url' => $request->fullUrl(),
            'user_agent' => $request->userAgent(),
            'user_id' => Auth::user()->id
        ];

        

        DB::table('activity_logging')
            ->insertOrIgnore($toSave); 

        $kidsMode = Session::get('kidsMode');

        if ($kidsMode) {
            return Inertia::render('Kids/Dashboard');
        }

        DB::table('doctors')
            ->select('first_name', 'last_name', 'specialisation')
            ->get();

        return Inertia::render('Parents/Dashboard');
    }
}
