<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Education extends Model
{
    use HasFactory;
    protected $table = 'eductaions';
    protected $fillable = ['user_id','title','place','from','to','description'];

    public static function insertOrUpdate($data){
        foreach($data as $value){
            Education::updateOrCreate(
                ['id'   =>  $value['id']],
                [
                 'user_id'      => Auth::id(),
                 'title'        => $value['title'],
                 'place'        => $value['place'],
                 'from'         => $value['from'],
                 'to'           => $value['to'],
                 'description'  => $value['description'],
                 ]
            );
        }
    }
    public static function deleteCustom($request)
    {
        Education::find($request->id)->delete();
    }
}
