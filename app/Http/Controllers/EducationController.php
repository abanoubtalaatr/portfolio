<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Education;
use Illuminate\Support\Facades\Auth;

class EducationController extends Controller
{
    //
  public static function showPageThatYouWantWithData($pageName)
  {
    $education = self::getAllEducation();
    return view("dashboard.resume.Education.$pageName",compact('education'));
  }
  public function showAllEducation()
  {
    return self::showPageThatYouWantWithData('index');
  }
  public function showAddPage()
  {
    return view('dashboard.resume.education.add');
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
      Education::insertOrUpdate($request->education);
      return back();
  }
  public function deleteEducation (Request $request)
  {
    Education::deleteCustom($request);
    return self::showPageThatYouWantWithData('index');
  }
  public function getDataForEditeducation($id)
  {
    $education = self::getParticularEducation($id);
    return view('dashboard.resume.education.editEducation',compact('education'));
  }
  public static function getAllEducation()
  {
       $data = Education::where("user_id",Auth::id())->get();
       if(!is_null($data)){
          return $data;
       }
  }
  public static function getParticularEducation($id)
  {
    $expectedEductaion = Education::find($id);
    return $expectedEductaion;
  }

}
