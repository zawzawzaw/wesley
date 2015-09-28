<div id="smart-search">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				{{ Form::open(array('url'=>'search/result', 'class'=>'form-list')) }}
					<label for="smart_search">Select one or more for smart search</label>
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
							), Input::old('category', null), array('id' => 'category')); 
						}}						
					</div>
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
							), Input::old('subcategory', null), array('id' => 'subcategory'));
						}}
					</div>
					<div class="dropdown">
						{{ 
							Form::select('country', array(
								''=>'Location',
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
							), Input::get('country', null), array('id' => 'country'));
						}}
					</div>
					<div class="dropdown">
						{{ 
							Form::select('origin_country', array(
								''=>'Country of Origin',
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
							), Input::get('origin_country', null), array('id' => 'origin_country'));
						}}
					</div>
					<div class="ctas">
						{{ Form::button('Search', array('type'=>'submit','value'=>'smart','name'=>'form_type','id'=>'form-submit','class'=>'search')) }}
						<a href="{{ URL::to('advancedsearch') }}" class="switch-advance-search"><span>Advanced search</span></a>          
					</div>
					
				{{ Form::close() }}
			</div>
		</div>
	</div>	
</div>