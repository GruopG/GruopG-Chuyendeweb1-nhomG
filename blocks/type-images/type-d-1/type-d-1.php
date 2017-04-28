<!DOCTYPE html>
<?php
if (!class_exists('lessc')) {
    include ('./libs/lessc.inc.php');
}
$less = new lessc;
$less->compileFile('./less/type-d-1.less', 'css/style.css');
?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Menu</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
        <div class="type-1">
            <section class="jk-header">
                <nav class="navbar navbar-default container">
                    <div class="container">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a href="#" class="ib">
                                <img src="images/logo@2x.png" class="fl" alt="Logo" width="50" height="50">
                                <span class="site-name" style="font-size: 28px;line-height: 40px; font-style: italic; margin-left: 15px; ">Coursaty<span>.</span></span>
                            </a>
                        </div>


                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">


                            <ul class="nav navbar-nav navbar-right">

                                <li class="active"><a href="#">HOME</a></li>
                                <li><a href="#">About </a></li>
                                <li><a href="#">Course </a></li>
                                <li><a href="#">Instuctors</a></li>
                                <li><a href="#"> Features</a></li>
                                <li><a href="#"> About</a></li>
                                <li><a href="#"> Blog</a></li>
                                <li><a href="#"> Contact</a></li>
                                <li class="login"><a href="#" style="padding: 20px;"> <p style="color: white">LOGIN</p></a></li>



                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </section>
        </div>
        <div class="type-2">
            <div class="hinh">
                <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
                    <!-- Overlay -->
                    <div class="overlay"></div>

                    <!-- Indicators -->
                    <ol class="carousel-indicators">
                        <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                        <li data-target="#bs-carousel" data-slide-to="1"></li>
                        <li data-target="#bs-carousel" data-slide-to="2"></li>
                    </ol>

                    <!-- Wrapper for slides -->
                    <div class="carousel-inner">
                        <div class="item slides active">
                            <div class="slide-1"></div>
                            <div class="hero">
                                <hgroup>
                                    <h1>We Help You Learn What You Love</h1>        
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                                </hgroup>

                            </div>
                        </div>
                        <div class="item slides">
                            <div class="slide-2"></div>
                            <div class="hero">        
                                <hgroup>
                                    <h1>We Help You Learn What You Love</h1>        
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                                </hgroup>       

                            </div>
                        </div>
                        <div class="item slides">
                            <div class="slide-3"></div>
                            <div class="hero">        
                                <hgroup>
                                    <h1>We Help You Learn What You Love</h1>        
                                    <h3>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</h3>
                                </hgroup>

                            </div>
                        </div>
                    </div> 
                </div>

            </div>
            <div class="container boder">
                <div class="row">
                    <div class="col-md-4">
                        <input type="text" class="form-control control_email" placeholder="Write the course name here then choose Time, Category & Country">
                    </div>
                    <div class="col-md-2 today">
                        <div class="dropdown">
                            <span class="old">
                                <select class="" name="course-time" id="course-time" data-settings="{&quot;cutOff&quot;: 7}"style="padding: 10px;
                                        font-size: 15px;">
                                    <option value="" class="label">Time (this month)</option>
                                </select>
                            </span>
                            <span class="carat"></span>
                        </div>
                    </div>
                    <div class="col-md-2 today">
                        <div class="dropdown">
                            <span class="old">
                                <select class="" name="course-time" id="course-time" data-settings="{&quot;cutOff&quot;: 7}"style="padding: 10px;
                                        font-size: 15px;">
                                    <option value="" class="label">Time (this month)</option>
                                </select>
                            </span>
                            <span class="carat"></span>
                        </div>
                    </div>
                    <div class="col-md-2 today">
                        <div class="dropdown">
                            <span class="old">
                                <select class="" name="course-time" id="course-time" data-settings="{&quot;cutOff&quot;: 7}"style="padding: 10px;
                                        font-size: 15px;">
                                    <option value="" class="label">Time (this month)</option>
                                </select>
                            </span>
                            <span class="carat"></span>
                        </div>
                    </div>
                    <div class="col-md-2 timkiem">
                        <div class="search">
                            <input type="submit" class="grad-btn ln-tr" value="Search">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="type-3">
            <div class="container">
                <div class="col-md-12 header">
                    <div class="type">
                        <p>Welcome Dear Visitor in Coursaty</p>
                    </div>
                    <div class="product">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie.</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 class1">
                        <div class="images"
                             style="    text-align: center;">
                            <img src="images/feature-icon-1.png" width="50%" height="50%">
                        </div>
                        <div class="noidungchinh"style="    text-align: center;">
                            <div class="tieude1"><p style="font-size: 20px;
                                                    color: #fe9d68;
                                                    ">Learn Anything Online</p></div>
                            <div class="noidung1"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.</p></div>
                        </div>
                    </div>
                    <div class="col-md-3 class1">
                        <div class="images"style="    text-align: center;">
                            <img src="images/feature-icon-1.png" width="50%" height="50%">
                        </div>
                        <div class="noidungchinh"style="    text-align: center;">
                            <div class="tieude1"><p style="font-size: 20px;
                                                    color: #fe9d68;
                                                    ">Talk to Our Instructors</p></div>
                            <div class="noidung1"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.</p></div>
                        </div>
                    </div>
                    <div class="col-md-3 class1"style="    text-align: center;">
                        <div class="images">
                            <img src="images/feature-icon-1.png" width="50%" height="50%">
                        </div>
                        <div class="noidungchinh"style="    text-align: center;">
                            <div class="tieude1"><p style="font-size: 20px;
                                                    color: #fe9d68;
                                                    ">Communicate with Others</p></div>
                            <div class="noidung1"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.</p></div>
                        </div>
                    </div>
                    <div class="col-md-3 class1"style="    text-align: center;">
                        <div class="images">
                            <img src="images/feature-icon-1.png" width="50%" height="50%">
                        </div>
                        <div class="noidungchinh"style="    text-align: center;">
                            <div class="tieude1"><p style="font-size: 20px;
                                                    color: #fe9d68;
                                                    ">Check for Centers</p></div>
                            <div class="noidung1"><p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing.</p></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="type-4">
            <div class="container border">
                <div class="col-md-12 header">
                    <div class="meet">
                        <p>Meet Our Instructors</p>
                    </div>
                    <div class="lorem">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 image" >
                        <div class="images">
                            <img src="images/feature-icon-1.png" >
                        </div>
                        <div class="back"style="background: #f5f5f5">
                            <div class="name-product"style="    font-size: 23px;
                                 margin: 15px;
                                 font-weight: bold;">
                                Ibrahim Abo Seada
                            </div>
                            <div class="product"style="    font-size: 20px;
                                 margin: 15px;">
                                Web Developer
                            </div>
                            <div class="icon">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 image" >
                        <div class="images">
                            <img src="images/feature-icon-1.png" >
                        </div>
                        <div class="back"style="background: #f5f5f5">
                            <div class="name-product"style="    font-size: 23px;
                                 margin: 15px;
                                 font-weight: bold;">
                                Ibrahim Abo Seada
                            </div>
                            <div class="product"style="    font-size: 20px;
                                 margin: 15px;">
                                Web Developer
                            </div>
                            <div class="icon">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 image" >
                        <div class="images">
                            <img src="images/feature-icon-1.png" >
                        </div>
                        <div class="back"style="background: #f5f5f5">
                            <div class="name-product"style="    font-size: 23px;
                                 margin: 15px;
                                 font-weight: bold;">
                                Ibrahim Abo Seada
                            </div>
                            <div class="product"style="    font-size: 20px;
                                 margin: 15px;">
                                Web Developer
                            </div>
                            <div class="icon">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 image" >
                        <div class="images">
                            <img src="images/feature-icon-1.png" >
                        </div>
                        <div class="back"style="background: #f5f5f5">
                            <div class="name-product"style="    font-size: 23px;
                                 margin: 15px;
                                 font-weight: bold;">
                                Ibrahim Abo Seada
                            </div>
                            <div class="product"style="    font-size: 20px;
                                 margin: 15px;">
                                Web Developer
                            </div>
                            <div class="icon">
                                <i class="fa fa-facebook" aria-hidden="true"></i>
                                <i class="fa fa-twitter" aria-hidden="true"></i>
                                <i class="fa fa-google-plus" aria-hidden="true"></i>
                                <i class="fa fa-linkedin" aria-hidden="true"></i>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="type-5">
            <div class="container">
                <div class="col-md-12 border">
                    <div class="Look">
                        <p>Look at Our Latest Courses</p>
                    </div>
                    <div class="lorem">
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing condimentum tristique vel, eleifend sed turpis. Pellentesque cursus arcu id magna euismod in elementum purus molestie</p>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-3 hinhanh">

                        <div class="image">
                            <img src="images/feature-icon-1.png">
                        </div>
                        <div class="hoverrr">
                            <div class="header">
                                <p>Course Name Here</p>
                            </div>
                            <div class="banner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing</p>
                            </div>
                            <div class="button">
                                <button class="button1"><p1>Read More</p1></button>
                                <button class="button2"><p2>Subscribe</p2></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hinhanh">

                        <div class="image">
                            <img src="images/feature-icon-1.png">
                        </div>
                        <div class="hoverrr">
                            <div class="header">
                                <p>Course Name Here</p>
                            </div>
                            <div class="banner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing</p>
                            </div>
                            <div class="button">
                                <button class="button1"><p1>Read More</p1></button>
                                <button class="button2"><p2>Subscribe</p2></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hinhanh">

                        <div class="image">
                            <img src="images/feature-icon-1.png">
                        </div>
                        <div class="hoverrr">
                            <div class="header">
                                <p>Course Name Here</p>
                            </div>
                            <div class="banner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing</p>
                            </div>
                            <div class="button">
                                <button class="button1"><p1>Read More</p1></button>
                                <button class="button2"><p2>Subscribe</p2></button>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 hinhanh">

                        <div class="image">
                            <img src="images/feature-icon-1.png">
                        </div>
                        <div class="hoverrr">
                            <div class="header">
                                <p>Course Name Here</p>
                            </div>
                            <div class="banner">
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer lorem quam, adipiscing</p>
                            </div>
                            <div class="button">
                                <button class="button1"><p1>Read More</p1></button>
                                <button class="button2"><p2>Subscribe</p2></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="js/javascript.js" type="text/javascript"></script>
</html>
