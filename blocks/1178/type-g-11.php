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
        $less->compileFile('./less/type-g-11.less', 'css/type-g-11.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-11.css">
</head>

<body>
	<div class="type-g-11">
		<section>
			<div class="container">
				<div class="row">
					<form action="#" class="form-inline lead-big" role="form">
				        <div class="form-group">
				        	<label for="name">Hello, I am <span>Your name</span></label>
				          	<input type="text" id="name" placeholder="@maridlcrmn" required> and
				        </div>

				        <div class="form-group">
				          	<label for="company"> I work in <span>Your company</span></label>
				          	<input type="text" id="company" placeholder="Awesome Company">.
				        </div>

				        <div class="form-group">
				          	<label for="freelancer"> I'm looking for <span>Freelance professional</span></label>
				          	<select id="freelancer">
				              	<option value="0" selected>Someone</option>
				              	<option value="1">Frontend Developer</option>
				              	<option value="2">Backend Developer</option>
				              	<option value="3">UI/UX Designer</option>
				              	<option value="4">Graphic Designer</option>
				              	<option value="5">Web designer</option>
				          	</select> who
				        </div>

				        <div class="form-group">
				          	<label for="subject"> can help me in <span>Describe your project</span></label>
				          	<textarea id="subject" placeholder="big amazing project" required></textarea> and
				        </div>

				        <div class="form-group">
							<label for="time"> I have <span>Time Left</span></label>
							<select id="time">
							  	<option value="0" selected>1 weeks</option>
							  	<option value="1">2 weeks</option>
							  	<option value="2">3 weeks</option>
							  	<option value="3">a month</option>
							  	<option value="4">limited time</option>
							  	<option value="5">unlimited time</option>
							</select> for do it. Please, send an
				        </div>

				        <div class="form-group">
				          	<label for="email"> email to <span>Your email</span></label>
				          	<input type="email" id="email" placeholder="name@mail.com" required> soon as possible.
				        </div>
				        <button type="submit" class="btn btn-default btn-lg submit"> Find a Freelancer </button>.
				    </form>
				</div>
			</div>
		</section>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>