<section class="ourprojects" id="opp">
  <h2 class="client__header">Наши <span class="client__header client__header--yellow">проекты</span></h2>
  <div class="projects__gallery">
    <?php
    // The Query
    $args = array(
      'category_name' => 'projects',
    );
    $the_query = new WP_Query( $args );
     
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
    ?>
      <div class="projects__holder">
    <a href="<?php the_permalink(); ?>">
        <div class="lowcarousel__hover lowcarousel__hover--gallery">
          <h3 class="hover__header hover__header--gallery">
            <?php the_title(); ?>
          </h3>
          <p class="hover__text hover__text--gallery"><? echo get_field( "area" ); ?> м<sup>2</sup></p>
        </div>
        <?php the_post_thumbnail('full', array('class'=>'projects__image') ); ?>
        <a href="<?php the_permalink(); ?>" class="img__text img__text--1">Просмотр</a>
      </a>
       </div>
    <?php
        }
    } else {
      echo '<p>no posts found</p>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
    <?
/*
 * Old version - Fancybox Gallery
 *

    if (get_field('job_job')) :
    foreach (get_field('job_job') as $key1 => $val) :
      ?>
      <div class="projects__holder">
        <div class="lowcarousel__hover lowcarousel__hover--gallery">
          <h3 class="hover__header hover__header--gallery"><?=$val['title'];?></h3>
          <p class="hover__text hover__text--gallery"><?=$val['kv'];?></p>
        </div>

        <img src="<?=$val['job_main_img'];?>" alt="1" class="projects__image">
        <a data-fancybox="gallery-<?=$key1;?>" data-src="#modal<?=$key1;?>" href="javascript:;" class="img__text img__text--1">Просмотр</a>
        <div class="modal-window modal-window--img" id="modal<?=$key1;?>" style="display: none; padding: 0;">
          <img class="gallery__img" src="<?=$val['jobs_img'][0]['img'];?>" alt="0">
        </div>
        <?
        if ($val['jobs_img']) :
          foreach (array_slice($val['jobs_img'], 1) as $key => $img) :
          ?>
            <div data-fancybox="gallery-<?=$key1;?>" class="modal-window modal-window--img" id="modal<?=$key1;?>" style="display: none; padding: 0;">
              <img class="gallery__img" src="<?=$img['img'];?>" alt="<?=$key+1;?>">
            </div>
          <?
          endforeach;
        endif;
        ?>
        </div>
      <?
      endforeach;
    endif;
 */
    ?>
  </div>
</section>
