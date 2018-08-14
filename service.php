<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/theme1.css">
    <title>Hello
      
    </title>
  
  </head>
  
  <body>
    <?php
        require_once"navbar.php";
     ?>
    <section class="form-style-7 p-relative bg-dark1 cwhite pt-5 service-font">
    <div class="container">
    <div class="row">
  
      <div class="col-10 mx-auto p-4">
        <div class="row">
          <div class="col-12 my-3">
            <h2 class="font-title bolder text-center mb-5 uppercase" >ติดต่อสอบถาม<div class="mline bg-warning"></div></h2></div>
            <div class="col-md-6 col-12">
              <h6 class="uppercase my-3 font-title">ที่อยู่</h6>
              <p class="mb-5 ">264/1 หมู่ที่ 7 ตำบลล้อมแรด อำเภอเถิน จังหวัดลำปาง</p>
              <h6 class="uppercase my-3 font-title">เบอร์โทรติดต่อ</h6>
              <p class="mb-5"><i class="fa fa-phone mr-2"></i>08-2758-6671<br><i class="fa fa-envelope mr-2"></i> info@example.com</p>
              <h6 class="uppercase my-3 font-title">Social</h6>
              <a class="p-2 m-2 bg-white"><i class="fa fa-facebook cdark"></i></a>
              <a class="p-2 m-2 bg-white"><i class="fa fa-google cdark"></i></a>
              <a class="p-2 m-2 bg-white"><i class="fa fa-twitter cdark"></i></a>
              <a class="p-2 m-2 bg-white"><i class="fa fa-linkedin cdark"></i></a>
            </div>
            <div class="col-md-6 col-12 my-3">
              <form>
                <div class="form-group">
                  <label>ชื่อ   </label>
                  <input type="text" class="form-control flat  ">
                </div>
                <div class="form-group">
                  <label>อีเมล์ หรือ เบอร์โทร</label>
                  <input type="email" class="form-control flat  ">
                </div>
                <div class="form-group">
                  <label>คำถาม</label>
                  <textarea class="form-control flat " rows="4"></textarea>
                </div>
                <div class="form-group ">
                  <button type="submit" class="btn btn-warning"><i class="fa fa-paper-plane mr-2"></i>ส่ง</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        
    </div>
  
  </div>
  </section>
    <?php
        require_once"footer.php";
    ?>
            
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="node_modules/lightbox2/dist/js/lightbox.min.js"></script>
    <script src="Js/caleandar.js"></script>
    <script src="Js/test.js"></script>
    <!--<script src="node_modules/popper.js/dist/popper.min.js"></script>-->
    
  </body>
</html>