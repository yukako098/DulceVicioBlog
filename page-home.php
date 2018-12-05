<?php
/**
 * Template Name: Home Page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cafeteria
 */

 	// Advanced Custom Field
	$top_left_image			= get_field('top_left_image');
	$top_right_image 		= get_field('top_right_image');
	$bottom_left_image 	= get_field('bottom_left_image');
	$bottom_right_image = get_field('bottom_right_image');


get_header();
?>

      <div class="top-image">
        <div class="centralize">
          <p class="blog_top_p"><?php bloginfo('description'); ?></p>
          <h1 class="blog_top_h1 top_h1"><?php bloginfo('name'); ?></h1>
        </div>
        <!-- If user uploaded an image -->
        <?php if (!empty($top_left_image)) : ?>
<img src="<?php echo $top_left_image['url']; ?>" alt="<?php echo $top_left_image['alt']; ?>" class="blog_img1" />
        <?php endif; ?>
        <?php if (!empty($top_right_image)) : ?>
<img src="<?php echo $top_right_image['url']; ?>" alt="<?php echo $top_right_image['alt']; ?>" class="blog_img2" />
        <?php endif; ?>
        <?php if (!empty($bottom_left_image)) : ?>
<img src="<?php echo $bottom_left_image['url']; ?>" alt="<?php echo $bottom_left_image['alt']; ?>" class="blog_img3" />
        <?php endif; ?>
        <?php if (!empty($bottom_right_image)) : ?>
<img src="<?php echo $bottom_right_image['url']; ?>" alt="<?php echo $bottom_right_image['alt']; ?>" class="blog_img4" />
        <?php endif; ?>


      </div>

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

        <div class="blogs container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <a href="./post.html">
                  <img
                    class="card-img-top"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/post3.jpg"
                    alt="Card image cap"
                  />
                  <div class="main-card-body card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <a href="./post.html" class="main-linkTo-ablog">
                  <img
                    class="card-img-top"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/food.jpg"
                    alt="Card image cap"
                  />
                  <div class="main-card-body card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <a href="./post.html" class="main-linkTo-ablog">
                  <img
                    class="card-img-top"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/post1.jpg"
                    alt="Card image cap"
                  />
                  <div class="main-card-body card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="blogs container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <a href="./post.html">
                  <img
                    class="card-img-top"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/post3.jpg"
                    alt="Card image cap"
                  />
                  <div class="main-card-body card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <a href="./post.html" class="main-linkTo-ablog">
                  <img
                    class="card-img-top"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/food.jpg"
                    alt="Card image cap"
                  />
                  <div class="main-card-body card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <a href="./post.html" class="main-linkTo-ablog">
                  <img
                    class="card-img-top"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/post1.jpg"
                    alt="Card image cap"
                  />
                  <div class="main-card-body card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="blogs container">
          <div class="row">
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <a href="./post.html">
                  <img
                    class="card-img-top"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/post3.jpg"
                    alt="Card image cap"
                  />
                  <div class="main-card-body card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <a href="./post.html" class="main-linkTo-ablog">
                  <img
                    class="card-img-top"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/food.jpg"
                    alt="Card image cap"
                  />
                  <div class="main-card-body card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </a>
              </div>
            </div>
            <div class="col-12 col-md-6 col-lg-4">
              <div class="card">
                <a href="./post.html" class="main-linkTo-ablog">
                  <img
                    class="card-img-top"
                    src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/post1.jpg"
                    alt="Card image cap"
                  />
                  <div class="main-card-body card-body">
                    <h4 class="card-title">Special title treatment</h4>
                    <p class="card-text">
                      With supporting text below as a natural lead-in to
                      additional content.
                    </p>
                  </div>
                </a>
              </div>
            </div>
          </div>
        </div>

        <div class="container">
          <div
            class="pages-btn container d-inline-block d-flex justify-content-center"
          >
            <a class="p-2 btn btn-sm">Older Articles</a>
            <a class="p-2 btn btn-sm">View All</a>
          </div>
        </div>
      </div> -->
      <!-- main


<?php
get_footer();
