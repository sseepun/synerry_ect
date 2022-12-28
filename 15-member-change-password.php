<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  
  <div id="Sidebar" class="sidebar">
    <div class="logo-container">
      <div class="wrapper">
        <div class="logo">
          <img src="public/assets/app/images/logo-02.png" alt="">
        </div>
        <div class="text-container">
          <p class="color-white lh-3xs fw-400">สำนักงาน</p>
          <p class="color-white fw-400">คณะกรรมการการเลือกตั้ง</p>
        </div>
        <div class="arrow" onclick="closeNav()">
          <em class="fa-solid fa-arrow-left"></em>
        </div>
      </div>
    </div>
    <div class="profile-container">
      <div class="wrapper">
        <div class="img-container">
          <img class="img" src="public/assets/app/images/avatars/02.jpg" alt="Avatar">
        </div>
        <div class="text-container">
          <p class="color-white lh-xs fw-400">สวัสดี</p>
          <p class="color-white fw-400">คุณนิพัทธ์พนธ์</p>
        </div>
      </div>
    </div>
    <div class="menu-container">
      <a class="menu-item" href="#" onclick="closeNav()">
        <div class="wrapper">
          <div class="icon">
            <img src="public/assets/app/images/icon/31.png" alt="">
          </div>
          <p class="sm color-white">หน้าแรก</p>
        </div>
      </a>
      <a class="menu-item" href="#" onclick="closeNav()">
        <div class="wrapper">
          <div class="icon">
            <img src="public/assets/app/images/icon/32.png" alt="">
          </div>
          <p class="sm color-white">ข้อมูลส่วนตัว</ย>
        </div>
      </a>
      <a class="menu-item" href="#" onclick="closeNav()">
        <div class="wrapper">
          <div class="icon">
            <img src="public/assets/app/images/icon/33.png" alt="">
          </div>
          <p class="sm color-white">เปลี่ยนรหัสผ่าน</p>
        </div>
      </a>
      <a class="menu-item" href="#" onclick="closeNav()">
        <div class="wrapper">
          <div class="icon">
            <img src="public/assets/app/images/icon/34.png" alt="">
          </div>
          <p class="sm color-white">จดหมายข่าวสาร</p>
        </div>
      </a>
      <a class="menu-item" href="#" onclick="closeNav()">
        <div class="wrapper">
          <div class="icon">
            <img src="public/assets/app/images/icon/35.png" alt="">
          </div>
          <p class="sm color-white">กระทู้ของฉัน</p>
        </div>
      </a>
      <a class="menu-item" href="#" onclick="closeNav()">
        <div class="wrapper">
          <div class="icon">
            <img src="public/assets/app/images/icon/36.png" alt="">
          </div>
          <p class="sm color-white">ออกจากระบบ</p>
        </div>
      </a>
    </div>
  </div>
 
  <div id="main" class="main-container">
    <div class="main-header">
      <div href="#" id="openBtn" class="btn btn-action size-04 btn-02 " onclick="openNav()">
        ☰ เมนู
      </div>
      <div href="#" class="btn btn-action btn-02" value="submit" type="submit">
        ไปที่เว็บไซต์
      </div>
    </div>
    
    <div id="mainContent" class="main-content">
      <div id="banner02" class="banner-02">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<5; $i++){?>
              <div class="swiper-slide">
                <div class="wrapper">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/bg/26.jpg');"></div>
                  <div class="container">
                    <div class="text-wrapper">
                      <div>
                        <h4 class="fw-500">
                          จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก<span class="h2 fw-600 color-04">ประชาธิปไตย</span>
                        </h4>
                        <h2 class="fw-700">
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
        <div class="ss-box m-unset xxl">
          <div class="ss-box-header">
            <h5 class="color-black color-02 fw-500">เปลี่ยนรหัสผ่าน</h5>  
          </div> 
          <div class="ss-box lg" style="padding:1.5rem 1rem;">
            <form action="">
              <div class="grids">
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">รหัสผ่านเดิม <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="password"/>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p pw-title fw-500">รหัสผ่านใหม่ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="password"/>
                      <div class="password-level level-1">
                        <div class="levels">
                          <div></div><div></div><div></div><div></div>
                        </div>
                        <p class="sm fw-300">
                          การคาดเดาของรหัสผ่าน <span class="fw-600 text">ง่าย</span>
                        </p>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="password"/>
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
                    <div href="#" class="btn btn-action btn-02 w-full">
                      อัพเดทรหัสผ่าน
                    </div>
                  </div>
                </div>
              </div>
            </form>  
          </div>
        </div>       
      </div>     
    </div>
  </div>

  <?php include_once('include/script.php'); ?>

  <script>

    var x = window.matchMedia("(max-width:767.98px)")

    function myFunction(x) {
      if (x.matches) { 
        document.getElementById("Sidebar").style.width = "0";
        document.getElementById("mainContent").style.marginLeft= "0";
      }else{
        document.getElementById("Sidebar").style.width = "18.75rem";
        document.getElementById("mainContent").style.marginLeft= "18.75rem";
      }
    }
    myFunction(x) 
    x.addListener(myFunction)
   
    function openNav() {
      let y = window.matchMedia("(max-width:767.98px)")
      if (y.matches) { 
        document.getElementById("Sidebar").style.width = "18.75rem";
        document.getElementById("mainContent").style.marginLeft= "unset";
      }else{
        document.getElementById("Sidebar").style.width = "18.75rem";
        document.getElementById("mainContent").style.marginLeft= "18.75rem";
      }
    }
  
    function closeNav() {
      document.getElementById("Sidebar").style.width = "0";
      document.getElementById("mainContent").style.marginLeft= "unset";
    }

  </script>
</body>
</html>