<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\BinhLuan;
use Illuminate\Support\Facades\Auth;
class BinhLuanController extends Controller
{
    public function store(Request $request)
    {
        
        $binhLuan = BinhLuan::create([
            //$Username = User::find(Auth::user()->Username),
            'TenTK' => Auth::user()->Username,
            'noidung' => $request->noidung,
            'user_id2' => Auth::user()->id,
            'baiviet_id' =>$request->baiviet_id
        ]);
        if (!empty($binhLuan)) {
            return redirect('/ChiTietBaiViet/'.$request->baiviet_id);
        }
        return redirect()->route('trang-chu');
    }
}
