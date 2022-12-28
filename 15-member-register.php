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
        <div class="grid lg-50 md-2-3 sm-100 mt-2">
          <form action="">
            <div class="grids">
              <div class="grid sm-100 mt-2">
                <div class="form-group style-02">
                  <label class="p fw-500">ชื่อ <span class="text-danger">*</span></label>
                  <div class="form-input">
                    <input class="style-02 size-01" type="text">
                  </div>
                </div>
              </div>
              <div class="grid sm-100 mt-2">
                <div class="form-group style-02">
                  <label class="p fw-500">นามสกุล <span class="text-danger">*</span></label>
                  <div class="form-input">
                    <input class="style-02 size-01" type="text">
                  </div>
                </div>
              </div>
              <div class="grid sm-100 mt-2">
                <div class="form-group style-02">
                  <label class="p fw-500">อีเมล <span class="text-danger">*</span></label>
                  <div class="form-input">
                    <input class="style-02 size-01" type="text">
                  </div>
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
              </div>
              <div class="grid sm-100 mt-2">
                <div class="form-group style-02 mt-3">
                  <label class="p fw-500">ยืนยันรหัสผ่าน <span class="text-danger">*</span></label>
                  <div class="form-input">
                    <input class="style-02 size-01" type="text"/>
                    </div>
                  </div>
                </div>
              </div>






            </div>
            <!-- <label class="form-check ai-center form-check-container-02 pl-6 mt-3">
                      <input type="checkbox" class="form-check-input"/>
                      <span class="checkmark" style="left:0;"></span>
                      <div>
                        <p class="fw-400">
                          ข้าพเจ้ายอมรับและได้อ่านข้อความใน 
                          <a class="color-02 border-bottom bcolor-02 fw-400">ข้อตกลงและเงื่อนไข</a>
                          นี้โดยละเอียดแล้ว
                        </p>
                      </div>
                    </label> -->
                    <!-- <div class="captcha-container mt-5">
                      <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                    </div>
                    <div class="btns mt-2">
                      <div href="#" class="btn btn-action size-03 btn-03">
                        ยืนยัน
                      </div>
                      <div href="#" class="btn btn-action size-03 btn-05">
                        ยกเลิก
                      </div> -->
            
            
            
           
          </form>
        </div>
        <!-- <div class="grid lg-50 md-1-3 sm-100">
          <a class="ss-card ss-card-29" href="#">
            <div class="wrapper">
              <div class="icon">
                <img src="public/assets/app/images/icon/30.png" alt="">
              </div>
              <div class="text-container">
                <div class="text">
                  <p class="color-white fw-500">เป็นสมาชิกแล้ว ?</p>
                  <p class="sm color-white">สามารถเข้าสู่ระบบได้ที่นี่</p>
                </div>
                <div class="arrow">
                  <div class="arrow arrow-next">
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                </div>
              </div>
            </div>
          </a>
        </div> -->
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>