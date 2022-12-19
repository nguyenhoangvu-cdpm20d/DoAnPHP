<!DOCTYPE html>
<html lang="en">
<head>
  <title></title>
  <link rel="shortcut icon" href="{{asset('teamplate/ima/icon.jpg')}}">
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>

<div class="container mt-3">
  <h3>ĐĂNG NHẬP</h3>
  <p>Không lo thất lạc. Tìm là thấy</p>
    
  <form action="{{route('.handle-Login')}}" method="post" class="was-validated">
   @csrf
    <div class="mb-3 mt-3">
      <label for="uname" class="form-label">Tên đăng nhập:</label>
      <input type="text" class="form-control" name="Username" placeholder="Nhập tên đăng nhập" name="uname" required>
      
      @error('Username')
      <div class="valid-feedback"></div>
    <div class="invalid-feedback">Vui lòng điền vào trường này.</div>
                    <div style="color:red">
                        {{ $message }}
                    </div>
                    @enderror
    </div>
    <div class="mb-3">
      <label for="pwd" class="form-label">Mật khẩu:</label>
      <input type="password" class="form-control" name="password" placeholder="Nhập mật khẩu" name="pswd" required>
      <div class="valid-feedback"></div>
    <div class="invalid-feedback"></div>
       @error('password')
                    <div style="color:red;">{{ $message }}</div><br>
                    @enderror
    </div>
    
  <button type="submit" class="btn btn-outline-secondary">Đăng Nhập</button>
  <br>
  <br>
  <h5 style="font-size:15px">Bạn chưa có tài khoản: <a href="{{route('dang-ky')}}">Đăng ký</a></h5>
  </form>
</div>

</body>
</html>
