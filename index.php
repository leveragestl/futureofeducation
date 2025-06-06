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
    <header class="hero">
			<div class="hero__container">
        <div class="hero__image">
          <img src="<?php echo home_url() . '/wp-content/uploads/2025/05/news-hero.jpg'; ?>" alt="" />
        </div>
			</div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <h3 class="hero__headline">We Owe It To Our Kids To Change Course.</h3>
          <h4 class="hero__subheadline">Hear what others are saying/talking about:</h4>
				</div>
			</div>
		</header>
    
    <section class="filter wrapper-layout">
      <div class="filter__filters">
        <h2 class="filter__filters-headline">Filter</h2>

        <div class="filter__filter">
          <button name="filter" id="filter"><span>Education</span></button>
        </div>

        <div class="filter__filter">
          <input type="search" placeholder="Search" />
        </div>
      </div>
    </section>

		<section class="feed wrapper-layout">
			<?php if ( have_posts() ) : ?>
				<?php while ( have_posts() ) : the_post(); ?>
          <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<a href="<?php the_permalink(); ?>" class="post-image">
							<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
              <button class="button button--ghost">Watch Video</button>
						</a>

            <!-- <div class="post-icon">
              <img src="<?php echo get_theme_file_uri('public/icon-wp.svg'); ?>" alt="News" />
            </div> -->

            <div class="post-inner">
              <div class="post-content">
                <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                <div class="post-excerpt content-block"><?php the_content(); ?></div>
                <div class="post-author">By: Author Name</div>
                <a href="<?php the_permalink(); ?>" class="post-link">Read</a>
              </div>
            </div>
					</article>
				<?php endwhile; ?>

				<?php the_posts_navigation(); ?>
			<?php endif; ?>
		</section>

    <div class="load-more-button">
      <button class="button bg-sky hover:bg-indigo-bright">Load More</button>
    </div>

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
