<?php

namespace App\Http\Controllers\Quizzes;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EvaluationController extends Controller
{
    public function index() {
        $quizzes = DB::table('quiz_questions')
            ->select('name as title',
                    'id')
            ->where('type', 'parent')
            ->get();
        
        return Inertia::render('Parents/Quizzes/Evaluation/Index', [
            'quizList' => $quizzes
        ]);
    }
}
