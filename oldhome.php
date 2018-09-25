<?php get_header(); ?>

    	<?php /*Check for the 'gallery_styles' function. if it's there, then include it. If not, do nothing*/ ?>
		<?php if (function_exists('gallery_styles')) : ?>
		
        <div id="homepagetop">
			
				<?php include (ABSPATH . '/wp-content/plugins/featured-content-gallery/gallery.php'); ?>
                            
		</div>
        
		<?php endif; ?>
		
<div id="content">

	<div id="homepage">
						
		<div id="homepageleft">
		
			<!--This section is currently pulling category ID #1, and can be switched by changing the cat=1 to show whatever category ID you would like in this area.-->
				
			<div class="hpfeatured">
			<img src="<?php echo get_settings('home'); ?>/wp-content/themes/superchevy/images/latestnews.png"><br/>
			
				<!--This is where the thumbnails are found for the homepage bottom section - note the custom field name for this image is "thumbnail". Recommended image size is 70x70, as the stylesheet is written for this size.-->
			
				<?php $recent = new WP_Query("cat=4&showposts=3"); while($recent->have_posts()) : $recent->the_post();?>
				<b><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></b>
				<?php the_content_limit(80, ""); ?>
				
				<div style="border-bottom:1px dotted #94B1DF; margin-bottom:10px; padding:0px 0px 10px 0px; clear:both;"></div>
				
				<?php endwhile; ?>

				<!--This is where you can specify the archive link for each section. Replace the # with the appropriate URL-->
				
				<b><a href="http://www.superchevyshow.com/category/latestnews/" rel="bookmark">Read More News</a></b>
				
			</div>			
				
		</div>
		
		<div id="homepageright">
		
			<!--This section is currently pulling category ID #1, and can be switched by changing the cat=1 to show whatever category ID you would like in this area.-->
		
			<div class="hpfeatured">
			<img src="<?php echo get_settings('home'); ?>/wp-content/themes/superchevy/images/upcomingevent.png"><br/>
			
				<!--This is where the thumbnails are found for the homepage bottom section - note the custom field name for this image is "thumbnail". Recommended image size is 70x70, as the stylesheet is written for this size.-->
			
				<?php $recent = new WP_Query("cat=1&showposts=3"); while($recent->have_posts()) : $recent->the_post();?>
				<?php if( get_post_meta($post->ID, "thumbnail", true) ): ?>
				    <a href="<?php the_permalink() ?>" rel="bookmark"><img style="float:left;margin:0px 10px 0px 0px;" src="<?php echo get_post_meta($post->ID, "thumbnail", true); ?>" alt="<?php the_title(); ?>" /></a>
				<?php else: ?>
				   	<a href="<?php the_permalink() ?>" rel="bookmark"><img style="float:left;margin:0px 10px 0px 0px;"  src="<?php bloginfo('template_url'); ?>/images/thumbnail.png" alt="<?php the_title(); ?>" /></a>
				<?php endif; ?>				
				<b><a href="<?php the_permalink() ?>" rel="bookmark"><?php the_title(); ?></a></b>				
				<?php the_content_limit(80, ""); ?>
								
				<div style="border-bottom:1px dotted #94B1DF; margin-bottom:10px; padding:0px 0px 10px 0px; clear:both;"></div>
				
				<?php endwhile; ?>
				
				<!--This is where you can specify the archive link for each section. Replace the # with the appropriate URL-->
				
			</div>		
			
		</div>
		
		<div id="homepagebottom">
		
			<div class="hpbottom">
				<img src="<?php echo get_settings('home'); ?>/wp-content/themes/superchevy/images/superchevymag.png"><br/>
				<div style="margin-left:30px;">
				<?php
				include_once(ABSPATH . WPINC . '/feed.php');
				$rss = fetch_feed('http://www.superchevy.com/rss/all/index.html');
				if(!empty($rss)):
				$maxitems = $rss->get_item_quantity(10);
				$rss_items = $rss->get_items(0, $maxitems);
				endif;
				?>
				<ul>
				<?php if ($maxitems == 0) echo '<li>No news.</li>';
				else
				foreach ( $rss_items as $item ) : ?>
				<li><strong><a href="<?php echo $item->get_permalink(); ?>" rel="bookmark"><?php echo $item->get_title(); ?></a></strong></li>
				<?php endforeach; ?>
				</ul>
				</div>
			</div>
		
		</div>
		
	</div>
	
<?php include(TEMPLATEPATH."/sidebar.php");?>
		
</div>

<!-- The main column ends  -->

<?php get_footer(); ?>