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
        $less->compileFile('./less/type-g-15.less', 'css/type-g-15.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-15.css">
</head>

<body>
	<div class="type-g-15">
		<div class="container content">
			<div class="row">
				<div class="col-md-3">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3>Begginer 
								<span> Officia deserunt mollitia </span>
							</h3>
							<h4><i>$</i>5<i>.49</i>
							<span>Per Month </span>
							</h4>
						</div>

						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>

						<div class="pricing-footer">
							<p>
								 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
							</p>
							<a href="#" class="btn yellow-crusta">
							Sign Up
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3>Pro <span>
							Officia deserunt mollitia </span>
							</h3>
							<h4><i>$</i>8<i>.69</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							<p>
								 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
							</p>
							<a href="#" class="btn yellow-crusta">
							Sign Up
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="pricing pricing-active hover-effect">
						<div class="pricing-head pricing-head-active">
							<h3>Expert <span>
							Officia deserunt mollitia </span>
							</h3>
							<h4><i>$</i>13<i>.99</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							<p>
								 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
							</p>
							<a href="#" class="btn yellow-crusta">
							Sign Up
							</a>
						</div>
					</div>
				</div>

				<div class="col-md-3">
					<div class="pricing hover-effect">
						<div class="pricing-head">
							<h3>Hi-Tech <span>
							Officia deserunt mollitia </span>
							</h3>
							<h4><i>$</i>99<i>.00</i>
							<span>
							Per Month </span>
							</h4>
						</div>
						<ul class="pricing-content list-unstyled">
							<li>
								At vero eos
							</li>
							<li>
								No Support
							</li>
							<li>
								Fusce condimentum
							</li>
							<li>
								Ut non libero
							</li>
							<li>
								Consecte adiping elit
							</li>
						</ul>
						<div class="pricing-footer">
							<p>
								 Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut non libero magna psum olor .
							</p>
							<a href="#" class="btn yellow-crusta">
							Sign Up
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>