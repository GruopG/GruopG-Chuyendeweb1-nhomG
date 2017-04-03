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
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">
    </head>

    <body>
        <div class="type-g-2">

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

            <!--Page guide-->
            <div class="huongdan">
                <div class="container"> 
                    <h3 class="section-big">HƯỚNG DẪN ĐẶT HÀNG</h3>

                    <!--Guide--> 
                    <div class="row">
                        <div class="col-md-4">
                            <a href="#">
                                <img src="image/bohoa.jpg">
                            </a>
                        </div>
                        <div class="col-md-8">
                            <h1 class="text-left color">
                                Hướng dẫn mua hàng           
                            </h1>
                            <p><strong>   </strong>Quý khách có thể đặt hàng theo một trong các cách sau:</p>
                            <p> 1.<strong>   </strong><strong class="font-style">Đặt hàng trực tiếp:</strong> thông qua chức năng Bán hàng online trên website.</p>
                            <p> 2.<strong>   </strong><strong class="font-style">Đặt hàng thông qua facebook:</strong> Quý khách có thể đặt hàng trực tiếp thông qua nick facebook trên website. Quý khách hãy để lại thông tin liên hệ! Nhân viên kinh doanh sẽ liên hệ với Quý khách ngay khi có thể và chuyển hàng đến cho Quý khách</p>
                            <p> 3.<strong>   </strong><strong class="font-style">Điện thoại trực tiếp:</strong></p>
                            <p><strong>   </strong>- Mr.Kỳ <strong>0913.90.91.92</strong></p>
                            <p><strong>   </strong>- Mr.Dương <strong>0913.90.91.92</strong></p>
                            <p><strong>   </strong>- Mr.Kha <strong>0913.90.91.92</strong></p>
                            <p><strong>   </strong>- Mr.Luân <strong>0913.90.91.92</strong></p>
                            <p>4.<strong>   </strong><strong class="font-style">Mua hàng trực tiếp:</strong> Quý khách hàng có thể đến địa chỉ sau để mua hàng trực tiếp - Mở cửa từ 8h đến 21h00' tất cả các ngày trong tuần:</p>
                            <p><strong>   </strong><strong class="font-style">Showroom:</strong> 129 Âu Cơ, Phường 14, Quận Tân Bình, Thành phố Hồ Chí Minh.</p>
                            <p><strong>   </strong><strong>Giao hàng nhanh chóng và đảm bảo</strong></p>
                            <p>1.<strong>   </strong><strong class="font-style">Trong các quận nội thành Thành phố Hồ Chí Minh:</strong> Đối với quý khách trong các quận nội thành Thành phố Hồ Chí Minh khi mua hàng xin vui lòng liên hệ đặt hàng trước tối thiểu 02 ngày , chúng tôi sẽ giao hàng đến tận nơi không tính chi phí vận chuyển trong nội thành đối với đơn hàng ≥ 700.000 VNĐ (địa điểm cho phép xe 1,5 tấn lưu thông)<br></p>
                            <p>2.<strong>   </strong><strong class="font-style">Các tỉnh thành khác</strong> Đối với các địa chỉ ngoài địa phận Thành phố Hồ Chí Minh. Hàng hóa được gởi thông qua “chành” do khách hàng chỉ định, công ty có chế độ hỗ trợ chi phí vận chuyển cho khách hàng ở các tỉnh xa (vui lòng liên hệ với bộ phận chăm sóc khách hàng để biết thêm chi tiết). Thời gian quý khách nhận được hàng trong khoảng từ 1 đến 3 ngày khi chúng tôi nhận được đơn hàng  của Quý khách hàng.<br></p>
                            <p><strong>   </strong><strong>Hình thức thanh toán:</strong> Sau khi mua hàng, trong quá trình thực hiện thanh toán, quý khách có thể thanh toán bằng những cách sau:</p>
                            <p><strong>   </strong>1.<strong>   </strong>Thanh toán trực tiếp với nhân viên giao hàng đối với khách hàng trong nội thành Thành phố Hồ Chí Minh
                            <p><strong>   </strong>2.<strong>   </strong>Nhân viên của công ty sẽ thu tiền tại chành</p>
                            <p><strong>   </strong>3.<strong>   </strong>Chuyển khoản qua tài khoản ngân hàng (vui lòng thông báo sau khi chuyển tiền thành công)</p>
                            <p>Trân trọng cám ơn Quý khách hàng đã lựa chọn và tin dùng sản phẩm của <strong class="color">Shop Hoa Xinh  </strong>.</p>                        
                        </div>
                    </div>
                </div>
            </div>
            <!--End Guide--> 

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