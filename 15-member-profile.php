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
  </div>

  <?php include_once('include/script.php'); ?>

  <script>
    function openNav() {
      document.getElementById("openBtn").style.transitionDelay = "unset";
      document.getElementById("openBtn").style.visibility = "hidden";
      document.getElementById("Sidebar").style.width = "18.75rem";
      document.getElementById("main").style.marginLeft = "18.75rem";
    }
    function closeNav() {
      document.getElementById("Sidebar").style.width = "0";
      document.getElementById("main").style.marginLeft= "0";
      document.getElementById("openBtn").style.transitionDelay = ".4s";
      document.getElementById("Sidebar").style.transitionDelay = ".2s";
      document.getElementById("main").style.transitionDelay = ".2s";
      document.getElementById("openBtn").style.visibility = "visible";
    
    }
  </script>
</body>
</html>