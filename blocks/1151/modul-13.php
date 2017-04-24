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
        $less->compileFile('./less/modul-13.less', 'css/modul-13.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-13.css">


    </head>

    <body>
        <div class="modul-13">
            
            <!--sidebar content-->
            <div class="container">
                <div class="col-md-9">

                </div>
                
                <!--sidebar product-->
                <div class="sidebar col-md-3 ">
                    <div class="sidebar_widget ">
                        <h3 class="widget_header">Best sellers</h3>
                        <ul class="list_products">
                            
                            <!--product-->
                            <li class="product">
                                <div class="product_img">  
                                    <a href="#">
                                        <img src="image/twelve_south_bookarc_stand_for_macbook_2_medium.png" alt="Smart Cover for iPad mini 4">
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="#">Smart Cover for iPad mini 4</a>
                                    </div>
                                    <div class="product_price">
                                        <span class="money" data-currency-usd="$12.00">$12.00</span>
                                        <span class="money compare-at-price" data-currency-usd="$20.00">$20.00</span>
                                    </div>
                                </div>
                            </li>
                            <!--/End product-->
                            
                            <!--product-->
                            <li class="product">
                                <div class="product_img">  
                                    <a href="#">
                                        <img src="image/iphone_6s_1_compact.png" alt="iPhone 6s">
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="#">iPhone 6s</a>
                                    </div>
                                    <div class="product_price">
                                        <span class="money" data-currency-usd="$526.00">$526.00</span>
                                        <span class="money compare-at-price" data-currency-usd="$528.00">$528.00</span>
                                    </div>
                                </div>
                            </li>
                            <!--/End product-->
                            
                            <!--product-->
                            <li class="product">
                                <div class="product_img">  
                                    <a href="#">
                                        <img src="image/iphone_lightning_dock___gold_1_compact.png">
                                    </a>
                                </div>
                                <div class="product_info">
                                    <div class="product_name">
                                        <a href="#">iPhone Lightning Dock - Gold</a>
                                    </div>
                                    <div class="product_price">
                                        <span class="money" data-currency-usd="$69.00">$69.00</span>
                                    </div>
                                </div>
                            </li>
                            <!--/End product-->

                        </ul>

                    </div>

                </div>
            </div>
            <!--/End sidebar content-->
            
        </div>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
