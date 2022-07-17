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
                <a class="nav-link" href="./promotions.php">最新優惠</a>
              </li>
              <li class="nav-item mx-3">
                <a class="nav-link" href="./about-us.php">關於我們</a>
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


    <div class="row row-cols-1 gx-0  text-center">
      <?php $carQ = mysqli_query($dbConnection, "SELECT * from `car`");
      while($car=mysqli_fetch_assoc($carQ)){
        echo '<div class="col d-flex justify-content-evenly my-4 ">
        <div id="card" class="card mb-3 card-hover" style="max-width: 900px;">
          <div class="row row-cols-1 row-cols-md-2 g-0">
            <div class="col-md-4 d-flex align-items-center">
              <img src="./image/index-img/'.$car['image'].'" class="card-img-top" alt="...">
            </div>
            <div class="col-md-8">
              <div class="card-body">
                <h2 style="font-family: Impact, Haettenschweiler, Arial Narrow Bold, sans-serif;" class="card-title" >'.$car['name'].'</h2>
                <hr>
                <p style="font-size:25px ;text-align: start; font-weight: 450; margin: 0px;">規格：</p>
                <p class="card-text fs-6" style="text-align: start; margin-bottom: 40px;">
                  <br>引擎型式︰'.$car['engine type'].'
                  <br>最大馬力︰'.$car['max_motor_power'].' 匹
                  <br>扭力：'.$car['max_motor_torque'].' Nm
                  <br>電量：'.$car['gross_battery_capacity'].' kWh
                  <br>續航力︰'.$car['electric_range'].' km                      
                  <br>總載客人數︰'.$car['seating'].' 人
                  <br>車身尺寸：'.$car['dimensions'].'
                  <br>車身重量：'.$car['weight'].' kg</p>
                  <hr>
                  <a href="cart.php?pickupTime='.$_GET['pickuptime'].'&returnTime='.$_GET['returntime'].'&pickUpLocation='.$_GET['pickupLocation'].'&returnLocation='.$_GET['returnLocation'].'&car_id='.$car['car_id'].'"><button type="button" class="btn btn-outline-dark">日租︰$'.$car['price'].'</button></a></div></div></div></div></div>';
       }
      ?>
          </div>



    














       </div>


       <?php include("index-footer.php")?>