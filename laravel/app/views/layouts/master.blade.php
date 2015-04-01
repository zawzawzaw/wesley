<html>
<head>
	<title>Wesley</title>
	<meta name="title" content="Wesley">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Bootstrap core CSS -->
	{{ HTML::style('//code.jquery.com/ui/1.11.0/themes/smoothness/jquery-ui.css') }}
	{{ HTML::style('//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.css') }}
    {{ HTML::style('css/bootstrap.min.css') }}
    {{ HTML::style('css/uploadifive.css') }}
    {{ HTML::style('css/style.css') }}

	{{ HTML::script('js/jquery/jquery-1.9.1.min.js') }}
	{{ HTML::script('js/libs/jquery.maskedinput.min.js') }}
	{{ HTML::script('js/libs/jquery.validate.min.js') }}
	{{ HTML::script('js/libs/jquery.uploadifive.min.js') }}
	{{ HTML::script('js/libs/placeholders.min.js') }}
    {{ HTML::script('js/wesley/main.js') }}
</head>
<body>

<header id="wesley-header">
  <div class="container">
    <div class="row">
      <div class="col-md-3 col-sm-10 col-xs-10">
        <a href="{{ URL::to('/') }}" class="logo_wesley hidden-sm hidden-xs"><h1>Wesley</h1></a>
      </div>
      <div class="col-md-9 col-sm-2 col-xs-2">        
        <nav id="main-menu">
          <ul>
            <li><a href="{{ route('search.index') }}">Search</a></li>
            <li><a href="{{ route('list.index') }}">List</a></li>
            <li><a href="#">Advertise</a></li>
            <li><a href="{{ route('sign-up.index') }}">Sign Up</a></li>
            <li><a href="{{ route('login.index') }}">Account</a></li>
            <li><a href="#">Contact</a></li>
            @if(Auth::check())
              @if(Auth::user()->admin==1)
                <li><a href="{{ route('admin') }}">Admin</a></li>
              @endif
            @endif
          </ul>
        </nav>
      </div>
    </div>
  </div> 
</header>

<section class="main-content">	
	@yield('content')
</section>

<footer id="wesley-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div id="footer-links">
          <div class="row">
            <div class="col-md-3">
              <div id="social-icons">
                <!-- <div class="title">CONNECT WITH US:</div>
                <ul>
                  <li><a href="#" target="_blank" class="facebook"></a></li>
                  <li><a href="#" target="_blank" class="instagram"></a></li>
                </ul> -->
              </div> <!-- social-icons -->
            </div>
            <div class="col-md-5">
              <ul class="links">
                <li><a href="#">About Wesley Search</a></li>
                <li><a href="#">FAQS</a></li>
                <li><a href="#">Terms of Use</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Account</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
            <div class="col-md-3 col-md-offset-1">
              
            </div>
          </div>
        </div> <!-- footer links -->
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="copywrite-container">
          <hr>
          <p>Copyright © 2014 Wesley.  All Rights Reserved.</p>
        </div>
      </div>
    </div>


  </div>
</footer>

<script type="text/javascript">
  $(document).ready(function(){
  	
  });
</script>
</body>
</html>
