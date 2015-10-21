@section('content')
	
	<div id="my-account">
		<!--<div class="bg"></div>-->
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
								<div class="col-md-12">	
									@if(Session::has('message'))
							        	<h5 class="alert">{{ Session::get('message') }}</h5>					        				        
							        @endif

							        <ul>
								        @foreach($errors->all() as $error)
								            <li>{{ $error }}</li>
								        @endforeach
								    </ul>

							     	{{ Form::open(array('route' => array('login.destroy', Auth::user()->id), 'method' => 'delete')) }}
								        {{-- <button type="submit" class="btn">Log Out</button> --}}
								    {{ Form::close() }}


								    <a href="{{ route('favourite.index') }}"><button class="btn">View Saved Favourites</button></a>
								    <a href="#"><button class="btn">View RFQs</button></a>
								    <a href="{{ route('mysearch.index') }}"><button class="btn">View Saved Searches</button></a>
								    <a href="#"><button class="btn">View Messages</button></a>								    
								    @if(count($lists) <= 0)
								    	<a href="{{ URL::to('list') }}"><button class="btn">Create Listing</button></a>
								    @else
								    	<a href="{{ route('mylist.index') }}"><button class="btn">My Listings</button></a>
								    @endif
								    <a href="#"><button class="btn">Renew / Upgrade Listing</button></a>
								    <a href="#"><button class="btn">Manage Subscription</button></a>
								    @if(Auth::check() && Auth::user()->plan == 'premium')
								    <a href="#"><button class="btn">Analytics & Reports</button></a>
								    <a href="{{ route('listadmin.index') }}"><button class="btn">Assign Admins</button></a>
								    @endif
								    
								</div>
								{{-- <div class="col-md-6">
									
								</div>		 --}}						
							</div>
						</div>
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
									<span class="updated-date-time">Last updated {{ date('h:i A | d M Y', strtotime(Auth::user()->updated_at) ) }}</a>{{-- 12:34 pm | 10 Sep 2014 --}}
								</div>

								<div class="account-info">
									<h5>Account created</h5>
									<p>{{ date('d M Y', strtotime(Auth::user()->created_at) ) }}</p>
								</div>

								<div class="account-info">
									<h5>Type</h5>
									<p>{{ (Auth::user()->plan=='premium') ? 'Paid: '.ucfirst(Auth::user()->plan) .' Plan' : ucfirst(Auth::user()->plan) .' Plan' }}{{-- Paid: Premium Plan --}}</p>
								</div>

								<div class="account-info">
									<h5>industry</h5>
									<p>{{ Auth::user()->job_title }}</p>
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
	</div>
@stop