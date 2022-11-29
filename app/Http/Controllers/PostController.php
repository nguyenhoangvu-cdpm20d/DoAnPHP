<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Post;
use App\Models\LoaiDo;
use App\Models\Quan;
use App\Models\Phuong;
use App\Models\BinhLuan;
use App\Models\LoaiBaiViet;
use App\Models\TinTuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail(Post $id)
    {
        $PostDetail = Post::find($id);

        //$ListComment = Comment::all()->sortByDesc('id');
        return view('PagesUser.PostDetail', compact('PostDetail'));
    }

    public function index()
    {
        $CreatePost1 = LoaiDo::all();
        $CreatePost2 = Quan::all();
        $CreatePost3 = Phuong::all();
        $CreatePost4 = LoaiBaiViet::all();
        return view('PagesUser.Post', compact(['CreatePost1', 'CreatePost2', 'CreatePost3', 'CreatePost4']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $baiDang = Post::create([
            //$Username = User::find(Auth::user()->Username),
            'Title' => $request->Title,
            'noidung' => $request->noidung,
            'TenTK' => $request->TenTK,
            'TK_id' => $request->TK_id,
            'ngaydang' => $request->ngaydang,
            'loaidovat_id' => $request->loaidovat_id,
            'quan' => $request->quan,
            'phuong' => $request->phuong,
            'trang_thai' => $request->trang_thai = 1,
            'image' => $request->file('anh')->getClientOriginalName(),
            'path' => $request->file('anh')->store('public/anh'),
            $file = $request->anh,
            $file_name = $file->getClientOriginalName(),
            $file->move(public_path('anh'), $file_name),
            $request->merge(['anh' => $file_name]),

        ]);
        if (!empty($baiDang)) {
            return redirect()->route('trang-chu');
        }
        return redirect()->route('trang-chu');
    }

    public function ChiTietBaiViet(Post $id)
    {
        $chitiet = Post::find($id);
        $ListComment = BinhLuan::all();
        return view('PagesUser.ChiTietBaiViet', compact(['chitiet', 'ListComment']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */



    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $baiviet = Post::find($id)->delete();
        return redirect()->route('menu');
    }
    //=============================================LOẠI BÀI VIẾT===========================================================//

    public function LoaiBaiViet()
    {
        $loaibaiviet = LoaiBaiViet::all();
        //dd($loaibaiviet->all());
        return view('PagesAdmin.LoaiBaiViet', compact('loaibaiviet'));
    }

    public function addloaibaiviet()
    {
        return view('PagesAdmin.addLoaiBaiViet');
    }
    public function createloaibaiviet(Request $request)
    {

        $loaibaivietExist = LoaiBaiViet::where('tenloaibaiviet', $request->tenloaibaiviet)->count();
        if ($loaibaivietExist > 0) {
            return redirect()->back()->with('Error', "'$request->tenloaibaiviet' đã tồn tại");
        }

        $addloaibaiviet = LoaiBaiViet::create([
            'tenloaibaiviet' => $request->tenloaibaiviet
        ]);
        return redirect()->route('loai-bai-viet');
    }
    public function show($id)
    {
        $Loaibaiviet = LoaiBaiViet::find($id);
        return view('PagesAdmin.updateLoaiBaiViet', compact('Loaibaiviet'));
    }
    public function update(Request $request, $id)
    {
        $Loaibaiviet = LoaiBaiViet::find($id);
        $Loaibaiviet->tenloaibaiviet = $request->tenloaibaiviet;
        $Loaibaiviet->save();
        return redirect()->route('loai-bai-viet');
    }

    //=============================================LOẠI ĐỒ===========================================================//

    public function LoaiDo()
    {
        $loaidovat = LoaiDo::all();
        //dd($loaidovat->all());
        return view('PagesAdmin.LoaiDoVat', compact('loaidovat'));
    }

    public function addloaido()
    {
        return view('PagesAdmin.addLoaiDoVat');
    }
    public function createloaido(Request $request)
    {

        $loaidoExist = LoaiDo::where('loaido', $request->loaido)->count();
        if ($loaidoExist > 0) {
            return redirect()->back()->with('Error', "'$request->loaido' đã tồn tại");
        }

        $addloaido = LoaiDo::create([
            'loaido' => $request->loaido
        ]);
        return redirect()->route('loai-do-vat');
    }
    public function showLoaiDo($id)
    {
        $LoaiDo = LoaiDo::find($id);
        return view('PagesAdmin.updateLoaiDo', compact('LoaiDo'));
    }
    public function updateLoaiDo(Request $request, $id)
    {
        $LoaiDo = LoaiDo::find($id);
        $loaidoExist = LoaiDo::where('loaido', $request->loaido)->count();
        if ($loaidoExist > 0) {
            return redirect()->back()->with('Error', "'$request->loaido' đã tồn tại");
        }
        $LoaiDo->loaido = $request->loaido;
        $LoaiDo->save();
        return redirect()->route('loai-do-vat');
    }

    //=============================================TIN TỨC===========================================================//


    public function TinTuc()
    {
        $tintuc = TinTuc::all();
        //dd($loaidovat->all());
        return view('PagesAdmin.TinTuc', compact('tintuc'));
    }
    //=============================================QUẬN===========================================================//

    public function Quan()
    {
        $quan = Quan::all();
        //dd($loaidovat->all());
        return view('PagesAdmin.Quan', compact('quan'));
    }
    public function addquan()
    {
        return view('PagesAdmin.addQuan');
    }
    public function createquan(Request $request)
    {

        $quanExist = Quan::where('tenquan', $request->tenquan)->count();
        if ($quanExist > 0) {
            return redirect()->back()->with('Error', "Quận '$request->tenquan' đã tồn tại");
        }

        $addquan = Quan::create([
            'tenquan' => $request->tenquan
        ]);
        return redirect()->route('quan');
    }
    public function showQuan($id)
    {
        $Quan = Quan::find($id);
        return view('PagesAdmin.updateQuan', compact('Quan'));
    }
    public function updateQuan(Request $request, $id)
    {
        $Quan = Quan::find($id);
        $quanExist = Quan::where('tenquan', $request->tenquan)->count();
        if ($quanExist > 0) {
            return redirect()->back()->with('Error', "Quận '$request->tenquan' đã tồn tại");
        }
        $Quan->tenquan = $request->tenquan;
        $Quan->save();
        return redirect()->route('quan');
    }
    public function deleteQuan($id)
    {
        $Quan = Quan::find($id)->delete();
        return redirect()->route('quan');
    }
    //=============================================PHƯỜNG===========================================================//
    public function Phuong()
    {
        $phuong = Phuong::all();
        //dd($loaidovat->all());
        return view('PagesAdmin.Phuong', compact('phuong'));
    }
    public function addphuong()
    {
        return view('PagesAdmin.addPhuong');
    }
    public function createphuong(Request $request)
    {

        $phuongExist = Phuong::where('tenphuong', $request->tenphuong)->count();
        if ($phuongExist > 0) {
            return redirect()->back()->with('Error', "Phường '$request->tenphuong' đã tồn tại");
        }

        $addphuong = Phuong::create([
            'tenphuong' => $request->tenphuong
        ]);
        return redirect()->route('phuong');
    }
    public function showPhuong($id)
    {
        $Phuong = Phuong::find($id);
        return view('PagesAdmin.updatePhuong', compact('Phuong'));
    }
    public function updatePhuong(Request $request, $id)
    {
        $Phuong = Phuong::find($id);
        $phuongExist = Phuong::where('tenphuong', $request->tenphuong)->count();
        if ($phuongExist > 0) {
            return redirect()->back()->with('Error', "Phường '$request->tenphuong' đã tồn tại");
        }
        $Phuong->tenphuong = $request->tenphuong;
        $Phuong->save();
        return redirect()->route('phuong');
    }
    public function deletePhuong($id)
    {
        $Phuong = Phuong::find($id)->delete();
        return redirect()->route('phuong');
    }
}
