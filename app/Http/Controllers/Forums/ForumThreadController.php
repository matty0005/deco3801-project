<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Redirect;

class ForumThreadController extends Controller
{
    public function index($topic_title, $thread_id) {

        $topic = DB::table('thread_topics')->where('title', $topic_title)->first();

        if ($topic == null) {
            return Redirect::route('forum_home'); //Potentially should change to 404
        }

        $thread = DB::table('threads')->select(
                        'threads.id',
                        'threads.title',
                        'threads.comment',
                        'threads.created_at',
                        'threads.thread_topic_title',
                        'user_settings.display_name',
                    )->where('threads.id', $thread_id)
                    ->join('users', 'users.id', 'threads.user_id')
                    ->join('user_settings','user_settings.user_id',  'users.id')
                    ->first();

        if ($thread == null) {
            return Redirect::route('/forum/topic/' .  $topic->title);
        }

        $messages = DB::table('thread_messages')->select(
                        'thread_messages.id',
                        'thread_messages.message',
                        'thread_messages.created_at',
                        'user_settings.display_name',
                    )->where('thread_messages.thread_id', $thread_id)
                    ->join('users', 'users.id', 'thread_messages.user_id')
                    ->join('user_settings','user_settings.user_id',  'users.id')
                    ->get();

        $topics = DB::table('thread_topics')->get();

        return Inertia::render('Forum/ThreadPage', [
            'thread' => $thread,
            'messages' => $messages->toArray(),
            'topics' => $topics->toArray(),
        ]);
    }
}
