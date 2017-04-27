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
        $less->compileFile('./less/type-g-7.less', 'css/type-g-7.css');
    ?>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/type-g-7.css">
</head>

<body>
	<div class="type-g-7">
		<div class="container">
    		<div class="row">
       			<div class="col-xs-12 col-md-4">
            		<div class="panel panel-body">
                		<div class="panel-heading">
                    		<h3 class="panel-title">Billing</h3>
                		</div>
	                	<div class="panel-body">
	                    	<form role="form" id="payment-form">
	                        	<div class="row">
	                            	<div class="col-xs-12">
	                                	<div class="form-group">
	                                    	<label for="cardNumber">Invoice ID: 2016MM-ID</label>
	                                    	<div class="input-group"> 
	                                    	</div>
	                                	</div>                            
	                            	</div>
	                        	</div>
	                    	</form>
	                	</div>    
            		</div>
        		</div>

        		<div class="col-xs-12 col-md-4">
            		<div class="panel panel-body">
                		<div class="panel-heading">
                    		<h3 class="panel-title">
                    			<img class="pull-right" src="images/accepted_c22e0.png">Payment Details
                			</h3>
                		</div>
                		<div class="panel-body">
                    		<form role="form" id="payment-form">
                        		<div class="row">
                            		<div class="col-xs-12">
                                		<div class="form-group">
                                    		<label for="cardNumber">CARD NUMBER</label>
                                    		<div class="input-group">
                                        		<input type="text" class="form-control" name="cardNumber" placeholder="Valid Card Number" required autofocus data-stripe="number" />
                                        		<span class="input-group-addon"><i class="fa fa-credit-card"></i></span>
                                    		</div>
                                		</div>                            
                            		</div>
                        		</div>

	                        	<div class="row">
	                            	<div class="col-xs-7 col-md-7">
	                                	<div class="form-group">
	                                    	<label for="expMonth">EXPIRATION DATE</label>
	                                    	<div class="col-xs-6 col-lg-6 pl-ziro">
	                                        	<input type="text" class="form-control" name="expMonth" placeholder="MM" required data-stripe="exp_month" />
	                                    	</div>
	                                    	<div class="col-xs-6 col-lg-6 pl-ziro">
	                                        	<input type="text" class="form-control" name="expYear" placeholder="YY" required data-stripe="exp_year" />
	                                    	</div>
	                                	</div>
	                            	</div>

	                            	<div class="col-xs-5 col-md-5 pull-right">
	                                	<div class="form-group">
	                                    	<label for="cvCode">CV CODE</label>
	                                    	<input type="password" class="form-control" name="cvCode" placeholder="CV" required data-stripe="cvc" />
	                                	</div>
	                            	</div>
	                        	</div>

	                        	<div class="row">
	                            	<div class="col-xs-12">
	                                	<div class="form-group">
	                                    	<label for="couponCode">COUPON CODE</label>
	                                    	<input type="text" class="form-control" name="couponCode" />
	                                	</div>
	                            	</div>                        
	                        	</div>

	                        	<div class="row">
	                            	<div class="col-xs-12">
	                                	<button class="btn btn-info btn-lg btn-block" type="submit">Submit Payment</button>
	                            	</div>
	                        	</div>

	                        	<div class="row">
	                            	<div class="col-xs-12">
	                                	<p class="payment-errors"></p>
	                            	</div>
	                        	</div>
                    		</form>
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