<?php

/*
* @Author 		ParaTheme
* @Folder	 	job-board-manager/includes
* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 

class class_job_bm_cp_shortcodes{
	
    public function __construct(){
		
		add_shortcode( 'company_list', array( $this, 'job_bm_cp_companylist_display' ) );
		add_shortcode( 'company_single', array( $this, 'job_bm_cp_companysingle_display' ) );		

   		}
		
		

	public function job_bm_cp_companylist_display($atts, $content = null ) {
			$atts = shortcode_atts(
				array(
					'themes' => 'flat',
					), $atts);
	
			$html = '';
			$themes = $atts['themes'];
			
			//$job_bm_cp_themes = get_post_meta( $post_id, 'job_bm_cp_themes', true );
			//$job_bm_cp_license_key = get_option('job_bm_cp_license_key');
			
/*
			if(empty($job_bm_cp_license_key))
				{
					return '<b>"'.job_bm_cp_plugin_name.'" Error:</b> Please activate your license.';
				}

*/
			
			$class_job_bm_cp_functions = new class_job_bm_cp_functions();
			$job_bm_cp_companylist_themes_dir = $class_job_bm_cp_functions->job_bm_cp_companylist_themes_dir();
			$job_bm_cp_companylist_themes_url = $class_job_bm_cp_functions->job_bm_cp_companylist_themes_url();

			
			
			echo '<link  type="text/css" media="all" rel="stylesheet"  href="'.$job_bm_cp_companylist_themes_url[$themes].'/style.css" >';				

			include $job_bm_cp_companylist_themes_dir[$themes].'/index.php';				

			return $html;
	
	
		}
		

	public function job_bm_cp_companysingle_display($atts, $content = null ) {
			$atts = shortcode_atts(
				array(
					'id' => '',				
					'themes' => 'flat',
					), $atts);
					
					
			$company_id = $atts['id'];			
			$job_bm_cp_companysingle_themes = $atts['themes'];
	
			$html = '';

			
			//$job_bm_cp_themes = get_post_meta( $post_id, 'job_bm_cp_themes', true );
			//$job_bm_cp_license_key = get_option('job_bm_cp_license_key');
			
/*
			if(empty($job_bm_cp_license_key))
				{
					return '<b>"'.job_bm_cp_plugin_name.'" Error:</b> Please activate your license.';
				}
*/
			
			$class_job_bm_cp_functions = new class_job_bm_cp_functions();
			$job_bm_cp_companysingle_themes_dir = $class_job_bm_cp_functions->job_bm_cp_companysingle_themes_dir();
			$job_bm_cp_companysingle_themes_url = $class_job_bm_cp_functions->job_bm_cp_companysingle_themes_url();

			//var_dump($job_bm_cp_companysingle_themes_url);
			
			$html.= '<link  type="text/css" media="all" rel="stylesheet"  href="'.$job_bm_cp_companysingle_themes_url[$job_bm_cp_companysingle_themes].'/style.css" >';				

			include $job_bm_cp_companysingle_themes_dir[$job_bm_cp_companysingle_themes].'/index.php';				

			return $html;
	
	
		}
			
	}
	
	new class_job_bm_cp_shortcodes();