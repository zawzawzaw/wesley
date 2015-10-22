@section('content')
	<div id="my-account">
		<!--<div class="bg"></div>-->

		<div class="container">
			
			<div class="account-details">				
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h3 class="pull-left">ACCOUNT PARTICULARS</h3>
							<a href="{{ URL::to('myaccount/') }}" class="edit-btn pull-right"><span>BACK TO MY ACCOUNT</span></a>
						</div>
						@if(Session::has('message'))
				        	<h5>{{ Session::get('message') }}</h5>					        				        
				        @endif

				        <ul>
					        @foreach($errors->all() as $error)
					            <li>{{ $error }}</li>
					        @endforeach
					    </ul>

						{{ Form::open( array('route' => array('myaccount.update', $user->id), 'method' => 'PUT', 'id' => 'my-account-edit' )) }}
						<div class="content">							
							<div class="row">
								<div class="col-md-4">
									<div class="each-input">										
										{{ Form::label('first_name', 'First Name *') }}
										{{ Form::text('first_name', Input::get('first_name', $user->first_name)); }}										
									</div>
									<div class="each-input">
										{{ Form::label('email', 'Email (User Name) *') }}
										{{ Form::text('email', Input::get('email', $user->email)); }}										
									</div>																
								</div>
								<div class="col-md-4 second-col">
									<div class="each-input">
										{{ Form::label('last_name', 'Last Name *') }}
										{{ Form::text('last_name', Input::get('last_name', $user->last_name)); }}
									</div>
									<div class="each-input">
										{{ Form::label('password', 'Password') }}
										{{ Form::password('password'); }}									
									</div>
								</div>
								<div class="col-md-4 last-col">
									<div class="each-input">
										{{ Form::label('country', 'Country *') }}
										
										<div class="dropdown">
											{{ 
												Form::select('country', array(
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
												), Input::get('country', $user->country), array('id' => 'country'));
											}}
										</div>										
									</div>
									<div class="each-input">
										<p>Minimum 8 characters with at least a numeral and a symbol</p>
									</div>							
								</div>
							</div>
							<div class="row">
								<div class="col-md-12">
									<hr class="seperator">
								</div>
							</div>
							<div class="row">
								<div class="col-md-4">
									<div class="each-input">
										{{ Form::label('company', 'Company') }}
										{{ Form::text('company', Input::get('company', $user->company)) }}													
									</div>
									<div class="each-input">
										{{ Form::label('address_1', 'Address 1') }}
										{{ Form::text('address_1', Input::get('address_1', $user->address_1)) }}																							
									</div>									
									<div class="each-input">
										{{ Form::label('city', 'City *') }}
										{{ Form::text('city', Input::get('city', $user->city)) }}																							
									</div>
									<div class="each-input">
										{{ Form::label('phone', 'Phone Number') }}
										{{ Form::text('phone', Input::get('phone', $user->phone)) }}																							
									</div>																
								</div>
								<div class="col-md-4 second-col">
									<div class="each-input">
										{{ Form::label('job_title', 'Job Title *') }}
										{{ Form::text('job_title', Input::get('job_title', $user->job_title)) }}										
									</div>
									<div class="each-input">
										{{ Form::label('address_2', 'Address 2') }}
										{{ Form::text('address_2', Input::get('address_2', $user->address_2)) }}										
									</div>									
									<div class="each-input">										
										{{ Form::label('state', 'State') }}
										{{ Form::text('state', Input::get('state', $user->state)) }}	
									</div>	
									<div class="each-input">
										{{ Form::label('profile_photo', 'Upload Profile Photo') }}
										{{ Form::hidden('profile_photo', Input::get('profile_photo', $user->profile_photo), array('id'=>'profile_photo')); }}
										{{ Form::file('profile_image', array('class'=>'image_upload','id'=>'profile_image')); }}										
									</div>
								</div>
								<div class="col-md-4 last-col">
									<div class="each-input"></div>
									<div class="each-input">
										{{ Form::label('postal_code', 'Postal Code') }}
										{{ Form::text('postal_code') }}																				
									</div>															
									<div class="preview">
										{{ Form::label('photo_preview', 'Photo Preview') }}										
										
										@if(Input::has('profile_photo') || $user->profile_photo)
											{{ HTML::image('/uploads/profile_photos/'.Input::get('profile_photo', $user->profile_photo), 'profile photo', array('class' => 'img-responsive uploaded_profile_image')) }}
										@else
											{{ HTML::image('images/contents/profile-photo-preview.png', 'profile photo', array('class' => 'img-responsive uploaded_profile_image')) }}
										@endif
									</div>			
								</div>
							</div>
							<div class="row newsletter-container">
								<div class="col-md-6">
									<div class="each-input">
										{{ Form::checkbox('newsletter', true, Input::get('newsletter', $user->subscribe_newsletter), array('id'=>'newsletter')); }}
										{{ Form::label('newsletter', 'Sign up for newsletter') }}										
									</div>
								</div>								
							</div>
							
						</div>
						<div class="extra-content">
							<p class="disclaimer pull-left">Upon sign up, email will be sent to the user with account activation link. User must click on the link to activate account.</p>
							{{ Form::submit('Save changes', array('class' => 'pull-right')) }}								
						</div>
						{{ Form::close() }}
					</div>
				</div>
			</div>
		
			<div class="sidebar">
				<div class="sidebar-content">
					<div class="row">
						<div class="col-md-12">
							<div class="header">
								<h3>QUICK VIEW</h3>
							</div>			
							<div class="content">
								<div class="extra-info">
									<span class="updated-date-time">Last updatd {{ date_format($user->updated_at, 'H:i:s | D M Y'); }}</a>								
								</div>

								<div class="account-info">
									<h5>Account created</h5>
									<p>{{ date_format($user->created_at, 'D M Y') }}</p>
								</div>

								<div class="account-info">
									<h5>Type</h5>
									<p>Paid: {{ ucfirst($user->plan) }} Plan</p>
								</div>

								{{-- <div class="account-info">
									<h5>industry</h5>
									<p>Banking & Accounting</p>
								</div> --}}

								{{-- <div class="account-info">
									<h5>Renewal Reminder</h5>
									<p>24 July 2015</p>
								</div> --}}
							</div>						
						</div>
					</div>				
				</div>
			</div>		
				
		</div>
	</div>
	<script>
		var $profile_image = $('#profile_image');
		$('#profile_image').uploadifive({
	        'auto'      : true,
	        'fileType'     : 'image/*',
	        'fileSizeLimit' : '5MB',
	        'buttonText'   : 'Upload',
	        'uploadScript' : "{{ route('generic.uploadfiles') }}",
	        'formData'         : {'type' : 'profile_photo'},
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

	            $('input[name=profile_photo]').val(data[0]);
	            $('.uploaded_profile_image').attr('src', '{{ URL::to("/") }}/uploads/profile_photos/'+data[0]);

	        }
	    });

		///////

		var form = $('#my-account-edit');

	  	form.validate({	    
		    rules: {
		        first_name: "required",
		        last_name: "required",		        	        
		        country: "required",		        	        
		        email: {
		        	"required" : true,
		        	"email" : true
		        },		        	 
		        job_title: "required",
		        city: "required"
		    }
		});
	</script>
@stop