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
                    'kids.theme'
                )
            ->where('user_id', Auth::user()->id)
            ->where('type', 2)
            ->join('kids', 'kids.user_settings_id', 'user_settings.id')
            ->first();
        

        // switch($settings->theme) {
        //     case 3:
        //         $settings->theme = 'Blkue';
        //         break;
        //     case 2:
        //         $settings->theme = 'Pink';
        //         break;
        //     case 1:
        //     default:
        //         $settings->theme = 'Yellow';
        //         break;
        // }

        
        return Inertia::render('Kids/Profile/Index', [
            'displayName' => $settings->display_name,
            'theme' => $settings->theme
        ]);

        
    }

    public function update(Request $request) {
        // $data = InertiaRequest::validate([
        //     'soundOn' => ['required'],
        // ]);
        
        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
                'kids_audio' => $request->soundOn ? 0 : 1
            ]);
        // dd($request->soundOn);
        return response()->json("");
    }
}
