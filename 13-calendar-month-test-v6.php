<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>

<style>
  .calendar-month-02 .fc .fc-popover{max-height:10rem; overflow-y:auto;}
  .calendar-month-02 .fc .fc-toolbar.fc-header-toolbar{display:none;}
  .calendar-month-02 .fc .fc-more-popover .fc-popover-body{border-left:5px solid transparent;}
  .calendar-month-02 .fc .fc-more-popover .fc-popover-body{border-color:#2e603c;}
  .fc .fc-col-header-cell-cushion{display:block; padding:.75rem .5rem;}
  .fc-daygrid-day-top{display:block; width:2rem; height:2rem;}
  .fc .fc-daygrid-day-number{width:100%; text-align:center;}

  .fc-daygrid-day-top{background:#2e603c;}
  .fc .fc-daygrid-day-number{color:#ffffff;}
  .fc-col-header-cell{background:#bfe7d7;}
</style>


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

      <div class="scroll-x-wrapper mt-4" data-simplebar data-aos="fade-up" data-aos-delay="300">
        <div class="calendar-wrapper">
          <div class="calendar-month-02">
            <div id="calendar-month"></div>
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

  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />

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
        initialDate: '2023-01-12',
        editable: true,
        locale: 'th',
        selectable: true,
        businessHours: true,
        dayMaxEvents: true, // allow "more" link when too many events
        events: [
          {
            title: 'เลือกตั้ง ส.ทต. จันจว้า เขตเลือกตั้งที่ 2',
            start: '2023-01-12T10:30:00',
            customStartTime: '12:45 น.',
            customEndTime: '15:00 น.',
          },{
            title: 'Lunch',
            start: '2023-01-12T12:00:00'
          },{
            title: 'Meeting',
            start: '2023-01-12T14:30:00'
          },{
            title: 'Happy Hour',
            start: '2023-01-12T17:30:00'
          },{
            title: 'Dinner',
            start: '2023-01-12T20:00:00'
          }
        ],
        datesSet: function(info){
          var date = new Date(info.view.currentStart);
          updateCalendarHeader(date.getMonth(), date.getFullYear(), true);
        },
        eventAllow: function(dropInfo, draggedEvent) {
  if (draggedEvent.id === '999') {
    return dropInfo.start < new Date(2016, 0, 1); // a boolean
  }
  else {
    return true;
  }
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