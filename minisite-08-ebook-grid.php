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
      [ 'url' => '#', 'display' => 'สื่อประชาสัมพันธ์' ],
    ];
    $breadcrumbTitle = 'สื่อประชาสัมพันธ์';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/31.jpg';
    $formContainer = true;
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
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ไฮไลต์สื่อประชาสัมพันธ์
            </h3>
          </div>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php for($i=0; $i<4; $i++){?>
                <div class="swiper-slide">
                  <div class="grids">
                    <div class="grid xl-1-3 lg-50 md-100 sm-100" data-aos="fade-up" data-aos-delay="150">
                      <a class="ss-card ss-card-36" href="#">
                        <div class="ss-img vertical-04">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/147.jpg');"></div>
                        </div>
                        <div class="text-wrapper">
                          <div class="h6 title size-02 color-white fw-500" href="#">
                            คู่มือสำนักงานคณะกรรมการการเลือกตั้งประจำจังหวัดที่เกี่ยวข้องกับการปฏิบัติงานของพรรคการเมือง
                          </div>
                          <div class="card-footer mt-2">
                            <div class="wrapper color-white color-white-theme">
                              <div class="icon">
                                <p class="p sm">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                              </div>
                              <div class="icon">
                                <em class="fa-solid fa-eye"></em>
                                <p class="p sm ml-2">280 <span class="ml-1">/</span></p>
                              </div>
                              <div class="icon">
                                <em class="fa-solid fa-share-nodes"></em>
                                <span class="p sm ml-2">60</span>
                              </div>
                            </div>
                            <div class="btn btn-action style-05 btn-24">
                              <em class="fa-solid fa-arrow-right"></em>
                            </div>
                          </div>
                        </div>
                        <div class="filter-01"></div>
                      </a>
                    </div>
                    <div class="grid xl-2-3 lg-50 md-100 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
                      <div class="grids">
                        <div class="grid lg-100 md-100 sm-100 mt-0">
                          <div class="grids">
                            <div class="grid xl-50 lg-100 md-50 sm-100">
                              <div class="ss-card ss-card-63">
                                <div class="wrapper">
                                  <div class="img-container">
                                    <div class="ss-img vertical">
                                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/149.jpg');"></div>
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
                              </div>
                            </div>
                            <div class="grid xl-50 lg-100 md-50 sm-100">
                              <div class="ss-card ss-card-63">
                                <div class="wrapper">
                                  <div class="img-container">
                                    <div class="ss-img vertical">
                                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/150.jpg');"></div>
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
                                        <p class="text sm color-05 fw-500 border-bottom bcolor-05 lh-sm mr-2">อ่านต่อ</p>
                                        <div class="arrow"><em class="fa-solid fa-arrow-right"></em></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="grid lg-100 md-100 sm-100 mt-0">
                          <div class="grids">
                            <div class="grid xl-50 lg-100 md-50 sm-100">
                              <div class="ss-card ss-card-63">
                                <div class="wrapper">
                                  <div class="img-container">
                                    <div class="ss-img vertical">
                                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/148.jpg');"></div>
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
                                        <p class="text sm color-05 fw-500 border-bottom bcolor-05 lh-sm mr-2">อ่านต่อ</p>
                                        <div class="arrow"><em class="fa-solid fa-arrow-right"></em></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="grid xl-50 lg-100 md-50 sm-100">
                              <div class="ss-card ss-card-63">
                                <div class="wrapper">
                                  <div class="img-container">
                                    <div class="ss-img vertical">
                                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/151.jpg');"></div>
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
                                        <p class="text sm color-05 fw-500 border-bottom bcolor-05 lh-sm mr-2">อ่านต่อ</p>
                                        <div class="arrow"><em class="fa-solid fa-arrow-right"></em></div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <?php }?>
            </div>
            <div class="bullet mt-6">
              <div class="container">
                <div class="bullet-wrapper">
                  <div class="dots"></div>
                </div>
              </div>  
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <?php 
    $ebooks = [
      [
        'image' => 'public/assets/app/images/content/47.jpg', 
        'title' => 'รวมกฎหมาย ระเบียบ และประกาศที่เกี่ยวข้องกับงานพรรคการเมือง'
      ],[
        'image' => 'public/assets/app/images/content/48.jpg', 
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/49.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/50.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/51.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/47.jpg',
        'title' => 'รวมกฎหมาย ระเบียบ และประกาศที่เกี่ยวข้องกับงานพรรคการเมือง'
      ],[
        'image' => 'public/assets/app/images/content/53.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/54.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/47.jpg', 
        'title' => 'รวมกฎหมาย ระเบียบ และประกาศที่เกี่ยวข้องกับงานพรรคการเมือง'
      ],[
        'image' => 'public/assets/app/images/content/48.jpg', 
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/49.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],[
        'image' => 'public/assets/app/images/content/50.jpg',
        'title' => 'คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น
        คู่มือการจัดทำบัญชีรายรับและรายจ่ายของผู้สมัครรับเลือกตั้งสมาชิกสภาท้องถิ่นหรือผู้บริหารท้องถิ่น'
      ],
    ]
  ?>

  <section class="section-padding">
    <div class="container">
      <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($ebooks as $d) {?>
          <div class="grid xl-25 lg-1-3 md-50">
          <a class="ss-card ss-card-62 mb-3" href="#">
            <div class="wrapper">
              <div class="img-container">
                <div class="ebook-container">
                  <div class="wrapper">
                    <img src="<?= $d['image']?>" alt="Ebook">
                      <div class="shadow-container">
                        <img class="img" src="public/assets/app/images/content/shadow.png" alt="Shadow">  
                    </div>
                  </div>
                </div>
                <div class="filter-04"></div>
                <div class="btn-scale">
                  <div class="btn btn-action style-06 btn-27">
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-container">
              <p class="title fw-500">
                <?= $d['title'] ?>
              </p>
              <div class="card-footer mt-1">
                <div class="wrapper color-gray">
                  <div class="icon">
                    <span class="p sm fw-400">08 มิถุนายน 2565</span>
                  </div>
                  <div class="icon">
                    <em class="fa-solid fa-eye"></em>
                    <span class="p sm fw-400 ml-2">280</span>
                  </div>
                  <div class="icon">
                    <em class="fa-solid fa-share-nodes"></em>
                    <span class="p sm fw-400 ml-2">60</span>
                  </div>
                </div>
                <div class="link-footer">
                  <p class="text color-05 fw-500 border-bottom bcolor-05 lh-sm mr-2">อ่านต่อ</p>
                  <div class="arrow"><em class="fa-solid fa-arrow-right"></em></div>
                </div>
              </div>
              <div class="card-line style-02"></div>
            </div>
          </a>
        </div>
        <?php }?>
      </div>
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          $style = "style-02";
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>