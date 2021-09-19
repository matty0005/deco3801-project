<?php

namespace App\Http\Controllers\Resources;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ResourceDashboardController extends Controller
{
    public function index() {
        return Inertia::render('Parents/Resources/Index');
    }
}
