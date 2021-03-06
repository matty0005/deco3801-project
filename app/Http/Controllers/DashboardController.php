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

            $kid_info = DB::table('kids')
            ->select('activity_level', 'display_name', 'question_count')
            ->where('user_id', Auth::user()->id)
            ->join('user_settings', 'user_settings.id', 'kids.user_settings_id')
            ->first();

            $mascot = DB::table('user_settings')
            ->select('selected_mascot')
            ->where('user_id', Auth::user()->id)
            ->first();

            $questions = DB::table('kids_activities')
                ->select('id','level_name', 'data')
                ->get();

            foreach ($questions as $question) {
                $question->data = json_decode(str_replace("{user_name}", $kid_info->display_name, $question->data));
            }
            
            //$questions->data = json_decode(str_replace("{user_name}", $kid_info->display_name, $questions->data));

            return Inertia::render('Kids/Dashboard', [
                'all_questions' => $questions,
                'question_count' => $kid_info->question_count,
                'selected_mascot' => $mascot->selected_mascot,
            ]);
        }

        $doctors = DB::table('doctors')
            ->select('users.name', 'specialisation', 'avatar', 'doctors.user_id')
            ->join('users','users.id','doctors.user_id')
            ->join('user_settings', 'user_settings.user_id', 'users.id')
            ->limit(3)
            ->get();

        $bookings = DB::table('doctor_consultations')
            ->select(
                'doctor_consultations.doctor_id',
                'doctor_consultations.user_id',
                'users.name as who', 
                'doctor_consultations.time as when', 
                'users.email as contact', 
                'doctors.specialisation as type',
                'user_settings.avatar',
                'doctor_consultations.id'
            )
            ->join('doctors', 'doctors.user_id', 'doctor_consultations.doctor_id')
            ->join('users', 'users.id', 'doctor_consultations.doctor_id')
            ->join('user_settings', 'user_settings.user_id', 'users.id')
            ->where('doctor_consultations.user_id', Auth::id())
            ->limit(5)
            ->get(); 

        $trending_forum_posts = DB::table('threads')
            ->select(
                'thread_topic_title as topic_on_dashboard',
                'title',
                'user_settings.display_name',
                'user_settings.avatar',
                'threads.created_at as time',
                'threads.id'
            )
            ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 1 AND tl.thread_id = threads.id) likes')
            ->selectRaw('(SELECT COUNT(*) FROM thread_messages tm JOIN threads t ON t.id = tm.thread_id WHERE tm.thread_id = threads.id) comments')
            ->join('user_settings', 'user_settings.user_id', 'threads.user_id')
            ->where('threads.approved', 1)
            ->where('user_settings.type', 1)
            ->orderBy('likes', 'desc')
            ->limit(3)
            ->get();

        return Inertia::render('Parents/Dashboard', [
            'doctors' => $doctors,
            'trendingForumPosts' => $trending_forum_posts,
            'bookings' => $bookings
        ]);
    }
}
