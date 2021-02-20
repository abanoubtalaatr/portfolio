<?php

use App\Http\Controllers\about\BioController;
use App\Http\Controllers\about\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ResumeController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\KnowledgeController;
use App\Http\Controllers\LanguageController;
use App\Http\Controllers\works\ProjectController;
use App\Http\Controllers\works\LinkController;
use App\Http\Controllers\works\WorksController;
use App\Http\Controllers\works\VideoController;
use App\Http\Controllers\contact\ContactController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\MainImage\MainImageController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('front.about');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//front end
Route::get('/about',function (){return view('front.about');});
Route::get('/resume',function (){return view('front.resume');});
Route::get('/work',function (){return view('front.works');});
Route::get('/contact',function (){return view('front.contact');});
Route::get('/home',function (){return view('front.home');});
// Route::get('/email',function (){return view('mail.index');});
Route::post('/contact/insert',[ContactController::class,'insert'])->name('contact.insert');

//backend
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/image', [MainImageController::class,'index'])->name('image');
//==============================================================================================================================
Route::group(['prefix' => 'dashboard/image/', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [MainImageController::class,'showAddPage'])->name('image.showAddPage');
    Route::post('/store',      [MainImageController::class,'insert'])->name('image.insert');
    Route::post('/delete',     [MainImageController::class,'deleteImage'])->name('image.deleteImage');
 
});

Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/about', [AboutController::class,'index'])->name('about');
//==============================================================================================================================
Route::group(['prefix' => 'dashboard/about/bio', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [BioController::class,'showAddPage'])->name('bio.showAddPage');
    Route::post('/store',      [BioController::class,'insertOrUpdate'])->name('bio.insertOrUpdate');
    Route::get('/edit',        [BioController::class,'showEditPage'])->name('bio.showEditPage');
    Route::get('/edit/{id}',   [BioController::class,'getDataForEdit'])->name('bio.getDataForEdit');
    Route::get('/delete',      [BioController::class,'showDeletePage'])->name('bio.showDeletePage');
    Route::post('/delete',     [BioController::class,'delete'])->name('bio.delete');
    Route::get('/view',        [BioController::class,'showAll'])->name('bio.showAll');
});
//==============================================================================================================================
Route::group(['prefix' => 'dashboard/about/service', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [ServiceController::class,'showAddPage'])->name('service.showAddPage');
    Route::post('/store',      [ServiceController::class,'insertOrUpdate'])->name('service.insertOrUpdate');
    Route::get('/edit',        [ServiceController::class,'showEditPage'])->name('service.showEditPage');
    Route::get('/edit/{id}',   [ServiceController::class,'getDataForEdit'])->name('service.getDataForEdit');
    Route::get('/delete',      [ServiceController::class,'showDeletePage'])->name('service.showDeletePage');
    Route::post('/delete',     [ServiceController::class,'delete'])->name('service.delete');
    Route::get('/view',        [ServiceController::class,'showAll'])->name('service.showAll');
});
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/resume', [ResumeController::class,'index'])->name('resume');
//==============================================================================================================================
Route::group(['prefix' => 'dashboard/resume/experience', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [ExperienceController::class,'showAddPage'])->name('experience.showAddPage');
    Route::post('/store',      [ExperienceController::class,'insertOrUpdate'])->name('experience.insertOrUpdate');
    Route::get('/edit',        [ExperienceController::class,'showEditPage'])->name('experience.showEditPage');
    Route::get('/edit/{id}',   [ExperienceController::class,'getDataForEditExperience'])->name('experience.getDataForEditExperience');
    Route::get('/delete',      [ExperienceController::class,'showDeletePage'])->name('experience.showDeletePage');
    Route::post('/delete',     [ExperienceController::class,'deleteExpeience'])->name('experience.deleteExpeience');
    Route::get('/view',        [ExperienceController::class,'showAllExperience'])->name('experience.showAllExperience');
});
//==============================================================================================================================
Route::group(['prefix' =>      'dashboard/resume/education', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [EducationController::class,'showAddPage'])->name('education.showAddPage');
    Route::post('/store',      [EducationController::class,'insertOrUpdate'])->name('education.insertOrUpdate');
    Route::get('/edit',        [EducationController::class,'showEditPage'])->name('education.showEditPage');
    Route::get('/edit/{id}',   [EducationController::class,'getDataForEditEducation'])->name('education.getDataForEditEducation');
    Route::get('/delete',      [EducationController::class,'showDeletePage'])->name('education.showDeletePage');
    Route::post('/delete',     [EducationController::class,'deleteEducation'])->name('education.deleteEducation');
    Route::get('/view',        [EducationController::class,'showAllEducation'])->name('education.showAllEducation');
});
//==============================================================================================================================
Route::group(['prefix' =>      'dashboard/resume/skill', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [SkillsController::class,'showAddPage'])->name('skill.showAddPage');
    Route::post('/store',      [SkillsController::class,'insertOrUpdate'])->name('skill.insertOrUpdate');
    Route::get('/edit',        [SkillsController::class,'showEditPage'])->name('skill.showEditPage');
    Route::get('/edit/{id}',   [SkillsController::class,'getDataForEditSkill'])->name('skill.getDataForEditEducation');
    Route::get('/delete',      [SkillsController::class,'showDeletePage'])->name('skill.showDeletePage');
    Route::post('/delete',     [SkillsController::class,'deleteSkill'])->name('skill.deleteSkill');
    Route::get('/view',        [SkillsController::class,'showAllSkill'])->name('skill.showAllSkill');
});
//==============================================================================================================================
Route::group(['prefix' =>      'dashboard/resume/knowledge', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [KnowledgeController::class,'showAddPage'])->name('knowledge.showAddPage');
    Route::post('/store',      [KnowledgeController::class,'insertOrUpdate'])->name('knowledge.insertOrUpdate');
    Route::get('/edit',        [KnowledgeController::class,'showEditPage'])->name('knowledge.showEditPage');
    Route::get('/edit/{id}',   [KnowledgeController::class,'getDataForEditKnowledge'])->name('knowledge.getDataForEditKnowledge');
    Route::get('/delete',      [KnowledgeController::class,'showDeletePage'])->name('knowledge.showDeletePage');
    Route::post('/delete',     [KnowledgeController::class,'deleteKnowledge'])->name('knowledge.deleteKnowledge');
    Route::get('/view',        [KnowledgeController::class,'showAllKnowledge'])->name('knowledge.showAllKnowledge');
});
//==============================================================================================================================
Route::group(['prefix' =>      'dashboard/resume/language', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [LanguageController::class,'showAddPage'])->name('language.showAddPage');
    Route::post('/store',      [LanguageController::class,'insertOrUpdate'])->name('language.insertOrUpdate');
    Route::get('/edit',        [LanguageController::class,'showEditPage'])->name('language.showEditPage');
    Route::get('/edit/{id}',   [LanguageController::class,'getDataForEditLanguage'])->name('language.getDataForEditLanguage');
    Route::get('/delete',      [LanguageController::class,'showDeletePage'])->name('language.showDeletePage');
    Route::post('/delete',     [LanguageController::class,'deleteLanguage'])->name('language.deleteLanguage');
    Route::get('/view',        [LanguageController::class,'showAllLanguage'])->name('language.showAllLanguage');
});
//==============================================================================================================================
//==============================================================================================================================
//==============================================================================================================================
//==============================================================================================================================
//==============================================================================================================================
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/works', [WorksController::class,'index'])->name('works');
Route::group(['prefix' =>      'dashboard/works/video', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [VideoController::class,'showAddPage'])->name('video.showAddPage');
    Route::post('/store',      [VideoController::class,'insertOrUpdate'])->name('video.insertOrUpdate');
    Route::get('/edit',        [VideoController::class,'showEditPage'])->name('video.showEditPage');
    Route::get('/edit/{id}',   [VideoController::class,'getDataForEditVideo'])->name('video.getDataForEditVideo');
    Route::get('/delete',      [VideoController::class,'showDeletePage'])->name('video.showDeletePage');
    Route::post('/delete',     [VideoController::class,'deleteVideo'])->name('video.deleteVideo');
    Route::get('/view',        [VideoController::class,'showAllVideos'])->name('video.showAllVideo');
});
//==============================================================================================================================
Route::group(['prefix' =>      'dashboard/works/link', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [LinkController::class,'showAddPage'])->name('link.showAddPage');
    Route::post('/store',      [LinkController::class,'insertOrUpdate'])->name('link.insertOrUpdate');
    Route::get('/edit',        [LinkController::class,'showEditPage'])->name('link.showEditPage');
    Route::get('/edit/{id}',   [LinkController::class,'getDataForEdit'])->name('link.getDataForEdit');
    Route::get('/delete',      [LinkController::class,'showDeletePage'])->name('link.showDeletePage');
    Route::post('/delete',     [LinkController::class,'delete'])->name('link.delete');
    Route::get('/view',        [LinkController::class,'showAll'])->name('link.showAll');
});
//==============================================================================================================================
Route::group(['prefix' =>      'dashboard/works/project', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::get('/add',         [ProjectController::class,'showAddPage'])->name('project.showAddPage');
    Route::post('/store',      [ProjectController::class,'insert'])->name('project.insert');
    Route::post('/update',      [ProjectController::class,'update'])->name('project.update');
    Route::get('/edit',        [ProjectController::class,'showEditPage'])->name('project.showEditPage');
    Route::get('/edit/{id}',   [ProjectController::class,'getDataForEdit'])->name('project.getDataForEdit');
    Route::get('/delete',      [ProjectController::class,'showDeletePage'])->name('project.showDeletePage');
    Route::post('/delete',     [ProjectController::class,'delete'])->name('project.delete');
    Route::post('/delete/image',[ProjectController::class,'deleteImage'])->name('project.deleteImage');
    Route::get('/view',        [ProjectController::class,'showAll'])->name('project.showAll');
});

//==============================================================================================================================
//==============================================================================================================================
//==============================================================================================================================
//==============================================================================================================================
//==============================================================================================================================
Route::middleware(['auth:sanctum', 'verified'])->get('dashboard/contact ', [ContactController::class,'showAll'])->name('contact');
Route::group(['prefix' =>      'dashboard/contact', 'middleware' => ['auth:sanctum', 'verified']], function(){
    Route::post('/delete',     [ContactController::class,'delete'])->name('contact.delete');
    Route::get('/view',        [ContactController::class,'showAll'])->name('contact.showAll');
});
Route::get('/send/email',        [MailController::class,'sendEmail'])->name('email.showAll');