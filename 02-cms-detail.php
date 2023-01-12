<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-style-01.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข่าวประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'ข่าวประชาสัมพันธ์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/01.jpg';
    include('component/breadcrumb.php');
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
                  <span class="p sm ml-2 color-white-theme fw-500">เรื่องเด่น กกต.</span>
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
            <div class="ss-img horizontal mt-3">
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
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
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
          <div class="btns jc-center mt-3" data-aos="fade-up" data-aos-delay="150">
            <div href="#" class="btn btn-action btn-02">
              ดาวน์โหลดทั้งหมด (30)
            </div>
          </div>
          <div class="tags-container" data-aos="fade-up" data-aos-delay="300">
            <div>
              <span class="fw-500">แท็ก:</span>
              <div class="ss-tags d-inline-block">
                <div class="tag style-02">ข่าวประกาศ</div>
             </div>
             <div class="ss-tags d-inline-block">
                <div class="tag style-02">อบรมหลักสูตร</div>
             </div>
             <div class="ss-tags d-inline-block">
                <div class="tag style-02">การเลือกตั้ง</div>
             </div>
            </div> 
            <div class="social-list">
              <span class="fw-500 mr-1">แบ่งปัน:</span>
              <div class="d-inline-block">
                <a class="icon active" href="#">
                  <em class="fa-solid fa-code"></em>
                </a>
              </div>
              <div class="d-inline-block">
                <a class="icon" href="#">
                  <em class="fa-brands fa-facebook-f"></em>
                </a>
              </div>
              <div class="d-inline-block">
                <a class="icon" href="#">
                  <em class="fa-brands fa-twitter"></em>
                </a>
              </div>
              <div class="d-inline-block">
                <a class="icon" href="#">
                  <em class="fa-brands fa-line"></em>
                </a>
              </div>
              <div class="d-inline-block">
                <a class="icon" href="#">
                  <em class="fa-solid fa-link"></em>
                </a>
              </div>
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
          <h4 class="fw-600 mt-5" data-aos="fade-up" data-aos-delay="450">
            วิดีโอที่เกี่ยวข้อง
          </h4>
          <div class="grids" data-aos="fade-up" data-aos-delay="650">
            <?php foreach($videos as $d) {?>
              <div class="grid lg-25 sm-50 mt-2">
                <a class="ss-card ss-card-13" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox>
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                    <div class="hover-container show">
                      <div class="icon sm">
                        <img src="public/assets/app/images/icon/play-thin.png" alt="Play Icon">
                      </div>
                    </div>
                  </div>
                </a>
              </div>
            <?php }?>
          </div>
          <div class="file-header-container mt-5" data-aos="fade-up" data-aos-delay="800">
            <h4 class="title fw-600">
              ไฟล์ที่เกี่ยวข้อง
            </h4>     
            <div class="btns">
              <div class="btn btn-action-style-03 btn-02 mr-3" href="#">
                <em class="fa-solid fa-arrow-down"></em>
                <em class="fa-solid fa-arrow-up"></em>
              </div>
              <div href="#" class="btn btn-action size-02 btn-02">
                ดาวน์โหลดทั้งหมด (30)
              </div>
            </div>
          </div>  
          <div class="scroll-x-wrapper mt-3" data-simplebar>
            <table class="table table-download" data-aos="fade-up" data-aos-delay="950">
              <tbody>
                <?php
                  foreach([
                    'pdf', 'doc', 'mp4', 'jpg', 'doc',
                    'pdf', 'doc'
                  ] as $k){
                ?>
                  <tr class="box-shadow style-02 mb-2">
                    <td>
                      <div class="download-card">
                        <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
                      </div>
                    </td>
                    <td class="title-container" style="min-width:450px;">
                      <a class="fw-600 h-color-t" href="#">
                        รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565
                      </a>
                      <div class="text-footer">
                        <div class="wrapper">
                          <p class="sm fw-400 mr-4">ขนาดไฟล์ <span class="fw-600">0.2 MB</span></p>
                          <p class="sm fw-400 mr-4">ดาวน์โหลด <span class="fw-600">122 ครั้ง</span></p>
                          <div class="icon">
                            <em class="fa-solid fa-circle-exclamation mr-1"></em>
                            <p class="sm color-black color-black-theme fw-400">แจ้งไฟล์เสีย</p>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="arrow-container" style="min-width:100px;">
                      <div class="d-flex ai-center jc-center fw-wrap">
                        <a class="btn btn-action-style-02 btn-02" href="#">
                          <em class="fa-solid fa-arrow-down"></em>
                        </a>
                      </div>
                      <p class="xs color-02 color-black-theme text-center fw-500 mt-1">ดาวน์โหลด</p>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div> 
          <div class="buttons-group mt-5" data-aos="fade-up" data-aos-delay="0">
            <div class="wrapper">
              <div class="btns">
                <div href="#" class="btn width-auto btn-action btn-09">
                  <em class="fa-solid fa-arrow-left"></em>
                  สื่อก่อนหน้า
                </div>
              </div> 
              <div class="icon-container">
                <div class="icon"><em class="fa-solid fa-list"></em></div>
                <p class="text fw-500">หน้ารวมข่าว</p>
              </div>
              <div class="btns jc-end">
                <div href="#" class="btn width-auto btn-action btn-02">
                  สื่อถัดไป
                  <em class="fa-solid fa-arrow-right"></em>
                </div>
              </div>     
            </div>
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
            <h5 class="fw-600" data-aos="fade-up" data-aos-delay="150">
              ข่าวล่าสุด
            </h5> 
            <?php foreach($lastestnews as $d) {?>
              <a class="ss-card ss-card-12 mt-3" href="#" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
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
              </ฟ>
            <?php }?>
          </div>   
          <div class="popular-search-container box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
            <p class="h5 fw-600 color-black-theme">แท็กยอดนิยม</p>
            <div class="mt-1">
              <div class="ss-tags">
                <div class="tag">ข่าวประกาศ</div>
              </div>
              <div class="ss-tags">
                <div class="tag">อบรมหลักสูตร</div>
              </div>
              <div class="ss-tags">
                <div class="tag">การเลือกตั้ง</div>
              </div>
              <div class="ss-tags">
                <div class="tag">รายงานการจัดซื้อจัดจ้าง</div>
              </div>
              <div class="ss-tags">
                <div class="tag">ระดับชำนาญการพิเศษ</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>