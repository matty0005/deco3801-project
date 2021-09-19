<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Traits\ForumTrait;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class ForumThreadController extends Controller
{
    use ForumTrait;
    
    public function index($topic_title, $thread_id) {

        $topic = DB::table('thread_topics')->where('title', $topic_title)->first();

        if ($topic == null) {
            return Redirect::route('forum_home'); //Potentially should change to 404
        }

        $thread = $this->getThreads(array(
            'doctors_only' => true,
            'thread_id' => $thread_id,
        ));

        if ($thread == null) {
            return Redirect::route('/forum/topic/' .  $topic->title);
        }

        $authId = Auth::id();

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

        return Inertia::render('Forum/ThreadPage', [
            'thread' => $thread,
            'messages' => $messages->toArray(),
            'topics' => $this->getTopics(),
            'searched' => $this->getSearched(array(
                'thread_topic_title' => $topic->title,
            )),
        ]);
    }
}
