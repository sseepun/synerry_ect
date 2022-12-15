<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav.php'); ?>
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
      <div class="grids">
        <!-- Left Content -->
        <div class="grid xl-70 lg-60 md-60 sm-100">
          <div class="ss-card ss-card-10">
            <h4 class="title lh-sm fw-500" data-aos="fade-up" data-aos-delay="0">
              คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือ
            </h4>
            <div class="card-top mt-3">
              <div class="wrapper">
                <div class="icon">
                  <em class="fa-regular fa-file-lines"></em>
                  <span class="p sm ml-2 fw-500">ภาพกิจกรรม</span>
                </div>
                <div class="icon">
                  <em class="fa-solid fa-calendar-days"></em>
                  <span class="p sm ml-2 fw-500">08 มิถุนายน 2565</span>
                </div>
                <div class="icon">
                  <em class="fa-solid fa-eye"></em>
                  <span class="p sm ml-2 fw-500">255</span>
                </div>
                <div class="icon">
                  <em class="fa-solid fa-share-nodes"></em>
                  <span class="p sm ml-2 fw-500">208</span>
                </div>
              </div>
            </div>
            <div class="book-container mt-3">
              <div class="wow-book" id="wow-book">
                <?php for($i=0; $i<6; $i++){?>
                  <div><img class="img" src="public/assets/app/images/content/02.jpg" alt="Page <?= $i ?>" /></div>
                <?php }?>
              </div>
            </div>
            <p class="desc color-gray fw-400 mt-3">
              กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
              ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
              กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
              ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
              กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
              ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
              กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
              ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
              กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
              ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
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
          <div class="grids jc-center mt-4" data-aos="fade-up" data-aos-delay="0">
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
          <h4 class="fw-600 mt-5" data-aos="fade-up" data-aos-delay="0">
            วิดีโอที่เกี่ยวข้อง
          </h4>
          <div class="grids" data-aos="fade-up" data-aos-delay="150">
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
          <h4 class="fw-600 mt-5" data-aos="fade-up" data-aos-delay="300">
            ไฟล์ที่เกี่ยวข้อง
          </h4>  
          <div class="scroll-x-wrapper mt-3" data-simplebar>
            <table class="table table-download" data-aos="fade-up" data-aos-delay="450">
              <tbody>
                <?php
                  foreach([
                    'pdf', 'doc', 'docx', 'xls', 'xlsx',
                    'ppt', 'pptx', 'zip', 'rar'
                  ] as $k){
                ?>
                  <tr class="box-shadow style-02 mb-2">
                    <td>
                      <div class="download-card">
                        <img src="public/assets/app/images/file/pdf.png" alt="Image File" />
                      </div>
                    </td>
                    <td style="min-width:450px;">
                      <a class="fw-600 h-color-t" href="#">
                        รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565
                      </a>
                      <div class="text-footer">
                        <div class="wrapper">
                          <p class="sm fw-400 mr-4">ขนาดไฟล์ <span class="fw-600">0.2 MB</span></p>
                          <p class="sm fw-400 mr-4">ดาวน์โหลด <span class="fw-600">122 ครั้ง</span></p>
                          <div class="icon">
                            <em class="fa-solid fa-circle-exclamation mr-1"></em>
                            <p class="sm color-black fw-400">แจ้งไฟล์เสีย</p>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td style="min-width:100px;">
                      <div class="d-flex ai-center jc-center fw-wrap">
                        <a class="btn btn-action-style-02" href="#">
                          <em class="fa-solid fa-arrow-down"></em>
                        </a>
                      </div>
                      <p class="xs text-center mt-1">ดาวน์โหลด</p>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div> 
          <div class="buttons-group" data-aos="fade-up" data-aos-delay="0">
            <div class="wrapper">
              <div class="btns">
                <div href="#" class="btn btn-action btn-02">
                  ข่าวก่อนหน้า
                </div>
              </div> 
              <div class="icon">
                <em class="fa-solid fa-list mr-2"></em>
                <p class="fw-400">หน้ารวมข่าว</p>
              </div>
              <div class="btns jc-end">
                <div href="#" class="btn btn-action btn-02">
                  ข่าวถัดไป
                </div>
              </div>     
            </div>
          </div>
        </div>
        <!-- Right Content -->
        <div class="grid xl-30 lg-40 md-40 sm-100">
          <div class="pl-5">
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
                        <span class="p sm ml-2">08 มิถุนายน 2565</span>
                      </div>
                      <div class="icon">
                        <em class="fa-solid fa-eye"></em>
                        <span class="p sm ml-2">255</span>
                      </div>
                      <div class="icon">
                        <em class="fa-solid fa-share-nodes"></em>
                        <span class="p sm ml-2">208</span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            <?php }?>
          </div>   
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>