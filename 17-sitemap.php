<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-02.php'); ?>
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
      <div class="sitemap-01">
        <div class="sitemap-grids">
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="150">
            <div class="btn btn-action btn-06 mt-3">
              <p class="h5 fw-500">กกต.</p>
            </div>
            <ul class="ss-list style-04 pt-3 pb-3">
              <li><a class="p fw-400" href="#">คณะกรรมการการเลือกตั้ง</a></li>
              <li><a class="p fw-400" href="#">อำนาจหน้าที่ของกกต.</a></li>
              <li><a class="p fw-400" href="#">เลขาธิการ กกต.</a></li>
              <li><a class="p fw-400" href="#">สำนักงาน กกต.</a></li>
              <li><a class="p fw-400" href="#">สำนักงาน กกต.จังหวัด</a></li>
              <li><a class="p fw-400" href="#">ผู้ตรวจการเลือกตั้ง</a></li>
              <li><a class="p fw-400" href="#">วิสัยทัศน์ / พันธกิจ / ยุทธศาสตร์</a></li>              
              <li><a class="p fw-400" href="#">ค่านิยมร่วมขององค์กร</a></li>
              <li><a class="p fw-400" href="#">การเปิดเผยข้อมูลต่อสาธารณะ</a></li>
              <li><a class="p fw-400" href="#">ประกาศเจตจำนงสุจริตในการบริหารงาน</a></li>
              <li><a class="p fw-400" href="#">การบริหารจัดการความเสี่ยงและการควบคุมภายในองค์กร</a></li>
              <li><a class="p fw-400" href="#">คุณธรรมองค์กร</a></li>
              <li><a class="p fw-400" href="#">โครงสร้างสำนักงาน</a></li>
              <li><a class="p fw-400" href="#">แผนยุทธศาสตร์สำนักงาน</a></li>
              <li><a class="p fw-400" href="#">รายงานผลการปฏิบัติงานประจำปี</a></li>
              <li><a class="p fw-400" href="#">แผนปฏิบัติการประจำปี/การติดตามผล/ รายงานความพึงพอใจ</a></li>
              <li><a class="p fw-400" href="#">รายงานของผู้สอบบัญชีและรายงานการเงินของสำนักงาน</a></li>
              <li><a class="p fw-400" href="#">มาตรการ กลไก และมาตราฐาน/ขั้นตอนการปฏิบัติงาน</a></li>
              <li><a class="p fw-400" href="#">การบริหารและพัฒนาทรัพยากรบุคคล</a></li>
              <li><a class="p fw-400" href="#">การป้องกันการทุจริตภายในหน่วยงาน</a></li>
              <li><a class="p fw-400" href="#">แนวทาง/ข้อกำหนดเกี่ยวกับการป้องกัน การทุจริตในหน่วยงาน</a></li>
              <li><a class="p fw-400" href="#">การเสริมสร้างวัฒนธรรมภายในองค์กร</a></li>
              <li><a class="p fw-400" href="#">สถิติการให้บริการและแบบสำรวจความพึงพอใจ</a></li>
              <li><a class="p fw-400" href="#">ทำเนียบผู้บริหาร</a></li>
              <li><a class="p fw-400" href="#">ผู้บริหาร CIO</a></li>
              <div class="line size-01" style="height:97%"></div>
            </ul>
          </div>
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="300">
            <div class="btn btn-action btn-06 mt-3">
              <p class="h5 fw-500">รวมกฎหมาย</p>
            </div>
            <ul class="ss-list style-04 min-height pt-3 pb-3">
              <li><a class="p fw-400" href="#">รัฐธรรมนูญ</a></li>
              <li><a class="p fw-400" href="#">พระราชบัญญัติประกอบ</a></li>
              <li><a class="p fw-400" href="#">พระราชบัญญัติ</a></li>
              <li><a class="p fw-400" href="#">พระราชกฤษฎีกา</a></li>
              <li><a class="p fw-400" href="#">ระเบียบ กกต.</a></li>
              <li><a class="p fw-400" href="#">ประกาศ กกต.</a></li>
              <li><a class="p fw-400" href="#">คำสั่ง กกต.</a></li>
              <li><a class="p fw-400" href="#">คำวินิจฉัย กกต.</a></li>
              <li><a class="p fw-400" href="#">ประกาศนายทะเบียน</a></li>
              <li><a class="p fw-400" href="#">พรรคการเมือง</a></li>
              <li><a class="p fw-400" href="#">ร่างกฎหมายและการรับฟังความคิดเห็น</a></li>
              <li><a class="p fw-400" href="#">ประกาศ สนง. กกต.ร่างกฎหมายและการรับฟังความคิดเห็น</a></li>
              <div class="line" style="height:23.5rem;"></div>
            </ul>
            <div class="btn btn-action btn-06 mt-3">
              <p class="h5 fw-500">หน่วยงาน</p>
            </div>
            <ul class="ss-list style-04 pt-3 pb-3">
              <li><a class="p fw-400" href="#">สถาบันพัฒนาการเมืองและการเลือกตั้ง</a></li>
              <li><a class="p fw-400" href="#">ศูนย์บริการเบิกจ่ายตรงสวัสดิการฯ</a></li>
              <li><a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 1</a></li>
              <li><a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 2</a></li>
              <li><a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 3</a></li>
              <li><a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 4</a></li>
              <li><a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 5</a></li>
              <li><a class="p fw-400" href="#">ศูนย์ศึกษาประชาธิปไตย</a></li>
              <li><a class="p fw-400" href="#">สำนักงาน กกต. จังหวัด</a></li>
              <li><a class="p fw-400" href="#">ห้องสุมดอิเล็กทรอนิกส์</a></li>
              <li><a class="p fw-400" href="#">เครื่องลงคะแนนเลือกตั้ง</a></li>
              <li><a class="p fw-400" href="#">สหกรณ์ออมทรัพย์ องค์กรอิสระ จำกัด</a></li>
              <div class="line" style="height:23.5rem;"></div>
            </ul>
          </div>
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="450">
            <div class="btn btn-action btn-06 mt-3">
              <p class="h5 fw-500">ข่าวสาร</p>
            </div>
            <ul class="ss-list style-04 min-height pt-3 pb-3">
              <li><a class="p fw-400" href="#">ข่าวประชาสัมพันธ์</a></li>
              <li><a class="p fw-400" href="#">เรื่องเด่น กกต.</a></li>
              <li><a class="p fw-400" href="#">ข่าว สนง.กกต.จว.</a></li>
              <li><a class="p fw-400" href="#">CLIPPING NEWS</a></li>
              <li><a class="p fw-400" href="#">ข่าวรับสมัครงาน</a></li>
              <li><a class="p fw-400" href="#">บทความพิเศษ</a></li>
              <li><a class="p fw-400" href="#">การจัดทำ MOU กับหน่วยงานต่างๆ</a></li>
              <li><a class="p fw-400" href="#">องค์ความรู้การเลือกตั้ง</a></li>
              <li><a class="p fw-400" href="#">วิดีโอ</a></li>
              <div class="line" style="height:17.5rem;"></div>
            </ul>
            <div class="btn btn-action btn-06 mt-3">
              <p class="h5 fw-500">ตอบข้อซักถาม/แจ้งเบาะแส</p>
            </div>
            <ul class="ss-list style-04 pt-3 pb-3">
              <li><a class="p fw-400" href="#">ติดต่อสอบถาม</a></li>
              <li><a class="p fw-400" href="#">กระดานถามตอบ</a></li>
              <li><a class="p fw-400" href="#">ตอบข้อซักถามพรรคการเมือง</a></li>
              <li><a class="p fw-400" href="#">ศูนย์รับเรื่องราวร้องทุกข์ คณะกรรมการการเลือกตั้ง</a></li>
              <li><a class="p fw-400" href="#">แจ้งเบาะแสทุจริตการเลือกตั้ง</a></li>
              <div class="line" style="height:11.4735rem;"></div>
            </ul>
          </div>
          <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="450">
            <div class="btn btn-action btn-06 mt-3">
              <p class="h5 fw-500">บริการข้อมูล</p>
            </div>
            <ul class="ss-list style-04 min-height pt-3 pb-3">
              <li><a class="p fw-400" href="#">สถิติการเลือกตั้ง</a></li>
              <li><a class="p fw-400" href="#">ประกาศผลการเลือกตั้ง</a></li>
              <li><a class="p fw-400" href="#">ศูนย์กลางข้อมูลเปิดเกี่ยวกับการเลือกตั้ง</a></li>
              <li><a class="p fw-400" href="#">ข้อมูลพรรคการเมือง</a></li>
              <li><a class="p fw-400" href="#">ตรวจสอบข้อมูลสมาชิกพรรคการเมือง</a></li>
              <li><a class="p fw-400" href="#">สื่อประชาสัมพันธ์</a></li>
              <li><a class="p fw-400" href="#">คู่มือปฏิบัติงาน</a></li>
              <li><a class="p fw-400" href="#">แบบฟอร์ม</a></li>
              <li><a class="p fw-400" href="#">บริการสารสนเทศภายในหน่วยงาน</a></li>
              <li><a class="p fw-400" href="#">KNOWLEDGE MANAGEMENT</a></li>
              <li><a class="p fw-400" href="#">เอกสารการศึกษาส่วนบุคคลหลักสูตร พตส.</a></li>
              <div class="line" style="height:21.5rem;"></div>
            </ul>
            <div class="btn btn-action btn-06 mt-3">
              <p class="h5 fw-500">จัดซื้อ/จัดจ้าง</p>
            </div>
            <ul class="ss-list style-04 pt-3 pb-3">
              <li><a class="p fw-400" href="#">แผน/ผลการจัดซื้อจัดจ้างรายเดือนรายปี</a></li>
              <li><a class="p fw-400" href="#">การเปิดเผยราคากลาง</a></li>
              <li><a class="p fw-400" href="#">ข่าวประกวดราคา/สอบราคา</a></li>
              <li><a class="p fw-400" href="#">ผลการเสนอราคา/ประกวดราคา</a></li>
              <div class="line" style="height:7.5rem;"></div>
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