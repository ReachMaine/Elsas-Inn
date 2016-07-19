<?php
/*
Template name: Left sidebar
*/
/* mods: 
 * 		23Dec15 zig - move sidebar before content s.t. at mobile sidebar comes first.
 * 		28Dec15 zig - add new sidebar that is displayed after content at mobile, but under sidebar at desktop.
 *	
 */
get_header(); ?>

<?php if( has_excerpt() ) { ?>
<div class="page-header">
	<?php the_excerpt(); ?>
</div>
<?php } ?>

<div  class="page-wrapper page-left-sidebar">
<div class="row">
<div class="large-3 columns left">
	<?php get_sidebar(); ?>
</div><!-- end sidebar -->
<div id="content" class="large-9 right columns" role="main">
	<div class="page-inner">
			<?php while ( have_posts() ) : the_post(); ?>

					<?php get_template_part( 'content', 'page' ); ?>

					<?php
						// If comments are open or we have at least one comment, load up the comment template
						if ( comments_open() || '0' != get_comments_number() )
							comments_template();
					?>

			<?php endwhile; // end of the loop. ?>
	</div><!-- .page-inner -->
</div><!-- end #content large-9 left -->
<?php if ( is_active_sidebar( 'sidebar_under') ) { // zig ?>
	<div class="large-3 columns left">
		<ul class="sidebarunder">
			<?php dynamic_sidebar( 'sidebar_under' ); ?>
		</ul>
	</div> <!-- sidebar under -->
<?php } ?>



</div><!-- end row -->
</div><!-- end page-right-sidebar container -->


<?php get_footer(); ?>
