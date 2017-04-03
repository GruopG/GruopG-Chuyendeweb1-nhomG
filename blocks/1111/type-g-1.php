<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<!--Ket Noi File Less -->
	<?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/type-g-1.less', 'css/type-g-1.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-1.css">
</head>

<body>
	<!--Begin Header-->
	<header>
		<div class="type-g-1">
			<!--Begin Header Top-->
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<!--Begin Hotline-->
						<div class="col-md-4">
							<article class="free">
								<h1><i class="fa fa-phone" aria-hidden="true"></i> HOTLINE: 0934 179 707</i></h1>
							</article>
						</div>
						<!--End Hotline-->

						<!--Begin Logo-->
						<div class="col-md-4">
							<img class="logo img-responsive" src="images/logo.png" alt="logo">
						</div>
						<!--End Logo-->

						<!--Begin Title Header-->
						<div class="col-md-4">
							<div class="row">
								<div class="col-md-4 title-header">
									<a href="#"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a>
								</div>
								<div class="col-md-4 title-header">
									<a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký</a>
								</div>
								<div class="col-md-4 title-header">
									<a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Giỏ</a>
								</div>
							</div>
						</div>
						<!--End Title Header-->
					</div>
				</div>
			</div>
			<!--End Header Top-->

			<div class="ruler"></div>

			<!--Begin Header Bot-->
			<div class="container">
	            <div class="row">
	            	<!--Begin Nav-->
	                <nav class="navbar navbar-inverse">
	                	<!--Begin Nav Header-->
	                    <div class="navbar-header">
	                    	<!--Begin Button-->
	                        <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
	                                <span class="sr-only">Toggle navigation</span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                                <span class="icon-bar"></span>
	                        </button>
	                        <!--End Button-->
	                    </div>
						<!--End Nav Header-->

						<!--Begin Collapse-->
	                    <div class="collapse navbar-collapse js-navbar-collapse">
	                    	<!--Begin Navbar-->
	                        <ul class="nav navbar-nav">
								<!--Begin Dropdown-->
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle"><i class="fa fa-home"></i></a>
	                            </li>
								<!--End Dropdown-->

								<!--Begin Dropdown-->
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hoa theo thiết kế<span class="caret"></span></a>
	                                <ul class="dropdown-menu" role="menu">
	                                    <li><a href="#">Hoa bó</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa giỏ</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa khai trương</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa văn phòng</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa bình</a></li>
	                                </ul>
	                            </li>
								<!--End Dropdown-->

								<!--Begin Dropdown-->
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hoa theo chủ đề<span class="caret"></span></a>
	                                <ul class="dropdown-menu" role="menu">
	                                    <li><a href="#">Hoa tình yêu</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa sinh nhật</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa chúc mừng</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa chia buồn</a></li>
	                                </ul>
	                            </li>
								<!--End Dropdown-->

								<!--Begin Dropdown-->
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hoa cưới<span class="caret"></span></a>
	                                <ul class="dropdown-menu" role="menu">
	                                    <li><a href="#">Hoa cô dâu</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Cổng hoa</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Xe hoa</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa cài áo</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa bàn tiệc</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa trang trí</a></li>
	                                </ul>
	                            </li>
								<!--End Dropdown-->

								<!--Begin Dropdown-->
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Các loai hoa khác<span class="caret"></span></a>
	                                <ul class="dropdown-menu" role="menu">
	                                    <li><a href="#">Hoa hộp</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa nhập khẩu</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa sự kiện</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa vip</a></li>
	                                    <li class="divider"></li>
	                                    <li><a href="#">Hoa đại sảnh</a></li>
	                                </ul>
	                            </li>
								<!--End Dropdown-->

								<!--Begin Dropdown-->
	                            <li class="dropdown">
	                                <a href="#" class="dropdown-toggle">Liên Hệ</a>
	                            </li>
	                            <!--End Dropdown-->
	                        </ul>
							<!--End Navbar-->
							
							<!--Begin Navbar Right-->
	                        <ul class="nav navbar-nav navbar-right">
								<!--Begin Form-->								
	                            <form action="tim-kiem" method="GET" class="navbar-form navbar-left" role="search">
	                                <div class="form-group">
	                                    <input type="text" name="tukhoa" class="form-control" placeholder="Search..">
	                                </div>
	                                <button type="submit" class="btn btn-default">
	                                	<img src="images/search.png" alt="" width="18px" height="18px">
                                	</button>
	                            </form>
								<!--End Form-->
	                        </ul>
	                        <!--End Navbar Right-->
	                    </div>
	                    <!--End Collapse-->
	                </nav>
	                <!--End Nav-->
	            </div>
        	</div>
			<!--End Header Bot-->

			<div class="ruler1"></div>
		</div>
	</header>
	<!--End Header-->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/type-g-1.js"></script>
</body>
</html>