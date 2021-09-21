<?php

namespace App\Http\Controllers\Resources;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ResourceController extends Controller
{
    public function index($resource_id) {

        $resource = DB::table('resources')->where('id', $resource_id)->first();

        return Inertia::render('Parents/Resources/Resource', [
            'resource' => $resource,
        ]);
    }
}
