<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\ImageController;
use Illuminate\Database\Eloquent\Model;

class Link extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','name','link','image'];
    public static function insertOrUpdate($request)
    
    {
        $existImageOrNot = ImageController::checkExistImageInRequest($request,'/works/link');
        if(!$existImageOrNot) {
           Link::updateOrCreate(
                ['id'   =>  $request['id']],
                [
                    'user_id'            => Auth::id(),
                    'name'               => $request['name'],
                    'link'               => $request['link'],
                ]
            );
        }else {
            Link::updateOrCreate(
            ['id'   =>  $request['id']],
            [
                'user_id'            => Auth::id(),
                'name'               => $request['name'],
                'link'               => $request['link'],
                'image'              => $existImageOrNot,
            ]
              );
        }
    }
    public static function deleteCustom($request,$path)
    {
        ImageController::deleteImage($request->image,$path);
        Link::find($request->id)->delete();
    }
}
