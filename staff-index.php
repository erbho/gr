<?php include('header.php');

if(!isset($_SESSION['name']))
header("location: ./staff-login.php");
?>

<nav class="navbar container-fluid d-flex justify-content-between ms-2 mt-2">
    <div class="navbar-brand staff-footer-companyName ">
      <img src="./image/index-img/round_logo.png" alt="green rental logo" class="staff-greenRentalLogo">
      <h2 class="fw-bolder d-inline-block" style="color: rgb(41, 119, 101)">Green-Rental CMS</h2>
    </div>

  
    <div>

      <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample" style="background-color:#fff;border: 0;">
        <i class="fa-solid fa-circle-user fa-3x me-5" style="color:rgb(73, 73, 151)"></i>
      </a>

      <div class="offcanvas offcanvas-end rounded-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>

        <div class="offcanvas-body">
          <div>
            <div class="row mb-3 my-3">
              <i class="fa-solid fa-circle-user fa-6x me-5 col-12 d-flex justify-content-center mb-4" style="color:rgb(73, 73, 151)"></i>
              <h2 class="col-12 text-center"><?php echo $_SESSION['name'];?></h2>
              <p class="col-12 text-center"><?php echo $_SESSION['email'];?></p>
            </div><hr>

            <div class="row py-5 container-fluid my-5">
              <div class="col-4 staff-info-manageAccount d-flex align-items-center fw-bold fs-5">Manage Your Account</div>
              <div class="col staff-info-manageAccount-op d-flex align-items-center justify-content-center">
                <div>
                  <a href="./function.php?op=resetPassword"><button class="d-block my-4 staff-resetPasswordBtn p-2 fw-bold">Reset Password</button></a>
                  <a href="./function.php?op=logout"><button class="d-block my-4 w-100 staff-logoutBtn p-2 fw-bold">Logout</button></a>
                </div>
              </div>
            </div>

            <div class="staff-info-company">
              <p class="text-center">Green-Rental Company CMS</p>
            </div>

          </div>
        </div>
      </div>
    </div>

</nav><hr>

<div class="d-flex align-items-start my-5 container-fluid">

  <div class="nav flex-column nav-pills me-3" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <button class="nav-link active my-3" id="v-pills-home-tab" data-bs-toggle="pill" data-bs-target="#v-pills-home"
      type="button" role="tab" aria-controls="v-pills-home" aria-selected="true">Customer Order</button>
    <button class="nav-link my-3" id="v-pills-profile-tab" data-bs-toggle="pill" data-bs-target="#v-pills-profile"
      type="button" role="tab" aria-controls="v-pills-profile" aria-selected="false">Product List </button>
    <button class="nav-link my-3" id="v-pills-messages-tab" data-bs-toggle="pill" data-bs-target="#v-pills-messages"
      type="button" role="tab" aria-controls="v-pills-messages" aria-selected="false">Messages</button>


  </div>




  <div class="tab-content container-fluid" id="v-pills-tabContent">
    <!--------- nav content-1 ----------->
    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab"
      tabindex="0">
      <div class="card mb-3" style="max-width: 700px; margin: auto;">
        <div class="row g-0">
          <div class="col-md-8">
            <div class="card-body">
              <h5 class="card-title">Order Number:</h5>
              <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content.
                This content is a little bit longer.</p>
            </div>
          </div>
          <div class="col-md-4">
            <img src="..." class="img-fluid rounded-start" alt="...">
          </div>
        </div>
      </div>
    </div>




    <!--------- nav content-2 ----------->
    <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab" tabindex="0">
      ...</div>






    <!--------- nav content-3 ----------->
    <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab"
      tabindex="0">...</div>
  </div>
</div>

<?php include('staff-footer.php');?>