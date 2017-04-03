<!DOCTYPE html>

<html>
    <head>

        <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
        <?php
            if (!class_exists('lessc')) {
                include ('./libs/lessc.inc.php');
            }
            $less = new lessc;
            $less->compileFile('./less/type-2.less', 'css/type-2.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-2.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">

    </head>

    <body>
        <!--Page guide-->
        <div class="type-2">  
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
                <!--End Guide--> 
                
            </div>
        </div>
        <!--End Page guide-->
          
    </body>
</html>
