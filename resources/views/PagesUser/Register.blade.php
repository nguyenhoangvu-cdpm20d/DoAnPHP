<!DOCTYPE html>
<html lang="en">

<head>
<link rel="shortcut icon" href="{{asset('teamplate/ima/icon.jpg')}}">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Đăng Ký Tài Khoản</h2>

                                <form action="{{route('.add-Register')}}" method="POST">
                                    @csrf
                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="Username">Tên đăng nhập</label>
                                        <input type="text" name="Username" class="form-control form-control-lg" />

                                        @error('Username')
                                        <div style="color:red;">{{ $message }}</div><br>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="email">Email</label>
                                        <input type="email" name="email" class="form-control form-control-lg" />

                                        @error('email')
                                        <div style="color:red;">{{ $message }}</div><br>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="psw">Mật khẩu</label>
                                        <input type="password" name="password" class="form-control form-control-lg" />

                                        @error('password')
                                        <div style="color:red;">{{ $message }}</div><br>
                                        @enderror
                                    </div>

                                    <div class="form-outline mb-4">
                                        <label class="form-label" for="psw-repeat">Nhập lại mật khẩu</label>
                                        <input type="password" name="password_confirmation"
                                            class="form-control form-control-lg" />

                                        @error('password_confirmation')
                                        <div style="color:red;">{{ $message }}</div><br>
                                        @enderror
                                    </div>
                                    <div>
                                        @if(session('Error'))
                                        <p style="color:red"> {{@session('Error')}}</p>
                                        @endif
                                    </div>
                                    <div class="d-flex justify-content-center">
                                        <button type="submit"
                                            class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Đăng
                                            Ký</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Bạn đã có tài khoản? <a
                                            href="{{route('dang-nhap')}}" class="fw-bold text-body"><u>Đăng Nhập</u></a>
                                    </p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</body>

</html>