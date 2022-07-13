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
                  <img src="./image/index-img/round_logo.png" alt="green rental logo" class="greenRentalLogo">
                </div>
        
                <div class="container mt-5">
                <table class="table table-bordered">
                  <thead>
                    <tr>
                      <th class="m-0 py-3" scope="col"><h5>預訂車輛：</h5></th>
                      <th class="m-0 py-3" scope="col" ><h5>日期：</h5></th>
                      <th class="m-0 py-3" scope="col"><h5>價錢：</h5></th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr>
                      <th scope="row">
                          <img src="./image/index-img/audi.png" width="300px"> 
                          <p style="font-size: 20px;">Audi RS e-tron GT</p>                
                      </th>
                      <td>12/07/2022 - 16/07/2022</td>
                      <td style ="text-align: right;">$3,090</td>
                    </tr>

                    <tr>
                      <th class="m-0 py-4" style="text-align:right" scope="row" colspan="3" > 
                      <h5>租車費 $3,090</h5>
                      </th>
                    </tr>
                  </tbody>
                  </table>
                </div>

                <div class="container py-3 w-75 my-5" style="border: 1px solid rgb(233, 231, 231); background-color: rgba(218, 220, 220,1); border-radius: 15px;">
                  
                  
                  <form class="w-75" style="margin:auto" action="./function.php?op=createOrder" method="post">

                <h5 class="m-0 py-4">個人資料：</h5>
                  <div class="row">
                    <div class=" col form-floating mb-4">
                      <input type="Name" class="form-control" id="floatingInput" placeholder="姓名">
                      <label class="ms-2" for="floatingInput">姓名：</label>
                    </div>
                    <div class="col form-floating mb-4">
                      <input  type="Phone" class="form-control" id="floatingInput" placeholder="電話">
                      <label class="ms-2" for="floatingInput">電話：</label>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-8 form-floating mb-4">
                      <input type="email" class="form-control" id="floatingInput" placeholder="name@example.com">
                      <label class="ms-2" for="floatingInput">Email：</label>
                    </div>
                    <div class="col form-floating mb-4">
                      <input type="IDno" class="form-control" id="floatingInput" placeholder="身份證號碼">
                      <label class="ms-2" for="floatingInput">身份證號碼：</label>
                    </div>
                  </div>

                    <div class="form-floating">
                      <input style="height: 310px; margin-bottom: 20px;" type="Remark" class="form-control" id="floatingInput" placeholder="備註">
                      <label for="floatingPassword">備註：</label>
                    </div>

                    
                    
                    <div class="container d-flex justify-content-end">
                      <button style="margin: 10px; width:100px;" type="reset" class="btn btn-primary">重設</button>
                      <button style="margin: 10px ;width:100px;" type="submit" class="btn btn-dark nextbutton">確認訂單</button>
                  
                      </div>
                  </form>

                  </div>

                  </div>

<?php include("index-footer.php")?>