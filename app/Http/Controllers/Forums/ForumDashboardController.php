<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Thread;
use App\Models\ThreadMessage;
use Illuminate\Support\Facades\Auth;

class ForumDashboardController extends Controller
{
    public function index() {
        return Inertia::render('Forum/Dashboard');
    }

    public function newThread(Request $request) {
        $thread = new Thread();
        $thread->user_id = Auth::id();
        $thread->title = $request->title;
        $thread->comment = $request->comment;
        $thread->save();
    }

    public function getThreads(Request $request) {
        return Thread::with(['user', 'messages.user'])->get();
    }

    public function addThreadMessage(Request $request) {
        $threadmessage = new ThreadMessage();
        $threadmessage->thread_id = $request->thread_id;
        $threadmessage->user_id = Auth::id();
        $threadmessage->message = $request->message;
        $threadmessage->save();

        return $threadmessage;
    }
}
