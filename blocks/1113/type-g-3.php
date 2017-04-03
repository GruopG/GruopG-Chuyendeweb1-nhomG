<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
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
	<!--Begin Main-->
	<div class="type-g-3">
		<div class="main">
			<div class="container">
				<div class="col-md-12">
					<div class="row">
						<!--Begin Section-->
						<section id="miSlide" class="carousel slide">
							<!--Begin OL-->
							<ol class="carousel-indicators">
								<li data-target="#miSlide" data-slide-to="0" class="active"></li>
								<li data-target="#miSlide" data-slide-to="1"></li>
								<li data-target="#miSlide" data-slide-to="2"></li>
								<li data-target="#miSlide" data-slide-to="3"></li>
							</ol>
							<!--End OL-->

							<!--Begin Caroisel Inner-->
							<div class="carousel-inner">
								<!--Begin Item 1-->
								<div class="item active">
									<img src="images/hinh01.jpg" class="img-responsive" width="100%" height="265px">
								</div>
								<!--End Item 1-->

								<!--Begin Item 2-->
								<div class="item">
									<img src="images/hinh02.jpg" class="img-responsive" width="100%" height="265px">
								</div>
								<!--End Item 2-->

								<!--Begin Item 3-->
								<div class="item">
									<img src="images/hinh03.jpg" class="img-responsive" width="100%" height="265px">
								</div>
								<!--End Item 3-->

								<!--Begin Item 4-->
								<div class="item">
									<img src="images/hinh04.jpg" class="img-responsive" width="100%" height="265px">
								</div>
								<!--End Item 4-->
							</div>
							<!--End Caroisel Inner-->
						</section>
						<!--End Section-->
					</div>
				</div>
			</div>
		</div>
	</div>
	<!--End Main-->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/type-g-3.js"></script>
</body>
</html>