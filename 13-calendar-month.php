<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
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
          <div class="calendar-month">
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

  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.css" />
  <link rel="stylesheet" type="text/css" href="public/assets/app/css/custom-calendar.css" />
  <script src="https://cdn.jsdelivr.net/npm/@fullcalendar/core@4.4.0/main.min.js"></script>
  <script src="https://unpkg.com/@fullcalendar/daygrid@4.4.0/main.min.js"></script>
  <script src="https://unpkg.com/@fullcalendar/interaction@4.4.0/main.min.js"></script>
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
        plugins: [ 'interaction', 'dayGrid' ],
        defaultView: 'dayGridMonth',
        firstDay: 0,
        locale: 'th',
        contentHeight: 'auto',
        eventLimit: true,      
        eventLimitText: '',
        views: {dayGrid: {eventLimit: 2}},
        events: [
          {
            title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
            start: '2023-03-13',
            customStartTime: '12:45 น.',
            end: '2021-10-22',
            customEndTime: '15:00 น.',
            url: '#',
          },
          {
            title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
            start: '2023-03-13',
            customStartTime: '12:45 น.',
            end: '2021-10-20',
            customEndTime: '15:00 น.',
            url: '#',
          },
          {
            title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
            start: '2023-03-13',
            customStartTime: '12:45 น.',
            end: '2021-10-20',
            customEndTime: '15:00 น.',
            url: '#',
          },
          {
            title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
            start: '2021-10-19',
            customStartTime: '12:45 น.',
            end: '2021-10-19',
            customEndTime: '15:00 น.',
            url: '#',
          },
          {
            title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
            start: '2021-10-19',
            customStartTime: '12:45 น.',
            end: '2021-10-19',
            customEndTime: '15:00 น.',
            url: '#',
          },
          {
            title: 'วาระการประชุม ดึงเอกชนร่วมพีพีพีจัดระเบียบสายสื่อสาร',
            start: '2021-10-19',
            customStartTime: '12:45 น.',
            end: '2021-10-19',
            customEndTime: '15:00 น.',
            url: '#',
          },
          {
            title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
            start: '2021-10-29',
            customStartTime: '09:00 น.',
            end: '2021-10-29',
            customEndTime: '20:00 น.',
            url: '#',
          },
          {
            title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
            start: '2021-10-24',
            customStartTime: '09:00 น.',
            end: '2021-10-24',
            customEndTime: '20:00 น.',
            url: '#',
          },
          {
            title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
            start: '2021-10-24',
            customStartTime: '09:00 น.',
            end: '2021-10-24',
            customEndTime: '20:00 น.',
            url: '#',
          },
          {
            title: 'บอร์ด กนอ.เคาะศึกษาจัดระเบียบสายสื่อสารลงดินปรับสู่ 5G ปักหมุด 14 มกราคม 2564',
            start: '2021-10-24',
            customStartTime: '09:00 น.',
            end: '2021-10-24',
            customEndTime: '20:00 น.',
            url: '#',
          },
        ],
        columnHeaderText: function(date){
          return days[date.getDay()];
        },
        datesRender: function(info){
          var date = new Date(info.view.currentStart);
          updateCalendarHeader(date.getMonth(), date.getFullYear(), true);
        },
        eventRender: function(info, d){
          var event = info.event,
              date = new Date(event.start),
              classer = '',
              index = Math.round(Math.random() * 2);
          if(date.getFullYear()===today.getFullYear() 
          && date.getMonth()===today.getMonth() 
          && date.getDate()===today.getDate()){
            classer = 'today';
          }
          info.el.innerHTML = `
            <div class="custom-event type-${index} ${classer}">
              <div class="table-view">
                <div class="time">
                  ${event.extendedProps.customStartTime} - 
                  ${event.extendedProps.customEndTime}
                </div>
                <div class="title">${event.title}</div>
              </div>
              <div class="popup-view">
                <div class="ss-card ss-card-04 sm">
                  <div class="img-container">
                    <a class="ss-img adaptive" href="#">
                      <div class="img-bg" style="background-image:url('public/assets/app/img/content/calendar-0${index+1}.jpg');"></div>
                      <div class="hover-container">
                        <img class="icon-img" src="public/assets/app/img/icon/hover-read.png" alt="Image Icon" />
                      </div>
                    </a>
                  </div>
                  <div class="text-container">
                    <a class="title h5 fw-600" href="#">
                      นิทรรศการพลังงานไฟฟ้า พลังชีวิต (Clean Energy for Life)
                    </a>
                    <div class="ss-stats mt-1">
                      <div class="stat p lg">
                        <div class="icon"><em class="far fa-clock"></em></div> 18 มกราคม 2564
                      </div>
                      <div class="stat p lg">
                        <div class="icon"><em class="far fa-eye"></em></div> 158
                      </div>
                      <div class="stat p lg">
                        <div class="icon"><em class="fas fa-map-marker-alt"></em></div> 
                        สว่างวีระวงศ์, อุบลราชธานี
                      </div>
                    </div>
                    <p class="desc lg mt-1">
                      รมว.พลังงาน ร่วมกับ คณะกรรมการการกำกับกิจการพลังงาน (กกพ.) เปิดตัวโครงการ "โซลาร์ภาค ประชาชน" 
                      ให้เจ้าของบ้านและอาคารที่อยู่อาศัยที่ต้องการติดตั้งแผงเซลล์ผลิตไฟฟ้าด้วยพลังงานแสงอาทิตย์
                    </p>
                    <div class="mt-4">
                      <a class="btn p fw-400 color-03" href="#">
                        อ่านเพิ่มเติม <em class="fas fa-chevron-right ml-1"></em>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          `;
          return true;
        }
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