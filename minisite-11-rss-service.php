<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'บริการ RSS' ],
    ];
    $breadcrumbTitle = 'บริการ RSS';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/34.jpg';
    $sectionOptions = ['option-02'];
    $formContainer = true;
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
    $content = [
      [
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/84.jpg'
      ],[
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/135.jpg'
      ]
    ]
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              บริการ RSS
            </h3>
          </div>
          <div class="scroll-x-wrapper mt-4">
            <div class="faq-10 pb-1" data-aos="fade-up" data-aos-delay="300">
              <?php for($i=0; $i<12; $i++){?>
                <div class="faq">
                  <div class="ss-card question box-shadow style-02">
                    <h3 class="ftag">
                      <div class="icon">
                        <img src="public/assets/app/images/icon/55.png" alt="">
                      </div>
                    </h3>
                    <div class="text-container">
                      <p class="title lh-sm fw-400">
                        เปิดเผยราคากลาง กิจกรรมประชาสัมพันธ์และเผยแพร่ไวรัลวีดิโอ 
                        สปอตโทรทัศน์พร้อมล่ามภาษามือผ่านเครือข่ายสังคมออนไลน์ จำนวน 2 ช่องทาง
                        เปิดเผยราคากลาง กิจกรรมประชาสัมพันธ์และเผยแพร่ไวรัลวีดิโอ 
                        สปอตโทรทัศน์พร้อมล่ามภาษามือผ่านเครือข่ายสังคมออนไลน์ จำนวน 2 ช่องทาง
                        เปิดเผยราคากลาง กิจกรรมประชาสัมพันธ์และเผยแพร่ไวรัลวีดิโอ 
                        สปอตโทรทัศน์พร้อมล่ามภาษามือผ่านเครือข่ายสังคมออนไลน์ จำนวน 2 ช่องทาง
                      </p>
                    </div>
                    <div class="button-container">
                      <a href="#" class="btn size-05 btn-action btn-fling btn-13">
                        <span class="mr-1">อ่านต่อ</span> <em class=" fa-solid fa-arrow-right fling"></em>
                      </a>
                    </div>
                  </div>
                </div>
              <?php }?>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <div class="container">
    <div class="mt-6 pt-4 mb-6">
      <?php
        $listFooter = ['total', 'paginate', 'pp'];
        $style = 'style-02';
        include('component/list-footer.php');
      ?>
    </div>
  </div>

  <div class="mt-6 pt-6"></div>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>