<?php
/**
 * Template Name: About
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package future2025
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>

    <?php if (have_rows('hero')) : while (have_rows('hero')) : the_row(); ?>
		<header class="hero">
			<div class="hero__container parallax-container">
        <div class="hero__image parallax-image">
          <img src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>" />
        </div>
			</div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <?php echo (get_sub_field('headline')) ? '<h3 class="hero__headline">' . get_sub_field('headline') . '</h3>' : ''; ?>
          <?php if (have_rows('list')) : ?>
            <ul>
              <?php while (have_rows('list')) : the_row(); ?>
                <li><?php echo get_sub_field('list_item'); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
				</div>
			</div>
		</header>
    <?php endwhile; endif; ?>

    <?php if (have_rows('intro')) : while (have_rows('intro')) : the_row(); ?>
    <section class="intro wrapper">
      <div class="intro__container parallax-container">
        <img src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>" class="intro__image parallax-image" />
      </div>
      <div class="intro__inner">
        <?php echo (get_sub_field('headline')) ? '<h2 class="intro__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>
        <div class="intro__content">
          <div class="intro__steps" data-animate-group>

            <div class="intro__step" data-animate>
              <div class="intro__step-description content-block">
                <?php echo (get_sub_field('description')) ? '<p>' . get_sub_field('description') . '</p>' : ''; ?>
              </div>
            </div>

            <?php if (get_sub_field('button')) : ?>
              <a href="<?php echo get_sub_field('button')['url']; ?>" class="intro__step" data-animate>
                <h4 class="intro__step-headline"><?php echo get_sub_field('button')['title']; ?></h4>
              </a>
            <?php endif; ?>

          </div>
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>

    <?php if (have_rows('letter')) : while (have_rows('letter')) : the_row(); ?>
    <section class="letter wrapper">

			<div class="letter__container">
        <div class="letter__content">
          <?php echo (get_sub_field('headline')) ? '<h3 class="letter__headline">' . get_sub_field('headline') . '</h3>' : ''; ?>
          <div class="letter__content-inner">
            <figure class="letter__content-image" data-animate>
              <img src="<?php echo get_sub_field('photo')['url']; ?>" alt="<?php echo get_sub_field('photo')['alt']; ?>" />
              <?php if (have_rows('quote')) : while (have_rows('quote')) : the_row(); ?>
              <blockquote class="letter__content-quote">
                <?php echo (get_sub_field('text')) ? '<p>' . get_sub_field('text') . '</p>' : ''; ?>
                <?php echo (get_sub_field('cite')) ? '<cite>' . get_sub_field('cite') . '</cite>' : ''; ?>
              </blockquote>
              <?php endwhile; endif; ?>
            </figure>
            <div class="letter__content-letter content-block">
              <?php echo (get_sub_field('content')) ? '<p>' . get_sub_field('content') . '</p>' : ''; ?>
              <?php if (get_sub_field('signature')) : ?>
                <img data-animate src="<?php echo get_sub_field('signature')['url']; ?>" alt="<?php echo get_sub_field('signature')['alt']; ?>" class="letter__content-signature" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
		</section>
    <?php endwhile; endif; ?>


    <?php if (have_rows('feature')) : while (have_rows('feature')) : the_row(); ?>
		<section class="feature">
			<div class="feature__inner">

        <div class="feature__video-container video-container" data-magnetic>
          <?php if (get_sub_field('video_type') === 'url') : ?>
            <img src="<?php echo get_sub_field('video_thumbnail')['url']; ?>" alt="<?php echo get_sub_field('video_thumbnail')['alt']; ?>" />
            <div data-fancybox data-src="<?php echo get_sub_field('video_url'); ?>" class="feature__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <?php elseif (get_sub_field('video_type') === 'file') : ?>
            <img src="<?php echo get_sub_field('video_thumbnail')['url']; ?>" alt="<?php echo get_sub_field('video_thumbnail')['alt']; ?>" />
            <div data-fancybox data-src="<?php echo get_sub_field('video_file')['url']; ?>" class="feature__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <?php endif; ?>
        </div>

        <div class="feature__content wrapper-wide">
          <?php echo (get_sub_field('headline')) ? '<h2 class="feature__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>

          <?php if (have_rows('logos')) : ?>
          <div class="feature__logo-grid">
            <?php while (have_rows('logos')) : the_row(); ?>
              <div class="feature__logo-grid-item">
                <img src="<?php echo get_sub_field('logo')['url']; ?>" alt="<?php echo get_sub_field('logo')['alt']; ?>" />
              </div>
            <?php endwhile; ?>

            <?php while (have_rows('logos')) : the_row(); ?>
              <style>
                .feature__logo-grid-item:nth-child(<?php echo get_row_index(); ?>) {
                  scale: <?php echo get_sub_field('mobile_scale') / 100; ?>;

                  @media (min-width: 768px) {
                    scale: <?php echo get_sub_field('tablet_scale') / 100; ?>;
                  }

                  @media (min-width: 1280px) {
                    scale: <?php echo get_sub_field('desktop_scale') / 100; ?>;
                  }
                }
              </style>
            <?php endwhile; ?>

          </div>
          <?php endif; ?>
        </div>
			</div>
		</section>
    <?php endwhile; endif; ?>

    <?php if (have_rows('bio')) : while (have_rows('bio')) : the_row(); ?>
    <section class="bio wrapper">
      <div class="bio__inner">
        <div class="bio__content">
          <?php echo (get_sub_field('biography')) ? get_sub_field('biography') : ''; ?>
        </div>
      </div>

      <div class="bio__image-quote">
        <div class="bio__image" data-animate data-animate-delay="0.5">
          <img src="<?php echo get_sub_field('photo')['url']; ?>" alt="<?php echo get_sub_field('photo')['alt']; ?>" />
        </div>

        <blockquote class="bio__quote" data-animate>
          <?php echo (get_sub_field('quote')) ? '<p>' . get_sub_field('quote') . '</p>' : ''; ?>
          <cite>
            <img src="<?php echo get_sub_field('signature')['url']; ?>" alt="<?php echo get_sub_field('signature')['alt']; ?>" />
          </cite>
        </blockquote>
      </div>
    </section>
    <?php endwhile; endif; ?>

    <?php if (have_rows('testimonials')) : ?>
    <section class="testimonials !hidden">
      <?php $testimonials = [
        [
          'quote' => 'Aut nihil mollitia deserunt quia sed rem. Quibusdam amet veniam rerum id rerum beatae. Quas rerum iste necessitatibus. At voluptates ad magnam blanditiis excepturi expedita aut. Aut repellat inventore qui minima illum est.”',
          'author' => 'Lydia Campbell',
          'thumbnail' => home_url() . '/wp-content/uploads/2025/05/testimonial-thumb-2.jpg',
        ],
        [
          'quote' => 'Aut nihil mollitia deserunt quia sed rem. Quibusdam amet veniam rerum id rerum beatae. Quas rerum iste necessitatibus. At voluptates ad magnam blanditiis excepturi expedita aut. Aut repellat inventore qui minima illum est.”',
          'author' => 'Sarah Jones',
          'thumbnail' => home_url() . '/wp-content/uploads/2025/05/testimonial-thumb-1.jpg',
        ],
        [
          'quote' => 'Aut nihil mollitia deserunt quia sed rem. Quibusdam amet veniam rerum id rerum beatae. Quas rerum iste necessitatibus. At voluptates ad magnam blanditiis excepturi expedita aut. Aut repellat inventore qui minima illum est.”',
          'author' => 'Lydia Campbell',
          'thumbnail' => home_url() . '/wp-content/uploads/2025/05/testimonial-thumb-2.jpg',
        ],
        [
          'quote' => 'Aut nihil mollitia deserunt quia sed rem. Quibusdam amet veniam rerum id rerum beatae. Quas rerum iste necessitatibus. At voluptates ad magnam blanditiis excepturi expedita aut. Aut repellat inventore qui minima illum est.”',
          'author' => 'Sarah Jones',
          'thumbnail' => home_url() . '/wp-content/uploads/2025/05/testimonial-thumb-1.jpg',
        ],
        [
          'quote' => 'Aut nihil mollitia deserunt quia sed rem. Quibusdam amet veniam rerum id rerum beatae. Quas rerum iste necessitatibus. At voluptates ad magnam blanditiis excepturi expedita aut. Aut repellat inventore qui minima illum est.”',
          'author' => 'Lydia Campbell',
          'thumbnail' => home_url() . '/wp-content/uploads/2025/05/testimonial-thumb-2.jpg',
        ],
        [
          'quote' => 'Aut nihil mollitia deserunt quia sed rem. Quibusdam amet veniam rerum id rerum beatae. Quas rerum iste necessitatibus. At voluptates ad magnam blanditiis excepturi expedita aut. Aut repellat inventore qui minima illum est.”',
          'author' => 'Sarah Jones',
          'thumbnail' => home_url() . '/wp-content/uploads/2025/05/testimonial-thumb-1.jpg',
        ],
      ] ?>

      <div class="testimonials__inner">

        <div class="testimonials__slider swiper" data-animate data-animate-position="50%">
          <div class="swiper-wrapper">
            <?php while (have_rows('testimonials')) : the_row(); ?>
            <div class="swiper-slide testimonial">
              <div class="testimonial__inner">
                <div class="testimonial__thumbnail">
                  <img src="<?php echo get_sub_field('photo')['url']; ?>" alt="<?php echo get_sub_field('photo')['alt']; ?>">
                </div><!-- .testimonial__thumbnail -->

                <div class="testimonial__content">
                  <blockquote class="testimonial__quote">
                    <?php echo get_sub_field('quote'); ?>
                  </blockquote>
                  <div class="testimonial__author">
                    <?php echo (get_sub_field('author')) ? '<h4 class="testimonial__author-name">' . get_sub_field('author') . '</h4>' : ''; ?>
                  </div>
                </div><!-- .testimonial__content -->
              </div><!-- .testimonial__inner -->
            </div><!-- .testimonial -->

            <?php endwhile; ?>
          </div>

          <div class="swiper-nav">
            <div class="swiper-nav-inner">
              <div class="swiper-button-prev"></div>
              <div class="swiper-pagination"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

    <section class="video !hidden">
      <div class="video__inner">

        <div class="video__video-container video-container video-autoplays">
          <video src="<?php echo home_url() . '/wp-content/uploads/2025/06/IMG_2213-optimized-720.mp4'; ?>" poster="<?php echo home_url() . '/wp-content/uploads/2025/05/video-thumbnail-2.jpg'; ?>" muted loop playsinline></video>
          <div data-fancybox data-magnetic data-src="<?php echo home_url() . '/wp-content/uploads/2025/06/IMG_2213-optimized-720.mp4'; ?>" class="video__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <button class="mute-button">
            <i class="mute"></i>
            <span class="screen-reader-text">Mute</span>
          </button>
        </div>

      </div>
    </section>

    <?php if (have_rows('call_to_action')) : while (have_rows('call_to_action')) : the_row(); ?>
    <section class="cta wrapper">
      <div class="cta__inner">
        <?php echo (get_sub_field('headline')) ? '<h2 class="cta__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>
        <?php echo (get_sub_field('content')) ? '<div class="cta__content content-block">' . get_sub_field('content') . '</div>' : ''; ?>
        <form action="" data-animate>
          <input type="text" placeholder="First Name" />
          <input type="email" placeholder="Email Address" />
          <div class="button-container"><button type="submit" class="button button--gradient">Sign Me Up</button></div>
        </form>

        <div class="cta__subheadline">
          <h3><?php echo (get_sub_field('subheadline')) ? get_sub_field('subheadline') : ''; ?></h3>
        </div>

        <?php $teasers = [
          [
            'title' => 'Teaser Preview One',
            'img' => get_theme_file_uri('public/event-1.jpg'),
          ],
          [
            'title' => 'Teaser Preview Two',
            'img' => get_theme_file_uri('public/event-2.jpg'),
          ],
          
          [
            'title' => 'Teaser Preview Three',
            'img' => get_theme_file_uri('public/event-3.jpg'),
          ],
        ] ?>

        <?php if (have_rows('teasers')) : ?>
        <div class="teasers-list" data-animate-group>
          <?php while (have_rows('teasers')) : the_row(); ?>
            <a href="<?php echo get_sub_field('link')['url']; ?>" class="teaser" data-animate>
              <div class="teaser__content">
                <h3 class="teaser__title"><?php echo get_sub_field('link')['title']; ?></h3>
              </div>

              <div class="teaser__image">
                <img src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>">
              </div>
            </a>
          <?php endwhile; ?>
        </div>
        <?php endif; ?>
      </div>

      <div class="next">
        <a href="<?php echo home_url('/get-involved'); ?>" class="next__link">
          <span class="next__label">Next</span>
          <span class="next__title">Get Involved</span>
        </a>
      </div>
    </section>
    <?php endwhile; endif; ?>
            
		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer(); 