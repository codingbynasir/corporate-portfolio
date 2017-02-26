<?php get_header(); ?>

<!-- start blog Section -->
<?php
if (have_posts()):
	while (have_posts()):the_post();?>
		<h1><?php echo the_title(); ?></h1>
		<?php the_content(); ?>
	<?php endwhile;
	else:
		echo "No content found";
endif;
 ?>

<!-- End located map  Section -->
<?php get_footer(); ?>