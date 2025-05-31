<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package future2025
 */

get_header();
?>

<main id="primary" class="site-main">

  <section class="pt-[var(--site-header-height)] min-h-screen">
    <div class="wrapper pt-40">
      <h1 class="">Error 404</h1>
      <div class="content-block">
        <p>It looks like nothing was found at this location. <a href="<?php echo home_url(); ?>">Take me home</a>.</p>
      </div>
    </div>
  </section>

</main><!-- #main -->

<?php
get_footer();
