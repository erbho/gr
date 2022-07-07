<?php include('header.php')?>

    




<form class="container w-50 my-5" action="./function.php?op=checkLogin" method="post">
  <h1 class="text-center py-3">Staff Login</h1>

  <div class="mb-3 d-flex justify-content-center align-items-center py-3">
    <label for="username" class="form-label">Username:</label>
    <input type="text" class="form-control ms-2" id="username" name="username" required>
  </div>

  <div class="mb-3 d-flex justify-content-center align-items-center py-3">
    <label for="password" class="form-label">Password:</label>
    <input type="password" class="form-control ms-2" id="password" name="password" required>
  </div>

  <div class="mb-3 form-check py-3">
    <input type="checkbox" class="form-check-input" id="exampleCheck1" required>
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  
  <div class="d-flex justify-content-center">
    <input type="submit">
  </div>
</form>



<?php include('footer.php')?>