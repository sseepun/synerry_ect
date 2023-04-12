<?php if(!empty($listFooter)){?>
  <div class="list-footer-02">
    <?php if(in_array('total', $listFooter)){?>
      <div class="option">
        <p class="color-gray fw-500">
          จำนวนหน้าทั้งหมด <span class="ml-1 color-02">400 รายการ</span>
        </p>
      </div>
    <?php }?>
    <?php if(in_array('paginate', $listFooter)){?>
      <div class="option">
        <a class="btn btn-action-style-07 mr-2" href="#">
          หน้าแรก
        </a>
        <div class="paginate style-02">
          <div class="arrow arrow-prev">
            <em class="fa-solid fa-chevron-left"></em>
          </div>
          <div class="pages">
            <a class="page active" href="#">01</a>
            <a class="page" href="#">02</a>
            <a class="page" href="#">03</a>
            <a class="page" href="#">04</a>
            <a class="page" href="#">05</a>
          </div>
          <div class="arrow arrow-next">
            <em class="fa-solid fa-chevron-right"></em>
          </div>
        </div>
        <a class="btn btn-action-style-07 ml-2" href="#">
          หน้าสุดท้าย
        </a>
      </div>
    <?php }?>
    <?php if(in_array('pp', $listFooter)){?>
      <div class="option">
        <p class="color-gray fw-500">แสดงผลต่อหน้า</p>
        <div class="custom-select ml-1">
          <select class="ui selection dropdown style-02 ml-1">
            <option value="0">12</option>
            <option value="1">12</option>
            <option value="2">24</option>
            <option value="3">36</option>
            <option value="4">48</option>
            <option value="5">60</option>
            <option value="6">72</option>
            <option value="7">84</option>
            <option value="8">96</option>
          </select>
          <div class="chev"><em class="fa-solid fa-chevron-down"></em></div>
        </div>
      </div>
    <?php }?>
  </div>
<?php }?>

<script>
  var x, i, j, l, ll, selElmnt, a, b, c;
  x = document.getElementsByClassName("custom-select");
  l = x.length;
  for (i = 0; i < l; i++) {
    selElmnt = x[i].getElementsByTagName("select")[0];
    ll = selElmnt.length;
    a = document.createElement("DIV");
    a.setAttribute("class", "select-selected");
    a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
    x[i].appendChild(a);
    b = document.createElement("DIV");
    b.setAttribute("class", "select-items select-hide");
    for (j = 1; j < ll; j++) {
      c = document.createElement("DIV");
      c.innerHTML = selElmnt.options[j].innerHTML;
      c.addEventListener("click", function(e) {
          var y, i, k, s, h, sl, yl;
          s = this.parentNode.parentNode.getElementsByTagName("select")[0];
          sl = s.length;
          h = this.parentNode.previousSibling;
          for (i = 0; i < sl; i++) {
            if (s.options[i].innerHTML == this.innerHTML) {
              s.selectedIndex = i;
              h.innerHTML = this.innerHTML;
              y = this.parentNode.getElementsByClassName("same-as-selected");
              yl = y.length;
              for (k = 0; k < yl; k++) {
                y[k].removeAttribute("class");
              }
              this.setAttribute("class", "same-as-selected");
              break;
            }
          }
          h.click();
      });
      b.appendChild(c);
    }
    x[i].appendChild(b);
    a.addEventListener("click", function(e) {
        e.stopPropagation();
        closeAllSelect(this);
        this.nextSibling.classList.toggle("select-hide");
        this.classList.toggle("select-arrow-active");
      });
  }
  function closeAllSelect(elmnt) {
    var x, y, i, xl, yl, arrNo = [];
    x = document.getElementsByClassName("select-items");
    y = document.getElementsByClassName("select-selected");
    xl = x.length;
    yl = y.length;
    for (i = 0; i < yl; i++) {
      if (elmnt == y[i]) {
        arrNo.push(i)
      } else {
        y[i].classList.remove("select-arrow-active");
      }
    }
    for (i = 0; i < xl; i++) {
      if (arrNo.indexOf(i)) {
        x[i].classList.add("select-hide");
      }
    }
  }
  document.addEventListener("click", closeAllSelect);
</script>

