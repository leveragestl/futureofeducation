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
		<header class="hero">
			<div class="hero__container">
        <div class="hero__image">
          <img src="<?php echo home_url() . '/wp-content/uploads/2025/05/about-hero.jpg'; ?>" alt="" />
        </div>
			</div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <h3 class="hero__headline font-market">We are...</h3>
          <ul>
            <li>Focused on practical solutions.</li>
            <li>Centered on student needs.</li>
            <li>Building future-ready skills.</li>
          </ul>
				</div>
			</div>
		</header>

    <section class="letter wrapper">

			<div class="letter__container">
        <div class="letter__content">
          <h3 class="letter__headline">A Letter From Mackenzie</h3>
          <div class="letter__content-inner">
            <div class="letter__content-image">
              <img src="<?php echo get_theme_file_uri('public/event-2.jpg'); ?>" alt="" />
            </div>
            <div class="letter__content-letter content-block">
              <p>Hi! I'm MacKenzie Price, Founder of Future of Education. Just like you, I am a parent who wanted the best for my child's education. When my daughters came home from school saying "Mom, school is so boring," I couldn't believe it! My girls loved to learn. School had failed them—and they weren't the only ones.</p>
              <p>Two out of three kids in America cannot read or do math at grade level. The reality we face is stark: millions of kids (yours included!) need and deserve better.</p>
              <p>So I set out to discover what learning could look like when it's personalized for each student, encourages critical thinking and creativity, and prioritizes real-world skills. The results convinced me that transformational change IS possible.</p>
              <p>From this work, Future of Education was born. Here, you'll find resources, community forums, and science-backed insights about what works. Our mission is simple: we're building a nationwide coalition of parents and educators to transform America's education system. Progress happens when we focus on practical solutions that prepare students for tomorrow's world.</p>
              <p>At Future of Education, everything we do stems from a fundamental belief: children are limitless. Our job is to help them unleash their potential.</p>
              <p>I hope you'll join me on this journey. Here's to building tomorrow together.</p>
              <img src="<?php echo get_theme_file_uri('public/signature.svg'); ?>" alt="" class="letter__content-signature" />
            </div>
          </div>
        </div>
      </div>
		</section>

    <section class="intro wrapper">
      <div class="intro__inner">
        <div class="intro__content">
          <p>MacKenzie Price, founder of Future of Education and Alpha Schools, is revolutionizing K-12 education by harnessing the power of AI to reimagine the school day, enabling students to tackle real-world challenges, build life skills, and become self-driven learners. A Stanford graduate and host of the top-rated Future of Education podcast, Price is a member of the Forbes Technology Council and serves on the advisory board of the Center for Education and Public Service at the University of Austin</p>
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

		<section class="feature wrapper">
			<div class="feature__inner">

        <div class="feature__video-container video-container video-autoplays">
          <video src="<?php echo home_url() . '/wp-content/uploads/2025/06/IMG_2212-optimized-720.mp4'; ?>" poster="<?php echo home_url() . '/wp-content/uploads/2025/05/video-thumbnail-2.jpg'; ?>" autoplay muted loop playsinline></video>
          <div data-fancybox data-src="<?php echo home_url() . '/wp-content/uploads/2025/06/IMG_2212-optimized-720.mp4'; ?>" class="feature__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <button class="mute-button">
            <i class="mute"></i>
            <span class="screen-reader-text">Mute</span>
          </button>
        </div>

        <div class="feature__content">
          <h2 class="feature__headline">Featured In</h2>

          <div class="feature__logo-grid">

            <div class="feature__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-forbes.png'); ?>" alt="">
            </div>
            <div class="feature__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-fortune.png'); ?>" alt="">
            </div>
            <div class="feature__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-success.png'); ?>" alt="">
            </div>
            <div class="feature__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-inc.png'); ?>" alt="">
            </div>
            <div class="feature__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-fortune.png'); ?>" alt="">
            </div>
            <div class="feature__logo-grid-item">
              <img src="<?php echo get_theme_file_uri('public/logo-forbes.png'); ?>" alt="">
            </div>

          </div>

        </div>
			</div>
		</section>

    <section class="works wrapper">
      <div class="works__inner">
        <h2 class="works__headline">What Works</h2>
        <div class="works__content">
          <div class="works__steps">

            <a href="" class="works__step">
              <h4 class="works__step-headline">2 Hour Learning</h4>
              <span class="works__step-action">Learn More</span>
            </a>

            <a href="" class="works__step">
              <div class="works__step-headline">Alpha
              School</div>
              <span class="works__step-action">Learn More</span>
            </a>

            <a href="" class="works__step">
              <h4 class="works__step-headline">Free At-home Resources</h4>
              <span class="works__step-action">Download</span>
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

    <section class="testimonials">
      <div class="testimonials__inner">

        <div class="testimonials__slider swiper">
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

    <section class="video">
      <div class="video__inner">

        <div class="video__video-container video-container video-autoplays">
          <video src="<?php echo home_url() . '/wp-content/uploads/2025/06/IMG_2213-optimized-720.mp4'; ?>" poster="<?php echo home_url() . '/wp-content/uploads/2025/05/video-thumbnail-2.jpg'; ?>" muted loop playsinline></video>
          <div data-fancybox data-src="<?php echo home_url() . '/wp-content/uploads/2025/06/IMG_2213-optimized-720.mp4'; ?>" class="video__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <button class="mute-button">
            <i class="mute"></i>
            <span class="screen-reader-text">Mute</span>
          </button>
        </div>

      </div>
    </section>

    <section class="cta wrapper">
      <div class="cta__inner">
        <h2 class="cta__headline">Stay Educated With Mackenzie</h2>
        <p class="cta__content">Be inspired to ask the right questions! You have the power to support your child’s learning journey and create positive change in your community.</p>
        <form action="">
          <input type="text" placeholder="First Name" />
          <input type="email" placeholder="Email Address" />
          <div class="button-container"><button type="submit" class="button button--gradient">Sign Me Up</button></div>
        </form>

        <div class="cta__subheadline">
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
        <a href="<?php echo home_url('/get-involved'); ?>" class="next__link">
          <span class="next__label">Next</span>
          <span class="next__title">Get Involved</span>
        </a>
      </div>
    </section>

		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer(); 