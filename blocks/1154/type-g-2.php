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
        $less->compileFile('./less/type-g-2.less', 'css/type-g-2.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-2.css">

    </head>

    <body>
        <header>
            <div class="type-g-2">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <div class="border">
                                <h1>DESCRIPTION</h1>
                                <div class="type-1">
                                    <p>We are producing reliable and durable goods</p>
                                    <div class="p2">
                                        <p2>We are living in the epoch of great technical progress and we are sure that new technologies are our future.</p2>
                                    </div>
                                </div>
                                <div class="type-2">
                                    <p><strong>Also you can always contact our consultants</strong></p>
                                    <div class="p2">
                                        <p2>Some people are even afraid of such rapid and striking computer expansion; they state that mankind is in danger because of it. Their main argument is the problem of artificial intelligence. But we hope that all these problems will disappear soon.So, it is natural that this sphere is one of the most popular and it is really hard to offer computer hardware because of great number of competitors.</p2>
                                    </div>
                                </div>
                                <div class="type-3">
                                    <p><strong>We can help you solve any problem</strong></p>
                                    <div class="p2">
                                        <p2>We are providing a great choice of different commodities. We are producing reliable and durable goods. That is why we are always in touch with the latest new inventions and improvements. There is no doubt that we are the leaders and you don't have to worry about our reputation because it is perfect. We have a great number of different but grateful customers and this fact proves that our goods are of high quality and fair price.</p2>
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