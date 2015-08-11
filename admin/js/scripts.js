jQuery(document).ready(function($)
	{
		
		$("#job_bm_company_name").attr('autocomplete','off');		
		$("#job_bm_company_name").wrap("<div id='company-name-wrapper'></div>");
		
		$("#company-name-wrapper").append("<div id='company-list'></div>");		

		$(document).on('keyup', '#job_bm_company_name', function()
			{
				
				var name = $(this).val();
				
				if(name=='' || name == null){
						$("#company-list").html('<div value="" class="item">Start Typing...<div>');
					}
				else{
					
					$.ajax(
						{
					type: 'POST',
					context: this,
					url:job_bm_cp_ajax.job_bm_cp_ajaxurl,
					data: {"action": "job_bm_cp_ajax_job_company_list", "name":name,},
					success: function(data)
							{	
								$("#company-list").html(data);	
							}
						});
					
					}
				
			})



		$(document).on('click', '#company-list .item', function(){
			
				var name = $(this).attr('company-data');
			
				$("#job_bm_company_name").val(name);
			
			})









	});