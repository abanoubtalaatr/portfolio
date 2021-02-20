<?php

namespace App\Http\Controllers\MainImage;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\image;
use Illuminate\Support\Facades\Auth;

class MainImageController extends Controller
{
    //
    public static function index(){
        $image = image::where('user_id',Auth::id())->get()->last();
      
        return view('dashboard.image.index',compact('image'));
    }
    public function showAddPage()
    {
      return view('dashboard.image.add');
    }
    public function insert(Request $request)
    {
      image::insert($request->all());
      return self::index();
    }
    public static function setPath(){
        return '/image/user/'.Auth::id();
    }
    public function deleteImage(Request $request)
    {
      //delete image from database
     
      image::deleteImage($request->all());
      return self::index();

    }
}
