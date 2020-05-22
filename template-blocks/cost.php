<section class="cost__bg">
  <div class="cost" id="cost">
    <h2 class="client__header client__header--cost"><?php echo get_field('price_title'); ?></h2>
    <div class="cost-slider owl-carousel owl-theme owl-theme--low">
      <?
      if (get_field('price_styles')) :
        foreach (get_field('price_styles') as $price) : ?>
          <div class="carousel__photo carousel__photo--low carousel__photo--1">
            <img class="owl-lazy" data-src="<?=$price['style_img'];?>" alt="1">
            <div class="lowcarousel__hover lowcarousel__hover--1">
              <p class="hover__text"><?=$price['style_name'];?></p>
              <h3 class="hover__header"><?=$price['style_title'];?></h3>
              <p class="hover__text"><?=$price['style_size'];?></p>
            </div>
          </div>
      <?php
        endforeach;
      endif;
      ?>
    </div>
  </div>
</section>
