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

                    <div class="about_our_company">
                        <h1>Write Your Message</h1>
                        <div class="titleline-icon"></div>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting </p>
                    </div>


                    <div class="col-md-8">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Your Name *"required="" data-validation-required-message="Please enter your name.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="email" class="form-control" placeholder="Your Email *" required="" data-validation-required-message="Please enter your email address.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Your Phone *" required="" data-validation-required-message="Please enter your phone number.">
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <textarea class="form-control" placeholder="Your Message *" required="" data-validation-required-message="Please enter a message."></textarea>
                                        <p class="help-block text-danger"></p>
                                    </div>
                                </div>
                                <div class="clearfix"></div>
                                <div class="col-lg-12 text-center">
                                    <div id="success"></div>
                                    <button class="btn btn-xl get">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-4 icon-maps">
                        <p>
                            <strong><i class="fa fa-map-marker"></i> Address</strong><br>
                            1216/Mirpur_10 Beach, Dhaka(Bangladesh)
                        </p>
                        <p><strong><i class="fa fa-phone"></i> Phone Number</strong><br>
                            (+8801)7123456</p>
                        <p">
                            <strong><i class="fa fa-envelope"></i>  Email Address</strong><br>
                            Email@info.com</p>
                        <p></p>
                    </div>

                </div>

                <!--End Header Top-->


            </div>
        </header>
    </body>
</html>