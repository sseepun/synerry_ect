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
      [ 'url' => '#', 'display' => 'ภาพข่าวสาร/ประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'ภาพกิจกรรม';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/02.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-07">
    <div class="container">
      <div class="grids">
        <!-- Left Content -->
        <div class="grid xl-70 lg-60 md-60 sm-100">
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
                <div class="wrapper">
                  <div class="btn btn-icon-prev">
                    <div class="arrow">
                      <em class="fa-solid fa-arrow-left"></em>
                    </div>
                  </div>
                  <div class="dots"></div>
                  <div class="btn btn-icon-next">
                    <div class="arrow">
                      <em class="fa-solid fa-arrow-right"></em>
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
          </div>
          <div class="btns jc-center mt-3" data-aos="fade-up" data-aos-delay="150">
            <div href="#" class="btn btn-action btn-02">
              ดาวน์โหลดทั้งหมด (30)
            </div>
          </div>
          <p class="desc color-gray fw-400 mt-5" data-aos="fade-up" data-aos-delay="300">
            วันที่ 10 ตุลาคม 2561 ร้อยตำรวจเอกสุชีพ จาดย่านขาด ผอ.สนง.กกต.จว.พท พร้อมด้วยนายประภาส 
            เศียรอุ่น พนักงานสืบสวนและไต่สวน ชำนาญการ ปฏิบัติหน้าที่หัวหน้างานสืบสวนสอบสวนและพรรคการเมือง 
            นายสมทบ ไชยรัตน์ พนักงานการเลือกตั้ง ชำนาญการ และนายประเสริฐ ธรรมเพชร พนักงานสืบสวนและไต่สวน 
            ชำนาญการ ลงพื้นที่พบปะพูดคุยกับนายอำเภอบางแก้ว ปลัดอาวุโสอำเภอบางแก้ว นายอำเภอตะโหมด 
            นายอำเภอกงหราและปลัดอาวุโสอำเภอศรีนครินทร์ เพื่อประสานงานการเตรียมความพร้อมตามแผนงานการเลือกสมาชิกวุฒิสภา 
            ให้เป็นไปด้วยความเรียบร้อยและให้การสนับสนุนภารกิจดังกล่าว
          </p>
          <div class="tags-container" data-aos="fade-up" data-aos-delay="450">
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
                <a class="icon" href="#">
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
                <a class="icon active" href="#">
                  <em class="fa-solid fa-link"></em>
                </a>
              </div>
            </div>
          </div>
          <div class="file-header-container mt-5" data-aos="fade-up" data-aos-delay="650">
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
            <table class="table table-download" data-aos="fade-up" data-aos-delay="800">
              <tbody>
                <?php
                  foreach([
                    'pdf', 'pdf', 'pdf'
                  ] as $k){
                ?>
                  <tr class="box-shadow style-02 mb-2">
                    <td>
                      <div class="download-card">
                        <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
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
                        <a class="btn btn-action-style-02 btn-02" href="#">
                          <em class="fa-solid fa-arrow-down"></em>
                        </a>
                      </div>
                      <p class="xs color-02 fw-500 text-center mt-1">ดาวน์โหลด</p>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div> 
          <div class="buttons-group" data-aos="fade-up" data-aos-delay="950">
            <div class="wrapper">
              <div class="btns">
                <div href="#" class="btn width-auto btn-action btn-09">
                  <em class="fa-solid fa-arrow-left"></em>
                  สื่อก่อนหน้า
                </div>
              </div> 
              <div class="icon-container">
                <div class="icon"><em class="fa-solid fa-list"></em></div>
                <p class="text fw-500">หน้ารวมภาพ</p>
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
              <p class="h5 fw-600">แท็กยอดนิยม</p>
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
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>