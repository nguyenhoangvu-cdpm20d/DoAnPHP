<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="{{asset('teamplate/ima/icon.jpg')}}">

	<!-- Boxicons -->
	<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel="stylesheet" href="styleLBV.css">
	<!-- My CSS -->
	<link rel="stylesheet" href="teamplateAdmin/style.css">

	<title>AdminVTV</title>
</head>

<body>


	<!-- SIDEBAR -->
	<section id="sidebar">
		<a href="#" class="brand">
			<i class='bx bxs-smile'></i>

			<span class="text">AdminVTV</span>
		</a>
		<ul class="side-menu top">
			<li class="">
				<a href="#">
					<i class='bx bxs'></i>
					<span class="text" style="color:red;font-weight: bold">Xin chào: {{Auth::user()->Username}}</span>
				</a>
			</li>

			<li>
				<a href="{{route('menu')}}">
					<i class='bx bxs-edit'></i>
					<span class="text">Quản lý bài viết</span>
				</a>
			</li>
			<li>
				<a href="{{route('ListUser')}}">
					<i class='bx bxs-user-circle'></i>
					<span class="text">Quản lý tài khoản</span>
				</a>
			</li>
			<li>
				<a href="{{route('loai-bai-viet')}}">
					<i class='bx bxs-book'></i>
					<span class="text">Quản lý loại bài viết</span>
				</a>
			</li>
			<li>
				<a href="{{route('loai-do-vat')}}">
					<i class='bx bxs-book'></i>
					<span class="text">Quản lý loại đồ vật</span>
				</a>
			</li>
			<li class="active">
				<a href="{{route('tin-tuc')}}">
					<i class='bx bxs-news'></i>
					<span class="text">Quản lý tin tức</span>
				</a>
			</li>
			<li>
				<a href="{{route('quan')}}">
					<i class='bx bxs-home'></i>
					<span class="text">Quản lý Quận</span>
				</a>
			</li>
			<li>
				<a href="{{route('phuong')}}">
					<i class='bx bxs-home'></i>
					<span class="text">Quản lý Phường</span>
				</a>
			</li>
			<li>
                <a href="{{route('baocao')}}">
                    <i class='bx bxs-book'></i>
                    <span class="text">Quản lý Báo cáo</span>
                </a>
            </li>
		</ul>
		<ul class="side-menu">

			<li>
				<a href="{{route('.Admin_Login')}}" class="logout">
					<i class='bx bxs-log-out-circle'></i>
					<span class="text">Đăng xuất</span>
				</a>
			</li>
		</ul>
	</section>
	<section id="content">
		<!-- NAVBAR -->
		<nav>
            <i class='bx bx-menu'></i>  
            <form action="{{route('.SearchAdmin')}}">
                <div class="form-input">
                    <input type="search" placeholder="Search..." name="search">
                    <button type="submit" class="search-btn"><i class='bx bx-search'></i></button>
                </div>
            </form>
            <input type="checkbox" id="switch-mode" hidden>
            <label for="switch-mode" class="switch-mode"></label>
            
        </nav>
		<!-- NAVBAR -->

		<!-- MAIN -->
		<main>
			<section class="vh-100 bg-image">
				<div class="mask d-flex align-items-center h-100 gradient-custom-3">
					<div class="container h-100">
						<div class="row d-flex justify-content-center align-items-center h-100">
							<div class="col-12 col-md-9 col-lg-7 col-xl-6">
								<div class="card" style="border-radius: 15px;width: 600px">
									<div class="card-body p-5">
										<h2 class="text-uppercase text-center mb-5">Đăng Tin Tức</h2>

										<form name="contactForm" id="contactForm" method="post" action="{{route('.create-tintuc')}}" enctype="multipart/form-data" autocomplete="off">
											@csrf
											<fieldset>
												<div class="form-field">Tiêu đề: 
													<input name="Title" id="cName" class="full-width" placeholder="" value="" type="text" required>
												</div>
												<br>Nội dung: 
												<div class="message form-field">
													<textarea name="noidung" id="cMessage" class="full-width" placeholder="" required style="width: 100%;"></textarea>
												</div>
												<br>
												<div>
													<main>
														<div class="container imageUploadContainer">
															<div>
																<img src="" alt="" id="imagePreview">
															</div>
															<div class="imageUpload">
																<input name="image" type="file" id="imageUploadInput" onchange="chooseFile(this)" accept="anh/gif, anh/jpeg, anh/png, anh/jpg">
															</div>
															<div id="uploadFileStatus"></div>
															<div class="fileInfomation">
																<span id="fileInfomation_name">----</span><br>
																<span id="fileInfomation_type">----</span><br>
																<span id="fileInfomation_size">----</span>	
															</div>
														</div>
													</main>
												</div>
												<br>
												<button type="submit" class="btn btn-outline-warning">Đăng Tin</button>
											</fieldset>
										</form> <!-- end form -->
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
		</script>>
		</main>
		<!-- MAIN -->
	</section>
	<!-- CONTENT -->
	<script src="teamplateAdmin/script.js"></script>
</body>

</html>