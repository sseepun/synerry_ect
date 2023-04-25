<?php include_once('include/style.php'); ?>

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
                            <img class="icon-active" src="public/assets/app/images/icon-svg/grid-inactive.svg" alt="Icon">
                            <img class="icon-inactive" src="public/assets/app/images/icon-svg/grid-active.svg" alt="Icon">
                          </a>
                          <a class="icon-view ml-1" href="#">
                            <img class="icon-active" src="public/assets/app/images/icon-svg/list-inactive.svg" alt="Icon">
                            <img class="icon-inactive" src="public/assets/app/images/icon-svg/list-active.svg" alt="Icon">
                          </a>
                            <a class="icon-view ml-1" href="#">
                            <img class="icon-active" src="public/assets/app/images/icon-svg/rss-inactive.svg" alt="Icon">
                            <img class="icon-inactive" src="public/assets/app/images/icon-svg/rss-active.svg" alt="Icon">
                          </a>
                        </div>
                      </div>
                    <?php } else if(in_array('views-02', $sectionOptions)){?>
                      <div class="option view">
                        <div class="wrapper-view">
                          <a class="icon-view disable op-0" href="#">
                            <img class="icon-active" src="public/assets/app/images/icon-svg/grid-inactive.svg" alt="Icon">
                            <img class="icon-inactive" src="public/assets/app/images/icon-svg/grid-active.svg" alt="Icon">
                          </a>
                          <a class="icon-view disable ml-1 op-0" href="#">
                            <img class="icon-active" src="public/assets/app/images/icon-svg/list-inactive.svg" alt="Icon">
                            <img class="icon-inactive" src="public/assets/app/images/icon-svg/list-active.svg" alt="Icon">
                          </a>
                          <a class="icon-view ml-1" href="#">
                            <img class="icon-active" src="public/assets/app/images/icon-svg/rss-inactive.svg" alt="Icon">
                            <img class="icon-inactive" src="public/assets/app/images/icon-svg/rss-active.svg" alt="Icon">
                          </a>
                        </div>
                      </div>
                      <?php } else if(in_array('views-03', $sectionOptions)){?>
                        <div class="option view">
                          <div class="wrapper-view">
                            <div class="icon-view faq-expand-all cursor-pointer size-02 ml-1">
                              <img class="icon-inactive" src="public/assets/app/images/icon-svg/minisite-drag-vertical-inactive-theme-01.svg" alt="Icon">
                              <img class="icon-active" src="public/assets/app/images/icon-svg/minisite-drag-vertical-active-theme-01.svg" alt="Icon">
                            </div>
                            <div class="icon-view faq-collapse-all cursor-pointer size-02 ml-1" href="#">
                              <img class="icon-inactive" src="public/assets/app/images/icon-svg/minisite-arrows-collapse-inactive-theme-01.svg" alt="Icon">
                              <img class="icon-active" src="public/assets/app/images/icon-svg/minisite-arrows-collapse-active-theme-01.svg" alt="Icon">
                            </div>
                            <a class="icon-view ml-1" href="#">
                              <img class="icon-active" src="public/assets/app/images/icon-svg/minisite-rss-active.svg" alt="Icon">
                              <img class="icon-inactive" src="public/assets/app/images/icon-svg/minisite-rss-inactive.svg" alt="Icon">
                            </a>
                          </div>
                        </div>
                        <?php } else if(in_array('views-04', $sectionOptions)){?>
                          <div class="option view">
                            <div class="wrapper-view">
                              <a class="icon-view op-0 ml-1" href="#">
                                <img class="icon-active" src="public/assets/app/images/icon-svg/minisite-rss-active.svg" alt="Icon">
                                <img class="icon-inactive" src="public/assets/app/images/icon-svg/minisite-rss-inactive.svg" alt="Icon">
                              </a>
                              <div class="icon-view faq-expand-all cursor-pointer size-02 ml-1">
                                <img class="icon-inactive" src="public/assets/app/images/icon-svg/minisite-drag-vertical-inactive-theme-01.svg" alt="Icon">
                                <img class="icon-active" src="public/assets/app/images/icon-svg/minisite-drag-vertical-active-theme-01.svg" alt="Icon">
                              </div>
                              <div class="icon-view faq-collapse-all cursor-pointer size-02 ml-1" href="#">
                                <img class="icon-inactive" src="public/assets/app/images/icon-svg/minisite-arrows-collapse-inactive-theme-01.svg" alt="Icon">
                                <img class="icon-active" src="public/assets/app/images/icon-svg/minisite-arrows-collapse-active-theme-01.svg" alt="Icon">
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




           