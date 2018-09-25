<!-- begin sidebar -->

<div id="sidebar">
	<div class="widgetarea">
	
	<ul id="sidebarwidgeted">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Top') ) : ?>
	
		<li id="recent-posts">
		<h2>Recent Posts</h2>
			<ul>
				<?php wp_get_archives('type=postbypost&limit=5'); ?> 
			</ul>
		</li>
		
	<?php endif; ?>
	
	</ul>
	
	</div>
	
</div>

<!-- end sidebar -->