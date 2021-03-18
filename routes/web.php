<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Registeruser;
use App\Http\Controllers\Loginruser;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ExpenseController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

// Route::get('/', function () {
//     return view('welcome');
// });
// Route::post("users",[Registeruser::class,'uregistration']);
// Route::view("registration","users");
// //Route::post("login",[Loginuser::class,'ulogin']);
// Route::get("category",[CategoryController::class,'getData']);

// //Route::post("expense",[Expense::class,'expenses']);
// Route::view("expenseuser","expense");

// //Route::view("userlist","userlist");


// Route::get('userlist',[UserController::class,'ulist']);
// Route::view("createuser","createuser");
// Route::post("createuser",[UserController::class,'store']);
// Route::get('edituser/{id}',[UserController::class,'edit']);
// Route::post('edituser/{id}',[UserController::class,'update']);
// Route::get("deleteuser/{id}",[UserController::class,'delete']);


// Route::get('categorylist',[CategoryController::class,'list']);
// Route::view('createcategory','createcategory');
// Route::post('createcategory',[CategoryController::class,'store']);
// Route::get("deletecategory/{id}",[CategoryController::class,'delete']);
// Route::get('editcategory/{id}',[CategoryController::class,'edit']);
// Route::post('editcategory/{id}',[CategoryController::class,'update']);

// Route::get('expenselist',[ExpenseController::class,'elist']);
// Route::get("createexpense",[ExpenseController::class,'show']);
// Route::post('createexpense',[ExpenseController::class,'store']);
// Route::view('calculate','demo');
// Route::get('calculateexpense/{id}',[ExpenseController::class,'calculate']);
// Route::get('editexpense/{id}',[ExpenseController::class,'edit']);
// Route::post('editexpense/{id}',[ExpenseController::class,'update']);

// Route::view("ulogin","ulogin");
// Route::view("home","home");
// //Route::get("ulogin",[LoginController::class,'login']);
// Route::post("ulogin",[LoginController::class,'authenticate']);
// //Route::view('userdashbord','userdashbord');

// Route::get("logout",[LoginController::class,'logout']);

// Route::get('userdashbord',[UserController::class,'dashbord']);
// // Route::group(['middleware'=>['AuthCheck']],function()
// // {
// //     Route::get('userdashbord',[UserController::class,'dashbord']);
// // //    Route::get("ulogin",[LoginController::class,'login']);
// //     Route::view("createuser","createuser");

// // }
// // );
// Route::get('userdashbord',[UserController::class,'dashbord']);


Route::group(['middleware'=>"web"],function(){
    Route::get('/', function () {
        return view('ulogin');
    });
    Route::post("users",[Registeruser::class,'uregistration']);
    Route::view("registration","users");
    //Route::post("login",[Loginuser::class,'ulogin']);
    Route::get("category",[CategoryController::class,'getData']);
    
    //Route::post("expense",[Expense::class,'expenses']);
    Route::view("expenseuser","expense");
    
    //Route::view("userlist","userlist");
    
    
   
    Route::view("createuser","createuser");
    Route::post("createuser",[UserController::class,'store']);
    Route::get('edituser/{id}',[UserController::class,'edit']);
    Route::post('edituser/{id}',[UserController::class,'update']);
    Route::get("deleteuser/{id}",[UserController::class,'delete']);
    Route::get("search",[UserController::class,'search']);
    Route::get("searchexpenseuser",[UserController::class,'searchu']);
    Route::get("userprofile",[UserController::class,'profile']);

    
    Route::get('categorylist',[CategoryController::class,'list']);
    Route::view('createcategory','createcategory');
    Route::post('createcategory',[CategoryController::class,'store']);
    Route::get("deletecategory/{id}",[CategoryController::class,'delete']);
    Route::get('editcategory/{id}',[CategoryController::class,'edit']);
    Route::post('editcategory/{id}',[CategoryController::class,'update']);
    Route::get("searchcategory",[CategoryController::class,'search']);

    Route::get('expenselist',[ExpenseController::class,'elist']);
    Route::get("createexpense",[ExpenseController::class,'show']);
    Route::post('createexpense',[ExpenseController::class,'store']);
    Route::view('calculate','demo');
    Route::get('calculateexpense/{id}',[ExpenseController::class,'calculate']);
    Route::get('editexpense/{id}',[ExpenseController::class,'edit']);
    Route::post('editexpense/{id}',[ExpenseController::class,'update']);
    Route::get("searchexpense",[ExpenseController::class,'search']);
    Route::get("searchexpenses",[ExpenseController::class,'searche']);

    Route::view("ulogin","ulogin");
    //Route::view("home","home");
    Route::get("home",[UserController::class,'mexpense']);

    //Route::get("ulogin",[LoginController::class,'login']);
    Route::post("ulogin",[LoginController::class,'authenticate']);
    //Route::view('userdashbord','userdashbord');
    
    Route::get("logout",[LoginController::class,'logout']);
    
    Route::get('userdashbord',[UserController::class,'dashbord']);
    // Route::group(['middleware'=>['AuthCheck']],function()
    // {
    //     Route::get('userdashbord',[UserController::class,'dashbord']);
    // //    Route::get("ulogin",[LoginController::class,'login']);
    //     Route::view("createuser","createuser");
    
    // }
    // );
    Route::get('userdashbord',[UserController::class,'dashbord']);
    Route::get("deleteex/{id}",[UserController::class,'expensedelete']);



    // Route::view('admindashbord','admindashbord');
   
    Route::get('admindashbord',[UserController::class,'count']);
    Route::get('alogout',[LoginController::class,'alogout']);
    Route::get('userlist',[UserController::class,'ulist']);
    Route::view('adminprof','adminprof');

    Route::get('editperuser/{id}',[LoginController::class,'edit']);
     Route::post('editperuser/{id}',[LoginController::class,'update']);
     //Route::view('editperuser','editperuser');
     Route::get('pppp',[LoginController::class,'pppp']);



});    
// Route::view('admindashbord','admindashbord');
// Route::get('admindashbord',[UserController::class,'count']);
// Route::get('alogout',[LoginController::class,'alogout']);
// Route::get('userlist',[UserController::class,'ulist']);