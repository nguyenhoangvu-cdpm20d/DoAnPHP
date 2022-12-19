<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('teamplate/ima/icon.jpg')}}">

    <!-- Boxicons -->
    <link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <link rel="stylesheet" href="styleLBV.css">
    <!-- My CSS -->
    <link rel="stylesheet" href="teamplateAdmin/style.css">

    <title>AdminVTV</title>
</head>

<body>


    <!-- SIDEBAR -->
    <section id="sidebar">
        <a href="#" class="brand">
            <i class='bx bxs-smile'></i>

            <span class="text">AdminVTV</span>
        </a>
        <ul class="side-menu top">
        <li class="">
                <a href="#">
                    <i class='bx bxs'></i>
                    <span class="text" style="color:red;font-weight: bold">Xin chào: {{Auth::user()->Username}}</span>
                </a>
            </li>

            <li>
                <a href="{{route('menu')}}">
                    <i class='bx bxs-edit'></i>
                    <span class="text">Quản lý bài viết</span>
                </a>
            </li>
            <li class="active">
                <a href="{{route('ListUser')}}">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Quản lý tài khoản</span>
                </a>
            </li>
            <li >
                <a href="{{route('loai-bai-viet')}}">
                    <i class='bx bxs-book'></i>
                    <span class="text">Quản lý loại bài viết</span>
                </a>
            </li>
            <li>
                <a href="{{route('loai-do-vat')}}">
                    <i class='bx bxs-book'></i>
                    <span class="text">Quản lý loại đồ vật</span>
                </a>
            </li>
            <li>
				<a href="{{route('tin-tuc')}}">
					<i class='bx bxs-news'></i>
					<span class="text">Quản lý tin tức</span>
				</a>
			</li>
            <li>
				<a href="{{route('quan')}}">
					<i class='bx bxs-home'></i>
					<span class="text">Quản lý Quận</span>
				</a>
			</li>
            <li>
				<a href="{{route('phuong')}}">
					<i class='bx bxs-home'></i>
					<span class="text">Quản lý Phường</span>
				</a>
			</li>
            <li>
                <a href="{{route('baocao')}}">
                    <i class='bx bxs-book'></i>
                    <span class="text">Quản lý Báo cáo</span>
                </a>
            </li>
        </ul>
        <ul class="side-menu">
            
            <li>
                <a href="{{route('.Admin_Login')}}" class="logout">
                    <i class='bx bxs-log-out-circle'></i>
                    <span class="text">Đăng xuất</span>
                </a>
            </li>
        </ul>
    </section>
    <section id="content">
        <!-- NAVBAR -->
        <nav>
            <i class='bx bx-menu'></i>  
            <form action="{{route('.SearchAdmin')}}">
                <div class="form-input">
                    <input type="search" placeholder="Search..." name="search">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            
        </nav>
        <!-- NAVBAR -->

        <!-- MAIN -->
        <main>

        
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Tài khoản</h3>

                        <i class='bx bx'></i>
                        <i class='bx bx'></i>

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên đăng nhập</th>
                                <th>SĐT</th>
                                <th>Email</th>
                                <th>Nơi sống</th>
                                <th>Chức năng</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($listUser as $User)
                            <tr>
                                <td>

                                    {{$User->id}}
                                </td>
                                <td>{{$User->Username}}</td>
                                <td>{{$User->phone}}</td>
                                <td>{{$User->email}}</td>
                                <td>{{$User->address}}</td>
                                <td>
                                    <a href="{{('/update_taikhoan/'.$User->id)}}" class="btn btn-outline-success">Chỉnh Sửa</a>
                                    <a href="/delete_TaiKhoan/{{$User->id}}" class="btn btn-outline-danger">Xoá</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>

        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <script src="teamplateAdmin/script.js"></script>
</body>

</html>