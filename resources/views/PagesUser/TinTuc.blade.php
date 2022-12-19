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
    <link rel="shortcut icon" href="{{asset('teamplate/ima/icon.jpg')}}">
    <link type="text/css" href="teamplate/css/css2.css" rel="stylesheet">
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

                    <section class="vh-100 bg-image">
                        @foreach($TinTuc as $List)
                        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
                            <div class="container h-100">
                                <div class="row d-flex justify-content-center align-items-center h-100">
                                    <div class="col-12 col-md-9 col-lg-7 col-xl-6" style="margin-left: 30px;">
                                        <br>
                                        <!-- Box News Article Details Content Main -->
                                        <article class="cate-24h-foot-arti-deta-content-main" id="article_body">
                                            <header class="cate-24h-foot-arti-deta-title margin-bottom-15">
                                                <h1 class="clrTit bld tuht_show" id="article_title">
                                                    {{$List->Title}}
                                                </h1>
                                            </header>
                                            <br>
                                            <article class="cate-24h-foot-arti-deta-info">

                                                <h3>{{$List->noidung}}
                                                </h3>
                                            </article>
                                        </article>
                                        <br>
                                        <img style="margin-left: 3%;" width="90%" height="90%" class="img-responsive thumbnail" src="{{asset('anh/')}}/{{$List->image}}" alt="Image">

                                        <br>
                                        
                                        <time class="cate-24h-foot-arti-deta-cre-post">Ngày đăng tin:
                                            {{$List->created_at}}</time>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </section>
                    <style>
                        input.hidden {
                            visibility: hidden;
                        }
                    </style>
                    
                </div>
                
            </div>
            <div id="right"> <img src="https://cdn.fptshop.com.vn/Uploads/Originals/2019/2/28/636869719313136991_H2.png" class="qc1"> <br>
                <br>

                <h3> VTV NEWS</h3>
                <br>
                @foreach($tintuc as $List)
                <div id="r1"> <b>
                        <img src="{{asset('anh/')}}/{{$List->image}}" width="80" height="80">
                        <a href="/ChiTietTinTuc/{{$List->id}}">{{$List->Title}}</a> </div>
                @endforeach()
                <hr>


                <hr>
                <br>
                <img src="{{asset('teamplate/ima/vivo.jpg')}}" width="300" height="400">
            </div>
        </div>
        <br>

</body>

</html>