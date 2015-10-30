@section('content')
	<div id="company-detail">
		<!--<div class="bg"></div>-->

		<div class="container">
			<div class="company-details">
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h3 class="pull-left">Search ><a href="javascript:window.history.back();"> Result ></a> <span class="current">{{ ucfirst($list->company_name) }}</span></h3>							
							{{-- <a href="#" class="save-search pull-right"><i class="plus"></i> <span>Save Search</span></a> --}}
						</div>
						<div class="first-content">
							@if(!empty($list->logo))
								<img src="{{ URL::to('/') }}/uploads/company_logos/{{ $list->logo }}" alt="">
							@else
								{{ HTML::image('images/contents/company-logo.png', '', array('class' => 'img-responsive')) }}							
							@endif
							<div class="company-detail">
								<h1>{{ $list->company_name }}</h1>

								<h5>Address</h5>
								<p>{{ $list->address_1 }} {{ $list->address_2 }}</p>
								<span id="address" class="hidden">{{ $list->address_1 }} {{ $list->address_2 }} {{ $list->city }} {{ $list->post_code }} {{ $list->country }}</span>

								<h5>telephone</h5>
								<p></p>

								<h5>fax</h5>
								<p></p>

								<h5>website</h5>
								<p></p>
							</div>
						</div>
						<div class="second-content">
							<div class="more-company-detail">
								<h5>category</h5>
								<p class="category">{{ $list->category }}</p>

								<h5>sub-Category</h5>
								<p class="category">{{ $list->subcategory }}</p>

								<h5>Country of Origin</h5>
								<p>{{ $list->origin_country }}</p>

								<h5>Nature of Business</h5>
								<p>{{ $list->business_nature }}</p>

								<h5>Company Background</h5>
								<p>{{ $list->company_background_info }}</p>
							</div>
							<div class="more-company-detail">
								<h5>Year Established</h5>
								<p>{{ $list->year_established }}</p>

								<h5>Paid Up Capital</h5>
								<p>{{ $list->paid_up_capital }}</p>

								<h5>No of employees</h5>
								<p>{{ $list->no_of_employees }}</p>

								<h5>Quality Certification</h5>
								<p>{{ $list->quality_certification }}</p>

								<h5>Bankers</h5>
								<p>{{ $list->bankers }}</p>
							</div>
							<div class="more-company-detail">
								<h5>Markets Established</h5>
								<p>{{ $list->market_established }}</p>

								<h5>Markets Interested</h5>
								<p>{{ $list->market_interested }}</p>

								<h5>Main Shareholders</h5>
								<p>{{ $list->main_shareholders }}</p>

								<h5>No of Offices Worldwide</h5>
								<p>{{ $list->number_of_offices_worldwide }}</p>
							</div>
						</div>
						<div class="third-content">
							<div class="text-content pull-left">
								<h5>Links to related companies</h5>
								<ul>
									<li>{{ $list->links_to_related_companies }}</li>									
								</ul>
							</div>
							<div class="video-player pull-right">
								@if(!empty($list->upload_video))
								<video id="example_video_1" class="video-js vjs-default-skin"
								  controls preload="auto" width="400" height="250"
								  poster="http://video-js.zencoder.com/oceans-clip.png"
								  data-setup='{"example_option":true}'>
								 <source src="{{ URL::to('/') }}/uploads/videos/{{ $list->upload_video }}" type='video/mp4' />
								 {{-- <source src="http://video-js.zencoder.com/oceans-clip.webm" type='video/webm' />
								 <source src="http://video-js.zencoder.com/oceans-clip.ogv" type='video/ogg' /> --}}
								 <p class="vjs-no-js">To view this video please enable JavaScript, and consider upgrading to a web browser that <a href="http://videojs.com/html5-video-support/" target="_blank">supports HTML5 video</a></p>
								</video>
								@else
									<span>Video not available</span>
								@endif
							</div>
							<div class="clear"></div>
						</div>
						<div class="fourth-content">
							<div class="heading">
								<h5 class="pull-left">see company’s catalog</h5>
								<!--<a href="{{ route('search.company', $list->id) }}" class="pull-right">see more</a>-->
								<div class="clear"></div>
							</div>
							<ul>
								<?php $i=1; ?>
								@foreach($list->productcatalog as $pk => $product_catalog_list)
									@if($i<=3)
									<li>
										<p>{{ $product_catalog_list->title }}</p>
										<img src="{{ URL::to('/') }}/uploads/product_catalog_images/{{ $product_catalog_list->image }}" class="img-responsive" alt="">
										<p>{{ Helper::formatSizeUnits(filesize(public_path() . "/uploads/product_catalogs/" . $product_catalog_list->file)) }}</p>
										<p>{{ $product_catalog_list->description }}</p>
										<a href="{{ URL::to('/generic/openpdf') }}/{{ $list->id }}/{{ $product_catalog_list->file }}">Download PDF</a>
									</li>
									<?php $i++; ?>
									@endif
								@endforeach								
							</ul>
						</div>
						<div class="fourth-content">
							<div class="heading">
								<h5 class="pull-left">see company’s product</h5>
								<a href="{{ route('search.company', $list->id) }}" class="pull-right">see more</a>
								<div class="clear"></div>
							</div>
							<ul>
								<?php $i=1; ?>
								@foreach($list->keyproduct as $pk => $key_product_list)
									@if($i<=3)
									<li>
										<img src="{{ URL::to('/') }}/uploads/key_products/{{ $key_product_list->image }}" class="img-responsive" alt="">
									</li>
									<?php $i++; ?>
									@endif
								@endforeach								
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
										<li><a href="{{ route('favourite.store') }}" data-list-id="{{ $list->id }}" class="favourite"><i class="add-to-favourite"></i> add to favorite</a></li>
										<li><a href="#"><i class="download"></i> download pdf</a></li>
										<li><a href="#"><i class="request-for-more"></i> request for more info</a></li>
									</ul>
								</div>
								<div class="each-content">
									{{-- {{ HTML::image('images/contents/company-location-map.png', '', array('class' => 'img-responsive')) }}											 --}}
									<iframe id="map" width="265" height="256"></iframe>
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
			var old_category = '{{ Input::get("category", null) }}';
			var sub_category = '{{ Input::get("subcategory", null) }}';

			if(old_category) {
				$("#category").val(old_category).trigger('change');
				$('#subcategory').val(sub_category);
			}

			var request;
			var makeRequest = function(Data, URL, Method) {

		        var request = $.ajax({
					url: URL,
					type: Method,
					data: Data,
					dataType: "JSON"					
		      });

		      return request;
		    };

		    var request;
			$('#send_msg').on('click', function(e){
				e.preventDefault();
				console.log('hi');

				var frm = $('#message'),
					formData = frm.serialize(),
			        url = frm.attr( "action"),
			        method = frm.attr( "method" );

				// abort any pending request
				if (request) {
				  	request.abort();
				}

		        request = makeRequest(formData, url , method);

				request.done(function(){
					var result = $.parseJSON(request.responseText);
					
					// if(result) {
						console.log(result);

						frm.prepend('<p id="flash">Your message has been sent.</p>')

						$('#flash').css('color', 'red').delay(500).fadeIn('normal', function() {
					      $(this).delay(2500).fadeOut();
					   	});
					// }
				});
			});

			var q=encodeURIComponent($('#address').text());
			console.log(q);
		    $('#map').attr('src', 'https://www.google.com/maps/embed/v1/place?key=AIzaSyBp8lNSnZzkMSjNvok9H1aADuR6txxNajk&q='+q);

		    /////		    

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
		});
	</script>	
@stop