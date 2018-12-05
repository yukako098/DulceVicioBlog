<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Cafeteria
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
  <title><?php wp_title( '|', true, 'right' ); ?></title>

  <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm"
      crossorigin="anonymous"
    />
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"
      integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU"
      crossorigin="anonymous"
    />

<link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css"/>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'bootstrapcafeteria' ); ?></a>

  <!-- search page -->
    <div id="search-page">
      <form class="search-page-header">
        <input
          type="search"
          name="keyword"
          placeholder="Search "
          id="keyword-input"
          value=""
        />
        <button
          type="button"
          class="close"
          aria-label="Close"
          onclick="goToMain()"
        >
          <span aria-hidden="true">&times;</span>
        </button>
      </form>

      <div class="search-container container">
        <div class="search-flex d-flex justify-content-between">
          <div class="img-card card">
            <img
              class="card-img"
              src="./assets/img/post1.jpg"
              alt="Card image"
            />
          </div>
          <div class="text-card card">
            <div class="text-body card-body">
              <h4 class="card-title">Special title treatment</h4>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p>
            </div>
          </div>
        </div>

        <div class="search-flex d-flex justify-content-between">
          <div class="img-card card">
            <img
              class="card-img"
              src="./assets/img/post2.jpg"
              alt="Card image"
            />
          </div>
          <div class="text-card card">
            <div class="text-body card-body">
              <h4 class="card-title">Special title treatment</h4>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p>
            </div>
          </div>
        </div>

        <div class="search-flex d-flex justify-content-between">
          <div class="img-card card">
            <img
              class="card-img"
              src="./assets/img/post3.jpg"
              alt="Card image"
            />
          </div>
          <div class="text-card card">
            <div class="text-body card-body">
              <h4 class="card-title">Special title treatment</h4>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p>
            </div>
          </div>
        </div>

        <div class="search-flex d-flex justify-content-between">
          <div class="img-card card">
            <img
              class="card-img"
              src="./assets/img/food.jpg"
              alt="Card image"
            />
          </div>
          <div class="text-card card">
            <div class="text-body card-body">
              <h4 class="card-title">Special title treatment</h4>
              <p class="card-text">
                With supporting text below as a natural lead-in to additional
                content.
              </p>
            </div>
          </div>
        </div>

        <div class="other-pages container">
          <nav aria-label="...">
            <ul class="pagination pagination-sm">
              <li class="page-item disabled">
                <a class="page-link" href="#!" tabindex="-1">Previous</a>
              </li>
              <li class="page-item"><a class="page-link" href="#!">1</a></li>
              <li class="page-item"><a class="page-link" href="#!">2</a></li>
              <li class="page-item"><a class="page-link" href="#!">3</a></li>
              <li class="page-item"><a class="page-link" href="#!">Next</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </div>

    <div id="main-page">
      <header class="header navbar navbar-expand-lg navbar-light">
      <?php
  wp_nav_menu( array(
    'theme_location'  => 'primary',
    'container'       => 'nav',
    'container_class' => 'header navbar navbar-expand-lg navbar-light',
    'menu_class'      => 'nav'
  ));
  ?>
        <!-- <ul class="nav">
          <li class="nav-item">
            <a class="header-brand navbar-brand" href="#!">Home</a>
          </li>
          <li class="nav-item active">
            <a class="nav-link" href="./reservation.html">Reservation</a>
          </li>
          <li class="nav-item">
            <a
              class="nav-link "
              href="./
            top.html"
              >Web site</a
            >
          </li>
        </ul> -->
        <form class="form-inline my-2 my-lg-0">
          <button
            id="search"
            class="btn btn-outline-success my-2 my-sm-0"
            type="button"
            onclick="goToSearch()"
          >
            <i class="fas fa-search"></i>
          </button>
        </form>
      </header>
