<?php
/*
Template Name: Contact
*/
?>

<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="moving-slider">
    	<div id="front-headline">
        <h2>Contact Us</h2>
        </div>
        <ul class="bxslider">                  
          <li><img src="<?php print IMAGES ?>/portfolio/front-thumb5.jpg" /></li>
          <li><img src="<?php print IMAGES ?>/bedfordshire/stagsden/the-farmhouse/the-farmhouse-cover.jpg" /></li>
          <li><img src="<?php print IMAGES ?>/portfolio/front-thumb7.jpg" /></li>
          <li><img src="<?php print IMAGES ?>/portfolio/front-thumb8.jpg" /></li>
          <li><img src="<?php print IMAGES ?>/bedfordshire/stagsden/stonebridge barn/stonebridge barn-cover.jpg" /></li>
          <li><img src="<?php print IMAGES ?>/bedfordshire/turvey/carlton road/carlton road-cover.jpg" /></li>
          <li><img src="<?php print IMAGES ?>/bedfordshire/stagsden/the-parlor/the-parlour-cover.jpg" /></li>
          <li><img src="<?php print IMAGES ?>/bedfordshire/woburn-sands/spring-grove/spring-grove-cover.jpg" /></li>  
        </ul>
  	</div>

	<div id="content">
   <!-- <h2>Contact Us</h2>-->
    	<div id="contact">
        
        <?php the_content(); ?>
        
        <a href="mailto:enquiries@abbeymillhomes.co.uk?subject=enquiry">enquiries@abbeymillhomes.co.uk</a></p>
    	</div>
        <div id="contact-pic">
        <a href="https://www.google.co.uk/maps/preview#!q=rose+court%2C+olney%2C+MK46+4BY&data=!4m10!1m9!4m8!1m3!1d1488!2d-0.700686!3d52.152928!3m2!1i1439!2i467!4f13.1" target="_blank"><img src="<?php print IMAGES ?>/office-location.png" height="165px" width="165px"></a>
        
        </div>
    
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
