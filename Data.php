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
    <section class="bg-dark1 data-font pt-5 ">
    <div class="container text-center">
      <div class="row">
        <div class="col-md-4"></div>
        <div class="col-md-4" >
        <form>
                <table class="table">
                        <thead class="table-primary text-center text-light">
                          <tr>
                            <td>ข้อมูลกองทุน</td>
                            
                         </tr>
                        </thead>
                        <tbody>
                            <tr class="table-light">
                              <td class="text-center">อำเภอ
                                 <div class="col-12 p-0">
                                      <input class="effect-8" type="text" placeholder="Placeholder Text">
                                        <span class="focus-border">
                                          <i></i>
                                        </span>
                                      </div>
                              </td>
                              
                            </tr>
                         
                          </tbody>
                      </table>
                
        </form>
      </div>
      
      <div class="col-md-4"></div>
      </div>  
    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-4">

        </div>
        <div class="col-md-4">
            <table class="table">
                <thead class="table-primary text-center text-light">
                  <tr>
                    <td  colspan="2" >ค้นหา</td>
                    
                 </tr>
                </thead>
                <tbody>
                    <tr class="table-light">
                      <td  colspan="2"  class="text-center">
                         <div class="col-12 p-0">
                              <input class="effect-8" type="text" placeholder="Placeholder Text">
                                <span class="focus-border">
                                  <i></i>
                                </span>
                              </div>
                      </td>
                      
                    </tr>
                    <tr class="text-center table-ligh">
                      <td><button type="button" class="btn btn-outline-primary">ตกลง</button></td>
                      <td><button type="button" class="btn btn-outline-primary">เคลียร์</button></td>
                    </tr>
                    
                 
                  </tbody>
              </table>
          </div>
          <div class="col-md-4">

            </div>
      </div>

    </div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
            <form>
                <table class="table">
                        <thead class="table-primary text-center text-light">
                          <tr>
                            <td>รหัส</td>
                            <td>ชื่อกองทุน</td>
                            <td>ชื่อประธาน</td>
                            <td>เบอร์โทร</td>
                            <td>รายละเอียด</td>
                         </tr>
                        </thead>
                        <tbody>
                            <tr class="table-light text-center text-primary">
                              <td>100004680</td>
                              <td>กองทุนสวัสดิการชุมชนเทศบาลเมืองเขลางค์นคร</td>
                              <td>นางสาวแสงดาว จันทบ</td>
                              <td>081-9545211</td>
                              <td>รายละเอียด</td>
                            </tr>
                            
                         
                          </tbody>
                      </table>
                
        </form>
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