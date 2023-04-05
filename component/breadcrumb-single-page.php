<?php if(!empty($breadcrumb)){?>
  <div class="container mt-0 pt-0">
    <div class="breadcrumb-03">
        <div class="wrapper" data-aos="fade-in" data-aos-delay="0">
          <?php foreach($breadcrumb as $b){?>
            <a class="p sm fw-400" href="<?= $b['url'] ?>">
                <?= $b['display'] ?>
            </a>
          <?php }?>
        </div>
    </div>
  </div>
<?php }?>