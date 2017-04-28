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
        $less->compileFile('./less/type-g-14.less', 'css/type-g-14.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-14.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">

    </head>

    <body>
        <header>
            <div class="type-g-14">
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12 boder">
                        <div class="googlemaps">
                            <!--End Header Top-->
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3918.4736630670013!2d106.75580565068822!3d10.851532860731437!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317527779c9143b7%3A0x31b5e72b963c25ed!2zNTMgVsO1IFbEg24gTmfDom4sIExpbmggQ2hp4buDdSwgVGjhu6cgxJDhu6ljLCBI4buTIENow60gTWluaCwgVmnhu4d0IE5hbQ!5e0!3m2!1svi!2s!4v1492870425246" width="100%" height="303" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <div class="noidung">
                                <p>You can contact us any way that is convenient for you. We are available 24/7 via fax, email or telephone. You can also use a quick contact form below or visit our office personally.</p>
                            </div>
                        </div>

                    </div>

                </div>

                <!--End Header Top-->


            </div>
        </header>



    </body>
</html>