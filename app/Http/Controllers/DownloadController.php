<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DownloadController extends Controller
{
    public function download(Request $request, $file)
    {
        // Get the path to the file in the storage/app directory.
        $path = storage_path('app/uploads/' . $file,);
        // Check if the file exists.
//        if (!Storage::exists($path)) {
//            abort(404);
//        }
        // Return the file for download.
        return Storage::download($path, $file);
    }
}

