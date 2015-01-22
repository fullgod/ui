<?php get_header(); ?>

<div class="units-row">
	<div id="content">
						
			
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
			<div class="unit-25 item-box">40%</div>
			<div class="unit-25 item-box">40%</div>
			<div class="unit-25 item-box">40%</div>
			<div class="unit-25 item-box">40%</div>
		</div>
	</div>
</div>


<?php get_footer(); ?>