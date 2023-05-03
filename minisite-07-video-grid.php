<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-minisite-dropdown-menu.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'วิดีโอ' ],
    ];
    $breadcrumbTitle = 'วิดีโอ';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/30.jpg';
    $formContainer = true;
    $sectionOptions = [ 'option-01', 'views' ];
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
    $marginIntro = 'margin-intro size-02';
    $classImageHidden = 'img-hidden';
    $content = array(
      array(
        "image"=>"public/assets/app/images/content/138.jpg",
        "title"=>"เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13"
      ), 
      array(
        "image"=>"public/assets/app/images/content/139.jpg",
        "title"=>"เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
         การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13"
      ),
      array(
        "image"=>"public/assets/app/images/content/140.jpg",
        "title"=>"title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13"
      ), 
      array(
        "image"=>"public/assets/app/images/content/141.jpg",
        "title"=>"title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13"
      ), 
      array(
        "image"=>"public/assets/app/images/content/142.jpg",
        "title"=>"title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13"
      ),
    );
  ?>

  <?php if(sizeof($content) > 1 && sizeof($content) < 5){?>
    <section class="section-33">
      <div class="container">
        <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
          <div class="body">
            <div class="ss-title">
              <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
                ไฮไลต์วิดีโอ
              </h3>
            </div>
            <div class="swiper-main-container mt-5">
              <div class="swiper-container"  data-aos="fade-up" data-aos-delay="300">
                <div class="swiper-wrapper">
                  <?php foreach($content as $d){?>
                    <div class="swiper-slide">
                      <a class="ss-card ss-card-80" href="#">
                        <div class="wrapper">
                          <div class="img-container <?php if(sizeof($content) === 1) echo $classImageHidden ?>">
                            <div class="img-wrapper">
                              <div class="ss-img">
                                <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                                <div class="filter-04"></div>
                                <div class="btn-scale">
                                  <div class="btn btn-action style-06 btn-27">
                                    <em class="fa-solid fa-arrow-right"></em>
                                  </div>
                                </div>
                                <div class="btn-video">
                                  <div class="img-container">
                                    <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                                  </div>
                                </div>
                              </div>
                              <div class="card-line style-01 theme-01"></div>
                            </div>
                          </div>
                          <div class="text-container">
                            <div class="text">
                              <p class="title fw-500">
                               <?= $d['title'] ?>
                              </p>
                              <div class="card-top mt-1">
                                <div class="wrapper color-gray">
                                  <div class="icon">
                                    <em class="fa-solid fa-calendar-days"></em>
                                    <span class="p sm fw-400 ml-2">08 มิถุนายน 2565</span>
                                  </div>
                                  <div class="icon">
                                    <em class="fa-solid fa-eye"></em>
                                    <span class="p sm fw-400 ml-2">280</span>
                                  </div>
                                  <div class="icon">
                                    <em class="fa-solid fa-share-nodes"></em>
                                    <span class="p sm fw-400 ml-2">60</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="btns">
                              <div href="#" class="btn size-05 btn-action btn-fling btn-28">
                                อ่านเพิ่ม <em class="fa-solid fa-arrow-right fling ml-2"></em>
                              </div>
                            </div>
                          </div>
                        </div>
                      </a>    
                    </div>
                  <?php }?>
                </div>
                <?php if(sizeof($content) > 1){?>
                  <div class="bullet mt-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="container">
                      <div class="bullet-wrapper">
                        <div class="dots"></div>
                      </div>
                    </div>  
                  </div>
                <?php }?>
              </div>
              <?php if(sizeof($content) > 1){?>
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
        </div>
      </div>
    </section>
  <?php }?>

  <?php if(sizeof($content) > 4 || sizeof($content) < 1 || sizeof($content) <= 4 ){?>
    <section class="section-14">
      <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
      <div class="container">
        <div class="ss-box bg-white-theme style-02 w-full">
          <div class="ss-box-shadow xl"></div>
          <div class="body <?php if(sizeof($content) < 1) echo 'pt-0' ?>">
            <div class="ss-title <?php if(sizeof($content) < 1 || sizeof($content) <= 4) echo 'd-none' ?>">
              <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
                ไฮไลต์วิดีโอ
              </h3>
            </div>
            <?php if(sizeof($content) > 4){?>
              <div class="swiper-main-container">
                <div class="swiper-container">
                  <div class="swiper-wrapper">
                    <?php for($i=0; $i<5; $i++){?>
                      <div class="swiper-slide">
                        <div class="grids">
                          <div class="grid xl-50 lg-50 md-100 sm-100" data-aos="fade-up" data-aos-delay="150">
                            <a class="ss-card ss-card-36" href="#">
                              <div class="ss-img square">
                                <div class="img-bg" style="background-image:url(<?php echo $content['0']['image'] ?>);"></div>
                                <div class="filter-02"></div>
                                <div class="btn-video">
                                  <div class="img-container">
                                    <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                                  </div>
                                </div>
                              </div>
                              <div class="text-wrapper">
                                <div class="h6 title size-02 color-white fw-500" href="#">
                                  เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
                                  การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13
                                  การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13
                                </div>
                                <div class="card-footer mt-2">
                                  <div class="wrapper color-white color-white-theme">
                                    <div class="icon">
                                      <p class="p sm">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                                    </div>
                                    <div class="icon">
                                      <em class="fa-solid fa-eye"></em>
                                      <p class="p sm ml-2">280 <span class="ml-1">/</span></p>
                                    </div>
                                    <div class="icon">
                                      <em class="fa-solid fa-share-nodes"></em>
                                      <span class="p sm ml-2">60</span>
                                    </div>
                                  </div>
                                  <div class="btn btn-action style-05 btn-24">
                                    <em class="fa-solid fa-arrow-right"></em>
                                  </div>
                                </div>
                              </div>
                              <div class="filter-01"></div>
                            </a>
                          </div>
                          <div class="grid xl-50 lg-50 sm-100 md-100" data-aos="fade-up" data-aos-delay="150">
                            <div class="grids">
                              <div class="grid lg-50 mt-0">
                                <a class="ss-card ss-card-36 style-02" href="#">
                                  <div class="ss-img square">
                                    <div class="img-bg" style="background-image:url(<?php echo $content['1']['image'] ?>);"></div>
                                    <div class="btn-video">
                                      <div class="img-container">
                                        <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="text-wrapper">
                                    <div class="h6 title color-white fw-500" href="#">
                                      เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
                                      การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13
                                    </div>
                                    <div class="card-footer mt-2">
                                      <div class="wrapper color-white color-white-theme">
                                        <div class="icon">
                                          <p class="p sm">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                                        </div>
                                        <div class="icon">
                                          <em class="fa-solid fa-eye"></em>
                                          <p class="p sm ml-2">280 <span class="ml-1">/</span></p>
                                        </div>
                                        <div class="icon">
                                          <em class="fa-solid fa-share-nodes"></em>
                                          <span class="p sm ml-2">60</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="filter-01"></div>
                                </a>
                              </div>
                              <div class="grid lg-50 mt-0 mt-6-xs">
                                <a class="ss-card ss-card-36 style-02" href="#">
                                  <div class="ss-img square">
                                    <div class="img-bg" style="background-image:url(<?php echo $content['2']['image'] ?>);"></div>
                                    <div class="btn-video">
                                      <div class="img-container">
                                        <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="text-wrapper">
                                    <div class="h6 title color-white fw-500" href="#">
                                      เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
                                      การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13
                                    </div>
                                    <div class="card-footer mt-2">
                                      <div class="wrapper color-white color-white-theme">
                                        <div class="icon">
                                          <p class="p sm">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                                        </div>
                                        <div class="icon">
                                          <em class="fa-solid fa-eye"></em>
                                          <p class="p sm ml-2">280 <span class="ml-1">/</span></p>
                                        </div>
                                        <div class="icon">
                                          <em class="fa-solid fa-share-nodes"></em>
                                          <span class="p sm ml-2">60</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="filter-01"></div>
                                </a>
                              </div>
                            </div>
                            <div class="grids">
                              <div class="grid lg-50">
                                <a class="ss-card ss-card-36 style-02" href="#">
                                  <div class="ss-img square">
                                    <div class="img-bg" style="background-image:url(<?php echo $content['3']['image'] ?>);"></div>
                                    <div class="btn-video">
                                      <div class="img-container">
                                        <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="text-wrapper">
                                    <div class="h6 title color-white fw-500" href="#">
                                      เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
                                      การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13
                                    </div>
                                    <div class="card-footer mt-2">
                                      <div class="wrapper color-white color-white-theme">
                                        <div class="icon">
                                          <p class="p sm">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                                        </div>
                                        <div class="icon">
                                          <em class="fa-solid fa-eye"></em>
                                          <p class="p sm ml-2">280 <span class="ml-1">/</span></p>
                                        </div>
                                        <div class="icon">
                                          <em class="fa-solid fa-share-nodes"></em>
                                          <span class="p sm ml-2">60</span>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="filter-01"></div>
                                </a>
                              </div>
                              <div class="grid lg-50">
                                <a class="ss-card ss-card-36 style-02" href="#">
                                  <div class="ss-img square">
                                    <div class="img-bg" style="background-image:url(<?php echo $content['4']['image'] ?>);"></div>
                                    <div class="btn-video">
                                      <div class="img-container">
                                        <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="text-wrapper">
                                    <div class="h6 title color-white fw-500" href="#">
                                      เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
                                      การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13
                                    </div>
                                    <div class="card-footer mt-2">
                                      <div class="wrapper color-white color-white-theme">
                                        <div class="icon">
                                          <p class="p sm">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                                        </div>
                                        <div class="icon">
                                          <em class="fa-solid fa-eye"></em>
                                          <p class="p sm ml-2">280 <span class="ml-1">/</span></p>
                                        </div>
                                        <div class="icon">
                                          <em class="fa-solid fa-share-nodes"></em>
                                          <span class="p sm ml-2">60</span>
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
                  <div class="bullet mt-6">
                    <div class="container">
                      <div class="bullet-wrapper">
                        <div class="dots"></div>
                      </div>
                    </div>  
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
            <?php } else if (sizeof($content) < 1 || sizeof($content) <= 4 ) ?>
              <?php 
                $video = [
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
            <section class="section-padding <?php if(sizeof($content) < 1 || sizeof($content) <= 4) echo 'pt-0' ?>">
              <div class="container">
                <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
                  <?php foreach($video as $d) {?>
                    <div class="grid xl-25 lg-1-3 md-50">
                    <a class="ss-card ss-card-61 fling mb-3" href="#">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                        <div class="btn-video">
                          <div class="img-container">
                            <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                          </div>
                        </div>
                        <div class="filter-04"></div>
                        <div class="btn-scale">
                          <div class="btn btn-action style-06 btn-27">
                            <em class="fa-solid fa-arrow-right"></em>
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <p class="title fw-500">
                          รายการ กกต. ขอบอก EP 65 : "การพิจารณาประกาศผลการเลือกตั้ง 
                          สถ./ผถ.ของ กกต."
                        </p>
                        <div class="card-footer mt-1">
                          <div class="wrapper color-gray">
                            <div class="icon">
                              <em class="fa-solid fa-calendar-days"></em>
                              <span class="p sm fw-400 ml-2">08 มิถุนายน 2565</span>
                            </div>
                            <div class="icon">
                              <em class="fa-solid fa-eye"></em>
                              <span class="p sm fw-400 ml-2">280</span>
                            </div>
                            <div class="icon">
                              <em class="fa-solid fa-share-nodes"></em>
                              <span class="p sm fw-400 ml-2">60</span>
                            </div>
                          </div>
                          <div class="link-footer c-btn c-btn--animate-left-right">
                            <div className="c-wrapper">
                              <span class="text color-05 fw-500 border-bottom bcolor-05 lh-sm">อ่านเพิ่ม</span>
                              <span class="c-icon">
                                <em class="fa-solid fa-arrow-right"></em>
                              </span>
                            </div>
                          </div>
                        </div>
                        <div class="card-line style-03"></div>
                      </div>
                    </a>
                  </div>
                  <?php }?>
                </div>
                <div class="mt-6 pt-4">
                  <?php
                    $listFooter = ['total', 'paginate', 'pp'];
                    $style = 'style-02';
                    include('component/list-footer.php');
                  ?>
                </div>
              </div>
            </section>
          </div> 
        </div>
      </div>
    </section>
  <?php }?>


  

  

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>