<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Skill extends Model
{
    use HasFactory;
    protected $table = 'skills';
    protected $fillable = ['user_id','name','features'];
    public static function insertOrUpdate($data)
    {
        foreach($data as $value){
            Skill::updateOrCreate(
                ['id'   =>  $value['id']],
                [
                 'user_id'      => Auth::id(),
                 'name'         => $value['name'],
                 'features'     => $value['features'],
                 ]
            );
        }
    }//store
    public static function deleteCustom($request)
    {
        Skill::find($request->id)->delete();
    }
}
