<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php $sidePanelStyle = 'style-02'; ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ข้อมูลสำนักงาน' ],
      [ 'url' => '#', 'display' => 'ทำเนียบ กกต. จว.' ],
    ];
    $breadcrumbTitle = 'ทำเนียบ กกต. จว.';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/26.jpg';
    $backgroundColor = 'style-02';
    $sectionOptions = ['']; // ['views', 'rss']
    $formContainer = false; // select form
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
   $content = [
    [
      'name' => 'นายเอนก เกษมสุข',
      'status' => 'กกต. จว. กทม.',
      'desc' => '',
      'image' => 'public/assets/app/images/content/110.jpg'
    ],[
      'name' => 'นายเริงศักดิ์ มหาวินิจฉัยมนตรี',
      'status' => 'กกต. จว. กทม.',
      'desc' => '',
      'image' => 'public/assets/app/images/content/111.jpg'
    ],[
      'name' => 'นายสมดี คชายั่งยืน',
      'status' => 'กกต. จว. กทม.',
      'desc' => '',
      'image' => 'public/assets/app/images/content/112.jpg'
    ],[
      'name' => 'นายสมศักดิ์ สุริยมงคล',
      'status' => 'กกต. จว. กทม.',
      'desc' => '',
      'image' => 'public/assets/app/images/content/113.jpg'
    ],[
      'name' => 'นายธัชสกล พรหมจมาศ',
      'status' => 'กกต. จว. กทม.',
      'desc' => 'แทน นายสมศักดิ์ สุริยมงคล',
      'image' => 'public/assets/app/images/content/114.jpg'
    ],
   ]
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body">
          <div class="ss-title style-02">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ทำเนียบ กกต. จว.
            </h3>
          </div>
          <div class="election-commission-container">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/01.png')"></div>
            <div class="header">
              <p class="h6 fw-500" data-aos="fade-up" data-aos-delay="150">
                คณะกรรมการการเลือกตั้งประจำจังหวัดกรุงเทพมหานคร ชุดที่ 1
              </p>
            </div>
            <div class="body" data-aos="fade-up" data-aos-delay="150">
              <div class="grids">
                <div class="grid lg-100 md-100 sm-100">
                  <div class="grids jc-center">
                    <div class="grid lg-20 md-1-3">
                      <div class="ss-card">
                        <div class="ss-img vertical bradius-round">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/109.jpg');"></div>
                        </div>
                        <div class="text-container text-center pt-3">
                          <p class="h6 lh-xs fw-600">นายสยุมพร ลิ่มไทย</p>
                          <p class="fw-400">ประธาน กกต. กทม.</p>
                        </div>
                      </div>
                    </div>
                    <div class="grid lg-100 md-100 sm-100">
                      <div class="grids jc-center">
                        <?php foreach($content as $d) {?>
                          <div class="grid lg-20 md-1-3">
                            <div class="ss-card">
                              <div class="ss-img vertical bradius-round">
                                <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                              </div>
                              <div class="text-container text-center pt-3">
                                <p class="h6 lh-xs fw-600"><?= $d['name'] ?></p>
                                <p class="fw-400"><?= $d['status'] ?></p>
                                <p class="sm fw-400"><?= $d['desc'] ?></p>
                              </div>
                            </div>
                          </div>
                        <?php }?>   
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php 
            $content02 = [
              [
                'name' => 'พล.ต.ท. สมคิด บุญถนอม',
                'status' => 'ประธาน กกต. กทม.',
                'desc' => '',
                'image' => 'public/assets/app/images/content/115.jpg'
              ],[
                'name' => 'นายอภิชัย เจษฎานนท์',
                'status' => 'ประธาน กกต. กทม.',
                'desc' => 'แทน พล.ต.ท. สมคิด บุญถนอม',
                'image' => 'public/assets/app/images/content/116.jpg'
              ],[
                'name' => 'นายบุญมา เตชะวณิช',
                'status' => 'ประธาน กกต. กทม.',
                'desc' => 'แทน นายอภิชัย เจษฎานนท์',
                'image' => 'public/assets/app/images/content/117.jpg'
              ]
            ]
          ?>
          <div class="election-commission-container">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/01.png')"></div>
            <div class="header">
              <p class="h6 fw-500" data-aos="fade-up" data-aos-delay="300">
                คณะกรรมการการเลือกตั้งประจำจังหวัดกรุงเทพมหานคร ชุดที่ 2
              </p>
            </div>
            <div class="body" data-aos="fade-up" data-aos-delay="450">
              <div class="grids">
                <div class="grid lg-100 md-100 sm-100">
                  <div class="grids jc-center">
                    <?php foreach($content02 as $d) {?>
                      <div class="grid lg-20 md-1-3">
                      <div class="ss-card">
                        <div class="ss-img vertical bradius-round">
                          <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                        </div>
                        <div class="text-container text-center pt-3">
                          <p class="h6 lh-xs fw-600"><?= $d['name'] ?></p>
                          <p class="fw-400"><?= $d['status'] ?></p>
                          <p class="sm fw-400"><?= $d['desc'] ?></p>
                        </div>
                      </div>
                    </div>
                    <?php }?>
                   
               
                    <?php 
                      $content03 = [
                        [
                          'name' => 'นายบุณยเกียรติ รักชาติเจริญ',
                          'status' => 'กกต. จว. กทม.',
                          'desc' => '',
                          'image' => 'public/assets/app/images/content/118.jpg'
                        ],[
                          'name' => 'นายสุริยา ดารากร ณ อยุธยา',
                          'status' => 'กกต. จว. กทม.',
                          'desc' => 'แทน พล.ต.ท. สมคิด บุญถนอม',
                          'image' => 'public/assets/app/images/content/119.jpg'
                        ],[
                          'name' => 'นายประดิษฐ์ ขันติกาโร',
                          'status' => 'กกต. จว. กทม.',
                          'desc' => '',
                          'image' => 'public/assets/app/images/content/120.jpg'
                        ],[
                          'name' => 'นายชัยวัฒน์ ลิมป์วรรณธะ',
                          'status' => 'กกต. จว. กทม.',
                          'desc' => 'แทน นายประดิษฐ์ ขันติกาโร',
                          'image' => 'public/assets/app/images/content/121.jpg'
                        ]
                      ]
                    ?>
                    <div class="grid lg-100 md-100 sm-100">
                      <div class="grids jc-center">
                        <?php foreach($content03 as $d) {?>
                          <div class="grid lg-20 md-1-3">
                            <div class="ss-card">
                              <div class="ss-img vertical bradius-round">
                                <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                              </div>
                              <div class="text-container text-center pt-3">
                                <p class="h6 lh-xs fw-600"><?= $d['name'] ?></p>
                                <p class="fw-400"><?= $d['status'] ?></p>
                                <p class="sm fw-400"><?= $d['desc'] ?></p>
                              </div>
                            </div>
                          </div>
                        <?php }?>   
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <?php 
            $content04 = [
              [
                'name' => 'นางกรวรรณ วังสถาพร',
                'status' => 'กกต. จว. กทม.',
                'desc' => '',
                'image' => 'public/assets/app/images/content/123.jpg'
              ],[
                'name' => 'นายชวลิต ชูขจร',
                'status' => 'กกต. จว. กทม.',
                'desc' => '',
                'image' => 'public/assets/app/images/content/124.jpg'
              ],[
                'name' => 'พ.ต.ท. คานูณ สุทธิเศรณี',
                'status' => 'กกต. จว. กทม.',
                'desc' => '',
                'image' => 'public/assets/app/images/content/125.jpg'
              ],[
                'name' => 'นายอทิรัตน์ นิธิไทยนันท์',
                'status' => 'กกต. จว. กทม.',
                'desc' => '',
                'image' => 'public/assets/app/images/content/126.jpg'
              ],[
                'name' => 'นายสุเมธา คงคิด',
                'status' => 'กกต. จว. กทม.',
                'desc' => 'แทน นายอทิรัตน์ นิธิไทยนันท์',
                'image' => 'public/assets/app/images/content/127.jpg'
              ]
            ]
          ?>
          <div class="election-commission-container">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/01.png')"></div>
            <div class="header">
              <p class="h6 fw-500" data-aos="fade-up" data-aos-delay="600">
                คณะกรรมการการเลือกตั้งประจำจังหวัดกรุงเทพมหานคร ชุดที่ 3
              </p>
            </div>
            <div class="body" data-aos="fade-up" data-aos-delay="750">
              <div class="grids">
                <div class="grid lg-100 md-100 sm-100">
                  <div class="grids jc-center">
                    <div class="grid lg-20 md-1-3">
                      <div class="ss-card">
                        <div class="ss-img vertical bradius-round">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/122.jpg');"></div>
                        </div>
                        <div class="text-container text-center pt-3">
                          <p class="h6 lh-xs fw-600">นางศรีพา ปานกุล</p>
                          <p class="fw-400">ประธาน กกต. กทม.</p>
                        </div>
                      </div>
                    </div>
                    <div class="grid lg-100 md-100 sm-100">
                      <div class="grids jc-center">
                        <?php foreach($content04 as $d) {?>
                          <div class="grid lg-20 md-1-3">
                            <div class="ss-card">
                              <div class="ss-img vertical bradius-round">
                                <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                              </div>
                              <div class="text-container text-center pt-3">
                                <p class="h6 lh-xs fw-600"><?= $d['name'] ?></p>
                                <p class="fw-400"><?= $d['status'] ?></p>
                                <p class="sm fw-400"><?= $d['desc'] ?></p>
                              </div>
                            </div>
                          </div>
                        <?php }?>   
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        
          <?php 
            $content05 = [
              [
                'name' => 'นายปรีชา เอื้ออนันตธนกุล',
                'status' => 'กกต. จว. กทม.',
                'desc' => '',
                'image' => 'public/assets/app/images/content/129.jpg'
              ],[
                'name' => 'นายทวี ปิยะพัฒนา',
                'status' => 'กกต. จว. กทม.',
                'desc' => '',
                'image' => 'public/assets/app/images/content/130.jpg'
              ],[
                'name' => 'นายสมชาย อัศวเศรณี',
                'status' => 'กกต. จว. กทม.',
                'desc' => '',
                'image' => 'public/assets/app/images/content/131.jpg'
              ],[
                'name' => 'นายแสนผิน สุขี',
                'status' => 'กกต. จว. กทม.',
                'desc' => '',
                'image' => 'public/assets/app/images/content/132.jpg'
              ],
            ]
          ?>                
          <div class="election-commission-container">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/01.png')"></div>
            <div class="header">
              <p class="h6 fw-500" data-aos="fade-up" data-aos-delay="900">
                คณะกรรมการการเลือกตั้งประจำจังหวัดกรุงเทพมหานคร ชุดที่ 4
              </p>
            </div>
            <div class="body" data-aos="fade-up" data-aos-delay="1050">
              <div class="grids">
                <div class="grid lg-100 md-100 sm-100">
                  <div class="grids jc-center">
                    <div class="grid lg-20 md-1-3">
                      <div class="ss-card">
                        <div class="ss-img vertical bradius-round">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/128.jpg');"></div>
                        </div>
                        <div class="text-container text-center pt-3">
                          <p class="h6 lh-xs fw-600">นายสุทธิพงษ์ กาญจนเกษร</p>
                          <p class="fw-400">ประธาน กกต. กทม.</p>
                        </div>
                      </div>
                    </div>
                    <div class="grid lg-100 md-100 sm-100">
                      <div class="grids jc-center">
                        <?php foreach($content05 as $d) {?>
                          <div class="grid lg-20 md-1-3">
                            <div class="ss-card">
                              <div class="ss-img vertical bradius-round">
                                <div class="img-bg" style="background-image:url('<?= $d['image'] ?>');"></div>
                              </div>
                              <div class="text-container text-center pt-3">
                                <p class="h6 lh-xs fw-600"><?= $d['name'] ?></p>
                                <p class="fw-400"><?= $d['status'] ?></p>
                                <p class="sm fw-400"><?= $d['desc'] ?></p>
                              </div>
                            </div>
                          </div>
                        <?php }?>   
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
  </section>

  <?php include_once('include/footer-style-09.php'); ?>
  <?php include_once('include/script.php'); ?>

</body>
</html>