<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
    ];
    $breadcrumbTitle = 'ปฏิทินกิจกรรม';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/11.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding">
    <div class="container">
      <div class="grids">
        <!-- Left Content -->
        <div class="grid xl-70 lg-60 md-2-3 sm-100">
          <!-- ใช้ในกรณีวันปัจจุบัน (ลบ ชื่อ class 'd-none' ออกเมื่อต้องการนำไปใช้) -->
          <div class="ss-card ss-card-21 style-02 mb-3 d-none">
            <div class="wrapper">
              <div class="date">
                <div class="wrapper">
                  <p class="day fw-400">20</p>
                  <p class="xs month fw-400">ก.ย. 65</p>
                </div>
              </div>
              <div class="text-container">
                <h4 class="title lh-sm fw-600">
                  อบรมตามโครงการสร้างจิตสำนึกพลเมืองดีวิถีประชาธิปไตยประจำปี 2565 จังหวัดพังงา
                </h4>
                <div class="title-footer mt-4">
                  <div class="wrapper">
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-calendar-days"></em>
                        <span class="p sm ml-2 fw-500">วันที่ 20 กุมภาพันธ์ 2566</span>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-clock"></em>
                        <span class="p sm ml-2 fw-500">12:50 - 13:50</span>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-building"></em>
                        <span class="p sm ml-2 fw-500">หน่วยงานฝ่ายประชาสัมพันธ์</span>
                      </div>
                    </div>
                  </div>
                  <div class="wrapper">
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-phone"></em>
                        <span class="p sm ml-2 fw-500">2 141-8888 ต่อ 89</span>
                      </div>
                    </div>
                  </div>
                  <div class="wrapper mt-1">
                    <div class="icon">
                      <em class="fa-solid fa-location-dot"></em>
                      <span class="p sm ml-2 fw-500">
                        ห้องประชุมเทศบาลตำบลสันมะค่า อำเภอป่าแดดจังหวัดเชียงราย
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- ./ -->
          <div class="ss-card ss-card-21" data-aos="fade-up" data-aos-delay="0">
            <div class="wrapper">
              <div class="date">
                <div class="wrapper">
                  <p class="xxs day fw-400">18 ก.พ. 66</p>
                  <p class="xxs month fw-400">19 ก.พ. 66</p>
                </div>
              </div>
              <div class="text-container">
                <h4 class="title lh-sm fw-600">
                  อบรมตามโครงการสร้างจิตสำนึกพลเมืองดีวิถีประชาธิปไตยประจำปี 2565 จังหวัดพังงา
                </h4>
                <div class="title-footer mt-4">
                  <div class="wrapper">
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-calendar-days"></em>
                        <span class="p sm ml-2 fw-500">วันที่ 20 กุมภาพันธ์ 2566</span>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-clock"></em>
                        <span class="p sm ml-2 fw-500">12:50 - 13:50</span>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-building"></em>
                        <span class="p sm ml-2 fw-500">หน่วยงานฝ่ายประชาสัมพันธ์</span>
                      </div>
                    </div>
                  </div>
                  <div class="wrapper">
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-calendar-days"></em>
                        <span class="p sm ml-2 fw-500">วันที่ 19 กุมภาพันธ์ 2566</span>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-clock"></em>
                        <span class="p sm ml-2 fw-500">12:50 - 13:50</span>
                      </div>
                    </div>
                    <div class="item">
                      <div class="icon">
                        <em class="fa-solid fa-phone"></em>
                        <span class="p sm ml-2 fw-500">2 141-8888 ต่อ 89</span>
                      </div>
                    </div>
                  </div>
                  <div class="wrapper mt-1">
                    <div class="icon">
                      <em class="fa-solid fa-location-dot"></em>
                      <span class="p sm ml-2 fw-500">
                        ห้องประชุมเทศบาลตำบลสันมะค่า อำเภอป่าแดดจังหวัดเชียงราย
                      </span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="img-container">
              <div class="ss-img horizontal mt-4">
                <div class="img-bg" style="background-image:url('public/assets/app/images/content/69.jpg');"></div>
              </div>
            </div>
            <p class="desc color-gray fw-400 mt-3">
              วันที่ 11 สิงหาคม 2565 เวลา 09.00 น. สนง.กกต.จว.พังงา 
              ดำเนินการจัดอบรมตามโครงการสร้างจิตสำนึกพลเมืองดีวิถีประชาธิปไตย 
              กิจกรรมเผยแพร่ความรู้ความเข้าใจที่ถูกต้องเกี่ยวกับการปกครองระบอบ
              ประชาธิปไตยอันมีพระมหากษัตริย์ทรงเป็นประมุข มีนายสมศักดิ์ ไชยโสดา 
              ผู้อำนวยการวิทยาลัยเทคนิคพังงาเป็นประธานในพิธีเปิด น.ส.วิลาวัณย์ สมมะลวน 
              รอง ผอ.สนง.กกต.จว.พังงา กล่าวรายงาน และนายสัมภาษณ์ เชาวลิต ผอ.สนง.กกต.จว.พังงา 
              กล่าวทักทายและให้ข้อคิดในการจัดอบรม กลุ่มเป้าหมายคือนักศึกษาวิทยาลัยเทคนิคพังงา 
              จำนวน 100 คน ณ ห้องประชุมพุงช้าง วิทยาลัยเทคนิคพังงา2 อำเภอเมืองพังงา
            </p>
          </div>
         
          <?php 
            $photo = [
              ['image' => 'public/assets/app/images/content/02.jpg'],
              ['image' => 'public/assets/app/images/content/10.jpg'],
              ['image' => 'public/assets/app/images/content/11.jpg'],
              ['image' => 'public/assets/app/images/content/12.jpg'],
              ['image' => 'public/assets/app/images/content/13.jpg'],
              ['image' => 'public/assets/app/images/content/14.jpg'],
              ['image' => 'public/assets/app/images/content/15.jpg'],
              ['image' => 'public/assets/app/images/content/12.jpg', 'classer' => 'active'],
            ]
          ?>
          <div class="grids jc-center mt-2" data-aos="fade-up" data-aos-delay="150">
            <?php foreach($photo as $d) {?>
              <div class="grid xl-25 lg-1-3">
                <a class="ss-card ss-card-11 <?= $d['classer']?>" href="<?= $d['image']?>" data-fancybox="gallery">
                  <div class="img-wrapper">
                    <div class="ss-img">
                      <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                      <div class="filter style-02">
                        <div class="wrapper">
                          <div class="icon op-0">
                            <img src="public/assets/app/images/icon/51.png" alt="Icon">
                          </div>
                        </div>
                      </div>
                      <div class="filter-01">
                        <div class="text">
                          <h3 class="number lh-3xs fw-600">+30</h3>
                          <p class="h6 fw-500">รูปภาพ</p>
                        </div>
                      </div>
                    </div>
                    <div class="card-line style-01"></div>
                  </div>
                </a>
              </div>
            <?php }?>
          </div>

          <?php include('component/tags-container.php'); ?>

          <h4 class="title fw-600 mt-6 pt-6" style="position:relative;" data-aos="fade-up" data-aos-delay="450">
            ไฟล์ที่เกี่ยวข้อง
          </h4>     
          <div class="box-shadow style-04" data-aos="fade-up" data-aos-delay="600">
            <div class="scroll-x-wrapper pb-0 style-02 mt-2">
              <table class="table table-download bg-white">
                <tbody>
                  <?php
                    foreach([
                      'pdf', 'doc', 'xls', 'pptx', 'zip',
                      'rar', 'link'
                    ] as $k){
                  ?>
                    <tr class="table-card-01 border-bottom no-bradius">
                      <td class="no-bradius">
                        <div class="download-card">
                          <img src="public/assets/app/images/file/svg/<?= $k ?>.svg" alt="Image File" />
                        </div>
                      </td>
                      <td class="title-container" style="min-width:450px;">
                        <a class="fw-600 title" href="#">
                          รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565
                        </a>
                        <div class="text-footer">
                          <div class="wrapper">
                            <p class="sm fw-300 mr-4">ขนาดไฟล์ <span class="fw-600">0.2 MB</span></p>
                            <p class="sm fw-300 mr-4">ดาวน์โหลด <span class="fw-600">122 ครั้ง</span></p>
                            <div class="icon report-file">
                              <em class="fa-solid fa-circle-exclamation mr-1"></em>
                              <?php
                                if($k === 'link'){?>
                                  <p class="btn-popup-toggle-02 cursor-pointer text-file sm color-black-theme fw-400" data-popup="99">
                                    แจ้งลิงก์เสีย
                                  </p>
                              <?php } else {?>
                                <p class="btn-popup-toggle-02 cursor-pointer text-file sm color-black-theme fw-400" data-popup="99">
                                  แจ้งไฟล์เสีย
                                </p>
                              <?php }?>
                            </div>
                          </div>
                        </div>
                      </td>
                      <td class="arrow-container" style="min-width:100px;">
                        <div class="img-wrapper d-flex ai-center jc-center fw-wrap">
                          <img class="inactive" src="public/assets/app/images/icon-svg/download-inactive.svg" alt="Icon">
                          <img class="active" src="public/assets/app/images/icon-svg/download-active.svg" alt="Icon">
                        </div>
                        <a class="xs color-02 color-black-theme text-center fw-500 mt-1" href="#">ดาวน์โหลด</a>
                      </td>
                    </tr>
                  <?php }?>
                </tbody>
              </table>
            </div>
          </div>

          <h4 class="fw-600 mt-6" data-aos="fade-up" data-aos-delay="750">
            แผนที่
          </h4>
           <!-- Goolgle Map -->
           <iframe data-aos="fade-up" data-aos-delay="900"
              src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3873.285629391629!2d100.56366531478078!3d13.8818618902634!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30e28323d10290b5%3A0x946e22bc8754445a!2z4Liq4Liz4LiZ4Lix4LiB4LiH4Liy4LiZ4LiE4LiT4Liw4LiB4Lij4Lij4Lih4LiB4Liy4Lij4LiB4Liy4Lij4LmA4Lil4Li34Lit4LiB4LiV4Lix4LmJ4LiH!5e0!3m2!1sth!2sth!4v1672824557112!5m2!1sth!2sth" 
              width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade">
            </iframe>

          <h4 class="fw-600 mt-6" data-aos="fade-up" data-aos-delay="1050">
            สื่อที่เกี่ยวข้อง
          </h4>
          <div data-aos="fade-up" data-aos-delay="950">
            <blockquote class="twitter-tweet"><p lang="th" dir="ltr">ข้อห้ามในการหาเสียงเลือกตั้ง <a href="https://t.co/6ergCeZjhH">https://t.co/6ergCeZjhH</a> via <a href="https://twitter.com/YouTube?ref_src=twsrc%5Etfw">@YouTube</a></p>&mdash; สำนักงานคณะกรรมการการเลือกตั้ง (@EctThailand) <a href="https://twitter.com/EctThailand/status/1620704316142260224?ref_src=twsrc%5Etfw">February 1, 2023</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
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
              <div class="cate-list mt-2">
                <p class="color-02 fw-600">กิจกรรมประชาสัมพันธ์</p>
                <p class="color-02 fw-600">108</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">ประกาศการเลือกตั้ง</p>
                <p class="fw-400">11</p>
              </div> 
              <div class="cate-list">
                <p class="fw-400">อบรมสัมนา</p>
                <p class="fw-400">50</p>
              </div>  
            </div>   
            <?php 
              $lastestnews = [
                [
                  'image' => 'public/assets/app/images/content/67.jpg',
                  'title' => 'ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                  ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่
                  ประกาศผลการเลือกตั้งสมาชิกสภาเทศบาลตำบลเกาะยาวใหญ่',
                  'address' => 'ฉะเชิงเทรา'
                ],
                [
                  'image' => 'public/assets/app/images/content/68.jpg',
                  'title' => 'กิจกรรมเพื่อฟื้นฟูเศรษฐกิจตามแผนปฏิบัติราชการประจำปี พ.ศ.2565
                  กิจกรรมเพื่อฟื้นฟูเศรษฐกิจตามแผนปฏิบัติราชการประจำปี พ.ศ.2565
                  กิจกรรมเพื่อฟื้นฟูเศรษฐกิจตามแผนปฏิบัติราชการประจำปี พ.ศ.2565',
                  'address' => 'กรุงเทพมหานคร'
                ]
              ]
            ?>
            <h5 class="fw-600" data-aos="fade-up" data-aos-delay="150">
              ภาพกิจกรรมล่าสุด
            </h5> 
            <?php foreach($lastestnews as $d) {?>
              <a class="ss-card ss-card-12 mt-3" href="#" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                </div>
                <div class="text-container">
                  <p class="title fw-400 lh-sm mt-2">
                    <?= $d['title']?>
                  </p>
                  <div class="card-footer mt-2">
                    <div class="wrapper">
                      <div class="icon">
                        <em class="fa-solid fa-calendar-days"></em>
                        <span class="p sm ml-2 fw-400">08 มิถุนายน 2565</span>
                      </div>
                      <div class="icon">
                        <em class="fa-solid fa-eye"></em>
                        <span class="p sm ml-2 fw-400"><?= $d['address']?></span>
                      </div>
                    </div>
                  </div>
                </div>
              </a>
            <?php }?>
            <div class="popular-search-container box-shadow style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
            <p class="h5 fw-600 color-black-theme">แท็กยอดนิยม</p>
            <div class="mt-1">
              <div class="ss-tags style-02">
                <div class="tag">
                  <span class="title">ข่าวประกาศ</span>
                </div>
              </div>
              <div class="ss-tags style-02">
                <div class="tag">
                  <span class="title">อบรมหลักสูตร</span>
                </div>
              </div>
              <div class="ss-tags style-02">
                <div class="tag">
                  <span class="title">การเลือกตั้ง</span>
                </div>
              </div>
              <div class="ss-tags style-02">
                <div class="tag">
                  <span class="title">รายงานการจัดซื้อจัดจ้าง</span>
                </div>
              </div>
              <div class="ss-tags style-02">
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
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
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