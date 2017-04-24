<!DOCTYPE html>

<html>
    <head>

        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/modul-6.less', 'css/modul-6.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-6.css">


    </head>

    <body>
        <div class="modul-6">

            <!--Main content-->
            <div class="container">

                <!--pageheading-->
                <div class="page_heading__wrap">
                    <ul class="breadcrumb">
                        <li><a href="#"  title="Back to the frontpage">Home</a></li>
                        <li><span >Blog</span></li>
                    </ul>
                    <h1 class="page_heading">Blog</h1>
                    <div class="clearfix"></div>
                </div>
                <!-- Enand pageheading-->


                <div class="col-md-8">
                    <div class="content_wrapper">
                        <div class="blog_listing">

                            <!--blog listting-->
                            <div class="blog_listing__article">

                                <h2 class="article_title">
                                    <a href="#">We are providing a great choice of different commodities</a>
                                </h2>

                                <div class="article_info">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <time class="article_date" datetime="2016-07-11">11 Jul 2016</time>
                                    <span >David Braun</span>
                                    <span >0 Comments</span>
                                </div>

                                <div class="article_body">
                                    <div ><img src="//cdn.shopify.com/s/files/1/1380/5661/articles/blog_3_1024x1024.jpg?v=1468241273" alt="We are providing a great choice of different commodities"></div>
                                    <div class="article_content rte">
                                        We can help you solve any problem because we provide only rational solutions. We can satisfy customers with different claims. Nowadays we have a problem of choice because we are living in society...
                                    </div>
                                </div>

                                <div class="article_footer">
                                    <div class="blog_tags">

                                        <a href="#"><i class="fa fa-tag" aria-hidden="true"></i>computers</a>
                                    </div>
                                    <a class="btn" href="#">Read more</a>
                                </div>

                            </div>
                            <!--End blog listting-->

                            <!--blog listting-->
                            <div class="blog_listing__article">

                                <h2 class="article_title">
                                    <a href="#">We can satisfy customers with different claims</a>
                                </h2>

                                <div class="article_info">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <time class="article_date" datetime="2016-07-11">11 Jul 2016</time>
                                    <span >David Braun</span>
                                    <span >0 Comments</span>
                                </div>

                                <div class="article_body">
                                    <div ><img src="//cdn.shopify.com/s/files/1/1380/5661/articles/blog_2_1024x1024.jpg?v=1468241228" alt="We can satisfy customers with different claims"></div>
                                    <div class="article_content rte">
                                        So, it is natural that this sphere is one of the most popular and it is really hard to offer computer hardware because of great number of competitors. We are providing a great...
                                    </div>
                                </div>

                                <div class="article_footer">
                                    <a class="btn" href="#">Read more</a>
                                </div>

                            </div>
                            <!--End blog listting-->

                            <!--blog listting-->
                            <div class="blog_listing__article">

                                <h2 class="article_title">
                                    <a href="#">We can help you solve any problem because we provide only rational solutions</a>
                                </h2>

                                <div class="article_info">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <time  class="article_date" datetime="2016-07-11">11 Jul 2016</time>
                                    <span >David Braun</span>
                                    <span >0 Comments</span>
                                </div>

                                <div class="article_body">
                                    <div ><img src="//cdn.shopify.com/s/files/1/1380/5661/articles/blog_1_1024x1024.jpg?v=1468241179" alt="We can help you solve any problem because we provide only rational solutions"></div>
                                    <div class="article_content rte">
                                        We are living in the epoch of great technical progress and we are sure that new technologies are our future. You know that computers are being applied in all spheres of society. It...
                                    </div>
                                </div>

                                <div class="article_footer">
                                    <p class="blog_tags">
                                        <a  href="#"><i class="fa fa-tag" aria-hidden="true"></i>computers</a>
                                        <a  href="#"><i class="fa fa-tag" aria-hidden="true"></i>electronics</a>
                                        <a  href="#"><i class="fa fa-tag" aria-hidden="true"></i>hardware</a>
                                    </p>
                                    <a class="btn" href="#">Read more</a>
                                </div>

                            </div>
                            <!--End blog listting-->

                        </div>
                    </div>
                </div>
            </div>
            <!--End Main content-->

        </div>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
