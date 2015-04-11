<?php
/*
Template Name: Development
*/
?>

<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>

<div id="moving-slider">
    		
 	<div id="dev-content">
        
        <?php the_content(); ?>
        
        <div class="dev-place">
            	<div class="pic">
    <a href="bedfordshire"><img src="<?php print IMAGES ?>/bedfordshire/bedfordshire-map.jpg" alt="Bedfordshire"/></a>
    			</div>
                <div class="caption">
                <p>Bedfordshire</p>
                </div>
     	</div>
        <div class="dev-place">
            	<div class="pic">
    <a href="buckinghamshire"><img src="<?php print IMAGES ?>/buckinghamshire/buckinghamshire-map.jpg" width="150" height="150" alt="Buckinghamshire"/></a>
    			</div>
                <div class="caption">
                <p>Buckinghamshire</p>
                </div>
     	</div>
        <div class="dev-place">
            	<div class="pic">
    <a href="hertfordshire"><img src="<?php print IMAGES ?>/hertfordshire/hertfordshire-map.jpg" alt="Hertfordshire" /></a>
    			</div>
                <div class="caption">
                <p>Hertfordshire</p>
                </div>
     	</div>
         <div class="dev-place dev-place4">
            	<div class="pic">
    <a href="northamptonshire"><img src="<?php print IMAGES ?>/northamptonshire/northamptonshire-map.jpg" alt="Northamptonshire"/></a>
    			</div>
                <div class="caption">
                <p>Northamptonshire</p>
                </div>
     	</div>
        <div class="dev-place">
            	<div class="pic">
    <a href="oxfordshire"><img src="<?php print IMAGES ?>/oxfordshire/Oxfordshire_Map.jpg" alt="Oxfordshire"/></a>
    			</div>
                <div class="caption">
                <p>Oxfordshire</p>
                </div>
     	</div>
       
  	</div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
