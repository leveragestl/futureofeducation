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
      <div class="hero__container">
        <div class="hero__image">
          <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="" />
        </div>
      </div>
    </section>

    <div class="entry-content wrapper-layout">
      <div class="entry-content__inner">
        <div class="entry-content__body">
          <img class="w-32 mb-8" src="<?php echo get_theme_file_uri('public/icon-wp.svg'); ?>" alt="" />

          <h1 class="entry-title">Title of Post Goes Here With Additional Text to Show Multiple Lines of Copy</h1>
          <div class="entry-meta">
            <span class="entry-meta__author">By: Author Name</span>
            <span class="entry-meta__date">Date: Xx / Xx / Xx</span>
          </div>

          <div class="entry-content__body-inner content-block">
            <p>Olut ipsa ipsam eos accum ad eicillit aut voloruptium voluptis dolupid undentia volorenimus aut voluptium si sum reptae duciis eos eum fugia sit quia doluptatat. Xerfero quos expe niendant officipicil id moluptatem inihicim quam es que doluptas duciminihil in enti aut hitis iur sinti blacit et fugitatiam re accus ate molo ea que ipsunt quae cuscian tibusci lictusdae nonseribusam.</p>

            <div class="video-container mb-12">
              <video src="<?php echo home_url() . '/wp-content/uploads/2025/05/single-post-video.mp4'; ?>" poster="<?php echo home_url() . '/wp-content/uploads/2025/05/post-video-poster.jpg'; ?>" autoplay muted loop playsinline></video>
              <div class="play-button">
                <button class="button button--ghost">Play Video</button>
              </div>
            </div>

            <p>Et magnat aut odit et quundem sed ut voluptatur? Quia sit fugiae consequi illacearum doluptatur? Olut ipsa ipsam eos accum ad eicillit aut voloruptium voluptis dolupid undentia volorenimus aut voluptium si sum reptae duciis.</p>

            <blockquote>
              <p>"Lift Quote Text goes Here (32pt Bold)—just stacks full-width under/over body copy. IF not needed can just omit."</p>
            </blockquote>

            <img class="aspect-video mb-12" src="<?php echo home_url() . '/wp-content/uploads/2025/05/post-image.jpg'; ?>" alt="" />
            
            <p>Olut ipsa ipsam eos accum ad eicillit aut voloruptium voluptis dolupid undentia volorenimus aut voluptium si sum reptae duciis eos eum fugia sit quia doluptatat.</p>

            <p>Xerfero quos expe niendant officipicil id moluptatem inihicim quam es que doluptas duciminihil in enti aut hitis iur sinti blacit et fugitatiam re accus ate molo ea que ipsunt quae cuscian tibusci lictusdae nonseribusam.</p>

            <a href="#" class="button bg-sky px-8 hover:bg-indigo-bright mt-12"><span class="label text-white">Download PDF</span></a>

            <div class="social-share">
              <h4 class="social-share__title">Share:</h4>
              <a href="#" class="social-share__item"><i class="twitter"></i></a>
              <a href="#" class="social-share__item"><i class="facebook"></i></a>
              <a href="#" class="social-share__item"><i class="mail"></i></a>
            </div>
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
        <a href="#" class="next__link">
          <span class="next__label">Next</span>
          <span class="next__title">Events</span>
        </a>
      </div>
    </div>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
