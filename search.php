<?php
/**
 * The template for displaying Search Results pages.
 *
 */

get_header(); ?>
<section class="col-sm-9 col-lg-9">
<?php if ( have_posts() ) : ?>
				<h1><?php printf( __( 'Search Results for: %s', 'wbt' ), '' . get_search_query() . '' ); ?></h1>
				<?php
				/* Run the loop for the search to output the results.
				 * If you want to overload this in a child theme then include a file
				 * called loop-search.php and that will be used instead.
				 */
				 get_template_part( 'loop', 'search' );
				?>
<?php else : ?>
					<h2><?php _e( 'Nothing Found', 'wbt' ); ?></h2>
					<p><?php _e( 'Please try again with some different keywords.', 'wbt' ); ?></p>
					<form role="search" method="get" action="<?php echo home_url( '/' ); ?>">
						<div class="form-group">
							<input id="s" type="text" value="" name="s" class="form-control" placeholder="Search">
						</div>
						<button id="searchsubmit" type="submit" value="Search" class="submit btn btn-default">Submit</button>
					</form>
<?php endif; ?>
</section>
<?php get_sidebar(); ?>
<?php get_footer(); ?>
