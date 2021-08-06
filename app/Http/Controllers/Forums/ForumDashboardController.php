<?php

namespace App\Http\Controllers\Forums;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ForumDashboardController extends Controller
{
    public function index() {
        return Inertia::render('Forum/Dashboard');
    }
}
