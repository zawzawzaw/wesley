@section('content')
<div class="container">
	<div class="row">
		{{ Form::open(array('url'=>'search/result', 'class'=>'form-list')) }}
			<div class="col-md-3">			
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
						), Input::old('category', null), array('id' => 'category')); 
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
						), Input::old('subcategory', null), array('id' => 'subcategory'));
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
						), Input::old('country', null), array('id' => 'country'));
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
						), Input::old('origin_country', null), array('id' => 'origin_country'));
					}}
				</div>
				<div class="inputs">
					{{ Form::button('Go', array('type'=>'submit','value'=>'smart','name'=>'form_type','id'=>'form-submit','class'=>'btn btn-large')) }}
				</div>			
			</div>
			<div class="col-md-3">
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
					{{ Form::text('text_search', null !== Input::old('text_search', null), array('class'=>'text-search','id'=>'text_search')); }}
				</div>
				<div class="inputs">
					{{ Form::radio('text_search_filter', 'company_name', (Input::old('text_search_filter', null) == 'company_name')) }}
					{{ Form::label('plan', 'Company Name') }}
				</div>
				<div class="inputs">
					{{ Form::radio('text_search_filter', 'product', (Input::old('text_search_filter', null) == 'product')) }}
					{{ Form::label('plan', 'Product') }}
				</div>
				<div class="inputs">
					{{ Form::radio('text_search_filter', 'tags', (Input::old('text_search_filter', null) == 'tags')) }}
					{{ Form::label('plan', 'Tags') }}
				</div>
				<div class="inputs">
					{{ Form::button('Go', array('type'=>'submit','value'=>'text','name'=>'form_type','id'=>'form-submit','class'=>'btn btn-large')) }}
				</div>			
			</div>
			<div class="col-md-3">
				<h1>Advanced Search:</h1>
				
			</div>
			<div class="col-md-3">
				<a href="#" class="save_search">View Saved Searches</a>
			</div>
		{{ Form::close() }}
	</div>
</div>
<script>
	$(document).ready(function(){
		var old_category = '{{ Input::old("category", null) }}';
		var sub_category = '{{ Input::old("subcategory", null) }}';

		if(old_category) {
			$("#category").val(old_category).trigger('change');
			$('#subcategory').val(sub_category);
		}
	});
</script>
@stop