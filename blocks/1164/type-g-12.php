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
        $less->compileFile('./less/type-g-12.less', 'css/type-g-12.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-12.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">

    </head>

    <body>
        <header>
            <div class="type-g-12">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12 boder">
                        <div class="type"><p>Our team</p></div>

                        <div class="row">
                            <div class="col-md-4 class">
                                <div class="images">
                                    <img src="images/photo_1.jpg" width="100%" height="100%">
                                </div>
                                <div class="tieude"><p>ROBERT JOHNSON</p></div>
                                <div class="noidung"><p>Senior salesman with 15 years of experience. He knows everything about the products he offers.</p></div>
                            </div>
                            <div class="col-md-4 class">
                                <div class="images">
                                    <img src="images/photo_2.jpg" width="100%" height="100%">
                                </div>
                                <div class="tieude"><p>JESSICA PRISTON</p></div>
                                <div class="noidung"><p>Mega positive shop assistant always ready to help you make the right choice and charm you with a smile.</p></div>
                            </div>
                            <div class="col-md-4 class">
                                <div class="images">
                                    <img src="images/photo_3.jpg" width="100%" height="100%">
                                </div>
                                <div class="tieude"><p>SAM KROMSTAIN</p></div>
                                <div class="noidung"><p>Wholesale manager. Contact him if you want to buy a batch of the products offered at our store. </p></div>
                            </div>

                        </div>

                    </div>

                </div>

                <!--End Header Top-->


            </div>
        </header>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/type-g-1.js"></script>

    </body>
</html>