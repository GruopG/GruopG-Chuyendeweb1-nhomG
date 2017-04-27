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
        $less->compileFile('./less/type-g-4.less', 'css/type-g-4.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-4.css">
</head>

<body>
	<div class="type-g-4">
		<div class="container">
			<div class="homepage_collections">
				<h2 class="page_heading">BROWSE Our Categories</h2>
				<div class="row">
					
						<div class="wrap_2 homepage_collections__item col-xs-6 col-md-3">
							<a href="#">
								<img class="img-responsive" src="images/phone.png" alt="Phone">
							</a>
							<p class="collection_title"><a href="#">Phones</a></p>
							<p class="collection_products">8 products</p>
						</div>

						<div class="wrap_2 homepage_collections__item col-xs-6 col-md-3">
							<a href="#">
								<img class="img-responsive" src="images/laptop.png" alt="Laptop">
							</a>
							<p class="collection_title"><a href="#">Laptops</a></p>
							<p class="collection_products">13 products</p>
						</div>
						
						<div class="wrap_2 homepage_collections__item col-xs-6 col-md-3">
							<a href="#">
								<img class="img-responsive" src="images/table.png" alt="Tablet">
							</a>
							<p class="collection_title"><a href="#">Tablets</a></p>
							<p class="collection_products">12 products</p>
						</div>

						<div class="wrap_2 homepage_collections__item col-xs-6 col-md-3">
							<a href="#">
								<img class="img-responsive" src="images/desktop.png" alt="Desktop">
							</a>
							<p class="collection_title"><a href="#">Desktops</a></p>
							<p class="collection_products">14 products</p>
						</div>
					
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>