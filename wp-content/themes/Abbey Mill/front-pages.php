<?php
/*
Template Name: Front Page Template
*/
?>

<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>

	<div id="moving-slider">

    <?php if ( get_field('title_headline') ) { ?>

        <div id="front-headline">
            <h2><?php the_field('title_headline') ?></h2>
            </div>

          <?php } else { ?>



         <?php } ?>

               	
        <ul class="bxslider">

          
                
                <?php $images = get_field('slide_show'); ?>



        <?php foreach( $images as $image ): ?>
            <li><a href="<?php echo $image['sizes']['large']; ?>" class="iframe" rel="gallery"><img src="<?php echo $image['sizes']['large']; ?>" alt="<?php echo $image['alt']; ?>" /></a></li>
        <?php endforeach; ?>

     

               
        </ul>
        
	</div>

<div id="content">

	<div id="bottom-content">
<?php the_field('the_content'); ?>
	</div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
