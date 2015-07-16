<?php
/**
 * The template for displaying posts in the Image post format
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?> >

	<?php

	$homeresponse = array('is_home' => 'is_home works'); 
	$frontpgresponse = array('is_front' => 'front_page works'); 
	$singleresponse = array('is_single' => 'single works'); 

	if (is_home()) {
		print_r($homeresponse); 
		print_r(get_the_tags();
	}

	if (is_front_page()) {
		print_r($frontpgresponse); 
		print_r(get_the_tags());
	}

	if (is_single()) {
		print_r($singleresponse);
		print_r(get_the_tags());
	}
	?> 

	<header class="entry-header">
		<?php if ( in_array( 'category', get_object_taxonomies( get_post_type() ) ) && twentyfourteen_categorized_blog() ) : ?>
		<!-- <div class="entry-meta">
			<span class="cat-links"><?php echo get_the_category_list( _x( ', ', 'Used between list items, there is a space after the comma.', 'twentyfourteen' ) ); ?></span>
		</div> --><!-- .entry-meta -->
		<?php
			endif;

			if ( is_single() ) :
				the_title( '<h3 class="entry-title">', '</h3>' );
			else :
				the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
			endif;
		?>

		
	</header><!-- .entry-header -->
	

	<div class="entry-content">
		
		<?php
			/* translators: %s: Name of current post */
			the_content( sprintf(
				__( 'Continue reading %s <span class="meta-nav">&rarr;</span>', 'twentyfourteen' ),
				the_title( '<span class="screen-reader-text">', '</span>', false )
			) );

			wp_link_pages( array(
				'before'      => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'twentyfourteen' ) . '</span>',
				'after'       => '</div>',
				'link_before' => '<span>',
				'link_after'  => '</span>',
			) );
		?>

		<div class="entry-meta">
			<span class="post-format">
				<a class="entry-format" href="<?php echo esc_url( get_post_format_link( 'image' ) ); ?>"><?php echo get_post_format_string( 'image' ); ?></a>
			</span>


            <?php if ( ! post_password_required() && ( comments_open() || get_comments_number() ) ) : ?>

			<span class="comments-link"><?php comments_popup_link( __( 'Leave a comment', 'twentyfourteen' ), __( '1 Comment',
			'twentyfourteen' ), __( '% Comments', 'twentyfourteen' ) ); ?></span>             <?php endif; ?>

			<?php edit_post_link( __( 'Edit', 'twentyfourteen' ), '<span class="editing-link">', '</span>' ); ?>
		</div><!-- .entry-meta -->
	</div><!-- .entry-content -->

	


	<?php the_tags( '<footer class="entry-meta"><span class="tag-links">', '', '</span></footer>' ); ?>
</article><!-- #post-## -->
