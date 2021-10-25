<?php

namespace App\Http\Controllers\Consultation;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class ConsultationController extends Controller
{
    public function index() {

        $doctors = DB::table('doctors')
                ->select(
                    'doctors.user_id',
                    'users.name', 
                    'users.email',
                    'doctors.gender', 

                )
                ->selectRaw('(SELECT COUNT(*) FROM ratings WHERE ratings.doctor_id = doctors.id) count, (SELECT ROUND(AVG(rating), 1) FROM ratings WHERE ratings.doctor_id = doctors.id) rating, 
                (SELECT time FROM doctor_available_dates d WHERE d.doctor_id = doctors.id) time')
                ->join('users', 'users.id', 'doctors.user_id')
                ->get();

        $bookings = DB::table('doctor_consultations')
                ->select(
                    'doctor_consultations.doctor_id',
                    'doctor_consultations.user_id',
                    'users.name as who', 
                    'doctor_consultations.time as when', 
                    'users.email as contact', 
                    'doctors.specialisation as type',
                    'user_settings.avatar',
                    'doctor_consultations.id'
                )
                ->join('doctors', 'doctors.user_id', 'doctor_consultations.doctor_id')
                ->join('users', 'users.id', 'doctor_consultations.doctor_id')
                ->join('user_settings', 'user_settings.user_id', 'users.id')
                ->where('doctor_consultations.user_id', Auth::id())
                ->get(); 
        
                
        return Inertia::render('Parents/Consultation/Index',[
            'doctors' => $doctors,
            'bookings' => $bookings,
        ]);
    }
}
