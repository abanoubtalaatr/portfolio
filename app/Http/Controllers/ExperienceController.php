<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Experience;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ExperienceController extends Controller
{
  public static function showPageThatYouWantWithData($pageName)
  {
    $experience = self::getAllExperience();
    return view("dashboard.resume.experience.$pageName",compact('experience'));
  }
  public function showAllExperience()
  {
    return self::showPageThatYouWantWithData('index');
  }
  public function showAddPage()
  {
    return view('dashboard.resume.experience.add');
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
      Experience::insertOrUpdate($request->experience);
      return self::showPageThatYouWantWithData('index');
  }
  public function deleteExpeience(Request $request)
  {
    Experience::deleteCustom($request);
    return self::showPageThatYouWantWithData('index');
  }
  public function getDataForEditExperience($id)
  {
    $experience = self::getParticularExperience($id);
    return view('dashboard.resume.experience.editExperience',compact('experience'));
  }
  public static function getAllExperience()
  {
       $data = Experience::where("user_id",Auth::id())->get();
       if(!is_null($data)){
          return $data;
       }
  }
  public static function getParticularExperience($id)
  {
    $expectedExperience = Experience::find($id);
    return $expectedExperience;
  }

}//class
