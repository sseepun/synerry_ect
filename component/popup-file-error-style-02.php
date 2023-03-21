<div class="popup-container style-02" data-popup="99">
  <div class="wrapper">
    <div class="close-filter btn-popup-toggle" data-popup="99"></div>
    <div class="popup-box">
      <div class="mark-container">
        <em class="fa-solid fa-check"></em>
      </div>
      <div class="box-body text-center">
        <?php if(in_array('fg-password', $listResult)) {?>
          <h6 class="h4 fw-400">สำเร็จ</h6>
          <p>ระบบได้ดำเนินการส่งรหัสผ่านของคุณเรียบร้อยแล้ว</p>
          <div class="btns mt-2">
            <div class="btn btn-popup-toggle btn-action btn-06 w-full" data-popup="99">
              <span>ตกลง</span><div class="sep"></div>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('re-password', $listResult)) {?>
          <h6 class="h4 fw-400">ตั้งรหัสผ่านใหม่สำเร็จ</h6>
          <p>ระบบได้ดำเนินการตั้งรหัสผ่านใหม่ของคุณเรียบร้อยแล้ว</p>
          <div class="btns mt-2">
            <a href="15-member-login.php" class="btn btn-action btn-06 w-full">
              <span>ตกลง</span><div class="sep"></div>
            </a>
          </div>
        <?php }?>
        <?php if(in_array('contact', $listResult) || in_array('rp-corruption', $listResult)) {?>
          <h6 class="h4 fw-400">ส่งแบบฟอร์มสำเร็จ</h6>
          <p>ระบบได้ดำเนินการส่งแบบฟอร์มของคุณเรียบร้อยแล้ว</p>
          <div class="btns mt-2">
            <div class="btn btn-popup-toggle btn-action btn-06 w-full" data-popup="99">
              <span>ตกลง</span><div class="sep"></div>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('enews-subscription', $listResult)) {?>
          <h6 class="h4 fw-400">ลงทะเบียนสำเร็จ</h6>
          <p>ระบบได้ดำเนินการสมัครรับข่าวสารของคุณเรียบร้อยแล้ว</p>
          <div class="btns mt-2">
            <div class="btn btn-popup-toggle btn-action btn-06 w-full" data-popup="99">
              <span>ตกลง</span><div class="sep"></div>
            </div>
          </div>
        <?php }?>
        <?php if(in_array('enews-cancel', $listResult)) {?>
          <h6 class="h4 fw-400">ยกเลิกสำเร็จ</h6>
          <p>ระบบได้ดำเนินการยกเลิกรับข่าวสารของคุณเรียบร้อยแล้ว</p>
          <div class="btns mt-2">
            <div class="btn btn-popup-toggle btn-action btn-06 w-full" data-popup="99">
              <span>ตกลง</span><div class="sep"></div>
            </div>
          </div>
        <?php }?>
      </div>
    </div>
  </div>
</div>

<!-- แบบฟอร์มกรณีลงทะเบียนไม่สำเร็จ -->
<!-- <div class="popup-container style-02" data-popup="99">
  <div class="wrapper">
    <div class="close-filter btn-popup-toggle" data-popup="99"></div>
    <div class="popup-box">
      <div class="mark-container">
        <em class="fa-solid fa-xmark"></em>
      </div>
      <div class="box-body text-center">
        <h6 class="h4 fw-400">ดำเนินการไม่สำเร็จ</h6>
        <p>กรุณาลองใหม่อีกครั้ง</p>
        <div class="btns mt-2">
          <div class="btn btn-popup-toggle btn-action btn-06 w-full" data-popup="99">
              <span>ตกลง</span><div class="sep"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div> -->
