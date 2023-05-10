<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="minisite loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-minisite-dropdown-menu.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'เข้าสู่ระบบ' ],
    ];
    $breadcrumbTitle = 'เข้าสู่ระบบ';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/39.jpg';
    $formContainer = false;
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full pb-6">
        <div class="ss-box-shadow md"></div>
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              สมัครสมาชิก
            </h3>
          </div>
          <div class="ss-box m-unset xxl size-03">
            <div class="grids flex-column-reverse md">
              <div class="grid xl-70 lg-70 md-100 sm-100 mt-0">
                <form class="form style-03 style-04 size-02 style-02" action="action.php">
                  <div class="grids" data-aos="fade-up" data-aos-delay="150">
                    <div class="grid sm-100 mt-4">
                      <div class="form-group style-02">
                        <label class="p fw-500">อีเมล/ชื่อผู้ใช้ <span class="text-danger">*</span></label>
                        <div class="form-input">
                          <input class="style-02 size-01" type="text">
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="form-group style-02">
                        <label class="p pw-title fw-500">รหัสผ่าน <span class="text-danger">*</span></label>
                        <div class="form-input">
                          <input class="style-02 size-01" type="password"/>
                        </div>
                      </div>
                      <div class="padding-style-04 d-flex ai-center mt-2">
                        <em class="fa-solid fa-triangle-exclamation color-30 mr-2" style="font-size:.75rem;"></em>
                        <label class="text-danger style-02">รหัสผ่านไม่ถูกต้อง กรุณาลองใหม่</label>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="padding-style-04">
                        <label class="form-check ai-center form-check-container-02 style-02 pl-6 mt-3">
                          <input type="checkbox" class="form-check-input"/>
                          <span class="checkmark" style="left:0;"></span>
                          <p class="fw-400">จดจำรหัสผ่าน</p>
                        </label>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="padding-style-04">
                        <div class="captcha-container">
                          <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
                          <div class="btns ai-center ml-4">
                            <button type="submit" href="#" class="btn btn-action btn-36 theme-bg-02 c-btn c-btn--animate-left-right">
                              <div class="c-wrapper jc-center">
                                <span>เข้าสู่ระบบ</span>
                                <span class="c-icon pl-2">
                                  <em class=" fa-solid fa-arrow-right"></em>
                                </span>
                              </div>
                            </button>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div class="grid sm-100 mt-2">
                      <div class="padding-style-04">
                        <div class="ss-sep-01 black-theme">
                          <p class="fw-500">หรือ</p>
                        </div>
                        <div class="grids no-gap">
                          <div class="grid sm-50 mt-2">
                            <div class="btns pr-1 pr-unset-xs">
                              <div href="#" class="btn btn-action-style-04 style-02 btn-fb w-full">
                                <div class="wrapper">
                                  <div class="icon fb">
                                    <em class="fa-brands fa-facebook-f"></em>
                                  </div>
                                  <div class="text-container">
                                    <p class="fw-400">เข้าสู่ระบบด้วย FACEBOOK</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="grid sm-50 mt-2">
                            <div class="btns pl-1 pl-unset-xs">
                              <div href="#" class="btn btn-action-style-04 style-02 btn-gg w-full">
                                <div class="wrapper">
                                  <div class="icon gg">
                                    <em class="fa-brands fa-google"></em>
                                  </div>
                                  <div class="text-container">
                                    <p class="fw-400">เข้าสู่ระบบด้วย GOOGLE</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="grid sm-50 mt-2">
                            <div class="btns pr-1 pr-unset-xs">
                              <div href="#" class="btn btn-action-style-04 style-02 btn-line w-full">
                                <div class="wrapper">
                                  <div class="icon line">
                                    <em class="fa-brands fa-line"></em>
                                  </div>
                                  <div class="text-container">
                                    <p class="fw-400">เข้าสู่ระบบด้วย LINE</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="grid sm-50 mt-2">
                            <div class="btns pl-1 pl-unset-xs">
                              <div href="#" class="btn btn-action-style-04 style-02 btn-tw w-full">
                                <div class="wrapper">
                                  <div class="icon tw">
                                    <em class="fa-brands fa-twitter"></em>
                                  </div>
                                  <div class="text-container">
                                    <p class="fw-400">เข้าสู่ระบบด้วย TWITTER</p>
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
                <div class="grid xl-30 lg-30 md-100 sm-100" data-aos="fade-up" data-aos-delay="150">
                  <a class="ss-card ss-card-69" href="#">
                    <div class="wrapper">
                      <div class="icon">
                        <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 336 240">
                          <g>
                            <path d="M168,0c43.2,0,86.5,0,129.7,0C320.8,0,336,15.2,336,38.2c0,54.5,0,109,0,163.5c0,23-15.2,38.3-38.3,38.3
                              c-86.5,0-173,0-259.4,0C15.3,240,0,224.7,0,201.7c0-54.5,0-109,0-163.5C0,15.3,15.3,0,38.3,0C81.5,0,124.7,0,168,0z M102.8,119.9
                              c-1.6,0.3-2.7,0.6-3.7,0.8c-28.5,3.9-51,29.5-51.1,58.3c0,7.9,4.9,13,12.7,13c31.5,0,63,0,94.5,0c7.9,0,12.8-5.1,12.7-13
                              c-0.1-27.1-20.1-51.7-46.7-57.5c-2.5-0.5-5.1-1-8.3-1.6c25.2-5.7,32.6-26,30.8-40c-2.4-18.5-17.3-31.8-35.4-31.9
                              C90,47.9,74.8,61.3,72.2,79.9C69.7,98.2,81.5,113.8,102.8,119.9z M233.9,108c13.5,0,27,0,40.5,0c7.7,0,13.1-4.9,13.1-11.9
                              c0.1-7.1-5.3-12.1-13.2-12.1c-27,0-54,0-81,0c-7.9,0-13.4,4.9-13.3,12c0,7.1,5.5,12,13.4,12C206.9,108,220.4,108,233.9,108z
                              M222.2,132c-9.6,0-19.2,0-28.9,0c-7.9,0-13.3,5-13.3,12.1c0,6.9,5.5,11.9,13.1,11.9c19.2,0,38.5,0,57.7,0c7.7,0,13.1-5,13.1-11.9
                              c0.1-7.1-5.4-12.1-13.3-12.1C241.2,132,231.7,132,222.2,132z"></path>
                          </g>
                        </svg>
                      </div>
                      <div class="text-container">
                        <div class="text">
                          <p class="h6 lh-sm fw-600">ยังไม่เป็นสมาชิก ?</p>
                          <p class="sm lh-sm fw-400">สามารถลงทะเบียนได้ที่นี้</p>
                        </div>
                        <div class="arrow c-btn c-btn--animate-left-right">
                          <div class="arrow arrow-next c-icon pl-2">
                            <em class="fa-solid fa-arrow-right"></em>
                          </div>
                        </div>
                      </div>
                    </div>
                  </a>
                  <div class="fg-pass">
                    <a href="#" class="mr-2 fw-400 title-theme bcolor-theme">ลืมรหัสผ่าน</a>
                    <div class="icon">
                      <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" 
                        viewBox="0 0 512 512" >
                      <g>
                        <g>
                          <path d="M215.415,337.171c-10.329,0-18.732,8.403-18.732,18.732c0,10.329,8.403,18.732,18.732,18.732
                            c10.329,0,18.732-8.403,18.732-18.732C234.146,345.574,225.743,337.171,215.415,337.171z"/>
                        </g>
                      </g>
                      <g>
                        <g>
                          <rect x="440.195" y="199.805" width="37.463" height="37.463"/>
                        </g>
                      </g>
                      <g>
                        <g>
                          
                            <rect x="422.357" y="136.602" transform="matrix(0.7071 -0.7071 0.7071 0.7071 19.3547 357.393)" width="37.463" height="37.463"/>
                        </g>
                      </g>
                      <g>
                        <g>
                          
                            <rect x="422.359" y="263.005" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -70.0253 394.4174)" width="37.463" height="37.463"/>
                        </g>
                      </g>
                      <g>
                        <g>
                          <path d="M109.268,237.268V143.61c0-58.529,47.617-106.146,106.146-106.146c58.529,0,106.146,47.617,106.146,106.146v56.195h37.463
                            V143.61C359.024,64.423,294.601,0,215.415,0S71.805,64.423,71.805,143.61v93.659H34.342V512h362.146V237.268H109.268z
                            M234.146,408.876v34.441h-37.463v-34.441c-21.802-7.731-37.463-28.553-37.463-52.973c0-30.986,25.209-56.195,56.195-56.195
                            c30.986,0,56.195,25.209,56.195,56.195C271.61,380.322,255.949,401.145,234.146,408.876z"/>
                        </g>
                      </g>
                      </svg>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>