<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'สื่อประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'สื่อประชาสัมพันธ์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/07.jpg';
    include('component/breadcrumb.php');
  ?>

  <?php 
    $ebooks = [
      ['image' => 'public/assets/app/images/content/55.jpg'], 
      ['image' => 'public/assets/app/images/content/56.jpg'],
      ['image' => 'public/assets/app/images/content/57.jpg'],
      ['image' => 'public/assets/app/images/content/58.jpg'],
      ['image' => 'public/assets/app/images/content/59.jpg'],
    ]
  ?>

  <section class="section-padding section-09">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ไฮไลต์สื่อประชาสัมพันธ์
      </h3>
      <div class="swiper-background bg-03 mt-5" data-aos="fade-up" data-aos-delay="150">
        <div class="text-wrapper text-center">
          <p class="h6 color-black-theme fw-500">
            คู่มือปฏิบัติงานผู้อำนวยการการเลือกตั้ง<br/>
            ประจำองค์กรปกครองส่วนท้องถิ่นและคณะกรรมการ
            <br/>การเลือกตั้งประจำองค์กรปกครองส่วนท้องถิ่น
          </p>
        </div>
        <div class="swiper-container pos-relative">
          <div class="swiper-wrapper">
            <?php foreach($ebooks as $d) {?>
              <div class="swiper-slide">
                <div class="ss-img vertical">
                  <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                </div>
              </div>
            <?php }?>
          </div>
        </div> 
        <div class="swiper-arrows-container">
          <div class="arrows-container">
            <div class="wrapper">
              <div class="btn btn-icon-prev">
                <div class="arrow">
                  <em class="fa-solid fa-arrow-left"></em>
                </div>
              </div>
              <div class="btn btn-icon-next">
                <div class="arrow">
                  <em class="fa-solid fa-arrow-right"></em>
                </div>
              </div>
            </div>
          </div>
        </div>
      <div class="shelf-container">
        <img class="img" src="public/assets/app/images/content/shelf.png">  
      </div>
      </div>
    </div>
  </section>

  <?php 
    $news03 = [
      [
        'image' => 'public/assets/app/images/content/47.jpg', 
        'title' => 'รวมกฎหมาย ระเบียบ และประกาศที่เกี่ยวข้องกับงานพรรคการเมือง'
      ],[
        'image' => 'public/assets/app/images/content/48.jpg', 
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/49.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/50.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/51.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/52.jpg',
        'title' => 'รวมกฎหมาย ระเบียบ และประกาศที่เกี่ยวข้องกับงานพรรคการเมือง'
      ],[
        'image' => 'public/assets/app/images/content/53.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/54.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/47.jpg', 
        'title' => 'รวมกฎหมาย ระเบียบ และประกาศที่เกี่ยวข้องกับงานพรรคการเมือง'
      ],[
        'image' => 'public/assets/app/images/content/48.jpg', 
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/49.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/50.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],
    ]
  ?>

  <section class="section-padding">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        สื่อประชาสัมพันธ์
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view', 'rss'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($news03 as $d) {?>
          <div class="grid xl-25 lg-1-3 md-50">
            <a class="ss-card ss-card-17" href="#">
              <div class="ss-img vertical">
                <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                <div class="hover-container">
                  <div class="icon sm">
                    <img src="public/assets/app/images/icon/play.png" alt="Icon">
                  </div>
                </div>
                <div class="filter style-01"></div>
                <div class="card-line style-01"></div>
              </div>
              <div class="text-container">
                <p class="title fw-500 mt-2">
                  <?= $d['title']?>
                </p>
                <div class="card-bottom mt-1">
                  <div class="wrapper">
                    <div class="icon">
                      <em class="fa-solid fa-calendar-days"></em>
                      <span class="p sm ml-2">08 มิถุนายน 2565</span>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-eye"></em>
                      <span class="p sm ml-2">255</span>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-share-nodes"></em>
                      <span class="p sm ml-2">208</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="btns jc-center mt-5">
                <div class="btn btn-action-style-06">
                  <span>อ่านเพิ่มเติม</span><div class="sep"></div>
                </div>
              </div>
            </a>
          </div>
        <?php }?>
      </div>
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>