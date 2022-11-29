<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Post;
use App\Http\Requests\dangnhapRequest;
use App\Http\Requests\dangkyRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ListPost = Post::all()->sortByDesc('id');
        return View('PagesUser.TrangChu',compact('ListPost'));
    }

    public function login()
    {
        return View('PagesUser.Login');
    }
    
    


    

    public function Handle_Login(dangnhapRequest $request)
    {
        //if(Auth::attempt(['Username'=>$Username,'password'=>$password,'loaitaikhoan_id'=>2]))
         $credentials =[
            'Username' => $request ->Username,
            'password' => $request ->password,
            'loaitaikhoan_id' => 1];
            $credentials2 =[
                'Username' => $request ->Username,
                'password' => $request ->password,
                'loaitaikhoan_id' => 2];
        // $credentials2 = $request -> only(['Username','password','loaitaikhoan_id'=>2]);
        if(Auth::attempt($credentials)){
            $ListPost = Post::orderBy('id','DESC')->paginate(3);
            return View('PagesUser.TrangChu',compact('ListPost'));
        }
        else if(Auth::attempt($credentials2))
        {
            $ListPost = Post::all()->sortByDesc('id');
            return View('PagesAdmin.layout',compact('ListPost'));
        }
        else{
            return redirect()->back()->with("Error","Đăng nhập không thành công!");
        }
        
    }

    

    public function logout()
    {
        Auth::logout();
       return redirect()->route('trang-chu');
    }

    public function Admin_Logout()
    {
        Auth::logout();
       return redirect()->route('Login');
    }

    public function Register()
    {
        return View('PagesUser.Register');
    }

    public function RegisterAdmin()
    {
        return View('PagesAdmin.Register-Admin');
    }

    public function Profile()
    {
        $ListPost=Post::all()->where('TK_id','=',Auth::user()->id);
        return View('PagesUser.Profile',compact('ListPost'));
    }

    public function EditProfile()
    {
        return View('PagesUser.EditProfile');
    }

    public function Post()
    {
        return View('PagesUser.Post');
    }

    public function edit(User $user)
    {
        $profile = $user::find(Auth::user()->id);
        return view('PagesUser.EditProfile',compact('profile'));
    }
    
    public function update(Request $request,User $id)
    {
        $profile = User::find(Auth::user()->id);
        if(empty($profile))
        {
            return("Không tìm thấy người dùng vs id ={$id}");
        }
        //return view('User.Edit-Profile',compact('profile'));
        $profile -> Username = $request -> Username;
        $profile -> email = $request -> email;
        $profile -> phone = $request -> phone;
        $profile -> address = $request -> address;
        $profile->image="avatar.JPG";
        // $profile -> image = $request -> image;
        // $profile ->path = $request->file('avatar')->store('public/avatar');
        // $file = $request->avatar;
        // $file_name = $file->getClientOriginalName();
        // $file->move(public_path('avatar'), $file_name);
        // $request->merge(['avatar' => $file_name]);
        $profile -> save();
        //dd($profile->all());
        return redirect()->route('profile');

      
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
    public function store(dangkyRequest $request)
    {   
        $emailExist = User::where('email',$request->email)->count();
        if($emailExist > 0)
        {
            return redirect()->back()->with('Error','Tài khoản email đã tồn tại');
        }

        $Users = User::create([
            'Username'=>$request->Username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'loaitaikhoan_id'=>1
        ]);
        if(!empty($Users)){
            $ListPost = Post::all()->sortByDesc('id');
            return View('PagesUser.TrangChu',compact('ListPost'));
        }
    }

    public function storeAdmin(Request $request)
    {
        $Users = User::create([
            'Username'=>$request->Username,
            'email'=>$request->email,
            'password'=>Hash::make($request->password),
            'loaitaikhoan_id'=>2
        ]);
        if(!empty($Users)){
            return View('PagesAdmin.Admin');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }


   
}
