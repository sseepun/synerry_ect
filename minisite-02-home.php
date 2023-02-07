<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>

  <section class="banner-03">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<3; $i++){?>
          <div class="swiper-slide size-02">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/33.jpg');"></div>
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
          <div class="tab-menu size-02">
            <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="0">
              <?php foreach($categories as $i=>$d){?>
                <div class="tab style-03 <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                  <?= $d['title'] ?>
                </div>
              <?php }?>
            </div>    
          </div>
          <a class="link-more"  data-aos="fade-up" data-aos-delay="0" href="#">
            <p class="text fw-400">ดูทั้งหมด</p>   
            <div class="arrow">
              <em class="fa-solid fa-arrow-right"></em>
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
                                  <a class="ss-card ss-card-43 mb-4" href="#">
                                    <div class="wrapper">
                                      <div class="img-container">
                                        <div class="ss-img">
                                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+0)%3+3 ?>.jpg');"></div>
                                        </div>
                                      </div>
                                      <div class="text-container">
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
                                        <div class="link-more mt-2" href="#">
                                          <p class="text fw-400 border-bottom bcolor-black">อ่านต่อ</p>   
                                          <div class="arrow">
                                            <em class="fa-solid fa-arrow-right"></em>
                                          </div>   
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
              <div class="arrow style-02 btn-icon-next">
                <em class="fa-solid fa-arrow-left"></em>
              </div>
              <div class="arrow style-02 btn-icon-next">
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
                <h3 class="fw-600 color-dark"><?= $d['title'] ?></h3>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="tab-menu size-02">
          <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="0">
            <?php foreach($categories02 as $i=>$d){?>
              <div class="tab style-03 <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                <?= $d['title'] ?>
              </div>
            <?php }?>
          </div>    
        </div>
        <a class="link-more" href="#" data-aos="fade-up" data-aos-delay="0">
          <p class="text fw-400">ดูทั้งหมด</p>   
          <div class="arrow">
            <em class="fa-solid fa-arrow-right"></em>
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
                    <div class="ss-card ss-card-39 mb-2">
                      <div class="wrapper">
                        <div class="date-container style-02">
                          <p class="day">1<?= $i+3 ?></p>
                          <p class="month">พ.ย.</p>
                          <p class="year">256<?= $i+5 ?></p>
                        </div>
                        <div class="text-container">
                          <div class="ss-tags">
                            <div class="tag style-04">ระเบียบการเลือกตั้ง</div>
                          </div>
                          <p class="title fw-400 lh-sm mt-1"><?= $j['title'] ?></p>
                        </div>
                        <div class="arrow-container">
                          <a class="btn btn-action-style-02 size-02 btn-15" href="#">
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
  <section class="section-16 section-padding bg-13">
    <div class="pattern style-01">
      <div class="wrapper">
        <img src="public/assets/app/images/pattern/05.png" alt="Hero">
      </div>
    </div>
    <div class="container">
      <div class="grids">
        <div class="grid xl-30 lg-30 md-40 sm-100" data-aos="fade-up" data-aos-delay="0">
          <a class="ss-card ss-card-40" href="#">
            <div class="ss-img square-02">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/95.jpg');"></div>
            </div>
            <div class="text-container style-02">
              <div class="date-container">
                <div class="date-wrapper style-02 color-white">
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
        <div class="grid xl-70 lg-70 md-60 sm-100" data-aos="fade-up" data-aos-delay="0">
          <div class="ss-box style-03 w-full" style="position:relative; z-index:2;">
            <div class="ss-title-style-02">
              <h3 class="fw-600">ปฏิทินกิจกรรม</h3>        
              <a class="link-more" href="#">
                <p class="text fw-400">ดูทั้งหมด</p>   
                <div class="arrow">
                  <em class="fa-solid fa-arrow-right"></em>
                </div>   
              </a>        
            </div>  
            <div class="grids jc-center">
              <?php foreach($content03 as $d) {?>
                <div class="grid lg-1-3 mt-2">
                  <a class="ss-card ss-card-41" href="#">
                    <div class="image-container">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                      </div>
                      <div class="date-container">
                        <div class="date-wrapper style-02 color-white">
                          <p class="xs fw-400">22 พ.ย.</p>  
                          <div class="ss-sep-02 style-02 bg-white"></div>
                          <p class="xs fw-400">15 ธ.ค.</p>
                        </div>     
                      </div>
                    </div>
                    <div class="text-container">
                      <p class="title lh-sm fw-400">
                        <?= $d['title'] ?>
                      </p>
                      <div class="date-time">
                        <p class="sm fw-400">08 มิถุนายน</p>
                        <p class="sm fw-400">เวลา 08:00 - 12:00</p>
                      </div>
                      <div class="link-more mt-2" href="#">
                        <p class="text fw-400 border-bottom bcolor-black">อ่านต่อ</p>   
                        <div class="arrow">
                          <em class="fa-solid fa-arrow-right"></em>
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
      <div class="ss-card ss-card-42" style="background-image:url('public/assets/app/images/bg/34.jpg');" 
       data-aos="fade-up" data-aos-delay="0">
        <div class="text-container">
          <h3 class="color-white fw-400 lh-xs xs-no-br">
            กกต.พร้อมให้บริการข้อมูลการเลือก<br>
            ตั้งแก่ภาคประชาชนทุกภาคส่วน
          </h3>         
          <p class="color-white fw-400">ด้วยหลากหลายแอพพลิเคชั่น</p>          
        </div>           
        <div class="image-container">
          <img src="public/assets/app/images/content/03.png" alt="Image">      
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
                <h3 class="fw-600 color-dark"><?= $d['title'] ?></h3>
              </div>
            <?php }?>
          </div>
        </div>
        <div class="tab-menu size-02">
          <div class="tabs tabs-02" data-aos="fade-up" data-aos-delay="0">
            <?php foreach($categories02 as $i=>$d){?>
              <div class="tab style-03 <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                <?= $d['title'] ?>
              </div>
            <?php }?>
          </div>    
        </div>
        <a class="link-more" href="#" data-aos="fade-up" data-aos-delay="0">
          <p class="text fw-400">ดูทั้งหมด</p>   
          <div class="arrow">
            <em class="fa-solid fa-arrow-right"></em>
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
                    <div class="ss-card ss-card-39 mb-2">
                      <div class="wrapper">
                        <div class="date-container style-02">
                          <p class="day">1<?= $i+3 ?></p>
                          <p class="month">พ.ย.</p>
                          <p class="year">256<?= $i+5 ?></p>
                        </div>
                        <div class="text-container">
                          <div class="ss-tags">
                            <div class="tag style-04">ระเบียบการเลือกตั้ง</div>
                          </div>
                          <p class="title fw-400 lh-sm mt-1"><?= $j['title'] ?></p>
                        </div>
                        <div class="arrow-container">
                          <a class="btn btn-action-style-02 size-02 btn-15" href="#">
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
              <a class="btn btn-action-style-02 size-02 btn-15" href="#">
                <em class="fa-solid fa-arrow-left"></em>
              </a>
            </div>
            <div class="dots"></div>
            <div class="arrow-right btn-icon-next">
              <a class="btn btn-action-style-02 size-02 btn-15" href="#">
                <em class="fa-solid fa-arrow-right"></em>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>               
  </section>

  <?php include_once('include/footer-style-07.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>


<script>
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

</html>