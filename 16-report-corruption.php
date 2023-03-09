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
      [ 'url' => '#', 'display' => 'ระบบแจ้งเบาะแสทุจริตการเลือกตั้ง'],
    ];
    $breadcrumbTitle = 'ระบบแจ้งเบาะแสทุจริตการเลือกตั้ง';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/14.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-13" style="background-image:url('public/assets/app/images/bg/25.jpg')">
    <div class="container">
      <h3 class="color-black-theme fw-500" data-aos="fade-up" data-aos-delay="0">
        ระบบแจ้งเบาะแสทุจริตการเลือกตั้ง
      </h3>
      <p class="color-black-theme fw-400" data-aos="fade-up" data-aos-delay="150">
        หากท่านพบปัญหาหรือพบเบาะแสทุจริตในการเลือกตั้ง ท่านสามารถแจ้งเราได้ผ่านทางแบบฟอร์มบนเว็บไซต์ในหน้านี้ 
        โดยข้อมูลต่างๆ ของท่านจะถูกเก็บเป็นความลับท่านสามารถแจ้งได้ที่
      </p>
      <div class="grids" data-aos="fade-up" data-aos-delay="300">
        <div class="grid lg-25">
          <div class="ss-card ss-card-33">
            <div class="wrapper">
              <div class="icon">
                <img src="public/assets/app/images/icon/location.png" alt="">
              </div>
              <p class="fw-600">สำนักงานคณะกรรมการการ<br>เลือกตั้งประจำจังหวัดทุก</p>
            </div>
          </div>
        </div>
        <div class="grid lg-25">
          <div class="ss-card ss-card-33">
            <div class="wrapper">
              <div class="icon sm">
                <img src="public/assets/app/images/icon/telephone.png" alt="">
              </div>
              <div>
                <p class="fw-600">ฝ่ายปฏิบัติการข่าว</p>
                <p class="sm color-black-theme color-02 fw-500">02-141-8050</p>
                <p class="sm color-black-theme color-02 fw-500">02-141-8201</p>
                <p class="sm color-black-theme color-02 fw-500">02-141-2611</p>
              </div>
            </div>
            
          </div>
        </div>
        <div class="grid lg-25">
          <div class="ss-card ss-card-33">
            <div class="wrapper">
              <div class="icon">
                <img src="public/assets/app/images/icon/call-center.png" alt="">
              </div>
              <div>
                <p class="fw-600">สายด่วน กกต.</p>
                <p class="sm color-black-theme color-02 fw-500">โทร. 1444 กด 2</p>
              </div>
            </div>
          </div>
        </div>
        <div class="grid lg-25">
          <div class="ss-card ss-card-33">
            <div class="wrapper">
              <div class="icon">
                <img src="public/assets/app/images/icon/website.png" alt="">
              </div>
              <div>
                <p class="color-black-theme fw-500">แจ้งทางเว็บไซต์</p>
                <p class="sm color-black-theme color-02 fw-500">โดยกรอกข้อมูลลงในแบบฟอร์ม</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- FORM -->
      <div class="form-container-02 bg-white-theme-02 box-shadow style-02" data-aos="fade-up" data-aos-delay="350">
        <div class="grids">
          <div class="grid xl-50 lg-1-3 md-40 sm-100 mt-0">
            <div class="header">
              <div class="img-container">
                <img src="public/assets/app/images/icon/38.png" alt="Message">
              </div>
              <div class="text-container color-black-theme">
                <h4 class="fw-500 lh-2xs color-black-theme color-02">ข้อตกลง</h4>
                <p class="fw-400">การแจ้งเหตุหรือเบาะแสผ่านเว็บไซต์</p>
                <ul class="list-style-02 mt-3">
                  <li class="fw-500">
                    ไม่ถือว่าเป็นการยื่นคำร้องคัดค้านการเลือกตั้งตามระเบียบคณะกรรมการการเลือกตั้งว่าด้วยการสืบสวนสอบสวนและการวินิจฉัยชี้ขาด
                  </li>
                  <li class="fw-500 mt-2">
                    ต้องไม่มีเจตนาหรือจงใจกลั่นแกล้ง เพื่อทำให้บุคคลอื่นได้รับความเสื่อมเสียหรือเสียหาย
                  </li>
                  <li class="fw-500 mt-2">
                    ต้องไม่แจ้งด้วยข้อความอันเป็นเท็จ
                  </li>
                  <li class="fw-500 mt-2">
                    กรุณาใช้ถ้อยคำสุภาพ
                  </li>
                  <li class="fw-500 mt-2">
                    เลือกข้อที่ต้องการจะแจ้งข้อมูล
                    <ul class="list-style-02 size-02 line-black">
                      <li class="fw-400">การเลือก ส.ว.</li>
                      <li class="fw-400">การเลือกตั้ง ส.ส.</li>
                      <li class="fw-400">การเลือกตั้งท้องถิ่น</li>
                      <li class="fw-400">เบาะแสการหาเสียงทางสื่ออิเล็กทรอนิกส์</li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="grid xl-50 lg-2-3 md-60 sm-100 mt-0">
            <h5 class="color-02 color-black-theme fw-500">แบบฟอร์มแจ้งเบาะแสทุจริตการเลือกตั้ง</h5>
            <p class="color-16 color-black-theme fw-300">
              กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย 
              <span class="text-danger fw-600">*</span>
            </p>
            <form action="action.php" method="post">
              <div class="grids mt-2">
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
                    <select class="ui color-gray dropdown bg-style-02" required>
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
                  <div class="ss-card ss-card-31 color-black-theme">
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
                            <div class="btn style-03 btn-action btn-21 size-03 btn-white-theme pos-relative">
                              เลือกไฟล์
                              <input type="file" class="file-upload" />
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="footer mt-2">
                      <p class="sm fw-400">ประเภทไฟล์ที่รองรับ PDF, MP4, JPG, PNG, GIF ขนาดไม่เกิน 50 MB</p>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100">
                  <div class="ss-card ss-card-32">
                    <div class="wrapper box-shadow style-02">
                      <div class="icon">
                        <img src="public/assets/app/images/file/mp4.png" alt="Image File" />
                      </div>
                      <div class="text-container">
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
                <div class="grid sm-100 mt-2">
                  <div class="ss-card ss-card-32">
                    <div class="wrapper box-shadow style-02">
                      <div class="icon">
                        <img src="public/assets/app/images/file/jpg.png" alt="Image File" />
                      </div>
                      <div class="text-container">
                        <p class="title lh-sm fw-500">
                          บันทึกภาพเจ้าหน้าที่ขณะปฏิบัติหน้าที่
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
                    <div class="wrapper box-shadow style-02">
                      <div class="icon">
                        <img src="public/assets/app/images/file/pdf.png" alt="Image File" />
                      </div>
                      <div class="text-container">
                        <p class="title lh-sm fw-500">
                          สำเนาเอกสาร
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
                  <div class="grids  no-gap">
                    <div class="grid sm-50 xs-50 mt-0">
                      <div class="pr-1">
                        <button type="submit" class="btn btn-white-theme btn-popup-toggle btn-action width-full mw-auto btn-03" data-popup="99">
                          แจ้งเบาะแส
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

  <?php
    $listResult= ['rp-corruption'];
    include_once('component/popup-file-error-style-02.php');
  ?>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>