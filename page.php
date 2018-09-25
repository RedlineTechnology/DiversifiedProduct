<?php get_header(); ?>

<div id="content">

	<div id="contentleft">
	
		<div class="postarea">
	
		<?php include(TEMPLATEPATH."/breadcrumb.php");?><br /><br />
			
			<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		
			<?php the_content(__('Read more'));?><div style="clear:both;"></div>
			<?php endwhile; else: ?>
			
			<p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
		
		</div>
		
	</div>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>