<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-style-02.php'); ?>

  <section class="banner-01">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<4; $i++){?>
          <div class="slide size-02">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/02.jpg');"></div>
            <div class="hero size-02 animate" style="--delay:.55s;">
              <img src="public/assets/app/images/hero/05.png" class="Hero" />
            </div>
            <div class="container">
              <div class="quote-container style-02 animate" style="--delay:.4s;">
                <div class="wrapper">
                  <h2 class="color-black-theme fw-500">จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก</h2>
                  <h1 class="color-black-theme fw-700 mt-1">
                    <span class="color-black-theme color-04">ประชาธิปไตย</span><br />
                    โปร่งใส<span class="color-black-theme h3 fw-500">และ</span>เป็นธรรม
                  </h1>
                  <img class="quote quote-left" src="public/assets/app/images/icon/15.png" alt="Quote" />
                  <img class="quote quote-right" src="public/assets/app/images/icon/16.png" alt="Quote" />
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="arrows style-02">
        <div class="arrow size-01 arrow-prev">
          <img src="public/assets/app/images/icon/17.png" alt="Arrow" />
        </div>
        <div class="arrow size-01 arrow-next">
          <img src="public/assets/app/images/icon/18.png" alt="Arrow" />
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-03.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>