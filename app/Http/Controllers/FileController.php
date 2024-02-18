<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\File;

class FileController extends Controller
{
    public function store(Request $request)
    {

        $file = $request->file('upload');
        $path = 'ckEditor/' . date("Y-m-d");
        $filename = $file->getClientOriginalName();
        $counter = 1;
        while (Storage::disk('public')->exists($path . $filename)) {
            $filename =  $counter. '_' . $file->getClientOriginalName();
            $counter++;
        }

        $path = $file->storePubliclyAs($path, $filename, 'public');

        return response()->json([
            'url' => Storage::disk('public')->url($path)
        ]);
    }
}
