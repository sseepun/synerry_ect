<?php if(!empty($listHeader)){?>
  <div class="list-header style-02 <?= isset($listHeaderClass)? $listHeaderClass: '' ?>">
  
    <?php if(in_array('search', $listHeader) || in_array('category', $listHeader) || in_array('order', $listHeader)){?>
      <div class="options">
        <?php if(in_array('search', $listHeader)){?>
          <div class="option search">
            <div class="ui icon input">
              <input id="search" type="search" placeholder="ค้นหา" />
              <em class="icon fa-solid fa-magnifying-glass"></em>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('category', $listHeader)){?>
          <div class="option cate">
            <span class="p sm fw-500 mr-2">ประเภท</span>
            <select class="ui dropdown">
              <option value="0">เลือกหมวดหมู่</option>
              <option value="1">ข่าวประชาสัมพันธ์ 1</option>
              <option value="2">ข่าวประชาสัมพันธ์ 2</option>
              <option value="3">ข่าวประชาสัมพันธ์ 3</option>
            </select>
            <div class="dropdown-icon">
              <em class="fa-solid fa-chevron-down"></em>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('order', $listHeader)){?>
          <div class="option order">
            <span class="p sm fw-500 mr-2">เรียงลำดับ</span>
            <select class="ui dropdown">
              <option value="">เรียงลำดับข้อมูล</option>
              <option value="1">จากล่าสุดไปเก่าสุด</option>
              <option value="2">จากเก่าสุดไปล่าสุด</option>
              <option value="3">กำลังเป็นที่นิยม</option>
            </select>
            <div class="dropdown-icon">
              <em class="fa-solid fa-chevron-down"></em>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('view', $listHeader)){?>
          <div class="option view">
            <a class="icon-view" href="#">
              <img class="icon-inactive" src="public/assets/app/images/icon-svg/grid-inactive.svg" alt="Icon">
              <img class="icon-active" src="public/assets/app/images/icon-svg/grid-active.svg" alt="Icon">
            </a>
            <a class="icon-view ml-1" href="#">
              <img class="icon-inactive" src="public/assets/app/images/icon-svg/list-inactive.svg" alt="Icon">
              <img class="icon-active" src="public/assets/app/images/icon-svg/list-active.svg" alt="Icon">
            </a>
            <?php if(in_array('rss', $listHeader)){?>
              <a class="icon-view ml-1" href="#">
                <img class="icon-inactive" src="public/assets/app/images/icon-svg/rss-inactive.svg" alt="Icon">
                <img class="icon-active" src="public/assets/app/images/icon-svg/rss-active.svg" alt="Icon">
              </a>
            <?php }?>
          </div>
        <?php }?>
        <?php if(in_array('view-02', $listHeader)){?>
          <div class="option view">
            <a class="icon-view size-02 ml-1 disable op-0" href="#">
              <img class="icon-inactive" src="public/assets/app/images/icon-svg/drag-vertical-green.svg" alt="Icon">
              <img class="icon-active" src="public/assets/app/images/icon-svg/drag-vertical-white.svg" alt="Icon">
            </a>
            <div class="icon-view faq-expand-all size-02 ml-1">
              <img class="icon-inactive" src="public/assets/app/images/icon-svg/drag-vertical-green.svg" alt="Icon">
              <img class="icon-active" src="public/assets/app/images/icon-svg/drag-vertical-white.svg" alt="Icon">
            </div>
            <div class="icon-view faq-collapse-all size-02 ml-1" href="#">
              <img class="icon-inactive" src="public/assets/app/images/icon-svg/arrows-collapse-green.svg" alt="Icon">
              <img class="icon-active" src="public/assets/app/images/icon-svg/arrows-collapse-white.svg" alt="Icon">
            </div>
          </div>
        <?php }?>
        <?php if(in_array('view-03', $listHeader)){?>
          <div class="option view">
            <a class="icon-view op-10" href="#">
              <em class="fas fa-th"></em>
            </a>
            <a class="icon-view disable op-10" href="#">
              <em class="fa-solid fa-list"></em>
            </a>
            <?php if(in_array('rss', $listHeader)){?>
              <a class="icon-view active ml-1" href="#">
                <em class="fas fa-rss"></em>
              </a>
            <?php }?>
          </div>
        <?php }?>
        <?php if(in_array('view-04', $listHeader)){?>
          <div class="option view">
            <div class="wrapper">
              <a class="icon-view disable op-10" href="#">
                <img class="icon-inactive" src="public/assets/app/images/icon-svg/grid-inactive.svg" alt="Icon">
                <img class="icon-active" src="public/assets/app/images/icon-svg/grid-active.svg" alt="Icon">
              </a>
              <a class="icon-view disable op-10 ml-1" href="#">
                <img class="icon-inactive" src="public/assets/app/images/icon-svg/list-inactive.svg" alt="Icon">
                <img class="icon-active" src="public/assets/app/images/icon-svg/list-active.svg" alt="Icon">
              </a>
              <?php if(in_array('rss', $listHeader)){?>
                <a class="icon-view ml-1" href="#">
                  <img class="icon-inactive" src="public/assets/app/images/icon-svg/rss-inactive.svg" alt="Icon">
                  <img class="icon-active" src="public/assets/app/images/icon-svg/rss-active.svg" alt="Icon">
                </a>
              <?php }?>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('view-grid', $listHeader)){?>
          <div class="option view">
            <div class="wrapper">
              <a class="icon-view" href="#">
                <img class="icon-inactive" src="public/assets/app/images/icon-svg/grid-inactive.svg" alt="Icon">
                <img class="icon-active" src="public/assets/app/images/icon-svg/grid-active.svg" alt="Icon">
              </a>
              <a class="icon-view ml-1" href="#">
                <img class="icon-inactive" src="public/assets/app/images/icon-svg/list-inactive.svg" alt="Icon">
                <img class="icon-active" src="public/assets/app/images/icon-svg/list-active.svg" alt="Icon">
              </a>
              <?php if(in_array('rss', $listHeader)){?>
                <a class="icon-view ml-1" href="#">
                  <img class="icon-inactive" src="public/assets/app/images/icon-svg/rss-inactive.svg" alt="Icon">
                  <img class="icon-active" src="public/assets/app/images/icon-svg/rss-active.svg" alt="Icon">
                </a>
              <?php }?>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('rss', $listHeader)){?>
          <div class="option view style-02 rss" style="width: 5% ; margin-top : 0">
            <div class="wrapper">
                <a class="icon-view ml-1" href="#">
                  <img class="icon-inactive" src="public/assets/app/images/icon-svg/rss-inactive.svg" alt="Icon">
                  <img class="icon-active" src="public/assets/app/images/icon-svg/rss-active.svg" alt="Icon">
                </a>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('day', $listHeader)){?>
          <div class="option view style-02">
            <span class="p sm fw-500 mr-2">มุมมอง</span>
            <select class="ui dropdown">
              <option value="">รายวัน</option>
              <option value="1">รายเดือน</option>
              <option value="2">รายปี</option>
            </select>
            <div class="dropdown-icon">
              <em class="fa-solid fa-chevron-down"></em>
            </div>
          </div>
        <?php }?>
      </div>
    <?php }?>
  </div>
<?php }?>
