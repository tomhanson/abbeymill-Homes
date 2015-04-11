<?php
/*
Template Name: Bicester
*/
?>

<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
	<div id="slider">
    	<div id="headline">
    		<h2><?php the_title(); ?>, <span class="smaller">Whitelands Farm</span></h2>
            <h3>From £395,000 - £1m+</h3>
       	</div>
    <img src="<?php print IMAGES ?>/oxfordshire/bicester/whiteland-farm/whitelands-farm.jpg" /></a>
    </div>
    <div id="content">
    
    <?php the_content(); ?>
    
    	<div class="place">
            	<div class="pic">
    <a href="new-builds"><img src="<?php print IMAGES ?>/oxfordshire/bicester/whiteland-farm/the-farmhouse.jpg" style="max-width: 200%" /></a>
    			</div>
                <div class="caption">
                <p>New Builds</p>
                </div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="barn-conversions"><img src="<?php print IMAGES ?>/oxfordshire/bicester/whiteland-farm/the-farmhouse.jpg" style="max-width: 200%" /></a>
    			</div>
                <div class="caption">
                <p>Barn Conversions</p>
                </div>
    	</div>
        <div class="place">
            	<div class="pic">
    <a href="farmhouse"><img src="<?php print IMAGES ?>/oxfordshire/bicester/whiteland-farm/the-farmhouse.jpg" style="max-width: 200%" /></a>
    			</div>
                <div class="caption">
                <p>Farmhouse</p>
                </div>
    	</div>

    			<div id="return1">
        <p><a href="/oxfordshire">Return to Oxfordshire</a></p>
        		</div>
      	</div>
    </div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
