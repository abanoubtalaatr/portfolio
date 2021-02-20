<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Experience extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','company','jobTitle','from','to','description'];
    
    public static function insertOrUpdate($data)
    {
        foreach($data as $value){
            Experience::updateOrCreate(
                ['id'   =>  $value['id']],
                [
                 'user_id'      => Auth::id(),
                 'company'      => $value['company'],
                 'jobTitle'     => $value['jobTitle'],
                 'from'         => $value['from'],
                 'to'           => $value['to'],
                 'description'  => $value['description'],
                 ]
            );
        }
    }//store
    public static function deleteCustom($request)
    {
        Experience::find($request->id)->delete();
    }
}
