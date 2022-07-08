<?php include('header.php')?>


<div style="background-color:rgb(213, 213, 213);">




<nav class="navbar bg-light">
  <div class="container">
    <a class="navbar-brand" href="#">
      <img src="./image/index-img/logo.png" alt="" width="150" height="auto">
    </a>
  </div>
</nav>


<div class="form-wapper bg-white container my-5 w-50" style="--bs-bg-opacity:.8"> 

<form class="container py-5 " action="./function.php?op=checkLogin" method="post">
  <h1 class="text-center py-3">Staff Login</h1>

  <div class="mb-3 d-flex justify-content-center align-items-center py-3">
    <label for="username" class="form-label fw-bold">Username:</label>
    <input type="text" class="form-control ms-2 w-50" id="username" name="username" required>
  </div>

  <div class="mb-3 d-flex justify-content-center align-items-center py-3">
    <label for="password" class="form-label fw-bold">Password:</label>
    <input type="password" class="form-control ms-2 w-50" id="password" name="password" required>
  </div>

  <div class="mb-3 form-check py-3 w-50" style="margin: auto;">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">I'm not a robot</label>
  </div>
  
  <div class="d-flex justify-content-center">
    <input type="submit" class="submitBtn p-4 py-2 fw-bold">
  </div>
</form>

</div>






<?php include('staff-footer.php')?>
</div>