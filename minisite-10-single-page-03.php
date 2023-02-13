<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข้อมูลสำนักงาน' ],
      [ 'url' => '#', 'display' => 'โครงสร้างองค์กร' ],
    ];
    $breadcrumbTitle = 'โครงสร้างองค์กร';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/25.jpg';
    $backgroundColor = 'style-02';
    $sectionOptions;
    $sectionOptions;
    $formContainer = false;
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
              โครงสร้างองค์กร
            </h3>
          </div>
          <div class="ss-card ss-card-48 mt-6" data-aos="fade-up" data-aos-delay="150">
            <div class="wrapper">
              <div class="image-container">
                <div class="ss-img square bradius-round no-hover">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/106.jpg');"></div>
                </div>
              </div>
              <div class="text-container">
                <h5 class="color-15 fw-500">
                สำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัดประกอบด้วย
                </h5>
                <h6 class="color-15 fw-400 mt-2">
                  ผู้อำนวยการการเลือกตั้งประจำจังหวัด (ผอ.กต.จว.)
                </h6>
                <p class="mt-3">
                  เป็นพนักงานสังกัดสำนักงานคณะกรรมการการเลือกตั้งตามระเบียบกกต.ว่าด้วยการบริหารงานบุคคล 
                  และเป็นผู้บังคับบัญชาของพนักงานและลูกจ้างของ สนง.กกต.จว. รับผิดชอบการปฏิบัติโดยขึ้นตรงต่อเลขาธิการ 
                  กกต.ปฏิบัติหน้าที่ตามประกาศระเบียบข้อกำหนดและมติของคณะกรรมการการเลือกตั้ง 
                  รวมถึงการปฏิบัติการอื่นใดตามที่คณะกรรมการการเลือกตั้ง หรือคณะกรรมการการเลือกตั้งประจำจังหวัดมอบหมายหรือมีคำสั่ง 
                  บทบาทและอำนาจหน้าที่ของ ผอ.กต.จว.เป็นไปตามระเบียบว่าด้วยคณะกรรมการการเลือกตั้ง 
                  ว่าด้วยคณะกรรมการการเลือกตั้งประจำจังหวัดและผู้อำนวยการการเลือกตั้งประจำจังหวัด พ.ศ.2552 ข้อ 6 ดังนี้
                </p>
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