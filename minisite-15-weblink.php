<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'เว็บลิงก์' ],
    ];
    $breadcrumbTitle = 'เว็บลิงก์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/36.jpg';
    $sectionOptions = [ ''];
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

<?php 
    $weblinks = [
      [
        'image' => 'public/assets/app/images/content/70.jpg', 
        'title' => 'กรมเศรษฐกิจระหว่างประเทศกระทรวงการต่างประเทศ'
      ],[
        'image' => 'public/assets/app/images/content/67.jpg',
        'title' => 'สำนักงานส่งเสริมสวัสดิภาพและพิทักษ์เด็ก เยาวชน ผู้ด้อยโอกาส คนพิการ'
      ],[
        'image' => 'public/assets/app/images/content/71.jpg',
        'title' => 'ศูนย์การเรียนรู้ฯที่ 1'
      ],[
        'image' => 'public/assets/app/images/content/72.jpg',
        'title' => 'ศูนย์การเรียนรู้ฯที่ 2'
      ],[
        'image' => 'public/assets/app/images/content/68.jpg',
        'title' => 'ศูนย์ศึกษาประชาธิปไตย'
      ],[
        'image' => 'public/assets/app/images/content/73.jpg',
        'title' => 'สำนักงาน กกต. จังหวัด'
      ],[
        'image' => 'public/assets/app/images/content/74.jpg',
        'title' => 'เครื่องลงคะแนนเลือกตั้ง'
      ],[
        'image' => 'public/assets/app/images/content/75.jpg',
        'title' => 'สหกรณ์ออมทรัพย์ องค์กรอิสระ จำกัด'
      ],[
        'image' => 'public/assets/app/images/content/76.jpg',
        'title' => 'สถาบันพัฒนาการเมืองและการเลือกตั้ง'
      ],[
        'image' => 'public/assets/app/images/content/77.jpg',
        'title' => 'สำนักงานส่งเสริมอุตสาหกรรมซอฟต์แวร์แห่งชาติ (องค์การมหาชน)'
      ],[
        'image' => 'public/assets/app/images/content/71.jpg',
        'title' => 'ศูนย์การเรียนรู้ฯที่ 1'
      ],[
        'image' => 'public/assets/app/images/content/72.jpg',
        'title' => 'ศูนย์การเรียนรู้ฯที่ 2'
      ],[
        'image' => 'public/assets/app/images/content/68.jpg',
        'title' => 'ศูนย์ศึกษาประชาธิปไตย'
      ],[
        'image' => 'public/assets/app/images/content/73.jpg',
        'title' => 'สำนักงาน กกต. จังหวัด'
      ],[
        'image' => 'public/assets/app/images/content/74.jpg',
        'title' => 'เครื่องลงคะแนนเลือกตั้ง'
      ],[
        'image' => 'public/assets/app/images/content/75.jpg',
        'title' => 'สหกรณ์ออมทรัพย์ องค์กรอิสระ จำกัด'
      ],[
        'image' => 'public/assets/app/images/content/76.jpg',
        'title' => 'สถาบันพัฒนาการเมืองและการเลือกตั้ง'
      ],[
        'image' => 'public/assets/app/images/content/67.jpg',
        'title' => 'สำนักงานส่งเสริมสวัสดิภาพและพิทักษ์เด็ก เยาวชน ผู้ด้อยโอกาส คนพิการ'
      ],[
        'image' => 'public/assets/app/images/content/71.jpg',
        'title' => 'ศูนย์การเรียนรู้ฯที่ 1'
      ],[
        'image' => 'public/assets/app/images/content/72.jpg',
        'title' => 'ศูนย์การเรียนรู้ฯที่ 2'
      ], 
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
              หน่วยงานภายนอก
            </h3>
          </div>
          <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($weblinks as $d) {?>
              <div class="grid xl-25 lg-1-3 md-50">
                <a class="ss-card ss-card-65 mb-3" href="#">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                    <div class="filter style-02">
                      <div class="wrapper">
                        <div class="icon sm">
                          <img src="public/assets/app/images/icon-svg/link.svg" alt="Icon">
                        </div>
                      </div>
                    </div>
                    <div class="filter style-02 bgcolor-02">
                      <div class="wrapper">
                        <div class="btn btn-action style-05 btn-24">
                          <em class="fa-solid fa-arrow-right"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="text-container">
                    <p class="title text-center fw-500">
                      <?= $d['title']?>
                    </p>
                    <div class="btns jc-center pt-5">
                      <div class="btns jc-center">
                        <div class="btn btn-action btn-26">
                          <span>ไปที่เว็บไซต์</span>
                          <em class="fa-solid fa-arrow-right"></em>
                        </div>
                      </div>
                    </div>
                    <div class="card-line style-02"></div>
                  </div>
                </a>
              </div>
            <?php }?>
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

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>