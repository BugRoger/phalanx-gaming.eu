<?php get_header(); ?>
	<?php if ( have_posts() ) : ?>
		<?php while ( have_posts() ) : the_post(); ?>
			<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<h1><?php the_title(); ?></h1>
				<div>
					<?php printf( __( 'by %s on', 'phalanx_gaming_eu' ), get_the_author() ); ?> <?php the_date(); ?>
				</div>
				<div class="entry">
					<?php if ( has_post_thumbnail() ) {
						the_post_thumbnail();
					} ?>
					<?php the_content(); ?>
					<?php edit_post_link( __( 'Edit this', 'phalanx_gaming_eu' ), '<p>', '</p>' ); ?>
					<?php wp_link_pages(); ?>
				</div><!--end entry-->
				<div class="post-footer clear">
					<div class="tags">
						<?php the_tags( __( 'Tags: ', 'phalanx_gaming_eu' ), ', ', '' ); ?>
					</div>
					<div class="cats">
						<?php printf( __( 'From: %s', 'phalanx_gaming_eu' ), get_the_category_list( ', ' ) ); ?>
					</div>
				</div><!--end post footer-->
			</div><!--end post-->
		<?php endwhile; /* rewind or continue if all posts have been fetched */ ?>
		<?php comments_template( '', true ); ?>
	<?php endif; ?>
<?php get_sidebar(); ?>
<?php get_footer(); ?>