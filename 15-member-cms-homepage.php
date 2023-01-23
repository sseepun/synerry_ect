<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  
  <div class="sidebar open">
    <div data-aos="fade-in" data-aos-delay="0">
      <div class="logo-container">
        <div class="wrapper">
          <div class="logo">
            <img src="public/assets/app/images/logo-02.png" alt="">
          </div>
          <div class="text-container">
            <p class="color-white title-link lh-3xs fw-400">สำนักงาน</p>
            <p class="color-white title-link fw-400">คณะกรรมการการเลือกตั้ง</p>
          </div>
          <div class="arrow-container">
            <div class="arrow" id="btn" >
              <em class="fa-solid fa-arrow-left"></em>
            </div>
          </div>
        </div>
      </div>
      <div class="profile-container">
        <div class="wrapper">
          <div class="img-container">
            <div class="img-container">
              <img class="img" src="public/assets/app/images/avatars/02.jpg" alt="Avatar">
            </div>
          </div>
          <div class="text-container">
            <p class="color-white lh-xs fw-400 title-link">สวัสดี</p>
            <p class="color-white fw-400 title-link">คุณนิพัทธ์พนธ์</p>
          </div>
        </div>
        <span class="tooltip">คุณนิพัทธ์พนธ์</span> 
      </div>
      <div class="menu-container">
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/31.png" alt="">
            </div>
            <span class="p sm color-white title-link">หน้าแรก</span>
          </div> 
          <span class="tooltip">หน้าแรก</span>  
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/32.png" alt="">
            </div>
            <p class="sm color-white title-link">ข้อมูลส่วนตัว</ย>
          </div>
          <span class="tooltip">ข้อมูลส่วนตัว</span> 
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/33.png" alt="">
            </div>
            <p class="sm color-white title-link">เปลี่ยนรหัสผ่าน</p>
          </div>
          <span class="tooltip">เปลี่ยนรหัสผ่าน</span> 
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/34.png" alt="">
            </div>
            <p class="sm color-white title-link">จดหมายข่าวสาร</p>
          </div>
          <span class="tooltip">จดหมายข่าวสาร</span> 
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/35.png" alt="">
            </div>
            <p class="sm color-white title-link">กระทู้ของฉัน</p>
          </div>
          <span class="tooltip">กระทู้ของฉัน</span>
        </a>
        <a class="menu-item" href="#">
          <div class="wrapper">
            <div class="icon">
              <img src="public/assets/app/images/icon/36.png" alt="">
            </div>
            <p class="sm color-white title-link">ออกจากระบบ</p>
          </div>
          <span class="tooltip">ออกจากระบบ</span>
        </a>
      </div>
    </div>
  </div>
 
  <div id="main" class="main-container" data-aos="fade-in" data-aos-delay="0">
    <div class="main-header">
      <div href="#" id="openBtn" class="btn btn-action size-04 btn-02 " onclick="openNav()">
        ☰ เมนู
      </div>
      <div href="#" class="btn btn-action btn-02" value="submit" type="submit">
        ไปที่เว็บไซต์
      </div>
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
              <div class="ss-box-content p-4">
                <div class="grids jc-center">
                  <div class="grid lg-100 md-100 sm-100">
                    <a class="ss-card ss-card-07" href="#">
                      <div class="wrapper">
                        <div class="img-container">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/02.jpg');"></div>
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
                      ['image' => 'public/assets/app/images/content/05.jpg'], 
                    ]
                  ?>
                  <?php foreach($content01 as $d) {?>
                    <div class="grid lg-1-3 sm-100 mt-2">
                      <div class="ss-card ss-card-12 mt-3">
                        <div class="ss-img square">
                          <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
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
              <div class="ss-box-content p-4">
                <div class="scroll-x-wrapper" data-simplebar>
                <table class="table table-download">
                  <tbody>
                    <?php
                      foreach([
                        'doc', 'pdf', 'doc', 'jpg', 'doc'
                      ] as $k){
                    ?>
                      <tr class="box-shadow style-02 mb-2">
                        <td>
                          <div class="download-card">
                            <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
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
                                <p class="sm color-black color-black-theme fw-400">แจ้งไฟล์เสีย</p>
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
                            <img src="public/assets/app/images/icon/play.png" alt="Play Icon">
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
                            <div class="icon sm">
                              <img src="public/assets/app/images/icon/play.png" alt="Play Icon">
                            </div>
                          </div>
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
                                  <div class="ss-img">
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/20.jpg');"></div>
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
                                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/22.jpg');"></div>
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