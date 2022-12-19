<!doctype html>
<html>
<style>
    * {
        padding: 0px;
        margin: 0px;
    }

    #wrap {
        width: 1344px;
        margin: auto;
    }

    #header {
        width: 100%;
        height: 75px;
        background-color: #192433;

    }

    input[type="text"] {
        width: 300px;
        box-sizing: border-box;
        border: 1px solid black;
        border-radius: 4px;
        /* bo góc boder*/
        outline: none;
        padding: 12px 14px;
        transition: 0.6s ease-in-out;
        margin-top: 15px;
        background-color: #151D28;
        color: #EEE;


    }

    form {
        float: right;
    }

    input[type="submit"] {
        width: 40px;
        height: 40px;
        margin-top: 15px;
        float: right;
        background-image: url(../ima/tk2.jpg);
        border: 1px solid black;
        border-radius: 4px;
        background-repeat: no-repeat;
    }

    .img1 {
        width: 75px;
        height: 75px;
        float: left;
    }

    .h2 {
        float: left;
        margin-left: 20px;
        color: #FFF;
        font-size: 26px;
    }

    .h22 {
        color: #F00;
        margin-left: 20px;
        float: left;
    }

    h3 {
        color: #F00;
    }

    #menu {
        width: 100%;
        height: 52px;
        background-color: #151D28;
        font-size: large;
        border: 0px solid #F00;
    }

    .dk {

        float: right;
        padding-top: 10px;
        color: #EEE;
        padding-right: 10px;
    }

    .dk a {
        color: #EEE;

    }

    ul {
        width: 100%;
        list-style-type: none;
        float: left;

    }

    .ul {
        float: left;
        margin-left: 65px;

    }

    li {
        display: inline-block;
        /* hien thi list hàng ngang */
        width: 115px;
        height: 40px;
        text-align: center;
        padding-top: 10px;

    }

    #menu a:hover {
        color: #D00;
    }

    #a1 {
        color: #FFF;
        font-size: 20px;
    }

    a {
        text-decoration: none;
        /* link ko có gạch dưới */
    }

    #leftt {
        width: 1px;
        height: 1000px;
        color: #CCC;
        float: left;
        border: 1px #000;
    }

    .img5 {
        width: 197px;
        height: 1000px;
    }

    #contend {
        width: 830px;
        float: left;
        background-color: #FFF;
    }

    #noidung {
        width: 1170px;
        margin-left: 90px;
    }

    .img2 {
        width: 580px;
        height: 330px;
    }

    .img3 {
        width: 350px;
        height: 260px;
    }

    .img4 {
        width: 800px;
        height: 260px;
    }

    b {
        text-align: justify;
    }

    .div121 {
        width: 830px;
        height: 780px;

    }

    .div1211 {
        width: 600px;
        height: 465px;
        float: left;
        border: 0px solid #010;
    }

    .div1212 {
        width: 220px;
        height: 400px;
        border: 1px solid #C00;
        float: left;
        margin-left: 5px;
    }

    hr {
        color: #9F9;
    }

    #right {
        width: 310px;
        float: right;
        border: 0px solid #000;
        padding-top: 20px;
        padding-left: 18px;
        background-color: #EEE;
    }

    #r1 {
        width: 290px;
        height: 80px;
        border: 0px solid;

    }

    #r1 img {
        width: 55px;
        height: 55px;
        float: left;
        padding-right: 5px;

    }

    .qc1 {
        width: 300px;
        height: 80px;
    }

    .qc2 {
        width: 300px;
        height: 450px;
    }

    #footer {
        width: 1344px;
        height: 300px;
        background-color: #192433;
        clear: both;
    }

    span {
        width: 830px;
        height: 200px;
        border: 0px solid;
        float: left;
        padding-bottom: 17px;
    }

    span img {
        float: left;
        padding-right: 20px;
    }

    span p {
        float: right;
        padding-top: 50px;
        font-style: italic;


    }

    .divtb {
        width: 200px;
        height: 25px;
        background-color: #F66;
        border-bottom-color: #000;
        text-align: center;
        margin-bottom: 5px;
    }

    .divtb p {
        color: #EEE;
        padding-top: 3px;
    }

    .docnhieu {
        width: 830px;
        ;
        height: 300px;
        border: 2px solid #010;
        float: left;
        padding-top: 5px;
        background-color: #232C38;
    }

    .docnhieu div {
        width: 250px;
        height: 250px;
        border: 1px solid #000;
        float: left;
        background-color: #151D28;
        margin-left: 20px;

    }

    .docnhieu hr {
        float: left;
    }

    .docnhieu img {
        text-align: center;
        padding-left: 30px;
        padding-top: 5px;
    }

    .docnhieu a {
        float: left;
        text-align: center;
        color: #DDD;
    }

    .divft {
        width: 200px;
        height: 220px;
        border: px solid #EEE;
        float: left;
        margin-left: 115px;
        line-height: 30px;
        padding-top: 20px;
    }

    .divft1 {
        width: 1344px;
        height: 50px;
        border: 0px solid;
        float: left;
        background-color: #151D28;
        padding-left: 15px;
    }

    .divft2 {
        width: 100%;
        height: 100px;
        text-align: center;
        border: 0px solid;
        float: left;
        background-color: #192433;
    }



    #aft {
        padding-bottom: 20px;
    }

    h4 {
        color: #EEE;
    }

    .divft a {
        color: #AAA;
    }

    .divft a:hover {
        color: #EEE;
    }

    .divft1 a {
        color: #3FF;
    }
</style>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="shortcut icon" href="{{asset('teamplate/ima/icon.jpg')}}">
    <link type="text/css" href="teamplate/css/css2.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <meta charset="utf-8">
    <title>VTV - Trang chủ</title>
</head>

<body bgcolor="#EEEEEE">
    <div id="wrap">
        <div id="header"> <img src="{{asset('teamplate/ima/icon.jpg')}}" class="img1"> <br>
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
        <link rel="stylesheet" href="teamplatePost/index2.css">
        <link href=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
        <div class="container mt-10">
            <div class="d-flex justify-content-center row">
                <div class="col-md-8">
                    <h4 style="font-weight: bold;font-size: 30;text-align: center; color: #000;">Thông Tin
                        Chi Tiết Bài Viết</h4>
                    <br>
                    @foreach($chitiet as $baiviet)
                    @if(!Auth::check())
                    
                    <br>
                    <div class="d-flex flex-row user-info">
                        <img class="round" src="{{asset('anh/10.jpg')}}" width="40" height="40">
                        <h5>{{$baiviet->TenTK}}</h5>
                    </div>
                    <!-- loại bài viết  -->
                    <form action="{{route('TaoBaoCao',['id'=>$baiviet->id])}}" method="POST">
                        @csrf
                        <div class="dropdown" style="margin-left: 90%;top: 0.1%;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" 
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: white;border-color: white;">
                                <h2 style="color: #000;">...</h2>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="#">Báo cáo vi phạm</a>
                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <div style="text-align:left;  width: 100%; ">
                                                <h4 class="text-center styles_titleCustom__nikjG "> Báo cáo vi phạm</h4>
                                                <input class="hidden" name="idBaiViet" value="{{$baiviet->id}}">
                                                <div style="text-align: center;">
                                                    <p style="font-size: 20px;"> Bạn cần đăng nhập để có thể báo cáo vi phạm</p>
                                                    <button style="border-radius: 5px;background-color:white;margin-left: 20; width: 20%; height: 15%;">
                                                        <a href="{{route('dang-nhap')}}" style="color: black; font-weight: bold;">Đăng Nhập</a>
                                                    </button>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p style="font-weight: bold;">{{$baiviet->Title}}</p>
                    <div>
                        <div>
                            <p style="font-size: 18px;">{{$baiviet->noidung}}</p>
                        </div>
                        <img style="margin-left: 10px;" width="50%" height="50%" class="img-responsive thumbnail" src="{{asset('anh/')}}/{{$baiviet->image}}" alt="Image">
                    </div>
                    <div style="text-align: center; padding: 10%;">
                        <p style="font-size: 20px;"> Bạn cần đăng nhập để có thể bình luận</p>
                        <button style="border-radius: 5px;background-color:white;margin-left: 20; width: 20%; height: 15%;">
                            <a href="{{route('dang-nhap')}}" style="color: black; font-weight: bold;">Đăng Nhập</a>
                        </button>
                    </div>



                    @foreach($ListComment as $Comment)
                    @if($Comment->baiviet_id === $baiviet->id)
                    <div>
                        <div class="d-flex flex-row align-items-start">
                            <img class="rounded-circle " src="image/nhunhi.jpg" width="20">
                            {{$Comment->TenTK}}
                            <div>
                                <p style="margin-left: 5px;border: 10px;border: solid grey;/* background-color: grey; */border-radius: 7px;display: inline-block;padding: 3px;">
                                    {{$Comment->noidung}}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endif
                    @endforeach
                    @else
                    @csrf
                    <div class="d-flex flex-row user-info">
                        <img class="round" src="{{asset('anh/10.jpg')}}" width="40" height="40">
                        <h5>{{$baiviet->TenTK}}</h5>
                    </div>
                    <!-- loại bài viết  -->
                    <form action="{{route('TaoBaoCao',['id'=>$baiviet->id])}}" method="POST">
                        @csrf
                        <div class="dropdown" style="margin-left: 90%;top: 0.1%;">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="background-color: white;border-color: white;">
                                <h2 style="color: #000;">...</h2>
                            </button>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" data-toggle="modal" data-target="#exampleModal" href="#">Báo cáo vi phạm</a>

                            </div>
                            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">

                                        <div class="modal-body">
                                            <div style="text-align:left;  width: 100%; ">


                                                <h4 class="text-center styles_titleCustom__nikjG "> Báo cáo vi phạm</h4>
                                                <input class="hidden" name="idBaiViet" value="{{$baiviet->id}}">
                                                <div class="styles_modal-body__HL36o undefined">
                                                    <div class="sc-113y56x-0 bwEznN">
                                                        <div class="conditionLoansForm">
                                                            <div class="label">
                                                                <h5>Bài viết này có vấn đề gì</h5>
                                                            </div>
                                                            <div class="sc-kisx03-0 jgmSXT">
                                                                <div class="oneRowWrapper">
                                                                    <div class="inputGroupFullWidth">

                                                                        <div>
                                                                            <div class="Styles_wrapper__nsnmB">
                                                                                <div class="Styles_item__r_Uvw" role="button" tabindex="0">
                                                                                    <div class="Styles_labelItem__djo3m"><br>
                                                                                        <textarea name="noidung" id="cMessage" class="full-width" placeholder="" required style="width: 100%;"></textarea>
                                                                                    </div>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Gửi Báo Cáo</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <p style="font-weight: bold;">{{$baiviet->Title}}</p>

                    <p style="font-size: 18px;">{{$baiviet->noidung}}</p>

                    <img style="margin-left: 10px;" width="50%" height="50%" class="img-responsive thumbnail" src="{{asset('anh/')}}/{{$baiviet->image}}" alt="Image">




                    <div class="bg-white" style="text-align: center;">

                    </div border="1">
                    <br>
                    <table>
                        <div>
                            <div>
                                @foreach($ListComment as $Comment)
                                @if($Comment->baiviet_id === $baiviet->id)
                                <div>
                                    <div class="d-flex flex-row align-items-start">
                                        <img class="rounded-circle " src="image/nhunhi.jpg" width="20">
                                        {{$Comment->TenTK}}
                                        <div>
                                            <p style="margin-left: 5px;border: 10px;border: solid grey;/* background-color: grey; */border-radius: 7px;display: inline-block;padding: 3px;">
                                                {{$Comment->noidung}}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endif
                                @endforeach
                            </div>
                            <br>
                            <form method="POST">
                                @csrf
                                <div>
                                    <div class="d-flex flex-row align-items-start"><img class="rounded-circle " src="{{asset('anh/10.jpg')}}" width="40">
                                        <textarea class="form-control ml-1 shadow-none textarea" style="border:solid grey" name="noidung"></textarea>
                                    </div>

                                    <input type="hidden" name="baiviet_id" value="{{$baiviet->id}}">
                                    <div class="mt-2 text-right">
                                        <button class="btn btn-primary btn-sm shadow-none" type="submit"> Gửi Bình Luận </button>
                                    </div>
                                </div>
                            </form>
                            @endif
                        </div>
                    </table>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <style>
        input.hidden {
            visibility: hidden;
        }
    </style>
</body>

</html>