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
          <?php if(get_field('icon')): ?>
            <img class="w-16 mb-8 md:w-24 xl:w-32" src="<?php echo get_field('icon')['url']; ?>" alt="" />
          <?php else: ?>
            <img class="w-16 mb-8 md:w-24 xl:w-44" src="<?php echo get_theme_file_uri('public/icon-apple.png'); ?>" alt="" />
          <?php endif; ?>
          <h1 class="entry-title"><?php the_title(); ?></h1>
          <div class="entry-meta">
            <?php if(get_field('author')): ?>
              <span class="entry-meta__author">By: <?php echo get_field('author'); ?></span> &nbsp;&nbsp;|&nbsp;&nbsp; 
            <?php endif; ?>
            <span class="entry-meta__date">Date: <?php the_date(); ?></span>
          </div>

          <div class="entry-content__body-inner">
            <?php echo get_field('content'); ?>
          </div>

          <div class="social-share">
            <h4 class="social-share__title">Share:</h4>
            <a href="https://twitter.com/intent/tweet?url=<?php echo get_the_permalink(); ?>&text=<?php echo get_the_title(); ?>" class="social-share__item"><i class="twitter"></i></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo get_the_permalink(); ?>" class="social-share__item"><i class="facebook"></i></a>
            <a href="mailto:?subject=<?php echo get_the_title(); ?>&body=<?php echo get_the_permalink(); ?>" class="social-share__item"><i class="mail"></i></a>
          </div>
        </div>

        <aside class="entry-content__sidebar">
          <?php
          $args = array(
              'posts_per_page' => 3,
              'orderby' => 'date',
              'order' => 'DESC',
          );
          $query = new WP_Query( $args );
          if ( $query->have_posts() ) : 
            while ( $query->have_posts() ) : $query->the_post(); ?>
              <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <a href="<?php the_permalink(); ?>" class="post-image">
                  <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />
                  <button class="button button--ghost">Watch Video</button>
                </a>
                <div class="post-inner">
                  <div class="post-content">
                    <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                    <div class="post-excerpt content-block"><?php the_excerpt(); ?></div>
                    <div class="post-author">By: Author Name</div>
                    <a href="<?php the_permalink(); ?>" class="post-link">Read</a>
                  </div>
                </div>
              </article>
            <?php endwhile; 
            wp_reset_postdata(); 
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
