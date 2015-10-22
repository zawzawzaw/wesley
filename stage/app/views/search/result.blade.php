@section('content')

<div id="search-result">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					@if(Session::has('smart_search_message'))
			        	<h5 class="alert">{{ Session::get('smart_search_message') }}</h5>
			        @elseif(Session::has('text_search_message'))
			        	<h5 class="keywords">{{ Session::get('text_search_message') }}</h5>
			        @else
			        	<h5>Result on:</h5>
			        	<a href="#" class="save-search"><i class="plus"></i> <span>Save Search</span></a>
			        	<div class="save-search-form">
				        	{{ Form::text('search_name', null, array('class'=>'search_name text-input', 'placeholder'=> 'Search Name')) }}
				        	{{ Form::text('remarks', null, array('class'=>'remarks text-input', 'placeholder'=> 'Remarks')) }}
				        	<a href="{{ route('mysearch.store') }}" id="save-search">Save Search</a>
			        	</div>
			        @endif

			        <ul>
				        @foreach($errors->all() as $error)
				            <li>{{ $error }}</li>
				        @endforeach
				    </ul>
					
					<div class="clear"></div>
					
					<h1 class="keywords">
						<?php $no_filter = true; ?>
						@if(Input::has('text_search'))
							{{ Input::get('text_search', null) }}							
							<?php $no_filter = false; ?>
						@endif								
						@if(Input::has('category'))
							{{ Input::get('category', null) }}
							@if(Input::has('subcategory'))+
							@elseif(Input::has('country'))+
							@elseif(Input::has('origin_country'))+
							@endif
							<?php $no_filter = false; ?>
						@endif
						@if(Input::has('subcategory'))
							{{ Input::get('subcategory', null) }}									
							@if(Input::has('country'))+
							@elseif(Input::has('origin_country'))+
							@endif
							<?php $no_filter = false; ?>
						@endif
						@if(Input::has('country'))							
							{{ Helper::code_to_country(Input::get('country', null)) }}
							@if(Input::has('origin_country'))+							
							@endif
							<?php $no_filter = false; ?>
						@endif
						@if(Input::has('origin_country'))
							{{ Helper::code_to_country(Input::get('origin_country', null)) }}
						@endif

						@if($no_filter)
							All
						@endif						
					</h1>
				</div>

				<div class="first-content">
					@if(Auth::user()->plan == 'free')
					<div class="all-listing-container">
					@else
					<div class="all-listing-container" style="width:100%!important;">
					@endif
						<h5>All listings</h5>
						<div class="dropdown-fitler">
							<div class="dropdown">
								{{
									Form::select('sort_by', array(
									    '' => 'Sort by',
									    'asc' => 'Name (A - Z)',
									    'desc' => 'Name (Z - A)',
									    'proximity' => 'Proximity'
									), Input::get('sort_by', null), array('id' => 'sort_by'));
								}}
							</div>
							<div class="dropdown">
								{{
									Form::select('item_limit', array(
									    'all' => 'All',
									    '5' => '5',
									    '10' => '10',
									    '25' => '25',
									    '50' => '50',
									    '100' => '100'
									), Input::get('item_limit', null), array('id' => 'item_limit'));
								}}
							</div>
						</div>
						<div class="clear"></div>
						<ul class="premium-listings-table">
							@if($lists && $lists->getTotal() > 0)
								@if((!Auth::check() || (Auth::check() && Auth::user()->plan == 'free')) && $all_lists_count > $lists->getTotal() )
								<li>
									<span>There are a total of {{ $all_lists_count }} listings that match your search. <br>
									Only Premium listings are currently viewable. Please log in or sign up for a subscription to see all available results.</span>
								</li>
								@endif
								@foreach($lists as $k => $list)
									<li class="{{ strtolower($list->type) }}">
										<div class="each-col">										
											<span class="category category-1 {{ strtolower($list->category) }}"></span>
										</div>
										<div class="each-col">		
											<a href="{{ route('search.show', $list->id) }}">								
											@if($list->logo)
												<img src="{{ URL::to('/') }}/uploads/company_logos/{{ $list->logo }}" class="img-responsive" alt="">
											@else
												{{ HTML::image('images/contents/company-image-placeholder.png', 'company placeholder', array('class' => 'img-responsive')) }}
											@endif
											</a>
										</div>
										<div class="each-col">
											<h5><a href="{{ route('search.show', $list->id) }}"><span>{{ $list->company_name }}</span> <i class="country {{ strtolower($list->country) }}"></i></a></h5>
											<p>{{ $list->business_nature }}</p>
										</div>
										<div class="each-col">
											<ul class="ctas">
												<li><a href="{{ route('search.show', $list->id) }}" class="view-details"><i class="view-details"></i> <span>View Details</span></a></li>
												<li><a href="{{ route('favourite.store') }}" data-list-id="{{ $list->id }}" class="favourite"><i class="add-to-favourite"></i> <span>Add to favourites</span></a></li>
												<li><a href="#" class="send-messages"><i class="messages"></i> <span>Send message</span></a></li>
											</ul>
										</div>
									</li>
								@endforeach
								
								<div class="pagi">
								<?php 
			                  		$search_params = array(
				                  		'text_search' => Input::get('text_search', null),
				                  		'text_search_filter' => Input::get('text_search_filter', null),
				                  		'form_type' => Input::get('form_type', null),
				                  		'category' => Input::get('category', null),
				                  		'subcategory' => Input::get('subcategory', null),
				                  		'location' => Input::get('location', null),
				                  		'country' => Input::get('country', null),		                  		
				                  		'item_limit' => Input::get('item_limit', null),
				                  		'sort_by' => Input::get('sort_by', null),		                  		
				                  		'list_page' => Input::get('list_page', null)			                  		
			                  		); 
			                  	?>

			                  	{{ Paginator::setPageName('list_page'); }}
			                  	{{ $lists->appends($search_params)->links() }} 		
			                  	</div>
			                @else
			                	<li>
									<span>No listing was found.</span>
								</li>					
			                @endif						
						</ul>
					</div>
					@if(Auth::user()->plan == 'free')
						<div class="advertisement">
							<div class="ads-placeholder">
								<span>Upgrade your plan to fully enjoy Specktrm Search</span>
							</div>
						</div>
					@endif
				</div>
				
			</div>
		</div>
	</div>
</div>
	<script>
		$(document).ready(function(){
			var old_category = '{{ Input::get("category", null) }}';
			var sub_category = '{{ Input::get("subcategory", null) }}';

			// console.log(old_category); console.log(sub_category)
			if(old_category) {
				$("#category").val(old_category).trigger('change');
				$('#subcategory').val(sub_category);
			}

			<?php 
          		$search_params = array(
              		'text_search' => Input::get('text_search', null),
              		'text_search_filter' => Input::get('text_search_filter', null),
              		'form_type' => Input::get('form_type', null),
              		'category' => Input::get('category', null),
              		'subcategory' => Input::get('subcategory', null),
              		'location' => Input::get('location', null),
              		'country' => Input::get('country', null),			                  		
              		'item_limit' => Input::get('item_limit', null),			                  		
              		'sort_by' => Input::get('sort_by', null)			                  		
          		); 
          	?>

			$('select[name="item_limit"]').on('change', function(){
				var item_limit = $(this).val();
				var url = '{{ route('search.store', $search_params); }}';

				window.location.href  = url + '&item_limit=' + item_limit;
			});

			$('select[name="sort_by"]').on('change', function(){
				var sort_by = $(this).val();
				var url = '{{ route('search.store', $search_params); }}';

				window.location.href  = url + '&sort_by=' + sort_by;
			});

			//////

			var request;
			var makeRequest = function(Data, URL, Method) {

		    	var request = $.ajax({
				    url: URL,
				    type: Method,
				    data: Data,
				    success: function(response) {
				        // if success remove current item
				        // console.log(response);
				    },
		            error: function( error ){
		                // Log any error.
		                // console.log( "ERROR:", error );
		            }
				});

				return request;
			};

			var postRequest = false;
			$('.favourite').on('click', function(e){
				e.preventDefault();
				var current_url = $(this).attr('href');

				var list_id = $(this).data('list-id');
				var data = { 
					'list_id' : list_id
				};

				if(postRequest) {
					request.abort();
				}

				postRequest = makeRequest(data, current_url, 'POST');				

				postRequest.done(function(data, textStatus, jqXHR){
		        	
		        	if(jqXHR.status==200) {
		        		
		        		alert('Successfully added to your favourite list.');

		        		postRequest = false;

		        	}

		        });

		        postRequest.always(function(data, textStatus, jqXHR){

		        	if(jqXHR.status!=200) {
		        		var returnData = $.parseJSON(data.responseText);
			        	if(returnData.status=='duplicate')
			        		alert('This company is already in your favourite!');
			        	else
			        		console.log(returnData.message);

			        	postRequest = false;	
		        	}		        	

		        });

			});

			////////////

			var postRequest = false;
			$('#save-search').on('click', function(e){
				e.preventDefault();
				var current_url = $(this).attr('href');
				var search_params = '{{ json_encode(Input::all()) }}';
				var search_name = ($('.search_name').val()) ? $('.search_name').val() : 'your search';				
				var remarks = ($('.remarks').val()) ? $('.remarks').val() : '';
				var that = $(this);

				var data = {
					'search_params' : search_params,
					'name' : search_name,
					'remarks' : remarks
				};

				if(postRequest) {
					request.abort();
				}

				postRequest = makeRequest(data, current_url, 'POST');				

				postRequest.done(function(data, textStatus, jqXHR){
		        	
		        	if(jqXHR.status==200) {		        		
		        		alert('Successfully saved this search.');
		        		console.log(data);

		        		postRequest = false;
		        	}

		        });

		        postRequest.always(function(data, textStatus, jqXHR){

		        	if(jqXHR.status!=200) {
		        		var returnData = $.parseJSON(data.responseText);
		        		if(returnData.status=='duplicate')
			        		alert('This search is already saved!');
			        	else			        	
			        		console.log(returnData.message);

			        	postRequest = false;	
		        	}		        	

		        });

			});

			$('.save-search').on('click', function(e){
				e.preventDefault();
				$(this).children('i').toggleClass('plus');
				$('.save-search-form').toggleClass( "show-hide" );
			});
		});
	</script>

@stop