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
        $less->compileFile('./less/modul-9.less', 'css/modul-9.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-9.css">


    </head>

    <body>
        <div class="modul-9">

            <!--main content-->
            <div class="container">
                <div class=" col-md-9">

                    <div class="content_wrapper">

                        <!--tags--->
                        <ul class="tags clearfix">
                            <li class="active">
                                <a href="#">All</a>
                            </li> 
                            <li><a href="#" title="Show products matching tag Decktops">Decktops</a></li>
                            <li><a href="#" title="Show products matching tag Laptops">Laptops</a></li>
                            <li><a href="#" title="Show products matching tag Phones">Phones</a></li>
                            <li><a href="#" title="Show products matching tag Tablets">Tablets</a></li>
                        </ul>
                        <!--End tags--->

                        <!-- collection image & description -->
                        <div class="row collection_info">
                            <div class="col-md-3 collection_img"><img src="image/coll_desktops_medium.png" alt="Desktops"></div>
                            <div class="col-md-9 collection_desc">
                                <div class="rte">
                                    <p>We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.So, it is natural that this sphere is one of the most popular and it is really hard to offer computer hardware because of great number of competitors. We are providing a great choice of different commodities. We are producing reliable and durable goods.</p>
                                    <p>That is why we are always in touch with the latest new inventions and improvements. There is no doubt that we are the leaders and you don’t have to worry about our reputation because it is perfect.&nbsp; We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.</p>
                                </div>
                            </div>
                        </div>
                        <!--/End collection image & description -->

                    </div>

                </div>
            </div>
            <!--/End main content-->
        </div>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
