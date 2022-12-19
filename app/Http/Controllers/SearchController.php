<?php

namespace App\Http\Controllers;

use App\Models\LoaiBaiViet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $List = DB::table('bai_viet')->where('Title', 'like', '%' . $request->search . '%')->orwhere('TenTK', 'like', '%' . $request->search . '%')->get();
        $tintuc = DB::table('tin_tuc')->where('Title', 'like', '%' . $request->search . '%')->get();
        return view('PagesUser.TimKiem', compact('List','tintuc'));
    }

    public function indexAdmin(Request $request)
    {
        $Post = DB::table('bai_viet')->where('Title', 'like', '%' . $request->search . '%')->get();
        $News = DB::table('tin_tuc')->where('Title', 'like', '%' . $request->search . '%')->get();
        $User = DB::table('_user')->where('Username', 'like', '%' . $request->search . '%')->get();
        return view('PagesAdmin.Search', compact('Post', 'News', 'User'));
    }
}
