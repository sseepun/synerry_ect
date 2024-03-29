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
      [ 'url' => '#', 'display' => 'ดร.ฐิติเชฏฐ์ นุชนาฏ กรรมการการเลือกตั้ง' ]
    ];
    $breadcrumbTitle = 'วิดีโอ';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/30.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
    $content = [
      [
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/84.jpg'
      ],[
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/135.jpg'
      ]
    ]
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body pt-0">
          <div class="grids">
            <!-- Left Content -->
            <div class="grid xl-70 lg-60 md-2-3 sm-100">
              <div class="ss-card ss-card-59" data-aos="fade-up" data-aos-delay="0">
                <h4 class="title lh-sm fw-500">
                  ดร.ฐิติเชฏฐ์ นุชนาฏ กรรมการการเลือกตั้ง ตรวจเยี่ยมและสังเกตการณ์การเลือกตั้งกรุงเทพมหานคร 
                </h4>
                <div class="card-top mt-3">
                  <div class="wrapper">
                    <div class="icon">
                      <em class="fa-regular fa-file-lines"></em>
                      <span class="p sm ml-2 fw-400">เรื่องเด่น กกต.</span>
                    </div>
                    <div class="icon">
                      <p class="p sm fw-400">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-eye"></em>
                      <p class="p sm fw-400 ml-2">280 <span class="ml-1">/</span></p>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-share-nodes"></em>
                      <span class="p sm fw-400 ml-2">60</span>
                    </div>
                  </div>
                </div>
                <div class="youtube-container bradius mt-2">
                  <iframe class="responsive-iframe" src="https://www.youtube.com/embed/G8nNGk6LHaM"></iframe>
                </div>
                <p class="desc color-gray color-black-theme fw-400 mt-3">
                  วันพุธที่ 8 มิถุนายน 2565 เวลา 13.00 น. นายปกรณ์ มหรรณพ กรรมการการเลือกตั้ง 
                  พร้อมด้วย พล.ต.ต.ชัชชรินร์ สว่างวงศ์ ผู้เชี่ยวชาญด้านรัฐประศาสนศาสตร์ นางสาวโชติกา 
                  แก้วผล ผู้อำนวยการฝ่ายกิจการกรรมการการเลือกตั้ง 4 ได้มอบนโยบายในการปฏิบัติงาน 
                  แนวทางการแก้ไขปัญหาในการปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ 
                  ระหว่างวันที่ 6-20 มิถุนายน 2565 ณ ห้องประชุมคอนเวนชั่น โรงแรมรามาการ์เด้นส์ กรุงเทพมหานคร 
                </p>
              </div>

              <?php 
                $tagContainerStyle = 'style-02';
                include('component/tags-container-mini-site.php'); 
              ?>

            </div>
            <!-- Right Content -->
            <div class="grid xl-30 lg-40 md-1-3 sm-100">
              <div class="pl-5 pl-unset-sm">
                <div class="category-container" data-aos="fade-up" data-aos-delay="0">
                  <div class="cate-header">
                    <h5 class="fw-600">ประเภท</h5>
                    <p class="fw-400">รายการ</p>
                  </div> 
                  <div class="cate-list mt-2 bcolor-white-theme">
                    <p class="color-02 color-black-theme fw-600">ข่าวประชาสัมพันธ์</p>
                    <p class="color-02 color-black-theme fw-600">108</p>
                  </div> 
                  <div class="cate-list bcolor-white-theme">
                    <p class="fw-400">งานสัมนา</p>
                    <p class="fw-400">11</p>
                  </div> 
                  <div class="cate-list bcolor-white-theme">
                    <p class="fw-400">แหล่งความรู้</p>
                    <p class="fw-400">50</p>
                  </div>  
                </div>   
                <?php 
                  $lastestnews = [
                    ['image' => 'public/assets/app/images/content/43.jpg'],
                    ['image' => 'public/assets/app/images/content/42.jpg'],
                    ['image' => 'public/assets/app/images/content/43.jpg']
                  ]
                ?>
                <h5 class="fw-600 mb-3" data-aos="fade-up" data-aos-delay="150">
                  วิดีโอล่าสุด
                </h5> 
                <?php foreach($lastestnews as $d) {?>
                  <a class="ss-card ss-card-60" href="#" data-aos="fade-up" data-aos-delay="300">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                      <div class="btn-video">
                        <div class="img-container">
                          <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                        </div>
                      </div>
                      <div class="btn-scale">
                        <div class="btn btn-action style-06 btn-27">
                          <em class="fa-solid fa-arrow-right"></em>
                        </div>
                      </div>
                      <div class="filter-04">
                        <div class="wrapper">
                          <div class="icon op-0">
                            <img src="public/assets/app/images/icon/51.png" alt="Icon">
                          </div>
                        </div>
                      </div>
                      <div class="card-line style-01 size-02"></div>
                    </div>
                    <div class="text-container">
                      <p class="title fw-400 lh-sm mt-2 color-black-theme">
                        รายการ กกต. ขอบอก EP 81 : "สนง. กกต. มอบประกาศเกียรติคุณชื่นชมยกย่องคุณความดีแก่ผู้มีสิทธิเลือกตั้ง"
                      </p>
                      <div class="card-footer mt-1">
                        <div class="wrapper color-black-theme">
                          <div class="icon">
                            <p class="p sm fw-400">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                          </div>
                          <div class="icon">
                            <em class="fa-solid fa-eye"></em>
                            <p class="p sm ml-2 fw-400">280 <span class="ml-1">/</span></p>
                          </div>
                          <div class="icon">
                            <em class="fa-solid fa-share-nodes"></em>
                            <span class="p sm ml-2 fw-400">60</span>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                <?php }?>
              </div>   
              <div class="popular-search-container theme-02 box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
                <p class="h5 fw-600 color-black-theme">แท็กยอดนิยม</p>
                <div class="mt-1">
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">ข่าวประกาศ</span>
                    </div>
                  </div>
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">อบรมหลักสูตร</span>
                    </div>
                  </div>
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">การเลือกตั้ง</span>
                    </div>
                  </div>
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">รายงานการจัดซื้อจัดจ้าง</span>
                    </div>
                  </div>
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">ระดับชำนาญการพิเศษ</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="mt-6"></div>

  <?php include_once('component/popup-file-error.php'); ?>
  <?php
    $listResult= ['report-file'];
    include_once('component/popup-file-error-style-02.php');
  ?>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
  <script>
    let btn = document.querySelector("#btnLink")
    let toolTip = document.querySelector('#toolTip')

    btn.addEventListener("click", () => {
      toolTip.style.opacity = '1'
      setTimeout(function(){
        toolTip.style.opacity = '0'
      }, 1200);
    });
  </script>
</body>
</html>