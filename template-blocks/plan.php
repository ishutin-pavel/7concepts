<section class="realprojects" id="simpleproject">
  <h2 class="client__header client__header--real">
    <?=get_field('project_simple_title');?>
  </h2>
  <div class="container">
    <?//=do_shortcode( get_field('project_simple') );?>
    <?php 
      $images = get_field('plan-slider__data');
      if( $images ): ?>
        <div class="owl-carousel owl-theme plan-slider">
            <?php foreach( $images as $image ): ?>
              <div class="plan-slider__slide">
                <img class="plan-slider__img owl-lazy" data-src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
              </div>
            <?php endforeach; ?>
        </div>
    <?php endif; ?>
  </div>
</section>
