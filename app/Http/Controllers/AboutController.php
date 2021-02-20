<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\About;
use Illuminate\Support\Facades\Auth;


class AboutController extends Controller
{
    /*
        Get about that belong auth user 
    */
    public function getAbout()
    {
        $check = About::where('id_user',Auth::id())->get()->first();
        return view('dashboard.about.index',compact('check'));
    }//getAbout

    private function validation($request)
    {
        $validator = Validator::make($request->all(), [
            'about' => 'required',
            'age' => 'integer|required',
            'residence' => 'required',
            'freelance' => 'required',
            'address' => 'required',
            'nameService' => 'required',
            'valueService' => 'required',
        ]);

        if ($validator->fails()) {
           
            if ($validator->fails()) {
                return redirect('dashboard/about')
                            ->withErrors($validator)
                            ->withInput();
            }
            return false;
        }
       
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     //detemine the request has more info 
     public function determineMoreInfo($request){

        if(is_null($request->nameInfo) && is_null($request->valueInfo)){
            return false;
          }else{
              //validation is correct and have more info
             return true;
          }
    }
    // this function to check if user has about(information ) or not
    public function determineUpdateOrStore(Request $request)
    {
        //validation has error
        if(self::validation($request)) {
            return self::validation($request);
         }
        
        $check = About::where('id_user',Auth::id())->get()->first();
        if($check){
           
            self::update($request,$check->id);
        }else{
            self::store($request);
        }
    }

    public function index()
    {
        return view('dashboard.about.index');
      // return self::getAbout();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($request)
    {
        if(self::determineMoreInfo($request)) {
            About::store($request->all(),$status = 'notnull');
        }else{
            dd('nul');
            About::store($request->all(),$status = null);
        }
        return self::getAbout();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        if(self::determineMoreInfo($request)) {
            About::updateCustom($request,$id,$status='notnull');
        }else{
            About::updateCustom($request,$id,$status=null);
        }
        echo  self::getAbout();
    }

}
