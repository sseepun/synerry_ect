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
      [ 'url' => '#', 'display' => 'ตั้งรหัสผ่านใหม่' ],
    ];
    $breadcrumbTitle = 'ตั้งรหัสผ่านใหม่';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/39.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full pb-6">
        <div class="ss-box-shadow md"></div>
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ตั้งรหัสผ่านใหม่
            </h3>
          </div>
          <div class="ss-box lg">
            <form class="form style-04 style-02" action="action.php">
              <div class="grids" data-aos="fade-up" data-aos-delay="150">
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p pw-title ai-start fw-500">รหัสผ่านใหม่ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="password" required/>
                      <div class="password-level level-1">
                        <div class="levels">
                          <div></div><div></div><div></div><div></div>
                        </div>
                        <p class="sm fw-300">
                          การคาดเดาของรหัสผ่าน <span class="fw-600 text">ง่าย</span>
                        </p>
                        <label class="text-danger style-02">กรุณากรอกรหัสผ่าน</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02 mt-3">
                    <label class="p fw-500 ws-nowrap">ยืนยันรหัสผ่านใหม่ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="text"/>
                      <label class="text-danger style-02">กรุณายืนยันรหัสผ่าน</label>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-3">
                  <div class="padding-style-04">
                    <div class="captcha-container d-flex ai-start">
                      <div>
                        <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="CAPTCHA">
                        <label class="text-danger style-02">กรุณายืนยันตัวตน</label>
                      </div>
                      <div class="btn btn-action btn-36 c-btn c-btn--animate-left-right mt-2 ml-4">
                        <div class="c-wrapper jc-center">
                          <span> รีเซ็ทรหัสผ่านใหม่</span> 
                          <span class="c-icon pl-2">
                            <em class=" fa-solid fa-arrow-right"></em>
                          </span>
                        </div>
                      </div>
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
    $listResult= ['mini-re-password'];
    include_once('component/popup-file-error-style-02.php');
  ?>
  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>