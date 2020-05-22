<section id="blog" class="blog"  style="background: url('<?php echo get_field('consult_bg'); ?>'); background-size:cover; background-repeat: no-repeat;">
  <div class="container">
    <h2 class="client__header">Блог</h2>
    <?php
    // The Query
    $args = array(
      'category_name' => 'blog',
    );
    $the_query = new WP_Query( $args );
     
    // The Loop
    if ( $the_query->have_posts() ) {
        while ( $the_query->have_posts() ) {
            $the_query->the_post();
    ?>
        <p>
          <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
        </p>
    <?php
        }
    } else {
      echo '<p>no posts found</p>';
    }
    /* Restore original Post Data */
    wp_reset_postdata();
    ?>
  </div>
</section>
