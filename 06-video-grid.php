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
      [ 'url' => '#', 'display' => 'วิดีโอ' ],
    ];
    $breadcrumbTitle = 'วิดีโอ';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/05.jpg';
    include('component/breadcrumb.php');
  ?>

  <?php 
    $news01 = [
      ['image' => 'public/assets/app/images/content/41.jpg'], 
      ['image' => 'public/assets/app/images/content/42.jpg']
    ]
  ?>

  <?php 
    $news02 = [
      ['image' => 'public/assets/app/images/content/46.jpg'], 
      ['image' => 'public/assets/app/images/content/43.jpg']
    ]
  ?>

  <section class="section-padding section-05">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ไฮไลต์วิดีโอ
      </h3>
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php for($i=0; $i<4; $i++){?>
            <div class="swiper-slide">
              <div class="grids">
                <div class="grid lg-25 md-100 sm-100 mt-0">
                  <div class="grids">
                    <?php foreach($news01 as $d) {?>
                      <div class="grid lg-100 md-50 sm-100" data-aos="fade-up" data-aos-delay="150">
                        <a class="ss-card ss-card-16" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox="">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                            <div class="hover-container show">
                              <div class="icon sm">
                                <img src="public/assets/app/images/icon/play.png" alt="Play Icon">
                              </div>
                            </div>
                          </div>
                          <div class="text-container">
                            <p class="title fw-500">
                              "ความดี" ไม่ต้องเริ่มที่ใคร แต่เริ่มที่ตัวเรา | กองทุนเพื่อการพัฒนา
                            </p>
                            <div class="card-bottom mt-1">
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
                          </div>
                        </a>
                      </div>
                    <?php }?>
                  </div>
                </div>
                <div class="grid lg-50 md-100 sm-100">
                  <a class="ss-card ss-card-16" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox="">
                    <div class="ss-img square-size-02">
                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/45.jpg');"></div>
                      <div class="hover-container show">
                        <div class="icon sm">
                          <img src="public/assets/app/images/icon/play.png" alt="Play Icon">
                        </div>
                      </div>
                    </div>
                    <div class="text-container">
                      <p class="h4 title lh-sm fw-500">
                        รายการ กกต. ขอบอก EP 65 : การพิจารณาประกาศผลการเลือกตั้ง สถ./ผถ.ของ กกต.
                      </p>
                      <div class="card-bottom mt-1">
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
                    </div>
                  </a>
                </div>
                <div class="grid lg-25 md-100 sm-100 mt-0">
                  <div class="grids">
                    <?php foreach($news02 as $d) {?>
                      <div class="grid lg-100 md-50 sm-100" data-aos="fade-up" data-aos-delay="150">
                        <a class="ss-card ss-card-16" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox="">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                            <div class="hover-container show">
                              <div class="icon sm">
                                <img src="public/assets/app/images/icon/play.png" alt="Play Icon">
                              </div>
                            </div>
                          </div>
                          <div class="text-container">
                            <p class="title fw-500">
                              "ความดี" ไม่ต้องเริ่มที่ใคร แต่เริ่มที่ตัวเรา | กองทุนเพื่อการพัฒนา
                            </p>
                            <div class="card-bottom mt-1">
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
                          </div>
                        </a>
                      </div>
                    <?php }?>
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
  </section>

  <?php 
    $news03 = [
      ['image' => 'public/assets/app/images/content/37.jpg'], 
      ['image' => 'public/assets/app/images/content/38.jpg'], 
      ['image' => 'public/assets/app/images/content/39.jpg'], 
      ['image' => 'public/assets/app/images/content/40.jpg'], 
      ['image' => 'public/assets/app/images/content/41.jpg'], 
      ['image' => 'public/assets/app/images/content/42.jpg'], 
      ['image' => 'public/assets/app/images/content/43.jpg'], 
      ['image' => 'public/assets/app/images/content/37.jpg'], 
      ['image' => 'public/assets/app/images/content/38.jpg'], 
      ['image' => 'public/assets/app/images/content/39.jpg'], 
      ['image' => 'public/assets/app/images/content/40.jpg'], 
      ['image' => 'public/assets/app/images/content/41.jpg'],
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
          <a class="ss-card ss-card-16" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox="">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
              <div class="hover-container show">
                <div class="icon sm">
                  <img src="public/assets/app/images/icon/play.png" alt="Play Icon">
                </div>
              </div>
            </div>
            <div class="text-container">
              <p class="title fw-500">
                "ความดี" ไม่ต้องเริ่มที่ใคร แต่เริ่มที่ตัวเรา | กองทุนเพื่อการพัฒนา
              </p>
              <div class="card-bottom mt-1">
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
</body>
</html>