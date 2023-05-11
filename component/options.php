<!-- Global Search Container -->
<div class="overlay-slide-down global-search-container use-gsap">
  <div class="wrapper">
    <div class="hamburger active global-search-toggle">
      <div></div><div></div><div></div>
    </div>
    <div class="container">
      <form action="./" method="GET">
        <h2 class="h4 fw-500 text-center color-white mb-4">
          คุณกำลังมองหาอะไร?
        </h2>
        <div class="input-container">
          <input type="text" name="keywords" placeholder="ค้นหา" required>
          <button type="submit">
            <i class="fas fa-search"></i>
          </button>
        </div>
      </form>
    </div>
  </div>
</div>

<!-- Accessibility -->
<nav class="side-panel <?= !empty($sidePanelStyle)? $sidePanelStyle: '' ?> access-panel">
  <div class="wrapper">
    <div class="panel">
      <div class="panel-row">
        <div class="icon">
          <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400">
            <path class="st0" d="M193.2,79.7c-9.1,2.5-16.5,10-19,19.2c-0.9,3.3-0.9,9.9,0,13.2c2.5,9.3,9.9,16.7,19.2,19.2
              c3.3,0.9,9.9,0.9,13.2,0c9.3-2.5,16.7-9.9,19.2-19.2c0.4-1.4,0.7-4.4,0.7-6.6c0-2.2-0.3-5.2-0.7-6.6c-2.5-9.3-9.9-16.7-19.2-19.2
              C203.4,78.8,196.3,78.9,193.2,79.7 M109.7,132.7c-2.4,1-4.6,3.4-6.3,6.6c-1.2,2.3-1.5,3.6-1.7,6.7c-0.3,4.6,0.3,6.4,2.6,9.1
              c4.1,4.8,7.3,6.1,35.4,14.9c12.2,3.8,23.2,7.5,24.5,8.2c1.6,0.9,2.7,1.9,3.3,3.2c2.7,5.1,0.4,23-10.4,82.2
              c-4.3,23.4-7.7,43.4-7.7,44.5c0,4.7,2.9,9.2,7.4,11.4c2.1,1,3.5,1.3,6.9,1.5c5.1,0.2,7.6-0.6,10.7-3.4c3.7-3.4,4.7-6,7.2-19.6
              c7.4-39.7,14.7-66,18.2-66c3.5,0,10,22.9,18.2,64.3c2.9,14.8,4,17.9,7.1,21c2.6,2.6,4.9,3.5,9.3,3.7c4.7,0.2,8.2-0.7,11.1-2.9
              c2.5-1.9,4.6-5.6,5-8.7c0.2-1.7-1.7-12.6-7.8-45.5c-9-48.1-11.7-66-11.3-75.2c0.2-4.9,0.2-5.1,1.6-6.6c0.8-0.8,2.5-2,3.7-2.7
              c1.3-0.7,13-4.9,26-9.4c13-4.5,25.1-9,26.7-9.9c3.7-2,6.8-4.9,8.1-7.6c0.8-1.7,1-2.7,0.8-5.9c-0.4-8.4-5.5-14.5-12.1-14.5
              c-1.4,0-4.9,0.7-8.2,1.7c-8.3,2.4-25.2,6.5-34.9,8.4c-33.3,6.6-52.9,6.7-85.9,0c-11.9-2.4-27.4-6.1-35.4-8.5
              C115.8,131.8,112.4,131.5,109.7,132.7"></path>
              <g>
                <path class="st0" d="M200,400C89.7,400,0,310.3,0,200C0,89.7,89.7,0,200,0c110.3,0,200,89.7,200,200C400,310.3,310.3,400,200,400z
                  M200,19.3c-99.6,0-180.7,81.1-180.7,180.7S100.4,380.7,200,380.7S380.7,299.6,380.7,200S299.6,19.3,200,19.3z"></path>
              </g>
          </svg>
        </div>
        <div class="p fw-400">การช่วยการเข้าถึง</div>
      </div>
      <div class="panel-row">
        <div class="icon-width">
          <p class="fw-400 pr-2">ขนาดตัวอักษร</p>
        </div>
        <div class="options">
          <a class="option btn font-size-btn" data-size="14">
            <span class="fw-500" style="font-size:16px;">ก</span>
          </a>
          <a class="option btn font-size-btn active" data-size="16">
            <span class="fw-500" style="font-size:20px;">ก</span>
          </a>
          <a class="option btn font-size-btn" data-size="18">
            <span class="fw-500" style="font-size:24px;">ก</span>
          </a>
        </div>
      </div>
      <div class="panel-row">
        <div class="icon-width">
          <p class="fw-400 pr-2">การเว้นระยะห่าง</p>
        </div>
        <div class="options">
          <span class="option btn-lsp active cursor-pointer" data-lsp="0">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="50px" height="16px" style="transform:scale(.8)">
              <path fill-rule="evenodd" d="M48.697,8.710 L48.121,9.269 L41.498,15.696 L41.199,15.987 L40.906,15.691 L40.341,15.120 L40.048,14.824 L40.347,14.534 L45.857,9.187 L35.768,8.924 L35.356,8.913 L35.360,8.505 L35.368,7.706 L35.372,7.285 L35.798,7.296 L45.841,7.557 L40.474,2.133 L40.181,1.836 L40.480,1.546 L41.056,0.987 L41.355,0.697 L41.649,0.993 L48.138,7.553 L48.703,8.123 L48.996,8.419 L48.697,8.710 ZM30.405,7.104 L32.289,7.104 L32.289,8.970 L30.405,8.970 L30.405,7.104 ZM25.682,7.104 L27.566,7.104 L27.566,8.970 L25.682,8.970 L25.682,7.104 ZM20.959,7.104 L22.844,7.104 L22.844,8.970 L20.959,8.970 L20.959,7.104 ZM16.236,7.104 L18.121,7.104 L18.121,8.970 L16.236,8.970 L16.236,7.104 ZM13.636,8.271 L13.632,8.693 L13.206,8.682 L3.163,8.421 L8.530,13.845 L8.823,14.142 L8.524,14.432 L7.948,14.991 L7.649,15.281 L7.356,14.985 L0.866,8.425 L0.302,7.855 L0.009,7.558 L0.308,7.268 L0.884,6.709 L7.506,0.281 L7.805,-0.009 L8.099,0.287 L8.663,0.857 L8.956,1.154 L8.657,1.444 L3.147,6.791 L13.237,7.054 L13.649,7.065 L13.644,7.473 L13.636,8.271 Z"></path>
            </svg>
          </span>
          <span class="option btn-lsp cursor-pointer" data-lsp="1">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="64px" height="18px" style="transform:scale(.8)">
              <path fill-rule="evenodd" d="M56.013,9.163 L55.440,9.722 L48.846,16.149 L48.548,16.440 L48.256,16.143 L47.694,15.574 L47.403,15.277 L47.700,14.987 L53.186,9.639 L43.140,9.377 L42.730,9.366 L42.734,8.958 L42.743,8.160 L42.747,7.738 L43.171,7.749 L53.170,8.010 L47.827,2.586 L47.535,2.289 L47.833,1.999 L48.406,1.441 L48.704,1.150 L48.996,1.447 L55.457,8.006 L56.019,8.576 L56.311,8.873 L56.013,9.163 ZM34.801,7.556 L36.677,7.556 L36.677,9.423 L34.801,9.423 L34.801,7.556 ZM27.748,7.556 L29.624,7.556 L29.624,9.423 L27.748,9.423 L27.748,7.556 ZM20.694,7.556 L22.570,7.556 L22.570,9.423 L20.694,9.423 L20.694,7.556 ZM14.105,8.724 L14.101,9.146 L13.677,9.135 L3.678,8.873 L9.021,14.298 L9.313,14.594 L9.015,14.884 L8.442,15.443 L8.144,15.734 L7.852,15.438 L1.391,8.878 L0.829,8.308 L0.537,8.011 L0.835,7.721 L1.408,7.162 L8.002,0.734 L8.300,0.444 L8.592,0.740 L9.154,1.311 L9.445,1.607 L9.148,1.897 L3.662,7.245 L13.707,7.507 L14.118,7.517 L14.113,7.926 L14.105,8.724 Z"></path>
            </svg>
          </span>
        </div>
      </div>
      <div class="panel-row">
        <div class="icon-width">
          <p class="fw-400 pr-2">ความตัดกันของสี</p>
        </div>
        <div class="options">
          <div class="option-row theme-btn cursor-pointer theme-btn-0 active" data-theme="0">
            <div class="icon">
              <img src="https://www.dpt.go.th/assets/app/images/misc/color-0.png" alt="Theme">
            </div>
            <p><span class="fw-400">สีปกติ</span></p>
          </div>
          <div class="option-row theme-btn cursor-pointer theme-btn-1" data-theme="1">
            <div class="icon">
              <img src="https://www.dpt.go.th/assets/app/images/misc/color-1.png" alt="Theme">
            </div>
            <p><span class="fw-400">ขาว-ดำ</span></p>
          </div>
          <div class="option-row theme-btn cursor-pointer theme-btn-2" data-theme="2">
            <div class="icon">
              <img src="https://www.dpt.go.th/assets/app/images/misc/color-2.png" alt="Theme">
            </div>
            <p><span class="fw-400">ดำ-เหลือง</span></p>
          </div>
        </div>
      </div>
    </div>
    <div class="icon main cursor-pointer">
      <svg class="icon-inactive" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 400 400">
        <path class="st0" d="M193.2,79.7c-9.1,2.5-16.5,10-19,19.2c-0.9,3.3-0.9,9.9,0,13.2c2.5,9.3,9.9,16.7,19.2,19.2
          c3.3,0.9,9.9,0.9,13.2,0c9.3-2.5,16.7-9.9,19.2-19.2c0.4-1.4,0.7-4.4,0.7-6.6c0-2.2-0.3-5.2-0.7-6.6c-2.5-9.3-9.9-16.7-19.2-19.2
          C203.4,78.8,196.3,78.9,193.2,79.7 M109.7,132.7c-2.4,1-4.6,3.4-6.3,6.6c-1.2,2.3-1.5,3.6-1.7,6.7c-0.3,4.6,0.3,6.4,2.6,9.1
          c4.1,4.8,7.3,6.1,35.4,14.9c12.2,3.8,23.2,7.5,24.5,8.2c1.6,0.9,2.7,1.9,3.3,3.2c2.7,5.1,0.4,23-10.4,82.2
          c-4.3,23.4-7.7,43.4-7.7,44.5c0,4.7,2.9,9.2,7.4,11.4c2.1,1,3.5,1.3,6.9,1.5c5.1,0.2,7.6-0.6,10.7-3.4c3.7-3.4,4.7-6,7.2-19.6
          c7.4-39.7,14.7-66,18.2-66c3.5,0,10,22.9,18.2,64.3c2.9,14.8,4,17.9,7.1,21c2.6,2.6,4.9,3.5,9.3,3.7c4.7,0.2,8.2-0.7,11.1-2.9
          c2.5-1.9,4.6-5.6,5-8.7c0.2-1.7-1.7-12.6-7.8-45.5c-9-48.1-11.7-66-11.3-75.2c0.2-4.9,0.2-5.1,1.6-6.6c0.8-0.8,2.5-2,3.7-2.7
          c1.3-0.7,13-4.9,26-9.4c13-4.5,25.1-9,26.7-9.9c3.7-2,6.8-4.9,8.1-7.6c0.8-1.7,1-2.7,0.8-5.9c-0.4-8.4-5.5-14.5-12.1-14.5
          c-1.4,0-4.9,0.7-8.2,1.7c-8.3,2.4-25.2,6.5-34.9,8.4c-33.3,6.6-52.9,6.7-85.9,0c-11.9-2.4-27.4-6.1-35.4-8.5
          C115.8,131.8,112.4,131.5,109.7,132.7"></path>
          <g>
            <path class="st0" d="M200,400C89.7,400,0,310.3,0,200C0,89.7,89.7,0,200,0c110.3,0,200,89.7,200,200C400,310.3,310.3,400,200,400z
              M200,19.3c-99.6,0-180.7,81.1-180.7,180.7S100.4,380.7,200,380.7S380.7,299.6,380.7,200S299.6,19.3,200,19.3z"></path>
          </g>
      </svg>
      <div class="icon-active">
        <div class="hamburger active">
          <div></div><div></div><div></div>
        </div>
      </div>
    </div>
  </div>
</nav>
<div class="access-filter"></div>

<!-- Back to Top -->
<a class="back-to-top style-01 active" href="#">
  <em class="fas fa-chevron-up"></em>
</a>
