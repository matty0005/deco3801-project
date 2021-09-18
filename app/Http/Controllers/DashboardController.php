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

        $doctors = DB::table('doctors')
            ->select('users.name', 'specialisation', 'avatar')
            ->join('users','users.id','doctors.user_id')
            ->join('user_settings', 'user_settings.user_id', 'users.id')
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
            ->orderBy('likes', 'desc')
            ->limit(3)
            ->get();

        return Inertia::render('Parents/Dashboard', [
            'doctors' => $doctors,
            'trendingForumPosts' => $trending_forum_posts
        ]);
    }
}
