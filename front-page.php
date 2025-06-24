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

    <!-- Hero -->
    <?php if (have_rows('hero')) : while (have_rows('hero')) : the_row(); ?>
		<header class="hero">
			<div class="hero__container parallax-container">
				<img class="hero__image parallax-image" src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>" />
			</div>

      <div class="hero__headline-container">
        <!-- <img src="<?php echo get_theme_file_uri('public/our-kids-deserve-better.png'); ?>" alt="" /> -->
        <h1 class="hero__headline font-neoneon glow-text">
          <span class="glow-text__text"><?php echo get_sub_field('headline'); ?></span>
          <span class="glow-text__outline" aria-hidden="true"><?php echo get_sub_field('headline'); ?></span>
        </h1>
      </div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <div class="hero__tagline">
            <h2><?php echo get_sub_field('tagline'); ?></h2>
          </div>

					<div class="hero__video-container">

            <div class="video-container video-autoplays" data-magnetic>
              <video src="<?php echo get_sub_field('video')['url']; ?>" <?php echo (get_sub_field('video')['poster']) ? 'poster="' . get_sub_field('video')['poster'] . '"' : ''; ?> autoplay muted loop playsinline></video>
              <div data-fancybox data-src="<?php echo get_sub_field('video')['url']; ?>" class="play-button"><button class="button button--ghost"><span class="label">Hear from MacKenzie <i class="play"></span></i></button></div>
              <button class="mute-button">
                <i class="mute"></i>
                <span class="screen-reader-text">Mute</span>
              </button>
            </div>
          </div>
				</div>
			</div>
		</header>
    <?php endwhile; endif; ?>

    <!-- Intro -->
    <?php if (have_rows('intro')) : while (have_rows('intro')) : the_row(); ?>
    <section class="intro wrapper-layout">
      <div class="intro__inner">
        <div class="intro__content">
          <?php echo (get_sub_field('headline')) ? '<h2 class="intro__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>
          <?php echo (get_sub_field('description')) ? '<div class="intro__description">' . get_sub_field('description') . '</div>' : ''; ?>
        </div>
      </div>

      <?php if (have_rows('stats')) : ?>
      <div class="intro__stats" data-animate-group data-animate-stagger data-animate-delay="0.5">
        <?php while (have_rows('stats')) : the_row(); ?>
        <div class="intro__stat" data-animate>
          <div class="intro__stat-illo">
            <img src="<?php echo get_sub_field('icon')['url']; ?>" alt="<?php echo get_sub_field('icon')['alt']; ?>" />
          </div>
          <h4 class="intro__stat-text"><?php echo get_sub_field('text'); ?></h4>
          <p class="intro__stat-footnote">Source: <a class="link" href="<?php echo get_sub_field('source')['source_url']; ?>"><?php echo get_sub_field('source')['source_text']; ?></a></p>
        </div>
        <?php endwhile; ?>
      </div>
      <?php endif; ?>
    </section>
    <?php endwhile; endif; ?>

    <!-- Videos -->
    <?php if (have_rows('videos')) : while (have_rows('videos')) : the_row(); ?>
		<section class="videos wrapper">
			<div class="videos__inner">
        <?php if (have_rows('videos_list')) : ?>
				<div class="videos-list">
					<ul>
            <?php while (have_rows('videos_list')) : the_row(); ?>
            <li class="active" data-video="<?php echo get_sub_field('video')['url']; ?>"><span><?php echo get_sub_field('label'); ?></span></li>
            <?php endwhile; ?>
          </ul>
				</div>
        <?php endif; ?>
				<div class="video-wrapper" data-animate data-animate-position="50%">
          <div class="video-container">
            <video id="mainVideo" src="<?php echo get_sub_field('videos_list')[0]['video']['url']; ?>" autoplay loop muted playsinline></video>
            <button class="mute-button">
              <i class="mute"></i>
              <span class="screen-reader-text">Mute</span>
            </button>
          </div>
        </div>
			</div>
		</section>
    <?php endwhile; endif; ?>

    <!-- CTA -->
    <?php if (have_rows('call_to_action')) : while (have_rows('call_to_action')) : the_row(); ?>
    <section class="cta wrapper-layout">
      <div class="cta__container parallax-container">
        <img class="cta__image parallax-image" src="<?php echo get_sub_field('background_image')['url']; ?>" alt="<?php echo get_sub_field('background_image')['alt']; ?>" />
      </div>
      <div class="cta__inner">
        <div class="cta__content-left">
          <?php echo (get_sub_field('headline')) ? '<h2 class="cta__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>
          <div class="cta__button" data-animate>
            <?php if (get_sub_field('button')) : ?>
              <a data-magnetic href="<?php echo get_sub_field('button')['url']; ?>" class="button button--large"><?php echo get_sub_field('button')['title']; ?></a>
            <?php endif; ?>
          </div>
        </div>
        <div class="cta__content-right">
          <div class="cta__description content-block">
            <?php echo (get_sub_field('description')) ? '<div class="cta__description-inner">' . get_sub_field('description') . '</div>' : ''; ?>
          </div>
        </div>
      </div>
    </section>
    <?php endwhile; endif; ?>

    <!-- Events -->
    <section class="events wrapper-layout">

      <?php
        $upcoming_events = eo_get_events(array(
          'numberposts' => 5,
          'event_end_after' => 'today',
          'showpastevents' => true,
        ));
        ?>

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

      <div class="events__inner">
        <h2 class="events__headline">Upcoming Events</h2>

        <div class="events-list" data-animate-group data-animate-stagger data-animate-delay="0.5">
          <?php foreach ($upcoming_events as $event) : ?>
            <?php // $format = ( eo_is_all_day($event->ID) ? get_option('date_format') : get_option('date_format').' '.get_option('time_format') ); ?>
            <a href="<?php echo get_the_permalink($event->ID); ?>" class="event" data-animate>
              <div class="event__content">
                <p class="event__date"><?php echo eo_get_the_start('M d Y', $event->ID,null,$event->occurrence_id); ?></p>
                <div class="event__title-container">
                  <h3 class="event__title"><?php echo get_the_title($event->ID); ?></h3>
                  <span class="event__button">Learn more</span>
                </div>
              </div>

              <div class="event__image">
                <img src="<?php echo get_the_post_thumbnail_url($event->ID); ?>" alt="<?php echo get_the_title($event->ID); ?>">
              </div>
            </a>
          <?php endforeach; ?>
        </div>

        <div class="next">
          <a href="<?php echo home_url('/about'); ?>" class="next__link">
            <span class="next__label">Next</span>
            <span class="next__title">About</span>
          </a>
        </div>

      </div>
    </section>
		<?php endwhile; ?>
	</main><!-- #main -->

  <!-- Comments Feature -->
  <?php if (have_rows('comments')) : ?>
  <div class="comments-feature">
    <button class="comments-feature-close">
      <span class="screen-reader-text">Hide</span>
      <span class="close-icon"></span>
    </button>
    <div class="swiper-container comments-swiper">
      <div class="swiper-wrapper">
        <?php
        $comments = [
          [
            "text" => "🫳🎤 thank you for being part of the change for better 🙌",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-1.jpg'),
            "handle" => "redbrickschoolhouse",
            "name" => "Kaycee De araujo"
          ],
          [
            "text" => "As a student, this is 100% accurate! Our education system needs to be fixed! This has been an ongoing issue for years and nothing will be done to improve it! We need to fix it! 🙌 ",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-2.jpg'),
            "handle" => "benmoonjy",
            "name" => "Ben"
          ],
          [
            "text" => "I love this! Kids are not all learning skills abc at the same pace. 👏",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-3.jpg'),
            "handle" => "littlefenders",
            "name" => "Jolène Fender"
          ],
          [
            "text" => "Kids are getting labeled so young and it prevents them from reaching their potential! 💔",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-4.jpg'),
            "handle" => "thatcalteacherlife",
            "name" => "Stephanie Cavin | Homeschooler"
          ],
          [
            "text" => "Excellent point….every child learns at a different pace and even that can change throughout their life!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-5.jpg'),
            "handle" => "rcb.bauer",
            "name" => "Jonnie Bauer"
          ],
          [
            "text" => "Love it❤️",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-6.jpg'),
            "handle" => "blessingyape_thedyslexiacoach",
            "name" => "Ingyape Blessing"
          ],
          [
            "text" => "This is amazing👏👏👏we need more of this in the world ❤️",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-7.jpg'),
            "handle" => "mfatimad91",
            "name" => "Fatima Murillo"
          ],
          [
            "text" => "Kids are amazing and can do so much when given the opportunities! Well done👏👏",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-8.jpg'),
            "handle" => "tjgrambooks",
            "name" => "TJ Gram"
          ],
          [
            "text" => "Moms are the leaders of the future let's go congratulations 🎉🎉🎉",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-9.jpg'),
            "handle" => "lolomllr",
            "name" => "Lorena Miller"
          ],
          [
            "text" => "I'm a (former) traditionally trained public school teacher and I agree with EVERYTHING you're saying.",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-10.jpg'),
            "handle" => "amberjean519",
            "name" => "Amber Jean"
          ],
          [
            "text" => "This is so cool! Hands on learning is the best learning 👏",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-11.jpg'),
            "handle" => "puresproutmicrogreens",
            "name" => "Cardiac Nurse/ Urban Farmer"
          ],
          [
            "text" => "Teachers are SCREAMING this, but no one is listening to us!!!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-12.jpg'),
            "handle" => "Monica_k_71",
            "name" => ""
          ],
          [
            "text" => "Keep going 👏 You're changing the national conversation and I'm so here for it 🔥",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-13.jpg'),
            "handle" => "elizshores",
            "name" => "Elizabeth Shores (Schirmer)"
          ],
          [
            "text" => "Brilliant! So many parents I work with need education alternatives. They're all at breaking point.",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-14.jpg'),
            "handle" => "amanda_ashy",
            "name" => "Amanda Ashy | Nervous System Support | Family Coach"
          ],
          [
            "text" => "I love this concept. I teach in public school and it is not serving soooo many of the students.",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-15.jpg'),
            "handle" => "stephdimercurio",
            "name" => "Stephanie DiMercurio"
          ],
          [
            "text" => "I'm constantly inspired by the way you set up your education system",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-16.jpg'),
            "handle" => "donalleniii",
            "name" => "Don Allen Stevenson III"
          ],
          [
            "text" => "Agreed! The question is- how do we start changing this? It begins with awareness and action- both at home and institutions! Kids deserve better....from all of us!❤️",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-17.jpg'),
            "handle" => "thebestbloomproject",
            "name" => "The Best Bloom Project"
          ],
          [
            "text" => "I am such a big fan of your work! 🙌❤️ It's absolutely amazing how child-centered it is and how childrens potentials are uncovered in the proccess of learning! I wish and hope that this new way becomes normal and all the children in the world 🌟❤️",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-18.jpg'),
            "handle" => "salixuchua",
            "name" => "Sali Khuchua"
          ],
          [
            "text" => "You are my confirmation that i am doing a great job thinking outside the box as an educator. Thank you 🙏🏼",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-19.jpg'),
            "handle" => "shefadesandbraids",
            "name" => "Yari 🪭✨"
          ],
          [
            "text" => "100%!! inspired by your journey time to make change 🔥",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-20.jpg'),
            "handle" => "joshyuaco",
            "name" => "Josh"
          ],
          [
            "text" => "I love what you're doing for future generations 🙌❤️",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-21.jpg'),
            "handle" => "drivenbylyrics",
            "name" => "DonnaPhillips"
          ],
          [
            "text" => "You are setting a new USA standard!! Congratulations!!!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-22.jpg'),
            "handle" => "Susan.b.sands",
            "name" => ""
          ],
          [
            "text" => "This is where education should be going! Amazing",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-23.jpg'),
            "handle" => "thenextelton",
            "name" => "Elton Garryelz"
          ],
          [
            "text" => "A real life superhero✨🦸‍♀️luv this!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-24.jpg'),
            "handle" => "momshineco",
            "name" => "MomShine"
          ],
          [
            "text" => "Yesss! This is how you do it!! 🔥🔥",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-25.jpg'),
            "handle" => "shuteaches",
            "name" => "ShuTeaches"
          ],
          [
            "text" => "So true! Love it, yes.. kids need new alternatives and skills to be able to thrive in this new world",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-26.jpg'),
            "handle" => "globaltutorsofficial",
            "name" => "Global Tutors | Online Tutoring"
          ],
          [
            "text" => "I love your message!! Since I started teaching I have been searching for a better way. I'm VERY interested in your education model. ❤️",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-27.jpg'),
            "handle" => "ladyv23",
            "name" => "Virginia Murello"
          ],
          [
            "text" => "Public school teacher here—people don't realize this, but more and more teachers are pulling their kids from public school and homeschooling everyday. When the ones that are closest to the education system are pulling their kids out of it, it's time to pay attention. ✌️",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-28.jpg'),
            "handle" => "thatcalteacherlife",
            "name" => "Stephanie Cavin | Homeschooler"
          ],
          [
            "text" => "We support this and agree!!! Let's go!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-29.jpg'),
            "handle" => "workwiththrive",
            "name" => "Thrive International Academy"
          ],
          [
            "text" => "I love your story and your vision, the world needs this. Please branch out to Europe!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-30.jpg'),
            "handle" => "thor.schuitemaker.wichstrom",
            "name" => "Thor Schuitemaker-Wichstrøm"
          ],
          [
            "text" => "Have been following along for the last couple months! So excited about what you're doing!!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-31.jpg'),
            "handle" => "_farmer_nicole",
            "name" => "Nicole Toebes | RedAg Farm"
          ],
          [
            "text" => "So inspiring!! 👏 excited to watch your journey.",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-32.jpg'),
            "handle" => "littleyogisca",
            "name" => "Little Yogis Academy® HQ"
          ],
          [
            "text" => "The most important job we have as parents is to unlock these children's potential. ❤️🔥🔥🔥",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-33.jpg'),
            "handle" => "msjuliechambers",
            "name" => "Julie Chambers"
          ],
          [
            "text" => "Love! All of this!!!!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-34.jpg'),
            "handle" => "thepreoccupiedprincipal",
            "name" => "Middle school principal"
          ],
          [
            "text" => "I believe in you and this ⚡️",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-35.jpg'),
            "handle" => "kirstencobabe",
            "name" => "Kirsten Cobabe"
          ],
          [
            "text" => "We can't expect different results without being innovative. I applaud the dedication",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-36.jpg'),
            "handle" => "channelingamilyn",
            "name" => "Amilyn Castro"
          ],
          [
            "text" => "This is how education should be!!!!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-37.jpg'),
            "handle" => "hannahmichell75",
            "name" => "Hannah Michell"
          ],
          [
            "text" => "Don't depend on the system. Make your OWN systems and create the future you truly want!",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-38.jpg'),
            "handle" => "aaronwjacobs",
            "name" => "Aaron Jacobs-Teacher Fitness Coach"
          ],
          [
            "text" => "This is such an inspiring approach to education! Love seeing innovative ideas like this in action! ❤️📚",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-39.jpg'),
            "handle" => "akomaunitycenter_",
            "name" => "Akoma Unity Center"
          ],
          [
            "text" => "I LOVE the light that you are shining on education. As a homeschool mom of 5 kids who pulled her kids from the public school system, I have seen such a positive and drastic change in my kids! I'm determined to show how we homeschool and create a love for learning, so others can see there is more then one way to learn.❤️❤️",
            "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-40.jpg'),
            "handle" => "raisingaspensandarrows",
            "name" => "Cheri | Homeschooling & Raising Kids"
          ],
        ];
        ?>

        <?php while (have_rows('comments')) : the_row(); ?>
          <div class="swiper-slide">
            <img src="<?php echo get_sub_field('photo')['url']; ?>" alt="<?php echo get_sub_field('photo')['alt']; ?>" />
            <div class="future__comment-content">
              <?php echo get_sub_field('comment'); ?>
              <!-- <div class="future__comment-footer">
                <span class="future__comment-name"><?php echo $comment['name']; ?></span> • <a href="https://instagram.com/<?php echo '@' . $comment['handle']; ?>" target="_blank" class="future__comment-handle"><?php echo '@' . $comment['handle']; ?></a>
              </div> -->
            </div>
          </div>
        <?php endwhile; ?>
      </div>
    </div>
  </div>
  <?php endif; ?>
<?php
get_footer();
