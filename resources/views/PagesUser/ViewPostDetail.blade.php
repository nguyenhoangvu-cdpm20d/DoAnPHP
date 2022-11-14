<!doctype html>
<html>

<head>
    <link rel="shortcut icon" href="teamplate/ima/icon.jpg">
    <link type="text/css" href="teamplate/css/css2.css" rel="stylesheet">
    <meta charset="utf-8">
    <title>VTV - Trang chủ</title>
</head>

<body bgcolor="#EEEEEE">
    <div id="wrap">
        <div id="header"> <img src="teamplate/ima/icon.jpg" class="img1"> <br>
            <h2 class="h2">Không lo thất lạc. Tìm là thấy</h2>
            <!-- <form>
    <select name="nn">
      <option value="Vn">VN</option>
      <option value="ENG">ENG</option>
    </select>
  </form>
 -->
            <input type="submit" value="">
            <form>
                <input type="text" name="search" placeholder="Tìm bài viết, đồ thất lạc...">
            </form>
        </div>
        <div id="menu">
            <div class="ul">
                <ul>
                    <h3>
                        <li> <a href="{{route('trang-chu')}}" id="a1"> Trang chủ</a></li>
                        <li> <a href="{{route('meo-tim-do')}}" id="a1"> Mẹo tìm đồ </a> </li>
                        <li> <a href="{{route('Add_Post')}}" id="a1"> Đăng bài </a> </li>
                        <li> <a href="{{route('gioi-thieu')}}" id="a1"> Giới thiệu </a> </li>
                        <li> <a href="{{route('gop-y')}}" id="a1"> Góp ý</a> </li>
                    </h3>
                </ul>
            </div>
            @if(Auth::check())
            <div class="dk">
                <a href="{{route('profile')}}">Xin chào {{Auth::user()->Username}}</a>
            </div>

            
            <div class="dk"><a href="{{route('Logout')}}"> Đăng
                    xuất</a></div>

            @else
            <div class="dk"> <a href="{{route('dang-ky')}}"> Đăng ký</a> ||<a href="{{route('dang-nhap')}}"> Đăng
                    nhập</a> </div>
            @endif

        </div>
        <br><br>
        

        

</body>

</html>