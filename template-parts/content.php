<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package concepts
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
      $your_text  = get_the_title();
      $pieces = explode(" ", $your_text);
      echo "<h1 class='client__header'>";
      $the_count = count($pieces);
      foreach ($pieces as $i => $value) {
        $i = $i + 1;
        if ($i == $the_count) { echo "<span class='yellow'>"; }
        echo $value . ' ';
        if ($i == $the_count) { echo "</span>"; }
      }
      echo "</h1>";
      $area = get_field( "area" );
      if( $area ) {
            echo "<div class='single__area'>$area м<sup>2</sup></p>";
      } else {}
			//the_title( '<h1 class="client__header">', '</h1>' );
		else :
			the_title( '<h2 class="client__header"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
		endif;
			?>
	</header><!-- .entry-header -->


	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'concepts' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		?>
	</div><!-- .entry-content -->
</article><!-- #post-<?php the_ID(); ?> -->
