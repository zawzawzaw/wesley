@section('content')
<div id="list-admin">
	<div class="container">

	<div class="listing-details">
		<div class="row">
			<div class="col-md-12">
				{{ Form::open( ['route' => ['listadmin.store'], 'method' => 'POST' ]) }}
				<div class="header">
					<h3 class="pull-left">Assign Admins</h3>
					<a href="{{ URL::to('myaccount/') }}" class="edit-btn pull-right"><span>BACK TO MY ACCOUNT</span></a>
				</div>
				<div class="content">
					@foreach($lists as $list)
						<?php $dropdown_list[$list->id] = $list->company_name; ?>
					@endforeach

					<div class="row">
						<div id="all-products" class="col-md-12">
							<div class="each-product row" data-product="1">
								<div class="fieldset">
									<div class="col-md-6">
										<div class="each-input">																
											{{ Form::label('list_id', 'List *') }}
											<div class="dropdown">
												{{ Form::select('list_id', $dropdown_list, 'default', array('class'=>'list_id', 'id'=>'list_id')); }}
											</div>
										</div>																				
									</div>
									<div class="col-md-6">
										<div class="each-input">
											{{ Form::label('email', 'User Email *') }}
											{{ Form::text('email', null, array('class'=>'text-input')) }}
										</div>
									</div>
								</div>
							</div>
							<div class="row">
								<div class="col-md-6">
									<div class="each-input">
										{{ Form::label('permissions', 'Permissions *') }}
										<div class="each-type">
											{{ Form::checkbox('logo', true, Input::get('logo'), array('id'=>'logo', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('logo', 'Logo') }}										
										</div>
										<div class="each-type">
											{{ Form::checkbox('category', true, Input::get('category'), array('id'=>'category', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('category', 'Category') }}							
										</div>
										<div class="each-type">
											{{ Form::checkbox('address_1', true, Input::get('address_1'), array('id'=>'address_1', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('address_1', 'Address 1') }}										
										</div>
										<div class="each-type">
											{{ Form::checkbox('address_2', true, Input::get('address_2'), array('id'=>'address_2', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('address_2', 'Address 2') }}										
										</div>
										<div class="each-type">
											{{ Form::checkbox('post_code', true, Input::get('post_code'), array('id'=>'post_code', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('post_code', 'Post Code') }}										
										</div>
										<div class="each-type">
											{{ Form::checkbox('location', true, Input::get('location'), array('id'=>'location', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('location', 'Location') }}									
										</div>
										<div class="each-type">
											{{ Form::checkbox('origin_country', true, Input::get('origin_country'), array('id'=>'origin_country', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('origin_country', 'Country of Origin') }}									
										</div>																		
									</div>	
								</div>
								<div class="col-md-6">
									<div class="each-input">
										<div class="each-type">
											{{ Form::checkbox('business_nature', true, Input::get('business_nature'), array('id'=>'business_nature', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('business_nature', 'Nature of Business') }}									
										</div>
										<div class="each-type">
											{{ Form::checkbox('year_established', true, Input::get('year_established'), array('id'=>'year_established', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('year_established', 'Year Established') }}									
										</div>
										<div class="each-type">
											{{ Form::checkbox('paid_up_capital', true, Input::get('paid_up_capital'), array('id'=>'paid_up_capital', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('paid_up_capital', 'Paid Up Capital') }}									
										</div>
										<div class="each-type">
											{{ Form::checkbox('no_of_employees', true, Input::get('no_of_employees'), array('id'=>'no_of_employees', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('no_of_employees', 'No of Employees') }}									
										</div>
										<div class="each-type">
											{{ Form::checkbox('main_shareholders', true, Input::get('main_shareholders'), array('id'=>'main_shareholders', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('main_shareholders', 'Main shareholders/parent company') }}									
										</div>
										<div class="each-type">
											{{ Form::checkbox('links', true, Input::get('links'), array('id'=>'links', 'class'=>'permission_checkboxes')); }}
											{{ Form::label('links', 'Links to related companies') }}									
										</div>
										<div class="each-type">
											{{ Form::checkbox('all', true, Input::get('all'), array('id'=>'all')); }}
											{{ Form::label('all', 'Select All / None') }}									
										</div>		
									</div>
								</div>
							</div>
						</div>
					</div>												
				</div>
				<div class="extra-content">
					{{ Form::submit('Save changes', array('id'=>'list-form-submit','class'=>'')) }}													
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

	<script type="text/javascript">
	$(document).ready(function(){
		$('#all').on('click', function(e){
			if($(this).is(':checked'))
				$('.permission_checkboxes').prop('checked', true);				
			else
				$('.permission_checkboxes').prop('checked', false);
		});
	});
	</script>
</div>
@stop