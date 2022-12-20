<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-02.php'); ?>
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
          $listHeader = ['search', 'category', 'order', 'view', 'rss'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="calendar-style-02">
        <div data-provide="calendar"></div>
      </div>
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </div>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script src="https://unpkg.com/js-year-calendar@latest/dist/js-year-calendar.min.js"></script>

  <script>
    new Calendar('.calendar-style-02', {
    minDate: new Date(),
  })

    const calendarFooter = document.createElement('div');
    const wrapper = document.createElement('div');
    const arrowIcon = document.createElement('div');
    const em =  document.createElement('em');
    const p = document.createElement('p');
    const p2 = document.createElement('p');
    const today = document.createElement('div');
  
    calendarFooter.className = 'calendar-footer';
    document.getElementsByClassName('month-container')[0].append(calendarFooter);
  
    today.className = 'today';
    wrapper.className = 'wrapper-container';
    arrowIcon.className = 'arrow-icon';
    em.className= 'fa-solid fa-arrow-right';
    p.className = 'color-04 fw-400';

    p.textContent = `6`;
    p2.textContent = 'วันนี้';

    calendarFooter.append(wrapper);
    wrapper.append(p, arrowIcon);
    today.append(p2)
  
    arrowIcon.append(em);
  </script>

</body>
</html>