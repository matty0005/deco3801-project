<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ForumThreadController extends Controller
{
    public function index($thread_id) {

        $thread = DB::table('threads')->select(
                        'threads.id',
                        'threads.title',
                        'threads.comment',
                        'threads.created_at',
                        'users.name',
                    )->where('threads.id', $thread_id)
                    ->join('users', 'users.id', 'threads.user_id')
                    ->first();

        $messages = DB::table('thread_messages')->select(
                        'thread_messages.id',
                        'thread_messages.message',
                        'thread_messages.created_at',
                        'users.name',
                    )->where('thread_messages.thread_id', $thread_id)
                    ->join('users', 'users.id', 'thread_messages.user_id')
                    ->get();

        return Inertia::render('Forum/ThreadPage', [
            'thread' => $thread,
            'messages' => $messages->toArray(),
        ]);
    }
}
