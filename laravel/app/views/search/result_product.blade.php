@section('content')
	<div class="container">
		<div class="row">
			{{ Form::open(array('url'=>'search', 'class'=>'form-list')) }}
				<div class="col-md-3">
					<div class="smart-search">
						<h1>Smart Search:</h1>	
						{{ Form::label('smart_search', 'Select one or more:') }}
						@if(Session::has('smart_search_message'))
				        	<p class="alert">{{ Session::get('smart_search_message') }}</p>
				        @endif				
						<div class="inputs">
							{{ 
								Form::select('category', array(							
									'Oil & Gas' => 'Oil & Gas', 
									'Chemicals' => 'Chemicals', 
									'Basic Resources' => 'Basic Resources', 
									'Construction & Materials' => 'Construction & Materials', 
									'Industrial Goods & Services' => 'Industrial Goods & Services', 
									'Automobiles & Parts' => 'Automobiles & Parts', 
									'Food & Beverage' => 'Food & Beverage', 
									'Personal & Household Goods' => 'Personal & Household Goods', 
									'Health Care' => 'Health Care', 
									'Retail' => 'Retail', 
									'Media' => 'Media', 
									'Travel & Leisure' => 'Travel & Leisure', 
									'Telecommunications' => 'Telecommunications', 
									'Utilities' => 'Utilities', 
									'Banks' => 'Banks', 
									'Insurance' => 'Insurance', 
									'Real Estate' => 'Real Estate', 
									'Financial Services' => 'Financial Services', 
									'Technology' => 'Technology'
								), Input::get('category', null), array('id' => 'category'));							
							}}
						</div>
						<div class="inputs">
							{{ 
								Form::select('subcategory', array(							
									'Exploration & Production' => 'Exploration & Production', 
									'Integrated Oil & Gas' => 'Integrated Oil & Gas',
									'Oil Equipment & Services' => 'Oil Equipment & Services',
									'Pipelines' => 'Pipelines',
									'Renewable Energy Equipment' => 'Renewable Energy Equipment',
									'Alternative Fuels' => 'Alternative Fuels'									
								), Input::get('subcategory', null), array('id' => 'subcategory')); 
							}}
						</div>
						<div class="inputs">
							{{ 
								Form::select('country', array(
									''=>'Country:',
								    'Afghanistan'=>'Afghanistan',
								    'Albania'=>'Albania',
								    'Algeria'=>'Algeria',
								    'American Samoa'=>'American Samoa',
								    'Andorra'=>'Andorra',
								    'Angola'=>'Angola',
								    'Anguilla'=>'Anguilla',
								    'Antarctica'=>'Antarctica',
								    'Antigua And Barbuda'=>'Antigua And Barbuda',
								    'Argentina'=>'Argentina',
								    'Armenia'=>'Armenia',
								    'Aruba'=>'Aruba',
								    'Australia'=>'Australia',
								    'Austria'=>'Austria',
								    'Azerbaijan'=>'Azerbaijan',
								    'Bahamas'=>'Bahamas',
								    'Bahrain'=>'Bahrain',
								    'Bangladesh'=>'Bangladesh',
								    'Barbados'=>'Barbados',
								    'Belarus'=>'Belarus',
								    'Belgium'=>'Belgium',
								    'Belize'=>'Belize',
								    'Benin'=>'Benin',
								    'Bermuda'=>'Bermuda',
								    'Bhutan'=>'Bhutan',
								    'Bolivia'=>'Bolivia',
								    'Bosnia And Herzegovina'=>'Bosnia And Herzegovina',
								    'Botswana'=>'Botswana',
								    'Bouvet Island'=>'Bouvet Island',
								    'Brazil'=>'Brazil',
								    'British Indian Ocean Territory'=>'British Indian Ocean Territory',
								    'Brunei'=>'Brunei',
								    'Bulgaria'=>'Bulgaria',
								    'Burkina Faso'=>'Burkina Faso',
								    'Burundi'=>'Burundi',
								    'Cambodia'=>'Cambodia',
								    'Cameroon'=>'Cameroon',
								    'Canada'=>'Canada',
								    'Cape Verde'=>'Cape Verde',
								    'Cayman Islands'=>'Cayman Islands',
								    'Central African Republic'=>'Central African Republic',
								    'Chad'=>'Chad',
								    'Chile'=>'Chile',
								    'China'=>'China',
								    'Christmas Island'=>'Christmas Island',
								    'Cocos (Keeling) Islands'=>'Cocos (Keeling) Islands',
								    'Columbia'=>'Columbia',
								    'Comoros'=>'Comoros',
								    'Congo'=>'Congo',
								    'Cook Islands'=>'Cook Islands',
								    'Costa Rica'=>'Costa Rica',
								    'Cote D\'Ivorie (Ivory Coast)'=>'Cote D\'Ivorie (Ivory Coast)',
								    'Croatia (Hrvatska)'=>'Croatia (Hrvatska)',
								    'Cuba'=>'Cuba',
								    'Cyprus'=>'Cyprus',
								    'Czech Republic'=>'Czech Republic',
								    'Democratic Republic Of Congo (Zaire)'=>'Democratic Republic Of Congo (Zaire)',
								    'Denmark'=>'Denmark',
								    'Djibouti'=>'Djibouti',
								    'Dominica'=>'Dominica',
								    'Dominican Republic'=>'Dominican Republic',
								    'East Timor'=>'East Timor',
								    'Ecuador'=>'Ecuador',
								    'Egypt'=>'Egypt',
								    'El Salvador'=>'El Salvador',
								    'Equatorial Guinea'=>'Equatorial Guinea',
								    'Eritrea'=>'Eritrea',
								    'Estonia'=>'Estonia',
								    'Ethiopia'=>'Ethiopia',
								    'Falkland Islands (Malvinas)'=>'Falkland Islands (Malvinas)',
								    'Faroe Islands'=>'Faroe Islands',
								    'Fiji'=>'Fiji',
								    'Finland'=>'Finland',
								    'France'=>'France',
								    'France, Metropolitan'=>'France, Metropolitan',
								    'French Guinea'=>'French Guinea',
								    'French Polynesia'=>'French Polynesia',
								    'French Southern Territories'=>'French Southern Territories',
								    'Gabon'=>'Gabon',
								    'Gambia'=>'Gambia',
								    'Georgia'=>'Georgia',
								    'Germany'=>'Germany',
								    'Ghana'=>'Ghana',
								    'Gibraltar'=>'Gibraltar',
								    'Greece'=>'Greece',
								    'Greenland'=>'Greenland',
								    'Grenada'=>'Grenada',
								    'Guadeloupe'=>'Guadeloupe',
								    'Guam'=>'Guam',
								    'Guatemala'=>'Guatemala',
								    'Guinea'=>'Guinea',
								    'Guinea-Bissau'=>'Guinea-Bissau',
								    'Guyana'=>'Guyana',
								    'Haiti'=>'Haiti',
								    'Heard And McDonald Islands'=>'Heard And McDonald Islands',
								    'Honduras'=>'Honduras',
								    'Hong Kong'=>'Hong Kong',
								    'Hungary'=>'Hungary',
								    'Iceland'=>'Iceland',
								    'India'=>'India',
								    'Indonesia'=>'Indonesia',
								    'Iran'=>'Iran',
								    'Iraq'=>'Iraq',
								    'Ireland'=>'Ireland',
								    'Israel'=>'Israel',
								    'Italy'=>'Italy',
								    'Jamaica'=>'Jamaica',
								    'Japan'=>'Japan',
								    'Jordan'=>'Jordan',
								    'Kazakhstan'=>'Kazakhstan',
								    'Kenya'=>'Kenya',
								    'Kiribati'=>'Kiribati',
								    'Kuwait'=>'Kuwait',
								    'Kyrgyzstan'=>'Kyrgyzstan',
								    'Laos'=>'Laos',
								    'Latvia'=>'Latvia',
								    'Lebanon'=>'Lebanon',
								    'Lesotho'=>'Lesotho',
								    'Liberia'=>'Liberia',
								    'Libya'=>'Libya',
								    'Liechtenstein'=>'Liechtenstein',
								    'Lithuania'=>'Lithuania',
								    'Luxembourg'=>'Luxembourg',
								    'Macau'=>'Macau',
								    'Macedonia'=>'Macedonia',
								    'Madagascar'=>'Madagascar',
								    'Malawi'=>'Malawi',
								    'Malaysia'=>'Malaysia',
								    'Maldives'=>'Maldives',
								    'Mali'=>'Mali',
								    'Malta'=>'Malta',
								    'Marshall Islands'=>'Marshall Islands',
								    'Martinique'=>'Martinique',
								    'Mauritania'=>'Mauritania',
								    'Mauritius'=>'Mauritius',
								    'Mayotte'=>'Mayotte',
								    'Mexico'=>'Mexico',
								    'Micronesia'=>'Micronesia',
								    'Moldova'=>'Moldova',
								    'Monaco'=>'Monaco',
								    'Mongolia'=>'Mongolia',
								    'Montserrat'=>'Montserrat',
								    'Morocco'=>'Morocco',
								    'Mozambique'=>'Mozambique',
								    'Myanmar (Burma)'=>'Myanmar (Burma)',
								    'Namibia'=>'Namibia',
								    'Nauru'=>'Nauru',
								    'Nepal'=>'Nepal',
								    'Netherlands'=>'Netherlands',
								    'Netherlands Antilles'=>'Netherlands Antilles',
								    'New Caledonia'=>'New Caledonia',
								    'New Zealand'=>'New Zealand',
								    'Nicaragua'=>'Nicaragua',
								    'Niger'=>'Niger',
								    'Nigeria'=>'Nigeria',
								    'Niue'=>'Niue',
								    'Norfolk Island'=>'Norfolk Island',
								    'North Korea'=>'North Korea',
								    'Northern Mariana Islands'=>'Northern Mariana Islands',
								    'Norway'=>'Norway',
								    'Oman'=>'Oman',
								    'Pakistan'=>'Pakistan',
								    'Palau'=>'Palau',
								    'Panama'=>'Panama',
								    'Papua New Guinea'=>'Papua New Guinea',
								    'Paraguay'=>'Paraguay',
								    'Peru'=>'Peru',
								    'Philippines'=>'Philippines',
								    'Pitcairn'=>'Pitcairn',
								    'Poland'=>'Poland',
								    'Portugal'=>'Portugal',
								    'Puerto Rico'=>'Puerto Rico',
								    'Qatar'=>'Qatar',
								    'Reunion'=>'Reunion',
								    'Romania'=>'Romania',
								    'Russia'=>'Russia',
								    'Rwanda'=>'Rwanda',
								    'Sao Tome And Principe'=>'Sao Tome And Principe',
								    'Saudi Arabia'=>'Saudi Arabia',
								    'Senegal'=>'Senegal',
								    'Seychelles'=>'Seychelles',
								    'Sierra Leone'=>'Sierra Leone',
								    'Singapore'=>'Singapore',
								    'Slovak Republic'=>'Slovak Republic',
								    'Slovenia'=>'Slovenia',
								    'Solomon Islands'=>'Solomon Islands',
								    'Somalia'=>'Somalia',
								    'South Africa'=>'South Africa',
								    'South Georgia And South Sandwich Islands'=>'South Georgia And South Sandwich Islands',
								    'South Korea'=>'South Korea',
								    'Spain'=>'Spain',
								    'Sri Lanka'=>'Sri Lanka',
								    'Sudan'=>'Sudan',
								    'Suriname'=>'Suriname',
								    'Svalbard And Jan Mayen'=>'Svalbard And Jan Mayen',
								    'Swaziland'=>'Swaziland',
								    'Sweden'=>'Sweden',
								    'Switzerland'=>'Switzerland',
								    'Syria'=>'Syria',
								    'Taiwan'=>'Taiwan',
								    'Tajikistan'=>'Tajikistan',
								    'Tanzania'=>'Tanzania',
								    'Thailand'=>'Thailand',
								    'Togo'=>'Togo',
								    'Tokelau'=>'Tokelau',
								    'Tonga'=>'Tonga',
								    'Trinidad And Tobago'=>'Trinidad And Tobago',
								    'Tunisia'=>'Tunisia',
								    'Turkey'=>'Turkey',
								    'Turkmenistan'=>'Turkmenistan',
								    'Turks And Caicos Islands'=>'Turks And Caicos Islands',
								    'Tuvalu'=>'Tuvalu',
								    'Uganda'=>'Uganda',
								    'Ukraine'=>'Ukraine',
								    'United Arab Emirates'=>'United Arab Emirates',
								    'United Kingdom'=>'United Kingdom',
								    'United States'=>'United States',
								    'United States Minor Outlying Islands'=>'United States Minor Outlying Islands',
								    'Uruguay'=>'Uruguay',
								    'Uzbekistan'=>'Uzbekistan',
								    'Vanuatu'=>'Vanuatu',
								    'Vatican City (Holy See)'=>'Vatican City (Holy See)',
								    'Venezuela'=>'Venezuela',
								    'Vietnam'=>'Vietnam',
								    'Virgin Islands (British)'=>'Virgin Islands (British)',
								    'Virgin Islands (US)'=>'Virgin Islands (US)',
								    'Wallis And Futuna Islands'=>'Wallis And Futuna Islands',
								    'Western Sahara'=>'Western Sahara',
								    'Western Samoa'=>'Western Samoa',
								    'Yemen'=>'Yemen',
								    'Yugoslavia'=>'Yugoslavia',
								    'Zambia'=>'Zambia',
								    'Zimbabwe'=>'Zimbabwe'
								), Input::get('country', null));
							}}
						</div>		
						<div class="inputs">
							{{ 
								Form::select('origin_country', array(
									''=>'Country of Origin:',
								    'Afghanistan'=>'Afghanistan',
								    'Albania'=>'Albania',
								    'Algeria'=>'Algeria',
								    'American Samoa'=>'American Samoa',
								    'Andorra'=>'Andorra',
								    'Angola'=>'Angola',
								    'Anguilla'=>'Anguilla',
								    'Antarctica'=>'Antarctica',
								    'Antigua And Barbuda'=>'Antigua And Barbuda',
								    'Argentina'=>'Argentina',
								    'Armenia'=>'Armenia',
								    'Aruba'=>'Aruba',
								    'Australia'=>'Australia',
								    'Austria'=>'Austria',
								    'Azerbaijan'=>'Azerbaijan',
								    'Bahamas'=>'Bahamas',
								    'Bahrain'=>'Bahrain',
								    'Bangladesh'=>'Bangladesh',
								    'Barbados'=>'Barbados',
								    'Belarus'=>'Belarus',
								    'Belgium'=>'Belgium',
								    'Belize'=>'Belize',
								    'Benin'=>'Benin',
								    'Bermuda'=>'Bermuda',
								    'Bhutan'=>'Bhutan',
								    'Bolivia'=>'Bolivia',
								    'Bosnia And Herzegovina'=>'Bosnia And Herzegovina',
								    'Botswana'=>'Botswana',
								    'Bouvet Island'=>'Bouvet Island',
								    'Brazil'=>'Brazil',
								    'British Indian Ocean Territory'=>'British Indian Ocean Territory',
								    'Brunei'=>'Brunei',
								    'Bulgaria'=>'Bulgaria',
								    'Burkina Faso'=>'Burkina Faso',
								    'Burundi'=>'Burundi',
								    'Cambodia'=>'Cambodia',
								    'Cameroon'=>'Cameroon',
								    'Canada'=>'Canada',
								    'Cape Verde'=>'Cape Verde',
								    'Cayman Islands'=>'Cayman Islands',
								    'Central African Republic'=>'Central African Republic',
								    'Chad'=>'Chad',
								    'Chile'=>'Chile',
								    'China'=>'China',
								    'Christmas Island'=>'Christmas Island',
								    'Cocos (Keeling) Islands'=>'Cocos (Keeling) Islands',
								    'Columbia'=>'Columbia',
								    'Comoros'=>'Comoros',
								    'Congo'=>'Congo',
								    'Cook Islands'=>'Cook Islands',
								    'Costa Rica'=>'Costa Rica',
								    'Cote D\'Ivorie (Ivory Coast)'=>'Cote D\'Ivorie (Ivory Coast)',
								    'Croatia (Hrvatska)'=>'Croatia (Hrvatska)',
								    'Cuba'=>'Cuba',
								    'Cyprus'=>'Cyprus',
								    'Czech Republic'=>'Czech Republic',
								    'Democratic Republic Of Congo (Zaire)'=>'Democratic Republic Of Congo (Zaire)',
								    'Denmark'=>'Denmark',
								    'Djibouti'=>'Djibouti',
								    'Dominica'=>'Dominica',
								    'Dominican Republic'=>'Dominican Republic',
								    'East Timor'=>'East Timor',
								    'Ecuador'=>'Ecuador',
								    'Egypt'=>'Egypt',
								    'El Salvador'=>'El Salvador',
								    'Equatorial Guinea'=>'Equatorial Guinea',
								    'Eritrea'=>'Eritrea',
								    'Estonia'=>'Estonia',
								    'Ethiopia'=>'Ethiopia',
								    'Falkland Islands (Malvinas)'=>'Falkland Islands (Malvinas)',
								    'Faroe Islands'=>'Faroe Islands',
								    'Fiji'=>'Fiji',
								    'Finland'=>'Finland',
								    'France'=>'France',
								    'France, Metropolitan'=>'France, Metropolitan',
								    'French Guinea'=>'French Guinea',
								    'French Polynesia'=>'French Polynesia',
								    'French Southern Territories'=>'French Southern Territories',
								    'Gabon'=>'Gabon',
								    'Gambia'=>'Gambia',
								    'Georgia'=>'Georgia',
								    'Germany'=>'Germany',
								    'Ghana'=>'Ghana',
								    'Gibraltar'=>'Gibraltar',
								    'Greece'=>'Greece',
								    'Greenland'=>'Greenland',
								    'Grenada'=>'Grenada',
								    'Guadeloupe'=>'Guadeloupe',
								    'Guam'=>'Guam',
								    'Guatemala'=>'Guatemala',
								    'Guinea'=>'Guinea',
								    'Guinea-Bissau'=>'Guinea-Bissau',
								    'Guyana'=>'Guyana',
								    'Haiti'=>'Haiti',
								    'Heard And McDonald Islands'=>'Heard And McDonald Islands',
								    'Honduras'=>'Honduras',
								    'Hong Kong'=>'Hong Kong',
								    'Hungary'=>'Hungary',
								    'Iceland'=>'Iceland',
								    'India'=>'India',
								    'Indonesia'=>'Indonesia',
								    'Iran'=>'Iran',
								    'Iraq'=>'Iraq',
								    'Ireland'=>'Ireland',
								    'Israel'=>'Israel',
								    'Italy'=>'Italy',
								    'Jamaica'=>'Jamaica',
								    'Japan'=>'Japan',
								    'Jordan'=>'Jordan',
								    'Kazakhstan'=>'Kazakhstan',
								    'Kenya'=>'Kenya',
								    'Kiribati'=>'Kiribati',
								    'Kuwait'=>'Kuwait',
								    'Kyrgyzstan'=>'Kyrgyzstan',
								    'Laos'=>'Laos',
								    'Latvia'=>'Latvia',
								    'Lebanon'=>'Lebanon',
								    'Lesotho'=>'Lesotho',
								    'Liberia'=>'Liberia',
								    'Libya'=>'Libya',
								    'Liechtenstein'=>'Liechtenstein',
								    'Lithuania'=>'Lithuania',
								    'Luxembourg'=>'Luxembourg',
								    'Macau'=>'Macau',
								    'Macedonia'=>'Macedonia',
								    'Madagascar'=>'Madagascar',
								    'Malawi'=>'Malawi',
								    'Malaysia'=>'Malaysia',
								    'Maldives'=>'Maldives',
								    'Mali'=>'Mali',
								    'Malta'=>'Malta',
								    'Marshall Islands'=>'Marshall Islands',
								    'Martinique'=>'Martinique',
								    'Mauritania'=>'Mauritania',
								    'Mauritius'=>'Mauritius',
								    'Mayotte'=>'Mayotte',
								    'Mexico'=>'Mexico',
								    'Micronesia'=>'Micronesia',
								    'Moldova'=>'Moldova',
								    'Monaco'=>'Monaco',
								    'Mongolia'=>'Mongolia',
								    'Montserrat'=>'Montserrat',
								    'Morocco'=>'Morocco',
								    'Mozambique'=>'Mozambique',
								    'Myanmar (Burma)'=>'Myanmar (Burma)',
								    'Namibia'=>'Namibia',
								    'Nauru'=>'Nauru',
								    'Nepal'=>'Nepal',
								    'Netherlands'=>'Netherlands',
								    'Netherlands Antilles'=>'Netherlands Antilles',
								    'New Caledonia'=>'New Caledonia',
								    'New Zealand'=>'New Zealand',
								    'Nicaragua'=>'Nicaragua',
								    'Niger'=>'Niger',
								    'Nigeria'=>'Nigeria',
								    'Niue'=>'Niue',
								    'Norfolk Island'=>'Norfolk Island',
								    'North Korea'=>'North Korea',
								    'Northern Mariana Islands'=>'Northern Mariana Islands',
								    'Norway'=>'Norway',
								    'Oman'=>'Oman',
								    'Pakistan'=>'Pakistan',
								    'Palau'=>'Palau',
								    'Panama'=>'Panama',
								    'Papua New Guinea'=>'Papua New Guinea',
								    'Paraguay'=>'Paraguay',
								    'Peru'=>'Peru',
								    'Philippines'=>'Philippines',
								    'Pitcairn'=>'Pitcairn',
								    'Poland'=>'Poland',
								    'Portugal'=>'Portugal',
								    'Puerto Rico'=>'Puerto Rico',
								    'Qatar'=>'Qatar',
								    'Reunion'=>'Reunion',
								    'Romania'=>'Romania',
								    'Russia'=>'Russia',
								    'Rwanda'=>'Rwanda',
								    'Sao Tome And Principe'=>'Sao Tome And Principe',
								    'Saudi Arabia'=>'Saudi Arabia',
								    'Senegal'=>'Senegal',
								    'Seychelles'=>'Seychelles',
								    'Sierra Leone'=>'Sierra Leone',
								    'Singapore'=>'Singapore',
								    'Slovak Republic'=>'Slovak Republic',
								    'Slovenia'=>'Slovenia',
								    'Solomon Islands'=>'Solomon Islands',
								    'Somalia'=>'Somalia',
								    'South Africa'=>'South Africa',
								    'South Georgia And South Sandwich Islands'=>'South Georgia And South Sandwich Islands',
								    'South Korea'=>'South Korea',
								    'Spain'=>'Spain',
								    'Sri Lanka'=>'Sri Lanka',
								    'Sudan'=>'Sudan',
								    'Suriname'=>'Suriname',
								    'Svalbard And Jan Mayen'=>'Svalbard And Jan Mayen',
								    'Swaziland'=>'Swaziland',
								    'Sweden'=>'Sweden',
								    'Switzerland'=>'Switzerland',
								    'Syria'=>'Syria',
								    'Taiwan'=>'Taiwan',
								    'Tajikistan'=>'Tajikistan',
								    'Tanzania'=>'Tanzania',
								    'Thailand'=>'Thailand',
								    'Togo'=>'Togo',
								    'Tokelau'=>'Tokelau',
								    'Tonga'=>'Tonga',
								    'Trinidad And Tobago'=>'Trinidad And Tobago',
								    'Tunisia'=>'Tunisia',
								    'Turkey'=>'Turkey',
								    'Turkmenistan'=>'Turkmenistan',
								    'Turks And Caicos Islands'=>'Turks And Caicos Islands',
								    'Tuvalu'=>'Tuvalu',
								    'Uganda'=>'Uganda',
								    'Ukraine'=>'Ukraine',
								    'United Arab Emirates'=>'United Arab Emirates',
								    'United Kingdom'=>'United Kingdom',
								    'United States'=>'United States',
								    'United States Minor Outlying Islands'=>'United States Minor Outlying Islands',
								    'Uruguay'=>'Uruguay',
								    'Uzbekistan'=>'Uzbekistan',
								    'Vanuatu'=>'Vanuatu',
								    'Vatican City (Holy See)'=>'Vatican City (Holy See)',
								    'Venezuela'=>'Venezuela',
								    'Vietnam'=>'Vietnam',
								    'Virgin Islands (British)'=>'Virgin Islands (British)',
								    'Virgin Islands (US)'=>'Virgin Islands (US)',
								    'Wallis And Futuna Islands'=>'Wallis And Futuna Islands',
								    'Western Sahara'=>'Western Sahara',
								    'Western Samoa'=>'Western Samoa',
								    'Yemen'=>'Yemen',
								    'Yugoslavia'=>'Yugoslavia',
								    'Zambia'=>'Zambia',
								    'Zimbabwe'=>'Zimbabwe'
								), Input::get('origin_country', null));
							}}
						</div>
						<div class="inputs">
							{{ Form::button('Go', array('type'=>'submit','value'=>'smart','name'=>'form_type','id'=>'form-submit','class'=>'btn btn-large')) }}
						</div>	

						<a href="#">Advanced Search</a>
					</div>
					<div class="text-search">
						<h1>Text Search:</h1>
						@if(Session::has('text_search_message'))
				        	<p class="alert">{{ Session::get('text_search_message') }}</p>
				        @endif
						<ul>
					        @foreach($errors->all() as $error)
					            <li>{{ $error }}</li>
					        @endforeach
					    </ul>
						
						<div class="inputs">
							{{ Form::text('text_search', Input::get('text_search', null), array('class'=>'text-search','id'=>'text_search')); }}
						</div>
						<div class="inputs">							
							{{ Form::radio('text_search_filter', 'company_name', (Input::get('text_search_filter') == 'company_name')) }}
							{{ Form::label('plan', 'Company Name') }}
						</div>
						<div class="inputs">
							{{ Form::radio('text_search_filter', 'product', (Input::get('text_search_filter') == 'product')) }}
							{{ Form::label('plan', 'Product') }}
						</div>
						<div class="inputs">
							{{ Form::radio('text_search_filter', 'tags', (Input::get('text_search_filter') == 'tags')) }}
							{{ Form::label('plan', 'Tags') }}
						</div>
						<div class="inputs">
							{{ Form::button('Go', array('type'=>'submit','value'=>'text','name'=>'form_type','id'=>'form-submit','class'=>'btn btn-large')) }}
						</div>
					</div>				
				</div>
			{{ Form::close() }}
			<div class="col-md-6">
				<h1>Result (Product)</h1>
	
				@if(Input::has('text_search'))
					<p>You searched for {{ Input::get('text_search', null) }}</p>
				@endif
				
				@if($premium_lists->count() > 0)
					<div class="premium">
						<h2>Premium Listings:</h2>					
						<div class="all-premium-list">					
		                  	@foreach($premium_lists as $k => $premium_list)			                  	
	                  			@foreach($premium_list->productcatalog as $pk => $premium_product_list)
		                  			<div class="row">
				                  		<div class="col-md-6">
											<p>Product Name: {{ $premium_product_list->title }}</p>
				                  		</div>
				                  		<div class="col-md-6">
				                  			<img src="{{ URL::to('/') }}/uploads/product_catalogs/{{ $premium_product_list->file }}" alt="">
				                  		</div>
			                  		</div>
			                  		<div class="row">
				                  		<div class="col-md-6">
											<a href="{{ route('search.show', $premium_list->id) }}">{{ $premium_list->company_name }}</a>
											<p>Category: {{ $premium_list->category }}</p>
											<p>Address: {{ $premium_list->address_1 }}{{ $premium_list->address_2 }}</p>
											<p>Country of origin: {{ $premium_list->origin_country }}</p>
										</div>
										<div class="col-md-6">
											<img src="{{ URL::to('/') }}/uploads/company_logos/{{ $premium_list->logo }}" alt="">
										</div>
									</div>
		                  		@endforeach
		                  	@endforeach	                
		                </div>	                
	                </div>
                @endif


                @if($lists->count() > 0)
					<div class="free">
						<h2>All Listings ({{ $lists->count() }}):</h2>					
						<div class="all-list">					
		                  	@foreach($lists as $k => $list)
		                  		@foreach($list->productcatalog as $pk => $product_list)
									<div class="row">
				                  		<div class="col-md-6">
											<p>Product Name: {{ $product_list->title }}</p>
				                  		</div>
				                  		<div class="col-md-6">
				                  			<img src="{{ URL::to('/') }}/uploads/product_catalogs/{{ $product_list->file }}" alt="">
				                  		</div>
			                  		</div>
		                  			<div class="row">
				                  		<div class="col-md-6">
											<a href="{{ route('search.show', $list->id) }}">{{ $list->company_name }}</a>
											<p>Category: {{ $list->category }}</p>
											<p>Address: {{ $list->address_1 }}{{ $list->address_2 }}</p>
											<p>Country of origin: {{ $list->origin_country }}</p>
										</div>
										<div class="col-md-6">
											<img src="{{ URL::to('/') }}/uploads/company_logos/{{ $list->logo }}" alt="">
										</div>
									</div>
		                  		@endforeach			                  
		                  	@endforeach	                
		                </div>	                
	                </div>
                @endif
			</div>
			<div class="col-md-3">
				<a href="#">Save Search</a>

				<div class="ad">
					<p>advert here</p>
				</div>
			</div>
		</div>
	</div>
@stop