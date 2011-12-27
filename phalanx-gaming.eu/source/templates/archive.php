<?php get_header(); ?>
<div id="content">
  <div class="inner">
    <?php if ( have_posts() ) : ?>
      <?php get_template_part( 'loop' ); ?>
    <?php else : ?>
      <p><?php _e( 'No posts found.', 'phalanx_gaming_eu' ); ?></p>
    <?php endif; ?>
  </div><!--end inner-->
</div><!--end content-->
<?php get_sidebar(); ?>
<?php get_footer(); ?>
