<!doctype html>
<html>

<head>
    <link rel="shortcut icon" href="teamplate/ima/icon.jpg">
    <link type="text/css" href="teamplate/css/dangki.css" rel="stylesheet">
    <script src="teamplate/js/dangki.js"></script>
    <meta charset="utf-8">
    <style>
       @import url(https://fonts.googleapis.com/css?family=BenchNine:700);

.snip1582 {
    background-color: #c47135;
    border: none;
    color: #ffffff;
    cursor: pointer;
    display: inline-block;
    font-family: 'BenchNine', Arial, sans-serif;
    font-size: 1em;
    font-size: 22px;
    line-height: 1em;
    margin: 15px 40px;
    outline: none;
    padding: 12px 40px 10px;
    position: relative;
    text-transform: uppercase;
    font-weight: 700;
}

.snip1582:before,
.snip1582:after {
    border-color: transparent;
    -webkit-transition: all 0.25s;
    transition: all 0.25s;
    border-style: solid;
    border-width: 0;
    content: "";
    height: 24px;
    position: absolute;
    width: 24px;
}

.snip1582:before {
    border-color: #c47135;
    border-top-width: 2px;
    left: 0px;
    top: -5px;
}

.snip1582:after {
    border-bottom-width: 2px;
    border-color: #c47135;
    bottom: -5px;
    right: 0px;
}

.snip1582:hover,
.snip1582.hover {
    background-color: #c47135;
}

.snip1582:hover:before,
.snip1582.hover:before,
.snip1582:hover:after,
.snip1582.hover:after {
    height: 100%;
    width: 100%;
}
    </style>
    <title>ICT 36 - Đăng ký</title>
</head>

<body bgcolor="#EFF0F5">
    <div id="wrap">
        <div id="header"> <img src="teamplate/ima/icon.jpg" class="img1"> <br>
            <h2 class="h2">Kiến thức - Kinh nghiệm - Hỏi đáp</h2>

            <!-- <form>
    <select name="nn">
      <option value="Vn">VN</option>
      <option value="ENG">ENG</option>
    </select>
  </form>
 -->
            <form>
                <input type="text" name="search" placeholder="Tìm bài viết, sản phẩm...">
            </form>
        </div>
        <div id="menu">
            <ul>
                <h3>
                    <li> <a href="{{route('trang-chu')}}" id="a1"> Trang chủ</a></li>
                    <li> <a href="{{route('meo-tim-do')}}" id="a1"> Mẹo tìm đồ </a> </li>

                    <li> <a href="{{route('gioi-thieu')}}" id="a1"> Giới thiệu </a> </li>
                    <li> <a href="{{route('gop-y')}}" id="a1"> Góp ý</a> </li>
                </h3>
            </ul>
        </div>
        <br>
        <div id="contend"> <br>
            <div class="divtk"><strong>TẠO TÀI KHOẢN WEBSITE </strong></div>
            <div class="divtk2">Bạn đã là thành viên ? <a href="{{route('dang-nhap')}}">Đăng nhập</a> ngay.</div>
            <br>

            <form class="modal-content" action="{{route('.add-Register')}}" method="POST">
                @csrf
                <div class="container">
                    <h1>Đăng ký</h1>
                    <hr>
                    <br>
                    <label for="Username"><b>Họ và tên</b></label>
                    <input type="text" placeholder="Nhập Username" name="Username">
                    @error('Username')
                    <div style="color:red;">{{ $message }}</div><br>
                    @enderror
                    <br>
                    <br>
                    <label for="email"><b>Email</b></label>
                    <input type="text" placeholder="Nhập Email" name="email">
                    @error('email')
                    <div style="color:red;">{{ $message }}</div><br>
                    @enderror
                    <br>
                    <br>
                    <label for="psw"><b>Mật khẩu</b></label>
                    <input type="password" placeholder="Nhập mật khẩu" name="password">
                    @error('password')
                    <div style="color:red;">{{ $message }}</div><br>
                    @enderror
                    <br>
                    <br>
                    <label for="psw-repeat"><b>Nhập lại mật khẩu</b></label>
                    <input type="password" placeholder="Nhập lại" name="password_confirmation">
                    @error('password_confirmation')
                    <div style="color:red;">{{ $message }}</div><br>
                    @enderror
                    <p>Bằng cách tạo một tài khoản, bạn đồng ý với <a href="#" style="color:dodgerblue">Điều khoản &
                            Quyền riêng tư của chúng tôi</a>.</p>

                    <div class="clearfix">
                        <!-- <button type="button" onclick="document.getElementById('id02').style.display='none'" -->
                            <!-- class="cancelbtn">Thoát</button> -->
                        <button type="submit" class="snip1582">Đăng ký</button>
                    </div>
                </div>
            </form>