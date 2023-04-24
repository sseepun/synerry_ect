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
      [ 'url' => '#', 'display' => 'ข่าวสารประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'ข่าวสาร/ประชาสัมพันธ์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/28.jpg';
    $formContainer = true;
    $sectionOptions = [ 'option-01', 'views' ];
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
    $content = [
      ['image' => 'public/assets/app/images/content/01.jpg'], 
      ['image' => 'public/assets/app/images/content/03.jpg'], 
      ['image' => 'public/assets/app/images/content/04.jpg'], 
      ['image' => 'public/assets/app/images/content/01.jpg'], 
      ['image' => 'public/assets/app/images/content/03.jpg'], 
      ['image' => 'public/assets/app/images/content/04.jpg'], 
      ['image' => 'public/assets/app/images/content/01.jpg'], 
      ['image' => 'public/assets/app/images/content/03.jpg'], 
      ['image' => 'public/assets/app/images/content/04.jpg'], 
      ['image' => 'public/assets/app/images/content/01.jpg'], 
      ['image' => 'public/assets/app/images/content/03.jpg'], 
      ['image' => 'public/assets/app/images/content/04.jpg'], 
    ]
  ?>

  <section class="section-14">
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ผลการค้นหา
            </h3>
          </div>
          <div class="mt-2" data-aos="fade-up" data-aos-delay="150">
            <span class="fw-400">ผลการค้นหา <span class="h5 color-02 color-black-theme fw-600">"การเลือกตั้ง"</span>
            <span>ค้นพบ <span class="color-02 color-black-theme fw-600">0</span> รายการ</span></span>
          </div>
          <div class="d-flex jc-center">
            <div class="content-found icon-white-theme popular-search-container mt-2" data-aos="fade-up" data-aos-delay="300">
              <div class="wrapper">
                <div class="icon">
                <em class="fa-solid fa-circle-xmark"></em>
                </div>
                <p class="h6 fw-400">ไม่พบเนื้อหาจากคำค้นหา <span class="h5 color-04 color-black-theme fw-600">"การเลือกตั้ง"</span></p>
              </div>
              <div class="mt-1">
                <div class="ss-tags style-03">
                  <div class="tag">
                    <span class="title">ข่าวประกาศ</span>
                  </div>
                </div>
                <div class="ss-tags style-03">
                  <div class="tag">
                    <span class="title">อบรมหลักสูตร</span>
                  </div>
                </div>
                <div class="ss-tags style-03">
                  <div class="tag">
                    <span class="title">การเลือกตั้ง</span>
                  </div>
                </div>
                <div class="ss-tags style-03">
                  <div class="tag">
                    <span class="title">รายงานจัดซื้อจัดจ้าง</span>
                  </div>
                </div>
                <div class="ss-tags style-03">
                  <div class="tag">
                    <span class="title">ระดับชำนาญการพิเศษ</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          $style = 'style-02';
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </section>

  <div class="mt-6 pt-6"></div>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>