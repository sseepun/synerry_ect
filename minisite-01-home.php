<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>

  <section class="banner-01">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<4; $i++){?>
          <div class="slide size-02">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/02.jpg');"></div>
            <div class="hero size-02 animate" style="--delay:.55s;">
              <img src="public/assets/app/images/hero/05.png" class="Hero" />
            </div>
            <div class="container">
              <div class="quote-container style-02 animate" style="--delay:.4s;">
                <div class="wrapper">
                  <h2 class="color-black-theme fw-500">จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก</h2>
                  <h1 class="color-black-theme fw-700 mt-1">
                    <span class="color-04 color-black-theme">ประชาธิปไตย</span><br />
                    โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                  </h1>
                  <img class="quote quote-left" src="public/assets/app/images/icon/15.png" alt="Quote" />
                  <img class="quote quote-right" src="public/assets/app/images/icon/16.png" alt="Quote" />
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="arrows style-02">
        <div class="arrow size-01 arrow-prev">
          <img src="public/assets/app/images/icon/17.png" alt="Arrow" />
        </div>
        <div class="arrow size-01 arrow-next">
          <img src="public/assets/app/images/icon/18.png" alt="Arrow" />
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
      <div class="ss-box style-03 w-full">
        <div class="ss-title-tab">
          <div class="title">
            <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
              <?php foreach($categories as $i=>$d){?>
                <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <h3 class="fw-600 color-dark"><?= $d['title'] ?></h3>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="tab-menu">
            <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="150">
              <?php foreach($categories as $i=>$d){?>
                <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <?= $d['title'] ?>
                </div>
              <?php }?>
            </div>    
          </div>
        </div>
         <!-- Swiper -->
         <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($k=0; $k<4; $k++) {?>
              <div class="swiper-slide">
                <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="300">
                  <?php foreach($categories as $i=>$d){?>
                    <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                      <div class="grids aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                        <div class="grid lg-50 md-50">
                          <div class="grid sm-100">
                            <a class="ss-card ss-card-07 mb-4" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+0)%3+3 ?>.jpg');"></div>
                                  </div>
                                </div>
                                <div class="text-container">
                                  <div class="title p fw-400" href="#">
                                    กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                                    ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                                    ปฏิบัติงานระดับการชำนาญพิเศษ
                                  </div>
                                  <div class="card-footer mt-2">
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
                              </div>
                            </a>
                          </div>
                          <div class="grid sm-100">
                            <a class="ss-card ss-card-07 mb-4" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+1)%3+3 ?>.jpg');"></div>
                                  </div>
                                </div>
                                <div class="text-container">
                                  <div class="title p fw-400" href="#">
                                    กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                                    ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                                    ปฏิบัติงานระดับการชำนาญพิเศษ
                                  </div>
                                  <div class="card-footer mt-2">
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
                              </div>
                            </a>
                          </div>
                        </div>
                        <div class="grid lg-50 md-50">
                          <div class="grid sm-100">
                            <a class="ss-card ss-card-07 mb-4" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+2)%3+3 ?>.jpg');"></div>
                                  </div>
                                </div>
                                <div class="text-container">
                                  <div class="title p fw-400" href="#">
                                    กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                                    ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                                    ปฏิบัติงานระดับการชำนาญพิเศษ
                                  </div>
                                  <div class="card-footer mt-2">
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
                              </div>
                            </a>
                          </div>
                          <div class="grid sm-100">
                            <a class="ss-card ss-card-07 mb-4" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+3)%3+3 ?>.jpg');"></div>
                                  </div>
                                </div>
                                <div class="text-container">
                                  <div class="title p fw-400" href="#">
                                    กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                                    ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                                    ปฏิบัติงานระดับการชำนาญพิเศษ
                                  </div>
                                  <div class="card-footer mt-2">
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
                              </div>
                            </a>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php }?>
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
  </section>

  <?php
    $categories02 = [
      ['title' => 'ข่าวสารประชาสัมพันธ์'], 
      ['title' => 'การเลือกตั้งท้องถิ่น'], 
    ];
  ?>
  <section class="section-padding tab-container bg-10">
    <div class="container">
      <div class="ss-box style-03 bg-10 w-full">
        <div class="ss-title-tab">
          <div class="title">
            <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
              <?php foreach($categories02 as $i=>$d){?>
                <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <h3 class="fw-600 color-dark"><?= $d['title'] ?></h3>
                </div>
              <?php }?>
            </div>
          </div>
          <div class="tab-menu">
            <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="150">
              <?php foreach($categories02 as $i=>$d){?>
                <div class="tab style-02 <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <?= $d['title'] ?>
                </div>
              <?php }?>
            </div>    
          </div>
        </div>  
        <?php
          $content01 = [
            ['title' => 'สรุปผลการใช้สิทธิเลือกตั้ง นายกองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'], 
            ['title' => 'พระราชบัญญัติการเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น พ.ศ. 2562'], 
            ['title' => 'ผลการเลือกตั้งสมาชิกสภาองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'],
          ];
        ?>
        <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="300">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <div class="grids aos-init aos-animate" data-aos="fade-up" data-aos-delay="300">
                <?php for($x=0; $x<2; $x++) {?>
                  <div class="grid lg-50 md-100 sm-100">
                    <?php foreach($content01 as $j) {?>
                      <div class="ss-card ss-card-39 mb-2">
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
                            <a class="btn btn-action-style-02 size-02 btn-13" href="#">
                              <em class="fa-solid fa-arrow-right"></em>
                            </a>
                          </div>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                <?php }?>
              </div>
            </div>
          <?php }?>
        </div>          
      </div>              
    </div>                
  </section>

  <section class="section-padding bg-11">
    <div class="container">
      <div class="grids">
        <div class="grid xl-30 lg-40">
          <a class="ss-card ss-card-40" href="#">
            <div class="ss-img square-02">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/95.jpg');"></div>
            </div>
            <div class="text-container">
              <div class="date-container">
                <div class="date-wrapper color-white">
                  <p class="xs fw-400">22 พ.ย.</p>  
                  <div class="ss-sep-02 style-02 bg-white"></div>
                  <p class="xs fw-400">15 ธ.ค.</p>
                </div>     
              </div>
              <div class="text">
                <h6 class="title color-white fw-400">เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8 เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8</h6>
                <p class="xs color-white">08 มิถุนายน 2565  เวลา 08:00 - 12:00</p> 
              </div>
            </div>
          </a>            
        </div>
        <div class="grid xl-70 lg-60">
          <div class="ss-box style-03 w-full">
            <div class="ss-title-style-02">
              <h3 class="fw-600">ปฏิทินกิจกรรม</h3>        
              <a class="link-more" href="#">
                <p class="text fw-400">ดูทั้งหมด</p>   
                <div class="arrow">
                  <em class="fa-solid fa-arrow-right"></em>
                </div>   
              </a>        
            </div>  
            <div class="grids">
              <div class="grid lg-1-3 mt-2">
                <div class="ss-card ss-card-41">
                  <div class="image-container">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/96.jpg');"></div>
                    </div>
                  </div>
                  <div class="text-container">
                    <p class="lh-sm fw-400">เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8</p>
                    <div class="date-time">
                      <p class="sm fw-400">08 มิถุนายน</p>
                      <p class="sm fw-400">เวลา 08:00 - 12:00</p>
                    </div>
                    <a class="link-more mt-2" href="#">
                      <p class="text fw-400 border-bottom bcolor-black">อ่านต่อ</p>   
                      <div class="arrow">
                        <em class="fa-solid fa-arrow-right"></em>
                      </div>   
                    </a>
                  </div>
                </div>      
              </div>   
              <div class="grid lg-1-3 mt-2">
                <div class="ss-card ss-card-41">
                  <div class="image-container">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/97.jpg');"></div>
                    </div>
                  </div>
                  <div class="text-container">
                    <p class="lh-sm fw-400">เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8</p>
                    <div class="date-time">
                      <p class="sm fw-400">08 มิถุนายน</p>
                      <p class="sm fw-400">เวลา 08:00 - 12:00</p>
                    </div>
                    <a class="link-more mt-2" href="#">
                      <p class="text fw-400 border-bottom bcolor-black">อ่านต่อ</p>   
                      <div class="arrow">
                        <em class="fa-solid fa-arrow-right"></em>
                      </div>   
                    </a>
                  </div>
                </div>
              </div> 
              <div class="grid lg-1-3 mt-2">
                <div class="ss-card ss-card-41">
                  <div class="image-container">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/98.jpg');"></div>
                    </div>
                  </div>
                  <div class="text-container">
                    <p class="lh-sm fw-400">เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8</p>
                    <div class="date-time">
                      <p class="sm fw-400">08 มิถุนายน</p>
                      <p class="sm fw-400">เวลา 08:00 - 12:00</p>
                    </div>
                    <a class="link-more mt-2" href="#">
                      <p class="text fw-400 border-bottom bcolor-black">อ่านต่อ</p>   
                      <div class="arrow">
                        <em class="fa-solid fa-arrow-right"></em>
                      </div>   
                    </a>
                  </div>
                </div>
              </div>      
            </div>  
          </div>           
        </div>
      </div>                
    </div>                  
  </section>

  <?php include_once('include/footer-style-03.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>