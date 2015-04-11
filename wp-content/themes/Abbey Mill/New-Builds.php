<?php
/*
Template Name: New Builds - Bicester
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
    <a href="/plot-1" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 1</p>
    			</div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="/plot-2" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 2</p>
    			</div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="/plot-3" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 3</p>
    			</div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="/plot-4" ><img src="<?php print IMAGES ?>/placeholder-thumb.jpg" /></a>
    			</div>
      			<div class="caption">
                <p>Plot 4</p>
    			</div>
    	</div>
    
    			<div id="return1">
        <p><a href="/bicester">Return to Bicester</a></p>
        		</div>
      	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
