@extends('main')

@section('title', '| All Job Offers')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Job Offers</h1>
		</div>

		<div class="col-md-2 btn-h1-spacing">
			<a href="{{ route('joboffers.create') }}" class="btn btn-lg btn-block btn-primary ">Add New Job Offer</a>
		</div>
		<hr>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Experience Required</th>
					<th>Applicants and their status: </th>
					<th></th>
				</thead>
				<tbody>
					@foreach($joboffers as $joboffer)

						<tr>
							<th>{{$joboffer->id}}</th>
							<td>{{$joboffer->name}} has 
								@foreach($joboffer->candidate as $candidate)
								<!--<span class="lead"> {{ $candidate->distinct($candidate->candidate_id)->count() }}</span> candidates</td>-->
								@endforeach
							<td>{{$joboffer->experience_requiered}}</td>
							<td>
								@foreach($joboffer->candidate as $candidate)
									<p class="lead">{{ $candidate->name }} | {{$candidate->status}}</p>
		
								@endforeach
							</td>

							<td><a href="{{ route('joboffers.show', $joboffer->id) }}" class="btn btn-default">View</a><a href="{{ route('joboffers.edit', $joboffer->id) }}" class="btn btn-default">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			

		</div>
		
	</div>

@endsection