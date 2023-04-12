<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
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
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/42.jpg');"></div>
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
            สำนักงานคณะกรรมการการเลือกตั้ง จัดทำแอปพลิเคชันฉลาดเลือก (Smart Vote) 
            เพื่ออำนวยความสะดวกแก่ผู้มีสิทธิเลือกตั้งในการสืบค้นข้อมูลเกี่ยวกับ
          </p>
          <ul class="ss-list style-13 mt-3" data-aos="fade-up" data-aos-delay="450">
            <li><a href="#" class="color-black-theme">ข้อมูลผู้สมัคร</a></li>
            <li><a href="#" class="color-black-theme">พรรคการเมือง </a></li>
            <li><a href="#" class="color-black-theme">ความรู้เกี่ยวกับกระบวนการเลือกตั้ง ส.ส</a></li>
            <li><a href="#" class="color-black-theme">การเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น</a></li>
            <li><a href="#" class="color-black-theme">ข้อมูลอื่น ๆ ที่เกี่ยวข้อง</a></li>
          </ul>
          <p class="color-21 fw-400 mt-3" data-aos="fade-up" data-aos-delay="600">ดาวน์โหลดได้ที่นี่<p/>
          <div class="app-download" data-aos="fade-up" data-aos-delay="750">
            <div class="wrapper">
              <div class="app-logo">
                <img src="public/assets/app/images/icon/62.png" alt="App Logo">
              </div>
              <div class="btn-link">
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

  <?php
    $mobileScreen = [
      [
        'image' => 'public/assets/app/images/content/smartvote-01.png',
        'title' => '01',
      ],[
        'image' => 'public/assets/app/images/content/smartvote-02.png',
        'title' => '02',
      ],[
        'image' => 'public/assets/app/images/content/smartvote-03.png',
        'title' => '03',
      ],[
        'image' => 'public/assets/app/images/content/smartvote-04.png',
        'title' => '04',
      ],[
        'image' => 'public/assets/app/images/content/smartvote-05.png',
        'title' => '05',
      ],[
        'image' => 'public/assets/app/images/content/smartvote-06.png',
        'title' => '06',
      ],
    ]
  ?>
  
  <div class="section-29 section-padding bg-28">
    <div class="container">
      <div class="ss-title style-03 d-block" data-aos="fade-up" data-aos-delay="0">
        <h4 class="color-white fw-400">
          <span class="h2">กกต</span>... พร้อมให้บริการข้อมูลการเลือกตั้ง
        </h4>
        <p class="color-white h4 fw-400">
          แก่ภาคประชาชนทุกภาคส่วน
        </p>
      </div>
      <h5 class="sm color-white text-center mt-6" data-aos="fade-up" data-aos-delay="150">
        การใช้งานแอปพลิเคชัน ฉลาดเลือก
      </h5>
      <div class="steps mt-4" data-aos="fade-up" data-aos-delay="300">
        <p class="h4 fw-500 swiper-title">03</p>
      </div>
      <div class="swiper-container" data-aos="fade-up" data-aos-delay="300">
        <div class="swiper-wrapper">
          <?php foreach($mobileScreen as $d){?>
            <div class="swiper-slide" data-title="<?= $d['title'] ?>">
            <div class="mobile-screen">
              <div class="ss-card ss-card-78">
                <div class="ss-img shine style-02 vertical-05 no-hover">
                  <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                </div>
              </div>
            </div>
          </div>
          <?php }?>
        </div>
        <div class="bullet mt-4" data-aos="fade-up" data-aos-delay="400">
          <div class="container">
            <div class="bullet-wrapper">
              <div class="dots"></div>
            </div>
          </div>  
        </div>
      </div>
    </div>
  </div>

  <section class="section-padding">
    <div class="container">
      <p class="fw-400" style="text-indent:20px;" data-aos="fade-up" data-aos-delay="0">
        เพื่ออำนวยความสะดวกแก่ผู้มีสิทธิเลือกตั้งในการเข้าถึงข้อมูลผู้สมัครรับเลือกตั้ง ข้อมูลพรรคการเมือง ข้อมูลที่เผยแพร่ประชาสัมพันธ์การเลือกตั้ง 
        รวมทั้งข้อมูลอื่นๆ ที่เกี่ยวข้อง ในการเลือกตั้งสมาชิกสภาผู้แทนราษฎร 2562 นี้ และที่จะมีขึ้นในครั้งต่อๆ ไป
      </p>
      <h5 class="color-21 fw-400 mt-5" data-aos="fade-up" data-aos-delay="150">
        ข้อมูลประกอบด้วย
      </h5>
      <div class="ss-card-79 mt-4" data-aos="fade-up" data-aos-delay="300">
        <div class="wrapper">
          <div class="icon">
            <img src="public/assets/app/images/icon/65.png" alt="Icon">
          </div>
          <p class="text-container fw-400">
            ตรวจสอบหน่วยเลือกตั้ง และดูรายชื่อผู้สมัครในเขตเลือกตั้ง<br>
            ที่คุณมีสิทธิลงคะแนน
          </p>
        </div>
      </div>
      <div class="ss-card-79 mt-4" data-aos="fade-up" data-aos-delay="450">
        <div class="wrapper">
          <div class="icon">
            <img src="public/assets/app/images/icon/64.png" alt="Icon">
          </div>
          <p class="text-container fw-400">
            ข้อมูลผู้สมัคร ส.ส. ทั้งหมด ทั้ง ส.ส.แบบแบ่งเขตเลือกตั้ง 11,181 คน แยกตามเขตเลือกตั้ง 350 เขตทั่วประเทศ, ส.ส.แบบบัญชีรายชื่อ 2,917 คน แยกตามพรรคการเมือง และรายชื่อ
            บุคคลซึ่งพรรคการเมืองเสนอให้เป็นนายกรัฐมนตรี, มีรูปภาพผู้สมัคร ส.ส. ทุกคน
          </p>
        </div>
      </div>
    </div>        
  </section>

  <div class="container pt-6 pb-6">
    <?php include_once('include/footer-single-page.php'); ?>
  </div>

  <?php include_once('include/script.php'); ?>

</body>
</html>