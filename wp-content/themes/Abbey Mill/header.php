<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title><?php bloginfo( 'name' ); ?> | <?php wp_title("",true); ?> </title>
 <!--[if lt IE 9]> <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script> 
  <![endif]-->
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
    <link href="<?php echo TEMPPATH; ?>/js/jquery.bxslider/jquery.bxslider.css" rel="stylesheet" type="text/css" />
	<link href="<?php echo TEMPPATH; ?>/js/fancybox/jquery.fancybox-1.3.4.css" rel="stylesheet" type="text/css" />
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
    <script src="<?php echo TEMPPATH; ?>/js/jquery-1.7.2.min.js" type='text/javascript'></script>
    <script src="<?php echo TEMPPATH; ?>/js/fancybox/jquery.fancybox-1.3.4.js"></script>
    <script src="<?php echo TEMPPATH; ?>/js/bxsliderscript.js"></script>
    <script src="<?php echo TEMPPATH; ?>/js/scripts.js"></script>
    <script src="<?php echo TEMPPATH; ?>/js/jquery.bxslider/jquery.bxslider.min.js"></script>
    
    <link rel="icon" href="http://www.abbeymillhomes.co.uk/favicon.ico" type="image/x-icon" />
	<link rel="shortcut icon" href="http://www.abbeymillhomes.co.uk/favicon.ico" type="image/x-icon" />
     
    	<?php wp_head(); ?>
</head>
<body>
<div id="wrapper">
	<div id="header">
    	<div id="logo">
    	<a href="<?php bloginfo( 'url') ?>"><img src="<?php echo IMAGES; ?>/abbeymilllogo-light.jpg" /></a>
        </div>
   		<div id="navigation">
    	<?php get_sidebar(); ?>
    	</div>
    </div>
