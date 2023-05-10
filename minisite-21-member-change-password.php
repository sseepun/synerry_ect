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
                        <span class="color-04 title-theme">โปร่งใส</span><span class="h3 fw-500">และ</span><span class="color-04 title-theme">เป็นธรรม</span>
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
              <svg class="size-02" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 409.6 170.9">
                <g>
                  <path d="M0,30.2c1.7-7.8,4.6-15,10.6-20.6C17.7,2.9,26.4,0,36.1,0c112.5,0,225-0.1,337.6,0c21.6,0,35.9,14.7,36,36.4
                    c0,32.8,0,65.6,0,98.4c0,17.5-9.6,30.4-26.1,34.8c-3.4,0.9-7.1,1.2-10.7,1.2c-112,0.1-224,0-336,0.1c-19.8,0-33.9-12.4-36.5-29.6
                    c0-0.2-0.3-0.5-0.4-0.7C0,103.8,0,67,0,30.2z M68.2,100.3c0,2.9-0.1,5,0,7.1c0.1,1.7,0.1,3.5,0.4,5.2c0.8,4.2,4,6.9,8.1,6.9
                    c4,0,7.5-2.6,8.2-6.8c0.6-3.9,0.6-7.8,0.8-12.2c2.8,1.6,5.2,2.9,7.6,4.3c5.4,3,10.5,2.1,12.9-2.2c2.6-4.6,1-9.4-4.5-12.7
                    c-2.4-1.4-4.7-2.8-7.7-4.5c3.2-1.8,5.8-3.3,8.4-4.9c4.9-3.1,6.4-7.9,3.9-12.2c-2.4-4.1-7.4-5.2-12.3-2.6c-2.7,1.4-5.3,3-8.2,4.7
                    c-0.3-4.4-0.2-8.4-0.8-12.2c-0.8-4.8-5-7.4-9.8-6.4c-4.3,0.8-6.7,4-6.9,9.4c-0.1,2.9,0,5.9,0,9.4c-2.4-1.4-4-2.3-5.6-3.2
                    c-1.8-0.9-3.5-2-5.3-2.6c-3.9-1.3-8.1,0.3-10,3.8c-1.9,3.5-1.3,8,2,10.5c3.1,2.4,6.5,4.3,10.2,6.6c-3.2,1.9-6.1,3.4-8.7,5.2
                    c-4.5,3-5.8,8-3.2,12.1c2.4,3.9,7.3,4.9,12,2.4C62.2,103.8,64.8,102.2,68.2,100.3z M341.4,70.5c0-3.1,0.1-5.3,0-7.6
                    c-0.1-1.7-0.2-3.5-0.5-5.1c-0.8-3.8-4.2-6.4-8.1-6.4c-3.9,0-7.4,2.6-8,6.5c-0.6,4-0.6,8-0.9,12.5c-2.9-1.7-5.4-3.2-8-4.5
                    c-5.1-2.7-10.2-1.7-12.6,2.6c-2.5,4.3-0.9,9.1,4.1,12.2c2.5,1.6,5.1,3,8.2,4.9c-3.2,1.9-5.9,3.3-8.5,4.9c-4.8,3.1-6.3,8-3.7,12.3
                    c2.4,4,7.4,5,12.3,2.4c2.6-1.4,5.2-3,8.4-4.8c0,2.8-0.1,4.9,0,7c0.1,1.9,0.1,3.7,0.5,5.5c0.8,4,4,6.5,7.9,6.6
                    c4,0.1,7.6-2.5,8.2-6.7c0.6-3.9,0.6-7.9,0.8-12.3c2.2,1.3,4.2,2.4,6.1,3.4c1.4,0.8,2.8,1.7,4.2,2.2c3.9,1.4,8.2-0.1,10.1-3.4
                    c2.1-3.6,1.5-8.2-1.8-10.8c-3.1-2.4-6.5-4.3-10.2-6.6c3.2-1.8,5.9-3.3,8.4-4.9c4.6-3,6.1-7.8,3.7-12c-2.4-4.1-7.3-5.3-12.2-2.7
                    C347.3,67,344.7,68.6,341.4,70.5z M179.3,85.4c2-1.2,3.4-2,4.7-2.8c1.5-0.9,3-1.7,4.5-2.7c4.3-3,5.5-7.8,3-11.8
                    c-2.5-3.9-7.2-5-12-2.6c-2.8,1.5-5.6,3.1-8.9,5c0-3.9,0.1-6.8,0-9.7c-0.2-5.8-3.6-9.6-8.6-9.5c-5,0.1-8.3,3.9-8.4,9.7
                    c-0.1,3,0,5.9,0,9.5c-3-1.7-5.3-3.1-7.6-4.3c-5.7-3.2-10.6-2.4-13.3,2c-2.7,4.5-0.8,9.5,4.9,12.8c2.2,1.3,4.5,2.6,7.3,4.3
                    c-3.1,1.8-5.7,3.2-8.1,4.8c-5.1,3.2-6.7,8-4.1,12.5c2.4,4.2,7.5,5.1,12.6,2.3c2.6-1.4,5.2-2.9,8.2-4.6c0,3.8-0.1,6.8,0,9.9
                    c0.2,5.5,3.6,9.3,8.4,9.3c4.9,0,8.3-3.6,8.5-9.1c0.1-3.1,0-6.3,0-10.2c3.3,1.9,5.9,3.5,8.6,4.9c4.9,2.6,9.9,1.6,12.3-2.4
                    c2.6-4.4,1.3-9.2-3.6-12.3C185.3,88.8,182.6,87.3,179.3,85.4z M230.3,85.4c-2.3,1.4-3.9,2.3-5.5,3.2c-1.3,0.7-2.6,1.4-3.8,2.3
                    c-4.3,3.1-5.4,7.7-2.9,11.8c2.3,3.8,7.1,5,11.6,2.7c3-1.5,5.9-3.2,9.3-5.1c0,3.8-0.1,6.7,0,9.6c0.2,5.8,3.6,9.6,8.6,9.5
                    c5-0.1,8.3-3.9,8.4-9.7c0.1-3,0-5.9,0-9.5c3.7,2,6.6,3.9,9.7,5.4c5.9,2.8,12.3-1,12.4-7.2c0-3.9-2.1-6.4-5.3-8.3
                    c-2.5-1.5-5-3-8-4.8c3-1.7,5.3-3,7.6-4.4c5.5-3.3,7.2-8.2,4.6-12.6c-2.6-4.4-7.6-5.2-13-2.2c-2.5,1.4-5,2.8-7.9,4.5
                    c0-3.7,0.1-6.6,0-9.5c-0.1-5.9-3.4-9.7-8.4-9.7c-5-0.1-8.4,3.7-8.6,9.5c-0.1,3,0,6,0,9.8c-3.3-1.9-5.9-3.5-8.5-4.9
                    c-4.9-2.6-9.8-1.6-12.3,2.4c-2.6,4.3-1.2,9.2,3.6,12.3C224.3,82,227,83.5,230.3,85.4z">
                  </path>
                </g>
              </svg>
            </div>
            <h5 class="color-black color-05 fw-500 ml-3">
              เปลี่ยนรหัสผ่าน
            </h5>  
          </div> 
          <div class="ss-box lg" style="padding:1.5rem 1rem;">
            <form class="form style-02 white-theme" action="action.php" method="post">
              <div class="grids">
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">รหัสผ่านเดิม <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="password" required/>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p pw-title fw-500">รหัสผ่านใหม่ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="password" required/>
                    </div>
                    <div class="password-level level-2 padding-style-04">
                      <div class="levels">
                        <div></div><div></div><div></div><div></div>
                      </div>
                      <p class="sm fw-300">
                        การคาดเดาของรหัสผ่าน <span class="fw-600 text">ปานกลาง</span>
                      </p>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="password" required/>
                    </div>
                  </div>
                </div>
                <div class="grid xl-2-3 lg-70 md-100 sm-100">
                  <div class="captcha padding-style-01">
                    <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                  </div>
                </div>
                <div class="grid xl-100 lg-100 md-100 sm-100">
                  <div class="padding-style-01">
                    <div class="btns pl-1 pl-unset-xs">
                      <button type="submit" href="#" class="btn btn-action white-theme btn-36 theme-bg-02 size-03">
                        บันทึก
                      </button>
                      <button type="cancel" href="#" class="btn btn-action white-theme btn-37 size-03">
                        ยกเลิก
                      </button>
                    </div>
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
  </script>
</body>
</html>