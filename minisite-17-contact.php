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
      [ 'url' => '#', 'display' => 'ติดต่อเรา' ],
    ];
    $breadcrumbTitle = 'ติดต่อเรา';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/40.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body bg-white-theme">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ติดต่อหน่วยงาน
            </h3>
          </div>
          <div class="mt-2" data-aos="fade-up" data-aos-delay="350">
            <div class="grids">
              <div class="grid xl-50 lg-50 md-50 sm-100 mt-0">
                <p class="h6 fw-500">สำนักงานคณะกรรมการเลือกตั้งจังหวัดเชียงใหม่</p>
                <div class="ss-card ss-card-67 box-shadow style-02 mt-2">
                  <div class="wrapper">
                    <div class="icon">
                      <em class="fa-solid fa-location-dot"></em>
                    </div>
                    <div class="text-container">
                      <p class="sm md-no-br fw-400 lh-sm">
                        ศูนย์ราชการจังหวัดเชียงใหม่ ถนนโชตนา<br> 
                        ตำบลช้างเผือก  อำเภอเมืองเชียงใหม่  จังหวัดเชียงใหม่
                      </p>
                    </div>
                  </div>
                </div>
                <div class="ss-card ss-card-67 box-shadow style-02 mt-2">
                  <div class="wrapper">
                    <div class="icon">
                      <em class="fa-solid fa-phone"></em>
                    </div>
                    <div class="text-container flex-column jc-center ai-start">
                      <p class="sm fw-400 lh-sm">
                        <span>โทรศัพท์</span> 053 112-347-8
                      </p>
                      <p class="sm fw-400 lh-sm">
                        <span>โทรสาร</span> 053 112-346
                      </p>
                    </div>
                  </div>
                </div>
                <div class="ss-card ss-card-67 box-shadow style-02 mt-2">
                  <div class="wrapper">
                    <div class="icon">
                      <em class="fa-solid fa-envelope"></em>
                    </div>
                    <div class="text-container flex-column jc-center ai-start">
                      <p class="sm fw-400">
                        <span>อีเมล</span> chiangmai@ect.go.th
                      </p>
                    </div>
                  </div>
                </div>
                <div class="ss-card ss-card-67 box-shadow style-02 mt-2 mb-3">
                  <div class="wrapper">
                    <div class="icon">
                      <em class="fa-solid fa-share-nodes"></em>
                    </div>
                    <div class="text-container flex-column jc-center ai-start">
                      <p class="fw-500">ติดตาม</p>
                      <div class="social-list">
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <img class="inactive" src="public/assets/app/images/icon/facebook-02.png" alt="Facebook">
                            <img class="active" src="public/assets/app/images/icon/facebook-active.png" alt="Facebook">
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <img class="inactive" src="public/assets/app/images/icon/line-02.png" alt="Line">
                            <img class="active" src="public/assets/app/images/icon/line-active.png" alt="Line">
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon sm" href="#">
                            <img class="inactive" src="public/assets/app/images/icon/youtube-02.png" alt="Youtube">
                            <img class="active" src="public/assets/app/images/icon/youtube-active.png" alt="Youtube">
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <img class="inactive" src="public/assets/app/images/icon/twitter-02.png" alt="Twitter">
                            <img class="active" src="public/assets/app/images/icon/twitter-active.png" alt="Twitter">
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <img class="inactive" src="public/assets/app/images/icon/instagram-02.png" alt="Instagram">
                            <img class="active" src="public/assets/app/images/icon/ig-active.png" alt="Instagram">
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <img class="inactive" src="public/assets/app/images/icon/tiktok-02.png" alt="Tiktok">
                            <img class="active" src="public/assets/app/images/icon/tiktok-active.png" alt="Tiktok">
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
                <p class="color-16 fw-300">
                  กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย 
                  <span class="text-danger fw-600">*</span>
                </p>
                <form class="form style-02" action="action.php" method="post">
                  <div class="grids">
                    <div class="grid sm-100 mt-3">
                      <div class="option cate">
                        <select class="ui color-gray border dropdown" required>
                          <option value="">เลือกหน่วยงาน*</option>
                          <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                          <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                          <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                        </select>
                        <div class="dropdown-icon style-02 border">
                          <em class="fa-solid fa-chevron-down"></em>
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="option cate">
                        <select class="ui color-gray border dropdown" required>
                          <option value="">เลือกหัวข้อ*</option>
                          <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                          <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                          <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                        </select>
                        <div class="dropdown-icon style-02 border">
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
                      <div class="ss-card ss-card-68">
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
                                <div class="btn style-03 btn-action btn-13 size-03 btn-black-theme pos-relative">
                                  เลือกไฟล์
                                  <input type="file" class="file-upload">
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
                      <div class="ss-card ss-card-32 mini-site style-02">
                        <div class="wrapper box-shadow style-02">
                          <div class="icon">
                            <img src="public/assets/app/images/file/pdf.png" alt="Image File" />
                          </div>
                          <div class="text-container">
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
                    <div class="grid xl-50 lg-100 md-100 sm-100 mt-4">
                      <div class="captcha">
                        <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                      </div>
                    </div>
                    <div class="grid xl-50 lg-100 md-100 sm-100 mt-4">
                      <div class="btns ai-center h-full">
                        <button type="submit" href="#" class="btn btn-popup-toggle btn-action size-03 btn-13" data-popup="99">
                          ส่งข้อความ
                        </button>
                        <button type="cancel" href="#" class="btn btn-action mw-auto size-03 btn-05 btn-white-theme">
                          ยกเลิก
                        </button>
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

  <!-- Goolgle Map -->
  <iframe data-aos="fade-up" data-aos-delay="400"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.285629391629!2d100.56366531478078!3d13.8818618902634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e28323d10290b5%3A0x946e22bc8754445a!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LiE4LiT4Liw4LiB4Lij4Lij4Lih4LiB4Liy4Lij4LiB4Liy4Lij4LmA4Lil4Li34Lit4LiB4LiV4Lix4LmJ4LiH!5e0!3m2!1sth!2sth!4v1672824557112!5m2!1sth!2sth" 
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>

  <div class="section-padding">
    <div class="container">
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </div>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>