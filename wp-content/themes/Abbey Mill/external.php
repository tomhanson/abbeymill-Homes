<?php
/*
Template Name: External
*/
?>
<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
<div id="photo"></div>
       
    <div id="content">
    <div id="portfolio-cover">
    	<div id="portfolio-thumbs">
    <a href="<?php print IMAGES; ?>/portfolio/external/external1.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external1-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external2.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external2-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external3.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external3-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external4.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external4-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external5.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external5-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external6.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external6-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external7.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external7-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external8.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external8-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external9.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external9-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/external/external10.jpg" ><img src="<?php print IMAGES; ?>/portfolio/external/external10-thumb.jpg"/></a>
        </div>
        <div id="controls">
        <p><span style="color:#999978"><<</span>Page 1 of 2 <a href="/external-1">>></a></p>
        </div>
     </div>	
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
