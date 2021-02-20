<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\UserHasAbout;
use Illuminate\Support\Facades\Auth;

use function PHPUnit\Framework\isEmpty;

class About extends Model
{
    use HasFactory;

    protected $table = 'abouts';

    protected $fillable = ['about','age','residence','freelance','address','nameInfo','valueInfo','nameService','valueService'];

    public static function store($request,$status){
  
        $about = new About;

        $about->about       = $request['about'];
        $about->id_user     = Auth::id();
        $about->age         = $request['age'];
        $about->residence   = $request['residence'];
        $about->freelance   = $request['freelance'];
        $about->address     = $request['address'];

        if(!is_null($status)) {
            $allNameInfo = '';
            $allNameValue = '';
        
            foreach($request['nameInfo'] as $name) {
                $allNameInfo .= $name . ",";
            }
            
            foreach($request['valueInfo'] as $value) {
                $allNameValue .= $value . ",";
            }

            

            $about->nameInfo  =  $allNameInfo;
            $about->valueInfo =  $allNameValue ;
           
           
        }//if !is_null 
        $allServicesNames = '';
        $allServicesValues = '';
    
        foreach($request['nameService'] as $service) {
            $allServicesNames .= $service . ",";
        }
        foreach($request['valueService'] as $value) {
            $allServicesValues .= $value .",";
        }

        $about->nameService  =  $allServicesNames;
        $about->valueService =  $allServicesValues;

        $about->save();
        
        

    }
    public static function updateCustom($request,$id,$status)
    {

        $about  = About::find($id);

        $about->about       = $request['about'];
        $about->id_user     = Auth::id();
        $about->age         = $request['age'];
        $about->residence   = $request['residence'];
        $about->freelance   = $request['freelance'];
        $about->address     = $request['address'];

        if(!is_null($status)) {
            $allNameInfo = '';
            $allNameValue = '';
        
            foreach($request['nameInfo'] as $name) {
                $allNameInfo .= $name . ",";
            }
            
            foreach($request['valueInfo'] as $value) {
                $allNameValue .= $value . ",";
            }

            

            $about->nameInfo  =  $allNameInfo;
            $about->valueInfo =  $allNameValue ;
           
           
        }//if !is_null 
        $allServicesNames = '';
        $allServicesValues = '';
   
        foreach($request['nameService'] as $service) {
            $allServicesNames .= $service . ",";
        }
        foreach($request['valueService'] as $value) {
            $allServicesValues .= $value .",";
        }

        $about->nameService  =  $allServicesNames;
        $about->valueService =  $allServicesValues;

        $about->save();
        
    }

}
