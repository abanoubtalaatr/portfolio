<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Language;

class LanguageController extends Controller
{
  public static function showPageThatYouWantWithData($pageName)
  {
    $language = self::getAllLanguage();
    return view("dashboard.resume.language.$pageName",compact('language'));
  }
  public function showAllLanguage()
  {
    return self::showPageThatYouWantWithData('index');
  }
  public function showAddPage()
  {
    return view('dashboard.resume.language.add');
  }
  public function showDeletePage()
  {
    return self::showPageThatYouWantWithData('delete');
  }
  public function showEditPage()
  {
    return self::showPageThatYouWantWithData('edit');
  }
  public function insertOrUpdate(Request $request)
  {
      Language::insertOrUpdate($request->language);
      return back();
  }
  public function deleteLanguage (Request $request)
  {

    Language::deleteCustom($request);
    return self::showPageThatYouWantWithData('index');
  }
  public function getDataForEditLanguage($id)
  {
    $language = self::getParticularLanguage($id);
    return view('dashboard.resume.language.editLanguage',compact('language'));
  }
  public static function getAlllanguage()
  {
       $data = Language::where("user_id",Auth::id())->get();
       if(!is_null($data)){
          return $data;
       }
  }
  public static function getParticularLanguage($id)
  {
    $expectedLanguage= Language::find($id);
    return $expectedLanguage;
  }
}
