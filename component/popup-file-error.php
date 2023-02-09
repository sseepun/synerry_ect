<div class="popup-container" data-popup="99">
  <div class="wrapper">
    <div class="close-filter btn-popup-toggle" data-popup="99"></div>
    <div class="popup-box">
      <div class="popup-header">
        <h6 class="h4 lg fw-600">แจ้งไฟล์เสีย</h6>
        <a class="close-icon btn-popup-toggle" data-popup="99" href="#">
          <em class="fa-sharp fa-solid fa-xmark"></em>
        </a>
      </div>
      <div class="box-body pos-relative">
        <form id="form-contact" action="" method="POST">
          <div class="gallery-grids">
            <div class="grid sm-50">
              <label class="p lg">ชื่อผู้แจ้ง <span class="color-danger">*</span></label>
              <div class="ui input">
                <input type="text" name="firstname" required />
              </div>
            </div>
            <div class="grid sm-50">
              <label class="p lg">นามสกุลผู้แจ้ง <span class="color-danger">*</span></label>
              <div class="ui input">
                <input type="text" name="lastname" required />
              </div>
            </div>
            <div class="grid sm-100">
              <label class="p lg">อีเมลผู้แจ้ง <span class="color-danger">*</span></label>
              <div class="ui input">
                <input type="email" name="email" required />
              </div>
            </div>
            <div class="grid sm-100">
              <label class="p lg">ประเภทรายงาน <span class="color-danger">*</span></label>
              <div class="ui form">
                <div class="ui input">
                  <input type="text" name="lastname" disabled required />
                </div>
              </div>
            </div>
            <div class="grid sm-100">
              <label class="p lg">ประเภทรายงาน <span class="color-danger">*</span></label>
              <div class="ui form">
                <div class="ui input">
                  <input type="text" name="lastname" disabled required />
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex jc-center mt-5">
            <div class="capcha-container">
              <img class="img" src="public/assets/app/images/content/captcha.jpg" alt="Capcha Image">
            </div> 
          </div>
          <div class="btns jc-center text-center mt-4">
            <button type="reset" class="btn btn-action btn-17 btn-round btn-mw ml-1 mr-1">
              ยกเลิก
            </button>
            <button type="submit" class="btn btn-action btn-16 btn-round btn-mw ml-1 mr-1">
              ส่งข้อความ
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
