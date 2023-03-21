<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ยกเลิกการรับข่าวสาร' ],
    ];
    $breadcrumbTitle = 'ยกเลิกการรับข่าวสาร';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/39.jpg';
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
              แบบฟอร์มยกเลิกการรับข่าวสาร
            </h3>
          </div>
          <div class="ss-box m-unset xl mt-6" data-aos="fade-up" data-aos-delay="150">
            <form class="form style-01">
              <div class="d-flex ai-center">
                <em class="fa-sharp fa-regular fa-square-check color-18"></em>
                <p class="ml-2 fw-500">ระบบได้ทำการยกเลิกรับจดหมายข่าวของคุณเป็นที่เรียบร้อยแล้ว</p>
              </div>
              <div class="btns jc-center ss-card pt-5">
                <div class="btns">
                  <div class="btn btn-action btn-26">
                    <span>กลับไปหน้าแรก</span>
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <?php
    $listResult= ['enews-cancel'];
    include_once('component/popup-file-error-style-02.php');
  ?>

  <div class="section-padding">
    <div class="container">
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </div>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>