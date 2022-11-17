<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
					<i class='bx bxs' ></i>
					<span class="text" style="color:red;font-weight: bold">Xin chào:  <h2>{{Auth::user()->Username}}</h2></span>
				</a>
			</li>
            <li class="">
			<a href="">
					<i class='' ></i>
					<span class="text">Quản lý bài viết</span>
				</a>
			</li>
			<li class="active">
			<a href="{{route('menu')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Quản lý bài viết</span>
				</a>
			</li>
			<li>
				<a href="{{route('ListUser')}}">
					<i class='bx bxs-group' ></i>
					<span class="text">Quản lý tài khoản</span>
				</a>
			</li>
		</ul>
		<ul class="side-menu">
			<li>
				<a href="#">
					<i class='bx bxs-cog' ></i>
					<span class="text">Cài đặt</span>
				</a>
			</li>
			<li>
				<a href="{{route('.Admin_Login')}}" class="logout">
					<i class='bx bxs-log-out-circle' ></i>
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

            @foreach($ListPost as $Post)
            <div class="table-data">
                <div class="order">
                    <div class="head">
                        <h3>Bài viết</h3>

                        <i class='bx bx'></i>
                        <i class='bx bx'></i>

                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>STT</th>
                                <th>Tên đăng nhập</th>
                                <th>Tiêu đề</th>
                                <th>Nội dung</th>
                                <th>Hình ảnh</th>
                                <th>Quận</th>
                                <th>Phường</th>
                                <th>Ngày đăng</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>

                                    <p>{{$Post->id}}</p>
                                </td>
                                <td>{{$Post->TenTK}}</td>
                                <td>{{$Post->Title}}</td>
                                <td>{{$Post->noidung}}</td>
                                <td>{{$Post->image}}</td>
                                <td>{{$Post->quan_id}}</td>
                                <td>{{$Post->phuong_id}}</td>
                                <td>{{$Post->created_at->format('d/m/Y')}}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

            </div>
            @endforeach
        </main>
        <!-- MAIN -->
    </section>
    <!-- CONTENT -->
    <script src="teamplateAdmin/script.js"></script>
</body>
</html>