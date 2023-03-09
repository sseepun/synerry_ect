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

  <section class="section-padding">
    <div class="container">
      <div class="grids">
        <!-- Left Content -->
        <div class="grid xl-70 lg-60 md-2-3 sm-100">
          <div class="ss-card ss-card-10" data-aos="fade-up" data-aos-delay="0">
            <h4 class="title lh-sm fw-500">
              ผอ.สนง.กกต.จว.พัทลุง ลงพื้นที่ประสานนายอำเภอเพื่อเตรียมความพร้อมการเลือกตั้งสมาชิกวุฒิสภา
            </h4>
            <div class="card-top mt-3">
              <div class="wrapper">
                <div class="icon">
                  <em class="fa-regular fa-file-lines"></em>
                  <span class="p sm ml-2 fw-500">ภาพกิจกรรม</span>
                </div>
                <div class="icon d-inline-block">
                  <em class="fa-solid fa-calendar-days"></em>
                  <span class="p sm ml-2 fw-500">08 มิถุนายน 2565</span>
                </div>
                <div class="icon d-inline-block">
                  <em class="fa-solid fa-eye"></em>
                  <span class="p sm ml-2 fw-500">255</span>
                </div>
                <div class="icon d-inline-block">
                  <em class="fa-solid fa-share-nodes"></em>
                  <span class="p sm ml-2 fw-500">208</span>
                </div>
              </div>
            </div>
            <div class="section-07">
              <div class="swiper-container">
                <div class="swiper-wrapper">
                  <?php for($i=0; $i<20; $i++){?>
                    <div class="swiper-slide">
                      <div class="ss-img horizontal mt-3">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/2<?= ($i%3+4) ?>.jpg');"></div>
                      </div>
                    </div>
                  <?php }?>
                </div>
                <div class="btns-swiper">
                  <div class="wrapper jc-center">
                    <div class="dots"></div>
                  </div>
                </div>
                <div class="arrow-container">
                  <div class="btn btn-icon-prev">
                    <div class="arrow">
                      <em class="fa-solid fa-arrow-left"></em>
                    </div>
                  </div>
                  <div class="btn btn-icon-next">
                    <div class="arrow">
                      <em class="fa-solid fa-arrow-right"></em>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <?php 
            $news01 = [
              ['image' => 'public/assets/app/images/content/02.jpg'],
              ['image' => 'public/assets/app/images/content/10.jpg'],
              ['image' => 'public/assets/app/images/content/11.jpg'],
              ['image' => 'public/assets/app/images/content/12.jpg'],
              ['image' => 'public/assets/app/images/content/13.jpg'],
              ['image' => 'public/assets/app/images/content/14.jpg'],
              ['image' => 'public/assets/app/images/content/15.jpg'],
              ['image' => 'public/assets/app/images/content/12.jpg', 'classer' => 'active'],
            ]
          ?>
          <div class="grids jc-center mt-4" data-aos="fade-up" data-aos-delay="0">
            <?php foreach($news01 as $d) {?>
              <div class="grid xl-25 lg-1-3">
                <a class="ss-card ss-card-11 <?= $d['classer']?>" href="<?= $d['image']?>" data-fancybox="gallery">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                    <div class="filter style-02">
                      <div class="wrapper">
                        <div class="icon op-0">
                          <img src="public/assets/app/images/icon/51.png" alt="Icon">
                        </div>
                      </div>
                    </div>
                    <div class="card-line style-01"></div>
                  </div>
                  <div class="filter-01">
                    <div class="text">
                      <h3 class="number lh-3xs fw-600">+30</h3>
                      <p class="h6 fw-500">รูปภาพ</p>
                    </div>
                  </div>
                </a>
              </div>
            <?php }?>
          </div>

          <div class="btns jc-center mt-5 mb-5" data-aos="fade-up" data-aos-delay="0">
            <a class="btn btn-action-style-06 size-02" href="#">
              <span>ดาวน์โหลดทั้งหมด</span><div class="sep"></div>
            </a>
          </div>

          <p class="color-gray fw-400 mt-5" data-aos="fade-up" data-aos-delay="150">
              วันที่ 10 ตุลาคม 2561 ร้อยตำรวจเอกสุชีพ จาดย่านขาด ผอ.สนง.กกต.จว.พท พร้อมด้วยนายประภาส 
              เศียรอุ่น พนักงานสืบสวนและไต่สวน ชำนาญการ ปฏิบัติหน้าที่หัวหน้างานสืบสวนสอบสวนและพรรคการเมือง 
              นายสมทบ ไชยรัตน์ พนักงานการเลือกตั้ง ชำนาญการ และนายประเสริฐ ธรรมเพชร พนักงานสืบสวนและไต่สวน 
              ชำนาญการ ลงพื้นที่พบปะพูดคุยกับนายอำเภอบางแก้ว ปลัดอาวุโสอำเภอบางแก้ว นายอำเภอตะโหมด 
              นายอำเภอกงหราและปลัดอาวุโสอำเภอศรีนครินทร์ เพื่อประสานงานการเตรียมความพร้อมตามแผนงานการเลือกสมาชิกวุฒิสภา 
              ให้เป็นไปด้วยความเรียบร้อยและให้การสนับสนุนภารกิจดังกล่าว
            </p>
        
          <?php include('component/tags-container.php'); ?>

        </div>
        <!-- Right Content -->
        <div class="grid xl-30 lg-40 md-1-3 sm-100">
          <div class="pl-5 pl-unset-sm">
            <div class="category-container" data-aos="fade-up" data-aos-delay="0">
              <div class="cate-header">
                <h5 class="fw-600">ประเภท</h5>
                <p class="fw-400">รายการ</p>
              </div> 
              <div class="cate-list mt-2">
                <p class="color-02 fw-600">ภาพกิจกรรม</p>
                <p class="color-02 fw-600">108</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">ภาพการดูงาน</p>
                <p class="fw-400">11</p>
              </div> 
            </div>   
            <?php 
              $lastestnews = [
                ['image' => 'public/assets/app/images/content/16.jpg'],
                ['image' => 'public/assets/app/images/content/23.jpg'],
                ['image' => 'public/assets/app/images/content/16.jpg']
              ]
            ?>
            <h5 class="fw-600" data-aos="fade-up" data-aos-delay="150">
              ข่าวล่าสุด
            </h5> 
            <?php foreach($lastestnews as $d) {?>
              <a class="ss-card ss-card-12 mt-3" href="#" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                  <div class="filter style-02">
                    <div class="wrapper">
                      <div class="icon op-0">
                        <img src="public/assets/app/images/icon/51.png" alt="Icon">
                      </div>
                    </div>
                  </div>
                  <div class="card-line style-01"></div>
                </div>
                <div class="text-container">
                  <p class="title fw-400 lh-sm mt-2">
                    สนง.กกต.จว.พัทลุง ประสานงานและติดตามตรวจเยี่ยม 
                    ศศ.ปชต.ในเขตอำเภอศรีนครินทร์ และอำเภอศรีบรรพต
                    ศศ.ปชต.ในเขตอำเภอศรีนครินทร์ และอำเภอศรีบรรพต
                  </p>
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
              </a>
            <?php }?>
            <div class="popular-search-container box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
              <p class="h5 color-black-theme fw-600">แท็กยอดนิยม</p>
              <div class="mt-1">
                <div class="ss-tags style-02">
                  <div class="tag">
                    <span class="title">ข่าวประกาศ</span>
                  </div>
                </div>
                <div class="ss-tags style-02">
                  <div class="tag">
                    <span class="title">อบรมหลักสูตร</span>
                  </div>
                </div>
                <div class="ss-tags style-02">
                  <div class="tag">
                    <span class="title">การเลือกตั้ง</span>
                  </div>
                </div>
                <div class="ss-tags style-02">
                  <div class="tag">
                    <span class="title">รายงานการจัดซื้อจัดจ้าง</span>
                  </div>
                </div>
                <div class="ss-tags style-02">
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
  </section>

  <?php include_once('component/popup-file-error.php'); ?>

  <?php include_once('include/footer-02.php'); ?>
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