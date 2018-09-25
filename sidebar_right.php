<!-- begin r_sidebar -->

<div id="r_sidebar">

	<ul id="r_sidebarwidgeted">
	
	<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Sidebar Bottom Right') ) : ?>
		
		<!--To define the 120x600 ad, go to your WP dashboard and go to Appearance -> Super Chevy Show Options and enter the ad code.-->
	
		<li id="ads">
		<h2>Advertisement</h2>
			<?php $ad_120 = get_option('superchevy_ad_120'); echo stripslashes($ad_120); ?>
		</li>

	<?php endif; ?>

	</ul>
	
</div>

<!-- end r_sidebar -->