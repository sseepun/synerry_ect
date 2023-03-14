<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
    ];
    $breadcrumbTitle = 'ปฏิทินกิจกรรม';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/11.jpg';
    include('component/breadcrumb.php');
  ?>

  <?php 
    $news01 = [
      ['image' => 'public/assets/app/images/content/02.jpg'], 
      ['image' => 'public/assets/app/images/content/01.jpg']
    ]
  ?>

  <?php 
    $news03 = [
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
        'image' => 'public/assets/app/images/content/67.jpg',
        'style' => ''
      ],
    ]
  ?>

  <section class="section-padding">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ปฏิทินกิจกรรม
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="0">
        <?php include('component/list-header-calendar-style-02.php'); ?>
      </div>
      <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($news03 as $d) {?>
          <div class="grid lg-100 md-50 sm-100">
            <a class="ss-card ss-card-20" href="#">
              <div class="wrapper">
                <div class="img-container">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                    <div class="card-line style-01"></div>
                    <div class="filter style-02">
                      <div class="wrapper">
                        <div class="icon sm">
                          <img src="public/assets/app/images/icon/51.png" alt="Icon">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="date">
                  <div class="wrapper <?= $d['style']?>">
                    <?php 
                      if($d['style'] === 'style-02'){
                        echo '<p class="xxs day fw-400">18 ก.พ. 66</p>';
                        echo '<p class="xxs month fw-400">19 ก.พ. 66</p>';
                      }else{
                        echo '<p class="day fw-400">20</p>';
                        echo '<p class="xs month">ก.ย.65</p>';
                      }
                    ?>
                  </div>
                </div>
                <div class="text-container">
                  <div class="content">
                    <div class="text">
                      <p class="title fw-600 mt-1">
                        ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                        ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                        ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                        ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                      </p>
                      <div class="card-bottom mt-1">
                        <div class="wrapper">
                          <div class="icon">
                            <em class="fa-solid fa-calendar-days"></em>
                            <span class="p sm ml-2 fw-500">วันที่ 18 กุมภาพันธ์ 2566</span>
                          </div>
                          <div class="icon">
                            <em class="fa-solid fa-clock"></em>
                            <span class="p sm ml-2 fw-500">เวลา 12:50 - 13:50</span>
                          </div>
                          <div class="icon">
                            <em class="fa-solid fa-location-dot"></em>
                            <span class="p sm ml-2 fw-500">สำนักงานกลางคณะกรรมการการเลือกตั้ง</span>
                          </div>
                          <?php 
                            if($d['style'] === 'style-02'){
                              echo 
                                '<div class="icon ai-center d-block mt-1">
                                  <em class="fa-solid fa-calendar-days"></em>
                                  <span class="p sm ml-1 fw-500">ถึงวันที่ 19 กุมภาพันธ์ 2566</span>
                                </div>';
                            }
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="info-content">
                      <div class="icon">
                        <em class="fa-solid fa-eye color-02"></em>
                        <span class="p sm fw-400 ml-2">ชม 255 ครั้ง</span>
                      </div>
                      <div class="icon">
                        <em class="fa-solid fa-share-nodes color-02"></em>
                        <span class="p sm fw-400 ml-2">แชร์ 208 ครั้ง</span>
                      </div>
                    </div>
                  </div>
                  <div class="btns">
                    <div class="btn btn-action-style-06">
                      <span>อ่านเพิ่มเติม</span><div class="sep"></div>
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php }?>
      </div>
      <div class="mt-6 pt-4" data-aos="fade-up" data-aos-delay="0">
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