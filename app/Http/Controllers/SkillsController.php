<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skill;
use Illuminate\Support\Facades\Auth;

class SkillsController extends Controller
{
    public static function showPageThatYouWantWithData($pageName)
  {
    $skill = self::getAllskill();
    return view("dashboard.resume.skill.$pageName",compact('skill'));
  }
  public function showAllskill()
  {
    return self::showPageThatYouWantWithData('index');
  }
  public function showAddPage()
  {
    return view('dashboard.resume.skill.add');
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
      
      skill::insertOrUpdate($request->skill);
      return back();
  }
  public function deleteskill (Request $request)
  {
    skill::deleteCustom($request);
    return self::showPageThatYouWantWithData('index');
  }
  public function getDataForEditskill($id)
  {
    $skill = self::getParticularskill($id);
    return view('dashboard.resume.skill.editskill',compact('skill'));
  }
  public static function getAllskill()
  {
       $data = skill::where("user_id",Auth::id())->get();
       if(!is_null($data)){
          return $data;
       }
  }
  public static function getParticularskill($id)
  {
    $expectedEductaion = skill::find($id);
    return $expectedEductaion;
  }

}
