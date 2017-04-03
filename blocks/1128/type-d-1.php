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

  <div id="maincontainer">
  <section id="product">
    <div class="container">
     <!--  breadcrumb --> 
       
       <header class="heading1">
                  <h1><span class="maintext">Đăng Nhập</span></h1>
        </header>
      <!-- Cart-->
      <article class="table-responsive">
     
        <div class="col-md-12">
          <div class="form-group">
            <form action="type-d-1_submit" method="get" accept-charset="utf-8">
              <h3>ĐĂNG NHẬP NGƯỜI DÙNG</h3>
             
              <label for="">UserName</label>
              <input type="text" class="form-control" id="" placeholder="Nhập UserName">
              <label for="">PassWord</label>
             
              <input type="text" class="form-control" id="" placeholder="Nhập Re-Password">
              <button type="submit"  class="btn btn-primary">Đăng Nhập</button>
            </form>
            
        </div>
        
      
        
        </div>
       

      </article>

     

  

     
  </section>
</div>




    <script src="js/javascript.js" type="text/javascript"></script>
    </body>
</html>
