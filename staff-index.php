<?php include('header.php');?>

<nav class="navbar container-fluid">
    <div class="navbar-brand staff-footer-companyName">
      <h2 class="fw-bolder">Green-Rental Intranet</h2>
    </div>
</nav>



<h1><?php echo $_SESSION['name']?></h1>
<p><a href="./function.php?op=logout">logout</a></p>