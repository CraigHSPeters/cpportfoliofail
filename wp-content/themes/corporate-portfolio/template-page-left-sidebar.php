<?php
/**
*@package Corporate Portfolio 
*description render page with left siebar content on single page
Template Name: Page With Left Sidebar
*@version 1.0
*/

get_header(); ?>

<div class="container">

	<div class="wrap clearfix">
		<?php if ( has_post_thumbnail() ) : ?>
			<?php $content_width = 980; ?>
			<div class="entry-image">
				<?php the_post_thumbnail( 'corporate-portfolio-l' ); ?>
			</div>
		<?php endif; ?>
		<?php get_sidebar( 'page-left' ); ?>
		<main id="content" role="main" itemprop="mainContentOfPage">
			<?php while ( have_posts() ) : the_post(); ?>
				<!-- Article -->
				<article id="post-<?php the_ID(); ?>" <?php post_class( 'clearfix' ); ?> itemscope="itemscope" itemtype="http://schema.org/CreativeWork">
					<div class="entry-content" itemprop="text">
						<?php the_content(); ?>
					</div>
					<?php wp_link_pages( array( 'before' => '<nav class="pagination">', 'after' => '</nav>' ) ); ?>
				</article>
			<?php endwhile; ?>
		</main>
	</div>
</div>
			
<?php get_footer();
