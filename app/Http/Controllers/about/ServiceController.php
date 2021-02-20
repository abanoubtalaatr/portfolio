<?php

namespace App\Http\Controllers\about;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    //
    public static function showPageThatYouWantWithData($pageName)
    {
      $services = self::getAll();
      return view("dashboard.about.service.$pageName",compact('services'));
    }
    public function showAll()
    {
      return self::showPageThatYouWantWithData('index');
    }
    public function showAddPage()
    {
      return view('dashboard.about.service.add');
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
        Service::insertOrUpdate($request->service);
        return back();
    }
    public function delete (Request $request)
    {
        Service::deleteCustom($request,'/about/service');
        return self::showPageThatYouWantWithData('index');
    }
    public function getDataForEdit($id)
    {
      $service = self::getParticular($id);
      return view('dashboard.about.service.editService',compact('service'));
    }
    public static function getAll()
    {
         $data = Service::where("user_id",Auth::id())->get();
         if(!is_null($data)){
            return $data;
         }
    }
    public static function getParticular($id)
    {
      $expectedservice= Service::find($id);
      return $expectedservice;
    }

}
