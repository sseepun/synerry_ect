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
          <img src="public/assets/app/images/icon/office-02.png" alt="Icon">
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
              <img class="size-02" src="public/assets/app/images/icon-svg/password.svg" alt="Password Icon">
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
                      <button type="submit" href="#" class="btn btn-action btn-13 btn-black-theme size-03">
                        บันทึก
                      </button>
                      <button type="cancel" href="#" class="btn btn-action btn-05 size-03">
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