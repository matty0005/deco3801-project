<?php

namespace App\Http\Controllers\Kids;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class KidsActivitiesController extends Controller
{
    public function index() {
        $kidsMode = Session::get('kidsMode');

        if (!$kidsMode) {
            return Inertia::render('Parents/Dashboard');
        }


        $kid_info = DB::table('kids')
            ->select('activity_level', 'display_name')
            ->where('user_id', Auth::user()->id)
            ->join('user_settings', 'user_settings.id', 'kids.user_settings_id')
            ->first();

        $questions = DB::table('kids_activities')
            ->select('level_name', 'data')
            ->where('level', $kid_info->activity_level)
            ->first();
        
        $questions->data = json_decode(str_replace("{user_name}", $kid_info->display_name, $questions->data));
        
        return Inertia::render('Kids/Activities/Index', [
            'level' => $questions->level_name,
            'questions' => $questions->data,
        ]);

        
    }
}
