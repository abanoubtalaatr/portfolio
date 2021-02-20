<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class ImageController extends Controller
{
    public static function uploadImage($image,$path)
    {
         //one image 
        $imageName = time().'.'.$image->extension();
        $image->move(public_path($path), $imageName);
        return $imageName;
    }
    public static function checkExistImageInRequest($request,$path)
    {
       if(isset($request['images'])) {
          
           return self::uploadImages($request['images'],$path);
       }else {
          return false;
       }
    }
    public static function deleteImage($image,$path)
    {
        $image_path = public_path($path).'/'.$image;
        unlink($image_path);
    }
    public static function uploadImages($images,$path)
    {
        //collection of image
        $imageNames = '';
        foreach($images as $image) {
            $imageName = time().rand().'.'.$image->extension();
            $image->move(public_path($path), $imageName);
            $imageNames .= $imageName . ',';
        }
        return $imageNames;
    }
    public static function deleteImages($id){
        $path = public_path('works/project/user/'.Auth::id().'/'.$id);
        $handle = opendir($path);
        while($file = readdir($handle)){
            if($file !== '.' && $file !== '..'){
                unlink($path.'/'.$file);
            }
        }
        return rmdir($path);
    }
    public static function checkExistOldImagesInRequest($request)
    {
        if(isset($request['oldImages'])){
           return $request['oldImages'];
        }
    }
}
