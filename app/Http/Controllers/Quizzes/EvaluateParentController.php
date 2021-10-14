<?php

namespace App\Http\Controllers\Quizzes;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;

class EvaluateParentController extends Controller
{
    public function index($id) {
        $quiz = DB::table('quiz_questions')
            ->select('name as title', 
                    'description',
                    'questions')
            ->where('type', 'parent')
            ->where('id', $id)
            ->first();
        
        $quiz->questions = json_decode($quiz->questions) ;
        return Inertia::render('Parents/Quizzes/Evaluation/Quiz', [
            'content' => $quiz
        ]);
    }

    public function store($id) {
        $data = InertiaRequest::validate([
            'response' => ['max:255'],
        ]);


        DB::table('quiz_responses')
            ->insert([
                'quiz_id'=>$id,
                'user_id'=>Auth::user()->id,
                'question'=>"placeholder",
                "response"=>"placeholder",
                'created_at'=>now(),
                'updated_at'=>now()
            ]) ;
            
        return Redirect::route('consult_home');

    }
}
