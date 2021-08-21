<?php

namespace App\Http\Controllers\Kids;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;


class KidsProfileSettingsController extends Controller
{
    public function index() {
        $kidsMode = Session::get('kidsMode');

        if (!$kidsMode) {
            return Inertia::render('Parents/Dashboard');
        }

        $settings = DB::table('user_settings')  
            ->select(
                    'display_name',
                    'theme'
                )
            ->where('user_id', Auth::user()->id)
            ->where('type', 2)
            ->first();

        switch($settings->theme) {
            case 3:
                $settings->theme = 'Blkue';
                break;
            case 2:
                $settings->theme = 'Pink';
                break;
            case 1:
            default:
                $settings->theme = 'Yellow';
                break;
        }

        
        return Inertia::render('Kids/Profile/Index', [
            'displayName' => $settings->display_name,
            'theme' => $settings->theme
        ]);

        
    }

    public function update() {
        $data = InertiaRequest::validate([
            'display_name' => ['required', 'max:255'],
            'theme' => ['required', 'max:255'],
        ]);

        switch(strtolower($data['theme'])) {
            case 'blue':
                $theme = 3;
                break;
            case 'pink':
                $theme = 2;
                break;
            case 'yellow':
            default: 
                $theme = 1;
                break;
        }

        DB::table('user_settings')
            ->where('user_id', Auth::user()->id)
            ->where('type', 2)
            ->update([
                'display_name' => $data['display_name'],
                'theme' => $theme
            ]);

        return Redirect::route('kids_settings');
    }
}
