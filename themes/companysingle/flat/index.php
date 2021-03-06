<?php

/*
* @Author 		ParaTheme
* @Folder	 	job-board-manager\themes\joblist

* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access

	$company_post_data = get_post($company_id);
	
	
	
	
	$class_job_bm_company_meta = new class_job_bm_cp_post_meta();
	$company_meta_options = $class_job_bm_company_meta->company_meta_options();
	
	//var_dump($company_meta_options);
	
	foreach($company_meta_options as $options_tab=>$options){
		
		foreach($options as $option_key=>$option_data){
			
			$meta_key_values[$option_key] = get_post_meta($company_id, $option_key, true);
			${$option_key} = get_post_meta($company_id, $option_key, true);			
			//var_dump(${$option_key});
			}
		}
	
	
	
	$html .= '<div class="company-single">';
	
	$html .= '<div class="company-header">';
	
	$thumb = wp_get_attachment_image_src( get_post_thumbnail_id($company_id), 'full' );
	$thumb_url = $thumb['0'];	
	
	if(!empty($thumb_url)){
		$html .= '<div class="thumb"><img src="'.$thumb_url.'" /></div>';
		}
	
	if(!empty($job_bm_cp_logo)){
		$html .= '<div class="logo"><img src="'.$job_bm_cp_logo.'" /></div>';
		}
	
	if(!empty($company_post_data->post_title)){
		$html .= '<div class="name">'.$company_post_data->post_title.'<span class="tagline">'.$job_bm_cp_tagline.'</span></div>';	
		}
	

	$html .= '</div>'; // .company-header	
	
	
	
	$html .= '<div class="continer-main">';	
	$html .= '<div class="meta-info">';	
		
	if(!empty($job_bm_cp_website)){
	$html .= '<div class="meta"><strong><i class="fa fa-link"></i>'.__('Website: ','job_bm_cp').'</strong>'.$job_bm_cp_website.'</div>';
		}

	
	
	$company_type = '';
	
	if(!empty($job_bm_cp_type)){

		foreach($job_bm_cp_type as $type_key=>$type_name){
			
			$company_type.= $type_name.', ';
			}
	
	
			$html .= '<div class="meta"><strong><i class="fa fa-flag-o"></i>'.__('Type: ','job_bm_cp').'</strong>'.$company_type.'</div>';
		}

	if(!empty($job_bm_cp_founded)){
		
	$html .= '<div class="meta"><strong><i class="fa fa-calendar-o"></i>'.__('Founded: ','job_bm_cp').'</strong>'.$job_bm_cp_founded.'</div>';	
	
		}
	if(!empty($job_bm_cp_size)){
		
		$html .= '<div class="meta"><strong><i class="fa fa-users"></i>'.__('Size: ','job_bm_cp').'</strong>'.$job_bm_cp_size.'</div>';
		}
	if(!empty($job_bm_cp_revenue)){
		
		$html .= '<div class="meta"><strong><i class="fa fa-money"></i>'.__('Revenue: ','job_bm_cp').'</strong>$'.$job_bm_cp_revenue.'</div>';
		}
	
	
	$html .= '</div>'; // .meta-info	
	
	if(!empty($job_bm_cp_mission)){
		
		$html .= '<div class="mission"><strong><i class="fa fa-rocket"></i>'.__('Mission: ','job_bm_cp').'</strong>'.$job_bm_cp_mission.'</div>';
		
		}

	if(!empty($company_post_data->post_content)){
		$html .= '<div class="description">'.wpautop($company_post_data->post_content).'</div>';
		}
	
		
		
	$html .= '<div class="job-list-header">'.__('Jobs available from - '.$company_post_data->post_title.'','job_bm_locations').'</div>';		
	$html .= do_shortcode('[job_list meta_keys="job_bm_company_name" company_name="'.$company_post_data->post_title.'"]');	
		
		
		
		
	$html .= '</div>'; // .continer-main	
	
	$html .= '</div>'; // .company-single	



	

