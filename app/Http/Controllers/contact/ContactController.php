<?php

namespace App\Http\Controllers\contact;

use App\Http\Controllers\Controller;
use App\Http\Controllers\MailController;
use App\Models\Contact;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public static function showPageThatYouWantWithData($pageName)
    {
      $contacts = self::getAll();
      return view("dashboard.contact.$pageName",compact('contacts'));
    }
    public function showAll()
    {
      return self::showPageThatYouWantWithData('index');
    }
    public static function getAll()
    {
         $data = Contact::where("to",Auth::id())->get();
         if(!is_null($data)){
            return $data;
         }
    }
    public function delete (Request $request)
    {
        Contact::deleteCustom($request);
        return self::showPageThatYouWantWithData('index');
    }
    public static function insert(Request $request)
    {
          self::validateRequest($request);
          Contact::insert($request->all());
          MailController::sendEmail($request->all());
          return back();
      

    }
    public static function validateRequest(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'fullName'    => 'required|max:255',
            'email'       => 'required',
            'message'     => 'required',
         ]);

        if ($validator->fails()) {
         
            return redirect('home')
                        ->withErrors($validator)
                        ->withInput();
        }else{
          return true;
        }
    }
}
