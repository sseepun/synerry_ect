<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-02.php'); ?>

  <section class="banner-01">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<4; $i++){?>
          <div class="slide">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/02.jpg');"></div>
            <div class="hero animate" style="--delay:.55s;">
              <img src="public/assets/app/images/hero/03.png" class="Hero" />
            </div>
            <div class="container">
              <div class="quote-container animate" style="--delay:.4s;">
                <div class="wrapper">
                  <h2 class="fw-500">จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก</h2>
                  <h1 class="fw-700 mt-1">
                    <span class="color-04">ประชาธิปไตย</span><br />
                    โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                  </h1>
                  <img class="quote quote-left" src="public/assets/app/images/icon/15.png" alt="Quote" />
                  <img class="quote quote-right" src="public/assets/app/images/icon/16.png" alt="Quote" />
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="arrows style-02">
        <div class="arrow size-01 arrow-prev">
          <img src="public/assets/app/images/icon/17.png" alt="Arrow" />
        </div>
        <div class="arrow size-01 arrow-next">
          <img src="public/assets/app/images/icon/18.png" alt="Arrow" />
        </div>
      </div>
    </div>
  </section>

  <?php
    $categories = [
      [ 
        'title' => 'เรื่องเด่น กกต.', 'icon' => 'public/assets/app/images/icon/19.png',
        'icon_active' => 'public/assets/app/images/icon/20.png'
      ], [
        'title' => 'ข่าวประชาสัมพันธ์', 'icon' => 'public/assets/app/images/icon/21.png',
        'icon_active' => 'public/assets/app/images/icon/22.png'
      ], [
        'title' => 'ข่าว สนง. กกต.', 'icon' => 'public/assets/app/images/icon/23.png',
        'icon_active' => 'public/assets/app/images/icon/24.png'
      ], [
        'title' => 'ข่าว ประกวดราคา', 'icon' => 'public/assets/app/images/icon/25.png',
        'icon_active' => 'public/assets/app/images/icon/26.png'
      ], [
        'title' => 'วิดีโอ', 'icon' => 'public/assets/app/images/icon/27.png',
        'icon_active' => 'public/assets/app/images/icon/28.png'
      ],
    ];
  ?>
  <section class="section-padding tab-container">
    <div class="container">
      <div class="tab-contents" data-aos="fade-up" data-aos-delay="0">
        <?php foreach($categories as $i=>$d){?>
          <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <div class="text-center">
              <h3 class="fw-700 color-dark"><?= $d['title'] ?></h3>
              <p class="h6 fw-400 color-gray mt-1">ติดตามข่าวสารต่างๆพร้อมทั้งข้อมูลและลิงค์ที่น่าสนใจของทาง กกต.ได้ที่นี่</p>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="tabs tabs-01 style-02 mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php foreach($categories as $i=>$d){?>
          <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <div class="icon-inactive"><img src="<?= $d['icon'] ?>" alt="Icon" /></div>
            <div class="icon-active"><img src="<?= $d['icon_active'] ?>" alt="Icon" /></div>
            <?= $d['title'] ?>
          </div>
        <?php }?>
      </div>
      <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($categories as $i=>$d){?>
          <div class="tab-content <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <div class="grids">
              <div class="grid lg-70 sm-100">
                <div class="ss-card ss-card-23 main-card">
                  <a class="ss-img" href="#">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/8<?= ($i+0)%3+0 ?>.jpg');"></div>
                  </a>
                  <div class="text-container box-shadow style-02 mt-3">
                    <div class="ss-tags">
                      <a class="tag" href="#">เรื่องเด่น กกต.</a>
                    </div>
                    <a class="title h5 h-color-04 fw-600 lh-sm mt-3" href="#">
                      รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมผู้บริหารกลุ่มภารกิจบริหารกลาง ครั้งที่ 2/2565
                      ผู้อำนวยการสถาบันพัฒนาการเมืองและการเลือกตั้ง เป็นวิทยากรบรรยายเรื่อง “วัฒนธรรมองค์การ 
                      พลังขับเคลื่อนสู่ความสำเร็จ” ในการปฐมนิเทศพนักงานใหม่ พ.ศ. 2565
                    </a>
                    <p class="xs fw-500">
                      08 มิถุนายน 2565 / By <a class="h-color-04" href="#">PR ECT</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="grid lg-30 sm-100">
                <div class="ss-card ss-card-23 sub-card">
                  <a class="ss-img" href="#">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/8<?= ($i+1)%3+0 ?>.jpg');"></div>
                  </a>
                  <div class="text-container box-shadow style-02">
                    <div class="ss-tags">
                      <a class="tag" href="#">เรื่องเด่น กกต.</a>
                    </div>
                    <a class="title h5 h-color-04 fw-600 lh-sm mt-3" href="#">
                      รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมผู้บริหารกลุ่มภารกิจบริหารกลาง ครั้งที่ 2/2565
                      ผู้อำนวยการสถาบันพัฒนาการเมืองและการเลือกตั้ง เป็นวิทยากรบรรยายเรื่อง “วัฒนธรรมองค์การ 
                      พลังขับเคลื่อนสู่ความสำเร็จ” ในการปฐมนิเทศพนักงานใหม่ พ.ศ. 2565
                    </a>
                    <p class="xs fw-500">
                      08 มิถุนายน 2565 / By <a class="h-color-04" href="#">PR ECT</a>
                    </p>
                  </div>
                </div>
                <div class="ss-card ss-card-23 sub-card mt-5">
                  <a class="ss-img" href="#">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/content/8<?= ($i+3)%3+0 ?>.jpg');"></div>
                  </a>
                  <div class="text-container box-shadow style-02">
                    <div class="ss-tags">
                      <a class="tag" href="#">เรื่องเด่น กกต.</a>
                    </div>
                    <a class="title h5 fw-600 h-color-04 lh-sm mt-3" href="#">
                      รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมผู้บริหารกลุ่มภารกิจบริหารกลาง ครั้งที่ 2/2565
                      ผู้อำนวยการสถาบันพัฒนาการเมืองและการเลือกตั้ง เป็นวิทยากรบรรยายเรื่อง “วัฒนธรรมองค์การ 
                      พลังขับเคลื่อนสู่ความสำเร็จ” ในการปฐมนิเทศพนักงานใหม่ พ.ศ. 2565
                    </a>
                    <p class="xs fw-500">
                      08 มิถุนายน 2565 / By <a class="h-color-04" href="#">PR ECT</a>
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="table-footer mt-6 pt-3">
              <div class="paginate style-03">
                <div class="page active">1</div>
                <div class="page">2</div>
                <div class="page">3</div>
                <div class="page">4</div>
                <div class="page">5</div>
                <div class="page">6</div>
              </div>
              <div class="btns">
                <a class="btn btn-action btn-03" href="#">
                  <?= $d['title'] ?>ทั้งหมด
                </a>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>

  <?php 
    $titles = [
      [ 
        'title' => 'ตอบข้อซักถามพรรคกล้า',
        'desc' => '(ตามหนังสือพรรคกล้า ด่วนที่สุด ลงวันที่ 7 มกราคม 2565)'
      ],[
        'title' => 'ตอบข้อซักถามพรรคภราดรภาพ',
        'desc' => '(ตามหนังสือพรรคภราดรภาพ ลงวันที่ 5 พฤศจิกายน 2564)'
      ],[
        'title' => 'ตอบข้อซักถามพรรคก้าวไกล',
        'desc' => 'หนังสือพรรคก้าวไกล ที่ ก.ก.พ.0015/ 2564 ลงวันที่ 19 พฤศจิกายน 2564)'
      ]
    ]; 
  ?>
  <section class="section-padding">
    <div class="container">
      <div class="grids no-gap">
        <div class="grid lg-1-3 sm-100 mt-0" data-aos="fade-up" data-aos-delay="0">
          <div class="cate-container bc-none-01">
            <h3 class="fw-600">ถาม-ตอบข้อซักถามพรรคการเมือง</h3>
            <?php foreach($titles as $d) {?>
              <div class="ss-card ss-card-24 mt-3">
                <div class="wrapper">
                  <div class="icon">
                    <em class="fa-solid fa-question"></em>
                  </div>
                  <div class="text-container">
                    <p class="title fw-500">
                      <?= $d['title'] ?>
                    </p>
                    <p class="desc fw-400">
                      <?= $d['desc']?>
                    </p>
                    <div class="arrow mt-3">
                      <em class="fa-solid fa-arrow-right"></em>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
            <div class="btns mt-3">
              <a class="btn btn-action btn-03" href="#">
                ถาม-ตอบทั้งหมด
              </a>
            </div>
          </div>
        </div>

        <?php 
          $titles02 = [
            [ 
              'title' => 'คำวินิจฉัยที่ 844/2564 เรื่อง การวินิจฉัยสิทธิสมัครรับเลือกตั้งสมาชิกสภาเทศบาล
              ตำบลสว่าง เขตเลือกตั้งที่ 2 อำเภอสว่างวีระวงศ์ จังหวัด',
            ],[
              'title' => 'คำวินิจฉัยที่ 508/2564 เรื่อง การเลือกตั้งสมาชิกสภาผู้แทนราษฎรแบบแบ่งเขตเลือกตั้ง เขตเลือก
              ตั้งที่ 4 จังหวัดลำปาง แทนตำแหน่งที่ว่าง',
            ],[
              'title' => 'คำวินิจฉัยที่ 554/2564 เรื่อง การเลือกตั้งสมาชิกสภาองค์การบริหารส่วนจังหวัดร้อยเอ็ด 
              อำเภอโพนทอง เขตเลือกตั้งที่ 2',
            ]
          ]; 
        ?>
        <div class="grid lg-1-3 sm-100 mt-0" data-aos="fade-up" data-aos-delay="150">
          <div class="cate-container bc-none-02">
            <h3 class="fw-600">คำวินิจฉัย กกต.</h3>
            <?php foreach($titles02 as $d) {?>
              <div class="ss-card ss-card-25 mt-3">
                <div class="text-container">
                  <p class="title fw-500">
                    <?= $d['title'] ?>
                  </p>
                  <div class="arrow mt-3">
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                </div> 
              </div>
            <?php }?>
            <div class="btns mt-3">
              <a class="btn btn-action btn-03" href="#">
                คำวินิจฉัยทั้งหมด
              </a>
            </div>
          </div>
        </div>
        
        <?php 
          $titles03 = [
            ['title' => 'วันที่ 31 สิงหาคม 2565',],
            ['title' => 'วันที่ 30 สิงหาคม 2565',],
            ['title' => 'วันที่ 29 สิงหาคม 2565',],
            ['title' => 'วันที่ 28 สิงหาคม 2565',],
            ['title' => 'วันที่ 27 สิงหาคม 2565',],
            ['title' => 'วันที่ 26 สิงหาคม 2565',],
            ['title' => 'วันที่ 25 สิงหาคม 2565',],
            ['title' => 'วันที่ 24 สิงหาคม 2565',],
          ]; 
        ?>
        <div class="grid lg-1-3 sm-100 mt-0" data-aos="fade-up" data-aos-delay="300">
          <div class="cate-container bc-none-03">
            <h3 class="fw-600">รวมข่าว กกต.</h3>
            <?php foreach($titles03 as $d) {?>
              <div class="ss-card ss-card-26 mt-3">
                <div class="wrapper">
                  <div class="icon">
                    <em class="fa-regular fa-file-lines"></em>
                  </div>
                  <div class="text-container">
                    <p class="title h-color-04 fw-500">
                      <?= $d['title'] ?>
                    </p>
                  </div>
                </div> 
              </div>
            <?php }?>
            <div class="btns mt-3">
              <a class="btn btn-action btn-03" href="#">
                ข่าวทั้งหมด
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>      
  </section>

  <section class="section-01 section-padding" 
    style="background-image:url('public/assets/app/images/bg/19.jpg'); overflow:hidden; min-height:600px;">
    <div class="hero" data-aos="fade-in" data-aos-delay="750">
      <img src="public/assets/app/images/hero/02-01.png" class="Hero Background" />
    </div>
    <div class="hero size-01" data-aos="fade-up" data-aos-delay="150">
      <img src="public/assets/app/images/hero/04.png" class="Hero" />
    </div>
    <div class="container pos-static">
      <div class="grids">
        <div class="grid xl-50 lg-50 sm-100 mt-0"></div>
        <div class="grid xl-50 lg-50 sm-100">
          <h2 class="color-04 fw-500 md-no-br" data-aos="fade-up" data-aos-delay="0">
            กกต. พร้อมให้บริการข้อมูลการเลือกตั้ง <br />
            แก่ภาคประชาชนทุกภาคส่วน
          </h2>
          <p class="h3 color-05 mt-1 mb-1" data-aos="fade-up" data-aos-delay="150">
            ด้วยหลากหลายแอพพลิเคชั่น
          </p>
          <div class="grids jc-center">
            <div class="grid md-1-3 sm-50 xs-50">
              <div class="showcase">
                <div class="mobile-device-container">
                  <div class="wrapper">
                    <img class="img" src="public/assets/app/images/content/mobile-device.png" alt="">
                    <div class="mobile-screen-container">
                      <div class="mobile-screen" 
                        style="background-image:url('public/assets/app/images/content/showcase-01.jpg');">
                      </div> 
                    </div>    
                    <div class="text-container text-center color-white">
                      <p>แอปพลิเคชั่น</p>
                      <p class="h6 lh-3xs fw-500">ฉลาดเลือก</p>
                    </div>       
                  </div>
                </div>
              </div>
            </div>
            <div class="grid md-1-3 sm-50 xs-50">
              <div class="showcase">
                <div class="mobile-device-container">
                  <div class="wrapper">
                    <img class="img" src="public/assets/app/images/content/mobile-device.png" alt="">
                    <div class="mobile-screen-container">
                      <div class="mobile-screen" 
                        style="background-image:url('public/assets/app/images/content/showcase-02.jpg');">
                      </div> 
                    </div>    
                    <div class="text-container text-center color-white">
                      <p>แอปพลิเคชั่น</p>
                      <p class="h6 lh-3xs fw-500">ตาสัปปะรด</p>
                    </div>       
                  </div>
                </div>
              </div>
            </div>
            <div class="grid md-1-3 sm-50 xs-50">
              <div class="showcase">
                <div class="mobile-device-container">
                  <div class="wrapper">
                    <img class="img" src="public/assets/app/images/content/mobile-device.png" alt="">
                    <div class="mobile-screen-container">
                      <div class="mobile-screen" 
                        style="background-image:url('public/assets/app/images/content/showcase-03.jpg');">
                      </div> 
                    </div>    
                    <div class="text-container text-center color-white">
                      <p>แอปพลิเคชั่น</p>
                      <p class="h6 lh-3xs fcustom fw-500">CIVIL EDUCATION</p>
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

  <section class="section-02 section-padding" style="background-image:url('public/assets/app/images/bg/21.jpg');">
    <div class="container">
      <h3 class="fw-700" data-aos="fade-up" data-aos-delay="0">
        องค์ความรู้การเลือกตั้ง
      </h3>
      <div class="grids">
        <div class="grid xl-50 lg-75 sm-100">
          <div class="grids">
            <div class="grid sm-50">
              <div class="ss-card ss-card-03" data-aos="fade-up" data-aos-delay="150">
                <h5 class="title color-05 lh-sm fw-500">เลือกตั้งกรุงเทพมหานครและเมืองพัทยา</h5>
                <p class="desc fw-400 mt-1">
                  วันอาทิตย์ที่ 22 พฤษภาคม 2565 เวลา 08.00 - 17.00 น. 
                  เลือกตั้งสมาชิกสภาท้องถิ่นและผู้บริหารท้องถิ่นของ
                </p>
              </div>
            </div>
            <div class="grid sm-50">
              <div class="ss-card ss-card-03" data-aos="fade-up" data-aos-delay="300">
                <h5 class="title color-05 lh-sm fw-500">การบริจาคภาษีแก่พรรคการเมือง</h5>
                <p class="desc fw-400 mt-1">
                  ประชาชนผู้เสียภาษีที่เป็นบุคคลธรรมดาสามารถมีส่วนร่วมทางการเมืองได้ ด้วยผ่านการบริจาคภาษีเงิน
                </p>
              </div>
            </div>
            <div class="grid sm-50">
              <div class="ss-card ss-card-03" data-aos="fade-up" data-aos-delay="450">
                <h5 class="title color-05 fw-500">เลือกตั้ง อบต.</h5>
                <p class="desc fw-400 mt-1">
                  วันอาทิตย์ที่ 28 พฤศจิกายน 2564 เวลา 08.00 - 17.00 น. 
                  เลือกตั้งสมาชิกสภาองค์การบริหารส่วนตำบลและ
                </p>
              </div>
            </div>
            <div class="grid sm-50">
              <div class="ss-card ss-card-03" data-aos="fade-up" data-aos-delay="600">
                <h5 class="title color-05 fw-500">การแจ้งเหตุไม่อาจไปใช้สิทธิเลือกตั้งทางสื่ออิเล็กทรอนิกส์</h5>
                <p class="desc fw-400 mt-1">
                  เพื่อเป็นการเพิ่มช่องทางอำนวยความสะดวกแก่ประชาชนผู้มีสิทธิเลือกตั้งที่มีความจำเป็นไม่อาจไปใช้สิทธิเลือกตั้ง
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-padding">
    <div class="container">
      <h2 class="text-center fw-700 mb-3" data-aos="fade-up" data-aos-delay="0">
        บทความพิเศษ
      </h2>
      <div class="grids jc-center">
        <div class="grid lg-1-3 sm-50">
          <div class="ss-card ss-card-04" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/11.jpg');"></div>
            </div>
            <div class="text-container color-black">
              <a class="title h6 fw-500 h-color-p" href="#">
                วารสารสำนักงานคณะกรรมการการเลือกตั้ง : พรรค การเมืองกับการเปลี่ยนแปลงทางการเมือง และการเลือกตั้ง
              </a>
              <p class="sm fw-400 mt-2">
                08 มิถุนายน 2565 / By <a class="color-p h-color-s" href="#">Admin</a>
              </p>
              <p class="desc fw-300 mt-2">
                วารสารสำนักงานคณะกรรมการการเลือกตั้ง ฉบับที่ 2 ประจำปี 2563 ภายใต้หัวข้อเรื่อง 
                พรรคการเมืองกับการเปลี่ยนแปลงทางการเมืองและการเลือกตั้ง” 
                ซึ่งได้รวบรวมบทความจากนักวิชาการในสาขาวิชาที่เกี่ยวข้อง ซึ่งมีชื่อเสียงอยู่ในระดับต้นๆ ของประเทศ 
                ทุกบทความที่นำเสนอในวารสารล้วนผ่านการศึกษา ค้นคว้าอย่างเป็นระบบควรค่าแก่การศึกษา 
                เพื่อทำความเข้าใจระบบพรรคการเมืองไทยให้ลึกซึ้งเป็นอย่างยิ่ง
              </p>
            </div>
          </div>
        </div>
        <div class="grid lg-1-3 sm-50">
          <div class="ss-card ss-card-04" data-aos="fade-up" data-aos-delay="300">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/12.jpg');"></div>
            </div>
            <div class="text-container color-black">
              <a class="title h6 fw-500 h-color-p" href="#">
                หนังสือสรุปผลงานเนื่องในโอกาสครบรอบวันสถาปนาสำนักงานคณะกรรมการการเลือกตั้งปีที่ 23
              </a>
              <p class="sm fw-400 mt-2">
                08 มิถุนายน 2565 / By <a class="color-p h-color-s" href="#">Admin</a>
              </p>
              <p class="desc fw-300 mt-2">
                หนังสือสรุปผลงานเนื่องในโอกาสครบรอบวันสถาปนาสำนักงานคณะกรรมการการเลือกตั้ง ปีที่ 23 ภายใต้แนวคิด 
                "ECT Transformation สู่องค์กรจัดการเลือกตั้งมืออาชีพ" โดยหนังสือประกอบไปด้วย 
                สารจากคณะกรรมการการการเลือกตั้งและเลขาธิการคณะกรรมการการเลือกตั้ง 
                และบทความพิเศษสรุปภาพรวมภารกิจของคณะกรรมการการการเลือกตั้งในรอบปีที่ผ่านมา
              </p>
            </div>
          </div>
        </div>
        <div class="grid lg-1-3 sm-50">
          <div class="ss-card ss-card-04" data-aos="fade-up" data-aos-delay="450">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/13.jpg');"></div>
            </div>
            <div class="text-container color-black">
              <a class="title h6 fw-500 h-color-p" href="#">
                วารสารสำนักงานคณะกรรมการการเลือกตั้ง : ปีแห่งการเลือกตั้งท้องถิ่น 2
              </a>
              <p class="sm fw-400 mt-2">
                08 มิถุนายน 2565 / By <a class="color-p h-color-s" href="#">Admin</a>
              </p>
              <p class="desc fw-300 mt-2">
                ภาคสองของการเลือกตั้งท้องถิ่น ซึ่งจะเป็นส่วนต่อขยายเดิม โดยมีเนื้อหาใน 2 ส่วนหลัก คือ 
                เนื้อหาที่เกี่ยวกับการจัดการเลือกตั้งท้องถิ่น และอีกส่วนหนึ่งเป็น 
                เนื้อหาที่เกี่ยวกับบทบาทหน้าที่ขององค์กรปกครองส่วนท้องถิ่น ได้แก่ 
                บทบาทหน้าที่การจัดทำบริการสาธารณะขององค์กรปกครองส่วนท้องถิ่นในบริบทสมัยใหม่ 
                และองค์กรปกครองส่วนท้องถิ่นยุคใหม่ กับการเสริมพลังอำนาจให้แก่ประชาชน
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="btns jc-center pt-5" data-aos="fade-up" data-aos-delay="0">
        <a href="#" class="btn btn-action btn-03">
          บทความทั้งหมด
        </a>
      </div>
    </div>
  </section>

  <section class="section-03 section-padding" style="background-image:url('public/assets/app/images/bg/20.jpg');">
    <div class="container">
      <div class="grids jc-center">
        <div class="grid xl-25 lg-30 md-50 sm-50 xs-100">
          <div class="ss-card ss-card-05 filter-01" data-aos="fade-up" data-aos-delay="0">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/15.jpg');"></div>
            </div>
            <div class="text-container">
              <h3 class="fw-400 lh-2xs">คำวินิจฉัย</h3>
              <h6>คณะกรรมการการเลือกตั้ง</h6>
              <p class="mt-2">
                <a class="h-color-t" href="#">คลิกที่นี่เพื่ออ่านประกาศ</a>
              </p>
            </div>
          </div>
        </div>
        <div class="grid xl-25 lg-30 md-50 sm-50 xs-100">
          <div class="ss-card ss-card-05 filter-01" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/16.jpg');"></div>
            </div>
            <div class="text-container">
              <h3 class="fw-400 lh-2xs">รวมถาม-ตอบ</h3>
              <h6>ข้อซักถามพรรคการเมือง</h6>
              <p class="mt-2">
                <a class="h-color-t" href="#">คลิกที่นี่เพื่ออ่านรายละเอียด</a>
              </p>
            </div>
          </div>
        </div>
        <div class="grid xl-25 lg-30 md-50 sm-50 xs-100">
          <div class="ss-card ss-card-05 filter-01" data-aos="fade-up" data-aos-delay="300">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/17.jpg');"></div>
            </div>
            <div class="text-container">
              <div class="d-flex ai-end">
                <h3 class="fw-400 lh-2xs mr-1">สายด่วน</h3>
                <h1 class="fw-300 lh-3xs color-t">1444</h1>
              </div>
              <h6>สอบถามข้อมูลการเลือกตั้ง</h6>
              <p class="mt-2">เปิดให้บริการในวันและเวลาราชการ</p>
            </div>
          </div>
        </div>
        <div class="grid xl-25 lg-30 md-50 sm-50 xs-100">
          <div class="ss-card ss-card-05" data-aos="fade-up" data-aos-delay="450">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/18.jpg');"></div>
            </div>
            <div class="text-container">
              <form action="">
                <h2 class="fw-100 lh-2xs color-t">Poll Vote</h2>
                <p class="mt-1">
                  ท่านมีความพึงพอใจในการใช้บริการ
                  เว็บไซต์ของสำนักงานคณะกรรมการ
                  การเลือกตั้งในระดับใด ?
                </p>
                <fieldset class="mt-1">
                  <div class="gallery-grids">
                    <?php foreach(['พอใจมากที่สุด', 'พอใจมาก', 'ปานกลาง', 'เฉยๆ', 'ไม่น่าพอใจ'] as $i=>$d){?>
                      <div class="grid sm-50 xs-50">
                        <div class="rc-container">
                          <input type="radio" id="poll_<?= $i ?>" name="poll" value="<?= $i ?>" />
                          <label for="poll_<?= $i ?>"><?= $d ?></label>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </fieldset>
                <div class="btns pt-4">
                  <button type="submit" class="btn btn-action btn-01 w-full">
                    <div class="d-flex ai-center jc-center pt-2 pb-2">
                      <img 
                        class="img mr-3" src="public/assets/app/images/icon/12.png" 
                        style="width:1.75rem;" alt="Icon" 
                      />
                      <h6 class="fw-600">Vote</h6>
                    </div>
                  </button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="client-01 section-padding">
    <div class="slide-container" data-aos="fade-up" data-aos-delay="0">
      <div class="slides">
        <?php for($i=0; $i<5; $i++){?>
          <div class="slide">
            <div class="wrapper">
              <a class="client" href="#">
                <img src="public/assets/app/images/client/0<?= $i+1 ?>.png" alt="Client" />
              </a>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>