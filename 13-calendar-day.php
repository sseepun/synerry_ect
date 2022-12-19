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
      <div class="calendar-header" data-aos="fade-up" data-aos-delay="0">
        <p id="calendar-title" class="h3 fw-600">
          <span class="month">&nbsp;</span>
          <span class="year">&nbsp;</span>
        </p>
        <div class="wrapper">
          <div id="prev-day-btn" class="btn-calendar">
            <em class="fa-solid fa-arrow-left"></em>
          </div>
          <a class="text fw-400" href="#">วันนี้</a>
          <div id="next-day-btn" class="btn-calendar">
            <em class="fa-solid fa-arrow-right"></em>
          </div>
        </div>
      </div>

      <div class="mt-6" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order', 'view', 'rss'];
          include('component/list-header.php');
        ?>
      </div>

      <div class="scroll-x-wrapper" data-simplebar data-aos="fade-up" data-aos-delay="300">
        <div class="scroll-x-wrapper pb-2 mt-6">
          <div class="calendar-wrapper">
            <div class="calendar-header-title">
              <div class="wrapper">
                <div class="time">
                  <p class="fw-400">เวลา</p>
                </div>
                <div class="list">
                  <p class="fw-600">รายการกิจกรรม</p>
                </div>
              </div>
            </div>
            <div class="calendar-day">
              <div id="calendar-day"></div>
            </div>
          </div>
        </div>
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

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.css" />
  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.js"></script>
  <script src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
  <script src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
  <script src="https://unpkg.com/@fullcalendar/timegrid@4.4.0/main.min.js"></script>

  <script>
    $(function(){ 'use strict';

      // Calendar Variables
      var days = ['อาทิตย์', 'จันทร์', 'อังคาร', 'พุธ', 'พฤหัสบดี', 'ศุกร์', 'เสาร์'];

      var months = [
        'มกราคม', 'กุมภาพันธ์', 'มีนาคม', 'เมษายน', 'พฤษภาคม', 'มิถุนายน',
        'กรกฎาคม', 'สิงหาคม', 'กันยายน', 'ตุลาคม', 'พฤศจิกายน', 'ธันวาคม'
      ];
      var today = new Date();


      // Calendar Day
      var calendarTitle = $('#calendar-title'),
          prevDayBtn = $('#prev-day-btn'),
          nextDayBtn = $('#next-day-btn');
            
      function htmlToElement(html){
        var template = document.createElement('template');
        html = html.trim();
        template.innerHTML = html;
        return template.content.firstChild;
      }
      function updateCalendarHeaderDay(view){
        var title = view.title;
        calendarTitle.find('.month').html(title.substr(0, title.length - 5));
        calendarTitle.find('.year').html(title.substr(title.length - 5));
      }


      const calendarDay = new FullCalendar.Calendar($('#calendar-day')[0], {
        plugins: [ 'interaction', 'timeGrid'],
        header: {
          left: 'prev',
          center: 'title',
          right: 'next'
        },
        defaultView: 'timeGridDay',
        firstDay: 1,
        locale: 'th',
        contentHeight: 'auto',
        slotDuration: '01:00:00',
        events: [
          {
            title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
            start: '2021-10-10T10:00:00',
            end: '2021-10-10T18:00:00',
            url: '#',
          },
          {
            title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564 2',
            start: '2021-10-10T12:00:00',
            end: '2021-10-10T21:00:00',
            url: '#',
          },
        ],
        datesRender: function(info){
          updateCalendarHeaderDay(info.view);
        },
      });
      calendarDay.render();


      // Events
      prevDayBtn.click(function(e){
        e.preventDefault();
        calendarDay.prev();
      });
      nextDayBtn.click(function(e){
        e.preventDefault();
        calendarDay.next();
      });

    });
  </script>
</body>
</html>