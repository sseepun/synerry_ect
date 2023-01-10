<?php if(!empty($listHeader)){?>
  <div class="list-header style-02 <?= isset($listHeaderClass)? $listHeaderClass: '' ?>">
  
    <?php if(in_array('search', $listHeader) || in_array('category', $listHeader) || in_array('order', $listHeader)){?>
      <div class="options">
        <?php if(in_array('search', $listHeader)){?>
          <div class="option search size-02">
            <div class="ui icon input">
              <input id="search" type="search" placeholder="ค้นหา" />
              <em class="icon fa-solid fa-magnifying-glass"></em>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('category', $listHeader)){?>
          <div class="option cate style-02 size-02">
            <span class="p sm fw-500 mr-2">ประเภท</span>
            <select class="ui dropdown">
              <option value="">เลือกหมวดหมู่</option>
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
          <div class="option order style-02 size-02">
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
          <div class="option view size-02 style-02">
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
