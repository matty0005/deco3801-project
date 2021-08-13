<?php

namespace App\Http\Controllers\Account;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class BillingController extends Controller
{
    public function index() {
        return Inertia::render('Parents/Settings/Billing');
    }
}
