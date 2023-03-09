<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
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

  <div class="section-padding">
    <div class="container">
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view-02', 'rss'];
          include('component/list-header.php');
        ?>
      </div>

      <div class="faq-01 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="300" >
        <?php for($i=0; $i<10; $i++){?>
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
                <div class="scroll-x-wrapper mt-3" data-simplebar>
                  <table class="table style-05 table-download cursor-pointer" data-aos="fade-up" data-aos-delay="450">
                    <tbody>
                      <?php
                        foreach([
                          'pdf'
                        ] as $k){
                      ?>
                        <tr class="table-card-01 box-shadow style-02 mb-2">
                          <td>
                            <div class="download-card">
                              <img src="public/assets/app/images/file/pdf.png" alt="Image File" />
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
                                <div class="icon">
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
    </div>
  </div>

  <?php include_once('component/popup-file-error.php'); ?>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>