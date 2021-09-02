<?php

namespace App\Http\Controllers\Account;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ManageChildController extends Controller
{
    public function index() {
        return Inertia::render('Parents/Settings/ManageChild');
    }
}
