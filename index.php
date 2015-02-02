<?php get_header(); ?>



















<section class="content">
	<div class="units-row units-split">
		<h2><?php echo stripslashes(get_theme_mod('blog')); ?></h2>
		<div class="sep"></div>
		
	<!-- Блог -->	
	<?php global $post;
	$myposts = get_posts('showposts='.get_theme_mod('blog_number_posts').'');
	foreach($myposts as $post) : setup_postdata($post);
	?>

	
	<div class="unit-50">
	
		
	<figure class="rollover" style="background-image:url('<?php
		if ( has_post_thumbnail()) {
		$blog_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), "large");
		echo $blog_image_url[0];
		}
		?>');">
		
		<div class="feature-views">
			<b><?php the_title('', '', true, '30') ?></b>
			<p><?php the_content_limit(470);?></p>
		</div>
		
			<span class="post-overlay"> </span>
	</figure>
		
	
	</div>
	
	<?php endforeach; ?>
	
	<!-- /Блог -->	
	
	</div>
</section>


















<!--<div class="units-row">
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
						
			
					
	</div>
	<div id="boxes" class="clearfix">
		<div class="units-row units-split">
			<div class="unit-25 item-box"><h1>Title</h1></div>
			<div class="unit-25 item-box"><h2>Title</h2></div>
			<div class="unit-25 item-box"><h3>Title</h3></div>
			<div class="unit-25 item-box"><h4>Title</h4></div>
		</div>
	</div>
</div>
-->

<section class="blog">
<div class="units-row">
	<div id="boxes" class="clearfix">
		<div class="units-row">
			<div class="unit-100"><h1>BLOG</h1></div>
		</div>
		<div class="units-row units-split">
			<div class="unit-50 item-box"><h4>Title</h4></div>
			<div class="unit-50 item-box"><h4>Title</h4></div>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>