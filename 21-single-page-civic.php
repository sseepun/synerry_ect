<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>

  <div class="pos-relative">
    <?php
        $breadcrumb = [
          [ 'url' => '#', 'display' => 'หน้าหลัก' ],
          [ 'url' => '#', 'display' => 'แอปพลิเคชั่นฉลาดเลือก' ],
        ];
        $style = 'style-02';
        include('component/breadcrumb-single-page.php');
      ?>
  </div>
  <section class="section-28 section-padding">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/47.jpg');"></div>
    <div class="container">
      <div class="grids">
        <div class="grid xl-50 lg-50 sm-100 color-black-theme">
          <h2 class="fw-400" data-aos="fade-up" data-aos-delay="0">
            แอปพลิเคชันฉลาดเลือก
          </h2>
          <h4 class="color-21 fw-400" data-aos="fade-up" data-aos-delay="150">
            ข้อมูลเบื้องต้นแอปพลิเคชันฉลาดเลือก
          <h4/>
          <p class="fw-400 mt-3" style="text-indent:20px;" data-aos="fade-up" data-aos-delay="300">
            รัฐธรรมนูญแห่งราชอาณาจักรไทย พุทธศักราช 2560 ประกอบพระราชบัญญัติ
            ประกอบรัฐธรรมนูญว่าด้วยคณะกรรมการการเลือกตั้ง พ.ศ. 2560 ให้คณะกรรมการ
            การเลือกตั้ง มีหน้าที่และอำนาจส่งเสริมและสนับสนุนหรือประสานงานกับหน่วย
            ราชการ หน่วยงานของรัฐ รัฐวิสาหกิจ หรือราชการส่วนท้องถิ่น หรือสนับสนุนองค์
            การเอกชน ในการให้การศึกษาแก่ประชาชนเกี่ยวกับการปกครองระบอบประชาธิปไตย
            อันมีพระมหากษัตริย์ทรงเป็นประมุข และส่งเสริมการมีส่วนร่วมทางการเมืองของ
            ประชาชน ให้ประชาชนได้ใช้สิทธิเลือกตั้งโดยสุจริตและ เที่ยงธรรม และยุทธศาสตร์
            สำนักงานคณะกรรมการการเลือกตั้ง 20 ปี (พ.ศ. 2561- 2580) ได้กำหนดให้มีการสร้าง
            เสริมความรู้ พลังศรัทธา และพลังร่วมวิถีการปกครองในระบอบประชาธิปไตยอันมี
            พระมหากษัตริย์ทรงเป็นประมุข โดยใช้กลยุทธ์พัฒนาระบบเทคโนโลยีสารสนเทศและ
            ช่องทางการสื่อสารที่สามารถเข้าถึงกลุ่มเป้าหมายในการสื่อสาร ของสำนักงานคณะ
            กรรมการการเลือกตั้งได้อย่างถูกต้อง รวดเร็วและทั่วถึง
          </p>
          <div class="app-download style-02 mt-2" data-aos="fade-up" data-aos-delay="750">
            <div class="wrapper">
              <div class="app-logo mt-1">
                <img src="public/assets/app/images/icon/app-01.png" alt="App Logo">
              </div>
              <div class="btn-link mt-1">
                <p class="color-black fw-400">ดาวน์โหลดได้ที่<p/>
                <a href="#">
                  <img class="google-play" src="public/assets/app/images/icon/google-play.png" alt="Google Link">
                </a>
                <a href="#">
                 <img class="app-store" src="public/assets/app/images/icon/app-store.png" alt="App Link">
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/script.php'); ?>

</body>
</html>