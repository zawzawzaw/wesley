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
						{{ Form::label('type', 'Type *:') }}
						
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
									)); 
								}}
					    </div>
					    <div class="col-md-6">
					    	{{ Form::label('subcategory', 'Sub-Category *') }}
							{{ 
								Form::select('subcategory', array(
									'Exploration & Production' => 'Exploration & Production', 
									'Integrated Oil & Gas' => 'Integrated Oil & Gas',
									'Oil Equipment & Services' => 'Oil Equipment & Services',
									'Pipelines' => 'Pipelines',
									'Renewable Energy Equipment' => 'Renewable Energy Equipment',
									'Alternative Fuels' => 'Alternative Fuels'									
								)); 
							}}					            
					    </div>
					</div>
					</div>

					<div class="inputs">
					{{ Form::label('address_1', 'Address 1 *') }}
					{{ Form::text('address_1', null, array('class'=>'text-input', 'placeholder'=>'Address 1')) }}
					</div>

					<div class="inputs">
					{{ Form::label('address_2', 'Address 2') }}
					{{ Form::text('address_2', null, array('class'=>'text-input', 'placeholder'=>'Address 2')) }}
					</div>

					<div class="inputs">
					{{ Form::label('city', 'City') }}
					{{ Form::text('city', null, array('class'=>'text-input', 'placeholder'=>'City')) }}
					</div>

					<div class="inputs">
					{{ Form::label('post_code', 'Postal Code *') }}
					{{ Form::text('post_code', null, array('class'=>'text-input', 'placeholder'=>'Postal Code')) }}
					</div>

					<div class="inputs">
					{{ Form::label('state', 'State/Province *') }}
					{{ Form::text('state', null, array('class'=>'text-input', 'placeholder'=>'State/Province')) }}
					</div>

					<div class="inputs">

						{{ Form::label('country', 'Country *') }}
						{{ Form::select('country', array(
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
							));
						}}						
					</div>

					<div class="inputs">
					{{ Form::label('origin_country', 'Country of Origin *') }}					
					{{ Form::select('origin_country', array(
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
						));
					}}
					</div>

					<div class="inputs">
					{{ Form::label('business_nature', 'Nature of Business *') }}
					{{ Form::textarea('business_nature', null, array('class'=>'text-input', 'placeholder'=>'Nature of Business')) }}
					</div>

					<div class="inputs">
					{{ Form::label('year_established', 'Year Established *') }}
					{{ Form::text('year_established', null, array('class'=>'text-input', 'placeholder'=>'Year Established')) }}
					</div>

					<div class="inputs">
					{{ Form::label('company_background_info', 'Company Background / Information *') }}
					{{ Form::textarea('company_background_info', null, array('class'=>'text-input', 'placeholder'=>'Company Background / Information')) }}
					</div>

					<div class="inputs">
					{{ Form::label('paid_up_capital', 'Paid Up Capital') }}
					{{ Form::text('paid_up_capital', null, array('class'=>'text-input', 'placeholder'=>'Paid Up Capital')) }}
					</div>

					<div class="inputs">
					{{ Form::label('no_of_employees', 'No. of Employees *') }}
					{{ Form::text('no_of_employees', null, array('class'=>'text-input', 'placeholder'=>'No. of Employees')) }}
					</div>

					<div class="inputs">
					{{ Form::label('quality_certification', 'Quality Certification *') }}
					{{ Form::textarea('quality_certification', null, array('class'=>'text-input', 'placeholder'=>'Quality Certification')) }}
					</div>

					<div class="inputs">
					{{ Form::label('production_capability', 'Production Capability *') }}
					{{ Form::textarea('production_capability', null, array('class'=>'text-input', 'placeholder'=>'Production Capability')) }}
					</div>

					<div class="inputs">
					{{ Form::label('bankers', 'Bankers') }}
					{{ Form::textarea('bankers', null, array('class'=>'text-input', 'placeholder'=>'Bankers')) }}
					</div>

					<div class="inputs">
					{{ Form::label('market_established', 'Market/s Established') }}
					{{ Form::textarea('market_established', null, array('class'=>'text-input', 'placeholder'=>'Market/s Established')) }}
					</div>

					<div class="inputs">
					{{ Form::label('main_shareholders', 'Main Shareholders / Parent Company') }}
					{{ Form::textarea('main_shareholders', null, array('class'=>'text-input', 'placeholder'=>'Main Shareholders / Parent Company')) }}
					</div>

					<div class="inputs">
					{{ Form::label('market_interested', 'Market/s Interested') }}
					{{ Form::textarea('market_interested', null, array('class'=>'text-input', 'placeholder'=>'Market/s Interested')) }}			           
					</div>

					<div class="inputs">
					{{ Form::label('number_of_offices_worldwide', 'Number of offices worldwide') }}
					{{ Form::text('number_of_offices_worldwide', null, array('class'=>'text-input', 'placeholder'=>'Number of offices worldwide')) }}
					</div>

					<div class="inputs">
					{{ Form::label('links_to_related_companies', 'Links to related Companies') }}
					{{ Form::textarea('links_to_related_companies', null, array('class'=>'text-input', 'placeholder'=>'Links to related Companies')) }}			           
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
						{{ Form::label('major_facilities', 'Major Facilities / Equipment *') }}
						{{ Form::textarea('major_facilities', null, array('class'=>'text-input', 'placeholder'=>'Major Facilities / Equipment')) }}	
						</div>

					<div class="inputs">
						{{ Form::label('major_customers', 'Major Customers / Project History *') }}
						{{ Form::textarea('major_customers', null, array('class'=>'text-input', 'placeholder'=>'Major Customers / Project History')) }}
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
					
					{{ Form::hidden('key_product_count', null, array('class'=>'text-input', 'id'=>'key_product_count')) }}
					{{ Form::hidden('key_product_ids', null, array('class'=>'text-input', 'id'=>'key_product_ids')) }}
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
								{{ Form::label('key_product_name_1', 'Product Name') }}
								{{ Form::text('key_product_name_1', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_1', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_1', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_1', 'Image') }}
								{{ Form::text('key_product_image_1', null, array('id'=>'key_product_image_1')); }}
								{{ Form::file('image_1', array('class'=>'image_upload','id'=>'image_1')); }}
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
								{{ Form::label('key_product_name_2', 'Product Name') }}
								{{ Form::text('key_product_name_2', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_2', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_2', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_2', 'Image') }}
								{{ Form::text('key_product_image_2', null, array('id'=>'key_product_image_2')); }}
								{{ Form::file('image_2', array('class'=>'image_upload','id'=>'image_2')); }}
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
								{{ Form::label('key_product_name_3', 'Product Name') }}
								{{ Form::text('key_product_name_3', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_3', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_3', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_3', 'Image') }}
								{{ Form::text('key_product_image_3', null, array('id'=>'key_product_image_3')); }}
								{{ Form::file('image_3', array('class'=>'image_upload','id'=>'image_3')); }}
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
								{{ Form::label('key_product_name_4', 'Product Name') }}
								{{ Form::text('key_product_name_4', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_4', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_4', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_4', 'Image') }}
								{{ Form::text('key_product_image_4', null, array('id'=>'key_product_image_4')); }}
								{{ Form::file('image_4', array('class'=>'image_upload','id'=>'image_4')); }}
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
								{{ Form::label('key_product_name_5', 'Product Name') }}
								{{ Form::text('key_product_name_5', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_5', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_5', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_5', 'Image') }}
								{{ Form::text('key_product_image_5', null, array('id'=>'key_product_image_5')); }}
								{{ Form::file('image_5', array('class'=>'image_upload','id'=>'image_5')); }}
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
								{{ Form::label('key_product_name_6', 'Product Name') }}
								{{ Form::text('key_product_name_6', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_6', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_6', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_6', 'Image') }}
								{{ Form::text('key_product_image_6', null, array('id'=>'key_product_image_6')); }}
								{{ Form::file('image_6', array('class'=>'image_upload','id'=>'image_6')); }}
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
								{{ Form::label('key_product_name_7', 'Product Name') }}
								{{ Form::text('key_product_name_7', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_7', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_7', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_7', 'Image') }}
								{{ Form::text('key_product_image_7', null, array('id'=>'key_product_image_7')); }}
								{{ Form::file('image_7', array('class'=>'image_upload','id'=>'image_7')); }}
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
								{{ Form::label('key_product_name_8', 'Product Name') }}
								{{ Form::text('key_product_name_8', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_8', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_8', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_8', 'Image') }}
								{{ Form::text('key_product_image_8', null, array('id'=>'key_product_image_8')); }}
								{{ Form::file('image_8', array('class'=>'image_upload','id'=>'image_8')); }}
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
								{{ Form::label('key_product_name_9', 'Product Name') }}
								{{ Form::text('key_product_name_9', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_9', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_9', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_9', 'Image') }}
								{{ Form::text('key_product_image_9', null, array('id'=>'key_product_image_9')); }}
								{{ Form::file('image_9', array('class'=>'image_upload','id'=>'image_9')); }}
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
								{{ Form::label('key_product_name_10', 'Product Name') }}
								{{ Form::text('key_product_name_10', null, array('class'=>'product_name text-input', 'placeholder'=>'Product Name')) }}
							</div>

							<div class="inputs">
								{{ Form::label('key_product_specifics_10', 'Product Specifics') }}
								{{ Form::text('key_product_specifics_10', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
							</div>

							<div class="inputs">
								{{ Form::label('image_10', 'Image') }}
								{{ Form::text('key_product_image_10', null, array('id'=>'key_product_image_10')); }}
								{{ Form::file('image_10', array('class'=>'image_upload','id'=>'image_10')); }}
							</div>
						</div>
					</div>
					
	    		</div>
	    	</div>

	    	<div class="row">
	    		<div class="col-md-12">
	    			
					<h1>Product Catalogs</h1>
					{{ Form::hidden('product_catalog_count', null, array('class'=>'text-input', 'id'=>'product_catalog_count')) }}
					{{ Form::hidden('product_catalog_ids', null, array('class'=>'text-input', 'id'=>'product_catalog_ids')) }}
					<div class="row">
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_title_1', 'Catalog Title') }}
								{{ Form::text('product_catalog_title_1', null, array('class'=>'product_catalog_title','id'=>'product_catalog_title_1')); }}
							</div>
							<div class="inputs">								
								{{ Form::label('catalog_1', 'Catalog File') }}
								{{ Form::text('product_catalog_1', null, array('class'=>'product_catalog','id'=>'product_catalog_1')); }}
								{{ Form::file('catalog_1', array('class'=>'catalog_upload','id'=>'catalog_1')); }}
							</div>	
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_title_2', 'Catalog Title') }}
								{{ Form::text('product_catalog_title_2', null, array('class'=>'product_catalog_title','id'=>'product_catalog_title_2')); }}
							</div>
							<div class="inputs">								
								{{ Form::label('catalog_2', 'Catalog File') }}
								{{ Form::text('product_catalog_2', null, array('class'=>'product_catalog','id'=>'product_catalog_2')); }}
								{{ Form::file('catalog_2', array('class'=>'catalog_upload','id'=>'catalog_2')); }}
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
								{{ Form::label('catalog_title_3', 'Catalog Title') }}
								{{ Form::text('product_catalog_title_3', null, array('class'=>'product_catalog_title','id'=>'product_catalog_title_3')); }}
							</div>
							<div class="inputs">								
								{{ Form::label('catalog_3', 'Catalog File') }}
								{{ Form::text('product_catalog_3', null, array('class'=>'product_catalog','id'=>'product_catalog_3')); }}
								{{ Form::file('catalog_3', array('class'=>'catalog_upload','id'=>'catalog_3')); }}
							</div>	
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_title_4', 'Catalog Title') }}
								{{ Form::text('product_catalog_title_4', null, array('class'=>'product_catalog_title','id'=>'product_catalog_title_4')); }}
							</div>
							<div class="inputs">								
								{{ Form::label('catalog_4', 'Catalog File') }}
								{{ Form::text('product_catalog_4', null, array('class'=>'product_catalog','id'=>'product_catalog_4')); }}
								{{ Form::file('catalog_4', array('class'=>'catalog_upload','id'=>'catalog_4')); }}
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
								{{ Form::label('catalog_title_5', 'Catalog Title') }}
								{{ Form::text('product_catalog_title_5', null, array('class'=>'product_catalog_title','id'=>'product_catalog_title_5')); }}
							</div>
							<div class="inputs">								
								{{ Form::label('catalog_5', 'Catalog File') }}
								{{ Form::text('product_catalog_5', null, array('class'=>'product_catalog','id'=>'product_catalog_5')); }}
								{{ Form::file('catalog_5', array('class'=>'catalog_upload','id'=>'catalog_5')); }}
							</div>	
						</div>
						<div class="col-md-6">
							<div class="inputs">
								{{ Form::label('catalog_title_6', 'Catalog Title') }}
								{{ Form::text('product_catalog_title_6', null, array('class'=>'product_catalog_title','id'=>'product_catalog_title_6')); }}
							</div>
							<div class="inputs">
								{{ Form::label('catalog_6', 'Catalog File') }}
								{{ Form::text('product_catalog_6', null, array('class'=>'product_catalog','id'=>'product_catalog_6')); }}
								{{ Form::file('catalog_6', array('class'=>'catalog_upload','id'=>'catalog_6')); }}
							</div>	
						</div>
					</div>

				</div>
			</div>

			<div class="row">
				<div class="col-md-12">
					<button id="prev" class="btn btn-large">Prev</button>
					<button id="add_more" class="btn btn-large">Add More</button>
					{{ Form::submit('Save', array('id'=>'form-submit','class'=>'btn btn-large')) }}
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
    $('#prev').on('click', function(e){
    	e.preventDefault();
    	$('#list-2').hide();
    	$('#list-1').show();
    });

    $('#form-submit').on('click', function(e){
    	e.preventDefault();
    	var key_product_count = $('.product_name').filter(function(){
		    return $(this).val();
		}).length;
		var product_catalog_count = $('.product_catalog').filter(function(){
		    return $(this).val();
		}).length;

    	$('#key_product_count').val(key_product_count);
    	$('#product_catalog_count').val(product_catalog_count);

    	var key_product_ids = [];
		$('.product_name').each(function(index, each_input){
			if($(each_input).val()!=='') {
				key_product_ids.push(index+1);
				$('#key_product_ids').val(key_product_ids.join());
			}
		});

		var product_catalog_ids = [];
		$('.product_catalog').each(function(index, each_catalog){
			if($(each_catalog).val()!=='') {
				product_catalog_ids.push(index+1);
				$('#product_catalog_ids').val(product_catalog_ids.join());
			}
		});

		$(this).closest('form').submit();
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

    $('#add_more').on('click', function(e){
    	e.preventDefault();
    	
    });
    
    $('.image_upload').each(function(index, each_product_upload) {
    	$(each_product_upload).uploadifive({
	        'auto'      : true,
	        'fileType'     : 'image/*',
	        'fileSizeLimit' : '5MB',
	        'buttonText'   : 'Upload',
	        'uploadScript' : "{{ route('generic.uploadfiles') }}",
	        'formData'         : {'type' : 'key_product'},
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

	            var id = index + 1;

	            $('input[name=key_product_image_'+id+']').val(data[0]);

	        }
	    });
    });

	$('.catalog_upload').each(function(index, each_catalog_upload) {
		$(each_catalog_upload).uploadifive({
	        'auto'      : true,
	        'fileType'     : false,
	        'fileSizeLimit' : '5MB',
	        'buttonText'   : 'Upload',
	        'uploadScript' : "{{ route('generic.uploadfiles') }}",
	        'formData'         : {'type' : 'product_catalog'},
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

	            var id = index + 1;

	            $('input[name=product_catalog_'+id+']').val(data[0]);

	        }
	    });
	});

  });
</script>
@stop