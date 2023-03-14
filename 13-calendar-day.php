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
            <a class="text fw-400" href="#">วันนี้</a>
            <div id="next-day-btn" class="btn-calendar">
              <em class="fa-solid fa-arrow-right"></em>
            </div>
          </div>
        </div>
        <div class="button-container">
          <div class="button-wrapper">
          <div class="btns">
            <div class="btn btn-action btn-22 active size-05 btn-white-theme">
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
      <div class="mt-6 pt-4" data-aos="fade-up" data-aos-delay="450">
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
            title: 'เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4 เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4 เลือกตั้ง ส.อบต. เทอดไทย เขตเลือกตั้งที่ 4',
            start: '2023-03-14T08:00:00',
            end: '2023-03-14T16:00:00',
            url: '#',
          },
        ],
        datesRender: function(info){
          updateCalendarHeaderDay(info.view);
        },
      });
      calendarDay.render();

      // Events
      prevDayBtn.click(function(e){
        e.preventDefault();
        calendarDay.prev();
      });
      nextDayBtn.click(function(e){
        e.preventDefault();
        calendarDay.next();
      });

      const title = document.querySelector('.fc-title')
      const containerEvent = document.querySelector('.fc-content')
      const wrapperContainer = document.createElement('div')
      const btnAction = document.createElement('div')
      const sep = document.createElement('div')
      const textContainer = document.createElement('div')
      const imageContainer = document.createElement('div')
      const specialImage = document.createElement('div')
      const imgBg = document.createElement('div')
      const option01 = document.createElement('div')
      const option02 = document.createElement('div')
      const icon01 = document.createElement('div')
      const icon02 = document.createElement('div')
      const calendarIcon = document.createElement('em')
      const locationIcon = document.createElement('em')
      const span01 = document.createElement('span')
      const span02 = document.createElement('span')
      const span03 = document.createElement('span')

      console.log(containerEvent)
      console.log(title)
      
      containerEvent.appendChild(wrapperContainer)
      containerEvent.appendChild(btnAction)
      btnAction.className = 'btn btn-action-style-06 size-03'
      btnAction.appendChild(span03)
      btnAction.appendChild(sep)
      span03.textContent = 'อ่านเพิ่มเติม'
      sep.className = 'sep'
    
      wrapperContainer.className = 'wrapper'
      wrapperContainer.appendChild(textContainer)
      textContainer.className = 'text-container'
      wrapperContainer.appendChild(imageContainer)
      imageContainer.className = 'img-container'
      imageContainer.appendChild(specialImage)
      specialImage.className = 'ss-img square'
      specialImage.appendChild(imgBg)
      imgBg.className = 'img-bg'
      imgBg.style.backgroundImage = "url('public/assets/app/images/content/134.jpg')"
    
      textContainer.appendChild(title)
      title.classList.add("title")
      textContainer.appendChild(option01)
      option01.className = 'option'
      option01.appendChild(icon01)
      option01.appendChild(span01)
      icon01.className = 'icon'
      icon01.appendChild(calendarIcon)
      calendarIcon.className = 'fa-solid fa-calendar-days color-02'
      span01.className = 'color-black fw-500'
      span01.textContent = '04 ตุลาคม 2565  เวลา 08:00 - 12:00'

      textContainer.appendChild(option02)
      option02.className = 'option'
      option02.appendChild(icon02)
      option02.appendChild(span02)
      icon02.className = 'icon'
      icon02.appendChild(locationIcon)
      locationIcon.className = 'fa-solid fa-location-dot color-02'
      span02.className = 'color-black fw-500'
      span02.textContent = 'องค์การบริหารส่วนตำบลเทอดไทย, จังหวัดเชียงราย'
    });

   
  </script>
</body>
</html>