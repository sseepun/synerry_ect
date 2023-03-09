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
      [ 'url' => '#', 'display' => 'ภาพข่าวสาร/ประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'ภาพกิจกรรม';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/02.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-06">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ไฮไลต์ภาพกิจกรรม
      </h3>
      <div class="swiper-main-container">
        <div class="swiper-container"  data-aos="fade-up" data-aos-delay="300">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<10; $i++){?>
              <div class="swiper-slide">
              <a class="ss-card ss-card-53" href="#">
                <div class="wrapper">
                  <div class="img-container">
                    <div class="ss-img">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/2<?= ($i%3+0) ?>.jpg');"></div>
                      <div class="hover-container">
                        <div class="icon sm">
                          <img src="public/assets/app/images/icon/photo-white.png" alt="Icon">
                        </div>
                      </div>
                      <div class="filter style-01"></div>
                      <div class="card-line style-01"></div>
                    </div>
                  </div>
                  <div class="text-container">
                    <div class="text">
                      <p class="title fw-600">
                        รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมหารือเตรียมการจัดงานวันสถาปนา
                        สำนักงานคณะกรรมการการเลือกตั้ง ครบรอบ 24 ปี รองเลขาธิการคณะกรรมการการเลือกตั้ง 
                        ประชุมหารือเตรียมการจัดงานวันสถาปนา สำนักงานคณะกรรมการการเลือกตั้ง ครบรอบ 24 ปี
                      </p>
                      <div class="card-top mt-1">
                        <div class="wrapper">
                          <div class="icon">
                            <em class="fa-solid fa-calendar-days"></em>
                            <span class="p sm ml-2 fw-500">08 มิถุนายน 2565</span>
                          </div>
                          <div class="icon">
                            <em class="fa-solid fa-eye"></em>
                            <span class="p sm ml-2 fw-500">255</span>
                          </div>
                          <div class="icon">
                            <em class="fa-solid fa-share-nodes"></em>
                            <span class="p sm ml-2 fw-500">208</span>
                          </div>
                        </div>
                      </div>
                      <p class="desc sm color-gray mt-1 fw-400">
                        วันที่ 7 มิถุนายน 2565 เวลา 13.30 น. นายเกรียงไกร พานดอกไม้ 
                        รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมหารือร่วมกับคณะทำงาน
                        ในการศึกษาวิธีการปฏิบัติที่ผ่านมาสำหรับการประเมินผลการปฏิบัติงาน
                        ของเลขาธิการคณะกรรมการการเลือกตั้ง เพื่อให้เป็นไปตามความเห็นและ
                        ข้อสังเกตของคณะกรรมการการเลือกตั้ง ณ ห้องประชุมรองเลขาธิการ
                        เพื่อให้เป็นไปตามความเห็นและ ข้อสังเกตของคณะกรรมการการเลือกตั้ง 
                        ณ ห้องประชุมรองเลขาธิการ
                      </p>
                    </div>
                    <div class="btns mt-5">
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
        </div>
        <div class="arrow-container" data-aos="fade-up" data-aos-delay="150">
          <div class="arrow btn-icon-prev">
            <em class="fa-solid fa-arrow-left"></em>
          </div>
          <div class="arrow btn-icon-next">
            <em class="fa-solid fa-arrow-right"></em>
          </div>
        </div>
      </div> 
    </div>
  </section>

  <?php 
    $news03 = [
      ['image' => 'public/assets/app/images/content/16.jpg'], 
      ['image' => 'public/assets/app/images/content/17.jpg'], 
      ['image' => 'public/assets/app/images/content/18.jpg'], 
      ['image' => 'public/assets/app/images/content/19.jpg'], 
      ['image' => 'public/assets/app/images/content/20.jpg'], 
      ['image' => 'public/assets/app/images/content/21.jpg'], 
      ['image' => 'public/assets/app/images/content/22.jpg'], 
      ['image' => 'public/assets/app/images/content/23.jpg'], 
      ['image' => 'public/assets/app/images/content/16.jpg'], 
      ['image' => 'public/assets/app/images/content/17.jpg'], 
      ['image' => 'public/assets/app/images/content/18.jpg'], 
      ['image' => 'public/assets/app/images/content/19.jpg'],
    ]
  ?>

  <section class="section-padding">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ภาพกิจกรรม
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view-grid', 'rss'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($news03 as $d) {?>
          <div class="grid xl-25 lg-1-3 md-50">
          <a class="ss-card ss-card-08 mb-3" href="#">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
              <div class="card-line style-01"></div>
              <div class="filter style-02">
                <div class="wrapper">
                  <div class="icon sm">
                    <img src="public/assets/app/images/icon/photo-white.png" alt="Icon">
                  </div>
                </div>
              </div>
            </div>
            <div class="text-container">
              <p class="title fw-500 mt-1">
                รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมหารือเตรียมการจัดงานวันสถาปนา
                สำนักงานคณะกรรมการการเลือกตั้ง ครบรอบ 24 ปี
              </p>
              <div class="card-top mt-1">
                <div class="wrapper">
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
              <p class="desc sm color-08 mt-1">
                วันที่ 7 มิถุนายน 2565 เวลา 13.30 น. นายเกรียงไกร พานดอกไม้ 
                รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมหารือร่วมกับคณะทำงานในการศึกษา
                รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมหารือร่วมกับคณะทำงานในการศึกษา
              </p>
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