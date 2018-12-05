<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cafeteria
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="card">
		<a href="./post.html">
			<?php if (has_post_thumbnail()) { ?>
				<?php the_post_thumbnail(); ?>
				<!-- <img
					class="card-img-top"
					src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/post3.jpg"
					alt="Card image cap"
				/> -->
			<?php } ?>

			<div class="main-card-body card-body">
				<?php the_title( '<h4 class="entry-title card-title">', '</h4>' ); ?>
				<p class="card-text">
					<?php the_category(', ') ?>
				</p>
			</div>
		</a>
	</div>

</article><!-- #post-<?php the_ID(); ?> -->
