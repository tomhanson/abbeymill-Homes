<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
<div id="content">

	<div id="bottom-content">
<?php the_content(); ?>
	</div>
</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>
