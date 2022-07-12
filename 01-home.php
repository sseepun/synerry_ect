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
                    โปรงใส<span class="h3 fw-500">และ</span>เป็นธรรม
                  </h1>
                  <img class="quote quote-left" src="public/assets/app/images/icon/07.png" alt="Quote" />
                  <img class="quote quote-right" src="public/assets/app/images/icon/08.png" alt="Quote" />
                </div>
              </div>
            </div>
          </div>
        <?php }?>
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
      <div class="text-center">
        <h3 class="fw-700 color-dark" data-aos="fade-up" data-aos-delay="0">
          ข่าวสาร/ประชาสัมพันธ์
        </h3>
        <p class="h6 fw-400 color-gray mt-1" data-aos="fade-up" data-aos-delay="150">
          ติดตามข่าวสารต่างๆ พร้อมลิงก์ที่น่าสนใจของ กกต.ได้ที่นี่
        </p>
      </div>
      <div class="tabs tabs-01 mt-6" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($categories as $i=>$d){?>
          <div class="tab <?= $i==0? 'active': '' ?>" data-tab="content_<?= $i ?>">
            <div class="icon-inactive"><img src="<?= $d['icon'] ?>" alt="Icon" /></div>
            <div class="icon-active"><img src="<?= $d['icon_active'] ?>" alt="Icon" /></div>
            <?= $d['title'] ?>
          </div>
        <?php }?>
      </div>
      <div class="tab-contents mt-2" data-aos="fade-up" data-aos-delay="450">
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

  <section class="section-04 section-padding" style="background-image: url(public/assets/app/images/bg/10.jpg);">
    <div class="container">
      <h3 class="fw-700">องค์ความรู้การเลือกตั้ง</h3>
      <div class="grids">
        <div class="grid lg-50 md-100 sm-100 xs-100">
          <div class="grids">
            <div class="grid lg-50 md-50 sm-50 xs-100">
              <div class="text-wrapper ss-text-wrapper bradius-round p-5">
                <h5 class="color-s fw-500">เลือกตั้งกรุงเทพมหานครและเมืองพัทยา</h5>
                <p class="mt-2 text-nm fw-400">
                  วันอาทิตย์ที่ 22 พฤษภาคม 2565 เวลา 08.00 - 17.00 น. เลือกตั้งสมาชิกสภาท้องถิ่นและผู้บริหารท้องถิ่นของ
                </p>
              </div>
            </div>
            <div class="grid lg-50 md-50 sm-50">
              <div class="text-wrapper ss-text-wrapper bradius-round p-5">
                <h5 class="color-s fw-500">การบริจาคภาษีแก่พรรค <br> การเมือง</h5>
                <p class="mt-2 text-nm fw-400">
                  ประชาชนผู้เสียภาษีที่เป็นบุคคลธรรมดาสามารถมีส่วนร่วมทางการเมืองได้ ด้วยผ่านการบริจาคภาษีเงิน
                </p>
              </div>
            </div>
            <div class="grid lg-50 md-50 sm-50">
              <div class="text-wrapper ss-text-wrapper bradius-round p-5">
                <h5 class="color-s fw-500">เลือกตั้ง อบต.</h5>
                <p class="mt-2 text-nm fw-400">
                  วันอาทิตย์ที่ 28 พฤศจิกายน 2564 เวลา 08.00 - 17.00 น. เลือกตั้งสมาชิกสภาองค์การบริหารส่วนตำบลและ
                </p>
              </div>
            </div>
            <div class="grid lg-50 md-50 sm-50">
              <div class="text-wrapper text-wrapper bradius-round p-5">
                <h5 class="color-s fw-500">การแจ้งเหตุไม่อาจไปใช้สิทธิเลือกตั้งทางสื่ออิเล็กทรอนิกส์</h5>
                <p class="mt-2 text-nm fw-400">
                  เพื่อเป็นการเพิ่มช่องทางอำนวยความสะดวกแก่ประชาชนผู้มีสิทธิเลือกตั้งที่มีความจำเป็นไม่อาจไปใช้สิทธิเลือกตั้ง
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- <section class="section-05 section-padding">
    <div class="container">
      <h2 class="text-center fw-700">บทความพิเศษ</h2>
      <div class="grids">
        <div class="grid lg-1-3 md-50 sm-50 xs-100">
          <img src="public/assets/app/images/bg/11.jpg" class="img bradius-round" />
          <h5 class="mt-5">วารสารสำงานกรรมการเลือกตั้ง:พรรค การเมืองกับการเปลี่ยนแปลงทางการเมืองและการเลือกตั้ง</h5>
          <p class="mt-3">08 มิถุนายน 2565 / By <span><a href="#">Admin</a></span></p>
          <p>หยวนออร์แกนิค โบรกเกอร์บ๊อบ รีทัชแคนยอน แบล็คซะบรรพชน แชมเปี้ยน จัมโบ้มาร์ตออดิทอเรียม ลีก เชฟคองเกรสเยลลี่ เพรสแคมป์สี่แยกยูโร กุนซือแบรนด์ ตุ๊กเวเฟอร์โชห่วย แหวว ต่อรองช็อปปิ้งเก๊ะแบล็คลิมิต ฮันนีมูนเปียโนคอรัปชันห่วย แตงกวาช็อปเปอร์แมนชั่น เป็นไงแทงกั๊กลีก</p>
        </div>
        <div class="grid lg-1-3 md-50 sm-50 xs-100">
          <img src="public/assets/app/images/bg/12.jpg" class="img bradius-round" />
          <h5 class="mt-5">วารสารสำงานกรรมการเลือกตั้ง:พรรค การเมืองกับการเปลี่ยนแปลงทางการเมืองและการเลือกตั้ง</h5>
          <p class="mt-3">08 มิถุนายน 2565 / By <span><a href="#">Admin</a></span></p>
          <p>หยวนออร์แกนิค โบรกเกอร์บ๊อบ รีทัชแคนยอน แบล็คซะบรรพชน แชมเปี้ยน จัมโบ้มาร์ตออดิทอเรียม ลีก เชฟคองเกรสเยลลี่ เพรสแคมป์สี่แยกยูโร กุนซือแบรนด์ ตุ๊กเวเฟอร์โชห่วย แหวว ต่อรองช็อปปิ้งเก๊ะแบล็คลิมิต ฮันนีมูนเปียโนคอรัปชันห่วย แตงกวาช็อปเปอร์แมนชั่น เป็นไงแทงกั๊กลีก</p>
        </div>
        <div class="grid lg-1-3 md-50 sm-50 xs-100">
          <img src="public/assets/app/images/bg/13.jpg" class="img bradius-round" />
          <h5 class="mt-5">วารสารสำงานกรรมการเลือกตั้ง:พรรค การเมืองกับการเปลี่ยนแปลงทางการเมืองและการเลือกตั้ง</h5>
          <p class="mt-3">08 มิถุนายน 2565 / By <span><a href="#">Admin</a></span></p>
          <p>หยวนออร์แกนิค โบรกเกอร์บ๊อบ รีทัชแคนยอน แบล็คซะบรรพชน แชมเปี้ยน จัมโบ้มาร์ตออดิทอเรียม ลีก เชฟคองเกรสเยลลี่ เพรสแคมป์สี่แยกยูโร กุนซือแบรนด์ ตุ๊กเวเฟอร์โชห่วย แหวว ต่อรองช็อปปิ้งเก๊ะแบล็คลิมิต ฮันนีมูนเปียโนคอรัปชันห่วย แตงกวาช็อปเปอร์แมนชั่น เป็นไงแทงกั๊กลีก</p>
        </div>
      </div>
      <div class="btns jc-center mt-5">
        <a href="#" class="btn btn-action btn-p">
          บทความทั้งหมด
        </a>
      </div>
    </div>
  </section>

  <section class="section-06 section-padding" style="background-image: url(public/assets/app/images/bg/14.jpg);">
    <div class="container">
      <div class="grids">
        <div class="grid lg-25 md-50 sm-50 xs-100">
          <div class="pos-relative">
            <img src="public/assets/app/images/bg/15.png" class="img bradius-round" />
            <div class="pos-absolute text-wrapper">
              <h4>คำวินิจฉัย</h4>
              <h6>คณะกรรมการการเลือกตั้ง</h6>
              <a>คลิ๊กที่นี่เพื่ออ่านประกาศ</a>
            </div>
          </div>
        </div>
        <div class="grid lg-25 md-50 sm-50 xs-100">
          <div class="pos-relative">
            <img src="public/assets/app/images/bg/16.png" class="img bradius-round" />
            <div class="pos-absolute text-wrapper">
              <h4>รวมถาม-ตอบ</h4>
              <h6>ข้อซักถามพรรคการเมือง</h6>
              <a>คลิ๊กที่นี่เพื่ออ่านประกาศ</a>
            </div>
          </div>
        </div>
        <div class="grid lg-25 md-50 sm-50 xs-100">
          <div class="pos-relative">
            <img src="public/assets/app/images/bg/17.png" class="img bradius-round" />
            <div class="pos-absolute text-wrapper">
              <h4>สายด่วน<span class="">1444</span></h4>
              <h6>คณะกรรมการการเลือกตั้ง</h6>
              <a>คลิ๊กที่นี่เพื่ออ่านประกาศ</a>
            </div>
          </div>
        </div>
        <div class="grid lg-25 md-50 sm-50 xs-100">
          <div class="pos-relative">
            <img src="public/assets/app/images/bg/18.png" class="img bradius-round" />
            <div class="pos-absolute text-wrapper">
              <h4>Poll Vote</h4>
              <h6>คณะกรรมการการเลือกตั้ง</h6>
              <a>คลิ๊กที่นี่เพื่ออ่านประกาศ</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-07 section-padding">
    <div class="container">
      <div class="grids">
        <div class="grid lg-20 md-50 sm-50 xs-50">
          <img src="public/assets/app/images/bg/24.png" class="img bradius-round"/>
        </div>
        <div class="grid lg-20 md-50 sm-50 xs-50">
          <img src="public/assets/app/images/bg/23.png" class="img bradius-round" />
        </div>
        <div class="grid lg-20 md-50 sm-50 xs-50">
          <img src="public/assets/app/images/bg/22.png" class="img bradius-round" />
        </div>
        <div class="grid lg-20 md-50 sm-50 xs-50">
          <img src="public/assets/app/images/bg/21.png" class="img bradius-round" />
        </div>
        <div class="grid lg-20 md-50 sm-50 xs-50">
          <img src="public/assets/app/images/bg/20.png" class="img bradius-round" />
        </div>
      </div>
    </div>
  </section> -->

  <?php include_once('include/footer.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>