<html>
<head>
	@include('includes.head')
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-69343158-1', 'auto');
 	ga('create', 'UA-69343158-1', 'auto', 'listpageTracker');
  	ga('send', 'pageview');
</script>
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
