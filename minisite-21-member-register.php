<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'สมัครสมาชิก' ],
    ];
    $breadcrumbTitle = 'สมัครสมาชิก';
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
              สมัครสมาชิก
            </h3>
          </div>
          <div class="ss-box m-unset xxl size-03">
            <div class="grids flex-column-reverse sm">
              <div class="grid xl-70 lg-60 md-60 sm-100 mt-0">
                <form class="form style-03 style-02" action="action.php">
                  <div class="grids" data-aos="fade-up" data-aos-delay="150">
                    <div class="grid sm-100 mt-4">
                      <div class="form-group style-02">
                        <label class="p fw-500">ชื่อ <span class="text-danger">*</span></label>
                        <div class="form-input">
                          <input class="style-02 size-01" type="text">
                        </div>
                      </div>
                      <div class="padding-style-04">
                        <label class="text-danger style-02">กรุณากรอกชื่อ</label>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group style-02">
                        <label class="p fw-500">นามสกุล <span class="text-danger">*</span></label>
                        <div class="form-input">
                          <input class="style-02 size-01" type="text">
                        </div>
                      </div>
                      <div class="padding-style-04">
                        <label class="text-danger style-02">กรุณากรอกนามสกุล</label>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group style-02">
                        <label class="p fw-500">อีเมล <span class="text-danger">*</span></label>
                        <div class="form-input">
                          <input class="style-02 size-01" type="text">
                        </div>
                      </div>
                      <div class="padding-style-04">
                        <label class="text-danger style-02">กรุณากรอกอีเมล</label>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group style-02">
                        <label class="p pw-title fw-500">รหัสผ่าน <span class="text-danger">*</span></label>
                        <div class="form-input">
                          <div class="d-flex jc-end pw-desc">
                            <p class="sm">รหัสผ่านควรมีอย่างน้อย 8 ตัว</p>
                          </div>
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
                      <div class="padding-style-04">
                        <label class="text-danger style-02">กรุณากรอกรหัสผ่าน</label>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group style-02 mt-3">
                        <label class="p fw-500">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                        <div class="form-input">
                          <input class="style-02 size-01" type="text"/>
                          </div>
                      </div>
                      <div class="padding-style-04">
                        <label class="text-danger style-02">กรุณายืนยันรหัสผ่าน</label>
                      </div>
                    </div>
                    <div class="padding-style-04">
                      <label class="form-check ai-center form-check-container-02 style-02 pl-6 mt-3">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark" style="left:0;"></span>
                        <div>
                          <p class="fw-400">
                            ข้าพเจ้ายอมรับและได้อ่านข้อความใน 
                            <a class="color-02 color-black-theme bcolor-black-theme border-bottom bcolor-02 fw-400">ข้อตกลงและเงื่อนไข</a>
                            นี้โดยละเอียดแล้ว
                          </p>
                        </div>
                      </label>
                      <div class="captcha-container mt-5 jc-start">
                        <img src="public/assets/app/images/content/captcha.jpg" alt="">
                      </div>
                      <label class="text-danger style-02">กรุณายืนยันตัวตน</label>
                      <div class="btns mt-2">
                        <button type="submit" class="btn btn-action btn-popup-toggle size-03 btn-13" data-popup="99">
                          ยืนยัน
                        </button>
                        <button href="#" class="btn btn-action size-03 btn-05 btn-white-theme">
                          ยกเลิก
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid xl-30 lg-40 md-40 sm-100" data-aos="fade-up" data-aos-delay="150">
                  <a class="ss-card ss-card-69" href="#">
                    <div class="wrapper">
                      <div class="icon">
                        <img src="public/assets/app/images/icon/30.png" alt="">
                      </div>
                      <div class="text-container">
                        <div class="text">
                          <p class="h6 lh-sm fw-600">เป็นสมาชิกแล้ว ?</p>
                          <p class="sm lh-sm fw-400">สามารถเข้าสู่ระบบได้ที่นี้</p>
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
              </form>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <?php
    $listResult= ['register'];
    include_once('component/popup-file-error-style-02.php');
  ?>
  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>