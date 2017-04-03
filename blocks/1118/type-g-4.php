<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
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
	<!--Begin Main 2-->
	<div class="type-g-4">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
	                <!--Begin Tab Nav-->
                    <ul class="nav nav-tabs">
                        <li class="active">
                        	<a href="#tab1" data-toggle="tab" aria-expanded="true">THÔNG TIN THÊM</a>
                        </li>
                        
                        <li class="">
                        	<a href="#tab2" data-toggle="tab" aria-expanded="false">NHẬN XÉT</a>
                        </li>
                    </ul>
                    <!--End Tab Nav-->

					<!--Begin Tab Content-->
                    <div class="tab-content">
                        <!--Begin Tab 1-->
                        <div class="tab-pane active" id="tab1">
                            <h2>Nội dung sản phẩm</h2>
                            <div class="panel">
                                <div class="col-md-6">
                                    <p>
                                    	<span class="span-gg">CHUNG TINH GH17 BAO GỒM CÁC LOẠI HOA:
                                    	</span><br>
										<span class="span-gg">- 99 HOA HỒNG ĐỎ
										</span><br>
										<span class="span-gg">- HOA BABY TRẮNG
										</span><br>
										<span class="span-gg">- HOA LÁ VÀ PHỤ LIỆU ĐI KÈM
										</span>
									</p>
                                </div>
                            </div>
                        </div>
						<!--End Tab 1-->
						
						<!--Begin Tab 2-->
                        <div class="tab-pane" id="tab2">
                            <div class="panel" >
                                <div id="reviews">
                                    <div id="comments">
                                        <h2>Reviews</h2>
                                    </div>
             						<!--Begin Form-->
             						<div class="col-md-12">
             							<div id="review_form">
	                                        <div id="respond" class="comment-respond">
	                                            <small></small>
	                                            <form action="#" method="post">
	                                                <input type="hidden" name="_token" value="BZdJVHlBVYsvQdYK5cka07QykLt3ZU1qH5r3uHTQ">
	                                                <p>
	                                                    <span>Your email address will not be published.</span> Required fields are marked <span>*</span>
	                                                </p>
	                                                    
	                                                <p class="comment-form-comment">
	                                                    <label for="comment">Your Review <span>*</span></label>
	                                                    <textarea id="comment" name="comment" cols="40" rows="8" aria-required="true" required=""></textarea>
	                                                </p>

	                                                <p class="comment-form-author">
	                                                	<label for="author">Name <span>*</span></label>
	                                                	<input name="author" type="text" value="" size="30" aria-required="true" required="">
	                                               	</p>

	                                                <p class="comment-form-email">
	                                                	<label for="email">Email <span>*</span></label>
	                                                	<input name="email" type="email" value="" size="30" aria-required="true" required="">
	                                                </p>

	                                                <p class="form-submit">
	                                                	<input name="submit" type="submit" id="submit" class="submit" value="Submit">
	                                                	<input type="hidden" name="comment_post_ID" value="2560">
	                                                    <input type="hidden" name="comment_parent" value="0">
	                                                </p>                
	                                            </form>
	                                        </div>
                                    	</div>
             						</div>
                                    
                                    <!--End Form-->
                                    <div class="clear"></div>
                                </div>
                            </div>
                        </div>
                        <!--End Tab 2-->
                    </div>
	                <!--End Tab Content-->

	            </div>
			</div>
		</div>
	</div>
	<!--End Main 2-->
	<script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>