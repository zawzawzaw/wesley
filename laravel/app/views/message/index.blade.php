@section('content')
	<div class="container">
		<div class="row">
			<div class="col-md-4">
				<h1>Inbox</h1>
				<!-- <h5>You have 2 unread messages.</h5> -->
				@if($convs->count()<=0)
					<p>No new message</p>
				@else
					@foreach($convs as $conv)			
						@foreach($conv->messages as $message)
						<div class="each-coversation" style="border: 1px solid #ccc; margin-bottom: 10px;">
							@if($message->user_id != Auth::user()->id)
							<p>User: {{ User::find($message->user_id)->first_name }}</p>
							<p>Subject : {{ $conv->name }}</p>
							<p>Date: {{ $message->created_at }}</p>
							<p>Message: {{ $message->content }}</p>						
							{{ Form::open(array('url'=>'message', 'class'=>'form-list', 'id'=>'message')) }}			
								{{ Form::textarea('message') }}							
								{{ Form::hidden('reply_to_conv_id', $conv->id) }}
								{{ Form::button('Reply', array('type'=>'submit','value'=>'message','name'=>'form_type','id'=>'reply_msg','class'=>'reply_msg btn btn-large')) }}
							{{ Form::close() }}
							@endif
						</div>
						@endforeach				
					@endforeach
				@endif
			</div>
		</div>
	</div>
	<script>
	$(document).ready(function(){

		var request;
		$('.reply_msg').on('click', function(e){
			e.preventDefault();

			var frm = $(this).closest('form'),
				formData = frm.serialize(),
		        url = frm.attr( "action"),
		        method = frm.attr( "method" );

		    console.log(formData);

			// abort any pending request
			if (request) {
			  	request.abort();
			}

	        request = makeRequest(formData, url , method);

			request.done(function(){
				var result = $.parseJSON(request.responseText);
				
				// if(result) {
					console.log(result);

					frm.prepend('<p id="flash">Your message has been replied.</p>')

					$('#flash').css('color', 'red').delay(500).fadeIn('normal', function() {
				      $(this).delay(2500).fadeOut();
				   	});
				// }
			});
		});

		var makeRequest = function(Data, URL, Method) {

	        var request = $.ajax({
				url: URL,
				type: Method,
				data: Data,
				dataType: "JSON",
				// processData: false,
				success: function(response) {
				  // if success remove current item
				  // console.log(response);
				},
				error: function( error ){
				  // Log any error.
				  console.log( "ERROR:", error );
				}
	      });

	      return request;
	    };    
		
	});
	</script>
@stop	