<section id="blog" class="blog"  style="background: url('<?=get_field('consult_bg');?>');background-size:cover;background-repeat: no-repeat;">
  <div class="container">
    <h2 class="client__header">Блог</h2>
    <?php
    $my_posts = get_posts('post_status=publish');
    foreach ($my_posts as $post) :
    setup_postdata($post);
    $i++;
    if ($i==5) echo '<div class="hidden">';
    ?>
    <p>
      <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
    </p>
    <?php endforeach; ?>
    <?php
      if ($i>=5) echo '</div><a href="#" class="more">Показать еще</a>';
    ?>
  </div>
</section>
