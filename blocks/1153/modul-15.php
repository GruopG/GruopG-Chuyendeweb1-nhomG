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
        $less->compileFile('./less/modul-15.less', 'css/modul-15.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-15.css">


    </head>

    <body>
        <div class="modul-15">

            <!--sidebar content-->
            <div class="container">

                <div class="col-md-8">

                </div>
                <!--sidebar-->
                <div class="sidebar col-md-4 ">
                    <div class="sidebar_widget sidebar_widget__comments">
                        <h3 class="widget_header">Comments</h3>
                        <div class="widget_content">
                            <ul >
                                <li>
                                    <p class="alert alert-warning">There are no comments yet</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!--/End sidebar-->

            </div>
            <!--/End sidebar content-->

        </div>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
