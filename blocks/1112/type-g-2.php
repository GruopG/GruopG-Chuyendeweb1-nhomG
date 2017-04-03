<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<!--Ket Noi File Less -->
	<?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/type-g-2.less', 'css/type-g-2.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-2.css">
	<link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">
</head>
<body>
	<!--Begin Footer-->
	<div class="type-g-2">
		<footer class="footer">
			<div class="container">
				<!--Begin Footer Top-->
				<div class="fotter-top">
					<div class="col-md-12">
						<div class="row">
							<!--Begin Footer Title 1-->
							<div class="col-md-3">
								<h3>Thông Tin Shop Hoa</h3>
								<img class="imge" src="images/logo-small-footer.png">
								<p>
									Sed pellentesque, nulla et venenatis vehicula, lacus diam commodo velit, vitae facilisis libero libero sed dui.
								</p>
							</div>
							<!--End Footer Title 1-->

							<!--Begin Footer Title 2-->
							<div class="col-md-3">
								<h3>Thanh Toán Và Vận Chuyển</h3>
								<ul>
									<li>Hình Thức Thanh toán</li>
									<li>Hình Thức Vận Chuyển</li>
								</ul>
								<img src="images/payement-cards.png">
							</div>
							<!--End Footer Title 2-->

							<!--Begin Footer Title 3-->
							<div class="col-md-3">
								<h3>Danh Mục</h3>
								<div class="row">
									<div class="col-md-6">
										<p class="menu-button">Hoa Bó</p>
										<p class="menu-button">Hoa Sinh Nhật</p>
										<p class="menu-button">Hoa Chia Buồn</p>
										<p class="menu-button">Hoa Hộp</p>
									</div>
									<div class="col-md-6">
										<p class="menu-button">Hoa Bình</p>
										<p class="menu-button">Hoa Khai Trương</p>
										<p class="menu-button">Hoa Tình Yêu</p>
										<p class="menu-button">Hoa Giỏ</p>
									</div>
								</div>
							</div>
							<!--End Footer Title 3-->

							<!--Begin Footer Title 4-->
							<div class="col-md-3">
								<h3>Thông Tin Liên Lạc</h3>
								<p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
								<p><strong>Phone:</strong> (01) 102 902 5400</p>
								<p><strong>Fax:</strong> (01) 102 902 5400</p>
								<p><strong>Email:</strong> support@goodstore.com</p>
							</div>
							<!--End Footer Title 4-->
						</div>
					</div>
				</div>
				<!--End Footer Top-->

				<!--Begin Footer Top-->
				<div class="fotter-bot">
					<p>Copytright 2016 &copy; Group G</p>  	
				</div>
				<!--End Footer Top-->
			</div>
		</footer>
	</div>
	<!--End Footer-->
</body>
</html>