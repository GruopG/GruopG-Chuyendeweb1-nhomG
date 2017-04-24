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
        $less->compileFile('./less/modul-12.less', 'css/modul-12.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-12.css">


    </head>

    <body>
        <div class="modul-12">

            <!--sidebar content-->
            <div class="container">
                <div class="col-md-9">

                </div>

                <!--sidebar-->
                <div class="sidebar col-md-3 ">
                    <div class="sidebar_widget ">
                        <h3 class="widget_header">Product Types</h3>
                        <ul class="list_links">
                            <li ><a href="#" title="Accessories">Accessories</a></li>
                            <li ><a href="#" title="iPad">iPad</a></li>
                            <li ><a href="#" title="iPhone">iPhone</a></li>
                            <li ><a href="#" title="Mac">Mac</a></li>      
                        </ul>
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
