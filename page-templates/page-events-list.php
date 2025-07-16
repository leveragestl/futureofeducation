<?php
/**
 * Template Name: Events List
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
        <a href="<?php echo home_url('/events'); ?>" class="hero__view !hidden" data-animate data-animate-delay="0.25">View All</a>

      </div>
      
    </header>

    <section class="flex justify-center items-center min-h-[50vh] !hidden">
      <h3 class="text-4xl font-bold text-center">Coming Soon!</h3>
    </section>

    <section class="feed wrapper-layout">

      <?php
      $upcoming_events = eo_get_events(array(
        'numberposts' => -1,
        'event_end_after' => 'today',
        'showpastevents' => true,
      ));
      ?>

      <?php if($upcoming_events): ?>
        <table data-animate data-animate-delay="0.75">
          <thead>
            <tr>
              <th>Event</th>
              <th>Date</th>
              <!-- <th>Location</th> -->
              <th></th>
            </tr>
          </thead>
          <tbody>
        <?php foreach ($upcoming_events as $event): ?>
          <?php 
          if (get_field('type', $event->ID) == 'video') {
            if (get_field('video_type', $event->ID) == 'url') {
              $href = get_field('video_url', $event->ID);
              preg_match('/src="(.+?)"/', $href, $matches);
              $href = $matches[1];
            } else {
              $href = get_field('video_file', $event->ID)['url'];
            }
          } elseif (get_field('type', $event->ID) == 'link') {
            $href = get_field('link', $event->ID);
          } else {
            $href = get_the_permalink($event->ID);
          }
          ?>

          <?php
            $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
            $event_title = get_the_title($event->ID);
            $event_permalink = $href;
            $event_date = eo_get_the_start($format, $event->ID, null, $event->occurrence_id);  // Uncommented for actual date
            $event_location = eo_get_venue($event->ID);  // Uncommented for actual location
          ?>
          <tr>
            <td class="event-name">
              <h2 class="post-title"><a href="<?php echo $event_permalink; ?>"><?php echo $event_title; ?></a></h2>
            </td>
            <td class="event-date"><?php echo $event_date; ?></td>
            <!-- <td class="event-location"><?php echo $event_location; ?></td> -->
            <td class="event-button"><a href="<?php echo $event_permalink; ?>" class="button button--gradient">Learn More</a></td>
          </tr>
        <?php endforeach; ?>
        </tbody>
        </table>
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