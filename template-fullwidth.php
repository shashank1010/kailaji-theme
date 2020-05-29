<?php
/*
  Template Name: Fullwidth Page
 */
?>
<?php get_header(); ?>
	<div class='page-image container-fluid text-center'>
		<div class="page_head">
			<h1 class="page_title fullwidth-heading single-heading"><?php the_title(); ?></h1>
		</div>
		<?php
			// check if the post has a Post Thumbnail assigned to it.
			if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
		?>
	</div>
	<div class="full-content">
		<section>
			<div class="container">
				<div class="full-width">           
					<?php if ( have_posts() ) : the_post(); 
						the_content();
						wp_link_pages( array(
							'before' => '<div class="page-links"><span class="page-links-title">' . __( 'Pages:', 'andrina-lite' ) . '</span>',
							'after' => '</div>',
							'link_before' => '<span>',
							'link_after' => '</span>',
							'pagelink' => '<span class="screen-reader-text">' . __( 'Page', 'andrina-lite' ) . ' </span>%',
							'separator' => '<span class="screen-reader-text">, </span>',
						) );
						endif; ?>	
					<!--Start Comment box-->
					<?php comments_template(); ?>
					<!--End Comment box-->
				</div>
			</div>
		</section>
		<?php if (is_active_sidebar('packaging-section')) { ?>
			<section class="packaging-section">
				<?php dynamic_sidebar( 'packaging-section' ); ?>
			</section>
		<?php
			}
			$ppd = get_post_meta(get_the_ID(), 'post_package_info', TRUE);
			if (isset($ppd) && $ppd != '') {
		?>
		<section class="post-packaging-data">
			<div class="container">
				<?php echo $ppd; ?>
			</div>
		<section>
		<?php } ?>
		
	</div>
</div>
<?php get_footer();