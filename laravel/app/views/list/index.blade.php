@section('content')
<div class="container">
	{{ Form::open(array('url'=>'list', 'class'=>'form-list')) }}
		

		@if(Session::has('list_message'))
		    <p class="alert">{{ Session::get('list_message') }}</p>
		@endif
		<ul>
	        @foreach($errors->all() as $error)
	            <li>{{ $error }}</li>
	        @endforeach
	    </ul>

	  	<div id="list-1">
		    <div class="row">
				<div class="col-md-10">
					
				  	<h1>List - Page 1</h1>

					<div class="inputs">
						{{ Form::label('type', 'Type:') }}
						
						{{ Form::radio('type', 'Free', true) }}
						{{ Form::label('type', 'Free') }}
						
						{{ Form::radio('type', 'Paid', false) }}		    		
						{{ Form::label('type', 'Paid') }}
					<a href="#"><span>?</span></a>

					<span>* compulsory fields</span>
					</div>

					<div class="inputs">
						{{ Form::label('company_name', 'Company Name *') }}
						{{ Form::text('company_name', null, array('class'=>'text-input', 'placeholder'=>'Company Name')) }}
					</div>

					<div class="inputs">
						{{ Form::label('company_logo', 'Upload company logo') }}
						{{ Form::file('company_logo', null, array('id'=>'company_logo')); }}
						{{ Form::hidden('logo', null, array('id'=>'logo')); }}
						<span class="fileupload-preview"></span>
					</div>

					<div class="inputs">
						<div class="row">
							<div class="col-md-6">
								{{ Form::label('category', 'Category *') }}
							{{ Form::select('category', array('advertising' => 'Advertising', 'property' => 'Property')); }}
					    </div>
					    <div class="col-md-6">
					    	{{ Form::label('subcategory', 'Sub-Category *') }}
							{{ Form::select('subcategory', array('agency' => 'Agency', 'property' => 'Property')); }}					            
					    </div>
					</div>
					</div>

					<div class="inputs">
						{{ Form::label('address_1', 'Address 1 *') }}
					{{ Form::text('address_1', null, array('class'=>'text-input', 'placeholder'=>'Address 1')) }}
					</div>

					<div class="inputs">
					{{ Form::label('address_2', 'Address 2 *') }}
					{{ Form::text('address_2', null, array('class'=>'text-input', 'placeholder'=>'Address 2')) }}
					</div>

					<div class="inputs">
						{{ Form::label('post_code', 'Postal Code *') }}
					{{ Form::text('post_code', null, array('class'=>'text-input', 'placeholder'=>'Postal Code')) }}
					</div>

					<div class="inputs">
						{{ Form::label('location', 'Location *') }}
					{{ Form::text('location', null, array('class'=>'text-input', 'placeholder'=>'Location')) }}
					</div>

					<div class="inputs">
						{{ Form::label('origin_country', 'Country of Origin *') }}
					{{ Form::text('origin_country', null, array('class'=>'text-input', 'placeholder'=>'Country of Origin')) }}
					</div>

					<div class="inputs">
						{{ Form::label('business_nature', 'Nature of Business *') }}
					{{ Form::text('business_nature', null, array('class'=>'text-input', 'placeholder'=>'Nature of Business')) }}
					</div>

					<div class="inputs">
						{{ Form::label('year_established', 'Year Established *') }}
					{{ Form::text('year_established', null, array('class'=>'text-input', 'placeholder'=>'Year Established')) }}

					{{ Form::label('company_background_info', 'Company Background / Information *') }}
					{{ Form::textarea('company_background_info', null, array('class'=>'text-input', 'placeholder'=>'Company Background / Information')) }}
					</div>

					<div class="inputs">
						{{ Form::label('paid_up_capital', 'Paid Up Capital *') }}
					{{ Form::text('paid_up_capital', null, array('class'=>'text-input', 'placeholder'=>'Paid Up Capital')) }}
					</div>

					<div class="inputs">
						{{ Form::label('no_of_employees', 'No. of Employees *') }}
					{{ Form::text('no_of_employees', null, array('class'=>'text-input', 'placeholder'=>'No. of Employees')) }}

					{{ Form::label('quality_certification', 'Quality Certification *') }}
					{{ Form::text('quality_certification', null, array('class'=>'text-input', 'placeholder'=>'Quality Certification')) }}
					</div>

					<div class="inputs">
						{{ Form::label('bankers', 'Bankers *') }}
					{{ Form::text('bankers', null, array('class'=>'text-input', 'placeholder'=>'Bankers')) }}

					{{ Form::label('market_established', 'Market/s Established *') }}
					{{ Form::text('market_established', null, array('class'=>'text-input', 'placeholder'=>'Market/s Established')) }}
					</div>

					<div class="inputs">
						{{ Form::label('main_shareholders', 'Main Shareholders / Parent Company') }}
					{{ Form::text('main_shareholders', null, array('class'=>'text-input', 'placeholder'=>'Main Shareholders / Parent Company')) }}

					{{ Form::label('market_interested', 'Market/s Interested') }}
					{{ Form::text('market_interested', null, array('class'=>'text-input', 'placeholder'=>'Market/s Interested')) }}			           
					</div>

					<div class="inputs">
						{{ Form::label('number_of_offices_worldwide', 'Number of offices worldwide') }}
					{{ Form::text('number_of_offices_worldwide', null, array('class'=>'text-input', 'placeholder'=>'Number of offices worldwide')) }}

					{{ Form::label('links_to_related_companies', 'Links to related Companies') }}
					{{ Form::text('links_to_related_companies', null, array('class'=>'text-input', 'placeholder'=>'Links to related Companies')) }}			           
					</div>

					<div class="inputs">
						{{ Form::label('video', 'Upload Video') }}
						{{ Form::file('video', null, array('id'=>'video')); }}
						{{ Form::hidden('upload_video', null, array('id'=>'upload_video')); }}
						<span class="video-preview"></span>
					</div>

					<div class="box">
						<p>Private Information (will not be shown unless you approve it)</p>

					<div class="inputs">
						{{ Form::label('major_facilities', 'Major Facilities / Equipment') }}
						{{ Form::text('major_facilities', null, array('class'=>'text-input', 'placeholder'=>'Major Facilities / Equipment')) }}	
						</div>

					<div class="inputs">
						{{ Form::label('major_customers', 'Major Customers / Project History') }}
						{{ Form::text('major_customers', null, array('class'=>'text-input', 'placeholder'=>'Major Customers / Project History')) }}
						</div>	          	
					</div>
						
			        <button id="next" class="btn btn-large">Next</button>
				</div>
				<div class="col-md-2">
					{{ Form::label('tag', 'Add Tags:') }}
					<div id="added_tags"></div>
    				{{ Form::text('tag', null, array('class'=>'text-input', 'placeholder'=>'Tag')) }}
    				{{ Form::hidden('tags', null, array('class'=>'text-input', 'id'=>'tags')) }}
					<button id="add_tag" class="btn btn-large">Add</button>
				</div>
		    </div>
	    </div>
	    <div id="list-2">
	    	<div class="row">
	    		<div class="col-md-12">
	    			
					<h1>List - Key Products</h1>
					<h5>Non-compulsory</h5>
					

					<div class="row">
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_1', 'Category:') }}
								{{ Form::select('key_product_category_1', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_1', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_1', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_1', 'Product Name') }}
								{{ Form::text('product_name_1', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_1', 'Image') }}
								{{ Form::text('product_image_1', null, array('id'=>'product_image_1')); }}
								{{ Form::file('image_1', null, array('id'=>'image_1')); }}
							</div>
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_2', 'Category:') }}
								{{ Form::select('key_product_category_2', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_2', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_2', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_2', 'Product Name') }}
								{{ Form::text('product_name_2', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_2', 'Image') }}
								{{ Form::text('product_image_2', null, array('id'=>'product_image_2')); }}
								{{ Form::file('image_2', null, array('id'=>'image_2')); }}
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="space20"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_3', 'Category:') }}
								{{ Form::select('key_product_category_3', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_3', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_3', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_3', 'Product Name') }}
								{{ Form::text('product_name_3', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_3', 'Image') }}
								{{ Form::text('product_image_3', null, array('id'=>'product_image_3')); }}
								{{ Form::file('image_3', null, array('id'=>'image_3')); }}
							</div>
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_4', 'Category:') }}
								{{ Form::select('key_product_category_4', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_4', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_4', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_4', 'Product Name') }}
								{{ Form::text('product_name_4', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_4', 'Image') }}
								{{ Form::text('product_image_4', null, array('id'=>'product_image_4')); }}
								{{ Form::file('image_4', null, array('id'=>'image_4')); }}
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="space20"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_5', 'Category:') }}
								{{ Form::select('key_product_category_5', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_5', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_5', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_5', 'Product Name') }}
								{{ Form::text('product_name_5', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_5', 'Image') }}
								{{ Form::text('product_image_5', null, array('id'=>'product_image_5')); }}
								{{ Form::file('image_5', null, array('id'=>'image_5')); }}
							</div>
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_6', 'Category:') }}
								{{ Form::select('key_product_category_6', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_6', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_6', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_6', 'Product Name') }}
								{{ Form::text('product_name_6', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_6', 'Image') }}
								{{ Form::text('product_image_6', null, array('id'=>'product_image_6')); }}
								{{ Form::file('image_6', null, array('id'=>'image_6')); }}
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="space20"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_7', 'Category:') }}
								{{ Form::select('key_product_category_7', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_7', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_7', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_7', 'Product Name') }}
								{{ Form::text('product_name_7', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_7', 'Image') }}
								{{ Form::text('product_image_7', null, array('id'=>'product_image_7')); }}
								{{ Form::file('image_7', null, array('id'=>'image_7')); }}
							</div>
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_8', 'Category:') }}
								{{ Form::select('key_product_category_8', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_8', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_8', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_8', 'Product Name') }}
								{{ Form::text('product_name_8', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_8', 'Image') }}
								{{ Form::text('product_image_8', null, array('id'=>'product_image_8')); }}
								{{ Form::file('image_8', null, array('id'=>'image_8')); }}
							</div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-12">
							<div class="space20"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_9', 'Category:') }}
								{{ Form::select('key_product_category_9', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_9', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_9', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_9', 'Product Name') }}
								{{ Form::text('product_name_9', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_9', 'Image') }}
								{{ Form::text('product_image_9', null, array('id'=>'product_image_9')); }}
								{{ Form::file('image_9', null, array('id'=>'image_9')); }}
							</div>
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('key_product_category_10', 'Category:') }}
								{{ Form::select('key_product_category_10', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>	

							<div class="inputs">
								{{ Form::label('key_product_subcategory_10', 'Sub-Category:') }}
								{{ Form::select('key_product_subcategory_10', array('advertising' => 'Advertising', 'property' => 'Property')); }}
							</div>

							<div class="inputs">
								{{ Form::label('product_name_10', 'Product Name') }}
								{{ Form::text('product_name_10', null, array('class'=>'text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_10', 'Image') }}
								{{ Form::text('product_image_10', null, array('id'=>'product_image_10')); }}
								{{ Form::file('image_10', null, array('id'=>'image_10')); }}
							</div>
						</div>
					</div>
					
	    		</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-12">
	    			
					<h1>Product Catalogs</h1>

					<div class="row">
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_1', 'Image') }}
								{{ Form::text('product_catalog_1', null, array('id'=>'product_catalog_1')); }}
								{{ Form::file('catalog_1', null, array('id'=>'catalog_1')); }}
							</div>	
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_2', 'Image') }}
								{{ Form::text('product_catalog_2', null, array('id'=>'product_catalog_2')); }}
								{{ Form::file('catalog_2', null, array('id'=>'catalog_2')); }}
							</div>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="space20"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_3', 'Image') }}
								{{ Form::text('product_catalog_3', null, array('id'=>'product_catalog_3')); }}
								{{ Form::file('catalog_3', null, array('id'=>'catalog_3')); }}
							</div>	
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_4', 'Image') }}
								{{ Form::text('product_catalog_4', null, array('id'=>'product_catalog_4')); }}
								{{ Form::file('catalog_4', null, array('id'=>'catalog_4')); }}
							</div>	
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="space20"></div>
						</div>
					</div>

					<div class="row">
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_5', 'Image') }}
								{{ Form::text('product_catalog_5', null, array('id'=>'product_catalog_5')); }}
								{{ Form::file('catalog_5', null, array('id'=>'catalog_5')); }}
							</div>	
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_6', 'Image') }}
								{{ Form::text('product_catalog_6', null, array('id'=>'product_catalog_6')); }}
								{{ Form::file('catalog_6', null, array('id'=>'catalog_6')); }}
							</div>	
						</div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<button id="add_more" class="btn btn-large">Add More</button>
					{{ Form::submit('Save', array('class'=>'btn btn-large')) }}
				</div>
			</div>
	    </div>
    {{ Form::close() }}
  </div>
<script type="text/javascript">
  $(document).ready(function(){
  	$('#list-2').hide();
    $('#next').on('click', function(e){
    	e.preventDefault();
    	$('#list-2').show();
    	$('#list-1').hide();
    });

    var tags = [];

    $('#add_tag').on('click', function(e){
    	e.preventDefault();

    	var tag = $('#tag').val();

    	$('#added_tags').append('<span style="display:block; margin:5px; background:#eee;">'+tag+'</span>');
    	tags.push(tag);
    	var input_tags = tags.join();
    	$('#tags').val(input_tags);

    	$('#tag').val('');
    });

    $('#company_logo').uploadifive({
        'auto'      : true,
        'fileType'     : 'image/*',
        'fileSizeLimit' : '5MB',
        'buttonText'   : 'Upload',
        'uploadScript' : "{{ route('generic.uploadfiles') }}",
        'formData'         : {'type' : 'company_logo'},
        'onError'      : function(errorType) {
            // $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
            // $uploadResponse.text(errorType).css('color','red');
        },
        'onUploadComplete' : function(file, data) {
            console.log(data);

            var data = data.split("||").concat();

            var shortText = jQuery.trim(data[1]).substring(0, 20).trim(this) + "...";
            console.log(data[0])
            console.log(data[1])
            console.log(shortText)

            $(':hidden[name=logo]').val(data[0]);

            $('.fileupload-preview').text(shortText);

        }
    });

    $('#video').uploadifive({
        'auto'      : true,
        'fileType'     : 'video/*',
        'fileSizeLimit' : '5MB',
        'buttonText'   : 'Upload',
        'uploadScript' : "{{ route('generic.uploadfiles') }}",
        'formData'         : {'type' : 'video'},
        'onError'      : function(errorType) {
            // $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
            // $uploadResponse.text(errorType).css('color','red');
        },
        'onUploadComplete' : function(file, data) {
            console.log(data);

            var data = data.split("||").concat();

            var shortText = jQuery.trim(data[1]).substring(0, 20).trim(this) + "...";
            console.log(data[0])
            console.log(data[1])
            console.log(shortText)

            $(':hidden[name=upload_video]').val(data[0]);

            $('.video-preview').text(shortText);

        }
    });
  });
</script>
@stop