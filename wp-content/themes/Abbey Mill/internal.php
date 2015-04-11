<?php
/*
Template Name: Internal
*/
?>
<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
<div id="photo"></div>
       
    <div id="content">
    <div id="portfolio-cover">
    	<div id="portfolio-thumbs">
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal1.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal1-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal2.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal2-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal3.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal3-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal4.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal4-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal5.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal5-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal6.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal6-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal7.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal7-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal8.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal8-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal9.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal9-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal10.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal10-thumb.jpg"/></a>
        </div>
        <div id="controls">
        <p><span style="color:#999978"><<</span>Page 1 of 3 <a href="/internal-1">>></a></p>
        </div>
     </div>	
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
