<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'บริการ RSS' ],
    ];
    $breadcrumbTitle = 'บริการ RSS';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/09.jpg';
    include('component/breadcrumb.php');
  ?>

  <div class="section-padding section-padding-top">
    <div class="container">
      <h3 class="fw-600 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
        บริการ RSS
      </h3>
      <div class="mt-4" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="scroll-x-wrapper mt-3" data-simplebar>
        <div class="faq-03 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="300">
          <?php for($i=0; $i<12; $i++){?>
            <div class="faq">
              <div class="question box-shadow style-02">
                <h3 class="ftag">
                  <div class="icon">
                    <img src="public/assets/app/images/icon/rss.png" alt="">
                  </div>
                </h3>
                <p class="title color-02 sm lh-sm fw-500">
                  ตรวจสอบข้อมูลสมาชิกพรรการเมือง
                </p>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </div>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>