<link rel="stylesheet" href="teamplatePost/index2.css">
<link href=https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css rel="stylesheet">
<link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<div class="container mt-10">
    <div class="d-flex justify-content-center row">
        <div class="col-md-8">
            <h4 style="font-weight: bold;text-shadow: 2px 2px 8px #FF0000;font-size: 30;text-align: center;">Thông Tin
                Chi Tiết Bài Viết</h4>
            <br>
            @foreach($chitiet as $baiviet)
            @if(!Auth::check())
            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="image/123.jpg" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{$baiviet->TenTK}}</span>
                        </div>
                    </div>
                    <!-- loại bài viết  -->
                    <p style="font-weight: bold;">{{$baiviet->Title}}</p>
                    <div>
                        <div>
                            <p style="font-size: 18px;">{{$baiviet->noidung}}</p>
                        </div>
                        <img style="margin-top: -20px;margin-left: 10px;" width="250px" height="250px" class="img-responsive thumbnail" src="{{asset('anh/')}}/{{$baiviet->image}}" alt="Image">
                    </div>
                </div>
            </div>
            <div>
                <button style="border-radius: 10px;background-color:grey;margin-left: 20;">
                    <a href="{{route('dang-nhap')}}">Đăng Nhập</a>

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
            <div class="d-flex flex-column comment-section">
                <div class="bg-white p-2">
                    <div class="d-flex flex-row user-info"><img class="rounded-circle" src="image/123.jpg" width="40">
                        <div class="d-flex flex-column justify-content-start ml-2"><span class="d-block font-weight-bold name">{{$baiviet->TenTK}}</span>
                        </div>
                    </div>
                    <!-- loại bài viết  -->
                    <p style="font-weight: bold;">{{$baiviet->Title}}</p>
                    <div>

                        <div>
                            <p style="font-size: 18px;">{{$baiviet->noidung}}</p>
                        </div>
                        <img style="margin-top: -20px;margin-left: 10px;" width="250px" height="250px" class="img-responsive thumbnail" src="{{asset('anh/')}}/{{$baiviet->image}}" alt="Image">
                    </div>
                </div>
            </div>

            <div class="bg-white" style="text-align: center;">
                
            </div border="1">
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
                    <div class="indent">
                        <div class="d-flex flex-row align-items-start">
                            <img class="rounded-circle " src="image/123.jpg" width="40">
                            <textarea class="form-control ml-1 shadow-none textarea" style="border:solid grey">
                            </textarea>
                        </div>
                        <div class="mt-2 text-right"><button class="btn btn-primary btn-sm shadow-none" type="button">Gửi Bình Luận </button></div>
                    </div>
                </div>
                @endif
                @endforeach
            </div>
            <br>
            <form method="POST">
                @csrf
                <div>
                    <div class="d-flex flex-row align-items-start"><img class="rounded-circle " src="image/123.jpg" width="40">
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
        @endforeach
    </div>
</div>
</div>
<style>
    input.hidden {
        visibility: hidden;
    }
</style>