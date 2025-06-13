<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package future2025
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> class="js-disabled">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
  <script>
    document.documentElement.classList.remove('js-disabled');
  </script>
  <style>
		/* .pageOverlay {
			width: 100vw;
			height: 100vh;
			background: #FFFFF9;
			position: fixed;
			top: 0;
			left: 0;
			z-index: 999999;
			pointer-events: none;
		} */
	</style>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'future2025' ); ?></a>

  <header class="siteHeader">
    <div class="siteHeader__branding">
      <?php $tag = (is_front_page()) ? 'h1' : 'p'; ?>
      <?php $link = (is_front_page()) ? '#' : home_url(); ?>

      <a class="siteHeader__logo" href="<?php echo home_url(); ?>" rel="home">
        <h1 class="siteHeader__title"><?php echo get_bloginfo( 'name' ); ?></h1>
      </a>
    </div>

    <input type="checkbox" id="nav-toggle" class="siteHeader__toggle-input">
    <label for="nav-toggle" class="siteHeader__toggle">
      <div class="siteHeader__toggle-wrapper">
        <div class="siteHeader__toggle-box">
          <div class="siteHeader__toggle-line"></div>
        </div>
      </div>
      <span class="screen-reader-text">Menu</span>
    </label>

    <div class="siteHeader__navPanel">
      <nav id="site-navigation" class="siteHeader__nav">
        <?php
          wp_nav_menu( array(
            'theme_location'	=> 'nav-primary',
            'container'				=> '',
            'menu_id'					=> 'primary-menu',
            'menu_class'			=> 'siteHeader__menu',
            'link_class'			=> 'no-link-style',
            'link_before'			=> '<span class="label">',
            'link_after'			=> '</span>',
          ));
        ?>
      </nav>
      <div class="siteHeader__button">
        <a href="<?php echo home_url('/join-the-movement'); ?>" class="button button--gradient">Join the Movement</a>
      </div>
    </div>
  </header>