<?php
/*
Template Name: Internal 2
*/
?>
<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
<div id="photo"></div>
       
    <div id="content">
    <div id="portfolio-cover">
    	<div id="portfolio-thumbs">
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal21.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal21-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal22.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal22-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal23.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal23-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal24.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal24-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal25.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal25-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal26.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal26-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal27.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal27-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal28.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal28-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal29.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal29-thumb.jpg" /></a>
    <a href="<?php print IMAGES; ?>/portfolio/internal/internal30.jpg" ><img src="<?php print IMAGES; ?>/portfolio/internal/internal30-thumb.jpg"/></a>
        </div>
        <div id="controls">
        <p><a href="/internal-1"><<</a> Page 3 of 3</p>
        </div>
     </div>	
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
