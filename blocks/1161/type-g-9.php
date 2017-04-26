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
        $less->compileFile('./less/type-g-9.less', 'css/type-g-9.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-9.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">

    </head>

    <body>
        <header>
            <div class="type-g-9">
                <!--Begin Header Top-->
                <div class="container border">
                    <div class="col-sx-12 col-md-12">
                        <div class="noidung1">
                            FOLLOW US
                        </div>
                        <div class="row noidung">
                            <div class="homepage_follow__social">
                                <h3>Social news</h3>

                                <p>The latest news delivered across all social networks!</p>
                                <ul class="social_links">
                                    <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                    <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                                    <li><a href="#"><i class="fa fa-pinterest"></i></a></li>
                                    <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="noidung">

                            <div class="homepage_follow__social">
                                <h3>Get the latest news delivered daily!</h3>

                                <p>Give us your email and you will be daily updated with the latest events, in detail!</p>

                                <div class="enter_email">
                                    <form class="navbar-form"> 
                                        <div class="input-group">
                                            <input type="text" class="form-control control_email" placeholder="Enter Your Email">
                                            <button class="Subscribe"> <p>Subscribe</p></button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </header>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/type-g-1.js"></script>

    </body>
</html>