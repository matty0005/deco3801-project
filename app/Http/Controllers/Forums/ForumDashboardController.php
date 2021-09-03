<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use App\Models\Thread;
use App\Models\ThreadLike;
use App\Models\ThreadTopic;
use Illuminate\Http\Request;
use App\Models\ThreadMessage;
use App\Models\ThreadMessageLike;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;

class ForumDashboardController extends Controller
{
    public function index() {
        $authId = Auth::id();

        $threads_raw = DB::table('threads')
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
                        ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 1 AND tl.thread_id = threads.id) likes')
                        ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 2 AND tl.thread_id = threads.id) dislikes')
                        ->selectRaw('(SELECT liked FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.thread_id = threads.id AND tl.user_id = ' . $authId . ') liked')
                        ->join('users', 'users.id', 'threads.user_id')
                        ->where('user_settings.type', 1)
                        ->join('user_settings','user_settings.user_id',  'users.id')
                        ->orderBy('threads.created_at', 'DESC');

        $threads = $threads_raw->get();

        $topics = DB::table('thread_topics')->get();
        
        $searched = [];
    
        if (isset($_GET['search'])) {
            $searched = $threads_raw->where('threads.title', 'like', '%' . $_GET['search'] . '%')->get();
        }

        return Inertia::render('Forum/Dashboard', [
            'threads' => $threads,
            'topics' => $topics,
            'searched' => $searched,
        ]);
    }

    public function newThread(Request $request) {
        $data = InertiaRequest::validate([
            'title' => ['required', 'max:255'],
            'comment' => ['required', 'max:16777214'],
        ]);

        $thread = new Thread();
        $thread->user_id = Auth::id();
        $thread->thread_topic_title = $request->thread_topic_title;
        $thread->title = $data['title'];
        $thread->comment = $data['comment'];
        $thread->save();

        return redirect()->back();
    }

    public function addThreadMessage(Request $request) {

        $data = InertiaRequest::validate([
            'message' => ['required', 'max:16777214'],
        ]);

        $threadmessage = new ThreadMessage();
        $threadmessage->thread_id = $request->thread_id;
        $threadmessage->user_id = Auth::id();
        $threadmessage->message = $data['message'];
        $threadmessage->save();

        return redirect()->back();
    }

    public function likeThread(Request $request) {
        $temp = ThreadLike::where('user_id', Auth::id())->where('thread_id', $request->thread_id)->first();
        
        $threadlike;

        if ($temp == null) {
            $threadlike = new ThreadLike();
            $threadlike->user_id = Auth::id();
            $threadlike->thread_id = $request->thread_id;
        } else {
            $threadlike = $temp;
        }

        $threadlike->liked = $request->liked;
        $threadlike->save();

        return redirect()->back();
    }

    public function likeThreadMessage(Request $request) {
        $temp = ThreadMessageLike::where('user_id', Auth::id())->where('thread_message_id', $request->thread_message_id)->first();
        
        $threadlike;

        if ($temp == null) {
            $threadlike = new ThreadMessageLike();
            $threadlike->user_id = Auth::id();
            $threadlike->thread_message_id = $request->thread_message_id;
        } else {
            $threadlike = $temp;
        }
        $threadlike->liked = $request->liked;
        $threadlike->save();

        return redirect()->back();
    }

}
