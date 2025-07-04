<?php
/**
 * Template Name: Events
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package future2025
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php while ( have_posts() ) : the_post(); ?>

    <header class="hero">
      <div class="hero__inner wrapper-layout">
        <h1 class="hero__title" data-animate><?php the_title(); ?></h1>

        <div class="hero__filters !hidden" data-animate-group data-animate-stagger data-animate-delay="0.5">
          <h2 class="hero__filters-headline" data-animate>Filter</h2>
          <div class="hero__filters-filter" data-animate>
            <select name="filter" id="date">
              <option value="">Date</option>
            </select>
          </div>
          <div class="hero__filters-filter" data-animate>
            <select name="filter" id="location">
              <option value="">Location</option>
            </select>
          </div>
        </div>
        <a href="<?php echo home_url('/events-list'); ?>" class="hero__view !hidden" data-animate data-animate-delay="0.25">View as Calendar</a>

      </div>
      
    </header>

    <section class="flex justify-center items-center min-h-[50vh]">
      <h3 class="text-4xl font-bold text-center">Coming Soon!</h3>
    </section>

    <section class="feed wrapper-layout !hidden">

      <?php
      $upcoming_events = eo_get_events(array(
        'numberposts' => -1,
        'event_end_after' => 'today',
        'showpastevents' => true,
      ));
      ?>

      <?php if($upcoming_events): ?>
        <?php foreach ($upcoming_events as $event): ?>
      
          <?php $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') ); ?>

          <article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?> data-animate data-animate-delay="0.5">
            <div class="post-image"><img src="<?php echo get_the_post_thumbnail_url($event->ID); ?>" alt="<?php the_title(); ?>" /></div>

            <div class="post-inner">
              <div class="post-content">
                <h2 class="post-title"><a href="<?php echo get_the_permalink($event->ID); ?>">
                <?php echo get_the_title($event->ID); ?>
                </a></h2>
                <div class="post-excerpt"><?php echo apply_filters('the_content', get_post_field('post_content', $event->ID)); ?></div>
              </div>

              <div class="post-meta">
                <div class="post-button"><a href="<?php echo get_the_permalink($event->ID); ?>" class="button button--gradient">Learn More</a></div>
                <div class="post-date">
                  <div class="post-date__label">Date</div>
                  <div class="post-date__value">
                    April 15
                    <?php // echo eo_get_the_start($format, $event->ID,null,$event->occurrence_id); ?>
                  </div>
                </div>
                <div class="post-location">
                  <div class="post-location__label">Location</div>
                  <div class="post-location__value">
                    City, State, Venue
                    <?php // echo eo_get_venue($event->ID); ?>
                  </div>
                </div>
              </div>
            </div>
          </article>
      
        <?php endforeach; ?>
      <?php endif; ?>
    </section>

    <div class="wrapper-wide">
      <div class="next">
        <a href="<?php echo home_url('/join-the-movement'); ?>" class="next__link">
          <span class="next__label">Next</span>
          <span class="next__title">Join the Movement</span>
        </a>
      </div>
    </div>

		<?php endwhile; ?>

	</main><!-- #main -->

<?php
get_footer(); 