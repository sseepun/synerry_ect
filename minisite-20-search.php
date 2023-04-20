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
      [ 'url' => '#', 'display' => 'เว็บลิงก์' ],
    ];
    $breadcrumbTitle = 'เว็บลิงก์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/37.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

<?php 
    $informations = [
      [
        'image' => 'public/assets/app/images/content/02.jpg',
        'cate' => 'ข่าวประชาสัมพันธ์',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/27.jpg',
        'cate' => 'หนังสืออิเล็กทรอนิกส์',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/28.jpg',
        'cate' => 'วิดีโอ',
        'type' => 'video'
      ], [
        'image' => 'public/assets/app/images/content/29.jpg',
        'cate' => 'เอกสารดาวน์โหลด',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/32.jpg',
        'cate' => 'เอกสารดาวน์โหลด',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/30.jpg',
        'cate' => 'เอกสารดาวน์โหลด',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/31.jpg',
        'cate' => 'เอกสารดาวน์โหลด',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/02.jpg',
        'cate' => 'คลังภาพ',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/33.jpg',
        'cate' => 'สื่อประชาสัมพันธ์',
        'type' => 'ebook'
      ], [
        'image' => 'public/assets/app/images/content/34.jpg',
        'cate' => 'ถาม-ตอบ',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/35.jpg',
        'cate' => 'เนื้อหาเว็บไซต์',
        'type' => ''
      ]
    ]
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body">
        <div class="grids">
        <div class="grid xl-25 lg-30 md-30 sm-100">
          <div class="search-container box-shadow style-02" data-aos="fade-up" data-aos-delay="0">
            <form class="form" action="action.php" method="get">
              <div class="form-group mt-3">
                <h6 class="color-02 fw-500">ตัวกรองชั้นสูง</h6>
                <p class="color-02 fw-400 mt-3 mb-1">ประเภทข้อมูล</p>     
                <label class="form-check style-03 ai-center form-check-container-03">
                  <input type="checkbox" id="c_0" class="form-check-input" onclick="myFunction()"/>
                  <span class="checkmark"></span>
                  <p class="ml-3 fw-400">ข่าวประชาสัมพันธ์</p>
                </label>
                <label class="form-check style-03 ai-center form-check-container-03">
                  <input type="checkbox" id="c_1" class="form-check-input"/>
                  <span class="checkmark"></span>
                  <p class="ml-3 fw-400">คลังภาพ</p>
                </label>
                <label class="form-check style-03 ai-center form-check-container-03">
                  <input type="checkbox" id="c_2" class="form-check-input"/>
                  <span class="checkmark"></span>
                  <p class="ml-3 fw-400">วิดีโอ</p>
                </label>
                <label class="form-check style-03 ai-center form-check-container-03">
                  <input type="checkbox" id="c_3" class="form-check-input"/>
                  <span class="checkmark"></span>
                  <p class="ml-3 fw-400">หนังสืออิเล็กทรอนิกส์</p>
                </label>
                <label class="form-check style-03 ai-center form-check-container-03">
                  <input type="checkbox" id="c_4" class="form-check-input"/>
                  <span class="checkmark"></span>
                  <p class="ml-3 fw-400">เอกสารดาวน์โหลด</p>
                </label>
                <label class="form-check style-03 ai-center form-check-container-03">
                  <input type="checkbox" id="c_5" class="form-check-input"/>
                  <span class="checkmark"></span>
                  <p class="ml-3 fw-400">ประกาศรับสมัครงาน</p>
                </label>
                <label class="form-check style-03 ai-center form-check-container-03">
                  <input type="checkbox" id="c_6" class="form-check-input"/>
                  <span class="checkmark"></span>
                  <p class="ml-3 fw-400">ถาม-ตอบ</p>
                </label>
                <label class="form-check style-03 ai-center form-check-container-03">
                  <input type="checkbox" id="c_7" class="form-check-input"/>
                  <span class="checkmark"></span>
                  <p class="ml-3 fw-400">เนื้อหาเว็บไซต์</p>
                </label>
                <label class="form-check style-03 ai-center form-check-container-03">
                  <input type="checkbox" id="c_8" class="form-check-input"/>
                  <span class="checkmark"></span>
                  <p class="ml-3 fw-400">ทั้งหมด</p>
                </label>
                <div class="form-group">
                  <h6 class="color-02 fw-400 mt-3">ช่วงระยะเวลา</h6>
                  <p class="fw-400">จาก</p>
                  <div class="date-wrapper">
                    <input type="text" class="date-picker form-control">
                  </div>
                  <p class="fw-400">ถึง</p>
                  <div class="date-wrapper">
                    <input type="text" class="date-picker form-control">
                  </div>
                </div>
                <div class="form-group mt-3">
                  <h6 class="color-02 fw-400">การเรียงลำดับ</h6>
                  <fieldset>
                    <div class="gallery-grids">
                      <div class="grid sm-100">
                        <div class="checkbox-set">
                          <input type="radio" name="radio" id="radio_0" checked="">
                          <label for="radio_0" class="p sm">
                            <span>จากเก่าไปล่าสุด</span>
                          </label>
                        </div>
                      </div>
                      <div class="grid sm-100">
                        <div class="checkbox-set">
                          <input type="radio" name="radio" id="radio_1">
                          <label for="radio_1" class="p sm">
                            <span>จากล่าสุดไปเก่า</span>
                          </label>
                        </div>
                      </div>
                      <div class="grid sm-100">
                        <div class="checkbox-set">
                          <input type="radio" name="radio" id="radio_2">
                          <label for="radio_2" class="p sm">
                            <span>ยอดดูมากที่สุด</span>
                          </label>
                        </div>
                      </div>
                      <div class="grid sm-50">
                        <div href="#" class="btn btn-action mw-auto btn-02">
                          ค้นหาขั้นสูง
                        </div>
                      </div>
                      <div class="grid sm-50">
                        <div href="#" class="btn btn-action mw-auto btn-03">
                          ล้างข้อมูลใหม่
                        </div>
                      </div>
                    </div>
                  </fieldset>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="grid xl-75 lg-70 md-70 sm-100">
          <form class="form">
            <div class="ui icon input">
              <input class="size-02 bg-gray" id="search" type="search" placeholder="ค้นหา">
              <em class="icon size-02 style-02 fa-solid fa-magnifying-glass"></em>
            </div>
          </form>
          <div class="mt-2" data-aos="fade-up" data-aos-delay="150">
            <span class="fw-400">ผลการค้นหา <span class="h5 color-02 fw-600">"การเลือกตั้ง"</span>
            <span>ค้นพบ <span class="color-02 fw-600">200</span> รายการ</span></span>
          </div>
          <?php foreach($informations as $d) {?>
            <div class="ss-card ss-card-66 mt-6" data-aos="fade-up" data-aos-delay="300">
              <div class="wrapper">
                <div class="img-container">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                    <div class="card-line style-01"></div>
                    <div class="filter style-02 bgcolor-02">
                      <div class="wrapper">
                        <div class="btn btn-action style-05 btn-24">
                          <em class="fa-solid fa-arrow-right"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="text-container">
                  <div class="text-content">
                    <p class="title lh-sm fw-400">
                      กรรมการการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางการแก้ไขปัญหาในการปฏิบัติงาน
                      ให้แก่พนักงานในการอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ
                    </p>
                    
                  </div>
                  <div class="info-content">
                    <p class="color-02 fw-500">ประเภท</p>
                    <p class="fw-500"><?= $d['cate']?></p>
                    <div class="icon mt-2">
                      <em class="fa-solid fa-calendar-days"></em>
                      <span class="p sm fw-400 ml-2">08 มิถุนายน 2565</span>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-share-nodes"></em>
                      <span class="p sm fw-400 ml-2">208</span>
                    </div>
                  </div>
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

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>