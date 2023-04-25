<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'ปฏิทินกิจกรรม' ],
    ];
    $breadcrumbTitle = 'ปฏิทินกิจกรรม';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/42.jpg';
    $formContainer = true;
    $sectionOptions = ['option-02', 'views-05'];
    include('component/breadcrumb-style-02.php');
  ?>
  
  <section class="section-14">
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body pt-0">
        <div class="calendar-header mt-6" data-aos="fade-up" data-aos-delay="0">
          <div class="text-wrapper">
            <div class="wrapper ml-0">
              <div id="prev-week-btn" class="btn-calendar">
                <em class="fa-solid fa-arrow-left"></em>
              </div>
              <p id="calendar-title" class="h3 ml-2 mr-2 fw-600">
                <span class="month">&nbsp;</span>
                <span class="year">&nbsp;</span>
              </p>
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
        <div class="scroll-x-wrapper mt-6" data-aos="fade-up" data-aos-delay="300">
          <div class="calendar-wrapper theme-01">
            <div class="calendar-week">
              <div id="calendar-week"></div>
            </div>
          </div>
        </div>
          <div class="pt-6 pb-6"></div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('include/footer-style-05.php'); ?>
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


      // Calendar Month
      var calendarTitle = $('#calendar-title'),
          prevWeekBtn = $('#prev-week-btn'),
          nextWeekBtn = $('#next-week-btn');
      
      function htmlToElement(html){
        var template = document.createElement('template');
        html = html.trim();
        template.innerHTML = html;
        return template.content.firstChild;
      }
      function updateCalendarHeaderWeek(view){
        var title = view.title;
        calendarTitle.find('.month').html(title.substr(0, title.length - 5));
        calendarTitle.find('.year').html(title.substr(title.length - 5));
      }

      const calendarWeek = new FullCalendar.Calendar($('#calendar-week')[0], {
        plugins: [ 'interaction', 'timeGrid'],
        header: {
          left: 'prev',
          center: 'title',
          right: 'next'
        },
        defaultView: 'timeGridWeek',
        firstDay: 1,
        locale: 'th',
        contentHeight: 'auto',
        slotDuration: '01:00:00',
        events: [
          {
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้ง ที่ 4',
            start: '2023-04-25T10:00:00',
            end: '2023-04-25T20:00:00',
            url: '#',
          },
          {
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้ง ที่ 2',
            start: '2023-04-27T08:00:00',
            end: '2023-04-27T12:00:00',
            url: '#',
          },
          {
            title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564 3',
            start: '2021-10-11T12:00:00',
            end: '2021-10-11T21:00:00',
            url: '#',
          },
        ],
        eventSourceSuccess: function(content, xhr){
          return content.eventArray;
        },
        datesRender: function(info){
          updateCalendarHeaderWeek(info.view);
        },
        dayRender: function(info){
          if(!($(info.el).closest('.fc-scroller').length)){
            const date = new Date(info.date);
            if(info.el.classList.contains('fc-today')){
              info.el.innerHTML = `<div class="custom-date active">
                  ${days[date.getDay()]} <span class="ml-1">${date.getDate()}</span>
                </div>`;
            }else{
              info.el.innerHTML = `<div class="custom-date">
                  ${days[date.getDay()]} <span class="ml-1">${date.getDate()}</span>
                </div>`;
            }
            if(info.el.classList.contains('fc-other-month')){
              info.el.style.opacity = 0.3;
            }
          }
        }, 
        eventRender: function(info, d){
          var event = info.event,
              dateStart = new Date(event.start),
              timeStart = new Date(event.start),
              timeEnd = new Date(event.end),
              minutesStart = String(timeStart.getMinutes()).padStart(2, '0'),
              hoursStart = String(timeStart.getHours()).padStart(2, '0'),
              minutesEnd = String(timeEnd.getMinutes()).padStart(2, '0'),
              hoursEnd = String(timeEnd.getHours()).padStart(2, '0')

              console.log(minutesStart)
              console.log(hoursStart)
         
          info.el.innerHTML = `
            <div class="ss-card ss-card-70 color-dark"> 
              <h6 class="color-dark fw-400 lh-xs">${event.title}</h6>
              <p class="sm fw-500 mt-1">วันเวลา</p>
              <p class="xs fw-400">
                ${dateStart.getDate()} มีนาคม ${dateStart.getFullYear() + 543}
              </p>
              <p class="p xs fw-400">
                เวลา ${hoursStart} : ${minutesStart} - ${hoursEnd} : ${minutesEnd}
              </p>
              <p class="sm fw-500 mt-1">สถานที่</p>
              <p class="p xs fw-400">
                จังหวัดเชียงราย
              </p>
            </div>
          `;
          return true;
        },
      });
      calendarWeek.render();


      // Events
      prevWeekBtn.click(function(e){
        e.preventDefault();
        calendarWeek.prev();
      });
      nextWeekBtn.click(function(e){
        e.preventDefault();
        calendarWeek.next();
      });

    });
  </script>
</body>
</html>