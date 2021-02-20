<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Service extends Model
{
    use HasFactory;
    protected $fillable = ['user_id','service','value'];
    public static function insertOrUpdate($request)
    {
       Service::updateOrCreate(
                ['id'   =>  $request['id']],
                [
                    'user_id'                => Auth::id(),
                    'service'                => $request['service'],
                    'value'                  => $request['value'],
                ]
          );
    }
    public static function deleteCustom($request)
    {
        Service::find($request->id)->delete();
    }
}
