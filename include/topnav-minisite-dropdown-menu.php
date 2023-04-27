<?php
   $submenu = '<div class="submenu-dropdown level-3">
    <div class="submenu-container">
      <div class="submenu-wrapper">
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">หน่วยงานส่วนกลาง</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">ภาคเหนือ</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">ภาคกลาง</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">ภาคตะวันออกเฉียงเหนือ</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">ภาคตะวันออก</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">ภาคใต้</a>
          </div>
        </div>
      </div>
    </div>
  </div>';

  $subDemo = '<div class="submenu-dropdown level-3">
    <div class="submenu-container">
      <div class="submenu-wrapper">
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">เมนูรายการเพิ่มเติม</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">เมนูรายการเพิ่มเติม</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">เมนูรายการเพิ่มเติม</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">เมนูรายการเพิ่มเติม</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">เมนูรายการเพิ่มเติม</a>
          </div>
        </div>
        <div class="submenu level-3">
          <div class="wrapper">
            <div class="dot">
              <div class="dot-list"></div>
            </div>
            <a href="#">เมนูรายการเพิ่มเติม</a>
          </div>
        </div>
      </div>
    </div>
  </div>';
?>

<!-- Super Topnav -->
<nav class="stopnav minisite style-02 color-white">
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
        <div class="option color-black bcolor-sgray">
          <a class="icon hotline" href="#">
            <em class="fa-solid fa-phone"></em>
            <p class="sm fw-600">สายด่วน 1444</p>
          </a>
        </div>
        <div class="option bcolor-sgray login">
          <a class="icon" href="#">
            <img class="inactive" src="public/assets/app/images/icon-svg/minisite-login-theme-01.svg" alt="Icon Inactive">
            <img class="active" src="public/assets/app/images/icon-svg/minisite-login-hover-theme-01.svg" alt="Icon Active">
            <p class="sm color-black fw-600">เข้าสู่ระบบ</p>
          </a>
        </div>
        <div class="option-select hide-mobile">
          <div class="select color-black bg-white-theme">
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
<nav class="topnav minisite dropdown style-02 theme-01">
  <div class="wrapper">
    <a class="logo" href="#">
      <div class="img-container">
        <img src="public/assets/app/images/logo-04.png" alt="Website Logo" />
      </div>
      <div class="text-wrapper">
        <p class="title lh-sm">สำนักงานคณะกรรมการการเลือกตั้ง</p>
        <p>ประจำจังหวัดกำแพงเพชร</p>
      </div>
    </a>
    <div class="menu-container hide-tablet" id="topnav-menu">
      <?php
        foreach([
          'หน้าหลัก', 'ข้อมูลสำนักงาน', 'บริการ', 'องค์ความรู้', 
          'กฏหมาย/ระเบียบ', 'มัลติมีเดีย', 'ข่าวประชาสัมพันธ์', 'หน่วยงานที่เกี่ยวข้อง',
        ] as $i=>$d){
      ?>
        <div class="menu has-children" <?= $i==0? 'active': '' ?>>
          <a href="#" data-dropdown="<?= $i ?>">
            <?= $d ?> <em class="fas fa-chevron-down"></em>
          </a>

          <!-- Dropdown Menu -->
          <?php if($i <= 7 && $i != 0) {?>
             <!-- ข้อมูลสำนักงาน. -->
            <?php if($i === 1){?>
               <div class="submenu-dropdown">
                <div class="submenu-container">
                  <div class="submenu-wrapper">
                    <div class="submenu has-children">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ความเป็นมา</a>
                      </div>
                      <?= $subDemo ?>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">อำนาจหน้าที่</a>
                      </div>
                    </div>
                    <div class="submenu has-children">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">โครงสร้างองค์กร</a>
                      </div>
                      <?= $subDemo ?>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">บุคลากร</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ที่ตั้ง</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ทำเนียบ กกต.</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ติดต่อสำนักงาน</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- บริการ/ข้อมูลการเลือกตั้ง -->
            <?php } else if ($i === 2) {?>
              <div class="submenu-dropdown">
                <div class="submenu-container">
                  <div class="submenu-wrapper">
                    <div class="submenu has-children">
                      <div class="wrapper">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-01.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-01.svg" />
                        </div>
                        <a href="#">สถิติข้อมูลคะแนน สส</a>
                      </div>
                      <?= $subDemo ?>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-05.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-05.svg" />
                        </div>
                        <a href="#">สาขาพรรคการเมือง</a>
                      </div>
                    </div>
                    <div class="submenu has-children">
                      <div class="wrapper">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-03.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-03.svg" />
                        </div>
                        <a href="#">ทำเนียบ สส./สว.</a>
                      </div>
                      <?= $subDemo ?>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="icon">
                            <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-11.svg" />
                            <img class="active" src="public/assets/app/images/icon-svg/menu-white-11.svg" />
                          </div>
                        <a href="#">ข้อมูลการปกครอง</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/chatting-black.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/chatting-white.svg" />
                        </div>
                        <a href="#">คำถามที่พบบ่อย</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-04.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-04.svg" />
                        </div>
                        <a href="#">ศูนย์รวมข้อมูลเพื่อติดต่อราชการ</a>
                      </div>
                    </div>
                  </div>
                </div>
            </div>
            <!-- องค์ความรู้การเลือกตั้ง -->
            <?php } else if ($i === 3) {?>
              <div class="submenu-dropdown">
                <div class="submenu-container">
                  <div class="submenu-wrapper">
                    <div class="submenu has-children">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">การเลือกตั้ง สส</a>
                      </div>
                      <?= $subDemo ?>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">การได้มาซึ่ง สว.</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">การเลือกตั้งท้องถิ่น</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">เตรียมพร้อมก่อนออกเสียงประชามติ</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">การมีส่วนร่วม</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ประกาศผลการเลือกตั้ง</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">คำสั่งศาลฯ</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">การถอดถอน ผ.ถ./ ส.ถ.</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">สถิติการเลือกตั้ง</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ประกาศผลการเลือกตั้ง สส./สว.</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ข้อมูลพรรคการเมือง</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">แบบฟอร์ม</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            <!-- กฏหมาย/ระเบียบ -->
            <?php } else if ($i === 4) {?>
              <div class="submenu-dropdown anchor-right">
                <div class="submenu-container">
                  <div class="submenu-wrapper">
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">รัฐธรรมนูญ</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">พระราชบัญญัติประกอบรัฐธรรมนูญ</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">พระราชบัญญัติ</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">พระราชกฤษฎีกา</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ระเบียบ กกต.</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ประกาศ สนง. กกต.</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">คำสั่ง กกต.</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- มัลติมีเดีย -->
            <?php } else if ($i === 5) {?>
              <div class="submenu-dropdown anchor-right">
                <div class="submenu-container">
                  <div class="submenu-wrapper">
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">สื่อประชาสัมพันธ์ จว.</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">วารสาร</a>
                      </div>
                      <?= $subDemo ?>
                    </div>
                    <div class="submenu has-children">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">วารสาร VDO</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- ข่าวประชาสัมพันธ์ -->
              <?php } else if ($i === 6) {?>
                <div class="submenu-dropdown anchor-right">
                  <div class="submenu-container">
                    <div class="submenu-wrapper">
                      <div class="submenu has-children">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">ข่าวประชาสัมพันธ์ กกต.</a>
                          <?= $subDemo ?>
                        </div>
                      </div>
                      <div class="submenu">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">ข่าว/กิจกรรม</a>
                        </div>
                      </div>
                      <div class="submenu">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">ประกาศและคำสั่งเกี่ยวกับการเลือกตั้ง</a>
                        </div>
                      </div>
                      <div class="submenu">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">ประกาศผลการเลือกตั้ง</a>
                        </div>
                      </div>
                      <div class="submenu">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">ข่าวประกวดราคา</a>
                        </div>
                      </div>
                      <div class="submenu">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">ข่าวประชาสัมพันธ์ สนง. กกต. กทม.</a>
                        </div>
                      </div>
                      <div class="submenu">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">ปฎิทินกิจกรรม</a>
                        </div>
                      </div>
                      <div class="submenu">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">สื่อประชาสัมพันธ์</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- หน่วยงานที่เกี่ยวข้อง -->
              <?php } else if ($i === 7) {?>
                <div class="submenu-dropdown anchor-right">
                  <div class="submenu-container">
                    <div class="submenu-wrapper size-04">
                      <div class="submenu has-children">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">สำนักงาน กกต.</a>
                        </div>
                      </div>
                      <div class="submenu">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">หน่วยงานภายใต้ สนง. กกต.</a>
                        </div>
                        <?= $submenu ?>
                      </div>
                      <div class="submenu">
                        <div class="wrapper">
                          <div class="dot">
                            <div class="dot-list"></div>
                          </div>
                          <a href="#">หน่วยงานอื่นๆ</a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
            <?php }?>
          <?php } ?>
        </div>
      <?php }?>
    </div>
    <div class="blocks">
      <a class="option global-search-toggle pb-1" href="#">
        <img src="public/assets/app/images/icon/search-05.png" alt="Icon" />
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
<nav class="sidenav minisite style-02 <?= !empty($sideNavStyle)? $sideNavStyle: '' ?>">
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
<?php include_once('component/options-minisite.php'); ?>
