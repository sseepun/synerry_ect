<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  
  <?php 
    $sidebarStyle = 'style-02';
    include_once('include/sidebar.php'); 
  ?>

  <div id="main" class="main-container style-02">
    <div class="main-header" data-aos="fade-in" data-aos-delay="0">
      <a class="main-header-menu" href="./01-home-01.php">
        <div class="icon">
          <img src="public/assets/app/images/icon-svg/homepage-white.svg" alt="Icon">
        </div>
        <p class="sm header-title fw-400 ml-1 mr-1">ไปที่หน้าหลักของเว็บไซต์</p>
        <div class="icon title-arrow">
          <em class="fa-solid fa-arrow-right"></em>
        </div>
      </a>
    </div>
    <div id="mainContent" class="main-content">
      <div id="banner02" class="banner-02 style-02">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<5; $i++){?>
              <div class="swiper-slide">
                <div class="wrapper">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/bg/37.jpg');"></div>
                  <div class="hero" data-aos="fade-in" data-aos-delay="0">
                    <img src="public/assets/app/images/hero/08.png" class="Hero" />
                  </div>
                  <div class="text-wrapper" data-aos="fade-in" data-aos-delay="0">
                    <div>
                      <h4 class="color-black-theme fw-500">
                        จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>
                      </h4>
                      <h3>
                        ตามหลัก<span class="h2 color-black-theme fw-600 color-04">ประชาธิปไตย</span>
                      </h3>
                      <h2 class="color-black-theme fw-700">
                        <span class="color-04">โปร่งใส</span><span class="h3 fw-500">และ</span><span class="color-04">เป็นธรรม</span>
                      </h2>
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
        <div class="ss-box style-05 m-unset xxl size-04" data-aos="fade-in" data-aos-delay="150">
          <div class="ss-box-header style-03">
            <div class="ellipsis-container">
              <img class="size-02" src="public/assets/app/images/icon-svg/mail.svg" alt="Password Icon">
            </div>
            <h5 class="color-black color-05 fw-500 ml-3">
              จดหมายข่าวสาร
            </h5>  
          </div> 
          <div class="ss-box w-full " style="padding:1.5rem 1rem;">
            <form class="form style-02 black-theme" action="action.php" class="mt-5">
              <div class="form-group">
                <label>
                  <span class="p sm fw-400">กรุณากรอกอีเมลที่ต้องการรับข่าวสาร</span>
                </label>
                <input class="style-02 mt-1" type="text" placeholder="อีเมล *" required>
                <label class="text-danger style-02">กรุณากรอกอีเมล</label>
                <p class="sm fw-400 mt-3">กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม</p>
                <fieldset class="mt-2">
                  <label class="form-check ai-center form-check-container-02 theme-a">
                    <input type="checkbox" onclick="allChecked()" class="form-check-input" id="checkAll"/>
                    <span class="checkmark"></span>
                    <div>
                      <p class="fw-400">เลือกทั้งหมด</p>
                    </div>
                  </label>
                  <div class="grids">
                    <div class="grid lg-50 md-100 sm-100 mt-3">
                      <label class="form-check form-check-container theme-a size-02" id="check_01">
                        <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_1"/>
                        <span class="checkmark"></span>
                        <div>
                          <p class="color-05 fw-600">ข่าวประชาสัมพันธ์</p>
                          <p class="xs fw-400">ติดตามข่าวความเคลื่อนต่างๆ การเลือกตั้ง</p>
                        </div>
                      </label>
                    </div>
                    <div class="grid lg-50 md-100 sm-100 mt-3">
                      <label class="form-check form-check-container size-02" id="check_02">
                        <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_2"/>
                        <span class="checkmark"></span>
                        <div>
                          <label class="color-05 fw-600">คลังภาพ</label>
                          <p class="xs fw-400">กกต. พร้อมให้ข้อมูลที่เป็นประโยชน์ด้านการเลือกตั้งเพื่อประชาชน</p>
                        </div>
                      </label>
                    </div>
                    <div class="grid lg-50 md-100 sm-100 mt-3">
                      <label class="form-check form-check-container size-02" id="check_03">
                        <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_3"/>
                        <span class="checkmark"></span>
                        <div>
                          <label class="color-05 fw-600">วิดีโอ</label>
                          <p class="xs fw-400">อัพเดทสื่อมัลติมิเดียเพื่อประชาชน</p>
                        </div>
                      </label>
                    </div>
                    <div class="grid lg-50 md-100 sm-100 mt-3">
                      <label class="form-check form-check-container size-02" id="check_04">
                        <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_4"/>
                        <span class="checkmark"></span>
                        <div>
                          <label class="color-05 fw-600">หนังสืออิเล็กทรอนิกส์</label>
                          <p class="xs fw-400">คลังความรู้ ในรูปแบบอีบุ๊ค พร้อมกับความรู้ใหม่ๆ</p>
                        </div>
                      </label>
                    </div>
                    <div class="grid lg-50 md-100 sm-100 mt-3">
                      <label class="form-check form-check-container size-02" id="check_05">
                        <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_5"/>
                        <span class="checkmark"></span>
                        <div>
                          <label class="color-05 fw-600">เอกสารดาวโหลดน์</label>
                          <p class="xs fw-400">อำนวยความสะดวก เอกสารทางการต่างๆที่เกี่ยวข้องกับหน่วยงาน</p>
                        </div>
                      </label>
                    </div>
                    <div class="grid lg-50 md-100 sm-100 mt-3">
                      <label class="form-check form-check-container size-02" id="check_06">
                        <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_6"/>
                        <span class="checkmark"></span>
                        <div>
                          <label class="color-05 fw-600">ประกาศรับสมัครงาน</label>
                          <p class="xs fw-400">ติดตาม และอัพเดท ตำแหน่งงานต่างๆ ของหน่วยงาน กกต.</p>
                        </div>
                      </label>
                    </div>
                    <div class="gird sm-100">
                      <div class="captcha-container style-03 ai-start mt-5">
                        <div>
                          <img src="public/assets/app/images/content/captcha.jpg" alt="CAPTCA">
                          <label class="text-danger style-02">กรุณายืนยันตัวตน</label>  
                        </div>
                      </div>
                    </div>
                    <div class="grid xl-100 lg-100 md-100 sm-100">
                      <div class="btns mt-2 jc-center pl-unset-xs h-full">
                        <button type="submit" href="#" class="btn btn-popup-toggle btn-action btn-36" data-popup="99">
                          บันทึก
                        </button>
                        <button type="cancel" href="#" class="btn btn-action btn-37">
                          ยกเลิก
                        </button>
                      </div>
                    </div>
                  </div>
                </fieldset>
              </div>
            </form>  
          </div>
        </div>        
      </div>     
   </div>

   <?php
    $listResult= ['member-enews-subscription'];
    include_once('component/popup-file-error-style-02.php');
    ?>

  <?php include_once('include/access-panel.php'); ?>
  <?php include_once('include/script.php'); ?>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let arrowContainer = document.querySelector(".arrow-container");
    let btn = document.querySelector("#btn");
    let x = window.matchMedia("(max-width:660.98px)")

    btn.addEventListener("click", ()=>{
      menuBtnChange();
    });

    function menuBtnChange() {
      if(sidebar.classList.contains("open")){
        sidebar.classList.remove("open");
        sidebar.style.width = "5rem"
      }else {
        sidebar.classList.toggle("open");
        sidebar.style.width = "19.5rem"
      }
    }

    function myFunction(x) {
      if (x.matches) { 
        sidebar.style.width = "5rem"
        sidebar.classList.remove("open");
        arrowContainer.style.display = "none"
      }else{
        sidebar.classList.add("open");
        sidebar.style.width = "19.5rem"
        arrowContainer.style.display = "block"
      }
    }
    myFunction(x);
    x.addListener(myFunction);

    function checkedFunction() {
      var element01 = document.getElementById("check_01");
      var c1 = document.getElementById("c_1").checked;
      var element02 = document.getElementById("check_02");
      var c2 = document.getElementById("c_2").checked;
      var element03 = document.getElementById("check_03");
      var c3 = document.getElementById("c_3").checked;
      var element04 = document.getElementById("check_04");
      var c4 = document.getElementById("c_4").checked;
      var element05 = document.getElementById("check_05");
      var c5 = document.getElementById("c_5").checked;
      var element06 = document.getElementById("check_06");
      var c6 = document.getElementById("c_6").checked;

      if(c1 === true){element01.classList.add("active");}else{element01.classList.remove("active");}
      if(c2 === true){element02.classList.add("active");}else{element02.classList.remove("active");}
      if(c3 === true){element03.classList.add("active");}else{element03.classList.remove("active");}
      if(c4 === true){element04.classList.add("active");}else{element04.classList.remove("active");}
      if(c5 === true){element05.classList.add("active");}else{element05.classList.remove("active");}
      if(c6 === true){element06.classList.add("active");}else{element06.classList.remove("active");}
    }

    function allChecked(){
      var element = document.getElementById("checkAll").checked;

      var element01 = document.getElementById("check_01");
      var c1 = document.getElementById("c_1");

      var element02 = document.getElementById("check_02");
      var c2 = document.getElementById("c_2");

      var element03 = document.getElementById("check_03");
      var c3 = document.getElementById("c_3");

      var element04 = document.getElementById("check_04");
      var c4 = document.getElementById("c_4");

      var element05 = document.getElementById("check_05");
      var c5 = document.getElementById("c_5");

      var element06 = document.getElementById("check_06");
      var c6 = document.getElementById("c_6");

      if(element01){
        if(element === true){
          element01.classList.add("active");
          c1.checked = true;
        }else{
          element01.classList.remove("active");
          c1.checked = false;
        }
      }
      
      if(element02){
        if(element === true){
          element02.classList.add("active");
          c2.checked = true;
        }else{
          element02.classList.remove("active");
          c2.checked = false;
        }
      }

      if(element03){
        if(element === true){
          element03.classList.add("active");
          c3.checked = true;
        }else{
          element03.classList.remove("active");
          c3.checked = false;
        }
      }

      if(element04){
        if(element === true){
          element04.classList.add("active");
          c4.checked = true;
        }else{
          element04.classList.remove("active");
          c4.checked = false;
        }
      }

      if(element05){
        if(element === true){
          element05.classList.add("active");
          c5.checked = true;
        }else{
          element05.classList.remove("active");
          c5.checked = false;
        }
      }

      if(element06){
        if(element === true){
          element06.classList.add("active");
          c6.checked = true;
        }else{
          element06.classList.remove("active");
          c6.checked = false;
        }
      }
    }

  </script>
</body>
</html>