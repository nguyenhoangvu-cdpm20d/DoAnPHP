<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!------ Include the above in your HEAD tag ---------->

    <div class="container" style="padding-top: 60px;">
        <h1 class="page-header">Edit Profile</h1>
        <div class="row">
            <!-- left column -->

            <!-- edit form column -->
            <div class="col-md-8 col-sm-6 col-xs-12 personal-info">

                <h3>Thông Tin Cá Nhân</h3>
                <form class="form-horizontal" method="POST"
                    action="{{route('.Update_Profile', ['id' => Auth::user()->id ])}}" role="form">
@csrf
                    <div class="form-group" style="font-size: 20px;">
                        <label class="col-md-3 control-label">Username:</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="Username" value="{{Auth::user()->Username}}"
                                id="first_name" placeholder="Nhập tên đăng nhập của bạn" title="Nhập tên đăng nhập">
                        </div>
                    </div>
                    <div class="form-group" style="font-size: 20px;">
                        <label class="col-lg-3 control-label">Email:</label>
                        <div class="col-lg-8">
                            <input type="email" class="form-control" name="email" value="{{Auth::user()->email}}"
                                id="email" placeholder="you@email.com" title="Nhập email của bạn">
                        </div>
                    </div>


                    <div class="form-group" style="font-size: 20px;">
                        <label class="col-md-3 control-label">SĐT</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="phone" value="{{Auth::user()->phone}}"
                                id="phone" placeholder="Nhập số điện thoại của bạn">
                        </div>
                    </div>
                    <div class="form-group" style="font-size: 20px;">
                        <label class="col-md-3 control-label">Nơi Sống</label>
                        <div class="col-md-8">
                            <input type="text" class="form-control" name="address" id="address"
                                value="{{Auth::user()->address}}" placeholder="Nhập địa chỉ của bạn"
                                title="Nhập địa chỉ của bạn">
                        </div>
                    </div>
                    <br>
                    <div class="form-group">
                        <label class="col-md-3 control-label"></label>
                        <div class="col-md-8">
                             <button class="btn btn-lg btn-success" type="submit"><a style="color:white;" href="{{route('profile')}}"></a>Lưu</button> 
                            <!-- <button class="btn btn-lg btn-success" type="submit">Save</button> -->
                            <span></span>
                            

                        </div>
                </form>
                <!-- <button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i>
                                Reset</button> -->
            </div>
        </div>
    </div>

</body>

</html>