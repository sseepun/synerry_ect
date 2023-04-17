<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>

<style>
/* Calendar - Year */
.calendar-year .fc-view-harness.fc-view-harness-active{height:auto!important;}
.calendar-year .fc-multimonth-month{
  width:calc((100% - 2rem) / 3)!important; margin:1rem 1rem 0 0; padding:0;
  border-radius:.375rem; overflow:hidden;
}
.calendar-year .fc-multimonth-month:nth-child(3n){margin:.75rem 0 0 0;}
.calendar-year .fc-multimonth-month .fc-multimonth-title{border-radius:0!important;}
.calendar-year .fc-multimonth-header-table .fc-col-header-cell{padding:.3125rem 0;}
.calendar-year .fc .fc-view-harness-active > .fc-view{position:relative!important;}
.calendar-year .fc-multiMonthYear-view.fc-view.fc-multimonth{overflow:unset;}
.calendar-year .fc .fc-daygrid-day-frame{display:flex; justify-content:center; align-items:center;}
.calendar-year .fc .fc-toolbar.fc-header-toolbar{display:none;}
.calendar-year .fc .fc-multimonth{overflow-y:auto;}
.calendar-year .fc .fc-multimonth{border:none;}
@media screen and (max-width:1199.98px){
  .calendar-year .fc-multimonth-month,
  .calendar-year .fc-multimonth-month:nth-child(3n){
    width:calc((100% - 1rem) / 2)!important; margin:1rem 1rem 0 0;
  }
  .calendar-year .fc-multimonth-month:nth-child(2n){margin:1rem 0 0 0;}
}
@media screen and (max-width:575.98px){
  .calendar-year .fc-multimonth-month{width:100%!important; margin:1rem 0 0 0!important;}
}

/* Calendar - Year */
.calendar-year .fc-multimonth-month.active{border:2px solid #0b6853;}
.calendar-year .fc-multimonth-month .fc-multimonth-title{background:#bfe7d7; color:#000000;}
.calendar-year .fc-multimonth-month.active .fc-multimonth-title{background:#0b6853; color:#ffffff;}
.calendar-year .fc-col-header-cell-cushion{color:#30906a;}
.calendar-year .fc-multimonth-month{box-shadow:0px 2px 6px 4px rgba(0,0,0,.04);}
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
      <div class="calendar-header mt-6" data-aos="fade-up" data-aos-delay="150">
        <div class="text-wrapper">
          <p id="calendar-title" class="h3 fw-600">
            <span class="year">&nbsp;</span>
          </p>
          <div class="wrapper">
            <div id="prev-month-btn" class="btn-calendar">
              <em class="fa-solid fa-arrow-left"></em>
            </div>
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

      <div class="calendar-year pt-2" data-aos="fade-up" data-aos-delay="300">
        <div id="calendar-year"></div>
      </div>
      
      <div class="mt-6 pt-4" data-aos="fade-up" data-aos-delay="0">
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
          console.log(temp.data('date'));
          temp.append(`
            <div>
              <a href="#">
                Hello
              </a>
            </div>
          `);
        });
      };
    });
  </script>
</body>
</html>