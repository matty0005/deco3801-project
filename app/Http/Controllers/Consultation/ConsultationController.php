<?php

namespace App\Http\Controllers\Consultation;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class ConsultationController extends Controller
{
    public function index() {

        $doctors = DB::table('doctors')
                ->select(
                    'doctors.first_name', 
                    'doctors.last_name', 
                    'doctors.gender', 
                    'doctors.email'
                )
                ->selectRaw('(SELECT COUNT(*) FROM ratings WHERE ratings.doctor_id = doctors.id) count, (SELECT ROUND(AVG(rating), 1) FROM ratings WHERE ratings.doctor_id = doctors.id) rating')
                ->get();
        return Inertia::render('Parents/Consultation/Index',[
            'doctors' => $doctors
        ]);
    }
}
