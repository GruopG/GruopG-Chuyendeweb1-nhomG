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
        $less->compileFile('./less/type-g-15.less', 'css/type-g-15.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-15.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">

    </head>

    <body>
        <header>
            <div class="type-g-15">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12 border">
                        <div class="noidung">
                            <p>Email us with any questions or inquiries or use our contact data. We would be happy to answer your questions.</p>
                        </div>

                        <div class="row">
                            <div class="col-sm-4 form-group">
                                <label for="contactFormName">Your Name:</label>
                                <input type="text" class="form-control "><p class="alert-form-info"></p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="contactFormEmail">Email:</label>
                                <input type="email" class="form-control "><p class="alert-form-info"></p>
                            </div>
                            <div class="col-sm-4 form-group">
                                <label for="contactFormTelephone">Phone Number:</label>
                                <input type="tel" class="form-control "><p class="alert-form-info"></p>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-sm-12 form-group">
                                <label for="contactFormMessage">Message:</label>
                                <textarea class="form-control " rows="5" cols="75" ></textarea><p class="alert-form-info"></p>
                            </div>


                        </div>
                        <div class="btn-toolbar form-group">
                            <input type="submit" value="Send" class="btn btn-alt"><p class="alert-form-info"></p>
                            <input type="reset" value="Clear" class="btn btn-info"><p class="alert-form-info"></p>
                        </div>
                    </div>


                    <!--End Header Top-->


                </div>
        </header>

    </body>
</html>