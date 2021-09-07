<?php

namespace App\Http\Controllers\Account;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;

class NotificationsController extends Controller
{
    public function index() {

        $notifcation_settings = DB::table('users')
            ->select('notifications')
            ->where('id', Auth::user()->id)
            ->first();

        $settings = [
            'forum' => false,
            'quiz' => false,
            'consultation' => false,
        ];

        if ($notifcation_settings->notifications != null) {
            $data = json_decode($notifcation_settings->notifications);

            $settings['forum'] = $data->forum;
            $settings['quiz'] = $data->quiz;
            $settings['consultation'] = $data->consultation;
        }

        return Inertia::render('Parents/Settings/Notifications', [
            'forumStatus' => $settings['forum'],
            'quizStatus' => $settings['quiz'],
            'consultationStatus' => $settings['consultation']
        ]);
    }

    public function update() {
        $data = InertiaRequest::validate([
            'forum' => ['boolean', 'required'],
            'quiz' => ['boolean', 'required'],
            'consultation' => ['boolean', 'required']
        ]);

        $storeData = [
            'forum' => $data['forum'],
            'quiz' => $data['quiz'],
            'consultation' => $data['consultation'],
        ];


        DB::table('users')
            ->where('id', Auth::user()->id)
            ->update([
                'notifications' => json_encode($storeData)
            ]);

        return Redirect::route('user_notifications');
    }
}
