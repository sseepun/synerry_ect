<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php $sidePanelStyle = 'style-02'; ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข้อมูลสำนักงาน' ],
      [ 'url' => '#', 'display' => 'ข้อมูลการปกครอง' ],
    ];
    $breadcrumbTitle = 'ข้อมูลการปกครอง';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/27.jpg';
    $backgroundColor = 'style-02';
    $sectionOptions = ['']; // ['views', 'rss']
    $formContainer = false; // select form
    include('component/breadcrumb-style-02.php');
  ?>

  <?php include('data/area.php') ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body">
          <div class="ss-title style-02">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ข้อมูลการปกครอง
            </h3>
          </div>
          <p class="h5 color-15 fw-500 mt-6">กรุงเทพมหานคร</p>
          <p class="fw-500">เป็นการปกครองท้องถิ่นแบบพิเศษ ประกอบด้วย 50 เขตปกครอง ดังนี้</p>
          <div class="grids">
            <?php foreach($content as $d) {?>
              <div class="grid lg-25">
                <div class="btn btn-action style-02 btn-19">
                  <span class="h6 number fw-500"><?= $d['number'] ?></span>
                  <span class="fw-400"><?= $d['area'] ?></span>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-style-09.php'); ?>
  <?php include_once('include/script.php'); ?>

</body>
</html>