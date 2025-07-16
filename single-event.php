<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package future2025
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

    <section class="hero">
      <div class="hero__container parallax-container">
        <div class="hero__image parallax-image">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
        </div>
      </div>
    </section>

    <div class="entry-content wrapper-layout">
      <div class="entry-content__inner">
        <div class="entry-content__body">
          <h1 class="entry-title"><?php the_title(); ?></h1>

          <div class="entry-content__body-inner">
            <?php echo get_field('content'); ?>
          </div>

          <div class="entry-meta">
            <span class="entry-meta__date">
              <?php eo_get_template_part( 'event-meta', 'event-single' ); ?>
            </span>
          </div>

          <div class="social-share">
            <h4 class="social-share__title">Share:</h4>
            <a href="https://twitter.com/intent/tweet?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" class="social-share__item"><i class="twitter"></i></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" class="social-share__item"><i class="facebook"></i></a>
            <a href="mailto:?subject=<?php echo get_the_title(); ?>&body=<?php echo get_the_permalink(); ?>" class="social-share__item"><i class="mail"></i></a>
          </div>
        </div>

        <aside class="entry-content__sidebar !hidden">
          <?php
          $upcoming_events = eo_get_events(array(
            'numberposts' => -1,
            'event_end_after' => 'today',
            'showpastevents' => true,
            'posts__not_in' => array(get_the_ID()),
          ));
          if ( $upcoming_events ) : 
            foreach ( $upcoming_events as $event ) : ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
              <?php if(get_field('type') == 'video' && !get_field('icon')): ?>
                <div class="post-header__icon"><i class="play !bg-white scale-125"></i></div>
                <?php elseif(get_field('icon')): ?>
                  <div class="post-header__icon"><img src="<?php echo get_field('icon')['url']; ?>" alt="" /></div>
                <?php else: ?>
                  <div class="post-header__icon"><img src="<?php echo get_theme_file_uri('public/icon-apple.png'); ?>" alt="" /></div>
                <?php endif; ?>
                <a href="<?php the_permalink(); ?>" class="post-header">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                  <button class="button button--ghost">Watch Video</button>
                </a>
                <div class="post-inner">
                  <div class="post-content">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <!-- <div class="post-excerpt content-block"><?php the_excerpt(); ?></div> -->
                    <a href="<?php the_permalink(); ?>" class="post-link">Learn More</a>
                  </div>
                </div>
              </article>
            <?php endforeach; 
          endif; 
          ?>
        </aside>
      </div>

      <?php
      wp_link_pages(
        array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'future2025' ),
          'after'  => '</div>',
        )
      );
      ?>
    </div><!-- .entry-content -->

    <?php
    /*
    the_post_navigation(
      array(
        'prev_text' => '<span class="nav-subtitle">' . esc_html__( 'Previous:', 'future2025' ) . '</span> <span class="nav-title">%title</span>',
        'next_text' => '<span class="nav-subtitle">' . esc_html__( 'Next:', 'future2025' ) . '</span> <span class="nav-title">%title</span>',
      )
    );
    */
    ?>

		<?php endwhile; ?>

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
get_sidebar();
get_footer();
