<?php

namespace App\Http\Controllers\PublicFacing;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class HomeController extends Controller
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
        ];

        

        DB::table('activity_logging')
            ->insertOrIgnore($toSave); 

        return Inertia::render('Public/Index');
    }
}
