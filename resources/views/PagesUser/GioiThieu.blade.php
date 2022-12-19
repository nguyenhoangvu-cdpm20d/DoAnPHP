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
          xuất</a></div> 

      @else

      <div class="dk"> <a href="{{route('dang-nhap')}}">Đăng nhập</a> ||<a href="{{route('dang-ky')}}"> Đăng
          ký</a> </div>

      @endif

    </div>
    <br><br>
    <div id="contend" style="width: 1344px;"> <br>
      @if(Auth::check())
      <div class="divtk" style="text-align: center;font-size: 25px;"><strong>Chào mừng {{Auth::user()->Username}} đến với Diễn đàn ICT. </strong></div>
 @else
      <div class="divtk" style="text-align: center;font-size: 25px;"><strong>Chào mừng đến với Diễn đàn ICT. </strong></div>
      @endif
      <div id="contend1"style="padding:5%;font-size: 20px;"> 
        Thất lạc đồ đạc là việc không thể tránh khỏi trong cuộc sống sinh hoạt của con người. Trước đây, khi smartphone hay các mạng xã hội chưa phổ biến thì việc tìm lại đồ bị mất là rất khó khăn và cơ hội tìm lại được hầu như là rất nhỏ. Nhưng hiện nay cùng với sự phát triển của công nghệ thì cơ hội để người làm mất tìm lại được đồ hay người nhặt được đồ có thể trả lại đang ngày càng tăng lên thông qua hình thức chủ yếu là đăng bài lên các hội nhóm trên mạng xã hội.
         Tuy vậy cách thức này vẫn tồn tại rất nhiều hạn chế do số lượng người và lượng thông tin quá nhiều dẫn đến việc tiếp cận được người nhặt được đồ khá là khó khăn. Chính vì vậy giải pháp về một ứng dụng di động tìm đồ thất lạc là hoàn toàn thiết thực, với ý tưởng và giải pháp không chỉ dừng lại ở việc đăng tin về mất đồ, nhặt được trong phạm vi một khu vực mà còn được tích hợp nhiều công dụng như tìm kiếm tin theo khu vực mong muốn, 
        tìm kiếm theo thể loại hay có thể xác định địa chỉ tin đăng thông qua bản đồ, có thể trao đổi trực tiếp với người đăng tin để tìm lại được món đồ của mình, theo dõi tin mới một cách nhanh chóng mà tốn ít thời gian trực tuyến. Ngoài ra để tăng tính ứng dụng, hệ thống còn bổ sung tính năng đăng tin tặng và nhận đồ miễn phí để giải quyết bài toán số lượng người dùng có đồ cũ còn giá trị sử dụng nhưng không còn nhu cầu dùng đến ngày càng nhiều. Ứng dụng có những tính năng sau : 
      <br> 1. Tìm kiếm thông tin cần thiết một cách nhanh chóng, đơn giản và thuận tiện.
      <br> 2. Đảm bảo tính bảo mật cho người dùng, không làm lộ thông tin cá nhân, không làm lộ thông tin địa chỉ nếu chưa được sự đồng ý của người dùng.
      <br> 3. Cho phép đăng bài một cách dễ dàng nhưng giới hạn số lượng đăng trong ngày để không xảy ra tình trạng đăng bài liên tục.
      <br> 4. Hỗ trợ báo cáo những bài đăng sai sự thật hoặc vi phạm nội quy, mỗi người chỉ được báo cáo duy nhất một lần một bài đăng để đảm bảo tính khách quan.
      <br> 5. Cho phép người dùng trao đổi với nhau một cách dễ dàng, để có thể hiểu thêm về thông tin đang quan tâm.
      <br> 6. Cho phép người dùng đăng ký nhận bản tin mới nhất tại khu vực của mình, khi có tin mới đăng trong phạm vi khu vực đã đăng ký thì hệ thống sẽ tự động gửi thông báo tới người dùng giảm thiểu thời gian online nhưng lại tăng được khả năng tìm được đồ.<br> </div>
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