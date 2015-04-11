<?php
/*
Template Name: External 1
*/
?>
<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
<div id="photo"></div>
       
    <div id="content">
    <div id="portfolio-cover">
    		<div id="portfolio-thumbs">
    <a href="<?php print IMAGES; ?>/portfolio/external/external11.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external11-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external12.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external12-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external13.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external13-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external14.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external14-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external15.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external15-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external16.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external16-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external17.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external17-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external18.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external18-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external19.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external19-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external20.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external20-thumb.jpg" /></a>
            </div>
            <div id="controls">
            <p><a href="/external"><< </a>Page 2 of 2</p>
            </div>
     </div>	
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
