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
        $less->compileFile('./less/type-g-7.less', 'css/type-g-7.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-7.css">
       


    </head>

    <body>
        <header>
            <div class="type-g-7">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12 Boderfull">
                        <p><strong>BLOG</strong></p>
                        <div class="col-md-4 boder1">
                            <div class="col-md-12 col-xs-6">
                                <img src="images/blog_1_1024x1024.jpg" width="100%" height="100%">
                            </div>
                            <div class="col-md-12 col-xs-6 font-name">
                                <h1 class="hidden-xs"><a href="#">Blog</a></h1>
                                <h2><a href="#">We are providing a great choice of different commodities</a></h2>
                                <br>
                                <h3 class="hidden-xs">We can help you solve any problem because we provide only rational solutions. We can satisfy customers with different claims....</h3>
                                <br>
                                <h4><i class="fa fa-clock-o"></i> July 11, 2016</h4>
                                 
                                 
                            </div>
                            <h5><a class="btn btnshopnow"> <strong>Read More</strong></a></h5>
                        </div>
                        <div class="col-md-4 boder2">
                            <div class="col-md-12 col-xs-6">
                                <img src="images/blog_2_1024x1024.jpg" width="100%" height="100%">
                            </div>
                            <div class="col-md-12 col-xs-6 font-name">
                                <h1 class="hidden-xs">Blog</h1>
                                <h2><a href="#">We can satisfy customers with different claims</a></h2>
                                <br>
                                <h3 class="hidden-xs">So, it is natural that this sphere is one of the most popular and it is really hard to offer...</h3>
                                <br>
                                <h4><i class="fa fa-clock-o" ></i> July 11, 2016</h4>

                            </div>
                            <h5><a class="btn btnshopnow"> <strong>Read More</strong></a></h5>
                        </div>
                        <div class="col-md-4 boder3">
                            <div class="col-md-12 col-xs-6">
                                <img src="images/blog_3_1024x1024.jpg" width="100%" height="100%">
                            </div>
                            <div class="col-md-12 col-xs-6 font-name">
                                <h1 class="hidden-xs">Blog</h1>
                                <h2><a href="#">We can help you solve any problem because we provide only...</a></h2>
                                <br>
                                <h3 class="hidden-xs">We are living in the epoch of great technical progress and we are sure that new technologies are our future....</h3>
                                <br>
                                <h4><i class="fa fa-clock-o" ></i> July 11, 2016</h4>

                            </div>
                            <h5><a class="btn btnshopnow"> <strong>Read More</strong></a></h5>
                        </div>
                    </div>
                </div>
            </div>





            <!--End Header Top-->


        </div>
    </header>
   

</body>
</html>