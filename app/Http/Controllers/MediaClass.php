<?php

namespace App\Http\Controllers;

use App\Media;
use App\Http\Resources\MediaResource;
use Illuminate\Support\Facades\Storage;

trait MediaClass
{

    public function upload($file,$category,$user_id,$user_name,$type_action)
    {
        if ($category == null) {
            $path = str_replace(' ', '', $user_name);
        } else {
            $path = str_replace(' ', '', $user_name) . '/' . $category;
        }
        $filename = str_random(3).$user_id;
        //generating unique file name;
   
        if ($image_base64 != "") { // storing image in storage/app/public Folder
            $path =  $path . '/' . $filename;
            Storage::disk($type_action)->put($path, base64_decode($file));
                      
            $media = Media::create([
                'path' => env('IP_SERVER') . $path,
                'user_id' => $user_id,
            ]);            
        }
        return $path;
    }

}
