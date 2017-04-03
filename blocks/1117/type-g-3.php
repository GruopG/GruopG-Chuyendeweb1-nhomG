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
        $less->compileFile('./less/type-g-3.less', 'css/type-g-3.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-3.css">
</head>
<body>
	<!--Begin Main 1-->
	<div class="type-g-3">
		<div class="container">
			<div class="col-md-12">
				<div class="row">
					<!--Begin Col-Md-5-->
					<div class="carousel article-slide" id="article-photo-carousel">
		                <div class="col-md-5">
		                    <div class="">
		                        <a href="#">
		                            <img src="images/ckeR_Chớm-Nở-HB340.jpg" alt="" class="img-responsive">
		                        </a>
		                    </div>

		                    <ul class="thumbnails">
		                    	<!--Begin Item 1-->
		                        <li>
		                            <a href="#" data-standard="#">
		                                <img src="images/ckeR_Chớm-Nở-HB340.jpg" alt="">
		                            </a>
		                        </li>
		                        <!--End Item 1-->
		                    </ul>
		                </div>
		            </div>
		            <!--End Col-Md-5-->
					
					<!--Begin Col-Md-7-->
					<div class="col-md-7">
						<!--Begin Title-->
						<div class="product-title">CHUNG TÌNH GH17</div>
						<div class="product-pricr">1.300.000 VND</div>
						<div class="product-desc">
							CHUNG TINH GH17 BAO GỒM CÁC LOẠI HOA:
								- 99 HOA HỒNG ĐỎ
								- HOA BABY TRẮNG
								- HOA LÁ VÀ PHỤ LIỆU ĐI KÈM
						</div>
						<!--End Title-->

						<!--Begin Price-->
						<div class="variations">
							<div class="product-stock">In Stock</div>
							<div class="spin">
								<div class="input-group bootstrap-touchspin">
									<span class="input-group-btn">
										<button class="btn btn-danger bootstrap-touchspin-down" type="button">-</button>
									</span>
									<span class="input-group-addon bootstrap-touchspin-prefix">
									</span>
									<input type="text" name="demo1" id="demo1" class="form-control" value="1" min="1" max="1000">
									<span class="input-group-addon bootstrap-touchspin-postfix">	
									</span>
									<span class="input-group-btn">
										<button class="btn btn-danger bootstrap-touchspin-down" type="button">+</button>
									</span>
								</div>
							</div>
							<div class="btn-group">
								<button type="button" class="btn btn-success">
									<a href="#" class="add">Add To Cart</a>
								</button>
							</div>
						</div>
						<!--End Price-->

						<hr>
						<span>Danh Mục: <a href="#">10</a></span>
						<hr>
						<span>Tags: <a href="#">dress, </a> <a href="#">flower</a></span>
						<hr>
						
						<!--Begin Icon-->
						<ul class="social-network social-circle">
		                    <li><a href="#" class="icoRss" title="Rss"><i class="fa fa-rss"></i></a></li>
		                    <li><a href="#" class="icoFacebook" title="Facebook"><i class="fa fa-facebook"></i></a></li>
		                    <li><a href="#" class="icoTwitter" title="Twitter"><i class="fa fa-twitter"></i></a></li>
		                    <li><a href="#" class="icoGoogle" title="Google +"><i class="fa fa-google-plus"></i></a></li>
		                </ul>
						<!--End Icon-->
					</div>
					<!--End Col-Md-7-->
				</div>
			</div>	
		</div>
	</div>
	<!--End Main 1-->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>