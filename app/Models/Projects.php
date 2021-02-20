<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\works\ProjectController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Database\Eloquent\Model;

class Projects extends Model
{
    use HasFactory;
   
    protected $fillable = ['user_id','name','images','live','link','description','category','client','created'];
    
    public static function insert($request)
    {
      $path   = ProjectController::setPath();
      $images =  ImageController::uploadImages($request['images'],$path);

      Projects::updateOrCreate(
        [
            'user_id'            => Auth::id(),
            'name'               => $request['name'],
            'images'             => $images,
            'link'               => $request['link'],
            'live'               => $request['live'],
            'description'        => $request['description'],
            'category'           => $request['category'],
            'client'             => $request['client'],
            'created'            => $request['created'],
        ]
          );
    }
    public static function updateCustom($request)
    {

      $path     =   ProjectController::setPathWhileUpdate($request['id']);
      $images   =   ImageController::checkExistImageInRequest($request,$path);
      $images  .=   $request['oldImages'];

      Projects::updateOrCreate(
        ['id'=>$request['id']],
        [
            'user_id'            => Auth::id(),
            'name'               => $request['name'],
            'images'             => $images,
            'link'               => $request['link'],
            'live'               => $request['live'],
            'description'        => $request['description'],
            'category'           => $request['category'],
            'client'             => $request['client'],
            'created'            => $request['created'],
        ]
          );
    }
    public static function getLastRow()
    {
        $rows =  Projects::where('id','>',0)->get()->last();
        if(is_null($rows)){
         return $rows = 0;
        }
        return $rows['id'];
    }
    public static function getAll()
    {
         $data = Projects::where("user_id",Auth::id())->get();
         if(!is_null($data)){
            return $data;
         }
    }
    public static function deleteImage($request){
      $project   =  self::getParticular($request->Id);
      $images    =  self::deleteLastElementFromArray($project['images']);
      $newImages =  self::extractImageYouWantToDeleteItFromArrayImages($images,$request->Image);
      self::updateImages($request->Id,$newImages);
      ImageController::deleteImage($request->Image,"/works/project/user/". Auth::id().'/'.self::getLastRow());
    }
    // get project that  you want
    public  static function getParticular($id){
      $expectedproject= Projects::find($id);
      return $expectedproject;
    }
    public static function extractImageYouWantToDeleteItFromArrayImages($images,$imageComeFromRequest){
      $newImage = '';
      foreach($images as $image){
        if($image !== $imageComeFromRequest){
           $newImage .=  $image . ',';
        }
      }
      return $newImage;
    }
    public static function deleteLastElementFromArray($images){
      $images = explode(',',$images);
      array_pop($images);
      return $images;
    }
    public static function updateImages($id,$newImage){
      self::getParticular($id)->update(['images'=>$newImage]);
    }
    public static function deleteCustom($request)
    {
        
        Projects::find($request->id)->delete();
        ImageController::deleteImages($request->id);
    }

}
