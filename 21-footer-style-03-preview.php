<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-style-01.php'); ?>

  <section class="section-03 section-padding" style="background-image:url('public/assets/app/images/bg/20.jpg');">
    <div class="container">
      <div class="grids jc-center">
        <div class="grid xl-25 lg-30 md-50 sm-50 xs-100">
          <div class="ss-card ss-card-05 filter-02" data-aos="fade-up" data-aos-delay="0">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/15.jpg');"></div>
            </div>
            <div class="text-container">
              <h3 class="fw-400 lh-2xs">คำวินิจฉัย</h3>
              <h6>คณะกรรมการการเลือกตั้ง</h6>
              <p class="mt-2 sm">
                <a class="h-color-07" href="#">คลิกที่นี่เพื่ออ่านประกาศ</a>
              </p>
            </div>
          </div>
        </div>
        <div class="grid xl-25 lg-30 md-50 sm-50 xs-100">
          <div class="ss-card ss-card-05 filter-02" data-aos="fade-up" data-aos-delay="150">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/16.jpg');"></div>
            </div>
            <div class="text-container">
              <h3 class="fw-400 lh-2xs">รวมถาม-ตอบ</h3>
              <h6>ข้อซักถามพรรคการเมือง</h6>
              <p class="mt-2 sm">
                <a class="h-color-07" href="#">คลิกที่นี่เพื่ออ่านรายละเอียด</a>
              </p>
            </div>
          </div>
        </div>
        <div class="grid xl-25 lg-30 md-50 sm-50 xs-100">
          <div class="ss-card ss-card-05 filter-02" data-aos="fade-up" data-aos-delay="300">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/bg/17.jpg');"></div>
            </div>
            <div class="text-container">
              <div class="d-flex ai-end">
                <h3 class="fw-400 lh-2xs mr-1">สายด่วน</h3>
                <h1 class="fw-300 lh-3xs color-07">1444</h1>
              </div>
              <h6>สอบถามข้อมูลการเลือกตั้ง</h6>
              <p class="sm mt-2">เปิดให้บริการในวันและเวลาราชการ</p>
            </div>
          </div>
        </div>
        <div class="grid xl-25 lg-30 md-50 sm-50 xs-100">
          <div class="ss-card ss-card-05" data-aos="fade-up" data-aos-delay="450">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('public/assets/app/images/content/01.png');"></div>
            </div>
            <div class="text-container">
              <form action="">
                <h2 class="fw-300 lh-2xs color-07">Poll Vote</h2>
                <p class="mt-1">
                  ท่านมีความพึงพอใจในการใช้บริการ
                  เว็บไซต์ของสำนักงานคณะกรรมการ
                  การเลือกตั้งในระดับใด ?
                </p>
                <fieldset class="mt-1">
                  <div class="gallery-grids">
                    <?php foreach(['พอใจมากที่สุด', 'พอใจมาก', 'ปานกลาง', 'เฉยๆ', 'ไม่น่าพอใจ'] as $i=>$d){?>
                      <div class="grid sm-50 xs-50">
                        <div class="rc-container style-02">
                          <input type="radio" id="poll_<?= $i ?>" name="poll" value="<?= $i ?>" />
                          <label for="poll_<?= $i ?>"><?= $d ?></label>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </fieldset>
                <div class="btns pt-4">
                  <button type="submit" class="btn btn-action btn-04 w-full">
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

  <?php include_once('include/footer-style-03.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>