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
            <form action="{{route('.Search')}}">
                <input type="text" name="search" placeholder="Tìm bài viết, đồ thất lạc...">
                
            </form>
            
        </div>
        <div id="menu">
            <div class="ul">
                <ul>
                    <h3>
                        <li> <a href="{{route('trang-chu')}}" id="a1"> Trang chủ</a></li>
                        <li> <a href="{{route('meo-tim-do')}}" id="a1"> Tin Tức </a> </li>
                        <li> <a href="{{route('Add_Post')}}" id="a1">  Đăng bài </a> </li>
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
                <div class="div121">
                    <div class="div1211">
                        <h3 class="divtb"> <a href="dangnhap.html">
                                <p>TIN NỔI BẬT
                        </h3>
                        <div class="divVdL">
                            <article class="cmDivVdL">
                                @foreach($ListPost as $Post)
                                @if($Post->id==14)
                                <img src="anh/{{$Post->image}}" class="img2"> <br>
                                <a href="/ChiTietBaiViet/{{$Post->id}}">
                                    <h2> {{$Post->Title}}</h2>
                                </a>
                                @endif
                                @endforeach
                            </article>
                        </div>
                        <!-- <br> Nếu cảm thấy Windows 10 của bạn khởi động quá lâu, hãy xem ngay bài viết này.-->
                    </div>
                    <br>
                    <div class="div1212"> <b style="font-size: 25px;"> Tin cập nhật 
                    <img src="teamplate/ima/hot.gif" width="50" height="50"></b>
                        <br>
                        <br>
                        <div style="width: 100%;
                                overflow: hidden;
                                white-space: nowrap; 
                                text-overflow: ellipsis;">
                            <marquee onmouseover="this.stop()" direction="up" onmouseout="this.start()" Scroll scrollamount="5">
                                @foreach($ListPost as $Post)<div style="line-height-step:5px ;">
                                    <a href="/ChiTietBaiViet/{{$Post->id}}">{{$Post->Title}}</a>
                                </div>
                                <br>
                                @endforeach

                            </marquee>
                        </div>
                    </div>
                    <br>
                    <br>
                    <a href="{{route('trang-chu')}}" class="a1"> <img src="teamplate/ima/banner.jpg" class="img4"></a>
                </div>
                <h3 class="divtb"> <a href="dangnhap.html">
                        <p> ĐỪNG BỎ LỠ
                </h3>
                </a> <br>
                @foreach($ListPost as $Post)
                <span> <img src="anh/{{$Post->image}}" width="200" height="200"> <a href="/ChiTietBaiViet/{{$Post->id}}">
                        <h2> {{$Post->Title}}</h2>
                    </a> <br>
                    {{$Post->noidung}}
                    <br>
                    <p>{{$Post->created_at->format('d/m/Y')}}</p>
                </span> <br>

                @endforeach()
                <br>
            </div>
            <div id="right"> <img src="https://cdn.fptshop.com.vn/Uploads/Originals/2019/2/28/636869719313136991_H2.png" class="qc1"> <br>
                <br>

                <h3> VTV NEWS</h3>
                <br>
                @foreach($tintuc as $List)
                <div id="r1"> <b>
                        <img src="anh/{{$List->image}}" width="80" height="80">
                        <a href="/ChiTietTinTuc/{{$List->id}}">{{$List->Title}}</a> </div>
                @endforeach()
                <hr>


                <hr>
                <br>
                <img src="https://s3-ap-southeast-1.amazonaws.com/storage.adpia.vn/affiliate_document/img/f88-bouns.jpg" width="300" height="400">
            </div>
        </div>
        <br>

        <div id="footer">
            
        
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