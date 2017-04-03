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
        $less->compileFile('./less/type-g-3.less', 'css/type-g-3.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-3.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">
    </head>

    <body>
        <div class="type-g-3">

            <!--Begin Header-->
            <header>
                <!--Begin Header Top-->
                <div class="container">
                    <div class="col-md-12">
                        <div class="row">
                            <!--Begin Hotline-->
                            <div class="col-md-4">
                                <article class="free">
                                    <h1><i class="fa fa-phone" aria-hidden="true"></i> HOTLINE: 0934 179 707</i></h1>
                                </article>
                            </div>
                            <!--End Hotline-->

                            <!--Begin Logo-->
                            <div class="col-md-4">
                                <img class="logo img-responsive" src="images/logo.png" alt="logo">
                            </div>
                            <!--End Logo-->

                            <!--Begin Title Header-->
                            <div class="col-md-4">
                                <div class="row">
                                    <div class="col-md-4 title-header">
                                        <a href="#"><i class="fa fa-user" aria-hidden="true"></i> Đăng nhập</a>
                                    </div>
                                    <div class="col-md-4 title-header">
                                        <a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i> Đăng ký</a>
                                    </div>
                                    <div class="col-md-4 title-header">
                                        <a href="#"><i class="fa fa-cart-plus" aria-hidden="true"></i> Giỏ</a>
                                    </div>
                                </div>
                            </div>
                            <!--End Title Header-->
                        </div>
                    </div>
                </div>
                <!--End Header Top-->

                <div class="ruler"></div>

                <!--Begin Header Bot-->
                <div class="container">
                    <div class="row">
                        <!--Begin Nav-->
                        <nav class="navbar navbar-inverse">
                            <!--Begin Nav Header-->
                            <div class="navbar-header">
                                <!--Begin Button-->
                                <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".js-navbar-collapse">
                                    <span class="sr-only">Toggle navigation</span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                                <!--End Button-->
                            </div>
                            <!--End Nav Header-->

                            <!--Begin Collapse-->
                            <div class="collapse navbar-collapse js-navbar-collapse">
                                <!--Begin Navbar-->
                                <ul class="nav navbar-nav">
                                    <!--Begin Dropdown-->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle"><i class="fa fa-home"></i></a>
                                    </li>
                                    <!--End Dropdown-->

                                    <!--Begin Dropdown-->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hoa theo thiết kế<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Hoa bó</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa giỏ</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa khai trương</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa văn phòng</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa bình</a></li>
                                        </ul>
                                    </li>
                                    <!--End Dropdown-->

                                    <!--Begin Dropdown-->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hoa theo chủ đề<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Hoa tình yêu</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa sinh nhật</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa chúc mừng</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa chia buồn</a></li>
                                        </ul>
                                    </li>
                                    <!--End Dropdown-->

                                    <!--Begin Dropdown-->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Hoa cưới<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Hoa cô dâu</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Cổng hoa</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Xe hoa</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa cài áo</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa bàn tiệc</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa trang trí</a></li>
                                        </ul>
                                    </li>
                                    <!--End Dropdown-->

                                    <!--Begin Dropdown-->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Các loai hoa khác<span class="caret"></span></a>
                                        <ul class="dropdown-menu" role="menu">
                                            <li><a href="#">Hoa hộp</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa nhập khẩu</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa sự kiện</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa vip</a></li>
                                            <li class="divider"></li>
                                            <li><a href="#">Hoa đại sảnh</a></li>
                                        </ul>
                                    </li>
                                    <!--End Dropdown-->

                                    <!--Begin Dropdown-->
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle">Liên Hệ</a>
                                    </li>
                                    <!--End Dropdown-->
                                </ul>
                                <!--End Navbar-->

                                <!--Begin Navbar Right-->
                                <ul class="nav navbar-nav navbar-right">
                                    <!--Begin Form-->								
                                    <form action="tim-kiem" method="GET" class="navbar-form navbar-left" role="search">
                                        <div class="form-group">
                                            <input type="text"  class="form-control" placeholder="Search..">
                                        </div>
                                        <button type="submit" class="btn btn-default">
                                            <img src="images/search.png" alt="" width="18px" height="18px">
                                        </button>
                                    </form>
                                    <!--End Form-->
                                </ul>
                                <!--End Navbar Right-->
                            </div>
                            <!--End Collapse-->
                        </nav>
                        <!--End Nav-->
                    </div>
                </div>
                <!--End Header Bot-->

                <div class="ruler1"></div>
            </header>
            <!--End header-->

            <!--Search page-->
            <div class="timkiem">  
                <div class="container">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <!--SEARCH-->
                        <h3 class="section-big">TÌM KIẾM: </h3>              
                        <div class="clear"></div>
                        <!--/END SEARCH-->

                        <div class="row">
                            <!--PRODUCTS-->
                            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="imagesproduct/kBgY_hoa-tuoi-bo-b106-jpg-20150819162815Ikeww5g1S.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="text-content">
                                    <h4><a href="#">GỬI TÌNH YÊU CỦA TÔI HB36</a></h4>
                                    <h4 class="pull-left" style="color: red;">500.000 VND</h4>
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success">
                                        <a href="#" style="color: #fff">Mua</a>
                                    </button>
                                </div>
                            </div>
                            <!--/END PRODUCTS-->

                            <!--PRODUCTS-->
                            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="imagesproduct/kBgY_hoa-tuoi-bo-b106-jpg-20150819162815Ikeww5g1S.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="text-content">
                                    <h4><a href="#">GỬI TÌNH YÊU CỦA TÔI HB36</a></h4>
                                    <h4 class="pull-left" style="color: red;">500.000 VND</h4>
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success">
                                        <a href="#" style="color: #fff">Mua</a>
                                    </button>
                                </div>
                            </div>
                            <!--/END PRODUCTS-->

                            <!--PRODUCTS-->
                            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="imagesproduct/0N6g_tinh-yeu-mi-bh153.jpg" alt="" width="100%" height="100%" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="text-content">
                                    <h4><a href="#">ANH YÊU EM HB35</a></h4>
                                    <h4 class="pull-left" style="color: red;">650.000 VND</h4>
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success">
                                        <a href="#" style="color: #fff">Mua</a>
                                    </button>
                                </div>
                            </div>
                            <!--/END PRODUCTS-->

                            <!--PRODUCTS-->
                            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="imagesproduct/rkeZ_Sac-Mau.jpg" alt="" width="100%" height="100%" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="text-content">
                                    <h4><a href="#">MÙA YÊU HB34</a></h4>
                                    <h4 class="pull-left" style="color: red;">440.000 VND</h4>
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success">
                                        <a href="#" style="color: #fff">Mua</a>
                                    </button>
                                </div>
                            </div>
                            <!--/END PRODUCTS-->

                            <!--PRODUCTS-->
                            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="imagesproduct/xuIz_hoa-tuoi-bo.jpg" alt="" width="100%" height="100%" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="text-content">
                                    <h4><a href="#">SẮC TÍM HB33</a></h4>
                                    <h4 class="pull-left" style="color: red;">350.000 VND</h4>
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success">
                                        <a href="#" style="color: #fff">Mua</a>
                                    </button>
                                </div>
                            </div>
                            <!--/END PRODUCTS-->


                            <!--PRODUCTS-->
                            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="imagesproduct/W7Cs_bo_hoa_7.jpg" alt="" width="100%" height="100%" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="text-content">
                                    <h4><a href="#">TÌNH YÊU KHÔNG LỜI HB32</a></h4>
                                    <h4 class="pull-left" style="color: red;">380.000 VND</h4>
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success">
                                        <a href="#" style="color: #fff">Mua</a>
                                    </button>
                                </div>
                            </div>
                            <!--/END PRODUCTS-->

                            <!--PRODUCTS-->
                            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="imagesproduct/MaGq_tuyen-tap-hinh.jpg" alt="" width="100%" height="100%" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="text-content">
                                    <h4><a href="#">DUYÊN THẦM HB31</a></h4>
                                    <h4 class="pull-left" style="color: red;">400.000 VND</h4>
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success">
                                        <a href="#" style="color: #fff">Mua</a>
                                    </button>
                                </div>
                            </div>
                            <!--/END PRODUCTS-->

                            <!--PRODUCTS-->
                            <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                                <div class="panel">
                                    <div class="panel-body">
                                        <a href="#" class="zoom">
                                            <img src="imagesproduct/ckeR_Chớm-Nở-HB340.jpg" alt="" class="img-responsive">
                                        </a>
                                    </div>
                                </div>
                                <div class="text-content">
                                    <h4><a href="#">ĐẮM SAY HH30</a></h4>
                                    <h4 class="pull-left" style="color: red;">600.000 VND</h4>
                                </div>
                                <div class="btn-group pull-right">
                                    <button type="button" class="btn btn-success">
                                        <a href="#" style="color: #fff">Mua</a>
                                    </button>
                                </div>
                            </div>
                            <!--/END PRODUCTS--> 
                        </div>

                        <div class="row">
                            <!--PAGINATION-->
                            <div class="pagination pull-right">
                                <ul>
                                    <li class="active">
                                        <a href="#">1</a>
                                    </li>
                                    <li class="">
                                        <a href="#">2</a>
                                    </li>
                                    <li class="">
                                        <a href="#">3</a>
                                    </li>
                                    <li class="">
                                        <a href="#">4</a>
                                    </li>
                                    <li><a href="#">Next</a></li>
                                </ul>
                            </div>
                            <!--/END PAGINATION-->
                        </div>

                    </div>
                </div>
            </div>
            <!--End Search page-->

            <!--Begin Footer-->
            <footer class="footer">
                <!--Begin Footer Top-->
                
                    <div class="col-md-12">
                        <div class="row">
                            <!--Begin Footer Title 1-->
                            <div class="col-md-3">
                                <h3>Thông Tin Shop Hoa</h3>
                                <img class="imge" src="images/logo-small-footer.png">
                                <p>
                                    Sed pellentesque, nulla et venenatis vehicula, lacus diam commodo velit, vitae facilisis libero libero sed dui.
                                </p>
                            </div>
                            <!--End Footer Title 1-->

                            <!--Begin Footer Title 2-->
                            <div class="col-md-3">
                                <h3>Thanh Toán Và Vận Chuyển</h3>
                                <ul>
                                    <li>Hình Thức Thanh toán</li>
                                    <li>Hình Thức Vận Chuyển</li>
                                </ul>
                                <img src="images/payement-cards.png">
                            </div>
                            <!--End Footer Title 2-->

                            <!--Begin Footer Title 3-->
                            <div class="col-md-3">
                                <h3>Danh Mục</h3>
                                <div class="row">
                                    <div class="col-md-6">
                                        <p class="menu-button">Hoa Bó</p>
                                        <p class="menu-button">Hoa Sinh Nhật</p>
                                        <p class="menu-button">Hoa Chia Buồn</p>
                                        <p class="menu-button">Hoa Hộp</p>
                                    </div>
                                    <div class="col-md-6">
                                        <p class="menu-button">Hoa Bình</p>
                                        <p class="menu-button">Hoa Khai Trương</p>
                                        <p class="menu-button">Hoa Tình Yêu</p>
                                        <p class="menu-button">Hoa Giỏ</p>
                                    </div>
                                </div>
                            </div>
                            <!--End Footer Title 3-->

                            <!--Begin Footer Title 4-->
                            <div class="col-md-3">
                                <h3>Thông Tin Liên Lạc</h3>
                                <p>Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est.</p>
                                <p><strong>Phone:</strong> (01) 102 902 5400</p>
                                <p><strong>Fax:</strong> (01) 102 902 5400</p>
                                <p><strong>Email:</strong> support@goodstore.com</p>
                            </div>
                            <!--End Footer Title 4-->
                        </div>
                    </div>
               
                <!--End Footer Top-->

                <!--Begin Footer Top-->
                <div class="fotter-bot">
                    <p>Copytright 2016 &copy; Group G</p>  	
                </div>
                <!--End Footer Top-->
            </footer>
            <!--End Footer-->

        </div>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/type-g-1.js"></script>
    </body>
</html>