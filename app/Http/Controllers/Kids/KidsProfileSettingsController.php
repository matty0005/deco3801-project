<?php

namespace App\Http\Controllers\Kids;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Session;

class KidsProfileSettingsController extends Controller
{
    public function index() {
        $kidsMode = Session::get('kidsMode');

        if (!$kidsMode) {
            return Inertia::render('Parents/Dashboard');
        }
        
        return Inertia::render('Kids/Profile/Index');

        
    }
}
