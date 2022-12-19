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
            <li>
                <a href="{{route('ListUser')}}">
                    <i class='bx bxs-user-circle'></i>
                    <span class="text">Quản lý tài khoản</span>
                </a>
            </li>
            <li class="active">
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
			<li>
                <a href="{{route('baocao')}}">
                    <i class='bx bxs-book'></i>
                    <span class="text">Quản lý Báo cáo</span>
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
			<form action="{{route('.create-loaibaiviet')}}" method="POST" enctype="multipart/form-data">
				@csrf
				<div class="col-sm-12 col-xl-6">
					<div class="bg-light rounded h-100 p-4">
						<h6 class="mb-4">Thêm Loại Bài Viết</h6>
						<div class="input-group mb-3">
							<input type="text" class="form-control" placeholder="Tên Loại Bài Viết" name="tenloaibaiviet" aria-describedby="basic-addon1">
						</div>
						@if(session('Error'))
						<p style="color:red">{{session('Error')}}</p>
						@endif
						<br>
						<button type="submit" class="btn btn-success order">Thêm</button>
					</div>
				</div>
			</form>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="teamplateAdmin/script.js"></script>
</body>

</html>