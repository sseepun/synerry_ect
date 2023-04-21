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
      [ 'url' => '#', 'display' => 'คำถามที่พบบ่อย' ],
    ];
    $breadcrumbTitle = 'คำถามที่พบบ่อย';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/04.jpg';
    include('component/breadcrumb.php');
  ?>

  <div class="section-padding section-padding-top">
    <div class="container">
      <h3 class="fw-600 aos-init" data-aos="fade-up" data-aos-delay="0">
        คำถามที่พบบ่อย
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view-02', 'rss'];
          include('component/list-header.php');
        ?>
      </div>

      <div class="faq-01 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="300" >
        <?php for($i=0; $i<12; $i++){?>
          <div class="faq <?php if($i==0)echo 'active'; ?>">
            <div class="question box-shadow style-02">
              <div class="ftag style-02">
                <img class="active" src="public/assets/app/images/icon-svg/question-white.svg" alt="Icon">
                <img class="inactive" src="public/assets/app/images/icon-svg/question.svg" alt="Icon">
              </div>
              <h6 class="title p lg fw-400">
                สำนักงานคณะกรรมการการเลือกตั้งตอบข้อสอบถามพรรคกล้าเกี่ยวกับ
                การปฏิบัติของพรรคการเมืองในการให้ความช่วยเหลือประชาชนในสถานการณ์
                การระบาดของเชื่อไวรัสโควิด-19 รายละเอียดตามเอกสารตอบข้อหา
              </h6>
              <div class="date-view">
                <div class="wrapper">
                  <div class="icon">
                    <em class="fa-solid fa-calendar-days"></em>
                    <span class="p sm ml-2">08 มิถุนายน 2565</span>
                  </div>
                  <div class="icon">
                    <em class="fa-solid fa-eye"></em>
                    <span class="p sm ml-2">255</span>
                  </div>
                </div>
              </div>
              <div class="arrow">
                <div class="wrapper">
                  <em class="fa-solid fa-minus"></em>
                </div>
              </div>
              <div class="answer-wrapper">
                <img src="public/assets/app/images/icon/13.png" alt="">
                <p class="sm">คำตอบ</p>
              </div>
            </div>
            <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
              <div class="content">
                <p class="h5 fw-600">คำตอบ</p>
                <div class="wrapper">
                  <div class="img-container">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/36.jpg');"></div>
                    </div>
                  </div>
                  <div class="text-container">
                    <p class="fw-400">
                      การเลือกตั้งสมาชิกสภากรุงเทพมหานครและผู้ว่าราชกรุงเทพมหานคร เป็นการเลือกตั้งในระดับท้องถิ่น 
                      ซึ่งไม่มีการจัดให้ลงคะแนนเลือกตั้งล่วงหน้า หากท่านมีกิจธุระไม่สามารถไปใช้สิทธิในวันเลือกตั้งได้ 
                      ให้แจ้งเหตุอันอาจไม่ไปใช้สิทธิเลือกตั้งต่อนายทะเบียนท้องถิ่นด้วยตนเอง หรือส่งทางไปรษณีย์ 
                      หรือแจ้งทางสื่ออิเล็กทรอนิกส์ ทั้งนี้ สามารถศึกษารายละเอียดเพิ่มเติมได้ที่ 
                      <a class="p sm color-02 fw-400" href="#">https://www.ect.go.th/ect_th/news_page.php?nid=15071</a>
                    </p>
                  </div>
                </div>
                <div class="scroll-x-wrapper mt-3">
                  <table class="table style-05 table-download cursor-pointer">
                    <tbody>
                      <?php
                        foreach([
                          'pdf'
                        ] as $k){
                      ?>
                        <tr class="table-card-01 box-shadow style-02 mb-2">
                          <td>
                            <div class="download-card">
                              <img src="public/assets/app/images/file/svg/<?= $k ?>.svg" alt="Image File" />
                            </div>
                          </td>
                          <td class="title-container" style="min-width:450px;">
                            <a class="fw-600 title" href="#">
                              รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565
                            </a>
                            <div class="text-footer">
                              <div class="wrapper">
                                <p class="sm fw-400 mr-4">ขนาดไฟล์ <span class="fw-600">0.2 MB</span></p>
                                <p class="sm fw-400 mr-4">ดาวน์โหลด <span class="fw-600">122 ครั้ง</span></p>
                                <div class="icon report-file">
                                  <em class="fa-solid fa-circle-exclamation mr-1"></em>
                                  <p class="btn-popup-toggle cursor-pointer sm color-black color-black-theme fw-400" data-popup="99">
                                    แจ้งไฟล์เสีย
                                  </p>
                                </div>
                              </div>
                            </div>
                          </td>
                          <td class="arrow-container" style="min-width:100px;">
                            <div class="img-wrapper d-flex ai-center jc-center fw-wrap">
                              <img class="inactive" src="public/assets/app/images/icon-svg/download-inactive.svg" alt="Icon">
                              <img class="active" src="public/assets/app/images/icon-svg/download-active.svg" alt="Icon">
                            </div>
                            <p class="xs text-center color-02 color-black-theme fw-500 mt-1">ดาวน์โหลด</p>
                          </td>
                        </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>

      
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>

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
            <form class="form style-06" action="action.php" method="post">
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
                      <input class="style-02 size-01" type="text" placeholder="อีเมล*" required>
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
                    <div class="dropdown-icon">
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
                <div class="grid lg-50 md-100 sm-100 mt-4">
                  <div class="captcha">
                    <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="CAPTCHA">
                    <label class="text-danger style-02">กรุณายืนยันตัวตน</label>
                  </div>
                </div>
                <div class="grid d-flex ai-start lg-50 md-100 sm-100 mt-4">
                  <div class="grids no-gap mt-4">
                    <div class="grid sm-50 xs-50 mt-0">
                      <div class="pr-1">
                        <button type="submit" href="#" class="btn btn-white-theme btn-popup-toggle btn-action width-full mw-auto btn-03" data-popup="99">
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
  </div>

  <?php
    $listResult= ['contact'];
    include_once('component/popup-file-error-style-02.php');
  ?>


  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    var faqAll = $('.faq');
    var faqExpandAll = $('.faq-expand-all'),
        faqCollapseAll = $('.faq-collapse-all');
    faqExpandAll.click(function(e) {
        e.preventDefault();
        faqExpandAll.addClass('active');
        faqCollapseAll.removeClass('active');
        faqAll.addClass('active');
        faqAll.find('> .answer').slideDown();
    });
    faqCollapseAll.click(function(e) {
        e.preventDefault();
        faqExpandAll.removeClass('active');
        faqCollapseAll.addClass('active');
        faqAll.removeClass('active');
        faqAll.find('> .answer').slideUp();
    });
  </script>
</body>
</html>