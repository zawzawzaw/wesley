@section('content')
<div id="my-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">				

				<div class="saved-search">
					<div class="header">
						<h3 class="pull-left">saved search</h3>						
						<a href="{{ URL::to('/mysearch/') }}" class="delete-saved-search delete-btn pull-right"><i class="fa fa-minus-circle"></i><span>DELETE</span></a>
					</div>
					<div class="content">					
						<div class="save-search-table">							
							<ul class="table-head">
								<li>
									<div class="each-col">
										<h5 class="first">date</h5>
									</div>
									<div class="each-col">
										<h5>Search Title <a href="#" class="sort"></a></h5>
									</div>
									<div class="each-col">
										<h5>Keywords</h5>					
									</div>
									<div class="each-col">
										<h5>Shortcut</h5>
									</div>
								</li>
							</ul>
							<ul class="table-content">
								@if($my_searches && count($my_searches) > 0)
									@foreach($my_searches as $mysearch)
										<li>
											<div class="each-col">
												{{ Form::checkbox('delete_saved_search', $mysearch->id) }}
												{{-- <a href="{{ route('mysearch.destroy', $mysearch->id) }}" class="delete-saved-search"><i class="fa fa-minus-circle"></i></a> --}}
												<span class="date">{{ date('d/m/y', strtotime($mysearch->created_at)) }}</span>
											</div>									
											<div class="each-col">
												<p class="search_title edit-search-title">{{ $mysearch->name }}</p>
												{{ Form::hidden('search_title', $mysearch->name, ['class'=>'search_title_input', 'id'=>$mysearch->id]) }}
											</div>
											<div class="each-col">
												<?php $keywords = json_decode($mysearch->search_params); ?>
												<p class="keywords edit-keywords">
												<?php $keyword_exists = false; ?>
												<?php $form_type = $keywords->form_type; ?>
												@if($keywords->form_type=='smart')												
													@if(!empty($keywords->category))
														{{ $keywords->category }}
														<?php $keyword_exists = true; ?>
														@if(!empty($keywords->subcategory) || !empty($keywords->country) || !empty($keywords->origin_country))
															{{ '+' }}
														@endif
													@endif
													@if(!empty($keywords->subcategory))
														{{ $keywords->subcategory }}
														<?php $keyword_exists = true; ?>
														@if(!empty($keywords->country) || !empty($keywords->origin_country))
															{{ '+' }}
														@endif
													@endif
													@if(!empty($keywords->country))
														{{ Helper::code_to_country($keywords->country) }}
														<?php $keyword_exists = true; ?>
														@if(!empty($keywords->origin_country))
															{{ '+' }}
														@endif
													@endif
													@if(!empty($keywords->origin_country))
														{{ Helper::code_to_country($keywords->origin_country) }}													
														<?php $keyword_exists = true; ?>
													@endif

													@if($keyword_exists==false)
														{{ "All" }}
													@endif
												@elseif($keywords->form_type=='text')
													@if(!empty($keywords->text_search))
														{{ $keywords->text_search }}
													@endif
												@elseif($keywords->form_type=='advanced')
													@if(!empty($keywords->industry_estate))
														{{ $keywords->industry_estate }}
														<?php $keyword_exists = true; ?>
														@if(!empty($keywords->post_code) || !empty($keywords->multiple_countries))
															{{ '+' }}
														@endif
													@endif
													@if(!empty($keywords->post_code))
														{{ $keywords->post_code }}
														<?php $keyword_exists = true; ?>
														@if(!empty($keywords->multiple_countries))
															{{ '+' }}
														@endif
													@endif
													@if(!empty($keywords->multiple_countries))
														@foreach($keywords->multiple_countries as $country)
															@if(!empty($country))
																{{ Helper::code_to_country($country) }}
																<?php $keyword_exists = true; ?>
															@endif
														@endforeach													
													@endif

													@if($keyword_exists==false)
														{{ "All" }}
													@endif
												@endif
												</p>
												{{ Form::hidden('keywords', $mysearch->search_params, ['class'=>'keywords_input']) }}
												{{ Form::hidden('keywords_json', $mysearch->search_params, ['class'=>'keywords_input']) }}
											</div>
											<div class="each-col">
												<?php $keywords = json_decode($mysearch->search_params, true); unset($keywords['_token']); $urlEncodedString = http_build_query($keywords); ?>

												<a href="{{ ($form_type!=='advanced') ? route('search.store').'?'.$urlEncodedString : route('advancedsearch.store').'?'.$urlEncodedString }}" class="go-to-search"><i class="view-pdf"></i> Go to the page</a>
											</div>
										</li>
									@endforeach
								@else
									<li><span class="not-found">No saved search found.</span></li>
								@endif
							</ul>							
						</div>
					</div>
				</div>

				<div class="recommended">
					<div class="header">
						<h3 class="pull-left">recommended for you</h3>						
					</div>
					<div class="content">					
						<div class="recommended-table">
							<ul class="table-head">
								<li><p>Based on <span class="keyword">“Wireless Headphone:</span><span class="keyword-2"> Electronic + Wireless + Devices + 15km + Japan</span>”</p></li>	
							</ul>
							<ul class="table-content">
								<li><a href="#"><i class="no">1</i><span>DNP Singapore</span></a></li>
								<li><a href="#"><i class="no">2</i><span>Idemitsu Lube</span></a></li>
								<li><a href="#"><i class="no">3</i><span>Systems</span></a></li>
								<li><a href="#"><i class="no">4</i><span>hitachi automotive</span></a></li>
								<li><a href="#"><i class="no">5</i><span>Smk electronics</span></a></li>								
							</ul>
						</div>

						<div class="recommended-table">
							<ul class="table-head">
								<li><p>Based on <span class="keyword">“Wireless Headphone:</span><span class="keyword-2"> Electronic + Wireless + Devices + 15km + Japan</span>”</p></li>	
							</ul>
							<ul class="table-content">
								<li><a href="#"><i class="no">1</i><span>DNP Singapore</span></a></li>
								<li><a href="#"><i class="no">2</i><span>Idemitsu Lube</span></a></li>
								<li><a href="#"><i class="no">3</i><span>Systems</span></a></li>
								<li><a href="#"><i class="no">4</i><span>hitachi automotive</span></a></li>
								<li><a href="#"><i class="no">5</i><span>Smk electronics</span></a></li>								
							</ul>
						</div>

						<div class="recommended-table">
							<ul class="table-head">
								<li><p>Based on <span class="keyword">“Wireless Headphone:</span><span class="keyword-2"> Electronic + Wireless + Devices + 15km + Japan</span>”</p></li>	
							</ul>
							<ul class="table-content">
								<li><a href="#"><i class="no">1</i><span>DNP Singapore</span></a></li>
								<li><a href="#"><i class="no">2</i><span>Idemitsu Lube</span></a></li>
								<li><a href="#"><i class="no">3</i><span>Systems</span></a></li>
								<li><a href="#"><i class="no">4</i><span>hitachi automotive</span></a></li>
								<li><a href="#"><i class="no">5</i><span>Smk electronics</span></a></li>								
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<script>
$(document).ready(function(){

	//////
	//////

	var request;
	var makeRequest = function(Data, URL, Method) {

		var request = $.ajax({
		    url: URL,
		    type: Method,
		    data: Data
		});

		return request;
	};

	// $('.edit-saved-search').on('click', function(e){
	// 	e.preventDefault();
	// 	$(".delete-saved-search").toggleClass('show');
	// });

	var deleteRequest = false;
	$('.delete-saved-search').on('click', function(e){
		e.preventDefault();

		if ($('input[name="delete_saved_search"]:checked').length > 0) {
			var that = $(this);

			if(deleteRequest) {
				request.abort();
			}

			if (confirm('Are you sure you want to delete?')) {

				$('input[name="delete_saved_search"]').each(function(){

					if($(this).is(':checked')) {

						var $delete_input = $(this);
						var search_id = $delete_input.val()
						var current_url = that.attr('href') + '/' + search_id;
						
						data = {};

						deleteRequest = makeRequest(data, current_url, 'DELETE');				

						deleteRequest.done(function(data, textStatus, jqXHR){			
				        	
				        	if(jqXHR.status==200) {		        			        		

				        		$delete_input.parent().parent().remove();

				        		if($('input[name="delete_saved_search"]').length<=0) {
				        			$('.save-search-table .table-content').append('<li><span class="not-found">No favourites was found.</span></li>');
				        		}

				        		deleteRequest = false;

				        	}

				        });

				        deleteRequest.always(function(data, textStatus, jqXHR){

				        	if(jqXHR.status!=200) {
				        		var returnData = $.parseJSON(data.responseText);
					        	
					        	console.log(returnData.message);

					        	deleteRequest = false;	
				        	}		        	

				        });

					}				

				});
												
			}

		}else {
			alert('Please choose an item to delete.')
		}	

	});	

	//////
	//////

	var $editSearchTitle = $(".search_title"),
		$editSearchTitleInput = $(".search_title_input"),
		$keywords = $(".keywords"),
		$keywordsInput = $(".keywords_input"),
		putRequest = false;

	var categories = [
		'Oil & Gas',
		'Chemicals',
		'Basic Resources',
		'Construction & Materials',
		'Industrial Goods & Services',
		'Automobiles & Parts',
		'Food & Beverage',
		'Personal & Household Goods',
		'Health Care',
		'Retail',
		'Media',
		'Travel & Leisure',
		'Telecommunications',
		'Utilities',
		'Banks',
		'Insurance',
		'Real Estate',
		'Financial Services',
		'Technology'
	];

	var subcategories = [
		"Exploration & Production",
	  	"Integrated Oil & Gas",
	  	"Oil Equipment & Services",
	  	"Pipelines",
	  	"Renewable Energy Equipment",
	  	"Alternative Fuels",
	  	"Commodity Chemicals",
	  	"Specialty Chemicals",
	  	"Forestry",
		"Paper",
		"Aluminum",
		"Nonferrous Metals",
		"Iron & Steel",
		"Coal",
		"Diamonds & Gemstones",
		"General Mining",
		"Gold Mining",
		"Platinum & Precious Metals",
		"Building Materials & Fixtures",
		"Heavy Construction"
	];

	function whichKeywords(keyword) {
		if(jQuery.inArray( keyword, categories ) !== -1){
			return 'category';
		}		
		if(jQuery.inArray( keyword, subcategories ) !== -1){
			return 'subcategory';	
		}
		return 'country';
	}

	function KeywordsToJson(keywords, $that) {
		var prev_json_val = $that.next('input').val();
		var obj = $.parseJSON(prev_json_val);

		var keywordsarr = keywords.split("+");

		var jsonArr = {};
		var completeArr = {
			"category":"",
			"subcategory":"",
			"country":"",
			"origin_country":"",
			"form_type":obj.form_type
		};

		var smartkeyArr = ['category','subcategory','country','origin_country','form_type'];
		for(var i=0; i<keywordsarr.length; i++) {
			var key = whichKeywords(keywordsarr[i].trim());
			jsonArr[key] = keywordsarr[i].trim();			
		}

		$.each(completeArr, function(each_val){
			if(typeof jsonArr[each_val] != 'undefined') {
				completeArr[each_val] = jsonArr[each_val];
			}
		});

		return JSON.stringify(completeArr);
		
	}

	function JsonToKeywords(json_val) {
		var obj = $.parseJSON(json_val);
		var keywords = '';

		if(obj.form_type=='smart') {
			
			if(obj.category!='') {
				keywords += obj.category;
				if(obj.subcategory != '' || obj.country != '' || obj.origin_country != '') {
					keywords += ' + ';
				}
			}
			if(obj.subcategory!='') {
				keywords += obj.subcategory;
				if(obj.country != '' || obj.origin_country != '') {
					keywords += ' + ';
				}
			}
			if(obj.country!='') {
				keywords += obj.country;
				if(obj.origin_country != '') {
					keywords += ' + ';
				}
			}
			if(obj.origin_country!='') {
				keywords += obj.origin_country;				
			}

			if(keywords=='') {
				keywords += 'All';
			}
			
		}else 
			keywords = obj.text_search;
		
		return keywords;
	}

	function hideAllInputs() {
		$editSearchTitle.show();
		$editSearchTitleInput.attr('type', 'hidden');
	}

	function showInput(that, json) {
		hideAllInputs();
		$(that).hide();
		var input_val = $(that).next('input').val();
		var value = '';
		if(json)
			value = JsonToKeywords(input_val);
		else
			value = input_val;

		$(that).next('input').attr('type', 'text').val(value);
	}		

	function hideInputAndUpdate($that, json) {	
		var input_val = $that.val();
		var value = '';
		var current_url = '{{ URL::to("/mysearch/") }}/'+$that.attr('id');
		var keywords_json = $that.parent().parent().find('.keywords_input').val();

		if(json) {
			// keywords
			value = KeywordsToJson(input_val, $that);

			$that.attr('type', 'hidden').val(value);
		}
		else {
			// search title
			value = input_val;		

			data = {
				"name" : input_val,
				"search_params" : keywords_json
			};

			putRequest = makeRequest(data, current_url, 'PUT');

			putRequest.done(function(data, textStatus, jqXHR){			
	        	
	        	if(jqXHR.status==200) {

	        		console.log(data);

	        		putRequest = false;

	        	}

	        });

	        putRequest.always(function(data, textStatus, jqXHR){

	        	if(jqXHR.status!=200) {
	        		var returnData = $.parseJSON(data.responseText);
		        	
		        	console.log(returnData.message);

		        	putRequest = false;	
	        	}		        	

	        });

	        $that.attr('type', 'hidden');
		}

		$that.prev('p').html(input_val).show();
		
	}

	function editSearchTitle() {
		hideInputAndUpdate($("input[type='text'][name='search_title']"), false);
	}

	function editKeywords() {
		hideInputAndUpdate($("input[type='text'][name='keywords']"), true);
	}



	///// EVENTS

	$('input[name="search_title"]').on('click', function(e){
		e.stopPropagation();
	});

	$('.edit-search-title').on('click', function(e){
		e.stopPropagation();
		showInput(this, false);
	});

	$('input[name="keywords"]').on('click', function(e){
		e.stopPropagation();
	});

	$('.edit-keywords').on('click', function(e){
		e.stopPropagation();
		showInput(this, true);
	});

	$('html').click(function() {
		$editSearchTitleInput.each(function(){
			if($(this).attr('type')=='text') {				
				editSearchTitle();	
			}
		});

		$keywordsInput.each(function(){
			if($(this).attr('type')=='text') {	
				editKeywords();				
			}
		});
	});

	
});
</script>
@stop