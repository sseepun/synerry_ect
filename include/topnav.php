
<!-- Super Topnav -->
<nav class="stopnav bg-p color-white">
  <div class="wrapper">
    <div class="blocks blocks-main">
      <div class="blocks">
        <a class="option h-color-s" href="#">
          <div class="icon"><em class="fa-solid fa-phone"></em></div>
          +66 0-2141-8888
        </a>
        <a class="option h-color-s" href="#">
          <div class="icon"><em class="fa-solid fa-envelope"></em></div>
          webmaster@ect.go.th
        </a>
      </div>
      <div class="blocks hide-mobile">
        <div class="option-select">
          <div class="select bg-s">
            TH <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
          </div>
          <div class="dropdown">
            <a class="item" href="#">EN</a>
            <a class="item" href="#">US</a>
          </div>
        </div>
        <a class="btn-social" href="#">
          <em class="fa-brands fa-facebook-f"></em>
        </a>
        <a class="btn-social" href="#">
          <em class="fa-brands fa-twitter"></em>
        </a>
        <a class="btn-social" href="#">
          <em class="fa-brands fa-youtube"></em>
        </a>
      </div>
    </div>
  </div>
</nav>

<!-- Topnav -->
<nav class="topnav">
  <div class="wrapper">

    <a class="logo" href="#">
      <div class="img-container">
        <img src="public/assets/app/images/logo.png" alt="Website Logo" />
      </div>
      <div class="text-wrapper">
        <p>สำนักงานคณะกรรมการการเลือกตั้ง</p>
      </div>
    </a>

    <div class="menu-container hide-tablet" id="topnav-menu">
      <?php
        foreach([
          'หน้าหลัก', 'กกต.', 'รวมกฏหมาย', 'ข่าวสาร', 'บริการข้อมูล', 'หน่วยงาน',
          'ตอบข้อซักถาม/แจ้งเบาะเเส', 'จัดซื้อ/จัดจ้าง'
        ] as $i=>$d){
      ?>
        <div class="menu has-children">
          <a href="#" data-dropdown="<?= $i ?>">
            <?= $d ?> <em class="fas fa-chevron-down"></em>
          </a>
          <div class="submenu-dropdown <?php if($i>5)echo 'anchor-right'; ?>">
            <div class="submenu-container">
              <div class="submenu-wrapper">
                <div class="submenu">
                  <a href="#">ทิศทางองค์กร</a>
                </div>
                <div class="submenu">
                  <a href="#">ภารกิจ 4 ด้าน</a>
                </div>
                <div class="submenu">
                    <a href="#">การแบ่งส่วนราชการกรมโยธาธิการและผังเมือง</a>
                </div>
                <div class="submenu">
                  <a href="#">อำนาจหน้าที่ของกรมและส่วนราชการ</a>
                </div>
                <div class="submenu">
                  <a href="#">ประวัติความเป็นมาและตราสัญลักษณ์</a>
                </div>
                <div class="submenu">
                  <a href="#">โครงสร้างองค์กร</a>
                </div>
                <div class="submenu">
                  <a href="#">ทำเนียบผู้บริหารกรมฯ</a>
                </div>
                <div class="submenu">
                  <a href="#">ผู้บริหารเทคโนโลยีสารสนเทศระดับสูง</a>
                </div>
                <div class="submenu">
                  <a href="#">รายงานผล</a>
                </div>
                <div class="submenu">
                  <a href="#">แผนงาน</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>

    <div class="blocks">
      <a class="option global-search-toggle pb-1" href="#">
        <img src="public/assets/app/images/icon/01.png" alt="Icon" />
      </a>
      <a class="option sidenav-toggle show-tablet" href="#">
        <div class="hamburger">
          <div></div><div></div><div></div>
        </div>
      </a>
    </div>
        
  </div>
</nav>
<div class="topnav-spacer"></div>

<!-- Sidenav -->
<nav class="sidenav">
  <div class="wrapper">
    <div class="sidenav-toggle">
      <div class="hamburger">
        <div></div><div></div><div></div>
      </div>
    </div>
    <div class="options">
      <div class="option">
        <div class="icon"><span class="text-lg">ก</span></div>
        <div class="dropdown">
          <div class="icon font-size-btn fw-500" data-size="-1">
            <span class="text-xl">-</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="0">
            <span class="text-lg">ก</span>
          </div>
          <div class="icon font-size-btn fw-500" data-size="1">
            <span class="text-xl">+</span>
          </div>
        </div>
      </div>
      <div class="option">
        <div class="icon">C</div>
        <div class="dropdown">
          <div class="icon theme-btn" data-theme="0">C</div>
          <div class="icon theme-btn" data-theme="1">C</div>
          <div class="icon theme-btn" data-theme="2">C</div>
        </div>
      </div>
      <div class="option">
        <div class="flag" style="background-image:url('public/assets/app/images/misc/th-flag.png');"></div>
        <div class="dropdown">
          <a href="#">
            <div class="flag" style="background-image:url('public/assets/app/images/misc/us-flag.png');"></div>
          </a>
        </div>
      </div>
    </div>
    <div class="scroll-wrapper" data-simplebar>
      <div class="menu-container"></div>
    </div>
  </div>
</nav>
<div class="sidenav-filter"></div>

<!-- Global Search Container -->
<div class="global-search-container">
  <div class="wrapper">
    <div class="close-filter global-search-toggle"></div>
    <div class="container">
      <div class="search-panel">
        <form action="/" method="GET">
          <div class="form-group mt-0">
            <div class="append">
              <input type="text" class="md sgray" placeholder="พิมพ์คำค้นหาที่ต้องการ" required />
              <button type="submit" class="icon lg">
                <em class="fas fa-search"></em>
              </button>
            </div>
          </div>
        </form>
        <div class="item-container">
          <p class="fw-600 color-08">คำแนะนำค้นหา</p>
          <div class="items" data-simplebar>
            <?php
              foreach([
                'ร่างธรรมนูญว่าด้วยการผังเมือง',
                'นโยบายการตั้งถิ่นฐานและผังเมือง',
                'สำนักงานสภาพัฒนาการเศรษฐกิจและ',
                'สังคมแห่งชาติ',
                'ทิศทางการพัฒนาเชิงพื้นที่',
                'การจัดระบบเมืองที่มีคุณภาพ',
                'ร่างธรรมนูญว่าด้วยการผังเมือง',
                'นโยบายการตั้งถิ่นฐานและผังเมือง',
              ] as $d){
            ?>
              <a class="item p sm fw-600" href="#">
                <div class="text-container font-01">
                  <?= $d ?>
                </div>
                <div class="icon">
                  <img src="public/assets/app/images/icon/arrow-right-black.png" alt="Image Icon" />
                </div>
              </a>
            <?php }?>
          </div>
          <div class="btns">
            <a class="btn btn-action btn-color-05 width-full clip-path-01" href="#">
              ค้นหาขั้นสูง <em class="fas fa-chevron-right sm ml-2"></em>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
