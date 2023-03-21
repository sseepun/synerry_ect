<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'วิดีโอ' ],
    ];
    $breadcrumbTitle = 'วิดีโอ';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/30.jpg';
    $formContainer = true;
    $sectionOptions = [ 'option-01', 'views' ];
    include('component/breadcrumb-style-02.php');
  ?>

  
  <?php 
    $content = [
      [
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/84.jpg'
      ],[
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/135.jpg'
      ]
    ]
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              ไฮไลต์วิดีโอ
            </h3>
          </div>
          <div class="swiper-container">
            <div class="swiper-wrapper">
              <?php for($i=0; $i<4; $i++){?>
                <div class="swiper-slide">
                  <div class="grids">
                    <div class="grid xl-1-3 lg-1-3 md-50 sm-100" data-aos="fade-up" data-aos-delay="150">
                      <div class="grids">
                        <div class="grid lg-100 md-100 sm-100 mt-0">
                          <a class="ss-card ss-card-57" href="#">
                            <div class="ss-img square-04">
                              <div class="img-bg" style="background-image:url('public/assets/app/images/content/144.jpg');"></div>
                              <div class="btn-play">
                                <div class="img-container">
                                  <img class="inactive" src="public/assets/app/images/icon/btn-play-inactive.png" alt="Icon Inactive">
                                  <img class="active" src="public/assets/app/images/icon/btn-play-active.png" alt="Icon active">
                                </div>
                              </div>
                            </div>
                            <div class="text-container">
                              <p class="title fw-500 color-black-theme h-color-18 mt-2">
                                รายการ กกต. ขอบอก EP 81 : "สนง. กกต. มอบประกาศเกียรติคุณชื่นชมยกย่องคุณความดีแก่ผู้มีสิทธิเลือกตั้ง"
                              </p>
                              <div class="card-footer mt-1">
                                <div class="wrapper color-black-theme">
                                  <div class="icon">
                                    <p class="p sm fw-400">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                                  </div>
                                  <div class="icon">
                                    <em class="fa-solid fa-eye"></em>
                                    <p class="p sm ml-2 fw-400">280 <span class="ml-1">/</span></p>
                                  </div>
                                  <div class="icon">
                                    <em class="fa-solid fa-share-nodes"></em>
                                    <span class="p sm ml-2 fw-400">60</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="grid lg-100 md-100 sm-100 mt-4">
                          <div class="ss-card ss-card-58 style-02">
                            <div class="wrapper">
                              <div class="img-container">
                                <div class="ss-img square">
                                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/136.jpg');"></div>
                                  <div class="btn-play style-02">
                                    <div class="img-container">
                                      <img class="inactive" src="public/assets/app/images/icon/btn-play-inactive.png" alt="Icon Inactive">
                                      <img class="active" src="public/assets/app/images/icon/btn-play-active.png" alt="Icon active">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="text-container">
                                <p class="title size-02 fw-500 h-color-18">
                                  รายการ เปิดประตูสู่ กกต. EP : 78 หลักสูตร
                                  การพัฒนาการเมืองและการเลือกตั้งระดับภูมิภาค (พตภ.)
                                </p>
                                <div class="card-footer mt-1">
                                  <div class="wrapper">
                                    <div class="icon">
                                      <p class="p sm fw-400">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                                    </div>
                                    <div class="icon">
                                      <em class="fa-solid fa-eye"></em>
                                      <p class="p sm ml-2 fw-400">280 <span class="ml-1">/</span></p>
                                    </div>
                                    <div class="icon">
                                      <em class="fa-solid fa-share-nodes"></em>
                                      <span class="p sm ml-2 fw-400">60</span>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="grid xl-1-3 lg-1-3 md-50 sm-100" data-aos="fade-up" data-aos-delay="150">
                      <a class="ss-card ss-card-36" href="#">
                        <div class="ss-img vertical-03 size-02">
                          <div class="img-bg" style="background-image:url('public/assets/app/images/content/143.jpg');"></div>
                          <div class="btn-play">
                            <div class="img-container">
                              <img class="inactive" src="public/assets/app/images/icon/btn-play-inactive.png" alt="Icon Inactive">
                              <img class="active" src="public/assets/app/images/icon/btn-play-active.png" alt="Icon active">
                            </div>
                          </div>
                        </div>
                        <div class="text-wrapper">
                          <div class="h6 title size-02 color-white fw-500" href="#">
                            รายการ กกต. ขอบอก EP 78 : การสร้างนวัตกรรมเพื่อพัฒนาการให้บริการดิจิทัล 
                            อำนวยความสะดวกในการเลือกตั้ง
                          </div>
                          <div class="card-footer mt-2">
                            <div class="wrapper color-white color-white-theme">
                              <div class="icon">
                                <p class="p sm">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                              </div>
                              <div class="icon">
                                <em class="fa-solid fa-eye"></em>
                                <p class="p sm ml-2">280 <span class="ml-1">/</span></p>
                              </div>
                              <div class="icon">
                                <em class="fa-solid fa-share-nodes"></em>
                                <span class="p sm ml-2">60</span>
                              </div>
                            </div>
                            <div class="btn btn-action style-05 btn-24">
                              <em class="fa-solid fa-arrow-right"></em>
                            </div>
                          </div>
                        </div>
                        <div class="filter-01"></div>
                      </a>
                    </div>
                    <div class="grid xl-1-3 lg-1-3 md-100 sm-100" data-aos="fade-up" data-aos-delay="150">
                      <div class="grids">
                        <div class="grid lg-100 md-50 sm-100 mt-0">
                          <a class="ss-card ss-card-57" href="#">
                            <div class="ss-img square-04">
                              <div class="img-bg" style="background-image:url('public/assets/app/images/content/145.jpg');"></div>
                              <div class="btn-play">
                                <div class="img-container">
                                  <img class="inactive" src="public/assets/app/images/icon/btn-play-inactive.png" alt="Icon Inactive">
                                  <img class="active" src="public/assets/app/images/icon/btn-play-active.png" alt="Icon active">
                                </div>
                              </div>
                            </div>
                            <div class="text-container">
                              <p class="title fw-500 color-black-theme h-color-18 mt-2">
                                รายการ เปิดประตูสู่ กกต. EP : 78 หลักสูตร
                                การพัฒนาการเมืองและการเลือกตั้งระดับภูมิภาค (พตภ.)
                              </p>
                              <div class="card-footer mt-1">
                                <div class="wrapper color-black-theme">
                                  <div class="icon">
                                    <p class="p sm fw-400">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                                  </div>
                                  <div class="icon">
                                    <em class="fa-solid fa-eye"></em>
                                    <p class="p sm ml-2 fw-400">280 <span class="ml-1">/</span></p>
                                  </div>
                                  <div class="icon">
                                    <em class="fa-solid fa-share-nodes"></em>
                                    <span class="p sm ml-2 fw-400">60</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </a>
                        </div>
                        <div class="grid lg-100 md-50 sm-100 mt-4 mt-0-md mt-6-sm">
                          <div class="ss-card ss-card-58 style-02">
                            <div class="wrapper">
                              <div class="img-container">
                                <div class="ss-img square">
                                  <div class="img-bg" style="background-image:url('public/assets/app/images/content/136.jpg');"></div>
                                  <div class="btn-play style-02">
                                    <div class="img-container">
                                      <img class="inactive" src="public/assets/app/images/icon/btn-play-inactive.png" alt="Icon Inactive">
                                      <img class="active" src="public/assets/app/images/icon/btn-play-active.png" alt="Icon active">
                                    </div>
                                  </div>
                                </div>
                              </div>
                              <div class="text-container">
                                <p class="title size-02 fw-500 h-color-18">
                                  รายการ เปิดประตูสู่ กกต. EP : 78 หลักสูตร
                                  การพัฒนาการเมืองและการเลือกตั้งระดับภูมิภาค (พตภ.)
                                </p>
                                <div class="card-footer mt-1">
                                  <div class="wrapper">
                                    <div class="icon">
                                      <p class="p sm fw-400">08 มิถุนายน 2565 <span class="ml-1">/</span></p>
                                    </div>
                                    <div class="icon">
                                      <em class="fa-solid fa-eye"></em>
                                      <p class="p sm ml-2 fw-400">280 <span class="ml-1">/</span></p>
                                    </div>
                                    <div class="icon">
                                      <em class="fa-solid fa-share-nodes"></em>
                                      <span class="p sm ml-2 fw-400">60</span>
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
            <div class="bullet mt-6">
              <div class="container">
                <div class="bullet-wrapper">
                  <div class="dots"></div>
                </div>
              </div>  
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <?php 
    $video = [
      ['image' => 'public/assets/app/images/content/37.jpg'], 
      ['image' => 'public/assets/app/images/content/38.jpg'], 
      ['image' => 'public/assets/app/images/content/39.jpg'], 
      ['image' => 'public/assets/app/images/content/40.jpg'], 
      ['image' => 'public/assets/app/images/content/41.jpg'], 
      ['image' => 'public/assets/app/images/content/42.jpg'], 
      ['image' => 'public/assets/app/images/content/43.jpg'], 
      ['image' => 'public/assets/app/images/content/37.jpg'], 
      ['image' => 'public/assets/app/images/content/38.jpg'], 
      ['image' => 'public/assets/app/images/content/39.jpg'], 
      ['image' => 'public/assets/app/images/content/40.jpg'], 
      ['image' => 'public/assets/app/images/content/41.jpg'],
    ]
  ?>

  <section class="section-padding">
    <div class="container">
      <div class="grids mt-3" data-aos="fade-up" data-aos-delay="300">
        <?php foreach($video as $d) {?>
          <div class="grid xl-25 lg-1-3 md-50">
          <a class="ss-card ss-card-61 mb-3" href="#">
            <div class="ss-img">
              <div class="img-bg" style="background-image:url('<?= $d['image']?>');"></div>
              <div class="btn-play">
                <div class="img-container">
                  <img class="inactive" src="public/assets/app/images/icon/btn-play-inactive.png" alt="Icon Inactive">
                  <img class="active" src="public/assets/app/images/icon/btn-play-active.png" alt="Icon active">
                </div>
              </div>
              <div class="filter style-02 bgcolor-02">
                <div class="wrapper">
                  <div class="btn btn-action style-05 btn-24">
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                </div>
              </div>
            </div>
            <div class="text-container">
              <p class="title fw-500">
                รายการ กกต. ขอบอก EP 65 : "การพิจารณาประกาศผลการเลือกตั้ง 
                สถ./ผถ.ของ กกต."
              </p>
              <div class="card-footer mt-1">
                <div class="wrapper color-gray">
                  <div class="icon">
                    <em class="fa-solid fa-calendar-days"></em>
                    <span class="p sm fw-400 ml-2">08 มิถุนายน 2565</span>
                  </div>
                  <div class="icon">
                    <em class="fa-solid fa-eye"></em>
                    <span class="p sm fw-400 ml-2">280</span>
                  </div>
                  <div class="icon">
                    <em class="fa-solid fa-share-nodes"></em>
                    <span class="p sm fw-400 ml-2">60</span>
                  </div>
                </div>
                <div class="link-footer">
                  <p class="text color-05 fw-500 border-bottom bcolor-05 lh-sm mr-2">อ่านต่อ</p>
                  <div class="arrow"><em class="fa-solid fa-arrow-right"></em></div>
                </div>
              </div>
              <div class="card-line style-02"></div>
            </div>
          </a>
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
  </section>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>