<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>

  <?php include_once('include/sidebar-main-site.php'); ?>
 
  <div id="main" class="main-container">
    <div class="main-header" data-aos="fade-in" data-aos-delay="0">
      <a class="main-header-menu" href="./01-home-01.php">
        <div class="icon">
          <img class="inactive" src="public/assets/app/images/icon-svg/homepage.svg" alt="Icon Inactive">
        </div>
        <p class="sm title fw-400 ml-1 mr-1 color-02">ไปที่หน้าหลักของเว็บไซต์</p>
        <div class="icon">
          <img class="active" src="public/assets/app/images/icon-svg/external-link-01.svg" alt="Icon Active">
        </div>
      </a>
    </div>
    
    <div id="mainContent" class="main-content">
      <div id="banner02" class="banner-02" data-aos="fade-in" data-aos-delay="0">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<5; $i++){?>
              <div class="swiper-slide">
                <div class="wrapper">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/bg/26.jpg');"></div>
                  <div class="container">
                    <div class="text-wrapper">
                      <div>
                        <h4 class="color-black-theme fw-500">
                          จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก<span class="color-black-theme h2 fw-600 color-04">ประชาธิปไตย</span>
                        </h4>
                        <h2 class="color-black-theme fw-700">
                          โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="bullet">
            <div class="container h-full">
              <div id="bulletWrapper" class="bullet-wrapper">
                <div class="arrow-container">
                  <div class="arrow btn-icon-prev">
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                  <div class="arrow btn-icon-next">
                    <em class="fa-solid fa-arrow-left"></em>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="ss-box m-unset style-02 all-bradius xxl w-full-sm size-04" data-aos="fade-in" data-aos-delay="150">
          <div class="ss-box-header style-02">
            <h5 class="color-black color-02 fw-500">จดหมายข่าวสาร</h5>  
          </div> 
          <div class="ss-box m-unset w-full" style="padding:.5rem 1rem;">
            <p class="fw-400 mb-3">อีเมลที่ใช้สำหรับรับข่าวสาร</p>
              <form class="form style-02 white-theme">
              <div class="form-input">
                <input class="style-02 size-01 no-border-bottom" type="email" value="name@gmail.com" disabled disabled/>
              </div>
              </form>
            
            <p class="fw-400 mt-3">ประเภทของข่าวสารที่คุณติดตาม</p>
            <form>
            <div class="grids">
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_01">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_1" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <p class="color-02 fw-600">ข่าวประชาสัมพันธ์</p>
                      <p class="xs fw-400">ติดตามข่าวความเคลื่อนต่างๆ การเลือกตั้ง</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_02"> 
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_2" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">คลังภาพ</label>
                      <p class="xs fw-400">กกต. พร้อมให้ข้อมูลที่เป็นประโยชน์ด้านการเลือกตั้งเพื่อประชาชน</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_03">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_3" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">วิดีโอ</label>
                      <p class="xs fw-400">อัพเดทสื่อมัลติมิเดียเพื่อประชาชน</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_04">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_4" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">หนังสืออิเล็กทรอนิกส์</label>
                      <p class="xs fw-400">คลังความรู้ ในรูปแบบอีบุ๊ค พร้อมกับความรู้ใหม่ๆ</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_05">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_5" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">เอกสารดาวโหลดน์</label>
                      <p class="xs fw-400">อำนวยความสะดวก เอกสารทางการต่างๆที่เกี่ยวข้องกับหน่วยงาน</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_06">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_6" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">ประกาศรับสมัครงาน</label>
                      <p class="xs fw-400">ติดตาม และอัพเดท ตำแหน่งงานต่างๆ ของหน่วยงาน กกต.</p>
                    </div>
                  </label>
                </div>
                <div class="grid sm-100">
                  <div class="btns mt-2 jc-center">
                    <a href=".\15-member-enews-subscription-edit.php" class="btn btn-action btn-02">
                      แก้ไข
                    </a>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>       
      </div>     
    </div>
  </div>

  <?php include_once('include/access-panel.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let arrowContainer = document.querySelector(".arrow-container");
    let btn = document.querySelector("#btn");
    let x = window.matchMedia("(max-width:625.98px)")

    btn.addEventListener("click", ()=>{
      menuBtnChange();
    });

    function menuBtnChange() {
      if(sidebar.classList.contains("open")){
        sidebar.classList.remove("open");
        sidebar.style.width = "5rem"
      }else {
        sidebar.classList.toggle("open");
        sidebar.style.width = "17.5rem"
      }
    }

    function myFunction(x) {
      if (x.matches) { 
        sidebar.style.width = "5rem"
        sidebar.classList.remove("open");
        arrowContainer.style.display = "none"
      }else{
        sidebar.classList.add("open");
        sidebar.style.width = "17.5rem"
        arrowContainer.style.display = "block"
      }
    }
    myFunction(x) 
    x.addListener(myFunction)

  </script>
  
</body>
</html>