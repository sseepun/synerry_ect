<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-minisite-dropdown-menu.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ยกเลิกการรับข่าวสาร' ],
    ];
    $breadcrumbTitle = 'ยกเลิกการรับข่าวสาร';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/39.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14 mb-6">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body bg-white-theme">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              แบบฟอร์มยกเลิกการรับข่าวสาร
            </h3>
          </div>
          <div class="ss-box m-unset xl mt-6" data-aos="fade-up" data-aos-delay="150">
            <form class="form style-01" action="">
              <p class="fw-500">หากท่านต้องการยกเลิกการรับช่าวสาร กรุณากรอกอีเมล์ที่ท่านต้องการยกเลิกด้านล่าง</p>
              <div class="form-group">
                <label class="fw-500" for="">อีเมล <span class="text-danger">*</span></label>
                <input type="email" placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร" required />
              </div>
              <div class="form-footer mt-6">
                <div class="grids">
                  <div class="grid lg-50 md-50 sm-100 mt-3">
                    <div class="img-container">
                      <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="CAPTCHA">
                    </div>
                  </div>
                  <div class="grid lg-50 md-50 sm-100">
                    <div class="btns ai-center">
                      <button type="cancel" href="#" class="btn btn-popup-toggle black-theme btn-action btn-36 theme-bg-02" data-popup="99">
                        ยกเลิกรับข่าวสาร
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
  </section>

  <?php
    $listResult= ['enews-cancel'];
    include_once('component/popup-file-error-style-02.php');
  ?>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>