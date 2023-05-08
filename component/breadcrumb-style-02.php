<?php if(!empty($breadcrumb)){?>
  <section class="breadcrumb-02 style-02">
    <div class="top <?php if(!empty($breadcrumbClass))echo $breadcrumbClass; ?>">
      <?php if(!empty($breadcrumbBg)){?>
          <div class="img-bg" style="background-image:url('<?= $breadcrumbBg ?>');"></div>
      <?php }?>
      <div class="container">
        <h6 class="title h2 color-white-theme fw-600 mt-4" data-aos="fade-in" data-aos-delay="0">
          <?= $breadcrumbTitle ?>
        </h6>
        <div class="wrapper" data-aos="fade-in" data-aos-delay="0">
          <?php foreach($breadcrumb as $b){?>
            <a class="p title-link color-white sm bcolor-white fw-400" href="<?= $b['url'] ?>">
              <span class="border-bottom bcolor-white"> <?= $b['display'] ?></span>
            </a>
          <?php }?>
        </div>
      </div>
    </div>
    <div class="bottom <?= !empty($backgroundColor)? $backgroundColor: '' ?>">
      <div class="container">
        <div class="wrapper">
          <div class="grids ai-center" style="position:relative; z-index:2;" data-aos="fade-up" data-aos-delay="0">
            <div class="grid lg-100 md-100 sm-100 mt-0">
            <?php if($formContainer === true){?>
              <form class="form-container-03">
                <div class="grids">
                <?php if(in_array('option-01', $sectionOptions)){?>
                  <div class="grid lg-35 md-40 sm-100 mt-0">
                    <div class="option search">
                      <div class="ui icon input">
                        <input class="size-03" id="search" type="search" placeholder="ค้นหา">
                        <em class="icon size-02 style-03 fa-solid fa-magnifying-glass"></em>
                      </div>
                    </div>
                  </div>
                  <div class="grid lg-45 md-60 sm-100 mt-0">
                    <div class="grids">
                      <div class="grid lg-50 md-50 mt-0">
                        <div class="option">
                          <select class="ui dropdown border">
                            <option value="">เรียงลำดับข้อมูล</option>
                            <option value="1">จากล่าสุดไปเก่าสุด</option>
                            <option value="2">จากเก่าสุดไปล่าสุด</option>
                            <option value="3">กำลังเป็นที่นิยม</option>
                          </select>
                          <div class="dropdown-icon border size-02">
                            <em class="fa-solid fa-chevron-down"></em>
                          </div>
                        </div>
                      </div>
                      <div class="grid lg-50 md-50 mt-0">
                        <div class="option">
                          <select class="ui dropdown border">
                            <option value="0">เลือกหมวดหมู่</option>
                            <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                            <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                            <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                          </select>
                          <div class="dropdown-icon border size-02">
                            <em class="fa-solid fa-chevron-down"></em>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php } else if(in_array('option-02', $sectionOptions)){?>
                    <div class="grid lg-35 md-50 sm-100 mt-0">
                      <div class="option search">
                        <div class="ui icon input">
                          <input class="size-03" id="search" type="search" placeholder="ค้นหา">
                          <em class="icon size-02 style-03 fa-solid fa-magnifying-glass"></em>
                        </div>
                      </div>
                    </div>
                    <div class="grid lg-45 md-50 sm-100 mt-0">
                      <div class="grids">
                        <div class="grid lg-60 sm-100 mt-0">
                          <div class="option">
                            <select class="ui dropdown border">
                              <option value="0">เลือกหมวดหมู่</option>
                              <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                              <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                              <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                            </select>
                            <div class="dropdown-icon border size-02">
                              <em class="fa-solid fa-chevron-down"></em>
                            </div>
                          </div>
                      </div>
                    </div>
                  </div>
                  <?php } ?>
                  <div class="grid lg-20 md-100 sm-100 mt-0">
                    <?php if(in_array('views', $sectionOptions)){?>
                      <div class="option view">
                        <div class="wrapper-view">
                          <a class="icon-view" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                              <g>
                                <circle cx="60" cy="60" r="60"/>
                                <circle cx="256" cy="60" r="60"/>
                                <circle cx="452" cy="60" r="60"/>
                              </g>
                              <g>
                                <circle cx="60" cy="256" r="60"/>
                                <circle cx="256" cy="256" r="60"/>
                                <circle cx="452" cy="256" r="60"/>
                              </g>
                              <g>
                                <circle cx="60" cy="452" r="60"/>
                                <circle cx="256" cy="452" r="60"/>
                                <circle cx="452" cy="452" r="60"/>
                              </g>
                            </svg>
                          </a>
                          <a class="icon-view ml-1" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                              <g>
                                <circle cx="60" cy="60" r="60"/>
                                <path d="M452,0H252.9v0.1C221.2,1.7,196,27.9,196,60s25.2,58.3,56.9,59.9v0.1H452c33.1,0,60-26.9,60-60S485.1,0,452,0z"/>
                              </g>
                              <g>
                                <circle cx="60" cy="256" r="60"/>
                                <path d="M452,196H252.9v0.1c-31.7,1.6-56.9,27.8-56.9,59.9s25.2,58.3,56.9,59.9v0.1H452c33.1,0,60-26.9,60-60S485.1,196,452,196z"/>
                              </g>
                              <g>
                                <circle cx="60" cy="452" r="60"/>
                                <path d="M452,392H252.9v0.1c-31.7,1.6-56.9,27.8-56.9,59.9s25.2,58.3,56.9,59.9v0.1H452c33.1,0,60-26.9,60-60S485.1,392,452,392z"/>
                              </g>
                            </svg>
                          </a>
                          <a class="icon-view ml-1" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                              <g>
                                <path d="M512,492.6c0,5.3-1.7,9.9-5.1,13.7c-3.4,3.8-7.8,5.7-13.1,5.7h-54.9c-5.3,0-9.7-1.7-13.1-5.1c-3.4-3.4-5.1-7.4-5.1-12
                                  C416,385.1,375,291.6,297.7,214.3C220.4,137,126.9,96,17.1,91.4c-4.6,0-8.6-1.7-12-5.1C1.7,82.9,0,78.5,0,73.1V18.3
                                  C0,13,1.9,8.6,5.7,5.1C9.5,1.7,14.1,0,19.4,0C107,3.1,188.2,26.9,262.9,71.4c74.7,44.6,134.1,104,178.3,178.3
                                  C485.3,324,508.9,405,512,492.6z M347.4,492.6c0,5.3-1.7,9.9-5.1,13.7c-3.4,3.8-7.8,5.7-13.1,5.7h-54.9c-5.3,0-9.7-1.7-13.1-5.1
                                  c-3.4-3.4-5.1-7.4-5.1-12c-4.6-64-29.5-118.7-74.9-164c-45.3-45.3-100-70.3-164-74.9c-4.6,0-8.6-1.7-12-5.1
                                  c-3.4-3.4-5.1-7.8-5.1-13.1v-54.9c0-5.3,1.9-9.7,5.7-13.1c3.8-3.4,8.4-5.1,13.7-5.1c88.4,5.3,163.8,39.3,226.3,101.7
                                  C308.2,328.8,342.1,404.2,347.4,492.6z M125.1,386.9c14.1,14.1,21.1,31.3,21.1,51.4c0,20.2-7.1,37.5-21.1,52
                                  C111,504.8,93.9,512,73.7,512c-20.2,0-37.5-7.2-52-21.7C7.2,475.8,0,458.5,0,438.3c0-20.2,7.2-37.3,21.7-51.4
                                  c14.5-14.1,31.8-21.1,52-21.1C93.9,365.7,111,372.8,125.1,386.9z"/>
                              </g>
                            </svg>
                          </a>
                        </div>
                      </div>
                    <?php } else if(in_array('views-02', $sectionOptions)){?>
                      <div class="option view">
                        <div class="wrapper-view">
                          <a class="icon-view disable op-0" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                              <g>
                                <circle cx="60" cy="60" r="60"/>
                                <circle cx="256" cy="60" r="60"/>
                                <circle cx="452" cy="60" r="60"/>
                              </g>
                              <g>
                                <circle cx="60" cy="256" r="60"/>
                                <circle cx="256" cy="256" r="60"/>
                                <circle cx="452" cy="256" r="60"/>
                              </g>
                              <g>
                                <circle cx="60" cy="452" r="60"/>
                                <circle cx="256" cy="452" r="60"/>
                                <circle cx="452" cy="452" r="60"/>
                              </g>
                            </svg>
                          </a>
                          <a class="icon-view disable ml-1 op-0" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                              <g>
                                <circle cx="60" cy="60" r="60"/>
                                <path d="M452,0H252.9v0.1C221.2,1.7,196,27.9,196,60s25.2,58.3,56.9,59.9v0.1H452c33.1,0,60-26.9,60-60S485.1,0,452,0z"/>
                              </g>
                              <g>
                                <circle cx="60" cy="256" r="60"/>
                                <path d="M452,196H252.9v0.1c-31.7,1.6-56.9,27.8-56.9,59.9s25.2,58.3,56.9,59.9v0.1H452c33.1,0,60-26.9,60-60S485.1,196,452,196z"/>
                              </g>
                              <g>
                                <circle cx="60" cy="452" r="60"/>
                                <path d="M452,392H252.9v0.1c-31.7,1.6-56.9,27.8-56.9,59.9s25.2,58.3,56.9,59.9v0.1H452c33.1,0,60-26.9,60-60S485.1,392,452,392z"/>
                              </g>
                            </svg>
                          </a>
                          <a class="icon-view ml-1" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                              <g>
                                <path d="M512,492.6c0,5.3-1.7,9.9-5.1,13.7c-3.4,3.8-7.8,5.7-13.1,5.7h-54.9c-5.3,0-9.7-1.7-13.1-5.1c-3.4-3.4-5.1-7.4-5.1-12
                                  C416,385.1,375,291.6,297.7,214.3C220.4,137,126.9,96,17.1,91.4c-4.6,0-8.6-1.7-12-5.1C1.7,82.9,0,78.5,0,73.1V18.3
                                  C0,13,1.9,8.6,5.7,5.1C9.5,1.7,14.1,0,19.4,0C107,3.1,188.2,26.9,262.9,71.4c74.7,44.6,134.1,104,178.3,178.3
                                  C485.3,324,508.9,405,512,492.6z M347.4,492.6c0,5.3-1.7,9.9-5.1,13.7c-3.4,3.8-7.8,5.7-13.1,5.7h-54.9c-5.3,0-9.7-1.7-13.1-5.1
                                  c-3.4-3.4-5.1-7.4-5.1-12c-4.6-64-29.5-118.7-74.9-164c-45.3-45.3-100-70.3-164-74.9c-4.6,0-8.6-1.7-12-5.1
                                  c-3.4-3.4-5.1-7.8-5.1-13.1v-54.9c0-5.3,1.9-9.7,5.7-13.1c3.8-3.4,8.4-5.1,13.7-5.1c88.4,5.3,163.8,39.3,226.3,101.7
                                  C308.2,328.8,342.1,404.2,347.4,492.6z M125.1,386.9c14.1,14.1,21.1,31.3,21.1,51.4c0,20.2-7.1,37.5-21.1,52
                                  C111,504.8,93.9,512,73.7,512c-20.2,0-37.5-7.2-52-21.7C7.2,475.8,0,458.5,0,438.3c0-20.2,7.2-37.3,21.7-51.4
                                  c14.5-14.1,31.8-21.1,52-21.1C93.9,365.7,111,372.8,125.1,386.9z"/>
                              </g>
                            </svg>
                          </a>
                        </div>
                      </div>
                    <?php } else if(in_array('views-03', $sectionOptions)){?>
                      <div class="option view">
                        <div class="wrapper-view">
                          <div class="icon-view faq-expand-all cursor-pointer size-02 ml-1">
                            <svg class="lg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g stroke-width="0"/>
                              <g stroke-linecap="round" stroke-linejoin="round"/>
                              <g>
                                <path d="M21 10L3 10M21 14L3 14M12 4L12 10M12 14L12 20M15 18L12 21L9 18M15 6L12 3L9 6" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                              </g>
                            </svg>
                          </div>
                          <div class="icon-view faq-collapse-all cursor-pointer size-02 ml-1" href="#">
                            <svg class="lg" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" stroke-width="0.00016">
                              <g stroke-width="0"/>
                              <g stroke-linecap="round" stroke-linejoin="round"/>
                              <g><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z"/> </g>
                            </svg>
                          </div>
                          <a class="icon-view ml-1" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                              <g>
                                <path d="M512,492.6c0,5.3-1.7,9.9-5.1,13.7c-3.4,3.8-7.8,5.7-13.1,5.7h-54.9c-5.3,0-9.7-1.7-13.1-5.1c-3.4-3.4-5.1-7.4-5.1-12
                                  C416,385.1,375,291.6,297.7,214.3C220.4,137,126.9,96,17.1,91.4c-4.6,0-8.6-1.7-12-5.1C1.7,82.9,0,78.5,0,73.1V18.3
                                  C0,13,1.9,8.6,5.7,5.1C9.5,1.7,14.1,0,19.4,0C107,3.1,188.2,26.9,262.9,71.4c74.7,44.6,134.1,104,178.3,178.3
                                  C485.3,324,508.9,405,512,492.6z M347.4,492.6c0,5.3-1.7,9.9-5.1,13.7c-3.4,3.8-7.8,5.7-13.1,5.7h-54.9c-5.3,0-9.7-1.7-13.1-5.1
                                  c-3.4-3.4-5.1-7.4-5.1-12c-4.6-64-29.5-118.7-74.9-164c-45.3-45.3-100-70.3-164-74.9c-4.6,0-8.6-1.7-12-5.1
                                  c-3.4-3.4-5.1-7.8-5.1-13.1v-54.9c0-5.3,1.9-9.7,5.7-13.1c3.8-3.4,8.4-5.1,13.7-5.1c88.4,5.3,163.8,39.3,226.3,101.7
                                  C308.2,328.8,342.1,404.2,347.4,492.6z M125.1,386.9c14.1,14.1,21.1,31.3,21.1,51.4c0,20.2-7.1,37.5-21.1,52
                                  C111,504.8,93.9,512,73.7,512c-20.2,0-37.5-7.2-52-21.7C7.2,475.8,0,458.5,0,438.3c0-20.2,7.2-37.3,21.7-51.4
                                  c14.5-14.1,31.8-21.1,52-21.1C93.9,365.7,111,372.8,125.1,386.9z"/>
                              </g>
                            </svg>
                          </a>
                        </div>
                      </div>
                    <?php } else if(in_array('views-04', $sectionOptions)){?>
                      <div class="option view">
                        <div class="wrapper-view">
                          <a class="icon-view op-0 ml-1" href="#">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512">
                              <g>
                                <path d="M512,492.6c0,5.3-1.7,9.9-5.1,13.7c-3.4,3.8-7.8,5.7-13.1,5.7h-54.9c-5.3,0-9.7-1.7-13.1-5.1c-3.4-3.4-5.1-7.4-5.1-12
                                  C416,385.1,375,291.6,297.7,214.3C220.4,137,126.9,96,17.1,91.4c-4.6,0-8.6-1.7-12-5.1C1.7,82.9,0,78.5,0,73.1V18.3
                                  C0,13,1.9,8.6,5.7,5.1C9.5,1.7,14.1,0,19.4,0C107,3.1,188.2,26.9,262.9,71.4c74.7,44.6,134.1,104,178.3,178.3
                                  C485.3,324,508.9,405,512,492.6z M347.4,492.6c0,5.3-1.7,9.9-5.1,13.7c-3.4,3.8-7.8,5.7-13.1,5.7h-54.9c-5.3,0-9.7-1.7-13.1-5.1
                                  c-3.4-3.4-5.1-7.4-5.1-12c-4.6-64-29.5-118.7-74.9-164c-45.3-45.3-100-70.3-164-74.9c-4.6,0-8.6-1.7-12-5.1
                                  c-3.4-3.4-5.1-7.8-5.1-13.1v-54.9c0-5.3,1.9-9.7,5.7-13.1c3.8-3.4,8.4-5.1,13.7-5.1c88.4,5.3,163.8,39.3,226.3,101.7
                                  C308.2,328.8,342.1,404.2,347.4,492.6z M125.1,386.9c14.1,14.1,21.1,31.3,21.1,51.4c0,20.2-7.1,37.5-21.1,52
                                  C111,504.8,93.9,512,73.7,512c-20.2,0-37.5-7.2-52-21.7C7.2,475.8,0,458.5,0,438.3c0-20.2,7.2-37.3,21.7-51.4
                                  c14.5-14.1,31.8-21.1,52-21.1C93.9,365.7,111,372.8,125.1,386.9z"/>
                              </g>
                            </svg>
                          </a>
                          <div class="icon-view faq-expand-all cursor-pointer size-02 ml-1">
                            <svg class="lg" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                              <g stroke-width="0"/>
                              <g stroke-linecap="round" stroke-linejoin="round"/>
                              <g>
                                <path d="M21 10L3 10M21 14L3 14M12 4L12 10M12 14L12 20M15 18L12 21L9 18M15 6L12 3L9 6" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/>
                              </g>
                            </svg>
                          </div>
                          <div class="icon-view faq-collapse-all cursor-pointer size-02 ml-1" href="#">
                            <svg class="lg" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg" stroke-width="0.00016">
                              <g stroke-width="0"/>
                              <g stroke-linecap="round" stroke-linejoin="round"/>
                              <g><path fill-rule="evenodd" d="M1 8a.5.5 0 0 1 .5-.5h13a.5.5 0 0 1 0 1h-13A.5.5 0 0 1 1 8zm7-8a.5.5 0 0 1 .5.5v3.793l1.146-1.147a.5.5 0 0 1 .708.708l-2 2a.5.5 0 0 1-.708 0l-2-2a.5.5 0 1 1 .708-.708L7.5 4.293V.5A.5.5 0 0 1 8 0zm-.5 11.707-1.146 1.147a.5.5 0 0 1-.708-.708l2-2a.5.5 0 0 1 .708 0l2 2a.5.5 0 0 1-.708.708L8.5 11.707V15.5a.5.5 0 0 1-1 0v-3.793z"/> </g>
                            </svg>
                          </div>
                        </div>
                      </div>
                    <?php } else if(in_array('views-05', $sectionOptions)){?>
                      <div class="option view d-flex ai-center h-full">
                        <div class="btn-calendar">
                          <button class="btn btn-action style-08 btn-32 size-05 btn-white-theme mr-2">
                            มุมมอง
                          </button>
                          <button class="btn btn-action style-08 btn-32 size-05 btn-white-theme mr-2">
                            รายการ
                          </button>
                          <button class="btn btn-action style-08 btn-32 size-05 btn-white-theme">
                            ปฏิทิน
                          </button>
                        </div>
                      </div>
                    <?php }?>
                  </div>
                </div>
              </form>
            <?php }?>
            </div>
          </div>
          <?php if(!empty($sectionOptions)){?>
            <?php //include_once('component/section-options.php'); ?>
          <?php }?>
        </div>
      </div>
    </div>
  </section>
<?php }?>
