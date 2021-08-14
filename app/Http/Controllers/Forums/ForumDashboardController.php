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
                            'users.name',
                        )
                        ->join('thread_topics', 'thread_topics.id', 'threads.thread_topic_id')
                        ->join('users', 'users.id', 'threads.user_id')
                        ->get();


        $topics = DB::table('thread_topics')
                            ->select(
                                'thread_topics.id',
                                'thread_topics.title',
                            )
                            ->get();
                            
        return Inertia::render('Forum/Dashboard', [
            'threads' => $threads,
            'topics' => $topics
        ]);
    }

    public function newThread(Request $request) {
        $thread = new Thread();
        $thread->user_id = Auth::id();
        $thread->thread_topic_id = $request->thread_topic_id;
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
