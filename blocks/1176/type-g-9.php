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
        $less->compileFile('./less/type-g-9.less', 'css/type-g-9.css');
    ?>
	<link rel="stylesheet" type="text/css" href="css/type-g-9.css">
</head>

<body>
	<div class="type-g-9">
		<div class="container">
    		<div class="row kc">
        		<div class="col-xs-12 col-md-3">
            		<div class="panel panel-primary">
                		<div class="panel-heading">
                    		<h3 class="panel-title">Bronze</h3>
            			</div>
                		<div class="panel-body">
                    		<div class="the-price">
                        		<h1>$10<span class="subscript">/mo</span></h1>
                        		<small>1 month FREE trial</small>
                    		</div>
                    		<table class="table">
                        		<tr>
		                            <td>
		                                1 Account
		                            </td>
                        		</tr>

		                        <tr class="active">
		                            <td>
		                                1 Project
		                            </td>
		                        </tr>

		                        <tr>
		                            <td>
		                                100K API Access
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                100MB Storage
		                            </td>
		                        </tr>

		                        <tr>
		                            <td>
		                                Custom Cloud Services
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                Weekly Reports
		                            </td>
		                        </tr>
                    		</table>
                		</div>

                		<div class="panel-footer">
                    		<a href="http://www.jquery2dotnet.com" class="btn btn-success" role="button">Sign Up</a> 1 month FREE trial
                		</div>
            		</div>
       			</div>

        		<div class="col-xs-12 col-md-3">
            		<div class="panel panel-success">
		                <div class="cnrflash">
		                    <div class="cnrflash-inner">
		                        <span class="cnrflash-label">MOST
		                            <br>
		                            POPULAR</span>
		                    </div>
		                </div>

		                <div class="panel-heading">
		                    <h3 class="panel-title">
		                        Silver</h3>
		                </div>

                		<div class="panel-body">
                    		<div class="the-price">
                        		<h1>$20<span class="subscript">/mo</span></h1>
                        		<small>1 month FREE trial</small>
                    		</div>

		                    <table class="table">
		                        <tr>
		                            <td>
		                                2 Account
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                5 Project
		                            </td>
		                        </tr>

		                        <tr>
		                            <td>
		                                100K API Access
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                200MB Storage
		                            </td>
		                        </tr>

		                        <tr>
		                            <td>
		                                Custom Cloud Services
		                            </td>
		                        </tr>

		                        <tr class="active">
		                            <td>
		                                Weekly Reports
		                            </td>
		                        </tr>

		                    </table>
                		</div>

                		<div class="panel-footer">
                    		<a href="http://www.jquery2dotnet.com" class="btn btn-success" role="button">Sign Up</a> 1 month FREE trial
                		</div>
            		</div>
        		</div>

        		<div class="col-xs-12 col-md-3">
            		<div class="panel panel-info">
                		<div class="panel-heading">
                    		<h3 class="panel-title">Gold</h3>
                		</div>

            		<div class="panel-body">
                    	<div class="the-price">
                        	<h1>$35<span class="subscript">/mo</span></h1>
                        	<small>1 month FREE trial</small>
                    	</div>

	                    <table class="table">
	                        <tr>
	                            <td>
	                                5 Account
	                            </td>
	                        </tr>

	                        <tr class="active">
	                            <td>
	                                20 Project
	                            </td>
	                        </tr>

	                        <tr>
	                            <td>
	                                300K API Access
	                            </td>
	                        </tr>

	                        <tr class="active">
	                            <td>
	                                500MB Storage
	                            </td>
	                        </tr>

	                        <tr>
	                            <td>
	                                Custom Cloud Services
	                            </td>
	                        </tr>

	                        <tr class="active">
	                            <td>
	                                Weekly Reports
	                            </td>
	                        </tr>
	                    </table>
                	</div>

                	<div class="panel-footer">
                    	<a href="http://www.jquery2dotnet.com" class="btn btn-success" role="button">Sign Up</a> 1 month FREE trial</div>
            		</div>
        		</div>
    		</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>