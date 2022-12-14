<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('teamplate/ima/icon.jpg')}}">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
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
            <li>
                <a href="{{route('ListUser')}}">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Quản lý tài khoản</span>
                </a>
            </li>
            <li>
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
					<i class='bx bxs-log-out-circle' ></i>
					<span class="text">Đăng xuất</span>
				</a>
			</li>
		</ul>
	</section>
	<!-- SIDEBAR -->
	<!-- CONTENT -->
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
	<!-- CONTENT -->
	

	<script src="teamplateAdmin/script.js"></script>
</body>
</html>