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
      [ 'url' => '#', 'display' => 'ข่าวประกวดราคา/สอบราคา' ],
    ];
    $breadcrumbTitle = 'ข่าวประกวดราคา/สอบราคา';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/08.jpg';
    include('component/breadcrumb.php');
  ?>

  <div class="section-padding">
    <div class="container">
      <h3 class="fw-600" data-aos="fade-up" data-aos-delay="0">
        ข่าวประกวดราคาสอบราคา
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view-02', 'rss'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="faq-02 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="300">
        <?php for($i=0; $i<10; $i++){?>
          <div class="faq <?php if($i==0)echo 'active'; ?>">
            <div class="question box-shadow style-02">
              <h3 class="ftag">
                <div class="icon">
                  <img src="public/assets/app/images/icon/14.png" alt="">
                </div>
              </h3>
              <p class="title sm lh-sm fw-400">
                ประกวดราคาจ้างผลิตสื่อสิ่งพิมพ์ประกอบการเสริมสร้างความรู้ความเข้าใจที่ถูกต้องเกี่ยวกับการปกครองในระบอบประชาธิปไตย 
                จำนวน 4 รายการ ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding) 
              </p>
              <div class="chevron-wrapper">
                <div class="icon">
                  <em class="fa-solid fa-chevron-down"></em>
                </div>
              </div>
            </div>
            <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
              <div class="content">
                <div class="scroll-x-wrapper" data-simplebar>
                    <table class="table table-download p-5" data-aos="fade-up" data-aos-delay="600">
                      <tbody>
                        <?php
                          foreach([
                            'pdf', 'doc', 'link'
                          ] as $k){
                        ?>
                          <tr class="table-card-01 box-shadow style-02 mb-2">
                            <td>
                              <div class="download-card">
                                <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
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
                                <img class="inactive" src="public/assets/app/images/icon-svg/external-link-01.svg" alt="Icon">
                                <img class="active" src="public/assets/app/images/icon-svg/external-link-yellow.svg" alt="Icon">
                              </div>
                              <a class="xs color-02 color-black-theme text-center fw-500 mt-1" href="#">ดาวน์โหลด</a>
                            </td>
                          </tr>
                        <?php }?>
                      </tbody>
                    </table>
                  </div>
                  <div class="btns jc-center mb-5">
                    <a class="btn btn-action-style-06 size-02" href="#">
                      <span>ดาวน์โหลดทั้งหมด</span><div class="sep"></div>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          <?php }?>
      </div>
      <div class="mt-6 pt-4" data-aos="fade-up" data-aos-delay="350">
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