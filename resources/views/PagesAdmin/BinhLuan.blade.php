<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<!-- My CSS -->
	<link rel="stylesheet" href="teamplateAdmin/style.css">
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
	<style>
		.project-tab {
			padding: 10%;
			margin-top: -8%;
		}

		.project-tab #tabs {
			background: #007b5e;
			color: #eee;
		}

		.project-tab #tabs h6.section-title {
			color: #eee;
		}

		.project-tab #tabs .nav-tabs .nav-item.show .nav-link,
		.nav-tabs .nav-link.active {
			color: #0062cc;
			background-color: transparent;
			border-color: transparent transparent #f3f3f3;
			border-bottom: 3px solid !important;
			font-size: 16px;
			font-weight: bold;
		}

		.project-tab .nav-link {
			border: 1px solid transparent;
			border-top-left-radius: .25rem;
			border-top-right-radius: .25rem;
			color: #0062cc;
			font-size: 16px;
			font-weight: 600;
		}

		.project-tab .nav-link:hover {
			border: none;
		}

		.project-tab thead {
			background: #f3f3f3;
			color: #333;
		}

		.project-tab a {
			text-decoration: none;
			color: #333;
			font-weight: 600;
		}
	</style>

	<title>AdminVTV</title>
</head>

<body>
	<div class="container">
		<div class="row">
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
							<span class="text" style="color:red;font-weight: bold">Xin chào: <h2>{{Auth::user()->Username}}</h2></span>
						</a>
					</li>
					<li class="">
						<a href="">
							<i class=''></i>
							<span class="text">Quản lý bài viết</span>
						</a>
					</li>
					<li class="active">
						<!--<a href="{{route('menu')}}">-->
						<!-- <i class='bx bxs-group'></i>
				<span class="text">Quản lý bài viết</span> -->
						<div class="dropdown">
							<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
								<i class='bx bxs-group'></i>
								<span class="text">Bình Luận</span>
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Bài Viết </a></li>
								<li><a class="dropdown-item" href="loaibaiviet.html">Loại Bài Viết </a></li>
								<li><a class="dropdown-item" href="loaidovat.html">Loại Đồ Vật</a></li>

								<li><a class="dropdown-item" href="binhluan.html">Bình Luận</a></li>
							</ul>
						</div>
						</a>
					</li>
					<li>
						<!-- <a href="{{route('ListUser')}}"> -->
						<div class="dropdown">
							<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
								<i class='bx bxs-group'></i>
								<span class="text">Quản lý tài khoản</span>
							</button>
							<ul class="dropdown-menu">
								<li><a class="dropdown-item" href="#">Admin</a></li>
								<li><a class="dropdown-item" href="#">User</a></li>

							</ul>
						</div>
						</a>
					</li>
					<!-- <li class="">
				<a href="">
					<i class=''></i>
					<span class="text">Địa Chỉ </span>

				</a>
			</li> -->
					<li class="active">
						<!--<a href="{{route('menu')}}">-->
						<!-- <i class='bx bxs-group'></i>
				<span class="text">Quản lý bài viết</span> -->
						<div class="dropdown">
							<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
								<i class='bx bxs-group'></i>
								<span class="text" href="diachi.html">Địa Chỉ</span>
							</button>
							<ul class="dropdown-menu">

								<li><a class="dropdown-item" href="diachi.html">Địa Chỉ</a></li>
							</ul>
						</div>
					</li>
					<!-- <li class="">
				<a href="">
					<i class=''></i>
					<span class="text">Tin Tức</span>

				</a>
			</li> -->
					<li class="active">
						<!--<a href="{{route('menu')}}">-->
						<!-- <i class='bx bxs-group'></i>
				<span class="text">Quản lý bài viết</span> -->
						<div class="dropdown">
							<button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
								<i class='bx bxs-group'></i>
								<span class="text" href="diachi.html">Tin Tức </span>
							</button>
							<ul class="dropdown-menu">

								<li><a class="dropdown-item" href="tintuc.html">Tin Tức</a></li>
							</ul>
						</div>
					</li>
				</ul>
				<ul class="side-menu">
					<li>
						<a href="#">
							<i class='bx bxs-cog'></i>
							<span class="text">Cài đặt</span>
						</a>
					</li>
					<li>
						<a href="{{route('.Admin_Login')}}" class="logout">
							<i class='bx bxs-log-out-circle'></i>
							<span class="text">Đăng xuất</span>
						</a>
					</li>
				</ul>
			</section>
			<!-- SIDEBAR -->
			<!-- CONTENT -->

			<!-- CONTENT -->
		</div>
		<div class="col" style="margin-left: 100px;">
			<section id="tabs" class="project-tab">

				<div class="container">
					<br>
					<div class="row" style="margin-top: 5px;">
						<div class="col-md-12">

							<div class="tab-content" id="nav-tabContent">


								<div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
									<table class="table" cellspacing="0">
										<thead>
											<tr>
												<th>ID</th>
												<th>Tên Người Dùng</th>
												<th>Bình Luận</th>
												<th>Chức Năng</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td><a href="#">1</a></td>
												<td>Lê Chí Trung</td>
												<td>Ôiii Thật Đau Lồng!!!!!</td>
												<td>
													<button type="button" class="btn btn-outline-success">Xem Chi Tiết</button>
													<button type="button" class="btn btn-outline-danger">Xóa</button>
												</td>
											</tr>

										</tbody>
									</table>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>
		</div>
	</div>
	<script src="teamplateAdmin/script.js"></script>
</body>

</html>