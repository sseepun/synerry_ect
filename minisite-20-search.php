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
      [ 'url' => '#', 'display' => 'ผลการค้นหา' ],
    ];
    $breadcrumbTitle = 'ผลการค้นหา';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/37.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

<?php 
    $informations = [
      [
        'image' => 'public/assets/app/images/content/02.jpg',
        'cate' => 'ข่าวประชาสัมพันธ์',
        'title' => 'กรรมการการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางการแก้ไขปัญหาในการปฏิบัติงานให้แก่พนักงาน
                    ในการอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/27.jpg',
        'cate' => 'หนังสืออิเล็กทรอนิกส์',
        'title' => 'กรรมการการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางการแก้ไขปัญหาในการปฏิบัติงานให้แก่พนักงาน
                    ในการอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/16.jpg',
        'cate' => 'คลังภาพ',
        'title' => 'ดร.ฐิติเชฏฐ์ นุชนาฏ กรรมการการเลือกตั้ง ตรวจเยี่ยมและสังเกตการณ์การเลือกตั้งกรุงเทพมหานคร',
        'type' => 'photo'
      ], [
        'image' => 'public/assets/app/images/content/38.jpg',
        'cate' => 'วิดีโอ',
        'title' => 'รายการ กกต. ขอบอก EP 14: "การแจ้ง เหตุที่ไม่ไปใช้สิทธิเลือกตั้งกรุงเทพ',
        'type' => 'video'
      ], [
        'image' => 'public/assets/app/images/content/32.jpg',
        'cate' => 'เอกสารดาวน์โหลด',
        'title' => 'ประกวดราคาจ้างผลิตสื่อสิ่งพิมพ์ประกอบการ
        เสริมสร้างความรู้ความเข้าใจที่ถูกต้องเกี่ยวกับการปกครองในระบอบประชาธิปไตย จำนวน 4 รายการ ด้วย',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/30.jpg',
        'cate' => 'เอกสารดาวน์โหลด',
        'title' => 'ประกาศผลผู้ที่ได้รับการคัดเลือกการจ้างซ่อมถังต้มน้ำไฟฟ้า ยี่ห้อ หัวม้าลาย รุ่น ADVANCE lll 
        หมายเลขครุภัณฑ์ กกต. 0208-10-2563 โดยวิธีเฉพาะเจาะจง',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/31.jpg',
        'cate' => 'เอกสารดาวน์โหลด',
        'title' => 'ประกาศผลผู้ที่ได้รับการคัดเลือกการจ้างซ่อมถังต้มน้ำไฟฟ้า ยี่ห้อ หัวม้าลาย รุ่น ADVANCE lll 
        หมายเลขครุภัณฑ์ กกต. 0208-10-2563 โดยวิธีเฉพาะเจาะจง',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/02.jpg',
        'cate' => 'คลังภาพ',
        'title' => 'ประกาศผลผู้ที่ได้รับการคัดเลือกการจ้างซ่อมถังต้มน้ำไฟฟ้า ยี่ห้อ หัวม้าลาย รุ่น ADVANCE lll 
        หมายเลขครุภัณฑ์ กกต. 0208-10-2563 โดยวิธีเฉพาะเจาะจง',
        'type' => 'photo'
      ], [
        'image' => 'public/assets/app/images/content/33.jpg',
        'cate' => 'หนังสืออิเล็กทรอนิกส์',
        'title' => 'หนังสือกฎหมาย ระเบียบ คู่มือการปฏิบัติงาน และแบบพิมพ์ต่างๆ เกี่ยวกับการสืบสวนและไต่สวน 
        การเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น',
        'type' => 'ebook'
      ], [
        'image' => 'public/assets/app/images/content/34.jpg',
        'cate' => 'ถาม-ตอบ',
        'title' => 'การปฏิบัติงานคณะกรรมการประจำหน่วยเลือกตั้งในการเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น',
        'type' => ''
      ],[
        'image' => 'public/assets/app/images/content/35.jpg',
        'cate' => 'เนื้อหาเว็บไซต์',
        'title' => 'สำนักงานคณะกรรมการการเลือกตั้งมีฐานะเป็นนิติบุคคลและอยู่ภายใต้การบังคับบัญชา กำกับดูแลและรับผิดชอบ',
        'type' => ''
      ], [
        'image' => 'public/assets/app/images/content/33.jpg',
        'cate' => 'หนังสืออิเล็กทรอนิกส์',
        'title' => 'หนังสือกฎหมาย ระเบียบ คู่มือการปฏิบัติงาน และแบบพิมพ์ต่างๆ เกี่ยวกับการสืบสวนและไต่สวน 
        การเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น',
        'type' => 'ebook'
      ],
    ]
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body">
          <div class="grids">
            <div class="grid xl-25 lg-30 md-40 sm-100">
              <div class="search-container box-shadow style-02" data-aos="fade-up" data-aos-delay="0">
                <form class="form" action="action.php" method="get">
                  <div class="form-group mt-3">
                    <h6 class="color-02 color-black-theme fw-500">ตัวกรองชั้นสูง</h6>
                    <p class="color-02 color-black-theme fw-400 mt-3 mb-1">ประเภทข้อมูล</p>  
                    <div class="pl-3">
                      <label class="form-check style-03 ai-center form-check-container-03 black-theme theme-02">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark"></span>
                        <p class="ml-3 fw-400">ข่าวประชาสัมพันธ์</p>
                      </label>
                      <label class="form-check style-03 ai-center form-check-container-03 black-theme theme-02">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark"></span>
                        <p class="ml-3 fw-400">คลังภาพ</p>
                      </label>
                      <label class="form-check style-03 ai-center form-check-container-03 black-theme theme-02">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark"></span>
                        <p class="ml-3 fw-400">วิดีโอ</p>
                      </label>
                      <label class="form-check style-03 ai-center form-check-container-03 black-theme theme-02">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark"></span>
                        <p class="ml-3 fw-400">หนังสืออิเล็กทรอนิกส์</p>
                      </label>
                      <label class="form-check style-03 ai-center form-check-container-03 black-theme theme-02">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark"></span>
                        <p class="ml-3 fw-400">เอกสารดาวน์โหลด</p>
                      </label>
                      <label class="form-check style-03 ai-center form-check-container-03 black-theme theme-02">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark"></span>
                        <p class="ml-3 fw-400">ประกาศรับสมัครงาน</p>
                      </label>
                      <label class="form-check style-03 ai-center form-check-container-03 black-theme theme-02">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark"></span>
                        <p class="ml-3 fw-400">ถาม-ตอบ</p>
                      </label>
                      <label class="form-check style-03 ai-center form-check-container-03 black-theme theme-02">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark"></span>
                        <p class="ml-3 fw-400">เนื้อหาเว็บไซต์</p>
                      </label>
                      <label class="form-check style-03 ai-center form-check-container-03 black-theme theme-02">
                        <input type="checkbox" class="form-check-input"/>
                        <span class="checkmark"></span>
                        <p class="ml-3 fw-400">ทั้งหมด</p>
                      </label>
                    </div>   
                    <div class="form-group">
                      <h6 class="color-02 color-black-theme fw-400 mt-3">ช่วงระยะเวลา</h6>
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
                      <h6 class="color-02 color-black-theme fw-400">การเรียงลำดับ</h6>
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
                          <div class="grid sm-100">
                            <div class="btns">
                              <a href="#" class="btn btn-action black-theme mw-auto btn-36">
                                ค้นหาขั้นสูง
                              </a>
                              <a href="#" class="btn btn-action mw-auto black-theme btn-37">
                                ล้างข้อมูลใหม่
                              </a>
                            </div> 
                          </div>
                        </div>
                      </fieldset>
                    </div>
                  </div>
                </form>
              </div>
              <div class="popular-search-container box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
                <p class="h5 fw-600 color-black-theme">คำค้นหายอดนิยม</p>
                  <div class="mt-1">
                    <div class="ss-tags style-03">
                      <div class="tag">
                        <span class="title">ข่าวประกาศ</span>
                      </div>
                    </div>
                    <div class="ss-tags style-03">
                      <div class="tag">
                        <span class="title">อบรมหลักสูตร</span>
                      </div>
                    </div>
                    <div class="ss-tags style-03">
                      <div class="tag">
                        <span class="title">การเลือกตั้ง</span>
                      </div>
                    </div>
                    <div class="ss-tags style-03">
                      <div class="tag">
                        <span class="title">รายงานจัดซื้อจัดจ้าง</span>
                      </div>
                    </div>
                    <div class="ss-tags style-03">
                      <div class="tag">
                        <span class="title">ระดับชำนาญการพิเศษ</span>
                      </div>
                    </div>
                  </div>
              </div>
            </div>
            <div class="grid xl-75 lg-70 md-60 sm-100">
              <form class="form search" data-aos="fade-up" data-aos-delay="0">
                <div class="ui icon input">
                  <input class="size-02 bg-gray" id="search" type="search" placeholder="ค้นหา">
                  <em class="icon size-02 style-03 fa-solid fa-magnifying-glass"></em>
                </div>
              </form>
              <div class="mt-2" data-aos="fade-up" data-aos-delay="150">
                <span class="fw-400">ผลการค้นหา <span class="h5 color-04 color-black-theme fw-600">"การเลือกตั้ง"</span>
                <span>ค้นพบ <span class="color-04 color-black-theme fw-600">200</span> รายการ</span></span>
              </div>
              <?php foreach($informations as $d) {?>
                <div class="ss-card ss-card-66 color-black-theme mt-6" data-aos="fade-up" data-aos-delay="300">
                  <div class="wrapper">
                    <div class="img-container">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                        <div class="filter-04"></div>
                        <div class="btn-scale">
                          <div class="btn btn-action style-06 sm btn-27">
                            <em class="fa-solid fa-arrow-right"></em>
                          </div>
                        </div>
                        <?php if($d['type'] === 'video') {?>
                          <div class="btn-video sm">
                            <div class="img-container">
                              <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                            </div>
                          </div>
                        <?php } ?>
                        <?php if($d['type'] === 'photo') {?>
                          <div class="number-of-picture">
                            <em class="fa-solid fa-images"></em>
                            <span class="number">15</span>
                          </div>
                        <?php }?>
                      </div>
                    </div>
                    <div class="text-container">
                      <div class="text-content">
                        <p class="title lh-sm fw-400">
                          กรรมการการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางการแก้ไขปัญหาในการปฏิบัติงาน
                          ให้แก่พนักงานในการอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ
                        </p>
                        <div class="link-footer c-btn c-btn--animate-left-right">
                          <div class="c-wrapper">
                            <span class="text color-05 fw-500 color-black-theme bcolor-black-theme border-bottom bcolor-05 lh-sm">อ่านเพิ่ม</span>
                            <span class="c-icon pl-2">
                              <em class="fa-solid fa-arrow-right"></em>
                            </span>
                          </div>
                        </div>
                      </div>
                      <div class="info-content">
                        <p class="fw-500">ประเภท</p>
                        <p class="fw-500"><?= $d['cate']?></p>
                        <div class="icon mt-2">
                          <em class="fa-solid fa-calendar-days"></em>
                          <span class="p sm fw-300 ml-2">08 มิถุนายน 2565</span>
                        </div>
                        <div class="icon">
                          <em class="fa-solid fa-eye"></em>
                          <span class="p sm fw-300 ml-2">208</span>
                        </div>
                      </div>
                      <div class="card-line style-03"></div>
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
</body>
</html>