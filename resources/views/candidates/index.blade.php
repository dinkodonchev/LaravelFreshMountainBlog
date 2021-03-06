@extends('main')

@section('title', '| All Candidates')

@section('content')

	<div class="row">
		<div class="col-md-10">
			<h1>All Candidates</h1>
		</div>

		<div class="col-md-2 btn-h1-spacing">
			<a href="{{ route('candidates.create') }}" class="btn btn-lg btn-block btn-primary ">Add A Candidate</a>
		</div>
		<hr>
	</div>

	<div class="row">
		<div class="col-md-12">
			<table class="table">
				<thead>
					<th>#</th>
					<th>Name</th>
					<th>Experience</th>
					<th>Status</th>
					<th>Status per Job</th>
					
					<th></th>
				</thead>
				<tbody>
					@foreach($candidates as $candidate)

						<tr>
							<th>{{$candidate->id}}</th>
							<td>{{$candidate->name}}</td>
							<td>{{$candidate->experience}}</td>
							<td>{{$candidate->status}}</td>

							@php
    							//print_r($statusperjob);
							@endphp
							
							<td>
								{{'ToDo' }}
							</td>
							
							<td><a href="{{ route('candidates.show', $candidate->id) }}" class="btn btn-default">View</a><a href="{{ route('candidates.edit', $candidate->id) }}" class="btn btn-default">Edit</a></td>
						</tr>

					@endforeach

				</tbody>
			</table>

			

		</div>
		
	</div>

@endsection