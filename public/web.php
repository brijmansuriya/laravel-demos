<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ViewControllers;
use App\Http\Controllers\TempletControllers;
use App\Http\Controllers\FormController;
use App\Http\Controllers\validationController;
use App\Http\Controllers\DatashowController;
use App\Http\Controllers\ModelController;
use App\Http\Controllers\HttpController;
use App\Http\Controllers\RequesController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\FlashController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\ShowtableController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\InsertController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\QueryBuilderController;
use App\Http\Controllers\MaxminController;
use App\Http\Controllers\JoinsController;
use App\Http\Controllers\AccessorsController;
use App\Http\Controllers\MutatorController;
use App\Http\Controllers\OnetooneController;
use App\Http\Controllers\OnetoManyController;
use App\Http\Controllers\FluentStringsController;
use App\Http\Controllers\RouteBindingController;
use App\Http\Controllers\MultipleDatabaseController;
use App\Mail\Mailui;


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
    return view('welcome');
});

//5 Parameter Pass
// Route::view('URI', 'viewName');

Route::view('user', 'user');
Route::view('about', 'about');

//6 Controller
Route::get('users',[UserController::class,'index']);
Route::get('userpage',[UserController::class,'view']);
Route::get('users/{id}',[UserController::class,'peramiter']);

//7 View
Route::get('/Viewdemo/{name}', function ($name) {
    return view('Viewdemo',['name'=>$name]);
});
Route::get('/ViewControllers/{name}',[ViewControllers::class,'index']);

//8 Blade Templet
Route::get('/templet',[TempletControllers::class,'index']);

//9 Blade Templet 2
Route::get('/templet2',[TempletControllers::class,'templet']);

//10 component
Route::view('component', 'component');

//11 Form
Route::view('Form', 'Form');
Route::post('submit', [FormController::class,'index']);

//12 Validation
Route::view('Validation', 'Validation');
Route::post('Valida', [validationController::class,'index']);

//13 middleware
Route::view('middleware', 'middleware');

//14 grup middleware
Route::view('groupm', 'middleware');
Route::group(['middleware'=>['grouppage']],function(){
    Route::view('group', 'form');
});

//15 Route middlerware
Route::view('Routemiddlerware', 'form')->middleware('Routemiddlerware');


//16 Data Show In Database
Route::get('datashow', [DatashowController::class,'index']);

//17 Data Show In Database use model
Route::get('modeldeta', [ModelController::class,'index']);


//18 http client
Route::get('httpclient', [HttpController::class,'index']);

//19  request type
Route::get('Requestype', [RequesController::class,'index']);
Route::post('sub', [RequesController::class,'sub']);

//20  Login
Route::get('login', [LoginController::class,'index']);
Route::post('loginsubmit', [LoginController::class,'sub']);
Route::view('profile', 'profile');
Route::get('/logout', function () {
   if(session()->has('username')){
    session()->pull('username',null);
   }
   return redirect('login');

});

//21 Flash Session
Route::view('FlashSession', 'FlashSession');
Route::post('Flashsubmit', [FlashController::class,'index']);

//22 File Upload
Route::view('FileUpload', 'FileUpload');
Route::post('FileUploadsub', [FileUploadController::class,'index']);

//23 Localization
Route::view('Localization', 'Localization');
Route::post('FileUploadsub', [FileUploadController::class,'index']);

//24 Data Show In Database use model
Route::get('Showtable', [ShowtableController::class,'index']);

//25Pagination
Route::get('Pagination', [PaginationController::class,'index']);

//26 insert
Route::view('Insert', 'insert');
Route::post('insertsubmit', [InsertController::class,'index']);

//27 Delete
Route::get('Deletedata', [DeleteController::class,'index']);
Route::get('Delete/{id}', [DeleteController::class,'delete']);

//28 Upadate
Route::get('updatedata', [UpdateController::class,'index']);
Route::get('Update/{id}', [UpdateController::class,'Update']);
Route::view('UpdateForm', 'UpdateForm');
Route::post('Updatesubmit', [UpdateController::class,'Updatedata']);

//29 QueryBuilder
Route::get('QueryBuilder', [QueryBuilderController::class,'index']);

//30 Max Min
Route::get('Sum', [MaxminController::class,'index']);

//31 Joins
Route::get('Joins', [JoinsController::class,'index']);

//35 Accessors
Route::get('Accessors', [AccessorsController::class,'index']);

//36 Mutator
Route::view('Mutatorform','Mutator');
Route::post('Mutator', [MutatorController::class,'index']);

//37 One to one
Route::get('Onetoone', [OnetooneController::class,'index']);

//38 One to Many
Route::get('OnetoMany', [OnetoManyController::class,'index']);

//40 One to Many
Route::get('FluentStrings', [FluentStringsController::class,'index']);

//41 Route Binding
Route::get('RouteBinding/{key:name}', [RouteBindingController::class,'index']);

//42 maile
Route::get('mailui', function () {
    return New Mailui;
});

//44 Multiple Database
Route::get('MultipleDatabase', [MultipleDatabaseController::class,'index']);