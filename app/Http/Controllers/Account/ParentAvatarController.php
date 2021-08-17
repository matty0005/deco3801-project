<?php

namespace App\Http\Controllers\Account;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Request as InertiaRequest;
use Intervention\Image\ImageManagerStatic as Image;


class ParentAvatarController extends Controller
{
    public function update() {
        $data = InertiaRequest::validate([
            'avatar' => ['image', 'max:4096'],
        ]);

        $imagedata = file_get_contents($data['avatar']);

        $image_resize = Image::make($imagedata);              
        $image_resize->resize(100, 100);
        // $base64 = (string) $image_resize->encode('data-url'); 
        $base64 = (string) $image_resize->encode('jpg', 50)->encode('data-url'); 

        // $base64 = 'data:image/png;base64,' . base64_encode($imagedata);
        
        DB::table('user_settings')
            ->where('user_id', Auth::user()->id)
            ->where('type', Session::get('kidsMode') ? 2:1)
            ->update([
                'updated_at' => now(),
                'avatar' => $base64
            ]);

        
        return Redirect::route('user_settings');
    }
}
