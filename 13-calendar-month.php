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
      <div class="mt-6" data-aos="fade-up" data-aos-delay="0">
        <?php include('component/list-header-calendar-style-02.php'); ?>
      </div>
      <div class="calendar-header mt-6" data-aos="fade-up" data-aos-delay="0">
        <div class="text-wrapper">
          <p id="calendar-title" class="h3 fw-600">
            <span class="month">&nbsp;</span>
            <span class="year">&nbsp;</span>
          </p>
          <div class="wrapper">
            <div id="prev-month-btn" class="btn-calendar">
              <em class="fa-solid fa-arrow-left"></em>
            </div>
            <a class="text fw-400" href="#">เดือนนี้</a>
            <div id="next-month-btn" class="btn-calendar">
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
            <div class="btn btn-action btn-22 active size-05 btn-white-theme">
              เดือน
            </div>
            <div class="btn btn-action btn-22 size-05 btn-white-theme">
              ปี
            </div>
          </div>
          </div>
        </div>
      </div>

      <div class="scroll-x-wrapper mt-4" style="padding-bottom:5rem;">
        <div class="calendar-month main-site" style="min-width:1000px;" data-aos="fade-up" data-aos-delay="300">
          <div id='calendar-month'></div>
        </div>
      </div>
      
    </div>
  </div>

  <?php include_once('include/footer-02.php'); ?>
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
              dayMaxEvents:2,
          }
        },
          events: [
            {
              id: '1',
              title: 'ตรวจเยี่ยมสำนักงานคณะ กรรมการการเลือกตั้งประจำ',
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
              start: '2023-04-20'
            },{
              id: '15',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-20'
            },{
              id: '16',
              title: 'เลือกตั้ง ส.อบต. เทอดไทเขตเลือกตั้งที่ 4',
              start: '2023-04-20'
            },{
              id: '17',
              title: 'ตรวจเยี่ยมสำนักงานคณะกรรมการการเลือกตั้งประจำ',
              start: '2023-04-20'
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
              start: '2023-04-30',
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
              return { 
                html: 
                `<div class="custom-event"> 
                  <div class="table">
                    <p class="sm color-dark color-black-theme fw-400">08:00 - 08:30</p>
                    <p class="title fw-400 color-black-theme">${event.title}</p>
                  </div>
                </div>`
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