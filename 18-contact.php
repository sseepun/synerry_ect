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
      [ 'url' => '#', 'display' => 'ติดต่อเรา'],
    ];
    $breadcrumbTitle = 'ติดต่อเรา';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/16.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-13">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ติดต่อหน่วยงาน
      </h3>
      <!-- FORM -->
      <div class="mt-2" data-aos="fade-up" data-aos-delay="350">
        <div class="grids">
          <div class="grid xl-50 lg-50 md-50 sm-100 mt-0">
            <p class="fw-400">สำนักงานคณะกรรมการการเลือกตั้ง</p>
            <div class="ss-card ss-card-34 box-shadow style-02 mt-2">
              <div class="wrapper">
                <div class="icon">
                  <em class="fa-solid fa-location-dot"></em>
                </div>
                <div class="text-container">
                  <p class="sm md-no-br fw-400 lh-sm">
                    เลขที่ 120 ม.3 ชั้น 2 อาคารรัฐประศาสนภักดี ศูนย์ราชการ<br>เฉลิมพระเกียรติ 
                    80 พรรษา 5 ธันวาคม 2550<br>ถนนแจ้งวัฒนะ แขวงทุ่งสองห้อง เขตหลักสี่ กรุงเทพ 10210
                  </p>
                </div>
              </div>
            </div>
            <div class="ss-card ss-card-34 box-shadow style-02 mt-2">
              <div class="wrapper">
                <div class="icon">
                  <em class="fa-solid fa-phone"></em>
                </div>
                <div class="text-container flex-column jc-center ai-start">
                  <p class="sm fw-400 lh-sm">
                    <span>โทรศัพท์</span> +66 0-2141-8888
                  </p>
                  <p class="sm fw-400 lh-sm">
                    <span>โทรสาร</span> +66 0-2143-8510
                  </p>
                </div>
              </div>
            </div>
            <div class="ss-card ss-card-34 box-shadow style-02 mt-2">
              <div class="wrapper">
                <div class="icon">
                  <em class="fa-solid fa-envelope"></em>
                </div>
                <div class="text-container">
                  <p class="sm fw-400">webmaster@ect.go.th</p>
                </div>
              </div>
            </div>
            <div class="ss-card ss-card-34 box-shadow style-02 mt-2 mb-3">
              <div class="wrapper">
                <div class="icon">
                  <em class="fa-solid fa-share-nodes"></em>
                </div>
                <div class="text-container flex-column jc-center ai-start">
                  <p class="fw-500">ติดตาม</p>
                  <div class="social-list">
                    <div class="d-inline-block">
                      <a class="icon active" href="#">
                        <em class="fa-brands fa-facebook-f"></em>
                      </a>
                    </div>
                    <div class="d-inline-block">
                      <a class="icon" href="#">
                        <em class="fa-brands fa-line"></em>
                      </a>
                    </div>
                    <div class="d-inline-block">
                      <a class="icon" href="#">
                        <em class="fa-brands fa-youtube"></em>
                      </a>
                    </div>
                    <div class="d-inline-block">
                      <a class="icon" href="#">
                        <em class="fa-brands fa-instagram"></em>
                      </a>
                    </div>
                    <div class="d-inline-block">
                      <a class="icon" href="#">
                        <em class="fa-brands fa-tiktok"></em>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="grid xl-50 lg-50 md-50 sm-100 mt-0">
            <h5 class="color-02 fw-500">แบบฟอร์มติดต่อสอบถาม</h5>
            <p class="fw-500 lh-sm">
              หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้ 
              ทางเจ้าหน้าที่จะดำเนินการตามคำขอโดยเร็วที่สุด
            </p>
            <p class="color-gray fw-300">กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย <span class="text-danger fw-600">*</span></p>
            <form action="action.php" method="post">
              <div class="grids">
                <div class="grid sm-100 mt-3">
                  <div class="option cate">
                    <select class="ui border dropdown" required>
                      <option value="">เลือกหน่วยงาน*</option>
                      <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                      <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                      <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                    </select>
                    <div class="dropdown-icon border">
                      <em class="fa-solid fa-chevron-down"></em>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="option cate">
                    <select class="ui border dropdown" required>
                      <option value="">เลือกหัวข้อ*</option>
                      <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                      <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                      <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                    </select>
                    <div class="dropdown-icon border">
                      <em class="fa-solid fa-chevron-down"></em>
                    </div>
                  </div>
                </div>
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
                <div class="grid sm-100 mt-2">
                  <div class="form-group">
                    <textarea class="style-02" name="message" rows="10" class="form-control" 
                    required="" title="General Textarea" placeholder="พิมพ์ข้อความ*"></textarea>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="ss-card ss-card-31 style-02">
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
                      <p class="sm fw-400">ประเภทไฟล์ที่รองรับ PDF, JPG, JPEG, PNG, GIF ขนาดไม่เกิน 50 MB</p>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="ss-card ss-card-32 style-02">
                    <div class="wrapper border">
                      <div class="icon">
                        <img src="public/assets/app/images/file/pdf.png" alt="Image File" />
                      </div>
                      <div class="text-container box-shadow style-02">
                        <p class="title lh-sm fw-500">
                          ประกวดราคาซื้อวัสดุสำนักงาน จำนวน 90 รายการ 
                          ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)
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
                        <button type="submit" href="#" class="btn btn-action width-full mw-auto btn-03">
                          ส่งข้อความ
                        </button>
                      </div>
                    </div>
                    <div class="grid sm-50 xs-50 mt-0">
                      <button type="cancel" href="#" class="btn btn-action width-full mw-auto btn-05">
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

  <!-- Goolgle Map -->
  <iframe data-aos="fade-up" data-aos-delay="400"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.285629391629!2d100.56366531478078!3d13.8818618902634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e28323d10290b5%3A0x946e22bc8754445a!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LiE4LiT4Liw4LiB4Lij4Lij4Lih4LiB4Liy4Lij4LiB4Liy4Lij4LmA4Lil4Li34Lit4LiB4LiV4Lix4LmJ4LiH!5e0!3m2!1sth!2sth!4v1672824557112!5m2!1sth!2sth" 
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>



  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>