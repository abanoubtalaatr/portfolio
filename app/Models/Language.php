<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Language extends Model
{
    use HasFactory;
    protected $table = 'languages';
    protected $fillable = ['user_id','name','level'];
    public static function insertOrUpdate($data)
    {
        foreach($data as $value){
            Language::updateOrCreate(
                ['id'   =>  $value['id']],
                [
                 'user_id'      => Auth::id(),
                 'name'         => $value['name'],
                 'level'     => $value['level'],
                 ]
            );
        }
    }//store
    public static function deleteCustom($request)
    {
        Language::find($request->id)->delete();
    }
}
