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
                      <img src="public/assets/app/images/icon-svg/minisite-document.svg" alt="">
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
            <div class="faq style-02">
              <div class="question box-shadow style-02">
                <h3 class="ftag">
                  <div class="icon">
                    <img src="public/assets/app/images/icon-svg/document-link.svg" alt="">
                  </div>
                </h3>
                <p class="title sm lh-sm fw-500">
                  ประกวดราคาจ้างผลิตสื่อสิ่งพิมพ์ประกอบการเสริมสร้างความรู้ความเข้าใจที่ถูกต้องเกี่ยวกับการปกครองในระบอบประชาธิปไตย 
                  จำนวน 4 รายการ ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding) 
                </p>
                <div class="chevron-wrapper">
                  <div class="icon">
                    <img id="imgInactive" class="inactive" src="public/assets/app/images/icon/53.png" alt="Icon Inactive">
                    <img id="imgActive" class="active" src="public/assets/app/images/icon/54.png" alt="Icon Inactive">
                  </div>
                </div>
              </div>  
            </div>
            <div class="faq style-02">
              <div class="question box-shadow style-02">
                <h3 class="ftag">
                  <div class="icon">
                    <img src="public/assets/app/images/icon-svg/document-link.svg" alt="">
                  </div>
                </h3>
                <p class="title sm lh-sm fw-500">
                  ประกวดราคาจ้างผลิตสื่อสิ่งพิมพ์ประกอบการเสริมสร้างความรู้ความเข้าใจที่ถูกต้องเกี่ยวกับการปกครองในระบอบประชาธิปไตย 
                  จำนวน 4 รายการ ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding) 
                </p>
                <div class="chevron-wrapper">
                  <div class="icon">
                    <img id="imgInactive02" class="inactive" src="public/assets/app/images/icon/53.png" alt="Icon Inactive">
                    <img id="imgActive02" class="active" src="public/assets/app/images/icon/54.png" alt="Icon Inactive">
                  </div>
                </div>
              </div>  
            </div>                       
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

    const iconDragActive = document.getElementById('iconDragActive');
    const iconDragInactive = document.getElementById('iconDragInactive');
    
    const btnThemeBlackWhiteViews03 = document.querySelector('.theme-btn-1');
    const btnThemeBlackYellowViews03 = document.querySelector('.theme-btn-2');

    function changeIconThemeBlackWhiteViews03() {
      iconDragActive.src = 'public/assets/app/images/icon-svg/drag-white.svg';
      iconDragInactive.src = 'public/assets/app/images/icon-svg/drag-black.svg';
    }

    function changeIconThemeBlackYellowViews03() {
      iconDragActive.src = 'public/assets/app/images/icon-svg/drag-yellow.svg';
      iconDragInactive.src = 'public/assets/app/images/icon-svg/drag-black.svg';
    }

    btnThemeBlackWhiteViews03.removeEventListener("click", changeIconThemeBlackYellow);
    btnThemeBlackWhiteViews03.addEventListener("click", changeIconThemeBlackWhiteViews03);
    btnThemeBlackYellowViews03.removeEventListener("click", changeIconThemeBlackYellow);
    btnThemeBlackYellowViews03.addEventListener("click", changeIconThemeBlackYellowViews03);

    const theme01 = $('.theme-btn-3');
    const theme02 = $('.theme-btn-4');
    const theme03 = $('.theme-btn-5');
    const theme04 = $('.theme-btn-6');

    theme01.click(function(e){
      document.getElementById("imgInactive").src = 'public/assets/app/images/icon/53.png';
      document.getElementById("imgActive").src = 'public/assets/app/images/icon/54.png';
      document.getElementById("imgInactive02").src = 'public/assets/app/images/icon/53.png';
      document.getElementById("imgActive02").src = 'public/assets/app/images/icon/54.png';
    });
    theme02.click(function(e){
      document.getElementById("imgInactive").src = 'public/assets/app/images/icon/external-link-inactive-theme-02.png';
      document.getElementById("imgActive").src = 'public/assets/app/images/icon/external-link-active-theme-02.png';
      document.getElementById("imgInactive02").src = 'public/assets/app/images/icon/external-link-inactive-theme-02.png';
      document.getElementById("imgActive02").src = 'public/assets/app/images/icon/external-link-active-theme-02.png';
    });
    theme03.click(function(e){
      document.getElementById("imgInactive").src = 'public/assets/app/images/icon/external-link-inactive-theme-03.png';
      document.getElementById("imgActive").src = 'public/assets/app/images/icon/external-link-active-theme-03.png';
      document.getElementById("imgInactive02").src = 'public/assets/app/images/icon/external-link-inactive-theme-03.png';
      document.getElementById("imgActive02").src = 'public/assets/app/images/icon/external-link-active-theme-03.png';
    });
    theme04.click(function(e){
      document.getElementById("imgInactive").src = 'public/assets/app/images/icon/external-link-inactive-theme-04.png';
      document.getElementById("imgActive").src = 'public/assets/app/images/icon/external-link-active-theme-04.png';
      document.getElementById("imgInactive02").src = 'public/assets/app/images/icon/external-link-inactive-theme-04.png';
      document.getElementById("imgActive02").src = 'public/assets/app/images/icon/external-link-active-theme-04.png';
    });

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