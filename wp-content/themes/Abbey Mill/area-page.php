<?php
/*
Template Name: Area Page Template
*/
?>

<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
    <div id="slider">
        <div id="headline">
            <h2><?php the_title(); ?></h2>
            <h3>From £<?php the_field(min_price); ?></h3>
        </div>
    <img src="<?php the_field(area_cover_image); ?>" alt="<?php the_title();?>" />
    </div>
    <div id="content">
    
    <p>Select a development below to view the homes we have in <?php the_title();?>.</p>



    <?php 

    $theID = get_the_id();

    $args = array('post_parent' => $theID,
                   'post_type' => 'page');
?>

<?php endwhile; endif; ?>

<?php wp_reset_postdata(); ?>

<?php $query = new WP_Query( $args );?>

    <?php while($query->have_posts() ) : $query->the_post(); ?>
      
        <div class="place">
                <div class="pic">
    <a href="<?php the_permalink();?>"><img style="max-width: 200%;" src="<?php the_field(main_image) ?>" alt="<?php the_title(); ?>" /></a>
                </div>
                <div class="caption">
                <p><?php the_title(); ?></p>
                </div>
        </div>

        <?php endwhile; ?>

        <?php wp_reset_postdata(); ?>

                <div id="return1">
        <p><?php if ( $post->post_parent ) { ?>
    <a href="<?php echo get_permalink( $post->post_parent ); ?>" >
        Return to <?php echo get_the_title( $post->post_parent ); ?>
    </a>
<?php } ?></p>
                </div>
    </div>



<!-- this page just needs correctly writing now.

    call the above loop first, then call the second loop and the correct info should pull through

<?php $query = new WP_Query( $args );?>

    <?php while($query->have_posts() ) : $query->the_post(); ?>

    hello there test

    <p><?php the_title(); ?></p>


    <img src="<?php the_field(main_image) ?>" alt="<?php the_title(); ?>"  width="150" height="150">

    <?php endwhile; ?> -->



<?php get_footer(); ?>
