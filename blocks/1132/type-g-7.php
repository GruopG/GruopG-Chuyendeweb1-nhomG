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

        <title>Bootstrap 101 Template</title>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>

        <script src="js/jquery.min.js" type="text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>

    </head>
    <body>
    
          <div class ="type-g-7">
            <section id="product">
            <div class="container">
             <!--  breadcrumb --> 
               
               <header class="heading1">
                          <h1><span class="maintext"> GIỎ HÀNG</span></h1>
                </header>
      <!-- Cart-->
      <article class="cart-info table-responsive">
      
        <table class="table table-striped table-bordered">
          <tr>
            <th class="image">Hình Ảnh</th>
            <th class="name">Tên Sản Phẩm</th>
            
            <th class="quantity">Số Lượng</th>
              <th class="total">Cập nhật & Xóa</th>
            <th class="price">Đơn Giá</th>
            <th class="total">Tổng Giá</th>
           
          </tr>
          <form action="" method="POST">
              <input type="hidden" name="_token" value="{!! csrf_token() !!}"/>
          
         

           <tr>
            <td class="image"><a href="#"><img title="product" alt="product" src="images/hoa1.jpg" height="50" width="50"></a></td>
            <td  class="name"><a href="#">hoa</a></td>
           
            <td class="quantity"><input  type="text" size="1" value='1' name="quantity[40]">
             
             </td>
             <td class="total"> <a id=""><img  data-original-title="Update" src="images/update.png" alt=""></a>
              <a href=""><img  data-original-title="Remove"  src="images/remove.png" alt=""></a></td>
           
             
            <td class="price">200.000 VND</td>
            <td class="total">200.000 VND</td>

             
          </tr>

        
        </table>

      </article>

      <div class="container">
      <div class="pull-right">
          <div class="pull-right">
            <table class="table table-striped table-bordered ">
                            
              <tr>
                <td><span class="bold totalamout">Tổng Tiền :</span></td>
                <td><span class="bold totalamout">200.000 VND</span></td>
              </tr>
            </table>
                  

            <button type="button" id="btn" class="btn btn-orange pull-right">CheckOut</button>
          
            <a href=""><button type="button" class="btn btn-orange pull-right mr10">Tiếp Tục Mua</button></a>
          
          </div>
      </div>
      </div>
<div class="an" style="display: none;">
  

     <div class="col-md-6">
          <div class="form-group">
            <h3>THÔNG TIN NGƯỜI MUA</h3>
            <label for="">Họ và Tên</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Họ Tên">
            <label for="">Điện Thoại</label>
            <input type="text" class="form-control" id="" placeholder="Nhập số Điện Thoại">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Email">
            <label for="">Dịa Chỉ</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Địa Chỉ">
          </div>
        </div>

        <div class="col-md-6">
          <div class="form-group">
            <h3>THÔNG TIN NGƯỜI NHẬN</h3>
            <label for="">Họ và Tên</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Họ Tên">
            <label for="">Điện Thoại</label>
            <input type="text" class="form-control" id="" placeholder="Nhập số Điện Thoại">
            <label for="">Email</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Email">
            <label for="">Dịa Chỉ</label>
            <input type="text" class="form-control" id="" placeholder="Nhập Địa Chỉ">
          </div>
        </div>
        
      <button type="submit"  class="btn btn-primary">Submit</button>
        
      
        
        </div>

 </form>


    </div>
  </section>
</div>
    <script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
