<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
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

  <?php 
    $news01 = [
      ['image' => 'public/assets/app/images/content/02.jpg'], 
      ['image' => 'public/assets/app/images/content/01.jpg']
    ]
  ?>

  <?php 
    $news03 = [
      ['image' => 'public/assets/app/images/content/66.jpg'],
      ['image' => 'public/assets/app/images/content/67.jpg'], 
      ['image' => 'public/assets/app/images/content/02.jpg'], 
      ['image' => 'public/assets/app/images/content/68.jpg'], 
      ['image' => 'public/assets/app/images/content/66.jpg'], 
      ['image' => 'public/assets/app/images/content/67.jpg'], 
      ['image' => 'public/assets/app/images/content/02.jpg'], 
      ['image' => 'public/assets/app/images/content/68.jpg'],
      ['image' => 'public/assets/app/images/content/66.jpg'],
      ['image' => 'public/assets/app/images/content/67.jpg'],
    ]
  ?>

  <section class="section-padding">
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        ปฏิทินกิจกรรม
      </h3>
      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view'];
          include('component/list-header-calendar.php');
        ?>
      </div>
      <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($news03 as $d) {?>
          <div class="grid lg-100 md-50">
            <a class="ss-card ss-card-20" href="#">
              <div class="wrapper">
                <div class="date">
                  <div class="wrapper">
                    <p class="day fw-400">20</p>
                    <p class="xs month">ก.ย.65</p>
                  </div>
                </div>
                <div class="img-container">
                  <div class="ss-img">
                    <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
                    <div class="filter-01"></div>
                  </div>
                </div>
                <div class="text-container">
                  <div class="text">
                    <p class="title fw-600 mt-1">
                      รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมหารือเตรียมการจัดงานวันสถาปนา
                      สำนักงานคณะกรรมการการเลือกตั้ง ครบรอบ 24 ปี รองเลขาธิการคณะกรรมการการเลือกตั้ง 
                      ประชุมหารือเตรียมการจัดงานวันสถาปนา สำนักงานคณะกรรมการการเลือกตั้ง ครบรอบ 24 ปี
                    </p>
                    <div class="card-top mt-1">
                      <div class="wrapper">
                        <div class="icon">
                          <em class="fa-solid fa-calendar-days"></em>
                          <span class="p sm ml-2 fw-500">08 มิถุนายน 2565</span>
                        </div>
                        <div class="icon">
                          <em class="fa-solid fa-eye"></em>
                          <span class="p sm ml-2 fw-500">255</span>
                        </div>
                        <div class="icon">
                          <em class="fa-solid fa-share-nodes"></em>
                          <span class="p sm ml-2 fw-500">208</span>
                        </div>
                      </div>
                    </div>
                    <p class="desc sm color-gray mt-1 fw-400">
                      วันที่ 7 มิถุนายน 2565 เวลา 13.30 น. นายเกรียงไกร พานดอกไม้ 
                      รองเลขาธิการคณะกรรมการการเลือกตั้ง ประชุมหารือร่วมกับคณะทำงาน
                      ในการศึกษาวิธีการปฏิบัติที่ผ่านมาสำหรับการประเมินผลการปฏิบัติงาน
                      ของเลขาธิการคณะกรรมการการเลือกตั้ง เพื่อให้เป็นไปตามความเห็นและ
                      ข้อสังเกตของคณะกรรมการการเลือกตั้ง ณ ห้องประชุมรองเลขาธิการ
                      เพื่อให้เป็นไปตามความเห็นและ ข้อสังเกตของคณะกรรมการการเลือกตั้ง 
                      ณ ห้องประชุมรองเลขาธิการ
                    </p>
                  </div>
                  <div class="btns jc-center" data-aos="fade-up" data-aos-delay="300">
                    <div href="#" class="btn btn-action btn-02">
                      <em class="icon fa-solid fa-arrow-right"></em>
                      อ่านเพิ่มเติม
                    </div>
                  </div>
                </div>
              </div>
            </a>
          </div>
        <?php }?>
      </div>
      <div class="mt-6 pt-4" data-aos="fade-up" data-aos-delay="0">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>