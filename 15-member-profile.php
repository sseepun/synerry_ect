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
          <div class="ss-img">
            <div class="img-bg" style="background:url('public/assets/app/images/avatars/01.jpg')"></div>
          </div>
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
                <div class="img-bg" style="background-image:url('public/assets/app/images/bg/25.jpg');"></div>
                <div class="container">
                  <div class="text-wrapper" style="visibility:hidden;">
                    <div class="slogan color-white">
                      <p class="h4 list-item fw-100">สร้าง</p>
                      <p class="h4 list-item fw-100">เสริม</p>
                      <p class="h4 list-item fw-100">รักษา</p>
                      <p class="h4 list-item fw-100">สืบทอด</p>
                      <p class="h4 list-item fw-100">ยกระดับ</p>
                    </div>
                    <h1 class="color-white fw-600 lh-2xs mt-3">
                      วิถีชีวิต ค่านิยม <br> ความเป็นไทย
                    </h1>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
        <div class="bullet">
          <div class="container">
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
      <div class="ss-box m-unset bg-white xl p-5">
        <h5 class="color-black color-02 fw-500">ข้อมูลส่วนตัว</h5>   
        <form action="" class="mt-5">
          <div class="form-group style-02">
            <label class="p size-02 fw-500">ชื่อ</label>
            <div class="form-input size-02">
              <input class="style-02 size-01" type="text">
            </div>
          </div>
          <div class="form-group style-02 mt-3">
            <label class="p size-02 fw-500">นามสกุล</label>
            <div class="form-input size-02">
              <input class="style-02 size-01" type="text">
            </div>
          </div>
          <div class="form-group style-02 mt-3">
            <label class="p size-02 fw-500">อีเมล</label>
            <div class="form-input size-02">
              <input class="style-02 size-01" type="text">
            </div>
          </div>
          <div class="form-group style-02 mt-3">
            <label class="p size-02 fw-500">หมายเลขติดต่อ</label>
            <div class="form-input size-02">
              <input class="style-02 size-01" type="text">
              <!-- <div class="captcha-container d-flex fw-wrap ai-center mt-5">
                <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                <div class="btns ml-3">
                  <div href="#" class="btn btn-action btn-02" value="submit" type="submit">
                    อัพเดทข้อมูลส่วนตัว
                  </div>
                </div>
              </div> -->
            </div>
          </div>
        </form>
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