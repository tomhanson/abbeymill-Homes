<?php
/*
Template Name: Portfolio
*/
?>

<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
<div id="moving-slider">
        <div class="portfolio">
        <a href="internal"><img src="<?php print IMAGES ?>/portfolio/internal-thumb.jpg" alt="Internal Portfolio" /></a>
        <h3>Internal</h3>
        </div>
        <div class="portfolio">
        <a href="external"><img src="<?php print IMAGES ?>/portfolio/external-thumb.jpg" alt="External Portfolio" /></a>
        <h3>External</h3>
        </div>
 	</div>
    <div id="content">
<!--Spare empty div -->
        
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
