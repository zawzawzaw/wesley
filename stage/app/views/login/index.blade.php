@section('content')
<div class="container">
    <div class="row">
      <div class="col-md-7">
      	@if(!empty($name))
      		<p>Welcome {{ $name }},

          <a href="{{ route('message.index') }}">Inbox</a>

			{{ Form::open(array('route' => array('login.destroy', 0), 'method' => 'delete')) }}
			    <button type="submit" >Log Out</button>
			{{ Form::close() }}
		@else
        <h1>Login</h1>

        @if(Session::has('login_message'))
        	<p class="alert">{{ Session::get('login_message') }}</p>
        @endif
        {{ Form::open(array('url'=>'login', 'class'=>'form-signin')) }}
			{{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email')) }}
		    {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
		    {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block')) }}
        {{ Form::close() }}
        @endif

      </div>
    </div>
</div>
@stop