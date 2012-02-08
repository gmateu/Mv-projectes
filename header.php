<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title>
    <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> | <?php bloginfo('description'); ?><?php } ?>
    <?php if ( is_author() ) { ?><?php bloginfo('name'); ?> | Archivo por autor<?php } ?>
    <?php if ( is_single() ) { ?><?php wp_title(''); ?> | <?php wp_title(''); ?><?php } ?>
    <?php if ( is_page() ) { ?><?php bloginfo('name'); ?> | <?php wp_title(''); ?><?php } ?>
    <?php if ( is_category() ) { ?><?php bloginfo('name'); ?> | Archivo por Categoria | <?php single_cat_title(); ?><?php } ?>
    <?php if ( is_month() ) { ?><?php bloginfo('name'); ?> | Archivo por Mes | <?php the_time('F'); ?><?php } ?>
    <?php if ( is_search() ) { ?><?php bloginfo('name'); ?> | Resultados<?php } ?>
    <?php if (function_exists('is_tag')) { if ( is_tag() ) { ?><?php bloginfo('name'); ?> | Archivo por Tag | <?php  single_tag_title("", true); } } ?>
</title>
<?php wp_head(); ?>
<script type="text/javascript">
jQuery(window).load(function() {
    jQuery('#slider').nivoSlider();
});
</script>
</head>
<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>" media="screen" />
<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
</head>

<body>
<div id="content-wrapper">
	<div id="header">
		<div id="logo">
			<a href="<?php bloginfo('url'); ?>"><img src='<?php bloginfo("template_directory"); ?>/img/logo.png' /></a>
		</div><!--end of logo-->
		<!-- Then somewhere in the <body> section -->
		<!--<div id="slider" class="nivoSlider">
		    <img src='<?php bloginfo("template_directory"); ?>/banners/banner1.png' title="Espais per conviure" />
		    <img src='<?php bloginfo("template_directory"); ?>/banners/banner2.png' alt="" />
		    <img src='<?php bloginfo("template_directory"); ?>/banners/banner3.png' alt="" />
		    <!--<a href="http://dev7studios.com"><img src="images/slide2.jpg" alt="" title="#htmlcaption" /></a>
		    <img src="images/slide3.jpg" alt="" title="This is an example of a caption" />
		    <img src="images/slide4.jpg" alt="" />-->
		</div><!-- end of nivoslider -->		
	</div><!--end of header-->
	<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar(1) ) : ?>
	<ul id="menu">
            <li><a href="#">Nosaltres</a></li>
            <li><a href="#">Estils</a></li>
            <li><a href="#">Projectes</a></li>
            <li><a href="#">Serveis</a></li>
            <li><a href="#">Contacte</a></li>
    </ul>
    <?php endif; ?>
</div>