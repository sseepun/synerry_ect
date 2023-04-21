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
      [ 'url' => '#', 'display' => 'สื่อประชาสัมพันธ์' ],
      [ 'url' => '#', 'display' => 'คู่มือการจัดทำงบรายรับรายจ่าย' ],
    ];
    $breadcrumbTitle = 'สื่อประชาสัมพันธ์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/31.jpg';
    $formContainer = false;
    $sectionOptions = [ 'option-01', 'views'];
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
        <div class="ss-box-shadow xl"></div>
        <div class="body pt-0">
          <div class="grids">
            <!-- Left Content -->
            <div class="grid xl-70 lg-60 md-2-3 sm-100">
              <div class="ss-card ss-card-59" data-aos="fade-up" data-aos-delay="0">
                <h4 class="title lh-sm fw-500">
                  ดร.ฐิติเชฏฐ์ นุชนาฏ กรรมการการเลือกตั้ง ตรวจเยี่ยมและสังเกตการณ์การเลือกตั้งกรุงเทพมหานคร 
                </h4>
                <div class="card-top mt-3">
                  <div class="wrapper">
                    <div class="icon">
                      <em class="fa-regular fa-file-lines"></em>
                      <span class="p sm ml-2 fw-500">เรื่องเด่น กกต.</span>
                    </div>
                    <div class="icon">
                      <p class="p sm fw-500">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-eye"></em>
                      <p class="p sm fw-500 ml-2">280 <span class="ml-1">/</span></p>
                    </div>
                    <div class="icon">
                      <em class="fa-solid fa-share-nodes"></em>
                      <span class="p sm fw-500 ml-2">60</span>
                    </div>
                  </div>
                </div>
                <div class="book-container mt-3">
                  <div class="wow-book" id="wow-book">
                    <?php for($i=0; $i<6; $i++){?>
                      <div><img class="img" src="public/assets/app/images/content/15<?= ($i%2+2) ?>.jpg" alt="Page <?= $i ?>" /></div>
                    <?php }?>
                  </div>
                </div>
              </div>

              <?php 
                $tagContainerStyle = 'style-02';
                include('component/tags-container-mini-site.php'); 
              ?>
            
              <h4 class="title fw-600 mt-6" style="position:relative;" data-aos="fade-up" data-aos-delay="450">
                ไฟล์ที่เกี่ยวข้อง
              </h4>
                 
              <div class="scroll-x-wrapper style-02 mt-2" data-simplebar>
                <table class="table style-05 table-download" data-aos="fade-up" data-aos-delay="600">
                  <tbody>
                    <?php
                      foreach([
                        'zip',
                      ] as $k){
                    ?>
                      <tr class="table-card border table-card-01 box-shadow style-02 mb-2">
                        <td>
                          <div class="download-card">
                            <div>
                            <img src="public/assets/app/images/file/svg/<?= $k ?>.svg" alt="Image File" />
                            <p class="xxs color-white color-black-theme fw-400">0.2 MB</p>
                            </div>
                          </div>
                        </td>
                        <td class="title-container" style="min-width:450px;">
                          <a class="p title fw-600" href="#">
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
                            <div href="#" class="btn btn-white-theme btn-fling-down width-auto btn-action btn-13">
                              ดาวน์โหลดไฟล์
                              <em class="fa-solid fa-arrow-down fling-down ml-1"></em>
                            </div>
                          </div>
                        </td>
                        <td class="report-container" style="min-width:150px;">
                          <em class="fa-solid fa-triangle-exclamation"></em>
                          <a class="xs text color-02 btn-popup-toggle-02 color-black-theme text-center fw-500 mt-1" data-popup="99">
                            แจ้งไฟล์เสีย
                          </a>
                        </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
              </div>
            </div>
            <!-- Right Content -->
            <div class="grid xl-30 lg-40 md-1-3 sm-100">
              <div class="pl-5 pl-unset-sm">
                <div class="category-container" data-aos="fade-up" data-aos-delay="0">
                  <div class="cate-header">
                    <h5 class="fw-600">ประเภท</h5>
                    <p class="fw-400">รายการ</p>
                  </div> 
                  <div class="cate-list mt-2 bcolor-white-theme">
                    <p class="color-02 color-black-theme fw-600">สื่อประชาสัมพันธ์</p>
                    <p class="color-02 color-black-theme fw-600">108</p>
                  </div> 
                  <div class="cate-list bcolor-white-theme">
                    <p class="fw-400">Info Graphic</p>
                    <p class="fw-400">11</p>
                  </div> 
                  <div class="cate-list bcolor-white-theme">
                    <p class="fw-400">คู่มือหรือมาตรฐานการปฏิบัติงาน</p>
                    <p class="fw-400">10</p>
                  </div>  
                </div>   
                <?php 
                  $lastestnews = [
                    ['image' => 'public/assets/app/images/content/149.jpg'],
                    ['image' => 'public/assets/app/images/content/148.jpg'],
                    ['image' => 'public/assets/app/images/content/150.jpg'],
                    ['image' => 'public/assets/app/images/content/151.jpg']
                  ]
                ?>
                <h5 class="fw-600 mb-3" data-aos="fade-up" data-aos-delay="150">
                  สื่อประชาสัมพันธ์ล่าสุด
                </h5> 
                <?php foreach($lastestnews as $d) {?>
                  <a class="ss-card ss-card-63 style-02 mb-4" href="#" data-aos="fade-up" data-aos-delay="150">
                    <div class="wrapper">
                      <div class="img-container">
                        <div class="ss-img vertical">
                          <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                        </div>
                      </div>
                      <div class="text-container">
                        <div class="h6 title fw-500" href="#">
                          คู่มือสำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัดที่เกี่ยวข้องกับการปฏิบัติงานของพรรคการเมือง
                        </div>
                        <div class="card-footer">
                          <div class="wrapper">
                            <div class="icon">
                              <p class="p sm fw-400">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                            </div>
                            <div class="icon">
                              <em class="fa-solid fa-eye"></em>
                              <p class="p sm ml-2 fw-400">280</p>
                            </div>
                          </div>
                          <div class="link-footer mt-1">
                            <p class="text sm color-05 fw-500 border-bottom bcolor-05 lh-sm mr-2">
                              อ่านต่อ
                            </p>
                            <div class="arrow"><em class="fa-solid fa-arrow-right"></em></div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                <?php }?>
              </div>   
              <div class="popular-search-container theme-02 box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
                <p class="h5 fw-600 color-black-theme">แท็กยอดนิยม</p>
                <div class="mt-1">
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">ข่าวประกาศ</span>
                    </div>
                  </div>
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">อบรมหลักสูตร</span>
                    </div>
                  </div>
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">การเลือกตั้ง</span>
                    </div>
                  </div>
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">รายงานการจัดซื้อจัดจ้าง</span>
                    </div>
                  </div>
                  <div class="ss-tags style-03">
                    <div class="tag">
                      <span class="title">ระดับชำนาญการพิเศษ</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
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
     // Book Slider
     $('#wow-book').wowBook({
      height: 500,
      width: 800,
      container: true,
      containerBackground: '#777',
      containerWidth: '100%',
      containerHeight: '100%',
      containerPadding: '20px',
      toolbarPosition: 'bottom',
      thumbnails: true,
      toolbar: 'first, back, next, last, zoomin, zoomout, slideshow, flipsound, fullscreen',
    });

    const wowBookControl = document.querySelector('.wowbook-controls')

    wowBookControl.classList.add('style-02')

    // Copy Link 
    let btn = document.querySelector("#btnLink")
    let toolTip = document.querySelector('#toolTip')

    btn.addEventListener("click", () => {
      toolTip.style.opacity = '1'
      setTimeout(function(){
        toolTip.style.opacity = '0'
      }, 1200);
    });
  </script>
</body>
</html>