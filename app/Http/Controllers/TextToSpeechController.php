<?php

namespace App\Http\Controllers;

use Cion\TextToSpeech\Facades\TextToSpeech;
use Illuminate\Http\Request;

class TextToSpeechController extends Controller
{
    public function index (Request $request) {

        $options = [
            'engine' => env('AWS_VOICE_ENGINE')
        ];

        $path = TextToSpeech::convert($request->text, $options);
        $path = str_replace("public", "storage", $path);

        return response()->json([
            'path' => $path
        ]);
    }
}
