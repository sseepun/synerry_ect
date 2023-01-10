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
      [ 'url' => '#', 'display' => 'คำวินิจฉัยคณะกรรมการการเลือกตั้ง' ],
    ];
    $breadcrumbTitle = 'คำวินิจฉัยคณะกรรมการการเลือกตั้ง';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/10.jpg';
    include('component/breadcrumb.php');
  ?>

  <div class="section-padding">
    <div class="container">
      <h3 class="fw-600" data-aos="fade-up" data-aos-delay="0">
        คำวินิจฉัยคณะกรรมการการเลือกตั้ง
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view-03', 'rss'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="btns jc-end xs-center mt-6" data-aos="fade-up" data-aos-delay="300">
        <div class="btn btn-action-style-03 btn-02 mr-3" href="#">
          <em class="fa-solid fa-arrow-down"></em>
          <em class="fa-solid fa-arrow-up"></em>
        </div>
        <div href="#" class="btn btn-action size-02 btn-02">
          ดาวน์โหลดทั้งหมด (30)
        </div>
      </div>
      <div class="scroll-x-wrapper" data-simplebar>
        <div class="faq-05 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="450">
          <?php for($i=0; $i<10; $i++){?>
            <div class="faq">
              <div class="question box-shadow style-02">
                <h3 class="ftag">
                  <div class="icon">
                    <img src="public/assets/app/images/file/pdf.png" alt="">
                  </div>
                </h3>
                <div class="text">
                  <div>
                    <p class="fw-600">มาตรา</p>
                    <p class="sm fw-500">ม.120 พรบ.เลือกตั้ง</p>
                  </div>
                </div>
                <p class="title sm lh-sm fw-500">
                  คำวินิจฉัยที่ 1212/2565 เรื่อง การวินิจฉัยสิทธิสมัครรับเลือกตั้งสมาชิกสภาเทศบาลตำบลดอนมนต์ เขตเลือกตั้งที่ 2 
                </p>
                <div class="date-view">
                  <div class="wrapper">
                    <div class="icon">
                      <em class="fa-solid fa-calendar-days"></em>
                      <span class="p sm ml-1">08 มิถุนายน 2565</span>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-eye"></em>
                      <span class="p sm ml-1">255</span>
                    </div>
                  </div>
                </div>
                <div class="button-download">
                  <a class="btn btn-action-style-02" href="#">
                    <em class="fa-solid fa-arrow-down"></em>
                  </a>
                  <p class="xs text-center mt-1">ดาวน์โหลด</p>
                </div>
              </div>
            </div>
          <?php }?>
        </div>
      </div>
      <div class="mt-6 pt-4" data-aos="fade-up" data-aos-delay="0">
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