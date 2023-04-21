<!DOCTYPE html>
<html lang="th">
<head>
  <?php include_once('include/header.php'); ?>
  <?php include_once('include/style.php'); ?>
</head>
<body class="loading">
  <?php include_once('component/page-loader.php'); ?>
  <?php include_once('include/topnav-style-02.php'); ?>
  <?php
    $breadcrumb = [
      [ 'url' => '#', 'display' => 'หน้าหลัก' ],
      [ 'url' => '#', 'display' => 'คำวินิจฉัยคณะกรรมการการเลือกตั้ง' ],
    ];
    $breadcrumbTitle = 'คำวินิจฉัยคณะกรรมการการเลือกตั้ง';
    $breadcrumbBg = 'public/assets/app/images/breadcrumb/35.jpg';
    $sectionOptions = ['option-02'];
    $formContainer = true;
    include('component/breadcrumb-style-02.php');
  ?>

  <?php 
    $content = [
      [
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/84.jpg'
      ],[
        'title' => 'เลขาธิการคณะกรรมการการเลือกตั้ง ให้การต้อนรับและพบปะพูดคุยกับผู้เข้ารับ
        การศึกษาอบรมหลักสูตรการพัฒนาการเมืองและการเลือกตั้งระดับสูง รุ่นที่ 13',
        'image' => 'public/assets/app/images/content/135.jpg'
      ]
    ]
  ?>

  <section class="section-14">
    <div class="img-bg" style="background-image:url('public/assets/app/images/bg/22.jpg');"></div>
    <div class="container">
      <div class="ss-box bg-white-theme style-02 w-full">
        <div class="ss-box-shadow xl"></div>
        <div class="body">
          <div class="ss-title d-flex ai-center fw-wrap jc-space-between">
            <h3 class="fw-500" data-aos="fade-up" data-aos-delay="0">
              กฎหมายการเลือกตั้ง
            </h3>
            <a href="#" class="btn width-auto btn-action btn-25">
              ดาวน์โหลดทั้งหมด
            </a>
          </div>
          <div class="scroll-x-wrapper style-02 mt-4" data-simplebar>
            <table class="table table-download style-06" data-aos="fade-up" data-aos-delay="600">
              <tbody>
                <?php
                  foreach([
                    'pdf', 'pdf', 'pdf', 'pdf', 'pdf', 'pdf',
                    'pdf', 'pdf', 'pdf', 'pdf', 'pdf', 'pdf',
                  ] as $k){
                ?>
                  <tr class="border box-shadow style-02 mb-2">
                    <td class="download-card">
                      <div>
                        <img src="public/assets/app/images/file/<?= $k ?>.png" alt="Image File" />
                      </div>
                    </td>
                    <td class="title-container" style="min-width:650px;">
                      <div>
                        <p class="sm color-04 fw-600">มาตรา ม.120 พรบ.เลือกตั้ง</p>
                        <a class="p title fw-600" href="#">
                          รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565 
                          รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565
                          รายงานการจัดซื้อจัดจ้างส่วนภูมิภาคประจำเดือนมกราคม 2565
                        </a>
                      </div>
                      <div class="text-footer">
                        <div class="wrapper">
                          <div class="icon">
                            <em class="fa-regular fa-calendar"></em>
                            <p class="xs fw-400 ml-1">29 พฤศจิกายน</p>
                          </div>
                          <div class="icon ml-3">
                            <em class="fa-regular fa-floppy-disk"></em>
                            <p class="xs fw-400 ml-1">ดาวน์โหลด 125 ครั้ง</p>
                          </div>
                        </div>
                      </div>
                    </td>
                    <td class="button-container" style="min-width:170px;">
                      <div class="btns jc-end">
                        <div href="#" class="btn btn-white-theme width-auto btn-action btn-13">
                          ดาวน์โหลดไฟล์
                          <em class="fa-solid fa-arrow-down ml-1"></em>
                        </div>
                      </div>
                    </td>
                    <td class="warning-container" style="min-width:120px;">
                      <em class="fa-solid fa-triangle-exclamation"></em>
                      <a class="xs color-02 color-black-theme text-center fw-500 ml-1" href="#">แจ้งไฟล์เสีย</a>
                    </td>
                  </tr>
                <?php }?>
              </tbody>
            </table>
          </div>
        </div> 
      </div>
    </div>
  </section>

  <div class="container">
    <div class="mt-6 pt-4 mb-6">
      <?php
        $listFooter = ['total', 'paginate', 'pp'];
        $style = 'style-02';
        include('component/list-footer.php');
      ?>
    </div>
  </div>
  <?php include_once('include/footer-style-05.php'); ?>
  <?php include_once('include/script.php'); ?>
</body>
</html>