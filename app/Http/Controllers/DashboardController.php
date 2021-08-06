<?php

namespace App\Http\Controllers;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;


class DashboardController extends Controller
{
    public function index() {
        $kidsMode = Session::get('kidsMode');

        if ($kidsMode) {
            return Inertia::render('Kids/Dashboard');

        }

        return Inertia::render('Parents/Dashboard');
    }
}
