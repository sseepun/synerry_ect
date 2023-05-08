<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php //include_once('component/page-loader.php'); ?>
  
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
        <div class="ss-box style-05 m-unset xxl" data-aos="fade-in" data-aos-delay="150">
          <div class="ss-box-header style-03">
            <div class="ellipsis-container">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                viewBox="0 0 336 240">
                <g>
                  <path d="M168,0c43.2,0,86.5,0,129.7,0C320.8,0,336,15.2,336,38.2c0,54.5,0,109,0,163.5c0,23-15.2,38.3-38.3,38.3
                    c-86.5,0-173,0-259.4,0C15.3,240,0,224.7,0,201.7c0-54.5,0-109,0-163.5C0,15.3,15.3,0,38.3,0C81.5,0,124.7,0,168,0z M102.8,119.9
                    c-1.6,0.3-2.7,0.6-3.7,0.8c-28.5,3.9-51,29.5-51.1,58.3c0,7.9,4.9,13,12.7,13c31.5,0,63,0,94.5,0c7.9,0,12.8-5.1,12.7-13
                    c-0.1-27.1-20.1-51.7-46.7-57.5c-2.5-0.5-5.1-1-8.3-1.6c25.2-5.7,32.6-26,30.8-40c-2.4-18.5-17.3-31.8-35.4-31.9
                    C90,47.9,74.8,61.3,72.2,79.9C69.7,98.2,81.5,113.8,102.8,119.9z M233.9,108c13.5,0,27,0,40.5,0c7.7,0,13.1-4.9,13.1-11.9
                    c0.1-7.1-5.3-12.1-13.2-12.1c-27,0-54,0-81,0c-7.9,0-13.4,4.9-13.3,12c0,7.1,5.5,12,13.4,12C206.9,108,220.4,108,233.9,108z
                    M222.2,132c-9.6,0-19.2,0-28.9,0c-7.9,0-13.3,5-13.3,12.1c0,6.9,5.5,11.9,13.1,11.9c19.2,0,38.5,0,57.7,0c7.7,0,13.1-5,13.1-11.9
                    c0.1-7.1-5.4-12.1-13.3-12.1C241.2,132,231.7,132,222.2,132z"/>
                </g>
              </svg>
            </div>
            <h5 class="color-black color-05 fw-500 ml-3">
              ข้อมูลส่วนตัว
            </h5>  
          </div> 
          <div class="ss-box lg" style="padding:1.5rem 1rem;">
            <form class="form style-02 white-theme" action="action.php" method="post">
              <div class="grids no-gap">
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <div class="search-file-container">
                      <label class="p fw-500">เปลี่ยนภาพโปรไฟล์</label>
                    </div>
                    <div class="search-btn-container">
                      <div class="btns jc-end">
                        <div class="btn style-03 btn-action btn-35 size-03 white-theme pos-relative">
                          อัปโหลดรูปภาพ
                          <input type="file" class="file-upload">
                        </div>
                      </div>
                      <p class="xs fw-400">ประเภทไฟล์ที่รองรับ JPG, PNG, GIF ขนาดรวมไม่เกิน 2 MB</p>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">ชื่อ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="text"/>
                    </div>
                  </div>
                  <div class="padding-style-04">
                    <label class="text-danger style-02">กรุณากรอกชื่อ</label>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p pw-title fw-500">นามสกุล <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="text"/>
                    </div>
                  </div>
                  <div class="padding-style-04">
                    <label class="text-danger style-02">กรุณากรอกนามสกุล</label>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">อีเมล <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="email"/>
                    </div>
                  </div>
                  <div class="padding-style-04">
                    <label class="text-danger style-02">กรุณากรอกอีเมล</label>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">หมายเลขติดต่อ</label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="text"/>
                    </div>
                  </div>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">วันเกิด <span class="text-danger">*</span></label>
                      <div class="form-input">
                        <div class="date-wrapper calendar-icon">
                          <input type="text" class="date-picker form-control style-02 size-01">
                        </div>
                    </div>
                  </div>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="fw-500">เพศ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <fieldset>
                        <div class="gallery-grids">
                          <div class="grid sm-50 xs-50">
                            <div class="checkbox-set none">
                              <input type="radio" name="radio" id="radio_0" checked="">
                              <label for="radio_0" class="checkmark background-02">   
                                <div class="bg-color white-theme"></div>
                              </label>
                              <span for="radio_0" class="p sm">ชาย</span>
                            </div>
                          </div>
                          <div class="grid sm-50 xs-50">
                            <div class="checkbox-set none">
                              <input type="radio" name="radio" id="radio_1">
                              <label for="radio_1" class="checkmark background-02">  
                                <div class="bg-color white-theme"></div>
                              </label>
                              <span class="p sm">หญิง</span>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    <div>
                  </div>
                  </div>
                </div>
                <div class="grid xl-2-3 lg-70 md-100 sm-100">
                  <div class="captcha padding-style-04">
                    <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                    <label class="text-danger style-02">กรุณายืนยันตัวตน</label>
                  </div>
                </div>
                <div class="grid xl-100 lg-100 md-100 sm-100">
                  <div class="padding-style-04">
                    <div class="btns mt-2 jc-center pl-unset-xs h-full">
                      <button type="submit" class="btn btn-action btn-popup-toggle btn-36 white-theme" data-popup="99">
                        บันทึก
                      </button>
                      <div href="#" class="btn btn-action btn-37 white-theme">
                        ยกเลิก
                      </div>
                    </div>
                  </div>
                </div>
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
  </script>
</body>
</html>