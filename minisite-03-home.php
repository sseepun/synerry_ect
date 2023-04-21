<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php 
    $superTopNavStyle = 'theme-05';
    $topNavStyle = 'theme-05';
    $sideNavStyle = 'theme-05';
    $sidePanelStyle = 'style-05';
    include_once('include/topnav-style-02.php'); 
  ?>

  <section class="banner-03 style-03">
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <?php for($i=0; $i<3; $i++){?>
          <div class="swiper-slide size-02">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/30.jpg');"></div>
            <div class="hero size-02 animate" style="--delay:.55s;">
              <img src="public/assets/app/images/hero/06.png" class="Hero" />
            </div>
            <div class="container">
              <div class="quote-container style-02 animate" style="--delay:.4s;">
                <div class="wrapper">
                  <h1 class="color-black-theme color-white lh-2xs fw-600">เลือกตั้ง อบต.</h1>
                  <p class="h6 color-black-theme lh-xs fw-400">
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
      [
        'title' => 'ข่าวกิจกรรม',
        'icon_inactive' => 'public/assets/app/images/icon/40.png',
        'icon_active' => 'public/assets/app/images/icon/41.png'
      ], [
        'title' => 'ข่าวประชาสัมพันธ์ กกต.',
        'icon_inactive' => 'public/assets/app/images/icon/42.png',
        'icon_active' => 'public/assets/app/images/icon/43.png'
      ], [
        'title' => 'มัลติมีเดีย',
        'icon_inactive' => 'public/assets/app/images/icon/44.png',
        'icon_active' => 'public/assets/app/images/icon/45.png'
      ],
    ];
  ?>
  <section class="section-padding pt-0 pb-6 section-18 tab-container bg-10">
    <div class="container">
      <div class="ss-box bg-10 w-full">
        <div class="tabs tabs-03" data-aos="fade-up" data-aos-delay="0">
          <div class="tabs-wrapper">
            <?php foreach($categories as $i=>$d){?>
              <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                <div class="wrapper">
                  <div class="icon">
                    <img class="inactive" src="<?= $d['icon_inactive'] ?>" alt="Icon Inactive" />
                    <img class="active" src="<?= $d['icon_active'] ?>" alt="Icon Active" />
                  </div>
                  <p class="title"><?= $d['title'] ?></p>
                </div>
              </div>
            <?php }?>
          </div>
        </div>    
        <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
          <?php foreach($categories as $i=>$d){?>
            <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
              <h3 class="fw-600 color-12 text-center"><?= $d['title'] ?></h3>
            </div>
          <?php }?>
        </div>
        
         <!-- Swiper -->
         <div class="swiper-main-container">
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php for($k=0; $k<4; $k++) {?>
                <div class="swiper-slide">
                  <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="150">
                    <?php foreach($categories as $i=>$d){?>
                      <div class="tab-content no-fade <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
                      <a class="ss-card ss-card-44 mb-3" href="#">
                        <div class="ss-img">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/0<?= ($i+0)%3+3 ?>.jpg');"></div>
                        </div>
                        <div class="text-container">
                          <p class="title fw-500 mt-1">
                            รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมหารือเตรียมการจัดงานวันสถาปนา
                            สำนักงานคณะกรรมการการเลือกตั้ง ครบรอบ 24 ปี
                          </p>
                          <div class="card-footer mt-1">
                            <div class="wrapper color-gray color-black-theme">
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
                            <div class="link-footer">
                              <p class="text color-05 fw-500 border-bottom 
                               bcolor-05 color-black-theme lh-sm mr-2 bcolor-black-theme">
                                อ่านต่อ
                              </p>
                              <div class="arrow"><em class="fa-solid fa-arrow-right"></em></div>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                    <?php }?>
                  </div>
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
    </div>      
  </section>

  <section class="section-20 bg-10">
    <div class="pattern style-01">
      <div class="wrapper">
        <img src="public/assets/app/images/pattern/07.png" alt="Hero">
      </div>
    </div>
    <div class="container">
      <?php
        $content01 = [
          ['title' => 'ประกาศค่าใช้จ่ายในการเลือกตั้งท้องถิ่น'], 
          ['title' => 'สรุปผลการใช้สิทธิเลือกตั้ง นายกองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'], 
          ['title' => 'ผลการเลือกตั้งสมาชิกสภาองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'], 
          ['title' => 'พระราชบัญญัติการเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น พ.ศ. 2562'],
          ['title' => 'ระเบียบคณะกรรมการการเลือกตั้งว่าด้วยการเลือกตั้งสมาชิกสภาท้องถิ่นและผู้บริหารท้องถิ่น พ.ศ. 2562'],
          ['title' => 'ระเบียบ กกต. ว่าด้วยการเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น (ฉบับที่ 2) พ.ศ. 2563'],
        ];
      ?>
      <div class="grids no-gap" data-aos="fade-up" data-aos-delay="300">
        <div class="grid lg-25 mt-0">
          <div class="ss-card ss-card-46">
            <h3 class="color-12 lh-xs xs-no-br fw-600">ข่าวสาร<br>ประชาสัมพันธ์</h3>
            <div class="topic">
              <div class="title active">
                <a>ประชาสัมพันธ์</a>
              </div>
              <div class="title">
                <a>การเลือกตั้งท้องถิ่น</a>
              </div>
            </div>
          </div>
        </div>    
        <?php foreach($content01 as $d) {?>
          <div class="grid lg-25 mt-0">
            <div class="ss-card ss-card-45">
              <div class="img-bg"style="background-image:url('public/assets/app/images/bg/31.jpg"></div>
              <div class="text-wrapper">
              <div>
                <div class="ss-tags">
                  <div class="tag fw-400">ระเบียบการเลือกตั้ง</div>    
                </div>   
                <p class="h6 title lh-sm fw-400 mt-2">
                  <?= $d['title'] ?>
                </p>    
              </div>   
              <div class="card-footer">
                <div class="date">
                  <p class="fw-400">6 กรกฎาคม 2565</p>  
                </div>  
                <a class="btn btn-action-style-02 size-02 btn-14" href="#">
                  <em class="fa-solid fa-arrow-right"></em>
                </a>  
              </div>
              </div>
            </div>
          </div> 
        <?php } ?> 
        <div class="grid lg-25 mt-0">
          <div class="bg-sgray d-flex flex-column ai-center jc-center" style="height:13rem;">
            <h4 class="fw-500">ดูทั้งหมด</h4>
            <a class="btn btn-action-style-02 size-03 btn-14" href="#">
              <em class="fa-solid fa-arrow-right"></em>
            </a> 
          </div>
        </div>
      </div>      
    </div>
  </section>

  <?php 
    $content03 = [
      [
        'title' => 'เลือกตั้งแทนตำแหน่งที่ว่าง อบต.โหล่งขอด เขตเลือกตั้งที่ 8',
        'image' => 'public/assets/app/images/content/96.jpg'
      ],[
        'title' => 'เลือกตั้งแทนตำแหน่งที่ว่าง ทต.สันกลาง เขตเลือกตั้งที่ 1',
        'image' => 'public/assets/app/images/content/97.jpg'
      ],[
        'title' => 'เลือกตั้งแทนตำแหน่งที่ว่าง ส.อบจ.อ.ฝาง เขตเลือกตั้งที่ 1',
        'image' => 'public/assets/app/images/content/98.jpg'
      ]
    ]
  ?>
  <section class="bg-10 pt-6 pb-6">
    <div class="container" style="z-index:2;">
      <div class="grids">
        <div class="grid xl-30 lg-30 md-40 sm-100" data-aos="fade-up" data-aos-delay="450">
          <a class="ss-card ss-card-40 style-02" href="#">
            <div class="ss-img square-03">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/95.jpg');"></div>
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
        <div class="grid xl-70 lg-70 md-60 sm-100" data-aos="fade-up" data-aos-delay="450">
          <div class="ss-title-style-02 style-02">
            <h3 class="fw-600">ปฏิทินกิจกรรม</h3>        
            <a class="link-more" href="#">
              <p class="text fw-400">ดูทั้งหมด</p>   
              <div class="arrow">
                <em class="fa-solid fa-arrow-right"></em>
              </div>   
            </a>        
          </div> 
          <div class="ss-box bg-white-theme style-04 w-full" style="position:relative; z-index:2;">
            <div class="grids jc-center">
              <?php foreach($content03 as $d){?>
                <div class="grid lg-1-3 mt-2">
                  <a class="ss-card ss-card-41 style-02" href="#">
                    <div class="image-container">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
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
                      <p class="title lh-sm fw-400"><?= $d['title'] ?></p>
                      <div class="date-time">
                        <p class="sm fw-400">08 มิถุนายน</p>
                        <p class="sm fw-400">เวลา 08:00 - 12:00</p>
                      </div>
                      <div class="link-more mt-2" href="#">
                        <p class="text fw-400 border-bottom bcolor-black bcolor-black-theme">อ่านต่อ</p>   
                        <div class="arrow">
                          <em class="fa-solid fa-arrow-right"></em>
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
    </div>
  </section>

  <section class="section-20 pt-6 bg-10" style="padding-bottom:4rem;">
    <div class="pattern style-02">
      <div class="wrapper">
        <img src="public/assets/app/images/pattern/08.png" alt="Hero">
      </div>
    </div>
    <div class="container">
      <?php
          $content02 = [
            ['title' => 'ประกาศค่าใช้จ่ายในการเลือกตั้งท้องถิ่น'], 
            ['title' => 'สรุปผลการใช้สิทธิเลือกตั้ง นายกองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'], 
            ['title' => 'ผลการเลือกตั้งสมาชิกสภาองค์การบริหารส่วนตำบล (อย่างไม่เป็นทางการ)'], 
            ['title' => 'พระราชบัญญัติการเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น พ.ศ. 2562'],
            ['title' => 'ระเบียบคณะกรรมการการเลือกตั้งว่าด้วยการเลือกตั้งสมาชิกสภาท้องถิ่นและผู้บริหารท้องถิ่น พ.ศ. 2562'],
            ['title' => 'ระเบียบ กกต. ว่าด้วยการเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น (ฉบับที่ 2) พ.ศ. 2563'],
          ];
        ?>
        
        <div class="grids no-gap" data-aos="fade-up" data-aos-delay="600">
          <div class="grid lg-25 mt-0">
            <div class="ss-card ss-card-46">
              <h3 class="color-12 lh-xs xs-no-br fw-600">ประกาศจาก<br>หน่วยงาน</h3>
              <div class="topic">
                <div class="title active">
                  <a href="#">ประกาศเกี่ยวกับการเลือกตั้ง</a>
                </div>
                <div class="title">
                  <a href="#">ประกาศผลการเลือกตั้ง</a>
                </div>
                <div class="title">
                  <a href="#">ข่าวประกวดราคา</a>
                </div>
              </div>
            </div>
          </div>    
          <?php foreach($content02 as $d) {?>
            <div class="grid lg-25 mt-0">
              <div class="ss-card ss-card-45">
                <div class="img-bg"style="background-image:url('public/assets/app/images/bg/31.jpg"></div>
                <div class="text-wrapper">
                <div>
                  <div class="ss-tags">
                    <div class="tag fw-400">ระเบียบการเลือกตั้ง</div>    
                  </div>   
                  <p class="h6 title lh-sm fw-400 mt-2">
                    <?= $d['title'] ?>
                  </p>    
                </div>   
                <div class="card-footer">
                  <div class="date">
                    <p class="fw-400">6 กรกฎาคม 2565</p>  
                  </div>  
                  <a class="btn btn-action-style-02 size-02 btn-14" href="#">
                    <em class="fa-solid fa-arrow-right"></em>
                  </a>  
                </div>
                </div>
              </div>
            </div> 
          <?php } ?> 
          <div class="grid lg-25 mt-0">
            <div class="bg-sgray d-flex flex-column ai-center jc-center" style="height:13rem;">
              <h4 class="fw-500">ดูทั้งหมด</h4>
              <a class="btn btn-action-style-02 size-03 btn-14" href="#">
                <em class="fa-solid fa-arrow-right"></em>
              </a> 
            </div>
          </div>
        </div>      
    </div>
  </section>

  <section class="section-19">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/32.jpg');"></div>   
    <div class="container h-full">
      <div class="wrapper h-full">
        <div class="text-container" data-aos="fade-up" data-aos-delay="750">
          <h3 class="color-white fw-400 lh-xs md-no-br">
            กกต.พร้อมให้บริการข้อมูลการเลือก<br>
            ตั้งแก่ภาคประชาชนทุกภาคส่วน
          </h3>         
          <p class="color-white fw-400">ด้วยหลากหลายแอพพลิเคชั่น</p>          
        </div>           
        <div class="image-container" data-aos="fade-up" data-aos-delay="750">
          <div class="image-wrapper">
            <img src="public/assets/app/images/content/07.png" alt="Image"> 
          </div> 
          <div class="pattern-light" data-aos="fade-up" data-aos-delay="900">
            <img src="public/assets/app/images/pattern/09.png" alt="Image"> 
          </div>
        </div>   
      </div>       
    </div>     
  </section>

  <section class="section-padding bg-10">
    <div class="container pos-relative" style="z-index:3;">
      <div class="client-02 style-02 mt-5">
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
              <a class="btn btn-action-style-02 size-02 btn-14" href="#">
                <em class="fa-solid fa-arrow-left"></em>
              </a>
            </div>
            <div class="dots"></div>
            <div class="arrow-right btn-icon-next">
              <a class="btn btn-action-style-02 size-02 btn-14" href="#">
                <em class="fa-solid fa-arrow-right"></em>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>               
  </section>

  <?php include_once('include/footer-style-06.php'); ?>
  <?php include_once('include/script.php'); ?>
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
</body>
</html>