<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  
  <?php include_once('include/sidebar-main-site.php'); ?>
 
  <div id="main" class="main-container">
    <div class="main-header" data-aos="fade-in" data-aos-delay="0">
      <a class="main-header-menu" href="./01-home-01.php">
        <div class="icon">
          <img class="inactive" src="public/assets/app/images/icon-svg/homepage.svg" alt="Icon Inactive">
        </div>
        <p class="sm title fw-400 ml-1 mr-1 color-02">ไปที่หน้าหลักของเว็บไซต์</p>
        <div class="icon">
          <img class="active" src="public/assets/app/images/icon-svg/external-link-01.svg" alt="Icon Active">
        </div>
      </a>
    </div>
    <div id="mainContent" class="main-content">
      <div id="banner02" class="banner-02">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<5; $i++){?>
              <div class="swiper-slide">
                <div class="wrapper">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/bg/26.jpg');"></div>
                  <div class="container">
                    <div class="text-wrapper">
                      <div>
                        <h4 class="color-black-theme fw-500">
                          จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก<span class="h2 color-black-theme fw-600 color-04">ประชาธิปไตย</span>
                        </h4>
                        <h2 class="color-black-theme fw-700">
                          โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                        </h2>
                      </div>
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
                <h5 class="color-black color-02 fw-500">ข่าวสารประชาสัมพันธ์</h5> 
                <div class="ellipsis">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content size-02 p-4">
                <div class="grids jc-center">
                  <div class="grid lg-100 md-100 sm-100">
                    <a class="ss-card ss-card-07" href="#">
                      <div class="wrapper">
                        <div class="img-container">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/02.jpg');"></div>
                            <div class="hover-container">
                              <div class="icon sm">
                                <img src="public/assets/app/images/icon-svg/01.svg" alt="Icon">
                              </div>
                            </div>
                            <div class="filter style-01"></div>
                            <div class="card-line style-01"></div>
                          </div>
                        </div>
                        <div class="text-container">
                          <div class="title p fw-400" href="#">
                            กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการ
                            ปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร การอบรมหลักสูตรการ
                            ปฏิบัติงานระดับการชำนาญพิเศษ
                          </div>
                          <div class="card-footer mt-2">
                            <div class="wrapper">
                              <div class="icon">
                                <em class="fa-solid fa-calendar-days"></em>
                                <span class="p sm ml-2">08 มิถุนายน 2565</span>
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
                      <div class="ss-card ss-card-12 mt-3">
                        <div class="ss-img">
                          <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                          <div class="hover-container">
                            <div class="icon sm">
                              <img src="public/assets/app/images/icon-svg/01.svg" alt="Icon">
                            </div>
                          </div>
                          <div class="filter style-01"></div>
                          <div class="card-line style-01"></div>
                        </div>
                        <div class="text-container no-border">
                          <p class="title style-02 fw-400 lh-sm mt-2">
                            รองเลขาธิการคณะกรรมการเลือกตั้ง เป็นประธานในการประชุม
                            ผู้บริหารกลุ่มภารกิจ
                          </p>
                          <div class="card-footer mt-2">
                            <div class="wrapper">
                              <div class="icon">
                                <em class="fa-solid fa-calendar-days"></em>
                                <span class="p sm ml-2">08 มิถุนายน 2565</span>
                              </div>
                              <div class="icon">
                                <em class="fa-solid fa-eye"></em>
                                <span class="p sm fw-400 ml-2">255</span>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  <?php }?>
                </div>
              </div>
              <div class="btns jc-center">
                <div href="#" class="btn btn-action btn-08">
                  <p>ดูทั้งหมด</p>
                </div>
              </div>
            </div>
          </div>
          <div class="grid xl-50 lg-100 md-100 sm-100">
            <div class="ss-box style-02 pb-4 m-unset w-full">
              <div class="ss-box-header d-flex ai-center jc-space-between">
                <h5 class="color-black color-02 fw-500">เอกสารดาวน์โหลด</h5> 
                <div class="ellipsis">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content size-02 p-4">
                <div class="scroll-x-wrapper" data-simplebar>
                <table class="table table-download style-05">
                  <tbody>
                    <?php
                      foreach([
                        'news-white', 'news-white', 'news-white', 'news-white', 'news-white'
                      ] as $k){
                    ?>
                      <tr class="box-shadow style-02 mb-2">
                        <td>
                          <div class="download-card">
                            <img src="public/assets/app/images/icon-svg/<?= $k ?>.svg" alt="Image File">
                          </div>
                        </td>
                        <td class="text-left title-container" style="min-width:450px;">
                          <a class="fw-600 h-color-t" href="#">
                            รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565
                          </a>
                          <div class="text-footer arrow-container" style="min-width:220px;">
                            <div class="wrapper">
                              <p class="sm fw-400 mr-4">ขนาดไฟล์ <span class="fw-600">0.2 MB</span></p>
                              <p class="sm fw-400 mr-4">ดาวน์โหลด <span class="fw-600">122 ครั้ง</span></p>
                              <div class="icon">
                                <em class="fa-solid fa-circle-exclamation mr-1"></em>
                                <p class="sm btn-popup-toggle color-black color-black-theme fw-400" data-popup="99">
                                  แจ้งไฟล์เสีย
                                </p>
                              </div>
                            </div>
                          </div>
                        </td>
                      </tr>
                    <?php }?>
                  </tbody>
                </table>
                </div>
              </div>
              <div class="btns jc-center">
                <div href="#" class="btn btn-action btn-08">
                  <p>ดูทั้งหมด</p>
                </div>
              </div>
            </div>
          </div>
          <?php 
            $content02 = [
              [
                'number' => '5',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)'
              ],[
                'number' => '4',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)
                ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)
                ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)'
              ],[
                'number' => '3',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)'
              ],[
                'number' => '2',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)
                ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)
                ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)'
              ],[
                'number' => '1',
                'title' => 'ประกาศผลการเลือกตั้ง ส.อบต.เหมาะ เขต 4 กรณีแทนตำแหน่งที่ว่าง (ส.ถ.6/1)'
              ]
            ]
          ?>
          <div class="grid xl-50 lg-100 md-100 sm-100">
            <div class="ss-box style-02 pb-4 m-unset w-full">
              <div class="ss-box-header d-flex ai-center jc-space-between">
                <h5 class="color-black color-02 fw-500">ปฏิทินกิจกรรม</h5> 
                <div class="ellipsis">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content size-02 p-4">
                <?php foreach($content02 as $d) {?>
                  <div class="ss-card ss-card-35 mb-3">
                    <div class="wrapper">
                      <div class="date">
                        <div class="wrapper">
                          <p class="h5 day fw-500"><?= $d['number']?></p>
                          <p class="xs month">ก.ย. 65</p>
                        </div>
                      </div>
                      <div class="text-container">
                        <p class="title h-color-t lh-sm fw-500">
                          <?= $d['title']?>
                        </p>
                      </div>      
                    </div>
                   </div>
                <?php }?>
              </div>
              <div class="btns jc-center">
                <div href="#" class="btn btn-action btn-08">
                  <p>ดูทั้งหมด</p>
                </div>
              </div>
            </div>
          </div>    
          <div class="grid xl-50 lg-100 md-100 sm-100">
            <div class="ss-box style-02 pb-4 m-unset w-full">
              <div class="ss-box-header d-flex ai-center jc-space-between">
                <h5 class="color-black color-02 fw-500">คลังวิดีโอ</h5> 
                <div class="ellipsis">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content size-02 p-4">
                <div class="grids no-gap">
                  <div class="grid lg-70 md-100 sm-100">
                    <a class="ss-card ss-card-16" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox="">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/66.jpg');"></div>
                        <div class="hover-container show">
                          <div class="icon sm">
                            <img src="public/assets/app/images/icon-svg/youtube.svg" alt="Icon">
                          </div>
                        </div>
                        <div class="filter style-01"></div>
                        <div class="card-line style-01"></div>
                      </div>
                      <div class="text-container">
                        <p class="title fw-500">
                          EP 19 ศส ปชต กับการส่งเสริมประชาธิปไตยและการเลือกตั้ง
                        </p>
                        <div class="card-bottom mt-1">
                          <div class="wrapper">
                            <div class="icon">
                              <em class="fa-solid fa-calendar-days"></em>
                              <span class="p sm ml-2">08 มิถุนายน 2565</span>
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
                      <a class="ss-card ss-card-16" href="https://www.youtube.com/watch?v=hlWiI4xVXKY" data-fancybox="">
                        <div class="ss-img">
                          <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                          <div class="hover-container show">
                            <div class="icon xs">
                              <img src="public/assets/app/images/icon-svg/youtube.svg" alt="Icon">
                            </div>
                          </div>
                          <div class="filter style-01"></div>
                          <div class="card-line style-01"></div>
                        </div>
                      </a>
                    <?php } ?>
                  </div>
                </div>  
              </div>
              <div class="btns jc-center">
                <div href="#" class="btn btn-action btn-08">
                  <p>ดูทั้งหมด</p>
                </div>
              </div>
            </div>
          </div>      
          <div class="grid xl-100 lg-100 md-100 sm-100">
            <div class="ss-box style-02 pb-4 m-unset w-full">
              <div class="ss-box-header d-flex ai-center jc-space-between">
                <h5 class="color-black color-02 fw-500">คลังภาพ</h5> 
                <div class="ellipsis">
                  <em class="fa-solid fa-ellipsis"></em>
                </div> 
              </div> 
              <div class="ss-box-content size-unset p-4">
                <div class="grids">
                  <div class="grid xl-1-3 lg-100 md-100 sm-100 mt-0">
                    <a class="ss-card ss-card-06" href="#">
                      <div class="ss-img">
                        <div class="img-bg" style="background-image:url('public/assets/app/images/content/45.jpg');"></div>
                        <div class="hover-container">
                          <div class="icon sm">
                            <img src="public/assets/app/images/icon/photo-white.png" alt="Icon">
                          </div>
                        </div>
                        <div class="filter style-01"></div>
                        <div class="card-line style-01"></div>
                      </div>
                      <div class="text-wrapper">
                        <div class="title h6 fw-500 h-color-t" href="#">
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
                            <a class="ss-card ss-card-07 style-02" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="img-wrapper">
                                    <div class="ss-img">
                                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/20.jpg');"></div>
                                      <div class="hover-container">
                                        <div class="icon xs">
                                          <img src="public/assets/app/images/icon-svg/photo-white.svg" alt="Icon">
                                        </div>
                                      </div>
                                      <div class="filter style-01"></div>
                                      <div class="card-line style-01"></div>
                                    </div>
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
                            <a class="ss-card ss-card-07 style-02" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="img-wrapper">
                                    <div class="ss-img">
                                      <div class="img-bg" style="background-image:url('public/assets/app/images/content/22.jpg');"></div>
                                      <div class="hover-container">
                                        <div class="icon xs">
                                          <img src="public/assets/app/images/icon/photo-white.png" alt="Icon">
                                        </div>
                                      </div>
                                      <div class="filter style-01"></div>
                                      <div class="card-line style-01"></div>
                                    </div>
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
                            <a class="ss-card ss-card-07 style-02" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/69.jpg');"></div>
                                    <div class="hover-container">
                                      <div class="icon xs">
                                        <img src="public/assets/app/images/icon/photo-white.png" alt="Icon">
                                      </div>
                                    </div>
                                    <div class="filter style-01"></div>
                                    <div class="card-line style-01"></div>
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
                            <a class="ss-card ss-card-07 style-02" href="#">
                              <div class="wrapper">
                                <div class="img-container">
                                  <div class="ss-img">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/02.jpg');"></div>
                                    <div class="hover-container">
                                      <div class="icon xs">
                                        <img src="public/assets/app/images/icon-svg/photo-white.svg" alt="Icon">
                                      </div>
                                    </div>
                                    <div class="filter style-01"></div>
                                    <div class="card-line style-01"></div>
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
                <div class="btns jc-center mt-4">
                  <div href="#" class="btn btn-action btn-08">
                    <p>ดูทั้งหมด</p>
                  </div>
                </div>
              </div>
            </div>      
          </div>
        </div>       
      </div>     
   </div>

   <?php include_once('component/popup-file-error.php'); ?>

  <?php include_once('include/access-panel.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let arrowContainer = document.querySelector(".arrow-container");
    let btn = document.querySelector("#btn");
    let x = window.matchMedia("(max-width:575.98px)")

    btn.addEventListener("click", ()=>{
      menuBtnChange();
    });

    function menuBtnChange() {
      if(sidebar.classList.contains("open")){
        sidebar.classList.remove("open");
        sidebar.style.width = "5rem"
      }else {
        sidebar.classList.toggle("open");
        sidebar.style.width = "17.5rem"
      }
    }

    function myFunction(x) {
      if (x.matches) { 
        sidebar.style.width = "5rem"
        sidebar.classList.remove("open");
        arrowContainer.style.display = "none"
      }else{
        sidebar.classList.add("open");
        sidebar.style.width = "17.5rem"
        arrowContainer.style.display = "block"
      }
    }
    myFunction(x) 
    x.addListener(myFunction)

  </script>
</body>
</html>