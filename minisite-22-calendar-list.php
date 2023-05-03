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
      [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
    ];
    $breadcrumbTitle = 'ปฏิทินกิจกรรม';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/42.jpg';
    $sectionOptions = ['option-02', 'views-05'];
    $formContainer = true;
    include('component/breadcrumb-style-02.php');
  ?>

<?php 
    $content = [
      [
        'image' => 'public/assets/app/images/content/66.jpg',
        'style' => 'style-02'
      ],[
        'image' => 'public/assets/app/images/content/67.jpg',
        'style' => ''
      ],[
        'image' => 'public/assets/app/images/content/02.jpg',
        'style' => 'style-02'
      ],[
        'image' => 'public/assets/app/images/content/68.jpg',
        'style' => ''
      ],[
        'image' => 'public/assets/app/images/content/66.jpg',
        'style' => 'style-02'
      ], [
        'image' => 'public/assets/app/images/content/67.jpg',
        'style' => ''
      ],[
        'image' => 'public/assets/app/images/content/02.jpg',
        'style' => 'style-02'
      ],[
        'image' => 'public/assets/app/images/content/68.jpg',
        'style' => ''
      ],[
        'image' => 'public/assets/app/images/content/66.jpg',
        'style' => 'style-02'
      ],[
        'image' => 'public/assets/app/images/content/02.jpg',
        'style' => ''
      ],[
        'image' => 'public/assets/app/images/content/66.jpg',
        'style' => 'style-02'
      ],[
        'image' => 'public/assets/app/images/content/67.jpg',
        'style' => ''
      ],
    ]
  ?>
  
  <section class="section-14">
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow minisite"></div>
        <div class="body pt-0">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              กิจกรรมประชาสัมพันธ์
            </h3>
          </div>
          <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
            <?php foreach($content as $d) {?>
              <div class="grid lg-100 md-100 sm-100">
                <a class="ss-card ss-card-81" href="#">
                  <div class="wrapper">
                    <div class="img-container">
                      <div class="img-wrapper">
                        <div class="ss-img">
                          <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                          <div class="filter-04"></div>
                          <div class="btn-scale">
                            <div class="btn btn-action style-06 btn-27">
                              <em class="fa-solid fa-arrow-right"></em>
                            </div>
                          </div>
                        </div>
                      </div> 
                    </div>
                    <div class="text-container">
                      <div class="content">
                        <div class="content-wrapper">
                          <div class="date">
                            <div class="wrapper <?= $d['style']?>">
                              <?php if($d['style'] === 'style-02') {?>
                                <p class="xxs day fw-400">18 ก.พ. 66</p>
                                <p class="xxs month fw-400">19 ก.พ. 66</p>
                              <?php } else {?>
                                <p class="day fw-400">20</p>
                                <p class="xs month">ก.ย.65</p>
                              <?php } ?> 
                            </div>
                          </div>
                          <div class="text">
                            <p class="title color-black-theme fw-600">
                              ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                              ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                              ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                              ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                            </p>
                            <div class="card-bottom color-black-theme mt-1">
                              <div class="wrapper">
                                <div class="icon">
                                  <em class="fa-solid fa-calendar-days"></em>
                                  <span class="p sm ml-2 fw-400">วันที่ 18 กุมภาพันธ์ 2566</span>
                                </div>
                                <div class="icon time">
                                  <em class="fa-solid fa-clock"></em>
                                  <span class="p sm ml-2 fw-400">เวลา 12:50 - 13:50</span>
                                </div>
                                <div class="icon location">
                                  <em class="fa-solid fa-location-dot"></em>
                                  <span class="p sm ml-2 fw-400 d-block">สำนักงานกลางคณะกรรมการการเลือกตั้ง</span>
                                </div>
                                <?php if($d['style'] === 'style-02') {?>
                                  <div class="wrapper">
                                    <div class="icon ai-center d-block">
                                      <em class="fa-solid fa-calendar-days"></em>
                                      <span class="p sm ml-1 fw-400">ถึงวันที่ 19 กุมภาพันธ์ 2566</span>
                                    </div>
                                    <div class="icon time">
                                      <em class="fa-solid fa-clock"></em>
                                      <span class="p sm ml-2 fw-400">เวลา 12:50 - 13:50</span>
                                    </div>
                                  </div> 
                                <?php }?>  
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>               
                      <div class="card-footer">
                        <div class="link-footer c-btn c-btn--animate-left-right">
                          <div class="c-wrapper">
                          <span class="text color-05 fw-500 border-bottom color-black-theme bcolor-05 lh-sm">อ่านเพิ่ม</span>
                            <span class="c-icon pl-2 color-black-theme">
                              <em class="fa-solid fa-arrow-right"></em>
                            </span>
                          </div>
                        </div>
                        <div class="views-share color-black-theme">
                          <div class="icon">
                            <em class="fa-solid fa-eye"></em>
                            <span class="p sm fw-400 ml-1">280</span>
                          </div>
                          <div class="icon">
                            <em class="fa-solid fa-share-nodes"></em>
                            <span class="p sm fw-400 ml-1">60</span>
                          </div>
                        </div>
                      </div>
                      <div class="card-line style-03 line-black-theme"></div>
                    </div>
                  </div>
                </a>
              </div>
            <?php }?>
          </div>
          <div class="mt-6 pt-4">
            <?php
              $listFooter = ['total', 'paginate', 'pp'];
              $style = 'style-02';
              include('component/list-footer.php');
            ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <div class="mt-6 pt-6"></div>

  <?php include_once('component/popup-file-error.php'); ?>
  <?php
    $listResult= ['report-file'];
    include_once('component/popup-file-error-style-02.php');
  ?>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>