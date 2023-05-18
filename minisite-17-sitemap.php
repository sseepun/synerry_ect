<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-minisite-dropdown-menu.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'โครงสร้างเว็บไซต์' ],
    ];
    $breadcrumbTitle = 'โครงสร้างเว็บไซต์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/33.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
    $checkIcon = '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                    viewBox="0 0 512 465" >
                      <g transform="translate(0.000000,512.000000) scale(0.100000,-0.100000)">
                        <path d="M3395,3890c-676-676-1234-1230-1240-1230c-5,0-164,154-352,342l-343,343l-245-245l-245-245l592-592l593-593l1482,1482
                          l1483,1483l-242,242c-134,134-245,243-248,243S4071,4567,3395,3890z"/>
                        <path d="M0,2725V470l2253,2l2252,3l3,1438c1,790-1,1437-6,1437c-4,0-161-154-350-343l-342-342v-748v-747H2255H700v1555v1555h1213
                          h1212l350,350l350,350H1912H0V2725z"/>
                      </g>
                  </svg>';
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              โครงสร้างเว็บไซต์
            </h3>
          </div>
          <div class="sitemap-01">
            <div class="sitemap-grids">
              <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="150">
                <div class="btn btn-action style-03 btn-34 btn-white-theme mt-3">
                  <div class="header-title">
                    <p class="h5 fw-500">กกต.</p>
                  </div>
                </div>
                <ul class="ss-list style-04 bradius pt-3 pb-3 theme-01 color-black-theme">
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">คณะกรรมการการเลือกตั้ง</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">อำนาจหน้าที่ของกกต.</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">เลขาธิการ กกต.</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">สำนักงาน กกต.</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">สำนักงาน กกต.จังหวัด</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ผู้ตรวจการเลือกตั้ง</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">วิสัยทัศน์ / พันธกิจ / ยุทธศาสตร์</a>
                    </div>
                  </li>              
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ค่านิยมร่วมขององค์กร</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">การเปิดเผยข้อมูลต่อสาธารณะ</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ประกาศเจตจำนงสุจริตในการบริหารงาน</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">การบริหารจัดการความเสี่ยงและการควบคุมภายในองค์กร</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">คุณธรรมองค์กร</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">โครงสร้างสำนักงาน</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">แผนยุทธศาสตร์สำนักงาน</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">รายงานผลการปฏิบัติงานประจำปี</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">แผนปฏิบัติการประจำปี/การติดตามผล/ รายงานความพึงพอใจ</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">รายงานของผู้สอบบัญชีและรายงานการเงินของสำนักงาน</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">มาตรการ กลไก และมาตราฐาน/ขั้นตอนการปฏิบัติงาน</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">การบริหารและพัฒนาทรัพยากรบุคคล</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">การป้องกันการทุจริตภายในหน่วยงาน</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">แนวทาง/ข้อกำหนดเกี่ยวกับการป้องกัน การทุจริตในหน่วยงาน</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">การเสริมสร้างวัฒนธรรมภายในองค์กร</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">สถิติการให้บริการและแบบสำรวจความพึงพอใจ</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ทำเนียบผู้บริหาร</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ผู้บริหาร CIO</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="300">
                <div class="btn btn-action style-03 btn-34 btn-white-theme mt-3">
                  <div class="header-title">
                    <p class="h5 fw-500">รวมกฎหมาย</p>
                  </div>
                </div>
                <ul class="ss-list style-04 bradius min-height size-02 theme-01 pt-3 pb-3 color-black-theme">
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">รัฐธรรมนูญ</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">พระราชบัญญัติประกอบ</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">พระราชบัญญัติ</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">พระราชกฤษฎีกา</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ระเบียบ กกต.</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ประกาศ กกต.</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">คำสั่ง กกต.</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">คำวินิจฉัย กกต.</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ประกาศนายทะเบียน</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">พรรคการเมือง</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ร่างกฎหมายและการรับฟังความคิดเห็น</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ประกาศ สนง. กกต.ร่างกฎหมายและการรับฟังความคิดเห็น</a>
                    </div>
                  </li>
                </ul>
                <div data-aos="fade-up" data-aos-delay="0">
                  <div class="btn btn-action style-03 btn-34 btn-white-theme mt-3">
                    <div class="header-title">
                      <p class="h5 fw-500">บริการข้อมูล</p>
                    </div>
                  </div>
                  <ul class="ss-list style-04 bradius pt-3 pb-3 min-height theme-01 size-03 color-black-theme">
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">สถิติการเลือกตั้ง</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">ประกาศผลการเลือกตั้ง</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">ศูนย์กลางข้อมูลเปิดเกี่ยวกับการเลือกตั้ง</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">ข้อมูลพรรคการเมือง</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">ตรวจสอบข้อมูลสมาชิกพรรคการเมือง</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">สื่อประชาสัมพันธ์</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">คู่มือปฏิบัติงาน</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">แบบฟอร์ม</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">บริการสารสนเทศภายในหน่วยงาน</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">KNOWLEDGE MANAGEMENT</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">เอกสารการศึกษาส่วนบุคคลหลักสูตร พตส.</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="450">
                <div class="btn btn-action style-03 btn-34 btn-white-theme mt-3">
                  <div class="header-title">
                    <p class="h5 fw-500">หน่วยงาน</p>
                  </div>
                </div>
                <ul class="ss-list style-04 bradius pt-3 pb-3 min-height theme-01 size-02 color-black-theme">
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">สถาบันพัฒนาการเมืองและการเลือกตั้ง</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ศูนย์บริการเบิกจ่ายตรงสวัสดิการฯ</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 1</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 2</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 3</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 4</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ศูนย์การเรียนรู้ฯที่ 5</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ศูนย์ศึกษาประชาธิปไตย</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">สำนักงาน กกต. จังหวัด</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ห้องสุมดอิเล็กทรอนิกส์</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">เครื่องลงคะแนนเลือกตั้ง</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">สหกรณ์ออมทรัพย์ องค์กรอิสระ จำกัด</a>
                    </div>
                  </li>
                </ul>
                <div data-aos="fade-up" data-aos-delay="150">
                  <div class="btn btn-action style-03 btn-34 btn-white-theme mt-3">
                    <div class="header-title">
                      <p class="h5 fw-500">ข่าวสาร</p>
                    </div>
                  </div>
                  <ul class="ss-list style-04 bradius pt-3 pb-3 theme-01 color-black-theme">
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">ข่าวประชาสัมพันธ์</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">เรื่องเด่น กกต.</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">ข่าว สนง.กกต.จว.</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">CLIPPING NEWS</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">ข่าวรับสมัครงาน</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">บทความพิเศษ</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">การจัดทำ MOU กับหน่วยงานต่างๆ</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">องค์ความรู้การเลือกตั้ง</a>
                      </div>
                    </li>
                    <li>
                      <div class="wrapper">
                        <div class="icon">
                          <?= $checkIcon ?>
                        </div>
                        <a class="p fw-400" href="#">วิดีโอ</a>
                      </div>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="450">
                <div class="btn btn-action style-04 btn-34 btn-white-theme mt-3">
                  <div class="header-title">
                    <div>
                      <p class="h5 fw-500">ตอบข้อซักถาม/แจ้งเบาะแส</p>
                    </div>
                  </div>
                </div>
                <ul class="ss-list style-04 bradius theme-01 pt-3 pb-3 color-black-theme">
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ติดต่อสอบถาม</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">กระดานถามตอบ</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ตอบข้อซักถามพรรคการเมือง</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ศูนย์รับเรื่องราวร้องทุกข์ คณะกรรมการการเลือกตั้ง</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">แจ้งเบาะแสทุจริตการเลือกตั้ง</a>
                    </div>
                  </li>
                </ul>
              </div>
              <div class="sitemap-grid" data-aos="fade-up" data-aos-delay="600">
                <div class="btn btn-action style-03 btn-34 btn-white-theme mt-3">
                  <div class="header-title">
                    <p class="h5 fw-500">จัดซื้อ/จัดจ้าง</p>
                  </div>
                </div>
                <ul class="ss-list style-04 theme-01 bradius pt-3 pb-3 color-black-theme">
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">แผน/ผลการจัดซื้อจัดจ้างรายเดือนรายปี</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">การเปิดเผยราคากลาง</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ข่าวประกวดราคา/สอบราคา</a>
                    </div>
                  </li>
                  <li>
                    <div class="wrapper">
                      <div class="icon">
                        <?= $checkIcon ?>
                      </div>
                      <a class="p fw-400" href="#">ผลการเสนอราคา/ประกวดราคา</a>
                    </div>
                  </li>
                </ul>
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