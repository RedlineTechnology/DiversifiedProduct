<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<meta name="distribution" content="global" />
<meta name="robots" content="follow, all" />
<meta name="language" content="en" />

<title><?php wp_title(''); ?><?php if(wp_title('', false)) { echo ' :'; } ?> <?php bloginfo('name'); ?></title>
<meta name="generator" content="WordPress <?php bloginfo('version'); ?>" />
<link rel="Shortcut Icon" href="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/favicon.ico" type="image/x-icon" />

<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="alternate" type="application/atom+xml" title="<?php bloginfo('name'); ?> Atom Feed" href="<?php bloginfo('atom_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />

<?php wp_enqueue_script("jquery"); ?>
<?php wp_head(); ?>

<script type="text/javascript">
     jQuery(document).ready(function($){
         $("a[rel='lightbox']").colorbox({maxWidth:"95%", maxHeight:"95%"});
     });
</script>

<script type="text/javascript"><!--//--><![CDATA[//><!--
sfHover = function() {
	if (!document.getElementsByTagName) return false;
	var sfEls = document.getElementById("nav").getElementsByTagName("li");

	// if you only have one main menu - delete the line below //
	var sfEls1 = document.getElementById("subnav").getElementsByTagName("li");
	//

	for (var i=0; i<sfEls.length; i++) {
		sfEls[i].onmouseover=function() {
			this.className+=" sfhover";
		}
		sfEls[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover\\b"), "");
		}
	}

	// if you only have one main menu - delete the "for" loop below //
	for (var i=0; i<sfEls1.length; i++) {
		sfEls1[i].onmouseover=function() {
			this.className+=" sfhover1";
		}
		sfEls1[i].onmouseout=function() {
			this.className=this.className.replace(new RegExp(" sfhover1\\b"), "");
		}
	}
	//

}
if (window.attachEvent) window.attachEvent("onload", sfHover);
//--><!]]></script>

</head>

<body>

<div id="wrap">
<div id="header">

	<div class="headerleft"><a href="<?php echo get_settings('home'); ?>"><img src="<?php echo get_settings('home'); ?>/wp-content/uploads/2017/04/lwhead.png" border="0"></a></div>


	<!--To define the 468x60 ad, go to your WP dashboard and go to Appearance -> Diversified Product Development Options and enter the ad code.-->

	<div class="headerright">
	   <form id="searchform" method="get" action="<?php echo $_SERVER['PHP_SELF']; ?>">
			<span class="headerleft"><a href="<?php echo get_settings('home'); ?>"> </a></span>
			<input type="text" value="Search this website..." name="s" id="searchbox" onfocus="if (this.value == 'Search this website...') {this.value = '';}" onblur="if (this.value == '') {this.value = 'Search this website...';}" />
			<input type="submit" id="searchbutton" value="GO" /></form>
			<table width="100%"><tr><td><a href="http://www.diversifiedproduct.com/"><font color="#FFFFF"> Diversified Product Development</font></a><br/>
			1001 Webster Ave.<br/>
			Waco, TX 76706 <br/>
			Phone: 254-757-1177<br/>
			<a href="mailto:dpd@diversifiedproduct.com"><font color="#FFFFFF">dpd@diversifiedproduct.com</font></a><br/></td>

	<!--   <td width="40"><a href="http://www.facebook.com/pages/DiversifiedProductcom/131701690181429" border="0"><img src="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/facebook.png" border="0"></a><br/><a href="http://www.youtube.com/user/diversifiedproducts" border="0"><img src="<?php echo get_settings('home'); ?>/wp-content/themes/diversified/images/youtube.png" border="0"></a><br/></td> --> </tr></table>
	</div>
</div>

<div id="navbar">

	<div id="navbarleft">
		<ul id="nav">
			<?php wp_nav_menu( array( 'sort_column' => 'menu_order', 'container_class' => 'menu-header' ) ); ?>
		</ul>
	</div>

</div>

<div style="clear:both;"></div>
