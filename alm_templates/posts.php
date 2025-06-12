<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
  <a class="post-header" <?php echo (get_field('type') == 'video') ? 'data-fancybox href="' . get_field('video')['url'] . '"' : 'href="' . get_the_permalink() . '"'; ?>>
    <img class="post-header__image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

    <?php if(get_field('type') == 'video'): ?>
      <div class="post-header__button"><button class="button button--ghost">Watch Video</button></div>
    <?php endif; ?>

    <?php if(get_field('icon')): ?>
      <div class="post-header__icon"><img src="<?php echo get_field('icon')['url']; ?>" alt="" /></div>
    <?php else: ?>
      <div class="post-header__icon"><img src="<?php echo get_theme_file_uri('public/icon-apple.png'); ?>" alt="" /></div>
    <?php endif; ?>
  </a>

  <div class="post-inner">
    <div class="post-content">
      <h2 class="post-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
      <div class="post-excerpt content-block"><?php echo (get_field('content')) ? wp_trim_words(get_field('content'), 25, '...') : get_the_excerpt(); ?></div>
      <?php if(get_field('author')): ?>
        <div class="post-author">By: <?php echo get_field('author'); ?></div>
      <?php endif; ?>
      <a href="<?php the_permalink(); ?>" class="post-link">Read</a>
    </div>
  </div>
</article>