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
		<section class="hero">
			<div class="hero__container">
				<img class="hero__image" src="<?php echo home_url() . '/wp-content/uploads/2025/05/hero.jpg'; ?>" alt="" />
			</div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <div class="hero__headline">
            <h2>Transform their education to create endless opportunity</h2>
          </div>

					<div class="hero__button">
						<button class="button button--ghost" aria-label="Play video">
							<span class="label">Play Video</span>
						</button>
					</div>

					<div class="hero__thumbnail">
						<img 
							class="hero__thumbnail-image"
							src="<?php echo home_url() . '/wp-content/uploads/2025/05/video-thumbnail.jpg'; ?>" 
							alt="Video thumbnail"
						>
					</div>
				</div>
			</div>
		</section>

    <section class="future wrapper-layout">
      <div class="future__inner">
        <div class="future__content">
          <h2 class="future__headline">Our children's future is at stake</h2>
          <p class="future__description">Over the past 45 years, academic achievement in the U.S. has declined dramatically. There has been stagnant academic growth and widening knowledge gaps across the country.</p>
        </div>
        
        <div class="future__chat">
          <button class="future__chat-close">Hide</button>
          <img src="<?php echo get_theme_file_uri('public/chat.png'); ?>" alt="">
        </div>
      </div>

      <div class="future__stats">
        <div class="future__stat">
          <div class="future__stat-illo">
            <img src="<?php echo get_theme_file_uri('public/illo-book.png'); ?>" alt="" />
          </div>
          <h4 class="future__stat-text">Only 1 in 3 students are reading at grade level</h4>
        </div>

        <div class="future__stat">
          <div class="future__stat-illo">
            <img src="<?php echo get_theme_file_uri('public/illo-pages.png'); ?>" alt="" />
          </div>
          <h4 class="future__stat-text">The average high school senior scores no better on nationwide tests than the best 3rd grader</h4>
        </div>

        <div class="future__stat">
          <div class="future__stat-illo">
            <img src="<?php echo get_theme_file_uri('public/illo-faces.png'); ?>" alt="" />
          </div>
          <h4 class="future__stat-text">Students' happiness steadily decreases each year</h4>
        </div>
      </div>

    </section>

		<section class="links-section wrapper">
			<div class="links-section__inner">
				<div class="links-list">
					<ul>
            <li class="active"><a href="#">Student-First Learning</a></li>
            <li><a href="#">Modernizing Teaching</a></li>
            <li><a href="#">Parent Empowerment</a></li>
            <li><a href="#">Supporting Teachers</a></li>
            <li><a href="#">Measurable Improvements</a></li>
          </ul>
				</div>

				<div class="headshot-container">
					<img 
						src="<?php echo get_theme_file_uri('public/headshot.jpg'); ?>"
						alt="Leadership headshot"
					>
				</div>
			</div>
		</section>

    <section class="cta-section wrapper-layout">
      <div class="cta-section__inner">
        <h2 class="cta-section__headline">Transforming Education Together</h2>
        <div class="cta-section__content">
          <div class="cta-section__description content-block">
            <p>Every child deserves the opportunity to thrive - and together, we can make that happen with your voice.</p>
            <p>Building tomorrow's education system begins in our communities today. This is our moment to transform American education. Not through politics or bureaucracy, but through practical solutions that put students first.</p>
          </div>

          <div class="cta-section__button">
            <a href="#" class="button button--large">Join the Movement</a>
          </div>
        </div>
      </div>
    </section>

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

    <section class="events-section wrapper-layout">
      <div class="events-section__inner">
        <h2 class="events-section__headline">Upcoming Events</h2>

        <div class="events-list">
          <?php foreach ($events as $event) : ?>
            <a href="#" class="event">
              <div class="event__content">
                <p class="event__date"><?php echo $event['date']; ?></p>
                <div class="event__title-container">
                  <h3 class="event__title"><?php echo $event['title']; ?></h3>
                  <span class="event__button">Learn more</span>
                </div>
              </div>

              <div class="event__image">
                <img src="<?php echo $event['img']; ?>" alt="<?php echo $event['title']; ?>">
              </div>
            </a>
          <?php endforeach; ?>
        </div>

        <div class="next">
          <a href="#" class="next__link">
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
