<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-style-01.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'รีเซ็ทรหัสผ่าน' ],
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
      <h3 class="fw-600" data-aos="fade-up" data-aos-delay="0">
        รีเซ็ทรหัสผ่าน
      </h3>
      <div class="ss-box xl" data-aos="fade-up" data-aos-delay="0">
        <p class="text-center text-sm-unset fw-400">
          กรุณากรอกอีเมล์ในช่วงด้านล่างเพื่อทำการตั้งค่ารหัสผ่านใหม่
        </p>
        <div class="form-group style-02 mt-3">
          <label class="p pw-title size-02 fw-500">รหัสผ่าน <span class="text-danger">*</span></label>
          <div class="form-input size-02">
            <input class="style-02 size-01" type="password"/>
          </div>
          <div class="password-level level-1 padding-style-03">
            <div class="levels">
              <div></div><div></div><div></div><div></div>
            </div>
            <p class="sm fw-300">
              การคาดเดาของรหัสผ่าน <span class="fw-600 text">ง่าย</span>
            </p>
          </div>
        </div>
        <div class="form-group style-02 mt-3">
          <label class="p size-02 fw-500">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
          <div class="form-input size-02">
            <input class="style-02 size-01" type="text"/>
          </div>
          <div class="captcha-container d-flex ai-center padding-style-03 mt-5">
            <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
            <div class="btns ml-3">
              <div href="#" class="btn btn-action btn-02">
                รีเซ็ทรหัสผ่านใหม่
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>