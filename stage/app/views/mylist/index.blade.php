@section('content')
<div id="my-list">
	<div class="container">
		<div class="row">
			<div class="col-md-12">

				<div class="my-listings">
					<div class="header">
						<h3 class="pull-left">My Listings</h3>
						<a href="#" class="edit-btn pull-right"><i class="edit-icon"></i><span>EDIT</span></a>
					</div>
					<div class="content">					
						<div class="my-listings-table">
							@if($lists && count($lists) > 0)
								<ul class="table-head">
									<li>
										<div class="each-col">
											<h5>Category</h5>
										</div>
										<div class="each-col">
											<h5>Location</h5>
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
									@foreach($lists as $list)										
										<?php $key_products = KeyProduct::where('lists_id', '=', $list->id)->get() ?>
										<li>
											<div class="each-col">
												<a href="#" class="category category-1"></a>
											</div>
											<div class="each-col">
												<i class="country {{ $list->country }}"></i>
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
								</ul>
							@else
								<li><span>No lists was found.</span></li>
							@endif
						</div>
					</div>
				</div>

			</div>
		</div>
	</div>
</div>
@stop