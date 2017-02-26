<?php get_header(); ?>

<!-- start slider Section -->
<section id="slider_sec">
	<div class="container">
		<div class="row">
			<div class="slider">
					<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
				  <!-- Indicators -->
				  <ol class="carousel-indicators">
					<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
					<li data-target="#carousel-example-generic" data-slide-to="1"></li>
					<li data-target="#carousel-example-generic" data-slide-to="2"></li>
				  </ol>

				  <!-- Wrapper for slides -->
				  <div class="carousel-inner" role="listbox">
					<div class="item active">
						<div class="wrap_caption">
						  <div class="caption_carousel">
							<h1>We are webeeo</h1>
							<p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
						  </div>						
						</div>
					</div>					
					<div class="item">
						<div class="wrap_caption">
						  <div class="caption_carousel">
							<h1>We are Creative</h1>
							<p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
						  </div>						
						</div>
					</div>					
					<div class="item ">
						<div class="wrap_caption">
						  <div class="caption_carousel">
							<h1>We Have Greate Team</h1>
							<p>LOREM IPSUM DOLOR SIT AMET CONSECTE</p>
						  </div>						
						</div>
					</div>			
				  </div>

				  <!-- Controls -->
				  <a class="left left_crousel_btn" href="#carousel-example-generic" role="button" data-slide="prev">
					<i class="fa fa-angle-left"></i>
					<span class="sr-only">Previous</span>
				  </a>
				  <a class="right right_crousel_btn" href="#carousel-example-generic" role="button" data-slide="next">
					<i class="fa fa-angle-right"></i>
					<span class="sr-only">Next</span>
				  </a>
				</div>
			</div>	
		</div>			
	</div>	
</section>
<!-- End slider Section -->

<!-- start about Section -->
<section id="abt_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1><?php echo get_theme_mod('about_title'); ?></h1>
					<h2><?php echo get_theme_mod('about_subtitle'); ?></h2>
				</div>			
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="abt">
					<p><?php echo get_theme_mod('about_content'); ?></p>
				</div>
			</div>			
		</div>
	</div>
</section>
<!-- End About Section -->

<!-- start Counting section-->

<?php get_template_part('promotion'); ?>


<!-- start progress bar Section -->
<section id="skill_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1><?php echo get_theme_mod('skill_title'); ?></h1>
					<h2><?php echo get_theme_mod('skill_subtitle'); ?></h2>
				</div>			
			</div>			
		  <div class="skills progress-bar1">		  
				<ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInLeft">
					<?php
					$skill_1=get_theme_mod('skill_1');
					 if ($skill_1=="") {
						
					}else{?>
					  <li class="progress">
							<div class="progress-bar" data-width="<?php echo get_theme_mod('skill_1'); ?>">
								  <?php echo get_theme_mod('skill_1_title'); ?> <?php echo get_theme_mod('skill_1')."%"; ?>
							</div>
					  </li>
					<?php } ?>
					  <?php
					$skill_2=get_theme_mod('skill_2');
					 if ($skill_2=="") {
						
					}else{?>
					  <li class="progress">
							<div class="progress-bar" data-width="<?php echo get_theme_mod('skill_2'); ?>">
								  <?php echo get_theme_mod('skill_2_title'); ?> <?php echo get_theme_mod('skill_2')."%"; ?>
							</div>
					  </li>
					<?php } ?>
					  <?php
					$skill_3=get_theme_mod('skill_3');
					 if ($skill_3=="") {
						
					}else{?>
					  <li class="progress">
							<div class="progress-bar" data-width="<?php echo get_theme_mod('skill_3'); ?>">
								  <?php echo get_theme_mod('skill_3_title'); ?> <?php echo get_theme_mod('skill_3')."%"; ?>
							</div>
					  </li>
					<?php } ?>
					  <?php
					$skill_4=get_theme_mod('skill_4');
					 if ($skill_4=="") {
						
					}else{?>
					  <li class="progress">
							<div class="progress-bar" data-width="<?php echo get_theme_mod('skill_4'); ?>">
								  <?php echo get_theme_mod('skill_4_title'); ?> <?php echo get_theme_mod('skill_4')."%"; ?>
							</div>
					  </li>
					<?php } ?>
					  
				</ul>
				<ul class="col-md-6 col-sm-12 col-xs-12 wow fadeInRight">
					  <?php
					$skill_5=get_theme_mod('skill_5');
					 if ($skill_5=="") {
						
					}else{?>
					  <li class="progress">
							<div class="progress-bar" data-width="<?php echo get_theme_mod('skill_5'); ?>">
								  <?php echo get_theme_mod('skill_5_title'); ?> <?php echo get_theme_mod('skill_5')."%"; ?>
							</div>
					  </li>
					<?php } ?>
					  <?php
					$skill_6=get_theme_mod('skill_6');
					 if ($skill_6=="") {
						
					}else{?>
					  <li class="progress">
							<div class="progress-bar" data-width="<?php echo get_theme_mod('skill_6'); ?>">
								  <?php echo get_theme_mod('skill_6_title'); ?> <?php echo get_theme_mod('skill_6')."%"; ?>
							</div>
					  </li>
					<?php } ?>
					  <?php
					$skill_7=get_theme_mod('skill_7');
					 if ($skill_7=="") {
						
					}else{?>
					  <li class="progress">
							<div class="progress-bar" data-width="<?php echo get_theme_mod('skill_7'); ?>">
								  <?php echo get_theme_mod('skill_7_title'); ?> <?php echo get_theme_mod('skill_7')."%"; ?>
							</div>
					  </li>
					<?php } ?>
					  <?php
					$skill_8=get_theme_mod('skill_8');
					 if ($skill_8=="") {
						
					}else{?>
					  <li class="progress">
							<div class="progress-bar" data-width="<?php echo get_theme_mod('skill_8'); ?>">
								  <?php echo get_theme_mod('skill_8_title'); ?> <?php echo get_theme_mod('skill_8')."%"; ?>
							</div>
					  </li>
					<?php } ?>
					  
				</ul>
		  </div>
                     
		
		</div>
	</div>
</section>
<!-- End progress bar Section -->

<!-- start Service Section -->
<section id="pr_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>OUR Service</h1>
					<h2>WE ARE BRANDING  DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="service">						
					<i class="fa fa-globe"></i>
					<h2>web Development</h2>
					<div class="service_hoverly">
						<i class="fa fa-globe"></i>
						<h2>web Development</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas  , voluptate aspernatur!</p>
					</div>
				</div>
			</div>				
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="service">						
					<i class="fa fa-paper-plane"></i>
					<h2>E-mail marketing</h2>
					<div class="service_hoverly">
						<i class="fa fa-paper-plane"></i>
						<h2>E-mail marketing</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas  , voluptate aspernatur!</p>
					</div>
				</div>
			</div>				
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="service">						
					<i class="fa fa-wordpress"></i>
					<h2>WordPress</h2>
					<div class="service_hoverly">
						<i class="fa fa-wordpress"></i>
						<h2>WordPress</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas  , voluptate aspernatur!</p>
					</div>
				</div>
			</div>				
			<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12">
				<div class="service">						
					<i class="fa fa-paint-brush"></i>
					<h2>Graphic Design</h2>
					<div class="service_hoverly">
						<i class="fa fa-paint-brush"></i>
						<h2>Graphic Design</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore ab odio quas  , voluptate aspernatur!</p>
					</div>
				</div>
			</div>			
		</div>
	</div>
</section>
<!-- End Service Section -->

<!-- start portfolio Section -->
<section id="protfolio_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Portfolio</h1>
					<h2>WE ARE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-12">
				<div class="portfolio-filter text-uppercase text-center">
				<ul class="filter">
				<li class="active" data-filter="*">All</li>
				<li data-filter=".web-design">Web Design</li>
				<li data-filter=".graphic">Graphic</li>
				<li data-filter=".photography">Photography</li>
				<li data-filter=".motion-video">Motion video</li>
				</ul>
				</div>
				 
				<div class="all-portfolios">
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_06.jpg" alt="">
					</div>				
					</div>				
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_01.jpg" alt="">
					</div>				
					</div>					
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_02.jpg" alt="">
					</div>				
					</div>					
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio graphic">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_03.jpg" alt="">
					</div>				
					</div>					
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_04.jpg" alt="">
					</div>				
					</div>					
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio photography">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_05.jpg" alt="">
					</div>				
					</div>				
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_07.jpg" alt="">
					</div>				
					</div>				
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
					</div>				
					</div>				
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio photography">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
					</div>				
					</div>				
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
					</div>				
					</div>					
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio web-design">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_09.jpg" alt="">
					</div>				
					</div>			
					<div class="col-sm-12  col-lg-12 col-md-12 col-xs-12 ">
					<div class="single-portfolio photography">
					<img class="img-responsive" src="http://showwp.com/demos/porton/default/upload/p_08.jpg" alt="">
					</div>				
					</div>
				</div>


			</div>
				<div class="post_btn">
					<div class="hover_effect_btn" id="hover_effect_btn">
						<a href="#hover_effect_btn" data-hover="view more post"><span>view more post</span></a>
					</div>
				</div>	
			</div>			
		</div>
</section>
<!-- End Portfolio Section -->

<!-- start our team Section -->
<section id="tm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Team</h1>
					<h2>WE ARE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
				<div class="all_team">
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>	
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>	
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>	
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>	
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>	
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>	
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>	
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>	
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-1.png" alt=""/>	
						<h3> Jamie Catllahan <span>Designer</span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>					
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-2.png" alt=""/>	
						<h3>Lisa Kudrow <span> Manager </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-3.png" alt=""/>	
						<h3> John Clarance <span>   Senior Manager   </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>				
					<div class="sngl_team">						
						<img src="http://wedesignthemes.com/themes/dt-mountcool/wp-content/uploads/2015/10/img-4.png" alt=""/>	
						<h3>Sheena Maya<span> Developer </span></h3>
						<p>Lorem ipsum dolor sit amet, consecttur adipisicing elit. Laudant</p>						
					</div>													
				</div>			
			</div>
		</div>
	</div>
</section>
<!-- End our team Section -->

<!-- start our teastimonial Section -->
<section id="tstm_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="all_tstm">
					
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>what people say?</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- jhon deo</h6>					
					</div>
				</div>						
				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Clien Design</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- shura deo</h6>					
					</div>
				</div>				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Awesome Support SIMA</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- kumara deo</h6>					
					</div>
				</div>				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Theme Feature great</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- dhera deo</h6>					
					</div>
				</div>				
				<div class="clnt_tstm">
					<div class="sngl_tstm">
						<i class="fa fa-quote-right"></i>
						<h3>Non conflict</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur sequi accusamus voluptatum rem itaque alias deleniti nostrum aperiam fugiat voluptates debitis praesentium incidunt accusantium distinctio,</p>
						<h6>- jhon deo</h6>					
					</div>
				</div>	
					
				</div>
			</div>	
		</div>
	</div>
</section>
<!-- End our teastimonial Section -->


<!-- start Latest post Section -->
<section id="lts_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Latest Blog</h1>
					<h2>WE ARE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>	
			<?php
					$args = array('posts_per_page = 3');
				
				$query = new WP_Query( $args );
				if ($query->have_posts()):
					while ($query->have_posts()):$query->the_post();
				 
			 ?>	
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">
				<?php if (has_post_thumbnail()) {?>
					<?php the_post_thumbnail(); ?>
				<?php } ?>						
					
					<a href="<?php the_permalink(); ?>"><h2><?php the_title(); ?></h2></a>
					<p><?php the_content(); ?></p>
					<a href="<?php the_permalink(); ?>">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>
			<?php endwhile; endif; ?>			
			<!-- <div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img3.jpg?16122351990094232768" alt=""/>
					<h2>Pellentesque nibh libero</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="lts_pst">						
					<img src="http://cdn.shopify.com/s/files/1/1039/5466/files/blog-img1.jpg?1960436319992241823" alt=""/>
					<h2>pharetra eu tempor vel</h2>
					<p>Nullam metus arcu, pharetra eu tempor vel, consectetur nec metus. Praesent malesuada, purus et euismod rutrum, augue nisi facilisis diam, vitae auctor nisl libero nec eros. Vivamus vitae pulvinar augue. Nulla facilisi. Quisque rutrum ante interdum</p>
					<a href="">Read more <i class="fa fa-long-arrow-right"></i></a>					
				</div>
			</div> -->
			<div class="post_btn">
				<div class="hover_effect_btn" id="hover_effect_btn">
					<a href="#hover_effect_btn" data-hover="view more post"><span>view more post</span></a>
				</div>
			</div>			

		</div>
	</div>
</section>
<!-- End Latest post Section -->

<!-- start pricing Section -->
<section id="pricing_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Pricing Plan</h1>
					<h2>WE ARE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="sngl_pricing">											
					<h2 class="title_bg_1">Basic</h2>
					<h3><span class="currency">$</span>30<span class="monuth">/  mo</span></h3>
					<ul>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li><a href="" class="btn pricing_btn">Send</a></li>
						
					</ul>		
				</div>
			</div>			
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="sngl_pricing">											
					<h2 class="title_bg_2">Standerd</h2>
					<h3><span class="currency">$</span>50<span class="monuth">/  mo</span></h3>
					<ul>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li><a href="" class="btn pricing_btn">Send</a></li>
					</ul>		
				</div>
			</div>			
			<div class="col-lg-4 col-md-4 col-sm-12">
				<div class="sngl_pricing">											
					<h2 class="title_bg_3">Extended</h2>
					<h3><span class="currency">$</span>90<span class="monuth">/  mo</span></h3>
					<ul>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li>30 GB of Storage</li>
						<li><a href="" class="btn pricing_btn">Send</a></li>
					</ul>		
				</div>
			</div>	
		</div>
	</div>
</section>
<!-- End pricing Section -->


<!-- start Happy Client Section -->
<section id="clt_sec">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Our Happy Clients</h1>
					<h2>WE ARE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12">
				<div class="al_clt">						
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
					</div>				
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
					</div>				
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_04.png" alt=""/></a>
					</div>				
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_05.png" alt=""/></a>
					</div>				
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_01.png" alt=""/></a>
					</div>					
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_03.png" alt=""/></a>
					</div>				
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_04.png" alt=""/></a>
					</div>				
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_05.png" alt=""/></a>
					</div>				
					<div class="sngl_clt">
						<a href=""><img src="http://showwp.com/demos/porton/default/upload/client_01.png" alt=""/></a>
					</div>					

				</div>
			</div>	
		</div>
	</div>
</section>
<!-- End Happy Client  Section -->

<!-- start contact us Section -->
<section id="ctn_sec">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12 col-sm-12 col-xs12 ">
				<div class="title_sec">
					<h1>Contact Info</h1>
					<h2>WE ARE BRANDING & DIGITAL STUDIO FROM VIET NAM</h2>
				</div>			
			</div>		
			<div class="col-sm-6"> 
				<div id="cnt_form">
					<form id="contact-form" class="contact" name="contact-form" method="post" action="send-mail.php">
						<div class="form-group">
						<input type="text" name="name" class="form-control name-field" required="required" placeholder="Your Name">
						</div>
						<div class="form-group">
							<input type="email" name="email" class="form-control mail-field" required="required" placeholder="Your Email">
						</div> 
						<div class="form-group">
							<textarea name="message" id="message" required="required" class="form-control" rows="8" placeholder="Message"></textarea>
						</div> 
						<div class="form-group">
							<button type="submit" class="btn btn-primary">Send</button>
						</div>
					</form> 
				</div>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-6">
				<div class="cnt_info">
					<ul>
						<li><i class="fa fa-facebook"></i><p>121 King Street, Melbourne Victoria 3000 Australia</p></li>
						<li><i class="fa fa-envelope"></i><p>contact@info.com</p></li>
						<li><i class="fa fa-phone"></i><p>+0987654321 (+012345678)</p></li>
					</ul>
				</div>
			</div>			
		</div>
	</div>
</section>
<!-- End contact us  Section -->

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