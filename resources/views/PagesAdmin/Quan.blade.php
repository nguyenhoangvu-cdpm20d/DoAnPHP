<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
			<li class="active">
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

		</nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>


			<a href="{{route('.add-quan')}}"><button type="button" class="btn btn-primary" data-toggle="button" aria-pressed="false" autocomplete="off">
					Thêm Quận
				</button></a>
			<div class="table-data">
				<div class="order">
					<div class="head">
						<h3>Quận</h3>
						<i class='bx bx'></i>
						<i class='bx bx'></i>

					</div>
					<table>
						<thead>
							<tr>
								<th>ID</th>
								<th>Quận</th>

								<th>Chức Năng</th>
							</tr>
						</thead>

						<tbody>
							@foreach($quan as $List)
							<tr>
								<td>{{$List->id}}</td>
								<td>{{$List->tenquan}}</td>

								<td>
									<a href="{{('/update_quan/'.$List->id)}}" class="btn btn-outline-success">Chỉnh Sửa</a>
									<a href="/delete_quan/{{$List->id}}" class="btn btn-outline-danger">Xoá</a>
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