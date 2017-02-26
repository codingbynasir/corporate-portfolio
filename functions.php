<?php 

//For supporting featured images
add_theme_support('post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

function home_page_contents($customize){
//About us section
	$customize->add_section('about_section',array(
		'title'=>'About us'));
	//About us title
	$customize->add_setting('about_title',array(
		'default'=>'It is about section'));
	$customize->add_control(new WP_Customize_Control($customize,
		'title_control',array(
			'label'=>'Enter About Title',
			'section'=>'about_section',
			'settings'=>'about_title',
			)));
	//About us subtitle
	$customize->add_setting('about_subtitle',array(
		'default'=>'Enter subtitle'));
	$customize->add_control(new WP_Customize_Control($customize,
		'subtitle_control',array(
			'label'=>'Enter About Subtitle',
			'section'=>'about_section',
			'settings'=>'about_subtitle',
			)));
	//About us content
	$customize->add_setting('about_content',array(
		'default'=>'Enter Description about company here'));
	$customize->add_control(new WP_Customize_Control($customize,
		'content_control',array(
			'label'=>'Enter Description',
			'section'=>'about_section',
			'settings'=>'about_content',
			'type'=>'textarea')));


//Skill diagram section
	$customize->add_section('skill_section',array(
		'title'=>'Skill Diagram'));

	//skill diagram title
	$customize->add_setting('skill_title',array(
		'default'=>'It is skill diagram section'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_title_control',array(
			'label'=>'Enter skill Title',
			'section'=>'skill_section',
			'settings'=>'skill_title',
			)));

	//skill diagram subtitle
	$customize->add_setting('skill_subtitle',array(
		'default'=>'It is skill diagram subtitle'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_subtitle_control',array(
			'label'=>'Enter skill subitle',
			'section'=>'skill_section',
			'settings'=>'skill_subtitle',
			)));

	//skill diagram 1
	$customize->add_setting('skill_1_title',array(
		'default'=>'Enter skill name'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_1_title_control',array(
			'label'=>'Enter first skill name',
			'section'=>'skill_section',
			'settings'=>'skill_1_title',
			)));
	$customize->add_setting('skill_1',array(
		'default'=>'30'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_1_control',array(
			'label'=>'Enter first skill progress',
			'section'=>'skill_section',
			'settings'=>'skill_1',
			)));

	//skill diagram 2
	$customize->add_setting('skill_2_title',array(
		'default'=>'Enter skill name'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_2_title_control',array(
			'label'=>'Enter second skill Title',
			'section'=>'skill_section',
			'settings'=>'skill_2_title',
			)));
	$customize->add_setting('skill_2',array(
		'default'=>'33'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_2_control',array(
			'label'=>'Enter second skill progress',
			'section'=>'skill_section',
			'settings'=>'skill_2',
			)));

	//skill diagram 3
	$customize->add_setting('skill_3_title',array(
		'default'=>'Enter skill name'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_3_title_control',array(
			'label'=>'Enter third skill Title',
			'section'=>'skill_section',
			'settings'=>'skill_3_title',
			)));
	$customize->add_setting('skill_3',array(
		'default'=>'43'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_3_control',array(
			'label'=>'Enter third skill progress',
			'section'=>'skill_section',
			'settings'=>'skill_3',
			)));

	//skill diagram 4
	$customize->add_setting('skill_4_title',array(
		'default'=>'Enter skill name'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_4_title_control',array(
			'label'=>'Enter fourth skill Title',
			'section'=>'skill_section',
			'settings'=>'skill_4_title',
			)));
	$customize->add_setting('skill_4',array(
		'default'=>'93'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_4_control',array(
			'label'=>'Enter fourth skill progress',
			'section'=>'skill_section',
			'settings'=>'skill_4',
			)));

	//skill diagram 5
	$customize->add_setting('skill_5_title',array(
		'default'=>'Enter skill name'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_5_title_control',array(
			'label'=>'Enter fifth skill Title',
			'section'=>'skill_section',
			'settings'=>'skill_5_title',
			)));
	$customize->add_setting('skill_5',array(
		'default'=>'73'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_5_control',array(
			'label'=>'Enter fifth skill progress',
			'section'=>'skill_section',
			'settings'=>'skill_5',
			)));

	//skill diagram 6
	$customize->add_setting('skill_6_title',array(
		'default'=>'Enter skill name'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_6_title_control',array(
			'label'=>'Enter sixth skill Title',
			'section'=>'skill_section',
			'settings'=>'skill_6_title',
			)));
	$customize->add_setting('skill_6',array(
		'default'=>'88'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_6_control',array(
			'label'=>'Enter sixth skill progress',
			'section'=>'skill_section',
			'settings'=>'skill_6',
			)));

	//skill diagram 7
	$customize->add_setting('skill_7_title',array(
		'default'=>'Enter skill name'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_7_title_control',array(
			'label'=>'Enter seventh skill Title',
			'section'=>'skill_section',
			'settings'=>'skill_7_title',
			)));
	$customize->add_setting('skill_7',array(
		'default'=>'92'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_7_control',array(
			'label'=>'Enter seventh skill progress',
			'section'=>'skill_section',
			'settings'=>'skill_7',
			)));

	//skill diagram 8
	$customize->add_setting('skill_8_title',array(
		'default'=>'Enter skill name'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_8_title_control',array(
			'label'=>'Enter eighth skill Title',
			'section'=>'skill_section',
			'settings'=>'skill_8_title',
			)));
	$customize->add_setting('skill_8',array(
		'default'=>'79'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skill_8_control',array(
			'label'=>'Enter eighth skill progress',
			'section'=>'skill_section',
			'settings'=>'skill_8',
			)));


//Promotion section
	$customize->add_section('promo_section',array(
		'title'=>'Promotion section'));

	//promo 1
	$customize->add_setting('promo_name_1',array(
		'default'=>'It is promo 1'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_1_control',array(
			'label'=>'Enter first promo name',
			'section'=>'promo_section',
			'settings'=>'promo_name_1',
			)));
	$customize->add_setting('promo_icon_1',array(
		'default'=>'e.g. fa fa-facebook'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_icon_1_control',array(
			'label'=>'Enter icon class(You can use fontawesome or glyphicon)',
			'section'=>'promo_section',
			'settings'=>'promo_icon_1',
			)));
	$customize->add_setting('promo_range_1',array(
		'default'=>'e.g. 45785'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_range_1_control',array(
			'label'=>'Enter promo range',
			'section'=>'promo_section',
			'settings'=>'promo_range_1',
			)));
			

			//promo 2
	$customize->add_setting('promo_name_2',array(
		'default'=>'It is promo 2'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_2_control',array(
			'label'=>'Enter second promo name',
			'section'=>'promo_section',
			'settings'=>'promo_name_2',
			)));
	$customize->add_setting('promo_icon_2',array(
		'default'=>'e.g. fa fa-facebook'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_icon_2_control',array(
			'label'=>'Enter icon class(You can use fontawesome or glyphicon)',
			'section'=>'promo_section',
			'settings'=>'promo_icon_2',
			)));
	$customize->add_setting('promo_range_2',array(
		'default'=>'e.g. 45785'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_range_2_control',array(
			'label'=>'Enter promo range',
			'section'=>'promo_section',
			'settings'=>'promo_range_2',
			)));
			

			//promo 3
	$customize->add_setting('promo_name_3',array(
		'default'=>'It is promo 3'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_3_control',array(
			'label'=>'Enter third promo name',
			'section'=>'promo_section',
			'settings'=>'promo_name_3',
			)));
	$customize->add_setting('promo_icon_3',array(
		'default'=>'e.g. fa fa-facebook'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_icon_3_control',array(
			'label'=>'Enter icon class(You can use fontawesome or glyphicon)',
			'section'=>'promo_section',
			'settings'=>'promo_icon_3',
			)));
	$customize->add_setting('promo_range_3',array(
		'default'=>'e.g. 45785'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_range_3_control',array(
			'label'=>'Enter promo range',
			'section'=>'promo_section',
			'settings'=>'promo_range_3',
			)));
			

			//promo 4
	$customize->add_setting('promo_name_4',array(
		'default'=>'It is promo 4'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_4_control',array(
			'label'=>'Enter fourth promo name',
			'section'=>'promo_section',
			'settings'=>'promo_name_4',
			)));
	$customize->add_setting('promo_icon_4',array(
		'default'=>'e.g. fa fa-facebook'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_icon_4_control',array(
			'label'=>'Enter icon class(You can use fontawesome or glyphicon)',
			'section'=>'promo_section',
			'settings'=>'promo_icon_4',
			)));
	$customize->add_setting('promo_range_4',array(
		'default'=>'e.g. 45785'));
	$customize->add_control(new WP_Customize_Control($customize,
		'promo_range_4_control',array(
			'label'=>'Enter promo range',
			'section'=>'promo_section',
			'settings'=>'promo_range_4',
			)));
			


//Footer Social
	//Promotion section
	$customize->add_section('social_section',array(
		'title'=>'Social icons'));

	//facebook
	$customize->add_setting('fb',array(
		'default'=>'https://fb.com/profile.php'));
	$customize->add_control(new WP_Customize_Control($customize,
		'fb_control',array(
			'label'=>'Enter facebook url',
			'section'=>'social_section',
			'settings'=>'fb',
			)));
	//Twitter
	$customize->add_setting('twitter',array(
		'default'=>'https://twitter.com/profile.php'));
	$customize->add_control(new WP_Customize_Control($customize,
		'twitter_control',array(
			'label'=>'Enter facebook url',
			'section'=>'social_section',
			'settings'=>'twitter',
			)));
	//dribble
	$customize->add_setting('dribble',array(
		'default'=>'https://dribbble.com/'));
	$customize->add_control(new WP_Customize_Control($customize,
		'dribble_control',array(
			'label'=>'Enter dribble url',
			'section'=>'social_section',
			'settings'=>'dribble',
			)));
	//rss
	$customize->add_setting('rss',array(
		'default'=>'https://rss.com/profile.php'));
	$customize->add_control(new WP_Customize_Control($customize,
		'rss_control',array(
			'label'=>'Enter rss url',
			'section'=>'social_section',
			'settings'=>'rss',
			)));
	//flickr
	$customize->add_setting('flickr',array(
		'default'=>'https://flickr.com/profile.php'));
	$customize->add_control(new WP_Customize_Control($customize,
		'flickr_control',array(
			'label'=>'Enter flickr url',
			'section'=>'social_section',
			'settings'=>'flickr',
			)));
	//pinterest
	$customize->add_setting('pinterest',array(
		'default'=>'https://pinterest.com/profile.php'));
	$customize->add_control(new WP_Customize_Control($customize,
		'pinterest_control',array(
			'label'=>'Enter pinterest url',
			'section'=>'social_section',
			'settings'=>'pinterest',
			)));
	//linkedin
	$customize->add_setting('linkedin',array(
		'default'=>'https://linkedin.com/profile.php'));
	$customize->add_control(new WP_Customize_Control($customize,
		'linkedin_control',array(
			'label'=>'Enter linkedin url',
			'section'=>'social_section',
			'settings'=>'linkedin',
			)));
	//skype
	$customize->add_setting('skype',array(
		'default'=>'https://skype.com/profile.php'));
	$customize->add_control(new WP_Customize_Control($customize,
		'skype_control',array(
			'label'=>'Enter skype url',
			'section'=>'social_section',
			'settings'=>'skype',
			)));
	//google
	$customize->add_setting('google',array(
		'default'=>'https://google.com/profile.php'));
	$customize->add_control(new WP_Customize_Control($customize,
		'google_control',array(
			'label'=>'Enter google url',
			'section'=>'social_section',
			'settings'=>'google',
			)));


}
add_action('customize_register','home_page_contents');



/*-------------------Register sidebar----------------------------*/
function Sidebars(){
	register_sidebar(
		array(
		'name'          => __( 'Sidebar name', 'theme_text_domain' ),
		'id'            => 'right_sidebar',
		'description'   => 'All right sidebar componenet will be here',
		'class'         => '',
		'before_widget' => '<div id="%1" class="widget %2">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="title">',
		'after_title'   => '</h2><div class="title_br"></div>'
		)
	);
}
add_action( 'widgets_init', 'Sidebars' );
