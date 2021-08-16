<!DOCTYPE html>
<html lang="">
	<head>
		<title>Giảng Dạy</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="css/GiangDay.css">
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,600;0,700;0,800;1,600;1,700;1,800&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
		<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> -->

	</head>
	<body>
		<div class="main">
			<div class="mainContaint">
			<!-- thanh menu -->
				<nav>
			      <input type="checkbox" id="check">
			      <label for="check" class="checkbtn">
			        <img src="images/menu.png" alt="">
			      </label>
			      <label class="logo">
						<img class="imgWeb"c src="images/website.png" alt="" style="">
						<a href="">Tìm việc 365.com.vn</a>
			      </label>
			      <ul>
			        <li>
			        	<div class="menuLine">
							<a href="" class="menu activeHome">Trang chủ</a>
						</div>
					</li>
			        <li>
			        	<div class="menuLine dropdown paddingMenu">
							<a href="" class="menu dropbtn"id="dropbtn" onclick="myFunction()">Khóa Học Online
								<span toggle="#KhoaHoc-field" class="fa fa-caret-down field-icon toog"></span>
							</a>
						  <div id="myDropdownt" class="dropdown-content">
						    <a href="">Page 1</a>
							<a href="">Page 2</a>
							<a href="">Page 3</a>
						  </div>
						</div>
					</li>
					<li>
						<div class="dropdown menuLine">
							<a href="" class="menu dropbtn">Khóa Học Offline
								<span toggle="#KhoaHoc-field" class="fa fa-caret-down field-icon "></span>
							</a>
						  <div class="dropdown-content">
							  <a href="#">Page 4</a>
							  <a href="#">Page 5</a>
							  <a href="#">Page 6</a>
						  </div>
						</div>
			        </li>
			        <li>
			        	<div class="menuLine paddingMenu">
							<a href="" class="menu">Học Viên</a>
						</div>
			        </li>
			        <li>
			        	<div class="menuLine">
							<a href="" class="menu">Blog</a>
						</div>
			        </li>
			        <li>
			        	<div class="menuLine paddingMenu">
							<img class="" src="images/cart.png" alt="">
						</div>
						
			        </li>
			        <li>
			        	<div class="menuLine">
							<button class="btnDangTin">Đăng tin</button>
						</div>
			        </li>
			        <li>
			        	<div class="loginRegis" style="">
							<div class="login_Regis">
								<a href="Login.php"><img src="images/icon-login.png" alt="">Đăng nhập</a>
								<span><b>|</b></span>
								<a href="Register.php"><img src="images/icon-Register.png" alt="">Đăng ký</a>
							</div>
						</div>
			        </li>
			      </ul>
			    </nav>
			  <!--  Main -->
			    <section></section>
				<div class="contentGiangDay">
					<div class="title">
						<div class="titleLeft">
							<h2 class="titlForm">Hợp tác giảng dạy cùng <span><b>Timviec365.com.vn</b></span></h2>
							<p>Đồng hành cùng chúng tôi trên con đường nâng tầm tri thức</p>
							<button class="btnDangKy">Đăng Ký Hợp Tác</button>
						</div>
						<div class="titleRight">
							<img class="imgTitleRight" src="images/titleGiangDay.png" alt="">
						</div>
					</div>
					<div class="content-2">
						<div class="chooseContent" style="">
							<div class="menuKyNang chooseMenu" style="" id="menuKyNang">
								<div class="titleMenu">
									<img class="imgKyNang" id="imgKyNang" src="images/kynang.png" alt="">
									<h3 class="h3 hoverH3KyNang" id="">Nâng Cao Kỹ Năng Giảng Dạy</h3>
								</div>
								<div class="contentMenu">
									<p class="hoverPKyNang">Trải nghiệm hình thức đào tạo mới và phát triển kinh nghiệm giảng dạy</p>
								</div>
							</div>
							<div class="menuCoHoi chooseMenu" id="menuCoHoi" style="">
								<div class="titleMenu">
									<img class="imgCoHoi" id="imgCoHoi" src="images/cohoidonghanh.png" alt="">
									<h3 class="hoverH3CoHoi">Cơ Hội Đồng Hành</h3>
								</div>
								<div class="contentMenu">
									<p class="hoverPCoHoi">Hợp tác cùng Timviec365 - công ty tuyển dụng hàng đầu Việt Nam</p> 
								</div>
							</div>
							<div class="menuThuThap chooseMenu" style="" id="menuThuThap">
								<div class="titleMenu">
									<img class="imgThuThap" id="imgThuThap" src="images/thuthap.png" alt="">
									<h3 class="hoverH3ThuThap">Thu Thập Tự Động Hấp Dẫn</h3>
								</div>
								<div class="contentMenu">
									<p class="hoverPThuThap">Nhận chia sẽ doanh thu từ khóa học</p>
								</div>
							</div>
						</div>
					</div>
					<div class="contentLoiIch">
						<div class="content_LoiIch">
							<div class="imgLoiIch">
								<img class="imgLoiIch1" src="images/loiich1.png" alt="">
							</div>
							<div class="content_LoiIch_">
								<div class="imgVuong">
									<img class="img1" src="images/Rectangle 973.png" alt="">
									<img class="img2" src="images/Rectangle 972.png" alt="">
								</div>
								<h3>Lợi Ích Khi Tham Gia</h3>
								<p class="content-1">Với Timviec365 - giảng viên là đối tác chiến lược</p>
								<p class="content-2">Chính sách hợp tác minh bạch, tỷ lệ chia sẻ doanh thu hấp dẫn và đội ngũ hỗ trợ luôn đồng hành cùng giảng viên</p>
								<button class="btnKyHopTac">Đăng Ký Hợp Tác</button>
							</div>
						</div>
							<img class="imgLoiIch2" src="images/loiich2.png" alt="">
					</div>
					<div class="content-4">
						<div class="content-4_1">
							<div class="hocOnline content-4_2" style="">
								<div class="img-4_1">
									<img class="img1" src="images/khoaHoc.png" alt="">
								</div>	
								<div class="content4_1">
									<h2>900 +</h2>
									<a href="">Khóa học Online thuộc nhiều lĩnh vực</a>
								</div>
							</div>
							<div class="HVThamGia content-4_2" style="">
								<div class="img-4_1">
									<img class="img1" src="images/HVThamGia.png" alt="">
								</div>	
								<div class="content4_1">
									<h2>15k +</h2>
									<a href="">Học viên tham gia</a>
								</div>
							</div>
							<div class="daiLy content-4_2" style="">
								<div class="img-4_1">
									<img class="img1" src="images/DaiLy.png" alt="">
								</div>	
								<div class="content4_1">
									<h2>2500 +</h2>
									<a href="">Đại lý - đối tác trên toàn quốc</a>
								</div>
							</div>
						</div>
					</div>
					<div class="content-5">
						<h2 class="titleQuyTrinh">Quy Trình Hợp Tác</h2>
						<p class="ndQuyTrinh">Hình thức hợp tác linh hoạt, giảng viên có thể lựa chọn đăng tải khoa học có sẵn hoặc phối hợp sản xuất độc quyền
						cùng đội ngũ Timviec365.com.vn</p>
						<div class="content5_1">
							<div class="btn btnLeft">
								<button type="reset" style="" class="btnHopTac btnHover" id="btnHopTac"> 
									<div class="ndButton">
										<img class="imgQT" id= "imgSX" src="images/latop3.png" height=""/>
										<p>Hợp tác phân phối hóa học</p>
									</div>
								</button>
							</div>
							<div class="btn btnRight">
								<button type="reset" style="" class="btnSX btnHover" id="btnSX"> 
									<div class="ndButton">
										<img class="imgQT" id= "imgPP" src="images/laptop2.png" height=""/>
										<p>Hợp tác sản xuất hóa học</p>
									</div>
								</button>
							</div>
						</div>
					</div>
					<div class="content-6"id="content-6">
						<div class="content-left">
							<div class="left6_1">
								<div class="left6_1Img">
									<img src="images/1.png" alt="" class="imgIndex">
									<img src="images/content6.png" alt="" class="imgleft1">
								</div>
								<div class="left6_1Nd">
									<a href="">Gửi outline và video demo khóa học</a>
								</div>
								
							</div>
							<div class="left6_1">
								<div class="left6_1Img">
									<img src="images/2.png" alt="" class="imgIndex">
									<img src="images/content6_1.png" alt="" class="imgleft1">
								</div>
								<div class="left6_1Nd">
									<a href="">Ra mắt khóa học</a>
								</div>
								
							</div>
							<div class="left6_1">
								<div class="left6_1Img">
									<img src="images/3.png" alt="" class="imgIndex">
									<img src="images/content6_2.png" alt="" class="imgleft1">
								</div>
								<div class="left6_1Nd">
									<a href="">Kiểm tra chất lượng khóa học và ký hợp đồng hợp tác</a>
								</div>
								
							</div>
							<div class="left6_1">
								<div class="left6_1Img">
									<img src="images/4.png" alt="" class="imgIndex">
									<img src="images/content6_3.png" alt="" class="imgleft1">
								</div>
								<div class="left6_1Nd">
									<a href="">Hỗ trợ học viên và chia sẻ doanh thu</a>
								</div>
								
							</div>
						</div>
						<div class="img-right">
							<img src="images/content-6.png" alt="" class="img6">
						</div>
					</div>
					<div class="content-6" id="content-6HV">
						<div class="content-left">
							<div class="left6_1">
								<div class="left6_1Img">
									<img src="images/1.png" alt="" class="imgIndex">
									<img src="images/content6_HV.png" alt="" class="imgleft1">
								</div>
								<div class="left6_1Nd">
									<a href="">Trao đổi thống nhất thông tin, kí hợp đồng hợp tác</a>
								</div>
								
							</div>
							<div class="left6_1">
								<div class="left6_1Img">
									<img src="images/2.png" alt="" class="imgIndex">
									<img src="images/content6_1HV.png" alt="" class="imgleft1">
								</div>
								<div class="left6_1Nd">
									<a href="">Xây dựng nội dung bài giảng</a>
								</div>
								
							</div>
							<div class="left6_1">
								<div class="left6_1Img">
									<img src="images/3.png" alt="" class="imgIndex">
									<img src="images/content6_2HV.png" alt="" class="imgleft1">
								</div>
								<div class="left6_1Nd">
									<a href="">Quay, biên tập và ra mắt khóa học</a>
								</div>
								
							</div>
							<div class="left6_1">
								<div class="left6_1Img">
									<img src="images/4.png" alt="" class="imgIndex">
									<img src="images/content6_3HV.png" alt="" class="imgleft1">
								</div>
								<div class="left6_1Nd">
									<a href="">Hỗ trợ học viên và chia sẻ doanh thu</a>
								</div>
								
							</div>
						</div>
						<div class="img-right" style="">
							<img src="images/Content6HV.png" alt="" class="img6">
						</div>
					</div>
					<div class="content-7">
						<div class="contentHoTro">
							<div class="contentHoTro1">
								<div class="imgVuong">
									<img class="img1" src="images/Rectangle 973.png" alt="">
									<img class="img2" src="images/Rectangle 972.png" alt="">
								</div>
								<h3>Đội Ngũ Hỗ Trợ</h3>
								<p class="content-1">Luôn đồng hành cùng giảng viên trong suốt quá trình hợp tác.</p>
								<div class="contentHoTro1_1">
									<div class="NdHoTro contentHoTro1_2">
										<img src="images/ndHoTro.png" alt="">
										<div>
											<h4>Hỗ trợ nội dung</h4>
											<a href="">Cùng xây dựng nội dung, kịch bản khóa học và chuẩn bị học liệu.</a>
										</div>
									</div>
									<div class="HoTroKyThuat contentHoTro1_2">
										<img src="images/hoTroKyThuat.png" alt="">
										<div>
											<h4>Hỗ trợ ký thuật</h4>
											<a href="">Đội ngũ chuyên nghiệp, trang thiết bị hiện đại đảm bảo chất lượng sản phẩm.</a>
										</div>
									</div>
								</div>
							</div>
							<div class="imgHoTroRight">
								<img src="images/hotro1.png" alt="" class="imgHoTro">
								<img src="images/hotro2.png" alt="" class="imgHoTro2">
							</div>
						</div>
					</div>
					<div class="content-8">
						<h3>Thư Viện Hình Ảnh</h3>
						<div class="hinhanh">
							<div class="anhLeft">
								<img src="images/hinhanh1.png" alt="">
							</div>
							<div class="hinhAnhRight">
								<div class="hinhAnh_Right">
									<div class="anhCenter">
										<img src="images/hinhanh2.png" alt="" class="">
										<img src="images/hinhanh4.png" alt="" class="imgCenter">
									</div>
									<div class="anhRight">
										<img src="images/hinhanh3.png" alt="" class="ingRight1">
										<img src="images/hinhanh5.png" alt=""  class="ingRight2">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="content-9">
					<h2 class="h2">Giảng viên nói gì về chúng tôi</h2>
					<p class="nd9">Kinh nghiệm và kiến thức của giảng viên chính là nguồn cảm hứng cho Timviec365.com.vn</p>
					<div class="slideshow-container">
						<div class="mySlides fade">
							<div class="content-9_1">
								<div class="content-9_2" style="">
									<div class="content-9_2_1"style="">
										<h3>Thân thiện với mọi người 1</h3>
										<p>Nền tảng thân thiện với người dùng và giảng viên, giúp cho mọi người có thể dễ dàng tiếp cận được tri thức mới</p>
										<div class="Polygon"><img src="images/Polygon.png" alt=""></div>
									</div>
									<div class="content-9_3 content-9_3Left">
										<img src="images/Ellipse1.png" alt="">
										<h4>Nguyễn Đỗ Bảo Cường1</h4>
										<a>Giáo sư kinh tế học ĐH Sư Phạm Hà Nội</a>
									</div>
								</div>
								<div class="content-9_2 content-9Center"style="">
									<div class="content-9_2_1"style="">
										<h3>Thân thiện với mọi người1</h3>
										<p>Nền tảng thân thiện với người dùng và giảng viên, giúp cho mọi người có thể dễ dàng tiếp cận được tri thức mới</p>
										<div class="Polygon"><img src="images/Polygon.png" alt=""></div>
									</div>
									<div class="content-9_3 content-9_3Center">
										<img src="images/Ellipse2.png" alt="">
										<h4>Nguyễn Đỗ Bảo Cường1</h4>
										<a>Giáo sư kinh tế học ĐH Sư Phạm Hà Nội</a>
									</div>
								</div>
								<div class="content-9_2 content-9Right"style="">
									<div class="content-9_2_1" style="">
										<h3>Thân thiện với mọi người1</h3>
										<p>Nền tảng thân thiện với người dùng và giảng viên, giúp cho mọi người có thể dễ dàng tiếp cận được tri thức mới</p>
										<div class="Polygon"><img src="images/Polygon.png" alt=""></div>
									</div>
									<div class="content-9_3 content-9_3Right">
										<img src="images/Ellipse3.png" alt="">
										<h4>Nguyễn Đỗ Bảo Cường1</h4>
										<a>Giáo sư kinh tế học ĐH Sư Phạm Hà Nội</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mySlides fade">
							<div class="content-9_1">
								<div class="content-9_2" style="">
									<div class="content-9_2_1"style="">
										<h3>Thân thiện với mọi người 2</h3>
										<p>Nền tảng thân thiện với người dùng và giảng viên, giúp cho mọi người có thể dễ dàng tiếp cận được tri thức mới</p>
										<div class="Polygon"><img src="images/Polygon.png" alt=""></div>
									</div>
									<div class="content-9_3 content-9_3Left">
										<img src="images/Ellipse1.png" alt="">
										<h4>Nguyễn Đỗ Bảo Cường2</h4>
										<a>Giáo sư kinh tế học ĐH Sư Phạm Hà Nội</a>
									</div>
								</div>
								<div class="content-9_2 content-9Center"style="">
									<div class="content-9_2_1"style="">
										<h3>Thân thiện với mọi người2</h3>
										<p>Nền tảng thân thiện với người dùng và giảng viên, giúp cho mọi người có thể dễ dàng tiếp cận được tri thức mới2</p>
										<div class="Polygon"><img src="images/Polygon.png" alt=""></div>
									</div>
									<div class="content-9_3 content-9_3Center">
										<img src="images/Ellipse2.png" alt="">
										<h4>Nguyễn Đỗ Bảo Cường</h4>
										<a>Giáo sư kinh tế học ĐH Sư Phạm Hà Nội</a>
									</div>
								</div>
								<div class="content-9_2 content-9Right"style="">
									<div class="content-9_2_1" style="">
										<h3>Thân thiện với mọi ngườ2i</h3>
										<p>Nền tảng thân thiện với người dùng và giảng viên, giúp cho mọi người có thể dễ dàng tiếp cận được tri thức mới</p>
										<div class="Polygon"><img src="images/Polygon.png" alt=""></div>
									</div>
									<div class="content-9_3 content-9_3Right">
										<img src="images/Ellipse3.png" alt="">
										<h4>Nguyễn Đỗ Bảo Cường2</h4>
										<a>Giáo sư kinh tế học ĐH Sư Phạm Hà Nội</a>
									</div>
								</div>
							</div>
						</div>
						<div class="mySlides fade">
							<div class="content-9_1">
								<div class="content-9_2" style="">
									<div class="content-9_2_1"style="">
										<h3>Thân thiện với mọi người 3</h3>
										<p>Nền tảng thân thiện với người dùng và giảng viên, giúp cho mọi người có thể dễ dàng tiếp cận được tri thức mới</p>
										<div class="Polygon"><img src="images/Polygon.png" alt=""></div>
									</div>
									<div class="content-9_3 content-9_3Left">
										<img src="images/Ellipse1.png" alt="">
										<h4>Nguyễn Đỗ Bảo Cường3</h4>
										<a>Giáo sư kinh tế học ĐH Sư Phạm Hà Nội</a>
									</div>
								</div>
								<div class="content-9_2 content-9Center"style="">
									<div class="content-9_2_1"style="">
										<h3>Thân thiện với mọi người</h3>
										<p>Nền tảng thân thiện với người dùng và giảng viên, giúp cho mọi người có thể dễ dàng tiếp cận được tri thức mới3</p>
										<div class="Polygon"><img src="images/Polygon.png" alt=""></div>
									</div>
									<div class="content-9_3 content-9_3Center">
										<img src="images/Ellipse2.png" alt="">
										<h4>Nguyễn Đỗ Bảo Cường</h4>
										<a>Giáo sư kinh tế học ĐH Sư Phạm Hà Nội</a>
									</div>
								</div>
								<div class="content-9_2 content-9Right"style="">
									<div class="content-9_2_1" style="">
										<h3>Thân thiện với mọi người</h3>
										<p>Nền tảng thân thiện với người dùng và giảng viên, giúp cho mọi người có thể dễ dàng tiếp cận được tri thức mới3</p>
										<div class="Polygon"><img src="images/Polygon.png" alt=""></div>
									</div>
									<div class="content-9_3 content-9_3Right">
										<img src="images/Ellipse3.png" alt="">
										<h4>Nguyễn Đỗ Bảo Cường</h4>
										<a>Giáo sư kinh tế học ĐH Sư Phạm Hà Nội</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div style="text-align:center; margin-right: 15px;    margin-top: 411px;">
						<span class="dot" onclick="currentSlide(1)"></span>
						<span class="dot" onclick="currentSlide(2)"></span>
						<span class="dot" onclick="currentSlide(3)"></span>
					</div>
				</div>
					<div class="content-10">
						<h2>Đăng kí Trở Thành Viên Để Truyền Thụ Kiến Thức Qua Video</h2>
						<button class="btnDangKyTK">Đăng Kí Tài Khoản</button>
					</div> 
					<div class="contentFooter">
						<img src="images/Footer.png" alt="" class="imgFooter">
					</div>
				</div>
			</div>
		</div>
		 <script>
			  var slideIndex = 1;
			  showSlides(slideIndex);

			  function plusSlides(n) {
			    showSlides(slideIndex += n);
			  }

			  function currentSlide(n) {
			    showSlides(slideIndex = n);
			  }


			  function showSlides(n) {
			    var i;
			    var slides = document.getElementsByClassName("mySlides");
			    var dots = document.getElementsByClassName("dot");
			    if (n > slides.length) {slideIndex = 1}
			      if (n < 1) {slideIndex = slides.length}
			        for (i = 0; i < slides.length; i++) {
			          slides[i].style.display = "none";
			        }
			        for (i = 0; i < dots.length; i++) {
			          dots[i].className = dots[i].className.replace(" active", "");
			        }
			        slides[slideIndex-1].style.display = "block";
			        dots[slideIndex-1].className += " active";
			      }
			    </script>
		<script type="text/javascript">
			// var hoverAndClickSX = function() {
			//     $("#imgPP").attr('src',"/TestHungHa/images/laptop4.png");
			//     $("#content-6HV").show();
			//     $("#content-6").hide();
			// };
			// $("#btnSX").hover( hoverAndClickSX ).click( hoverAndClickSX ) ;

			// var hoverAndClickHT = function() {
			// 	// alert("sdfc");
			//     $("#imgSX").attr('src',"/TestHungHa/images/laptop.png");
			//     $("#content-6HV").hide();
			//     $("#content-6").show();
			// },
			// function(){
			// 	alert("fdvdf");
			// 	$("#imgSX").attr('src',"/TestHungHa/images/laptop3.png");
			//     $("#content-6HV").show();
			//     $("#content-6").hide();
			// };
			// $("#btnHopTac").hover( hoverAndClickHT ).click( hoverAndClickHT ) ;


			$(function() {
			  $('#btnHopTac').click(function(){
			    $("#imgSX").attr('src',"/TestHungHa/images/laptop.png");
			    $("#content-6HV").hide();
			    $("#content-6").show();
			  });

			  $('#btnSX').click(function(){
			    $("#imgPP").attr('src',"/TestHungHa/images/laptop4.png");
			    $("#content-6HV").show();
			    $("#content-6").hide();
			  });

			  $('#menuKyNang').hover(function(){
			    $(".hoverH3KyNang").css('color','white');
			    $(".hoverPKyNang").css('color','white');
			    $("#imgKyNang").attr('src',"/TestHungHa/images/kynang2.png");
			  },
			  function(){
			  	$(".hoverH3KyNang").css('color','#007D7D');
			  	$(".hoverPKyNang").css('color','#333333');
			  	$("#imgKyNang").attr('src',"/TestHungHa/images/kynang.png");
			  });

			   $('#menuCoHoi').hover(function(){
			    $(".hoverH3CoHoi").css('color','white');
			    $(".hoverPCoHoi").css('color','white');
			    $("#imgCoHoi").attr('src',"/TestHungHa/images/cohoi2.png");
			  },
			  function(){
			  	$(".hoverH3CoHoi").css('color','#007D7D');
			  	$(".hoverPCoHoi").css('color','#333333');
			  	$("#imgCoHoi").attr('src',"/TestHungHa/images/cohoidonghanh.png");
			  });

			   $('#menuThuThap').hover(function(){
			    $(".hoverH3ThuThap").css('color','white');
			    $(".hoverPThuThap").css('color','white');
			     $("#imgThuThap").attr('src',"/TestHungHa/images/thuctap2.png");
			  },
			  function(){
			  	$(".hoverH3ThuThap").css('color','#007D7D');
			  	$(".hoverPThuThap").css('color','#333333');
			  	 $("#imgThuThap").attr('src',"/TestHungHa/images/thuthap.png");
			  });

			});
			
			function myFunction() {
			  document.getElementById("myDropdownt").classList.toggle("show");
			}
			window.onclick = function(e) {
			  if (!e.target.matches('#dropbtn')) {
			  var myDropdown = document.getElementById("myDropdownt");
			    if (myDropdown.classList.contains('show')) {
			      myDropdown.classList.remove('show');
			    }
			  }
			}
		</script>
	</body>
</html>
