@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			@if(Session::has('signup_message'))
			    <p class="alert">{{ Session::get('signup_message') }}</p>
			@endif
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
			<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, asperiores, assumenda atque impedit perferendis quasi ratione facere reprehenderit quia magnam illum accusamus qui praesentium voluptates quos alias id aperiam architecto.</p>
		</div>
	</div>
</div>
@stop