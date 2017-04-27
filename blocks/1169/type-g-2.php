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
</head>

<body>
	<div class="type-g-2">
	  	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		    <ol class="carousel-indicators">
		      	<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
		      	<li data-target="#myCarousel" data-slide-to="1"></li>
		      	<li data-target="#myCarousel" data-slide-to="2"></li>
		    </ol>

		    <div class="carousel-inner" role="listbox">

		      	<div class="item active">
		        	<img src="images/slide1_image.jpg" alt="Chania">
		        	<div class="carousel-caption slide1">
		        		<a href="#" class="title">
		          			<h2><strong>iphone 6s</strong></h2>
		          			<p>The only thing that's changed is everything</p>
		          			<span class="btn btn-primary b1"><strong>Shop now</strong></span>
		        		</a> 
		        	</div>
		      	</div>

		      	<div class="item">
		        	<img src="images/slide2_image.jpg" alt="Chania">
		        	<div class="carousel-caption slide2">
		          		<a href="#" class="title">
		          			<h2><strong>HW-400</strong></h2>
		          			<p>Wireless Over Ear Headphones</p>
		          			<span class="btn btn-primary b1"><strong>Shop now</strong></span>
		        		</a> 
		        	</div>
		      	</div>
		   
		      	<div class="item">
		        	<img src="images/slide3_image.jpg" alt="Flower">
		        	<div class="carousel-caption slide3">
		          		<a href="#" class="title">
		          			<h2><strong>Reliable gadgets from leading manufacturers</strong></h2>
		          			<p>Available in just a few taps</p>
		          			<span class="btn btn-primary b1"><strong>Read more</strong></span>
		        		</a> 
		        	</div>
		      	</div>

		    </div>
	  	</div>	
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/type-g-2.js"></script>
</body>
</html>