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
        $less->compileFile('./less/type-g-3.less', 'css/type-g-3.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-3.css">
</head>

<body>
	<div class="type-g-3">
		<div class="container banners_1" id="banners_1">
			<div class="row">

				<div class="col-md-4">
					<div class="banner banner_1">
						<a href="#" class="title">
							<img src="images/banner1.jpg">
							<div class="wrap_1">
								<div class="wrap_2">
									<div class="wrap_3">
										<h3>Apple iWatch</h3>
										<p>The watch reimagined</p>
										<span class="btn btn-primary b1">Shop now!</span>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="banner banner_2">
						<a href="#" class="title">
							<img src="images/banner2.jpg">
							<div class="wrap_1">
								<div class="wrap_2">
									<div class="wrap_3">
										<h3>iPad <span>mini 4</span></h3>
										<p>Mighty. Small.</p>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-md-4">
					<div class="banner banner_3">
						<a href="#" class="title">
							<div class="wrap_1">
								<div class="wrap_2">
									<div class="wrap_3">
										<p class="text_1">SALE</p>
										<p class="text_2">Get up to</p>
										<p class="text_3">50% off</p>
										<p class="text_4">Free Shipping on orders over $99</p>
										<span class="btn btn-primary b2">Shop now!</span>
									</div>
								</div>
							</div>
						</a>
					</div>
				</div>

			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>