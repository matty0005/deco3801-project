<?php

namespace App\Http\Controllers\Consultation;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class DoctorsConsultationController extends Controller
{
    public function index() {

        $doctors = DB::table('doctors')
                ->select(
                    'doctors.user_id',
                    'users.name', 
                    'users.email',
                    'doctors.gender', 
                    'doctors.specialisation as specialty'
                )
                ->selectRaw('(SELECT COUNT(*) FROM ratings WHERE ratings.doctor_id = doctors.id) count, (SELECT ROUND(AVG(rating), 1) FROM ratings WHERE ratings.doctor_id = doctors.id) rating, 
                (SELECT time FROM doctor_available_dates d WHERE d.doctor_id = doctors.id) time')
                ->join('users', 'users.id', 'doctors.user_id')
                ->get();
                
        return Inertia::render('Parents/Consultation/DoctorConsultation',[
            'doctors' => $doctors,
        ]);
    }
}
