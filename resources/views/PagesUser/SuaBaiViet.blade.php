<!DOCTYPE html>
<html lang="en">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"></script>
<style>
    @import url(https://fonts.googleapis.com/css?family=BenchNine:700);

    .snip1582 {
        background-color: #c47135;
        border: none;
        color: #ffffff;
        cursor: pointer;
        display: inline-block;
        font-family: 'BenchNine', Arial, sans-serif;
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

    .text-demo {
        font-size: 17px;
        font-weight: normal;
    }


    input.hidden {

        visibility: hidden;
    }

    .container {
        width: 100%;
        max-width: 1200px;
        margin-left: auto;
        margin-right: auto;
    }

    .imageUploadContainer {
        text-align: center;
    }

    .imageUpload {
        margin-top: 20px;
        padding: 7.5px 0;
    }

    .fileInfomation {
        margin-top: 20px;
    }

    #imageUploadInput {
        display: none;
    }

    #imagePreview {
        max-width: 100%;
        max-height: 700px;
    }

    #imageUploadInputBtn,
    #sendData {
        display: inline-block;
        padding: 7.5px 15px;
        background-color: #0099cc;
        color: #ffffff;
        cursor: pointer;
        border-radius: 5px;
    }
</style>

<head>
<link rel="shortcut icon" href="{{asset('teamplate/ima/icon.jpg')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>

<body>
    <section class="vh-100 bg-image">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Chỉnh sửa bài viết</h2>

                                <form name="contactForm" id="contactForm" method="post" action="{{route('.update-baiviet',['id'=>$baiDang->id])}}" enctype="multipart/form-data" autocomplete="off">
                                    @csrf
                                    <fieldset>
                                        <input name="TenTK" class="hidden" value="{{Auth::User()->Username}}" type="text" required>
                                        <input name="TK_id" class="hidden" value="{{Auth::User()->id}}" type="text" required>
                                        <div class="form-field">
                                            <input name="Title" id="cName" class="full-width" placeholder=" Tiêu đề" value="{{$baiDang->Title}}" type="text" required>
                                        </div>
                                        <br>
                                        <div>
                                            <label class="text-demo" for="loaidovat_id">Loại bài viết:</label>

                                            <select name="loaidovat_id" id="cars">
                                                @foreach($CreatePost4 as $Create4)
                                                <option value="{{$Create4->id}}">{{$Create4->tenloaibaiviet}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <label class="text-demo" for="loaidovat_id">Danh mục:</label>

                                            <select name="loaidovat_id" id="cars">
                                                @foreach($CreatePost1 as $Create1)
                                                <option value="{{$Create1->id}}">{{$Create1->loaido}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <label class="text-demo" for="cars">Khu vực:</label>
                                        </div>
                                        <div>
                                            <label class="text-demo" for="quan">Quận/Huyện/TP</label>
                                            <select name="quan" id="cars">
                                                @foreach($CreatePost2 as $Create2)
                                                <option value="{{$Create2->id}}">{{$Create2->tenquan}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div>
                                            <label class="text-demo" for="phuong">Phường/Xã/Thị Trấn</label>
                                            <select name="phuong" id="cars">
                                                @foreach($CreatePost3 as $Create3)
                                                <option value="{{$Create3->id}}">{{$Create3->tenphuong}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <br>
                                        <div class="message form-field">
                                            <textarea name="noidung" id="cMessage" class="full-width" placeholder="Nội dung" required style="width: 100%;">{{$baiDang->noidung}}</textarea>
                                        </div>
                                        <br>
                                        <div>
                                            <main>
                                                <div class="container imageUploadContainer">
                                                    <div>
                                                        <img src="{{asset('anh/')}}/{{$baiDang->image}}" alt="Ảnh xem trước" id="imagePreview">
                                                    </div>
                                                    <div class="imageUpload">
                                                        <input name="image" type="file" id="imageUploadInput" onchange="chooseFile(this)" accept="anh/gif, anh/jpeg, anh/png, anh/jpg">
                                                        <span class="button" id="imageUploadInputBtn">Chọn Hình</span>
                                                    </div>
                                                    <div id="uploadFileStatus"></div>
                                                    <div class="fileInfomation">
                                                        <p>
                                                            Tên file:
                                                            <span id="fileInfomation_name">----</span>
                                                        </p>
                                                        <p>
                                                            Định dạng:
                                                            <span id="fileInfomation_type">----</span>
                                                        </p>
                                                        <p>
                                                            Dung lượng:
                                                            <span id="fileInfomation_size">----</span>
                                                        </p>
                                                    </div>
                                                </div>
                                            </main>
                                        </div>
                                        <br>
                                        <input name="submit" id="submit" class="snip1582" value="Đăng tin" type="submit">
                                    </fieldset>
                                </form> <!-- end form -->
                                <a href="{{route('trang-chu')}}" id="a1"><button style="background-color: #c47135;
                                                        border: none;
                                                        color: #ffffff;
                                                        cursor: pointer;
                                                        display: inline-block;
                                                        font-family: 'BenchNine', Arial, sans-serif;
                                                        font-size: 1em;
                                                        font-size: 22px;
                                                        line-height: 1em;
                                                        margin: 15px 40px;
                                                        outline: none;
                                                        padding: 12px 40px 10px;
                                                        position: relative;
                                                        text-transform: uppercase;
                                                        font-weight: 700;;">QUAY LẠI
                                    </button></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    </main>

    </div> <!-- end s-content -->


    <!-- footer
        ================================================== -->
    <footer class="s-footer footer">
        <div class="go-top">
            <a class="smoothscroll" title="Back to Top" href="#top"></a>
        </div>
    </footer>

    </div> <!-- end s-wrap -->


    <!-- Java Script
    ================================================== -->

    <script>
        (function() {
            var imageUpload = function() {
                var self = this;
                this.selector = {
                    fileInput: document.getElementById('imageUploadInput'),
                    fileInputBtn: document.getElementById('imageUploadInputBtn'),
                    imagePreview: document.getElementById('imagePreview'),
                    status: document.getElementById('uploadFileStatus'),
                    sendBtn: document.getElementById('submit'),
                    infoName: document.getElementById('fileInfomation_name'),
                    infoType: document.getElementById('fileInfomation_type'),
                    infoSize: document.getElementById('fileInfomation_size')
                };
                this.imageData = "";
                this.fileTypes = ['image/png', 'image/gif', 'image/jpg', 'image/jpeg'];
                this.maxSize = 30 * 1024 * 1024; // 30MB
                this.uploadUrl = 'https://tutrithuc.com/TestAPI/imageUpload';
                this.onChangeInput = function(e) {
                    // Reset file data / image preview
                    self.selector.status.innerHTML = '';
                    self.selector.imagePreview.setAttribute('src', "img/default.jpg");
                    self.imageData = '';

                    // Get the current file upload
                    var file = e.target.files[0];
                    this.selector.infoName.innerHTML = file.name;
                    this.selector.infoType.innerHTML = file.type;
                    this.selector.infoSize.innerHTML = file.size + " bytes"; // in bytes

                    // Validate file type
                    if (this.fileTypes.indexOf(file.type) == -1) {
                        self.selector.status.innerHTML =
                            "File ảnh không hợp lệ";
                        return;
                    }

                    // Validate file size
                    if (file.size > this.maxSize) {
                        self.selector.status.innerHTML =
                            "Dung lượng file vượt quá giới hạn (tối đa 30MB được chấp nhận)";
                        return;
                    }

                    var reader = new FileReader();
                    reader.onload = function(e) {
                        self.imageData = e.target.result;

                        // Validate file content
                        self.selector.imagePreview.onerror = function() {
                            self.imageData = "";
                            self.selector.imagePreview.setAttribute('src', "img/default.jpg");
                            self.selector.status.innerHTML = 'Nội dung hình không hợp lệ';
                        };
                        self.selector.imagePreview.setAttribute('src', self.imageData);
                    };
                    reader.readAsDataURL(file);
                };
                this.sendData = function() {
                    // Validate when file content is empty
                    if (this.imageData == "") {
                        self.selector.status.innerHTML = 'Vui lòng chọn hình để tải lên';
                        return;
                    }

                    // Prevent double click
                    var data = {
                        'imageData': this.imageData
                    };
                    this.imageData = "";

                    var request = new XMLHttpRequest();
                    request.open("POST", this.uploadUrl);
                    request.setRequestHeader('Content-Type', 'application/json; charset=UTF-8');
                    request.onreadystatechange = function() {
                        if (this.readyState === 4 && this.status === 200) {
                            self.selector.status.innerHTML = "Upload thành công";
                        } else {
                            console.log(this.responseText);
                            self.selector.status.innerHTML = "Đã có lỗi xảy ra, không upload được hình";
                        }
                    };

                    // Send request to server
                    request.send(JSON.stringify(data));
                };

                /*
                 * Event trigger
                 */
                this.selector.fileInput.addEventListener('change', function(e) {
                    self.onChangeInput(e);
                });
                this.selector.fileInputBtn.addEventListener('click', function() {
                    self.selector.fileInput.click();
                });
                this.selector.sendBtn.addEventListener('click', function() {
                    self.sendData();
                });
            };
            window.addEventListener("DOMContentLoaded", function() {
                console.log('DOM is loaded');
                new imageUpload();
            });
        })();

        function chooseFile(fileInput) {
            if (fileInput.files && fileInput.files[0]) {
                var reader = new FileReader();

                reader.onload = function(e) {
                    $('#image').attr('src', e.target.result);
                }
                reader.readAsDataURL(fileInput.files[0]);
            }
        }
    </script>
</body>

</html>