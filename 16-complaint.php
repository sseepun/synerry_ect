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
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/90.jpg')"></div>
            </div>
          </div>
          <div class="text-container">
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
      <div class="form-container-01 box-shadow style-02">
        <div class="grids">
          <div class="grid lg-40 md-1-3 sm-100 mt-0">
            <h4 class="fw-500">แบบฟอร์มรับเรื่อง</h4>
            <p>กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย<span class="text-danger fw-400 ml-1">*</span></p>
            <div class="img-container">
              <img src="public/assets/app/images/content/02.png" alt="Message">
            </div>
          </div>
          <div class="grid lg-60 md-2-3 sm-100 mt-0">
            <form action="action.php" method="post">
              <div class="grids">
                <div class="grid sm-50 mt-0">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="text" placeholder="ชื่อ*">
                    </div>
                  </div>
                </div>
                <div class="grid sm-50 mt-0">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="text" placeholder="นามสกุล*">
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="text" placeholder="หมายเลขติดต่อ*">
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="text" placeholder="อีเมล*">
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="text" placeholder="เลือกหัวข้อ*">
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
                          <p class="fw-500 ml-2">ลากไฟล์และวางลงที่นี้</p>
                        </div>
                        <div class="item">
                          <div class="ss-sep-01 style-02">
                            <p class="fw-500">หรือ</p>
                          </div>
                        </div>
                        <div class="item">
                          <div class="btns jc-end">
                            <div class="btn btn-action btn-02 pos-relative">
                              ค้นหาไฟล์
                              <input type="file" class="file-upload" />
                            </div>
                          </div>
                           
                        </div>
                      </div>
                    </div>
                    <div class="footer mt-2">
                      <p class="sm fw-400">ประเภทไฟล์ที่รองรับ PDF, JPG, JPEG, PNG, GIF ขนาดไม่เกิน 5 MB</p>
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