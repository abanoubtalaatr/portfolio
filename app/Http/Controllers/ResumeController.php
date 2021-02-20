<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EductaionController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\KnowledageController;


class ResumeController extends Controller
{
    //
    public function index()
    {
       
        return view('dashboard.resume.index');
    }
   
  
}
