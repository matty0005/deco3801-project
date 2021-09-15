<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use App\Models\Thread;
use App\Models\ThreadLike;
use App\Models\ThreadTopic;
use Illuminate\Http\Request;
use App\Models\ThreadMessage;
use App\Http\Traits\ForumTrait;
use App\Models\ThreadMessageLike;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;

class ForumDashboardController extends Controller
{
    use ForumTrait;
    
    public function index() {
        return Inertia::render('Forum/Dashboard', [
            'threads' => $this->getThreads(array(
                'topic_on_dashboard' => true,
            )),
            'topics' => $this->getTopics(),
            'searched' => $this->getSearched(array(
                'topic_on_dashboard' => true
            )),
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
        $thread->doctors_only = $request->doctors_only;
        $thread->anonymous = $request->anonymous;
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
