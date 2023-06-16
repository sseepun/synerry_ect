<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
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
      <?php include('component/list-header-calendar-style-02.php'); ?>
      <div class="calendar-header mt-6" data-aos="fade-up" data-aos-delay="0">
        <div class="text-wrapper">
          <p id="calendar-title" class="h3 fw-600">
            <span class="month">&nbsp;</span>
            <span class="year">&nbsp;</span>
          </p>
          <div class="wrapper">
            <div id="prev-day-btn" class="btn-calendar">
              <em class="fa-solid fa-arrow-left"></em>
            </div>
            <div id="today-btn" class="text fw-400 c-pointer">
              วันนี้
            </div>
            <div id="next-day-btn" class="btn-calendar">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </div>
        </div>
        <div class="button-container">
          <div class="button-wrapper">
          <div class="btns">
            <div class="btn btn-action btn-22 size-05 btn-white-theme">
              วัน
            </div>
            <div class="btn btn-action btn-22 size-05 btn-white-theme">
              สัปดาห์
            </div>
            <div class="btn btn-action btn-22 size-05 btn-white-theme">
              เดือน
            </div>
            <div class="btn btn-action btn-22 size-05 btn-white-theme">
              ปี
            </div>
          </div>
          </div>
        </div>
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
          todayBtn = $('#today-btn'),
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
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-06-15T08:00:00',
            end: '2023-07-16T12:00:00',
            url: '#',
          },{
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-03-27T08:00:00',
            end: '2023-03-27T12:00:00',
            url: '#',
          },
        ],
        datesRender: function(info){
          updateCalendarHeaderDay(info.view);
        },
        eventRender: function(info, d){
          var event = info.event,
              dateStart = new Date(event.start),
              dateEnd = new Date(event.end),
              timeStart = new Date(event.start),
              timeEnd = new Date(event.end),
              minutesStart = String(timeStart.getMinutes()).padStart(2, '0'),
              hoursStart = String(timeStart.getHours()).padStart(2, '0'),
              minutesEnd = String(timeEnd.getMinutes()).padStart(2, '0'),
              hoursEnd = String(timeEnd.getHours()).padStart(2, '0')

          info.el.innerHTML = `
            <div class="ss-card ss-card-70 color-dark"> 
              <h6 class="color-dark fw-500">${event.title}</h6>
              <div class="option">
                <div class="icon">
                  <em class="fa-solid fa-calendar-days"></em>
                </div>
                <span class="p sm fw-500">${dateStart.getDate()} ${months[dateStart.getMonth()]} ${dateStart.getFullYear() + 543}</span>
                <span class="ml-1 mr-1"> - </span>
                <span class="p sm fw-500">${dateEnd.getDate()} ${months[dateEnd.getMonth()]} ${dateStart.getFullYear() + 543}</span>
                <span class="p sm fw-500 ml-3">
                  เวลา ${hoursStart} : ${minutesStart} - ${hoursEnd} : ${minutesEnd}
                </span>
              </div>
              <div class="option">
                <div class="icon">
                  <em class="fa-solid fa-location-dot"></em>
                </div>
                <p class="sm fw-500">องค์การบริหารส่วนตำบลเทอดไทย, จังหวัดเชียงราย</p>
              </div>
            </div>
          `;
          return true;
        }
      });
      calendarDay.render();

      // Events
      todayBtn.click(function(e){
        e.preventDefault();
        calendarDay.today();
      });
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