<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'สื่อประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'สื่อประชาสัมพันธ์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/07.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-07">
    <div class="container">
      <div class="ss-card ss-card-10" data-aos="fade-up" data-aos-delay="0">
        <h4 class="title lh-sm fw-500">
          คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        </h4>
        <div class="card-top mt-3">
          <div class="wrapper">
            <div class="icon d-inline-block">
              <em class="fa-regular fa-file-lines"></em>
              <span class="p sm ml-1 fw-500">ภาพกิจกรรม</span>
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
      </div>
      <div class="book-container mt-3" data-aos="fade-up" data-aos-delay="150">
        <div class="wow-book" id="wow-book">
          <?php for($i=0; $i<6; $i++){?>
            <div><img class="img" src="public/assets/app/images/content/6<?= ($i%2+4) ?>.jpg" alt="Page <?= $i ?>" /></div>
          <?php }?>
        </div>
      </div>
      <div class="grids">
        <!-- Left Content -->
        <div class="grid xl-70 lg-2-3 md-2-3 sm-100">
          <p class="color-gray fw-400 mt-2" data-aos="fade-up" data-aos-delay="300">
            วันพุธที่ 8 มิถุนายน 2565 เวลา 13.00 น. นายปกรณ์ มหรรณพ กรรมการการเลือกตั้ง พร้อมด้วย พล.ต.ต.ชัชชรินร์ สว่างวงศ์ 
            ผู้เชี่ยวชาญด้านรัฐประศาสนศาสตร์ นางสาวโชติกา แก้วผล ผู้อำนวยการฝ่ายกิจการกรรมการการเลือกตั้ง 4 ได้มอบนโยบายในการปฏิบัติงาน 
            แนวทางการแก้ไขปัญหาในการปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ ระหว่างวันที่ 6-20 มิถุนายน 2565 
            ณ ห้องประชุมคอนเวนชั่น โรงแรมรามาการ์เด้นส์ กรุงเทพมหานคร
          </p>
          <div class="tags-container mt-3" data-aos="fade-up" data-aos-delay="450">
            <div class="d-flex ai-center">
              <span class="fw-500">แท็ก:</span>
              <div class="ss-tags style-02 ml-2">
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
          <h4 class="title fw-600 mt-6 pt-6" data-aos="fade-up" data-aos-delay="600">
            ไฟล์ที่เกี่ยวข้อง
          </h4>     
          <div class="scroll-x-wrapper style-02 mt-2" data-simplebar>
            <table class="table table-download" data-aos="fade-up" data-aos-delay="750">
              <tbody>
                <?php
                  foreach([
                    'pdf'
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
                      <div class="img-wrapper d-flex ai-center jc-center fw-wrap">
                        <img class="inactive" src="public/assets/app/images/icon-svg/download-inactive.svg" alt="Icon">
                        <img class="active" src="public/assets/app/images/icon-svg/download-active.svg" alt="Icon">
                      </div>
                      <a class="xs title color-02 color-black-theme text-center fw-500 mt-1" href="#">ดาวน์โหลด</a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div>
        <!-- Right Content -->
        <div class="grid xl-30 lg-1-3 md-1-3 sm-100">
          <div class="pl-5 pl-unset-sm">
            <div class="category-container" data-aos="fade-up" data-aos-delay="0">
              <div class="cate-header">
                <h5 class="fw-600">ประเภท</h5>
                <p class="fw-400">รายการ</p>
              </div> 
              <div class="cate-list mt-2">
                <p class="color-02 fw-600">สื่อประชาสัมพันธ์</p>
                <p class="color-02 fw-600">108</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">Info Graphic</p>
                <p class="fw-400">11</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">คู่มือหรือมาตรฐานการปฏิบัติงาน</p>
                <p class="fw-400">50</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">บทความสั้น</p>
                <p class="fw-400">3</p>
              </div>
            </div>   
            <?php 
              $lastestnews = [
                ['image' => 'public/assets/app/images/content/62.jpg'],
                ['image' => 'public/assets/app/images/content/63.jpg']
              ]
            ?>
            <h5 class="fw-600" data-aos="fade-up" data-aos-delay="150">
              สื่อประชาสัมพันธ์ล่าสุด
            </h5> 
            <?php foreach($lastestnews as $d) {?>
              <a class="ss-card ss-card-19 mt-3" href="#" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-card ss-card-19">
                  <div class="wrapper">
                    <div class="img-container">
                      <div class="ss-img vertical">
                        <div class="img-bg" style="background-image:url('<?= $d['image']?>')"></div>
                      </div>
                    </div>
                    <div class="text-container">
                      <p class="title sm fw-500">
                        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับ
                        เลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
                      </p>
                      <div class="date">
                        <div class="icon">
                          <em class="fa-solid fa-calendar-days"></em>
                          <span class="p xs ml-2 fw-500">08 มิถุนายน 2565</span>
                        </div>
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

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    $('#wow-book').wowBook({
      height: 500,
      width: 800,
      container: true,
      containerBackground: '#777',
      containerWidth: '100%',
      containerHeight: '100%',
      containerPadding: '20px',
      toolbarPosition: 'bottom',
      thumbnails: true,
      toolbar: 'first, back, next, last, zoomin, zoomout, slideshow, flipsound, fullscreen',
    });
  </script>
</body>
</html>