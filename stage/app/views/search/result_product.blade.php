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


<div id="search-result">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="heading">
					@if(Session::has('smart_search_message'))
			        	<h5 class="alert">{{ Session::get('smart_search_message') }}</h5>
			        @elseif(Session::has('text_search_message'))
			        	<h5 class="keywords">{{ Session::get('text_search_message') }}</h5>
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
						@if(Input::has('text_search'))
							{{ Input::get('text_search', null) }}
						@endif

						@if(Input::has('category'))
							{{ Input::get('category', null) }} @if(Input::has('subcategory'))+@endif
						@endif
						@if(Input::has('subcategory'))
							{{ Input::get('subcategory', null) }} @if(Input::has('country'))+@endif
						@endif
						@if(Input::has('country'))							
							{{ code_to_country(Input::get('country', null)) }} @if(Input::has('origin_country'))+@endif
						@endif
						@if(Input::has('origin_country'))
							{{ code_to_country(Input::get('origin_country', null)) }}
						@endif
					</h1>
				</div>

				<div class="first-content">
					<h5>Premium Products</h5>
					<ul class="premium-listings-table">
						@if($premium_products->getTotal() > 0)
							@foreach($premium_products as $k => $premium_product)
								<li>
									<div class="each-col">										
										<span class="category category-1 {{ strtolower($premium_product->lists->category) }}"></span>
									</div>
									<div class="each-col">
										<a href="{{ route('search.show', $premium_product->lists->id) }}">										
											@if($premium_product->image)
												<img src="{{ URL::to('/') }}/uploads/product_catalogs/{{ $premium_product->image }}" alt="">
											@else
												{{ HTML::image('images/contents/company-image-placeholder.png', 'company placeholder', array('class' => 'img-responsive')) }}
											@endif
										</a>
									</div>
									<div class="each-col">
										<h5><a href="{{ route('search.show', $premium_product->lists->id) }}"><span>{{ $premium_product->product_name }}</span> <i class="country {{ strtolower($premium_product->lists->origin_country) }}"></i></a></h5>
										<p>{{ $premium_product->lists->company_name }}</p>
									</div>
									<div class="each-col">
										<ul class="ctas">
											<li><a href="{{ route('search.show', $premium_product->lists->id) }}" class="view-details"><i class="view-details"></i> <span>View Details</span></a></li>
											<li><a href="#" class="favourite"><i class="add-to-favourite"></i> <span>Add to favourites</span></a></li>
											<li><a href="#" class="send-messages"><i class="messages"></i> <span>Send message</span></a></li>
										</ul>
									</div>
								</li>
							@endforeach
							
							<div class="pagi">
								<?php 
			                  		$search_params = array(
				                  		'text_search' => Input::get('text_search', null),
				                  		'text_search_filter' => Input::get('text_search_filter', null),
				                  		'form_type' => Input::get('form_type', null),
				                  		'category' => Input::get('category', null),
				                  		'subcategory' => Input::get('subcategory', null),
				                  		'location' => Input::get('location', null),
				                  		'country' => Input::get('country', null)			                  		
			                  		); 
			                  	?>
								
			                  	{{ Paginator::setPageName('premium_page'); }}
			                  	{{ $premium_products->appends($search_params)->links() }}
		                  	</div>
		                @else
		                	<li>
								<span>No premium list was found.</span>
							</li>					
		                @endif						
					</ul>
				</div>

				<div class="second-content">
					<h5>All Products</h5>
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
							@if($products->getTotal() > 0)
								@if(!Auth::check() || (Auth::check() && Auth::user()->plan == 'free'))
									<li>
										<span>There are a total of {{ $products->getTotal() }} listings that match your search. <br>
										Only Premium listings are currently viewable. Please log in or sign up for a subscription to see all available results.</span>
									</li>
								@else
									@foreach($products as $k => $product)
										<li>
											<div class="each-col">
												<span class="category category-1 {{ strtolower($product->lists->category) }}"></span>
											</div>
											<div class="each-col">
												<span class="country {{ strtolower($product->lists->origin_country) }}"></span>
											</div>
											<div class="each-col">
												<p><a href="{{ route('search.show', $product->lists->id) }}">{{ $product->product_name }}</a></p>
											</div>
											<div class="each-col">
												<ul class="ctas">
													<li><a href="{{ route('search.show', $product->lists->id) }}" class="view-details"><i class="view-details"></i></a></li>
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
							<?php $search_params = array(
		                  		'text_search' => Input::get('text_search', null),
		                  		'text_search_filter' => Input::get('text_search_filter', null),
		                  		'form_type' => Input::get('form_type', null),
		                  		'category' => Input::get('category', null),
		                  		'subcategory' => Input::get('subcategory', null),
		                  		'location' => Input::get('location', null),
		                  		'country' => Input::get('country', null)			                  		
		                  		); ?>
							
							{{ Paginator::setPageName('list_page'); }}
		                  	{{ $products->appends($search_params)->links(); }}
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
					<div class="advertisement">
						<div class="ads-placeholder">
							<span>Upgrade your plan to fully enjoy Wesley Search</span>
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

			console.log(old_category); console.log(sub_category)
			if(old_category) {
				$("#category").val(old_category).trigger('change');
				$('#subcategory').val(sub_category);
			}
		});
	</script>
@stop