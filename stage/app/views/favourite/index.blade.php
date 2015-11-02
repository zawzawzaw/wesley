@section('content')
	<div id="favourite">
		<div class="container">
			
			<div class="favourite-companies">
				<div class="header">
					<h3 class="pull-left">favourite companies</h3>
					<!--<a href="#" class="edit-favourite edit-btn pull-right"><i class="edit-icon"></i><span>EDIT</span></a>-->
					<a href="{{ URL::to('/favourite/') }}" class="delete-favourite delete-btn pull-right"><i class="fa fa-minus-circle"></i><span>DELETE</span></a>
				</div>
				<div class="content">					
					<div class="favourite-companies-table">						
						<ul class="table-head">
							<li>
								<div class="each-col">
									<h5 class="first">Category</h5>
								</div>
								<div class="each-col">
									<h5 class="second">Location</h5>
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
							@if($favourites && count($favourites) > 0)						
								@foreach($favourites as $favourite)
									<?php $list = Lists::find($favourite->list_id) ?>
									<?php $key_products = KeyProduct::where('lists_id', '=', $favourite->list_id)->get() ?>
									<li>
										<div class="each-col">
											{{ Form::checkbox('delete_favourite', $favourite->id) }}
											<!--<a href="{{ route('favourite.destroy', $favourite->id) }}" class="delete-favourite"><i class="fa fa-minus-circle"></i></a>-->
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
							@else		
								<li><span class="not-found">No favourite was found.</span></li>																					
							@endif
						</ul>										
					</div>

					<a href="{{ URL::to('myaccount/') }}" class="back-to-account"><span>BACK TO MY ACCOUNT</span></a>
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

			if ($('input[name="delete_favourite"]:checked').length > 0) {

				var that = $(this);

				if(deleteRequest) {
					request.abort();
				}

				if (confirm('Are you sure you want to delete?')) {			

					$('input[name="delete_favourite"]').each(function(each_input){

						if($(this).is(':checked')) {
							
							var $delete_input = $(this);
							var search_id = $delete_input.val()
							var current_url = that.attr('href') + '/' + search_id;

							data = {};

							deleteRequest = makeRequest(data, current_url, 'DELETE');				

							deleteRequest.done(function(data, textStatus, jqXHR){
					        	
					        	if(jqXHR.status==200) {		        			        		

					        		$delete_input.parent().parent().remove();

					        		if($('input[name="delete_favourite"]').length<=0) {
					        			$('.favourite-companies-table .table-content').append('<li><span class="not-found">No favourites was found.</span></li>');
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
		
	});
	</script>
@stop