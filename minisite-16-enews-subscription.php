<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'สมัครรับข่าวสาร' ],
    ];
    $breadcrumbTitle = 'สมัครรับข่าวสาร';
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
              แบบฟอร์มสมัครรับข่าวสาร
            </h3>
          </div>
          <div class="ss-box m-unset xl mt-6" data-aos="fade-up" data-aos-delay="150">
            <form class="form style-01" action="">
              <div class="form-group">
                <label class="fw-500" for="">อีเมล <span class="text-danger">*</span></label>
                <input type="email" placeholder="กรุณากรอกอีเมลที่ต้องการรับข่าวสาร" required />
              </div>
              <div class="form-group">
                <label class="fw-500">กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม</label>
                <div class="grids">
                  <div class="grid md-1-3 sm-50 mt-3">
                    <label class="form-check style-03 ai-center form-check-container-03">
                      <input type="checkbox" class="form-check-input" onclick="myFunction()">
                      <span class="checkmark"></span>
                      <p class="ml-2 fw-400">วารสารออนไลน์</p>
                    </label>
                  </div>
                  <div class="grid md-1-3 sm-50 mt-3">
                    <label class="form-check style-03 ai-center form-check-container-03">
                      <input type="checkbox" class="form-check-input" onclick="myFunction()">
                      <span class="checkmark"></span>
                      <p class="ml-2 fw-400">ข่าวประชาสัมพันธ์</p>
                    </label>
                  </div>
                  <div class="grid md-1-3 sm-50 mt-3">
                    <label class="form-check style-03 ai-center form-check-container-03">
                      <input type="checkbox" class="form-check-input">
                      <span class="checkmark"></span>
                      <p class="ml-2 fw-400">ข่าวรับสมัครทรัพยากร</p>
                    </label>
                  </div>
                  <div class="grid sm-100 mt-3">
                    <label class="form-check style-03 ai-center form-check-container-03">
                      <input type="checkbox" class="form-check-input">
                      <span class="checkmark"></span>
                      <p class="ml-2 fw-400">ข่าวการจัดซื้อจัดจ้าง</p>
                    </label>
                    <div class="pl-6">
                      <div class="grids">
                        <div class="grid sm-100 mt-2">
                          <label class="form-check style-03 ai-center form-check-container-03">
                            <input type="checkbox" class="form-check-input">
                            <span class="checkmark"></span>
                            <p class="ml-2 fw-400">การเปิดเผยราคากลาง</p>
                          </label>
                        </div>
                        <div class="grid sm-100 mt-2">
                          <label class="form-check style-03 ai-center form-check-container-03">
                            <input type="checkbox" class="form-check-input">
                            <span class="checkmark"></span>
                            <p class="ml-2 fw-400">แผน-ผลการจัดซื้อจัดจ้าง</p>
                          </label>
                        </div>
                        <div class="grid sm-100 mt-2">
                          <label class="form-check style-03 ai-center form-check-container-03">
                              <input type="checkbox" class="form-check-input">
                              <span class="checkmark"></span>
                              <p class="ml-2 fw-400">สรุปผลการดำเนินการจัดซื้อจัดจ้าง (สขร.1)</p>
                          </label>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="form-footer mt-6">
                <div class="grids">
                  <div class="grid lg-50 md-50 sm-100 mt-3">
                    <div class="img-container">
                      <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="CAPTCHA">
                    </div>
                  </div>
                  <div class="grid lg-50 md-50 sm-100">
                    <div class="btns ai-center jc-end">
                      <button type="submit" class="btn btn-popup-toggle btn-action btn-13 size-03" data-popup="99">
                        สมัครรับข่าวสาร
                      </button>
                      <button type="cancel" href="#" class="btn btn-white-theme btn-action btn-05 size-03">
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
  </section>

  <?php
    $listResult= ['enews-subscription'];
    include_once('component/popup-file-error-style-02.php');
  ?>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>