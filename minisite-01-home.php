<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php 
    $sideNavStyle = 'theme-01';
    include_once('include/topnav-minisite-dropdown-menu.php'); 
  ?>

  <section class="banner-03">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<3; $i++){?>
          <div class="swiper-slide size-02">
            <div id="mainBanner0<?php echo $i+1 ?>" class="img-bg" style="background-image:url('public/assets/app/images/bg/banner-main-theme-01.jpg');"></div>
            <div class="hero size-02 animate" style="--delay:.55s;">
              <img src="public/assets/app/images/hero/06.png" class="Hero" />
            </div>
            <div class="container">
              <div class="quote-container style-02 animate" style="--delay:.4s;">
                <div class="wrapper">
                  <h1 class="color-black-theme color-white lh-2xs fw-600">เลือกตั้ง อบต.</h1>
                  <p class="h6 color-black-theme color-white lh-xs fw-400">
                    เลือกตั้งสมาชิกสภาองค์การบริหารส่วนตำบล<br>และนายกองค์การบริหารส่วนตำบล
                  </p>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="snp-pagination"></div>
      <div class="text-slide-container">
        <div class="text-slide-wrapper">
          <p class="topic">ประกาศ</p>
          <div class="content">
            <div class="slide-item">
              <p class="title">ประกาศคณะกรรมการการเลือกตั้ง เรื่อง ผลการเลือกตั้งสมาชิกนายกเทศมนตรี</p>
            </div>
            <div class="slide-item">
              <p class="title">ศูนย์ราชการจังหวัดเชียงใหม่ ถนนโชตนา ตำบลช้างเผือก</p>
            </div>
            <div class="slide-item">
              <p class="title">สำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัดเชียงใหม่</p>
            </div>        
          </div>
          <div class="arrow">
            <button class="btn-prev btn-icon-prev" id="prev" onclick="plusSlides(-1)">❮</button>
            <button class="btn-next btn-icon-next" id="next" onclick="plusSlides(1)">❯</button>        
          </div>
        </div> 
      </div>
    </div>
  </section>

  <?php
    $categories = [
      ['title' => 'ข่าวกิจกรรม'], 
      ['title' => 'ข่าวประชาสัมพันธ์ กกต.'], 
      ['title' => 'มัลติมีเดีย'],
    ];
  ?>
  <section class="section-padding section-15 tab-container bg-10">
    <div class="container">
      <div class="ss-box bg-white-theme style-03 w-full">
        <div class="ss-title-tab">
          <div class="title">
            <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
              <?php foreach($categories as $i=>$d){?>
                <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <h3 class="fw-600 main-topic color-black-theme color-dark"><?= $d['title'] ?></h3>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="tab-menu size-02">
            <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="0">
              <?php foreach($categories as $i=>$d){?>
                <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <?= $d['title'] ?>
                </div>
              <?php }?>
            </div>    
          </div>
          <a class="link-more c-btn c-btn--animate-left-right" data-aos="fade-up" data-aos-delay="0" href="#">
            <div class="c-wrapper">
              <span class="text fw-400">ดูทั้งหมด</span>   
              <span class="arrow c-icon pl-2">
                <em class="fa-solid fa-arrow-right"></em>
              </span>
            </div>
          </a>
        </div>
        <?php
          $content02 = [
            [
              'title' => 'กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
              ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการปฏิบัติงานระดับการชำนาญพิเศษ'
            ],[
              'title' => 'กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
              ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ ปฏิบัติงานระดับการชำนาญพิเศษ'
            ], 
          ];
         ?>
         <!-- Swiper -->
         <div class="swiper-main-container">
          <div class="swiper-container" style="z-index:4;">
            <div class="swiper-wrapper">
              <?php for($k=0; $k<4; $k++) {?>
                <div class="swiper-slide">
                  <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="150">
                    <?php foreach($categories as $i=>$d){?>
                      <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                        <div class="grids" data-aos="fade-up" data-aos-delay="300">
                          <?php for($y=0; $y<2; $y++) {?>
                            <div class="grid lg-50 md-50">
                              <?php foreach($content02 as $j) { ?>
                                <div class="grid sm-100">
                                  <a class="ss-card fling ss-card-43 color-black-theme mb-4" href="#">
                                    <div class="wrapper">
                                      <div class="img-container">
                                        <div class="ss-img">
                                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+0)%3+3 ?>.jpg');"></div>
                                          <div class="filter-04"></div>
                                          <div class="btn-scale">
                                            <div class="btn btn-action style-06 btn-27">
                                              <em class="fa-solid fa-arrow-right"></em>
                                            </div>
                                           </div>
                                        </div>
                                      </div>
                                      <div class="text-container">
                                        <div class="pos-relative pb-3">
                                        <div class="title p fw-400" href="#">
                                          <?= $j['title'] ?>
                                        </div>
                                        <div class="card-footer">
                                          <div class="wrapper">
                                            <div class="icon">
                                              <em class="fa-solid fa-calendar-days"></em>
                                              <span class="p sm fw-400 ml-2">08 มิถุนายน 2565 <span class="ml-1">/</span></span>
                                            </div>
                                            <div class="icon">
                                              <em class="fa-solid fa-eye"></em>
                                              <span class="p sm fw-400 ml-2">255 <span class="ml-1">/</span></span>
                                            </div>
                                            <div class="icon">
                                              <em class="fa-solid fa-share-nodes"></em>
                                              <span class="p sm fw-400 ml-2">208</span>
                                            </div>
                                          </div>
                                        </div>
                                        <div class="link-more c-btn c-btn--animate-left-right mt-2" href="#">
                                          <div class="c-wrapper">
                                            <span class="text fw-400 border-bottom bcolor-black bcolor-black-theme">อ่านเพิ่ม</span>   
                                            <span class="arrow c-icon pl-2">
                                              <em class="fa-solid fa-arrow-right"></em>
                                            </span> 
                                          </div>  
                                        </div>
                                          <div class="card-line style-03"></div>
                                        </div>
                                      </div>
                                    </div>
                                  </a>
                                </div>
                              <?php } ?>
                            </div>
                          <?php }?>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </div>
              <?php }?>
            </div>
            <div class="bullet mt-3" data-aos="fade-up" data-aos-delay="150">
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
      </div>    
    </div>      
  </section>

  <?php
    $categories02 = [
      ['title' => 'ข่าวสารประชาสัมพันธ์'], 
      ['title' => 'การเลือกตั้งท้องถิ่น'], 
    ];
  ?>
  <section class="section-padding tab-container bg-10">
    <div class="container" style="z-index:3;">
      <div class="ss-title-tab">
        <div class="title">
          <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
            <?php foreach($categories02 as $i=>$d){?>
              <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                <h3 class="fw-600 main-topic color-dark"><?= $d['title'] ?></h3>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="tab-menu size-02">
          <div class="tabs tabs-02 white-theme" data-aos="fade-up" data-aos-delay="0">
            <?php foreach($categories02 as $i=>$d){?>
              <div class="tab style-02 <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                <?= $d['title'] ?>
              </div>
            <?php }?>
          </div>    
        </div>
        <a class="link-more c-btn c-btn--animate-left-right" data-aos="fade-up" data-aos-delay="0" href="#">
          <div class="c-wrapper">
            <span class="text fw-400">ดูทั้งหมด</span>   
            <span class="arrow c-icon pl-2">
              <em class="fa-solid fa-arrow-right"></em>
            </span>
          </div>
        </a>
      </div>  
      <?php
        $content01 = [
          ['title' => 'สรุปผลการใช้สิทธิเลือกตั้ง นายกองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'], 
          ['title' => 'พระราชบัญญัติการเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น พ.ศ. 2562'], 
          ['title' => 'ผลการเลือกตั้งสมาชิกสภาองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'],
        ];
      ?>
      <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="150">
        <?php foreach($categories as $i=>$d){?>
          <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <div class="grids aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <?php for($x=0; $x<2; $x++) {?>
                <div class="grid lg-50 md-100 sm-100">
                  <?php foreach($content01 as $j) {?>
                    <a class="ss-card ss-card-39 mb-2" href="#">
                      <div class="wrapper">
                        <div class="date-container">
                          <p class="day">1<?= $i+3 ?></p>
                          <p class="month">พ.ย.</p>
                          <p class="year">256<?= $i+5 ?></p>
                        </div>
                        <div class="text-container">
                          <div class="ss-tags">
                            <div class="tag style-03">ระเบียบการเลือกตั้ง</div>
                          </div>
                          <p class="title fw-400 lh-sm"><?= $j['title'] ?></p>
                        </div>
                        <div class="arrow-container">
                          <div class="btn btn-action-style-02 size-02 btn-13 c-btn c-btn--animate-left-right" href="#">
                            <em class="fa-solid fa-arrow-right c-icon pl-0"></em>
                          </div>
                        </div>
                      </div>
                    </a>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
        <?php }?>
      </div>                       
    </div>                
  </section>

  <?php
    $content03 = [
      [
        'title' => 'เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8 เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8',
        'image' => 'public/assets/app/images/content/96.jpg'
      ],[
        'title' => 'เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8 เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8',
        'image' => 'public/assets/app/images/content/97.jpg'
      ],[
        'title' => 'เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8 เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8',
        'image' => 'public/assets/app/images/content/98.jpg'
      ],
    ];
  ?>
  <section id="backgroundColor" class="section-16 section-padding bg-11">
    <div class="pattern style-01">
      <div class="wrapper">
        <img src="public/assets/app/images/pattern/05.png" alt="Hero">
      </div>
    </div>
    <div class="container">
      <div class="grids">
        <div class="grid xl-30 lg-30 md-40 sm-100" data-aos="fade-up" data-aos-delay="0">
          <a class="ss-card ss-card-40" href="#">
            <div class="ss-img square-05">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/95.jpg');"></div>
              <div class="filter-04"></div>
              <div class="btn-scale">
                <div class="btn btn-action style-06 btn-27">
                  <em class="fa-solid fa-arrow-right"></em>
                </div>
              </div>
            </div>
            <div class="text-container">
              <div class="date-container">
                <div class="date-wrapper color-white">
                  <p class="xs fw-400">22 พ.ย.</p>  
                  <div class="ss-sep-02 style-02 bg-white bg-white-theme"></div>
                  <p class="xs fw-400">15 ธ.ค.</p>
                </div>     
              </div>
              <div class="text">
                <h6 class="title color-white color-black-theme fw-400">เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8 เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8</h6>
                <p class="xs color-white color-black-theme">08 มิถุนายน 2565  เวลา 08:00 - 12:00</p> 
              </div>
            </div>
          </a>            
        </div>
        <div class="grid xl-70 lg-70 md-60 sm-100" data-aos="fade-up" data-aos-delay="0">
          <div class="ss-box bg-white-theme style-03 w-full" style="position:relative; z-index:2;">
            <div class="ss-title-style-02">
              <h3 class="fw-600">ปฏิทินกิจกรรม</h3>        
              <a class="link-more c-btn c-btn--animate-left-right" href="#">
              <div class="c-wrapper">
                <span class="text fw-400">ดูทั้งหมด</span>   
                <span class="arrow c-icon pl-2">
                  <em class="fa-solid fa-arrow-right"></em>
                </span>
              </div>
            </a>       
            </div>  
            <div class="grids jc-center">
              <?php foreach($content03 as $d) {?>
                <div class="grid lg-1-3 mt-2">
                  <a class="ss-card ss-card-41 fling" href="#">
                    <div class="image-container">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                        <div class="filter-04"></div>
                        <div class="btn-scale">
                          <div class="btn btn-action style-06 btn-27">
                            <em class="fa-solid fa-arrow-right"></em>
                          </div>
                        </div>
                      </div>
                      <div class="date-container">
                        <div class="date-wrapper color-white">
                          <p class="xs fw-400">22 พ.ย.</p>  
                          <div class="ss-sep-02 style-02 bg-white bg-white-theme"></div>
                          <p class="xs fw-400">15 ธ.ค.</p>
                        </div>     
                      </div>
                    </div>
                    <div class="text-container color-black-theme">
                      <p class="title lh-sm fw-400">
                        <?= $d['title'] ?>
                      </p>
                      <div class="date-time">
                        <p class="sm fw-400">08 มิถุนายน</p>
                        <p class="sm time fw-400 ml-2">เวลา 08:00 - 12:00</p>
                      </div>
                      <div class="link-more mt-2 c-btn c-btn--animate-left-right" href="#">
                        <div class="c-wrapper">
                          <span class="text fw-400 border-bottom bcolor-black">อ่านเพิ่ม</span>   
                          <span class="arrow color-black c-icon pl-2">
                            <em class="fa-solid fa-arrow-right"></em>
                          </span>
                        </div>     
                      </div>
                    </div>
                  </a>      
                </div>  
              <?php } ?>      
            </div>  
          </div>           
        </div>
      </div>                
    </div>                  
  </section>

  <section class="section-17 section-padding tab-container bg-10">
    <div class="pattern">
      <div class="wrapper">
        <img src="public/assets/app/images/pattern/06.png" alt="Hero">
      </div>
    </div>
    <div class="container pos-relative" style="z-index:3;">
      <div class="ss-card ss-card-42" data-aos="fade-up" data-aos-delay="0">
        <div id="subBanner" class="img-bg" style="background-image:url('public/assets/app/images/bg/51.jpg');"></div>
        <div class="wrapper h-full">
          <div class="text-container">
            <h3 class="color-white fw-500 lh-xs md-no-br">
              กกต.พร้อมให้บริการข้อมูลการเลือก<br>
              ตั้งแก่ภาคประชาชนทุกภาคส่วน
            </h3>         
            <p class="color-white fw-400">ด้วยหลากหลายแอพพลิเคชั่น</p>          
          </div>           
          <div class="image-container">
            <div class="image-wrapper">
              <img src="public/assets/app/images/content/07.png" alt="Image"> 
            </div> 
          </div>   
        </div>
      </div>

      <?php
        $categories02 = [
          ['title' => 'ประกาศเกี่ยวกับการเลือกตั้ง'], 
          ['title' => 'ประกาศผลการเลือกตั้ง'], 
          ['title' => 'ข่าวประกวด'], 
        ];
      ?>
      <div class="ss-title-tab">
        <div class="title">
          <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
            <?php foreach($categories02 as $i=>$d){?>
              <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                <h3 class="fw-600 main-topic color-dark"><?= $d['title'] ?></h3>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="tab-menu size-02">
          <div class="tabs tabs-02 white-theme" data-aos="fade-up" data-aos-delay="0">
            <?php foreach($categories02 as $i=>$d){?>
              <div class="tab style-02 <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                <?= $d['title'] ?>
              </div>
            <?php }?>
          </div>    
        </div>
        <a class="link-more c-btn c-btn--animate-left-right" data-aos="fade-up" data-aos-delay="0" href="#">
          <div class="c-wrapper">
            <span class="text fw-400">ดูทั้งหมด</span>   
            <span class="arrow c-icon pl-2">
              <em class="fa-solid fa-arrow-right"></em>
            </span>
          </div>
        </a>
      </div> 
      <?php
        $content01 = [
          ['title' => 'สรุปผลการใช้สิทธิเลือกตั้ง นายกองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'], 
          ['title' => 'พระราชบัญญัติการเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น พ.ศ. 2562'], 
          ['title' => 'ผลการเลือกตั้งสมาชิกสภาองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'],
        ];
      ?>
      <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="150">
        <?php foreach($categories as $i=>$d){?>
          <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <div class="grids aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
              <?php for($x=0; $x<2; $x++) {?>
                <div class="grid lg-50 md-100 sm-100">
                  <?php foreach($content01 as $j) {?>
                    <a class="ss-card ss-card-39 mb-2" href="#">
                      <div class="wrapper">
                        <div class="date-container">
                          <p class="day">1<?= $i+3 ?></p>
                          <p class="month">พ.ย.</p>
                          <p class="year">256<?= $i+5 ?></p>
                        </div>
                        <div class="text-container">
                          <div class="ss-tags">
                            <div class="tag style-03">ระเบียบการเลือกตั้ง</div>
                          </div>
                          <p class="title fw-400 lh-sm mt-1"><?= $j['title'] ?></p>
                        </div>
                        <div class="arrow-container">
                          <div class="btn btn-action-style-02 size-02 btn-13 c-btn c-btn--animate-left-right" href="#">
                            <em class="fa-solid fa-arrow-right c-icon pl-0"></em>
                          </div>
                        </div>
                      </div>
                    </a>
                  <?php }?>
                </div>
              <?php }?>
            </div>
          </div>
        <?php }?>
      </div> 
      <div class="client-02">
        <div class="swiper-container" data-aos="fade-up" data-aos-delay="300">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<6; $i++){?>
              <div class="swiper-slide">
                <a class="client" href="#">
                  <img src="public/assets/app/images/client/2<?= ($i+0)%6 ?>.png" alt="Client" />
                </a>
              </div>
            <?php }?>
          </div>
          <div class="navigator">
            <div class="arrow-left btn-icon-prev">
              <a class="btn btn-action-style-02 size-02 btn-13 style-02 mr-3" href="#">
                <em class="fa-solid fa-arrow-left"></em>
              </a>
            </div>
            <div class="dots"></div>
            <div class="arrow-right btn-icon-next">
              <a class="btn btn-action-style-02 size-02 btn-13 style-02 ml-3" href="#">
                <em class="fa-solid fa-arrow-right"></em>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>               
  </section>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
  <script>
    
    const mainBanner01 = document.getElementById('mainBanner01');
    const mainBanner02 = document.getElementById('mainBanner02');
    const mainBanner03 = document.getElementById('mainBanner03');
    const subBanner = document.getElementById('subBanner');
    const backgroundColor = document.getElementById('backgroundColor');

    const theme01 = $('.theme-btn-3');
    const theme02 = $('.theme-btn-4');
    const theme03 = $('.theme-btn-5');
    const theme04 = $('.theme-btn-6');
    const theme05 = $('.theme-btn-1');
    const theme06 = $('.theme-btn-2');

    theme01.click(function(e){
      mainBanner01.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-01.jpg')";
      mainBanner02.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-01.jpg')";
      mainBanner03.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-01.jpg')";
      backgroundColor.style.backgroundColor = "#ded7d5";
    });
    theme02.click(function(e){
      mainBanner01.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-02.jpg')";
      mainBanner02.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-02.jpg')";
      mainBanner03.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-02.jpg')";
      subBanner.style.backgroundImage = "url('public/assets/app/images/bg/banner-sub-theme-02.jpg')";
      backgroundColor.classList.remove('bg-11');
      backgroundColor.style.backgroundColor = "#ceced1";
    });
    theme03.click(function(e){
      mainBanner01.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-03.jpg')";
      mainBanner02.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-03.jpg')";
      mainBanner03.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-03.jpg')";
      subBanner.style.backgroundImage = "url('public/assets/app/images/bg/banner-sub-theme-03.jpg')";
      backgroundColor.classList.remove('bg-11');
      backgroundColor.style.backgroundColor = "#fae3db";
    });
    theme04.click(function(e){
      mainBanner01.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-04.jpg')";
      mainBanner02.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-04.jpg')";
      mainBanner03.style.backgroundImage = "url('public/assets/app/images/bg/banner-main-theme-04.jpg')";
      subBanner.style.backgroundImage = "url('public/assets/app/images/bg/banner-sub-theme-04.jpg')";
      backgroundColor.classList.remove('bg-11');
      backgroundColor.style.backgroundColor = "#e7e7e7";
    });
    theme05.click(function(e){
      backgroundColor.style.backgroundColor = "#000000";
    });
    theme06.click(function(e){
      backgroundColor.style.backgroundColor = "#000000";
    });


    let slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
      showSlides(slideIndex += n);
    }

    function showSlides(n) {
      let i;
      let slides = document.getElementsByClassName("slide-item")

      const prev = document.getElementById('prev')
      const next = document.getElementById('next')

      if (n > slides.length) {slideIndex = 1}    
      if (n < 1) {slideIndex = slides.length}

      if(slideIndex === 1){
        prev.disabled = true;
      }else if(slideIndex === slides.length) {
        next.disabled = true
      } else {
        prev.disabled = false
        next.disabled = false
      }

      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slides[slideIndex-1].style.display = "block";  
    }
  </script>
</body>
</html>