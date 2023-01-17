<div class="section-options" data-aos="fade-in" data-aos-delay="0">
  <?php if(in_array('views', $sectionOptions)){?>
    <div class="options">
      <a class="option search" href="#">
        <em class="icon fa-solid fa-magnifying-glass"></em>
      </a>
      <a class="option" href="#">
        <div class="icon">
          <em class="fas fa-th"></em>
        </div>
      </a>
      <a class="option" href="#">
        <div class="icon">
          <em class="fa-solid fa-list"></em>
        </div>
      </a>
      <a class="option option-search bg-09" href="#">
        <div class="icon active">
          <em class="fas fa-rss"></em>
        </div>
      </a>
    </div>
  <?php }else{?>
    <div class="options">
      <?php if(in_array('category', $sectionOptions)){?>
        <div class="option option-select">
          <div class="select-wrapper">
            <select class="fw-100 p xs">
              <option value="">เลือกหมวดหมู่</option>
            </select>
          </div>
        </div>
      <?php }?>
      <?php if(in_array('latest', $sectionOptions)){?>
        <div class="option option-select">
          <div class="select-wrapper">
            <select class="fw-100 p xs">
              <option value="">ใหม่ล่าสุด</option>
            </select>
          </div>
        </div>
      <?php }?>
      <?php if(in_array('filter', $sectionOptions)){?>
        <div class="option option-select">
          <div class="select-wrapper">
            <select class="fw-100">
              <option value="">แบ่งตามหมวดหมู่</option>
            </select>
          </div>
        </div>
      <?php }?>
      <?php if(in_array('order', $sectionOptions)){?>
        <div class="option option-select">
          <div class="select-wrapper">
            <select class="fw-100">
              <option value="">เรียงลำดับข้อมูล</option>
            </select>
          </div>
        </div>
      <?php }?>
      <?php if(in_array('display', $sectionOptions)){?>
        <a class="option" href="#">
          <img src="public/assets/app/images/icon/list.png" alt="List Icon" />
        </a>
        <a class="option" href="#">
          <img src="public/assets/app/images/icon/grid.png" alt="Grid Icon" />
        </a>
      <?php }?>
      <?php if(in_array('rss', $sectionOptions)){?>
        <a class="option" href="#">
          <img src="public/assets/app/images/icon/rss.png" alt="Rss Icon" />
        </a>
      <?php }?>
      <?php if(in_array('search', $sectionOptions)){?>
        <a class="option option-search bg-09" href="#">
          <img src="public/assets/app/images/icon/search.png" class="search" alt="Search Icon" />
        </a>
      <?php }?>
    </div>
  <?php }?>
</div>

