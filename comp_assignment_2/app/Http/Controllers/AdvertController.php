<?php

namespace App\Http\Controllers;

use App\Models\Advert;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdvertController extends Controller
{
    public function upload(Request $request)
    {
        $validator = $this->validateUpload($request->all());
        if ($validator->fails()) {
            return redirect()->back()->with('error', $validator->errors()->first())->withInput();
        }

        $image_file = $request->file('image');
        $file_name = time() . '-' . $image_file->getClientOriginalName();

        $path = $image_file->storeAs('banners', $file_name);

            Advert::create([
                'image_path' => $path,
                'no_of_display_time' => $request->display,
                'impression_limit' => $request->impression
            ]);

            return redirect()->back()->with('success', 'Image Uploaded Successfully');
    }

    private function validateUpload(array $request)
    {
        return Validator::make($request, [
            'image' => ['required', 'image', 'mimes:jpeg,jpg,png', 'max:1024'],
            'display' => ['required', 'integer'],
            'impression' => ['required', 'integer'],
        ]);


    }
}
