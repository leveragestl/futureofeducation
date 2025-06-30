<?php
/**
 * Template Name: Get Involved
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
    <header class="hero wrapper">
      <div class="hero__inner parallax-container">
        <?php echo (get_sub_field('headline')) ? '<h2 class="hero__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>

        <?php if (get_sub_field('photos')) : ?>
          <?php $images = get_sub_field('photos'); ?>
          <div class="hero__images">
            <div class="hero__image">
              <img src="<?php echo $images[0]['url']; ?>" alt="<?php echo $images[0]['alt']; ?>" />
            </div>
            <div class="hero__image">
              <img src="<?php echo $images[1]['url']; ?>" alt="<?php echo $images[1]['alt']; ?>" />
            </div>
          </div>
        <?php endif; ?>

        <?php if (get_sub_field('paragraph')) : ?>
        <div class="hero__paragraph content-block">
          <div class="hero__paragraph-inner">
            <?php echo (get_sub_field('paragraph')) ? get_sub_field('paragraph') : ''; ?>
          </div>
        </div>
        <?php endif; ?>
      </div>
    </header>
    <?php endwhile; endif; ?>

    <?php if (have_rows('forms_group')) : while (have_rows('forms_group')) : the_row(); ?>
    <section class="forms">
      
      <div class="forms__headline-container">
        <?php echo (get_sub_field('headline')) ? '<h3 class="forms__headline">' . get_sub_field('headline') . '</h3>' : ''; ?>
      </div>

      
      <?php if (have_rows('forms')) : ?>
      <div class="forms__tabs">

        <?php while (have_rows('forms')) : the_row(); ?>
        <input type="radio" name="tabs" id="tab-<?php echo get_row_index(); ?>" <?php echo (get_row_index() === 1) ? 'checked' : ''; ?>>
        <label for="tab-<?php echo get_row_index(); ?>" class="tab-link"><?php echo get_sub_field('tab_title'); ?></label>
        <?php endwhile; ?>


        <div class="forms__tab-content">
          <?php while (have_rows('forms')) : the_row(); ?>
          <div class="tab-panel" id="tab-<?php echo get_row_index(); ?>">

            <div class="forms__instructions">
              <?php echo (get_sub_field('form_headline')) ? '<h3 class="forms__instructions-headline">' . get_sub_field('form_headline') . '</h3>' : ''; ?>
              <?php echo (get_sub_field('form_paragraph')) ? '<p>' . get_sub_field('form_paragraph') . '</p>' : ''; ?>
            </div>

            <div class="forms__inner">
              <div class="forms__letter content-block">
                <p>Dear [Representative's Name],</p>
                <p>Today I am reaching out to you as a constituent and concerned community member regarding the future of education in our state. It is shocking that only one in three students nationally reads at grade level. If we don't embrace innovative solutions now that can dramatically improve academic outcomes while preparing students for real-world success, we risk losing an entire generation of students to mediocrity.</p>
                <p>Our current education system is based largely on a century-old model that is outdated and simply isn't delivering the results our children need. Modern technology and innovative teaching approaches give us unprecedented opportunities to transform academic achievement while developing crucial life skills.</p>
                <p>We need an education system that:</p>
                <ul>
                  <li>Uses innovative tools and methods proven to accelerate learning, close achievement gaps, and boost core academic outcomes in reading, writing, and mathematics through personalized, mastery-based learning</li>
                  <li>Balances rigorous academics with the development of essential life skills, including critical thinking, financial literacy, and problem-solving</li>
                  <li>Develops student capabilities in communication, leadership, and personal responsibility</li>
                  <li>Creates opportunities for real-world learning and practical skill application</li>
                </ul>
                <p>I urge you to act on behalf of our children before it's too late. Step up today and support legislation and funding that enables our schools to implement these proven approaches to rebuild our education system. Specifically, we need:</p>
                <ul>
                  <li>Investment in tools and methods that demonstrably improve academic outcomes</li>
                  <li>Support for programs that integrate life skills development into the core curriculum</li>
                  <li>Resources to help schools implement personalized learning approaches</li>
                  <li>Measures to ensure all students have access to these educational innovations</li>
                  <li>Funding for evidence-based programs that show measurable results</li>
                </ul>
                <p>What is your stance on modernizing education? How will you vote on any upcoming legislation related to these issues? I look forward to your response and to working together to create an education system that delivers both academic excellence and real-world preparedness.
                <p>It's now or never for our children and the future of education.</p>
                <p>Sincerely,</p>
                <p>[Name]</p>
              </div>
              <div class="form get-involved-form"><?php echo do_shortcode('[gravityform id="3" title="false" ajax="true"]'); ?></div>
              <!-- <form class="form" data-form-type="email-template">

                <fieldset class="form__fieldset">
                  <div class="form__field form__field--short">
                    <label for="form-<?php echo get_row_index(); ?>-prefix">Prefix</label>
                    <select id="form-<?php echo get_row_index(); ?>-prefix" name="form-<?php echo get_row_index(); ?>-prefix" required>
                      <option value="" disabled selected>Prefix</option>
                      <option value="Mr.">Mr.</option>
                      <option value="Mrs.">Mrs.</option>
                      <option value="Ms.">Ms.</option>
                      <option value="Dr.">Dr.</option>
                      <option value="Mx.">Mx.</option>
                    </select>
                  </div>
                  <div class="form__field">
                    <label for="form-<?php echo get_row_index(); ?>-first-name">First Name</label>
                    <input type="text" id="form-<?php echo get_row_index(); ?>-first-name" name="form-<?php echo get_row_index(); ?>-first-name" required placeholder="First Name">
                  </div>
                  <div class="form__field form__field--large">
                    <label for="form-<?php echo get_row_index(); ?>-last-name">Last Name</label>
                    <input type="text" id="form-<?php echo get_row_index(); ?>-last-name" name="form-<?php echo get_row_index(); ?>-last-name" required placeholder="Last Name">
                  </div>
                  <div class="form__field form__field--large">
                    <label for="form-<?php echo get_row_index(); ?>-recipient-email">Recipient's Email</label>
                    <input type="email" id="form-<?php echo get_row_index(); ?>-recipient-email" name="form-<?php echo get_row_index(); ?>-recipient-email" required placeholder="Recipient's Email Address">
                  </div>
                </fieldset>
                <fieldset class="form__fieldset">
                  <div class="form__field form__field--large">
                    <label for="form-<?php echo get_row_index(); ?>-email">Email Address</label>
                    <input type="email" id="form-<?php echo get_row_index(); ?>-email" name="form-<?php echo get_row_index(); ?>-email" required placeholder="Email Address">
                  </div>
                  <div class="form__field">
                    <label for="form-<?php echo get_row_index(); ?>-phone">Phone Number</label>
                    <input type="tel" id="form-<?php echo get_row_index(); ?>-phone" name="form-<?php echo get_row_index(); ?>-phone" placeholder="Phone Number">
                  </div>
                </fieldset>
                <fieldset class="form__fieldset">
                  <div class="form__field form__field--large">
                    <label for="form-<?php echo get_row_index(); ?>-address">Address</label>
                    <input type="text" id="form-<?php echo get_row_index(); ?>-address" name="form-<?php echo get_row_index(); ?>-address" required placeholder="Address">
                  </div>
                  <div class="form__field form__field--short">
                    <label for="form-<?php echo get_row_index(); ?>-zip">Zip Code</label>
                    <input type="text" id="form-<?php echo get_row_index(); ?>-zip" name="form-<?php echo get_row_index(); ?>-zip" required placeholder="Zip Code">
                  </div>
                </fieldset>
                <button type="submit" class="button button--gradient">Send</button>
              </form> -->
            </div>
          </div>
          <?php break; ?>
          <?php endwhile; ?>

          <?php while (have_rows('forms')) : the_row(); ?>
          <div class="tab-panel" id="tab-<?php echo get_row_index(); ?>">
            <div class="coming-soon">
              <h3 class="font-bold text-center text-indigo">Coming Soon</h3>
            </div>
          </div>
          <?php break; ?>
          <?php endwhile; ?>

        </div><!-- .forms__tab-content -->
      </div><!-- .forms__tabs -->
      <?php endif; ?>

      <div class="wrapper-wide">
        <div class="next">
          <a href="<?php echo home_url('/news'); ?>" class="next__link">
            <span class="next__label">Next</span>
            <span class="next__title">News</span>
          </a>
        </div>
      </div>

    </section>
    <?php endwhile; endif; ?>

		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer(); 