<?php

namespace App\Http\Controllers\about;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Bio;

class BioController extends Controller
{
    //
    public static function showPageThatYouWantWithData($pageName)
    {
      $bios = self::getAll();
      return view("dashboard.about.bio.$pageName",compact('bios'));
    }
    public function showAll()
    {
      return self::showPageThatYouWantWithData('index');
    }
    public function showAddPage()
    {
      return view('dashboard.about.bio.add');
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
        Bio::insertOrUpdate($request->bio);
        return back();
    }
    public function delete (Request $request)
    {
        Bio::deleteCustom($request,'/about/bio');
        return self::showPageThatYouWantWithData('index');
    }
    public function getDataForEdit($id)
    {
      $bio = self::getParticular($id);
      return view('dashboard.about.bio.editbio',compact('bio'));
    }
    public static function getAll()
    {
         $data = Bio::where("user_id",Auth::id())->get();
         if(!is_null($data)){
            return $data;
         }
    }
    public static function getParticular($id)
    {
      $expectedbio= Bio::find($id);
      return $expectedbio;
    }
}
