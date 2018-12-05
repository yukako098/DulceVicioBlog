<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cafeteria
 */

get_header();
?>

<div class="main">
		<ul class="main-nav nav nav-tabs">
			<li class="nav-item">
				<a class="nav-link active" href="#!">Recent</a>
			</li>
			<li class="nav-item"><a class="nav-link" href="#!">Popular</a></li>
			<li class="nav-item"><a class="nav-link" href="#!">Daily</a></li>
			<li class="nav-item"><a class="nav-link" href="#!">Recipe</a></li>
		</ul>
		<ul class="main-nav-mb list-group">
			<li class="list-group-item active">Most Recent</li>
			<li class="list-group-item">Popular</li>
			<li class="list-group-item">Daily</li>
			<li class="list-group-item">Recipe</li>
		</ul>
		<?php
			if ( have_posts() ) :

				if ( is_home() && ! is_front_page() ) :
					?>
					<header>
						<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					</header>
					<?php
				endif;

				/* Start the Loop */
				while ( have_posts() ) :
					the_post();
					get_template_part( 'template-parts/content', get_post_type() );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'template-parts/content', 'none' );

		endif;
		?>
		<div class="container">
			<div
				class="pages-btn container d-inline-block d-flex justify-content-center"
			>
				<a class="p-2 btn btn-sm">Older Articles</a>
				<a class="p-2 btn btn-sm">View All</a>
			</div>
		</div>
</div>

<?php
get_footer();
