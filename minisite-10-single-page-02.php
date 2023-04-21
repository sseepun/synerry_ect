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
    $sidePanelStyle = 'style-02';
    include_once('include/topnav-style-02.php'); 
  ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข้อมูลสำนักงาน' ],
      [ 'url' => '#', 'display' => 'อำนาจหน้าที่' ],
    ];
    $breadcrumbTitle = 'อำนาจหน้าที่';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/24.jpg';
    $backgroundColor = 'style-02';
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
          <div class="ss-title style-02">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              อำนาจหน้าที่
            </h3>
          </div>
          <div class="ss-card ss-card-48 mt-6" data-aos="fade-up" data-aos-delay="150">
            <div class="wrapper">
              <div class="image-container">
                <div class="ss-img square bradius-round no-hover">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/103.jpg');"></div>
                </div>
              </div>
              <div class="text-container">
                <h5 class="color-15 fw-500">
                  สำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัด มีหน้าที่ดังนี้
                </h5>
                <p class="fw-300 mt-2">
                  ระเบียบคณะกรรมการการเลือกตั้งว่าด้วยการแบ่งส่วนงานของสำนักงานคณะกรรมการการเลือกตั้ง 
                  พ.ศ.2560 ข้อ 57 กำหนดให้สำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัด มีหน้าที่ดังนี้
                </p>
                <ol class="ss-list-style-01">
                  <li>
                    รับผิดชอบงานทางธุรการของสำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัด
                    และคณะกรรมการการเลือกตั้งประจำจังหวัด
                  </li>
                  <li>
                    รับผิดชอบงานที่มีกฎหมายบัญญัติให้เป็นหน้าที่และอำนาจของผู้อำนวยการ
                    การเลือกตั้งประจำจังหวัด
                  </li>
                  <li>
                    ปฏิบัติงานร่วมกับหรือสนับสนุนการปฏิบัติงานของส่วนงานอื่นที่เกี่ยวข้องตามที่
                    คณะกรรมการการเลือกตั้งและสำนักงานคณะกรรมการการเลือกตั้งมอบหมาย
                  </li>
                </ol>
              </div>
            </div>
          </div>
          <h4 class="color-15 text-center fw-500 mt-6" data-aos="fade-up" data-aos-delay="300">
            โดยแบ่งโครงสร้างส่วนงานในสำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัด เป็น 3 กลุ่มงาน
          </h4>
          <div class="grids no-gap" data-aos="fade-up" data-aos-delay="450">
            <div class="grid lg-1-3 md-50 sm-100">
              <div class="ss-card ss-card-49">
                <div class="header">
                  <p>กลุ่มงานอำนวยการ</p>
                </div>
                <div class="body">
                  <div class="text-container">
                    <p class="text-center mt-1 mb-1 fw-400">มีหน้าที่ดังนี้</p>
                    <ol class="ss-list-style-01 pl-6 mt-0">
                      <li class="mt-0">
                        ดำเนินการเกี่ยวกับการจัดทำแผนงาน โครงการ แผนปฏิบัติงาน การจัดทำคำของบประมาณรายจ่าย 
                        รวมทั้งการประสานงานด้านแผน การติดตามประเมินผล และจัดทำรายงานผลการปฏิบัติงาน
                        ของสำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัด
                      </li>
                      <li>
                        ประสานงานกับกลุ่มงาน ส่วนงาน หรือ หน่วย งานอื่นในการรวบรวมข้อมูลสถิติตัวเลข 
                        และจัดทำระบบข้อมูลสารสนเทศที่เกี่ยวข้องเพื่อใช้ในการปฏิบัติงานและการเผยแพร่
                      </li>
                      <li>จัดทำข้อมูลสารสนเทศของสำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัดส่งให้สำนักเทคโนโลยีสารสนเทศ</li>
                      <li>ดำเนินการเกี่ยวกับงานนิติการ งานสารบรรณและงานธุรการทั่วไป</li>
                      <li>ดำเนินการเกี่ยวกับงานพัสดุ ครุภัณฑ์ วัสดุอุปกรณ์ และการเบิกจ่ายงบประมาณให้เป็นไปตามระเบียบ</li>
                      <li>ตรวจสอบเอกสารการเบิกจ่ายและจัดทำระบบบัญชี</li>
                      <li>ดำเนินการเกี่ยวกับการบริหารงานบุคคลของสำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัด</li>
                      <li>
                        ปฏิบัติงานร่วมกับหรือสนับสนุนการปฏิบัติงานของส่วนงานที่เกี่ยวข้องหรือตามที่ได้รับมอบหมาย 
                        รวมทั้งงานที่มิได้อยู่ในความรับผิดชอบของกลุ่มงานอื่นโดยเฉพาะ
                      </li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid lg-1-3 md-50 sm-100">
              <div class="ss-card ss-card-49 center">
                <div class="header">
                  <p>กลุ่มงานจัดการเลือกตั้งและ<br>งานการมีส่วนร่วม</p>
                </div>
                <div class="body">
                  <div class="text-container">
                    <p class="text-center mt-1 mb-1 fw-400">มีหน้าที่ดังนี้</p>
                    <ol class="ss-list-style-01 pl-6 mt-0">
                      <li class="mt-0">ประสานงานเพื่อดำเนินการจัดหรือจัดให้มีการเลือกตั้ง</li>
                      <li>ประสานงานและดำเนินการส่งเสริม หรือ สนับสนุนการมีส่วนร่วมในกระบวนการเลือกตั้งของทุกภาคส่วน</li>
                      <li>ดำเนินการเกี่ยวกับการรับรององค์การเอกชน เพื่อช่วยเหลือการปฏิบัติงานเลือกตั้ง</li>
                      <li>
                        ส่งเสริม สนับสนุน และรณงค์ให้ประชาชนมีส่วนร่วมทางการเมือง ส่งเสริมและสนับสนุน
                        การศึกษาเพื่อปลูกฝังและสร้างความเป็นพลเมืองดีวิถีประชาธิปไตย และเผยแพร่ความรู้เกี่ยวกับ
                        การปกครองในระบอบประชาธิปไตยอันมีพระมหากษัตริย์ทรงเป็นประมุข
                      </li>
                      <li>ปฏิบัติงานร่วมกับหรือสนับสนุนการปฏิบัติงานของส่วนงานอื่นที่เกี่ยวข้องตามที่ได้รับมอบหมาย</li>
                    </ol>
                  </div>
                  <!-- Image -->
                  <div class="ss-img square bradius-round mt-1">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/104.jpg');"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="grid lg-1-3 md-50 sm-100">
              <div class="ss-card ss-card-49">
                <div class="header">
                  <p>กลุ่มงานสืบสวนสอบสวนและ<br>งานพรรคการเมือง</p>
                </div>
                <div class="body">
                  <div class="text-container">
                    <p class="text-center mt-1 mb-1 fw-400">มีหน้าที่ดังนี้</p>
                    <ol class="ss-list-style-01 pl-6 mt-0">
                      <li class="mt-0">สืบสวนสอบสวนหรือไต่สวนการกระทำผิดกฎหมายเกี่ยวกับการเลือกตั้ง</li>
                      <li>ให้คำปรึกษากฎหมายที่เกี่ยวกับการเลือกตั้งในพื้นที่</li>
                      <li>ดำเนินการปฏิบัติด้านการข่าวเพื่อสนับสนุนการปฏิบัติงานการสืบสวนหรือไต่สวน</li>
                      <li>
                        จัดทำสารบบงานสำนวนการสืบสวนหรือไต่สวนหรือการคัดค้านการเลือกตั้งสารบบ คดีแพ่ง 
                        คดีอาญา คดีปกครอง ในขอบหน้าที่และอำนาจ และตามที่ได้รับมอบหมายจากคณะกรรมการ
                        การเลือกตั้งหรือเลขาธิการคณะกรรมการการเลือกตั้ง
                      </li>
                      <li>การดำเนินการเกี่ยวกับของกลางในคดีที่เกี่ยว กับการเลือกตั้ง</li>
                      <li>ประสาน สนับสนุน และส่งเสริมการดำเนินกิจการของพรรคการเมืองและสาขาพรรคการเมือง</li>
                      <li>
                        กำกับการดำเนินงานตามแผนงาน โครงการ การของพรรคการเมืองและสาขาพรรคการ 
                        เมืองตามที่กฎหมายกำหนด
                      </li>
                      <li>ปฏิบัติงานร่วมกับหรือสนับสนุนการปฏิบัติงานของส่วนงานที่เกี่ยวข้องหรือตามที่ได้รับมอบหมาย</li>
                    </ol>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <?php include_once('include/footer-style-09.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>