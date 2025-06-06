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
		<header class="hero">
			<div class="hero__container">
				<img class="hero__image" src="<?php echo home_url() . '/wp-content/uploads/2025/05/hero.jpg'; ?>" alt="" />
			</div>

      <div class="hero__headline-image">
        <img src="<?php echo get_theme_file_uri('public/our-kids-deserve-better.png'); ?>" alt="" />
      </div>

			<div class="hero__content">
				<div class="hero__content-inner">
          <div class="hero__headline">
            <h2>As parents, we have the power to transform education</h2>
          </div>

					<div class="hero__button">
						<button data-fancybox data-src="<?php echo home_url() . '/wp-content/uploads/2025/06/welcome-video-1440.mp4'; ?>" class="button button--ghost" aria-label="Play video">
							<span class="label">Hear from MacKenzie <i class="play"></i></span>
						</button>
					</div>

					<a data-fancybox href="<?php echo home_url() . '/wp-content/uploads/2025/06/IMG_2211-optimized-720.mp4'; ?>" class="hero__thumbnail">
						<img 
							class="hero__thumbnail-image"
							src="<?php echo home_url() . '/wp-content/uploads/2025/05/video-thumbnail.jpg'; ?>" 
							alt=""
						>
					</a>
				</div>
			</div>
		</header>

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
                "text" => "Moms are the leaders of the future let’s go congratulations 🎉🎉🎉",
                "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-9.jpg'),
                "handle" => "lolomllr",
                "name" => "Lorena Miller"
              ],
              [
                "text" => "I’m a (former) traditionally trained public school teacher and I agree with EVERYTHING you’re saying.",
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
                "text" => "Keep going 👏 You’re changing the national conversation and I’m so here for it 🔥",
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
                "text" => "I’m constantly inspired by the way you set up your education system",
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
                "text" => "I am such a big fan of your work! 🙌❤️ It’s absolutely amazing how child-centered it is and how childrens potentials are uncovered in the proccess of learning! I wish and hope that this new way becomes normal and all the children in the world 🌟❤️",
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
                "text" => "I love your message!! Since I started teaching I have been searching for a better way. I’m VERY interested in your education model. ❤️",
                "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-27.jpg'),
                "handle" => "ladyv23",
                "name" => "Virginia Murello"
              ],
              [
                "text" => "Public school teacher here—people don’t realize this, but more and more teachers are pulling their kids from public school and homeschooling everyday. When the ones that are closest to the education system are pulling their kids out of it, it’s time to pay attention. ✌️",
                "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-28.jpg'),
                "handle" => "thatcalteacherlife",
                "name" => "Stephanie Cavin | Homeschooler"
              ],
              [
                "text" => "We support this and agree!!! Let’s go!",
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
                "text" => "Have been following along for the last couple months! So excited about what you’re doing!!",
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
                "text" => "“The most important job we have as parents is to unlock these children’s potential.” 🔥🔥🔥",
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
                "text" => "Don’t depend on the system. Make your OWN systems and create the future you truly want!",
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
                "text" => "I LOVE the light that you are shining on education. As a homeschool mom of 5 kids who pulled her kids from the public school system, I have seen such a positive and drastic change in my kids! I’m determined to show how we homeschool and create a love for learning, so others can see there is more then one way to learn.❤️❤️",
                "thumbnail" => home_url('/wp-content/uploads/2025/06/ig-40.jpg'),
                "handle" => "raisingaspensandarrows",
                "name" => "Cheri | Homeschooling & Raising Kids"
              ],
            ];
            foreach ($comments as $comment): ?>
              <div class="swiper-slide">
                <img src="<?php echo $comment['thumbnail']; ?>" alt="" />
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

    <section class="future wrapper-layout">
      <div class="future__inner">
        <div class="future__content">
          <h2 class="future__headline">The stakes have never been higher</h2>
          <p class="future__description">The world is changing at a rapid pace, but education is stuck in the past. The gap between what students learn and the skills they need continues to widen.</p>
        </div>
      </div>

      <div class="future__stats">
        <div class="future__stat">
          <div class="future__stat-illo">
            <img src="<?php echo get_theme_file_uri('public/illo-book.png'); ?>" alt="" />
          </div>
          <h4 class="future__stat-text">2 out of 3 students in the US can't read or do math at grade level*</h4>
          <p class="future__stat-footnote">*Source: <a href="https://www.nationsreportcard.gov">National Assessment of Educational Progress (NAEP)</a></p>
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

		<section class="links wrapper">
			<div class="links__inner">
				<div class="links-list">
					<ul>
            <li class="active" data-video="<?php echo home_url(); ?>/wp-content/uploads/2025/06/personalized-learning-720.mp4"><span>Personalized Learning</span></li>
            <li data-video="<?php echo home_url(); ?>/wp-content/uploads/2025/06/mastery-based-learning-720.mp4"><span>Academic Mastery</span></li>
            <li data-video="<?php echo home_url(); ?>/wp-content/uploads/2025/06/life-skills-720.mp4"><span>Future-ready Life Skills</span></li>
            <li data-video="<?php echo home_url(); ?>/wp-content/uploads/2025/06/empowering-parents-720.mp4"><span>Empowering Parents</span></li>
            <li data-video="<?php echo home_url(); ?>/wp-content/uploads/2025/06/supporting-teachers-720.mp4"><span>Supporting Teachers</span></li>
          </ul>
				</div>

				<div class="video-wrapper">
          <div class="video-container">
            <video id="mainVideo" src="<?php echo home_url(); ?>/wp-content/uploads/2025/06/personalized-learning-720.mp4" autoplay loop muted playsinline></video>
          </div>
        </div>
			</div>
		</section>

    <section class="cta wrapper-layout">
      <div class="cta__inner">
        <h2 class="cta__headline">Transforming Education Together</h2>
        <div class="cta__content">
          <div class="cta__description content-block">
            <p>Real change happens when parents, educators, and communities unite around forging a path for the future. Whether you're supporting learning at home, innovating in the classroom, or advocating in your community, you have the power to transform education for your child.</p>
            <p>Get practical resources, connect with like-minded parents and advocates, and join a growing movement that's creating lasting change for America's students.</p>
          </div>

          <div class="cta__button">
            <a href="<?php echo home_url('/join-the-movement'); ?>" class="button button--large">Support your student</a>
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

    <section class="events wrapper-layout">
      <div class="events__inner">
        <h2 class="events__headline">Upcoming Events</h2>

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
          <a href="<?php echo home_url('/about'); ?>" class="next__link">
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
