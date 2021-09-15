<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use App\Models\Thread;
use App\Models\ThreadTopic;
use Illuminate\Http\Request;
use App\Http\Traits\ForumTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ForumTopicController extends Controller
{
    use ForumTrait;
    public function index($topic_title) {
        
        $topic = DB::table('thread_topics')->where('title', $topic_title)->first();

        if ($topic == null) {
            return Redirect::route('forum_home'); //Potentially should change to 404
        }

        return Inertia::render('Forum/Topic', [
            'threads' => $this->getThreads(array(
                'thread_topic_title' => $topic->title,
            )),
            'topics' => $this->getTopics(),
            'searched' => $this->getSearched(array(
                'thread_topic_title' => $topic->title,
            )),
            'thread_topic_title' => $topic->title
        ]);
    }
}
