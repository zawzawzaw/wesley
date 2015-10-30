@section('content')
<div id="my-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="favourite-companies">
					<div class="header">
						<h3 class="pull-left">favourite companies</h3>
						<a href="#" class="edit-favourite edit-btn pull-right"><i class="edit-icon"></i><span>EDIT</span></a>
					</div>
					<div class="content">					
						<div class="favourite-companies-table">
							@if($favourites && count($favourites) > 0)
								<ul class="table-head">
									<li>
										<div class="each-col">
											<h5>Category</h5>
										</div>
										<div class="each-col">
											<h5>Location</h5>
										</div>
										<div class="each-col">
											<h5>Country of Origin</h5>
										</div>
										<div class="each-col">
											<h5>Company <a href="#" class="sort"></a></h5>
										</div>
										<div class="each-col">
											<h5>Key Products/ Services</h5>					
										</div>
										<div class="each-col">
											<h5>Shortcut</h5>
										</div>
									</li>
								</ul>
								<ul class="table-content">								
									@foreach($favourites as $favourite)
										<?php $list = Lists::find($favourite->list_id) ?>
										<?php $key_products = KeyProduct::where('lists_id', '=', $favourite->list_id)->get() ?>
										<li>
											<div class="each-col">
												<a href="{{ route('favourite.destroy', $favourite->id) }}" class="delete-favourite"><i class="fa fa-minus-circle"></i></a>
												<a href="#" class="category category-1"></a>
											</div>
											<div class="each-col">
												<i class="country {{ $list->country }}"></i>
											</div>
											<div class="each-col">
												<i class="country {{ $list->origin_country }}"></i>
											</div>
											<div class="each-col">
												<p>{{ $list->company_name }}</p>									
											</div>
											<div class="each-col">
												<ul>												
													@foreach($key_products as $key_product)
														<li><p>{{ $key_product->product_name }}</p></li>
													@endforeach
												</ul>
											</div>
											<div class="each-col">
												<ul class="ctas">
													<li><a href="{{ route('search.show', $list->id) }}" class="view-details"><i class="view-details"></i></a></li>										
													<li><a href="#" class="send-messages"><i class="messages"></i></a></li>
													<li><a href="#" class="view-pdf"><i class="view-pdf"></i></a></li>
													<li><a href="#" class="download-pdf">Download PDF</a></li>
												</ul>
											</div>
										</li>
									@endforeach								
									{{-- <li>
										<div class="each-col">
											<a href="#" class="category category-2"></a>
										</div>
										<div class="each-col">
											<i class="country th"></i>
										</div>
										<div class="each-col">
											<p>Asahi Kokusai Techneion Pte. Ltd.</p>									
										</div>
										<div class="each-col">
											<p>System Engineering Kokusai Keiso is ready to meet all your requirements with our competent system engineers.</p>
										</div>
										<div class="each-col">
											<ul class="ctas">
												<li><a href="#" class="view-details"><i class="view-details"></i></a></li>										
												<li><a href="#" class="send-messages"><i class="messages"></i></a></li>
												<li><a href="#" class="download-pdf"><i class="download-pdf"></i></a></li>
												<li><a href="#" class="download-pdf">Download PDF</a></li>
											</ul>
										</div>
									</li>
									<li>
										<div class="each-col">
											<a href="#" class="category category-3"></a>
										</div>
										<div class="each-col">
											<i class="country sg"></i>
										</div>
										<div class="each-col">
											<p>ARRK Malaysia Sdn. Bhd.</p>									
										</div>
										<div class="each-col">
											<p>Manufacturing of aluminium parts for automobile & motorcycle and aluminium wheel for automobile & motorcycle.</p>
										</div>
										<div class="each-col">
											<ul class="ctas">
												<li><a href="#" class="view-details"><i class="view-details"></i></a></li>										
												<li><a href="#" class="send-messages"><i class="messages"></i></a></li>
												<li><a href="#" class="download-pdf"><i class="download-pdf"></i></a></li>
												<li><a href="#" class="download-pdf">Download PDF</a></li>
											</ul>
										</div>
									</li> --}}
									
								</ul>
							@else
							<ul>
								<li><span>No favourites was found.</span></li>
							</ul>
							@endif
						</div>
					</div>
				</div>

				<div class="saved-search">
					<div class="header">
						<h3 class="pull-left">saved search</h3>
						<a href="#" class="edit-saved-search edit-btn pull-right"><i class="edit-icon"></i><span>EDIT</span></a>
					</div>
					<div class="content">					
						<div class="save-search-table">
							@if($my_searches && count($my_searches) > 0)
							<ul class="table-head">
								<li>
									<div class="each-col">
										<h5>date</h5>
									</div>
									<div class="each-col">
										<h5>Company <a href="#" class="sort"></a></h5>
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
								@foreach($my_searches as $mysearch)
									<li>
										<div class="each-col">
											<a href="{{ route('mysearch.destroy', $mysearch->id) }}" class="delete-saved-search"><i class="fa fa-minus-circle"></i></a>
											<span class="date">{{ date('d/m/y', strtotime($mysearch->created_at)) }}</span>
										</div>									
										<div class="each-col">
											<p class="company-name">{{ $mysearch->name }}</p>									
										</div>
										<div class="each-col">
											<?php $keywords = json_decode($mysearch->search_params); ?>
											<p class="keywords">
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
										</div>
										<div class="each-col">
											<?php $keywords = json_decode($mysearch->search_params, true); unset($keywords['_token']); $urlEncodedString = http_build_query($keywords); ?>

											<a href="{{ ($form_type!=='advanced') ? route('search.store').'?'.$urlEncodedString : route('advancedsearch.store').'?'.$urlEncodedString }}" class="go-to-search"><i class="view-pdf"></i> Go to the page</a>
										</div>
									</li>
								@endforeach
							</ul>
							@else
							<ul>
								<li><span>No saved search yet.</span></li>
							</ul>
							@endif
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
	$('.edit-favourite').on('click', function(e){
		e.preventDefault();
		$(".delete-favourite").toggleClass('show');
	});

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

	var deleteRequest = false;
	$('.delete-favourite').on('click', function(e){
		e.preventDefault();

		var that = $(this);

		if (confirm('Are you sure you want to delete?')) {				

			var current_url = $(this).attr('href');
			console.log(current_url)

			if(deleteRequest) {
				request.abort();
			}

			data = {};

			deleteRequest = makeRequest(data, current_url, 'DELETE');				

			deleteRequest.done(function(data, textStatus, jqXHR){
	        	
	        	if(jqXHR.status==200) {		        			        		

	        		that.parent().parent().remove();

	        		if($('.delete-favourite').length<=0) {
	        			$('.favourite-companies-table').append('<li><span>No favourites was found.</span></li>');
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

	/////

	$('.edit-saved-search').on('click', function(e){
		e.preventDefault();
		$(".delete-saved-search").toggleClass('show');
	});

	$('.delete-saved-search').on('click', function(e){
		e.preventDefault();

		var that = $(this);

		if (confirm('Are you sure you want to delete?')) {

			var current_url = $(this).attr('href');
			console.log(current_url)

			if(deleteRequest) {
				request.abort();
			}

			data = {};

			deleteRequest = makeRequest(data, current_url, 'DELETE');				

			deleteRequest.done(function(data, textStatus, jqXHR){
	        	
	        	if(jqXHR.status==200) {		        			        		

	        		that.parent().parent().remove();

	        		if($('.delete-saved-search').length<=0) {
	        			$('.save-search-table').append('<li><span>No favourites was found.</span></li>');
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
});
</script>
@stop