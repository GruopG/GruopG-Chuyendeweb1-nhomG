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
        $less->compileFile('./less/modul-7.less', 'css/modul-7.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-7.css">


    </head>

    <body>
        <div class="modul-7">
            <div class="container">
                <div class="col-md-8">

                </div>

                <!--sidebar-->
                <div class="sidebar col-md-4 ">

                    <!-- search-->
                    <div class="sidebar_widget sidebar_widget__search">
                        <form action="/search" method="get">
                            <input type="text" class="form-control" placeholder="Search" >
                            <div class="input-group-btn">
                                <button class="btn btn-default" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </form>
                    </div>
                    <!--/End search-->

                    <div class="sidebar_widget  sidebar_widget__articles">
                        <h3 class="widget_header">Recent articles</h3>

                        <ul >
                            <!--Item-->
                            <li>
                                <img src="image/blog_3_1024x1024.jpg" alt="We are providing a great choice of different commodities">
                                <div class="article_content article_content__img">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <time class="article_date" datetime="2016-07-11">11 July 2016</time>
                                    <h4 class="article_title">
                                        <a href="#">We are providing a great choice of...</a>
                                    </h4>

                                    <p class="article_comments"><i class="fa fa-comments-o" aria-hidden="true"></i>0</p>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <!--/End Item-->

                            <!--Item-->
                            <li>
                                <img src="image/blog_2_1024x1024.jpg" alt="We can satisfy customers with different claims">
                                <div class="article_content article_content__img">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <time class="article_date" datetime="2016-07-11">11 July 2016</time>
                                    <h4 class="article_title">
                                        <a href="#">We can satisfy customers with different claims...</a>
                                    </h4>

                                    <p class="article_comments"><i class="fa fa-comments-o" aria-hidden="true"></i>0</p>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <!--/End Item-->

                            <!--Item-->
                            <li>
                                <img src="image/blog_1_1024x1024.jpg" alt="We can help you solve any problem because we provide only rational solutions">
                                <div class="article_content article_content__img">
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                    <time class="article_date" datetime="2016-07-11">11 July 2016</time>
                                    <h4 class="article_title">
                                        <a href="#">We can help you solve any problem...</a>
                                    </h4>
                                    <p class="article_comments"><i class="fa fa-comments-o" aria-hidden="true"></i>0</p>
                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <!--/End Item-->

                        </ul>
                    </div>

                </div>
                <!--End sidebar-->

            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
