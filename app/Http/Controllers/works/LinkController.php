<?php

namespace App\Http\Controllers\works;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Link;
use Illuminate\Http\Request;

class LinkController extends Controller
{
    public static function showPageThatYouWantWithData($pageName)
    {
      $links = self::getAll();
      return view("dashboard.works.link.$pageName",compact('links'));
    }
    public function showAll()
    {
      return self::showPageThatYouWantWithData('index');
    }
    public function showAddPage()
    {
      return view('dashboard.works.link.add');
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
       
        Link::insertOrUpdate($request->link);
        return back();
    }
    public function delete (Request $request)
    {
        Link::deleteCustom($request,'/works/link');
        return self::showPageThatYouWantWithData('index');
    }
    public function getDataForEdit($id)
    {
      $link = self::getParticular($id);
      return view('dashboard.works.link.editLink',compact('link'));
    }
    public static function getAll()
    {
         $data = Link::where("user_id",Auth::id())->get();
         if(!is_null($data)){
            return $data;
         }
    }
    public static function getParticular($id)
    {
      $expectedLink= Link::find($id);
      return $expectedLink;
    }
}

