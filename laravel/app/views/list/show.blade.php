@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Showing List {{ $id }}</h3>
		  	<div class="table-responsive">
			    <table class="table table-hover">
			      	<thead>
			         	<tr>
				            <th>List Type</th>
				            <th>Company name</th>
				            <th>Company logo</th>
				            <th>Category</th>
				            <th>Sub category</th>
				            <th>Address 1</th>
				            <th>Address 2</th>
				            <th>City</th>
				            <th>Postal code</th>
				            <th>State/Province</th>
				            <th>Country</th>
				            <th>Country of Origin</th>
				            <th>Nature of Business</th>
				            <th>Year Established</th>
				            <th>Company Background / Information</th>
				            <th>Paid Up Capital</th>
				            <th>No. of Employees</th>
				            <th>Quality Certification</th>
				            <th>Production Capability</th>
				            <th>Bankers</th>
				            <th>Market/s Established</th>
				            <th>Main Shareholders / Parent Company</th>
				            <th>Market/s Interested</th>
				            <th>Number of offices worldwide</th>
				            <th>Links to related companies</th>
				            <th>Uploaded Video</th>
				            <th>Major Facilities / Equipment</th>
				            <th>Major Customers / Project History</th>
				            <th>List Created Date</th>
			         	</tr>
			      	</thead>
			      	<tbody>
				      	@if($list->count() > 0)
		                    <tr class="even">
	                      		<td>{{ $list->type }}</td>
	                      		<td>{{ $list->company_name }}</td>
	                      		<td>@if(!empty($list->logo)) {{ HTML::image('uploads/profile_photos/'.$list->logo) }} @endif</td>
	                      		<td>{{ $list->category }}</td>
	                      		<td>{{ $list->subcategory }}</td>
	                      		<td>{{ $list->address_1 }}</td>
	                      		<td>{{ $list->address_2 }}</td>
	                      		<td>{{ $list->city }}</td>
	                      		<td>{{ $list->post_code }}</td>
	                      		<td>{{ $list->state }}</td>
	                      		<td>{{ $list->country }}</td>
	                      		<td>{{ $list->origin_country }}</td>
	                      		<td>{{ $list->business_nature }}</td>
	                      		<td>{{ $list->year_established }}</td>
	                      		<td>{{ $list->company_background_info }}</td>
	                      		<td>{{ $list->paid_up_capital }}</td>
	                      		<td>{{ $list->no_of_employees }}</td>
	                      		<td>{{ $list->quality_certification }}</td>
	                      		<td>{{ $list->production_capability }}</td>
	                      		<td>{{ $list->bankers }}</td>
	                      		<td>{{ $list->market_established }}</td>
	                      		<td>{{ $list->main_shareholders }}</td>
	                      		<td>{{ $list->market_interested }}</td>
	                      		<td>{{ $list->number_of_offices_worldwide }}</td>
	                      		<td>{{ $list->links_to_related_companies }}</td>
	                      		<td>
	                      			<a href="/uploads/videos/{{ $list->upload_video }}" download="{{ $list->upload_video }}">{{ $list->upload_video }}</a>
	                      		</td>
	                      		<td>{{ $list->major_facilities }}</td>
	                      		<td>{{ $list->major_customers }}</td>
	                      		<td>{{ date("Y-m-d",strtotime($list->created_at)) }}</td>
		                    </tr>
		                @else
							<div class="col-xs-6 col-sm-4 col-md-3 image">
								<p>No list to display!</p>
		                  	</div>
		                @endif
			      	</tbody>
			   	</table>
		  	</div><!-- table-responsive -->
		</div>    
	</div>
	<div class="row">
		<div class="col-md-12">
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-6">
			@if($list->keyproduct->count() > 0)
				@foreach($list->keyproduct as $keyproduct)
				<ul>
					<li>Key Product : {{ $keyproduct->id }}</li>
					<li>Key Product Category : {{ $keyproduct->category }}</li>
					<li>Key Product Sub Category : {{ $keyproduct->subcategory }}</li>
					<li>Key Product Name : {{ $keyproduct->product_name }}</li>
					<li>Key Product Specifics : {{ $keyproduct->product_specifics }}</li>
					<?php $ext = pathinfo($keyproduct->image, PATHINFO_EXTENSION); ?>
					@if($ext=='jpg'||$ext=='png'||$ext=='gif'||$ext=='jpeg')
						<li>Key Product Image : {{ HTML::image('uploads/key_products/'.$keyproduct->image) }}</li>
					@else
						<li>Key Product Image : <a href="/uploads/key_products/{{ $keyproduct->image }}">{{ $keyproduct->image }}</a></li>
					@endif					
				</ul>
				@endforeach
			@endif
			<hr>
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-6">
			@if($list->productcatalog->count() > 0)
				@foreach($list->productcatalog as $productcatalog)
				<ul>
					<li>Product Catalog : {{ $productcatalog->id }}</li>
					<li>Product Catalog Title : {{ $productcatalog->title }}</li>
					<?php $ext = pathinfo($productcatalog->file, PATHINFO_EXTENSION); ?>
					@if($ext=='jpg'||$ext=='png'||$ext=='gif'||$ext=='jpeg')
						<li>Product Catalog Image : {{ HTML::image('uploads/product_catalogs/'.$productcatalog->file) }}</li>
					@else
						<li>Product Catalog Image : <a href="/uploads/product_catalogs/{{ $productcatalog->file }}">{{ $productcatalog->file }}</a></li>
					@endif
				</ul>
				@endforeach
			@endif
		</div>
	</div>
	<div class="row">
		<div class="col-md-6 col-md-offset-6">
			@if($list->tags->count() > 0)
				@foreach($list->tags as $tag)
				<ul>
					<li>Tag : {{ $tag->id }}</li>
					<li>Tag Name : {{ $tag->name }}</li>
				</ul>
				@endforeach
			@endif
		</div>
	</div>
</div>
@stop