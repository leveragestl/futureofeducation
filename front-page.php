<?php
/**
 * The template for displaying the front page
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package future2025
 */

get_header();
?>

	<main id="primary" class="site-main">
		<?php while ( have_posts() ) : the_post(); ?>

    <!-- Hero -->
    <?php if (have_rows('hero')) : while (have_rows('hero')) : the_row(); ?>
		<header class="hero">
			<div class="hero__container parallax-container">
				<img class="hero__image parallax-image" src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>" />
			</div>

      <div class="hero__headline-container">
        <!-- <img src="<?php echo get_theme_file_uri('public/our-kids-deserve-better.png'); ?>" alt="" /> -->
        <h1 class="hero__headline font-neoneon glow-text">
          <span class="glow-text__text"><?php echo get_sub_field('headline'); ?></span>
          <span class="glow-text__outline" aria-hidden="true"><?php echo get_sub_field('headline'); ?></span>
        </h1>
      </div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <div class="hero__tagline">
            <h2><?php echo get_sub_field('tagline'); ?></h2>
          </div>

					<div class="hero__video-container">

            <div class="video-container video-autoplays" data-magnetic>
              <video src="<?php echo get_sub_field('video')['url']; ?>" <?php echo (get_sub_field('video')['poster']) ? 'poster="' . get_sub_field('video')['poster'] . '"' : ''; ?> autoplay muted loop playsinline></video>
              <div data-fancybox data-src="<?php echo get_sub_field('video')['url']; ?>" class="play-button"><button class="button button--ghost"><span class="label"><span class="label-text">Hear from MacKenzie</span> <i class="play"></span></i></button></div>
              <button class="mute-button">
                <i class="mute"></i>
                <span class="screen-reader-text">Mute</span>
              </button>
            </div>
          </div>
				</div>
			</div>
		</header>
    <?php endwhile; endif; ?>

    <!-- Intro -->
    <?php if (have_rows('intro')) : while (have_rows('intro')) : the_row(); ?>
    <section class="intro wrapper-layout">
      <div class="intro__inner">
        <div class="intro__content">
          <?php echo (get_sub_field('headline')) ? '<h2 class="intro__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>
          <?php echo (get_sub_field('description')) ? '<div class="intro__description">' . get_sub_field('description') . '</div>' : ''; ?>
        </div>
      </div>

      <?php if (have_rows('stats')) : ?>
      <div class="intro__stats" data-animate-group data-animate-stagger data-animate-delay="0.5">
        <?php while (have_rows('stats')) : the_row(); ?>
        <div class="intro__stat" data-animate>
          <div class="intro__stat-illo">
            <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>" />
          </div>
          <h4 class="intro__stat-text"><?php echo get_sub_field('text'); ?></h4>
          <p class="intro__stat-footnote">Source: <a class="link" href="<?php echo get_sub_field('source')['source_url']; ?>"><?php echo get_sub_field('source')['source_text']; ?></a></p>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </section>
    <?php endwhile; endif; ?>

    <!-- Videos -->
    <?php if (have_rows('videos')) : while (have_rows('videos')) : the_row(); ?>
		<section class="videos wrapper">
			<div class="videos__inner">
        <?php if (have_rows('videos_list')) : ?>
				<div class="videos-list">
					<ul>
            <?php while (have_rows('videos_list')) : the_row(); ?>
            <li class="active" data-video="<?php echo get_sub_field('video')['url']; ?>"><span><?php echo get_sub_field('label'); ?></span></li>
            <?php endwhile; ?>
          </ul>
				</div>
        <?php endif; ?>
				<div class="video-wrapper" data-animate data-animate-position="50%">
          <div class="video-container">
            <video id="mainVideo" src="<?php echo get_sub_field('videos_list')[0]['video']['url']; ?>" autoplay loop muted playsinline></video>
            <button class="mute-button">
              <i class="mute"></i>
              <span class="screen-reader-text">Mute</span>
            </button>
          </div>
        </div>
			</div>
		</section>
    <?php endwhile; endif; ?>

    <!-- CTA -->
    <?php if (have_rows('call_to_action')) : while (have_rows('call_to_action')) : the_row(); ?>
    <section class="cta wrapper-layout">
      <div class="cta__container parallax-container">
        <img class="cta__image parallax-image" src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>" />
      </div>
      <div class="cta__inner">
        <div class="cta__content-left">
          <?php echo (get_sub_field('headline')) ? '<h2 class="cta__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>
          <div class="cta__button" data-animate>
            <a data-magnetic href="#cta__popup" data-fancybox class="button button--large">Access Free Resources</a>

            <div id="cta__popup" class="cta__popup" style="display: none;">
            <div class="cta__popup-inner">
              <h4 class="cta__popup-headline">Sign up today to receive our free resources!</h4>
              <div class="form"><?php echo do_shortcode('[gravityform id="2" title="false" ajax="true"]'); ?></div>
            </div>
          </div>
          </div>
        </div>
        <div class="cta__content-right">
          <div class="cta__description content-block">
            <?php echo (get_sub_field('description')) ? '<div class="cta__description-inner">' . get_sub_field('description') . '</div>' : ''; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>

    <!-- Events -->
    <section class="events wrapper-layout !hidden">

      <?php
        $upcoming_events = eo_get_events(array(
          'numberposts' => 5,
          'event_end_after' => 'today',
          'showpastevents' => true,
        ));
        ?>

      <?php $events = [
        [
          'title' => 'Event Number One',
          'date' => 'April 15',
          'img' => get_theme_file_uri('public/event-1.jpg'),
        ],
        [
          'title' => 'Event Number Two',
          'date' => 'April 15',
          'img' => get_theme_file_uri('public/event-2.jpg'),
        ],
        [
          'title' => 'Event Number Three',
          'date' => 'April 15',
          'img' => get_theme_file_uri('public/event-3.jpg'),
        ],
        [
          'title' => 'Event Number Four',
          'date' => 'April 15',
          'img' => get_theme_file_uri('public/event-4.jpg'),
        ],
        [
          'title' => 'Event Number Five',
          'date' => 'April 15',
          'img' => get_theme_file_uri('public/event-5.jpg'),
        ]
      ]; ?>

      <div class="events__inner">
        <h2 class="events__headline">Upcoming Events</h2>

        <div class="events-list" data-animate-group data-animate-stagger data-animate-delay="0.5">
          <?php foreach ($upcoming_events as $event) : ?>
            <?php // $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') ); ?>
            <a href="<?php echo get_the_permalink($event->ID); ?>" class="event" data-animate>
              <div class="event__content">
                <p class="event__date"><?php echo eo_get_the_start('M d Y', $event->ID,null,$event->occurrence_id); ?></p>
                <div class="event__title-container">
                  <h3 class="event__title"><?php echo get_the_title($event->ID); ?></h3>
                  <span class="event__button">Learn more</span>
                </div>
              </div>

              <div class="event__image">
                <img src="<?php echo get_the_post_thumbnail_url($event->ID); ?>" alt="<?php echo get_the_title($event->ID); ?>">
              </div>
            </a>
          <?php endforeach; ?>
        </div>

        <div class="next">
          <a href="<?php echo home_url('/about'); ?>" class="next__link">
            <span class="next__label">Next</span>
            <span class="next__title">About</span>
          </a>
        </div>

      </div>
    </section>
		<?php endwhile; ?>
	</main><!-- #main -->
<?php
get_footer();
