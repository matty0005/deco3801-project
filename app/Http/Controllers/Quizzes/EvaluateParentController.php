<?php

namespace App\Http\Controllers\Quizzes;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class EvaluateParentController extends Controller
{
    public function index($id) {
        $quiz = DB::table('quiz_questions')
            ->select('name as title',
                    'questions')
            ->where('type', 'parent')
            ->where('id', $id)
            ->first();
        
        return Inertia::render('Parents/Quizzes/Evaluation/Quiz', [
            'content' => $quiz
        ]);
    }
}
