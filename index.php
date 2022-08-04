<?php include("index-header.php");?>


    <body>    
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
                          <img src="./image/index-img/navcar.png" alt="navcar" class="navcar d-none d-lg-inline-block">
                        </div>
                        <a class="nav-link active" aria-current="page" href="#">租車</a>
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
                  <img style="z-index:2 ;" src="./image/index-img/round_logo.png" alt="green rental logo" class="greenRentalLogo">
              </div>
                
                <div>
                  <img width="100%" style="position: relative;z-index: 1;"
                  src="./image/index-img/Startjourney.jpg" alt="Telephone poster" class="img-fluid">
                </div>

                <br>
                <h1 style="text-align: center; padding: 20px; letter-spacing: 2px;">打算在香港租車自駕遊？<br>立即搜索租車優惠！</h1>
              <div class="container d-flex justify-content-center w-75" style="border-radius:15px ; background-color: rgb(218, 220, 220); margin-top: 40px; margin-bottom: 15px;">
                <form class="row g-3" style="margin: 12px;" action="./select-car.php" method="get">
                  <div class="col-md-6">
                    <p style="font-size:20px ;margin-bottom: 10px;">取車地點</p>
                    <select id="pickupBranch" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="pickupLocation" required>
                      <option selected="">請選擇分店</option>
                      <option value="觀塘分店">觀塘分店: 九龍觀塘海濱道167-169號</option>
                      <option value="上水分店">上水分店: 新界上水嘉富坊3號上水貿易廣場</option>
                    </select>
                  </div>
                  <div class="col-md-6">
                    <p style="font-size:20px ;margin-bottom: 10px;">還車地點</p>
                    <select id="returnBranch" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example" name="returnLocation" required>
                      <option selected="">請選擇分店</option>
                      <option value="觀塘分店">觀塘分店 九龍觀塘海濱道167-169號</option>
                      <option value="上水分店">上水分店: 新界上水嘉富坊3號上水貿易廣場</option>
                    </select>
                  </div>
                  <div class="col-12 row row-cols-1 row-cols-lg-3">
                    <div class="col">
                      <label for="pickuptime" style="font-size:20px ;margin-bottom: 10px;">取車日期和時間</label>
                      <br>
                      <input class="pickuptime" type="datetime-local" id="pickuptime" name="pickuptime" required>
                    </div>
                    <div class="col">
                      <label for="returntime" style="font-size:20px ;margin-bottom: 10px;">還車日期和時間</label>
                      <br>
                      <input class="returntime" type="datetime-local" id="returntime" name="returntime" required>
                    </div>
                    <div class="col">
                      <label for="inputage" style="font-size:20px ;margin-bottom: 10px;"class="form-label">取車時的年齡</label>
                      <select id="inputage" class="form-select">
                        <option selected>30+</option>
                        <option>29</option>
                        <option>28</option>
                        <option>27</option>
                        <option>26</option>
                        <option>25</option>
                        <option>24</option>
                        <option>23</option>
                        <option>22</option>
                        <option>21</option>
                        <option>20</option>
                        <option>19</option>
                        <option>18</option>
                        
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck" required>
                      <label class="form-check-label" for="gridCheck">
                        本人持有有效駕駛執照
                      </label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" id="gridCheck2"  required>
                      <label class="form-check-label" for="gridCheck2">
                        本人已閱讀及同意遵守所有<a href="">條款及細則</a>
                      </label>
                    </div>
                  </div>
                  
                  <div class="d-grid gap-2 col-6 mx-auto">
                    <button style="margin: 15px" type="submit" class="btn btn-dark submitCheck" >開始租車</button>
                  </div>
                </form>


              </div>
              <br>
              <br>
              <div class="d-flex justify-content-center">
                <hr style="width: 7cm; border-width: 10px ; color: rgb(35, 242, 16);"></div>
              <br>
              <br>
              <div class="row gx-0">
                <div class="col-12">  


                <H1 style="text-align: center; margin-bottom: 80px; font-weight: 800;">選擇 Green Rental 的原因</H1>

                <div class="row row-cols-1 row-cols-lg-3 d-flex justify-content-center gx-0">
                  <div class="card col" style="width: 20rem;background-color: rgb(253, 247, 239); border: 0;">
                          <div class="card-body">
                            <div class="my-4"
                              style="border-style: solid; border-radius: 15px; border-width: 2px; background-color: rgb(253, 247, 239); height: 300px;">
                              <h3 style="text-align: center; font-weight: 700;" id="放心預訂">
                                <i class="fa-solid fa-heart-circle-check fa-2x fa-fade" style="margin: 30px;"></i>
                                <br>放心預訂
                              </h3>
                              <hr>
                              <p class="card-text" style="line-height: 30px; margin: 30px;">我們比較來自全港多間租車公司的優惠，讓你輕鬆快速做出選擇
                              </p>
                            </div>
                          </div>
                  </div>

                  <div class="card col" style="width: 20rem;background-color: rgb(253, 247, 239); border: 0;">
                          <div class="card-body">
                            <div class="my-4"
                              style="border-style: solid; border-radius: 15px; border-width: 2px; background-color: rgb(253, 247, 239); height: 300px;">
                              <h3 style="text-align: center; font-weight: 700;" id="放心預訂">
                                <i class="fa-solid fa-leaf fa-2x fa-fade" style="margin: 30px;"></i>
                                <br>環保意識
                              </h3>
                              <hr>
                              <p class="card-text" style="line-height: 30px; margin: 30px;">大量電動車車種供你選擇，以確保你的旅程更有環保意識
                              </p>
                            </div>
                          </div>
                  </div>

                  <div class="card col" style="width: 20rem;background-color: rgb(253, 247, 239); border: 0;">
                          <div class="card-body">
                            <div class="my-4"
                              style="border-style: solid; border-radius: 15px; border-width: 2px; background-color: rgb(253, 247, 239);height: 300px;">
                              <h3 style="text-align: center; font-weight: 700;" id="放心預訂">
                                <i class="fa-solid fa-hand-holding-dollar fa-2x fa-fade" style="margin: 30px;"></i>
                                <br>費用透明
                              </h3>
                              <hr>
                              <p class="card-text" style="line-height: 30px; margin: 30px;">所有顯示的價格均清楚透明，沒有任何隱藏費用或收費，讓你安心預訂
                              </p>
                            </div>
                          </div>
                  </div>
                </div>

                <div class="d-flex justify-content-center">
                  <hr style="width: 7cm; border-width: 10px ; color: rgb(35, 242, 16);">
                </div>

                <br>
                <br>

                <H1 style="text-align: center;  font-weight: 700; letter-spacing: 2px;">取車地點附近的熱門景點</H1><br><h4 style="text-align: center; margin-bottom: 80px; font-weight: 700; letter-spacing: 2px;">遊覽香港熱門租車點附近的必去景點</h4>
                
                <div class="container d-flex justify-content-center flex-wrap">
                  

                    <div class="">
                      
                      <h3 id="觀塘" style="color:rgb(22, 23, 22);text-align: center; ">觀塘</h3>
                    
                      <div class="d-flex justify-content-center"><hr style="width: 10cm; border-width: 5px"></div>

                      <p style="text-align: center; line-height: 40px;">附近景點 :<br>香港APM ................................. 0.37 公里<br>鯉魚門海鮮美食村 ................................ 1.1 公里<br>觀塘海濱花園 ................................ 0.2 公里<br>德福廣場 ................................ 1.5 公里<br>Mega Box ................................ 1.3 公里<br>大本型 ................................ 1.4 公里<br>九龍灣國際展貿中心 ................................ 0.9 公里<br></p></div>

                    <div class="">
                      
                      <h3 id="上水" style="color:rgb(22, 23, 22);text-align: center;">上水</h3>

                      <div class="d-flex justify-content-center"><hr style="width: 10cm; border-width: 5px"></div>
                        
                      <p style="text-align: center; line-height: 40px;">附近景點 :<br>塱原濕地 ................................ 1.7 公里<br>石湖墟 ................................ 2.1 公里<br>馬草壟 ................................ 1.9 公里<br>上水大水管 ................................ 3.1 公里<br>何時．河地湖畔餐廳 ................................ 2.7 公里<br>河上鄉居石侯公祠 ................................ 3.5 公里<br>大石磨瞭望站 ................................ 4.2 公里<br></p></div>
                    </div>
                    <div class="d-flex justify-content-center">
                      <hr style="width: 7cm; border-width: 10px ; color: rgb(35, 242, 16); margin-top: 35px;"></div>
                    <br><br><br><br>
                  </div>
                  <br><br>
            
              </div>

              </div>

  <?php include("index-footer.php")?>
