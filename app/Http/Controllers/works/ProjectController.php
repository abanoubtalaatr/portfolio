<?php

namespace App\Http\Controllers\works;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Projects;

class ProjectController extends Controller
{
    /*
      function related with showing pages like view,add,delete,edit
    */
    public static function showPageThatYouWantWithData($pageName)
    {
      $projects = Projects::getAll();
      return view("dashboard.works.project.$pageName",compact('projects'));
    }
    public function showAll()
    {
      return self::showPageThatYouWantWithData('index');
    }
    public function showAddPage()
    {
      return view('dashboard.works.project.add');
    }
    public function showDeletePage()
    {
      return self::showPageThatYouWantWithData('delete');
    }
    public function showEditPage()
    {
      return self::showPageThatYouWantWithData('edit');
    }
    /*
        function related with database
    */
    public function insert(Request $request)
    {
      Projects::insert($request->all());
      return back();
    }
    public function update(Request $request)
    {
  
        Projects::updateCustom($request->all());
        return back();
    }
    public function delete(Request $request)
    {
        Projects::deleteCustom($request,'/works/project');
        return self::showPageThatYouWantWithData('index');
    }
    public function deleteImage(Request $request)
    {
      //delete image from database
      Projects::deleteImage($request);
    }
    public function getDataForEdit($id)
    {
      $project = Projects::getParticular($id);
      return view('dashboard.works.project.editproject',compact('project'));
    }
    /*
      extra function that related with this class
    */
    public static function validateRequest($request)
    {
     
      $validator = Validator::make($request->project, [
                                      'name'        => 'required',
                                      'created'     => 'required',
                                      'description' => 'required',
                                  ]);

      if ($validator->fails()) {
        dd($validator);
          return back()
                      ->withErrors($validator)
                      ->withInput();
      }
    }
    public static function setPath()
    {
        $nextProject = Projects::getLastRow() + 1;
        return  "/works/project/user/". Auth::id().'/'. $nextProject;
    }
    public static function setPathWhileUpdate($id)
    {
        $currentProject = Projects::find($id);
        return "/works/project/user/".Auth::id().'/'. $currentProject['id'];
    }
}//class
