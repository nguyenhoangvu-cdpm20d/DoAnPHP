<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\User;
use App\Models\Post;
use App\Models\LoaiBaiViet;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListPost = Post::all();
        return View('PagesAdmin.Admin',compact('ListPost'));
    }

    public function Login()
    {
        return View('PagesUser.Login');
    }
    public function listUser()
    {
        $listUser = User::all();
        return View('PagesAdmin.LoaiTaiKhoan',compact('listUser'));
    }
    public function deletelistUser($id)
    {
        $listUser = User::find($id)->delete();
        return redirect()->route('ListUser');
    }
    public function MeoTimDo()
    {
        return View('PagesUser.MeoTimDo');
    }
    
    public function MeoTimDo1()
    {
        return View('PagesUser.MeoTimDo1');
    }

    public function MeoTimDo2()
    {
        return View('PagesUser.MeoTimDo2');
    }

    public function MeoTimDo3()
    {
        return View('PagesUser.MeoTimDo3');
    }
    public function MeoTimDo4()
    {
        return View('PagesUser.MeoTimDo4');
    }
    public function MeoTimDo5()
    {
        return View('PagesUser.MeoTimDo5');
    }
    public function MeoTimDo6()
    {
        return View('PagesUser.MeoTimDo6');
    }


    public function GopY()
    {
        return view('PagesUser.GopY');
    }
    public function GioiThieu()
    {
        return view('PagesUser.GioiThieu');
    }

    //public function Register()
    //{
      //  return View('Pages.Register');
    //}
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
        $this->validate($request,[
            'Ten' =>'required|Ten:filter',
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        //
    }
}

