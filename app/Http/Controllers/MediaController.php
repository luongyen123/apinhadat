<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 3/25/2019
 * Time: 09:25
 */

namespace App\Http\Controllers;

use Auth;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\MediaClass;

class MediaController extends Controller
{
    use MediaClass;

    public function uploadImage(Request $request){
        $user = User::find(Auth::id());
        $this->validate($request, [
            'upload' => 'mimes:jpeg,jpg,gif,png|required'
        ]);
        $file = $request->file('upload');
        $filename = $file->getClientOriginalName();
        $url = $this->upload($filename,"news",Auth::id(),$user->name,"uploads");
        echo "<script>window.parent.CKEDITOR.tools.callFunction(1,'{$url}','')</script>";
    }
}