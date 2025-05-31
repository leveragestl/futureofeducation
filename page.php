<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package future2025
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>
      <section class="hero">
        <div class="hero__content pt-20 wrapper-layout">
          <h1 class="hero__title"><?php the_title(); ?></h1>
        </div>
      </section>
			<?php // get_template_part( 'template-parts/content', 'page' ); ?>
		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer();
