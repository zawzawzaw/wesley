@section('banner')
	@if(!Auth::check())
		<div id="home-banner">
		  	<div class="banner-caption">
				<div class="caption-text">
					<h1>Your Bridge to The World of Japanese Business</h1>
					<p>An Internet-leading Directory Service</p>
				</div>
			</div>
		</div>
	@endif
@stop
@section('content')
	@if(Auth::check())
		<div id="message-widget">
			<div class="heading">
				<a href="#" class="message"><i class="msg"></i><span>New Messages</span><span class="updated-time">Last update 12:34 pm | 20 Dec 2014</span></a>
				<a href="#" class="view-all">View all</a>
			</div>
			<div class="content">
				<ul class="message-table">
					<li>
						<div class="left">
							<span class="status"></span>
						</div>
						<div class="middle">
							<span class="from">Hitachi Cables Pte Ltd</span>
							<span class="subj">Request for quotation by Hitachi</span>	
						</div>
						<div class="right">
							<span class="date">20/12/14</span>
						</div>
						<p class="shot-msg">Dear sir, I would like to invite you to submit but we could probably wrap it up by next week</p>
					</li>
					<li>
						<div class="left">
							<span class="status"></span>
						</div>
						<div class="middle">
							<span class="from">Hitachi Cables Pte Ltd</span>
							<span class="subj">Request for quotation by Hitachi</span>	
						</div>
						<div class="right">
							<span class="date">20/12/14</span>
						</div>
						<p class="shot-msg">Dear sir, I would like to invite you to submit but we could probably wrap it up by next week</p>
					</li>
					<li>
						<div class="left">
							<span class="status"></span>
						</div>
						<div class="middle">
							<span class="from">Hitachi Cables Pte Ltd</span>
							<span class="subj">Request for quotation by Hitachi</span>	
						</div>
						<div class="right">
							<span class="date">20/12/14</span>
						</div>
						<p class="shot-msg">Dear sir, I would like to invite you to submit but we could probably wrap it up by next week</p>
					</li>
				</ul>
			</div>
		</div>

		<div id="analytics-widget">
			<div class="heading">
				<a href="#" class="message"><i class="analytics"></i><span>overall analytics</span><span class="updated-time">Last update 12:34 pm | 10 Sep 2014</span></a>
				<ul>
					<li>Today</li>
					<li>Week</li>
					<li>Month</li>
				</ul>			
			</div>		
		</div>

		<div id="analytics-details-widget">
			<div class="heading">
				<a href="#" class="message"><i></i><span>analytics</span><span class="updated-time">Update Weekly, Last Updated 12:00 am | 10 Dec 2014</span></a>
				<a href="#">View all</a>			
			</div>
			<div class="content">
				<div class="col-md-4">
					<h5>no. of paged viewed</h5>
				</div>
				<div class="col-md-4">
					<h5>no. of pdf downloaded</h5>
				</div>
				<div class="col-md-4">
					<h5>no. of messages received</h5>
				</div>
			</div>
		</div>

		<div id="recently-viewed-widget">
			<div class="heading">
				<a href="#" class="message"><i></i><span>Recently Viewed</span><span class="updated-time">Last update 12:34 pm | 10 Dec 2014</span></a>
				<a href="#">View all</a>			
			</div>
			<div class="content">
				<ul>
					<li>
						<div class="each-col">
							<i class="category category-1"></i>
						</div>
						<div class="each-col">
							<p>Hitachi Powdered Metal</p>
						</div>
						<div class="each-col">
							<p class="date">10/12/14</p>
						</div>
					</li>
					<li>
						<div class="each-col">
							<i class="category category-1"></i>
						</div>
						<div class="each-col">
							<p>Hitachi Powdered Metal</p>
						</div>
						<div class="each-col">
							<p class="date">10/12/14</p>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div id="recently-viewed-widget">
			<div class="heading">
				<a href="#" class="recently-viewed"><i></i><span>Favourite Companies</span><span class="updated-time">Last update 12:34 pm | 10 Dec 2014</span></a>
				<a href="#">View all</a>			
			</div>
			<div class="content">
				<ul>
					<li class="header">
						<div class="each-col">
							<h5>Company</h5>
						</div>
						<div class="each-col">
							<h5>Key Products</h5>
						</div>
					</li>
					<li>
						<div class="each-col">
							<p>Idemitsu Lube</p>
						</div>
						<div class="each-col">
							<p>Lubricants, Oil - Petrleum</p>
						</div>
					</li>
					<li>
						<div class="each-col">
							<p>Idemitsu Lube</p>
						</div>
						<div class="each-col">
							<p>Lubricants, Oil - Petrleum</p>
						</div>
					</li>
					<li>
						<div class="each-col">
							<p>Idemitsu Lube</p>
						</div>
						<div class="each-col">
							<p>Lubricants, Oil - Petrleum</p>
						</div>
					</li>
				</ul>
			</div>
		</div>

		<div id="saved-search-widget">
			<div class="heading">
				<a href="#" class="saved-search"><i></i><span>Saved Search</span><span class="updated-time">Lorem ipsum lor de ilpes io</span></a>
				<a href="#">View all</a>		
			</div>
			<div class="content">
				<ul>
					<li>
						<h5>Wireless Headphone</h5>
						<p>Electronic + Wireless + Devices + 15km + Japan</p>
					</li>
					<li>
						<h5>Lorem Ipsum Electronic Parts</h5>
						<p>Electronic + Wireless + Devices + 15km + Japan</p>
					</li>
					<li>
						<h5>Wireless Headphone</h5>
						<p>Electronic + Wireless + Devices + 15km + Japan</p>
					</li>
					<li>
						<h5>Lorem Ipsum Electronic Parts</h5>
						<p>Electronic + Wireless + Devices + 15km + Japan</p>
					</li>
					<li>
						<h5>Wireless Headphone</h5>
						<p>Electronic + Wireless + Devices + 15km + Japan</p>
					</li>
				</ul>
			</div>
		</div>

		<div id="recommended-for-you">
			<div class="heading">
				<a href="#" class="recommend-for-you"><i></i><span>recommended for you</span><span class="updated-time">Last update 12:34 pm | 10 Dec 2014 </span></a>
				<a href="#">View all</a>
			</div>
			<div class="content">
				<div class="each-recommendation">
					<h5>Based on “Wireless Headphone: <span>Electronic + Wireless + Devices + 15km + Japan</span>”</h5>
					<ul>
						<li><i class="no">1</i><span>DNP Singapore</span></li>
						<li><i class="no">2</i><span>Idemitsu Lube</span></li>
						<li><i class="no">3</i><span>Systems</span></li>
						<li><i class="no">4</i><span>hitachi automotive</span></li>
						<li><i class="no">5</i><span>Smk electronics</span></li>				
					</ul>
				</div>
				<div class="each-recommendation">
					<h5>Based on “Wireless Headphone: <span>Electronic + Wireless + Devices + 15km + Japan</span>”</h5>
					<ul>
						<li><i class="no">1</i><span>DNP Singapore</span></li>
						<li><i class="no">2</i><span>Idemitsu Lube</span></li>
						<li><i class="no">3</i><span>Systems</span></li>
						<li><i class="no">4</i><span>hitachi automotive</span></li>
						<li><i class="no">5</i><span>Smk electronics</span></li>				
					</ul>
				</div>
				<div class="each-recommendation">
					<h5>Based on “Wireless Headphone: <span>Electronic + Wireless + Devices + 15km + Japan</span>”</h5>
					<ul>
						<li><i class="no">1</i><span>DNP Singapore</span></li>
						<li><i class="no">2</i><span>Idemitsu Lube</span></li>
						<li><i class="no">3</i><span>Systems</span></li>
						<li><i class="no">4</i><span>hitachi automotive</span></li>
						<li><i class="no">5</i><span>Smk electronics</span></li>				
					</ul>
				</div>
			</div>
		</div>

		<!--@if(!empty($name))
			<p>Welcome {{ $name }}, <a href="{{ route('message.index') }}">Inbox</a></p>
				
			{{ Form::open(array('route' => array('login.destroy', 0), 'method' => 'delete')) }}
			    <button type="submit" >Log Out</button>
			{{ Form::close() }}
		@endif
		
		@if(Session::has('message'))
		    <p class="alert">{{ Session::get('message') }}</p>
		@endif
		@if(Session::has('signup_message'))
		    <p class="alert">{{ Session::get('signup_message') }}</p>
		@endif-->
	@else
		<div id="first-content" class="container">
				<div class="row">
					<div class="col-md-12">
						<h1>About Us</h1>
						<p>WesleyNet was founded in 2000 as an internet-leading directory service, dedicated to providing decision makers with concise up-to-date and comprehensive information on products & services, Japanese brands & companies in Thailand, Singapore, Malaysia and Indonesia.</p>
						
						{{ HTML::image('images/contents/home-content-1.png', 'about us image', array('class' => '')) }}
					</div>
				</div>
		</div>
		
		<div id="second-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-container">
							<div class="text-content">
								<h1>Exclusively for Japanese Company</h1>

								<p>With over 6,000 Japanese companies and over hundreds of specific categories and sub-categories, WesleyNet.com provides valueable information to decision makers like Managing Directors, Directors, Factory Managers and Purchasing Managers.</p>
							</div>
							<div class="text-content">
								<h1>Neque porro quisquam</h1>

								<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages.</p>
							</div>
						</div>
						<div class="img-container">
							<span class="extra-text"><span class="no">6,000</span> Companies</span>
							<img src="images/contents/home-content-2.png" alt="exclusive image">
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="third-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">						
						<div class="img-container">
							<img src="images/contents/home-content-3.png" alt="exclusive image">
						</div>
						<div class="text-container">
							<div class="text-content">						
								<h1>Over 172 Million Hits Web Traffic</h1>

								<p>With over 6,000 Japanese companies and over hundreds of specific categories and sub-categories, WesleyNet.com provides valueable information to decision makers like Managing Directors, Directors, Factory Managers and Purchasing Managers.</p>
							</div>
							<div class="text-content">
								<h1>Over 57 Million Page View</h1>

								<p>The  2013  revamped  www.wesleynet.com is a bilingual site with English and Japanese as the main languages, thereby allowing Japanese executives to access www.wesleynet.com in their native language, and encouraging repeat visits with this user-friendly improvement. The web pages in the e-catalogue section will also have other languages like Thai, Bahasa Indonesia, Bahasa Malaysia and Vitenamese, in order to serve the purchasing managers/local excutives who are more comfortable in their local language.</p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="fourth-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-container">
							<h1>Wesley Smart Search</h1>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>
						</div>					

						<div class="img-container">
							<img src="images/contents/home-content-4.png" alt="video player">
						</div>		
					</div>
				</div>
			</div>
		</div>

		<div id="fifth-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="text-container">
							<h1>Featured Company</h1>
							<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean commodo ligula eget dolor.</p>
							<ul>
								<li><a href="#" class="cta">Most visited</a></li>
								<li><a href="#" class="cta">Newly added</a></li>
								<li><a href="#" class="cta">Premium company</a></li>
							</ul>
						</div>					

						<div class="img-container">
							<ul>
								<li>
									<div class="img-box"><img src="images/contents/company-image-placeholder.png" class="img-responsive"><div class="caption"><p>Hitachi Powder Metals</p></div></div>
								</li>
								<li>
									<div class="img-box"><img src="images/contents/company-image-placeholder.png" class="img-responsive"><div class="caption"><p>DNP Singapore</p></div></div>
								</li>
								<li>
									<div class="img-box"><img src="images/contents/company-image-placeholder.png" class="img-responsive"><div class="caption"><p>SMK Electronics</p></div></div>
								</li>
								<li>
									<div class="img-box"><img src="images/contents/company-image-placeholder.png" class="img-responsive"><div class="caption"><p>Fuji Electric</p></div></div>
								</li>
								<li>
									<div class="img-box"><img src="images/contents/company-image-placeholder.png" class="img-responsive"><div class="caption"><p>OMRON</p></div></div>
								</li>
								<li>
									<div class="img-box"><img src="images/contents/company-image-placeholder.png" class="img-responsive"><div class="caption"><p>Kurita</p></div></div>
								</li>
							</ul>
						</div>	
					</div>
				</div>
			</div>
		</div>

		<div id="sixth-content">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="#" class="cta join-now">JOIN NOW</a>
						<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
					</div>
				</div>
			</div>
		</div>
	@endif
@stop