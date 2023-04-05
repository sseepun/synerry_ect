<nav class="footer-single-page">
  <div class="social-list">
    <span class="fw-500 mr-1">แบ่งปัน:</span>
    <div class="d-inline-block">
      <a class="icon" href="#">
        <em class="fa-brands fa-facebook-f"></em>
      </a>
    </div>
    <div class="d-inline-block">
      <a class="icon" href="#">
        <em class="fa-brands fa-twitter"></em>
      </a>
    </div>
    <div class="d-inline-block">
      <a class="icon" href="#">
        <em class="fa-brands fa-line"></em>
      </a>
    </div>
    <div class="d-inline-block pos-relative">
      <div id="btnLink" class="icon cursor-pointer">
        <em class="fa-solid fa-link"></em>
      </div>
      <div id="toolTip" class="tooltip">
        <p>คัดลอก url สำเร็จ</p>
      </div>
    </div>
  </div>
</nav>

<script>
    let btn = document.querySelector("#btnLink")
    let toolTip = document.querySelector('#toolTip')

    btn.addEventListener("click", () => {
      toolTip.style.opacity = '1'
      setTimeout(function(){
        toolTip.style.opacity = '0'
      }, 1200);
    });
</script>