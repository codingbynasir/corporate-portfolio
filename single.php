<?php get_header(); ?>
<!-- start blog Section -->
<section id="blg_sec">
	<div class="container">
		<div class="row">		
			<div class="col-lg-8 col-md-8 col-sm-8 ">
				<div class="sngl_blg">						
					<?php if (has_post_thumbnail()) {
						the_post_thumbnail();
					} ?>
					<div class="post_info">
						<div class="post_intro">
							<h2><?php the_title(); ?></h2>	
							<i class="fa fa-picture-o"></i>									
						</div>
						<ul>											
							<?php the_time('F j, Y g:i a' ); ?>
							
						</ul>
					</div>
					<div class="post_content">
						<p class="nasir-post"><?php if (have_posts()):
								while (have_posts()):the_post();
								the_content();
								endwhile;
								endif;
						 ?></p>
						
					</div>
				</div>	
				<div class="author_info">
					<?php echo get_avatar( get_the_author_meta('email') , 90 ); ?>
					<div class="author_dec">
						<ul class="social_link">
							<li><a href=""><i class="fa fa-flickr"></i></a></li>
							<li><a href=""><i class="fa fa-pinterest"></i></a></li>
							<li><a href=""><i class="fa fa-linkedin"></i></a></li>
							<li><a href=""><i class="fa fa-skype"></i></a></li>
							<li><a href=""><i class="fa fa-google"></i></a></li>
						</ul>
						<h3><?php the_author(); ?></h3>
						<p><?php the_author_meta('email'); ?></p>
						<p><?php the_author_meta('description'); ?></p>					
					</div>
				</div>	

					<?php comment_form(); ?>
			</div>				
			
			<div class="col-lg-4 col-md-4 col-sm-4">
				<div class="sidebar">						
					<div class="search_widget">
						<input id="sr_bx" type="text" placeholder="Search...."/>
					</div>
					<div class="widget">
						<?php dynamic_sidebar('right_sidebar'); ?>
					</div>										
				</div>
			</div>	
		</div>
	</div>
</section>
<!-- start Blog Section -->

<!-- start located map Section -->
<section id="ltd_map_sec">
<div class="container">
	<div class="row">
		<div class="col-lg-12">
			<div class="map">						
			<h1>located THE MAP</h1><a href="#slidingDiv" class="show_hide" rel="#slidingDiv"><i class="fa fa-angle-up"></i></a>
			<div id="slidingDiv">

						<div class="map_area">
							<div id="googleMap" style="width:100%;height:300px;"></div>
						</div>

			</div>	
			</div>
		</div>
	</div>
</div>
</section>

<!-- End located map  Section -->
<?php get_footer(); ?>
<script>
	$(document).ready(function() {
		$("#author").addClass('form-control');
		$("#comment").addClass('form-control');
		$("#email").addClass('form-control');
		$("#url").addClass('form-control');
		$("#submit").addClass('btn btn-success');
		


		$("p.comment-form-comment").addClass('form-group');
		$("p.comment-form-author").addClass('form-group');
		$("p.comment-form-email").addClass('form-group');
		$("p.comment-form-url").addClass('form-group');
		$("p.form-submit").addClass('form-group');
		
		
	});
</script>