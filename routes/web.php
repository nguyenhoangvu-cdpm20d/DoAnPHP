<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
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

    Route::get('/',[UserController::class,'index'])->name('trang-chu');

    Route::get('/Login',[UserController::class,'Login'])->name('dang-nhap');
    Route::post('/Login',[UserController::class,'Handle_Login'])->name('.handle-Login');

    Route::get('Logout',[UserController::class,'logout'])->name('Logout')->middleware('auth');
    Route::get('Adminlogout',[UserController::class,'AdminLogout'])->name('.admin_logout')->middleware('auth');

    Route::get('/Register',[UserController::class,'Register'])->name('dang-ky');
    Route::post('/Register',[UserController::class,'store'])->name('.add-Register');

    Route::get('/RegisterAdmin',[UserController::class,'RegisterAdmin'])->name('.create-RegisterAdmin');
    Route::post('/RegisterAdmin',[UserController::class,'storeAdmin'])->name('.add-RegisterAdmin');

    Route::get('/Profile',[UserController::class,'Profile'])->name('profile')->middleware('auth');
// Route::get('/edit_profile',[UserController::class,'Edit_Profile'])->name('.edit_profile');
    Route::get('/EditProfile',[UserController::class,'edit'])->name('.edit_profile');
    Route::post('/EditProfile',[UserController::class,'update'])->name('.Update_Profile');

    Route::get('/Post',[PostController::class,'index'])->name('.Create_Post');
    Route::post('/Post',[PostController::class,'store'])->name('Add_Post');
    Route::get('/Post/PostDetail/{id}',[PostController::class,'detail'])->name('PostDetail');

    Route::get('/GopY',[AdminController::class,'GopY'])->name('gop-y');
    Route::get('/GioiThieu',[AdminController::class,'GioiThieu'])->name('gioi-thieu');

    /*Trang mẹo tìm đồ */
    Route::get('/MeoTimDo',[AdminController::class,'MeoTimDo'])->name('meo-tim-do');
    Route::get('/MeoTimDo1',[AdminController::class,'MeoTimDo1'])->name('meo-tim-do1');
    Route::get('/MeoTimDo2',[AdminController::class,'MeoTimDo2'])->name('meo-tim-do2');
    Route::get('/MeoTimDo3',[AdminController::class,'MeoTimDo3'])->name('meo-tim-do3');
    Route::get('/MeoTimDo4',[AdminController::class,'MeoTimDo4'])->name('meo-tim-do4');
    Route::get('/MeoTimDo5',[AdminController::class,'MeoTimDo5'])->name('meo-tim-do5');
    Route::get('/MeoTimDo6',[AdminController::class,'MeoTimDo6'])->name('meo-tim-do6');


    //Dành cho Admin
Route::get('/admin',[UserController::class,'login'])->name('.Admin_Login');
Route::post('/admin_login',[UserController::class,'Handle_Login'])->name('.handle_admin_Login');

Route::get('logout',[UserController::class,'logout'])->name('Logout')->middleware('auth');
Route::get('Adminlogout',[UserController::class,'Admin_Logout'])->name('.admin_logout')->middleware('auth');


Route::get('/registerAdmin',[UserController::class,'RegisterAdmin'])->name('.create-RegisterAdmin');
Route::post('/registerAdmin',[UserController::class,'storeAdmin'])->name('.add-RegisterAdmin');