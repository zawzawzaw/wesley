@section('content')
	<div id="favourite">
		<div class="container">
			
			<div class="favourite-details">
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h3 class="pull-left">Your Favourites</h3>
							<a href="{{ URL::to('myaccount/') }}" class="edit-btn pull-right"><span>BACK TO MY ACCOUNT</span></a>
						</div>
						<div class="content">
							<div class="row">
								<div class="col-md-12">
									<ul class="premium-listings-table">
										@if($favourites && count($favourites) > 0)
											@foreach($favourites as $favourite)
												<?php $list = Lists::find($favourite->list_id) ?>
												<li class="{{ strtolower($list->type) }} favourite">
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
															<li>															
															    <a href="{{ route('favourite.destroy', $favourite->id) }}" class="remove-favourite">
															        <i class="remove-favourite"></i> <span>Remove favourite</span></span>
															    </a>																
															</li>
															<li><a href="#" class="send-messages"><i class="messages"></i> <span>Send message</span></a></li>
														</ul>
													</div>
												</li>												
											@endforeach
											<div class="pagi">
							                  	{{ $favourites->links() }} 		
						                  	</div>
										@else
						                	<li><span>No favourites was found.</span></li>					
						                @endif											
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="sidebar">
				<div class="sidebar-content">
					<div class="row">
						<div class="col-md-12">
							<div class="header">
								<h3>QUICK VIEW</h3>
							</div>			
							<div class="content">
								<div class="extra-info">
									<span class="updated-date-time">Last updated {{ date('h:i A | d M Y', strtotime(Auth::user()->updated_at) ) }}</a>{{-- 12:34 pm | 10 Sep 2014 --}}
								</div>

								<div class="account-info">
									<h5>Account created</h5>
									<p>{{ date('d M Y', strtotime(Auth::user()->created_at) ) }}</p>
								</div>

								<div class="account-info">
									<h5>Type</h5>
									<p>{{ (Auth::user()->plan=='premium') ? 'Paid: '.ucfirst(Auth::user()->plan) .' Plan' : ucfirst(Auth::user()->plan) .' Plan' }}{{-- Paid: Premium Plan --}}</p>
								</div>

								<div class="account-info">
									<h5>industry</h5>
									<p>{{ Auth::user()->job_title }}</p>
								</div>

								<div class="account-info">
									<h5>Renewal Reminder</h5>
									<p>24 July 2015</p>
								</div>
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
		$('.remove-favourite').on('click', function(e){
			e.preventDefault();

			var that = $(this);

			if (confirm('Are you sure?')) {				

				var current_url = $(this).attr('href');
				console.log(current_url)

				if(deleteRequest) {
					request.abort();
				}

				data = {};

				deleteRequest = makeRequest(data, current_url, 'DELETE');				

				deleteRequest.done(function(data, textStatus, jqXHR){
		        	
		        	if(jqXHR.status==200) {		        			        		

		        		that.parent().parent().parent().parent().remove();

		        		if($('.favourite').length<=0) {
		        			$('.premium-listings-table').append('<li><span>No favourites was found.</span></li>');
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