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
        $less->compileFile('./less/type-g-8.less', 'css/type-g-8.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-8.css">

    </head>

    <body>
        <header>
            <div class="type-g-8">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-4 col-xs-12">
                        <div class="border">
                            <div class="row noidung1">
                                NEW PRODUCTS
                            </div>
                            <div class="row noidung">
                                <div class="col-md-6 col-xs-6">
                                    <img class="img-responsive" src="images/logi_base_charging_stand_with_smart_connector_for_ipad_pro_1_medium.png" width="100%"height="100%"/>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="product_info">
                                        <p class="product_vendor">Apple</p>

                                        <p class="product_name">
                                            <a href="#">Logi BASE Charging Stand wi...</a>
                                        </p>

                                        <p class="product_price">
                                            <span class="product_price_with_sale">$266.00</span>
                                            <span class="money_sale" >$390.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row noidung">
                                <div class="col-md-6 col-xs-6">
                                    <img src="images/ipod_nano_1_medium.png" width="100%"height="100%"/>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="product_info">
                                        <p class="product_vendor">Apple</p>

                                        <p class="product_name">
                                            <a href="#">iPod nano</a>
                                        </p>

                                        <p class="product_price">
                                            <span class="product_price_with_sale">$150.00</span>

                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row noidung">
                                <div class="col-md-6 col-xs-6">
                                    <img src="images/macbook_1_medium.png" width="100%"height="100%"/>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="product_info">
                                        <p class="product_vendor">Apple</p>

                                        <p class="product_name">
                                            <a href="#">MacBook</a>
                                        </p>

                                        <p class="product_price">
                                            <span class="product_price_with_sale">$1.029.00</span>
                                            <span class="money_sale" >$1,139.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>  

                    <div class="col-md-4 col-xs-12">
                        <div class="border">      
                            <div class="row noidung1">
                                ON SALE
                            </div>
                            <div class="row noidung">
                                <div class="col-md-6 col-xs-6">
                                    <img src="images/smart_cover_for_ipad_mini_4_1_medium.png" width="100%"height="100%"/>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="product_info">
                                        <p class="product_vendor">Apple</p>

                                        <p class="product_name">
                                            <a href="#">Smart Cover for iPad mini 4</a>
                                        </p>

                                        <p class="product_price">
                                            <span class="product_price_with_sale">$12.00</span>
                                            <span class="money_sale" >$20.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row noidung">
                                <div class="col-md-6 col-xs-6">
                                    <img src="images/iphone_6s_1_medium.png" width="100%"height="100%"/>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="product_info">
                                        <p class="product_vendor">Apple</p>

                                        <p class="product_name">
                                            <a href="#">iPhone 6s</a>
                                        </p>

                                        <p class="product_price">
                                            <span class="product_price_with_sale">$526.00</span>
                                            <span class="money_sale" >$528.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row noidung">
                                <div class="col-md-6 col-xs-6">
                                    <img src="images/iphone_lightning_dock___gold_1_medium.png" width="100%"height="100%"/>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="product_info">
                                        <p class="product_vendor">Apple</p>

                                        <p class="product_name">
                                            <a href="#">iPhone Lightning Dock - Gold</a>
                                        </p>

                                        <p class="product_price">
                                            <span class="product_price_with_sale">$69.00</span>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>


                    </div>

                    <div class="col-md-4 col-xs-12">
                        <div class="border">  
                            <div class="row noidung1">
                                TOP RATED PRODUCTS
                            </div>
                            <div class="row noidung">
                                <div class="col-md-6 col-xs-6">
                                    <img src="images/silicone_case_for_ipad_mini_4_1_medium.png" width="100%"height="100%"/>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="product_info">
                                        <p class="product_vendor">Apple</p>

                                        <p class="product_name">
                                            <a href="#">Silicone Case for iPad mini 4</a>
                                        </p>

                                        <p class="product_price">
                                            <span class="product_price_with_sale">$33.00</span>
                                            
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row noidung">
                                <div class="col-md-6 col-xs-6">
                                    <img src="images/logi_base_charging_stand_with_smart_connector_for_ipad_pro_1_medium.png" width="100%"height="100%"/>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="product_info">
                                        <p class="product_vendor">Apple</p>

                                        <p class="product_name">
                                            <a href="#">Logi BASE Charging Stand wi...</a>
                                        </p>

                                        <p class="product_price">
                                            <span class="product_price_with_sale">$266.00</span>
                                            <span class="money_sale" >$390.00</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                            <div class="row noidung">
                                <div class="col-md-6 col-xs-6">
                                    <img src="images/ipad_pro_1_medium.png" width="100%"height="100%"/>
                                </div>
                                <div class="col-md-6 col-xs-6">
                                    <div class="product_info">
                                        <p class="product_vendor">Apple</p>

                                        <p class="product_name">
                                            <a href="#">iPad Pro</a>
                                        </p>

                                        <p class="product_price">
                                            <span class="product_price_with_sale">$220.00</span>
                                            <span class="money_sale" >$480.00</span>
                                        </p>
                                    </div>
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