<section class="realprojects" id="realprojects">
    <h2 class="client__header client__header--real"><?php echo get_field('project_title'); ?></h2>
 
<?php if( have_rows('projects_gallery') ): ?>

  <div class="owl-carousel owl-theme realprojects-slider">

  <?php while( have_rows('projects_gallery') ): the_row(); 

    // vars
    $image = get_sub_field('projects_img');
    $link = get_sub_field('projects_link');

    ?>

    <div class="slide">

      <?php if( $link ): ?>
        <a href="<?php echo $link; ?>" data-fancybox="projects_gallery">
      <?php endif; ?>

        <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt'] ?>" />

      <?php if( $link ): ?>
        </a>
      <?php endif; ?>

    </div>

  <?php endwhile; ?>

  </div><!-- slider -->

<?php endif; ?>
 
</section>


