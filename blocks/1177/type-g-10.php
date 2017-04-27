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
        $less->compileFile('./less/type-g-10.less', 'css/type-g-10.css');
    ?>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/type-g-10.css">
</head>

<body>
	<div class="type-g-10">
		<div class="table-responsive">
        	<div class="membership-pricing-table">
            	<table>
                	<tbody>
                		<tr>
                    		<th></th>

		                    <th class="plan-header plan-header-free">
				                <div class="pricing-plan-name">FREE</div>
				                <div class="pricing-plan-price">
				                    <sup>$</sup>0<span>.00</span>
				                </div>
				                <div class="pricing-plan-period">month</div>
			                </th>

			                <th class="plan-header plan-header-blue">
				                <div class="pricing-plan-name">BASIC</div>
				                <div class="pricing-plan-price">
				                    <sup>$</sup>4<span>.99</span>
				                </div>
				                <div class="pricing-plan-period">month</div>
			                </th>

			                <th class="plan-header plan-header-blue">
				                <div class="pricing-plan-name">PLUS</div>
				                <div class="pricing-plan-price">
				                    <sup>$</sup>12<span>.95</span>
				                </div>
				                <div class="pricing-plan-period">month</div>
			                </th>

			                <th class="plan-header plan-header-standard">
				                <div class="header-plan-inner">
				                    <span class="recommended-plan-ribbon">RECOMMENDED</span>
				                    <div class="pricing-plan-name">STANDARD</div>
				                    <div class="pricing-plan-price">
				                        <sup>$</sup>34<span>.99</span>
				                    </div>
				                    <div class="pricing-plan-period">month</div>
				                </div>
			                </th>

			                <th class="plan-header plan-header-blue">
				                <div class="pricing-plan-name">PREMIUM</div>
				                <div class="pricing-plan-price">
				                    <sup>$</sup>99<span>.99</span>
				                </div>
				                <div class="pricing-plan-period">month</div>
			                </th>
                		</tr>

		                <tr>
		                    <td></td>

		                    <td class="action-header">
		                        <a class="btn btn-info">
		                            Downgrade
		                        </a>
		                    </td>

		                    <td class="action-header">
		                        <a class="btn btn-info">
		                            Downgrade
		                        </a>
		                    </td>

		                    <td class="action-header">
		                        <div class="current-plan">
		                            <div class="with-date">Current Plan</div>
		                            <div><em class="smaller block">renews Feb 19, 2015</em></div>
		                        </div> 
		                    </td>

		                    <td class="action-header">
		                        <a class="btn btn-success">
		                            Upgrade
		                        </a>
		                    </td>

		                    <td class="action-header">
		                        <a class="btn btn-info">
		                            Upgrade
		                        </a>
		                    </td>
		                </tr>

		                <tr>
		                    <td>Tutorials and Support Docs:</td>
		                    <td><span class="icon-no fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-no fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-no fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                </tr>

		                <tr>
		                    <td>Support Forum Access:</td>
		                    <td><span class="icon-no fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-no fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-no fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                </tr>

		                <tr>
		                    <td>Automatic Updates:</td>
		                    <td><span class="icon-no fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-no fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                </tr>

		                <tr>
		                    <td>Unlock rewards:</td>
		                    <td><span class="icon-no fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                    <td><span class="icon-yes fa fa-check-circle-o"></span></td>
		                </tr>

		                <tr>
		                    <td>Skills:</td>
		                    <td>20</td>
		                    <td>30</td>
		                    <td>50</td>
		                    <td>80</td>
		                    <td>200</td>
		                </tr>

		                <tr>
		                    <td>Websites:</td>
		                    <td>1</td>
		                    <td>5</td>
		                    <td>10</td>
		                    <td>20</td>
		                    <td>unlimited</td>
		                </tr>
            		</tbody>
        		</table>
        	</div>
    	</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>