<?php

namespace App\Http\Traits;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

trait ForumTrait {
    public function getThreads($optional = array()) {
        $authId = Auth::id();
        
        $threads = DB::table('threads')
                        ->select(
                            'threads.id',
                            'threads.title',
                            'threads.comment',
                            'threads.created_at',
                            'threads.thread_topic_title',
                            'threads.anonymous',
                            'threads.approved',
                            'user_settings.display_name',
                            'user_settings.avatar'
                        )
                        ->selectRaw('(SELECT COUNT(*) FROM thread_messages tm JOIN threads t ON t.id = tm.thread_id WHERE tm.thread_id = threads.id) count')
                        ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 1 AND tl.thread_id = threads.id) likes')
                        ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 2 AND tl.thread_id = threads.id) dislikes')
                        ->selectRaw('(SELECT liked FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.thread_id = threads.id AND tl.user_id = ' . $authId . ') liked')
                        ->join('users', 'users.id', 'threads.user_id')
                        ->where('user_settings.type', 1)
                        // ->where('threads.approved', 1)
                        ->join('user_settings','user_settings.user_id',  'users.id')
                        ->orderBy('threads.created_at', 'DESC');

        if (isset($optional['topic_on_dashboard'])) {
            $threads = $threads->addSelect('threads.thread_topic_title AS topic_on_dashboard');
        }
        if (isset($optional['thread_approved'])) {
            $threads = $threads->where('threads.approved', 1);
        }

        if (isset($optional['doctors_only'])) {
            $threads = $threads->addSelect('threads.doctors_only');
        }

        if (isset($optional['thread_topic_title'])) {
            $threads = $threads->where('threads.thread_topic_title', $optional['thread_topic_title']);
        }

        if (isset($optional['thread_id'])) {
            $threads = $threads->where('threads.id', $optional['thread_id']);
            return $threads->first();;
        }

        return $threads->get();
    }

    public function getSearched($optional = array()) {

        $authId = Auth::id();

        $threads_raw = DB::table('threads')
                            ->select(
                                'threads.id',
                                'threads.title',
                                'user_settings.avatar',
                                'threads.thread_topic_title',
                                'threads.anonymous',
                            )
                            ->selectRaw('(SELECT COUNT(*) FROM thread_messages tm JOIN threads t ON t.id = tm.thread_id WHERE tm.thread_id = threads.id) count')
                            ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 1 AND tl.thread_id = threads.id) likes')
                            ->selectRaw('(SELECT COUNT(*) FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.liked = 2 AND tl.thread_id = threads.id) dislikes')
                            ->selectRaw('(SELECT liked FROM thread_likes tl JOIN threads t ON t.id = tl.thread_id WHERE tl.thread_id = threads.id AND tl.user_id = ' . $authId . ') liked')
                            ->join('users', 'users.id', 'threads.user_id')
                            ->where('user_settings.type', 1)
                            ->where('threads.approved', 1)
                            ->join('user_settings','user_settings.user_id',  'users.id')
                            ->orderBy('threads.created_at', 'DESC');
        
        if (isset($optional['topic_on_dashboard'])) {
            $threads_raw = $threads_raw->addSelect('threads.thread_topic_title AS topic_on_dashboard');
        }

        if (isset($optional['thread_topic_title'])) {
            $threads_raw = $threads_raw->where('threads.thread_topic_title', $optional['thread_topic_title']);
        }

        $searched = [];
    
        if (isset($_GET['search']) && $_GET['search'] != '') {
            $searched = $threads_raw->where('threads.title', 'like', '%' . $_GET['search'] . '%')->get();
        }

        return $searched;
    }

    public function getTopics() {
        return DB::table('thread_topics')->get();
    }
}