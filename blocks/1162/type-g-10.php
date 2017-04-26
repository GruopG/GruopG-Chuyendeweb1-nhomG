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
        $less->compileFile('./less/type-g-10.less', 'css/type-g-10.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-10.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">

    </head>

    <body>
        <header>
            <div class="type-g-10">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12 boder">
                        <div class="type"><p>Catering to your requirements, handling your needs with care</p></div>
                        <div class="noidung"><p>Our store is more than just another average online retailer. We sell not only top quality products, but give our customers a positive online shopping experience. Forget about struggling to do everything at once: taking care of the family, running your business, walking your dog, cleaning the house, doing the shopping, etc. Purchase the goods you need every day or just like in a few clicks or taps, depending on the device you use to access the Internet. We work to make your life more enjoyable.</p></div>

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