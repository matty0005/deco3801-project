<?php

namespace App\Http\Controllers;

use Cion\TextToSpeech\Facades\TextToSpeech;
use Illuminate\Http\Request;

class TextToSpeechController extends Controller
{
    public function index (Request $request) {

        $path = TextToSpeech::convert($request->text);
        $path = str_replace("public", "storage", $path);

        return response()->json([
            'path' => $path
        ]);
    }
}
