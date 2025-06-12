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

        <div class="hero__filters" data-animate-group data-animate-stagger data-animate-delay="0.5">
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
        <a href="<?php echo home_url('/events'); ?>" class="hero__view" data-animate data-animate-delay="0.25">View All</a>

      </div>
      
    </header>

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
              <th>Location</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
        <?php foreach ($upcoming_events as $event): ?>
          <?php
            $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') );
            $event_title = get_the_title($event->ID);
            $event_permalink = get_the_permalink($event->ID);
            $event_date = eo_get_the_start($format, $event->ID, null, $event->occurrence_id);  // Uncommented for actual date
            $event_location = eo_get_venue($event->ID);  // Uncommented for actual location
          ?>
          <tr>
            <td class="event-name">
              <h2 class="post-title"><a href="<?php echo $event_permalink; ?>">Event Name Here</a></h2>
            </td>
            <td class="event-date">Apr 23-28, 2025</td>
            <td class="event-location">Location Here</td>
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