<?php
/*
Template Name: Individual Property Template
*/
?>

<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
<div id="slider">
    	<div id="headline">
    	<h2><?php the_field(property_name);?></h2>

            <?php if( get_field('price') ) { ?>

        <h3><?php the_field(price);?></h3>

        <?php } else { ?>

                            &nbsp;

                    <?php } ?>

        </div>    	
    	<img src="<?php the_field(main_image) ?>" alt="<?php the_title(); ?>" width="697" height="380">
</div>
<div id="content">

		<div id="panels">
            <ul class="tabs">
            <li><a href="#panel1">Information</a></li>
            <li><a href="#panel2">Specification</a></li>
            <li><a href="#panel3">Floor Plan</a></li>
            <li><a href="#panel4">Gallery</a></li>
            <li><a href="#panel5">Location</a></li>
            </ul>
            <div class="container">
            
                <div id="panel1" class="panel"> 

                    <?php if( get_field('information') ) { ?>

				<?php the_field(information); ?><b></b></p>

                    <?php } else { ?>

                            <p>Information coming soon.</p>

                    <?php } ?>

                </div>
                <div id="panel2" class="panel">

                    <?php if( get_field('specification') ) { ?>
           
                <?php the_field(specification);?>

                    <?php } else { ?>

                            <p>Specification coming soon.</p>

                    <?php } ?>
                      
                </div>
                <div id="panel3" class="panel">

                    <?php if( get_field('floor_plan_1') && get_field('floor_plan_image_1') ) { ?>

                        <div id="click-help">
                            Please click to view the full floor plan.
                        </div>

                    <a href="<?php the_field(floor_plan_1); ?>" class="iframe"><img src="<?php the_field(floor_plan_image_1); ?>" alt="<?php the_title(); ?> Floor Plan" /></a> 

                    <?php } elseif( get_field('floor_plan_1') && get_field('floor_plan_image_1') == false ) { ?>

                    <div id="click-help">
                        Please click to view the full floor plan.
                    </div>

                        <a href="<?php the_field(floor_plan_1); ?>" class="iframe"><img src="<?php print IMAGES ?>/floor_plan_thumb.jpg" alt="<?php the_title(); ?> Floor Plan" /></a> 
                        
                    <?php } else { ?>

                    <p>Floor plan coming soon.</p>

                    <?php } ?>




                    <?php if( get_field('floor_plan_2') && get_field('floor_plan_image_2') ) { ?>

                        <div id="click-help">
                            Please click to view the full floor plan.
                        </div>

                    <a href="<?php the_field(floor_plan_2); ?>" class="iframe"><img src="<?php the_field(floor_plan_image_2); ?>" alt="<?php the_title(); ?> Floor Plan" /></a> 

                    <?php } elseif( get_field('floor_plan_2') && get_field('floor_plan_image_2') == false ) { ?>

                    <div id="click-help">
                        Please click to view the full floor plan.
                    </div>

                        <a href="<?php the_field(floor_plan_2); ?>" class="iframe"><img src="<?php print IMAGES ?>/floor_plan_thumb.jpg" alt="<?php the_title(); ?> Floor Plan" /></a> 
                        
                    <?php } else { ?>

                    

                    <?php } ?>



                    <?php if( get_field('floor_plan_3') && get_field('floor_plan_image_3') ) { ?>

                        <div id="click-help">
                            Please click to view the full floor plan.
                        </div>

                    <a href="<?php the_field(floor_plan_1); ?>" class="iframe"><img src="<?php the_field(floor_plan_image_1); ?>" alt="<?php the_title(); ?> Floor Plan" /></a> 

                    <?php } elseif( get_field('floor_plan_3') && get_field('floor_plan_image_3') == false ) { ?>

                    <div id="click-help">
                        Please click to view the full floor plan.
                    </div>

                        <a href="<?php the_field(floor_plan_3); ?>" class="iframe"><img src="<?php print IMAGES ?>/floor_plan_thumb.jpg" alt="<?php the_title(); ?> Floor Plan" /></a> 
                        
                    <?php } else { ?>

                    

                    <?php } ?>



                    <?php if( get_field('floor_plan_4') && get_field('floor_plan_image_4') ) { ?>

                        <div id="click-help">
                            Please click to view the full floor plan.
                        </div>

                    <a href="<?php the_field(floor_plan_1); ?>" class="iframe"><img src="<?php the_field(floor_plan_image_1); ?>" alt="<?php the_title(); ?> Floor Plan" /></a> 

                    <?php } elseif( get_field('floor_plan_4') && get_field('floor_plan_image_4') == false ) { ?>

                    <div id="click-help">
                        Please click to view the full floor plan.
                    </div>

                        <a href="<?php the_field(floor_plan_4); ?>" class="iframe"><img src="<?php print IMAGES ?>/floor_plan_thumb.jpg" alt="<?php the_title(); ?> Floor Plan" /></a> 
                        
                    <?php } else { ?>

                    

                    <?php } ?>


<?php /*
                    <?php if( get_field('floor_plan') ) { ?>

                		<div id="click-help">
                        Please click to view the full floor plan.
                        </div>
                <a href="<?php the_field(floor_plan); ?>" class="iframe"><img src="<?php print IMAGES ?>/floor_plan_thumb.jpg" alt="<?php the_title(); ?> Floor Plan" /></a> 
               
                <?php } else { ?>

                        <p>Floor plan coming soon.</p>

                <?php } ?> */ ?>

                </div>
                <div id="panel4" class="panel">

                    <?php if( get_field('gallery') ) { ?>
                
                <?php $images = get_field('gallery'); 

if( $images ) : ?>

        <?php foreach( $images as $image ): ?>
            
            <a href="<?php echo $image['sizes']['large']; ?>" class="iframe" rel="gallery"><img src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" /></a>
        <?php endforeach; ?>

<?php endif; ?>      

                <?php } else { ?>

                        <p>Gallery coming soon.</p>

                <?php } ?>   
                
                </div>
                <div id="panel5" class="panel">
	                     <?php the_field(location); ?>  
           		</div>
				<div id="panel6" class="panel">
                Coming soon.
                </div>
      		</div><!-- close container div -->
		</div>       
		<div id="return">
        <p><?php if ( $post->post_parent ) { ?>
    <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
        Return to <?php echo get_the_title( $post->post_parent ); ?>
    </a>
<?php } ?></p>
        </div>
</div><!-- close content div -->
<?php endwhile; endif; ?>

<?php get_footer(); ?>