<?php

namespace App\Http\Controllers\Consultation;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ConsultationController extends Controller
{
    public function index() {
        return Inertia::render('Parents/Consultation/Index');
    }
}
