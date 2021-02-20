<?php

namespace App\Http\Controllers\works;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\video;


class VideoController extends Controller
{
    public static function showPageThatYouWantWithData($pageName)
    {
      $videos = self::getAllVideos();
      return view("dashboard.works.video.$pageName",compact('videos'));
    }
    public function showAllVideos()
    {
      return self::showPageThatYouWantWithData('index');
    }
    public function showAddPage()
    {
      return view('dashboard.works.video.add');
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
        video::insertOrUpdate($request->video);
        return back();
    }
    public function deleteVideo (Request $request)
    {
      video::deleteCustom($request);
      return self::showPageThatYouWantWithData('index');
    }
    public function getDataForEditVideo($id)
    {
      $video = self::getParticularVideo($id);
      return view('dashboard.works.video.editVideo',compact('video'));
    }
    public static function getAllVideos()
    {
         $data = video::where("user_id",Auth::id())->get();
         if(!is_null($data)){
            return $data;
         }
    }
    public static function getParticularVideo($id)
    {
      $expectedVideo= video::find($id);
      return $expectedVideo;
    }
}
