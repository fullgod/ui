<?php get_header(); ?>

<div class="units-row">
	<div id="content">
						
			
						<?php
						//get_template_part( 'loop', 'page' );
						 wp_reset_query();
							if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							 endwhile;
							else:
							endif;
						wp_reset_query();
						?>
						
			
					
	</div><!--/content-->
	<div id="use">
						
			
						<?php
						/* Run the loop to output the page.
						 * If you want to overload this in a child theme then include a file
						 * called loop-page.php and that will be used instead.
						 */
						//get_template_part( 'loop', 'page' );
						 wp_reset_query();
							if ( have_posts() ) : while ( have_posts() ) : the_post();
							the_content();
							 endwhile;
							else:
							endif;
						wp_reset_query();
						?>
						
			
					
	</div><!--/content-->
	<div id="boxes" class="clearfix"">
		<div class="units-row units-split">
			<div class="unit-25 item-box"><h1>Title</h1></div>
			<div class="unit-25 item-box"><h2>Title</h2></div>
			<div class="unit-25 item-box"><h3>Title</h3></div>
			<div class="unit-25 item-box"><h4>Title</h4></div>
		</div>
	</div>
</div>


<?php get_footer(); ?>