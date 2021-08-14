<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use App\Models\Thread;
use App\Models\ThreadTopic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ForumTopicController extends Controller
{
    public function index($topic_title) {
        
        $topic = ThreadTopic::where('title', $topic_title)->first();

        if ($topic == null) {
            return Redirect::route('forum_home'); //Potentially should change to 404
        }

        $threads = DB::table('threads')
                        ->select(
                            'threads.id',
                            'threads.title',
                            'threads.comment',
                            'threads.created_at',
                            'users.name',
                        )
                        ->selectRaw('(SELECT COUNT(*) FROM thread_messages tm JOIN threads t ON t.id = tm.thread_id WHERE tm.thread_id = threads.id) count')
                        ->where('threads.thread_topic_title', $topic->title)
                        ->join('users', 'users.id', 'threads.user_id')
                        ->get();
        
        $topics = DB::table('thread_topics')->get();

        return Inertia::render('Forum/Topic', [
            'threads' => $threads->toArray(),
            'topics' => $topics->toArray(),
            'thread_topic_title' => $topic->title
        ]);
    }
}
