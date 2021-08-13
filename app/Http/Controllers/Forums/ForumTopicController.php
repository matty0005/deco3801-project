<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use App\Models\Thread;
use App\Models\ThreadTopic;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumTopicController extends Controller
{
    public function index($topic_id) {
        // $threads = Thread::with(['user', 'messages.user', 'thread_topic_id'])->get();

        $topic_id_id = ThreadTopic::where('title', $topic_id)->get();

        $threads = Thread::with(['user', 'messages.user'])->where('thread_topic_id', $topic_id_id->pluck('id') )->get();
        // dd($threads->toArray());

        $topics = ThreadTopic::with(['threads.user', 'threads.messages.user'])->get();

        return Inertia::render('Forum/Dashboard', [
            'formThreads' => $threads->toArray(),
            'formTopics' => $topics->toArray(),
            'thread_topic_id' => $topic_id_id->pluck('id')[0] // This might be risky
        ]);
    }
}
