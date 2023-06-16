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
          <div class="wrapper">
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
            <div class="btn btn-action btn-33 calendar-main-site size-05 btn-white-theme">
              วัน
            </div>
            <div class="btn btn-action btn-33 calendar-main-site size-05 btn-white-theme">
              สัปดาห์
            </div>
            <div class="btn btn-action btn-33 calendar-main-site size-05 btn-white-theme">
              เดือน
            </div>
            <div class="btn btn-action btn-33 calendar-main-site size-05 btn-white-theme">
              ปี
            </div>
          </div>
          </div>
        </div>
      </div>
      <div class="scroll-x-wrapper" data-aos="fade-up" data-aos-delay="300">
        <div class="calendar-wrapper lg">
          <div class="calendar-week-02">
            <div id='calendar'></div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
  <script src='https://cdn.jsdelivr.net/npm/fullcalendar@6.1.8/index.global.min.js'></script>
   
  <script>
    $(function(){

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

      const calendarWeek = new FullCalendar.Calendar($('#calendar')[0],{
        initialView: 'timeGridWeek',
        locale: 'th',
        headerToolbar: {
        left: 'prev,next today',
        center: 'title',
        right: 'timeGridWeek',
      },
      editable: false,
      droppable: false, 
      allDayText: 'กิจกรรมต่อเนื่อง',
      events: [
        {
          id: 1,
          title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
          start: '2023-06-12',
          end:'2023-06-14'
        },{
          id: 2,
          title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
          start: '2023-06-12T03:00:00',
          end:'2023-06-12T05:00:00'
        }, {
          id: 3,
          title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
          start: '2023-06-16T01:00:00',
          end:'2023-06-16T03:00:00'
        },{
          id: 4,
          title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
          start: '2023-06-13',
          end:'2023-06-16'
        },
      ],
      datesSet: function(info){
        updateCalendarHeaderWeek(info.view);
      },
      eventContent: function(info) {
        var event = info.event,
            dateStart = new Date(event.start),
            timeStart = new Date(event.start),
            timeEnd = new Date(event.end),
            minutesStart = String(timeStart.getMinutes()).padStart(2, '0'),
            hoursStart = String(timeStart.getHours()).padStart(2, '0'),
            minutesEnd = String(timeEnd.getMinutes()).padStart(2, '0'),
            hoursEnd = String(timeEnd.getHours()).padStart(2, '0')
            return { 
              html: 
              `<div class="ss-card ss-card-70 color-dark mb-6"> 
                  <h6 class="color-dark fw-400">${event.title}</h6>
                  <div class="option mt-2">
                    <div class="icon">
                      <em class="fa-solid fa-calendar-days"></em>
                    </div>
                    <p class="xs fw-400">
                      เวลา <span class="p xs fw-400">${hoursStart} : ${minutesStart} - ${hoursEnd} : ${minutesEnd}</span>
                    </p>
                  </div>
                  <div class="option ai-start mt-1">
                    <div class="icon">
                      <em class="fa-solid fa-location-dot"></em>
                    </div>
                    <p class="xs fw-400 lh-xs">จังหวัดเชียงราย</p>
                  </div>
              </div>`
            };
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