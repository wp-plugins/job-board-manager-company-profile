<?php
/*
* @Author 		ParaTheme
* @Folder	 	job-board-manager/includes
* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 
	





function job_bm_job_meta_scripts_extra($content){
	
	$html = ''; 
	
	$html.= '<script>
jQuery(document).ready(function($)
	{
		
	});
	</script>';	
	
	return $html;
	}

add_filter('job_bm_job_meta_scripts','job_bm_job_meta_scripts_extra');


function job_bm_cp_ajax_job_company_list(){
	
	$name = $_POST['name'];
	$company_name = '';
	
  
	  
	  
	global $wpdb;
	
	$company_ids = $wpdb->get_col("select ID from $wpdb->posts where post_title like '%".$name."%' ");
	if(!empty($company_ids)){
		
		$args = array(	'post_type' => 'company',
						'post_status' => 'publish',
						'post__in' => $company_ids,
						'orderby' => 'title',
						'order' => 'ASC',
						'posts_per_page' => 10,);
						
		$company_data = get_posts($args);		
			
			
		if(!empty($company_data)){
			
			foreach($company_data as $key=>$values){
				
				$company_name.= '<div company-data="'.$values->post_title.'" class="item">'.$values->post_title.'</div>';
				
				}
			}
		else{
			
			$company_name.= '<div class="item">Nothing found</div>';
			}
						
		}
	else{
		
		$company_name.= '<div class="item">Nothing found</div>';
		} 
	  
	  
	  

	

	
	




	echo $company_name;

	
	die();
	}
add_action('wp_ajax_job_bm_cp_ajax_job_company_list', 'job_bm_cp_ajax_job_company_list');
add_action('wp_ajax_nopriv_job_bm_cp_ajax_job_company_list', 'job_bm_cp_ajax_job_company_list');











function job_bm_cp_company_types($company_types){
	
	$company_types = array(
	'advertising-ageny'=> 'Advertising Ageny',
	'airline'=>	'Airline',
	'animal-plant-breeding'=>'Animal/Plant Breeding',
	'audit-firms'=>'Audit Firms /Tax Consultant',
	'bakery'=>'Bakery (Cake, Biscuit, Bread)',	
	'bar'=>'Bar/Pub',	
	'beverage'=>'Beverage',		
	'boutique'=>'Boutique/ Fashion',	
	'brick'=>'Brick',		
	'call-center'=>'Call Center',
	'catering'=>'Catering',	
	'cement'=>'Cement',		
	'chemical-industries'=>'Chemical Industries',
	'clearing'=>'Clearing & Forwarding (C&F)',	
	'club'=>'Club',		
	'cng-conversion'=>'CNG Conversion',			
	'college'=>'College',
	'consulting-firms'=>'Consulting Firms',	
	'cultural-centre'=>'Cultural Centre',	
	'departmental-store'=>'Departmental store',
	'developer'=>'Developer',	
	'diagnostic-centre'=>'Diagnostic Centre',	
	'dry-cell'=>'Dry cell (Battery)',	
	'dyeing-factory'=>'Dyeing Factory',		
	'electric-wire'=>'Electric Wire/Cable',
	'embassies'=>'Embassies/Foreign Consulate',	
	'elevator'=>'Escalator/Elevator/Lift',	
	'farming'=>'Farming',	
	'filling-station'=>'Filling Station',		
	'financial-consultants'=>'Financial Consultants',
	'fisheries'=>'Fisheries',	
	'food'=>'Food (Packaged)/Beverage',	
	'fuel-petroleum'=>'Fuel/Petroleum',	
	'furniture-manufacturer'=>'Furniture Manufacturer',		
	'garments'=>'Garments',
	'gas'=>'Gas',	
	'govt'=>'Govt./ Semi Govt./ Autonomous body',	
	'group-of-companies'=>'Group of Companies',	
	'handicraft'=>'Handicraft',		
	'healthcare-lifestyle-product'=>'Healthcare/Lifestyle product',
	'hospital'=>'Hospital',	
	'immigration-education-consultancy'=>'Immigration & Education Consultancy ',	
	'importer'=>'Importer',	
	'indenting-firm'=>'Indenting Firm',		
	'insurance'=>'Insurance',	
	'inventory-warehouse'=>'Inventory/Warehouse',	
	'isp'=>'ISP',	
	'jewelry-gem'=>'Jewelry/Gem',		
	'kindergarten'=>'Kindergarten',	
	'leasing'=>'Leasing',	
	'logistic-courier-air-express'=>'Logistic/Courier/Air Express Companies',	
	'madrasa'=>'Madrasa',		
	'manufacturing'=>'Manufacturing (FMCG)',
	'market-research'=>'Market Research Firms',	
	'medical-equipment'=>'Medical Equipment',	
	'mobile-accessories'=>'Mobile Accessories',	
	'newspaper-magazine'=>'Multinational Companies',		
	'newspaper'=>'Newspaper/Magazine',
	'online-newspaper-portal'=>'Online Newspaper/ News Portal',	
	'paper'=>'Paper',	
	'party-community-center'=>'Party/ Community Center',	
	'pharmaceutical-Medicine-'=>'Pharmaceutical/Medicine Companies',		
	'radio'=>'Radio',	
	'religious-place'=>'Religious Place',	
	'research-organization'=>'Research Organization',	
	'satellite-tv'=>'Satellite TV',		
	'science-laboratory'=>'Science Laboratory',
	'share-brokerage-securities-house'=>'Share Brokerage/ Securities House',	
	'shipyard'=>'Shipyard',	
	'spinning'=>'Spinning',	
	'steel'=>'Steel',		
	'swimming-pool'=>'Swimming Pool',
	'tannery-footwear'=>'Tannery/Footwear',	
	'textile'=>'Textile',	
	'tiles-ceramic'=>'Tiles/Ceramic',	
	'toiletries'=>'Toiletries',		
	'toy'=>'Toy',
	'training-institutes'=>'Training Institutes',	
	'transportation'=>'Transportation',	
	'venture-capital-firm'=>'Venture Capital Firm',	
	'watch'=>'Watch',		
	'wholesale'=>'Wholesale',	

	
	);
	
	return $company_types;
	
	}

add_filter('job_bm_cp_filters_company_types','job_bm_cp_company_types');