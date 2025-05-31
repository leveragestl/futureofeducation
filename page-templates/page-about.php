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
		<section class="hero">
			<div class="hero__container">
        <div class="hero__image">
          <img src="<?php echo home_url() . '/wp-content/uploads/2025/05/about-hero.jpg'; ?>" alt="" />
        </div>
			</div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <ul>
            <li>Solutions-focused.</li>
            <li>Student-centered.</li>
            <li>Future-ready.</li>
          </ul>
				</div>
			</div>
		</section>

    <section class="intro wrapper">
      <div class="intro__inner">
        <div class="intro__content">
          <p><strong class="uppercase">Mackenzie Price, Education Innovator And Founder Of The Future Of Education Movement</strong>, believes in America's potential to once again be a global leader in education. MacKenzie is revolutionizing the landscape of K-12 education by harnessing the power of Al to offer students personalized, mastery-based learning. Price, Stanford alumna and host of the top-rated Future of Education podcast, is a member of the Forbes Technology Council and the advisory board of the Center for Education and Public Service at the University of Austin.</p>
        </div>
      </div>

      <div class="intro__image-quote">
        <div class="intro__image">
          <img src="<?php echo home_url() . '/wp-content/uploads/2025/05/headshot-2.jpg'; ?>" alt="" />
        </div>

        <blockquote class="intro__quote">
          <p>I believe in America's potential to once again be a global leader in education”</p>
          <cite>
            <img src="<?php echo get_theme_file_uri('public/signature.svg'); ?>" alt="Mackenzie Price Signature" />
          </cite>
        </blockquote>
      </div>
    </section>

		<section class="feature-section wrapper">
			<div class="feature-section__inner">

        <div class="feature-section__video-container video-container">
          <video src="" poster="<?php echo home_url() . '/wp-content/uploads/2025/05/video-thumbnail-2.jpg'; ?>" autoplay muted loop playsinline></video>
          <div class="feature-section__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <button class="mute-button">
            <i class="mute"></i>
            <span class="screen-reader-text">Mute</span>
          </button>
        </div>

        <div class="feature-section__content">
          <h2 class="feature-section__headline">Featured In</h2>

          <div class="feature-section__logo-grid">

            <div class="feature-section__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-forbes.png'); ?>" alt="">
            </div>
            <div class="feature-section__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-fortune.png'); ?>" alt="">
            </div>
            <div class="feature-section__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-success.png'); ?>" alt="">
            </div>
            <div class="feature-section__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-inc.png'); ?>" alt="">
            </div>
            <div class="feature-section__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-fortune.png'); ?>" alt="">
            </div>
            <div class="feature-section__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-forbes.png'); ?>" alt="">
            </div>

          </div>

        </div>
			</div>
		</section>

    <section class="works-section wrapper">
      <div class="works-section__inner">
        <h2 class="works-section__headline">What Works</h2>
        <div class="works-section__content">
          <div class="works-section__steps">

            <a href="" class="works-section__step">
              <h4 class="works-section__step-headline">2 Hour Learning</h4>
              <span class="works-section__step-action">Learn More</span>
            </a>

            <a href="" class="works-section__step">
              <div class="works-section__step-headline">Alpha
              School</div>
              <span class="works-section__step-action">Learn More</span>
            </a>

            <a href="" class="works-section__step">
              <h4 class="works-section__step-headline">Free At-home Resources</h4>
              <span class="works-section__step-action">Download</span>
            </a>

          </div>
        </div>
      </div>
    </section>

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

    <section class="testimonials-section">
      <div class="testimonials-section__inner">

        <div class="testimonials-section__slider swiper">
          <div class="swiper-wrapper">
            <?php foreach ($testimonials as $testimonial) : ?>
            <div class="swiper-slide testimonial">
              <div class="testimonial__inner">
                <div class="testimonial__thumbnail">
                  <img src="<?php echo $testimonial['thumbnail']; ?>" alt="">
                </div><!-- .testimonial__thumbnail -->

                <div class="testimonial__content">
                  <blockquote class="testimonial__quote">
                    <p><?php echo $testimonial['quote']; ?></p>
                  </blockquote>
                  <div class="testimonial__author">
                    <h4 class="testimonial__author-name"><?php echo $testimonial['author']; ?></h4>
                  </div>
                </div><!-- .testimonial__content -->
              </div><!-- .testimonial__inner -->
            </div><!-- .testimonial -->

            <?php endforeach; ?>
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

    <section class="video-section">
      <div class="video-section__inner">
        <div class="video-section__video-container video-container">
          <video src="" poster="<?php echo home_url() . '/wp-content/uploads/2025/05/about-video-poster.jpg'; ?>" autoplay muted loop playsinline></video>
          <div class="video-section__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <button class="mute-button">
            <i class="mute"></i>
            <span class="screen-reader-text">Mute</span>
          </button>
        </div>
      </div>
    </section>

    <section class="cta-section wrapper">
      <div class="cta-section__inner">
        <h2 class="cta-section__headline">Stay Educated With Mackenzie</h2>
        <p class="cta-section__content">Mackenzie will inspire you to ask the right questions when it comes to your child’s education and provide you with the tools to be empowered parents and advocate for a better way.</p>
        <form action="">
          <input type="text" placeholder="First Name" />
          <input type="email" placeholder="Email Address" />
          <button type="submit" class="button button--gradient">Sign Me Up</button>
        </form>

        <div class="cta-section__subheadline">
          <h3>The future of education starts with <span class="font-market text-[50px] text-sky underline-curve">you</span></h3>
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

        <div class="teasers-list">
          <?php foreach ($teasers as $teaser) : ?>
            <a href="#" class="teaser">
              <div class="teaser__content">
                <h3 class="teaser__title"><?php echo $teaser['title']; ?></h3>
              </div>

              <div class="teaser__image">
                <img src="<?php echo $teaser['img']; ?>" alt="<?php echo $teaser['title']; ?>">
              </div>
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="next">
        <a href="#" class="next__link">
          <span class="next__label">Next</span>
          <span class="next__title">Get Involved</span>
        </a>
      </div>
    </section>

		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer(); 