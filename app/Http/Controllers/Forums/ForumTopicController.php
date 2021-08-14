<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use App\Models\Thread;
use App\Models\ThreadTopic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ForumTopicController extends Controller
{
    public function index($topic_title) {
        // $threads = Thread::with(['user', 'messages.user', 'thread_topic_id'])->get();

        $topic = ThreadTopic::where('title', $topic_title)->first();

        if ($topic == null) {
            return Redirect::route('forum_home'); //Potentially should change to 404
        }

        $threads = Thread::with(['user', 'messages.user'])->where('thread_topic_id', $topic->id )->get();
        //dd($threads->toArray());

        $topics = ThreadTopic::with(['threads.user', 'threads.messages.user'])->get();

        return Inertia::render('Forum/Topic', [
            'threads' => $threads->toArray(),
            'topics' => $topics->toArray(),
            'thread_topic_id' => $topic->id
        ]);
    }
}
