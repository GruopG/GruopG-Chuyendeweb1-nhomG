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
        <header>
            


            <div class="clearfix"></div>

            <!---------------banner----------->

            <div class="mod-danhsach">
                <div class="container">
                    <div class="header">
                        <div class="row">
                            <div class="col-md-12 left">
                                <p1>Đối Tác ShopHoaXinh</p1>
                                <div class="row">
                                    <p> Chúng tôi ShopHoaXinh kinh doanh các mặt hàng bán hoa sỉ và lẻ cho các doanh nghiệp tư nhân vừa và nhỏ. Nhận đặt hoa và thanh toán bằng Thẻ tín dụng như:</p>


                                    <div class="col-lg-4 col-md-4 col-sm-6 text-center">

                                        <img  src="images/agribaks.jpg" alt="" width="320px" height="220px">

                                    </div>

                                    <div class="col-lg-4 col-md-4 col-sm-6 text-center">

                                        <img src="images/viettin.jpg" alt="" width="320px" height="220px">                                               

                                    </div>
                                    <div class="col-lg-4 col-md-4 col-sm-6 text-center">

                                        <img src="images/đông á.png" alt="" width="320px" height="220px">                                               

                                    </div>


                                    <div class="col-md-12 center">
                                        <p1> ShopHoaXinh </p1>

                                        <p>Chúng Tôi tạo điều kiện cơ hội việc làm ngoài giờ (Làm thêm , Bán Thời Gian)cho tất cả mọi người từ sinh viên đến công nhân, nhân viên văn phòng.
                                        </p>
                                        <p>
                                            ShopHoaXinh hiện tại lấy hoa từ thành phố Đà Lạt hoặc nhập khẩu từ các nước như: Hà Lan, Pháp.....
                                            Nhằm đáp ứng nhu cầu ngày một nhiều của khách hàng.</p>

                                        <img src="images/dalat.jpg"/>
                                        <p>
                                            Chúng tôi ShopHoaXinh đặt biệt chú trọng đến nhu cầu thị yếu , chất lượng của mỗi sản phẩm đến tay khách hàng của ShopHoaXinh. 
                                        </p>
                                        <p> Liên hệ với các trung tâm giới thiệu việc làm nhằm hướng tới những người muốn có công việc, việc làm tạo điều kiện tốt nhất cho nhân viên để theo học và làm việc tại ShopHoaXinh</p>
                                        <p>Sự hài lòng trên từng sản phẩm là nguồn động lực lớn cho chúng tôi ShopHoaXinh và ngày càng phát triển cải thiện chất lượng sản phẩm theo từng ngày.</p>
                                    </div>


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="clearfix"></div>

        </header>
        <script type="text/javascript" src="js/jquery-3.1.1.min.js"></script>
        <script type="text/javascript" src="js/bootstrap.min.js"></script>
        <script type="text/javascript" src="js/type-g-1.js"></script>
    </body>
</html>