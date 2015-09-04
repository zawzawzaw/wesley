@section('content')
<div id="sign-up">
  <div class="bg"></div>

  <div class="container">
    <div class="account-details">
      <div class="row">
        <div class="col-md-12">
          <div class="header">
            <h3 class="pull-left">LOGIN</h3>           
          </div>
          @if(Session::has('login_message'))
            <p>{{ Session::get('login_message') }}</p>
          @endif
          {{ Form::open(array('url'=>'login', 'class'=>'form-signin')) }}
          <div class="content">
            <div class="row">
              <div class="col-md-6">
                <div class="each-input">
                {{ Form::label('email', 'Email (User Name)') }}
                {{ Form::text('email', null, array('class'=>'input-block-level')) }}
                </div>
                <div class="each-input">
                  {{ Form::label('password', 'Password') }}
                  {{ Form::password('password', array('class'=>'input-block-level')) }}
                </div>
                <div class="each-input">
                  {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block')) }}
                </div>
              </div>
            </div>
          </div>
          {{ Form::close() }}
        </div>
      </div>
    </div>
    <div class="sidebar">
      <div class="row">
        <div class="col-md-12">
          <div class="header">
            <h3>PLAN COMPARISON</h3>
          </div>      
          <div class="content">
            <div class="account-type-info">
              <h4>FREE</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo.</p>
            </div>
            <div class="account-type-info">
              <h4>BASIC - <span class="price">US$99</span> per year</h4>
              <p>Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus.</p>
            </div>
            <div class="account-type-info">
              <h4>PREMIUM - <span class="price">US$149</span> per year</h4>
              <p>Pharetra vulputate, felis tellus mollis orci, sed rhoncus sapien nunc eget odio. enean euismod bibendum laoreet.</p> 
              <p>Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Cum sociis natoque penatibus et magnis dis parturient montes.</p>
            </div>
          </div>            
        </div>
      </div>      
    </div>  
  </div>
@stop


<div id="my-account">
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
            <div class="each-input">
            {{ Form::text('email', null, array('class'=>'input-block-level', 'placeholder'=>'Email')) }}
            </div>
            <div class="each-input">
              {{ Form::password('password', array('class'=>'input-block-level', 'placeholder'=>'Password')) }}
            </div>
            <div class="each-input">
              {{ Form::submit('Login', array('class'=>'btn btn-large btn-primary btn-block')) }}
            </div>
          {{ Form::close() }}
          @endif

        </div>
      </div>
  </div>
</div>