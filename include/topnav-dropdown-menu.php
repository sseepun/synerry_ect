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
<nav class="topnav style-02 <?= !empty($optionMenu)? $optionMenu: '' ?>">
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
          'จัดซื้อ/จัดจ้าง', 'ติดต่อ'
        ] as $i=>$d){
      ?>
        <div class="menu has-children" <?= $i==0? 'active': '' ?>>
          <a href="#" data-dropdown="<?= $i ?>">
            <?= $d ?> <em class="fas fa-chevron-down"></em>
          </a>

          <!-- Mega Menu -->
          <?php if($i <= 7 && $i != 0) {?>
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
                    <div class="mega-menu menu-dropdown pos-relative">
                      <div class="dot">
                        <div class="dot-list"></div>
                      </div>
                      <a>ข้อมูลผู้บริหารเทคโนโลยีสารสนเทศระดับสูง</a>
                    </div>
                    <!-- Level 3 -->
                    <div class="mega-menu-level-3">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list style-02"></div>
                        </div>
                        <a href="#">ผู้บริหาร CIO</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list style-02"></div>
                        </div>
                        <a href="#">ผังการบริหารงานด้าน ICT</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list style-02"></div>
                        </div>
                        <a href="#">วิสัยทัศน์ด้านเทคโนโลยีสารสนเทศและการสื่อสาร</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list style-02"></div>
                        </div>
                        <a href="#">ปฏิทินกิจกรรมของ CIO</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list style-02"></div>
                        </div>
                        <a href="#">ข่าวสารจาก CIO</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list style-02"></div>
                        </div>
                        <a href="#">นโยบายด้านเทคโนโลยีสารสนเทศ</a>
                      </div>
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
                <div class="submenu-dropdown <?php if($i>2)echo 'anchor-right'; ?>">
                <div class="submenu-container">
                  <div class="submenu-wrapper">
                    <div class="submenu has-children">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">รัฐธรรมนูญ</a>
                        <?= $submenu ?>
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
                        <a href="#">ประกาศ กกต.</a>
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
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">คำวินิจฉัย กกต.</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ประกาศนายทะเบียนพรรคการเมือง</a>
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
                        <a href="#">ร่างกฎหมายและการรับฟังความคิดเห็น</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ประกาศรายชื่อกฎหมายและหน่วยงานที่รับผิดชอบ</a>
                      </div>
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
               <!-- บริการข้อมูล -->
              <?php } else if ($i === 4) {?>
                <div class="mega-menu-dropdown">
                  <div class="mega-menu-wrapper">
                    <div class="mega-menu-content">
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-01.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-01.svg" />
                        </div>
                        <a href="#">สถิติการเลือกตั้ง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-02.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-02.svg" />
                        </div>
                        <a href="#">ประกาศผลการเลือกตั้ง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-03.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-03.svg" />
                        </div>
                        <a href="#">ศูนย์กลางข้อมูลเปิดเกี่ยวกับการเลือกตั้ง</a>
                      </div>
                    </div>
                    <div class="mega-menu-content">
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-04.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-04.svg" />
                        </div>
                        <a href="#">ศูนย์รวมข้อมูลเพื่อติดต่อราชการ</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-05.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-05.svg" />
                        </div>
                        <a href="#">ข้อมูลพรรคการเมือง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-06.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-06.svg" />
                        </div>
                        <a href="#">ตรวจสอบข้อมูลสมาชิกพรรคการเมือง</a>
                      </div>
                    </div>
                    <div class="mega-menu-content">
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-07.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-07.svg" />
                        </div>
                        <a href="#">สื่อประชาสัมพันธ์</a>
                      </div>
                      <div class="mega-menu ">
                        <div class="icon xs">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-08.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-08.svg" />
                        </div>
                        <a href="#">คู่มือปฏิบัติงาน</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-09.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-09.svg" />
                        </div>
                        <a href="#">แบบฟอร์ม</a>
                      </div>
                    </div>
                    <div class="mega-menu-content">
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-10.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-10.svg" />
                        </div>
                        <a href="#">บริการสารสนเทศในหน่วยงาน</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-11.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-11.svg" />
                        </div>
                        <a href="#">KHOWLEDEG MANAGEMENT</a>
                      </div>
                      <div class="mega-menu">
                        <div class="icon">
                          <img class="inactive" src="public/assets/app/images/icon-svg/menu-black-12.svg" />
                          <img class="active" src="public/assets/app/images/icon-svg/menu-white-12.svg" />
                        </div>
                        <a href="#">เอกสารการศึกษาส่วนบุคคลหลักสูตร พตส.</a>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- หน่วยงาน -->
              <?php } else if ($i === 5) {?>
                <div class="mega-menu-dropdown">
                  <div class="mega-menu-wrapper">
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">สถาบันพัฒนาการเมืองและการเลือกตั้ง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์บริการเบิกจ่ายตรงสวัสดิการฯ</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 1</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 2</a>
                      </div>
                    </div>
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 3</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 4</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 5</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์ศึกษาประชาธิปไตย</a>
                      </div>
                    </div>
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">สำนักงาน กกต. จังหวัด</a>
                      </div>
                      <div class="mega-menu ">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ห้องสมุดอิเล็กทรอนิกส์</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">เครื่องลงคะแนนเลือกตั้ง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">สหกรณ์ออมทรัพย์ องค์กรอิสระ จำกัด</a>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- จัดซื้อ/จัดจ้าง -->
              <?php } else if ($i === 6) {?>
                <div class="mega-menu-dropdown">
                  <div class="mega-menu-wrapper">
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">แผน/ผลการจัดซื้อจัดจ้างรายเดือนรายปี</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">การเปิดเผยราคากลาง</a>
                      </div>
                    </div>
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ข่าวประกวดราคา/สอบราคา</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ผลการเสนอราคา/ประกวดราคา</a>
                      </div>
                    </div>
                  </div>
                </div>
              <!-- ติดต่อ -->
              <?php } else if ($i === 7) {?>
                <div class="mega-menu-dropdown">
                  <div class="mega-menu-wrapper">
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ติดต่อสำนักงาน</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">คำถามที่พบบ่อย (FAQ)</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">กระดานถามตอบ</a>
                      </div>
                    </div>
                    <div class="mega-menu-content size-02">
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ตอบข้อซักถามพรรคการเมือง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์รับเรื่องราวร้องทุกข์ คณะกรรมการการเลือกตั้ง</a>
                      </div>
                      <div class="mega-menu">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">แจ้งเบาะแสทุจริตการเลือกตั้ง</a>
                      </div>
                    </div>
                  </div>
                </div>
            <?php }?>
         <?php } ?>

          <!-- Dropdown Menu -->
      
          <?php //if($i > 4 && $i <= 7){?>
            <?php //if($i === 5) {?>
              <!-- <div class="submenu-dropdown <?php //if($i>2)echo 'anchor-right'; ?>">
                <div class="submenu-container">
                  <div class="submenu-wrapper">
                    <div class="submenu has-children">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">สถาบันพัฒนาการเมืองและการเลือกตั้ง</a>
                        <//?= //$submenu ?>
                      </div>
                    
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์บริการเบิกจ่ายตรงสวัสดิการฯ</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 1</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 2</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 3</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 4</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์การเรียนรู้ฯที่ 5</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์ศึกษาประชาธิปไตย</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">สำนักงาน กกต. จังหวัด</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ห้องสมุดอิเล็กทรอนิกส์</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">เครื่องลงคะแนนเลือกตั้ง</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">สหกรณ์ออมทรัพย์ องค์กรอิสระ จำกัด</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            <?php //} else if ($i === 6)  {?>
              <!-- <div class="submenu-dropdown <?php //if($i>2)echo 'anchor-right'; ?>">
                <div class="submenu-container">
                  <div class="submenu-wrapper">
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">แผน/ผลการจัดซื้อจัดจ้างรายเดือนรายปี</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">การเปิดเผยราคากลาง</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ข่าวประกวดราคา/สอบราคา</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ผลการเสนอราคา/ประกวดราคา</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            <?php // } else if ($i === 7) {?>
              <!-- <div class="submenu-dropdown <?php //if($i>2)echo 'anchor-right'; ?>">
                <div class="submenu-container">
                  <div class="submenu-wrapper">
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ติดต่อสำนักงาน</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">คำถามที่พบบ่อย (FAQ)</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">กระดานถามตอบ</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ตอบข้อซักถามพรรคการเมือง</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">ศูนย์รับเรื่องราวร้องทุกข์ คณะกรรมการการเลือกตั้ง</a>
                      </div>
                    </div>
                    <div class="submenu">
                      <div class="wrapper">
                        <div class="dot">
                          <div class="dot-list"></div>
                        </div>
                        <a href="#">แจ้งเบาะแสทุจริตการเลือกตั้ง</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div> -->
            <?php //} ?>
          <?php //} ?>
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
