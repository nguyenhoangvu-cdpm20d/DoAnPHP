<!doctype html>
<html>
<style>
  .abs08 {
    position: absolute;
    bottom: 0;
    left: 0;

  }

  .pd10 {
    padding: 10px;
  }

  figure,
  section,
  aside,
  article,
  header,
  footer {
    display: table-caption;
  }

  * {
    margin: 0;
    padding: 0;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
  }

  header {
    display: block;
  }

  .mb10 {
    margin-bottom: 10px;
  }

  .relative {
    position: relative;
  }

  .figure-fit {
    line-height: 0 !important;
  }

  .ti2 {
    font-weight: bold;
    font-size: 15px;
    line-height: 1.3;
  }

  .ti1 {
    font-weight: bold;
    font-size: 15px;
    line-height: 1.3;
    padding: 5%;
  }

  .white {
    color: #fff;
  }

  a {
    color: #212121;
    outline: none;
    display: inline-block;
    text-decoration: none;
    -webkit-transition-duration: 150ms;
    -moz-transition-duration: 150ms;
    -o-transition-duration: 150ms;
    transition-duration: 150ms;
  }

  .cout-cmt {
    display: none;
  }

  .ti2 * {
    text-indent: 0;
  }

  .ml5 {
    margin-left: 5px;
  }

  .font15 {
    font-size: 15px;
  }

  .ti2 {
    font-weight: bold;
    font-size: 24px;
    line-height: 1.3;
  }

  .gap-10 {
    gap: 0px;
  }

  .grid-2 {
    grid-template-columns: repeat(2, 2fr);
  }

  .grid {
    display: grid;
    align-content: space-evenly;
  }

  .pl15 {
    padding-left: 15px;
  }

  .fl {
    float: right;
  }

  .w-30-100 {
    width: 30%;
  }

  .last-mb article:last-child {
    margin-bottom: 0 !important;
  }

  .last-pb article:last-child {
    padding-bottom: 0 !important;
  }

  .last-bor-bot article:last-child {
    border-bottom: none !important;
  }

  .bor-bot-e5 {
    border-bottom: 1px solid #e5e5e5;
  }


  .flex-details {
    display: -moz-flex;
    display: -ms-flex;
    display: -o-flex;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
  }

  .fl {
    float: left;
  }

  .w-70-100 {
    width: 70%;
  }

  .bor-4bot-e5 {
    border-bottom: 4px solid #e5e5e5;
  }
</style>

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
        <div class="div121">
          <section class="pb10">
          <div class="grid grid-2 gap-10">
            <article class="mb10 relative">
              <figure class="figure-fit"><a href="https://vtc.vn/tom-ten-trom-21-tuoi-gia-shipper-be-khoa-lay-cap-36-chiec-iphone-o-tp-hcm-ar712435.html" title="Tóm tên trộm 21 tuổi giả shipper, bẻ khoá lấy cắp 36 chiếc iPhone ở TP.HCM"><img alt="Tóm tên trộm 21 tuổi giả shipper, bẻ khoá lấy cắp 36 chiếc iPhone ở TP.HCM" class="lazy loaded" title="Tóm tên trộm 21 tuổi giả shipper, bẻ khoá lấy cắp 36 chiếc iPhone ở TP.HCM" data-src="https://image.vtc.vn/resize/th/upload/2022/11/08/trom-iphone-vtc-2-18013317.jpg" src="https://image.vtc.vn/resize/th/upload/2022/11/08/trom-iphone-vtc-2-18013317.jpg" data-was-processed="true" style="width: 830px;height: 400px;padding: 1%;">
                  <div class="gradient-shadow abs08"></div>
                </a></figure>
              <header class="abs08 pd10">
                <h2><a class="ti2 white" data-icon="0" href="/khong-lo-thieu-xang-dau-dip-tet-nguyen-dan-2023-ar719459.html" title="Tóm tên trộm 21 tuổi giả shipper, bẻ khoá lấy cắp 36 chiếc iPhone ở TP.HCM"> Tóm tên trộm 21 tuổi giả shipper, bẻ khoá lấy cắp 36 chiếc iPhone ở TP.HCM
                    <span class="cout-cmt font15 white ml5" data-articleid="719459" data-set="1">
                      <i class="icon-comment-6 mr2"></i><span class="c-comment">0</span></span></a></h2>
              </header>
            </article>
          </div>
            <div class="grid grid-2 gap-10">
              <article>
                <figure class="figure-fit"><a href="https://vtc.vn/csgt-tim-theo-dinh-vi-tom-gon-ten-trom-xe-mo-to-dien-thoai-di-dong-o-sai-gon-ar376446.html" title="CSGT tìm theo định vị tóm gọn tên trộm xe mô tô, điện thoại di động ở Sài Gòn">
                    <img alt="CSGT tìm theo định vị tóm gọn tên trộm xe mô tô, điện thoại di động ở Sài Gòn" data-src="https://image.vtc.vn/files/quanghai/2018/01/19/hxanh-bat-cuop-1359461.jpg" src="https://image.vtc.vn/files/quanghai/2018/01/19/hxanh-bat-cuop-1359461.jpg" class="loaded" data-was-processed="true"style="padding: 1%;padding-left: 2%;width: 254px;height: 254px;"></a></figure>
                <header class="mt8">
                  <h2><a class="ti1" data-icon="0" href="https://vtc.vn/csgt-tim-theo-dinh-vi-tom-gon-ten-trom-xe-mo-to-dien-thoai-di-dong-o-sai-gon-ar376446.html" title="CSGT tìm theo định vị tóm gọn tên trộm xe mô tô, điện thoại di động ở Sài Gòn"> CSGT tìm theo định vị tóm gọn tên trộm xe mô tô, điện thoại di động ở Sài Gòn <span class="cout-cmt red font13" data-articleid="719452" data-set="1"><i class="icon-comment-6"></i><span class="c-comment"></span></span></a></h2>
                </header>
              </article>
              <article>
                <figure class="figure-fit"><a href="https://vtc.vn/triet-pha-duong-day-ca-do-truc-tuyen-giao-dich-hon-3-000-ty-dong-ar719241.html" title="Triệt phá đường dây cá độ trực tuyến giao dịch hơn 3.000 tỷ đồng"><img alt="Triệt phá đường dây cá độ trực tuyến giao dịch hơn 3.000 tỷ đồng" data-src="https://image.vtc.vn/resize/th/upload/2022/12/07/danh-bac-tren-mang-22081670.jpeg" src="https://image.vtc.vn/resize/th/upload/2022/12/07/danh-bac-tren-mang-22081670.jpeg" class="loaded" data-was-processed="true" style="padding: 1%;padding-left: 5%;width: 380px;height: 254px;"></a></figure>
                <header class="mt8">
                  <h2><a class="ti1" data-icon="0" href="https://vtc.vn/triet-pha-duong-day-ca-do-truc-tuyen-giao-dich-hon-3-000-ty-dong-ar719241.html" title="Triệt phá đường dây cá độ trực tuyến giao dịch hơn 3.000 tỷ đồng"> Triệt phá đường dây cá độ trực tuyến giao dịch hơn 3.000 tỷ đồng <span class="cout-cmt red font13" data-articleid="719239" data-set="1"><i class="icon-comment-6"></i><span class="c-comment"></span></span></a></h2>
                </header>
              </article>
            </div>
          </section>
          <section class="pb10">
            <div class="grid grid-2 gap-10">
              <article>
              <figure class="figure-fit"><a href="/bat-bao-ve-chung-cu-o-tp-hcm-mang-4-o-to-cua-cu-dan-di-cam-co-ar719433.html" title="Bắt bảo vệ chung cư ở TP.HCM mang 4 ô tô của cư dân đi cầm cố"><img alt="Bắt bảo vệ chung cư ở TP.HCM mang 4 ô tô của cư dân đi cầm cố" class="lazy loaded" data-src="https://image.vtc.vn/resize/CANbelY-rupMsFMVqIjk_x3vYN2_WncK0/upload/2022/12/08/bao-ve-lay-o-to-15542678.jpg" src="https://image.vtc.vn/resize/CANbelY-rupMsFMVqIjk_x3vYN2_WncK0/upload/2022/12/08/bao-ve-lay-o-to-15542678.jpg" data-was-processed="true" style="padding: 1%;padding-left: 5%;width: 254px;height: 254px;"></a></figure>
              <header class="mb10 mt10">
                <h3><a class="ti1" data-icon="0" href="/bat-bao-ve-chung-cu-o-tp-hcm-mang-4-o-to-cua-cu-dan-di-cam-co-ar719433.html" title="Bắt bảo vệ chung cư ở TP.HCM mang 4 ô tô của cư dân đi cầm cố"> Bắt bảo vệ chung cư ở TP.HCM mang 4 ô tô của cư dân đi cầm cố</a></h3>
              </header>
              </article>
              <article>
              <figure class="figure-fit"><a href="/bat-tam-giam-pho-truong-ban-ban-quan-ly-cac-khu-kinh-te-binh-duong-ar719477.html" title="Bắt tạm giam Phó Trưởng ban Ban Quản lý các Khu kinh tế Bình Dương"><img alt="Bắt tạm giam Phó Trưởng ban Ban Quản lý các Khu kinh tế Bình Dương" class="lazy loaded" data-src="https://image.vtc.vn/resize/CANbelY-rurqv10BFGZCJZUGih5xJe3y0/upload/2022/12/08/nguyen-thanh-trung-19093337.jpg" src="https://image.vtc.vn/resize/CANbelY-rurqv10BFGZCJZUGih5xJe3y0/upload/2022/12/08/nguyen-thanh-trung-19093337.jpg" data-was-processed="true"style="padding: 1%;padding-left: 5%;width: 380px;height: 254px;"></a></figure>
              <header class="mb10 mt10">
                <h3><a class="ti1" data-icon="0" href="/bat-tam-giam-pho-truong-ban-ban-quan-ly-cac-khu-kinh-te-binh-duong-ar719477.html" title="Bắt tạm giam Phó Trưởng ban Ban Quản lý các Khu kinh tế Bình Dương"> Bắt tạm giam Phó Trưởng ban Ban Quản lý các Khu kinh tế Bình Dương</a></h3>
              </header>
              </article>
              @foreach($tintuc as $List)
              <article>
              <figure class="figure-fit"><a href="/ChiTietTinTuc/{{$List->id}}" title="{{$List->Title}}"><img src="anh/{{$List->image}}"  data-was-processed="true"style="padding: 1%;padding-left: 5%;width: 380px;height: 254px;"></a></figure>
              <header class="mb10 mt10">
                <h3><a class="ti1" data-icon="0" href="/ChiTietTinTuc/{{$List->id}}" title="{{$List->Title}}"> {{$List->Title}}</a></h3>
              </header>
              </article>
              @endforeach()
            </div>
          </section>
          <section class="fl pl15 w-30-100 last-bor-bot last-pb last-mb">
            
          </section>
        </div>
        <div>
        </div>
      </div>
      <div id="right"> <img src="https://i0.wp.com/extendedsubset.com/wp-content/uploads/2020/11/nha-cai-fb88-va-nhung-dieu-can-biet-2.jpg?ssl=1" class="qc1"> <br>
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
        <img src="teamplate/ima/vivo.jpg" width="300" height="400">
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