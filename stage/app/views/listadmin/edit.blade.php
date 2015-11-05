@section('content')
<div id="list-admin">
	<div class="container">

		<div class="listing-details">
			<div class="row">
				<div class="col-md-12">					
					<div class="header">
						<h3 class="pull-left">Edit Admins</h3>
						<a href="{{ URL::to('listadmin/') }}" class="edit-btn pull-right"><span>BACK TO MY ASSIGN ADMIN</span></a>
					</div>
					<div class="content">						

						<div class="row">
							<div class="col-md-12">																							
									
								<div id="add_admin" class="row">
									<div class="col-md-12">		
										{{ Form::open( ['route' => ['listadmin.update', $listadmin->id], 'method' => 'PUT', 'id' => 'assign-admin' ]) }}

											<h5>Edit Administrator:</h5>

											@if(Session::has('message'))
									        	<h5 class="alert">{{ Session::get('message') }}</h5>					        				        
									        @endif

									        <ul>
										        @foreach($errors->all() as $error)
										            <li>{{ $error }}</li>
										        @endforeach
										    </ul>
											
											<div class="each-input">
												<div class="row">
													<div class="col-md-6">
														{{ Form::label('email', 'User Email *') }}
														<div class="email-check">
															{{ Form::text('email', $listadmin->users->email, array('class'=>'text-input')) }}
															<i id="email-check" class=""></i>															
														</div>
													</div>
												</div>
											</div>								

											<div class="each-input">
												{{ Form::label('permissions', 'Permissions *') }}

												<?php 
													$permissions_str = str_replace(array( '[', ']' ), '', $listadmin->admin_permissions);
													$permissions_str = str_replace('"', '', $permissions_str);
												 	$permissions_arr = explode(',', $permissions_str) 
												 ?>

												<div class="row">
													<div class="col-md-6">
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'type', in_array('type', $permissions_arr), array('id'=>'type', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions', 'Type') }}										
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'company_name', in_array('company_name', $permissions_arr), array('id'=>'company_name', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions', 'Company Name') }}										
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'logo', in_array('logo', $permissions_arr), array('id'=>'logo', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions', 'Logo') }}										
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'category', in_array('category', $permissions_arr), array('id'=>'category', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Category') }}							
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'subcategory', in_array('subcategory', $permissions_arr), array('id'=>'subcategory', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Sub Category') }}							
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'address_1', in_array('address_1', $permissions_arr), array('id'=>'address_1', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Address 1') }}										
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'address_2', in_array('address_2', $permissions_arr), array('id'=>'address_2', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Address 2') }}										
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'city', in_array('city', $permissions_arr), array('id'=>'city', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'City') }}										
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'industry_estate', in_array('industry_estate', $permissions_arr), array('id'=>'industry_estate', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Industry Estate') }}										
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'post_code', in_array('post_code', $permissions_arr), array('id'=>'post_code', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Post Code') }}										
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'state', in_array('state', $permissions_arr), array('id'=>'state', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'State') }}										
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'country', in_array('country', $permissions_arr), array('id'=>'country', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Location') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'origin_country', in_array('origin_country', $permissions_arr), array('id'=>'origin_country', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Country of Origin') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'upload_video', in_array('upload_video', $permissions_arr), array('id'=>'upload_video', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Upload Video') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'major_facilities', in_array('major_facilities', $permissions_arr), array('id'=>'major_facilities', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Major Facilities') }}									
														</div>
													</div>
													<div class="col-md-6">
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'business_nature', in_array('business_nature', $permissions_arr), array('id'=>'business_nature', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Nature of Business') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'year_established', in_array('year_established', $permissions_arr), array('id'=>'year_established', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Year Established') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'company_background_info', in_array('company_background_info', $permissions_arr), array('id'=>'company_background_info', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Company Background Info') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'paid_up_capital', in_array('paid_up_capital', $permissions_arr), array('id'=>'paid_up_capital', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Paid Up Capital') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'no_of_employees', in_array('no_of_employees', $permissions_arr), array('id'=>'no_of_employees', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'No of Employees') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'quality_certification', in_array('quality_certification', $permissions_arr), array('id'=>'quality_certification', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'No of Employees') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'production_capability', in_array('production_capability', $permissions_arr), array('id'=>'production_capability', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Production Capability') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'bankers', in_array('bankers', $permissions_arr), array('id'=>'bankers', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Bankers') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'market_established', in_array('market_established', $permissions_arr), array('id'=>'market_established', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Market Established') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'main_shareholders', in_array('main_shareholders', $permissions_arr), array('id'=>'main_shareholders', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Main shareholders/parent company') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'market_interested', in_array('market_interested', $permissions_arr), array('id'=>'market_interested', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Market Interested') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'number_of_offices_worldwide', in_array('number_of_offices_worldwide', $permissions_arr), array('id'=>'number_of_offices_worldwide', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Number of Offices Worldwide') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'links_to_related_companies', in_array('links_to_related_companies', $permissions_arr), array('id'=>'links_to_related_companies', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Links to related companies') }}									
														</div>														
														<div class="each-type">
															{{ Form::checkbox('admin_permissions[]', 'major_customers', in_array('major_customers', $permissions_arr), array('id'=>'major_customers', 'class'=>'permission_checkboxes')); }}
															{{ Form::label('admin_permissions[]', 'Major Customers') }}									
														</div>
														<div class="each-type">
															{{ Form::checkbox('all', true, Input::get('all'), array('id'=>'all')); }}
															{{ Form::label('all', 'Select All / None') }}									
														</div>		
													</div>
												</div>
																																						
											</div>
											
											{{ Form::hidden('list_id', $listadmin->list_id, ['id'=>'list_id']) }}
											{{ Form::submit('Save changes', array('id'=>'list-form-submit','class'=>'')) }}

										{{ Form::close() }}

									</div>
								</div>

							</div>
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