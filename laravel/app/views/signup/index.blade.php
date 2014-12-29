@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-7">
        <h1>Sign Up / Update Particulars</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quasi, totam fugit unde vitae molestias ad excepturi odio iure libero voluptas debitis tenetur aliquam magnam minima deleniti assumenda optio officiis in.</p>

        {{ Form::open(array('url'=>'sign-up', 'class'=>'form-signup')) }}
		 	
		 	@if(Session::has('signup_message'))
			    <p class="alert">{{ Session::get('signup_message') }}</p>
			@endif
		    <ul>
		        @foreach($errors->all() as $error)
		            <li>{{ $error }}</li>
		        @endforeach
		    </ul>

		    <div class="inputs">

		    	{{ Form::radio('plan', 'free', true) }}
		    	{{ Form::label('plan', 'Free') }}
		    	{{ Form::radio('plan', 'basic', false) }}
		    	{{ Form::label('plan', 'Basic') }}
		    	{{ Form::radio('plan', 'premium', false) }}
		    	{{ Form::label('plan', 'Premium') }}
	            
	            <a href="#"><span>?</span></a>
          	</div>
		 
		 	<div class="inputs">
		 		{{ Form::label('first_name', 'First name*') }}
		    	{{ Form::text('first_name', null, array('class'=>'text-input', 'placeholder'=>'First Name')) }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('last_name', 'Last name*') }}
		    	{{ Form::text('last_name', null, array('class'=>'text-input', 'placeholder'=>'Last Name')) }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('email', 'Email*') }}
		    	{{ Form::text('email', null, array('class'=>'text-input', 'placeholder'=>'Email Address')) }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('password', 'Password*') }}
		    	{{ Form::password('password', array('class'=>'text-input', 'placeholder'=>'Password')) }}
		    	<span>(minimum 8 characters with at least a numeral and a symbol)</span>
		    </div>
		    <div class="inputs">
		    	{{ Form::label('country', 'Country*') }}
		    	{{ Form::select('country', array('singapore' => 'Singapore', 'malaysia' => 'Malaysia')); }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('company', 'Company') }}
		    	{{ Form::text('company', null, array('class'=>'text-input', 'placeholder'=>'Company')) }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('job_title', 'Job title*') }}
		    	{{ Form::text('job_title', null, array('class'=>'text-input', 'placeholder'=>'Job Title')) }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('address_1', 'Address 1') }}
		    	{{ Form::text('address_1', null, array('class'=>'text-input', 'placeholder'=>'Address 1')) }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('address_2', 'Address 2') }}
		    	{{ Form::text('address_2', null, array('class'=>'text-input', 'placeholder'=>'Address 2')) }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('postal_code', 'Post Code') }}
		    	{{ Form::text('postal_code', null, array('class'=>'text-input', 'placeholder'=>'Post Code')) }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('phone', 'Phone Number') }}
		    	{{ Form::text('phone', null, array('class'=>'text-input', 'placeholder'=>'Phone Number')) }}
		    </div>
		    <div class="inputs">
		    	{{ Form::label('photo', 'Upload profile photo') }}
		    	{{ Form::file('photo', null, array('id'=>'photo')); }}
		    	{{ Form::hidden('profile_photo', null, array('id'=>'profile_photo')); }}
		    	<span class="fileupload-preview"></span>
		    </div>
		    <div class="inputs">
		    	{{ Form::label('newsletter', 'Sign up for newsletter') }}
		    	{{ Form::checkbox('newsletter', 'yes', false); }}
		    </div>
		    <div class="inputs">
	            <span>* compulsory fields</span>
          	</div>          	
		 
		    {{ Form::submit('Register', array('class'=>'btn btn-large')) }}
		{{ Form::close() }}

      </div>
      <div class="col-md-5">
        <h1>Plan comparison</h1>
        <h5>FREE</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>

        <h5>BASIC - US$99 per year</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>

        <h5>PREMIUM - US$149 per year</h5>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio.</p>
      </div>
    </div>
</div>

<script>
	$(document).ready(function(){
		$('#photo').uploadifive({
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

	            $(':hidden[name=profile_photo]').val(data[0]);

	            $('.fileupload-preview').text(shortText);

	        }
	    });
	});
</script>

@stop