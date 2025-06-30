<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package futureofeducation25
 */

?>

	<footer class="siteFooter">
		<div class="siteFooter__inner wrapper-layout">
      <div class="siteFooter__logo">
        <img src="<?php echo get_theme_file_uri('public/futureofeducation-logo.png'); ?>" alt="Future of Education Logo" />
      </div>

      <?php 
      $social_links = [
        [
          'url' => 'https://www.instagram.com/',
          'img' =>  get_theme_file_uri('public/instagram-1.png'),
        ],
        [
          'url' => 'https://www.instagram.com/',
          'img' =>  get_theme_file_uri('public/instagram-2.png'),
        ],
        [
          'url' => 'https://www.instagram.com/',
          'img' =>  get_theme_file_uri('public/instagram-3.png'),
        ],
        [
          'url' => 'https://www.instagram.com/',
          'img' =>  get_theme_file_uri('public/instagram-4.png'),
        ],
        [
          'url' => 'https://www.instagram.com/',
          'img' =>  get_theme_file_uri('public/instagram-5.png'),
        ],
        [
          'url' => 'https://www.instagram.com/',
          'img' =>  get_theme_file_uri('public/instagram-6.png'),
        ]
      ];
      ?>
      
      <div class="siteFooter__social">
        <!-- <a href="#" class="siteFooter__social-icon">
          <i class="instagram"></i>
        </a> -->
        <div class="siteFooter__social-images">
          <?php foreach ($social_links as $link) : ?>
            <a href="<?php echo $link['url']; ?>" class="siteFooter__social-link">
              <img src="<?php echo $link['img']; ?>" alt="" />
            </a>
          <?php endforeach; ?>
        </div>
      </div>

      <div class="siteFooter__sitemap-mailing-list">
        <div class="siteFooter__sitemap">
          <div class="siteFooter__sitemap-inner">
            <div class="siteFooter__sitemap-column">
              <h3 class="siteFooter__sitemap-title">Site Map</h3>
              <?php
                wp_nav_menu( array(
                  'theme_location'	=> 'nav-primary',
                  'container'				=> '',
                  'menu_id'					=> 'primary-menu',
                  'menu_class'			=> 'siteFooter__menu',
                  'link_class'			=> 'no-link-style',
                  'link_before'			=> '<span class="label">',
                  'link_after'			=> '</span>',
                ));
              ?>
            </div>
            <div class="siteFooter__sitemap-column">
              <h3 class="siteFooter__sitemap-title">Follow Us</h3>
              <ul>
                <li><a href="https://www.facebook.com/people/Future-of-education/61564869954739/">Facebook</a></li>
                <li><a href="https://x.com/mackenzieprice">X</a></li>
                <li><a href="https://www.instagram.com/futureof_education">Instagram</a></li>
                <li><a href="https://www.youtube.com/@future_of_education">YouTube</a></li>
              </ul>
            </div>
            <div class="siteFooter__sitemap-column">
              <h3 class="siteFooter__sitemap-title">Legal</h3>
              <ul>
                <li><a href="<?php echo home_url('/terms-and-conditions'); ?>">Terms and Conditions</a></li>
                <li><a href="<?php echo get_privacy_policy_url(); ?>">Privacy Policy</a></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="siteFooter__mailing-list">
          <div class="siteFooter__mailing-list-inner">
            <h3 class="siteFooter__mailing-list-title">Join Our Mailing List</h3>
            <p class="siteFooter__mailing-list-description">Be the first to know about exclusive events, news and updates!</p>
            <div class="form newsletter-form">
              <?php echo do_shortcode('[gravityform id="1" title="false"]'); ?>
            </div>
            <!-- <form action="#" class="siteFooter__mailing-list-form">
              <input type="email" placeholder="Email Address" />
              <button class="siteFooter__mailing-list-button button button--gradient" type="submit">Submit</button>
            </form> -->
          </div>
        </div>
      </div>

    </div><!-- /siteFooter__inner -->

    <div class="siteFooter__copyright">
      <p>&copy; <?php echo get_bloginfo('name'); ?>, <?php echo date('Y'); ?>. All Rights Reserved</p>
    </div>

  </footer>
</div><!-- #page -->
<span class="pageOverlay"></span>
<?php wp_footer(); ?>

</body>
</html>
