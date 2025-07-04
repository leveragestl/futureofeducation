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
 * @package future2025
 */

get_header();
?>

	<main id="primary" class="site-main">

    <?php if (have_rows('hero', get_option('page_for_posts'))) : while (have_rows('hero', get_option('page_for_posts'))) : the_row(); ?>
    <header class="hero">
			<div class="hero__container parallax-container">
        <div class="hero__image parallax-image">
          <img src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>" />
        </div>
			</div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <?php echo (get_sub_field('headline')) ? '<h3 class="hero__headline">' . get_sub_field('headline') . '</h3>' : ''; ?>
          <?php echo (get_sub_field('subheadline')) ? '<h4 class="hero__subheadline">' . get_sub_field('subheadline') . '</h4>' : ''; ?>
				</div>
			</div>
		</header>
    <?php endwhile; endif; ?>

    <section id="alm-filters" class="filter wrapper-layout !hidden">
      <div class="filter__filters" data-animate>
        <h2 class="filter__filters-headline">Filter</h2>
        <?php // echo do_shortcode('[ajax_load_more_filters id="news_filter" target="news"]'); ?>
      </div>
    </section>

		<section class="feed wrapper-layout">
      <!-- <?php if ( have_posts() ) : ?>
        <?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class('featured-post'); ?>>
            <a href="<?php the_permalink(); ?>" class="post-image">
              <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
              <button class="button button--ghost">Watch Video</button>
            </a>
            <div class="post-inner">
              <div class="post-content">
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-excerpt content-block"><?php the_content(); ?></div>
                <div class="post-author">By: Author Name</div>
                <a href="<?php the_permalink(); ?>" class="post-link">Read</a>
              </div>
            </div>
          </article>
        <?php break; ?>
        <?php endwhile; ?>
        <?php // the_posts_navigation(); ?>
      <?php endif; ?> -->

      <?php 
      $args = array(
        'id' => 'news',
        'target' => 'news_filter',
        'orderby' => 'menu_order',
        'order' => 'ASC',
        'post_type' => 'post',
        'posts_per_page' => '7',
        'transition' => 'fade',
        'button_label' => 'Load More',
        'button_loading_label' => 'Loading...',
        'scroll' => 'false',
        'theme_repeater' => 'posts.php',
        // 'filters'				=> 'true',
        // 'filters_url'			=> 'true',
        // 'filters_paging'		=> 'true',
      );
      
      if(function_exists('alm_render')){
        alm_render($args);
      }
      ?>
		</section>

    <div class="wrapper-wide">
      <div class="next">
        <a href="<?php echo home_url('/events'); ?>" class="next__link">
          <span class="next__label">Next</span>
          <span class="next__title">Events</span>
        </a>
      </div>
    </div>
	</main><!-- #main -->

<?php
get_footer();
