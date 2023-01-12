
<?php if(!empty($breadcrumb)){?>
  <section class="breadcrumb-01">
    <div class="top <?php if(!empty($breadcrumbClass))echo $breadcrumbClass; ?>">
      <?php if(!empty($breadcrumbBg)){?>
          <div class="img-bg" style="background-image:url('<?= $breadcrumbBg ?>');"></div>
      <?php }?>
      <div class="container">
        <h6 class="title h2 color-black-theme fw-600 mt-4" data-aos="fade-in" data-aos-delay="150">
          <?= $breadcrumbTitle ?>
        </h6>
      </div>
    </div>
    <div class="bottom">
      <div class="container">
        <div class="wrapper" data-aos="fade-in" data-aos-delay="0">
          <?php foreach($breadcrumb as $b){?>
            <a class="p sm fw-400" href="<?= $b['url'] ?>">
                <?= $b['display'] ?>
            </a>
          <?php }?>
        </div>
      </div>
    </div>
  </section>
<?php }?>
