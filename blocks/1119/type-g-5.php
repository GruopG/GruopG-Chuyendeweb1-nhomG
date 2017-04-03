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
        $less->compileFile('./less/type-g-5.less', 'css/type-g-5.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-5.css">
</head>
<body>
	<!--Begin Main 3-->
	<div class="type-g-5">
		<div class="container">
			<div class="row">
				<!--Begin Top Button-->
	            <div class="col-lg-9 col-md-9 col-sm-6 col-xs-6">
	                <h3>Related Products</h3>
	            </div>
	            <div class="col-lg-3 col-md-3 col-sm-6 col-xs-6">
	                <!-- Controls -->
	                <div class="controls pull-right">
	                    <a class="left fa fa-chevron-left btn btn-success" href="#carousel-example" data-slide="prev"></a>
	                    <a class="right fa fa-chevron-right btn btn-success" href="#carousel-example" data-slide="next"></a>
	                </div>
	            </div>
				<!--End Top Button-->
	        </div>
	        <div class="clear"></div>
	        <hr>
			<!--Begin Show Item-->
	        <div id="carousel-example" class="carousel slide" data-ride="carousel">
	            <div class="carousel-inner">
	            	<!--Begin Item 1-->
	                <div class="item">
	                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-md hidden-sm text-center">
	                        <div class="col-item">
	                            <div class="panel">
	                                <div class="panel-body">
	                                    <a href="#" class="zoom">
	                                        <img src="images/ckeR_Chớm-Nở-HB340.jpg" alt="">
	                                    </a>
	                                </div>
	                            </div>
	                            <div class="info">
	                                <h5>NỖI NHỚ TÌNH TÔI HG24</h5>
	                                <h5 class="price-text-color">650000 VND</h5>
	                            </div>
	                        </div>
	                    </div>

	                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-md hidden-sm text-center">
	                        <div class="col-item">
	                            <div class="panel">
	                                <div class="panel-body">
	                                    <a href="#" class="zoom">
	                                        <img src="images/XZ5l_default1.png" alt="">
	                                    </a>
	                                </div>
	                            </div>
	                            <div class="info">
	                                <h5>TÌNH YÊU NGÀY NẮNG HG21</h5>
	                                <h5 class="price-text-color">380000 VND</h5>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--End Item 1-->

	                <!--Begin Item 2-->
	                <div class="item active">
	                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 hidden-md hidden-sm text-center">
	                        <div class="col-item">
	                            <div class="panel">
	                                <div class="panel-body">
	                                    <a href="#" class="zoom">
	                                        <img src="images/hipster7.jpg" alt="">
	                                    </a>
	                                </div>
	                            </div>
	                            <div class="info">
	                                <h5>NỖI NHỚ TÌNH TÔI HG24</h5>
	                                <h5 class="price-text-color">650000 VND</h5>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	                <!--End Item 2-->
	            </div>
	        </div>
	        <!--End Show Item-->			
		</div>
	</div>
	<!--End Main 3-->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>