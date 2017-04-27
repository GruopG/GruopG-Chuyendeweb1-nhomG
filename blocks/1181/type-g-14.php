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
        $less->compileFile('./less/type-g-14.less', 'css/type-g-14.css');
    ?>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/type-g-14.css">
</head>

<body>
	<div class="type-g-14">
		<div class="container" style="margin-top:20px;">
			<div class="row">
		        <div class="col-xs-6">
		            <h3 class="text-center">Basic Example</h3>
		            <div class="well" style="max-height: 300px;overflow: auto;">
		        		<ul class="list-group checked-list-box">
		                  <li class="list-group-item">Cras justo odio</li>
		                  <li class="list-group-item" data-checked="true">Dapibus ac facilisis in</li>
		                  <li class="list-group-item">Morbi leo risus</li>
		                  <li class="list-group-item">Porta ac consectetur ac</li>
		                  <li class="list-group-item">Vestibulum at eros</li>
		                  <li class="list-group-item">Cras justo odio</li>
		                  <li class="list-group-item">Dapibus ac facilisis in</li>
		                  <li class="list-group-item">Morbi leo risus</li>
		                  <li class="list-group-item">Porta ac consectetur ac</li>
		                  <li class="list-group-item">Vestibulum at eros</li>
		                </ul>
		            </div>
		        </div>

		        <div class="col-xs-6">
		            <h3 class="text-center">Colorful Example</h3>
		            <div class="well" style="max-height: 300px;overflow: auto;">
		            	<ul id="check-list-box" class="list-group checked-list-box">
		                  <li class="list-group-item">Cras justo odio</li>
		                  <li class="list-group-item" data-color="success">Dapibus ac facilisis in</li>
		                  <li class="list-group-item" data-color="info">Morbi leo risus</li>
		                  <li class="list-group-item" data-color="warning">Porta ac consectetur ac</li>
		                  <li class="list-group-item" data-color="danger">Vestibulum at eros</li>
		                </ul>
		                <br />
		                <button class="btn btn-primary col-xs-12" id="get-checked-data">Get Checked Data</button>
		            </div>
		            <pre id="display-json"></pre>
		        </div>
			</div>

		    <div class="row">
		        <div class="col-xs-6">
		            <h3 class="text-center">Using Button Style's</h3>
		            <div class="well" style="max-height: 300px;overflow: auto;">
		        		<ul class="list-group checked-list-box">
		                  <li class="list-group-item" data-style="button">Cras justo odio</li>
		                  <li class="list-group-item" data-style="button" data-color="success">Dapibus ac facilisis in</li>
		                  <li class="list-group-item" data-style="button" data-color="info">Morbi leo risus</li>
		                  <li class="list-group-item" data-style="button" data-color="warning">Porta ac consectetur ac</li>
		                  <li class="list-group-item" data-style="button" data-color="danger">Vestibulum at eros</li>
		                </ul>
		            </div>
		        </div>

		        <div class="col-xs-6">
		            <h3 class="text-center">Just a Small Party</h3>
		            <div class="well" style="max-height: 300px;overflow: auto;">
		            	<ul class="list-group checked-list-box">
		                  <li class="list-group-item" data-style="button">Cras justo odio</li>
		                  <li class="list-group-item" data-color="success">Dapibus ac facilisis in</li>
		                  <li class="list-group-item" data-style="button" data-color="info">Morbi leo risus</li>
		                  <li class="list-group-item" data-color="warning">Porta ac consectetur ac</li>
		                  <li class="list-group-item" data-style="button" data-color="danger">Vestibulum at eros</li>
		                </ul>
		            </div>
		        </div>
		    </div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/type-g-14.js"></script>
</body>
</html>