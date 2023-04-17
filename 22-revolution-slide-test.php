<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-01.php'); ?>

  <section class="banner-04 rev_slider" id="rev_slider_1" data-version="5.4.1">
    <ul>
      <li class="content-container" data-transition="random-premium" >
        <img src="public/assets/app/images/bg/02.jpg" alt="Sky" class="rev-slidebg">
        <div class="content-wrapper">
          <div class="container">
            <div id="quote" class="quote-container style-02 animate">
              <div class="wrapper">
                <h2 class="color-black-theme fw-500">จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก</h2>
                <h1 class="color-black-theme fw-700 mt-1">
                  <span class="color-04 color-black-theme">ประชาธิปไตย</span><br />
                  โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                </h1>
                <img class="quote quote-left" src="public/assets/app/images/icon/15.png" alt="Quote" />
                <img class="quote quote-right" src="public/assets/app/images/icon/16.png" alt="Quote" />
              </div>
            </div>
          </div>
        </div>
        <div class="hero size-02 animate" style="--delay:.55s;">
          <img src="public/assets/app/images/hero/05.png" class="Hero" />
        </div>
      </li>
      <li class="content-container" data-transition="random-premium">
        <img src="public/assets/app/images/bg/02.jpg" alt="Sky" class="rev-slidebg">
        <div class="content-wrapper">
          <div class="container">
            <div class="quote-container style-02 animate" style="--delay:.4s;">
              <div class="wrapper">
                <h2 class="color-black-theme fw-500">จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก</h2>
                <h1 class="color-black-theme fw-700 mt-1">
                  <span class="color-04 color-black-theme">ประชาธิปไตย</span><br />
                  โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                </h1>
                <img class="quote quote-left" src="public/assets/app/images/icon/15.png" alt="Quote" />
                <img class="quote quote-right" src="public/assets/app/images/icon/16.png" alt="Quote" />
              </div>
            </div>
          </div>
        </div>
        <div class="hero size-02 animate" style="--delay:.55s;">
          <img src="public/assets/app/images/hero/05.png" class="Hero" />
        </div>
      </li>
      <li class="content-container" data-transition="random-premium">
        <img src="public/assets/app/images/bg/02.jpg" alt="Sky" class="rev-slidebg">
        <div class="content-wrapper">
          <div class="container">
            <div class="quote-container style-02 animate" style="--delay:.4s;">
              <div class="wrapper">
                <h2 class="color-black-theme fw-500">จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก</h2>
                <h1 class="color-black-theme fw-700 mt-1">
                  <span class="color-04 color-black-theme">ประชาธิปไตย</span><br />
                  โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                </h1>
                <img class="quote quote-left" src="public/assets/app/images/icon/15.png" alt="Quote" />
                <img class="quote quote-right" src="public/assets/app/images/icon/16.png" alt="Quote" />
              </div>
            </div>
          </div>
        </div>
        <div class="hero size-02 animate" style="--delay:.55s;">
          <img src="public/assets/app/images/hero/05.png" class="Hero" />
        </div>
      </li>
      <li class="content-container" data-transition="random-premium">
        <img src="public/assets/app/images/bg/02.jpg" alt="Sky" class="rev-slidebg">
        <div class="content-wrapper">
          <div class="container">
            <div class="quote-container style-02 animate" style="--delay:.4s;">
              <div class="wrapper">
                <h2 class="color-black-theme fw-500">จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก</h2>
                <h1 class="color-black-theme fw-700 mt-1">
                  <span class="color-04 color-black-theme">ประชาธิปไตย</span><br />
                  โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                </h1>
                <img class="quote quote-left" src="public/assets/app/images/icon/15.png" alt="Quote" />
                <img class="quote quote-right" src="public/assets/app/images/icon/16.png" alt="Quote" />
              </div>
            </div>
          </div>
        </div>
        <div class="hero size-02 animate" style="--delay:.55s;">
          <img src="public/assets/app/images/hero/05.png" class="Hero" />
        </div>
      </li>
    </ul>
  </section>

  <?php 
    $content01 = [
      [
        'title' => 'สถิติการเลือกตั้ง',
        'icon'  => 'public/assets/app/images/icon-svg/graph.svg'
      ],[
        'title' => 'ประกาศผลการเลือกตั้ง',
        'icon'  => 'public/assets/app/images/icon-svg/election.svg'
      ],[
        'title' => 'ศูนย์กลางข้อมูลเปิดเกี่ยวกับการเลือกตั้ง',
        'icon'  => 'public/assets/app/images/icon-svg/folder.svg'
      ],[
        'title' => 'ข้อมูลพรรคการเมือง',
        'icon'  => 'public/assets/app/images/icon-svg/political-party.svg'
      ],[
        'title' => 'ตรวจสอบข้อมูลสมาชิกพรรคการเมือง',
        'icon'  => 'public/assets/app/images/icon-svg/check.svg'
      ],
    ]
  ?>

  <section class="section-21">
    <div class="container">
      <div class="swiper-container">
        <div class="swiper-wrapper">
          <?php for($i=0; $i<5; $i++){?>
            <?php foreach($content01 as $d){?>
              <div class="swiper-slide">
                <div class="ss-card ss-card-51">
                  <div class="wrapper">
                    <div class="icon">
                      <img class="inactive" src="<?= $d['icon'] ?>" alt="Icon">
                    </div>
                    <div class="text-wrapper mt-1 lh-sm fw-400">
                      <p class="fw-400"><?= $d['title'] ?></p>
                    </div>
                  </div>
                  <div class="card-line style-02"></div>
                  <div class="filter style-02">
                    <div class="wrapper">
                      <div class="icon op-0">
                        <img src="public/assets/app/images/icon/51.png" alt="Icon">
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php } ?>
          <?php }?>
        </div>
      </div>
      <div class="arrow-container">
        <div id="arrow01" class="arrow btn-icon-prev">
          <em class="fa-solid fa-arrow-left"></em>
        </div>
        <div id="arrow02" class="arrow btn-icon-next">
          <em class="fa-solid fa-arrow-right"></em>
        </div>
      </div>
    </div>
  </section>


  <?php include_once('include/footer-03.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>