<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use App\Models\Thread;
use App\Models\ThreadTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ForumTopicController extends Controller
{
    public function index($topic_title) {
        
        $topic = DB::table('thread_topics')->where('title', $topic_title)->first();

        if ($topic == null) {
            return Redirect::route('forum_home'); //Potentially should change to 404
        }

        $authId = Auth::id();

        $threads = DB::table('threads')
                        ->select(
                            'threads.id',
                            'threads.title',
                            'threads.comment',
                            'threads.created_at',
                            'threads.thread_topic_title',
                            'user_settings.display_name',
                            'user_settings.avatar',
                        )
                        ->selectRaw('(SELECT COUNT(*) FROM thread_messages tm JOIN threads t ON t.id = tm.thread_id WHERE tm.thread_id = threads.id) count')
                        ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 1 AND tl.thread_id = threads.id) likes')
                        ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 2 AND tl.thread_id = threads.id) dislikes')
                        ->selectRaw('(SELECT liked FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.thread_id = threads.id AND tl.user_id = ' . $authId . ') liked')
                        ->where('threads.thread_topic_title', $topic->title)
                        ->join('users', 'users.id', 'threads.user_id')
                        ->where('user_settings.type', 1)
                        ->join('user_settings','user_settings.user_id',  'users.id')
                        ->orderBy('threads.created_at', 'DESC')
                        ->get();
        
        $topics = DB::table('thread_topics')->get();

        return Inertia::render('Forum/Topic', [
            'threads' => $threads->toArray(),
            'topics' => $topics->toArray(),
            'thread_topic_title' => $topic->title
        ]);
    }
}
