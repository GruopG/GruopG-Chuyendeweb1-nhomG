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
        $less->compileFile('./less/modul-11.less', 'css/modul-11.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-11.css">


    </head>

    <body>
        <div class="modul-11">
            <!-- sidebar content-->
            <div class="container">
                <div class="col-md-9">

                </div>

                <!--sidebar-->
                <div class="sidebar col-md-3 ">
                    <div class="sidebar_widget ">
                        <h3 class="widget_header">Collections</h3>
                        <ul class="list_links">
                            <li class=" active">
                                <a href="#" title="Desktops">Desktops</a>
                            </li>
                            <li >
                                <a href="#" title="Laptops">Laptops</a>
                            </li>
                            <li class="phones">
                                <a href="#" title="Phones">Phones</a>
                            </li>
                            <li >
                                <a href="#" title="Tablets">Tablets</a>
                            </li>
                        </ul>
                    </div>
                    <!--End sidebar-->

                </div>

            </div>
            <!--/End silde content-->
        </div>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
