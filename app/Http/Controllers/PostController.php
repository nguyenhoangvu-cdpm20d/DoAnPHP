<?php

namespace App\Http\Controllers;

use App\Models\BaoCao;
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
    public function showBaiViet($id)
    {
        $baiDang = Post::find($id);
        $CreatePost1 = LoaiDo::all();
        $CreatePost2 = Quan::all();
        $CreatePost3 = Phuong::all();
        $CreatePost4 = LoaiBaiViet::all();
        return view('PagesUser.SuaBaiViet', compact('baiDang','CreatePost1', 'CreatePost2', 'CreatePost3', 'CreatePost4'));
    }
    public function updateBaiViet(Request $request, $id)
    {
        $baiDang = Post::find($id);
        $baiDang->Title = $request->Title;
        $baiDang->noidung = $request->noidung;
        $baiDang->TenTK = $request->TenTK;
        $baiDang->TK_id = $request->TK_id;
        $baiDang->ngaydang = $request->ngaydang;
        $baiDang->loaidovat_id = $request->loaidovat_id;
        $baiDang->quan = $request->quan;
        $baiDang->phuong = '1';
        $baiDang->image = $request->image;
        $baiDang->save();
        if ($request->has("image")) {
            $fileName = "{$baiDang->id}.jpg";
            $request->file('image')->storeAs('anh', $fileName, 'public');
            $baiDang->image = "{$fileName}";
            $baiDang->save();
        }
        if (!empty($BaiDang)) {
            return redirect()->route('trang-chu');
        }
        return redirect()->route('trang-chu');
    }

    public function deleteBaiViet($id){
        $baiDang = Post::find($id)->delete();
        return redirect()->route('profile');
    }

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
            'phuong' => '1',
            'trang_thai' => $request->trang_thai = 1,
            'image' => null,
        ]);
        if ($request->has("image")) {
            $fileName = "{$baiDang->id}.jpg";
            $request->file('image')->storeAs('anh', $fileName, 'public');
            $baiDang->image = "{$fileName}";
            $baiDang->save();
        }
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
    public function deleteLoaiBaiViet($id)
    {
        $Loaibaiviet = LoaiBaiViet::find($id)->delete();
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
    public function deleteLoaiDo($id)
    {
        $LoaiDo = LoaiDo::find($id)->delete();
        return redirect()->route('loai-do-vat');
    }
    //=============================================TIN TỨC===========================================================//


    public function TinTuc()
    {
        $tintuc = TinTuc::all();
        //dd($loaidovat->all());
        return view('PagesAdmin.TinTuc', compact('tintuc'));
    }
    public function addTinTuc()
    {
        return view('PagesAdmin.addTinTuc');
    }
    public function createTinTuc(Request $request)
    {
        $addTinTuc = TinTuc::create([
            'Taikhoan' => $request->Taikhoan,
            'Title' => $request->Title,
            'noidung' => $request->noidung,
            'image' => null,
        ]);
        if ($request->has("image")) {
            $fileName = "{$addTinTuc->id}.jpg";
            $request->file('image')->storeAs('anh', $fileName, 'public');
            $addTinTuc->image = "{$fileName}";
            $addTinTuc->save();
        }
        return redirect()->route('tin-tuc');
    }
    public function deleteTinTuc($id)
    {
        $tintuc = TinTuc::find($id)->delete();
        return redirect()->route('tin-tuc');
    }

    //=============================================QUẬN===========================================================//

    public function Quan()
    {
        $quan = Quan::all();
        // dd($quan->all());
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
    //=============================================Báo cáo===========================================================//
    public function Baocao()
    {
        $baocao = BaoCao::all();
        //dd($loaidovat->all());
        return view('PagesAdmin.Baocao', compact('baocao'));
    }
    
    
    public function TaoBaoCao($id,Request $request)
    {

        $baocao = BaoCao::create([
            'noidung' => $request->noidung,
            'Username' => Auth::user()->Username,
            'TK_id' => $request->TK_id,
            'idBaiViet' => $request->idBaiViet,
        ]);
        if (!empty($baocao)) {
            return redirect('/ChiTietBaiViet/'.$request->idBaiViet);
        }
        return redirect()->route('trang-chu');
    }
    public function deleteBaoCao($id)
    {
        $baocao = BaoCao::find($id)->delete();
        return redirect()->route('baocao');
    }
}
