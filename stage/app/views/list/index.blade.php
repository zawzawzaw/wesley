@section('content')
<div id="list"> 	
  	
	{{-- <div class="bg"></div> --}}
  	<div class="container">
		
		<div class="listing-details">
			<div class="row">
				<div class="col-md-12">
					{{ Form::open(array('url'=>'list', 'class'=>'form-list', 'id'=>'form-list')) }}
						<div class="progress-bar"></div>
						<!-- LIST 1 -->
						<div id="list-1" class="all-list">
							<div class="header">
								<h3 class="pull-left">LISTING DETAILS</h3>
								{{-- <a href="#" class="edit-btn pull-right"><i class="edit-icon"></i><span>EDIT</span></a> --}}
							</div>						
							<div class="content">
								<div class="row">
									<div class="col-md-12">
										@if(Session::has('list_message'))
										    <p>{{ Session::get('list_message') }}</p>
										@endif
										<ul>
									        @foreach($errors->all() as $error)
									            <li>{{ $error }}</li>
									        @endforeach
									    </ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-4 first-col">
										<div class="each-input">
											{{ Form::label('type', 'Type *', array('id'=>'lbl_type')) }}										
											<div class="each-type">
												{{ Form::radio('type', 'Free', true) }}
												<label for="type" id="type_free"><span></span><p>Free</p></label>
											</div>
											<div class="each-type">
												{{ Form::radio('type', 'Paid', false) }}		    		
												<label for="type" id="type_paid"><span></span><p>Paid</p></label>
											</div>
										</div>
										<div class="each-input">
											{{ Form::label('company_name', 'Company Name *') }}
											{{ Form::text('company_name', null, array('class'=>'text-input')) }}										
										</div>
										<div class="each-input">
											{{ Form::label('subcategory', 'Sector *') }}
											<div class="dropdown">
											{{ 
												Form::select('subcategory', array(
													'' => 'Sector', 
													'Exploration & Production' => 'Exploration & Production',
													'Integrated Oil & Gas' => 'Integrated Oil & Gas',
													'Oil Equipment & Services' => 'Oil Equipment & Services',
													'Pipelines' => 'Pipelines',
													'Renewable Energy Equipment' => 'Renewable Energy Equipment',
													'Alternative Fuels' => 'Alternative Fuels'									
												), 'default', array('class'=>'subcategory', 'id'=>'list-subcategory'));
											}}
											</div>
										</div>
										<div class="each-input">
											{{ Form::label('post_code', 'Post Code *') }}			
											{{ Form::text('post_code', null, array('class'=>'text-input')) }}										
										</div>					
										<div class="each-input">
											{{ Form::label('country', 'Location *') }}
											<div class="dropdown">
											{{ Form::select('country', array(
											    "us"=>"United States",
												"gb"=>"United Kingdom",
												"af"=>"Afghanistan (&#8235;افغانستان&#8236;&lrm;)",
												"al"=>"Albania (Shqipëri)",
												"dz"=>"Algeria (&#8235;الجزائر&#8236;&lrm;)",
												"as"=>"American Samoa",
												"ad"=>"Andorra",
												"ao"=>"Angola",
												"ai"=>"Anguilla",
												"ag"=>"Antigua and Barbuda",
												"ar"=>"Argentina",
												"am"=>"Armenia (Հայաստան)",
												"aw"=>"Aruba",
												"au"=>"Australia",
												"at"=>"Austria (Österreich)",
												"az"=>"Azerbaijan (Azərbaycan)",
												"bs"=>"Bahamas",
												"bh"=>"Bahrain (&#8235;البحرين&#8236;&lrm;)",
												"bd"=>"Bangladesh (বাংলাদেশ)",
												"bb"=>"Barbados",
												"by"=>"Belarus (Беларусь)",
												"be"=>"Belgium (België)",
												"bz"=>"Belize",
												"bj"=>"Benin (Bénin)",
												"bm"=>"Bermuda",
												"bt"=>"Bhutan (འབྲུག)",
												"bo"=>"Bolivia",
												"ba"=>"Bosnia and Herzegovina (Босна и Херцеговина)",
												"bw"=>"Botswana",
												"br"=>"Brazil (Brasil)",
												"io"=>"British Indian Ocean Territory",
												"vg"=>"British Virgin Islands",
												"bn"=>"Brunei",
												"bg"=>"Bulgaria (България)",
												"bf"=>"Burkina Faso",
												"bi"=>"Burundi (Uburundi)",
												"kh"=>"Cambodia (កម្ពុជា)",
												"cm"=>"Cameroon (Cameroun)",
												"ca"=>"Canada",
												"cv"=>"Cape Verde (Kabu Verdi)",
												"bq"=>"Caribbean Netherlands",
												"ky"=>"Cayman Islands",
												"cf"=>"Central African Republic (République centrafricaine)",
												"td"=>"Chad (Tchad)",
												"cl"=>"Chile",
												"cn"=>"China (中国)",
												"co"=>"Colombia",
												"km"=>"Comoros (&#8235;جزر القمر&#8236;&lrm;)",
												"cd"=>"Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)",
												"cg"=>"Congo (Republic) (Congo-Brazzaville)",
												"ck"=>"Cook Islands",
												"cr"=>"Costa Rica",
												"ci"=>"Côte d’Ivoire",
												"hr"=>"Croatia (Hrvatska)",
												"cu"=>"Cuba",
												"cw"=>"Curaçao",
												"cy"=>"Cyprus (Κύπρος)",
												"cz"=>"Czech Republic (Česká republika)",
												"dk"=>"Denmark (Danmark)",
												"dj"=>"Djibouti",
												"dm"=>"Dominica",
												"do"=>"Dominican Republic (República Dominicana)",
												"ec"=>"Ecuador",
												"eg"=>"Egypt (&#8235;مصر&#8236;&lrm;)",
												"sv"=>"El Salvador",
												"gq"=>"Equatorial Guinea (Guinea Ecuatorial)",
												"er"=>"Eritrea",
												"ee"=>"Estonia (Eesti)",
												"et"=>"Ethiopia",
												"fk"=>"Falkland Islands (Islas Malvinas)",
												"fo"=>"Faroe Islands (Føroyar)",
												"fj"=>"Fiji",
												"fi"=>"Finland (Suomi)",
												"fr"=>"France",
												"gf"=>"French Guiana (Guyane française)",
												"pf"=>"French Polynesia (Polynésie française)",
												"ga"=>"Gabon",
												"gm"=>"Gambia",
												"ge"=>"Georgia (საქართველო)",
												"de"=>"Germany (Deutschland)",
												"gh"=>"Ghana (Gaana)",
												"gi"=>"Gibraltar",
												"gr"=>"Greece (Ελλάδα)",
												"gl"=>"Greenland (Kalaallit Nunaat)",
												"gd"=>"Grenada",
												"gp"=>"Guadeloupe",
												"gu"=>"Guam",
												"gt"=>"Guatemala",
												"gn"=>"Guinea (Guinée)",
												"gw"=>"Guinea-Bissau (Guiné Bissau)",
												"gy"=>"Guyana",
												"ht"=>"Haiti",
												"hn"=>"Honduras",
												"hk"=>"Hong Kong (香港)",
												"hu"=>"Hungary (Magyarország)",
												"is"=>"Iceland (Ísland)",
												"in"=>"India (भारत)",
												"id"=>"Indonesia",
												"ir"=>"Iran (&#8235;ایران&#8236;&lrm;)",
												"iq"=>"Iraq (&#8235;العراق&#8236;&lrm;)",
												"ie"=>"Ireland",
												"il"=>"Israel (&#8235;ישראל&#8236;&lrm;)",
												"it"=>"Italy (Italia)",
												"jm"=>"Jamaica",
												"jp"=>"Japan (日本)",
												"jo"=>"Jordan (&#8235;الأردن&#8236;&lrm;)",
												"kz"=>"Kazakhstan (Казахстан)",
												"ke"=>"Kenya",
												"ki"=>"Kiribati",
												"kw"=>"Kuwait (&#8235;الكويت&#8236;&lrm;)",
												"kg"=>"Kyrgyzstan (Кыргызстан)",
												"la"=>"Laos (ລາວ)",
												"lv"=>"Latvia (Latvija)",
												"lb"=>"Lebanon (&#8235;لبنان&#8236;&lrm;)",
												"ls"=>"Lesotho",
												"lr"=>"Liberia",
												"ly"=>"Libya (&#8235;ليبيا&#8236;&lrm;)",
												"li"=>"Liechtenstein",
												"lt"=>"Lithuania (Lietuva)",
												"lu"=>"Luxembourg",
												"mo"=>"Macau (澳門)",
												"mk"=>"Macedonia (FYROM) (Македонија)",
												"mg"=>"Madagascar (Madagasikara)",
												"mw"=>"Malawi",
												"my"=>"Malaysia",
												"mv"=>"Maldives",
												"ml"=>"Mali",
												"mt"=>"Malta",
												"mh"=>"Marshall Islands",
												"mq"=>"Martinique",
												"mr"=>"Mauritania (&#8235;موريتانيا&#8236;&lrm;)",
												"mu"=>"Mauritius (Moris)",
												"mx"=>"Mexico (México)",
												"fm"=>"Micronesia",
												"md"=>"Moldova (Republica Moldova)",
												"mc"=>"Monaco",
												"mn"=>"Mongolia (Монгол)",
												"me"=>"Montenegro (Crna Gora)",
												"ms"=>"Montserrat",
												"ma"=>"Morocco (&#8235;المغرب&#8236;&lrm;)",
												"mz"=>"Mozambique (Moçambique)",
												"mm"=>"Myanmar (Burma) (မြန်မာ)",
												"na"=>"Namibia (Namibië)",
												"nr"=>"Nauru",
												"np"=>"Nepal (नेपाल)",
												"nl"=>"Netherlands (Nederland)",
												"nc"=>"New Caledonia (Nouvelle-Calédonie)",
												"nz"=>"New Zealand",
												"ni"=>"Nicaragua",
												"ne"=>"Niger (Nijar)",
												"ng"=>"Nigeria",
												"nu"=>"Niue",
												"nf"=>"Norfolk Island",
												"kp"=>"North Korea (조선 민주주의 인민 공화국)",
												"mp"=>"Northern Mariana Islands",
												"no"=>"Norway (Norge)",
												"om"=>"Oman (&#8235;عُمان&#8236;&lrm;)",
												"pk"=>"Pakistan (&#8235;پاکستان&#8236;&lrm;)",
												"pw"=>"Palau",
												"ps"=>"Palestine (&#8235;فلسطين&#8236;&lrm;)",
												"pa"=>"Panama (Panamá)",
												"pg"=>"Papua New Guinea",
												"py"=>"Paraguay",
												"pe"=>"Peru (Perú)",
												"ph"=>"Philippines",
												"pl"=>"Poland (Polska)",
												"pt"=>"Portugal",
												"pr"=>"Puerto Rico",
												"qa"=>"Qatar (&#8235;قطر&#8236;&lrm;)",
												"re"=>"Réunion (La Réunion)",
												"ro"=>"Romania (România)",
												"ru"=>"Russia (Россия)",
												"rw"=>"Rwanda",
												"bl"=>"Saint Barthélemy (Saint-Barthélemy)",
												"sh"=>"Saint Helena",
												"kn"=>"Saint Kitts and Nevis",
												"lc"=>"Saint Lucia",
												"mf"=>"Saint Martin (Saint-Martin (partie française))",
												"pm"=>"Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)",
												"vc"=>"Saint Vincent and the Grenadines",
												"ws"=>"Samoa",
												"sm"=>"San Marino",
												"st"=>"São Tomé and Príncipe (São Tomé e Príncipe)",
												"sa"=>"Saudi Arabia (&#8235;المملكة العربية السعودية&#8236;&lrm;)",
												"sn"=>"Senegal (Sénégal)",
												"rs"=>"Serbia (Србија)",
												"sc"=>"Seychelles",
												"sl"=>"Sierra Leone",
												"sg"=>"Singapore",
												"sx"=>"Sint Maarten",
												"sk"=>"Slovakia (Slovensko)",
												"si"=>"Slovenia (Slovenija)",
												"sb"=>"Solomon Islands",
												"so"=>"Somalia (Soomaaliya)",
												"za"=>"South Africa",
												"kr"=>"South Korea (대한민국)",
												"ss"=>"South Sudan (&#8235;جنوب السودان&#8236;&lrm;)",
												"es"=>"Spain (España)",
												"lk"=>"Sri Lanka (ශ්&zwj;රී ලංකාව)",
												"sd"=>"Sudan (&#8235;السودان&#8236;&lrm;)",
												"sr"=>"Suriname",
												"sz"=>"Swaziland",
												"se"=>"Sweden (Sverige)",
												"ch"=>"Switzerland (Schweiz)",
												"sy"=>"Syria (&#8235;سوريا&#8236;&lrm;)",
												"tw"=>"Taiwan (台灣)",
												"tj"=>"Tajikistan",
												"tz"=>"Tanzania",
												"th"=>"Thailand (ไทย)",
												"tl"=>"Timor-Leste",
												"tg"=>"Togo",
												"tk"=>"Tokelau",
												"to"=>"Tonga",
												"tt"=>"Trinidad and Tobago",
												"tn"=>"Tunisia (&#8235;تونس&#8236;&lrm;)",
												"tr"=>"Turkey (Türkiye)",
												"tm"=>"Turkmenistan",
												"tc"=>"Turks and Caicos Islands",
												"tv"=>"Tuvalu",
												"vi"=>"U.S. Virgin Islands",
												"ug"=>"Uganda",
												"ua"=>"Ukraine (Україна)",
												"ae"=>"United Arab Emirates (&#8235;الإمارات العربية المتحدة&#8236;&lrm;)",
												"gb"=>"United Kingdom",
												"us"=>"United States",
												"uy"=>"Uruguay",
												"uz"=>"Uzbekistan (Oʻzbekiston)",
												"vu"=>"Vanuatu",
												"va"=>"Vatican City (Città del Vaticano)",
												"ve"=>"Venezuela",
												"vn"=>"Vietnam (Việt Nam)",
												"wf"=>"Wallis and Futuna",
												"ye"=>"Yemen (&#8235;اليمن&#8236;&lrm;)",
												"zm"=>"Zambia",
												"zw"=>"Zimbabwe"
												));
											}}					
											</div>
										</div>														
									</div>
									<div class="col-md-4 second-col">
										<div class="each-input">
											{{ Form::label('company_logo', 'Upload Company logo') }}
											{{ Form::file('company_logo', null, array('id'=>'company_logo')); }}
											{{ Form::hidden('logo', null, array('id'=>'logo')); }}										
										</div>
										<div class="each-input">										
											{{ Form::label('category', 'Industry *') }}
											<div class="dropdown">
												{{ 
													Form::select('category', array(
														'' => 'Industry', 
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
													), 'default', array('class'=>'category', 'id'=>'list-category')); 
												}}
											</div>
										</div>
										<div class="each-input">										
											{{ Form::label('address_1', 'Address 1 *') }}
											{{ Form::text('address_1', null, array('class'=>'text-input')) }}
										</div>
										<div class="each-input">
											{{ Form::label('city', 'City') }}
											{{ Form::text('city', null, array('class'=>'text-input')) }}	
										</div>
										<div class="each-input">
											{{ Form::label('origin_country', 'Country of Origin *') }}	
											<div class="dropdown">				
												{{ Form::select('origin_country', array(
											    "us"=>"United States",
												"gb"=>"United Kingdom",
												"af"=>"Afghanistan (&#8235;افغانستان&#8236;&lrm;)",
												"al"=>"Albania (Shqipëri)",
												"dz"=>"Algeria (&#8235;الجزائر&#8236;&lrm;)",
												"as"=>"American Samoa",
												"ad"=>"Andorra",
												"ao"=>"Angola",
												"ai"=>"Anguilla",
												"ag"=>"Antigua and Barbuda",
												"ar"=>"Argentina",
												"am"=>"Armenia (Հայաստան)",
												"aw"=>"Aruba",
												"au"=>"Australia",
												"at"=>"Austria (Österreich)",
												"az"=>"Azerbaijan (Azərbaycan)",
												"bs"=>"Bahamas",
												"bh"=>"Bahrain (&#8235;البحرين&#8236;&lrm;)",
												"bd"=>"Bangladesh (বাংলাদেশ)",
												"bb"=>"Barbados",
												"by"=>"Belarus (Беларусь)",
												"be"=>"Belgium (België)",
												"bz"=>"Belize",
												"bj"=>"Benin (Bénin)",
												"bm"=>"Bermuda",
												"bt"=>"Bhutan (འབྲུག)",
												"bo"=>"Bolivia",
												"ba"=>"Bosnia and Herzegovina (Босна и Херцеговина)",
												"bw"=>"Botswana",
												"br"=>"Brazil (Brasil)",
												"io"=>"British Indian Ocean Territory",
												"vg"=>"British Virgin Islands",
												"bn"=>"Brunei",
												"bg"=>"Bulgaria (България)",
												"bf"=>"Burkina Faso",
												"bi"=>"Burundi (Uburundi)",
												"kh"=>"Cambodia (កម្ពុជា)",
												"cm"=>"Cameroon (Cameroun)",
												"ca"=>"Canada",
												"cv"=>"Cape Verde (Kabu Verdi)",
												"bq"=>"Caribbean Netherlands",
												"ky"=>"Cayman Islands",
												"cf"=>"Central African Republic (République centrafricaine)",
												"td"=>"Chad (Tchad)",
												"cl"=>"Chile",
												"cn"=>"China (中国)",
												"co"=>"Colombia",
												"km"=>"Comoros (&#8235;جزر القمر&#8236;&lrm;)",
												"cd"=>"Congo (DRC) (Jamhuri ya Kidemokrasia ya Kongo)",
												"cg"=>"Congo (Republic) (Congo-Brazzaville)",
												"ck"=>"Cook Islands",
												"cr"=>"Costa Rica",
												"ci"=>"Côte d’Ivoire",
												"hr"=>"Croatia (Hrvatska)",
												"cu"=>"Cuba",
												"cw"=>"Curaçao",
												"cy"=>"Cyprus (Κύπρος)",
												"cz"=>"Czech Republic (Česká republika)",
												"dk"=>"Denmark (Danmark)",
												"dj"=>"Djibouti",
												"dm"=>"Dominica",
												"do"=>"Dominican Republic (República Dominicana)",
												"ec"=>"Ecuador",
												"eg"=>"Egypt (&#8235;مصر&#8236;&lrm;)",
												"sv"=>"El Salvador",
												"gq"=>"Equatorial Guinea (Guinea Ecuatorial)",
												"er"=>"Eritrea",
												"ee"=>"Estonia (Eesti)",
												"et"=>"Ethiopia",
												"fk"=>"Falkland Islands (Islas Malvinas)",
												"fo"=>"Faroe Islands (Føroyar)",
												"fj"=>"Fiji",
												"fi"=>"Finland (Suomi)",
												"fr"=>"France",
												"gf"=>"French Guiana (Guyane française)",
												"pf"=>"French Polynesia (Polynésie française)",
												"ga"=>"Gabon",
												"gm"=>"Gambia",
												"ge"=>"Georgia (საქართველო)",
												"de"=>"Germany (Deutschland)",
												"gh"=>"Ghana (Gaana)",
												"gi"=>"Gibraltar",
												"gr"=>"Greece (Ελλάδα)",
												"gl"=>"Greenland (Kalaallit Nunaat)",
												"gd"=>"Grenada",
												"gp"=>"Guadeloupe",
												"gu"=>"Guam",
												"gt"=>"Guatemala",
												"gn"=>"Guinea (Guinée)",
												"gw"=>"Guinea-Bissau (Guiné Bissau)",
												"gy"=>"Guyana",
												"ht"=>"Haiti",
												"hn"=>"Honduras",
												"hk"=>"Hong Kong (香港)",
												"hu"=>"Hungary (Magyarország)",
												"is"=>"Iceland (Ísland)",
												"in"=>"India (भारत)",
												"id"=>"Indonesia",
												"ir"=>"Iran (&#8235;ایران&#8236;&lrm;)",
												"iq"=>"Iraq (&#8235;العراق&#8236;&lrm;)",
												"ie"=>"Ireland",
												"il"=>"Israel (&#8235;ישראל&#8236;&lrm;)",
												"it"=>"Italy (Italia)",
												"jm"=>"Jamaica",
												"jp"=>"Japan (日本)",
												"jo"=>"Jordan (&#8235;الأردن&#8236;&lrm;)",
												"kz"=>"Kazakhstan (Казахстан)",
												"ke"=>"Kenya",
												"ki"=>"Kiribati",
												"kw"=>"Kuwait (&#8235;الكويت&#8236;&lrm;)",
												"kg"=>"Kyrgyzstan (Кыргызстан)",
												"la"=>"Laos (ລາວ)",
												"lv"=>"Latvia (Latvija)",
												"lb"=>"Lebanon (&#8235;لبنان&#8236;&lrm;)",
												"ls"=>"Lesotho",
												"lr"=>"Liberia",
												"ly"=>"Libya (&#8235;ليبيا&#8236;&lrm;)",
												"li"=>"Liechtenstein",
												"lt"=>"Lithuania (Lietuva)",
												"lu"=>"Luxembourg",
												"mo"=>"Macau (澳門)",
												"mk"=>"Macedonia (FYROM) (Македонија)",
												"mg"=>"Madagascar (Madagasikara)",
												"mw"=>"Malawi",
												"my"=>"Malaysia",
												"mv"=>"Maldives",
												"ml"=>"Mali",
												"mt"=>"Malta",
												"mh"=>"Marshall Islands",
												"mq"=>"Martinique",
												"mr"=>"Mauritania (&#8235;موريتانيا&#8236;&lrm;)",
												"mu"=>"Mauritius (Moris)",
												"mx"=>"Mexico (México)",
												"fm"=>"Micronesia",
												"md"=>"Moldova (Republica Moldova)",
												"mc"=>"Monaco",
												"mn"=>"Mongolia (Монгол)",
												"me"=>"Montenegro (Crna Gora)",
												"ms"=>"Montserrat",
												"ma"=>"Morocco (&#8235;المغرب&#8236;&lrm;)",
												"mz"=>"Mozambique (Moçambique)",
												"mm"=>"Myanmar (Burma) (မြန်မာ)",
												"na"=>"Namibia (Namibië)",
												"nr"=>"Nauru",
												"np"=>"Nepal (नेपाल)",
												"nl"=>"Netherlands (Nederland)",
												"nc"=>"New Caledonia (Nouvelle-Calédonie)",
												"nz"=>"New Zealand",
												"ni"=>"Nicaragua",
												"ne"=>"Niger (Nijar)",
												"ng"=>"Nigeria",
												"nu"=>"Niue",
												"nf"=>"Norfolk Island",
												"kp"=>"North Korea (조선 민주주의 인민 공화국)",
												"mp"=>"Northern Mariana Islands",
												"no"=>"Norway (Norge)",
												"om"=>"Oman (&#8235;عُمان&#8236;&lrm;)",
												"pk"=>"Pakistan (&#8235;پاکستان&#8236;&lrm;)",
												"pw"=>"Palau",
												"ps"=>"Palestine (&#8235;فلسطين&#8236;&lrm;)",
												"pa"=>"Panama (Panamá)",
												"pg"=>"Papua New Guinea",
												"py"=>"Paraguay",
												"pe"=>"Peru (Perú)",
												"ph"=>"Philippines",
												"pl"=>"Poland (Polska)",
												"pt"=>"Portugal",
												"pr"=>"Puerto Rico",
												"qa"=>"Qatar (&#8235;قطر&#8236;&lrm;)",
												"re"=>"Réunion (La Réunion)",
												"ro"=>"Romania (România)",
												"ru"=>"Russia (Россия)",
												"rw"=>"Rwanda",
												"bl"=>"Saint Barthélemy (Saint-Barthélemy)",
												"sh"=>"Saint Helena",
												"kn"=>"Saint Kitts and Nevis",
												"lc"=>"Saint Lucia",
												"mf"=>"Saint Martin (Saint-Martin (partie française))",
												"pm"=>"Saint Pierre and Miquelon (Saint-Pierre-et-Miquelon)",
												"vc"=>"Saint Vincent and the Grenadines",
												"ws"=>"Samoa",
												"sm"=>"San Marino",
												"st"=>"São Tomé and Príncipe (São Tomé e Príncipe)",
												"sa"=>"Saudi Arabia (&#8235;المملكة العربية السعودية&#8236;&lrm;)",
												"sn"=>"Senegal (Sénégal)",
												"rs"=>"Serbia (Србија)",
												"sc"=>"Seychelles",
												"sl"=>"Sierra Leone",
												"sg"=>"Singapore",
												"sx"=>"Sint Maarten",
												"sk"=>"Slovakia (Slovensko)",
												"si"=>"Slovenia (Slovenija)",
												"sb"=>"Solomon Islands",
												"so"=>"Somalia (Soomaaliya)",
												"za"=>"South Africa",
												"kr"=>"South Korea (대한민국)",
												"ss"=>"South Sudan (&#8235;جنوب السودان&#8236;&lrm;)",
												"es"=>"Spain (España)",
												"lk"=>"Sri Lanka (ශ්&zwj;රී ලංකාව)",
												"sd"=>"Sudan (&#8235;السودان&#8236;&lrm;)",
												"sr"=>"Suriname",
												"sz"=>"Swaziland",
												"se"=>"Sweden (Sverige)",
												"ch"=>"Switzerland (Schweiz)",
												"sy"=>"Syria (&#8235;سوريا&#8236;&lrm;)",
												"tw"=>"Taiwan (台灣)",
												"tj"=>"Tajikistan",
												"tz"=>"Tanzania",
												"th"=>"Thailand (ไทย)",
												"tl"=>"Timor-Leste",
												"tg"=>"Togo",
												"tk"=>"Tokelau",
												"to"=>"Tonga",
												"tt"=>"Trinidad and Tobago",
												"tn"=>"Tunisia (&#8235;تونس&#8236;&lrm;)",
												"tr"=>"Turkey (Türkiye)",
												"tm"=>"Turkmenistan",
												"tc"=>"Turks and Caicos Islands",
												"tv"=>"Tuvalu",
												"vi"=>"U.S. Virgin Islands",
												"ug"=>"Uganda",
												"ua"=>"Ukraine (Україна)",
												"ae"=>"United Arab Emirates (&#8235;الإمارات العربية المتحدة&#8236;&lrm;)",
												"gb"=>"United Kingdom",
												"us"=>"United States",
												"uy"=>"Uruguay",
												"uz"=>"Uzbekistan (Oʻzbekiston)",
												"vu"=>"Vanuatu",
												"va"=>"Vatican City (Città del Vaticano)",
												"ve"=>"Venezuela",
												"vn"=>"Vietnam (Việt Nam)",
												"wf"=>"Wallis and Futuna",
												"ye"=>"Yemen (&#8235;اليمن&#8236;&lrm;)",
												"zm"=>"Zambia",
												"zw"=>"Zimbabwe"
												));
												}}					
											</div>							
										</div>										
									</div>
									<div class="col-md-4 last-col">
										<div class="preview">										
											{{ Form::label('preview', 'Logo Preview') }}		
											<div class="fileupload-preview">
													
											</div>																				
										</div>

										<div class="each-input">
											{{ Form::label('address_2', 'Address 2') }}
											{{ Form::text('address_2', null, array('class'=>'text-input')) }}										
										</div>

										<div class="each-input">
											{{ Form::label('state', 'State/Province') }}
											{{ Form::text('state', null, array('class'=>'text-input')) }}			
										</div>
									</div>
								</div>								
							</div>						
							<div class="extra-content">								
								{{ Form::button('Next', array('id'=>'list-1-next', 'class'=>'next-btn pull-right', 'data-list'=>1)) }}								
							</div>
						</div>
						<!-- LIST 1 END -->

						<!-- LIST 2 -->
						<div id="list-2" class="all-list">
							<div class="header">
								<h3 class="pull-left">LISTING DETAILS</h3>
								<a href="#" id="list-2-prev" class="prev-btn edit-btn pull-right" data-list="2"><i class="edit-icon"></i><span>EDIT LISTING DETAILS</span></a>
							</div>
							<div class="content">								
								<div class="row">
									<div class="col-md-4 first-col">													
										<div class="each-input">
											{{ Form::label('year_established', 'Year Established *') }}
											{{ Form::text('year_established', null, array('class'=>'text-input')) }}												
										</div>
									</div>
									<div class="col-md-4 second-col">									
										<div class="each-input">
											{{ Form::label('no_of_employees', 'No. of Employees *') }}
											{{ Form::text('no_of_employees', null, array('class'=>'text-input')) }}
										</div>																		
									</div>									
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="each-input">
											{{ Form::label('business_nature', 'Nature of Business *') }}
											{{ Form::textarea('business_nature', null, array('class'=>'text-input')) }}										
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-12">
										<div class="each-input">
											{{ Form::label('company_background_info', 'Company Background / Information *') }}
											{{ Form::textarea('company_background_info', null, array('class'=>'text-input')) }}
										</div>
									</div>								
								</div>								
								<div class="row">
									<div class="col-md-12">
										<div class="each-input">
											{{ Form::label('quality_certification', 'Quality Certification *') }}
											{{ Form::textarea('quality_certification', null, array('class'=>'text-input')) }}						
										</div>
									</div>									
								</div>								
							</div>	
							<div class="extra-content">								
								{{ Form::button('Next', array('id'=>'list-2-next', 'class'=>'next-btn pull-right', 'data-list'=>2)) }}	
								{{ Form::button('Back', array('id'=>'list-2-prev', 'class'=>'prev-btn pull-left', 'data-list'=>2)) }}												
							</div>
						</div>
						<!-- LIST-2 END -->
	
						<!-- LIST-3 -->						
						<div id="list-3" class="all-list">
							<div class="header">
								<h3 class="pull-left">LISTING DETAILS</h3>
								<a href="#" id="list-3-prev" class="prev-btn edit-btn pull-right" data-list="3"><i class="edit-icon"></i><span>EDIT LISTING DETAILS</span></a>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-md-12">
										@if(Session::has('list_message'))
										    <p>{{ Session::get('list_message') }}</p>
										@endif
										<ul>
									        @foreach($errors->all() as $error)
									            <li>{{ $error }}</li>
									        @endforeach
									    </ul>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">																							
										<div class="each-input">
											{{ Form::label('bankers', 'Bankers') }}
											{{ Form::text('bankers', null, array('class'=>'text-input')) }}
										</div>
									</div>
									<div class="col-md-6">									
										<div class="each-input">
											{{ Form::label('number_of_offices_worldwide', 'Number of Offices World Wide') }}
											{{ Form::text('number_of_offices_worldwide', null, array('class'=>'text-input')) }}
										</div>
										{{-- <div class="each-input">
											{{ Form::label('key_personnel', 'Key Personnel') }}
											{{ Form::text('key_personnel', null, array('class'=>'text-input')) }}											
										</div>	 --}}			
									</div>									
								</div>																
								<!--<div class="row">									
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('production_capability', 'Production Capability *') }}
											{{ Form::text('production_capability', null, array('class'=>'text-input')) }}
										</div>
									</div>
								</div>-->
								<div class="row">
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('market_established', 'Market/s Established') }}
											{{ Form::text('market_established', null, array('class'=>'text-input')) }}								
										</div>
									</div>
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('market_interested', 'Market/s Interested') }}
											{{ Form::text('market_interested', null, array('class'=>'text-input')) }}
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('main_shareholders', 'Main shareholders/parent company') }}
											{{ Form::text('main_shareholders', null, array('class'=>'text-input')) }}										
										</div>
									</div>
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('links', 'Links to related companies') }}
											{{ Form::text('links', null, array('class'=>'text-input')) }}																				
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-5">
										<div class="each-input">
											{{ Form::label('video', 'Upload Video') }}														
											{{ Form::file('video', null, array('id'=>'video')); }}
											{{ Form::hidden('upload_video', null, array('id'=>'upload_video')); }}
											<span class="video-preview"></span>
											<div class="youtube-upload {{ $authorized }}">
												{{ Form::checkbox('upload_youtube', 'yes', $authorized); }}												
												{{ Form::label('video', 'Upload To YouTube') }}														
											</div>
										</div>
									</div>								
								</div>
								{{ Form::hidden('product_catalog_count', null, array('class'=>'text-input', 'id'=>'product_catalog_count')) }}
								{{ Form::hidden('product_catalog_ids', null, array('class'=>'text-input', 'id'=>'product_catalog_ids')) }}
								<div class="row">
									<div id="all-catalogs" class="col-md-12">
										<div class="each-catalog row" data-catalog="1">
											<div class="fieldset">
												<div class="col-md-6">
													<div class="each-input">
														{{ Form::label('catalog_title_1', 'Catalog Title') }}
														{{ Form::text('product_catalog_title_1', null, array('class'=>'product_catalog_title','id'=>'product_catalog_title_1')); }}
													</div>																									
												</div>
												<div class="col-md-6">
													<div class="each-input">								
														{{ Form::label('catalog_1', 'Catalog File') }}
														{{ Form::hidden('product_catalog_1', null, array('class'=>'product_catalog','id'=>'product_catalog_1')); }}
														{{ Form::file('catalog_1', array('class'=>'catalog_upload','id'=>'catalog_1')); }}
														<span class="uploaded_product_catalog"></span>
													</div>														
												</div>										
											</div>
										</div>
										<div class="each-catalog row" data-catalog="2">
											<div class="fieldset">
												<div class="col-md-6">
													<div class="each-input">
														{{ Form::label('catalog_title_2', 'Catalog Title') }}
														{{ Form::text('product_catalog_title_2', null, array('class'=>'product_catalog_title','id'=>'product_catalog_title_2')); }}
													</div>																											
												</div>
												<div class="col-md-6">
													<div class="each-input">								
														{{ Form::label('catalog_2', 'Catalog File') }}
														{{ Form::hidden('product_catalog_2', null, array('class'=>'product_catalog','id'=>'product_catalog_2')); }}
														{{ Form::file('catalog_2', array('class'=>'catalog_upload','id'=>'catalog_2')); }}
														<span class="uploaded_product_catalog"></span>
													</div>	
												</div>
											</div>
										</div>
									</div>									
								</div>
							</div>	
							<div class="extra-content">				
								<a href="#" class="add-more-product-catalog">Add More Product Catalog +</a>				
								{{ Form::button('Next', array('id'=>'list-3-next', 'class'=>'next-btn pull-right', 'data-list'=>3)) }}	
								{{ Form::button('Back', array('id'=>'list-3-prev', 'class'=>'prev-btn pull-left', 'data-list'=>3)) }}												
							</div>
						</div>
						<!-- LIST-3 END -->

						<!-- LIST-4 -->						
						<div id="list-4" class="all-list">
							<div class="header">
								<h3 class="pull-left">LISTING DETAILS</h3>
								<a href="#" id="list-4-prev" class="prev-btn edit-btn pull-right" data-list="4"><i class="edit-icon"></i><span>EDIT LISTING DETAILS</span></a>
							</div>
							<div class="content">
								<div class="row">
									<div class="col-md-12">
										@if(Session::has('list_message'))
										    <p>{{ Session::get('list_message') }}</p>
										@endif
										<ul>
									        @foreach($errors->all() as $error)
									            <li>{{ $error }}</li>
									        @endforeach
									    </ul>
									</div>
								</div>
								<div class="row">									
									<div class="col-md-6">									
										<div class="each-input">
											{{ Form::label('key_personnel', 'Key Personnel') }}
											{{ Form::text('key_personnel', null, array('class'=>'text-input')) }}											
										</div>										
									</div>
									<div class="col-md-6">										
										<div class="each-input">
											{{ Form::label('paid_up_capital', 'Paid Up Capital') }}
											{{ Form::text('paid_up_capital', null, array('class'=>'text-input')) }}											
										</div>	
																		
									</div>
								</div>																
								<div class="row">
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('major_facilities', 'Major Facilities / Equipment *') }}
											{{ Form::text('major_facilities', null, array('class'=>'text-input')) }}	
										</div>
									</div>
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('major_customers', 'Major Customers / Project History *') }}
											{{ Form::text('major_customers', null, array('class'=>'text-input')) }}
										</div>
									</div>
								</div>
								<div class="row">
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('quality_certification', 'Quality Certification *') }}
											{{ Form::text('quality_certification', null, array('class'=>'text-input')) }}						
										</div>
									</div>
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('production_capability', 'Production Capability *') }}
											{{ Form::text('production_capability', null, array('class'=>'text-input')) }}
										</div>
									</div>
								</div>								
							</div>
							<div class="extra-content">								
								{{ Form::button('Next', array('id'=>'list-4-next', 'class'=>'next-btn pull-right', 'data-list'=>4)) }}	
								{{ Form::button('Back', array('id'=>'list-4-prev', 'class'=>'prev-btn pull-left', 'data-list'=>4)) }}												
							</div>
						</div>
						<!-- LIST-4 END -->

						<!-- LIST-5 -->													
						<div id="list-5" class="all-list">
							<div class="header">
								<h3 class="pull-left">List - Key Products (Non-compulsory)</h3>
								<a href="#" id="list-6-prev" class="prev-btn edit-btn pull-right" data-list="5"><i class="edit-icon"></i><span>EDIT LISTING DETAILS</span></a>
							</div>						
							<div class="content">
								{{ Form::hidden('key_product_count', null, array('class'=>'text-input', 'id'=>'key_product_count')) }}
								{{ Form::hidden('key_product_ids', null, array('class'=>'text-input', 'id'=>'key_product_ids')) }}
								<div class="row">
									<div id="all-products" class="col-md-12">
										<div class="each-product row" data-product="1">
											<div class="fieldset">
												<div class="col-md-6">
													<div class="each-input">
														{{ Form::label('key_product_category_1', 'Category') }}
														<div class="dropdown">
															{{ Form::select('key_product_category_1', array('advertising' => 'Advertising', 'property' => 'Property')); }}						
														</div>
													</div>
													<div class="each-input">
														{{ Form::label('key_product_name_1', 'Product Name') }}
														{{ Form::text('key_product_name_1', null, array('class'=>'product_name text-input')) }}
													</div>
													<div class="each-input">
														{{ Form::label('image_1', 'Image') }}
														{{ Form::hidden('key_product_image_1', null, array('id'=>'key_product_image_1')); }}
														{{ Form::file('image_1', array('class'=>'image_upload','id'=>'image_1')); }}
														<span class="uploaded_product_image"></span>
													</div>
												</div>
												<div class="col-md-6">
													<div class="each-input">											
														{{ Form::label('key_product_subcategory_1', 'Sub-Category') }}
														<div class="dropdown">
														{{ Form::select('key_product_subcategory_1', array('advertising' => 'Advertising', 'property' => 'Property')); }}
														</div>
													</div>
													<div class="each-input">
														{{ Form::label('key_product_specifics_1', 'Product Specifics') }}
														{{ Form::text('key_product_specifics_1', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
													</div>
												</div>
											</div>
										</div>
										<hr class="key-product-seperator">
										<div class="each-product row" data-product="2">
											<div class="fieldset">
												<div class="col-md-6">
													<div class="each-input">
														{{ Form::label('key_product_category_2', 'Category') }}
														<div class="dropdown">
															{{ Form::select('key_product_category_2', array('advertising' => 'Advertising', 'property' => 'Property')); }}	
														</div>
													</div>
													<div class="each-input">
														{{ Form::label('key_product_name_2', 'Product Name') }}
														{{ Form::text('key_product_name_2', null, array('class'=>'product_name text-input')) }}
													</div>
													<div class="each-input">
														{{ Form::label('image_2', 'Image') }}
														{{ Form::hidden('key_product_image_2', null, array('id'=>'key_product_image_2')); }}
														{{ Form::file('image_2', array('class'=>'image_upload','id'=>'image_2')); }}
														<span class="uploaded_product_image"></span>
													</div>
												</div>
												<div class="col-md-6">
													<div class="each-input">											
														{{ Form::label('key_product_subcategory_2', 'Sub-Category') }}
														<div class="dropdown">
														{{ Form::select('key_product_subcategory_2', array('advertising' => 'Advertising', 'property' => 'Property')); }}
														</div>
													</div>
													<div class="each-input">
														{{ Form::label('key_product_specifics_2', 'Product Specifics') }}
														{{ Form::text('key_product_specifics_2', null, array('class'=>'product_specifics text-input', 'placeholder'=>'Product Specifics')) }}
													</div>
												</div>
											</div>
										</div>
									</div>									
								</div>
							</div>
							<div class="extra-content">
								<a href="#" class="add-more-key-product">Add More Key Product +</a>
								{{ Form::submit('Save changes', array('id'=>'list-form-submit','class'=>'pull-right')) }}							
								{{ Form::button('Back', array('id'=>'list-5-prev', 'class'=>'prev-btn pull-left', 'data-list'=>5)) }}
							</div>
						</div>
						<!-- LIST-5 END -->						

					{{ Form::close() }}
				</div>
			</div>
		</div>
	
		<div class="sidebar">
			<div class="sidebar-content">
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h3>FOR PAID LISTINGS</h3>
						</div>			
						<div class="content">
							<p>The following administrators have access to this listing to edit information.</p>
							<ul class="list-of-admin">
								<li><span>Meg Whitman</span><a href="#" class="remove">Remove</a></li>
								<li><span>Sheryl Sandberg</span><a href="#" class="remove">Remove</a></li>
								<li><span>Fred Wilson</span><a href="#" class="remove">Remove</a></li>
								<li><span>David McClure</span><a href="#" class="remove">Remove</a></li>								
							</ul>
							<div class="clear"></div>
						</div>
						<div class="extra-content">
							<a href="#" class="edit-admins">Edit Admins</a>
							<a href="#" class="add-administrator">Add Administrator (Max. 5)</a>
							<!--<div class="list-admin-form">
								{{ Form::text('email', null, array('id'=>'email','class'=>'text-input','placeholder'=>'Email address')) }}
								<a href="#" id="save_admin" class="save_admin">save</a>

								<div class="each-input">
									{{ Form::label('permissions', 'Permissions *') }}
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'logo', Input::get('admin_permissions'), array('id'=>'logo', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions', 'Logo') }}										
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'category', Input::get('admin_permissions'), array('id'=>'category', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Category') }}							
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'address_1', Input::get('admin_permissions'), array('id'=>'address_1', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Address 1') }}										
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'address_2', Input::get('admin_permissions'), array('id'=>'address_2', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Address 2') }}										
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'post_code', Input::get('admin_permissions'), array('id'=>'post_code', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Post Code') }}										
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'location', Input::get('admin_permissions'), array('id'=>'location', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Location') }}									
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'origin_country', Input::get('admin_permissions'), array('id'=>'origin_country', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Country of Origin') }}									
									</div>																		
								</div>

								<div class="each-input">
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'business_nature', Input::get('admin_permissions'), array('id'=>'business_nature', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Nature of Business') }}									
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'year_established', Input::get('admin_permissions'), array('id'=>'year_established', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Year Established') }}									
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'paid_up_capital', Input::get('admin_permissions'), array('id'=>'paid_up_capital', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Paid Up Capital') }}									
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'no_of_employees', Input::get('admin_permissions'), array('id'=>'no_of_employees', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'No of Employees') }}									
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'main_shareholders', Input::get('admin_permissions'), array('id'=>'main_shareholders', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Main shareholders/parent company') }}									
									</div>
									<div class="each-type">
										{{ Form::checkbox('admin_permissions[]', 'links_to_related_companies', Input::get('admin_permissions'), array('id'=>'links', 'class'=>'permission_checkboxes')); }}
										{{ Form::label('admin_permissions[]', 'Links to related companies') }}									
									</div>
									<div class="each-type">
										{{ Form::checkbox('all', true, Input::get('all'), array('id'=>'all')); }}
										{{ Form::label('all', 'Select All / None') }}									
									</div>		
								</div>
							</div>-->
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h3>Add Tags</h3>
						</div>			
						<div id="added_tags" class="content">
							<p class="no-tag">Currently there is no tagg added, please add tags from below.</p>							
						</div>
						<div class="extra-content">
		    				{{ Form::text('tag', null, array('id'=>'tag','class'=>'text-input')) }}
		    				{{ Form::hidden('tags', null, array('class'=>'text-input', 'id'=>'tags')) }}
							<a href="#" id="add_tag" class="add_tag">Add Tag</a>
						</div>
					</div>
				</div>
			</div>
		</div>		
	</div>
</div>
<script type="text/javascript">
  $(document).ready(function(){
  	$('#list-1').show();  	

  	var form = $('#form-list');

  	form.validate({	    
	    rules: {
	        company_name: "required",
	        category: "required",
	        subcategory: "required",
	        address_1: "required",	        
	        post_code: "required",
	        year_established: {
	        	"required" : true,
	        	"number" : true
	        },
	        no_of_employees: {
	        	"required" : true,
	        	"number" : true
	        },
	        business_nature: "required",
	        company_background_info: "required",
	        major_facilities: "required",
	        major_customers: "required",
	        quality_certification: "required",
	        production_capability: "required"	        
	    },
	    errorPlacement: function(error, element) {
		    if (element.attr("name") == "category" || element.attr("name") == "subcategory" ) {
		      // element.parent('.dropdown').after(error);
		      element.parent('.dropdown').after(error);
		    } else {
		      error.insertAfter(element);
		    }
	  	}
	});

	$('.next-btn').on('click', function(e){
		e.preventDefault();
		var nextList = $(this).data('list') + 1;	
		var progress = parseInt(nextList * 20);

		if(form.valid()) {			
			$('.progress-bar').css('width', progress + '%');
			$('.all-list').hide();
			$('#list-'+nextList).show();
		}
	});

	$('.prev-btn').on('click', function(e){
		e.preventDefault();
		var prevList = $(this).data('list') - 1;	
		var progress = parseInt($(this).data('list') * 20) - 20;

		$('.progress-bar').css('width', progress + '%');
		$('.all-list').hide();
		$('#list-'+prevList).show();
	});
    
    // $('#list-2-prev, #list-2-back').on('click', function(e){
    // 	e.preventDefault();    	
    // 	$('#list-1').show();
    // 	$('.all-list').hide();
    // });
    // $('#list-3-prev, #list-3-back').on('click', function(e){
    // 	e.preventDefault();    	
    // 	$('#list-2').show();
    // 	$('.all-list').hide();
    // });

    $('#list-form-submit').on('click', function(e){
    	e.preventDefault();

    	var key_product_count = $('.product_name').filter(function(){
		    return $(this).val();
		}).length;
		var product_catalog_count = $('.product_catalog_title').filter(function(){
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
		$('.product_catalog_title').each(function(index, each_catalog){		
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

    	$('.no-tag').hide();

    	$('#added_tags').append('<p>'+tag+'</p>');
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

            $('.fileupload-preview').html('<img src="{{ URL::to("/") }}/uploads/company_logos/'+data[0]+'" class="img-responsive">');

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

    function product_image_upload() {
    	$('.image_upload').each(function(index, each_product_upload) {
    		var $image_upload = $(this);
	    	$(each_product_upload).uploadifive({
		        'auto'      : true,
		        'fileType'     : 'image/*',
		        'fileSizeLimit' : '5MB',
		        'buttonText'   : 'Upload',
		        'uploadScript' : "{{ route('generic.uploadfiles') }}",
		        'formData'         : {'type' : 'key_product'},
		        'onError'      : function(errorType) {
		            $uploadBtn.uploadifive('cancel', $('.uploadifive-queue-item').first().data('file'));
		            $uploadResponse.text(errorType).css('color','red');
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
		            $image_upload.parent().parent().find('.uploaded_product_image').text(shortText);

		        }
		    });
	    });
    }
    product_image_upload();

	$('.catalog_upload').each(function(index, each_catalog_upload) {
		var $catalog_upload = $(this);
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
	            $catalog_upload.parent().parent().find('.uploaded_product_catalog').text(shortText);
	        }
	    });
	});

	var cloneIndex = $('.each-product').length;
	$('.add-more-key-product').on('click', function(e){
		e.preventDefault();
		cloneIndex++;
		$('.each-product').first().clone(false).addClass('cloned_'+cloneIndex).appendTo('#all-products');

		var $cloned_product = $('.cloned_'+cloneIndex);

		$cloned_product.find('label[for="key_product_category_1"]').attr('for', 'key_product_category_'+cloneIndex);
		$cloned_product.find('#key_product_category_1').attr('id', 'key_product_category_'+cloneIndex).attr('name', 'key_product_category_'+cloneIndex);

		$cloned_product.find('label[for="key_product_name_1"]').attr('for', 'key_product_name_'+cloneIndex);
		$cloned_product.find('#key_product_name_1').attr('id', 'key_product_name_'+cloneIndex).attr('name', 'key_product_name_'+cloneIndex);

		$cloned_product.find('label[for="key_product_subcategory_1"]').attr('for', 'key_product_subcategory_'+cloneIndex);
		$cloned_product.find('#key_product_subcategory_1').attr('id', 'key_product_subcategory_'+cloneIndex).attr('name', 'key_product_subcategory_'+cloneIndex);

		$cloned_product.find('label[for="key_product_specifics_1"]').attr('for', 'key_product_specifics_'+cloneIndex);
		$cloned_product.find('#key_product_specifics_1').attr('id', 'key_product_specifics_'+cloneIndex).attr('name', 'key_product_specifics_'+cloneIndex);

		$cloned_product.find('label[for="image_1"]').attr('for', 'image_'+cloneIndex);
		$cloned_product.find('#key_product_image_1').attr('id', 'key_product_image_'+cloneIndex).attr('name', 'key_product_image_'+cloneIndex);
		
		$cloned_product.find('#image_1').remove();
		$cloned_product.find('.uploadifive-button').remove();
		$cloned_product.find('.uploadifive-queue').remove();

		var input = document.createElement('input')
		input.type = "file";
		input.name = "image_"+cloneIndex;
		input.id = "image_"+cloneIndex;

		$cloned_product.find('.uploaded_product_image').before(input);

		var $that = $(input);
		$(input).uploadifive({
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

	            $('input[name=key_product_image_'+cloneIndex+']').val(data[0]);
	            $that.parent().parent().find('.uploaded_product_image').text(shortText);

	        }
	    });

		// product_image_upload();
	});
	
	var catalog_cloneIndex = $('.each-catalog').length;
	$('.add-more-product-catalog').on('click', function(e){
		e.preventDefault();
		catalog_cloneIndex++;
		$('.each-catalog').first().clone(false).addClass('catalog_cloned_'+catalog_cloneIndex).appendTo('#all-catalogs');

		var $cloned_catalog = $('.catalog_cloned_'+catalog_cloneIndex);

		$cloned_catalog.find('label[for="catalog_title_1"]').attr('for', 'catalog_title_'+catalog_cloneIndex);
		$cloned_catalog.find('#product_catalog_title_1').attr('id', 'product_catalog_title_'+catalog_cloneIndex).attr('name', 'product_catalog_title_'+catalog_cloneIndex);

		$cloned_catalog.find('label[for="catalog_1"]').attr('for', 'catalog_'+catalog_cloneIndex);
		$cloned_catalog.find('#product_catalog_1').attr('id', 'product_catalog_'+catalog_cloneIndex).attr('name', 'product_catalog_'+catalog_cloneIndex);
		
		$cloned_catalog.find('#catalog_1').remove();
		$cloned_catalog.find('.uploadifive-button').remove();
		$cloned_catalog.find('.uploadifive-queue').remove();

		var input = document.createElement('input')
		input.type = "file";
		input.name = "catalog_"+catalog_cloneIndex;
		input.id = "catalog_"+catalog_cloneIndex;

		$cloned_catalog.find('.uploaded_product_catalog').before(input);

		var $that = $(input);
		$(input).uploadifive({
	        'auto'      : true,
	        'fileType'     : 'image/*',
	        'fileSizeLimit' : '5MB',
	        'buttonText'   : 'Upload',
	        'uploadScript' : "{{ route('generic.uploadfiles') }}",
	        'formData'         : {'type' : 'product_catalogs'},
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

	            $('input[name=product_catalog_'+catalog_cloneIndex+']').val(data[0]);
	            $that.parent().parent().find('.uploaded_product_catalog').text(shortText);

	        }
	    });

	});

	if($.cookie("formValueCookie")) {
		var formValueArr = JSON.parse($.cookie('formValueCookie'));
		$.each(formValueArr, function(counter,field) {

			if(field.name=='category' || field.name=='subcategory' || field.name=='country' || field.name=='origin_country') {				
				$('select[name='+field.name+']').val(field.value);
			}else if(field.name=='type') {
				$('input[value='+field.value+']').prop('checked', true);
			}else
				$('input[name='+field.name+']').val(field.value);
			
		});
	}

	$('input[name="upload_youtube"]').on('click', function(e){
		if($(this).prop('checked')) {
			

			$.cookie('formValueCookie', JSON.stringify(form.serializeArray()), {
	            expires: 365
	        });	        

			window.location.href = "{{ route('list.index', array('upload_youtube' => true)) }}";


		}else {
			$.removeCookie('formValueCookie'); 
		}
	});


	$('.add-administrator').on('click', function(e){

	});

  });
</script>
@stop