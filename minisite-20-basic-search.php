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
      [ 'url' => '#', 'display' => 'ข่าวสารประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'ข่าวสาร/ประชาสัมพันธ์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/28.jpg';
    $formContainer = true;
    $sectionOptions = [ 'option-01', 'views' ];
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
    $content = [
      ['image' => 'public/assets/app/images/content/01.jpg'], 
      ['image' => 'public/assets/app/images/content/03.jpg'], 
      ['image' => 'public/assets/app/images/content/04.jpg'], 
    ]
  ?>

  <section class="section-14">
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ผลการค้นหา
            </h3>
          </div>
          <div class="mt-2" data-aos="fade-up" data-aos-delay="150">
            <span class="fw-400">ผลการค้นหา <span class="h5 color-04 color-black-theme fw-600">"การเลือกตั้ง"</span>
            <span>ค้นพบ <span class="color-04 color-black-theme fw-600">3</span> รายการ</span></span>
          </div>
          <div class="grids" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($content as $d) {?>
              <div class="grid xl-25 lg-1-3 md-50">
                <a class="ss-card ss-card-37 color-black-theme mb-3" href="#">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                    <div class="filter-04"></div>
                    <div class="btn-scale">
                      <div class="btn btn-action style-06 btn-27">
                        <em class="fa-solid fa-arrow-right"></em>
                      </div>
                    </div>
                  </div>
                  <div class="text-container">
                    <p class="title fw-500">
                      รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมหารือเตรียมการจัดงานวันสถาปนา
                      สำนักงานคณะกรรมการการเลือกตั้ง ครบรอบ 24 ปี
                    </p>
                    <p class="sm desc color-08 fw-400 mt-1">
                      วันที่ 6 มีนาคม 2565 เวลา 13.30 น. นายอิทธิพร บุญประคอง ประธานกรรมการการเลือกตั้ง 
                      เป็นประธานในพิธีเปิดการอบรมหลักสูตรการปฏิบัติหลักสูตรและเทคนิค
                    </p>
                    <div class="card-footer mt-1">
                      <div class="wrapper color-gray">
                        <div class="icon">
                          <em class="fa-solid fa-calendar-days"></em>
                          <span class="p sm fw-400 ml-2">08 มิถุนายน 2565</span>
                        </div>
                        <div class="icon">
                          <em class="fa-solid fa-eye"></em>
                          <span class="p sm fw-400 ml-2">280</span>
                        </div>
                        <div class="icon">
                          <em class="fa-solid fa-share-nodes"></em>
                          <span class="p sm fw-400 ml-2">60</span>
                        </div>
                      </div>
                      <div class="link-footer">
                        <p class="text color-05 fw-500 border-bottom bcolor-05 lh-sm mr-2">อ่านต่อ</p>
                        <div class="arrow"><em class="fa-solid fa-arrow-right"></em></div>
                      </div>
                    </div>
                    <div class="card-line style-03"></div>
                  </div>
                </a>
              </div>
            <?php }?>
          </div>
        </div>
      </div>
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          $style = 'style-02';
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </section>

  <div class="mt-6 pt-6"></div>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>