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
            $less->compileFile('./less/type-1.less', 'css/type-1.css');
        ?>
        <link rel="stylesheet" type="text/css" href="css/type-1.css">
        <link rel="stylesheet" type="text/js" href="js/bootstrap.min.js">

    </head>

    <body>
        
         <!--Introduction page-->
         <div class="type-1">  
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
    </body>
</html>
