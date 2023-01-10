<?php
  $submenu = '<div class="submenu-dropdown">
      <div class="submenu-container">
        <div class="submenu-wrapper">
          <div class="submenu">
            <a href="#">การเลือกตั้งสมาชิกผู้แทนราษฎร</a>
          </div>
          <div class="submenu">
            <a href="#">การได้มาซึ่งสมาชิกวุฒิสภา</a>
          </div>
          <div class="submenu">
              <a href="#">การออกเสียงประชามติ</a>
          </div>
          <div class="submenu">
            <a href="#">การเลือกตั้งท้องถิ่น</a>
          </div>
          <div class="submenu">
            <a href="#">สถิติการวินิจฉัยชี้ขาดเรื่องคัดค้านการเลือกตั้ง</a>
          </div>
        </div>
      </div>
    </div>';
?>

<!-- Super Topnav -->
<nav class="stopnav style-02 bg-04 color-white">
  <div class="wrapper">
    <div class="blocks blocks-main">
      <div class="blocks">
        <a class="option h-color-06" href="#">
          <div class="icon"><em class="fa-solid fa-phone"></em></div>
          +66 0-2141-8888
        </a>
        <a class="option h-color-06" href="#">
          <div class="icon"><em class="fa-solid fa-envelope"></em></div>
          webmaster@ect.go.th
        </a>
      </div>
      <div class="blocks hide-mobile">
        <div class="option bcolor-04">
          <div class="icon hotline">
            <em class="fa-solid fa-phone"></em>
            สายด่วน 1444
          </div>
        </div>
        <div class="option-select">
          <div class="select bg-05">
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
<nav class="topnav style-02">
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
        <div class="menu has-children" <?= $i==0? 'active': '' ?>>
          <a href="#" data-dropdown="<?= $i ?>">
            <?= $d ?> <em class="fas fa-chevron-down"></em>
          </a>
          <div class="submenu-dropdown <?php if($i>2)echo 'anchor-right'; ?>">
            <div class="submenu-container">
              <div class="submenu-wrapper">
                <div class="submenu has-children">
                  <a href="#">สถิติการเลือกตั้ง</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">ประกาศผลการเลือกตั้ง</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">ศูนย์กลางข้อมูลเปิดเกี่ยวกับการเลือกตั้ง</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">ข้อมูลพรรคการเมือง</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">ตรวจสอบข้อมูลสมาชิกพรรคการเมือง</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">สื่อประชาสัมพันธ์</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">คู่มือปฏิบัติงาน</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">แบบฟอร์ม</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">บริการสารสนเทศภายในหน่วยงาน</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">Knowledge Management</a>
                  <?= $submenu ?>
                </div>
                <div class="submenu has-children">
                  <a href="#">เอกสารการศึกษาส่วนบุคคลหลักสูตร พตส.</a>
                  <?= $submenu ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php }?>
    </div>

    <div class="blocks">
      <a class="option global-search-toggle pb-1" href="#">
        <img src="public/assets/app/images/icon/search-02.png" alt="Icon" />
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
<nav class="sidenav style-02">
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
      
    </div>
  </div>
</div>

<!-- Options -->
<?php include_once('component/options.php'); ?>
