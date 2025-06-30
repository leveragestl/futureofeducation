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
				</div>
			</div>
		</header>
    <?php endwhile; endif; ?>

    <?php if (have_rows('intro')) : while (have_rows('intro')) : the_row(); ?>
    <section class="intro wrapper">
      <div class="intro__inner">
        <div class="intro__content">
          <?php echo (get_sub_field('headline')) ? '<h3 class="intro__headline">' . get_sub_field('headline') . '</h3>' : ''; ?>
          <?php echo (get_sub_field('subheadline')) ? '<h4 class="intro__subheadline">' . get_sub_field('subheadline') . '</h4>' : ''; ?>

          <div class="intro__list" data-animate-group data-animate-stagger>
            <?php echo (get_sub_field('list_headline')) ? '<h4 class="intro__list-headline" data-animate>' . get_sub_field('list_headline') . '</h4>' : ''; ?>
            <ul class="intro__list-items" data-animate>
            <?php if (get_sub_field('list')) : ?>
              <?php 
              $list_items = explode("\n", get_sub_field('list'));
              foreach ($list_items as $item) {
                $item = trim($item);
                if (!empty($item)) {
                  echo '<li>' . $item . '</li>';
                }
              }
              ?>
            <?php endif; ?>
            </ul>
          </div>
        </div>

        <div class="intro__form">
          <div class="form join-the-movement-form"><?php echo do_shortcode('[gravityform id="4" title="false" ajax="true"]'); ?></div>
          <!-- <form class="form" action="" data-animate>
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
          </form> -->
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>

    <?php if (have_rows('call_to_action')) : while (have_rows('call_to_action')) : the_row(); ?>
    <section class="cta wrapper">
      <div class="cta__inner">

        <div class="cta__subheadline">
          <?php echo (get_sub_field('headline')) ? '<h3>' . get_sub_field('headline') . '</h3>' : ''; ?>
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
              <a href="<?php echo get_sub_field('link')['url']; ?>" target="<?php echo get_sub_field('link')['target']; ?>" class="teaser" data-animate>
                <!-- <div class="teaser__content">
                  <h3 class="teaser__title"><?php echo get_sub_field('link')['title']; ?></h3>
                </div> -->

                <!-- <div class="teaser__image">
                  <img src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>">
                </div> -->
                <img src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>" />
              </a>
            <?php endwhile; ?>
          </div>
        <?php endif; ?>
      </div>

      <div class="next">
        <a href="<?php echo home_url(); ?>" class="next__link">
          <span class="next__label">Next</span>
          <span class="next__title">Home</span>
        </a>
      </div>
    </section>
    <?php endwhile; endif; ?>

		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer(); 