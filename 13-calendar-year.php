<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
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

  <div class="section-padding">
    <div class="container">
      <div style="margin-top:6rem; position:relative; z-index:2;" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view'];
          include('component/list-header-calendar.php');
        ?>
      </div>
      <div class="calendar-style-02" data-aos="fade-up" data-aos-delay="0">
        <div data-provide="calendar"></div>
        
      </div>
      <div class="mt-6 pt-4" data-aos="fade-up" data-aos-delay="300">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
      <button class="next">click</button>
    </div>
  </div>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>
<!-- 
  <script src="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.js"></script> -->
  <script src="https://unpkg.com/js-year-calendar/locales/js-year-calendar.th"></script>
  
  <script>

new Calendar('.calendar-style-02', {
    minDate: new Date(),
    language: "th",
  });
  </script>

</body>
</html>