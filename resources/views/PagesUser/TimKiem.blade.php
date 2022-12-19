<!doctype html>
<html>

<head>
<link rel="shortcut icon" href="{{asset('teamplate/ima/icon.jpg')}}">
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
                        <li> <a href="{{route('meo-tim-do')}}" id="a1"> Tin Tức </a> </li>
                        <li> <a href="{{route('Add_Post')}}" id="a1"> Đăng bài </a> </li>
                        <li> <a href="{{route('gioi-thieu')}}" id="a1"> Giới thiệu </a> </li>
                    </h3>
                </ul>
            </div>
            @if(Auth::check())
            <div class="dk">
                <a href="{{route('profile')}}">Xin chào {{Auth::user()->Username}}</a>
            </div>


            <div class="dk"><a href="{{route('Logout')}}"> Đăng
                    xuất</a></div> -->

            @else

            <div class="dk"> <a href="{{route('dang-nhap')}}">Đăng nhập</a> ||<a href="{{route('dang-ky')}}"> Đăng
                    ký</a> </div>

            @endif

        </div>
        <br><br>
        <div id="noidung">
            <div id="contend">
                @if($List->isNotEmpty())
                @foreach($List as $Post)
                <span> <img src="anh/{{$Post->image}}" width="200" height="200"> <a href="/ChiTietBaiViet/{{$Post->id}}">
                        <h2> {{$Post->Title}}</h2>
                    </a> <br>
                    {{$Post->noidung}}
                    <br>
                </span> <br>
                @endforeach()

                @elseif($tintuc->isNotEmpty())
                @foreach($tintuc as $Post)
                <div class="head" style="text-align: center; color: red;">
                        <h1>Tin Tức</h1>
                    </div><br>
                <span> <img src="anh/{{$Post->image}}" width="200" height="200"> <a href="/ChiTietTinTuc/{{$Post->id}}">
                        <h2> {{$Post->Title}}</h2>
                    </a> <br>
                    {{$Post->noidung}}
                    <br>

                </span> <br>

                @endforeach()

                @else
                <b>Không có dữ liệu</b>
                @endif

            </div>
            <div id="right"> <img src="https://cdn.fptshop.com.vn/Uploads/Originals/2019/2/28/636869719313136991_H2.png" class="qc1"> <br>
                <br>
                <br>
                <img src="https://s3-ap-southeast-1.amazonaws.com/storage.adpia.vn/affiliate_document/img/f88-bouns.jpg" width="300" height="400">
            </div>
        </div>
        <br>

        <div id="footer">
            <div class="divft1" style="text-align: center;width: 1344px;">
                <div class="ftMn2">
                    <li> <a href="{{route('trang-chu')}}" id="a1"> Trang chủ</a></li>
                    <li> <a href="{{route('meo-tim-do')}}" id="a1"> Tin Tức </a> </li>
                    <li> <a href="{{route('Add_Post')}}" id="a1"> Đăng bài </a> </li>
                    <li> <a href="{{route('gioi-thieu')}}" id="a1"> Giới thiệu </a> </li>
                </div>
            </div>
            <hr>
            <div class="divft">
                <h4>Thông tin</h4>
                <a href="#">Phone: 0862822655</a> <br>
                <a href="#">Email: abc@gmail.com</a> <br>
                <a href="#">Address: 65 Huỳnh Thúc Kháng, phường Bến Nghé, quận 1, tp HCM</a> <br>
            </div>
            <div class="divft">
                <h4></h4>
                <a href="#"> </a> <br>
                <a href="#"> </a> <br>
                <a href="#"> </a> <br>
                <a href="#"> </a>
            </div>
            <div class="divft">
                <h4></h4>
                <a href="#"> </a> <br>
                <a href="#"> </a> <br>
                <a href="#"> </a> <br>
                <a href="#"> </a>
            </div>
            <div class="divft">
                <h4>Thành phố</h4>
                <a href="#"> Hà Nội</a> <br>
                <a href="#"> Hải Phòng</a> <br>
                <a href="#"> Đà Nẵng</a> <br>
                <a href="#"> Hồ Chí Minh</a>
            </div>
            <div class="divft2">
                <hr>
                <ul>
                    <h4> Chịu trách nhiệm nội dung:</h4>
                    <li style="color: white;">Phan Võ An Vinh</li>
                    <li style="color: white;">Lê Chí Trung</li>
                    <li style="color: white;">Nguyễn Hoàng Vũ</li>
                </ul>
            </div>
        </div>
</body>

</html>