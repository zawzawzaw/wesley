@section('content')
<div id="product-detail">
	<!--<div class="bg"></div>-->

	<div class="container">
		<div class="product-details">
			<div class="row">
				<div class="col-md-12">
					<div class="header">
						<h3 class="pull-left">Search > Result > <a href="javascript:window.history.back();">{{ ucfirst($list->company_name) }} ></a> <span class="current">Key Products</span></h3>
					</div>
					<div class="first-content">
						@if(!empty($list->logo))
							<img src="{{ URL::to('/') }}/uploads/company_logos/{{ $list->logo }}" alt="">
						@else
							{{ HTML::image('images/contents/company-logo-medium.png', '', array('class' => 'img-responsive')) }}							
						@endif							
						<div class="product-detail">
							<h1>{{ $list->company_name }}’s Key Products</h1>								
						</div>
					</div>						
					<div class="second-content">
						<ul class="products">
							@if(!empty($list->keyproduct[0]))
								@foreach($list->keyproduct as $pk => $key_product_list)	
									<li>
										@if($key_product_list->image)
											<img src="{{ URL::to('/') }}/uploads/key_products/{{ $key_product_list->image }}" alt="">
										@else
											<img src="images/contents/product-image-placeholder.png" class='img-responsive' alt="">
										@endif									
										<div class="text-content">
											<h4>
												{{ $key_product_list->product_name }} 
												@if(!empty($key_product_list->product_specifics)) 
													{{ '('.$key_product_list->product_specifics.')' }} 
												@endif
											</h4>
											<p>{{ $key_product_list->category }}</p><h5>{{ $key_product_list->category }}</h5>
										</div>
									</li>
								@endforeach	
							@else 
								<li>Key Product is not available.</li>
							@endif						
						</ul>
					</div>
				</div>
			</div>
		</div>
	
		<div class="sidebar">
			<div class="sidebar-content">
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h3>MESSAGE</h3>
						</div>			
						<div class="content">
							<div class="each-content">
							{{ Form::open(array('url'=>'message', 'class'=>'form-list', 'id'=>'message')) }}								
								{{ Form::textarea('message') }}
								<ul class="inputs">
									<li>
										<div class="each-input">																						
											{{ Form::radio('message_subject', 'sales enquiry', true) }}
											<label for="subject"><span></span> Sales Enquiry</label>
										</div>
									</li>
									<li>
										<div class="each-input">
											{{ Form::radio('message_subject', 'sales enquiry', true) }}
											<label for="subject"><span></span> Purchasing Enquiry</label>
										</div>
									</li>
								</ul>
								{{ Form::hidden('list_user_id', $list->user_id) }}
								{{ Form::button('Send', array('type'=>'submit','value'=>'send','name'=>'form_type','id'=>'send_msg','class'=>'btn btn-large')) }}
							{{ Form::close() }}
							</div>
							<div class="each-content">
								<ul class="links">
									<li><a href="#"><i class="request-for-quote"></i> request for quote</a></li>
									<li><a href="#"><i class="add-to-favourite"></i> add to favorite</a></li>
									<li><a href="#"><i class="download"></i> download pdf</a></li>
									<li><a href="#"><i class="request-for-more"></i> request for more info</a></li>
								</ul>
							</div>
							<div class="each-content">
								{{ HTML::image('images/contents/company-location-map.png', '', array('class' => 'img-responsive')) }}											
							</div>
						</div>						
					</div>
				</div>		
			</div>		
		</div>
	</div>
</div>
@stop