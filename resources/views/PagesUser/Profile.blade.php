<!doctype html>
<html>

<head>
    <link rel="shortcut icon" href="teamplate/ima/icon.jpg">
    <link type="text/css" href="teamplate/css/css2.css" rel="stylesheet">
    <meta charset="utf-8">
    <style>
      @import url(https://fonts.googleapis.com/css?family=BenchNine:700);

.snip1582 {
    background-color: #c47135;
    border: none;
    color: white;
    cursor: pointer;
    display: inline-block;
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
    .abc {
        width: 95%;
        margin-right: auto;
        margin-left: auto;
        box-shadow: 1px 1px 4px #022a5e;
        border-radius: 20px;
        font-size: 30px;
        padding: 10px;
        text-align: ;

    }

    .button {
        display: inline-block;
        padding: 15px 25px;
        font-size: 24px;
        cursor: pointer;
        text-align: center;
        text-decoration: none;
        outline: none;
        color: #f9f5fc;
        background-color: #f9f5fc;
        border: none;
        border-radius: 15px;
        box-shadow: 0 9px #999;
    }

    .button:hover {
        background-color: #fff
    }

    .button:active {
        background-color: #fff;
        box-shadow: 0 5px #666;
        transform: translateY(4px);
    }
    </style>
    <title>VTV - Profile</title>
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
            <form style>
                <input type="text" name="search" placeholder="Tìm bài viết, đồ thất lạc...">
            </form>
        </div>
        <div id="menu">
            <div class="ul">
                <ul>
                    <h3>
                        <li> <a href="{{route('trang-chu')}}" id="a1"> Trang chủ</a></li>
                        <li> <a href="{{route('meo-tim-do')}}" id="a1"> Mẹo tìm đồ </a> </li>
                        <li> <a href="" id="a1"> Đăng bài </a> </li>
                        <li> <a href="{{route('gioi-thieu')}}" id="a1"> Giới thiệu </a> </li>
                        <li> <a href="{{route('gop-y')}}" id="a1"> Góp ý</a> </li>
                    </h3>
                </ul>
            </div>
            <div class="dk"> <a href="{{route('profile')}}">Xin chào: {{Auth::user()->Username}}</a> ||<a
                    href="{{route('Logout')}}"> Đăng Xuất</a> </div>
        </div>
        <br>
        <br>
        <br>
        <div>
        <div style="width:50%;margin:auto">
        
        <div class="tab-content">
            <div class="tab-pane active" id="home">
        <h4 style="color:black;text-align:center;font-size:50px">CHỈNH SỬA THÔNG TIN</h4>
            <hr>
            <br>    
                <form class="abc" action="" id="registrationForm">
                    @csrf
                    <div class="form-group"style="text-align: center">
                        <div class="col-xs-6">
                            <label for="Username">
                                <h4 style="color:black">Họ và tên:      {{Auth::user()->Username}}</h4>
                                
                            </label>
                        </div>
                        
                    </div>
                    <br>
                        <hr>
                    <div class="form-group"style="text-align: center">
                        <div class="col-xs-6">
                            <label for="phone">
                                <h4 style="color:black">Phone:      {{Auth::user()->phone}}</h4>
                                
                            </label>
                        </div>
                    </div>
                    <br>
                        <hr>
                    <div class="form-group"style="text-align: center">
                        <div class="col-xs-6">
                            <label for="email">
                                <h4 style="color:black">Email:      {{Auth::user()->email}}</h4>
                                
                            </label>
                        </div>
                    </div>
                    <br>
                        <hr>
                    <div class="form-group" style="text-align: center">
                        <div class="col-xs-6">
                            <label for="address">
                                <h4 style="color:black">Nơi sống:      {{Auth::user()->address}}</h4>
                                
                            </label>
                        </div>
                    </div>
                    <br>

                    <!-- <button class="button" type="submit">Chỉnh sửa</button> -->
                </form>
                
                
                <!-- <a href="{{route('.edit_profile',['id' => Auth::user()->id])}}">Edit</a> -->
            </div>
            <br>
            <div style="width:100%;text-align:center">
            <button class="button" type="submit" style="margin-top:50px;"> <a style="color:black" href="{{route('.edit_profile')}}">Chỉnh sửa</a></button>
            
  </div>
            <!--/tab-content-->
  </div>

        </div>
  </div>
        <!--/col-9-->
    </div>
    <!--/row-->

    <script>
    $(document).ready(function() {


        var readURL = function(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('.avatar').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }


        $(".file-upload").on('change', function() {
            readURL(this);
        });
    });
    </script>

</body>

</html>