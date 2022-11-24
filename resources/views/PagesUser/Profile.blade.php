<!DOCTYPE html>
<html lang="en">

<head>
    <title></title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="templateProfile/style.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

    <div class="container rounded bg-white mt-5 mb-5">
        <div class="row">
            <div class="col-md-3 border-right">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5"
                        width="150px" src="{{asset('anh/')}}/{{Auth::user()->image}}"><span
                        class="font-weight-bold">{{Auth::user()->Username}}</span><span
                        class="text-black-50"></span><span>{{Auth::user()->email}} </span></div>
            </div>
            <div class="col-md-5 border-right">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h4 class="text-right">THÔNG TIN CÁ NHÂN</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels" for="Username">Tên đăng nhập</label><input
                                type="text" class="form-control" placeholder="Tên đăng nhập"
                                value="{{Auth::user()->Username}}"></div>
                        <div class="col-md-6"><label class="labels" for="phone">Phone</label><input type="text"
                                class="form-control" value=" {{Auth::user()->phone}}" placeholder="Số điện thoại"></div>
                        <div class="col-md-6"><label class="labels" for="address">Nơi sống</label><input type="text"
                                class="form-control" value=" {{Auth::user()->address}}" placeholder="Nơi sống"></div>
                    </div>
                    <div class="row mt-3">
                    <button type="submit" class="btn btn-success"><a style="color:white"
                                    href="{{route('.edit_profile')}}">Chỉnh sửa thông tin cá nhân</a></button>
                        <hr>
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <p class="lead fw-normal mb-0">Bài viết đã đăng</p>

                        </div>
                        @foreach($ListPost as $Post)
                        <div class="row g-2">
                            <div class="col mb-2">
                                <img src=" anh/{{$Post->image}}" alt="image 1" class="w-100 rounded-3">
                                <a href="/ChiTietBaiViet/{{$Post->id}}">
                                    <h2> {{$Post->Title}}</h2>
                                </a>
                                {{$Post->noidung}}
                                <br>
                                <p>{{$Post->created_at->format('d/m/Y')}}</p>
                            </div>
                            @endforeach()
                            <br>
                            
                            <br>
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




</div>

</div>
</div>
</div>
</div>