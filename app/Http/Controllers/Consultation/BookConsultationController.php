<?php

namespace App\Http\Controllers\Consultation;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request as InertiaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;



class BookConsultationController extends Controller
{
    public function index($doctor_id) {

        // $doctor = DB::table('doctors')
        //         ->select(
        //             'doctors.user_id',
        //             'users.name', 
        //             'users.email',
        //             'doctors.gender', 
        //         )
        //         ->selectRaw('(SELECT COUNT(*) FROM ratings WHERE ratings.doctor_id = doctors.id) count, (SELECT ROUND(AVG(rating), 1) FROM ratings WHERE ratings.doctor_id = doctors.id) rating, 
        //         (SELECT time FROM doctor_available_dates d WHERE d.doctor_id = doctors.id) time')
        //         ->join('users', 'users.id', 'doctors.user_id')
        //         ->where('doctors.user_id', $doctor_id)
        //         ->get();

        $doctor = DB::table('users')->where('users.id', $doctor_id)->first(); 
        $doctor_info = DB::table('doctors')
                ->select(
                    'doctors.user_id',
                    'doctors.gender', 
                )
                ->selectRaw('(SELECT COUNT(*) FROM ratings WHERE ratings.doctor_id = doctors.id) count, (SELECT ROUND(AVG(rating), 1) FROM ratings WHERE ratings.doctor_id = doctors.id) rating, 
                (SELECT time FROM doctor_available_dates d WHERE d.doctor_id = doctors.id) time')
                ->where('doctors.user_id', $doctor_id)
                ->first();
        
        return Inertia::render('Parents/Consultation/BookConsultation',[
            'doctor' => $doctor,
            'doctor_info' => $doctor_info,
        ]);
    }

    public function addConsultation(Request $request) {
        $data = InertiaRequest::validate([
            'doctor_id' => ['required', 'max:16777214'],
            'consultation' => ['required', 'date'],
        ]); 

        
        $user_id = Auth::id(); 

        DB::table('doctor_consultations')
            ->insert([
                'doctor_id' => $data['doctor_id'],
                'user_id' => $user_id,
                'time' => $data['consultation'],
            ]); 

        return redirect()->route('evaluate/parent', ['id' => 1]);

        
    }
}
