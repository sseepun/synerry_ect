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
      [ 'url' => '#', 'display' => 'เว็บลิงก์' ],
    ];
    $breadcrumbTitle = 'เว็บลิงก์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/12.jpg';
    include('component/breadcrumb.php');
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

  <section class="section-padding">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        เว็บลิงก์
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($weblinks as $d) {?>
          <div class="grid xl-25 lg-1-3 md-50">
          <a class="ss-card ss-card-22 mb-3" href="#">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
            </div>
            <div class="text-container">
              <p class="title text-center fw-500 mt-1">
                <?= $d['title']?>
              </p>
            </div>
            <div class="btns jc-center pt-5" data-aos="fade-up" data-aos-delay="400">
              <div href="#" class="btn btn-action btn-02">
                <em class="icon fa-solid fa-arrow-right"></em>
                อ่านเพิ่มเติม
              </div>
            </div>
          </a>
        </div>
        <?php }?>
      </div>
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>