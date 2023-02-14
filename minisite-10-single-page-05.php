<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php $sidePanelStyle = 'style-02'; ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข้อมูลสำนักงาน' ],
      [ 'url' => '#', 'display' => 'ทำเนียบ กกต. จว.' ],
    ];
    $breadcrumbTitle = 'ข้อมูลการปกครอง';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/26.jpg';
    $backgroundColor = 'style-02';
    $sectionOptions = ['']; // ['views', 'rss']
    $formContainer = false; // select form
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
   $content = [
    ['number' => '1.', 'area' => 'เขตพระนคร'],['number' => '2.', 'area' => 'เขตดุสิต'],['number' => '3.','area' => 'เขตหนองจอก'],['area' => 'เขตบางรัก'],
    ['number' => '4.', 'area' => 'เขตบางเขน'],['number' => '5.', 'area' => 'เขตบางกะปิ'],['number' => '6.', 'area' => 'เขตปทุมวัน'],['area' => 'เขตป้อมปราบศัตรูพ่าย'],
    ['number' => '7.', 'area' => 'เขตพระโขนง'],['number' => '8.', 'area' => 'เขตมีนบุรี'],['number' => '9.', 'area' => 'เขตลาดกระบัง'],['area' => 'เขตยานนาวา'],
    ['number' => '10.', 'area' => 'เขตสัมพันธวงศ์'],['number' => '11.', 'area' => 'เขตพญาไท'],['number' => '12.', 'area' => 'เขตธนบุรี'],['area' => 'เขตบางกอกใหญ่'],
    ['number' => '13.', 'area' => 'เขตห้วยขวาง'],['number' => '14.', 'area' => 'เขตคลองสาน'],['area' => 'เขตตลิ่งชัน'],['area' => 'เขตบางกอกน้อย'],
    ['area' => 'เขตบางขุนเทียน'],['area' => 'เขตภาษีเจริญ'],['area' => 'เขตหนองแขม'],['area' => 'เขตราษฎร์บูรณะ'],
    ['area' => 'เขตบางพลัด'],['area' => 'เขตดินแดง'],['area' => 'เขตบึงกุ่ม'],['area' => 'เขตสาทร'],
    ['area' => 'เขตบางซื่อ'],['area' => 'เขตจตุจักร'],['area' => 'เขตบางคอแหลม'],['area' => 'เขตประเวศ'],
    ['area' => 'เขตคลองเตย'],['area' => 'เขตสวนหลวง'],['area' => 'เขตจอมทอง'],['area' => 'เขตดอนเมือง'],
    ['area' => 'เขตราชเทวี'],['area' => 'เขตลาดพร้าว'],['area' => 'เขตวัฒนา'],['area' => 'เขตบางแค'],
    ['area' => 'เขตหลักสี่'],['area' => 'เขตสายไหม'],['area' => 'เขตคันนายาว'],['area' => 'เขตสะพานสูง'],
    ['area' => 'เขตวังทองหลาง'],['area' => 'เขตคลองสามวา'],['area' => 'เขตบางนา'],['area' => 'เขตทวีวัฒนา'],
    ['area' => 'เขตทุ่งครุ'],['area' => 'เขตบางบอน']
   ]
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body">
          <div class="ss-title style-02">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ข้อมูลการปกครอง
            </h3>
          </div>
          <p class="h5 color-15 fw-500 mt-6">กรุงเทพมหานคร</p>
          <p class="fw-500">เป็นการปกครองท้องถิ่นแบบพิเศษ ประกอบด้วย 50 เขตปกครอง ดังนี้</p>
          <div class="grids">
            <?php foreach($content as $d) {?>
              <div class="grid lg-25">
                <div class="btn btn-action style-02 btn-19">
                  <span>1.</span>
                  <span class="fw-400"><?= $d['area'] ?></span>
                </div>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-style-09.php'); ?>
  <?php include_once('include/script.php'); ?>

</body>
</html>