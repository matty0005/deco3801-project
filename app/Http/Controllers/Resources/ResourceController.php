<?php

namespace App\Http\Controllers\Resources;

use Inertia\Inertia;
use App\Models\ResourceLike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ResourceController extends Controller
{
    public function index($resource_id) {

        $authId = Auth::id();

        $resource = DB::table('resources')->where('id', $resource_id)
                        ->select('resources.id',
                            'resources.title',
                            'resources.content'
                        )
                        ->selectRaw('(SELECT COUNT(*) FROM resource_likes tl JOIN resources t ON t.id = tl.resource_id WHERE tl.liked = 1 AND tl.resource_id = resources.id) likes')
                        ->selectRaw('(SELECT liked FROM resource_likes tl JOIN resources t ON t.id = tl.resource_id WHERE tl.resource_id = resources.id AND tl.user_id = ' . $authId . ') liked')
                        ->first();

        

        return Inertia::render('Parents/Resources/Resource', [
            'resource' => $resource,
        ]);
    }

    public function likeResource(Request $request) {
        $temp = ResourceLike::where('user_id', Auth::id())->where('resource_id', $request->resource_id)->first();
        
        $resourcelike;

        if ($temp == null) {
            $resourcelike = new ResourceLike();
            $resourcelike->user_id = Auth::id();
            $resourcelike->resource_id = $request->resource_id;
        } else {
            $resourcelike = $temp;
        }

        $resourcelike->liked = $request->liked;
        $resourcelike->save();

        return redirect()->back();
    }
}
