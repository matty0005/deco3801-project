<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ForumThreadController extends Controller
{
    public function index($topic_title, $thread_id) {

        $topic = DB::table('thread_topics')->where('title', $topic_title)->first();

        if ($topic == null) {
            return Redirect::route('forum_home'); //Potentially should change to 404
        }

        $authId = Auth::id();

        $thread = DB::table('threads')->select(
                        'threads.id',
                        'threads.title',
                        'threads.comment',
                        'threads.created_at',
                        'threads.thread_topic_title',
                        'user_settings.display_name',
                        'user_settings.avatar',
                    )
                    ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 1 AND tl.thread_id = threads.id) likes')
                    ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 2 AND tl.thread_id = threads.id) dislikes')
                    ->selectRaw('(SELECT liked FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.thread_id = threads.id AND tl.user_id = ' . $authId . ') liked')
                    ->where('threads.id', $thread_id)
                    ->join('users', 'users.id', 'threads.user_id')
                    ->where('user_settings.type', 1)
                    ->join('user_settings','user_settings.user_id',  'users.id')
                    ->orderBy('threads.created_at', 'DESC')
                    ->first();

        if ($thread == null) {
            return Redirect::route('/forum/topic/' .  $topic->title);
        }

        $messages = DB::table('thread_messages')->select(
                        'thread_messages.id',
                        'thread_messages.message',
                        'thread_messages.created_at',
                        'user_settings.display_name',
                        'user_settings.avatar',
                    )
                    ->selectRaw('(SELECT COUNT(*) FROM thread_message_likes tml JOIN thread_messages t ON t.id = tml.thread_message_id WHERE tml.liked = 1 AND tml.thread_message_id = thread_messages.id) likes')
                    ->selectRaw('(SELECT COUNT(*) FROM thread_message_likes tml JOIN thread_messages t ON t.id = tml.thread_message_id WHERE tml.liked = 2 AND tml.thread_message_id = thread_messages.id) dislikes')
                    ->selectRaw('(SELECT liked FROM thread_message_likes tml JOIN thread_messages t ON t.id = tml.thread_message_id WHERE tml.thread_message_id = thread_messages.id AND tml.user_id = ' . $authId . ') liked')
                    ->where('thread_messages.thread_id', $thread_id)
                    ->join('users', 'users.id', 'thread_messages.user_id')
                    ->where('user_settings.type', 1)
                    ->join('user_settings','user_settings.user_id',  'users.id')
                    ->orderBy('thread_messages.created_at', 'ASC')
                    ->get();

        $topics = DB::table('thread_topics')->get();

        return Inertia::render('Forum/ThreadPage', [
            'thread' => $thread,
            'messages' => $messages->toArray(),
            'topics' => $topics->toArray(),
        ]);
    }
}
