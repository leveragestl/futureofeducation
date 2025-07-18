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

    <!-- Hero -->
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
          <?php if (have_rows('list')) : ?>
            <ul>
              <?php while (have_rows('list')) : the_row(); ?>
                <li><?php echo get_sub_field('list_item'); ?></li>
              <?php endwhile; ?>
            </ul>
          <?php endif; ?>
				</div>
			</div>
		</header>
    <?php endwhile; endif; ?>

    <!-- Letter -->
    <?php if (have_rows('letter')) : while (have_rows('letter')) : the_row(); ?>
    <section class="letter">

			<div class="letter__container">
        <div class="letter__content">
          <?php echo (get_sub_field('headline')) ? '<h3 class="letter__headline">' . get_sub_field('headline') . '</h3>' : ''; ?>
          <div class="letter__content-inner">
            <figure class="letter__content-image">
              <img src="<?php echo get_sub_field('photo')['url']; ?>" alt="<?php echo get_sub_field('photo')['alt']; ?>" />
              <?php if (have_rows('quote')) : while (have_rows('quote')) : the_row(); ?>
              <blockquote class="letter__content-quote">
                <?php echo (get_sub_field('text')) ? '<p>' . get_sub_field('text') . '</p>' : ''; ?>
                <?php echo (get_sub_field('cite')) ? '<cite>' . get_sub_field('cite') . '</cite>' : ''; ?>
              </blockquote>
              <?php endwhile; endif; ?>
            </figure>
            <div class="letter__content-letter content-block">
              <?php echo (get_sub_field('content')) ? get_sub_field('content') : ''; ?>
              <?php if (get_sub_field('signature')) : ?>
                <img width="350" data-animate src="<?php echo get_sub_field('signature')['url']; ?>" alt="<?php echo get_sub_field('signature')['alt']; ?>" class="letter__content-signature" />
              <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
		</section>
    <?php endwhile; endif; ?>

    <!-- Blocks -->
    <?php if (have_rows('blocks')) : ?>
    <section class="blocks wrapper-wide">
      <?php while (have_rows('blocks')) : the_row(); ?>
      <div class="blocks__block <?php echo (!get_sub_field('include_video')) ? 'blocks__block--centered' : ''; ?>" data-animate-group data-animate-stagger>
        <?php if (get_sub_field('include_video')) : ?>
        <div class="blocks__block-video">
          <div class="video-container" data-magnetic data-animate>
            <?php if (get_sub_field('video_type') === 'file') : ?>
              <video src="<?php echo get_sub_field('video_file')['url']; ?>" poster="<?php echo get_sub_field('video_thumbnail')['url']; ?>" muted loop playsinline></video>
              <div class="play-button" data-fancybox data-src="<?php echo get_sub_field('video_file')['url']; ?>"><button class="button button--ghost">Watch Video</button></div>
            <?php elseif (get_sub_field('video_type') === 'url') : ?>
              <img src="<?php echo get_sub_field('video_thumbnail')['url']; ?>" alt="<?php echo get_sub_field('video_thumbnail')['alt']; ?>" />
              <div class="play-button" data-fancybox data-src="<?php echo get_sub_field('video_url'); ?>"><button class="button button--ghost">Watch Video</button></div>
            <?php endif; ?>
            <button class="mute-button">
              <i class="mute"></i>
              <span class="screen-reader-text">Mute</span>
            </button>
          </div>
        </div>
        <?php endif; ?>

        <div class="blocks__block-content">
          <?php echo (get_sub_field('headline')) ? '<h3 class="blocks__headline" data-animate>' . get_sub_field('headline') . '</h3>' : ''; ?>
          <div class="blocks__paragraph content-block" data-animate>
            <?php echo (get_sub_field('paragraph')) ? get_sub_field('paragraph') : ''; ?>
          </div>
        </div>
      </div>
      <?php endwhile; ?>
    </section>
    <?php endif; ?>

    <!-- Resources -->
    <?php if (have_rows('resources')) : while (have_rows('resources')) : the_row(); ?>
    <section class="resources wrapper">
      <div class="resources__container parallax-container">
        <img src="<?php echo home_url() . '/wp-content/uploads/2025/06/about-resources.jpg'; ?>" alt="" class="resources__image parallax-image" />
      </div>
      <div class="resources__inner">
        <div class="resources__list-container">
          <div class="resources__list">
            <?php echo (get_sub_field('list_headline')) ? '<p style="margin-bottom: 0;"><strong>' . get_sub_field('list_headline') . '</strong></p>' : ''; ?>
            <?php if (get_sub_field('list')) : ?>
              <ul class="checklist">
                <?php
                $list_items = explode("\n", get_sub_field('list'));
                foreach ($list_items as $item) {
                  $item = trim($item);
                  if (!empty($item)) {
                    echo '<li>' . $item . '</li>';
                  }
                }
                ?>
              </ul>
            <?php endif; ?>
          </div>

          <!-- Comments Feature -->
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

                <?php foreach ($comments as $comment) : ?>
                  <div class="swiper-slide">
                    <img src="<?php echo $comment['thumbnail']; ?>" alt="<?php echo $comment['name']; ?>" />
                    <div class="future__comment-content">
                      <p><?php echo $comment['text']; ?></p>
                      <!-- <div class="future__comment-footer">
                        <span class="future__comment-name"><?php echo $comment['name']; ?></span> • <a href="https://instagram.com/<?php echo '@' . $comment['handle']; ?>" target="_blank" class="future__comment-handle"><?php echo '@' . $comment['handle']; ?></a>
                      </div> -->
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>

        </div>

        <div class="resources__boxes" data-animate-group>

          <div class="resources__box" data-animate>
            <?php echo (get_sub_field('headline')) ? '<h4 class="resources__box-headline">' . get_sub_field('headline') . '</h4>' : ''; ?>
            <?php echo (get_sub_field('subheadline')) ? '<h4 class="resources__box-subheadline">' . get_sub_field('subheadline') . '</h4>' : ''; ?>
          </div>

          <?php if (get_sub_field('button')) : ?>
            <a href="<?php echo get_sub_field('button')['url']; ?>" target="<?php echo get_sub_field('button')['target']; ?>" class="resources__box resources__button" data-animate>
              <h4 class="resources__box-headline"><?php echo get_sub_field('button_headline'); ?></h4>
              <span class="resources__button-text"><?php echo get_sub_field('button')['title']; ?> <i class="caret-right !bg-white !w-4 !h-4"></i></span>
            </a>
          <?php endif; ?>
        </div>
        
      </div>
    </section>
    <?php endwhile; endif; ?>

    <!-- Bio -->
    <?php if (have_rows('bio')) : while (have_rows('bio')) : the_row(); ?>
    <section class="bio wrapper">
      <div class="bio__inner">
        <div class="bio__content content-block">
          <?php echo (get_sub_field('biography')) ? get_sub_field('biography') : ''; ?>
        </div>
      </div>

      <div class="bio__image-quote">
        <div class="bio__image" data-animate data-animate-delay="0.5">
          <img src="<?php echo get_sub_field('photo')['url']; ?>" alt="<?php echo get_sub_field('photo')['alt']; ?>" />
        </div>

        <blockquote class="bio__quote" data-animate>
          <?php echo (get_sub_field('quote')) ? '<p>' . get_sub_field('quote') . '</p>' : ''; ?>
          <cite>
            <img src="<?php echo get_sub_field('signature')['url']; ?>" alt="<?php echo get_sub_field('signature')['alt']; ?>" />
          </cite>
        </blockquote>
      </div>
    </section>
    <?php endwhile; endif; ?>

    <!-- Feature -->
    <?php if (have_rows('feature')) : while (have_rows('feature')) : the_row(); ?>
		<section class="feature">
			<div class="feature__inner">

        <div class="feature__video-container video-container" data-magnetic data-animate>
          <?php if (get_sub_field('video_type') === 'url') : ?>
            <img src="<?php echo get_sub_field('video_thumbnail')['url']; ?>" alt="<?php echo get_sub_field('video_thumbnail')['alt']; ?>" />
            <div data-fancybox data-src="<?php echo get_sub_field('video_url'); ?>" class="feature__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <?php elseif (get_sub_field('video_type') === 'file') : ?>
            <img src="<?php echo get_sub_field('video_thumbnail')['url']; ?>" alt="<?php echo get_sub_field('video_thumbnail')['alt']; ?>" />
            <div data-fancybox data-src="<?php echo get_sub_field('video_file')['url']; ?>" class="feature__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <?php endif; ?>
        </div>

        <div class="feature__content wrapper-wide">
          <?php echo (get_sub_field('headline')) ? '<h2 class="feature__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>

          <?php if (have_rows('logos')) : ?>
          <div class="feature__logo-grid" data-animate-group data-animate-stagger>
            <?php while (have_rows('logos')) : the_row(); ?>
              <div class="feature__logo-grid-item">
                <img data-animate src="<?php echo get_sub_field('logo')['url']; ?>" alt="<?php echo get_sub_field('logo')['alt']; ?>" />
              </div>
            <?php endwhile; ?>

            <?php while (have_rows('logos')) : the_row(); ?>
              <style>
                .feature__logo-grid-item:nth-child(<?php echo get_row_index(); ?>) {
                  scale: <?php echo get_sub_field('mobile_scale') / 100; ?>;

                  @media (min-width: 768px) {
                    scale: <?php echo get_sub_field('tablet_scale') / 100; ?>;
                  }

                  @media (min-width: 1280px) {
                    scale: <?php echo get_sub_field('desktop_scale') / 100; ?>;
                  }
                }
              </style>
            <?php endwhile; ?>

          </div>
          <?php endif; ?>
        </div>
			</div>
		</section>
    <?php endwhile; endif; ?>

    <!-- Testimonials -->
    <?php if (have_rows('testimonials')) : ?>
    <section class="testimonials !hidden">
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

      <div class="testimonials__inner">

        <div class="testimonials__slider swiper" data-animate data-animate-position="50%">
          <div class="swiper-wrapper">
            <?php while (have_rows('testimonials')) : the_row(); ?>
            <div class="swiper-slide testimonial">
              <div class="testimonial__inner">
                <div class="testimonial__thumbnail">
                  <img src="<?php echo get_sub_field('photo')['url']; ?>" alt="<?php echo get_sub_field('photo')['alt']; ?>">
                </div><!-- .testimonial__thumbnail -->

                <div class="testimonial__content">
                  <blockquote class="testimonial__quote">
                    <?php echo get_sub_field('quote'); ?>
                  </blockquote>
                  <div class="testimonial__author">
                    <?php echo (get_sub_field('author')) ? '<h4 class="testimonial__author-name">' . get_sub_field('author') . '</h4>' : ''; ?>
                  </div>
                </div><!-- .testimonial__content -->
              </div><!-- .testimonial__inner -->
            </div><!-- .testimonial -->

            <?php endwhile; ?>
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
    <?php endif; ?>

    <!-- Video -->
    <section class="video !hidden">
      <div class="video__inner">

        <div class="video__video-container video-container video-autoplays">
          <video src="<?php echo home_url() . '/wp-content/uploads/2025/06/IMG_2213-optimized-720.mp4'; ?>" poster="<?php echo home_url() . '/wp-content/uploads/2025/05/video-thumbnail-2.jpg'; ?>" muted loop playsinline></video>
          <div data-fancybox data-magnetic data-src="<?php echo home_url() . '/wp-content/uploads/2025/06/IMG_2213-optimized-720.mp4'; ?>" class="video__video-button play-button"><button class="button button--ghost">Watch Video</button></div>
          <button class="mute-button">
            <i class="mute"></i>
            <span class="screen-reader-text">Mute</span>
          </button>
        </div>

      </div>
    </section>

    <!-- Call to Action -->
    <?php if (have_rows('call_to_action')) : while (have_rows('call_to_action')) : the_row(); ?>
    <section class="cta wrapper">
      <div class="cta__inner">
        <?php echo (get_sub_field('headline')) ? '<h2 class="cta__headline">' . get_sub_field('headline') . '</h2>' : ''; ?>
        <?php echo (get_sub_field('content')) ? '<div class="cta__content content-block">' . get_sub_field('content') . '</div>' : ''; ?>
        <div class="form email-capture-form"><?php echo do_shortcode('[gravityform id="2" title="false" ajax="true"]'); ?></div>
        <!-- <form action="" data-animate>
          <input type="text" placeholder="First Name" />
          <input type="email" placeholder="Email Address" />
          <div class="button-container"><button type="submit" class="button button--gradient">Sign Me Up</button></div>
        </form> -->

        <div class="cta__subheadline">
          <h3><?php echo (get_sub_field('subheadline')) ? get_sub_field('subheadline') : ''; ?></h3>
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
        <a href="<?php echo home_url('/get-involved'); ?>" class="next__link">
          <span class="next__label">Next</span>
          <span class="next__title">Get Involved</span>
        </a>
      </div>
    </section>
    <?php endwhile; endif; ?>
            
		<?php endwhile; ?>
	</main><!-- #main -->

<?php
get_footer(); 