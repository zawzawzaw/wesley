@section('content')
<?php 
 function code_to_country( $code ){

    $code = strtolower($code);

    $countryList = array(
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
		"zw"=>"Zimbabwe");

    if( !$countryList[$code] ) return $code;
    else return $countryList[$code];
}
?>
	<div id="advanced-search">
		<div class="bg"></div>

		<div class="container">
			
			<div class="advanced-search-result">
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							{{-- <h3 class="pull-left">Advanced Search Result</h3>		 --}}
							@if(Session::has('advanced_search_message'))
					        	<h5 class="alert">{{ Session::get('smart_search_message') }}</h5>					        
					        @else
					        	<h5>Result on:</h5><a href="#" class="save-search"><i class="plus"></i> <span>Save Search</span></a>
					        @endif

					        <ul>
						        @foreach($errors->all() as $error)
						            <li>{{ $error }}</li>
						        @endforeach
						    </ul>
							
							<div class="clear"></div>
							
							<h1 class="keywords">
								<?php $no_filter = true; ?>
								@if(Input::has('proximity'))
									Proximity 
									@if(Input::has('industry_estate'))+
									@elseif(Input::has('post_code'))+
									@elseif(!empty(Input::has('multiple_countries')[0]))+
									@endif
									<?php $no_filter = false; ?>
								@endif								
								@if(Input::has('industry_estate'))
									{{ Input::get('industry_estate', null) }}
									@if(Input::has('post_code'))+
									@elseif(!empty(Input::has('multiple_countries')[0]))+
									@endif
									<?php $no_filter = false; ?>
								@endif
								@if(Input::has('post_code'))
									{{ Input::get('post_code', null) }}									
									@if(!empty(Input::has('multiple_countries')[0]))+
									@endif
									<?php $no_filter = false; ?>
								@endif
								@if(Input::has('multiple_countries'))
									<?php $multiple_countries = Input::get('multiple_countries'); $index = 1; ?>						
									@foreach(Input::get('multiple_countries') as $country )										
										@if(!empty($country))
											<?php $no_filter = false; ?>
											{{ code_to_country($country) }} @if($index!==count($multiple_countries))+@endif
										@endif
										<?php $index++; ?>
									@endforeach
								@endif

								@if($no_filter)
									All
								@endif
							</h1>			
						</div>
						<div class="content">
							<div class="first-content">
								<h5>Premium listings</h5>
								<ul class="premium-listings-table">
									@if(isset($premium_lists) && $premium_lists->getTotal() > 0)
										@foreach($premium_lists as $k => $premium_list)
											<li>
												<div class="each-col">										
													<span class="category category-1 {{ strtolower($premium_list->category) }}"></span>
												</div>
												<div class="each-col">										
													@if($premium_list->logo)
														<img src="{{ URL::to('/') }}/uploads/company_logos/{{ $premium_list->logo }}" class="img-responsive" alt="">
													@else
														{{ HTML::image('images/contents/company-image-placeholder.png', 'company placeholder', array('class' => 'img-responsive')) }}											
													@endif
												</div>
												<div class="each-col">
													<h5><span>{{ $premium_list->company_name }}</span> <i class="country {{ strtolower($premium_list->country) }}"></i></h5>
													<p>{{ $premium_list->business_nature }}</p>
												</div>
												<div class="each-col">
													<ul class="ctas">
														<li><a href="{{ route('search.show', $premium_list->id) }}" class="view-details"><i class="view-details"></i> <span>View Details</span></a></li>
														<li><a href="#" class="favourite"><i class="add-to-favourite"></i> <span>Add to favourite</span></a></li>
														<li><a href="#" class="send-messages"><i class="messages"></i> <span>Send messages</span></a></li>
													</ul>
												</div>
											</li>
										@endforeach

										<?php 
					                  		$search_params = array(						                  		
						                  		'proximity' => Input::get('proximity', null),
						                  		'industry_estate' => Input::get('industry_estate', null),
						                  		'post_code' => Input::get('post_code', null),
						                  		'multiple_countries' => Input::get('multiple_countries', null),
						                  		'list_page' => Input::get('list_page', null)				                  		
					                  		); 
					                  	?>
										<div class="pagi">
						                  	{{ Paginator::setPageName('premium_page'); }}
						                  	{{ $premium_lists->appends($search_params)->links() }} 		
					                  	</div>
					                @else
					                	<li>
											<span>No premium list was found.</span>
										</li>					
					                @endif						
								</ul>
							</div>

							<div class="second-content">
								<h5>All listings</h5>
								<div class="all-listing-container">
									<ul class="alphabets">
										<li><a href="#">A</a></li>
										<li><a href="#">B</a></li>
										<li><a href="#">C</a></li>
										<li><a href="#">D</a></li>
										<li><a href="#">E</a></li>
										<li><a href="#">F</a></li>
										<li><a href="#">G</a></li>
										<li><a href="#">H</a></li>
										<li><a href="#">I</a></li>
										<li><a href="#">J</a></li>
										<li><a href="#">K</a></li>
										<li><a href="#">L</a></li>
										<li><a href="#">M</a></li>
										<li><a href="#">N</a></li>
										<li><a href="#">O</a></li>
										<li><a href="#">P</a></li>
										<li><a href="#">Q</a></li>
										<li><a href="#">R</a></li>
										<li><a href="#">S</a></li>
										<li><a href="#">T</a></li>
										<li><a href="#">U</a></li>
										<li><a href="#">V</a></li>
										<li><a href="#">W</a></li>
										<li><a href="#">X</a></li>
										<li><a href="#">Y</a></li>
										<li><a href="#">Z</a></li>
									</ul>					
									<ul class="list-table">
										@if($lists->getTotal() > 0)
											@if(!Auth::check() || (Auth::check() && Auth::user()->plan == 'free'))
												<li>
													<span>There are a total of {{ $lists->getTotal() }} listings that match your search. <br>
													Please log in or sign up for premium account to see these listings.</span>
												</li>
											@else
												@foreach($lists as $k => $list)
													<li>
														<div class="each-col">
															<span class="category category-1 {{ strtolower($list->category) }}"></span>
														</div>
														<div class="each-col">
															<span class="country {{ strtolower($list->country) }}"></span>
														</div>
														<div class="each-col">
															<p>{{ $list->company_name }}</p>
														</div>
														<div class="each-col">
															<ul class="ctas">
																<li><a href="{{ route('search.show', $list->id) }}" class="view-details"><i class="view-details"></i></a></li>
																<li><a href="#" class="favourite"><i class="add-to-favourite"></i></a></li>
																<li><a href="#" class="send-messages"><i class="messages"></i></a></li>
															</ul>
														</div>
													</li>
												@endforeach
											@endif
										@else
											<li>No list was found.</li>              								
						                @endif												
									</ul>
									<div class="pagi">
										<?php
											$search_params = array(						                  		
						                  		'proximity' => Input::get('proximity', null),
						                  		'industry_estate' => Input::get('industry_estate', null),
						                  		'post_code' => Input::get('post_code', null),
						                  		'multiple_countries' => Input::get('multiple_countries', null),	                  		
						                  		'premium_page' => Input::get('premium_page', null)			                  		
					                  		);										 	
					                  	?>
										
										{{ Paginator::setPageName('list_page'); }}
					                  	{{ $lists->appends($search_params)->links(); }}
										{{-- <a href="#" class="page-backward"></a>
										<ul>
											<li><a href="#" class="current">1</a></li>
											<li><a href="#">2</a></li>
											<li><a href="#">3</a></li>
											<li><a href="#">4</a></li>
											<li><a href="#">5</a></li>
											<li><a href="#">...</a></li>							
										</ul>
										<a href="#" class="page-forward"></a> --}}
									</div>
								</div>								
							</div>
						</div>						
					</div>
				</div>
			</div>
		
			<div class="sidebar">
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h3>ADVANCED SEARCH</h3>
						</div>			
						<div class="content">
							{{ Form::open(array('url'=>'advancedsearch/result', 'class'=>'form-list')) }}
								<div class="each-input">
									{{ Form::checkbox('proximity', 'yes', Input::get('proximity')) }}
									{{ Form::label('proximity', 'Proximity (Based on your account location)') }}
								</div>
								<div class="each-input">
									{{ Form::label('industry_estate', 'Industry Estate') }}	
									{{ Form::text('industry_estate', Input::get('industry_estate', null), array('class'=>'text-search input-box','id'=>'industry_estate')) }}
								</div>
								<div class="each-input">
									{{ Form::label('post_code', 'Post Code') }}	
									{{ Form::text('post_code', Input::get('post_code', null), array('class'=>'text-search input-box','id'=>'industry_estate')) }}
								</div>
								<div class="each-input">									
									{{ Form::label('multiple_countries', 'Multiple Countries') }}	
									{{ 
										Form::select('multiple_countries[]', array(
											''=>'Country:',
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
										), Input::get('multiple_countries', null), array('id' => 'multiple_countries', 'multiple' => 'multiple' ))
									}}
								</div>
								<div class="each-input">
									{{ Form::button('Search', array('type'=>'submit','value'=>'smart','name'=>'form_type','id'=>'form-submit','class'=>'search')) }}
								</div>
							{{ Form::close() }}
						</div>						
					</div>
				</div>				
			</div>		
				
		</div>
	</div>
@stop