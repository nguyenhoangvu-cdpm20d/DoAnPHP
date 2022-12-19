<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\BinhLuanController;
use App\Http\Controllers\SearchController;
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

Route::get('/', [UserController::class, 'index'])->name('trang-chu');
Route::get('/tintuc', [UserController::class, 'TinTuc'])->name('tin-tuc');

Route::get('/Login', [UserController::class, 'Login'])->name('dang-nhap');
Route::post('/', [UserController::class, 'Handle_Login'])->name('.handle-Login');

Route::get('Logout', [UserController::class, 'logout'])->name('Logout')->middleware('auth');
Route::get('Adminlogout', [UserController::class, 'AdminLogout'])->name('.admin_logout')->middleware('auth');

Route::get('/Register', [UserController::class, 'Register'])->name('dang-ky');
Route::post('/Register', [UserController::class, 'store'])->name('.add-Register');

Route::get('/RegisterAdmin', [UserController::class, 'RegisterAdmin'])->name('.create-RegisterAdmin');
Route::post('/RegisterAdmin', [UserController::class, 'storeAdmin'])->name('.add-RegisterAdmin');

Route::get('/Profile', [UserController::class, 'Profile'])->name('profile')->middleware('auth');
Route::get('/EditProfile', [UserController::class, 'edit'])->name('.edit_profile');
Route::post('/EditProfile', [UserController::class, 'update'])->name('.Update_Profile');


Route::get('/Post', [PostController::class, 'index'])->name('.Create_Post');
Route::post('/Post', [PostController::class, 'store'])->name('Add_Post');
Route::get('/update_baiviet/{id}', [PostController::class, 'showBaiViet'])->name('.show-baiviet');
Route::post('/update_baiviet/{id}', [PostController::class, 'updateBaiViet'])->name('.update-baiviet');
Route::get('/delete_baiviet/{id}', [PostController::class, 'deleteBaiViet'])->name('delete-baiviet');


Route::get('/GopY', [AdminController::class, 'GopY'])->name('gop-y');
Route::get('/GioiThieu', [AdminController::class, 'GioiThieu'])->name('gioi-thieu');

Route::get('/ChiTietBaiViet/{id}', [PostController::class, 'ChiTietBaiViet'])->name('chitietbaiviet');
Route::post('/ChiTietBaiViet/{id}', [BinhLuanController::class, 'store'])->name('tao_binhluan');
Route::get('/xoabaiviet/{id}', [PostController::class, 'destroy'])->name('DeleteDestroy');



//Dành cho Admin

Route::get('/admin', [UserController::class, 'login'])->name('.Admin_Login');
Route::post('/admin_login', [UserController::class, 'Handle_Login'])->name('.handle_admin_Login');

Route::get('/index', [AdminController::class, 'index'])->name('menu');

Route::get('/TaiKhoan', [AdminController::class, 'listUser'])->name('ListUser')->middleware('Admin');
Route::get('/delete_TaiKhoan/{id}', [AdminController::class, 'deletelistUser'])->name('.delete-TaiKhoan');

Route::get('logout', [UserController::class, 'logout'])->name('Logout')->middleware('auth');
Route::get('Adminlogout', [UserController::class, 'Admin_Logout'])->name('.admin_logout')->middleware('auth');


Route::get('/registerAdmin', [UserController::class, 'RegisterAdmin'])->name('.create-RegisterAdmin');
Route::post('/registerAdmin', [UserController::class, 'storeAdmin'])->name('.add-RegisterAdmin');

Route::get('/searchadmin', [SearchController::class, 'indexAdmin'])->name('.SearchAdmin');
Route::get('/search', [SearchController::class, 'index'])->name('.Search');





/*Trang mẹo tìm đồ */
Route::get('/MeoTimDo', [AdminController::class, 'MeoTimDo'])->name('meo-tim-do');
Route::get('/MeoTimDo1', [AdminController::class, 'MeoTimDo1'])->name('meo-tim-do1');
Route::get('/MeoTimDo2', [AdminController::class, 'MeoTimDo2'])->name('meo-tim-do2');
Route::get('/MeoTimDo3', [AdminController::class, 'MeoTimDo3'])->name('meo-tim-do3');
Route::get('/MeoTimDo4', [AdminController::class, 'MeoTimDo4'])->name('meo-tim-do4');
Route::get('/MeoTimDo5', [AdminController::class, 'MeoTimDo5'])->name('meo-tim-do5');
Route::get('/MeoTimDo6', [AdminController::class, 'MeoTimDo6'])->name('meo-tim-do6');


//--------------------------------------Loại bài viết-----------------------------------------------------------//

Route::get('/addloaibaiviet', [PostController::class, 'addloaibaiviet'])->name('.add-loaibaiviet');
Route::post('/createloaibaiviet', [PostController::class, 'createloaibaiviet'])->name('.create-loaibaiviet');
Route::get('/loaibaiviet', [PostController::class, 'LoaiBaiViet'])->name('loai-bai-viet');
Route::get('/update_loaibaiviet/{id}', [PostController::class, 'show'])->name('.show-loaibaiviet');
Route::post('/update_loaibaiviet/{id}', [PostController::class, 'update'])->name('.update-loaibaiviet');
Route::get('/delete_loaibaiviet/{id}', [PostController::class, 'deleteLoaibaiviet'])->name('.delete-loaibaiviet');

//-----------------------------------Loại đồ---------------------------------------------------------------//

Route::get('/addloaido', [PostController::class, 'addloaido'])->name('.add-loaido');
Route::post('/createloaido', [PostController::class, 'createloaido'])->name('.create-loaido');
Route::get('/loaidovat', [PostController::class, 'LoaiDo'])->name('loai-do-vat');
Route::get('/update_loaido/{id}', [PostController::class, 'showLoaiDo'])->name('.show-loaido');
Route::post('/update_loaido/{id}', [PostController::class, 'updateLoaiDo'])->name('.update-loaido');
Route::get('/delete_loaido/{id}', [PostController::class, 'deleteLoaiDo'])->name('.delete-loaido');

//---------------------------------------Tin tức-----------------------------------------------------//

Route::get('/ChiTietTinTuc/{id}', [UserController::class, 'ChiTietTinTuc'])->name('chitiettintuc');
Route::get('/tintuc', [PostController::class, 'TinTuc'])->name('tin-tuc');
Route::post('/createtintuc', [PostController::class, 'createTinTuc'])->name('.create-tintuc');
Route::get('/addtintuc', [PostController::class, 'addTinTuc'])->name('.add-tintuc');
Route::get('/update_tintuc/{id}', [PostController::class, 'showTinTuc'])->name('.show-tintuc');
Route::post('/update_tintuc/{id}', [PostController::class, 'updateTinTuc'])->name('.update-tintuc');
Route::get('/delete_tintuc/{id}', [PostController::class, 'deleteTinTuc'])->name('.delete-tintuc');

//--------------------------------------------Quận-------------------------------------------------//

Route::get('/addquan', [PostController::class, 'addquan'])->name('.add-quan');
Route::post('/createquan', [PostController::class, 'createquan'])->name('.create-quan');
Route::get('/quan', [PostController::class, 'Quan'])->name('quan');
Route::get('/update_quan/{id}', [PostController::class, 'showQuan'])->name('.show-quan');
Route::post('/update_quan/{id}', [PostController::class, 'updateQuan'])->name('.update-quan');
Route::get('/delete_quan/{id}', [PostController::class, 'deleteQuan'])->name('.delete-quan');

//----------------------------------------Phường-------------------------------------------------------//

Route::get('/addphuong', [PostController::class, 'addphuong'])->name('.add-phuong');
Route::post('/createphuong', [PostController::class, 'createphuong'])->name('.create-phuong');
Route::get('/phuong', [PostController::class, 'Phuong'])->name('phuong');
Route::get('/update_phuong/{id}', [PostController::class, 'showPhuong'])->name('.show-phuong');
Route::post('/update_phuong/{id}', [PostController::class, 'updatePhuong'])->name('.update-phuong');
Route::get('/delete_phuong/{id}', [PostController::class, 'deletePhuong'])->name('.delete-phuong');

//-------------------------------------------Báo cáo---------------------------------------------------//

Route::get('/baocao', [PostController::class, 'Baocao'])->name('baocao');
Route::post('/taobaocao/{id}', [PostController::class, 'TaoBaoCao'])->name('TaoBaoCao');
Route::get('/delete_baocao/{id}', [PostController::class, 'deleteBaoCao'])->name('.delete-baocao');
