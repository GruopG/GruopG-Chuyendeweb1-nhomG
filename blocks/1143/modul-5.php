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
        $less->compileFile('./less/modul-5.less', 'css/modul-5.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-5.css">


    </head>

    <body>
        <div class="modul-5">

            <!-- MAIN CONTENT -->
            <div class="container">

                <div class="page_heading__wrap">
                    <h1 class="page_heading">Collections</h1>
                    <div class="clearfix"></div> 
                </div>

                <div class="col-md-12">
                    <div class="collection_listing_main">
                        <div class="row">

                            <div class="col-md-3  collection_listing__item">
                                <div class="collection_listing__wrapper">
                                    <a href="#">
                                        <img src="image/coll_desktops_medium.png" alt="Desktops" />
                                    </a>
                                    <h4 class="product_name"><a href="#">Desktops</a></h4>
                                    <p >14 products</p>
                                </div>
                            </div>

                            <div class="col-md-3  collection_listing__item">
                                <div class="collection_listing__wrapper">
                                    <a href="#">
                                        <img src="image/coll_laptops_medium.png" alt="Laptops" />
                                    </a>
                                    <h4 class="product_name"><a href="#">Laptops</a></h4>
                                    <p >13 products</p>
                                </div>
                            </div>

                            <div class="col-md-3  collection_listing__item">
                                <div class="collection_listing__wrapper">
                                    <a href="#">
                                        <img src="image/coll_phones_medium.png" alt="Phones" />
                                    </a>
                                    <h4 class="product_name"><a href="#">Phones</a></h4>
                                    <p >8 products</p>
                                </div>
                            </div>

                            <div class="col-md-3  collection_listing__item">
                                <div class="collection_listing__wrapper">
                                    <a href="#">
                                        <img src="image/coll_tablets_medium.png" alt="Tablets" />
                                    </a>
                                    <h4 class="product_name"><a href="#">Tablets</a></h4>
                                    <p >12 products</p>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
            <!--End MAIN CONTENT -->

        </div>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
