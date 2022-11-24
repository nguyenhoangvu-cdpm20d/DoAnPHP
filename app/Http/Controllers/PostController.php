<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Post;
use App\Models\LoaiDo;
use App\Models\Quan;
use App\Models\Phuong;
use App\Models\BinhLuan;
use App\Models\LoaiBaiViet;
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
        return view('PagesUser.PostDetail',compact('PostDetail'));
    }

    public function index()
    {   
        $CreatePost1 = LoaiDo::all();
        $CreatePost2 = Quan::all();
        $CreatePost3 = Phuong::all();
        $CreatePost4 = LoaiBaiViet::all();
        return view('PagesUser.Post',compact(['CreatePost1','CreatePost2','CreatePost3','CreatePost4']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'quan_id' => $request->quan_id,
            'phuong_id' => $request->phuong_id,
            'trang_thai'=> $request->trang_thai=1,
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
        return view('PagesUser.ChiTietBaiViet',compact(['chitiet','ListComment']));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

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
    public function update(Request $request, Post $post)
    {
        //
    }

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
}
