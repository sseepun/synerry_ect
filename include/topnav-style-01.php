<?php
  $submenu = '<div class="submenu-dropdown level-3">
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
    <div class="blocks blocks-main ">
      <div class="blocks hide-mobile">
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
      <div class="blocks">
        <div class="option bcolor-04 no-border-right">
          <a class="icon hotline" href="#">
            <em class="fa-solid fa-phone"></em>
            <p class="sm fw-300">สายด่วน 1444</p>
          </a>
        </div>
        <div class="option bcolor-04 login no-border-right">
          <a class="icon" href="#">
            <img class="inactive" src="public/assets/app/images/icon-svg/login.svg" alt="Icon Inactive">
            <img class="active" src="public/assets/app/images/icon-svg/login-hover.svg" alt="Icon Active">
            <p class="sm fw-300">เข้าสู่ระบบ</p>
          </a>
        </div>
        <div class="option-select hide-mobile">
          <div class="select bg-05 bg-white-theme">
            TH <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
          </div>
          <div class="dropdown">
            <a class="item" href="#">EN</a>
            <a class="item" href="#">US</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</nav>

<!-- Topnav -->
<nav class="topnav style-02 <?= $optionMenu ?>">
  <div class="wrapper">
    <a class="logo" href="#">
      <div class="img-container">
        <img src="public/assets/app/images/logo-04.png" alt="Website Logo" />
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

          <!-- Mega Menu -->
          <?php if($i <= 4 && $i != 0) {?>
             <!-- กกต. -->
            <?php if($i === 1){?>
              <div class="mega-menu-dropdown">
                <div class="mega-menu-wrapper">
                  <div class="mega-menu-content size-02">
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">คณะกรรมการการเลือกตั้ง</a>
                    </div>
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">อำนาจหน้าที่ของกกต.</a>
                    </div>
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">เลขาธิการ กกต.</a>
                    </div>
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">สำนักงาน กกต.</a>
                    </div>
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">ข้อมูลผู้บริหารเทคโนโลยีสารสนเทศระดับสูง</a>
                    </div>
                  </div>
                  <div class="mega-menu-content size-02">
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">ผู้ตรวจการเลือกตั้ง</a>
                    </div>
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">โครงสร้างสำนักงาน</a>
                    </div>
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">ทำเนียบผู้บริหาร</a>
                    </div>
                  </div>
                  <div class="mega-menu-content size-02">
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">วิสัยทัศน์ / พันธกิจ / ยุทธศาสตร์</a>
                    </div>
                    <div class="mega-menu ">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">ค่านิยมร่วมขององค์กร</a>
                    </div>
                    <div class="mega-menu">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a href="#">แผนปฏิบัติการประจำปี/การติดตามผล/รายงานความพึงพอใจ</a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- รวมกฎหมาย -->
              <?php } else if ($i === 2) {?>
                <div class="mega-menu-dropdown">
                  <div class="mega-menu-wrapper">
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">รัฐธรรมนูญ</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">พระราชบัญญัติประกอบรัฐธรรมนูญ</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">พระราชบัญญัติ</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">พระราชกฤษฎีกา</a>
                      </div>
                    </div>
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ระเบียบ กกต.</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ประกาศ กกต.</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">คำสั่ง กกต.</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">คำวินิจฉัย กกต.</a>
                      </div>
                    </div>
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ประกาศนายทะเบียนพรรคการเมือง</a>
                      </div>
                      <div class="mega-menu ">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ประกาศ สนง. กกต.</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ร่างกฎหมายและการรับฟังความคิดเห็น</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ประกาศรายชื่อกฎหมายและหน่วยงานที่รับผิดชอบ</a>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- ข่าวสาร -->
              <?php } else if ($i === 3) {?>
                <div class="mega-menu-dropdown">
                  <div class="mega-menu-wrapper">
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ข่าวประชาสัมพันธ์</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">เรื่องเด่น กกต.</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ข่าว สนง.กกต.จว.</a>
                      </div>
                    </div>
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">CLIPPING NEWS</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ปฏิทินกิจกรรม</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ข่าวรับสมัครงาน</a>
                      </div>
                    </div>
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">บทความพิเศษ</a>
                      </div>
                      <div class="mega-menu ">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">การจัดทำ MOU กับหน่วยงานต่าง ๆ</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">องค์ความรู้การเลือกตั้ง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">วิดีโอ</a>
                      </div>
                    </div>
                  </div>
                </div>
              <?php } else if ($i === 4) {?>
                <div class="mega-menu-dropdown">
                  <div class="mega-menu-wrapper">
                    <div class="mega-menu-content">
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon/graph-black.png" />
                          <img class="active" src="public/assets/app/images/icon/graph-white.png" />
                        </div>
                        <a href="#">สถิติการเลือกตั้ง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon/menu-black-02.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-02.png" />
                        </div>
                        <a href="#">ประกาศผลการเลือกตั้ง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon/menu-black-03.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-03.png" />
                        </div>
                        <a href="#">ศูนย์กลางข้อมูลเปิดเกี่ยวกับการเลือกตั้ง</a>
                      </div>
                    </div>
                    <div class="mega-menu-content">
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon/menu-black-04.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-04.png" />
                        </div>
                        <a href="#">ศูนย์รวมข้อมูลเพื่อติดต่อราชการ</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon/menu-black-05.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-05.png" />
                        </div>
                        <a href="#">ข้อมูลพรรคการเมือง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon/menu-black-06.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-05.png" />
                        </div>
                        <a href="#">ตรวจสอบข้อมูลสมาชิกพรรคการเมือง</a>
                      </div>
                    </div>
                    <div class="mega-menu-content">
                      <div class="mega-menu">
                        <div class="icon">
                          <img src="public/assets/app/images/icon/menu-black-07.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-07.png" />
                        </div>
                        <a href="#">สื่อประชาสัมพันธ์</a>
                      </div>
                      <div class="mega-menu ">
                        <div class="icon xs">
                          <img src="public/assets/app/images/icon/menu-black-08.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-08.png" />
                        </div>
                        <a href="#">คู่มือปฏิบัติงาน</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img src="public/assets/app/images/icon/menu-black-09.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-09.png" />
                        </div>
                        <a href="#">แบบฟอร์ม</a>
                      </div>
                    </div>
                    <div class="mega-menu-content">
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon/menu-black-10.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-10.png" />
                        </div>
                        <a href="#">บริการสารสนเทศในหน่วยงาน</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon/menu-black-11.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-11.png" />
                        </div>
                        <a href="#">KHOWLEDEG MANAGEMENT</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon/menu-black-12.png" />
                          <img class="active" src="public/assets/app/images/icon/menu-white-09.png" />
                        </div>
                        <a href="#">เอกสารการศึกษาส่วนบุคคลหลักสูตร พตส.</a>
                      </div>
                    </div>
                  </div>
                </div>
            <?php }?>
         <?php } ?>

          <!-- Dropdown Menu -->
          <?php if($i > 4 && $i <= 7){?>
            <div class="submenu-dropdown <?php if($i>2)echo 'anchor-right'; ?>">
              <div class="submenu-container">
                 <div class="submenu-wrapper">
                  <div class="submenu has-children">
                    <a href="#">สถาบันพัฒนาการเมืองและการเลือกตั้ง</a>
                    <?= $submenu ?>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">ศูนย์บริการเบิกจ่ายตรงสวัสดิการฯ</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">ศูนย์การเรียนรู้ฯที่ 1</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">ศูนย์การเรียนรู้ฯที่ 2</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">ศูนย์การเรียนรู้ฯที่ 3</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">ศูนย์การเรียนรู้ฯที่ 4</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">ศูนย์การเรียนรู้ฯที่ 5</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">ศูนย์ศึกษาประชาธิปไตย</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">สำนักงาน กกต. จังหวัด</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">ห้องสมุดอิเล็กทรอนิกส์</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">เครื่องลงคะแนนเลือกตั้ง</a>
                  </div>
                  <div class="submenu has-children">
                    <a href="#">สหกรณ์ออมทรัพย์ องค์กรอิสระ จำกัด</a>
                  </div>
                </div>
              </div>
            </div>
          <?php } ?>
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


<!-- Options -->
<?php include_once('component/options.php'); ?>
