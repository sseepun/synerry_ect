<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'สมัครรับข่าวสาร' ],
    ];
    $breadcrumbTitle = 'สมัครรับข่าวสาร';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/06.jpg';
    include('component/breadcrumb.php');
  ?>

  <section class="section-padding section-08">
    <div class="pattern">
      <div class="wrapper">
        <img src="public/assets/app/images/pattern/01.png" alt="Hero">
      </div>
    </div>
    <div class="container">
      <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
        แบบฟอร์มสมัครรับข่าวสาร
      </h3>
      <div class="ss-box m-unset xxl" data-aos="fade-up" data-aos-delay="150">
        <form action="" class="mt-5">
          <div class="form-group">
            <label>
              <span class="p sm fw-400">กรุณากรอกอีเมลที่ต้องการรับข่าวสาร</span>
            </label>
            <input class="style-02 mt-1" type="text" placeholder="อีเมล *">
            <p class="sm fw-400 mt-3">กรุณาเลือกประเภทของข่าวสารที่คุณมีความสนใจในการติดตาม</p>
            <fieldset class="mt-2">
              <label class="form-check ai-center form-check-container-02">
                <input type="checkbox" onclick="allChecked()" class="form-check-input" id="checkAll"/>
                <span class="checkmark"></span>
                <div>
                  <p class="fw-400">เลือกทั้งหมด</p>
                </div>
              </label>
              <div class="grids">
                <div class="grid sm-50 mt-3">
                  <label class="form-check form-check-container" id="check_01">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_1"/>
                    <span class="checkmark"></span>
                    <div>
                      <p class="color-02 fw-600">ข่าวประชาสัมพันธ์</p>
                      <p class="xs fw-400">ติดตามข่าวความเคลื่อนต่างๆ การเลือกตั้ง</p>
                    </div>
                  </label>
                </div>
                <div class="grid sm-50 mt-3">
                  <label class="form-check form-check-container" id="check_02">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_2"/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">คลังภาพ</label>
                      <p class="xs fw-400">กกต. พร้อมให้ข้อมูลที่เป็นประโยชน์ด้านการเลือกตั้งเพื่อประชาชน</p>
                    </div>
                  </label>
                </div>
                <div class="grid sm-50 mt-3">
                  <label class="form-check form-check-container" id="check_03">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_3"/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">วิดีโอ</label>
                      <p class="xs fw-400">อัพเดทสื่อมัลติมิเดียเพื่อประชาชน</p>
                    </div>
                  </label>
                </div>
                <div class="grid sm-50 mt-3">
                  <label class="form-check form-check-container" id="check_04">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_4"/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">หนังสืออิเล็กทรอนิกส์</label>
                      <p class="xs fw-400">คลังความรู้ ในรูปแบบอีบุ๊ค พร้อมกับความรู้ใหม่ๆ</p>
                    </div>
                  </label>
                </div>
                <div class="grid sm-50 mt-3">
                  <label class="form-check form-check-container" id="check_05">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_5"/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">เอกสารดาวโหลดน์</label>
                      <p class="xs fw-400">อำนวยความสะดวก เอกสารทางการต่างๆที่เกี่ยวข้องกับหน่วยงาน</p>
                    </div>
                  </label>
                </div>
                <div class="grid sm-50 mt-3">
                  <label class="form-check form-check-container" id="check_06">
                    <input type="checkbox" onclick="checkedFunction()" class="form-check-input" id="c_6"/>
                    <span class="checkmark"></span>
                    <div>
                      <label class="color-02 fw-600">ประกาศรับสมัครงาน</label>
                      <p class="xs fw-400">ติดตาม และอัพเดท ตำแหน่งงานต่างๆ ของหน่วยงาน กกต.</p>
                    </div>
                  </label>
                </div>
              </div>
            </fieldset>
          </div>
          <div class="captcha-container mt-5">
            <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="">
            <div class="btns ml-4">
              <div href="#" class="btn btn-action btn-03">
                ยกเลิกรับข่าวสาร
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </section>

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  <script>
    function checkedFunction() {
      var element01 = document.getElementById("check_01");
      var c1 = document.getElementById("c_1").checked;
      var element02 = document.getElementById("check_02");
      var c2 = document.getElementById("c_2").checked;
      var element03 = document.getElementById("check_03");
      var c3 = document.getElementById("c_3").checked;
      var element04 = document.getElementById("check_04");
      var c4 = document.getElementById("c_4").checked;
      var element05 = document.getElementById("check_05");
      var c5 = document.getElementById("c_5").checked;
      var element06 = document.getElementById("check_06");
      var c6 = document.getElementById("c_6").checked;

      if(c1 === true){element01.classList.add("active");}else{element01.classList.remove("active");}
      if(c2 === true){element02.classList.add("active");}else{element02.classList.remove("active");}
      if(c3 === true){element03.classList.add("active");}else{element03.classList.remove("active");}
      if(c4 === true){element04.classList.add("active");}else{element04.classList.remove("active");}
      if(c5 === true){element05.classList.add("active");}else{element05.classList.remove("active");}
      if(c6 === true){element06.classList.add("active");}else{element06.classList.remove("active");}
    }

    function allChecked(){
      var element = document.getElementById("checkAll").checked;

      var element01 = document.getElementById("check_01");
      var c1 = document.getElementById("c_1");

      var element02 = document.getElementById("check_02");
      var c2 = document.getElementById("c_2");

      var element03 = document.getElementById("check_03");
      var c3 = document.getElementById("c_3");

      var element04 = document.getElementById("check_04");
      var c4 = document.getElementById("c_4");

      var element05 = document.getElementById("check_05");
      var c5 = document.getElementById("c_5");

      var element06 = document.getElementById("check_06");
      var c6 = document.getElementById("c_6");

      if(element01){
        if(element === true){
          element01.classList.add("active");
          c1.checked = true;
        }else{
          element01.classList.remove("active");
          c1.checked = false;
        }
      }
      
      if(element02){
        if(element === true){
          element02.classList.add("active");
          c2.checked = true;
        }else{
          element02.classList.remove("active");
          c2.checked = false;
        }
      }

      if(element03){
        if(element === true){
          element03.classList.add("active");
          c3.checked = true;
        }else{
          element03.classList.remove("active");
          c3.checked = false;
        }
      }

      if(element04){
        if(element === true){
          element04.classList.add("active");
          c4.checked = true;
        }else{
          element04.classList.remove("active");
          c4.checked = false;
        }
      }

      if(element05){
        if(element === true){
          element05.classList.add("active");
          c5.checked = true;
        }else{
          element05.classList.remove("active");
          c5.checked = false;
        }
      }

      if(element06){
        if(element === true){
          element06.classList.add("active");
          c6.checked = true;
        }else{
          element06.classList.remove("active");
          c6.checked = false;
        }
      }
    }
</script>
</body>
</html>