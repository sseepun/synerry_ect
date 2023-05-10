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
                            <a class="color-02 color-black-theme bcolor-black-theme title-theme bcolor-theme border-bottom bcolor-02 fw-400">ข้อตกลงและเงื่อนไข</a>
                            นี้โดยละเอียดแล้ว
                          </p>
                        </div>
                      </label>
                      <div class="captcha-container mt-5 jc-start">
                        <img src="public/assets/app/images/content/captcha.jpg" alt="">
                      </div>
                      <label class="text-danger style-02">กรุณายืนยันตัวตน</label>
                      <div class="btns mt-2">
                        <button type="submit" class="btn btn-action btn-popup-toggle size-03 btn-36 theme-bg-02" data-popup="99">
                          ยืนยัน
                        </button>
                        <button href="#" class="btn btn-action size-03 btn-37 btn-white-theme">
                          ยกเลิก
                        </button>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid xl-30 lg-40 md-40 sm-100" data-aos="fade-up" data-aos-delay="150">
                  <a class="ss-card ss-card-69 fling" href="#">
                    <div class="wrapper">
                      <div class="icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 336 240">
                          <g>
                            <path d="M168,0c43.2,0,86.5,0,129.7,0C320.8,0,336,15.2,336,38.2c0,54.5,0,109,0,163.5c0,23-15.2,38.3-38.3,38.3
                              c-86.5,0-173,0-259.4,0C15.3,240,0,224.7,0,201.7c0-54.5,0-109,0-163.5C0,15.3,15.3,0,38.3,0C81.5,0,124.7,0,168,0z M102.8,119.9
                              c-1.6,0.3-2.7,0.6-3.7,0.8c-28.5,3.9-51,29.5-51.1,58.3c0,7.9,4.9,13,12.7,13c31.5,0,63,0,94.5,0c7.9,0,12.8-5.1,12.7-13
                              c-0.1-27.1-20.1-51.7-46.7-57.5c-2.5-0.5-5.1-1-8.3-1.6c25.2-5.7,32.6-26,30.8-40c-2.4-18.5-17.3-31.8-35.4-31.9
                              C90,47.9,74.8,61.3,72.2,79.9C69.7,98.2,81.5,113.8,102.8,119.9z M233.9,108c13.5,0,27,0,40.5,0c7.7,0,13.1-4.9,13.1-11.9
                              c0.1-7.1-5.3-12.1-13.2-12.1c-27,0-54,0-81,0c-7.9,0-13.4,4.9-13.3,12c0,7.1,5.5,12,13.4,12C206.9,108,220.4,108,233.9,108z
                              M222.2,132c-9.6,0-19.2,0-28.9,0c-7.9,0-13.3,5-13.3,12.1c0,6.9,5.5,11.9,13.1,11.9c19.2,0,38.5,0,57.7,0c7.7,0,13.1-5,13.1-11.9
                              c0.1-7.1-5.4-12.1-13.3-12.1C241.2,132,231.7,132,222.2,132z"></path>
                          </g>
                        </svg>
                      </div>
                      <div class="text-container">
                        <div class="text">
                          <p class="h6 lh-sm fw-600">เป็นสมาชิกแล้ว ?</p>
                          <p class="sm lh-sm fw-400">สามารถเข้าสู่ระบบได้ที่นี้</p>
                        </div>
                        <div class="arrow c-btn c-btn--animate-left-right">
                          <div class="arrow arrow-next c-icon pl-2">
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