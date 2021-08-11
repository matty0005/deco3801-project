<?php

namespace App\Http\Controllers\Quizzes;

use Inertia\Inertia;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EvaluationController extends Controller
{
    public function index() {
        return Inertia::render('Parents/Quizzes/Evaluation/Index');
    }
}
