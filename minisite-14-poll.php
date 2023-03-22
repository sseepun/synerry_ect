<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'แบบสำรวจความคิดเห็น' ],
    ];
    $breadcrumbTitle = 'แบบสำรวจความคิดเห็น';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/41.jpg';
    $formContainer = true;
    $sectionOptions = [ 'option-02'];
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body bg-white-theme">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              แบบสำรวจความคิดเห็น
            </h3>
          </div>
          <div class="faq-08 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="300">
            <?php for($i=0; $i<10; $i++){?>
              <div class="faq <?php if($i==0)echo 'active'; ?>">
                <div class="question box-shadow style-02">
                  <h6 class="title p lg fw-400">
                    คุณคิดว่า "www.ect.go.th" ปรับโฉมใหม่ ควรปรับปรุงอะไรเป็นลำดับแรกๆ 
                  </h6>
                  <div class="options">
                    <a class="btn btn-action btn-13 bcolor-white-theme" href="#">
                      <?= $i==0? 'ปิด': 'ทำแบบสอบถาม' ?>
                    </a>
                  </div>
                </div>
              
                <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
                  <div class="content">
                    <div class="wrapper">
                      <div class="grids jc-center flex-column-reverse sm">
                        <div class="grid lg-50 md-50 sm-100 xs-100 mt-0">
                          <form action="action.php" method="post">
                            <fieldset>
                              <div class="gallery-grids">
                                <div class="grid sm-100">
                                  <div class="rc-container style-03">
                                    <input type="radio" id="poll_0" name="poll" value="0">
                                    <label class="fw-400" for="poll_0">ขนาดเว็บไซต์ไม่พอดีกับหน้าจอ</label>
                                  </div>
                                </div>
                                <div class="grid sm-100">
                                  <div class="rc-container style-03">
                                    <input type="radio" id="poll_1" name="poll" value="1">
                                    <label class="fw-400" for="poll_1">เว็บไซต์รกเกินไป</label>
                                  </div>
                                </div>
                                <div class="grid sm-100">
                                  <div class="rc-container style-03">
                                    <input type="radio" id="poll_2" name="poll" value="2">
                                    <label class="fw-400" for="poll_2">หาข้อมูลไม่พบหรือพบยาก</label>
                                  </div>
                                </div>
                                <div class="grid sm-100">
                                  <div class="rc-container style-03">
                                    <input type="radio" id="poll_3" name="poll" value="3">
                                    <label class="fw-400" for="poll_3">เว็บไซต์ทำงานไม่สมบูรณ์</label>
                                  </div>
                                </div>
                                <div class="grid sm-100">
                                  <div class="rc-container style-03">
                                    <input type="radio" id="poll_4" name="poll" value="3">
                                    <label class="fw-400" for="poll_4">เว็บไซต์ทำงานช้า</label>
                                  </div>
                                </div>
                              </div>
                            </fieldset>
                            <div class="btns mt-4">
                              <button type="submit" class="btn btn-action btn-13 btn-black-theme">
                                โหวต
                              </button>
                              <button type="submit" class="btn btn-action btn-03 btn-black-theme">
                                ผลโหวต
                              </button>
                            </div>
                          </form>
                        </div>
                        <div class="grid lg-50 md-50 sm-100 xs-100 mt-0">
                          <div class="image-wrapper">
                            <div class="image-container">
                              <img src="public/assets/app/images/content/11.png" alt="Content">
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
            <?php for($i=0; $i<2; $i++){?>
              <div class="faq <?php if($i==0)echo 'active'; ?>">
                <div class="question box-shadow style-02">
                  <h6 class="title p lg fw-400">
                    คุณคิดว่า "www.ect.go.th" ปรับโฉมใหม่ ควรปรับปรุงอะไรเป็นลำดับแรกๆ 
                  </h6>
                  <div class="options">
                    <a class="btn btn-action btn-13" href="#">
                      <?= $i==0? 'ปิด': 'ทำแบบสอบถาม' ?>
                    </a>
                  </div>
                </div>
              
                <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
                  <div class="content">
                    <div class="wrapper">
                      <div class="grids jc-center flex-column-reverse md">
                        <div class="grid lg-50 md-100 sm-100 xs-100 mt-0">
                          <div class="per-container">
                            <p class="fw-500">
                              <span class="percentage p sm fw-500">30.8%</span>
                              ขนาดเว็บไซต์ไม่พอดีกับหน้าจอ
                            </p>
                            <p class="fw-500">
                              <span class="percentage p sm fw-500">23.1%</span>
                              เว็บไซต์รกเกินไป
                            </p>
                            <p class="fw-500">
                              <span class="percentage p sm fw-500">7.7%</span>
                              หาข้อมูลไม่พบหรือพบยาก
                            </p>
                            <p class="fw-500">
                              <span class="percentage p sm fw-500">15.4%</span>
                              เว็บไซต์ทำงานไม่สมบูรณ์
                            </p>
                            <p class="fw-500">
                              <span class="percentage p sm fw-500">23.1%</span>
                              เว็บไซต์ทำงานช้า
                            </p>
                          </div>
                        </div>
                        <div class="grid lg-50 md-100 sm-100 xs-100 mt-0">
                          <div class="chart-container style-01" style="width:100%;">
                            <div class="grids">
                              <div class="grid xl-60 lg-100 md-100 sm-100 xs-100 mt-0">
                                <div class="chart"></div>
                              </div>
                              <div class="grid xl-40 lg-100 md-100 sm-100 xs-100 mt-0">
                                <div class="labels-container">
                                  <div class="labels">
                                    <div class="label">
                                      <div class="dot" style="background:#30906a;"></div>
                                      <p class="xs">ขนาดเว็บไซต์ไม่พอดีกับหน้าจอ</p>
                                    </div>
                                    <div class="label">
                                      <div class="dot" style="background:#ffab27;"></div>
                                      <p class="xs">เว็บไซต์รกเกินไป</p>
                                    </div>
                                    <div class="label">
                                      <div class="dot" style="background:#26b6b6;"></div>
                                      <p class="xs">หาข้อมูลไม่พบ หรือพบยาก</p>
                                    </div>
                                  </div>
                                  <div class="labels">
                                    <div class="label">
                                      <div class="dot" style="background:#dd6d91;"></div>
                                      <p class="xs">เว็บไซต์ทำงานไม่สมบูรณ์</p>
                                    </div>
                                    <div class="label">
                                      <div class="dot" style="background:#fcd361;"></div>
                                      <p class="xs">เว็บไซต์ทำงานช้า</p>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <div class="section-padding">
    <div class="container">
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </div>

  <?php include_once('include/footer-style-04.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script>
    var options = {
          series: [23.1, 7.7, 30.8, 23.1, 15.4],
          chart: {
          width: 335,
          height: 320,
          type: 'donut',
        },
        legend: {
          show:false,
        },
        plotOptions: {
          pie: {
            donut: {
              size: '85%',
              color: '#00000',
              labels: {
                show: true,
                color: '#000000',
                value: '#000000'
              }
            },
            dataLabels: {
              offset: 25,
            },
          }
        },
        
        colors: ['#fcd361', '#26b6b6', '#044c21', '#ffab27', '#dd6d91'],
        labels: ['มากที่สุด', 'มาก', 'ปานกลาง', 'น้อย', 'น้อยที่สุด'],
        responsive: [{
          breakpoint: 767.98,
          options: {
            chart: {
              width: 350,
              height:300
            },
          }
        }],
        
        };
        
        $('.chart').each(function(){
          var apexChart = new ApexCharts($(this)[0], options);
          apexChart.render();
         });
  </script>
</body>
</html>