<?php

namespace App\Http\Controllers\Consultation;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Request as InertiaRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;



class IndividualConsultationController extends Controller
{
    public function index($consultation_id) {


        $consultation = DB::table('doctor_consultations')
                ->select(
                    'doctor_consultations.doctor_id',
                    'doctor_consultations.user_id',
                    'doctor_consultations.time as when', 
                    'doctor_consultations.id'
                )
                ->where('doctor_consultations.id', $consultation_id)
                ->first(); 
        $doctor_id = DB::table('doctor_consultations')->where('doctor_consultations.id', $consultation_id)->value('doctor_id');
        $doctor = DB::table('users')
                ->select('*')
                ->join('user_settings', 'user_settings.user_id', 'users.id')
                ->where('users.id', $doctor_id)
                ->first(); 
        $doctor_info = DB::table('doctors')
                ->select(
                    'doctors.user_id',
                    'doctors.gender', 
                    'doctors.title',
                    'doctors.link',
                    'doctors.specialisation',
                )
                ->selectRaw('(SELECT COUNT(*) FROM ratings WHERE ratings.doctor_id = doctors.id) count, (SELECT ROUND(AVG(rating), 1) FROM ratings WHERE ratings.doctor_id = doctors.id) rating, 
                (SELECT time FROM doctor_available_dates d WHERE d.doctor_id = doctors.id) time')
                ->where('doctors.user_id', $doctor_id)
                ->first();
        
        return Inertia::render('Parents/Consultation/ConsultationPage',[
            'consultation' => $consultation,
            'doctor' => $doctor,
            'doctor_info' => $doctor_info,
        ]);
    }

    public function deleteConsultation(Request $request) {
        
        $data = InertiaRequest::validate([
            'consultation_id' => ['required', 'max:16777214'],
        ]);     
        DB::table('doctor_consultations')->where('id', $data)->delete();
        return redirect()->route('dashboard');
        
    }
}
