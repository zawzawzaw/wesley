@section('content')
<div id="list-admin">
	<div class="container">

		<div class="listing-details">
			<div class="row">
				<div class="col-md-12">
					{{ Form::open( ['route' => ['listadmin.store'], 'method' => 'POST', 'id' => 'assign-admin' ]) }}
					<div class="header">
						<h3 class="pull-left">Assign Admins</h3>
						<a href="{{ URL::to('myaccount/') }}" class="edit-btn pull-right"><span>BACK TO MY ACCOUNT</span></a>
					</div>
					<div class="content">
						@foreach($lists as $list)
							<?php $dropdown_list[$list->id] = $list->company_name; ?>
						@endforeach

						<div class="row">
							<div class="col-md-12">							

								<div id="choose_list" class="row">
									<div class="fieldset">
										<div class="col-md-6">
											<div class="each-input">																
												{{ Form::label('list_id', 'Select List *') }}
												<div class="dropdown">
													{{ Form::select('list_id', $dropdown_list, 'default', array('class'=>'list_id', 'id'=>'list_id')); }}
												</div>
											</div>																				
										</div>									
									</div>
								</div>

								<div id="edit_admin" class="row">
									<div class="col-md-12">

										<h5>The following administrators have been assigned to your listing:</h5>

										<ul id="admin_listings">
											<li><span>Meg Whitman</span><a href="#" class="edit">Edit</a> | <a href="#" class="remove">Remove</a></li>
											<li><span>Sheryl Sandberg</span><a href="#" class="edit">Edit</a> | <a href="#" class="remove">Remove</a></li>
											<li><span>Fred Wilson</span><a href="#" class="edit">Edit</a> | <a href="#" class="remove">Remove</a></li>
											<li><span>David McClure</span><a href="#" class="edit">Edit</a> | <a href="#" class="remove">Remove</a></li>								
										</ul>
										<div class="clear"></div>
									</div>
								</div>
									
								<div id="add_admin" class="row">
									<div class="col-md-12">									

										<h5>Add Administrator:</h5>

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
													{{ Form::text('email', null, array('class'=>'text-input')) }}
												</div>
											</div>
										</div>								

										<div class="each-input">
											{{ Form::label('permissions', 'Permissions *') }}

											<div class="row">
												<div class="col-md-6">
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'logo', Input::get('admin_permissions'), array('id'=>'logo', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions', 'Logo') }}										
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'category', Input::get('admin_permissions'), array('id'=>'category', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Category') }}							
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'address_1', Input::get('admin_permissions'), array('id'=>'address_1', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Address 1') }}										
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'address_2', Input::get('admin_permissions'), array('id'=>'address_2', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Address 2') }}										
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'post_code', Input::get('admin_permissions'), array('id'=>'post_code', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Post Code') }}										
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'location', Input::get('admin_permissions'), array('id'=>'location', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Location') }}									
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'origin_country', Input::get('admin_permissions'), array('id'=>'origin_country', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Country of Origin') }}									
													</div>	
												</div>
												<div class="col-md-6">
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'business_nature', Input::get('admin_permissions'), array('id'=>'business_nature', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Nature of Business') }}									
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'year_established', Input::get('admin_permissions'), array('id'=>'year_established', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Year Established') }}									
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'paid_up_capital', Input::get('admin_permissions'), array('id'=>'paid_up_capital', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Paid Up Capital') }}									
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'no_of_employees', Input::get('admin_permissions'), array('id'=>'no_of_employees', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'No of Employees') }}									
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'main_shareholders', Input::get('admin_permissions'), array('id'=>'main_shareholders', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Main shareholders/parent company') }}									
													</div>
													<div class="each-type">
														{{ Form::checkbox('admin_permissions[]', 'links_to_related_companies', Input::get('admin_permissions'), array('id'=>'links', 'class'=>'permission_checkboxes')); }}
														{{ Form::label('admin_permissions[]', 'Links to related companies') }}									
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

	</div>
</div>
<script>
		$(document).ready(function(){
			$('#all').on('click', function(e){
				if($(this).is(':checked'))
					$('.permission_checkboxes').prop('checked', true);				
				else
					$('.permission_checkboxes').prop('checked', false);
			});

			//////

			var form = $('#assign-admin');

		  	form.validate({	    
			    rules: {
			        email: {
			        	"required" : true,
			        	"email" : true
			        },
			        'admin_permissions[]': {
			        	"required" : true	
			        }		        
			    },
			    messages: {
					'admin_permissions[]': "Please specify at least one permission"
				},
			    errorPlacement: function(error, element) {
				    if (element.attr("name") == "admin_permissions[]") {			      
				      element.parent().parent().after(error);
				    } else {
				      error.insertAfter(element);
				    }
			  	}
			});


			//////

			var request;
			var makeRequest = function(Data, URL, Method) {

		    	var request = $.ajax({
				    url: URL,
				    type: Method,
				    data: Data
				});

				return request;
			};

			//////

			var editRequest = false;
			$("#list_id").on('change', function(e){
				
				var list_id = $(this).val();

				//////
				var listadmin_url = '{{ URL::to("listadmin") }}';


				var edit_url = listadmin_url+'/'+list_id+'/edit';

				if(editRequest) {
					request.abort();
				}

				data = {};

				editRequest = makeRequest(data, edit_url, 'GET');

				var html_li = '';

				editRequest.done(function(data, textStatus, jqXHR){
		        	
		        	if(jqXHR.status==200) {

		        		if(data.length <= 0) {
		        			html_li = '<li><span>No admin found.</span></li>';
		        		}
		        		
		        		$.each(data, function(i, each_data){		
		        			html_li += '<li style="display:none;"><span>'+each_data.users.first_name+'</span><a href="'+listadmin_url+'/'+each_data.id+'/edit" class="edit">Edit</a> | <a href="'+listadmin_url+'/'+each_data.id+'" class="remove">Remove</a></li>';	        			
		        		});

		        		$('#admin_listings').html('');

		        		$(html_li).prependTo('#admin_listings').slideDown();

		        		editRequest = false;

		        	}

		        });

		        editRequest.always(function(data, textStatus, jqXHR){

		        	if(jqXHR.status!=200) {
		        		var returnData = $.parseJSON(data.responseText);
			        	
			        	console.log(returnData.message);

			        	editRequest = false;	
		        	}		        	

		        });		



			});
			$("#list_id").trigger('change');


			//////
			//////

			var deleteRequest = false;
			$('#admin_listings').on('click', '.remove', function(e){
				e.preventDefault();

				var that = $(this);

				if (confirm('Are you sure?')) {				

					var current_url = $(this).attr('href');
					console.log(current_url)

					if(deleteRequest) {
						request.abort();
					}

					data = {};

					deleteRequest = makeRequest(data, current_url, 'DELETE');				

					deleteRequest.done(function(data, textStatus, jqXHR){
			        	
			        	if(jqXHR.status==200) {		        			        		

			        		that.parent().remove();

			        		if($('.remove').length<=0) {
			        			$('#admin_listings').append('<li><span>No admin found.</span></li>');
			        		}

			        		deleteRequest = false;

			        	}

			        });

			        deleteRequest.always(function(data, textStatus, jqXHR){

			        	if(jqXHR.status!=200) {
			        		var returnData = $.parseJSON(data.responseText);
				        	
				        	console.log(returnData.message);

				        	deleteRequest = false;	
			        	}		        	

			        });
				}
				
			});			
		
		});
		</script>
@stop