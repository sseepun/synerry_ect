<nav class="footer-single-page <?= !empty($footerStyle)? $footerStyle: '' ?>">
  <div class="social-list">
    <span class="title fw-500 mr-1">แบ่งปัน:</span>
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
      <div id="btnLinkSingle" class="icon cursor-pointer">
        <em class="fa-solid fa-link"></em>
      </div>
      <div id="toolTipSingle" class="tooltip">
        <p>คัดลอก url สำเร็จ</p>
      </div>
    </div>
  </div>
</nav>

<script>
    let btnSingle = document.querySelector("#btnLinkSingle")
    let toolTipSingle = document.querySelector('#toolTipSingle')

    btnSingle.addEventListener("click", () => {
      toolTipSingle.style.opacity = '1'
      setTimeout(function(){
        toolTipSingle.style.opacity = '0'
      }, 1200);
    });
</script>