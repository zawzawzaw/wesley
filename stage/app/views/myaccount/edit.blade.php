@section('content')
	<div id="my-account">
		<div class="bg"></div>

		<div class="container">
			
			<div class="account-details">
				<div class="row">
					<div class="col-md-12">
						<div class="header">
							<h3 class="pull-left">ACCOUNT PARTICULARS</h3>
							<a href="#" class="edit-btn pull-right"><i class="edit-icon"></i><span>EDIT</span></a>
						</div>
						<div class="content">
							<div class="row">
								<div class="col-md-4">
									<div class="each-input">										
										{{ Form::label('first_name', 'First Name') }}
										{{ Form::text('first_name', Input::get('first_name', $user->first_name)); }}										
									</div>
									<div class="each-input">
										{{ Form::label('email', 'Email (User Name)') }}
										{{ Form::text('email', Input::get('email', $user->email)); }}										
									</div>																
								</div>
								<div class="col-md-4 second-col">
									<div class="each-input">
										{{ Form::label('last_name', 'Last Name') }}
										{{ Form::text('last_name', Input::get('last_name', $user->last_name)); }}
									</div>
									<div class="each-input">
										<label for="password">Password</label>								
										<input type="text" name="password">
									</div>
								</div>
								<div class="col-md-4 last-col">
									<div class="each-input">
										<label for="country">Country</label>			
										<div class="dropdown">
											<select name="country" id="">
												<option value="US">United States</option>
											</select>
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
										<label for="company">Company</label>
										<input name="company" type="text" />
									</div>
									<div class="each-input">
										<label for="address_1">Address 1</label>
										<input name="address_1" type="text" />
									</div>
									<div class="each-input">
										<label for="phone">Phone Number</label>
										<input name="phone" type="text" />
									</div>
									<div class="each-input">
										<label for="staff_strength">Staff Strength</label>
										<div class="dropdown">
											<select name="staff_strength" id="">
												<option value="">Elit, Aenean, Nulla, Luctus</option>
											</select>
										</div>
									</div>																
								</div>
								<div class="col-md-4 second-col">
									<div class="each-input">
										<label for="job_title">Job Title</label>
										<input name="job_title" type="text" />
									</div>
									<div class="each-input">
										<label for="address_2">Address 2</label>								
										<input type="text" name="address_2">
									</div>
									<div class="each-input">
										<label for="profile_photo">Upload Profile Photo</label>			
										<input type="text" name="profile_photo">
									</div>
									<div class="each-input">
										<label for="staff_strength_2">&nbsp;</label>
										<div class="dropdown">
											<select name="staff_strength_2" id="">
												<option value="">Vulputate, felis tellus mollis</option>
											</select>
										</div>
									</div>	
								</div>
								<div class="col-md-4 last-col">
									<div class="each-input"></div>
									<div class="each-input">
										<label for="postal_code">Postal Code</label>								
										<input type="text" name="postal_code">
									</div>															
									<div class="preview">
										<label for="photo_preview">Photo Preview</label>
									
										{{ HTML::image('images/contents/profile-photo-preview.png', 'profile photo', array('class' => 'img-responsive')) }}
									</div>			
								</div>
							</div>
							<div class="row newsletter-container">
								<div class="col-md-6">
									<div class="each-input">
										<input type="checkbox" name="newsletter" id="newsletter"><label for="newsletter">Sign up for newsletter</label>			
									</div>
								</div>								
							</div>
						</div>
						<div class="extra-content">
							<p class="disclaimer pull-left">Upon sign up, email will be sent to the user with account activation link. User must click on the link to activate account.</p>
							<input type="submit" name="submit" value="Save changes" class="pull-right">
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