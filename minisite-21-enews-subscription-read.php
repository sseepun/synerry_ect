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
          <svg  viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" ">
            <g stroke-width="0"/>
            <g stroke-linecap="round" stroke-linejoin="round"/>
            <g> <path d="M14 15v-11h-3v-3h-9v14h-2v1h7v-3h2v3h7v-1h-2zM6 11h-2v-2h2v2zM6 8h-2v-2h2v2zM6 5h-2v-2h2v2zM9 11h-2v-2h2v2zM9 8h-2v-2h2v2zM9 5h-2v-2h2v2zM13 11h-2v-2h2v2zM13 8h-2v-2h2v2z"/></g>
          </svg>
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
                        ตามหลัก<span class="h2 color-black-theme title-theme fw-600 color-04">ประชาธิปไตย</span>
                      </h3>
                      <h2 class="color-black-theme fw-700">
                        <span class="color-04 title-theme">โปร่งใส</span><span class="h3 fw-500 title-theme">และ</span><span class="color-04 title-theme">เป็นธรรม</span>
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
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 15">
                <g>
                  <path d="M61.1,442.529q-1.406,1.093-6.016,4.414l-0.391.312a10.866,10.866,0,0,1-1.484,1.016,3.474,3.474,0,0,1-1.719.547,3.655,3.655,0,0,1-1.719-.508,15.457,15.457,0,0,1-1.484-1.016l-0.391-.351q-4.727-3.438-6.016-4.414a0.253,0.253,0,0,0-.254-0.02,0.214,0.214,0,0,0-.137.215v7.969a1.867,1.867,0,0,0,1.875,1.875h16.25a1.867,1.867,0,0,0,1.875-1.875v-7.969a0.253,0.253,0,0,0-.137-0.234A0.193,0.193,0,0,0,61.1,442.529Zm-9.609,5.039a2.489,2.489,0,0,1-1.25-.469,9.327,9.327,0,0,1-1.211-.859l-0.391-.274q-4.8-3.514-6.524-4.844l-0.273-.195a0.889,0.889,0,0,1-.352-0.742v-0.742a1.867,1.867,0,0,1,1.875-1.875h16.25a1.867,1.867,0,0,1,1.875,1.875v0.742a0.889,0.889,0,0,1-.351.742l-0.2.156q-1.68,1.329-6.6,4.883l-0.391.274a9.326,9.326,0,0,1-1.211.859A2.489,2.489,0,0,1,51.494,447.568Z" transform="translate(-41.5 -437.562)"></path>
                </g>
              </svg>
            </div>
            <h5 class="color-black color-05 fw-500 ml-3">
              จดหมายข่าวสาร
            </h5>  
          </div> 
          <div class="ss-box w-full " style="padding:1.5rem 1rem;">
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
                      <p class="color-05 fw-600">ข่าวประชาสัมพันธ์</p>
                      <p class="xs fw-400">ติดตามข่าวความเคลื่อนต่างๆ การเลือกตั้ง</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_02"> 
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_2" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-05 fw-600">คลังภาพ</label>
                      <p class="xs fw-400">กกต. พร้อมให้ข้อมูลที่เป็นประโยชน์ด้านการเลือกตั้งเพื่อประชาชน</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_03">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_3" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-05 fw-600">วิดีโอ</label>
                      <p class="xs fw-400">อัพเดทสื่อมัลติมิเดียเพื่อประชาชน</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_04">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_4" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-05 fw-600">หนังสืออิเล็กทรอนิกส์</label>
                      <p class="xs fw-400">คลังความรู้ ในรูปแบบอีบุ๊ค พร้อมกับความรู้ใหม่ๆ</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_05">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_5" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-05 fw-600">เอกสารดาวโหลดน์</label>
                      <p class="xs fw-400">อำนวยความสะดวก เอกสารทางการต่างๆที่เกี่ยวข้องกับหน่วยงาน</p>
                    </div>
                  </label>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-3">
                  <label class="form-check form-check-container size-02 active" id="check_06">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_6" checked disabled/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-05 fw-600">ประกาศรับสมัครงาน</label>
                      <p class="xs fw-400">ติดตาม และอัพเดท ตำแหน่งงานต่างๆ ของหน่วยงาน กกต.</p>
                    </div>
                  </label>
                </div>
                <div class="grid sm-100">
                  <div class="btns mt-2 jc-center">
                    <a href=".\minisite-21-enews-subscription-edit.php" class="btn btn-action white-theme btn-36 theme-bg-02">
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