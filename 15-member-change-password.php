<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>

  <div class="sidebar open">
    <div data-aos="fade-in" data-aos-delay="0">
      <div class="logo-container">
        <div class="wrapper">
          <div class="logo">
            <img src="public/assets/app/images/logo-02.png" alt="">
          </div>
          <div class="text-container">
            <p class="color-white title-link lh-3xs fw-400">สำนักงาน</p>
            <p class="color-white title-link fw-400">คณะกรรมการการเลือกตั้ง</p>
          </div>
          <div class="arrow-container">
            <div class="arrow" id="btn" >
              <em class="fa-solid fa-arrow-left"></em>
            </div>
          </div>
        </div>
      </div>
      <div class="profile-container">
        <div class="wrapper">
          <div class="img-container">
            <div class="img-container">
              <img class="img" src="public/assets/app/images/avatars/02.jpg" alt="Avatar">
            </div>
          </div>
          <div class="text-container">
            <p class="color-white lh-xs fw-400 title-link">สวัสดี</p>
            <p class="color-white fw-400 title-link">คุณนิพัทธ์พนธ์</p>
          </div>
        </div>
        <span class="tooltip">คุณนิพัทธ์พนธ์</span> 
      </div>
      <div class="menu-container">
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/31.png" alt="">
            </div>
            <span class="p sm color-white title-link">หน้าแรก</span>
          </div> 
          <span class="tooltip">หน้าแรก</span>  
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/32.png" alt="">
            </div>
            <p class="sm color-white title-link">ข้อมูลส่วนตัว</ย>
          </div>
          <span class="tooltip">ข้อมูลส่วนตัว</span> 
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/33.png" alt="">
            </div>
            <p class="sm color-white title-link">เปลี่ยนรหัสผ่าน</p>
          </div>
          <span class="tooltip">เปลี่ยนรหัสผ่าน</span> 
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/34.png" alt="">
            </div>
            <p class="sm color-white title-link">จดหมายข่าวสาร</p>
          </div>
          <span class="tooltip">จดหมายข่าวสาร</span> 
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/35.png" alt="">
            </div>
            <p class="sm color-white title-link">กระทู้ของฉัน</p>
          </div>
          <span class="tooltip">กระทู้ของฉัน</span>
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/36.png" alt="">
            </div>
            <p class="sm color-white title-link">ออกจากระบบ</p>
          </div>
          <span class="tooltip">ออกจากระบบ</span>
        </a>
      </div>
    </div>
  </div>
 
  <div id="main" class="main-container">
    <div class="main-header" data-aos="fade-in" data-aos-delay="0">
      <div href="#" id="openBtn" class="btn btn-action size-04 btn-02">
        ☰ เมนู
      </div>
      <div href="#" class="btn btn-action btn-02" value="submit" type="submit">
        ไปที่เว็บไซต์
      </div>
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
        <div class="ss-box m-unset xxl" data-aos="fade-in" data-aos-delay="150">
          <div class="ss-box-header style-02">
            <h5 class="color-black color-02 fw-500">เปลี่ยนรหัสผ่าน</h5>  
          </div> 
          <div class="ss-box lg" style="padding:1.5rem 1rem;">
            <form action="action.php" method="post">
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
                <div class="grid xl-1-3 lg-30 md-100 sm-100">
                  <div class="btns pl-1 pl-unset-xs h-full w-full">
                    <button type="submit" href="#" class="btn btn-action btn-02 w-full">
                      อัพเดทรหัสผ่าน
                    </button>
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
    let x = window.matchMedia("(max-width:575.98px)")

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