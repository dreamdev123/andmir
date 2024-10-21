<style type="text/css">
  h1, h2, h3, h4, h5 {
    margin: 0;
    margin-bottom: 0.8em;  
    padding: 0;
  } 
</style> 

<?php 
if(get_field('flexible_content')){
  $flexCont = get_the_ID(); 
}
  
// loop through the rows of data
while ( has_sub_field('flexible_content', $flexCont) ) :

	if( get_row_layout() == 'hero_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/hero_section.php');	

	elseif( get_row_layout() == 'html_block' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/html_block.php');

	elseif( get_row_layout() == 'accordion' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/accordion.php');

	elseif( get_row_layout() == 'anchor_list' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/anchor_list.php');

	elseif( get_row_layout() == 'call_out_bar' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/call_out_bar.php');

	elseif( get_row_layout() == 'expanding_areas' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/expanding_areas.php');

	elseif( get_row_layout() == 'faq_display' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/faq_display.php');

	elseif( get_row_layout() == 'gallery' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/gallery.php');

	elseif( get_row_layout() == 'grid_area' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/grid_area.php');

	elseif( get_row_layout() == 'job_display' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/job_display.php');

	elseif( get_row_layout() == 'location_info' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/location_info.php');

	elseif( get_row_layout() == 'logo_bar' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/logo_bar.php');

	elseif( get_row_layout() == 'rollup_numbers' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/rollup_numbers.php');
	
	elseif( get_row_layout() == 'slider_bar' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/slider_bar.php');

	elseif( get_row_layout() == 'team_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/team_section.php');

	elseif( get_row_layout() == 'testimonials' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/testimonials.php');

	elseif( get_row_layout() == 'timeline' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/timeline.php'); 

	// elseif( get_row_layout() == 'charts' ):
	// 	include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/charts.php'); 
	
	elseif( get_row_layout() == 'home_hero_slider' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/home_hero_slider.php'); 

	elseif( get_row_layout() == 'about_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/about_section.php'); 

	elseif( get_row_layout() == 'solutions_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/solutions_section.php');

	elseif( get_row_layout() == 'secondary_hero_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/secondary_hero_section.php');  

	elseif( get_row_layout() == 'andmir_html_block' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/andmir_html_block.php');

	elseif( get_row_layout() == 'mission_and_vision_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/mission_and_vision_section.php'); 

	elseif( get_row_layout() == 'values_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/values_section.php');  

	elseif( get_row_layout() == 'events_and_news_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/events_and_news_section.php');  

	elseif( get_row_layout() == 'history_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/history_section.php');

	elseif( get_row_layout() == 'all_solutions_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/all_solutions_section.php');  

	elseif( get_row_layout() == 'related_solutions_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/related_solutions_section.php');

	elseif( get_row_layout() == 'advantage_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/advantage_section.php');  

	elseif( get_row_layout() == 'solutions_gallery_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/solutions_gallery_section.php'); 

	elseif( get_row_layout() == 'map_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/map_section.php'); 

	elseif( get_row_layout() == 'contact_section' ):
		include(get_theme_root().'/'.get_option('stylesheet').'/templates/flexible-content/contact_section.php'); 

  endif;

endwhile;

?> 
