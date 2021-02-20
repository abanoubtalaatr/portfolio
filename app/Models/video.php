<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ImageController;

class video extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','nameProject','path','image'];

    public static function insertOrUpdate($request)
    {
        $existImageOrNot = ImageController::checkExistImageInRequest($request,'/works/video');
        if(!$existImageOrNot) {
           video::updateOrCreate(
                ['id'   =>  $request['id']],
                [
                    'user_id'            => Auth::id(),
                    'nameProject'        => $request['name'],
                    'path'               => $request['path'],
                ]
            );
        }else {
            video::updateOrCreate(
            ['id'   =>  $request['id']],
            [
                'user_id'            => Auth::id(),
                'nameProject'        => $request['name'],
                'path'               => $request['path'],
                'image'              => $existImageOrNot,
            ]
              );
        }
    }
    public static function deleteCustom($request,$path='/works/link')
    {
        ImageController::deleteImage($request->image,$path);
        video::find($request->id)->delete();
    }
}
