<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;


class ForumApproveController extends Controller
{
    public function index(){
        if (!in_array(Auth::user()->id, explode(",", env('FORUM_MOD_APPROVE_IDS'))) ) {
            abort(404, "Not Found");
        }

        $fourmsToApprove = DB::table('threads')
            ->select(
                'users.name',
                'threads.thread_topic_title',
                'threads.title',
                'threads.id'
            )
            ->where('approved', 0)
            ->join('users', 'users.id', 'threads.user_id')
            ->get();


        for ($x = 0; $x < count($fourmsToApprove); $x++ ) {
            $fourmsToApprove[$x]->option = 'Name: ' . $fourmsToApprove[$x]->name . ', Topic: ' . $fourmsToApprove[$x]->thread_topic_title . ', Title: ' . $fourmsToApprove[$x]->title;
        }


        return Inertia::render('Forum/ThreadApprove', [
            'forumsToApprove' => $fourmsToApprove
        ]);
    }

    public function store() {
        $data = InertiaRequest::validate([
            'id' => ['max:255'],
        ]);

        if (!in_array(Auth::user()->id, explode(",", env('FORUM_MOD_APPROVE_IDS'))) ) {
            abort(403, "unauthorized");
        }

        DB::table('threads')
            ->where('approved', 0)
            ->where('id', $data['id'])
            ->update([
                'approved' => 1
            ]);

        return Redirect::route('forum_approve');
    }
}
