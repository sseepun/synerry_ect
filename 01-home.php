<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav.php'); ?>

  <section class="banner-01">
    <div class="slide-container">
      <div class="slides">
        <?php for($i=0; $i<4; $i++){?>
          <div class="slide">
            <div class="img-bg" style="background-image:url('public/assets/app/images/bg/01.jpg');"></div>
            <div class="hero animate" style="--delay:.55s;">
              <img src="public/assets/app/images/hero/03.png" class="Hero" />
            </div>
            <div class="container">
              <div class="quote-container animate" style="--delay:.4s;">
                <div class="wrapper color-white">
                  <h2 class="fw-500">จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก</h2>
                  <h1 class="fw-700 mt-1">
                    ประชาธิปไตย <br />
                    โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                  </h1>
                  <img class="quote quote-left" src="public/assets/app/images/icon/07.png" alt="Quote" />
                  <img class="quote quote-right" src="public/assets/app/images/icon/08.png" alt="Quote" />
                </div>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="arrows">
        <div class="arrow arrow-prev">
          <img src="public/assets/app/images/icon/09.png" alt="Arrow" />
        </div>
        <div class="arrow arrow-next">
          <img src="public/assets/app/images/icon/10.png" alt="Arrow" />
        </div>
      </div>
    </div>
  </section>

  <?php
    $categories = [
      [ 
        'title' => 'เรื่องเด่น กกต.', 'icon' => 'public/assets/app/images/icon/02.png',
        'icon_active' => 'public/assets/app/images/icon/02-white.png'
      ], [
        'title' => 'ข่าวประชาสัมพันธ์', 'icon' => 'public/assets/app/images/icon/06.png',
        'icon_active' => 'public/assets/app/images/icon/06-white.png'
      ], [
        'title' => 'ข่าว สนง. กกต.', 'icon' => 'public/assets/app/images/icon/03.png',
        'icon_active' => 'public/assets/app/images/icon/03-white.png'
      ], [
        'title' => 'ข่าว ประกวดราคา', 'icon' => 'public/assets/app/images/icon/04.png',
        'icon_active' => 'public/assets/app/images/icon/04-white.png'
      ], [
        'title' => 'วิดีโอ', 'icon' => 'public/assets/app/images/icon/05.png',
        'icon_active' => 'public/assets/app/images/icon/05-white.png'
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
              <p class="h6 fw-400 color-gray mt-1">ติดตามข่าวสารต่างๆ พร้อมลิงก์ที่น่าสนใจของ กกต.ได้ที่นี่</p>
            </div>
          </div>
        <?php }?>
      </div>
      <div class="tabs tabs-01 mt-6" data-aos="fade-up" data-aos-delay="150">
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

                <div class="ss-card ss-card-01 main-card">
                  <a class="ss-img" href="#">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/0<?= ($i+0)%3+3 ?>.jpg');"></div>
                  </a>
                  <div class="text-container color-white">
                    <div class="ss-tags">
                      <a class="tag" href="#">เรื่องเด่น กกต.</a>
                    </div>
                    <a class="title h5 fw-600 h-color-p mt-3" href="#">
                      การอบรมหลักสูตรการปฏิบัติงานระดับการชำนาญพิเศษ
                    </a>
                    <p class="desc">
                      กรรมการเลือกตั้ง มอบนโยบายในการปฏิบัติงาน แนวทางแก้ไขปัญหาในการปฏิบัติงานให้แก่พนักงานในการอบรมหลักสูตร
                    </p>
                    <p class="xs mt-3">
                      08 มิถุนายน 2565 / By <a class="h-color-p" href="#">PR ECT</a>
                    </p>
                  </div>
                </div>

              </div>
              <div class="grid lg-30 sm-100">
                
                <div class="ss-card ss-card-01 sub-card">
                  <a class="ss-img" href="#">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/0<?= ($i+1)%3+3 ?>.jpg');"></div>
                  </a>
                  <div class="text-container color-white">
                    <div class="ss-tags">
                      <a class="tag" href="#">เรื่องเด่น กกต.</a>
                    </div>
                    <a class="title h5 fw-600 h-color-p mt-2" href="#">
                      การประชุมพัฒนางานและยกระดับมาตรฐาน
                    </a>
                    <p class="xs">
                      08 มิถุนายน 2565 / By <a class="h-color-p" href="#">PR ECT</a>
                    </p>
                  </div>
                </div>
                <div class="ss-card ss-card-01 sub-card mt-4">
                  <a class="ss-img" href="#">
                    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/0<?= ($i+2)%3+3 ?>.jpg');"></div>
                  </a>
                  <div class="text-container color-white">
                    <div class="ss-tags">
                      <a class="tag" href="#">เรื่องเด่น กกต.</a>
                    </div>
                    <a class="title h5 fw-600 h-color-p mt-2" href="#">
                      คณะกรรมการการเลือกตั้งครบรอบ 24 ปี
                    </a>
                    <p class="xs">
                      08 มิถุนายน 2565 / By <a class="h-color-p" href="#">PR ECT</a>
                    </p>
                  </div>
                </div>
                
              </div>
            </div>
            <div class="table-footer mt-6 pt-3">
              <div class="paginate">
                <div class="page active">1</div>
                <div class="page">2</div>
                <div class="page">3</div>
                <div class="page">4</div>
                <div class="page">5</div>
                <div class="page">6</div>
              </div>
              <div class="btns">
                <a class="btn btn-action btn-p" href="#">
                  <?= $d['title'] ?>ทั้งหมด
                </a>
              </div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </section>

  <section class="section-01 section-padding" style="background-image:url('public/assets/app/images/bg/06.jpg');">
    <div class="hero" data-aos="fade-in" data-aos-delay="750">
      <img src="public/assets/app/images/hero/02-01.png" class="Hero Background" />
    </div>
    <div class="hero" data-aos="fade-up" data-aos-delay="150">
      <img src="public/assets/app/images/hero/02-02.png" class="Hero" />
    </div>
    <div class="container pos-relative">
      <div class="grids">
        <div class="grid xl-50 lg-50 sm-100 mt-0"></div>
        <div class="grid xl-50 lg-50 sm-100">
          <h2 class="color-white fw-500 md-no-br" data-aos="fade-up" data-aos-delay="0">
            กกต. พร้อมให้บริการ <br />
            ข้อมูลการเลือกตั้ง <br />
            แก่ภาคประชาชนทุกภาคส่วน
          </h2>
          <p class="h3 color-white mt-1 mb-1" data-aos="fade-up" data-aos-delay="150">
            ด้วยหลากหลายแอพพลิเคชั่น
          </p>
          <div class="grids">
            <div class="grid sm-1-3">
              <div class="ss-card ss-card-02 filter-01" data-aos="fade-up" data-aos-delay="300">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/bg/07.jpg');"></div>
                </div>
                <div class="text-container">
                  <h6 class="fw-600">แอปพลิเคชั่นฉลาดเลือก</h6>
                </div>
              </div>
            </div>
            <div class="grid sm-1-3">
              <div class="ss-card ss-card-02 filter-02" data-aos="fade-up" data-aos-delay="450">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/bg/08.jpg');"></div>
                </div>
                <div class="text-container">
                  <h6 class="fw-600">แอปพลิเคชั่นตาสัปปะรด</h6>
                </div>
              </div>
            </div>
            <div class="grid sm-1-3">
              <div class="ss-card ss-card-02 filter-03" data-aos="fade-up" data-aos-delay="600">
                <div class="ss-img">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/bg/09.jpg');"></div>
                </div>
                <div class="text-container">
                  <h6 class="fw-600">
                    แอปพลิเคชั่น <br /> CIVIL EDUCATION
                  </h6>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-02 section-padding" style="background-image:url('public/assets/app/images/bg/10.jpg');">
    <div class="container">
      <h3 class="fw-700" data-aos="fade-up" data-aos-delay="0">
        องค์ความรู้การเลือกตั้ง
      </h3>
      <div class="grids">
        <div class="grid xl-50 lg-75 sm-100">
          <div class="grids">
            <div class="grid sm-50">
              <div class="ss-card ss-card-03" data-aos="fade-up" data-aos-delay="150">
                <h5 class="title color-s fw-500">เลือกตั้งกรุงเทพมหานครและเมืองพัทยา</h5>
                <p class="desc fw-400 mt-1">
                  วันอาทิตย์ที่ 22 พฤษภาคม 2565 เวลา 08.00 - 17.00 น. 
                  เลือกตั้งสมาชิกสภาท้องถิ่นและผู้บริหารท้องถิ่นของ
                </p>
              </div>
            </div>
            <div class="grid sm-50">
              <div class="ss-card ss-card-03" data-aos="fade-up" data-aos-delay="300">
                <h5 class="title color-s fw-500">การบริจาคภาษีแก่พรรคการเมือง</h5>
                <p class="desc fw-400 mt-1">
                  ประชาชนผู้เสียภาษีที่เป็นบุคคลธรรมดาสามารถมีส่วนร่วมทางการเมืองได้ ด้วยผ่านการบริจาคภาษีเงิน
                </p>
              </div>
            </div>
            <div class="grid sm-50">
              <div class="ss-card ss-card-03" data-aos="fade-up" data-aos-delay="450">
                <h5 class="title color-s fw-500">เลือกตั้ง อบต.</h5>
                <p class="desc fw-400 mt-1">
                  วันอาทิตย์ที่ 28 พฤศจิกายน 2564 เวลา 08.00 - 17.00 น. 
                  เลือกตั้งสมาชิกสภาองค์การบริหารส่วนตำบลและ
                </p>
              </div>
            </div>
            <div class="grid sm-50">
              <div class="ss-card ss-card-03" data-aos="fade-up" data-aos-delay="600">
                <h5 class="title color-s fw-500">การแจ้งเหตุไม่อาจไปใช้สิทธิเลือกตั้งทางสื่ออิเล็กทรอนิกส์</h5>
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
        <a href="#" class="btn btn-action btn-p">
          บทความทั้งหมด
        </a>
      </div>
    </div>
  </section>

  <section class="section-03 section-padding" style="background-image:url('public/assets/app/images/bg/14.jpg');">
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

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>