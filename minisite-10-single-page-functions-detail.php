<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-minisite-dropdown-menu.php'); ?>
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
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body">
          <div class="ss-title">
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
              <h5 class="color-15 single-title-theme fw-600">สำนักงานคณะกรรมการการเลือกตั้งประจำกรุงเทพมหานคร</h5>
              <p style="text-indent:2rem;" class="mt-3">
                ก่อตั้งขึ้นเมื่อ <span class="h6 color-15 single-title-theme fw-500">ปีพุทธศักราช 2542</span> โดยแรกเริ่มตั้งอยู่ที่ 
                <a href="#" class="p fw-400 border-bottom bcolor-black color-black-theme bcolor-black-theme">บ้านมนังคศิลา</a>
                ตั้งอยู่ เลขที่ 514 ถนนหลานหลวง เขตดุสิต กรุงเทพมหานคร ซึ่งเป็นบ้านที่พระบาทสมเด็จพระมงกุฎเกล้าเจ้าอยู่หัว 
                โปรดเกล้าฯ ให้สร้างพระราชทาน แก่พระยาอุดมราชภักดี (โถ สุจริตกุล) อดีตอธิบดีกรมชาวที่ 
                (เรียกเป็นภาษาธรรมดาก็คือ กรมอาคารสถานที่) ผู้มีหน้าที่ดูแลพระราชฐานที่ประทับทั้งหมด และพระราชทานชื่อบ้านนี้ว่า 
                "มนังคศิลา" อันหมายถึงที่ประทับ
              </p>
              <p style="text-indent:2rem;" class="mt-3">
                ต่อมาใน <span class="h6 color-15 fw-500 single-title-theme">ปีพุทธศักราช 2546</span> ได้ย้ายที่ตั้งสำนักงานมาอยู่ที่ 
                <a href="#" class="p fw-400 border-bottom color-black-theme bcolor-black bcolor-black-theme">อาคารศุภาคาร</a> ตั้งอยู่เลขที่ 723 
                ถนนเจริญนคร เขตคลองสาน กรุงเทพมหานคร โดยต่อมา <span class="h6 color-15 single-title-theme fw-500">ปีพุทธศักราช 2548</span>
                ได้ย้ายสำนักงานอีกครั้งหนึ่งมาอยู่ที่ <a href="#" class="p fw-400 color-black-theme bcolor-black-theme border-bottom bcolor-black">อาคารเมทัลเลี่ยน</a> 
                เลขที่ 50/8-9 ถนนพระรามที่ 1 แขวงรองเมือง เขตปทุมวัน กรุงเทพมหานคร
              </p>
            </div>
            <div class="grid lg-50 md-100 sm-100" data-aos="fade-up" data-aos-delay="300">
              <p style="text-indent:2rem;" class="mt-3">
                และสุดท้ายใน <span class="h6 color-15 fw-500 single-title-theme">ปีพุทธศักราช 2552</span> 
                สำนักงานคณะกรรมการการเลือกตั้งประจำกรุงเทพมหานคร ได้ย้ายมาประจำอยู่ที่ 
                <a href="#" class="p fw-400 border-bottom bcolor-black bcolor-black-theme color-black-theme">
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
          <?php 
            $tagContainerStyle = 'style-02 full-responsive';
            include('component/tags-container-mini-site.php'); 
          ?>
          <h4 class="title fw-600 mt-6 pt-6" style="position:relative;" data-aos="fade-up" data-aos-delay="450">
            ไฟล์ที่เกี่ยวข้อง
          </h4>     
          <div class="scroll-x-wrapper style-02 mt-2">
            <table class="table style-05 table-download" data-aos="fade-up" data-aos-delay="600">
              <tbody>
                <?php
                  foreach([
                    'pdf', 'doc', 'xls', 'pptx', 'zip',
                    'rar', 'link'
                  ] as $k){
                ?>
                  <tr class="table-card border table-card-01 box-shadow style-02 mb-2">
                    <td>
                      <div class="download-card">
                        <div>
                        <img src="public/assets/app/images/file/svg/<?= $k ?>.svg" alt="Image File" />
                        <p class="xxs color-white color-black-theme fw-400">0.2 MB</p>
                        </div>
                      </div>
                    </td>
                    <td class="title-container" style="min-width:450px;">
                      <a class="p title fw-500 lh-sm" href="#">
                        รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565 
                        รายงานการจัดซื้อจัดจ้างส่วนภูมิภาค
                      </a>
                      <div class="text-footer mt-2">
                        <div class="wrapper">
                          <div class="icon color-02">
                            <em class="fa-regular fa-calendar"></em>
                            <p class="xs fw-400 ml-2">29 พฤศจิกายน</p>
                          </div>
                          <div class="icon color-02">
                            <em class="fa-regular fa-floppy-disk"></em>
                            <p class="xs fw-400 ml-2">ดาวน์โหลด 122 ครั้ง</p>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="button-container" style="min-width:90px;">
                      <div class="btns jc-end">
                        <div href="#" class="btn btn-white-theme btn-fling-down width-auto btn-action btn-30 btn-black-theme">
                          ดาวน์โหลดไฟล์ <em class="fa-solid fa-arrow-down fling-down ml-1"></em>
                        </div>
                      </div>
                    </td>
                    <td class="report-container" style="min-width:150px;">
                      <em class="fa-solid fa-triangle-exclamation"></em>
                      <?php
                        if($k === 'link'){?>
                          <a class="xs text btn-popup-toggle-02 color-black-theme text-center fw-500 mt-1" data-popup="99">
                            แจ้งลิงก์เสีย
                          </a>
                      <?php } else {?>
                          <a class="xs text btn-popup-toggle-02 color-black-theme text-center fw-500 mt-1" data-popup="99">
                            แจ้งไฟล์เสีย
                          </a>
                      <?php }?>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>

          <?php 
            $videos = [
              ['image' => 'public/assets/app/images/content/14.jpg'],
              ['image' => 'public/assets/app/images/content/15.jpg'],
              ['image' => 'public/assets/app/images/content/13.jpg'],
              ['image' => 'public/assets/app/images/content/12.jpg'],
            ]
          ?>
          <h4 class="fw-600 mt-4" data-aos="fade-up" data-aos-delay="450">
            วิดีโอที่เกี่ยวข้อง
          </h4>
          <div class="grids" data-aos="fade-up" data-aos-delay="650">
            <?php foreach($videos as $d) {?>
              <div class="grid lg-25 sm-50 mt-2">
                <a class="ss-card ss-card-13" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox>
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
                    <div class="card-line style-01 size-02"></div>
                  </div>
                </a>
              </div>
            <?php }?>
          </div> 
          <h4 class="fw-600 mt-6 pt-2" data-aos="fade-up" data-aos-delay="800">
            สื่อที่เกี่ยวข้อง
          </h4>
          <div data-aos="fade-up" data-aos-delay="950">
            <blockquote class="twitter-tweet"><p lang="th" dir="ltr">ข้อห้ามในการหาเสียงเลือกตั้ง <a href="https://t.co/6ergCeZjhH">https://t.co/6ergCeZjhH</a> via <a href="https://twitter.com/YouTube?ref_src=twsrc%5Etfw">@YouTube</a></p>&mdash; สำนักงานคณะกรรมการการเลือกตั้ง (@EctThailand) <a href="https://twitter.com/EctThailand/status/1620704316142260224?ref_src=twsrc%5Etfw">February 1, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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