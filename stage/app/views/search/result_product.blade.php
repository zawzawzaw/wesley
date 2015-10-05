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
						<?php $no_filter = true; ?>
						@if(Input::has('text_search'))
							{{ Input::get('text_search', null) }}							
							<?php $no_filter = false; ?>
						@endif								
						@if(Input::has('category'))
							{{ Input::get('category', null) }}
							@if(Input::has('subcategory'))+
							@elseif(Input::has('country'))+
							@elseif(Input::has('origin_country'))+
							@endif
							<?php $no_filter = false; ?>
						@endif
						@if(Input::has('subcategory'))
							{{ Input::get('subcategory', null) }}									
							@if(Input::has('country'))+
							@elseif(Input::has('origin_country'))+
							@endif
							<?php $no_filter = false; ?>
						@endif
						@if(Input::has('country'))
							{{ code_to_country(Input::get('country', null)) }}							
							@if(Input::has('origin_country'))+							
							@endif
							<?php $no_filter = false; ?>
						@endif
						@if(Input::has('origin_country'))
							{{ code_to_country(Input::get('origin_country', null)) }}
						@endif

						@if($no_filter)
							All
						@endif
					</h1>
				</div>

				<div class="first-content">
					@if(Auth::user()->plan == 'free')
					<div class="all-listing-container">
					@else
					<div class="all-listing-container" style="width:100%!important;">
					@endif
						<h5>All Products</h5>
						<div class="dropdown">
							{{
								Form::select('item_limit', array(
								    'all' => 'All',
								    '5' => '5',
								    '10' => '10',
								    '25' => '25',
								    '50' => '50',
								    '100' => '100'
								), Input::get('item_limit', null), array('id' => 'item_limit'));
							}}
						</div>
						<div class="clear"></div>				
						<ul class="premium-listings-table">
							@if($products->getTotal() > 0)
								@if((!Auth::check() || (Auth::check() && Auth::user()->plan == 'free')) && $all_products_count > $products->getTotal() )
								<li>
									<span>There are a total of {{ $all_products_count }} products that match your search. <br>
									Only Premium list products are currently viewable. Please log in or sign up for a subscription to see all available results.</span>
								</li>
								@endif
								@foreach($products as $k => $product)
									<li class="{{ strtolower($product->lists->type) }}">
										<div class="each-col">										
											<span class="category category-1 {{ strtolower($product->lists->category) }}"></span>
										</div>
										<div class="each-col">
											<a href="{{ route('search.show', $product->lists->id) }}">										
												@if($product->image)
													<img src="{{ URL::to('/') }}/uploads/product_catalogs/{{ $product->image }}" alt="">
												@else
													{{ HTML::image('images/contents/company-image-placeholder.png', 'company placeholder', array('class' => 'img-responsive')) }}
												@endif
											</a>
										</div>
										<div class="each-col">
											<h5><a href="{{ route('search.show', $product->lists->id) }}"><span>{{ $product->product_name }}</span> <i class="country {{ strtolower($product->lists->origin_country) }}"></i></a></h5>
											<p>{{ $product->lists->company_name }}</p>
										</div>
										<div class="each-col">
											<ul class="ctas">
												<li><a href="{{ route('search.show', $product->lists->id) }}" class="view-details"><i class="view-details"></i> <span>View Details</span></a></li>
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
					                  		'country' => Input::get('country', null),
					                  		'item_limit' => Input::get('item_limit', null)				                  			
				                  		); 
				                  	?>
									
				                  	{{ Paginator::setPageName('list_page'); }}
				                  	{{ $products->appends($search_params)->links() }}
			                  	</div>
			                @else
			                	<li>
									<span>No product was found.</span>
								</li>					
			                @endif						
						</ul>
					</div>
					@if(Auth::user()->plan == 'free')
						<div class="advertisement">
							<div class="ads-placeholder">
								<span>Upgrade your plan to fully enjoy Specktrm Search</span>
							</div>
						</div>
					@endif
				</div>				
			</div>
		</div>
	</div>
</div>
	<script>
		$(document).ready(function(){
			var old_category = '{{ Input::get("category", null) }}';
			var sub_category = '{{ Input::get("subcategory", null) }}';

			// console.log(old_category); console.log(sub_category)
			if(old_category) {
				$("#category").val(old_category).trigger('change');
				$('#subcategory').val(sub_category);
			}

			$('select[name="item_limit"]').on('change', function(){
				var item_limit = $(this).val();
				var url = '{{ route('search.store', $search_params); }}';

				window.location.href  = url + '&item_limit=' + item_limit;
			});
		});
	</script>
@stop