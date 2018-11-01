<?php get_header(); ?>

    <div id="homepagetop">
			<table border="0" cellpadding="0" cellspacing="0">
  			<tr><td colspan="3"><img src="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/main-images-top.jpg"></td></tr>
  			<tr>
          <td><img src="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/main-images-left.jpg"></td>
          <td width="900">
            <?php echo do_shortcode('[metaslider id="5279"]'); ?>
          </td>
  				<td><img src="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/main-images-right.jpg"></td>
        </tr>
  			<tr><td colspan="3"><img src="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/main-images-bottom.jpg"></td></tr>
			</table>
		</div>

    <div id="content">

    		<div id="homepageleft">

    			<div class="hpproductdev">
    			<strong>Using our competencies, we successfully fill a niche in the mobile, construction, utility and rental equipment sector. We apply our experience in mechanisms, structures, hydraulics and control systems to projects of every size.</strong><br/>
    			<center><img src="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/design-pic.jpg"></center>
    			</div>

    		</div>

    		<div id="homepageleft">

    			<div class="hpproductsol">
    			<img src="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/product-pic.jpg" align="right">
    			<strong>We provide customer-focused solutions to make you more efficient, productive and safe. We manufacture innovative products driven by input straight from the field.</strong>
    			</div>

    		</div>

    		<div id="homepageleft">

    			<div class="hpscalemodels">
    			<strong>By utilizing your CAD solid model documentation, we have the experience and capability to produce a professional scale model.</strong><br/>
    			<center><img src="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/model-pic.jpg"></center>
    			</div>

    		</div>

    </div>
		<br/><br/><br/><br/>
<!-- The main column ends  -->
<?php get_footer(); ?>
