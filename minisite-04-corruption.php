<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข่าวสาร/ประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'แจ้งเบาะแสทุจริตการเลือกตั้ง';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/21.jpg';
    $sectionOptions;
    $sectionOptions;
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
                      ฝ่ายปฏิบัติการข่าว โทร. 02-141-8050 หรือ 02-141-8201 หรือ 02-141-2611
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
                      <div class="option cate style-02">
                        <select class="ui color-gray dropdown bg-style-02 border" required>
                          <option value="">หมวดหมู่*</option>
                          <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                          <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                          <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                        </select>
                        <div class="dropdown-icon bg-black border-left">
                          <em class="fa-solid fa-chevron-down"></em>
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group">
                        <textarea class="style-02" name="message" rows="10" class="form-control" 
                        required="" title="General Textarea" placeholder="รายละเอียด*"></textarea>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <p class="sm fw-400">แนบรูปภาพ (หากท่านมี) *รูปภาพมีขนาดไฟล์ไม่เกิน 5MB และนามสกุล jpg, jpeg หรือ png</p>
                      <div class="btn-browse-container mt-2">
                        <div class="fileUpload btn btn-browse">
                          <em class="fa-regular fa-folder-open"></em>
                          <span class="p">Browse...</span>
                          <input id="uploadBtn" type="file" class="upload" />
                        </div>
                        <input id="uploadFile" class="form-input" />
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
                            <button type="submit" href="#" class="btn btn-black-theme btn-action width-full mw-auto btn-12">
                              ส่งข้อความ
                            </button>
                          </div>
                        </div>
                        <div class="grid sm-50 xs-50 mt-0">
                          <button type="cancel" href="#" class="btn btn-black-theme btn-action width-full mw-auto btn-03">
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

  <?php include_once('include/footer-style-04.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    document.getElementById("uploadBtn").onchange = function () {
    document.getElementById("uploadFile").value = this.value.replace("C:\\fakepath\\", "");
  };

  </script>
</body>
</html>