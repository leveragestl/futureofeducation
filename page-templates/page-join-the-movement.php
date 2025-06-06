<?php
/**
 * Template Name: Join the Movement
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
          <img src="<?php echo home_url() . '/wp-content/uploads/2025/05/join-feature.jpg'; ?>" alt="" />
        </div>
			</div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <h3 class="hero__headline">This isn't just a crisis—it's a call to action</h3>
				</div>
			</div>
		</header>

    <section class="intro wrapper">
      <div class="intro__inner">
        <div class="intro__content">
          <h3 class="intro__headline">Join the Movement</h3>
          <h4 class="intro__subheadline">You can transform your child’s future.</h4>

          <div class="intro__list">
            <h4 class="intro__list-headline">Together, we can:</h4>
            <ul class="intro__list-items">
              <li>Create opportunities for every student</li>
              <li>Share proven solutions that work</li>
              <li>Form strong school-community partnerships</li>
              <li>Influence education policy for meaningful change</li>
            </ul>
          </div>
        </div>

        <div class="intro__form">
          <form class="form" action="">
            <fieldset class="form__fieldset">
              <div class="form__field form__field--full">
                <label for="name">Name</label>
                <input type="text" id="name" name="name" required placeholder="Name" />
              </div>
            </fieldset>

            <fieldset class="form__fieldset">
              <div class="form__field">
                <label for="phone">Phone</label>
                <input type="tel" id="phone" name="phone" required placeholder="Phone" />
              </div>
              <div class="form__field">
                <label for="zip">Zip Code</label>
                <input type="text" id="zip" name="zip" required placeholder="Zip Code" />
              </div>
            </fieldset>

            <fieldset class="form__fieldset">
              <div class="form__field">
                <label for="email">Email Address</label>
                <input type="email" id="email" name="email" required placeholder="Email Address" />
              </div>
            </fieldset>

            <button type="submit" class="button button--gradient">Join</button>
          </form>
        </div>
      </div>

    </section>

    <section class="cta wrapper">
      <div class="cta__inner">

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
        <a href="<?php echo home_url(); ?>" class="next__link">
          <span class="next__label">Next</span>
          <span class="next__title">Home</span>
        </a>
      </div>
    </section>

		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer(); 