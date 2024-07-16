<?php
/**
 * The template for displaying search results pages.
 *
 * @package landing Lite
 */

get_header(); ?>
<div id="page" class="search-area">
	<div id="content" class="article">
		<h1><?php esc_html_e( 'Search Results For:', 'landing-pagency' ); ?> <?php echo esc_html( get_search_query( false ) ); ?> </h1>
		<?php if ( have_posts() ) :
		$landing_pagency_full_posts = get_theme_mod('landing_pagency_full_posts');
		while ( have_posts() ) : the_post();
		landing_pagency_archive_post();
		endwhile;
		landing_pagency_post_navigation();
		else : ?>
		<div class="single_post clear">
			<article id="content" class="article page">
				<header>
					<h1 class="title"><?php esc_html_e( 'Nothing Found', 'landing-pagency' ); ?></h1>
				</header>
				<p><?php esc_html_e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'landing-pagency' ); ?></p>
				<?php get_search_form(); ?>
			</article>
		</div>
	<?php endif; ?>
</div><!-- .article -->
<?php get_sidebar(); ?>
</div><!-- #primary -->

<?php get_footer(); ?>
