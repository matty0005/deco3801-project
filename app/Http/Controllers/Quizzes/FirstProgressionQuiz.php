<?php

namespace App\Http\Controllers\Quizzes;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;

class FirstProgressionQuiz extends Controller
{
    public function index() {
        return Inertia::render('Parents/Quizzes/Progressive');
    }

    public function create() {
        $data = InertiaRequest::validate([            
            'responses' => ['required', 'max:65535']
        ]);


        $quiz_id = DB::table('parent_progress_quiz')
            ->insertGetId([
                'user_id' => Auth::user()->id,
                'last_completed' => now()
            ]);
        
        
        $responses = [];


        for ($x = 0; $x < count($data['responses']); $x++) {
            $vals = collect($data['responses'][$x]);

            $values = [
                'user_id' => Auth::user()->id,
                'quiz_id' => $quiz_id,
                'question' => $vals->keys()->first(),
                'response' => $vals->values()->first()

            ];
            array_push($responses, $values);
        }

        
        DB::table('quiz_responses')
            ->insert($responses);
        
        return Redirect::route('dashboard');
        

    }
}
