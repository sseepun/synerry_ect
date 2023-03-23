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
      [ 'url' => '#', 'display' => 'เข้าสู่ระบบ' ],
    ];
    $breadcrumbTitle = 'เข้าสู่ระบบ';
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
            <div class="grids flex-column-reverse md">
              <div class="grid xl-70 lg-70 md-100 sm-100 mt-0">
                <form class="form style-03 style-04 size-02 style-02" action="action.php">
                  <div class="grids" data-aos="fade-up" data-aos-delay="150">
                    <div class="grid sm-100 mt-4">
                      <div class="form-group style-02">
                        <label class="p fw-500">อีเมล/ชื่อผู้ใช้ <span class="text-danger">*</span></label>
                        <div class="form-input">
                          <input class="style-02 size-01" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group style-02">
                        <label class="p pw-title fw-500">รหัสผ่าน <span class="text-danger">*</span></label>
                        <div class="form-input">
                          <input class="style-02 size-01" type="password"/>
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="padding-style-04">
                        <label class="form-check ai-center form-check-container-02 style-02 pl-6 mt-3">
                          <input type="checkbox" class="form-check-input"/>
                          <span class="checkmark" style="left:0;"></span>
                          <p class="fw-400">จดจำรหัสผ่าน</p>
                        </label>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="padding-style-04">
                        <div class="captcha-container">
                          <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                          <div class="btns ai-center ml-4">
                            <button type="submit" href="#" class="btn btn-action btn-26">
                              <span class="mr-2">เข้าสู่ระบบ</span>
                              <em class="fa-solid fa-arrow-right"></em>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="padding-style-04">
                        <div class="ss-sep-01">
                          <p class="fw-500">หรือ</p>
                        </div>
                        <div class="grids no-gap">
                          <div class="grid sm-50 mt-2">
                            <div class="btns pr-1 pr-unset-xs">
                              <div href="#" class="btn btn-action-style-04 style-02 btn-fb w-full">
                                <div class="wrapper">
                                  <div class="icon fb">
                                    <em class="fa-brands fa-facebook-f"></em>
                                  </div>
                                  <div class="text-container">
                                    <p class="fw-400">เข้าสู่ระบบด้วย FACEBOOK</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="grid sm-50 mt-2">
                            <div class="btns pl-1 pl-unset-xs">
                              <div href="#" class="btn btn-action-style-04 style-02 btn-gg w-full">
                                <div class="wrapper">
                                  <div class="icon gg">
                                    <em class="fa-brands fa-google"></em>
                                  </div>
                                  <div class="text-container">
                                    <p class="fw-400">เข้าสู่ระบบด้วย GOOGLE</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="grid sm-50 mt-2">
                            <div class="btns pr-1 pr-unset-xs">
                              <div href="#" class="btn btn-action-style-04 style-02 btn-line w-full">
                                <div class="wrapper">
                                  <div class="icon line">
                                    <em class="fa-brands fa-line"></em>
                                  </div>
                                  <div class="text-container">
                                    <p class="fw-400">เข้าสู่ระบบด้วย LINE</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="grid sm-50 mt-2">
                            <div class="btns pl-1 pl-unset-xs">
                              <div href="#" class="btn btn-action-style-04 style-02 btn-tw w-full">
                                <div class="wrapper">
                                  <div class="icon tw">
                                    <em class="fa-brands fa-twitter"></em>
                                  </div>
                                  <div class="text-container">
                                    <p class="fw-400">เข้าสู่ระบบด้วย TWITTER</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid xl-30 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="150">
                  <a class="ss-card ss-card-69" href="#">
                    <div class="wrapper">
                      <div class="icon">
                        <img src="public/assets/app/images/icon/30.png" alt="">
                      </div>
                      <div class="text-container">
                        <div class="text">
                          <p class="h6 lh-sm fw-600">ยังไม่เป็นสมาชิก ?</p>
                          <p class="sm lh-sm fw-400">สามารถลงทะเบียนได้ที่นี้</p>
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

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>