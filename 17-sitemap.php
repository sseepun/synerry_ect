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
      [ 'url' => '#', 'display' => 'โครงสร้างเว็บไซต์' ],
    ];
    $breadcrumbTitle = 'โครงสร้างเว็บไซต์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/15.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-13" style="background-image:url('public/assets/app/images/bg/25.jpg')">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        โครงสร้างเว็บไซต์
      </h3>
      <div class="sitemap-02">
        <div class="sitemap-grids">
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="150">
            <div class="btn btn-action style-03 btn-06 btn-white-theme mt-3">
              <div class="header-title">
                <div class="icon">
                  <img src="public/assets/app/images/icon/51.png" alt="Icon">
                </div>
                <p class="h5 fw-500">กกต.</p>
              </div>
            </div>
            <ul class="ss-list style-04 pt-3 pb-3 color-black-theme">
              <li><a class="p fw-300" href="#">คณะกรรมการการเลือกตั้ง</a></li>
              <li><a class="p fw-300" href="#">อำนาจหน้าที่ของกกต.</a></li>
              <li><a class="p fw-300" href="#">เลขาธิการ กกต.</a></li>
              <li><a class="p fw-300" href="#">สำนักงาน กกต.</a></li>
              <li><a class="p fw-300" href="#">สำนักงาน กกต.จังหวัด</a></li>
              <li><a class="p fw-300" href="#">ผู้ตรวจการเลือกตั้ง</a></li>
              <li><a class="p fw-300" href="#">วิสัยทัศน์ / พันธกิจ / ยุทธศาสตร์</a></li>              
              <li><a class="p fw-300" href="#">ค่านิยมร่วมขององค์กร</a></li>
              <li><a class="p fw-300" href="#">การเปิดเผยข้อมูลต่อสาธารณะ</a></li>
              <li><a class="p fw-300" href="#">ประกาศเจตจำนงสุจริตในการบริหารงาน</a></li>
              <li><a class="p fw-300" href="#">การบริหารจัดการความเสี่ยงและการควบคุมภายในองค์กร</a></li>
              <li><a class="p fw-300" href="#">คุณธรรมองค์กร</a></li>
              <li><a class="p fw-300" href="#">โครงสร้างสำนักงาน</a></li>
              <li><a class="p fw-300" href="#">แผนยุทธศาสตร์สำนักงาน</a></li>
              <li><a class="p fw-300" href="#">รายงานผลการปฏิบัติงานประจำปี</a></li>
              <li><a class="p fw-300" href="#">แผนปฏิบัติการประจำปี/การติดตามผล/ รายงานความพึงพอใจ</a></li>
              <li><a class="p fw-300" href="#">รายงานของผู้สอบบัญชีและรายงานการเงินของสำนักงาน</a></li>
              <li><a class="p fw-300" href="#">ข้อมูลผู้บริหารเทคโนโลยีสารสนเทศระดับสูง</a></li>
              <div class="ss-list style-04 level-3">
                <li><a class="p fw-300" href="#">ผู้บริหาร CIO</a></li>
                <li><a class="p fw-300" href="#">ผังการบริหารงานด้าน ICT</a></li>
                <li><a class="p fw-300" href="#">วิสัยทัศน์ด้านเทคโนโลยีสารสนเทศและการสื่อสาร</a></li>
                <li><a class="p fw-300" href="#">ปฏิทินกิจกรรมของ CIO</a></li>
                <li><a class="p fw-300" href="#">ข่าวสารจาก CIO</a></li>
                <li><a class="p fw-300" href="#">นโยบายด้านเทคโนโลยีสารสนเทศ</a></li>
              </div>
              <li><a class="p fw-300" href="#">มาตรการ กลไก และมาตราฐาน/ขั้นตอนการปฏิบัติงาน</a></li>
              <li><a class="p fw-300" href="#">การบริหารและพัฒนาทรัพยากรบุคคล</a></li>
              <li><a class="p fw-300" href="#">การป้องกันการทุจริตภายในหน่วยงาน</a></li>
              <li><a class="p fw-300" href="#">แนวทาง/ข้อกำหนดเกี่ยวกับการป้องกัน การทุจริตในหน่วยงาน</a></li>
              <li><a class="p fw-300" href="#">การเสริมสร้างวัฒนธรรมภายในองค์กร</a></li>
              <li><a class="p fw-300" href="#">สถิติการให้บริการและแบบสำรวจความพึงพอใจ</a></li>
              <li><a class="p fw-300" href="#">ทำเนียบผู้บริหาร</a></li>
              <li><a class="p fw-300" href="#">ผู้บริหาร CIO</a></li>
            </ul>
          </div>
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="300">
            <div class="btn btn-action style-03 btn-06 btn-white-theme mt-3">
              <div class="header-title">
                <div class="icon">
                  <img src="public/assets/app/images/icon/51.png" alt="Icon">
                </div>
                <p class="h5 fw-500">รวมกฎหมาย</p>
              </div>
            </div>
            <ul class="ss-list style-04 min-height pt-3 pb-3 color-black-theme">
              <li><a class="p fw-300" href="#">รัฐธรรมนูญ</a></li>
              <li><a class="p fw-300" href="#">พระราชบัญญัติประกอบ</a></li>
              <li><a class="p fw-300" href="#">พระราชบัญญัติ</a></li>
              <li><a class="p fw-300" href="#">พระราชกฤษฎีกา</a></li>
              <li><a class="p fw-300" href="#">ระเบียบ กกต.</a></li>
              <li><a class="p fw-300" href="#">ประกาศ กกต.</a></li>
              <li><a class="p fw-300" href="#">คำสั่ง กกต.</a></li>
              <li><a class="p fw-300" href="#">คำวินิจฉัย กกต.</a></li>
              <li><a class="p fw-300" href="#">ประกาศนายทะเบียน</a></li>
              <li><a class="p fw-300" href="#">พรรคการเมือง</a></li>
              <li><a class="p fw-300" href="#">ร่างกฎหมายและการรับฟังความคิดเห็น</a></li>
              <li><a class="p fw-300" href="#">ประกาศ สนง. กกต.ร่างกฎหมายและการรับฟังความคิดเห็น</a></li>
            </ul>
          </div>
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="450">
            <div class="btn btn-action style-03 btn-06 btn-white-theme mt-3">
              <div class="header-title">
                <div class="icon">
                  <img src="public/assets/app/images/icon/51.png" alt="Icon">
                </div>
                <p class="h5 fw-500">ข่าวสาร</p>
              </div>
            </div>
            <ul class="ss-list style-04 min-height pt-3 pb-3 color-black-theme">
              <li><a class="p fw-300" href="#">ข่าวประชาสัมพันธ์</a></li>
              <li><a class="p fw-300" href="#">เรื่องเด่น กกต.</a></li>
              <li><a class="p fw-300" href="#">ข่าว สนง.กกต.จว.</a></li>
              <li><a class="p fw-300" href="#">CLIPPING NEWS</a></li>
              <li><a class="p fw-300" href="#">ข่าวรับสมัครงาน</a></li>
              <li><a class="p fw-300" href="#">บทความพิเศษ</a></li>
              <li><a class="p fw-300" href="#">การจัดทำ MOU กับหน่วยงานต่างๆ</a></li>
              <li><a class="p fw-300" href="#">องค์ความรู้การเลือกตั้ง</a></li>
              <li><a class="p fw-300" href="#">วิดีโอ</a></li>
            </ul>
          </div>
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="0">
            <div class="btn btn-action style-03 btn-06 btn-white-theme mt-3">
              <div class="header-title">
                <div class="icon">
                  <img src="public/assets/app/images/icon/51.png" alt="Icon">
                </div>
                <p class="h5 fw-500">บริการข้อมูล</p>
              </div>
            </div>
            <ul class="ss-list style-04 min-height pt-3 pb-3 color-black-theme">
              <li><a class="p fw-300" href="#">สถิติการเลือกตั้ง</a></li>
              <li><a class="p fw-300" href="#">ประกาศผลการเลือกตั้ง</a></li>
              <li><a class="p fw-300" href="#">ศูนย์กลางข้อมูลเปิดเกี่ยวกับการเลือกตั้ง</a></li>
              <li><a class="p fw-300" href="#">ข้อมูลพรรคการเมือง</a></li>
              <li><a class="p fw-300" href="#">ตรวจสอบข้อมูลสมาชิกพรรคการเมือง</a></li>
              <li><a class="p fw-300" href="#">สื่อประชาสัมพันธ์</a></li>
              <li><a class="p fw-300" href="#">คู่มือปฏิบัติงาน</a></li>
              <li><a class="p fw-300" href="#">แบบฟอร์ม</a></li>
              <li><a class="p fw-300" href="#">บริการสารสนเทศภายในหน่วยงาน</a></li>
              <li><a class="p fw-300" href="#">KNOWLEDGE MANAGEMENT</a></li>
              <li><a class="p fw-300" href="#">เอกสารการศึกษาส่วนบุคคลหลักสูตร พตส.</a></li>
            </ul>
          </div>
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="150">
            <div class="btn btn-action style-03 btn-06 btn-white-theme mt-3">
              <div class="header-title">
                <div class="icon">
                  <img src="public/assets/app/images/icon/51.png" alt="Icon">
                </div>
                <p class="h5 fw-500">หน่วยงาน</p>
              </div>
            </div>
            <ul class="ss-list style-04 pt-3 pb-3 color-black-theme">
              <li><a class="p fw-300" href="#">สถาบันพัฒนาการเมืองและการเลือกตั้ง</a></li>
              <li><a class="p fw-300" href="#">ศูนย์บริการเบิกจ่ายตรงสวัสดิการฯ</a></li>
              <li><a class="p fw-300" href="#">ศูนย์การเรียนรู้ฯที่ 1</a></li>
              <li><a class="p fw-300" href="#">ศูนย์การเรียนรู้ฯที่ 2</a></li>
              <li><a class="p fw-300" href="#">ศูนย์การเรียนรู้ฯที่ 3</a></li>
              <li><a class="p fw-300" href="#">ศูนย์การเรียนรู้ฯที่ 4</a></li>
              <li><a class="p fw-300" href="#">ศูนย์การเรียนรู้ฯที่ 5</a></li>
              <li><a class="p fw-300" href="#">ศูนย์ศึกษาประชาธิปไตย</a></li>
              <li><a class="p fw-300" href="#">สำนักงาน กกต. จังหวัด</a></li>
              <li><a class="p fw-300" href="#">ห้องสุมดอิเล็กทรอนิกส์</a></li>
              <li><a class="p fw-300" href="#">เครื่องลงคะแนนเลือกตั้ง</a></li>
              <li><a class="p fw-300" href="#">สหกรณ์ออมทรัพย์ องค์กรอิสระ จำกัด</a></li>
            </ul>
            
          </div>
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="300">
            <div class="btn btn-action style-03 btn-06 btn-white-theme mt-3">
              <div class="header-title">
                <div class="icon">
                  <img src="public/assets/app/images/icon/51.png" alt="Icon">
                </div>
                <p class="h5 fw-500">จัดซื้อ/จัดจ้าง</p>
              </div>
            </div>
            <ul class="ss-list style-04 pt-3 pb-3 color-black-theme">
              <li><a class="p fw-300" href="#">แผน/ผลการจัดซื้อจัดจ้างรายเดือนรายปี</a></li>
              <li><a class="p fw-300" href="#">การเปิดเผยราคากลาง</a></li>
              <li><a class="p fw-300" href="#">ข่าวประกวดราคา/สอบราคา</a></li>
              <li><a class="p fw-300" href="#">ผลการเสนอราคา/ประกวดราคา</a></li>
            </ul>
            <div class="btn btn-action style-04 btn-06 btn-white-theme mt-3">
              <div class="header-title">
                <div class="icon">
                  <img src="public/assets/app/images/icon/51.png" alt="Icon">
                </div>
                <div>
                  <p class="h6 fw-500">ตอบข้อซักถาม/แจ้งเบาะแส</p>
                </div>
              </div>
            </div>
            <ul class="ss-list style-04 pt-3 pb-3 color-black-theme">
              <li><a class="p fw-300" href="#">ติดต่อสอบถาม</a></li>
              <li><a class="p fw-300" href="#">กระดานถามตอบ</a></li>
              <li><a class="p fw-300" href="#">ตอบข้อซักถามพรรคการเมือง</a></li>
              <li><a class="p fw-300" href="#">ศูนย์รับเรื่องราวร้องทุกข์ คณะกรรมการการเลือกตั้ง</a></li>
              <li><a class="p fw-300" href="#">แจ้งเบาะแสทุจริตการเลือกตั้ง</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>