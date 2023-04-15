<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>
  
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ผลการค้นหา' ],
    ];
    $breadcrumbTitle = 'ผลการค้นหา';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/03.jpg';
    include('component/breadcrumb.php');
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

  <section class="section-padding">
    <div class="container">
      <div class="grids">
        <div class="grid xl-25 lg-30 md-40 sm-100">
          <div class="search-container box-shadow style-02" data-aos="fade-up" data-aos-delay="0">
            <form class="form" action="action.php" method="get">
              <div class="form-group mt-3">
                <h6 class="color-02 fw-500">ตัวกรองชั้นสูง</h6>
                <p class="color-02 fw-400 mt-3 mb-1">ประเภทข้อมูล</p>    
                <div class="pl-3">
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
                </div> 
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
                        <div class="pl-3">
                          <div class="rc-container style-04">
                            <input type="radio" id="poll_0" name="poll" value="0">
                            <label class="fw-400" for="poll_0">จากเก่าไปล่าสุด</label>
                          </div>
                        </div>
                      </div>
                      <div class="grid sm-100">
                        <div class="pl-3">
                          <div class="rc-container style-04">
                            <input type="radio" id="poll_1" name="poll" value="1">
                            <label class="fw-400" for="poll_1">จากล่าสุดไปเก่า</label>
                          </div>
                        </div>
                      </div>
                      <div class="grid sm-100">
                        <div class="pl-3">
                          <div class="rc-container style-04">
                            <input type="radio" id="poll_2" name="poll" value="2">
                            <label class="fw-400" for="poll_2">ยอดดูมากที่สุด</label>
                          </div>
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
                <div class="popular-search-container box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
                  <p class="h5 fw-600 color-black-theme">คำค้นหายอดนิยม</p>
                  <div class="mt-1">
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">ข่าวประกาศ</span>
                      </div>
                    </div>
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">อบรมหลักสูตร</span>
                      </div>
                    </div>
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">การเลือกตั้ง</span>
                      </div>
                    </div>
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">รายงานจัดซื้อจัดจ้าง</span>
                      </div>
                    </div>
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">ระดับชำนาญการพิเศษ</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
        <div class="grid xl-75 lg-70 md-60 sm-100">
          <form class="form style-05" data-aos="fade-up" data-aos-delay="0">
            <div class="ui icon input">
              <input class="size-02 bg-gray" id="search" type="search" placeholder="ค้นหา">
              <em class="icon size-02 style-02 fa-solid fa-magnifying-glass"></em>
            </div>
          </form>
          <div class="mt-2" data-aos="fade-up" data-aos-delay="150">
            <span class="fw-400">ผลการค้นหา <span class="h5 color-02 fw-600">"การเลือกตั้ง"</span>
            <span>ค้นพบ <span class="color-02 fw-600">0</span> รายการ</span></span>
            <div class="content-found">
              <div class="wrapper">
                <div class="icon">
                <em class="fa-solid fa-circle-xmark"></em>
                </div>
                <p class="h6 fw-400">ไม่พบเนื้อหาจากคำค้นหา <span class="h5 color-04 fw-600">"การเลือกตั้ง"</span></p>
              </div>
              <div class="mt-1">
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">ข่าวประกาศ</span>
                      </div>
                    </div>
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">อบรมหลักสูตร</span>
                      </div>
                    </div>
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">การเลือกตั้ง</span>
                      </div>
                    </div>
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">รายงานจัดซื้อจัดจ้าง</span>
                      </div>
                    </div>
                    <div class="ss-tags style-02">
                      <div class="tag">
                        <span class="title">ระดับชำนาญการพิเศษ</span>
                      </div>
                    </div>
                  </div>
          
            </div>
          </div>
        </div> 
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