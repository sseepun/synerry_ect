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
        <img class="img" src="public/assets/app/images/content/shelf.png" alt="Shelf">  
      </div>
      </div>
    </div>
  </section>

  <?php 
    $ebook02 = [
      ['image' => 'public/assets/app/images/content/e-book-01.png'],
      ['image' => 'public/assets/app/images/content/e-book-02.png'], 
      ['image' => 'public/assets/app/images/content/e-book-03.png'], 
      ['image' => 'public/assets/app/images/content/e-book-04.png'], 
      ['image' => 'public/assets/app/images/content/e-book-01.png'], 
      ['image' => 'public/assets/app/images/content/e-book-02.png'], 
      ['image' => 'public/assets/app/images/content/e-book-03.png'], 
      ['image' => 'public/assets/app/images/content/e-book-04.png']
    ]
  ?>

  <section class="section-padding">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        สื่อประชาสัมพันธ์
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view-list', 'rss'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="grids" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($ebook02 as $d) {?>
          <div class="grid lg-100 md-50 sm-50 xs-100">
            <a class="ss-card ss-card-18" href="#">
              <div class="wrapper">
                <div class="img-container">
                  <div class="ebook-container">
                    <div class="wrapper">
                      <img src="<?= $d['image']?>" alt="Ebook">
                      <div class="shadow-container">
                        <img class="img" src="public/assets/app/images/content/shadow.png" alt="Shadow">  
                      </div>
                    </div>
                  </div>
                  <div class="card-line style-01"></div>
                    <div class="filter style-02">
                      <div class="wrapper">
                        <div class="icon">
                          <img src="public/assets/app/images/icon/e-book.png" alt="Icon">
                        </div>
                      </div>
                    </div>
                </div>
                <div class="text-container">
                  <div class="content">
                    <div class="text-content">
                      <p class="title lh-sm fw-500">
                        สนง.กกต.จว.พัทลุง ประสานงานและติดตามตรวจเยี่ยม ศศ.ปชต.ในเขตอำเภอศรีนครินทร์ และอำเภอศรีบรรพต
                      </p>
                      <p class="desc">
                        วันที่ 7 มิถุนายน 2565 เวลา 13.30 น. นายวีระ ยี่แพร รองเลขาธิการคณะกรรมการการเลือกตั้ง 
                        ประชุมคณะกรรมการพัฒนาหลักสูตรและเนคนิคกระบวนการเรียนรู้ เพื่อเสริมสร้างพลเมือง 
                        เด็กและเยาวชนวิถีใหม่ (Civic Education) ครั้งที่ 1/2565 โดยมี 
                        ผู้บริหารและพนักงานของสำนักงานคณะกรรมการการเลือกตั้ง เข้าร่วมด้วย ณ ห้องประชุม 502
                      </p>
                    </div>
                    <div class="info-content">
                      <div class="icon">
                        <em class="fa-solid fa-calendar-days"></em>
                        <span class="p sm fw-400 ml-2">08 มิถุนายน 2565</span>
                      </div>
                      <div class="icon">
                        <em class="fa-solid fa-eye"></em>
                        <span class="p sm fw-400 ml-2">ชม 255 ครั้ง</span>
                      </div>
                      <div class="icon">
                        <em class="fa-solid fa-share-nodes"></em>
                        <span class="p sm fw-400 ml-2">208</span>
                      </div>
                    </div>
                  </div>
                  <div class="btns">
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