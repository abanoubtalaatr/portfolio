<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Knowledge;

class KnowledgeController extends Controller
{
       //
  public static function showPageThatYouWantWithData($pageName)
  {
    $knowledge = self::getAllKnowledge();
    return view("dashboard.resume.knowledge.$pageName",compact('knowledge'));
  }
  public function showAllKnowledge()
  {
    return self::showPageThatYouWantWithData('index');
  }
  public function showAddPage()
  {
    return view('dashboard.resume.knowledge.add');
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
      Knowledge::insertOrUpdate($request->knowledge);
      return back();
  }
  public function deleteKnowledge (Request $request)
  {

    Knowledge::deleteCustom($request);
    return self::showPageThatYouWantWithData('index');
  }
  public function getDataForEditKnowledge($id)
  {
    $knowledge = self::getParticularKnowledge($id);
    return view('dashboard.resume.knowledge.editKnowledge',compact('knowledge'));
  }
  public static function getAllKnowledge()
  {
       $data = Knowledge::where("user_id",Auth::id())->get();
       if(!is_null($data)){
          return $data;
       }
  }
  public static function getParticularKnowledge($id)
  {
    $expectedKnowledge= Knowledge::find($id);
    return $expectedKnowledge;
  }
}
