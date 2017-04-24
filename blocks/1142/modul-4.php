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
        $less->compileFile('./less/modul-4.less', 'css/modul-4.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-4.css">


    </head>

    <body>

        <footer>
            <div class="modul-4">

                <!-- FOOTER -->
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="footer_content">
                                <div class="footer_row_1">
                                    <a href="#">
                                        <img src="images/footer_logo.png" alt="electroinnovation" />
                                    </a>
                                    <p>Comfort is a very important thing nowadays because it is a condition of satisfaction and calmness. It<br> is clear that our way of life must be as comfortable as possible.</p>
                                </div>
                                <div class="footer_row_2">
                                    <p role="contentinfo">© 2017 electroinnovation. All rights reserved. Design by <a href="#">TemplateMonster.com</a>. <a target="_blank" rel="nofollow" href="#">Powered by Shopify</a></p><!-- Design by templatemonster.com -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--End footer-->

            </div>

        </footer>

    </body>
</html>
