<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Kreait\Laravel\Firebase\Facades\Firebase;

class FirebaseStorageController extends Controller
{
    public function upload(Request $request)
    {
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $image = $request->file('image');
        $imageName = time().'.'.$image->extension();

        // Upload image to Firebase Storage
        $storage = Firebase::storage();
        $storage->getBucket()->upload(
            fopen($image->getRealPath(), 'r'),
            ['name' => 'images/' . $imageName]
        );

        // Get the public URL of the uploaded image
        $imageUrl = $storage->getBucket()->object('images/' . $imageName)->signedUrl(now()->addMinutes(5));

        return response()->json(['url' => $imageUrl], 200);
    }
}


