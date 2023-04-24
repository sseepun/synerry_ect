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
      [ 'url' => '#', 'display' => 'วิดีโอ' ],
    ];
    $breadcrumbTitle = 'วิดีโอ';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/05.jpg';
    include('component/breadcrumb.php');
    $tagContainerStyle = ''
  ?>

  <section class="section-padding">
    <div class="container">
      <div class="grids">
        <!-- Left Content -->
        <div class="grid xl-70 lg-60 md-2-3 sm-100">
          <div class="ss-card ss-card-10" data-aos="fade-up" data-aos-delay="0">
            <h4 class="title lh-sm fw-500">
              ดร.ฐิติเชฏฐ์ นุชนาฏ กรรมการการเลือกตั้ง ตรวจเยี่ยมและสังเกตการณ์การเลือกตั้งกรุงเทพมหานคร 
            </h4>
            <div class="card-top mt-3">
              <div class="wrapper">
                <div class="icon d-inline-block">
                  <em class="fa-regular fa-file-lines"></em>
                  <span class="p sm ml-1 fw-500">งานกิจกรรม</span>
                </div>
                <div class="icon d-inline-block">
                  <em class="fa-solid fa-calendar-days"></em>
                  <span class="p sm ml-1 fw-500">08 มิถุนายน 2565</span>
                </div>
                <div class="icon d-inline-block">
                  <em class="fa-solid fa-eye"></em>
                  <span class="p sm ml-1 fw-500">255</span>
                </div>
                <div class="icon d-inline-block">
                  <em class="fa-solid fa-share-nodes"></em>
                  <span class="p sm ml-1 fw-500">208</span>
                </div>
              </div>
            </div>
            <div class="post-video width-full mt-2">
              <div class="wrapper">
                <video class="fit" controls="">
                  <source src="public/assets/app/video/01.mp4" type="video/mp4">
                  Your browser does not support the video tag.
                </video>
              </div>
            </div>
            <p class="desc color-gray color-black-theme fw-400 mt-3">
              วันพุธที่ 8 มิถุนายน 2565 เวลา 13.00 น. นายปกรณ์ มหรรณพ กรรมการการเลือกตั้ง 
              พร้อมด้วย พล.ต.ต.ชัชชรินร์ สว่างวงศ์ ผู้เชี่ยวชาญด้านรัฐประศาสนศาสตร์ นางสาวโชติกา 
              แก้วผล ผู้อำนวยการฝ่ายกิจการกรรมการการเลือกตั้ง 4 ได้มอบนโยบายในการปฏิบัติงาน 
              แนวทางการแก้ไขปัญหาในการปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ 
              ระหว่างวันที่ 6-20 มิถุนายน 2565 ณ ห้องประชุมคอนเวนชั่น โรงแรมรามาการ์เด้นส์ กรุงเทพมหานคร 
            </p>
          </div>
          
          <?php include('component/tags-container.php'); ?>
          <h4 class="title fw-600 mt-6 pt-6" data-aos="fade-up" data-aos-delay="600">
            ไฟล์ที่เกี่ยวข้อง
          </h4>     
          <div class="scroll-x-wrapper style-02 mt-2" data-simplebar>
            <table class="table table-download" data-aos="fade-up" data-aos-delay="750">
              <tbody>
                <?php
                  foreach([
                    'video'
                  ] as $k){
                ?>
                  <tr class="table-card-01 box-shadow style-02 mb-2">
                    <td>
                      <div class="download-card">
                        <img src="public/assets/app/images/file/svg/<?= $k ?>.svg" alt="Image File" />
                      </div>
                    </td>
                    <td class="title-container" style="min-width:450px;">
                      <a class="fw-600 title" href="#">
                        รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565
                      </a>
                      <div class="text-footer">
                        <div class="wrapper">
                          <p class="sm fw-400 mr-4">ขนาดไฟล์ <span class="fw-600">0.2 MB</span></p>
                          <p class="sm fw-400 mr-4">ดาวน์โหลด <span class="fw-600">122 ครั้ง</span></p>
                          <div class="icon h-color-19">
                            <em class="fa-solid fa-circle-exclamation mr-1"></em>
                            <p class="btn-popup-toggle cursor-pointer sm color-black-theme fw-400" data-popup="99">
                              แจ้งไฟล์เสีย
                            </p>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="arrow-container" style="min-width:100px;">
                      <div class="img-wrapper d-flex ai-center jc-center fw-wrap">
                        <img class="inactive" src="public/assets/app/images/icon-svg/download-inactive.svg" alt="Icon">
                        <img class="active" src="public/assets/app/images/icon-svg/download-active.svg" alt="Icon">
                      </div>
                      <a class="xs color-02 color-black-theme text-center fw-500 mt-1" href="#">ดาวน์โหลด</a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
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
                <p class="color-02 fw-600">งานกิจกรรม</p>
                <p class="color-02 fw-600">108</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">งานสัมนา</p>
                <p class="fw-400">11</p>
              </div> 
              <div class="cate-list">
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
            <h5 class="fw-600" data-aos="fade-up" data-aos-delay="150">
              ข่าวล่าสุด
            </h5> 
            <?php foreach($lastestnews as $d) {?>
              <a class="ss-card ss-card-16 border-bottom bcolor-sgray pb-3 mt-3" 
              href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox="" data-aos="fade-up" data-aos-delay="300">
                <div class="img-wrapper">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                    <div class="hover-container show h-hidden">
                      <div class="icon">
                        <img src="public/assets/app/images/icon/video-01.png" alt="Icon">
                      </div>
                    </div>
                    <div class="filter style-02">
                      <div class="wrapper">
                        <div class="icon">
                          <img src="public/assets/app/images/icon-svg/youtube.svg" alt="Icon">
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="card-line style-01"></div>
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
            <?php }?>
            <div class="popular-search-container box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="450">
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