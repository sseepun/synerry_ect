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
      [ 'url' => '#', 'display' => 'RSS' ],
    ];
    $breadcrumbTitle = 'RSS';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/09.jpg';
    include('component/breadcrumb.php');
  ?>

  <div class="section-padding">
    <div class="container">
      <h3 class="fw-600 aos-init aos-animate" data-aos="fade-up" data-aos-delay="0">
        RSS
      </h3>
      <div data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="scroll-x-wrapper mt-4" data-simplebar>
        <div class="faq-04 pb-1" data-aos="fade-up" data-aos-delay="300">
          <?php for($i=0; $i<10; $i++){?>
            <div class="faq">
              <div class="question box-shadow style-02">
                <h3 class="ftag">
                  <div class="icon">
                    <img src="public/assets/app/images/icon/rss.png" alt="">
                  </div>
                </h3>
                <div class="text-container">
                  <p class="title sm lh-sm fw-500">
                    เปิดเผยราคากลาง กิจกรรมประชาสัมพันธ์และเผยแพร่ไวรัลวีดิโอ 
                    สปอตโทรทัศน์พร้อมล่ามภาษามือผ่านเครือข่ายสังคมออนไลน์ จำนวน 2 ช่องทาง
                  </p>
                  <div class="date-view">
                    <div class="wrapper">
                      <div class="icon">
                        <em class="fa-solid fa-calendar-days"></em>
                        <span class="p xs ml-2">08 มิถุนายน 2565</span>
                      </div>
                      <div class="icon">
                        <em class="fa-solid fa-eye"></em>
                        <span class="p xs ml-2">255</span>
                      </div>
                    </div>
                  </div>
                </div>
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