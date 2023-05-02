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
      [ 'url' => '#', 'display' => 'คำถามที่พบบ่อย' ],
    ];
    $breadcrumbTitle = 'คำถามที่พบบ่อย';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/38.jpg';
    $formContainer = true;
    $sectionOptions = ['option-01', 'views-04'];
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow minisite"></div>
        <div class="body bg-white-theme">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              คำถามที่พบบ่อย
            </h3>
          </div>
          <div class="faq-07 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="300" >
            <?php for($i=0; $i<12; $i++){?>
              <div class="faq <?php if($i==0)echo 'active'; ?>">
                <div class="question box-shadow style-02">
                  <h6 class="title p lg fw-400">
                    การเลือกตั้งผู้ว่ากรุงเทพมหานครในวันที่ 22 พค.นี้ จะมีการจัดการเลือกตั้งล่วงหน้าหรือไม่ 
                    เนื่องจากจะเดินทางไปต่างจังหวัดและคงกลับมาเลือกไม่ทันก่อนปิดหีบ หากไม่มี 
                    ต้องไปแจ้งสาเหตุของการไม่ไปใช้สิทธิหรือไม่ ต้องไปแจ้งที่ใด 
                  </h6>
                  <div class="arrows-container">
                    <div class="arrow"></div>
                  </div>
                </div>
                <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
                  <div class="content">
                    <div class="wrapper">
                      <div class="content-left">
                        <p class="h5 fw-600">คำตอบ</p>
                      </div>
                      <div class="content-right">
                        <div class="img-container">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/36.jpg');"></div>
                          </div>
                        </div>
                        <div class="text-container">
                          <div class="analysis-results">
                            <div class="wrapper color-gray">
                              <div class="icon">
                                <span class="p sm fw-300">08 มิถุนายน 2565</span>
                              </div>
                              <div class="icon">
                                <em class="fa-solid fa-eye p sm"></em>
                                <span class="p sm fw-300 ml-2">280</span>
                              </div>
                            </div>
                          </div>
                          <p class="fw-400">
                            การเลือกตั้งสมาชิกสภากรุงเทพมหานครและผู้ว่าราชกรุงเทพมหานคร เป็นการเลือกตั้งในระดับท้องถิ่น 
                            ซึ่งไม่มีการจัดให้ลงคะแนนเลือกตั้งล่วงหน้า หากท่านมีกิจธุระไม่สามารถไปใช้สิทธิในวันเลือกตั้งได้ 
                            ให้แจ้งเหตุอันอาจไม่ไปใช้สิทธิเลือกตั้งต่อนายทะเบียนท้องถิ่นด้วยตนเอง หรือส่งทางไปรษณีย์ 
                            หรือแจ้งทางสื่ออิเล็กทรอนิกส์ ทั้งนี้ สามารถศึกษารายละเอียดเพิ่มเติมได้ที่ 
                          </p>
                          <div class="scroll-x-wrapper">
                            <a class="p sm color-02 fw-400" style="width:auto; max-width:380px!important;" 
                              href="https://www.ect.go.th/ect_th/news_page.php?nid=15071">https://www.ect.go.th/ect_th/news_page.php?nid=15071
                            </a>
                          </div>
                        </div>
                        <div class="scroll-x-wrapper style-02 mt-3">
                          <table class="table style-05 table-download" data-aos="fade-up" data-aos-delay="600">
                            <tbody>
                              <?php
                                foreach([
                                  'pdf', 'doc', 'xls', 'pptx', 'zip',
                                  'rar', 'link'
                                ] as $k){
                              ?>
                                <tr class="table-card border table-card-01 box-shadow style-02 mb-2 mt-3">
                                  <td>
                                    <div class="download-card">
                                      <div>
                                      <img src="public/assets/app/images/file/svg/<?= $k ?>.svg" alt="Image File" />
                                      <p class="xxs color-white color-black-theme fw-400">0.2 MB</p>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="title-container" style="min-width:450px;">
                                    <a class="p title fw-600 lh-sm" href="#">
                                      รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565 
                                      รายงานการจัดซื้อจัดจ้างส่วนภูมิภาค
                                    </a>
                                    <div class="text-footer mt-1">
                                      <div class="wrapper">
                                        <div class="icon">
                                          <em class="fa-regular fa-calendar"></em>
                                          <p class="xs fw-400 ml-1">29 พฤศจิกายน</p>
                                        </div>
                                        <div class="icon">
                                          <em class="fa-regular fa-floppy-disk"></em>
                                          <p class="xs fw-400 ml-1">ดาวน์โหลด 122 ครั้ง</p>
                                        </div>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="button-container" style="min-width:90px;">
                                    <div class="btns jc-end">
                                      <div href="#" class="btn btn-white-theme btn-fling-down width-auto btn-action btn-30">
                                        ดาวน์โหลดไฟล์
                                        <em class="fa-solid fa-arrow-down fling-down ml-1"></em>
                                      </div>
                                    </div>
                                  </td>
                                  <td class="report-container" style="min-width:150px;">
                                    <em class="fa-solid fa-triangle-exclamation"></em>
                                    <?php
                                      if($k === 'link'){?>
                                        <a class="xs text btn-popup-toggle-02 color-black-theme text-center fw-500 mt-1" data-popup="99">
                                          แจ้งลิงก์เสีย
                                        </a>
                                      <?php } else {?>
                                          <a class="xs text btn-popup-toggle-02 color-black-theme text-center fw-500 mt-1" data-popup="99">
                                            แจ้งไฟล์เสีย
                                          </a>
                                      <?php }?>
                                  </td>
                                </tr>
                              <?php }?>
                            </tbody>
                          </table>
                        </div>  
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="mt-6 pt-4">
            <?php
              $listFooter = ['total', 'paginate', 'pp'];
              $style = 'style-02';
              include('component/list-footer.php');
            ?>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <div class="section">
    <div class="container">
      <!-- FORM -->
      <div class="form-container-01 bg-black-theme box-shadow style-02" data-aos="fade-up" data-aos-delay="300">
        <div class="grids">
          <div class="grid xl-50 lg-1-3 md-40 sm-100 mt-0">
            <h3 class="color-white-theme fw-600">แบบฟอร์มติดต่อสอบถาม</h3>
            <p class="fw-400">
              หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มนี้<br>
              ทางเจ้าหน้าที่จะคำเนินการตามคำขอโดยเร็วที่สุด
            </p>
            <p class="color-white-theme color-16 fw-400 mt-1">
              กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย
              <span class="text-danger fw-400 ml-1">*</span>
            </p>
            <div class="img-container">
              <img src="public/assets/app/images/content/02.png" alt="Message">
            </div>
          </div>
          <div class="grid xl-50 lg-2-3 md-60 sm-100 mt-0">
            <form class="form style-02" action="action.php" method="post">
              <div class="grids">
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
                  <label class="text-danger style-02">กรุณาเลือกหัวข้อที่ต้องการติดต่อ</label>
                </div>
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
                  <label class="text-danger style-02">กรุณากรอกมายเลขติดต่อเป็นตัวเลข</label>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group">
                    <div class="form-input">
                      <input class="style-02 size-01" type="email" placeholder="อีเมล*" required>
                    </div>
                  </div>
                  <label class="text-danger style-02">กรุณากรอกอีเมล</label>
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
                <div class="grid xl-50 lg-100 md-100 sm-100 mt-5">
                  <div class="captcha">
                    <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="CAPTCHA">
                    <label class="text-danger style-02">กรุณายืนยันตัวตน</label>
                  </div>
                </div>
                <div class="grid xl-50 lg-100 md-100 sm-100 mt-0">
                  <div class="btns h-full">
                    <button type="submit" href="#" class="btn btn-popup-toggle btn-action size-03 btn-13" data-popup="98">
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

  <?php include_once('component/popup-file-error.php'); ?>
  <?php
    $listResult= ['report-file'];
    include_once('component/popup-file-error-style-02.php');
  ?>
  <?php
    $listResult= ['contact'];
    include_once('component/popup.php');
  ?>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>