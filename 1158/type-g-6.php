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
        $less->compileFile('./less/type-g-6.less', 'css/type-g-6.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-6.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">

    </head>

    <body>
        <header>
            <div class="type-g-6">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12">

                        <div class="col-md-6 class1">
                            <img src="images/products_showcase1_img.png" alt="" width="100%" height="100%"/>
                            <div class="item_info">
                                <h1 class="apple"><strong> Apple</strong></h1>

                                <h2><a href="#" class="macbook"> <strong>MacBook Air</strong></a></h2>

                                <h3 class="type"> New fifth generation Intel<br>Core Processors</h3>

                                <h4 class="money"> $ 1,500.000</h4>
                                <h5><a class="btn btnshopnow"> <strong>Shop now!</strong></a></h5>

                            </div>
                        </div>

                        <div class="row">
                            <div class="col-md-6 class2">
                                <img src="images/products_showcase2_img.png" alt="" width="100%" height="100%"/>
                                <div class="item_info">
                                    <h1 class="apple"><strong> Apple</strong></h1>

                                    <h2><a href="#" class="iMac"> <strong>iMac</strong></a></h2>

                                    <h3 class="type"> Retina. Now in colossal and <br>ginormous</h3>

                                    <h4 class="money"> $ 900.00</h4>
                                    <h5><a class="btn btnshopnow"> <strong>Shop now!</strong></a></h5>

                                </div>
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