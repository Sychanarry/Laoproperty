<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\Management\DashboardController;
use App\Http\Controllers\Management\DataController;
use App\Http\Controllers\Management\PosteEstateController;
use App\Http\Controllers\Management\PostEstateImageController;
use App\Http\Controllers\Management\UserController;
use App\Http\Controllers\RegisterController;
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



Route::get('/',[HomeController::class,'home'])->name('home');
// Route::get('/',[HomeController::class,'test'])->name('home');
Route::get('/about_us',[HomeController::class,'about_us'])->name('about_us');
Route::post('/commentcreate',[CommentController::class,'commentcreate'])->name('commentcreate');
Route::get('/contact_us',[HomeController::class,'contact_us'])->name('contact_us');
Route::get('/agency',[HomeController::class,'agency'])->name('agency');
Route::get('/agency_detail',[HomeController::class,'agency_detail'])->name('agency_detail');
Route::get('/agent',[HomeController::class,'agent'])->name('agent');
Route::get('/agent_detail',[HomeController::class,'agent_detail'])->name('agent_detail');
Route::get('/rent_properties',[HomeController::class,'rent_properties'])->name('rent_properties');
Route::get('/rent_properties_detail/{id}',[HomeController::class,'rent_properties_detail'])->name('rent_properties_detail');
Route::get('/sale_properties',[HomeController::class,'sale_properties'])->name('sale_properties');
Route::get('/sale_properties_detail/{id}',[HomeController::class,'sale_properties_detail'])->name('sale_properties_detail');
Route::get('/news',[HomeController::class,'news'])->name('news');
Route::get('/news_detail',[HomeController::class,'news_detail'])->name('news_detail');
Route::get('/detail',[HomeController::class,'detail'])->name('detail');
Route::get('/realestate_detail/{id}',[HomeController::class,'realestate_detail'])->name('realestate_detail');
Route::get('/favoriteall',[HomeController::class,'favoriteall'])->name('favoriteall');
Route::get('/weballproperties',[HomeController::class,'weballproperties'])->name('weballproperties');


Route::post('/dropdownlist/district',[DataController::class,'fetch'])->name('dropdown.fetch');
Route::post('/login-user', [LoginController::class,'loginUser'])->name('login-user');
Route::post('/addappointment',[HomeController::class,'addappointment'])->name('addappointment');
Route::get('/appointmentindex',[HomeController::class,'appointmentindex'])->name('appointment.index');
Route::get('/allsearch',[HomeController::class,'allsearch'])->name('allsearch');


Route::post('/register_login',[RegisterController::class,'register_login'])->name('register.login');
Route::get('/facebook',[RegisterController::class,'facebookRedirect']);
Route::get('/facebook/callback',[RegisterController::class,'loginWithFacebook']);



Route::get('/google',[RegisterController::class,'googleRedirect']);
Route::get('/google/callback',[RegisterController::class,'loginWithGoogle']);
Route::resource('/register',RegisterController::class);



Route::post('/favorite',[HomeController::class,'favorite'])->name('favorite');
Route::resource('/login',LoginController::class);
Route::get('/logout',[LoginController::class,'logout'])->name('logout');
Route::group([
    'prefix'=>'management',
    'middleware'=>'adminmiddleware'
],function(){

Route::resource('/dashboard',DashboardController::class);
Route::resource('/postestates',PosteEstateController::class);
Route::resource('/postestateimages',PostEstateImageController::class);
Route::resource('/user',UserController::class);
Route::get('/edit_properties',[DashboardController::class,'edit_properties'])->name('edit_properties');
Route::get('/report',[DashboardController::class,'report'])->name('report');
Route::get('/myfavorites',[DashboardController::class,'myfavorites'])->name('myfavorites');
Route::get('/myprofile',[DashboardController::class,'myprofile'])->name('myprofile');
Route::get('/myproperties',[PosteEstateController::class,'myproperties'])->name('myproperties');
Route::get('/propertiesdetail',[DashboardController::class,'propertiesdetail']);
Route::get('/logoutadmin',[LoginController::class,'logoutAdmin'])->name('logoutAmin');
Route::resource('/comment', CommentController::class);
});
