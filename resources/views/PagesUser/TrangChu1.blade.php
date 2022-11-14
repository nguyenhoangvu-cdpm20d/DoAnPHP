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
            <div class="dk"> <a href="{{route('dang-ky')}}"> Đăng ký</a> ||<a href="{{route('dang-nhap')}}"> Đăng
                    nhập</a> </div>
        </div>
        <br><br>
        <div id="noidung">
            <div id="contend">
                <div class="div121">
                    <div class="div1211">
                        <h3 class="divtb"> <a href="dangnhap.html">
                                <p>TIN NỔI BẬT
                        </h3>
                        @foreach($ListPost as $Post)
                        </a> <img src="anh/{{$Post->image}}" class="img2"> <br>
                        <a href="" class="a1">
                            <h2> {{$Post->Title}}</h2>
                        </a>
                        @endforeach
                        <!-- <br> Nếu cảm thấy Windows 10 của bạn khởi động quá lâu, hãy xem ngay bài viết này.-->
                    </div>
                    <br>
                    <div class="div1212"> <b> Tin cập nhật <img src="teamplate/ima/hot.gif" width="30" height="30"></b>
                        <br>
                        <br>
                        <marquee onmouseover="this.stop()" direction="up" onmouseout="this.start()" Scroll
                            scrollamount="5">
                            @foreach($ListPost as $Post)
                            <a href="#">{{$Post->Title}}</a>
                            @endforeach

                        </marquee>
                    </div>
                    <br>
                    <br>
                    <a href="http://shopee.vn/cuahangit36" class="a1"> <img src="teamplate/ima/banner.jpg"
                            class="img4"></a>
                </div>
                <h3 class="divtb"> <a href="dangnhap.html">
                        <p> ĐỪNG BỎ LỠ
                </h3>
                </a> <br>
                @foreach($ListPost as $Post)
                <span> <img src="anh/{{$Post->image}}" width="200" height="200"> <a href="#">
                        <h2> {{$Post->Title}}</h2>
                    </a> <br>
                    {{$Post->noidung}}
                    <br>
                    <p>{{$Post->created_at->format('d/m/Y')}}</p>
                </span> <br>
                @endforeach
                <hr>
                <br>
                <hr>
                <div class="docnhieu">
                    <hr>
                    <center>
                        <h3 class="divtb">
                            <marquee>
                                <p>TIN ĐỌC NHIỀU
                            </marquee>
                        </h3>
                    </center>
                    @foreach($ListPost as $Post)
                    <div> <img src="anh/{{$Post->image}}" width="200" height="200"> <a href="#">{{$Post->Title}}</a>
                    </div>
                    @endforeach
                </div>
                <hr>
            </div>
            <div id="right"> <img src="https://cdn.fptshop.com.vn/Uploads/Originals/2019/2/28/636869719313136991_H2.png"
                    class="qc1"> <br>
                <br>

                <h3> VTV NEWS</h3>
                <br>
                @foreach($ListPost as $Post)
                <div id="r1"> <b>
                        <img src="anh/{{$Post->image}}" width="80" height="80"> <a href="#"> {{$Post->Title}}</a> </div>
                @endforeach
                <hr>


                <hr>
                <br>
                <img src="teamplate/ima/vivo.jpg" width="300" height="400">
            </div>
        </div>
        <br>

</body>
</html>
