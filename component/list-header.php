<?php if(!empty($listHeader)){?>
  <div class="list-header style-02 <?= isset($listHeaderClass)? $listHeaderClass: '' ?>">
  
    <?php if(in_array('search', $listHeader) || in_array('category', $listHeader) || in_array('order', $listHeader)){?>
      <div class="options">
        <?php if(in_array('search', $listHeader)){?>
          <div class="option">
            <div class="ui icon input">
              <input type="text" placeholder="ค้นหา" />
              <em class="icon fa-solid fa-magnifying-glass"></em>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('category', $listHeader)){?>
          <div class="option">
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
          <div class="option">
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
        <?php if(in_array('view', $listHeader) || in_array('expand', $listHeader)){?>
        <?php if(in_array('view', $listHeader)){?>
          <div class="option">
            <a class="icon-view" href="#">
              <em class="fas fa-th"></em>
            </a>
            <a class="icon-view active ml-1" href="#">
              <em class="fas fa-th-list"></em>
            </a>
            <?php if(in_array('rss', $listHeader)){?>
              <a class="icon-view ml-1" href="#">
                <em class="fas fa-rss"></em>
              </a>
            <?php }?>
          </div>
        <?php }?>
        <?php if(in_array('expand', $listHeader)){?>
          <div class="option">
            <a class="icon-view faq-expand-all" href="#">
              <em class="fas fa-expand-arrows-alt"></em>
            </a>
            <a class="icon-view active ml-1 faq-collapse-all" href="#">
              <em class="fas fa-compress"></em>
            </a>
          </div>
        <?php }?>
      
    <?php }?>

      </div>
    <?php }?>

   

  </div>
<?php }?>
