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
          <svg  viewBox="0 0 16 16" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" ">
            <g stroke-width="0"/>
            <g stroke-linecap="round" stroke-linejoin="round"/>
            <g> <path d="M14 15v-11h-3v-3h-9v14h-2v1h7v-3h2v3h7v-1h-2zM6 11h-2v-2h2v2zM6 8h-2v-2h2v2zM6 5h-2v-2h2v2zM9 11h-2v-2h2v2zM9 8h-2v-2h2v2zM9 5h-2v-2h2v2zM13 11h-2v-2h2v2zM13 8h-2v-2h2v2z"/></g>
          </svg>
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
                        ตามหลัก<span class="h2 color-black-theme title-theme fw-600 color-04">ประชาธิปไตย</span>
                      </h3>
                      <h2 class="color-black-theme fw-700">
                        <span class="color-04 title-theme">โปร่งใส</span><span class="h3 fw-500">และ</span><span class="color-04 title-theme">เป็นธรรม</span>
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
              <div class="ss-box-content p-4">
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
              <div class="ss-box-content p-4">
                <div class="scroll-x-wrapper">
                <table class="table table-download style-05 size-02 bg-black-theme">
                  <tbody>
                    <?php
                      foreach([
                        '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 316.1 384">
                          <g>
                            <path class="st1" d="M238.3,384c-75.8,0-151.5,0-227.3,0c-7.2-3.1-11-8.2-11-16.4c0.1-96.4,0-192.7,0.1-289.1C0.1,67.7,5.7,62,16.5,62
                              c18.1,0,36.2,0,54.4,0c54,0,108,0,162,0c4.2,0,8.2,0.5,11.6,3.3c4.1,3.5,5.2,8.2,5.2,13.4c-0.1,95.6-0.1,191.2,0.1,286.9
                              C249.7,374.6,246.9,380.8,238.3,384z M127.3,167.2c19,0,38,0,57,0c8.3,0,14-5.1,14-12.3c0.1-7.3-5.7-12.4-13.9-12.4
                              c-14.7,0-29.5,0-44.2,0c-23.7,0-47.5,0-71.2,0c-8.2,0-13.6,5.8-12.9,13.6c0.5,6.5,5.8,11.1,13.2,11.1
                              C88.5,167.3,107.9,167.2,127.3,167.2z M127,266.3c19.2,0,38.5,0,57.7,0c7.9,0,13.6-5.2,13.5-12.4c0-7.2-5.7-12.3-13.7-12.3
                              c-38.4,0-76.7,0-115.1,0c-8.1,0-13.6,5-13.6,12.3c-0.1,7.5,5.4,12.5,13.7,12.5C88.8,266.3,107.9,266.3,127,266.3z M126.9,216.7
                              c19.4,0,38.7,0,58.1,0c6.4,0,11.2-3.4,12.8-9c2.3-8.3-3.6-15.7-12.6-15.8c-21.2-0.1-42.5,0-63.7,0c-17.5,0-35,0-52.5,0
                              c-5.4,0-9.5,2.2-11.8,7.1c-4.1,8.4,2,17.6,11.7,17.7C88.2,216.8,107.5,216.7,126.9,216.7z"></path>
                            <path class="st1" d="M281.8,0c2.3,0.6,4.6,1.1,6.8,1.8C305.6,7,316,21,316,39.1c0.1,28.5,0,57,0,85.5c0,60.9-0.2,121.7,0.1,182.6
                              c0.1,24.7-18.9,39-38.8,39.5c-0.8,0-1.7-0.1-2.9-0.2c0-1.7,0-3.3,0-4.9c0-87.7,0-175.5,0-263.2c0-18.6-9.7-33.3-26.2-38.8
                              c-5.1-1.7-10.8-2.3-16.2-2.3c-61.6-0.2-123.2-0.1-184.8-0.1c-1.6,0-3.2,0-5.9,0c0.9-4.2,1.2-8.2,2.5-11.8
                              C48.9,11.7,59.1,3.9,73.1,0.8c0.8-0.2,1.6-0.5,2.4-0.8C144.3,0,213,0,281.8,0z"></path>
                            <path class="st0" d="M127.3,167.2c-19.4,0-38.7,0-58.1,0c-7.3,0-12.7-4.6-13.2-11.1c-0.6-7.8,4.8-13.6,12.9-13.6
                              c23.7,0,47.5,0,71.2,0c14.7,0,29.5,0,44.2,0c8.3,0,14,5.1,13.9,12.4c-0.1,7.3-5.7,12.3-14,12.3
                              C165.3,167.3,146.3,167.2,127.3,167.2z"></path>
                            <path class="st0" d="M127,266.3c-19.1,0-38.2,0-57.4,0c-8.3,0-13.8-5-13.7-12.5c0.1-7.3,5.5-12.3,13.6-12.3c38.4,0,76.7,0,115.1,0
                              c7.9,0,13.6,5.2,13.7,12.3c0,7.2-5.6,12.4-13.5,12.4C165.5,266.3,146.3,266.3,127,266.3z"></path>
                            <path class="st0" d="M126.9,216.7c-19.4,0-38.7,0-58.1,0c-9.7,0-15.8-9.3-11.7-17.7c2.4-4.8,6.5-7.1,11.8-7.1c17.5,0,35,0,52.5,0
                              c21.2,0,42.5,0,63.7,0c9,0,14.9,7.5,12.6,15.8c-1.5,5.5-6.3,9-12.8,9C165.7,216.8,146.3,216.7,126.9,216.7z"></path>
                          </g>
                        </svg>', 
                      '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 316.5 384">
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
                            C148.8,190.6,149.6,188.1,150.2,187z"></path>
                          <path class="st2" d="M75.8,0C144.5,0,213.3,0,282,0c0.8,0.2,1.6,0.6,2.4,0.7c15.2,2.6,27.6,14.3,30.9,29.1c0.5,2,0.8,4.1,1.1,6.2
                            c0,91.8,0,183.5,0,275.3c-0.2,0.8-0.5,1.7-0.6,2.5c-1.7,12.6-8.3,21.8-19.3,27.8c-6.7,3.7-14,5.5-22,4.9c0-1.9,0-3.4,0-4.9
                            c0-54.5,0-109,0-163.5c0-33.4,0-66.7,0-100.1c0-7.5-1.4-14.7-5.3-21.2c-8.3-13.8-20.8-19.8-36.7-19.7c-61.9,0.1-123.7,0-185.6,0
                            c-1.6,0-3.2,0-4.7,0C41.4,28,46.5,17,54.4,10C60.5,4.6,68,1.9,75.8,0z"></path>
                          <path class="st2" d="M316.5,36c-0.4-2.1-0.7-4.1-1.1-6.2C312.1,15,299.7,3.4,284.4,0.7c-0.8-0.1-1.6-0.5-2.4-0.7
                            c11.5,0,23,0,34.5,0C316.5,12,316.5,24,316.5,36z"></path>
                          <path class="st2" d="M0,370.5c1.2,6.6,5.2,10.9,11.3,13.5c-3.8,0-7.5,0-11.3,0C0,379.5,0,375,0,370.5z"></path>
                        </g>
                      </svg>', 
                      '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 316.1 384">
                          <g>
                            <path class="st1" d="M238.3,384c-75.8,0-151.5,0-227.3,0c-7.2-3.1-11-8.2-11-16.4c0.1-96.4,0-192.7,0.1-289.1C0.1,67.7,5.7,62,16.5,62
                              c18.1,0,36.2,0,54.4,0c54,0,108,0,162,0c4.2,0,8.2,0.5,11.6,3.3c4.1,3.5,5.2,8.2,5.2,13.4c-0.1,95.6-0.1,191.2,0.1,286.9
                              C249.7,374.6,246.9,380.8,238.3,384z M127.3,167.2c19,0,38,0,57,0c8.3,0,14-5.1,14-12.3c0.1-7.3-5.7-12.4-13.9-12.4
                              c-14.7,0-29.5,0-44.2,0c-23.7,0-47.5,0-71.2,0c-8.2,0-13.6,5.8-12.9,13.6c0.5,6.5,5.8,11.1,13.2,11.1
                              C88.5,167.3,107.9,167.2,127.3,167.2z M127,266.3c19.2,0,38.5,0,57.7,0c7.9,0,13.6-5.2,13.5-12.4c0-7.2-5.7-12.3-13.7-12.3
                              c-38.4,0-76.7,0-115.1,0c-8.1,0-13.6,5-13.6,12.3c-0.1,7.5,5.4,12.5,13.7,12.5C88.8,266.3,107.9,266.3,127,266.3z M126.9,216.7
                              c19.4,0,38.7,0,58.1,0c6.4,0,11.2-3.4,12.8-9c2.3-8.3-3.6-15.7-12.6-15.8c-21.2-0.1-42.5,0-63.7,0c-17.5,0-35,0-52.5,0
                              c-5.4,0-9.5,2.2-11.8,7.1c-4.1,8.4,2,17.6,11.7,17.7C88.2,216.8,107.5,216.7,126.9,216.7z"></path>
                            <path class="st1" d="M281.8,0c2.3,0.6,4.6,1.1,6.8,1.8C305.6,7,316,21,316,39.1c0.1,28.5,0,57,0,85.5c0,60.9-0.2,121.7,0.1,182.6
                              c0.1,24.7-18.9,39-38.8,39.5c-0.8,0-1.7-0.1-2.9-0.2c0-1.7,0-3.3,0-4.9c0-87.7,0-175.5,0-263.2c0-18.6-9.7-33.3-26.2-38.8
                              c-5.1-1.7-10.8-2.3-16.2-2.3c-61.6-0.2-123.2-0.1-184.8-0.1c-1.6,0-3.2,0-5.9,0c0.9-4.2,1.2-8.2,2.5-11.8
                              C48.9,11.7,59.1,3.9,73.1,0.8c0.8-0.2,1.6-0.5,2.4-0.8C144.3,0,213,0,281.8,0z"></path>
                            <path class="st0" d="M127.3,167.2c-19.4,0-38.7,0-58.1,0c-7.3,0-12.7-4.6-13.2-11.1c-0.6-7.8,4.8-13.6,12.9-13.6
                              c23.7,0,47.5,0,71.2,0c14.7,0,29.5,0,44.2,0c8.3,0,14,5.1,13.9,12.4c-0.1,7.3-5.7,12.3-14,12.3
                              C165.3,167.3,146.3,167.2,127.3,167.2z"></path>
                            <path class="st0" d="M127,266.3c-19.1,0-38.2,0-57.4,0c-8.3,0-13.8-5-13.7-12.5c0.1-7.3,5.5-12.3,13.6-12.3c38.4,0,76.7,0,115.1,0
                              c7.9,0,13.6,5.2,13.7,12.3c0,7.2-5.6,12.4-13.5,12.4C165.5,266.3,146.3,266.3,127,266.3z"></path>
                            <path class="st0" d="M126.9,216.7c-19.4,0-38.7,0-58.1,0c-9.7,0-15.8-9.3-11.7-17.7c2.4-4.8,6.5-7.1,11.8-7.1c17.5,0,35,0,52.5,0
                              c21.2,0,42.5,0,63.7,0c9,0,14.9,7.5,12.6,15.8c-1.5,5.5-6.3,9-12.8,9C165.7,216.8,146.3,216.7,126.9,216.7z"></path>
                          </g>
                        </svg>', 
                        '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 316.1 384">
                        <g>
                          <path class="st1" d="M238.3,384c-75.8,0-151.5,0-227.3,0c-7.2-3.1-11-8.2-11-16.4c0.1-96.4,0-192.7,0.1-289.1C0.1,67.7,5.7,62,16.5,62
                            c18.1,0,36.2,0,54.4,0c54,0,108,0,162,0c4.2,0,8.2,0.5,11.6,3.3c4.1,3.5,5.2,8.2,5.2,13.4c-0.1,95.6-0.1,191.2,0.1,286.9
                            C249.7,374.6,246.9,380.8,238.3,384z M127.3,167.2c19,0,38,0,57,0c8.3,0,14-5.1,14-12.3c0.1-7.3-5.7-12.4-13.9-12.4
                            c-14.7,0-29.5,0-44.2,0c-23.7,0-47.5,0-71.2,0c-8.2,0-13.6,5.8-12.9,13.6c0.5,6.5,5.8,11.1,13.2,11.1
                            C88.5,167.3,107.9,167.2,127.3,167.2z M127,266.3c19.2,0,38.5,0,57.7,0c7.9,0,13.6-5.2,13.5-12.4c0-7.2-5.7-12.3-13.7-12.3
                            c-38.4,0-76.7,0-115.1,0c-8.1,0-13.6,5-13.6,12.3c-0.1,7.5,5.4,12.5,13.7,12.5C88.8,266.3,107.9,266.3,127,266.3z M126.9,216.7
                            c19.4,0,38.7,0,58.1,0c6.4,0,11.2-3.4,12.8-9c2.3-8.3-3.6-15.7-12.6-15.8c-21.2-0.1-42.5,0-63.7,0c-17.5,0-35,0-52.5,0
                            c-5.4,0-9.5,2.2-11.8,7.1c-4.1,8.4,2,17.6,11.7,17.7C88.2,216.8,107.5,216.7,126.9,216.7z"></path>
                          <path class="st1" d="M281.8,0c2.3,0.6,4.6,1.1,6.8,1.8C305.6,7,316,21,316,39.1c0.1,28.5,0,57,0,85.5c0,60.9-0.2,121.7,0.1,182.6
                            c0.1,24.7-18.9,39-38.8,39.5c-0.8,0-1.7-0.1-2.9-0.2c0-1.7,0-3.3,0-4.9c0-87.7,0-175.5,0-263.2c0-18.6-9.7-33.3-26.2-38.8
                            c-5.1-1.7-10.8-2.3-16.2-2.3c-61.6-0.2-123.2-0.1-184.8-0.1c-1.6,0-3.2,0-5.9,0c0.9-4.2,1.2-8.2,2.5-11.8
                            C48.9,11.7,59.1,3.9,73.1,0.8c0.8-0.2,1.6-0.5,2.4-0.8C144.3,0,213,0,281.8,0z"></path>
                          <path class="st0" d="M127.3,167.2c-19.4,0-38.7,0-58.1,0c-7.3,0-12.7-4.6-13.2-11.1c-0.6-7.8,4.8-13.6,12.9-13.6
                            c23.7,0,47.5,0,71.2,0c14.7,0,29.5,0,44.2,0c8.3,0,14,5.1,13.9,12.4c-0.1,7.3-5.7,12.3-14,12.3
                            C165.3,167.3,146.3,167.2,127.3,167.2z"></path>
                          <path class="st0" d="M127,266.3c-19.1,0-38.2,0-57.4,0c-8.3,0-13.8-5-13.7-12.5c0.1-7.3,5.5-12.3,13.6-12.3c38.4,0,76.7,0,115.1,0
                            c7.9,0,13.6,5.2,13.7,12.3c0,7.2-5.6,12.4-13.5,12.4C165.5,266.3,146.3,266.3,127,266.3z"></path>
                          <path class="st0" d="M126.9,216.7c-19.4,0-38.7,0-58.1,0c-9.7,0-15.8-9.3-11.7-17.7c2.4-4.8,6.5-7.1,11.8-7.1c17.5,0,35,0,52.5,0
                            c21.2,0,42.5,0,63.7,0c9,0,14.9,7.5,12.6,15.8c-1.5,5.5-6.3,9-12.8,9C165.7,216.8,146.3,216.7,126.9,216.7z"></path>
                        </g>
                      </svg>', 
                      '<svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 316.1 384">
                          <g>
                            <path class="st1" d="M238.3,384c-75.8,0-151.5,0-227.3,0c-7.2-3.1-11-8.2-11-16.4c0.1-96.4,0-192.7,0.1-289.1C0.1,67.7,5.7,62,16.5,62
                              c18.1,0,36.2,0,54.4,0c54,0,108,0,162,0c4.2,0,8.2,0.5,11.6,3.3c4.1,3.5,5.2,8.2,5.2,13.4c-0.1,95.6-0.1,191.2,0.1,286.9
                              C249.7,374.6,246.9,380.8,238.3,384z M127.3,167.2c19,0,38,0,57,0c8.3,0,14-5.1,14-12.3c0.1-7.3-5.7-12.4-13.9-12.4
                              c-14.7,0-29.5,0-44.2,0c-23.7,0-47.5,0-71.2,0c-8.2,0-13.6,5.8-12.9,13.6c0.5,6.5,5.8,11.1,13.2,11.1
                              C88.5,167.3,107.9,167.2,127.3,167.2z M127,266.3c19.2,0,38.5,0,57.7,0c7.9,0,13.6-5.2,13.5-12.4c0-7.2-5.7-12.3-13.7-12.3
                              c-38.4,0-76.7,0-115.1,0c-8.1,0-13.6,5-13.6,12.3c-0.1,7.5,5.4,12.5,13.7,12.5C88.8,266.3,107.9,266.3,127,266.3z M126.9,216.7
                              c19.4,0,38.7,0,58.1,0c6.4,0,11.2-3.4,12.8-9c2.3-8.3-3.6-15.7-12.6-15.8c-21.2-0.1-42.5,0-63.7,0c-17.5,0-35,0-52.5,0
                              c-5.4,0-9.5,2.2-11.8,7.1c-4.1,8.4,2,17.6,11.7,17.7C88.2,216.8,107.5,216.7,126.9,216.7z"></path>
                            <path class="st1" d="M281.8,0c2.3,0.6,4.6,1.1,6.8,1.8C305.6,7,316,21,316,39.1c0.1,28.5,0,57,0,85.5c0,60.9-0.2,121.7,0.1,182.6
                              c0.1,24.7-18.9,39-38.8,39.5c-0.8,0-1.7-0.1-2.9-0.2c0-1.7,0-3.3,0-4.9c0-87.7,0-175.5,0-263.2c0-18.6-9.7-33.3-26.2-38.8
                              c-5.1-1.7-10.8-2.3-16.2-2.3c-61.6-0.2-123.2-0.1-184.8-0.1c-1.6,0-3.2,0-5.9,0c0.9-4.2,1.2-8.2,2.5-11.8
                              C48.9,11.7,59.1,3.9,73.1,0.8c0.8-0.2,1.6-0.5,2.4-0.8C144.3,0,213,0,281.8,0z"></path>
                            <path class="st0" d="M127.3,167.2c-19.4,0-38.7,0-58.1,0c-7.3,0-12.7-4.6-13.2-11.1c-0.6-7.8,4.8-13.6,12.9-13.6
                              c23.7,0,47.5,0,71.2,0c14.7,0,29.5,0,44.2,0c8.3,0,14,5.1,13.9,12.4c-0.1,7.3-5.7,12.3-14,12.3
                              C165.3,167.3,146.3,167.2,127.3,167.2z"></path>
                            <path class="st0" d="M127,266.3c-19.1,0-38.2,0-57.4,0c-8.3,0-13.8-5-13.7-12.5c0.1-7.3,5.5-12.3,13.6-12.3c38.4,0,76.7,0,115.1,0
                              c7.9,0,13.6,5.2,13.7,12.3c0,7.2-5.6,12.4-13.5,12.4C165.5,266.3,146.3,266.3,127,266.3z"></path>
                            <path class="st0" d="M126.9,216.7c-19.4,0-38.7,0-58.1,0c-9.7,0-15.8-9.3-11.7-17.7c2.4-4.8,6.5-7.1,11.8-7.1c17.5,0,35,0,52.5,0
                              c21.2,0,42.5,0,63.7,0c9,0,14.9,7.5,12.6,15.8c-1.5,5.5-6.3,9-12.8,9C165.7,216.8,146.3,216.7,126.9,216.7z"></path>
                          </g>
                        </svg>'
                      ] as $k){
                    ?>
                      <tr class="box-shadow style-02 mb-2">
                        <td>
                          <div class="download-card bg-gray-theme">
                            <?= $k ?>
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