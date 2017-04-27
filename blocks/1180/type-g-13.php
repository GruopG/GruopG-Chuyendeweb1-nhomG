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
        $less->compileFile('./less/type-g-13.less', 'css/type-g-13.css');
    ?>
    <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="css/type-g-13.css">
</head>

<body>
	<div class="type-g-13">
		<div class="container">
    		<h3>The columns titles are merged with the filters inputs thanks to the placeholders attributes</h3>
    		<div class="creatediv1 marginTop30">
				<div class="row margin-top-50">
					<div class="col-md-12">
						<div class="panel panel-primary filterable">
							<div class="panel-heading">
								<h3 class="panel-title">Cost Centers<span style="color: white; font-weight: bold;"> *</span></h3>
								<div class="pull-right">
									<button type="button" class="btn btn-default btn-xs btn-filter"><span class="fa fa-filter"></span> Filter</button>
								</div>
							</div>

							<table class="span12">
								<table>
									<tr class="filters">
										<th style="width: 4.1%; width:50px;">
											<div class="checkbox radio-margin">
												<label>
													<input type="checkbox" value="">
													<span class="cr"><i class="cr-icon fa fa-check"></i></span>
												</label>
											</div>
										</th>

										<th style="width: 48%">
											<input type="text" class="form-control" placeholder="Cost Center Name" disabled>
										</th>

										<th style="width: 48%">
											<input type="text" class="form-control" placeholder="Cost Center ID" disabled>
										</th>
									</tr>
								</table>

								<div class="bg tablescroll">
									<table class="table table-bordered table-striped">
										<tr>
											<th style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</th>
											<th style="width: 49.8%">BYU-I</th>
											<th style="width: 48%">542584612548</th>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Timesheet</td>
											<td style="width: 48%">652145875623</td>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Compro</td>
											<td style="width: 48%">854785412563</td>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Compro</td>
											<td style="width: 48%">854785412563</td>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Compro</td>
											<td style="width: 48%">854785412563</td>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Compro</td>
											<td style="width: 48%">854785412563</td>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Compro</td>
											<td style="width: 48%">854785412563</td>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Compro</td>
											<td style="width: 48%">854785412563</td>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Compro</td>
											<td style="width: 48%">854785412563</td>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Compro</td>
											<td style="width: 48%">854785412563</td>
										</tr>

										<tr>
											<td style="width: 4.1%; width:50px;">
												<div class="checkbox radio-margin">
													<label>
														<input type="checkbox" value="">
														<span class="cr"><i class="cr-icon fa fa-check"></i></span>
													</label>
												</div>
											</td>
											<td style="width: 48%">Compro</td>
											<td style="width: 48%">854785412563</td>
										</tr>
									</table>
								</div>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/type-g-13.js"></script>
</body>
</html>