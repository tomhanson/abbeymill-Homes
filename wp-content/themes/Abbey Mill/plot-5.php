<?php
/*
Template Name: Plot 5
*/
?>

<?php get_header(); ?>

<?php if( have_posts()) : while(have_posts()) : the_post(); ?>
<div id="slider">
    	<div id="headline">
    	<h2>Whitelands Farm, <span class="smaller"><?php the_title(); ?></span></h2>
        <!--<h3>£000,000</h3> still TBC -->
        </div>    	
    <img src="<?php print IMAGES ?>/placeholder.jpg" >
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
                 
				<?php the_content(); ?>
                
                </div>
                <div id="panel2" class="panel">
                Specification coming soon.                     
                </div>
                <div id="panel3" class="panel">
                Floor plan coming soon.
                </div>
                <div id="panel4" class="panel">
                Photos coming soon.
                </div>
                <div id="panel5" class="panel">
                	<div id="map">
     <a href="https://www.google.co.uk/maps/preview#!q=Whitelands+Farm+Cottage%2C+Chesterton%2C+Bicester+OX26+1RS&data=!1m4!1m3!1d2462!2d-1.1755599!3d51.8938688!2m1!1e3!4m12!2m11!1m10!1s0x4876dd9ed29105bf%3A0xe8dff1a908888e0a!3m8!1m3!1d9871856!2d-2.327815!3d52.8382!3m2!1i1024!2i768!4f13.1&fid=7" target="_blank"><img src="<?php print IMAGES ?>/oxfordshire/bicester/bicester-map.png" /></a>     				</div>
           		</div>
				<div id="panel6" class="panel">
                Coming soon.
                </div>
      		</div>
		</div>
        <div id="return">
        <p><a href="/barn-conversions">Return to Barn Conversions</a></p>
        </div>
	</div>
<?php endwhile; endif; ?>

<?php get_footer(); ?>