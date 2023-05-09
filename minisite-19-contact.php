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
      [ 'url' => '#', 'display' => 'ติดต่อเรา' ],
    ];
    $breadcrumbTitle = 'ติดต่อเรา';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/40.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body bg-white-theme">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ติดต่อหน่วยงาน
            </h3>
          </div>
          <div class="mt-2" data-aos="fade-up" data-aos-delay="350">
            <div class="grids">
              <div class="grid xl-50 lg-50 md-50 sm-100 mt-0">
                <div class="ss-box m-unset">
                  <p class="h6 fw-500">สำนักงานคณะกรรมการเลือกตั้งจังหวัดเชียงใหม่</p>
                  <div class="ss-card ss-card-67 box-shadow style-02 mt-2">
                    <div class="wrapper">
                      <div class="icon">
                        <em class="fa-solid fa-location-dot"></em>
                      </div>
                      <div class="text-container">
                        <p class="sm md-no-br fw-400 lh-sm">
                          ศูนย์ราชการจังหวัดเชียงใหม่ ถนนโชตนา<br> 
                          ตำบลช้างเผือก  อำเภอเมืองเชียงใหม่  จังหวัดเชียงใหม่
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="ss-card ss-card-67 box-shadow style-02 mt-2">
                    <div class="wrapper">
                      <div class="icon">
                        <em class="fa-solid fa-phone"></em>
                      </div>
                      <div class="text-container flex-column jc-center ai-start">
                        <p class="sm fw-400 lh-sm">
                          <span>โทรศัพท์</span> 053 112-347-8
                        </p>
                        <p class="sm fw-400 lh-sm">
                          <span>โทรสาร</span> 053 112-346
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="ss-card ss-card-67 box-shadow style-02 mt-2">
                    <div class="wrapper">
                      <div class="icon">
                        <em class="fa-solid fa-envelope"></em>
                      </div>
                      <div class="text-container flex-column jc-center ai-start">
                        <p class="sm fw-400">
                          <span>อีเมล</span> chiangmai@ect.go.th
                        </p>
                      </div>
                    </div>
                  </div>
                  <div class="ss-card ss-card-67 box-shadow style-02 mt-2 mb-3">
                    <div class="wrapper">
                      <div class="icon">
                        <em class="fa-solid fa-share-nodes"></em>
                      </div>
                      <div class="text-container flex-column jc-center ai-start">
                        <p class="fw-500">ติดตาม</p>
                        <div class="social-list">
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <svg class="inactive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                            </svg>
                            <svg class="active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                              <path d="M279.14 288l14.22-92.66h-88.91v-60.13c0-25.35 12.42-50.06 52.24-50.06h40.42V6.26S260.43 0 225.36 0c-73.22 0-121.08 44.38-121.08 124.72v70.62H22.89V288h81.39v224h100.17V288z"/>
                            </svg>
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <svg class="inactive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path d="M311 196.8v81.3c0 2.1-1.6 3.7-3.7 3.7h-13c-1.3 0-2.4-.7-3-1.5l-37.3-50.3v48.2c0 2.1-1.6 3.7-3.7 3.7h-13c-2.1 0-3.7-1.6-3.7-3.7V196.9c0-2.1 1.6-3.7 3.7-3.7h12.9c1.1 0 2.4 .6 3 1.6l37.3 50.3V196.9c0-2.1 1.6-3.7 3.7-3.7h13c2.1-.1 3.8 1.6 3.8 3.5zm-93.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 2.1 1.6 3.7 3.7 3.7h13c2.1 0 3.7-1.6 3.7-3.7V196.8c0-1.9-1.6-3.7-3.7-3.7zm-31.4 68.1H150.3V196.8c0-2.1-1.6-3.7-3.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 1 .3 1.8 1 2.5c.7 .6 1.5 1 2.5 1h52.2c2.1 0 3.7-1.6 3.7-3.7v-13c0-1.9-1.6-3.7-3.5-3.7zm193.7-68.1H327.3c-1.9 0-3.7 1.6-3.7 3.7v81.3c0 1.9 1.6 3.7 3.7 3.7h52.2c2.1 0 3.7-1.6 3.7-3.7V265c0-2.1-1.6-3.7-3.7-3.7H344V247.7h35.5c2.1 0 3.7-1.6 3.7-3.7V230.9c0-2.1-1.6-3.7-3.7-3.7H344V213.5h35.5c2.1 0 3.7-1.6 3.7-3.7v-13c-.1-1.9-1.7-3.7-3.7-3.7zM512 93.4V419.4c-.1 51.2-42.1 92.7-93.4 92.6H92.6C41.4 511.9-.1 469.8 0 418.6V92.6C.1 41.4 42.2-.1 93.4 0H419.4c51.2 .1 92.7 42.1 92.6 93.4zM441.6 233.5c0-83.4-83.7-151.3-186.4-151.3s-186.4 67.9-186.4 151.3c0 74.7 66.3 137.4 155.9 149.3c21.8 4.7 19.3 12.7 14.4 42.1c-.8 4.7-3.8 18.4 16.1 10.1s107.3-63.2 146.5-108.2c27-29.7 39.9-59.8 39.9-93.1z"/>
                            </svg>
                            <svg class="active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path d="M311 196.8v81.3c0 2.1-1.6 3.7-3.7 3.7h-13c-1.3 0-2.4-.7-3-1.5l-37.3-50.3v48.2c0 2.1-1.6 3.7-3.7 3.7h-13c-2.1 0-3.7-1.6-3.7-3.7V196.9c0-2.1 1.6-3.7 3.7-3.7h12.9c1.1 0 2.4 .6 3 1.6l37.3 50.3V196.9c0-2.1 1.6-3.7 3.7-3.7h13c2.1-.1 3.8 1.6 3.8 3.5zm-93.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 2.1 1.6 3.7 3.7 3.7h13c2.1 0 3.7-1.6 3.7-3.7V196.8c0-1.9-1.6-3.7-3.7-3.7zm-31.4 68.1H150.3V196.8c0-2.1-1.6-3.7-3.7-3.7h-13c-2.1 0-3.7 1.6-3.7 3.7v81.3c0 1 .3 1.8 1 2.5c.7 .6 1.5 1 2.5 1h52.2c2.1 0 3.7-1.6 3.7-3.7v-13c0-1.9-1.6-3.7-3.5-3.7zm193.7-68.1H327.3c-1.9 0-3.7 1.6-3.7 3.7v81.3c0 1.9 1.6 3.7 3.7 3.7h52.2c2.1 0 3.7-1.6 3.7-3.7V265c0-2.1-1.6-3.7-3.7-3.7H344V247.7h35.5c2.1 0 3.7-1.6 3.7-3.7V230.9c0-2.1-1.6-3.7-3.7-3.7H344V213.5h35.5c2.1 0 3.7-1.6 3.7-3.7v-13c-.1-1.9-1.7-3.7-3.7-3.7zM512 93.4V419.4c-.1 51.2-42.1 92.7-93.4 92.6H92.6C41.4 511.9-.1 469.8 0 418.6V92.6C.1 41.4 42.2-.1 93.4 0H419.4c51.2 .1 92.7 42.1 92.6 93.4zM441.6 233.5c0-83.4-83.7-151.3-186.4-151.3s-186.4 67.9-186.4 151.3c0 74.7 66.3 137.4 155.9 149.3c21.8 4.7 19.3 12.7 14.4 42.1c-.8 4.7-3.8 18.4 16.1 10.1s107.3-63.2 146.5-108.2c27-29.7 39.9-59.8 39.9-93.1z"/>
                            </svg>
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <svg class="inactive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                            </svg>
                            <svg class="active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512">
                              <path d="M549.655 124.083c-6.281-23.65-24.787-42.276-48.284-48.597C458.781 64 288 64 288 64S117.22 64 74.629 75.486c-23.497 6.322-42.003 24.947-48.284 48.597-11.412 42.867-11.412 132.305-11.412 132.305s0 89.438 11.412 132.305c6.281 23.65 24.787 41.5 48.284 47.821C117.22 448 288 448 288 448s170.78 0 213.371-11.486c23.497-6.321 42.003-24.171 48.284-47.821 11.412-42.867 11.412-132.305 11.412-132.305s0-89.438-11.412-132.305zm-317.51 213.508V175.185l142.739 81.205-142.739 81.201z"/>
                            </svg>
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <svg class="inactive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                            </svg>
                            <svg class="active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                              <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                            </svg>
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <svg class="inactive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                            </svg>
                            <svg class="active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"/>
                            </svg>
                          </a>
                        </div>
                        <div class="d-inline-block item">
                          <a class="icon" href="#">
                            <svg class="inactive" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/>
                            </svg>
                            <svg class="active" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                              <path d="M448,209.91a210.06,210.06,0,0,1-122.77-39.25V349.38A162.55,162.55,0,1,1,185,188.31V278.2a74.62,74.62,0,1,0,52.23,71.18V0l88,0a121.18,121.18,0,0,0,1.86,22.17h0A122.18,122.18,0,0,0,381,102.39a121.43,121.43,0,0,0,67,20.14Z"/>
                            </svg>
                          </a>
                        </div>
                      </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="grid xl-50 lg-50 md-50 sm-100 mt-0">
                <h5 class="color-02 fw-500">แบบฟอร์มติดต่อสอบถาม</h5>
                <p class="fw-400 lh-sm">
                  หากมีคำถาม คำติชม คำแนะนำ หรือพบปัญหากรุณากรอกแบบฟอร์มด้านล่างนี้ 
                  ทางเจ้าหน้าที่จะดำเนินการตามคำขอโดยเร็วที่สุด
                </p>
                <p class="color-16 fw-300">
                  กรุณากรอกข้อมูลที่จำเป็นให้ครบถ้วน โดยช่องเฉพาะที่มีเครื่องหมาย 
                  <span class="text-danger fw-600">*</span>
                </p>
                <form class="form style-02" action="action.php" method="post">
                  <div class="grids">
                    <div class="grid sm-100 mt-2">
                      <div class="option cate">
                        <select class="ui color-gray border dropdown" required>
                          <option value="">เลือกหัวข้อ*</option>
                          <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                          <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                          <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                        </select>
                        <div class="dropdown-icon style-02 border">
                          <em class="fa-solid fa-chevron-down"></em>
                        </div>
                      </div>
                      <label class="text-danger style-02">กรุณาเลือกหัวข้อที่ต้องการติดต่อ</label>
                    </div>
                    <div class="grid sm-50 mt-0">
                      <div class="form-group">
                        <div class="form-input">
                          <input class="style-02 size-01" type="text" placeholder="ชื่อ*" required>
                        </div>
                      </div>
                      <label class="text-danger style-02">กรุณากรอกชื่อ</label>
                    </div>
                    <div class="grid sm-50 mt-0">
                      <div class="form-group">
                        <div class="form-input">
                          <input class="style-02 size-01" type="text" placeholder="นามสกุล*" required>
                        </div>
                      </div>
                      <label class="text-danger style-02">กรุณากรอกนามสกุล</label>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group">
                        <div class="form-input">
                          <input class="style-02 size-01" type="text" placeholder="หมายเลขติดต่อ*" required>
                        </div>
                      </div>
                      <label class="text-danger style-02">กรุณากรอกมายเลขติดต่อเป็นตัวเลข</label>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group">
                        <div class="form-input">
                          <input class="style-02 size-01" type="email" placeholder="อีเมล*" required>
                        </div>
                      </div>
                      <label class="text-danger style-02">กรุณากรอกอีเมล</label>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group">
                        <textarea class="style-02" name="message" rows="10" class="form-control" 
                        required="" title="General Textarea" placeholder="พิมพ์ข้อความ*"></textarea>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="ss-card ss-card-68">
                        <div class="top">
                          <div class="wrapper">
                            <div class="item">
                              <div class="icon">
                                <em class="fa-solid fa-arrow-up-from-bracket"></em>
                              </div>
                              <p class="fw-500 ml-2">ลากไฟล์และวางลงที่นี้</p>
                            </div>
                            <div class="item">
                              <div class="ss-sep-01 style-02">
                                <p class="fw-500">หรือ</p>
                              </div>
                            </div>
                            <div class="item">
                              <div class="btns jc-end">
                                <div class="btn style-03 btn-action btn-13 size-03 btn-black-theme pos-relative">
                                  เลือกไฟล์
                                  <input type="file" class="file-upload">
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="footer mt-2">
                          <p class="sm fw-400">ประเภทไฟล์ที่รองรับ PDF, JPG, JPEG, PNG, GIF ขนาดไม่เกิน 50 MB</p>
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="ss-card ss-card-32 mini-site style-02">
                        <div class="wrapper box-shadow style-02">
                          <div class="icon">
                            <img src="public/assets/app/images/file/svg/pdf.svg" alt="Image File" />
                          </div>
                          <div class="text-container">
                            <p class="title lh-sm fw-500">
                              ประกวดราคาซื้อวัสดุสำนักงาน จำนวน 90 รายการ 
                              ด้วยวิธีประกวดราคาอิเล็กทรอนิกส์ (e-bidding)
                            </p>
                            <div class="x-mark">
                              <em class="fa-solid fa-xmark"></em>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="grid xl-50 lg-100 md-100 sm-100 mt-5">
                      <div class="captcha">
                        <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="CAPTCHA">
                        <label class="text-danger style-02">กรุณายืนยันตัวตน</label>
                      </div>
                    </div>
                    <div class="grid xl-50 lg-100 md-100 sm-100 mt-0">
                      <div class="btns h-full">
                        <button type="submit" href="#" class="btn btn-popup-toggle black-theme btn-action size-03 btn-36" data-popup="99">
                          ส่งข้อความ
                        </button>
                        <button type="cancel" href="#" class="btn btn-action mw-auto black-theme size-03 btn-37">
                          ยกเลิก
                        </button>
                      </div>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <!-- Goolgle Map -->
  <iframe class="mt-3" data-aos="fade-up" data-aos-delay="400"
    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.285629391629!2d100.56366531478078!3d13.8818618902634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e28323d10290b5%3A0x946e22bc8754445a!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LiE4LiT4Liw4LiB4Lij4Lij4Lih4LiB4Liy4Lij4LiB4Liy4Lij4LmA4Lil4Li34Lit4LiB4LiV4Lix4LmJ4LiH!5e0!3m2!1sth!2sth!4v1672824557112!5m2!1sth!2sth" 
    width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
  </iframe>

  <?php
    $listResult= ['contact'];
    include_once('component/popup-file-error-style-02.php');
  ?>
  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>