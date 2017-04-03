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
	<link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">
</head>
<body>
	<!--Begin Main 1-->
	<div class="type-g-3">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<form class="form1">
		                <div class="form-group">
		                    <label for="exampleInputName1">Tên Của Bạn</label>
		                    <input type="name" class="form-control" id="exampleInputName1" placeholder="Name">
		                </div>
		                <div class="form-group">
		                    <label for="exampleInputEmail1">Email Của Bạn</label>
		                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
		                </div>
		                <div class="form-group">
		                    <label for="exampleInputFile">File input</label>
		                    <input type="file" id="exampleInputFile">
		                    <p class="help-block">Example block-level help text here.</p>
		                </div>
		                <textarea class="form-control" rows="5"></textarea>
		              	<button type="submit" class="btn btn-default">Submit</button>
		            </form>
				</div>
	        </div>
		</div>
	</div>
	<!--End Main 1-->
</body>
</html>