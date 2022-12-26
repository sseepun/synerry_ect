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
      [ 'url' => '#', 'display' => 'รีเซ็ทรหัสผ่าน' ],
    ];
    $breadcrumbTitle = 'ลืมรหัสผ่าน';
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
        ขอรหัสผ่านใหม่
      </h3>
      <div class="ss-box xl">
        <p class="text-center fw-400">กรุณากรอกอีเมล์ในช่องด้านล่างเพื่อทำการจัดส่งรหัสผ่านใหม่</p>
        <form action="/action_page.php">
          <div class="form-group style-02 mt-3">
            <label class="p size-03 fw-500">อีเมล</label>
            <div class="form-input size-02">
              <input class="style-02 size-03" type="email"/>
              <div class="captcha-container d-flex ai-center mt-5">
                <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                <div class="btns ml-3">
                  <div href="#" class="btn btn-action btn-02" value="submit" type="submit">
                    ขอรหัสผ่านใหม่
                  </div>
                </div>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>