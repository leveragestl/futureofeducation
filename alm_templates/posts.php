<?php 
if (get_field('type') == 'video') {
  if (get_field('video_type') == 'url') {
    $href = get_field('video_url');
    preg_match('/src="(.+?)"/', $href, $matches);
    $href = $matches[1];
  } else {
    $href = get_field('video_file')['url'];
  }
} elseif (get_field('type') == 'link') {
  $href = get_field('link');
} else {
  $href = get_the_permalink();
}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('post'); ?>>
  <?php if(get_field('type') == 'video' && !get_field('icon')): ?>
    <div class="post-header__icon"><i class="play !bg-white scale-125"></i></div>
  <?php elseif(get_field('icon')): ?>
    <div class="post-header__icon"><img src="<?php echo get_field('icon')['url']; ?>" alt="" /></div>
  <?php else: ?>
    <div class="post-header__icon"><img src="<?php echo get_theme_file_uri('public/icon-apple.png'); ?>" alt="" /></div>
  <?php endif; ?>

  <a class="post-header" href="<?php echo $href; ?>" <?php echo (get_field('type') == 'link') ? 'target="_blank"' : ''; ?> <?php echo (get_field('type') == 'video') ? 'data-fancybox' : ''; ?>>
    <img class="post-header__image" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php the_title(); ?>" />

    <?php if(get_field('type') == 'video'): ?>
      <div class="post-header__button"><button class="button button--ghost">Watch Video</button></div>
    <?php endif; ?>
  </a>

  <div class="post-inner">
    <div class="post-content">
      <h2 class="post-title"><a href="<?php echo $href; ?>" <?php echo (get_field('type') == 'video') ? 'data-fancybox' : ''; ?> <?php echo (get_field('type') == 'link') ? 'target="_blank"' : ''; ?>><?php the_title(); ?></a></h2>
      <div class="post-excerpt content-block">
        <!-- <?php echo (get_field('content')) ? wp_trim_words(get_field('content'), 25, '...') : get_the_excerpt(); ?> -->

        <?php if(get_field('author')): ?>
          <div class="post-author">By: <?php echo get_field('author'); ?></div>
        <?php endif; ?>


        <?php if (has_excerpt()): ?>
          <?php the_excerpt(); ?>
        <?php elseif (get_field('content')): ?>
          <?php echo get_field('content'); ?>
        <?php else: ?>
          <?php the_excerpt(); ?>
        <?php endif; ?>
      </div>
      <a href="<?php echo $href; ?>" <?php echo (get_field('type') == 'video') ? 'data-fancybox' : ''; ?> <?php echo (get_field('type') == 'link') ? 'target="_blank"' : ''; ?> class="post-link"><?php echo (get_field('type') == 'video') ? 'Watch' : 'Read'; ?></a>
    </div>
  </div>
</article>