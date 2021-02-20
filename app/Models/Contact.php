<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $fillable = ['fullName','email','message','to'];

    public static function deleteCustom($request)
    {
        Contact::find($request->id)->delete();
    }
    public static function insert($request)
    {
         Contact::updateOrCreate(
                [
                    'fullName'               => $request['fullName'],
                    'email'                  => $request['email'],
                    'message'                => $request['message'],
                    'to'                     => $request['to'],
                ]
          );

    }
}
