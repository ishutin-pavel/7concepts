<section class="ourprojects" id="opp">
  <h2 class="client__header">Наши <span class="client__header client__header--yellow">проекты</span></h2>
  <div class="projects__gallery">
    <?php
    // The Query
    $args = array(
      'category_name' => 'projects',
      'order'   => 'ASC',
      'orderby' => 'date',
      'posts_per_page' => 12
    );
    $the_query = new WP_Query( $args );
     
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
    ?>
      <div class="projects__holder">
          <a class="project" href="<?php the_permalink(); ?>">
            <div class="lowcarousel__hover lowcarousel__hover--gallery">
              <h3 class="hover__header hover__header--gallery"><?php the_title(); ?></h3>
                <?php
                $area = get_field( "area" );
                if( $area ) {
                echo $value;
                     echo "<p class='hover__text hover__text--gallery'>$area м<sup>2</sup></p>";
                } else {}
                ?>
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
  </div>

  <a href="#" class="show-projects">
      <div class="body__button body__button--client">Показать ещё</div>
  </a>

</section>
