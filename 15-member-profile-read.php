<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php //include_once('component/page-loader.php'); ?>
  
  <?php include_once('include/sidebar-main-site.php'); ?>
 
  <div id="main" class="main-container">
    <div class="main-header" data-aos="fade-in" data-aos-delay="0">
      <a class="main-header-menu" href="./01-home-01.php">
        <div class="icon">
          <img class="inactive" src="public/assets/app/images/icon-svg/homepage.svg" alt="Icon Inactive">
        </div>
        <p class="sm title fw-400 ml-1 mr-1 color-02">ไปที่หน้าหลักของเว็บไซต์</p>
        <div class="icon">
          <img class="active" src="public/assets/app/images/icon-svg/external-link-01.svg" alt="Icon Active">
        </div>
      </a>
    </div>
    <div id="mainContent" class="main-content">
      <div id="banner02" class="banner-02" data-aos="fade-in" data-aos-delay="0">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <?php for($i=0; $i<5; $i++){?>
              <div class="swiper-slide">
                <div class="wrapper">
                  <div class="img-bg" style="background-image:url('public/assets/app/images/bg/26.jpg');"></div>
                  <div class="container">
                    <div class="text-wrapper">
                      <div>
                        <h4 class="color-black-theme fw-500">
                          จัดการ<span class="text-xl fw-700">การเลือกตั้ง</span>ตามหลัก<span class="color-black-theme h2 fw-600 color-04">ประชาธิปไตย</span>
                        </h4>
                        <h2 class="color-black-theme fw-700">
                          โปร่งใส<span class="h3 fw-500">และ</span>เป็นธรรม
                        </h2>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
          <div class="bullet">
            <div class="container h-full">
              <div id="bulletWrapper" class="bullet-wrapper">
                <div class="arrow-container">
                  <div class="arrow btn-icon-prev">
                    <em class="fa-solid fa-arrow-right"></em>
                  </div>
                  <div class="arrow btn-icon-next">
                    <em class="fa-solid fa-arrow-left"></em>
                  </div>
                </div>
              </div>
            </div>  
          </div>
        </div>
      </div>
      <div class="wrapper">
        <div class="ss-box all-bradius style-02 m-unset xxl" data-aos="fade-in" data-aos-delay="0">
          <div class="ss-box-header">
            <h5 class="color-black color-02 fw-500">ข้อมูลส่วนตัว</h5>  
          </div> 
          <div class="ss-box lg" style="padding:1.5rem 1rem;">
            <form class="form style-02 white-theme" action="">
              <div class="grids no-gap">
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p ws-nowrap fw-500">เปลี่ยนภาพโปรไฟล์</label>
                    <div class="profile-edit">
                      <div class="img-container">
                        <img class="img" src="public/assets/app/images/avatars/03.jpg" alt="Avatar">
                      </div>
                      <div class="photo-upload">
                        <em class="fa-solid fa-camera"></em>
                      </div>
                      <input type="file" accept="image/png, image/jpeg">
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">ชื่อ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01 no-border-bottom" type="text" value="นิพันธ์พนธ์" disabled/>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p pw-title fw-500">นามสกุล <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01 no-border-bottom" type="text" value="สุวรรชัย" disabled/>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">อีเมล <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <input class="style-02 size-01 no-border-bottom" type="email" value="nipahtphone@ect.go.th" disabled/>
                    </div>
                  </div>
                </div>
                <div class="grid sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">หมายเลขติดต่อ</label>
                    <div class="form-input">
                      <input class="style-02 size-01 no-border-bottom" type="text" value="088-421-7863" disabled/>
                    </div>
                  </div>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="p fw-500">วันเกิด <span class="text-danger">*</span></label>
                      <div class="form-input">
                        <div class="date-wrapper">
                        <input type="text" value="10 ตุลาคม 2500" disabled
                        class="date-picker form-control style-02 size-01 no-border-bottom">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="grid lg-50 md-100 sm-100 mt-2">
                  <div class="form-group style-02">
                    <label class="fw-500">เพศ <span class="text-danger">*</span></label>
                    <div class="form-input">
                      <fieldset>
                        <div class="gallery-grids">
                          <div class="grid sm-50 xs-50">
                            <div class="checkbox-set none">
                              <input type="radio" name="radio" id="radio_0" checked="">
                              <label for="radio_0" class="checkmark"></label>
                              <span for="radio_0" class="p sm">ชาย</span>
                              <div class="bg-color"></div>
                            </div>
                          </div>
                          <div class="grid sm-50 xs-50">
                            <div class="checkbox-set none">
                              <input type="radio" name="radio" id="radio_1" disabled>
                              <label for="radio_1" class="checkmark"></label>
                              <span class="p sm">หญิง</span>
                              <div class="bg-color"></div>
                            </div>
                          </div>
                        </div>
                      </fieldset>
                    </div>
                    <div>
                  </div>
                  </div>
                </div>
                <div class="grid sm-100">
                  <div class="padding-style-04">
                    <div class="btns mt-2 jc-center h-full">
                      <div href="#" class="btn btn-action btn-02">
                        แก้ไข
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form> 
          </div>
        </div>
      </div>       
    </div>     
  </div>

  <?php include_once('include/access-panel.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    let sidebar = document.querySelector(".sidebar");
    let arrowContainer = document.querySelector(".arrow-container");
    let btn = document.querySelector("#btn");
    let x = window.matchMedia("(max-width:575.98px)")

    btn.addEventListener("click", ()=>{
      menuBtnChange();
    });

    function menuBtnChange() {
      if(sidebar.classList.contains("open")){
        sidebar.classList.remove("open");
        sidebar.style.width = "5rem"
      }else {
        sidebar.classList.toggle("open");
        sidebar.style.width = "17.5rem"
      }
    }

    function myFunction(x) {
      if (x.matches) { 
        sidebar.style.width = "5rem"
        sidebar.classList.remove("open");
        arrowContainer.style.display = "none"
      }else{
        sidebar.classList.add("open");
        sidebar.style.width = "17.5rem"
        arrowContainer.style.display = "block"
      }
    }
    myFunction(x) 
    x.addListener(myFunction)

  </script>
</body>
</html>