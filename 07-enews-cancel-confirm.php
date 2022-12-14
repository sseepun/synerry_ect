<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav.php'); ?>
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
      <div class="ss-box xl mt-4" data-aos="fade-up" data-aos-delay="150">
        <div class="d-flex ai-center jc-center">
          <em class="fa-solid fa-check color-02"></em>
          <p class="ml-2 fw-400">ระบบได้ทำการยกเลิกการสมัครรับจดหมายของคุณเรียบร้อยแล้ว คลิกที่นี้เพื่อกลับไปยังหน้าแรก</p>
        </div>
        <div class="btns jc-center mt-2">
          <div href="#" class="btn btn-action btn-02">
            กลับไปที่หน้าแรก
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>