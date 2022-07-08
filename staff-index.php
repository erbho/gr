<?php include('header.php');?>

<nav class="navbar bg-light">
  <div class="container-fluid">
    <span class="navbar-brand">Navbar</span>
  </div>
</nav>


<h1><?php echo $_SESSION['name']?></h1>
<p><a href="./function.php?op=logout">logout</a></p>