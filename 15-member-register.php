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
        สมัครสมาชิก
      </h3>
      <div class="grids">
        <div class="grid lg-50">
          <form action="" class="mt-5">
            <div class="form-group style-02">
              <label class="p fw-500">ชื่อ <span class="text-danger">*</span></label>
              <div class="form-input">
                <input class="style-02 size-01" type="text">
              </div>
            </div>
            <div class="form-group style-02 mt-3">
              <label class="p fw-500">นามสกุล <span class="text-danger">*</span></label>
              <div class="form-input">
                <input class="style-02 size-01" type="text">
              </div>
            </div>
            <div class="form-group style-02 mt-3">
              <label class="p fw-500">อีเมล <span class="text-danger">*</span></label>
              <div class="form-input">
                <input class="style-02 size-01" type="text">
              </div>
            </div>
            <div class="d-flex jc-end mt-2">
              <p class="sm">รหัสผ่านควรมีอย่างน้อย 8 ตัว</p>
            </div>
            <div class="form-group style-02 mt-0">
              <label class="p fw-500">รหัสผ่าน <span class="text-danger">*</span></label>
              <div class="form-input">
                <input class="style-02 size-01" type="text">
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
            <div class="form-group style-02 mt-3">
              <label class="p fw-500">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
              <div class="form-input">
                <input class="style-02 size-01" type="text">
              </div>
            </div>
            <div class="captcha-container mt-5">
              <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
              <div class="btns ml-4">
                <div href="#" class="btn btn-action btn-03">
                  ยกเลิกรับข่าวสาร
                </div>
              </div>
            </div>
          </form>
        </div>
        <div class="grid lg-50">

        </div>
      </div>
        
      
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>