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
      [ 'url' => '#', 'display' => 'แบบสำรวจความคิดเห็น' ],
    ];
    $breadcrumbTitle = 'แบบสำรวจความคิดเห็น';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/17.jpg';
    include('component/breadcrumb.php');
  ?>

  <div class="section-padding">
    <div class="container">
      <h3 class="fw-600 mt-3" data-aos="fade-up" data-aos-delay="0">
        แบบสำรวจความคิดเห็น
      </h3>
      <div class="mt-3" data-aos="fade-up" data-aos-delay="150">
        <?php
          $listHeader = ['search', 'category', 'order'];
          include('component/list-header.php');
        ?>
      </div>
      <div class="faq-06 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="300">
        <?php for($i=0; $i<8; $i++){?>
          <div class="faq <?php if($i==0)echo 'active'; ?>">
            <div class="question box-shadow style-02">
              <h6 class="title p lg fw-400">
                คุณพึงพอใจเกี่ยวกับ บุคลากรให้บริการด้วยอัธยาศัยไมตรีที่ดี 
              </h6>
              <div class="date-view">
                <div class="wrapper">
                  <div class="icon">
                    <em class="fa-solid fa-calendar-days"></em>
                    <span class="p sm ml-2">08 มิถุนายน 2565</span>
                  </div>
                  <div class="icon">
                    <em class="fa-solid fa-square-xmark"></em>
                    <span class="p sm ml-2">255</span>
                  </div>
                </div>
              </div>
              <div class="arrow">
                <div class="wrapper">
                  <em class="fa-solid fa-minus"></em>
                </div>
              </div>
              <div class="answer-wrapper">
                <img src="public/assets/app/images/icon/39.png" alt="Icon">
                <p class="sm">โหวต</p>
              </div>
            </div>
  
            <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
              <div class="content">
                <div class="wrapper">
                  <div class="grids jc-center flex-column-reverse sm">
                    <div class="grid lg-50 sm-40 xs-100 mt-0">
                      <form action="action.php" method="post">
                        <fieldset>
                          <div class="gallery-grids">
                            <div class="grid sm-100">
                              <div class="checkbox-set">
                                <input type="radio" name="radio" id="radio_0" checked="">
                                <label for="radio_0" class="checkmark"></label>
                                <span for="radio_0" class="p sm">มากที่สุด</span>
                                <div class="bg-color"></div>
                              </div>
                            </div>
                            <div class="grid sm-100">
                              <div class="checkbox-set">
                                <input type="radio" name="radio" id="radio_1">
                                <label for="radio_1" class="checkmark"></label>
                                <span class="p sm">มาก</span>
                                <div class="bg-color"></div>
                              </div>
                            </div>
                            <div class="grid sm-100">
                              <div class="checkbox-set">
                                <input type="radio" name="radio" id="radio_2">
                                <label for="radio_2" class="checkmark"></label>
                                <span class="p sm">ปานกลาง</span> 
                                <div class="bg-color"></div>
                              </div>
                            </div>
                            <div class="grid sm-100">
                              <div class="checkbox-set">
                                <input type="radio" name="radio" id="radio_3">
                                <label for="radio_3" class="checkmark"></label>
                                <span class="p sm">น้อย</span>
                                <div class="bg-color"></div>
                              </div>
                            </div>
                            <div class="grid sm-100">
                              <div class="checkbox-set">
                                <input type="radio" name="radio" id="radio_4">
                                <label for="radio_4" class="checkmark"></label>
                                <span class="p sm">น้อยที่สุด</span>
                                <div class="bg-color"></div>
                              </div>
                            </div>
                          </div>
                        </fieldset>
                        <div class="btns mt-4">
                          <button type="submit" class="btn btn-action btn-03">
                            โหวต
                          </button>
                        </div>
                      </form>
                    </div>
                    <div class="grid lg-50 sm-60 xs-100 mt-0 mb-2">
                      <div class="image-container">
                        <img src="public/assets/app/images/content/10.png" alt="Content">
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
                คุณพึงพอใจเกี่ยวกับ ระยะเวลาการยืม - คืน เป็นเวลาที่เหมาะสม 
              </h6>
              <div class="date-view">
                <div class="wrapper">
                  <div class="icon">
                    <em class="fa-solid fa-calendar-days"></em>
                    <span class="p sm ml-2">08 มิถุนายน 2565</span>
                  </div>
                  <div class="icon">
                    <em class="fa-solid fa-square-xmark"></em>
                    <span class="p sm ml-2">255</span>
                  </div>
                </div>
              </div>
              <div class="arrow">
                <div class="wrapper">
                  <em class="fa-solid fa-minus"></em>
                </div>
              </div>
              <div class="answer-wrapper">
                <img src="public/assets/app/images/icon/39.png" alt="">
                <p class="sm">โหวต</p>
              </div>
            </div>
            <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
              <div class="content">
                <div class="wrapper">
                  <div class="grids jc-center flex-column-reverse sm">
                    <div class="grid lg-50 sm-40 xs-100">
                      <p class="fw-400">มากที่สุด <span class="color-17 fw-600">50%</span></p>
                      <p class="fw-400 mt-2">มาก <span class="color-17 fw-600">10%</span></p>
                      <p class="fw-400 mt-2">ปานกลาง <span class="color-17 fw-600">10%</span></p>
                      <p class="fw-400 mt-2">น้อย <span class="color-17 fw-600">10%</span></p>
                      <p class="fw-400 mt-2">น้อยที่สุด <span class="color-17 fw-600">20%</span></p>
                    </div>
                    <div class="grid lg-50 sm-60 xs-100">
                      <div class="chart-container">
                        <div class="chart"></div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php }?>
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

  <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
  <script>
    var options = {
          series: [10, 50, 20, 10, 10],
          chart: {
          width: 380,
          type: 'pie',
        },
        colors: ['#17994c', '#044c21', '#dfdfdf', '#e5d988', '#d4c700'],
        labels: ['มากที่สุด', 'มาก', 'ปานกลาง', 'น้อย', 'น้อยที่สุด'],
        responsive: [{
          breakpoint: 767,
          options: {
            chart: {
              width: 350
            },
            legend: {
              position: 'bottom'
            }
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