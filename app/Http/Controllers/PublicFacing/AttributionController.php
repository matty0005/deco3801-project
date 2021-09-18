<?php

namespace App\Http\Controllers\PublicFacing;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AttributionController extends Controller
{
    public function index(Request $request) {
        return Inertia::render('Public/Attributions');
    }
}
