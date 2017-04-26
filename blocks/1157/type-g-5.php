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
        $less->compileFile('./less/type-g-5.less', 'css/type-g-5.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-5.css">

    </head>

    <body>
        <header>
            <div class="type-g-5">
                <!--Begin Header Top-->
                <div class="container">

                    <div class="col-md-12 border">
                        <div class="row">
                            <div class="type">
                                <p>We can help you</p>
                            </div>
                            <div class="noidung">
                                <p>So, it is natural that this sphere is one of the most popular and it is really hard to offer computer hardware because of great number of competitors. We are providing a great choice of different commodities. We are producing reliable and durable goods.  That is why we are always in touch with the latest new inventions and improvements. </p>
                                <p>We care about our clients</p>
                                <p>1.We have a superb 24/7 support system<br>
                                    2.Nowadays we have a problem of choice</p> 
                                <p>We have a great number of different but grateful customers and this fact proves that our goods are of high quality and fair price. We’re sure that no one could stay indifferent because everybody wants to get professionally made up product and pay a fair price for that.</p>
                                <p>We are living in the epoch of great technical progress and we are sure that new technologies are our future. You know that computers are being applied in all spheres of society. It is a tremendous achievement of mankind. It is totally safe for environment and for the people, it runs with electricity. The most important thing is that the computer technology has great perspectives for further development and it could be called a panacea for humanity. It seems that computer is such a revolutionary invention that we could not even realize the true extent of its significance.  Some people are even afraid of such rapid and striking computer expansion; they state that mankind is in danger because of it. Their main argument is the problem of artificial intelligence. But we hope that all these problems will disappear soon.</p>
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