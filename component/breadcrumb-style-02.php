
<?php if(!empty($breadcrumb)){?>
  <section class="breadcrumb-02">
    <div class="top <?php if(!empty($breadcrumbClass))echo $breadcrumbClass; ?>">
      <?php if(!empty($breadcrumbBg)){?>
          <div class="img-bg" style="background-image:url('<?= $breadcrumbBg ?>');"></div>
      <?php }?>
      <div class="container">
        <h6 class="title h2 color-white-theme fw-600 mt-4" data-aos="fade-in" data-aos-delay="150">
          <?= $breadcrumbTitle ?>
        </h6>
      </div>
    </div>
    <div class="bottom">
      <div class="container">
        <div class="wrapper">
          <div class="grids ai-center" data-aos="fade-up" data-aos-delay="0">
            <div class="grid lg-50 md-100 sm-100 mt-0">
              <?php foreach($breadcrumb as $b){?>
                <a class="p title-link color-white sm border fw-400" href="<?= $b['url'] ?>">
                    <?= $b['display'] ?>
                </a>
              <?php }?>
            </div>
            <div class="grid lg-50 md-100 sm-100 mt-0">
              <form class="form-container-03">
                <div class="grids">
                  <div class="grid sm-50 mt-0">
                    <div class="option">
                      <span class="p title sm fw-500 mr-2">ประเภท</span>
                      <select class="ui dropdown">
                        <option value="0">ข่าวประชาสัมพันธ์</option>
                        <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                        <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                        <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                      </select>
                      <div class="dropdown-icon">
                        <em class="fa-solid fa-chevron-down"></em>
                      </div>
                    </div>
                  </div>
                  <div class="grid sm-50 mt-0">
                  <div class="option">
                      <span class="p title size-02 sm fw-500 mr-2">เรียงลำดับ</span>
                      <select class="ui dropdown size-02">
                        <option value="0">เลือกหมวดหมู่</option>
                        <option value="1">ข่าวประชาสัมพันธ์ 1</option>
                        <option value="2">ข่าวประชาสัมพันธ์ 2</option>
                        <option value="3">ข่าวประชาสัมพันธ์ 3</option>
                      </select>
                      <div class="dropdown-icon">
                        <em class="fa-solid fa-chevron-down"></em>
                      </div>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <?php 
            $sectionOptions = [ 'views', 'rss' ];
            include_once('component/section-options.php');
          ?>
        </div>
      </div>
    </div>
  </section>
<?php }?>
