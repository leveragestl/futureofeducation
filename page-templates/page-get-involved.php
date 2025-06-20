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
		<header class="hero !hidden">

			<div class="hero__container">
        <div class="hero__content">
          <h3 class="hero__headline">A Letter From MacKenzie</h3>
          <div class="hero__content-inner">
            <div class="hero__content-image">
              <img src="<?php echo get_theme_file_uri('public/event-2.jpg'); ?>" alt="" />
            </div>
            <div class="hero__content-letter content-block">
              <p>Future of Education, led by school founder and innovator MacKenzie Price, is building a nationwide coalition to transform America's education system. The reality is stark: only about a third of American students currently read or do math at grade level, and even fewer graduate with the essential life skills needed for success in the modern world - from financial literacy to effective communication and problem-solving. The numbers are even more troubling for minority and low-income students - just 10% of African American eighth graders meet grade-level math standards. This represents millions of children who need and deserve better.</p>
              <p>We unite parents, educators, and community leaders who share a vision for change and are ready to make their voices heard. Our coalition promotes practical, effective approaches that combine rigorous academics with real-world skills development, prioritizing both student needs and future readiness. We believe that transforming education requires focusing on solutions that will prepare the next generation for success, moving beyond political and social divisions to create real and lasting change.</p>
              <img src="<?php echo get_theme_file_uri('public/signature.svg'); ?>" alt="" class="hero__content-signature" />
            </div>
          </div>
        </div>
      </div>
		</header>

    <header class="hero wrapper">
      <div class="hero__inner parallax-container">
        <h2 class="hero__headline">It's time to act. America's education system needs student centered solutions.</h2>

        <div class="hero__images">
          <div class="hero__image parallax-image" data-parallax-speed="-0.1">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/05/meeting.jpg" alt="" />
          </div>
          <div class="hero__image parallax-image" data-parallax-speed="-0.3">
            <img src="<?php echo home_url(); ?>/wp-content/uploads/2025/06/get-involved-hero-2.jpg" alt="" />
          </div>
        </div>

        <div class="hero__paragraph content-block parallax-image" data-parallax-speed="-0.2">
          <div class="hero__paragraph-inner">
            <p>You have more power than you realize. Parents across America are discovering they don't have to wait for someone else to fix education. You can support your child's learning at home, advocate for innovative approaches that combine rigorous academics with real-world skills, and join thousands of parents, educators, and community leaders who are creating lasting change.</p>
            <p>When we unite around practical solutions and make our voices heard, we can create an education system that truly serves every student.</p>
          </div>
        </div>
      </div>
    </header>

    <section class="forms">
        
      <div class="forms__tabs">

        <input type="radio" name="tabs" id="tab1" checked>
        <label for="tab1" class="tab-link">Email Your Legislator</label>

        <input type="radio" name="tabs" id="tab2">
        <label for="tab2" class="tab-link">Email Your School Administrator</label>

        <div class="forms__tab-content">
          <div class="tab-panel" id="legislator-form">

            <div class="forms__instructions">
              <h3 class="forms__instructions-headline">Be A Champion for Change</h3>
              <p>Your elected officials want to hear from parents in their district. When you share your perspective on education, you're helping your representatives understand what families in your community need. Use our simple tool to tell your story and advocate for the changes that will help every student succeed</p>
            </div>

            <div class="forms__inner">
              <div class="forms__letter content-block">
                <p>Dear [Representative's Name],</p>
                <p>Today I am reaching out to you as a constituent and concerned [parent/community member/educator] regarding the future of education in our state. It is shocking that only one in three students nationally reads at grade level. If we don't embrace innovative solutions now that can dramatically improve academic outcomes while preparing students for real-world success, we risk losing an entire generation of students to mediocrity.</p>
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
                <p>What is your stance on modernizing education? How will you vote on any upcoming legislation related to these issues? |I look forward to your response and to working together to create an education system that delivers both academic excellence and real-world preparedness.
                <p>It's now or never for our children and the future of education.</p>
                <p>Sincerely,</p>
                <p>[Name]</p>
              </div>
              <form class="form" data-form-type="email-template">

                <fieldset class="form__fieldset">
                  <div class="form__field form__field--short">
                    <label for="legislator-prefix">Prefix</label>
                    <select id="legislator-prefix" name="legislator-prefix" required>
                      <option value="" disabled selected>Prefix</option>
                      <option value="Mr.">Mr.</option>
                      <option value="Mrs.">Mrs.</option>
                      <option value="Ms.">Ms.</option>
                      <option value="Dr.">Dr.</option>
                      <option value="Mx.">Mx.</option>
                    </select>
                  </div>
                  <div class="form__field">
                    <label for="legislator-first-name">First Name</label>
                    <input type="text" id="legislator-first-name" name="legislator-first-name" required placeholder="First Name">
                  </div>
                  <div class="form__field form__field--large">
                    <label for="legislator-last-name">Last Name</label>
                    <input type="text" id="legislator-last-name" name="legislator-last-name" required placeholder="Last Name">
                  </div>
                  <div class="form__field form__field--large">
                    <label for="recipient-email-legislator">Recipient's Email</label>
                    <input type="email" id="recipient-email-legislator" name="recipient-email" required placeholder="Recipient's Email Address">
                  </div>
                </fieldset>
                <fieldset class="form__fieldset">
                  <div class="form__field form__field--large">
                    <label for="legislator-email">Email Address</label>
                    <input type="email" id="legislator-email" name="legislator-email" required placeholder="Email Address">
                  </div>
                  <div class="form__field">
                    <label for="legislator-phone">Phone Number</label>
                    <input type="tel" id="legislator-phone" name="legislator-phone" placeholder="Phone Number">
                  </div>
                </fieldset>
                <fieldset class="form__fieldset">
                  <div class="form__field form__field--large">
                    <label for="legislator-address">Address</label>
                    <input type="text" id="legislator-address" name="legislator-address" required placeholder="Address">
                  </div>
                  <div class="form__field form__field--short">
                    <label for="legislator-zip">Zip Code</label>
                    <input type="text" id="legislator-zip" name="legislator-zip" required placeholder="Zip Code">
                  </div>
                </fieldset>
                <button type="submit" class="button button--gradient">Send</button>
              </form>
            </div>
          </div>

          <div class="tab-panel" id="administrator-form">

            <div class="forms__instructions">
              <h3 class="forms__instructions-headline">Be A Champion for Change</h3>
              <p>Your school administrators want to hear from parents in their district. When you share your perspective on education, you're helping your representatives understand what families in your community need. Use our simple tool to tell your story and advocate for the changes that will help every student succeed</p>
            </div>

            <div class="forms__inner">
              <div class="forms__letter content-block">
                <p>Dear [School Administrator's Name],</p>
                <p>Today I am reaching out to you as a constituent and concerned [parent/community member/educator] regarding the future of education in our state. It is shocking that only one in three students nationally reads at grade level. If we don't embrace innovative solutions now that can dramatically improve academic outcomes while preparing students for real-world success, we risk losing an entire generation of students to mediocrity.</p>
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
                <p>What is your stance on modernizing education? How will you vote on any upcoming legislation related to these issues? |I look forward to your response and to working together to create an education system that delivers both academic excellence and real-world preparedness.
                <p>It's now or never for our children and the future of education.</p>
                <p>Sincerely,</p>
                <p>[Name]</p>
              </div>
              <form class="form" data-form-type="email-template">

                <fieldset class="form__fieldset">
                  <div class="form__field form__field--short">
                    <label for="administrator-prefix">Prefix</label>
                    <select id="administrator-prefix" name="administrator-prefix" required>
                      <option value="" disabled selected>Prefix</option>
                      <option value="Mr.">Mr.</option>
                      <option value="Mrs.">Mrs.</option>
                      <option value="Ms.">Ms.</option>
                      <option value="Dr.">Dr.</option>
                      <option value="Mx.">Mx.</option>
                    </select>
                  </div>
                  <div class="form__field">
                    <label for="administrator-first-name">First Name</label>
                    <input type="text" id="administrator-first-name" name="administrator-first-name" required placeholder="First Name">
                  </div>
                  <div class="form__field form__field--large">
                    <label for="administrator-last-name">Last Name</label>
                    <input type="text" id="administrator-last-name" name="administrator-last-name" required placeholder="Last Name">
                  </div>
                  <div class="form__field form__field--large">
                    <label for="recipient-email-admin">Recipient's Email</label>
                    <input type="email" id="recipient-email-admin" name="recipient-email" required placeholder="Recipient's Email Address">
                  </div>
                </fieldset>
                <fieldset class="form__fieldset">
                  <div class="form__field form__field--large">
                    <label for="administrator-email">Email Address</label>
                    <input type="email" id="administrator-email" name="administrator-email" required placeholder="Email Address">
                  </div>
                  <div class="form__field">
                    <label for="administrator-phone">Phone Number</label>
                    <input type="tel" id="administrator-phone" name="administrator-phone" placeholder="Phone Number">
                  </div>
                </fieldset>
                <fieldset class="form__fieldset">
                  <div class="form__field form__field--large">
                    <label for="administrator-address">Address</label>
                    <input type="text" id="administrator-address" name="administrator-address" required placeholder="Address">
                  </div>
                  <div class="form__field form__field--short">
                    <label for="administrator-zip">Zip Code</label>
                    <input type="text" id="administrator-zip" name="administrator-zip" required placeholder="Zip Code">
                  </div>
                </fieldset>
                <button type="submit" class="button button--gradient">Send</button>
              </form>
            </div>
          </div>
        </div><!-- .forms__tab-content -->

      </div><!-- .forms__tabs -->

      <div class="wrapper-wide">
        <div class="next">
          <a href="<?php echo home_url('/news'); ?>" class="next__link">
            <span class="next__label">Next</span>
            <span class="next__title">News</span>
          </a>
        </div>
      </div>

    </section>

		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer(); 