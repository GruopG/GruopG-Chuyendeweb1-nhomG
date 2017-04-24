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
        $less->compileFile('./less/modul-8.less', 'css/modul-8.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-8.css">


    </head>

    <body>
        <div class="modul-8">
            <div class="container">

                <div class="col-md-8">

                </div>

                <!--sidebar widget-->
                <div class="sidebar col-md-4 ">
                    <div class="sidebar_widget  sidebar_widget__tags">
                        <h3 class="widget_header">Tags</h3>
                        <div class="widget_content">
                            <div class="blog_tags">
                                <a href="#"><i class="fa fa-tag" aria-hidden="true"></i>computers</a>
                                <a href="#"><i class="fa fa-tag" aria-hidden="true"></i>electronics</a>
                                <a href="#"><i class="fa fa-tag" aria-hidden="true"></i>hardware</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!--/End-->

            </div>
        </div>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
