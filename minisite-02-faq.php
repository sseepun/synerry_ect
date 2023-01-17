<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'คำถามที่พบบ่อย' ],
    ];
    $breadcrumbTitle = 'คำถามที่พบบ่อย';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/19.jpg';
    include('component/breadcrumb-style-02.php');
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box style-02 w-full">
        <div class="ss-box-shadow md"></div>
        <div class="body">
          <div class="ss-title">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              คำถามที่พบบ่อย
            </h3>
          </div>
          <div class="faq-07 mt-3 pt-2 pb-1" data-aos="fade-up" data-aos-delay="300" >
            <?php for($i=0; $i<10; $i++){?>
              <div class="faq <?php if($i==0)echo 'active'; ?>">
                <div class="question box-shadow style-02">
                  <h3 class="ftag"><?php echo $i+1 ?></h3>
                  <h6 class="title p lg fw-400">
                    การเลือกตั้งผู้ว่ากรุงเทพมหานครในวันที่ 22 พค.นี้ จะมีการจัดการเลือกตั้งล่วงหน้าหรือไม่ เนื่องจากจะเดินทางไปต่างจังหวัดและคง
                  </h6>
                  <div class="arrow">
                    <div class="wrapper">
                      <em class="fa-solid fa-minus"></em>
                    </div>
                  </div>
                  <div class="answer-wrapper">
                    <img src="public/assets/app/images/icon/13.png" alt="">
                    <p class="sm">คำตอบ</p>
                  </div>
                </div>
                <div class="answer" <?php if($i==0)echo 'style="display:block;"'; ?>>
                  <div class="content">
                    <div class="wrapper">
                      <div class="content-left">
                        <p class="h5 fw-600">คำตอบ</p>
                      </div>
                      <div class="content-right">
                        <div class="img-container">
                          <div class="ss-img">
                            <div class="img-bg" style="background-image:url('public/assets/app/images/content/36.jpg');"></div>
                          </div>
                        </div>
                        <div class="text-container">
                          <p class="fw-400">
                            การเลือกตั้งสมาชิกสภากรุงเทพมหานครและผู้ว่าราชกรุงเทพมหานคร เป็นการเลือกตั้งในระดับท้องถิ่น 
                            ซึ่งไม่มีการจัดให้ลงคะแนนเลือกตั้งล่วงหน้า หากท่านมีกิจธุระไม่สามารถไปใช้สิทธิในวันเลือกตั้งได้ 
                            ให้แจ้งเหตุอันอาจไม่ไปใช้สิทธิเลือกตั้งต่อนายทะเบียนท้องถิ่นด้วยตนเอง หรือส่งทางไปรษณีย์ 
                            หรือแจ้งทางสื่ออิเล็กทรอนิกส์ ทั้งนี้ สามารถศึกษารายละเอียดเพิ่มเติมได้ที่ 
                            <a class="p sm color-02 fw-400" href="#">https://www.ect.go.th/ect_th/news_page.php?nid=15071</a>
                          </p>
                        </div>
                        <div class="scroll-x-wrapper mt-3" data-simplebar>
                      <table class="table table-download" data-aos="fade-up" data-aos-delay="450">
                        <tbody>
                          <?php
                            foreach([
                              'pdf', 'pdf'
                            ] as $k){
                          ?>
                            <tr class="box-shadow style-02 mb-2">
                              <td>
                                <div class="download-card style-02">
                                  <img src="public/assets/app/images/file/pdf.png" alt="Image File" />
                                </div>
                              </td>
                              <td class="title-container" style="min-width:450px;">
                                <a class="fw-600 h-color-t" href="#">
                                  รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565
                                </a>
                                <div class="text-footer">
                                  <div class="wrapper">
                                    <div class="icon">
                                      <em class="fa-solid fa-circle-exclamation mr-1"></em>
                                      <p class="sm color-black color-black-theme fw-400">แจ้งไฟล์เสีย</p>
                                    </div>
                                  </div>
                                </div>
                              </td>
                              <td class="arrow-container" style="min-width:100px;">
                                <div class="d-flex ai-center jc-center fw-wrap">
                                  <a class="btn btn-action-style-02 btn-02" href="#">
                                    <em class="fa-solid fa-arrow-down"></em>
                                  </a>
                                </div>
                                <p class="xs text-center color-02 color-black-theme fw-400 mt-1">ดาวน์โหลด</p>
                              </td>
                            </tr>
                          <?php }?>
                        </tbody>
                      </table>
                    </div>  
                      </div>
                    </div>
                   
                  </div>
                </div>
              </div>
            <?php }?>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <div class="section-padding">
    <div class="container">
      <div class="mt-6 pt-4">
        <?php
          $listFooter = ['total', 'paginate', 'pp'];
          include('component/list-footer.php');
        ?>
      </div>
    </div>
  </div>



  

  <?php include_once('include/footer-02.php'); ?>
  <?php include_once('include/script.php'); ?>

  </script>
</body>
</html>