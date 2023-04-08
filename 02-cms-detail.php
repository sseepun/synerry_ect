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
      [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
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
              กรรมการการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางการแก้ไขปัญหาในการปฏิบัติงานให้แก่พนักงานใน
              การอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ 
            </h4>
            <div class="card-top mt-3">
              <div class="wrapper">
                <div class="icon d-inline-block">
                  <em class="fa-regular fa-file-lines"></em>
                  <span class="p sm ml-2 color-white-theme fw-300">เรื่องเด่น กกต.</span>
                </div>
                <div class="icon d-inline-block">
                  <em class="fa-solid fa-calendar-days"></em>
                  <span class="p sm ml-2 fw-300">08 มิถุนายน 2565</span>
                </div>
                <div class="icon d-inline-block">
                  <em class="fa-solid fa-eye"></em>
                  <span class="p sm ml-2 fw-300">255</span>
                </div>
                <div class="icon d-inline-block">
                  <em class="fa-solid fa-share-nodes"></em>
                  <span class="p sm ml-2 fw-300">208</span>
                </div>
              </div>
            </div>
            <div class="ss-img horizontal no-hover mt-3">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/02.jpg');"></div>
            </div>
            <p class="desc color-gray fw-400 mt-3">
              วันพุธที่ 8 มิถุนายน 2565 เวลา 13.00 น. นายปกรณ์ มหรรณพ กรรมการการเลือกตั้ง 
              พร้อมด้วย พล.ต.ต.ชัชชรินร์ สว่างวงศ์ ผู้เชี่ยวชาญด้านรัฐประศาสนศาสตร์ นางสาวโชติกา 
              แก้วผล ผู้อำนวยการฝ่ายกิจการกรรมการการเลือกตั้ง 4 ได้มอบนโยบายในการปฏิบัติงาน 
              แนวทางการแก้ไขปัญหาในการปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ 
              ระหว่างวันที่ 6-20 มิถุนายน 2565 ณ ห้องประชุมคอนเวนชั่น โรงแรมรามาการ์เด้นส์ กรุงเทพมหานคร 
            </p>
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
          <div class="grids jc-center mt-4" data-aos="fade-up" data-aos-delay="150">
            <?php foreach($news01 as $d) {?>
              <div class="grid xl-25 lg-1-3">
                <a class="ss-card ss-card-11 <?= $d['classer']?>" href="<?= $d['image']?>" data-fancybox="gallery">
                  <div class="img-wrapper">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                      <div class="filter style-02">
                        <div class="wrapper">
                          <div class="icon op-0">
                            <img src="public/assets/app/images/icon/51.png" alt="Icon">
                          </div>
                        </div>
                      </div>
                      <div class="filter-01">
                        <div class="text">
                          <h3 class="number lh-3xs fw-600">+30</h3>
                          <p class="h6 fw-500">รูปภาพ</p>
                        </div>
                      </div>
                    </div>
                    <div class="card-line style-01"></div>
                  </div>
                
                </a>
              </div>
            <?php }?>
          </div>

          <?php include('component/tags-container.php'); ?>
        
          <h4 class="title fw-600 mt-6 pt-6" style="position:relative;" data-aos="fade-up" data-aos-delay="450">
            ไฟล์ที่เกี่ยวข้อง
          </h4>     
          <div class="box-shadow style-04" data-aos="fade-up" data-aos-delay="600">
            <div class="scroll-x-wrapper pb-0 style-02 mt-2">
              <table class="table table-download bg-white">
                <tbody>
                  <?php
                    foreach([
                      'pdf', 'doc', 'xls', 'pptx', 'zip',
                      'rar', 'link'
                    ] as $k){
                  ?>
                    <tr class="table-card-01 border-bottom no-bradius">
                      <td class="no-bradius">
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
                            <p class="sm fw-300 mr-4">ขนาดไฟล์ <span class="fw-600">0.2 MB</span></p>
                            <p class="sm fw-300 mr-4">ดาวน์โหลด <span class="fw-600">122 ครั้ง</span></p>
                            <div class="icon report-file">
                              <em class="fa-solid fa-circle-exclamation mr-1"></em>
                              <?php
                                if($k === 'link'){?>
                                  <p class="btn-popup-toggle-02 cursor-pointer text-file sm color-black-theme fw-400" data-popup="99">
                                    แจ้งลิงก์เสีย
                                  </p>
                              <?php } else {?>
                                <p class="btn-popup-toggle-02 cursor-pointer text-file sm color-black-theme fw-400" data-popup="99">
                                  แจ้งไฟล์เสีย
                                </p>
                              <?php }?>
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
       

          <?php 
            $videos = [
              ['image' => 'public/assets/app/images/content/14.jpg'],
              ['image' => 'public/assets/app/images/content/15.jpg'],
              ['image' => 'public/assets/app/images/content/13.jpg'],
              ['image' => 'public/assets/app/images/content/12.jpg'],
            ]
          ?>
          <h4 class="fw-600 mt-6" data-aos="fade-up" data-aos-delay="450">
            วิดีโอที่เกี่ยวข้อง
          </h4>
          <div class="grids" data-aos="fade-up" data-aos-delay="650">
            <?php foreach($videos as $d) {?>
              <div class="grid lg-25 sm-50 mt-2">
                <a class="ss-card ss-card-13" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox>
                  <div class="img-wrapper">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                      <div class="hover-container show h-hidden">
                        <div class="icon xs">
                          <img src="public/assets/app/images/icon/video-01.png" alt="Icon">
                        </div>
                      </div>
                      <div class="filter style-02">
                        <div class="wrapper">
                          <div class="icon xs">
                            <img src="public/assets/app/images/icon-svg/youtube.svg" alt="Icon">
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="card-line style-01"></div>
                  </div>
                </a>
              </div>
            <?php }?>
          </div> 
          
          <h4 class="fw-600 mt-6" data-aos="fade-up" data-aos-delay="800">
            สื่อที่เกี่ยวข้อง
          </h4>
          <div data-aos="fade-up" data-aos-delay="950">
            <blockquote class="twitter-tweet"><p lang="th" dir="ltr">ข้อห้ามในการหาเสียงเลือกตั้ง <a href="https://t.co/6ergCeZjhH">https://t.co/6ergCeZjhH</a> via <a href="https://twitter.com/YouTube?ref_src=twsrc%5Etfw">@YouTube</a></p>&mdash; สำนักงานคณะกรรมการการเลือกตั้ง (@EctThailand) <a href="https://twitter.com/EctThailand/status/1620704316142260224?ref_src=twsrc%5Etfw">February 1, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
                <p class="color-02 fw-600">ข่าวประชาสัมพันธ์</p>
                <p class="color-02 fw-600">108</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">เรื่องเด่น กกต.</p>
                <p class="fw-400">11</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">ข่าว สนง. กกต.</p>
                <p class="fw-400">50</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">ข่าวประกวดราคา</p>
                <p class="fw-400">3</p>
              </div> 
            </div>   
            <?php 
              $lastestnews = [
                ['image' => 'public/assets/app/images/content/03.jpg'],
                ['image' => 'public/assets/app/images/content/08.jpg'],
                ['image' => 'public/assets/app/images/content/03.jpg']
              ]
            ?>
            <h5 class="fw-600 mb-3" data-aos="fade-up" data-aos-delay="150">
              ข่าวล่าสุด
            </h5> 
            <?php foreach($lastestnews as $d) {?>
              <a class="ss-card ss-card-12 mb-3" href="#" data-aos="fade-up" data-aos-delay="300">
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
                  <p class="fw-400 lh-sm mt-2">
                    รองเลขาธิการคณะกรรมการเลือกตั้ง เป็นประธานในการประชุม
                    ผู้บริหารกลุ่มภารกิจ
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
          </div>   
          <div class="popular-search-container box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
            <p class="h5 fw-600 color-black-theme">แท็กยอดนิยม</p>
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
  </section>

  <?php include_once('component/popup-file-error.php'); ?>
  <?php
    $listResult= ['report-file'];
    include_once('component/popup-file-error-style-02.php');
  ?>
 
 

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