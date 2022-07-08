<?php include('header.php');?>

<nav class="navbar container-fluid d-flex justify-content-between ms-2">
    <div class="navbar-brand staff-footer-companyName ">
      <img src="./image/index-img/round_logo.png" alt="green rental logo" class="staff-greenRentalLogo">
      <h2 class="fw-bolder d-inline-block">Green-Rental CMS</h2>
    </div>

    <!-- <div><i class="fa-solid fa-circle-user fa-3x me-5" style="color:rgb(73, 73, 151)"></i></div> -->
    <div>
      <a class="btn btn-primary" data-bs-toggle="offcanvas" href="#offcanvasExample" aria-controls="offcanvasExample" style="background-color:#fff;border: 0;">
        <i class="fa-solid fa-circle-user fa-3x me-5" style="color:rgb(73, 73, 151)"></i>
      </a>
      <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
        <div class="offcanvas-header">
          <h5 class="offcanvas-title" id="offcanvasExampleLabel">
            <i class="fa-solid fa-circle-user fa-3x me-5" style="color:rgb(73, 73, 151)"></i></h5>
          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body">
          <div>
            <a href="./function.php?op=logout">logout</a>
          </div>
        </div>
      </div>
    </div>

</nav>



<p><a href="./function.php?op=logout">logout</a></p>


<?php include('staff-footer.php');?>