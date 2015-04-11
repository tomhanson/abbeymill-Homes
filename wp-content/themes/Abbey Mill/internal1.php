
<?php
/*
Template Name: Internal 1
*/
?><?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
<div id="photo"></div>
       
    <div id="content">
    <div id="portfolio-cover">
    	<div id="portfolio-thumbs">
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal11.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal11-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal12.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal12-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal13.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal13-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal14.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal14-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal15.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal15-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal16.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal16-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal17.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal17-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal18.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal18-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal19.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal19-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal20.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal20-thumb.jpg"/></a>
        </div>
        <div id="controls">
        <p><a href="/internal"><<</a> Page 2 of 3 <a href="/internal-2">>></a></p>
        </div>
     </div>	
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
