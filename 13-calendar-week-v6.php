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

  <section class="section-padding">
    <div class="container">
    <div data-aos="fade-up" data-aos-delay="0">
        <?php include('component/list-header-calendar-style-02.php'); ?>
      </div>
      <div class="calendar-header mt-6 mb-6" data-aos="fade-up" data-aos-delay="150">
        <div class="text-wrapper">
          <p id="calendar-title" class="h3 fw-600">
            <span class="month">&nbsp;</span>
            <span class="year">&nbsp;</span>
          </p>
          <div class="wrapper op-0">
            <div id="prev-week-btn" class="btn-calendar">
              <em class="fa-solid fa-arrow-left"></em>
            </div>
            <a class="text fw-400 size-02" href="#">สัปดาห์นี้</a>
            <div id="next-week-btn" class="btn-calendar">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </div>
        </div>
        <div class="button-container">
          <div class="button-wrapper">
          <div class="btns">
            <div class="btn btn-action btn-33 size-05 btn-white-theme">
              วัน
            </div>
            <div class="btn btn-action btn-33 size-05 btn-white-theme">
              สัปดาห์
            </div>
            <div class="btn btn-action btn-33 size-05 btn-white-theme">
              เดือน
            </div>
            <div class="btn btn-action btn-33 size-05 btn-white-theme">
              ปี
            </div>
          </div>
          </div>
        </div>
      </div>
      <div id='calendar-container mt-6 pt-6'>
        <div class="calendar-week-02">
          <div id='calendar'></div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
   
  <script>
    document.addEventListener('DOMContentLoaded', function() {
    var Calendar = FullCalendar.Calendar;

    var calendarEl = document.getElementById('calendar');


  var calendar = new Calendar(calendarEl, {
    initialView: 'timeGridWeek',
    headerToolbar: {
      left: 'prev,next today',
      center: 'title',
      right: 'timeGridWeek'
    },
    editable: true,
    droppable: true, // this allows things to be dropped onto the calendar
    events: [
      {
        id: 1,
        title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
        start: '2023-06-14',
        end:'2023-06-16'
      }, {
        id: 2,
        title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
        start: '2023-06-12T03:00:00',
        end:'2023-06-12T05:00:00'
      }, {
        id: 3,
        title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
        start: '2023-06-16T01:00:00',
        end:'2023-06-16T03:00:00'
      },
    ],
  });

  calendar.render();
});
  </script>
</body>
</html>