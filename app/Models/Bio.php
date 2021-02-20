<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Bio extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','bio','age','residence','freelancer','address','phone','email'];
    public static function insertOrUpdate($request)
    {
       Bio::updateOrCreate(
                ['id'   =>  $request['id']],
                [
                    'user_id'                => Auth::id(),
                    'bio'                    => $request['bio'],
                    'age'                    => $request['age'],
                    'email'                    => $request['email'],
                    'phone'                    => $request['phone'],
                    'residence'              => $request['residence'],
                    'freelancer'             => $request['freelancer'],
                    'address'                => $request['address'],
                ]
          );
    }
    public static function deleteCustom($request)
    {
        Bio::find($request->id)->delete();
    }
}
