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
      [ 'url' => '#', 'display' => 'ศูนย์รับเรื่องร้องเรียน' ],
    ];
    $breadcrumbTitle = 'ศูนย์รับเรื่องร้องเรียน';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/40.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
          <div class="body">
            <div class="ss-title">
              <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
                ศูนย์รับเรื่องร้องเรียน
              </h3>
            </div>
            <div class="ss-card ss-card-30 style-02 mt-4" data-aos="fade-up" data-aos-delay="150">
              <div class="wrapper">
                <div class="img-container">
                  <div class="ss-img no-hover">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/90.jpg')"></div>
                  </div>
                </div>
                <div class="text-container color-black-theme">
                  <p class="fw-400">
                    สำนักงานคณะกรรมการการเลือกตั้ง จัดทำศูนย์ร้องเรียนขึ้นเพื่อมีไว้สำหรับผู้ที่มีความเดือดร้อน 
                    หรือผู้ที่ต้องการสอบถามปัญหาต่างๆ ของสำนักงานคณะกรรมการการเลือกตั้ง ได้เสนอเรื่องหรือข้อร้องเรียน 
                    ให้ทางสำนักงานฯ รับทราบและนำไปดำเนินการแก้ไข ซึ่งข้อร้องเรียนบางเรื่องอาจไม่อยู่ในความรับผิดชอบของสำนักงานฯ 
                    ดังนั้น เพื่อให้เรื่องของท่านถึงผู้รับผิดชอบโดยตรงและรวดเร็ว ท่านควรตรวจสอบก่อน และร้องเรียนโดยตรงได้ที่
                  </p>
                  <ul class="list-style-01">
                    <li class="fw-400">
                      ส่งเรื่องร้องเรียนผ่านทาง E-mail มาที่<a class="color-02 border-bottom title-theme bcolor-theme bcolor-02 ml-1" href="#">help@ect.go.th</a>
                      <em class="fa-solid fa-arrow-up-right-from-square ml-2"></em>
                    </li>
                    <li class="fw-400 mt-2">หรือสามารถแจ้งผ่านแบบฟอร์มด้านล่าง (ควรเป็นเรื่องที่เปิดเผยต่อสาธารณชนได้)</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- FORM -->
            <div class="form-container-01 box-shadow style-02" data-aos="fade-up" data-aos-delay="300">
              <div class="grids">
                <div class="grid xl-50 lg-1-3 md-40 sm-100 mt-0">
                  <h3 class="color-black-theme fw-600">แบบฟอร์มรับเรื่อง</h3>
                  <p class="color-black-theme color-16 fw-400">
                    กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย
                    <span class="text-danger fw-400 ml-1">*</span>
                  </p>
                </div>
                <div class="grid xl-50 lg-2-3 md-60 sm-100 mt-0">
                  <form class="form style-02" action="action.php" method="post">
                    <div class="grids">
                      <div class="grid sm-50 mt-0">
                        <div class="form-group">
                          <div class="form-input">
                            <input class="style-02 size-01" type="text" placeholder="ชื่อ*" required>
                          </div>
                        </div>
                        <label class="text-danger style-02">กรุณากรอกชื่อ</label>
                      </div>
                      <div class="grid sm-50 mt-0">
                        <div class="form-group">
                          <div class="form-input">
                            <input class="style-02 size-01" type="text" placeholder="นามสกุล*" required>
                          </div>
                        </div>
                        <label class="text-danger style-02">กรุณากรอกนามสกุล</label>
                      </div>
                      <div class="grid sm-100 mt-2">
                        <div class="form-group">
                          <div class="form-input">
                            <input class="style-02 size-01" type="text" placeholder="หมายเลขติดต่อ*" required>
                          </div>
                        </div>
                        <label class="text-danger style-02">กรุณากรอกหมายเลขติดต่อเป็นตัวเลข</label>
                      </div>
                      <div class="grid sm-100 mt-2">
                        <div class="form-group">
                          <div class="form-input">
                            <input class="style-02 size-01" type="email" placeholder="อีเมล*" required>
                          </div>
                        </div>
                        <label class="text-danger style-02">กรุณากรอกอีเมล</label>
                      </div>
                      <div class="grid sm-100 mt-4">
                        <div class="option cate">
                          <select class="color-gray ui dropdown bg-style-02" required>
                            <option value="">เลือกหัวข้อ*</option>
                            <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                            <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                            <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                          </select>
                          <div class="dropdown-icon style-02">
                            <em class="fa-solid fa-chevron-down"></em>
                          </div>
                        </div>
                        <label class="text-danger style-02">กรุณาเลือกหัวข้อที่ต้องการติดต่อ</label>
                      </div>
                      <div class="grid sm-100 mt-2">
                        <div class="form-group">
                          <textarea class="style-02" name="message" rows="10" class="form-control" 
                          required="" title="General Textarea" placeholder="พิมพ์ข้อความ*"></textarea>
                        </div>
                      </div>
                      <div class="grid sm-100 mt-2">
                        <div class="ss-card ss-card-68">
                          <div class="top">
                            <div class="wrapper">
                              <div class="item">
                                <div class="icon">
                                  <em class="fa-solid fa-arrow-up-from-bracket"></em>
                                </div>
                                <p class="color-black-theme fw-500 ml-2">ลากไฟล์และวางลงที่นี้</p>
                              </div>
                              <div class="item">
                                <div class="ss-sep-01 style-02">
                                  <p class="color-black-theme fw-500">หรือ</p>
                                </div>
                              </div>
                              <div class="item">
                                <div class="btns jc-end">
                                  <div class="btn style-03 btn-action btn-36 theme-bg-02 size-03 black-theme pos-relative">
                                    เลือกไฟล์
                                    <input type="file" class="file-upload" />
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="footer mt-2">
                            <p class="sm color-black-theme fw-400">ประเภทไฟล์ที่รองรับ PDF, JPG, JPEG, PNG, GIF ขนาดไม่เกิน 5 MB</p>
                          </div>
                        </div>
                      </div>
                      <div class="grid sm-100">
                        <div class="ss-card ss-card-32 mini-site">
                          <div class="wrapper box-shadow style-02">
                            <div class="icon">
                              <img src="public/assets/app/images/file/svg/pdf.svg" alt="Image File" />
                            </div>
                            <div class="text-container">
                              <p class="title lh-sm fw-500">
                                ประกวดราคาซื้อวัสดุสำนักงาน จำนวน 90 รายการ ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)
                              </p>
                              <div class="x-mark">
                                <em class="fa-solid fa-xmark"></em>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="grid lg-50 md-100 sm-100 mt-5">
                        <div class="captcha">
                          <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="CAPTCHA">
                          <label class="text-danger style-02">กรุณายืนยันตัวตน</label>
                        </div>
                      </div>
                      <div class="grid d-flex ai-center lg-50 md-100 sm-100 mt-0">
                        <div class="grids no-gap">
                          <div class="grid sm-50 xs-50 mt-0">
                            <div class="pr-1">
                              <button type="submit" class="btn btn-popup-toggle black-theme btn-action width-full mw-auto btn-36 theme-bg-02" data-popup="99">
                                ส่งข้อความ
                              </button>
                            </div>
                          </div>
                          <div class="grid sm-50 xs-50 mt-0">
                            <button type="cancel" href="#" class="btn black-theme btn-action width-full mw-auto btn-37">
                              ยกเลิก
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
        </div> 
      </div>
    </div>
  </section>

  <?php
    $listResult= ['contact'];
    include_once('component/popup-file-error-style-02.php');
  ?>
  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
  <script>
    document.getElementById("uploadBtn").onchange = function () {
      document.getElementById("uploadFile").value = this.value.replace("C:\\fakepath\\", "");
    };
  </script>
</body>
</html>