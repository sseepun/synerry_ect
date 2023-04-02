<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php // include_once('component/page-loader.php'); ?>
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
      [
        'image' => 'public/assets/app/images/content/55.jpg',
        'title' => 'คู่มือปฏิบัติงานผู้อำนวยการการเลือกตั้ง ประจำองค์กรปกครองส่วนท้องถิ่นและคณะกรรมการ การเลือกตั้งประจำองค์กรปกครองส่วนท้องถิ่น',
      ],
      [
        'image' => 'public/assets/app/images/content/56.jpg',
        'title' => 'คู่มือประชาชน พลเมืองคุณภาพ',
      ],
      [
        'image' => 'public/assets/app/images/content/57.jpg',
        'title' => 'คู่มือปฏิบัติงานผู้อำนวยการการเลือกตั้ง ประจำองค์กรปกครองส่วนท้องถิ่นและคณะกรรมการ การเลือกตั้งประจำองค์กรปกครองส่วนท้องถิ่น',
      ],
      [
        'image' => 'public/assets/app/images/content/58.jpg',
        'title' => 'A',
      ],
      [
        'image' => 'public/assets/app/images/content/59.jpg',
        'title' => 'คู่มือปฏิบัติงานผู้อำนวยการการเลือกตั้ง ประจำองค์กรปกครองส่วนท้องถิ่นและคณะกรรมการ การเลือกตั้งประจำองค์กรปกครองส่วนท้องถิ่น',
      ],
      [
        'image' => 'public/assets/app/images/content/55.jpg',
        'title' => 'A',
      ],
      [
        'image' => 'public/assets/app/images/content/56.jpg',
        'title' => 'คู่มือปฏิบัติงานผู้อำนวยการการเลือกตั้ง ประจำองค์กรปกครองส่วนท้องถิ่นและคณะกรรมการ การเลือกตั้งประจำองค์กรปกครองส่วนท้องถิ่น',
      ],
      [
        'image' => 'public/assets/app/images/content/57.jpg',
        'title' => 'A',
      ],
      [
        'image' => 'public/assets/app/images/content/58.jpg',
        'title' => 'คู่มือปฏิบัติงานผู้อำนวยการการเลือกตั้ง ประจำองค์กรปกครองส่วนท้องถิ่นและคณะกรรมการ การเลือกตั้งประจำองค์กรปกครองส่วนท้องถิ่น',
      ],
      [
        'image' => 'public/assets/app/images/content/59.jpg',
        'title' => 'A',
      ],
    ]
  ?>

  <section class="section-padding section-09">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ไฮไลต์สื่อประชาสัมพันธ์
      </h3>
      <div class="swiper-background bg-03 mt-5" data-aos="fade-up" data-aos-delay="150">
        <div class="text-wrapper d-flex ai-center jc-center" style="height:6.375rem;">
          <p class="h6 color-black-theme fw-500 text-center swiper-title"></p>
        </div>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach($ebooks as $d){?>
              <div class="swiper-slide" data-title="<?= $d['title'] ?>">
                <div class="ss-card ss-card-72">
                  <div class="ss-img vertical">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                  </div>
                  <div class="shadow-wrapper">
                    <img src="public/assets/app/images/content/shadow-book.png" alt="Shadow" />
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="shelf-container">
          <img class="img" src="public/assets/app/images/content/shelf-02.png" alt="Shelf">  
        </div>
      </div>
    </div>
    <?php if(sizeof($ebooks) > 1){?>
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
    <?php }?>
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
        'image' => 'public/assets/app/images/content/47.jpg',
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
              <div class="wrapper">
                <div class="img-wrapper">
                  <div class="img-container">
                    <div class="ebook-container">
                      <div class="wrapper">
                        <img src="<?= $d['image']?>" alt="Ebook">
                        <div class="shadow-container">
                          <img class="img" src="public/assets/app/images/content/shadow.png" alt="Shadow">  
                        </div>
                      </div>
                    </div>
                    <div class="filter style-02">
                      <div class="wrapper">
                        <div class="icon">
                          <img src="public/assets/app/images/icon/e-book.png" alt="Icon">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-line style-01 card-line-black-theme"></div>
                </div>
                <div class="text-container mt-2">
                  <div class="content">
                    <div class="text-content">
                      <p class="title lh-sm fw-400">
                        สนง.กกต.จว.พัทลุง ประสานงานและติดตามตรวจเยี่ยม ศศ.ปชต.
                        ในเขตอำเภอศรีนครินทร์ และอำเภอศรีบรรพต
                        สนง.กกต.จว.พัทลุง ประสานงานและติดตามตรวจเยี่ยม ศศ.ปชต.
                        ในเขตอำเภอศรีนครินทร์ และอำเภอศรีบรรพต
                      </p>
                    </div>
                    <div class="card-footer mt-1">
                      <div class="icon">
                        <em class="fa-solid fa-calendar-days"></em>
                        <span class="p sm fw-400 ml-2">08 มิถุนายน 2565</span>
                      </div>
                      <div class="icon">
                        <em class="fa-solid fa-eye"></em>
                        <span class="p sm fw-400 ml-2">255</span>
                      </div>
                      <div class="icon">
                        <em class="fa-solid fa-share-nodes"></em>
                        <span class="p sm fw-400 ml-2">208</span>
                      </div>
                    </div>
                  </div>
                  <div class="btns jc-center mt-3">
                    <div class="btn btn-action-style-06">
                      <span>อ่านเพิ่มเติม</span><div class="sep"></div>
                    </div>
                  </div>
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