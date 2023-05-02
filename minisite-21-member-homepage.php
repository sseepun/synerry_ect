<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php 
    $sidebarStyle = 'style-02';
    include_once('include/sidebar.php'); 
  ?>

  <div id="main" class="main-container style-02">
    <div class="main-header" data-aos="fade-in" data-aos-delay="0">
      <a class="main-header-menu" href="./01-home-01.php">
        <div class="icon">
          <img src="public/assets/app/images/icon-svg/homepage-white.svg" alt="Icon">
        </div>
        <p class="sm header-title fw-400 ml-1 mr-1">ไปที่หน้าหลักของเว็บไซต์</p>
        <div class="icon title-arrow">
          <em class="fa-solid fa-arrow-right"></em>
        </div>
      </a>
    </div>
    <div id="mainContent" class="main-content">
      <div id="banner02" class="banner-02 style-02">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<5; $i++){?>
              <div class="swiper-slide">
                <div class="wrapper">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/bg/37.jpg');"></div>
                  <div class="hero" data-aos="fade-in" data-aos-delay="0">
                    <img src="public/assets/app/images/hero/08.png" class="Hero" />
                  </div>
                  <div class="text-wrapper" data-aos="fade-in" data-aos-delay="0">
                    <div>
                      <h4 class="color-black-theme fw-500">
                        จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>
                      </h4>
                      <h3>
                        ตามหลัก<span class="h2 color-black-theme fw-600 color-04">ประชาธิปไตย</span>
                      </h3>
                      <h2 class="color-black-theme fw-700">
                        <span class="color-04">โปร่งใส</span><span class="h3 fw-500">และ</span><span class="color-04">เป็นธรรม</span>
                      </h2>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="bullet">
            <div class="container h-full">
              <div id="bulletWrapper" class="bullet-wrapper">
                <div class="arrow-container">
                  <div class="arrow btn-icon-prev">
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                  <div class="arrow btn-icon-next">
                    <em class="fa-solid fa-arrow-left"></em>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="grids">
          <div class="grid xl-50 lg-100 md-100 sm-100">
            <div class="ss-box style-02 pb-4 m-unset w-full">
              <div class="ss-box-header d-flex ai-center jc-space-between">
                <h5 class="color-black color-05 fw-500">ข่าวสารประชาสัมพันธ์</h5> 
                <div class="ellipsis d-none style-02">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content size-02 p-4">
                <div class="grids jc-center">
                  <div class="grid lg-100 md-100 sm-100">
                    <a class="ss-card ss-card-07 style-03" href="#">
                      <div class="wrapper">
                        <div class="img-container">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/02.jpg');"></div>
                            <div class="filter-04"></div>
                            <div class="btn-scale">
                              <div class="btn btn-action style-06 btn-27">
                                <em class="fa-solid fa-arrow-right"></em>
                              </div>
                            </div>
                            <div class="card-line style-01 size-02"></div>
                          </div>
                        </div>
                        <div class="text-container">
                          <div class="title p fw-400" href="#">
                            กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                            ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                            ปฏิบัติงานระดับการชำนาญพิเศษ
                          </div>
                          <div class="card-footer mt-2">
                            <div class="wrapper color-gray">
                              <div class="icon">
                                <em class="fa-solid fa-calendar-days"></em>
                                <span class="p sm ml-2 fw-400">08 มิถุนายน 2565</span>
                              </div>
                              <div class="icon">
                                <em class="fa-solid fa-eye"></em>
                                <span class="p sm fw-300 ml-2 fw-400">280</span>
                              </div>
                              <div class="icon">
                                <em class="fa-solid fa-share-nodes"></em>
                                <span class="p sm fw-300 ml-2 fw-400">60</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>

                  <?php 
                    $content01 = [
                      ['image' => 'public/assets/app/images/content/03.jpg'], 
                      ['image' => 'public/assets/app/images/content/04.jpg'], 
                     
                    ]
                  ?>
                  <?php foreach($content01 as $d) {?>
                    <div class="grid lg-50 sm-100 mt-2">
                      <div class="ss-card ss-card-12 style-02 mt-3">
                        <div class="ss-img">
                          <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                          <div class="filter-04"></div>
                          <div class="btn-scale">
                            <div class="btn btn-action style-06 btn-27">
                              <em class="fa-solid fa-arrow-right"></em>
                            </div>
                          </div>
                          <div class="card-line style-01 size-02"></div>
                        </div>
                        <div class="text-container no-border">
                          <p class="title style-02 fw-400 lh-sm mt-2">
                            รองเลขาธิการคณะกรรมการเลือกตั้ง เป็นประธานในการประชุม
                            ผู้บริหารกลุ่มภารกิจ
                          </p>
                          <div class="card-footer mt-2">
                            <div class="wrapper color-gray">
                              <div class="icon">
                                <em class="fa-solid fa-calendar-days"></em>
                                <span class="p sm fw-400 ml-2">08 มิถุนายน 2565</span>
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
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
              <div class="btns ai-center jc-center">
                <a href="#" class="btn btn-action c-btn c-btn--animate-left-right btn-26 theme-03">
                  <div class="c-wrapper jc-center">
                    <span>ดูทั้งหมด</span>
                    <span class="c-icon pl-6">
                      <em class="fa-solid fa-arrow-right"></em>
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <div class="grid xl-50 lg-100 md-100 sm-100">
            <div class="ss-box style-02 pb-4 m-unset w-full">
              <div class="ss-box-header d-flex ai-center jc-space-between">
                <h5 class="color-black color-05 fw-500">เอกสารดาวน์โหลด</h5> 
                <div class="ellipsis d-none style-02">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content size-02 p-4">
                <div class="scroll-x-wrapper">
                <table class="table table-download style-05">
                  <tbody>
                    <?php
                      foreach([
                        'minisite-document', 'document-link', 'minisite-document', 'minisite-document', 'minisite-document'
                      ] as $k){
                    ?>
                      <tr class="box-shadow style-02 mb-2">
                        <td>
                          <div class="download-card">
                            <img src="public/assets/app/images/icon-svg/<?= $k ?>.svg" alt="Image File">
                          </div>
                        </td>
                        <td class="text-left title-container" style="min-width:400px;">
                          <a class="fw-400 h-color-31" href="#">
                            ประกวดราคาซื้อวัสดุสำนักงาน จำนวน 90 รายการ ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)
                          </a>
                        </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
                </div>
              </div>
              <div class="btns ai-center jc-center">
                <a href="#" class="btn btn-action c-btn c-btn--animate-left-right btn-26 theme-03">
                  <div class="c-wrapper jc-center">
                    <span>ดูทั้งหมด</span>
                    <span class="c-icon pl-6">
                      <em class="fa-solid fa-arrow-right"></em>
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </div>
          <?php 
            $content02 = [
              [
                'number' => '5',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)',
                'style' => 'style-02'
              ],[
                'number' => '4',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)',
                'style' => ''
              ],[
                'number' => '3',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)',
                'style' => 'style-02'
              ],[
                'number' => '2',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)',
                'style' => ''
              ],[
                'number' => '1',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)',
                'style' => 'style-02'
              ]
            ]
          ?>
          <div class="grid xl-50 lg-100 md-100 sm-100">
            <div class="ss-box style-02 pb-4 m-unset w-full">
              <div class="ss-box-header d-flex ai-center jc-space-between">
                <h5 class="color-black color-05 fw-500">ปฏิทินกิจกรรม</h5> 
                <div class="ellipsis d-none style-02">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content p-4">
                <?php foreach($content02 as $d) {?>
                  <div class="ss-card ss-card-35 style-02 mb-3">
                    <div class="wrapper">
                      <div class="date">
                        <div class="wrapper <?= $d['style']?>">
                          <?php if($d['style'] === 'style-02') {?>
                            <p class="xxs day fw-400">18 ก.พ. 66</p>
                            <p class="xxs month fw-400">19 ก.พ. 66</p>
                          <?php } else {?>
                            <p class="h6 day fw-400">20</p>
                            <p class="xxs month">ก.w. 66</p>
                          <?php } ?> 
                        </div>
                      </div>
                      <div class="text-container">
                        <p class="title h-color-31 lh-sm fw-400">
                          <?= $d['title']?>
                        </p>
                      </div>      
                    </div>
                   </div>
                <?php }?>
              </div>
              <div class="btns ai-center jc-center">
                <a href="#" class="btn btn-action c-btn c-btn--animate-left-right btn-26 theme-03">
                  <div class="c-wrapper jc-center">
                    <span>ดูทั้งหมด</span>
                    <span class="c-icon pl-6">
                      <em class="fa-solid fa-arrow-right"></em>
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </div>    
          <div class="grid xl-50 lg-100 md-100 sm-100">
            <div class="ss-box style-02 pb-4 m-unset w-full">
              <div class="ss-box-header d-flex ai-center jc-space-between">
                <h5 class="color-black color-05 fw-500">คลังวิดีโอ</h5> 
                <div class="ellipsis d-none style-02">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content  p-4">
                <div class="grids no-gap">
                  <div class="grid lg-70 md-100 sm-100">
                    <a class="ss-card ss-card-16 theme-01" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox="">
                      <div class="ss-img">
                        <div class="filter-04"></div>
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/66.jpg');"></div>
                        <div class="btn-scale">
                          <div class="btn btn-action style-06 btn-27">
                            <em class="fa-solid fa-arrow-right"></em>
                          </div>
                        </div>
                        <div class="card-line style-01 size-02"></div>
                        <div class="btn-video">
                          <div class="img-container">
                            <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                          </div>
                        </div>
                      </div>
                      <div class="text-container">
                        <p class="title fw-500">
                          EP 19 ศส ปชต กับการส่งเสริมประชาธิปไตยและการเลือกตั้ง
                        </p>
                        <div class="card-bottom mt-1">
                          <div class="wrapper">
                            <div class="icon">
                              <em class="fa-solid fa-calendar-days"></em>
                              <span class="p sm ml-2 fw-400">08 มิถุนายน 2565</span>
                            </div>
                          </div>
                        </div>
                      </div>
                    </a>
                  </div>
                  <?php 
                    $content03 = [
                      ['image' => 'public/assets/app/images/content/42.jpg'],
                      ['image' => 'public/assets/app/images/content/46.jpg'],
                      ['image' => 'public/assets/app/images/content/39.jpg'],
                    ]
                  ?>
                  <div class="grid lg-30 md-100 sm-100">
                    <?php foreach($content03 as $d) {?>
                      <div class="pl-2 pl-unset-md">
                        <a class="ss-card ss-card-16 mb-2" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox="">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                            <div class="filter-04"></div>
                            <div class="btn-scale">
                              <div class="btn btn-action sm style-06 btn-27">
                                <em class="fa-solid fa-arrow-right"></em>
                              </div>
                            </div>
                            <div class="card-line style-01 size-02"></div>
                            <div class="btn-video">
                              <div class="img-container">
                                <img src="public/assets/app/images/icon-svg/play-square.svg" alt="Video Icon">
                              </div>
                            </div>
                          </div>
                        </a>
                      </div>
                    <?php } ?>
                  </div>
                </div>  
              </div>
              <div class="btns ai-center jc-center">
                <a href="#" class="btn btn-action c-btn c-btn--animate-left-right btn-26 theme-03">
                  <div class="c-wrapper jc-center">
                    <span>ดูทั้งหมด</span>
                    <span class="c-icon pl-6">
                      <em class="fa-solid fa-arrow-right"></em>
                    </span>
                  </div>
                </a>
              </div>
            </div>
          </div>      
          <div class="grid xl-100 lg-100 md-100 sm-100">
            <div class="ss-box style-02 pb-4 m-unset w-full">
              <div class="ss-box-header d-flex ai-center jc-space-between">
                <h5 class="color-black color-05 fw-500">คลังภาพ</h5> 
                <div class="ellipsis d-none style-02">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content size-unset p-4">
                <div class="grids">
                  <div class="grid xl-1-3 lg-100 md-100 sm-100 mt-0">
                    <a class="ss-card ss-card-06" href="#">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/45.jpg');"></div>
                        <div class="filter-04"></div>
                        <div class="number-of-picture">
                          <em class="fa-solid fa-images"></em>
                          <span class="number">15</span>
                        </div>
                        <div class="btn-scale">
                          <div class="btn btn-action style-06 btn-27">
                            <em class="fa-solid fa-arrow-right"></em>
                          </div>
                        </div>
                        <div class="card-line style-01 size-02"></div>
                      </div>
                      <div class="text-wrapper">
                        <div class="title h6 fw-500 h-color-31" href="#">
                          กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                          ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                          ปฏิบัติงานระดับการชำนาญพิเศษ
                          กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                          ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                          ปฏิบัติงานระดับการชำนาญพิเศษ
                        </div>
                        <div class="card-top">
                          <div class="wrapper">
                            <div class="icon">
                              <em class="fa-solid fa-calendar-days"></em>
                              <span class="p sm ml-2">08 มิถุนายน 2565</span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="filter-01"></div>
                    </a>
                  </div>
                  <div class="grid xl-2-3 lg-100 md-100 sm-100 mt-0 mt-unset-lg">
                    <div class="grids">
                      <div class="grid lg-50 md-100 sm-100 mt-0">
                        <div class="grids">
                          <div class="grid lg-100 md-100 sm-100 mt-1 mt-unset-lg">
                            <a class="ss-card ss-card-07 theme-01 style-02" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="filter-04"></div>
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/20.jpg');"></div>
                                    <div class="number-of-picture">
                                      <em class="fa-solid fa-images"></em>
                                      <span class="number">15</span>
                                    </div>
                                    <div class="btn-scale">
                                      <div class="btn btn-action sm style-06 btn-27">
                                        <em class="fa-solid fa-arrow-right"></em>
                                      </div>
                                    </div>
                                    <div class="card-line style-01 size-02"></div>
                                  </div>
                                </div>
                                <div class="text-container">
                                  <div class="title style-02 p fw-400" href="#">
                                    กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                                    ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                                    ปฏิบัติงานระดับการชำนาญพิเศษ
                                  </div>
                                  <div class="card-footer mt-2">
                                    <div class="wrapper">
                                      <div class="icon">
                                        <em class="fa-solid fa-calendar-days"></em>
                                        <span class="p sm ml-2 fw-400">08 มิถุนายน 2565</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-100 md-100 sm-100 mt-1 mt-unset-lg">
                            <a class="ss-card ss-card-07 theme-01 style-02" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="filter-04"></div>
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/22.jpg');"></div>
                                    <div class="number-of-picture">
                                      <em class="fa-solid fa-images"></em>
                                      <span class="number">15</span>
                                    </div>
                                    <div class="btn-scale">
                                      <div class="btn btn-action sm style-06 btn-27">
                                        <em class="fa-solid fa-arrow-right"></em>
                                      </div>
                                    </div>
                                    <div class="card-line style-01 size-02"></div>
                                  </div>
                                </div>
                                <div class="text-container">
                                  <div class="title style-02 p fw-400" href="#">
                                    กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                                    ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                                    ปฏิบัติงานระดับการชำนาญพิเศษ
                                  </div>
                                  <div class="card-footer mt-2">
                                    <div class="wrapper">
                                      <div class="icon">
                                        <em class="fa-solid fa-calendar-days"></em>
                                        <span class="p sm ml-2 fw-400">08 มิถุนายน 2565</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div> 
                      </div>
                      <div class="grid lg-50 md-100 sm-100 mt-0">
                        <div class="grids">
                          <div class="grid lg-100 md-100 sm-100 mt-1 mt-unset-lg">
                            <a class="ss-card ss-card-07 theme-01 style-02" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="filter-04"></div>
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/69.jpg');"></div>
                                    <div class="number-of-picture">
                                      <em class="fa-solid fa-images"></em>
                                      <span class="number">15</span>
                                    </div>
                                    <div class="btn-scale">
                                      <div class="btn btn-action sm style-06 btn-27">
                                        <em class="fa-solid fa-arrow-right"></em>
                                      </div>
                                    </div>
                                    <div class="card-line style-01 size-02"></div>
                                  </div>
                                </div>
                                <div class="text-container">
                                  <div class="title style-02 p fw-400" href="#">
                                    กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                                    ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                                    ปฏิบัติงานระดับการชำนาญพิเศษ
                                  </div>
                                  <div class="card-footer mt-2">
                                    <div class="wrapper">
                                      <div class="icon">
                                        <em class="fa-solid fa-calendar-days"></em>
                                        <span class="p sm ml-2 fw-400">08 มิถุนายน 2565</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                          <div class="grid lg-100 md-100 sm-100 mt-1 mt-unset-lg">
                            <a class="ss-card ss-card-07 theme-01 style-02" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/02.jpg');"></div>
                                    <div class="filter-04"></div>
                                    <div class="number-of-picture">
                                      <em class="fa-solid fa-images"></em>
                                      <span class="number">15</span>
                                    </div>
                                    <div class="btn-scale">
                                      <div class="btn btn-action sm style-06 btn-27">
                                        <em class="fa-solid fa-arrow-right"></em>
                                      </div>
                                    </div>
                                    <div class="card-line style-01 size-02"></div>
                                  </div>
                                </div>
                                <div class="text-container">
                                  <div class="title style-02 p fw-400" href="#">
                                    กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                                    ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                                    ปฏิบัติงานระดับการชำนาญพิเศษ
                                  </div>
                                  <div class="card-footer mt-2">
                                    <div class="wrapper">
                                      <div class="icon">
                                        <em class="fa-solid fa-calendar-days"></em>
                                        <span class="p sm ml-2 fw-400">08 มิถุนายน 2565</span>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </a>
                          </div>
                        </div> 
                      </div>
                    </div>
                  </div>
                </div>
                <div class="btns ai-center jc-center mt-4">
                  <a href="#" class="btn btn-action c-btn c-btn--animate-left-right btn-26 theme-03">
                    <div class="c-wrapper jc-center">
                      <span>ดูทั้งหมด</span>
                      <span class="c-icon pl-6">
                        <em class="fa-solid fa-arrow-right"></em>
                      </span>
                    </div>
                  </a>
                </div>
              </div>
            </div>      
          </div>
        </div>       
      </div>     
   </div>

  <?php include_once('include/access-panel.php'); ?>
  <?php include_once('include/script.php'); ?>
  <script>
    let sidebar = document.querySelector(".sidebar");
    let arrowContainer = document.querySelector(".arrow-container");
    let btn = document.querySelector("#btn");
    let x = window.matchMedia("(max-width:660.98px)")

    btn.addEventListener("click", ()=>{
      menuBtnChange();
    });

    function menuBtnChange() {
      if(sidebar.classList.contains("open")){
        sidebar.classList.remove("open");
        sidebar.style.width = "5rem"
      }else {
        sidebar.classList.toggle("open");
        sidebar.style.width = "19.5rem"
      }
    }

    function myFunction(x) {
      if (x.matches) { 
        sidebar.style.width = "5rem"
        sidebar.classList.remove("open");
        arrowContainer.style.display = "none"
      }else{
        sidebar.classList.add("open");
        sidebar.style.width = "19.5rem"
        arrowContainer.style.display = "block"
      }
    }
    myFunction(x) 
    x.addListener(myFunction)
  </script>
</body>
</html>