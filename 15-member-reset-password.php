<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ตั้งรหัสผ่านใหม่' ],
    ];
    $breadcrumbTitle = 'ตั้งรหัสผ่านใหม่';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/06.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-08 ovf-hidden">
    <div class="pattern">
      <div class="wrapper">
        <img src="public/assets/app/images/pattern/01.png" alt="Hero">
      </div>
    </div>
    <div class="container">
      <h3 class="fw-600" data-aos="fade-up" data-aos-delay="0">
        ตั้งรหัสผ่านใหม่
      </h3>
      <div class="ss-box md" data-aos="fade-up" data-aos-delay="0">
        <form class="form style-06" action="action.php">
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
              <label class="text-danger style-02">กรุณากรอกรหัสผ่าน</label>
            </div>
          </div>
          <div class="form-group style-02 mt-3">
            <label class="p size-02 fw-500">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
            <div class="form-input size-02">
              <input class="style-02 size-01" type="text"/>
            </div>
            <div class="padding-style-03">
              <label class="text-danger style-02">กรุณายืนยันรหัส</label>
            </div>
            <div class="captcha-container d-flex ai-start padding-style-03 mt-5">
              <div> 
                <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                <label class="text-danger style-02">กรุณายืนยันตัวตน</label>
              </div>
              <div class="btns mt-2 ml-3">
                <a href="./01-home-01.php" class="btn btn-action btn-popup-toggle btn-02" data-popup="99">
                  ยืนยัน
                </a>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php
    $listResult= ['re-password'];
    include_once('component/popup-file-error-style-02.php');
  ?>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>