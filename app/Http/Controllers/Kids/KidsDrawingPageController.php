<?php

namespace App\Http\Controllers\Kids;

use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\ImageManagerStatic as Image;
use Illuminate\Support\Facades\Request as InertiaRequest;


class KidsDrawingPageController extends Controller
{
    public function index() {
        $kidsMode = Session::get('kidsMode');

        if (!$kidsMode) {
            return Inertia::render('Parents/Dashboard');
        }
        
        $specificRequested = 0; // This will be used if the doctor requests a certain image
        $id = 1;

        if ($specificRequested != 0) {
            $id = $specificRequested;
        } else {
            $count = DB::table('drawing_items')
                ->count();

                $id = rand(1, $count - 1);

        }

        $toDraw = DB::table('drawing_items')
            ->select('item',
                    'id'
            )
            ->where('id', $id)
            ->first();        

        
        return Inertia::render('Kids/Drawing/Index', [
            'item' => $toDraw->item,
            'itemID' => $toDraw->id,
        ]);
    }

    public function store() {
        $data = InertiaRequest::validate([
            'drawing' => ['required'],
            'item_id' => ['required']
        ]);

        DB::table('kids_drawing')
            ->insert([
                'drawing_items_id' => $data['item_id'],
                'user_id' => Auth::user()->id,
                'image' => $data['drawing'],
                'created_at' => now(),
                'updated_at' => now()
            ]);
        
        return Redirect::route('dashboard');
    }
    
}
