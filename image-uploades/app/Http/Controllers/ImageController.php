<?php

namespace App\Http\Controllers;

use App\Models\Image;
use Illuminate\Http\Request;

class ImageController extends Controller
{
    function upload(Request $request)
    {
        $path = $request->file('file')->store('public');
        $filenamearray = explode('/', $path);
        $filename = $filenamearray[1];
        $img = new Image();
        $img->path = $filename;

        if ($img->save()) {
            return "image uploaded successfully";
        } else {
            return "something wrong image not uploaded";
        }
    }

    function list()
    {
        $images = Image::all();
        return view('display', ['images' => $images]);
    }
}

