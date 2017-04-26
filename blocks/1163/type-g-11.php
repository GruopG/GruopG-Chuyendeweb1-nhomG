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
        $less->compileFile('./less/type-g-11.less', 'css/type-g-11.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-11.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">

    </head>

    <body>
        <header>
            <div class="type-g-11">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12 boder">
                        <div class="type"><p><strong>Store events</strong></p></div>

                        <div class="row">
                            <div class="col-md-4 class">
                                <div class="images">
                                    <img src="images/about_1.png" width="124px" height="124px">
                                </div>
                                <div class="tieude"><p>FOR CONVENIENCE OF CHOICE</p></div>
                                <div class="noidung"><p>We think about the convenience of your choice. Our products are supplied with star rating that should help hesitant buyers to take a decision. What’s more, you can search our site if you know exactly what you are looking for or use a bunch of different filters that will considerably save your time and efforts.</p></div>
                            </div>
                            <div class="col-md-4 class">
                                <div class="images">
                                    <img src="images/about_2.png" width="124px" height="124px">
                                </div>
                                <div class="tieude"><p>DELIVERY TO ALL REGIONS</p></div>
                                <div class="noidung"><p>We deliver our goods worldwide. No matter where you live, your order will be shipped in time and delivered right to your door or to any other location you have stated. The packages are handled with utmost care, so the ordered products will be handed to you safe and sound, just like you expect them to be.</p></div>
                            </div>
                            <div class="col-md-4 class">
                                <div class="images">
                                    <img src="images/about_3.png" width="124px" height="124px">
                                </div>
                                <div class="tieude"><p>THE HIGHEST QUALITY OF PRODUCTS</p></div>
                                <div class="noidung"><p>We guarantee the highest quality of the products we sell. Several decades of successful operation and millions of happy customers let us feel certain about that. Besides, all items we sell pass thorough quality control, so no characteristics mismatch can escape the eye of our professionals.</p></div>
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