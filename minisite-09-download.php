<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-minisite-dropdown-menu.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข่าวประกวดราคา/สอบราคา' ],
    ];
    $breadcrumbTitle = 'ข่าวประกวดราคา/สอบราคา';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/32.jpg';
    $sectionOptions = [ 'option-01', 'views-03' ];
    $formContainer = true;
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
    $content = [
      [
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/84.jpg'
      ],[
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/135.jpg'
      ]
    ]
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow minisite"></div>
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ข่าวประกวดราคา/สอบราคา
            </h3>
          </div>
          <div class="faq-09 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="300">
            <?php for($i=0; $i<10; $i++){?>
              <div class="faq <?php if($i==0)echo 'active'; ?>">
                <div class="question box-shadow style-02">
                  <h3 class="ftag">
                    <div class="icon">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
	                      viewBox="0 0 316.1 384">
                        <g>
                          <path class="st1" d="M238.3,384c-75.8,0-151.5,0-227.3,0c-7.2-3.1-11-8.2-11-16.4c0.1-96.4,0-192.7,0.1-289.1C0.1,67.7,5.7,62,16.5,62
                            c18.1,0,36.2,0,54.4,0c54,0,108,0,162,0c4.2,0,8.2,0.5,11.6,3.3c4.1,3.5,5.2,8.2,5.2,13.4c-0.1,95.6-0.1,191.2,0.1,286.9
                            C249.7,374.6,246.9,380.8,238.3,384z M127.3,167.2c19,0,38,0,57,0c8.3,0,14-5.1,14-12.3c0.1-7.3-5.7-12.4-13.9-12.4
                            c-14.7,0-29.5,0-44.2,0c-23.7,0-47.5,0-71.2,0c-8.2,0-13.6,5.8-12.9,13.6c0.5,6.5,5.8,11.1,13.2,11.1
                            C88.5,167.3,107.9,167.2,127.3,167.2z M127,266.3c19.2,0,38.5,0,57.7,0c7.9,0,13.6-5.2,13.5-12.4c0-7.2-5.7-12.3-13.7-12.3
                            c-38.4,0-76.7,0-115.1,0c-8.1,0-13.6,5-13.6,12.3c-0.1,7.5,5.4,12.5,13.7,12.5C88.8,266.3,107.9,266.3,127,266.3z M126.9,216.7
                            c19.4,0,38.7,0,58.1,0c6.4,0,11.2-3.4,12.8-9c2.3-8.3-3.6-15.7-12.6-15.8c-21.2-0.1-42.5,0-63.7,0c-17.5,0-35,0-52.5,0
                            c-5.4,0-9.5,2.2-11.8,7.1c-4.1,8.4,2,17.6,11.7,17.7C88.2,216.8,107.5,216.7,126.9,216.7z"/>
                          <path class="st1" d="M281.8,0c2.3,0.6,4.6,1.1,6.8,1.8C305.6,7,316,21,316,39.1c0.1,28.5,0,57,0,85.5c0,60.9-0.2,121.7,0.1,182.6
                            c0.1,24.7-18.9,39-38.8,39.5c-0.8,0-1.7-0.1-2.9-0.2c0-1.7,0-3.3,0-4.9c0-87.7,0-175.5,0-263.2c0-18.6-9.7-33.3-26.2-38.8
                            c-5.1-1.7-10.8-2.3-16.2-2.3c-61.6-0.2-123.2-0.1-184.8-0.1c-1.6,0-3.2,0-5.9,0c0.9-4.2,1.2-8.2,2.5-11.8
                            C48.9,11.7,59.1,3.9,73.1,0.8c0.8-0.2,1.6-0.5,2.4-0.8C144.3,0,213,0,281.8,0z"/>
                          <path class="st0" d="M127.3,167.2c-19.4,0-38.7,0-58.1,0c-7.3,0-12.7-4.6-13.2-11.1c-0.6-7.8,4.8-13.6,12.9-13.6
                            c23.7,0,47.5,0,71.2,0c14.7,0,29.5,0,44.2,0c8.3,0,14,5.1,13.9,12.4c-0.1,7.3-5.7,12.3-14,12.3
                            C165.3,167.3,146.3,167.2,127.3,167.2z"/>
                          <path class="st0" d="M127,266.3c-19.1,0-38.2,0-57.4,0c-8.3,0-13.8-5-13.7-12.5c0.1-7.3,5.5-12.3,13.6-12.3c38.4,0,76.7,0,115.1,0
                            c7.9,0,13.6,5.2,13.7,12.3c0,7.2-5.6,12.4-13.5,12.4C165.5,266.3,146.3,266.3,127,266.3z"/>
                          <path class="st0" d="M126.9,216.7c-19.4,0-38.7,0-58.1,0c-9.7,0-15.8-9.3-11.7-17.7c2.4-4.8,6.5-7.1,11.8-7.1c17.5,0,35,0,52.5,0
                            c21.2,0,42.5,0,63.7,0c9,0,14.9,7.5,12.6,15.8c-1.5,5.5-6.3,9-12.8,9C165.7,216.8,146.3,216.7,126.9,216.7z"/>
                        </g>
                      </svg>
                    </div>
                  </h3>
                  <p class="title lh-sm fw-500">
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
                  <div class="content pb-5 mb-6">
                    <div class="scroll-x-wrapper">
                      <table class="table table-download style-05 theme-02 p-5" data-aos="fade-up" data-aos-delay="600">
                         <tbody>
                            <?php
                              foreach([
                                'pdf', 'doc', 'link', 'xls', 'pptx', 'zip', 'rar'
                              ] as $k){
                            ?>
                              <tr class="table-card border table-card-01 box-shadow style-02 mb-2">
                                <td>
                                  <div class="download-card">
                                    <img src="public/assets/app/images/file/svg/<?= $k ?>.svg" alt="Image File">
                                  </div>
                                </td>
                                <td class="title-container" style="min-width:450px;">
                                  <a class="p title fw-400" href="#">
                                    รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565 
                                  </a>
                                  <div class="text-footer mt-2">
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
                                    <div href="#" class="btn btn-fling-down btn-white-theme width-auto btn-action btn-30">
                                      ดาวน์โหลดไฟล์
                                      <em class="fa-solid fa-arrow-down ml-1 fling-down"></em>
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
                            <?php } ?>
                          </tbody>
                        </table>
                      </div>
                      <div class="btns jc-center" data-aos="fade-up" data-aos-delay="750">
                        <a href="#" class="btn width-auto btn-action btn-31">
                          ดาวน์โหลดทั้งหมด
                        </a>
                      </div>
                    </div>
                  </div>
              </div>
            <?php }?>
            <?php for($i=0; $i<2; $i++){?>
              <div class="faq style-02">
                <div class="question box-shadow style-02">
                  <h3 class="ftag">
                    <div class="icon">
                      <svg version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        viewBox="0 0 316.5 384">
                        <g>
                          <path class="st2" d="M238.5,384c-75.8,0-151.5,0-227.3,0c-6.1-2.6-10-6.9-11.3-13.5C0,272,0,173.5,0,75c3.9-10.8,7.1-13,18.8-13
                            c67,0,133.9,0,200.9,0c5.2,0,10.6-0.5,15.7,0.2c3.5,0.5,7.2,2,10,4.1c3.8,2.9,4.4,7.5,4.4,12.2c-0.1,95.7-0.1,191.4,0.1,287.1
                            C249.9,374.6,247.1,380.8,238.5,384z M153.9,131.1c-9.3-0.5-18.1,1.9-24.9,7.8c-10.6,9.3-20.4,19.4-30.4,29.5
                            c-3.1,3.2-2.5,8.1,0.6,11.2c3.1,3.1,7.7,3.4,11.2,0.7c1-0.8,1.9-1.7,2.7-2.5c7.4-7.4,14.8-14.9,22.3-22.2c7-6.8,15.4-9.2,24.9-6.6
                            c18.9,5,25.3,28.2,11.8,42.5c-7.8,8.3-16.1,16.1-24,24.2c-3.8,3.9-3.9,8.9-0.5,12.4c3.4,3.5,8.6,3.6,12.4-0.2
                            c8.6-8.5,17.6-16.8,25.6-25.9c11.9-13.5,14.5-29.2,7.1-45.7C185.3,139.9,171.9,131.6,153.9,131.1z M81,288.9
                            c11.7,0.3,21.5-4,29.9-11.9c2.9-2.7,5.7-5.6,8.5-8.4c5.3-5.3,10.7-10.5,15.9-15.9c5-5.3,2.7-13.2-4.1-14.6
                            c-3.5-0.7-6.3,0.8-8.7,3.3c-7.8,7.9-15.6,15.9-23.6,23.5c-10.9,10.4-27.8,9.4-37.4-1.9c-8.6-10.2-8.1-24.8,1.5-34.7
                            c7.9-8.2,16.1-16.1,24-24.2c3.6-3.7,3.4-8.7,0-12.1c-3.4-3.4-8.4-3.5-12.1,0.1c-8.6,8.5-17.5,16.8-25.6,25.8
                            c-12,13.5-14.6,29.2-7.3,45.7C49.4,280.1,62.8,288.4,81,288.9z M150.2,187c-0.3-4.9-2-7.5-5.2-9c-3.8-1.7-7.1-0.6-9.9,2.2
                            c-15.8,15.8-31.6,31.6-47.4,47.4c-3.9,4-4.1,9.1-0.5,12.6c3.6,3.6,8.6,3.4,12.6-0.6c15.8-15.8,31.6-31.5,47.3-47.4
                            C148.8,190.6,149.6,188.1,150.2,187z"/>
                          <path class="st2" d="M75.8,0C144.5,0,213.3,0,282,0c0.8,0.2,1.6,0.6,2.4,0.7c15.2,2.6,27.6,14.3,30.9,29.1c0.5,2,0.8,4.1,1.1,6.2
                            c0,91.8,0,183.5,0,275.3c-0.2,0.8-0.5,1.7-0.6,2.5c-1.7,12.6-8.3,21.8-19.3,27.8c-6.7,3.7-14,5.5-22,4.9c0-1.9,0-3.4,0-4.9
                            c0-54.5,0-109,0-163.5c0-33.4,0-66.7,0-100.1c0-7.5-1.4-14.7-5.3-21.2c-8.3-13.8-20.8-19.8-36.7-19.7c-61.9,0.1-123.7,0-185.6,0
                            c-1.6,0-3.2,0-4.7,0C41.4,28,46.5,17,54.4,10C60.5,4.6,68,1.9,75.8,0z"/>
                          <path class="st2" d="M316.5,36c-0.4-2.1-0.7-4.1-1.1-6.2C312.1,15,299.7,3.4,284.4,0.7c-0.8-0.1-1.6-0.5-2.4-0.7
                            c11.5,0,23,0,34.5,0C316.5,12,316.5,24,316.5,36z"/>
                          <path class="st2" d="M0,370.5c1.2,6.6,5.2,10.9,11.3,13.5c-3.8,0-7.5,0-11.3,0C0,379.5,0,375,0,370.5z"/>
                        </g>
                      </svg>
                    </div>
                  </h3>
                  <p class="title sm lh-sm fw-500">
                    ประกวดราคาจ้างผลิตสื่อสิ่งพิมพ์ประกอบการเสริมสร้างความรู้ความเข้าใจที่ถูกต้องเกี่ยวกับการปกครองในระบอบประชาธิปไตย 
                    จำนวน 4 รายการ ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding) 
                  </p>
                  <div class="chevron-wrapper">
                    <div class="icon">
                      <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <g stroke-width="0"/>
                        <g stroke-linecap="round" stroke-linejoin="round"/>
                        <g><path fill-rule="evenodd" clip-rule="evenodd" d="M14 5C13.4477 5 13 4.55228 13 4C13 3.44772 13.4477 3 14 3H20C20.5523 3 21 3.44772 21 4V10C21 10.5523 20.5523 11 20 11C19.4477 11 19 10.5523 19 10V6.41421L11.7071 13.7071C11.3166 14.0976 10.6834 14.0976 10.2929 13.7071C9.90237 13.3166 9.90237 12.6834 10.2929 12.2929L17.5858 5H14ZM5 7C4.44772 7 4 7.44772 4 8V19C4 19.5523 4.44772 20 5 20H16C16.5523 20 17 19.5523 17 19V14.4375C17 13.8852 17.4477 13.4375 18 13.4375C18.5523 13.4375 19 13.8852 19 14.4375V19C19 20.6569 17.6569 22 16 22H5C3.34315 22 2 20.6569 2 19V8C2 6.34315 3.34315 5 5 5H9.5625C10.1148 5 10.5625 5.44772 10.5625 6C10.5625 6.55228 10.1148 7 9.5625 7H5Z"/></g>
                      </svg>
                    </div>
                  </div>
                </div>  
              </div>
            <?php } ?>                    
          </div>
          <div class="mt-6 pt-4 mb-6">
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

  <?php include_once('component/popup-file-error.php'); ?>
  <?php
    $listResult= ['report-file'];
    include_once('component/popup-file-error-style-02.php');
  ?>
  
  <?php include_once('include/footer-style-05.php'); ?>
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