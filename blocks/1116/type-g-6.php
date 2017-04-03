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
        $less->compileFile('./less/type-g-6.less', 'css/type-g-6.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-6.css">
	<link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">
</head>
<body>
	<!--Begin Main 3-->
	<div class="type-g-6">
		<div class="main">
			<div class="container">
				<div class="row"> 
				   	<div class="col-md-12">
				   		<!--Begin Tab-->
					    <div class="card"> 
					    	<!--Begin Tab Nav-->
					    	<ul class="nav nav-tabs" role="tablist">
						    	<li role="presentation" class="active">
						    		<a href="#detail" aria-controls="detail" role="tab" data-toggle="tab">Sản Phẩm Nổi Bật</a>
						      	</li> 
						      	<li role="presentation">
						      		<a href="#detail2" aria-controls="detail2" role="tab" data-toggle="tab"><i class="fa fa-youtube"></i>Sản Phẩm Mới Nhất</a>
						      	</li> 
					     	</ul> 
					     	<!--End Tab Nav-->

					     	<!--Begin Tab Content-->
					     	<div class="tab-content">
					     		<!--Begin Tab Detail-->
						      	<div role="tabpanel" class="tab-pane active" id="detail"> 
							    	<div class="col-md-12">
										<h3 class="Text-New2">Hoa Nổi Bật Của Shop</h3>
										<!--Begin Slide Show-->
										<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
											<div class="carousel-inner">
										  		<!--Begin Item 1-->
											    <div class="item active">
											      	<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
											                <div class="panel-body">
											                    <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
											                        <img src="images/qhx9_x650.jpg" alt="">
											                    </a>
											                </div>
											        	</div>
												      	<div class="text-content">
											        		<h4><a href="#">May Mắn Nhé</a></h4>
											        		<h4>600.000</h4>
											        	</div>
											        	<div class="btn-group pull-right">
											        		<button type="button" class="btn btn-success">Mua</button>
											        	</div>
											      	</div>
											    </div>
												<!--End Item 1-->

												<!--Begin Item 2-->
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/Qn1R_2111591.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="trang-chi-tiet/Page-Detail/index.html">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
											    <!--End Item 2-->

												<!--Begin Item 3-->
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/rkeZ_Sac-Mau.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
												<!--End Item 3-->
												
												<!--Begin Item 4-->	
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/RYND_P.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
												<!--End Item 4-->

												<!--Begin Item 5-->
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/tuZ1_1.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>	
												<!--End Item 5-->
												
												<!--Begin Item 6-->
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/W7Cs_bo_hoa_7.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
											    <!--End Item 6-->
												
												<!--Begin Item 7-->	
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/XloF_hhh.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
											    <!--End Item 7-->
										  	</div>
										</div>
										<!--End Slide Show-->
									</div>
						      	</div>
						      	<!--End Tab Detail-->
								
								<!--Begin Tab Detail 2-->
						      	<div role="tabpanel" class="tab-pane" id="detail2">
									<div class="col-md-12">
										<h3 class="Text-New2">Mẫu Hoa Mới Nhất Của Năm</h3>
										<!--Begin Slide Show-->
										<div class="carousel slide" data-ride="carousel" data-type="multi" data-interval="3000" id="myCarousel">
											<div class="carousel-inner">
										  		<!--Begin Item 1-->
											    <div class="item active">
											      	<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
											                <div class="panel-body">
											                    <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
											                        <img src="images/qhx9_x650.jpg" alt="">
											                    </a>
											                </div>
											        	</div>
												      	<div class="text-content">
											        		<h4><a href="#">May Mắn Nhé</a></h4>
											        		<h4>600.000</h4>
											        	</div>
											        	<div class="btn-group pull-right">
											        		<button type="button" class="btn btn-success">Mua</button>
											        	</div>
											      	</div>
											    </div>
												<!--End Item 1-->

												<!--Begin Item 2-->
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/Qn1R_2111591.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="trang-chi-tiet/Page-Detail/index.html">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
											    <!--End Item 2-->

												<!--Begin Item 3-->
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/rkeZ_Sac-Mau.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
												<!--End Item 3-->
												
												<!--Begin Item 4-->	
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/RYND_P.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
												<!--End Item 4-->

												<!--Begin Item 5-->
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/tuZ1_1.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>	
												<!--End Item 5-->
												
												<!--Begin Item 6-->
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/W7Cs_bo_hoa_7.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
											    <!--End Item 6-->
												
												<!--Begin Item 7-->	
											    <div class="item">
													<div class="col-md-3 col-sm-6 col-xs-12">
												      	<div class="panel">
												            <div class="panel-body">
												                <a href="trang-chi-tiet/Page-Detail/index.html" class="zoom">
												                    <img src="images/XloF_hhh.jpg" alt="">
												                </a>
												            </div>
												    	</div>
												      	<div class="text-content">
												    		<h4><a href="#">May Mắn Nhé</a></h4>
												    		<h4>600.000</h4>
												    	</div>
												    	<div class="btn-group pull-right">
												    		<button type="button" class="btn btn-success">Mua</button>
												    	</div>
												  	</div>
											    </div>
											    <!--End Item 7-->
										  	</div>
										</div>
										<!--End Slide Show-->
									</div>
						      	</div>
						      	<!--End Tab Detail 2-->
					      	</div>
							<!--End Tab Content-->
					    </div> 
					    <!--End Tab-->
				   </div> 
				</div>
			</div>
		</div>
	</div>
	<!--End Main 3-->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/type-g-6.js"></script>
</body>
</html>