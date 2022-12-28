<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'สมัครสมาชิก' ],
    ];
    $breadcrumbTitle = 'สมัครรับข่าวสาร';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/06.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-08">
    <div class="pattern">
      <div class="wrapper">
        <img src="public/assets/app/images/pattern/01.png" alt="Hero">
      </div>
    </div>
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        เข้าสู่ระบบ
      </h3>
      <div class="grids">
        <div class="grid xl-60 lg-60 md-60 sm-100 mt-0">
          <form action="">
            <div class="grids">
              <div class="grid sm-100">
                <div class="form-group style-02">
                  <label class="p fw-500">อีเมล/ชื่อผู้ใช้</label>
                  <div class="form-input">
                    <input class="style-02 size-01" type="text">
                  </div>
                </div>
              </div>
              <div class="grid sm-100 mt-2">
                <div class="form-group style-02 mt-3">
                  <label class="p fw-500">รหัสผ่าน</label>
                  <div class="form-input">
                    <input class="style-02 size-01" type="text">
                  </div>
                </div>
              </div>
              <div class="grid xl-2-3 lg-70 md-50 sm-50">
                <div class="captcha padding-style-01">
                  <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                </div>
              </div>
              <div class="grid xl-1-3 lg-30 md-50 sm-50">
                <div class="btns h-full">
                  <div href="#" class="btn btn-action btn-02 w-full">
                    เข้าสู่ระบบ
                  </div>
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="grid xl-40 lg-40 md-40 sm-100">
          <a class="ss-card ss-card-29" href="#">
            <div class="wrapper">
              <div class="icon">
                <img src="public/assets/app/images/icon/30.png" alt="">
              </div>
              <div class="text-container">
                <div class="text">
                  <p class="color-white fw-500">ยังไม่เป็นสมาชิก ?</p>
                  <p class="sm color-white">สามารถลงทะเบียนได้ที่นี้</p>
                </div>
                <div class="arrow">
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>