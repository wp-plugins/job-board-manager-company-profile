<?php
/*
* @Author 		ParaTheme
* @Folder	 	job-board-manager/includes
* Copyright: 	2015 ParaTheme
*/

if ( ! defined('ABSPATH')) exit;  // if direct access 
	

function job_bm_cp_company_types($company_types){
	
	$company_types = array(
	'advertising-ageny'=> 'Advertising Ageny',
	'airline'=>	'Airline',
	'animal-plant-breeding'=>'Animal/Plant Breeding',
	''=>'Audit Firms /Tax Consultant',
	''=>'Bakery (Cake, Biscuit, Bread)',	
	''=>'Bar/Pub',	
	''=>'Beverage',		
	''=>'Boutique/ Fashion',	
	''=>'Brick',		
	''=>'Call Center',
	''=>'Catering',	
	''=>'Cement',		
	''=>'Chain shop',	
	''=>'Chemical Industries',
	''=>'Clearing & Forwarding (C&F)',	
	''=>'Club',		
	''=>'CNG Conversion',			
	''=>'College',
	''=>'Consulting Firms',	
	''=>'Corrugated Tin',	
	''=>'Credit Rating Agency',	
	''=>'Cultural Centre',	
	''=>'Departmental store',
	''=>'Developer',	
	''=>'Diagnostic Centre',	
	''=>'Dry cell (Battery)',	
	''=>'Dyeing Factory',		
	''=>'Electric Wire/Cable',
	''=>'Embassies/Foreign Consulate',	
	''=>'Escalator/Elevator/Lift',	
	''=>'Farming',	
	''=>'Filling Station',		
	''=>'Financial Consultants',
	''=>'Fisheries',	
	''=>'Food (Packaged)/Beverage',	
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
	''=>'Newspaper/Magazine',
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