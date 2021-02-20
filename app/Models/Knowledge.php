<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;


class Knowledge extends Model
{
    use HasFactory;
    protected $fillable = ['name','user_id'];
    public static function insertOrUpdate($data)
    {
        foreach($data as $value){
            Knowledge::updateOrCreate(
                ['id'   =>  $value['id']],
                [
                 'user_id'      => Auth::id(),
                 'name'  => $value['name'],
                 ]
            );
        }
    }//store
    public static function deleteCustom($request)
    {
        Knowledge::find($request->id)->delete();
    }
}
