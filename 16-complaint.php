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
      [ 'url' => '#', 'display' => 'ศูนย์รับเรื่องร้องเรียน' ],
    ];
    $breadcrumbTitle = 'ศูนย์รับเรื่องร้องเรียน';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/13.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-13" style="background-image:url('public/assets/app/images/bg/25.jpg')">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ศูนย์รับเรื่องร้องเรียน
      </h3>
      <div class="ss-card ss-card-30 mt-4" data-aos="fade-up" data-aos-delay="150">
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
                ส่งเรื่องร้องเรียนผ่านทาง E-mail มาที่<a class="color-02 border-bottom bcolor-02 ml-1" href="#">help@ect.go.th</a>
                <em class="fa-solid fa-arrow-up-right-from-square ml-2"></em>
              </li>
              <li class="fw-400 mt-2">หรือสามารถแจ้งผ่านแบบฟอร์มด้านล่าง (ควรเป็นเรื่องที่เปิดเผยต่อสาธารณชนได้)</li>
            </ul>
          </div>
        </div>
      </div>
      <!-- FORM -->
      <div class="form-container-01 bg-white-theme-02 box-shadow style-02" data-aos="fade-up" data-aos-delay="300">
        <div class="grids">
          <div class="grid xl-50 lg-1-3 md-40 sm-100 mt-0">
            <h4 class="color-black-theme fw-500">แบบฟอร์มรับเรื่อง</h4>
            <p class="color-black-theme">กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย<span class="text-danger fw-400 ml-1">*</span></p>
            <div class="img-container">
              <img src="public/assets/app/images/content/02.png" alt="Message">
            </div>
          </div>
          <div class="grid xl-50 lg-2-3 md-60 sm-100 mt-0">
            <form action="action.php" method="post">
              <div class="grids">
                <div class="grid sm-50 mt-0">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="text" placeholder="ชื่อ*" required>
                    </div>
                  </div>
                </div>
                <div class="grid sm-50 mt-0">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="text" placeholder="นามสกุล*" required>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="text" placeholder="หมายเลขติดต่อ*" required>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="text" placeholder="อีเมล*" required>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-4">
                  <div class="option cate">
                    <select class="ui dropdown bg-style-02" required>
                      <option value="">เลือกหัวข้อที่ต้องการแจ้ง*</option>
                      <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                      <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                      <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                    </select>
                    <div class="dropdown-icon">
                      <em class="fa-solid fa-chevron-down"></em>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group">
                    <textarea class="style-02" name="message" rows="10" class="form-control" 
                    required="" title="General Textarea" placeholder="พิมพ์ข้อความ*"></textarea>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="ss-card ss-card-31">
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
                            <div class="btn btn-action btn-02 btn-white-theme pos-relative">
                              ค้นหาไฟล์
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
                  <div class="ss-card ss-card-32">
                    <div class="wrapper">
                      <div class="icon">
                        <img src="public/assets/app/images/file/pdf.png" alt="Image File" />
                      </div>
                      <div class="text-container box-shadow style-02">
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
                <div class="grid sm-100 mt-2">
                  <div class="ss-card ss-card-32">
                    <div class="wrapper">
                      <div class="icon">
                        <img src="public/assets/app/images/file/jpg.png" alt="Image File" />
                      </div>
                      <div class="text-container box-shadow style-02">
                        <p class="title lh-sm fw-500">
                          บันทึกเบาะแสการทุจริตในวันเลือกตั้ง
                        </p>
                        <div class="x-mark">
                          <em class="fa-solid fa-xmark"></em>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-4">
                  <div class="captcha">
                    <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                  </div>
                </div>
                <div class="grid d-flex ai-center lg-50 md-100 sm-100 mt-4">
                  <div class="grids no-gap">
                    <div class="grid sm-50 xs-50 mt-0">
                      <div class="pr-1">
                        <button type="submit" href="#" class="btn btn-white-theme btn-action width-full mw-auto btn-03">
                          ส่งข้อความ
                        </button>
                      </div>
                    </div>
                    <div class="grid sm-50 xs-50 mt-0">
                      <button type="cancel" href="#" class="btn btn-white-theme btn-action width-full mw-auto btn-05">
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
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>