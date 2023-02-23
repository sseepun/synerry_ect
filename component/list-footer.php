<?php if(!empty($listFooter)){?>
  <div class="list-footer-02">
    <?php if(in_array('total', $listFooter)){?>
      <div class="option">
        <p class="color-gray fw-600">
          จำนวนหน้าทั้งหมด <span class="ml-1 color-02">400 รายการ</span>
        </p>
      </div>
    <?php }?>
    <?php if(in_array('paginate', $listFooter)){?>
      <div class="option">
        <a class="btn btn-action-style-07 mr-2" href="#">
          หน้าแรก
        </a>
        <div class="paginate style-02">
          <div class="arrow arrow-prev">
            <em class="fa-solid fa-chevron-left"></em>
          </div>
          <div class="pages">
            <a class="page active" href="#">01</a>
            <a class="page" href="#">02</a>
            <a class="page" href="#">03</a>
            <a class="page" href="#">04</a>
            <a class="page" href="#">05</a>
          </div>
          <div class="arrow arrow-next">
            <em class="fa-solid fa-chevron-right"></em>
          </div>
        </div>
        <a class="btn btn-action-style-07 ml-2" href="#">
          หน้าสุดท้าย
        </a>
      </div>
    <?php }?>
    <?php if(in_array('pp', $listFooter)){?>
      <div class="option">
        <p class="color-gray fw-600">แสดงผลต่อหน้า</p>
        <select class="ui decorated selection dropdown style-02 ml-1">
          <option value="12" selected>12</option>
          <option value="24">24</option>
          <option value="36">36</option>
          <option value="48">48</option>
          <option value="60">60</option>
          <option value="72">72</option>
          <option value="84">84</option>
          <option value="96">96</option>
        </select>
      </div>
    <?php }?>
  </div>
<?php }?>
