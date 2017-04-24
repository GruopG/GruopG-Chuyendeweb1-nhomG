<!DOCTYPE html>

<html>
    <head>


        <?php
        if (!class_exists('lessc')) {
            include ('./libs/lessc.inc.php');
        }
        $less = new lessc;
        $less->compileFile('./less/modul-2.less', 'css/modul-2.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-2.css">
        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    </head>

    <body>
        <div class="modul-2">
            <!--Header-->
            <div class="container">
                <div class="row">

                    <!--Icon -->
                    <div class="col-md-4 ">
                        <div class="cell_item1 ">
                            <ul class="social_links social_links__header">
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!--End Icon-->

                    <!--LOGO-->
                    <div class="col-md-4">
                        <div class="cell_item2 ">
                            <div class="logo ">
                                <a href="/">
                                    <img src="images/logo.png" alt="electroinnovation" />
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--End logo-->

                    <!--Cart-->
                    <div class="col-md-4">
                        <div class="cell_item3 "> 

                            <div class="col-md-10 option">
                                <div class="pull-right ">
                                    <select>
                                        <option value="USD" selected="selected">USD</option>
                                        <option value="EUR">EUR</option>
                                        <option value="GBP">GBP</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-2">
                                <div class=" pull-right">
                                    <a href="/cart" title="Cart"><i class="fa fa-shopping-cart"></i>
                                        <span >0</span></a>
                                </div>
                            </div> 
                        </div>
                    </div>
                    <!--/End Cart-->

                </div>
            </div>
            <!--End Header-->
        </div>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
