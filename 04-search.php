<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
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
        'cate' => 'ข่าวประชาสัมพันธ์'
      ], [
        'image' => 'public/assets/app/images/content/27.jpg',
        'cate' => 'หนังสืออิเล็กทรอนิกส์'
      ], [
        'image' => 'public/assets/app/images/content/28.jpg',
        'cate' => 'คลังภาพ'
      ], [
        'image' => 'public/assets/app/images/content/29.jpg',
        'cate' => 'เอกสารดาวน์โหลด'
      ], [
        'image' => 'public/assets/app/images/content/32.jpg',
        'cate' => 'เอกสารดาวน์โหลด'
      ], [
        'image' => 'public/assets/app/images/content/30.jpg',
        'cate' => 'เอกสารดาวน์โหลด'
      ], [
        'image' => 'public/assets/app/images/content/31.jpg',
        'cate' => 'เอกสารดาวน์โหลด'
      ], [
        'image' => 'public/assets/app/images/content/02.jpg',
        'cate' => 'คลังภาพ'
      ], [
        'image' => 'public/assets/app/images/content/33.jpg',
        'cate' => 'สื่อประชาสัมพันธ์'
      ], [
        'image' => 'public/assets/app/images/content/34.jpg',
        'cate' => 'ถาม-ตอบ'
      ], [
        'image' => 'public/assets/app/images/content/35.jpg',
        'cate' => 'เนื้อหาเว็บไซต์'
      ]
    ]
  ?>

  <div class="section-padding">
    <div class="container">
      <div class="grids">
        <!-- Left Content -->
        <div class="grid xl-75 lg-70 md-100 sm-100">
          <h3 class="fw-600" data-aos="fade-up" data-aos-delay="0">
            ผลการค้นหา
          </h3>
          <div data-aos="fade-up" data-aos-delay="150">
            <p>ผลการค้นหา <span class="h5 color-02 fw-600">"การเลือกตั้ง"</span></p>
            <p>ค้นพบ <span class="color-02 fw-500">200</span> รายการ</p>
          </div>
          <?php foreach($informations as $d) {?>
            <div class="ss-card ss-card-15 mt-6" data-aos="fade-up" data-aos-delay="300">
              <div class="wrapper">
                <div class="img-container">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                    <div class="filter-01"></div>
                  </div>
                </div>
                <div class="text-container">
                  <div class="text-content">
                    <p class="title lh-sm fw-400">
                      กรรมการการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางการแก้ไขปัญหาในการปฏิบัติงาน
                      ให้แก่พนักงานในการอบรมหลักสูตรการปฏิบัติงานระดับชำนาญการพิเศษ
                    </p>
                    <div class="btns mt-3" data-aos="fade-up" data-aos-delay="450">
                      <div href="#" class="btn btn-action btn-02">
                        <em class="icon fa-solid fa-arrow-right"></em>
                        อ่านเพิ่มเติม
                      </div>
                    </div>
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
        <div class="grid xl-25 lg-30 md-100 sm-100">
          <div class="search-container box-shadow style-02" data-aos="fade-up" data-aos-delay="0">
            <p class="color-02 fw-400">ค้นหา</p>
            <form class="form" action="action.php" method="get">
              <div class="ui icon input">
                <input id="search" type="search" placeholder="ค้นหา">
                <em class="icon fa-solid fa-magnifying-glass"></em>
              </div>
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
            </form>
          </div>

          <div class="popular-search-container box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
            <p class="h6 fw-600 color-black-theme">คำค้นหายอดนิยม</p>
            <div class="mt-1">
              <div class="ss-tags">
                <div class="tag">ข่าวประกาศ</div>
              </div>
              <div class="ss-tags">
                <div class="tag">อบรมหลักสูตร</div>
              </div>
              <div class="ss-tags">
                <div class="tag">การเลือกตั้ง</div>
              </div>
              <div class="ss-tags">
                <div class="tag">รายงานการจัดซื้อจัดจ้าง</div>
              </div>
              <div class="ss-tags">
                <div class="tag">ระดับชำนาญการพิเศษ</div>
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
  </div>
  
  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    function myFunction() {
      var checkBox = document.getElementById("c_0");
      if(checkBox.checked == true){
        console.log('ใช้งานได้ :)');
      }else{
        console.log('');
      }
    }
  </script>
</body>
</html>