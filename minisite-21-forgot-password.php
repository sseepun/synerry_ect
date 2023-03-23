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
      [ 'url' => '#', 'display' => 'ขอรหัสผ่านใหม่' ],
    ];
    $breadcrumbTitle = 'ขอรหัสผ่านใหม่';
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
              รีเซ็ทรหัสผ่าน
            </h3>
          </div>
          <div class="ss-box lg">
            <p class="pl-unset-sm fw-400 mt-2" style="padding-left:8rem;" data-aos="fade-up" data-aos-delay="150">
              กรุณากรอกอีเมลในช่องด้านล่างเพื่อทำการตั้งค่ารหัสผ่านใหม่
            </p>
            <form class="form style-04 style-02" action="action.php">
              <div class="grids" data-aos="fade-up" data-aos-delay="150">
                <div class="grid sm-100 mt-0">
                  <div class="form-group style-02">
                    <label class="p fw-500">อีเมล <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01" type="email" required>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-3">
                  <div class="padding-style-04">
                    <div class="captcha-container">
                      <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                      <div class="btns ai-center ml-4">
                        <button type="submit" href="#" class="btn btn-action btn-26 ">
                          <span class="mr-2">ขอรหัสผ่านใหม่</span>
                          <em class="fa-solid fa-arrow-right"></em>
                        </button>
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

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>