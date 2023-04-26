<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php 
    $superTopNavStyle = 'theme-02';
    $topNavStyle = 'theme-02';
    $sideNavStyle = 'theme-02';
    $sidePanelStyle = 'style-06';
    include_once('include/topnav-style-02.php'); 
  ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข้อมูลสำนักงาน' ],
      [ 'url' => '#', 'display' => 'ความเป็นมา' ],
    ];
    $breadcrumbTitle = 'ความเป็นมา';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/43.jpg';
    $sectionOptions = ['']; // ['views', 'rss']
    $formContainer = false; // select form
    include('component/breadcrumb-minisite-single-page.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body">
          <div class="ss-title style-02">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ความเป็นมา
            </h3>
          </div>
          <div class="grids">
            <div class="grid lg-50 md-100 sm-100" data-aos="fade-up" data-aos-delay="150"> 
              <div class="grids">
                <div class="grid lg-100 md-100 sm-100 mt-0">
                  <div class="ss-img horizontal-03 bradius-round">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/99.jpg');"></div>
                  </div>
                </div>
                <div class="grid lg-50 md-50 sm-50">
                  <div class="ss-img square bradius-round">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/100.jpg');"></div>
                  </div>
                </div>
                <div class="grid lg-50 md-50 sm-500">
                  <div class="ss-img square bradius-round">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/101.jpg');"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid lg-50 md-100 sm-100" data-aos="fade-up" data-aos-delay="150">
              <h5 class="color-15 fw-600">สำนักงานคณะกรรมการการเลือกตั้งประจำกรุงเทพมหานคร</h5>
              <p style="text-indent:2rem;" class="mt-3">
                ก่อตั้งขึ้นเมื่อ <span class="h6 color-15 fw-500">ปีพุทธศักราช 2542</span> โดยแรกเริ่มตั้งอยู่ที่ 
                <a href="#" class="p fw-400 border-bottom bcolor-black">บ้านมนังคศิลา</a>
                ตั้งอยู่ เลขที่ 514 ถนนหลานหลวง เขตดุสิต กรุงเทพมหานคร ซึ่งเป็นบ้านที่พระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัว 
                โปรดเกล้าฯ ให้สร้างพระราชทาน แก่พระยาอุดมราชภักดี (โถ สุจริตกุล) อดีตอธิบดีกรมชาวที่ 
                (เรียกเป็นภาษาธรรมดาก็คือ กรมอาคารสถานที่) ผู้มีหน้าที่ดูแลพระราชฐานที่ประทับทั้งหมด และพระราชทานชื่อบ้านนี้ว่า 
                "มนังคศิลา" อันหมายถึงที่ประทับ
              </p>
              <p style="text-indent:2rem;" class="mt-3">
                ต่อมาใน <span class="h6 color-15 fw-500">ปีพุทธศักราช 2546</span> ได้ย้ายที่ตั้งสำนักงานมาอยู่ที่ 
                <a href="#" class="p fw-400 border-bottom bcolor-black">อาคารศุภาคาร</a> ตั้งอยู่เลขที่ 723 
                ถนนเจริญนคร เขตคลองสาน กรุงเทพมหานคร โดยต่อมา <span class="h6 color-15 fw-500">ปีพุทธศักราช 2548</span>
                ได้ย้ายสำนักงานอีกครั้งหนึ่งมาอยู่ที่ <a href="#" class="p fw-400 border-bottom bcolor-black">อาคารเมทัลเลี่ยน</a> 
                เลขที่ 50/8-9 ถนนพระรามที่ 1 แขวงรองเมือง เขตปทุมวัน กรุงเทพมหานคร
              </p>
            </div>
            <div class="grid lg-50 md-100 sm-100" data-aos="fade-up" data-aos-delay="300">
              <p style="text-indent:2rem;" class="mt-3">
                และสุดท้ายใน <span class="h6 color-15 fw-500">ปีพุทธศักราช 2552</span> 
                สำนักงานคณะกรรมการการเลือกตั้งประจำกรุงเทพมหานคร ได้ย้ายมาประจำอยู่ที่ 
                <a href="#" class="p fw-400 border-bottom bcolor-black">
                  ศูนย์ราชการเฉลิมพระเกียรติ 80 พรรษา 5 ธันวาคม 2550
                </a> 
                อาคารรัฐประศาสนภักดี ชั้น 3 จนถึงปัจจุบัน โดยที่ตั้งอยู่เลขที่ 120 ถนนแจ้งวัฒนะ แขวงทุ่งสองห้อง เขตหลักสี่ 
                กรุงเทพมหานคร โทรศัพท์ 02 141 8057 - 100 โทรสาร 02 143 8528 - 30 โดยศูนย์ราชการเฉลิมพระเกียรติฯ 
                ตั้งอยู่บนถนนแจ้งวัฒนะ ซึ่งเป็นสถานที่ที่รวมหน่วยงานราชการต่างๆไว้ในที่เดียวกัน รวมทั้งสิ้น 29 
                หน่วยงาน เช่น กระทรวงยุติธรรม กระทรวงเทคโนโลยีสารสนเทศและการสื่อสาร กระทรวงการต่างประเทศ 
                และสำนักงานตำรวจแห่งชาติ เป็นต้น โดยศูนย์ราชการเฉลิมพระเกียรติฯ แห่งนี้ มีแนวคิดในการบริหารพื้นที่ราชพัสดุ
                และทรัพยากรของราชการร่วมกันเพื่อให้เกิดประโยชน์สูงสุด โดยพระบาทสมเด็จพระเจ้าอยู่หัว ทรงพระกรุณาโปรดเกล้าฯ 
                ให้สมเด็จพระบรมโอรสาธิราชฯ สยามมกุฎราชกุมาร เสด็จพระราชดำเนินทรงเปิดอาคารศูนย์ราชการ ในวันอาทิตย์ที่ 17 
                กุมภาพันธ์ 2556
              </p>
              <p class="mt-3 fw-500">
                โดยสำนักงานคณะกรรมการการเลือกตั้งประจำกรุงเทพมหานคร 
                ซึ่งได้รับจัดสรรพื้นที่ให้ใช้สถานที่ร่วมกับสำนักงานคณะกรรมการการเลือกตั้ง
              </p>
            </div>
            <div class="grid lg-50 md-100 sm-100" data-aos="fade-up" data-aos-delay="300">
              <div class="grids">
                <div class="grid lg-100 md-50 sm-50 mt-0">
                  <div class="ss-img horizontal-03 bradius-round">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/102.jpg');"></div>
                  </div>
                </div>
                <div class="grid lg-100 md-50 sm-50 mt-0-md mt-6-xs">
                  <div class="ss-img horizontal-03 bradius-round">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/105.jpg');"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>