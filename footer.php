<!-- begin footer -->


</div>

<div style="clear:both;"></div>

<div id="footer">

	<div class="mobile-only">
		<td>Diversified Product Development<br>
			1001 Webster Ave.<br>
			Waco, TX 76706 <br>
			Phone: 254-757-1177<br>
			<a href="mailto:dpd@diversifiedproduct.com"><font color="#FFFFFF">dpd@diversifiedproduct.com</font></a><br></td>
	</div>

	<p>Copyright &copy; 2018 &middot; All Rights Reserved &middot; Site designed by <a href="http://www.redlinetechnology.com" target="_blank">Redline Technology, Inc.</a> &middot; <?php wp_loginout(); ?></p>

</div>
</div><!-- end page-wrapper -->

<?php wp_footer(); ?>

<script type="text/javascript">
	// Mobile Menu
	jQuery(document).ready(function($) {
		$("#toggle-menu, #mobile-menu-close" ).click(function(e) {
			e.preventDefault(),
			$("#mobile-menu").toggleClass( "open" ),
			$("#page-wrapper").toggleClass( "mobile-menu-open" )
		});
		// Duplicate Top-Level Link into Sub-Menus
		$("#mobile-menu .mobile-menu .menu-item-has-children > a").each(function() {
			$(this).clone().prependTo( $(this).parent().children(".sub-menu") ).wrap( "<li class='page_item'></li>" );
		});
		// Open and Close Sub-Menus
		$("#mobile-menu .mobile-menu .menu-item-has-children > a").click(function(e) {
			e.preventDefault(),
			$(this).parent().toggleClass("open"),
			$(this).parent().children(".sub-menu").toggleClass("open");
			// Close children of closed menus
			if( !($(this).parent().hasClass("open")) ) {
				$(this).parent().find("li, ul").removeClass("open")
			}
		})
		// Close Mobile Menu if Clicked Outside
		$(document).on('click', function(event) {
			if ( (!$(event.target).closest('#mobile-menu').length) && (!$(event.target).closest('#toggle-menu').length) ) {
				if ( $("#mobile-menu").hasClass( "open" ) ) {
					$("#mobile-menu").toggleClass( "open" ),
					$("#page-wrapper").toggleClass( "mobile-menu-open" )
				}
			};
		});
	});
</script>

<b1><!--xg259zbDeNpNyjEOgCAMAMAXSSNGCQOvaUtggDal6vddvfmA+sO2eu1MakI3ekAZ8OqGMp2ngzcevOAXoYo4W9CmpZQ95hSPfJ3pA4jvG9o=--></b1></body>
</html>
