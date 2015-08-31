<html>
<head>
	@include('includes.head')
</head>
<body>

<header id="wesley-header" @if(Auth::check())class="inside-header"@endif>
  @include('includes.header')
</header>

@if(Auth::check())
	@include('includes.smartsearch')
@endif

@yield('banner')

<section id="main-content">	 
  @yield('content')
</section>

<footer id="wesley-footer">
  @include('includes.footer')
</footer>

<script type="text/javascript">
  $(document).ready(function(){
  	
  });
</script>
</body>
</html>
