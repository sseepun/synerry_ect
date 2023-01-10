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
      [ 'url' => '#', 'display' => 'ยกเลิกการรับข่าวสาร' ],
    ];
    $breadcrumbTitle = 'ยกเลิกการรับข่าวสาร';
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
        ยกเลิกการรับข่าวสาร
      </h3>
      <div class="ss-box m-unset xl" data-aos="fade-up" data-aos-delay="150">
        <form action="" class="mt-5">
          <div class="form-group">
            <label for="">
              <span class="p sm fw-400">หากท่านต้องการยกเลิกการรับช่าวสาร กรุณากรอกอีเมล์ที่ท่านต้องการยกเลิกด้านล่าง</span>
            </label>
            <input class="style-02" type="text" placeholder="อีเมล *" required>
          </div>
          <div class="captcha-container mt-5">
            <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
            <div class="btns ml-4">
              <button  type="submit" href="#" class="btn btn-action btn-03">
                ยกเลิกรับข่าวสาร
              </button>
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