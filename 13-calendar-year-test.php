<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>

<style>
   #calendar {
    max-width: 100%!important;
    margin: 0 auto;
  }
  .fc .fc-multimonth-title{background:#bfe7d7; border-radius:.375rem .375rem 0 0;}
  .fc-multimonth-header-table  .fc-col-header-cell{padding:.25rem;}
  .fc .fc-view-harness-active>.fc-view{position:relative!important; }
  .fc-multimonth-month{width:33.33%!important; padding:.5rem;}
  .fc .fc-daygrid-day-frame{display:flex; justify-content:center; align-items:center;}
  .fc-col-header-cell-cushion{color:#30906a;}
  .fc .fc-toolbar.fc-header-toolbar{display:none;}
  .fc .fc-multimonth{overflow-y:auto;}
  .fc .fc-multimonth{border:none;}
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
      <div data-aos="fade-up" data-aos-delay="0">
        <?php include('component/list-header-calendar-style-02.php'); ?>
      </div>
      <div class="calendar-header mt-6" data-aos="fade-up" data-aos-delay="0">
        <div class="text-wrapper">
          <p id="calendar-title" class="h3 fw-600">
            <span class="year">&nbsp;</span>
          </p>
          <div class="wrapper">
            <div id="prev-month-btn" class="btn-calendar">
              <em class="fa-solid fa-arrow-left"></em>
            </div>
            <a class="text fw-400" href="#">ปีนี้</a>
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

      <div class="scroll-x-wrapper mt-4" data-simplebar data-aos="fade-up" data-aos-delay="300">
        <div class="calendar-wrapper">
          <div class="calendar-year">
            <div id="calendar-year"></div>
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

    var calendarTitle = $('#calendar-title');
    var prevMonthBtn = $('#prev-month-btn');
    var nextMonthBtn = $('#next-month-btn');

    
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
        left: 'prev,next today',
        center: 'title',
        right: 'multiMonthYear,dayGridMonth,timeGridWeek'
      },
      initialView: 'multiMonthYear',
      initialDate: '2023-01-12',
      editable: true,
      locale: 'th',
      selectable: true,
      dayMaxEvents: true,
      datesSet: function(info){
        var date = new Date(info.view.currentStart);
        updateCalendarHeader(date.getFullYear(), true);
      },  
    });

    calendar.render();

   // Events
   prevMonthBtn.click(function(e){
      e.preventDefault();
      calendar.prev();
    });
    nextMonthBtn.click(function(e){
      e.preventDefault();
      calendar.next();
    });
  });
</script>


</body>
</html>