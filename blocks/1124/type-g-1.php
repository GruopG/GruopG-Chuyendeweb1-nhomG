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
        $less->compileFile('./less/type-g-1.less', 'css/type-g-1.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-1.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">
    </head>

    <body>
        <header>



            <div class="clearfix"></div>

            <!---------------banner----------->

            <div class="type-c-6">  
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <!--SEARCH-->
                            <h3 class="section-big">DANH SÁCH SẢN PHẨM </h3>              
                            <div class="clear"></div>
                            <!--/END SEARCH-->

                            <div class="row">
                                <!--------------------------------Hoa Bó---------------------->
                                <!--PRODUCTS-->
                                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <a href="#" class="zoom">
                                                <img src="images/hoabo1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4><a href="#">Hoa Bó 1</a></h4>
                                        <h4 class="pull-left" style="color: red;">500.000 VND</h4>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-success">
                                            <a href="#" style="color: #fff">Mua</a>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!--/END PRODUCTS-->

                                <!--PRODUCTS-->
                                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <a href="#" class="zoom">
                                                <img src="images/hoabo2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4><a href="#">Hoa Bó 2</a></h4>
                                        <h4 class="pull-left" style="color: red;">500.000 VND</h4>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-success">
                                            <a href="#" style="color: #fff">Mua</a>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!--/END PRODUCTS-->

                                <!-- <!--PRODUCTS-->
                                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <a href="#" class="zoom">
                                                <img src="images/hoabo3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4><a href="#">Hoa Bó 3</a></h4>
                                        <h4 class="pull-left" style="color: red;">650.000 VND</h4>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-success">
                                            <a href="#" style="color: #fff">Mua</a>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>


                                <!--/END PRODUCTS-->

                                <!--PRODUCTS-->
                                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <a href="#" class="zoom">
                                                <img src="images/hoabo4.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4><a href="#">Hoa Bó 4</a></h4>
                                        <h4 class="pull-left" style="color: red;">440.000 VND</h4>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-success">
                                            <a href="#" style="color: #fff">Mua</a>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!--/END PRODUCTS-->
                                <!-----------------Hoa Chúc Mừng------------------>
                                <!--PRODUCTS-->
                                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <a href="#" class="zoom">
                                                <img src="images/hoachucmung1.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4><a href="#">HOA CHÚC MỪNG 1</a></h4>
                                        <h4 class="pull-left" style="color: red;">350.000 VND</h4>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-success">
                                            <a href="#" style="color: #fff">Mua</a>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!--/END PRODUCTS-->


                                <!--PRODUCTS-->
                                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <a href="#" class="zoom">
                                                <img src="images/hoachucmung2.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4><a href="#">HOA CHÚC MỪNG 2</a></h4>
                                        <h4 class="pull-left" style="color: red;">380.000 VND</h4>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-success">
                                            <a href="#" style="color: #fff">Mua</a>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!--/END PRODUCTS-->

                                <!--PRODUCTS-->
                                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <a href="#" class="zoom">
                                                <img src="images/hoachucmung3.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4><a href="#">HOA CHÚC MỪNG 3</a></h4>
                                        <h4 class="pull-left" style="color: red;">400.000 VND</h4>
                                    </div>

                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-success">
                                            <a href="#" style="color: #fff">Mua</a>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!--/END PRODUCTS-->

                                <!--PRODUCTS-->
                                <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                    <div class="panel">
                                        <div class="panel-body">
                                            <a href="#" class="zoom">
                                                <img src="images/hoachucmung4.jpg" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                    <div class="text-content">
                                        <h4><a href="#">HOA CHÚC MỪNG 4</a></h4>
                                        <h4 class="pull-left" style="color: red;">600.000 VND</h4>
                                    </div>
                                    <div class="btn-group pull-right">
                                        <button type="button" class="btn btn-success">
                                            <a href="#" style="color: #fff">Mua</a>
                                        </button>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>

                                <!--/END PRODUCTS--> 
                            </div>

                            <div class="clearfix"></div>

                            <div class="row">
                                <!--PAGINATION-->
                                <div class="pagination pull-right">
                                    <ul>
                                        <li class="active">
                                            <a href="#">1</a>
                                        </li>
                                        <li class="">
                                            <a href="#">2</a>
                                        </li>
                                        <li class="">
                                            <a href="#">3</a>
                                        </li>
                                        <li class="">
                                            <a href="#">4</a>
                                        </li>
                                        <li><a href="#">Next</a></li>
                                    </ul>
                                </div>
                                <!--/END PAGINATION-->
                            </div>

                        </div>
                    </div>
                </div>

            </div>
            <div class="clearfix"></div>

        </header>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/type-g-1.js"></script>
    </body>
</html>