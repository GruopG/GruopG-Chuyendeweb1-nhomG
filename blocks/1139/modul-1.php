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
        $less->compileFile('./less/modul-1.less', 'css/modul-1.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-1.css">


    </head>

    <body>
        <!-- Header-->
        <div class="modul-1">
            <div class="container-fluid">

                <!--header_row__1-->
                <div class="row header_row__1"> 
                    <div class="container">

                        <!--User-->
                        <div class="col-md-3 col-sm-12">
                            <ul class="header_user">
                                <li><a href="#">My account</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Checkout</a></li>
                            </ul>
                        </div>
                        <!--End user-->

                        <!--Custum-->
                        <div class="col-md-6 col-sm-12">
                            <div class="custom_header">
                                <span >Call us:</span>
                                <span class="text_2">+3(800) 2345-6789</span>
                                <span >7 Days a week from 9:00 am to 7:00 pm</span>
                            </div>
                        </div>
                        <!--End custum-->

                        <!--Btn Searh-->
                        <div class="col-md-3 col-sm-12">
                            <div class="header_search button ">
                                <form class="navbar-form navbar-left">
                                    <div class="input-group">
                                        <input type="text" class="form-control" placeholder="Search" >
                                        <div class="input-group-btn">
                                            <button class="btn btn-default" type="submit">
                                                <i class="fa fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <!--/End Btn Searh-->

                    </div>
                </div>
                <!--/End header_row__1-->

            </div>
        </div>
        <!--/End Header -->
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
