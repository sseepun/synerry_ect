<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข่าวสาร/ประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/18.jpg';
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
    $news01 = [
      ['image' => 'public/assets/app/images/content/84.jpg'], 
      ['image' => 'public/assets/app/images/content/01.jpg']
    ]
  ?>

  <section class="section-14">
    <div class="container">
    <div class="ss-box style-02 w-full">
      <div class="ss-box-shadow xl"></div>
      <div class="body">
        <div class="ss-title">
          <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
            ไฮไลต์ข่าวประชาสัมพันธ์
          </h3>
        </div>
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<4; $i++){?>
              <div class="swiper-slide">
                <div class="grids">
                  <div class="grid lg-2-3 md-100 sm-100" data-aos="fade-up" data-aos-delay="150">
                    <a class="ss-card ss-card-36" href="#">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/84.jpg');"></div>
                      </div>
                      <div class="text-wrapper">
                        <div class="desc h6 color-white fw-500 h-color-t" href="#">
                          เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
                          การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13
                        </div>
                        <div class="card-footer">
                          <div class="wrapper color-white">
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
                      <div class="filter-01"></div>
                    </a>
                  </div>
                  <div class="grid lg-1-3">
                    <div class="grids">
                      <div class="grid sm-100 mt-0">
                        <a class="ss-card ss-card-36" href="#">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/84.jpg');"></div>
                          </div>
                          <div class="text-wrapper">
                            <div class="desc style-02 h6 color-white fw-500 h-color-t" href="#">
                              เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
                              การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13
                            </div>
                            <div class="card-footer">
                              <div class="wrapper color-white">
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
                          <div class="filter-01"></div>
                        </a>
                      </div>
                      <div class="grid sm-100 mt-3">
                        <a class="ss-card ss-card-36" href="#">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/84.jpg');"></div>
                          </div>
                          <div class="text-wrapper">
                            <div class="desc style-02 h6 color-white fw-500 h-color-t" href="#">
                              เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
                              การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13
                            </div>
                            <div class="card-footer">
                              <div class="wrapper color-white">
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
                          <div class="filter-01"></div>
                        </a>
                      </div>
                    </div>
                  </div>
                </div>
               
              </div>
            <?php }?>
          </div>
          <div class="bullet mt-3" data-aos="fade-up" data-aos-delay="400">
            <div class="container">
              <div class="bullet-wrapper">
                <div class="dots"></div>
              </div>
            </div>  
          </div>
        </div>
      </div> 
    </div>
     
    </div>
  </section>

  <?php 
    $news03 = [
      ['image' => 'public/assets/app/images/content/01.jpg'], 
      ['image' => 'public/assets/app/images/content/03.jpg'], 
      ['image' => 'public/assets/app/images/content/07.jpg'], 
      ['image' => 'public/assets/app/images/content/08.jpg'], 
      ['image' => 'public/assets/app/images/content/02.jpg'], 
      ['image' => 'public/assets/app/images/content/09.jpg'], 
      ['image' => 'public/assets/app/images/content/04.jpg'], 
      ['image' => 'public/assets/app/images/content/06.jpg'], 
      ['image' => 'public/assets/app/images/content/01.jpg'], 
      ['image' => 'public/assets/app/images/content/03.jpg'], 
      ['image' => 'public/assets/app/images/content/07.jpg'], 
      ['image' => 'public/assets/app/images/content/08.jpg'],
    ]
  ?>

  <section class="section-padding">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ข่าวสารประชาสัมพันธ์
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
            <div class="btns jc-center pt-5" data-aos="fade-up" data-aos-delay="400">
              <div href="#" class="btn btn-action btn-02">
                <em class="icon fa-solid fa-arrow-right"></em>
                อ่านเพิ่มเติม
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

  </script>
</body>
</html>