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
        <div class="body">
          <div class="calendar-header" data-aos="fade-up" data-aos-delay="150">
            <div class="text-wrapper">
              <div class="wrapper ml-0">
                <div id="prev-month-btn" class="btn-calendar">
                  <em class="fa-solid fa-arrow-left"></em>
                </div>
                <p id="calendar-title" class="h3 ml-2 mr-2 fw-600">
                  <span class="year">&nbsp;</span>
                </p>
                <div id="today-btn" class="text fw-400 c-pointer">
                  ปีนี้
                </div>
                <div id="next-month-btn" class="btn-calendar">
                  <em class="fa-solid fa-arrow-right"></em>
                </div>
              </div>
            </div>
            <div class="button-container">
              <div class="button-wrapper">
                <div class="btns">
                  <div class="btn btn-action btn-29 size-05 btn-white-theme">
                    วัน
                  </div>
                  <div class="btn btn-action btn-29 size-05 btn-white-theme">
                    สัปดาห์
                  </div>
                  <div class="btn btn-action btn-29 size-05 btn-white-theme">
                    เดือน
                  </div>
                  <div class="btn btn-action btn-29 size-05 btn-white-theme">
                    ปี
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="calendar-year pt-2" data-aos="fade-up" data-aos-delay="300">
            <div id="calendar-year"></div>
          </div>
          <div class="pt-6 pb-6"></div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
  <script>
    $(function(){ 'use strict';
      var now = new Date();
      var thisMonth = `${now.getFullYear()}-${('0'+(now.getMonth()+1)).slice(-2)}`;

      var calendarTitle = $('#calendar-title'),
          todayBtn = $('#today-btn'),
          prevMonthBtn = $('#prev-month-btn'),
          nextMonthBtn = $('#next-month-btn');
      
      function htmlToElement(html){
        var template = document.createElement('template');
        html = html.trim();
        template.innerHTML = html;
        return template.content.firstChild;
      }
      function updateCalendarHeader(year){
        var prevMonth = 0;
        var nextMonth = 0;

        calendarTitle.html(`พ.ศ. ${year+543}`);
        prevMonthBtn.find('> span').html(prevMonth);
        nextMonthBtn.find('> span').html(nextMonth);
      }

      var calendar = new FullCalendar.Calendar($('#calendar-year')[0], {
        headerToolbar: {
          left: 'prev,next,today',
          center: 'title',
          right: 'multiMonthYear,dayGridMonth,timeGridWeek'
        },
        initialView: 'multiMonthYear',
        initialDate: '2023-01-12',
        editable: true,
        locale: 'th',
        selectable: true,
        dayMaxEvents: true,
        events: [
          {
            id: 1,
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-04-21'
          }, {
            id: 2,
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-04-21'
          }, {
            id: 3,
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-04-21'
          },{
            id: 4,
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-04-21'
          },{
            id: 5,
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-04-21'
          },{
            id: 6,
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-04-18'
          },{
            id: 7,
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-04-18'
          }
        ],
        datesSet: function(info){
          var date = new Date(info.view.currentStart);
          updateCalendarHeader(date.getFullYear(), true);
        },  
      });

      calendar.render();
      calcCalendar();

      // Events
      todayBtn.click(function(e){
        e.preventDefault();
        calendar.today();
        calcCalendar();
      });
      prevMonthBtn.click(function(e){
        e.preventDefault();
        calendar.prev();
        calcCalendar();
      });
      nextMonthBtn.click(function(e){
        e.preventDefault();
        calendar.next();
        calcCalendar();
      });

      function calcCalendar(){
        let monthSlots = $('#calendar-year').find('.fc-multimonth-month');
        monthSlots.filter('[data-date="'+thisMonth+'"]').addClass('active');
        monthSlots.each(function(){
          let temp = $(this);
          let eMonth = temp.find('.fc-event-main');
          if(eMonth.length){
            eMonth.closest('.fc-daygrid-day').addClass('active');
            temp.append(`
              <div class="activity-list">
                <div class="wrapper">
                  <a href="#" class="p md fw-400 mr-2">
                    รายการ <span class="color-04 fw-500">${eMonth.length}</span> กิจกรรม 
                  </a>
                  <div class="arrow"><em class="fa-solid fa-arrow-right color-04"></em></div>
                </div>
              </div>
            `);
          }else{
            temp.append(`<div class="activity-list"></div>`);
          }
        });
  
      };
    });
  </script>
</body>
</html>