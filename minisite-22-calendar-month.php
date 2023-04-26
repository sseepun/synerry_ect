<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<style>
  .calendar-month .custom-event{color:#000000;}
  .calendar-month .custom-event{position:relative; padding:0 .5rem;}
  .calendar-month .custom-event .date-time{display:flex; align-items:center;}
  .calendar-month .custom-event .date-time > .icon{margin-right:.5rem;}
  .calendar-month .custom-event > .table .title{
    display: block; text-overflow: ellipsis; overflow: hidden;
     -webkit-line-clamp: 2;
  }
  .calendar-month .calendar-wrapper{overflow:unset!important;}
  .calendar-month .fc-h-event{background:transparent; border:0;}
  .calendar-month .custom-event > .table{
    position:relative; display:block; width:100%;
    padding: .375rem .375rem; line-height: 1; margin: .125rem 0 0 0; border-radius: 0;
    font-size: .875rem; font-weight: 300; box-shadow: none; overflow: hidden; transition: all .25s;
  }
  .calendar-month .fc-popover-body{max-height:12rem; overflow-y:auto;}
  .calendar-month .fc-daygrid-day-top{flex-direction:revert;}
  .calendar-month .fc-daygrid-day-number{
    width:2rem; height:2rem; display:flex; justify-content:center; flex-direction:revert; font-size:.875rem;
    border-radius:0 0 .375rem 0;
  } 
  .calendar-month .fc-daygrid-event-harness{cursor:pointer;}
  .calendar-month .fc-daygrid-day-frame{position:relative;}
  .calendar-month .fc-daygrid-day-bottom{
    position:absolute; top:-1.625rem; right:0; display:flex; justify-content:flex-end; padding-right:.5rem;
  }
  .calendar-month .fc-more-link{font-size:1rem; text-decoration:underline; font-weight:400;}

  .calendar-month .fc-header-toolbar{display:none;}
  .calendar-month .fc-popover{border-left:.1875rem solid transparent!important; border-color:#30906a!important}
  .calendar-month .fc-daygrid-day-number{background:#8c6961; color:#ffffff;}
  .calendar-month .fc-popover-title{color:#ffffff;}
  .calendar-month .fc-popover-header{background:#7cc5b4!important;} 
  .calendar-month .fc-popover-body{border-color:#30906a!important}
  .calendar-month .fc-popover-close{color:#ffffff;}
  .calendar-month  .fc-daygrid-day.fc-day-today{background:#dff3eb;}
  .calendar-month .fc-day-other{background:#e6e6e6;}
  .calendar-month .fc-day-other .fc-daygrid-day-number{background:#e6e6e6; color:#000000;}
  .calendar-month .fc-daygrid-event-harness:hover{background:#dff3eb;}
</style>
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
                <p id="calendar-title" class="h3 fw-600 ml-2 mr-2">
                  <span class="month">&nbsp;</span>
                  <span class="year">&nbsp;</span>
                </p>
                <a class="text fw-400" href="#">เดือนนี้</a>
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
          <div class="scroll-x-wrapper-style-02 mt-4" >
            <div class="calendar-month" style="min-width:1200px;">
              <div id='calendar-month'></div>
            </div>
          </div>
          <div class="pt-6 pb-6"></div>
        </div>
      </div>
    </div>
  </div>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js"></script>

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
      var calendarTitle = $('#calendar-title');
      var prevMonthBtn = $('#prev-month-btn');
      var nextMonthBtn = $('#next-month-btn');
      
      function htmlToElement(html){
        var template = document.createElement('template');
        html = html.trim();
        template.innerHTML = html;
        return template.content.firstChild;
      }
      function updateCalendarHeader(month, year, updateSlick){
        var prevMonth = 0;
        var nextMonth = 0;

        if(months[month - 1]) prevMonth = months[month - 1];
        else prevMonth = months[months.length - 1];

        if(months[month + 1]) nextMonth = months[month + 1];
        else nextMonth = months[0];

        calendarTitle.html(months[month]+' '+(year+543));
        prevMonthBtn.find('> span').html(prevMonth);
        nextMonthBtn.find('> span').html(nextMonth);
      }

      const calendarMonth = new FullCalendar.Calendar($('#calendar-month')[0], {
        initialView: 'dayGridMonth',
          locale: 'th',
          contentHeight: 'auto',
          dayMaxEvents: true,
          views: {
            dayGrid: {
              dayMaxEvents: 2 // adjust to 6 only for timeGridWeek/timeGridDay
          }
        },
          events: [
            {
              id: '1',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-25'
            },{
              id: '2',
              title: 'เลือกตั้ง ส.อบต. เทอดไทเขตเลือกตั้งที่ 4',
              start: '2023-04-25'
            },{
              id: '3',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-25'
            },{
              id: '4',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-01'
            },{
              id: '5',
              title: 'เลือกตั้ง ส.อบต. เทอดไทเขตเลือกตั้งที่ 4',
              start: '2023-04-01'
            },{
              id: '6',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-06'
            },{
              id: '7',
              title: 'เลือกตั้ง ส.อบต. เทอดไทเขตเลือกตั้งที่ 4',
              start: '2023-04-06'
            },{
              id: '8',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-06'
            },{
              id: '9',
              title: 'เลือกตั้ง ส.อบต. เทอดไทเขตเลือกตั้งที่ 4',
              start: '2023-04-06'
            },{
              id: '10',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-06'
            },{
              id: '11',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-09'
            },{
              id: '12',
              title: 'เลือกตั้ง ส.อบต. เทอดไทเขตเลือกตั้งที่ 4',
              start: '2023-04-09'
            },{
              id: '13',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-09'
            },{
              id: '14',
              title: 'เลือกตั้ง ส.อบต. เทอดไทเขตเลือกตั้งที่ 4',
              start: '2023-04-22'
            },{
              id: '15',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-22'
            },{
              id: '16',
              title: 'เลือกตั้ง ส.อบต. เทอดไทเขตเลือกตั้งที่ 4',
              start: '2023-04-22'
            },{
              id: '17',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-22'
            },{
              id: '18',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-30'
            },{
              id: '19',
              title: 'เลือกตั้ง ส.อบต. เทอดไทเขตเลือกตั้งที่ 4',
              start: '2023-04-30'
            },{
              id: '20',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-30'
            },
          ], 
       
        moreLinkContent:function(args){
          return '+'+args.num+'';
        },
        datesSet: function(info){
          var date = new Date(info.view.currentStart);
          updateCalendarHeader(date.getMonth(), date.getFullYear(), true);
        },
          eventContent: function(info) {
               var event = info.event,
                   dateStart = new Date(event.start)
                  //  hoursStart = String(dateStart.getHours()).padStart(2, '0')
                  //  minutesStart = String(dateStart.getMinutes()).padStart(2, '0')
                return { 
                  html: 
                  `
                  <div class="custom-event"> 
                    <div class="table">
                      <p class="sm color-dark fw-400">08:00 - 08:30</p>
                      <p class="title">${event.title}</p>
                    </div>
                  </div>
                  `
                };
            },
        });
        calendarMonth.render();
    

      // Events
      prevMonthBtn.click(function(e){
        e.preventDefault();
        calendarMonth.prev();
      });
      nextMonthBtn.click(function(e){
        e.preventDefault();
        calendarMonth.next();
      });

    });
  </script>
</body>
</html>