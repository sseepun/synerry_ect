<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>

<style>
  .custom-event{color:#000000;}
  .custom-event{position:relative; padding:0 .5rem;}
  .custom-event .date-time{
    display:flex; align-items:center;
  }
  .custom-event .date-time > .icon{
    margin-right:.5rem;
  }
  .custom-event > .table .title {
    display: block;
    text-overflow: ellipsis;
    overflow: hidden;
    box-orient: vertical;
    -webkit-line-clamp: 1;
  }
  .fc-h-event{
    background:transparent; border:0;
  }
  .calendar-month .custom-event > .table {
    position: relative;
    display: block;
    width: calc(100% - .875rem);
    padding: .375rem .375rem;
    line-height: 1;
    margin: .125rem 0 0 0;
    border-radius: 0;
    font-size: .875rem;
    font-weight: 300;
    box-shadow: none;
    overflow: hidden;
    transition: all .25s;
}
.fc-popover-body{max-height:12rem; overflow-y:auto;}
.fc-popover{border-left:.1875rem solid transparent!important; border-color:#30906a!important} 
.fc-popover-title{color:#ffffff;}
.fc-popover-header{background:#7cc5b4!important;} 
.fc-popover-body{border-color:#30906a!important}
.fc-popover-close{color:#ffffff;}
</style>
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
      <div class=" mt-4" data-simplebar data-aos="fade-up" data-aos-delay="300">
        <div class="calendar-wrapper">
          <div class="calendar-month">
            <div id='calendar-month'></div>
          </div>
        </div>
        </div>
      </div>
    </div>
    
 
  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.6/index.global.min.js"></script>

  <script>

   document.addEventListener('DOMContentLoaded', function() {
        var calendarEl = document.getElementById('calendar-month');
        var calendar = new FullCalendar.Calendar(calendarEl, {
          initialView: 'dayGridMonth',
          locale: 'th',
          dayMaxEvents: true,
          views: {
            dayGrid: {
              dayMaxEventRows: 6 // adjust to 6 only for timeGridWeek/timeGridDay
          }
  },
          events: [
            {
              id: '1',
              title: 'my event',
              start: '2023-04-25'
            },{
              id: '1',
              title: 'my event',
              start: '2023-04-25'
            },{
              id: '1',
              title: 'my event',
              start: '2023-04-25'
            },{
              id: '4',
              title: 'my event',
              start: '2023-04-26'
            },{
              id: '5',
              title: 'my event',
              start: '2023-04-26'
            },{
              id: '6',
              title: 'my event',
              start: '2023-04-06'
            },{
              id: '7',
              title: 'my event',
              start: '2023-04-06'
            },{
              id: '8',
              title: 'my event',
              start: '2023-04-06'
            },{
              id: '9',
              title: 'my event',
              start: '2023-04-06'
            },{
              id: '10',
              title: 'my event',
              start: '2023-04-06'
            },
          ], 
          eventContent: function(info) {
               var event = info.event,
                   dateStart = new Date(event.start)
                   hoursStart = String(dateStart.getHours()).padStart(2, '0')
                   minutesStart = String(dateStart.getMinutes()).padStart(2, '0')
                // Customize the event HTML here
                return { 
                  html: 
                  `
                    <div class="custom-event"> 
                      <div class="table">
                        <div class="date-time">
                          <div class="icon">
                            <em class="fa-solid fa-calendar-days"></em>
                          </div>
                          <p class="sm">08:00 - 08:30</p>
                        </div>
                        <p class="title">${event.title}</p>
                      </div>
                    </div>
                  `
                };
            },
          // eventClick: function(info) {
          //   alert('Event: ' + info.event.title);
          //   alert('Coordinates: ' + info.jsEvent.pageX + ',' + info.jsEvent.pageY);
          //   alert('View: ' + info.view.type);
          //   // change the border color just for fun
          //   // info.el.style.borderColor = 'red';
          //   info.el.innerHTML = `
          //     <p>Hello World</p>
          //   `
          // }
        });
        calendar.render();
      });
  </script>
</body>
</html>