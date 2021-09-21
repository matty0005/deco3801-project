<?php

namespace App\Http\Controllers\Resources;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResourceDashboardController extends Controller
{
    public function index() {

        $authId = Auth::id();

        $top = DB::table('resources')
                        ->select('resources.id',
                            'resources.title',
                            'resources.content'
                        )
                        ->selectRaw('(SELECT COUNT(*) FROM resource_likes tl JOIN resources t ON t.id = tl.resource_id WHERE tl.liked = 1 AND tl.resource_id = resources.id) likes')
                        ->selectRaw('(SELECT liked FROM resource_likes tl JOIN resources t ON t.id = tl.resource_id WHERE tl.resource_id = resources.id AND tl.user_id = ' . $authId . ') liked')
                        ->orderBy('likes', 'DESC')
                        ->limit(3)
                        ->get();

        $searched = DB::table('resources')
                            ->select('resources.id',
                                'resources.title',
                                'resources.content'
                            )
                            ->selectRaw('(SELECT COUNT(*) FROM resource_likes tl JOIN resources t ON t.id = tl.resource_id WHERE tl.liked = 1 AND tl.resource_id = resources.id) likes')
                            ->selectRaw('(SELECT liked FROM resource_likes tl JOIN resources t ON t.id = tl.resource_id WHERE tl.resource_id = resources.id AND tl.user_id = ' . $authId . ') liked')
                            ->orderBy('likes', 'DESC')
                            ->get();

        return Inertia::render('Parents/Resources/Index', [
            'top_resources' => $top,
            'searched' => $searched
        ]);
    }
}
