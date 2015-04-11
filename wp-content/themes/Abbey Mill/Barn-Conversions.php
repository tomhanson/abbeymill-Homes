<?php
/*
Template Name: Barn Conversions - Bicester
*/
?>

<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="slider">
    	<div id="headline">
    		<h2>Whitelands Farm, <span class="smaller"><?php the_title(); ?></span></h2>
            <!--<h3>£000,000</h3> still TBC -->
       	</div>
    <img src="<?php print IMAGES ?>/placeholder.jpg" alt="coming Soon" />
    </div>
    <div id="content">
    
    <?php the_content(); ?>
    
    	<div class="place">
            	<div class="pic">
    <a href="/plot-5" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 5</p>
    			</div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="/plot-6" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 6</p>
    			</div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="/plot-7" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 7</p>
    			</div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="/plot-8" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 8</p>
    			</div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="/plot-9" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 9</p>
    			</div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="/plot-10" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 10</p>
    			</div>
    	</div>
        
        
        	<div id="return1">
        <p><a href="/bicester">Return to Bicester</a></p>
        		</div>
        
  	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
