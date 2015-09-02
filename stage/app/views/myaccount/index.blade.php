@section('content')
	
	<div id="my-account">
		<div class="bg"></div>
		<div class="container">
			
			<div class="account-details">
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h3 class="pull-left">MY ACCOUNT</h3>
							<a href="{{ URL::to('myaccount/' . Auth::user()->id . '/edit') }}" class="edit-btn pull-right"><i class="edit-icon"></i><span>EDIT</span></a>
						</div>
						<div class="content">
							<div class="row">
								<div class="col-md-6">	
									<a href="#"></a>															
								</div>
								<div class="col-md-6">
									
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
							<h3>QUICK VIEW</h3>
						</div>			
						<div class="content">
							<div class="extra-info">
								<span class="updated-date-time">Last updatd 12:34 pm | 10 Sep 2014</a>								
							</div>

							<div class="account-info">
								<h5>Account created</h5>
								<p>24 August 2014</p>
							</div>

							<div class="account-info">
								<h5>Type</h5>
								<p>Paid: Premium Plan</p>
							</div>

							<div class="account-info">
								<h5>industry</h5>
								<p>Banking & Accounting</p>
							</div>

							<div class="account-info">
								<h5>Renewal Reminder</h5>
								<p>24 July 2015</p>
							</div>
						</div>						
					</div>
				</div>				
			</div>		
				
		</div>
	</div>
@stop