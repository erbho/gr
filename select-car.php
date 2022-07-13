<?php include("index-header.php");?>

<div class="bgColor"><br><br>

 

    <nav class="navbar navbar-expand-lg navBg">   
        <div class="container-fluid d-flex justify-content-end">
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
          <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav fw-bold fs-5 me-5">
              <li class="nav-item mx-3">
                <div class="d-flex justify-content-center">
                  <img src="./image/index-img/nav-car.png" alt="nav-car" class="nav-car d-none d-lg-inline-block">
                </div>
                <a class="nav-link active" aria-current="page" href="./index.php">租車</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" aria-current="page" href="./flow.php">租車流程</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="./promotions.html">最新優惠</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="./about-us.html">關於我們</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="./contact-us.php">聯絡我們</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>

      <div class="logo">
          <a href="./Schedule.html"><img src="./image/index-img/round_logo.png" alt="green rental logo" class="greenRentalLogo"></a>
        </div>


      <div class="row gx-0 d-flex flex-column flex-sm-row">
      
        <div class="col-2">
      
          <img src="./image/index-img/building.png" alt="building" class="building-img d-none d-md-block">
      
          
          <div class="container d-flex justify-content-center dropend" style="padding-top: 20px;">
            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown"
              aria-expanded="false">
              選擇品牌
            </button>
            <ul class="dropdown-menu dropdown-menu-dark text-center" aria-labelledby="dropdownMenuButton2">
              <li><a class="dropdown-item active mb-2" href="#">Audi</a></li>
              <li><a class="dropdown-item mb-2" href="#">BMW</a></li>
              <li><a class="dropdown-item mb-2" href="#">Mercedes Benz</a></li>
              <li><a class="dropdown-item mb-2" href="#">Nissan</a></li>
              <li><a class="dropdown-item mb-2" href="#">Tesla</a></li>
              <li><a class="dropdown-item" href="#">Toyota</a></li>
            </ul>
          </div>
            

      
        </div>
      

        <div class="col car-items mb-5">


          <!-- <div class="mb-3  d-flex justify-content-center fw-bold">
            <label for="staticPupTime" class="col-sm-2 col-form-label">預訂日期及時間:</label>
            <div class="d-flex d-column d-md-row">
              <input type="datetime-local" readonly class="form-control-plaintext" id="staticPupTime" class="fw-bold" value="<?php echo $_GET['pickuptime']?>">
              <input type="datetime-local" readonly class="form-control-plaintext" id="staticPupTime" class="fw-bold" value="<?php echo $_GET['returntime']?>">
            </div>
          </div> -->


          <div class="row row-cols-1 gx-0  text-center">
            <div class="col d-flex justify-content-evenly my-4">
              <div class="card mb-3" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-2 g-0">
                  <div class="col-md-4 d-flex align-items-center">
                    <img src="./image/index-img/audi.png" class="card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" class="card-title" >Audi RS E-tron GT</h2>
                      <hr>
                      <p style="font-size:25px ;text-align: start; font-weight: 450; margin: 0px;">規格：</p>
                      <p class="card-text fs-6" style="text-align: start; margin-bottom: 40px;">
                        <br>引擎型式︰永磁同步馬達
                        <br>最大馬力︰476 匹（Boost 530 匹）
                        <br>扭力：630 Nm（Boost 640 Nm）
                        <br>電量：93.4 kWh
                        <br>續航力︰488 km                      
                        <br>總載客人數︰5 人
                        <br>車身尺寸：4989 mm x 1964 mm x 1413 mm
                        <br>車身重量：2276 kg</p>
                        <hr>
                        <a href="cart.php"><button type="button" class="btn btn-outline-dark">日租︰$3090</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col d-flex justify-content-evenly my-4">
              <div class="card mb-3" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-2 g-0">
                  <div class="col-md-4 d-flex align-items-center">
                    <img src="./image/index-img/benz.avif" class="card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" class="card-title" >Mercedes-Benz EQA 250</h2>
                      <hr>
                      <p style="font-size:25px ;text-align: start; font-weight: 450; margin: 0px;">規格：</p>
                      <p class="card-text fs-6" style="text-align: start; margin-bottom: 40px;">
                        <br>引擎型式︰前電動馬達 Asynchronous Motor (ASM)
                        <br>最大馬力︰190 匹
                        <br>扭力：375 Nm
                        <br>電量：66.5 kWh
                        <br>續航力︰426 km
                        <br>總載客人數︰5 人
                        <br>車身尺寸：4463 mm x 1834 mm x 1620 mm
                        <br>車身重量：2040 kg
                        <hr>
                        <a href="Cart.html"><button type="button" class="btn btn-outline-dark">日租︰$1290</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col d-flex justify-content-evenly my-4">
              <div class="card mb-3" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-2 g-0">
                  <div class="col-md-4 d-flex align-items-center">
                    <img src="./image/index-img/bmw.png" class="card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" class="card-title" >BMW THE i4</h2>
                      <hr>
                      <p style="font-size:25px ;text-align: start; font-weight: 450; margin: 0px;">規格：</p>
                      <p class="card-text fs-6" style=" text-align: start; margin-bottom: 40px;">
                        <br>引擎型式︰前及後軸雙摩打「4WD」
                        <br>最大馬力︰544 匹
                        <br>扭力：795 Nm
                        <br>電量：80 kWh
                        <br>續航力︰521 km
                        <br>總載客人數︰5 人
                        <br>車身尺寸：4783 mm x 1852 mm x 1448 mm
                        <br>車身重量：2215 kg
                        <hr>
                        <a href="Cart.html"><button type="button" class="btn btn-outline-dark">日租︰$1290</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
           
            <div class="col d-flex justify-content-evenly my-4">
              <div class="card mb-3" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-2 g-0">
                  <div class="col-md-4 d-flex align-items-center">
                    <img src="./image/index-img/nissan.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" class="card-title" >Nissan LEAF</h2>
                      <hr>
                      <p style="font-size:25px ;text-align: start; font-weight: 450; margin: 0px;">規格：</p>
                      <p class="card-text fs-6" style=" text-align: start; margin-bottom: 40px;">
                        <br>引擎型式︰同步三相交流電動馬達、前置電動馬達
                        <br>最大馬力︰150 匹
                        <br>扭力：320Nm
                        <br>電量：40 kWh
                        <br>續航力︰311 km
                        <br>總載客人數︰5 人
                        <br>車身尺寸：4480 mm x 1790 mm x 1540 mm
                        <br>車身重量：1544 kg
                        <hr>
                        <a href="Cart.html"><button type="button" class="btn btn-outline-dark">日租︰$890</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <div class="col d-flex justify-content-evenly my-4">
              <div class="card mb-3" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-2 g-0">
                  <div class="col-md-4 d-flex align-items-center">
                    <img src="./image/index-img/model y.jpg" class="card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" class="card-title" >Tesla Model Y</h2>
                      <hr>
                      <p style="font-size:25px ;text-align: start; font-weight: 450; margin: 0px;">規格：</p>
                      <p class="card-text fs-6" style=" text-align: start; margin-bottom: 40px;">
                        <br>引擎型式︰交流感應摩打，液體冷卻，帶變頻驅動
                        <br>最大馬力︰239 匹
                        <br>扭力：430 Nm
                        <br>電量：50 kWh
                        <br>續航力︰455 km
                        <br>總載客人數︰5 人
                        <br>車身尺寸：4750 mm x 1920 mm x 1624 mm
                        <br>車身重量：1588 kg
                        <hr>
                        <a href="Cart.html"><button type="button" class="btn btn-outline-dark">日租︰$1090</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
 
            <div class="col d-flex justify-content-evenly my-4">
              <div class="card mb-3" style="max-width: 900px;">
                <div class="row row-cols-1 row-cols-md-2 g-0">
                  <div class="col-md-4 d-flex align-items-center">
                    <img src="./image/index-img/toyota.png" class="card-img-top" alt="...">
                  </div>
                  <div class="col-md-8">
                    <div class="card-body">
                      <h2 style="font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;" class="card-title" >Toyota RAV4 電動版</h2>
                      <hr>
                      <p style="font-size:25px ;text-align: start; font-weight: 450; margin: 0px;">規格：</p>
                      <p class="card-text fs-6" style="text-align: start; margin-bottom: 40px;">
                        <br>引擎型式︰前及後軸雙摩打「4WD」
                        <br>最大馬力︰214 匹
                        <br>扭力：420 Nm
                        <br>電量：71.4 kWh
                        <br>續航力︰460 km
                        <br>總載客人數︰5 人
                        <br>車身尺寸：4,690mm x 1,860mm x 1,650mm
                        <br>車身重量：2005 kg
                        <hr>
                        <a href="Cart.html"><button type="button" class="btn btn-outline-dark">日租︰$1090</button></a>
                    </div>
                  </div>
                </div>
              </div>
            </div>

         </div>



       </div>


       <?php include("index-footer.php")?>