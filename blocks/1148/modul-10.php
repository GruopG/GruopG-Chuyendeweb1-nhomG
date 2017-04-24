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
        $less->compileFile('./less/modul-10.less', 'css/modul-10.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/modul-10.css">


    </head>

    <body>
        <div class="modul-10">
            <!-- products content -->
            <div class="container">
                <div class="col-md-9">
                    <div class="content_wrapper">

                        <!-- products sorting -->
                        <div class="product_listing_controls">

                            <!--product toggle-->
                            <ul class="product_listing_toggle">
                                <li  class="active"><i class="fa fa-th"></i></li>
                                <li ><i class="fa fa-th-list"></i></li>
                            </ul>
                            <!--product toggle-->

                            <!--sort-->
                            <div class="sort_by">
                                <label>Sort by</label>
                                <select  class="form-control">
                                    <option value="manual" selected="selected">Featured</option>
                                    <option value="best-selling">Best selling</option>
                                    <option value="title-ascending">Name: A to Z</option>
                                    <option value="title-descending">Name: Z to A</option>
                                    <option value="price-ascending">Price: low to high</option>
                                    <option value="price-descending">Price: high to low</option>
                                    <option value="created-ascending">Oldest to newest</option>
                                    <option value="created-descending">Newest to oldest</option>
                                </select>
                            </div>
                            <!--End sort-->

                            <!--Show produce-->
                            <div class="show_products">
                                <label>Show</label>
                                <select  class="form-control">
                                    <option value="6" selected="selected">6</option>
                                    <option value="9">9</option>
                                    <option value="15">15</option>
                                    <option value="all">All</option>
                                </select>
                            </div>
                            <!--/End Show produce-->

                        </div>
                        <!--/End products sorting -->

                    </div>

                </div>
            </div>
            <!--/End products content -->

        </div>
        <script type="text/javascript" src="js/jquery-3.2.0.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
    </body>
</html>
