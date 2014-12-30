@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-12">
			<h3>Latest lists</h3>
 	 		<p>Summary of current lists.</p>
		  	<div class="table-responsive">
			    <table class="table table-hover">
			      	<thead>
			         	<tr>
				            <th>List No.</th>
				            <th>List Type</th>
				            <th>Company Name</th>
				            <th>Logo</th>
				            <th>Category</th>
				            <th>Sub Category</th>
				            <th>Address 1</th>
				            <th>Address 2</th>
				            <th>Post Code</th>
				            <th>Location</th>
				            <th>Origin Country</th>
				            <th>Business Nature</th>
				            <th>Year Established</th>
				            <th>Company Background Info</th>
				            <th>Paid Up Capital</th>
				            <th>No of Employees</th>
				            <th>Quality Cerification</th>
				            <th>Bankers</th>
				            <th>Market Established</th>
				            <th>Main Shareholders</th>
				            <th>Market Interested</th>
				            <th>Number of Offices Worldwide</th>
				            <th>Link to Related Companies</th>
				            <th>Uploaded Video</th>
				            <th>Major Facilities</th>
				            <th>Major Customers</th>
				            <th>List Created Date</th>
				            <th>Action</th>
			         	</tr>
			      	</thead>
			      	<tbody>
				      	@if($lists->count() > 0)
		                  	@foreach($lists as $k => $list)
			                    @if($k % 2 == 0)
				                <tr class="even">
				                @else
				                <tr class="odd">
				                @endif
			                      <td>{{ $list->id }}</td>
			                      <td>{{ $list->type }}</td>
			                      <td>{{ $list->company_name }}</td>
			                      <td>{{ $list->logo }}</td>
			                      <td>{{ $list->category }}</td>
			                      <td>{{ $list->subcategory }}</td>
			                      <td>{{ $list->address_1 }}</td>
			                      <td>{{ $list->address_2 }}</td>
			                      <td>{{ $list->post_code }}</td>
			                      <td>{{ $list->location }}</td>
			                      <td>{{ $list->origin_country }}</td>
			                      <td>{{ $list->business_nature }}</td>
			                      <td>{{ $list->year_established }}</td>
			                      <td>{{ $list->company_background_info }}</td>
			                      <td>{{ $list->paid_up_capital }}</td>
			                      <td>{{ $list->no_of_employees }}</td>
			                      <td>{{ $list->quality_certification }}</td>
			                      <td>{{ $list->bankers }}</td>
			                      <td>{{ $list->market_established }}</td>
			                      <td>{{ $list->main_shareholders }}</td>
			                      <td>{{ $list->market_interested }}</td>
			                      <td>{{ $list->number_of_offices_worldwide }}</td>
			                      <td>{{ $list->links_to_related_companies }}</td>
			                      <td>{{ $list->upload_video }}</td>
			                      <td>{{ $list->major_facilities }}</td>
			                      <td>{{ $list->major_customers }}</td>
			                      <td>{{ date("Y-m-d",strtotime($list->created_at)) }}</td>
			                      <td class="table-action">
			                        <a href="{{ '/admin/lists/'.$list->id }}"><i class="fa fa-pencil"></i></a>
			                      </td>
			                    </tr>
		                  	@endforeach
		                @else
							<div class="col-xs-6 col-sm-4 col-md-3 image">
								<p>No list to display!</p>
		                  	</div>
		                @endif
			      	</tbody>
			   	</table>

			   {{ $lists->links() }}
		  	</div><!-- table-responsive -->
		</div>    
	</div>
</div>
@stop