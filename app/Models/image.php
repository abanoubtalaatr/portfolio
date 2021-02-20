<?php

namespace App\Models;

use App\Http\Controllers\MainImage\MainImageController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\ImageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class image extends Model
{
    use HasFactory;
    protected $table = 'images';
    protected $fillable = ['image','user_id'];
    public static function insert($request)
    {
       
      $path   =  MainImageController::setPath();
      $image =  ImageController::uploadImage($request['image'],$path);

      image::updateOrCreate(
        [
            'user_id'            => Auth::id(),
            'image'               => $image,
        ]
          );
    }
    public static function deleteImage($request){
        image::find($request['id'])->delete();
        $path      =  MainImageController::setPath();
        ImageController::deleteImage($request['image'],$path);
      }
}
