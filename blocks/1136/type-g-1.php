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
        $less->compileFile('./less/type-g-1.less', 'css/type-g-1.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-g-1.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">
    </head>

    <body>
        <div class="type-g-1">

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

            <!--Introduction page-->
            <div class="gioithieu">
                <div class="container"> 
                    <h3 class="section-big">GIỚI THIỆU SHOP HOA XINH</h3>
                    <!--introduce-->
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#">
                                <img src="image/bohoa.jpg">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <h1 class="text-left color">
                                Giới thiệu           
                            </h1>
                            <p><strong>Hoa tươi </strong>từ lâu đã được coi như là thông điệp của tình yêu, là một phần quan trong trong cuộc sống. Không có<strong> </strong>hoa<strong> </strong>cuộc sống cũng có thể là những chuỗi ngày vô vị, bộn bề và ưu tư.</p>
                            <p> <strong class="color">Shop Hoa Xinh</strong> sẽ là cầu nối để kết nối những tình cảm thân yêu của bạn, làm vững bền mối thâm giao bằng hữu tạo dựng đẳng cấp và phong cách khác biệt trong cuộc sống và công việc hay để chia ngọt sẻ bùi, gửi gắm tâm tư ...</p>
                            <p>Dù bạn đang ở đâu chỉ cần 1 thao tác click “chuột” , hoặc 1 cuộc điện thoại, Bạn sẽ hoàn toàn yên tâm để chúng tôi có thể thay bạn mang đến niềm vui cho những người thân yêu, bạn bè, đối tác…của bạn.Cũng chỉ một thao tác bạn đã có một bó hoa tươi thắm, một giỏ trái cây tươi mới thể hiện sự quan tâm, chăm sóc … hay một bức thiệp xinh xắncùng nhửng lời chúc ngọt ngào dành tặng người thân, những người đặc biệt mà không phải tốn nhiều chi phí, thời gian , không phải lo lắng bạn đang ở xa.</p>
                            <p><strong></strong>Hãy liên với <strong class="color">Shop Hoa Xinh  </strong>để được chia sẻ và chăm sóc những điều quan tâm của các bạn với mọi người ở khắp nơi mà không tốn nhiều thời gian và mức chi phí hợp lí.</p> 
                        </div>
                    </div>
                    <!--/END Introduce-->

                    <!--Service-->
                    <div class="row ">
                        <div class="col-md-8">
                            <h3><strong>Các dịch vụ về hoa tươi gồm có :</strong></h3>
                            <p>- Hoa văn phòng<br />
                                - Hoa khai trương<br />
                                - Hoa hội nghị<br />
                                - Hoa cưới (xe hoa , cổng hoa, hoa cô dâu)<br />
                                - Hoa chúc mừng (sinh nhật, lễ , tết…)<br />
                                - Hoa tình nhân<br />
                                - Hoa chia buồn<br />
                                - Giỏ hoa & các quà tặng khác</p>
                            <p><strong class="color">Shop Hoa Xinh </strong>cung cấp dịch vụ điện hoa phục vụ khách hàng trên phạm vi toàn quốc, để gửi tặng những người thân yêu của bạn những bó hoa tươi lung linh sắc màu hãy liên hệ với ShopHoaXinh.com</p>
                            <hr>
                        </div>
                        <div class="col-md-4 ">
                            <a href="#">
                                <img src="image/khoesac.jpg">
                            </a>
                        </div>
                    </div>
                    <!--END Service-->

                </div>
            </div>
            <!--End Introduction page-->

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