<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use App\Models\Thread;
use App\Models\ThreadTopic;
use Illuminate\Http\Request;
use App\Models\ThreadMessage;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ForumDashboardController extends Controller
{
    public function index() {
        $threads = DB::table('threads')
                        ->select(
                            'threads.id',
                            'threads.title',
                            'threads.comment',
                            'threads.created_at',
                            'threads.thread_topic_title AS topic_on_dashboard',
                            'threads.thread_topic_title',
                            'user_settings.display_name',
                            'user_settings.avatar'
                        )
                        ->selectRaw('(SELECT COUNT(*) FROM thread_messages tm JOIN threads t ON t.id = tm.thread_id WHERE tm.thread_id = threads.id) count')
                        ->join('users', 'users.id', 'threads.user_id')
                        ->where('user_settings.type', 1)
                        ->join('user_settings','user_settings.user_id',  'users.id')
                        ->orderBy('threads.created_at', 'DESC')
                        ->get();

        $topics = DB::table('thread_topics')->get();

        return Inertia::render('Forum/Dashboard', [
            'threads' => $threads,
            'topics' => $topics
        ]);
    }

    public function newThread(Request $request) {
        $thread = new Thread();
        $thread->user_id = Auth::id();
        $thread->thread_topic_title = $request->thread_topic_title;
        $thread->title = $request->title;
        $thread->comment = $request->comment;
        $thread->save();

        return redirect()->back();
    }

    public function addThreadMessage(Request $request) {
        $threadmessage = new ThreadMessage();
        $threadmessage->thread_id = $request->thread_id;
        $threadmessage->user_id = Auth::id();
        $threadmessage->message = $request->message;
        $threadmessage->save();

        return redirect()->back();
    }

}
