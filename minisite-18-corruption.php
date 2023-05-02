<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข่าวสาร/ศูนย์รับเรื่องร้องเรียน' ],
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
                แจ้งเบาะแสทุจริตการเลือกตั้ง
              </h3>
            </div>
            <div class="ss-card ss-card-30 style-02 mt-4" data-aos="fade-up" data-aos-delay="150">
              <div class="wrapper">
                <div class="img-container size-02">
                  <div class="ss-img no-hover">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/94.jpg')"></div>
                  </div>
                </div>
                <div class="text-container size-02 color-black-theme">
                  <p class="fw-400">
                    หากท่านพบปัญหาหรือพบเบาะแสทุจริตในการเลือกตั้ง 
                    ท่านสามารถแจ้งเราได้ผ่านทางแบบฟอร์มบนเว็บไซต์ในหน้านี้ 
                    โดยข้อมูลต่างๆ ของท่านจะถูกเก็บเป็นความลับ
                  </p>
                  <p class="h6 color-04 color-black-theme fw-500 mt-1">ท่านสามารถแจ้งได้ที่</p>
                  <ul class="ss-list style-08 mt-1">
                    <li class="fw-400">
                      สำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัดทุกจังหวัด
                    </li>
                    <li class="fw-400 mt-2">
                      ฝ่ายปฏิบัติการข่าว โทร. <span class="fw-600">02-141-8050</span> หรือ 
                      <span class="fw-600">02-141-8201</span> หรือ <span class="fw-600">02-141-2611</span>
                    </li>
                    <li class="fw-400 mt-2">
                      สายด่วน กกต. โทร. 1444 กด 2
                    </li>
                    <li class="fw-400 mt-2">
                      แจ้งทางเว็บไซต์โดยกรอกข้อมูลลงในแบบฟอร์ม
                    </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- FORM -->
            <div class="form-container-01 box-shadow style-02" data-aos="fade-up" data-aos-delay="300">
            <div class="grids">
              <div class="grid xl-50 lg-1-3 md-40 sm-100 mt-0">
                <h3 class="color-black-theme fw-600">แจ้งเบาะแสทุจริตการเลือกตั้ง</h3>
                <p class="color-black-theme color-gray fw-400">
                  กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย <span class="text-danger fw-400 ml-1">*</span>
                </p>
                <p class="color-09 fw-500 mt-2">
                  การแจ้งเหตุหรือเบาะแสผ่านทางเว็บไซต์
                </p>
                <ul class="list-style-03 mt-1">
                  <li class="fw-400">
                    ไม่ถือว่าเป็นการยื่นคำร้องคัดค้านการเลือกตั้ง
                    ตามระเบียบคณะกรรมการการเลือกตั้งว่าด้วย
                    การสืบสวนสอบสวนและการวินิจฉัยชี้ขาด
                  </li>
                  <li class="fw-400 mt-2">
                    ต้องไม่มีเจตนาหรือจงใจกลั่นแกล้ง เพื่อทำให้บุคคลอื่นได้รับความเสื่อมเสียหรือเสียหาย
                  </li>
                  <li class="fw-400 mt-2">
                    ต้องไม่แจ้งด้วยข้อความอันเป็นเท็จ
                  </li>
                  <li class="fw-400 mt-2">
                    กรุณาใช้ถ้อยคำสุภาพ
                  </li>
                  <li class="fw-400 mt-2">
                    เลือกข้อที่ต้องการจะแจ้งข้อมูล
                    <ul class="list-style-02 p-0 size-02 line-black">
                      <li class="fw-400">การเลือก ส.ว.</li>
                      <li class="fw-400">การเลือกตั้ง ส.ส.</li>
                      <li class="fw-400">การเลือกตั้งท้องถิ่น</li>
                      <li class="fw-400">เบาะแสการหาเสียงทางสื่ออิเล็กทรอนิกส์</li>
                    </ul>
                  </li>
                </ul>
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
                          <input class="style-02 size-01" type="text" placeholder="อีเมล*" required>
                        </div>
                      </div>
                      <label class="text-danger style-02">กรุณากรอกอีเมล</label>
                    </div>
                    <div class="grid sm-100 mt-4">
                      <div class="option cate style-02">
                        <select class="ui color-gray dropdown bg-style-02 border" required>
                          <option value="">เลือกหัวข้อที่ต้องการแจ้ง*</option>
                          <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                          <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                          <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                        </select>
                        <div class="dropdown-icon style-02">
                          <em class="fa-solid fa-chevron-down"></em>
                        </div>
                      </div>
                      <label class="text-danger style-02">กรุณาเลือกหัวข้อที่ต้องการแจ้ง</label>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group">
                        <textarea class="style-02" name="message" rows="10" class="form-control" 
                        required="" title="General Textarea" placeholder="รายละเอียด*"></textarea>
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
                                <div class="btn style-03 btn-action btn-13 size-03 btn-white-theme pos-relative">
                                  เลือกไฟล์
                                  <input type="file" class="file-upload" />
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="footer mt-2">
                          <p class="sm color-black-theme fw-400">ประเภทไฟล์ที่รองรับ PDF, JPG, JPEG, PNG, GIF ขนาดไม่เกิน 50 MB</p>
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-100">
                      <div class="ss-card ss-card-32 mini-site">
                        <div class="wrapper box-shadow style-02">
                          <div class="icon">
                            <img src="public/assets/app/images/file/pdf.png" alt="Image File" />
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
                            <button type="submit" class="btn btn-white-theme btn-popup-toggle btn-action width-full mw-auto btn-36" data-popup="99">
                              ส่งข้อความ
                            </button>
                          </div>
                        </div>
                        <div class="grid sm-50 xs-50 mt-0">
                          <button type="cancel" href="#" class="btn btn-white-theme btn-action width-full mw-auto btn-37">
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
    $listResult= ['rp-corruption'];
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