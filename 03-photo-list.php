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
      [ 'url' => '#', 'display' => 'ภาพข่าวสาร/ประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'ภาพกิจกรรม';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/02.jpg';
    include('component/breadcrumb.php');
  ?>

  <?php 
    $news01 = [
      ['image' => 'public/assets/app/images/content/02.jpg'], 
      ['image' => 'public/assets/app/images/content/01.jpg'],
      ['image' => 'public/assets/app/images/content/01.jpg'],
      ['image' => 'public/assets/app/images/content/01.jpg'],
    ]
  ?>

  <section class="section-padding section-05">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ไฮไลต์ภาพกิจกรรม
      </h3>
      <div class="swiper-main-container">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php foreach($news01 as $d){?>
              <div class="swiper-slide">
                <div class="grids" data-aos="fade-up" data-aos-delay="150">
                  <div class="grid lg-70 sm-100">
                    <div class="ss-card ss-card-01 main-card">
                      <a class="ss-img" href="#">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/03.jpg');"></div>
                      </a>
                      <div class="text-container color-white">
                        <a class="title style-02 h5 fw-600 h-color-07 mt-3" href="#">
                          การอบรมหลักสูตรการปฏิบัติงานระดับการชำนาญพิเศษ
                        </a>
                        <p class="desc">
                          ผู้อำนวยการสถาบันพัฒนาการเมืองและการเลือกตั้ง เป็นวิทยากรบรรยายเรื่อง “วัฒนธรรมองค์กร 
                          พลังขับเคลื่อนสู่ความสำเร็จ” ในการปฐมนิเทศพนักงานใหม่ พ.ศ. 2565
                        </p>
                        <div class="card-footer mt-2">
                          <div class="wrapper">
                            <div class="icon">
                              <em class="fa-solid fa-calendar-days"></em>
                              <span class="p sm fw-300 ml-2">08 มิถุนายน 2565</span>
                            </div>
                            <div class="icon">
                              <em class="fa-solid fa-eye"></em>
                              <span class="p sm fw-300 ml-2">255</span>
                            </div>
                            <div class="icon">
                              <em class="fa-solid fa-share-nodes"></em>
                              <span class="p sm fw-300 ml-2">208</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="grid lg-30 sm-100">
                    <div class="ss-card ss-card-01 sub-card">
                      <a class="ss-img" href="#">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/04.jpg');"></div>
                      </a>
                      <div class="text-container color-white">
                        <a class="title h5 fw-600 lh-xs h-color-07 mt-2" href="#">
                          การประชุมพัฒนางานและยกระดับมาตรฐาน
                        </a>
                        <div class="card-footer mt-2">
                          <div class="wrapper">
                            <div class="icon">
                              <em class="fa-solid fa-calendar-days"></em>
                              <span class="p sm fw-300 ml-2">08 มิถุนายน 2565</span>
                            </div>
                            <div class="icon">
                              <em class="fa-solid fa-eye"></em>
                              <span class="p sm fw-300 ml-2">255</span>
                            </div>
                            <div class="icon">
                              <em class="fa-solid fa-share-nodes"></em>
                              <span class="p sm fw-300 ml-2">208</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="ss-card ss-card-01 sub-card mt-4">
                      <a class="ss-img" href="#">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/bg/05.jpg');"></div>
                      </a>
                      <div class="text-container color-white">
                        <a class="title h5 fw-600 lh-xs h-color-07 mt-2" href="#">
                          คณะกรรมการการเลือกตั้งครบรอบ 24 ปี
                        </a>
                        <div class="card-footer mt-2">
                          <div class="wrapper">
                            <div class="icon">
                              <em class="fa-solid fa-calendar-days"></em>
                              <span class="p sm fw-300 ml-2">08 มิถุนายน 2565</span>
                            </div>
                            <div class="icon">
                              <em class="fa-solid fa-eye"></em>
                              <span class="p sm fw-300 ml-2">255</span>
                            </div>
                            <div class="icon">
                              <em class="fa-solid fa-share-nodes"></em>
                              <span class="p sm fw-300 ml-2">208</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <?php if(sizeof($news01) > 1){?>
            <div class="bullet mt-4" data-aos="fade-up" data-aos-delay="400">
            <div class="container">
              <div class="bullet-wrapper">
                <div class="dots"></div>
              </div>
            </div>  
          </div>
          <?php }?>
        </div>
        <?php if(sizeof($news01) > 1){?>
          <div class="arrow-container" data-aos="fade-up" data-aos-delay="150">
            <div class="arrow btn-icon-prev">
              <em class="fa-solid fa-arrow-left"></em>
            </div>
            <div class="arrow btn-icon-next">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>

  <?php 
    $news03 = [
      ['image' => 'public/assets/app/images/content/16.jpg'],
      ['image' => 'public/assets/app/images/content/17.jpg'], 
      ['image' => 'public/assets/app/images/content/18.jpg'], 
      ['image' => 'public/assets/app/images/content/19.jpg'], 
      ['image' => 'public/assets/app/images/content/16.jpg'], 
      ['image' => 'public/assets/app/images/content/17.jpg'], 
      ['image' => 'public/assets/app/images/content/18.jpg'], 
      ['image' => 'public/assets/app/images/content/19.jpg'],
      ['image' => 'public/assets/app/images/content/16.jpg'],
      ['image' => 'public/assets/app/images/content/17.jpg'], 
      ['image' => 'public/assets/app/images/content/18.jpg'], 
      ['image' => 'public/assets/app/images/content/19.jpg']
    ]
  ?>

  <section class="section-padding">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ข่าวสารประชาสัมพันธ์
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view-list', 'rss'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="grids" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($news03 as $d) {?>
          <div class="grid lg-100 md-50">
            <div class="ss-card ss-card-55 mt-6 aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <div class="wrapper">
                <div class="img-container">
                  <div class="img-wrapper">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                      <div class="filter style-02">
                        <div class="wrapper">
                          <div class="icon sm">
                            <img src="public/assets/app/images/icon-svg/photo-white.svg" alt="Icon">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-line style-01"></div>
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
            </div>
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